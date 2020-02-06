<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Repositories\Interfaces\PortfolioRepositoryInterface;
use App\Repositories\Interfaces\PortfolioTagRepositoryInterface;
use App\Repositories\Interfaces\PortfolioStackRepositoryInterface;
use App\Repositories\Interfaces\StackRepositoryInterface;
use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Http\Requests\MassDestroyPortfolioRequest;

class PortfoliosController extends Controller
{
    private $_portfolioRepository;
    private $_portfolioTagRepository;
    private $_portfolioStackRepository;
    private $_stackRepository;

    public function __construct(PortfolioRepositoryInterface $portfolioRepository
        , PortfolioTagRepositoryInterface $portfolioTagRepository
        , PortfolioStackRepositoryInterface $portfolioStackRepository
        , StackRepositoryInterface $stackRepository)
    {
        $this->_portfolioRepository = $portfolioRepository;
        $this->_portfolioTagRepository = $portfolioTagRepository;
        $this->_portfolioStackRepository = $portfolioStackRepository;
        $this->_stackRepository = $stackRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $portfolios = $this->_portfolioRepository->orderBy('name', 'ASC')->paginate(10);

      return view('admin.portfolios.index', compact('portfolios'));
    }

    /**
     * Search in listing.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $filter = array();
        $filter['name_keyword'] = $request->input('name_keyword');

        $portfolios = $this->_portfolioRepository->paginate(10, $filter);

        // dd($portfolios);

        return view('admin.portfolios.index', compact('portfolios', 'filter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userId = Auth::id();

        $portfolioTags = $this->_portfolioTagRepository->all()->pluck('name', 'id');
        $stacks = $this->_stackRepository->orderBy('name', 'ASC')->pluck('name', 'id');

        return view('admin.portfolios.create', compact('userId', 'portfolioTags', 'stacks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePortfolioRequest $request)
    {
      if ($request->hasFile('image')) {
        $slug = Str::slug($request->name, '-');
        $imageFilename = $slug . "." . strtolower($request->file('image')->extension());
        $request->request->add(['image_filename' => $imageFilename]);

        $path = $request->file('image')->storeAs(
          'public/portfolio', $imageFilename
        );
      }

      $portfolio = $this->_portfolioRepository->create($request->all());
      $portfolio->stacks()->sync($request->input('stacks'));

      return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $portfolio = $this->_portfolioRepository->findOrFail($id);

        return view('admin.portfolios.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = $this->_portfolioRepository->findOrFail($id);

        $userId = Auth::id();

        $portfolioTags = $this->_portfolioTagRepository->all()->pluck('name', 'id');
        $stacks = $this->_stackRepository->orderBy('name', 'ASC')->pluck('name', 'id');

        return view('admin.portfolios.edit', compact('portfolio', 'userId', 'portfolioTags', 'stacks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $portfolio = $this->_portfolioRepository->findOrFail($id);
        if($portfolio){
          if ($request->hasFile('image')) {
            $image = storage_path("app/public/portfolio/" . $portfolio->image_filename);
            if(file_exists($image)){
              unlink($image);
            }

            $slug = Str::slug($request->name, '-');
            $imageFilename = $slug . "." . strtolower($request->file('image')->extension());
            $request->request->add(['image_filename' => $imageFilename]);

            $path = $request->file('image')->storeAs(
              'public/portfolio', $imageFilename
            );
          }

          $portfolio->update($request->all());
          $portfolio->stacks()->sync($request->input('stacks'));
        }

        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = $this->_portfolioRepository->findOrFail($id);
        if($portfolio){
          $image = storage_path("app/public/portfolio/" . $portfolio->image_filename);
          if(file_exists($image)){
            unlink($image);
          }
        }

        $portfolio->stacks()->detach();
        $portfolio->delete($id);

        return back()->with('success', 'Portfolio successfully deleted.');
    }

    public function massDestroy(MassDestroyPortfolioRequest $request)
    {
        $this->_portfolioRepository->whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
