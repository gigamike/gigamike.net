<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Interfaces\CertificationRepositoryInterface;

class WelcomeController extends Controller
{
    private $_certificationRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CertificationRepositoryInterface $certificationRepository)
    {
        $this->_certificationRepository = $certificationRepository;
    }

    public function welcome()
    {
        $certifications = $this->_certificationRepository->all();

        return view('welcome', compact('certifications'));
    }
}
