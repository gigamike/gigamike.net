@extends('layouts/app')

@section('content')
<!-- Hero Section -->
<div class="container space-2 space-top-md-5 space-top-lg-4">
      <div class="w-lg-80 text-center mx-lg-auto">
        <div class="mb-11">
          <h1 class="display-4 font-weight-semi-bold">About Us</h1>
          <p class="lead font-weight-normal">We're on a mission to simplify cloud computing so developers and their teams can spend more time building software that changes the world.</p>
        </div>
      </div>

      <!-- Gallery Section -->
      <div class="row mx-n2">
        <div class="col-md px-2 mb-3">
          <div class="height-250 bg-img-hero" style="background-image: url(/assets/img/about/480x320/hackmanila2018.jpg);"></div>
        </div>
        <div class="col-md-3 px-2 mb-3">
          <div class="height-250 bg-img-hero" style="background-image: url(/assets/img/about/480x320/uhack2019.jpg);"></div>
        </div>
        <div class="col-md px-2 mb-3">
          <div class="height-250 bg-img-hero" style="background-image: url(/assets/img/about/480x320/johnsonandjohnson.jpg);"></div>
        </div>

        <div class="w-100"></div>

        <div class="col-md px-2 mb-3 mb-md-0">
          <div class="height-250 bg-img-hero" style="background-image: url(/assets/img/about/480x320/peacehackph2016.jpg);"></div>
        </div>
        <div class="col-md-4 px-2 mb-3 mb-md-0">
          <div class="height-250 bg-img-hero" style="background-image: url(/assets/img/about/480x320/dish2019.jpg);"></div>
        </div>
        <div class="col-md px-2">
          <div class="height-250 bg-img-hero" style="background-image: url(/assets/img/about/480x320/breakthefake2019.jpg);"></div>
        </div>
      </div>
      <!-- End Gallery Section -->
    </div>
    <!-- End Hero Section -->

    <!-- Stats Section -->
    <div class="container space-top-1 space-bottom-2 space-bottom-lg-3">
      <div class="row justify-content-lg-center">
        <div class="col-sm-4 col-lg-3 mb-7 mb-sm-0">
          <!-- Stats -->
          <div class="text-center">
            <span class="d-block h2 font-weight-semi-bold text-uppercase mb-0">12</span>
            <span class="text-secondary">years in business</span>
          </div>
          <!-- End Stats -->
        </div>

        <div class="col-sm-4 col-lg-3 mb-7 mb-sm-0">
          <!-- Stats -->
          <div class="text-center">
            <span class="d-block h2 font-weight-semi-bold text-uppercase mb-0">100+</span>
            <span class="text-secondary">products launched</span>
          </div>
          <!-- End Stats -->
        </div>

        <div class="col-sm-4 col-lg-3">
          <!-- Stats -->
          <div class="text-center">
            <span class="d-block h2 font-weight-semi-bold text-uppercase mb-0">11x</span>
            <span class="text-secondary">hackathon winner</span>
          </div>
          <!-- End Stats -->
        </div>
      </div>
    </div>
    <!-- End Stats Section -->

    <!-- Divider -->
    <div class="container">
      <div class="w-lg-65 mx-lg-auto">
        <hr class="my-0">
      </div>
    </div>
    <!-- End Divider -->

    <!-- About Section -->
    <div class="container space-2 space-lg-3">
      <div class="row justify-content-lg-between">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h2 class="font-weight-semi-bold">Tools should adapt to the user, not the other way around.</h2>
        </div>
        <div class="col-lg-6">
          <p>Since 2008, we have helped companies launch over incredible products. We believe the best digital solutions are built at the intersection of business strategy, available technology, and real user's needs.</p>
          <p>Things can get really complex, really quickly, and a pragmatic, synthetic and clear vision is essential to be able to create something that, after all, is meant to be used. Emotions also have a big role to play and developing clear and beautiful aesthetics is of the utmost importance to create a pleasant environment in which the user actually enjoys the time spent in it. In the end, we're all suckers for beautiful things that just work</p>
        </div>
      </div>
    </div>
    <!-- End About Section -->

    <!-- Divider -->
    <div class="container">
      <div class="w-lg-65 mx-lg-auto">
        <hr class="my-0">
      </div>
    </div>
    <!-- End Divider -->

    <!-- Team Section -->
    <div class="container space-2 space-lg-3">
      <!-- Title -->
      <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
        <span class="btn btn-xs btn-soft-success btn-pill mb-2">Our team</span>
        <h2 class="h3 font-weight-semi-bold">Creative mind by people like you</h2>
      </div>
      <!-- End Title -->

      <div class="row mx-n2 mb-5">
        <div class="col-sm-6 col-lg-3 px-2 mb-3">
          <!-- Team -->
          <div class="card shadow transition-3d-hover p-4">
            <div class="u-lg-avatar mb-4">
              <img class="img-fluid rounded-circle" src="/assets/img/about/100x100/mik-galon.jpg" alt="Mik Galon">
            </div>

            <small class="d-block text-secondary text-uppercase mb-1">Full Stack Developer</small>
            <h4 class="h5 text-lh-sm">Michael Gerard Galon, MIM</h4>
            <p class="font-size-1">I am an ambitious workaholic, but apart from that, pretty simple person.</p>

            <!-- Social Networks -->
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-sm btn-icon btn-soft-secondary rounded" href="mailto:gigamike@gigamike.net">
                <span class="far fa-envelope btn-icon__inner"></span>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-sm btn-icon btn-soft-secondary rounded" href="https://www.facebook.com/hackathron">
                  <span class="fab fa-facebook-f btn-icon__inner"></span>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-sm btn-icon btn-soft-secondary rounded" href="https://twitter.com/gigamike">
                  <span class="fab fa-twitter btn-icon__inner"></span>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-sm btn-icon btn-soft-secondary rounded" href="https://www.linkedin.com/in/gigamike/">
                  <span class="fab fa-linkedin btn-icon__inner"></span>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-sm btn-icon btn-soft-secondary rounded" href="https://github.com/gigamike">
                  <span class="fab fa-github btn-icon__inner"></span>
                </a>
              </li>
            </ul>
            <!-- End Social Networks -->
          </div>
          <!-- End Team -->
        </div>

        <div class="col-sm-6 col-lg-3 px-2 mb-3">
          <!-- Team -->
          <div class="card shadow transition-3d-hover p-4">
            <div class="u-lg-avatar mb-4">
              <img class="img-fluid rounded-circle" src="/assets/img/about/100x100/amah-galon.jpg" alt="Amah Galon">
            </div>

            <small class="d-block text-secondary text-uppercase mb-1">Accountant</small>
            <h4 class="h5 text-lh-sm">Amah Buenaventura CPA, MBA, (CMA)</h4>
            <p class="font-size-1">I am an ambitious workaholic, but apart from that, pretty simple person.</p>

            <!-- Social Networks -->
            <ul class="list-inline mb-0">
            <li class="list-inline-item">
                <a class="btn btn-sm btn-icon btn-soft-secondary rounded" href="mailto:gigamike@gigamike.net">
                  <span class="far fa-envelope btn-icon__inner"></span>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-sm btn-icon btn-soft-secondary rounded" href="https://www.facebook.com/MACS.buenaventura">
                  <span class="fab fa-facebook-f btn-icon__inner"></span>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-sm btn-icon btn-soft-secondary rounded" href="https://www.linkedin.com/in/ma-amah-concepcion-b-galon-cpa-mba-cma-5a641639/">
                  <span class="fab fa-linkedin btn-icon__inner"></span>
                </a>
              </li>
            </ul>
            <!-- End Social Networks -->
          </div>
          <!-- End Team -->
        </div>

      </div>

      <!-- Hire Us -->
      <div class="text-center">
        <div class="d-sm-inline-flex align-items-center bg-white shadow-soft rounded-pill p-2 pr-3">
          <span class="btn btn-xs btn-primary btn-pill mb-2 mb-sm-0 mr-2">New</span>
          <span class="d-block d-sm-inline-block">
            We are hiring.
            <a href="{{ route('contact') }}">Send your application.</a>
          </span>
        </div>
      </div>
      <!-- End Hire Us -->
    </div>
    <!-- End Team Section -->
@endsection
