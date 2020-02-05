<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Interfaces\CertificationRepositoryInterface;
use App\Repositories\Interfaces\CertificationTagRepositoryInterface;

class CertificationController extends Controller
{
  private $_certificationRepository;
  private $_certificationTagRepository;

  public function __construct(CertificationRepositoryInterface $certificationRepository, CertificationTagRepositoryInterface $certificationTagRepository)
  {
      $this->_certificationRepository = $certificationRepository;
      $this->_certificationTagRepository = $certificationTagRepository;
  }

  public function index(){
      $certifications = $this->_certificationRepository->all();
      $certificationTags = $this->_certificationTagRepository->all()->pluck('name', 'id');

      return view('certification', compact('certifications', 'certificationTags'));
  }
}
