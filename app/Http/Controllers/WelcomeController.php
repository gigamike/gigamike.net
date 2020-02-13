<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Interfaces\CertificationRepositoryInterface;
use App;

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

    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
