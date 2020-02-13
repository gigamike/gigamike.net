<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\Interfaces\CertificationRepositoryInterface;
use App\Repositories\Interfaces\CertificationTagRepositoryInterface;

class CertificationsController extends Controller
{
    private $_certificationRepository;
    private $_certificationTagRepository;

    public function __construct(CertificationRepositoryInterface $certificationRepository, CertificationTagRepositoryInterface $certificationTagRepository)
    {
        $this->_certificationRepository = $certificationRepository;
        $this->_certificationTagRepository = $certificationTagRepository;
    }

    public function index()
    {
      $certifications = $this->_certificationRepository->paginate(10);

      return response()->json($certifications, 201);
    }
}
