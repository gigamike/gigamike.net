<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\UserRepository;
use App\Repositories\Interfaces\RoleRepositoryInterface;
use App\Repositories\RoleRepository;
use App\Repositories\Interfaces\PortfolioRepositoryInterface;
use App\Repositories\PortfolioRepository;
use App\Repositories\Interfaces\CertificationRepositoryInterface;
use App\Repositories\CertificationRepository;
use App\Repositories\Interfaces\CertificationTagRepositoryInterface;
use App\Repositories\CertificationTagRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      $this->registerUser();
      $this->registerRole();
      $this->registerPortfolio();
      $this->registerCertification();
      $this->registerCertificationTag();
    }

    public function registerUser()
    {
      $this->app->bind(
          UserRepositoryInterface::class,
          UserRepository::class,
      );
    }

    public function registerRole()
    {
      $this->app->bind(
          RoleRepositoryInterface::class,
          RoleRepository::class
      );
    }

    public function registerPortfolio()
    {
      $this->app->bind(
          PortfolioRepositoryInterface::class,
          PortfolioRepository::class
      );
    }

    public function registerCertification()
    {
      $this->app->bind(
          CertificationRepositoryInterface::class,
          CertificationRepository::class
      );
    }

    public function registerCertificationTag()
    {
      $this->app->bind(
          CertificationTagRepositoryInterface::class,
          CertificationTagRepository::class
      );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
