<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

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
      if (Cache::has('certification-tags')) {
        $certificationTags = Cache::get('certification-tags');
      }else{
        $certificationTags = $this->_certificationTagRepository->all()->pluck('name', 'id');
        Cache::forever('certification-tags', $certificationTags);
      }

      if (Cache::has('certifications')) {
        $certifications = Cache::get('certifications');
      }else{
        $certifications = $this->_certificationRepository->all();
        Cache::forever('certifications', $certifications);
      }

      return view('certification', compact('certifications', 'certificationTags'));
  }
}
