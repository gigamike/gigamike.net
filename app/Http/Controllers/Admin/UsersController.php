<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\RoleRepositoryInterface;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\MassDestroyUserRequest;

class UsersController extends Controller
{
    private $_userRepository;
    private $_roleRepository;

    public function __construct(UserRepositoryInterface $userRepository, RoleRepositoryInterface $roleRepository)
    {
        $this->_userRepository = $userRepository;
        $this->_roleRepository = $roleRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->_userRepository->paginate(10);

        return view('admin.users.index', compact('users'));
    }

    /**
     * Search in listing.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $filter = array();
        $filter['email'] = $request->input('email');
        $filter['name_keyword'] = $request->input('name_keyword');

        $users = $this->_userRepository->paginate(10, $filter);

        // dd($users);

        return view('admin.users.index', compact('users', 'filter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = $this->_roleRepository->all()->pluck('name', 'id');

        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $user = $this->_userRepository->create(array_merge($request->all(), ['api_token' => Str::random(80),]));

        return redirect()->route('admin.users.index')->with('success', 'User successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->_userRepository->findOrFail($id);

        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->_userRepository->findOrFail($id);

        $roles = $this->_roleRepository->all()->pluck('name', 'id');

        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $user = $this->_userRepository->findOrFail($id);
        if($user){
          if(empty($user->api_token)){
            $user->update(array_merge($request->all(), ['api_token' => Str::random(80),]));
          }else{
            $user->update($request->all());
          }
        }

        return redirect()->route('admin.users.index')->with('success', 'User successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = $this->_userRepository->findOrFail($id);
        $user->delete($id);

        return back()->with('success', 'User successfully deleted.');
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        $this->_userRepository->whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
