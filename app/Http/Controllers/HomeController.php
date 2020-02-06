<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Interfaces\CertificationRepositoryInterface;

class HomeController extends Controller
{
    private $_certificationRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CertificationRepositoryInterface $certificationRepository)
    {
        $this->middleware('auth');
        $this->_certificationRepository = $certificationRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
    }

    public function welcome()
    {
        $certifications = $this->_certificationRepository->all();

        return view('welcome', compact('certifications'));
    }
}
