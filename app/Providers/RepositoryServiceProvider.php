<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\UserRepository;

use App\Repositories\Interfaces\RoleRepositoryInterface;
use App\Repositories\RoleRepository;

use App\Repositories\Interfaces\CertificationRepositoryInterface;
use App\Repositories\CertificationRepository;
use App\Repositories\Interfaces\CertificationTagRepositoryInterface;
use App\Repositories\CertificationTagRepository;

use App\Repositories\Interfaces\PortfolioRepositoryInterface;
use App\Repositories\PortfolioRepository;
use App\Repositories\Interfaces\PortfolioTagRepositoryInterface;
use App\Repositories\PortfolioTagRepository;
use App\Repositories\Interfaces\PortfolioStackRepositoryInterface;
use App\Repositories\PortfolioStackRepository;
use App\Repositories\Interfaces\StackRepositoryInterface;
use App\Repositories\StackRepository;


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
      $this->registerCertification();
      $this->registerCertificationTag();
      $this->registerPortfolio();
      $this->registerPortfolioTag();
      $this->registerPortfolioStack();
      $this->registerStack();
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

    public function registerPortfolio()
    {
      $this->app->bind(
          PortfolioRepositoryInterface::class,
          PortfolioRepository::class
      );
    }

    public function registerPortfolioTag()
    {
      $this->app->bind(
          PortfolioTagRepositoryInterface::class,
          PortfolioTagRepository::class
      );
    }

    public function registerPortfolioStack()
    {
      $this->app->bind(
          PortfolioStackRepositoryInterface::class,
          PortfolioStackRepository::class
      );
    }

    public function registerStack()
    {
      $this->app->bind(
          StackRepositoryInterface::class,
          StackRepository::class
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
