<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Repositories\Interfaces\CertificationRepositoryInterface;
use App\Repositories\Interfaces\CertificationTagRepositoryInterface;
use App\Http\Requests\StoreCertificationRequest;
use App\Http\Requests\UpdateCertificationRequest;
use App\Http\Requests\MassDestroyCertificationRequest;

class CertificationsController extends Controller
{
    private $_certificationRepository;
    private $_certificationTagRepository;

    public function __construct(CertificationRepositoryInterface $certificationRepository, CertificationTagRepositoryInterface $certificationTagRepository)
    {
        $this->_certificationRepository = $certificationRepository;
        $this->_certificationTagRepository = $certificationTagRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $certifications = $this->_certificationRepository->paginate(10);

      return view('admin.certifications.index', compact('certifications'));
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

        $certifications = $this->_certificationRepository->paginate(10, $filter);

        // dd($certifications);

        return view('admin.certifications.index', compact('certifications', 'filter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userId = Auth::id();

        $certificationTags = $this->_certificationTagRepository->all()->pluck('name', 'id');

        return view('admin.certifications.create', compact('userId', 'certificationTags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCertificationRequest $request)
    {
        if ($request->hasFile('image')) {
          $slug = Str::slug($request->name, '-');
          $imageFilename = $slug . "." . strtolower($request->file('image')->extension());
          $request->request->add(['image_filename' => $imageFilename]);

          $path = $request->file('image')->storeAs(
            'public/certification', $imageFilename
          );
        }

        $certification = $this->_certificationRepository->create($request->all());

        return redirect()->route('admin.certifications.index')->with('success', 'Certification successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $certification = $this->_certificationRepository->findOrFail($id);

        return view('admin.certifications.show', compact('certification'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $certification = $this->_certificationRepository->findOrFail($id);

        $userId = Auth::id();

        $certificationTags = $this->_certificationTagRepository->all()->pluck('name', 'id');

        return view('admin.certifications.edit', compact('certification', 'userId', 'certificationTags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCertificationRequest $request, $id)
    {
        $certification = $this->_certificationRepository->findOrFail($id);
        if($certification){
          if ($request->hasFile('image')) {
            $image = storage_path("app/public/certification/" . $certification->image_filename);
            if(file_exists($image)){
              unlink($image);
            }

            $slug = Str::slug($request->name, '-');
            $imageFilename = $slug . "." . strtolower($request->file('image')->extension());
            $request->request->add(['image_filename' => $imageFilename]);

            $path = $request->file('image')->storeAs(
              'public/certification', $imageFilename
            );
          }

          $certification->update($request->all());
        }

        return redirect()->route('admin.certifications.index')->with('success', 'Certification successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $certification = $this->_certificationRepository->findOrFail($id);
        if($certification){
          $image = storage_path("app/public/certification/" . $certification->image_filename);
          if(file_exists($image)){
            unlink($image);
          }
        }

        $certification->delete($id);

        return back()->with('success', 'Certification successfully deleted.');
    }

    public function massDestroy(MassDestroyCertificationRequest $request)
    {
        $this->_certificationRepository->whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
