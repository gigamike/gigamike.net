@extends('layouts/app')

@section('content')
<!-- Hero Section -->
<div class="container space-1">
      <div class="row align-items-lg-center">
        <div class="col-lg-5 mb-9 mb-lg-0">
          <!-- Info -->
          <div class="mb-4">
            <h1 class="h1">Welcome to<br><strong class="text-primary">Gigamike Solutions</strong></h1>
            <p>We aim high at being focused on building relationships with our clients and community. Using our creative gifts drives this foundation.</p>
          </div>
          <!-- End Info -->
        </div>

        <div id="SVGNonStandardHeroShape" class="col-lg-7 svg-preloader">
          <div class="px-lg-5">
            <!-- SVG Illustration -->
            <figure class="ie-non-standard-hero-shape">
              <img class="js-svg-injector" src="/assets/svg/illustrations/non-standard-hero-shape.svg" alt="Image Description"
                   data-img-paths='[
                     {"targetId": "#SVGNonStandardHeroShapeImg1", "newPath": "/assets/img/team-gigamike.jpg"},
                     {"targetId": "#SVGNonStandardHeroShapeImg2", "newPath": "/assets/img/team-gigamike.jpg"}
                   ]'
                   data-parent="#SVGNonStandardHeroShape">
            </figure>
            <!-- End SVG Illustration -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Hero Section -->

    <!-- Icon Blocks Section -->
    <div class="container space-2 space-md-1">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">
        <small class="text-secondary text-uppercase font-weight-medium mb-2">What we do?</small>
        <h2 class="h3 font-weight-medium">Web, Mobile, Design and Hosting</h2>
      </div>
      <!-- End Title -->

      <div class="row justify-content-lg-center">
        <div class="col-md-6 col-lg-5 mb-7">
          <!-- Icon Blocks -->
          <div class="media pr-lg-5">
            <figure id="icon9" class="svg-preloader ie-height-56 w-100 max-width-8 mr-4">
              <img class="js-svg-injector" src="/assets/svg/icons/icon-44.svg" alt="SVG"
                   data-parent="#icon9">
            </figure>
            <div class="media-body">
              <h3 class="h5">Web</h3>
              <p class="mb-1">LAMP Stack, Laravel, Zend Framework, Symfony, Magento, Wordpress, Drupal, NodeJS and more. #CMS #Blockchain #Security</p>
              <a class="font-size-1" href="{{ route('contact') }}">Explore now <span class="fas fa-angle-right align-middle ml-2"></span></a>
            </div>
          </div>
          <!-- End Icon Blocks -->
        </div>

        <div class="col-md-6 col-lg-5 mb-7">
          <!-- Icon Blocks -->
          <div class="media pl-lg-5">
            <figure id="icon3" class="svg-preloader ie-height-56 w-100 max-width-8 mr-4">
              <img class="js-svg-injector" src="/assets/svg/icons/icon-9.svg" alt="SVG"
                   data-parent="#icon3">
            </figure>
            <div class="media-body">
              <h3 class="h5">Mobile</h3>
              <p class="mb-1">Mobile apps compatible to iOS and Android. #ReactNative</p>
              <a class="font-size-1" href="{{ route('contact') }}">Explore now <span class="fas fa-angle-right align-middle ml-2"></span></a>
            </div>
          </div>
          <!-- End Icon Blocks -->
        </div>

        <div class="w-100"></div>

        <div class="col-md-6 col-lg-5 mb-7 mb-lg-0">
          <!-- Icon Blocks -->
          <div class="media pr-lg-5">
            <figure id="icon5" class="svg-preloader ie-height-56 w-100 max-width-8 mr-4">
              <img class="js-svg-injector" src="/assets/svg/icons/icon-36.svg" alt="SVG"
                   data-parent="#icon5">
            </figure>
            <div class="media-body">
              <h3 class="h5">Design</h3>
              <p class="mb-1">Layout, Templates, Logos, Photo Editing, Presentations. #Bootstrap #Jquery #VueJS #AffinityPhoto #AffinityDesigner #AffinityPublisher #Photoshop</p>
              <a class="font-size-1" href="{{ route('contact') }}">Explore now <span class="fas fa-angle-right align-middle ml-2"></span></a>
            </div>
          </div>
          <!-- End Icon Blocks -->
        </div>

        <div class="col-md-6 col-lg-5">
          <!-- Icon Blocks -->
          <div class="media pl-lg-5">
            <figure id="icon2" class="svg-preloader ie-height-56 w-100 max-width-8 mr-4">
              <img class="js-svg-injector" src="/assets/svg/icons/icon-6.svg" alt="SVG"
                   data-parent="#icon2">
            </figure>
            <div class="media-body">
              <h3 class="h5">Hosting</h3>
              <p class="mb-1">Web servers, Moving from shared host to VPS to dedicated server. #AWS #GoogleCloud #DO #Panel #Backup #Installation #Linux #Windows</p>
              <a class="font-size-1" href="{{ route('contact') }}">Explore now <span class="fas fa-angle-right align-middle ml-2"></span></a>
            </div>
          </div>
          <!-- End Icon Blocks -->
        </div>
      </div>
    </div>
    <!-- End Icon Blocks Section -->

    <!-- Testimonials Section -->
    <div class="container space-bottom-2 space-bottom-md-2">
      <!-- SVG Quote -->
      <figure class="mx-auto text-center mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="48px" height="48px"
           viewBox="0 0 8 8" style="enable-background:new 0 0 8 8;" xml:space="preserve">
          <path class="fill-gray-400" d="M3,1.3C2,1.7,1.2,2.7,1.2,3.6c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5
            C1.4,6.9,1,6.6,0.7,6.1C0.4,5.6,0.3,4.9,0.3,4.5c0-1.6,0.8-2.9,2.5-3.7L3,1.3z M7.1,1.3c-1,0.4-1.8,1.4-1.8,2.3
            c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5c-0.7,0-1.1-0.3-1.4-0.8
            C4.4,5.6,4.4,4.9,4.4,4.5c0-1.6,0.8-2.9,2.5-3.7L7.1,1.3z"/>
        </svg>
      </figure>
      <!-- End SVG Quote -->

      <!-- Blockquote -->
      <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-6">
        <blockquote class="lead text-secondary font-weight-normal">Hello! I am web developer with extensive real-world experience. I consider myself a software craftsman rather than a simple programmer because I obsess over every detail of the applications that I develop. My commitment includes providing well documented and extensible projects that my clients can extend and maintain for years after I am gone.

I am open to work on projects from anywhere. Thank you for your interest. I look forward working with you. </blockquote>
      </div>
      <!-- End Blockquote -->

      <!-- Reviewer -->
      <div class="d-flex justify-content-center align-items-center w-lg-50 mx-auto">
        <div class="u-avatar">
          <img class="img-fluid rounded-circle" src="/assets/img/mik-galon.jpg" alt="Image Description">
        </div>
        <div class="ml-3">
          <h4 class="h6 mb-0">Mik Galon</h4>
          <small class="text-muted">Full Stack Developer</small>
        </div>
      </div>
      <!-- End Reviewer -->
    </div>
    <!-- End Testimonials Section -->

    <!-- Clients Section -->
    <div class="container-fluid px-2">
      <div class="js-slick-carousel u-slick u-slick--gutters-1"
           data-autoplay="true"
           data-speed="5000"
           data-infinite="true"
           data-slides-show="6"
           data-responsive='[{
             "breakpoint": 1200,
             "settings": {
               "slidesToShow": 4
             }
           }, {
             "breakpoint": 992,
             "settings": {
               "slidesToShow": 4
             }
           }, {
             "breakpoint": 768,
             "settings": {
               "slidesToShow": 3
             }
           }, {
             "breakpoint": 576,
             "settings": {
               "slidesToShow": 3
             }
           }, {
             "breakpoint": 480,
             "settings": {
               "slidesToShow": 2
             }
           }]'>
        <div class="js-slide">
          <div class="bg-light rounded py-9 px-3">
            <a href="https://www.certmetrics.com/amazon/public/badge.aspx?i=4&t=c&d=2018-04-24&ci=AWS00193558" target="_blank"><img class="u-clients" src="/assets/img/badges/aws-certified-solutions-architect-professional.jpg" alt="AWS Certified Solutions Architect – Professional"></a>
          </div>
        </div>
        <div class="js-slide">
          <div class="bg-light rounded py-9 px-3">
            <a href="https://www.certmetrics.com/amazon/public/badge.aspx?i=1&t=c&d=2017-04-03&ci=AWS00193558" target="_blank"><img class="u-clients" src="/assets/img/badges/aws-certified-solutions-architect-associate.jpg" alt="AWS Certified Solutions Architect – Associate"></a>
          </div>
        </div>
        <div class="js-slide">
          <div class="bg-light rounded py-9 px-3">
            <a href="https://www.certmetrics.com/amazon/public/badge.aspx?i=2&t=c&d=2017-02-13&ci=AWS00193558" target="_blank"><img class="u-clients" src="/assets/img/badges/aws-certified-developer-associate.jpg" alt="AWS Certified Developer – Associate"></a>
          </div>
        </div>
        <div class="js-slide">
          <div class="bg-light rounded py-9 px-3">
            <a href="https://www.certmetrics.com/amazon/public/badge.aspx?i=3&t=c&d=2017-05-22&ci=AWS00193558" target="_blank"><img class="u-clients" src="/assets/img/badges/aws-certified-sysops-administrator-associate.jpg" alt="AWS Certified SysOps Administrator – Associate"></a>
          </div>
        </div>
        <div class="js-slide">
          <div class="bg-light rounded py-9 px-3">
            <a href="https://www.certmetrics.com/amazon/public/badge.aspx?i=9&t=c&d=2018-12-12&ci=AWS00193558" target="_blank"><img class="u-clients" src="/assets/img/badges/aws-certified-cloud-practitioner.jpg" alt="AWS Certified Cloud Practitioner"></a>
          </div>
        </div>
        <div class="js-slide">
          <div class="bg-light rounded py-9 px-3">
            <a href="#" target="_blank"><img class="u-clients" src="/assets/img/badges/bta-coin-blockchain-architect.jpg" alt="Blockchain Training Alliance Certified Blockchain Solution Architect"></a>
          </div>
        </div>
        <div class="js-slide">
          <div class="bg-light rounded py-9 px-3">
            <a href="#" target="_blank"><img class="u-clients" src="/assets/img/badges/bta-coin-ethereum-developer.jpg" alt="Certified Blockchain Developer - Ethereum"></a>
          </div>
        </div>
        <div class="js-slide">
          <div class="bg-light rounded py-9 px-3">
            <a href="#" target="_blank"><img class="u-clients" src="/assets/img/badges/bta-coin-security.jpg" alt="Certified Blockchain Security Professional"></a>
          </div>
        </div>
        <div class="js-slide">
          <div class="bg-light rounded py-9 px-3">
            <a href="https://www.credential.net/13639936" target="_blank"><img class="u-clients" src="/assets/img/badges/certified-blockchain-architect.jpg" alt="Blockchain Council Certified Blockchain Architect"></a>
          </div>
        </div>
        <div class="js-slide">
          <div class="bg-light rounded py-9 px-3">
            <a href="https://www.credential.net/13215939" target="_blank"><img class="u-clients" src="/assets/img/badges/certified-blockchain-developer.jpg" alt="Blockchain Council Certified Blockchain Developer V2"></a>
          </div>
        </div>
        <div class="js-slide">
          <div class="bg-light rounded py-9 px-3">
            <a href="https://www.credential.net/13112438" target="_blank"><img class="u-clients" src="/assets/img/badges/certified-blockchain-expert.jpg" alt="Blockchain Council Certified Blockchain Expert – V2"></a>
          </div>
        </div>
        <div class="js-slide">
          <div class="bg-light rounded py-9 px-3">
            <a href="http://www.zend.com/en/yellow-pages/ZEND003229" target="_blank"><img class="u-clients" src="/assets/img/badges/zce-2017-php.jpg" alt="Zend Certified Engineer"></a>
          </div>
        </div>
        <div class="js-slide">
          <div class="bg-light rounded py-9 px-3">
            <a href="http://www.zend.com/en/yellow-pages/ZEND003229" target="_blank"><img class="u-clients" src="/assets/img/badges/zfca-logo.jpg" alt="Zend Framework 2 Certified Engineer"></a>
          </div>
        </div>
        <div class="js-slide">
          <div class="bg-light rounded py-9 px-3">
            <a href="http://www.zend.com/en/yellow-pages/ZEND003229" target="_blank"><img class="u-clients" src="/assets/img/badges/zf-certified-logo.jpg" alt="Zend Framework 1 Certified Engineer"></a>
          </div>
        </div>
        <div class="js-slide">
          <div class="bg-light rounded py-9 px-3">
            <a href="https://www.certmetrics.com/comptia/public/verification.aspx?code=CEXQEYLFJHR11ZC0" target="_blank"><img class="u-clients" src="/assets/img/badges/Comptia-Aplus-Logo-Certified.jpg" alt="CompTIA A+"></a>
          </div>
        </div>
        <div class="js-slide">
          <div class="bg-light rounded py-9 px-3">
            <a href="https://www.certmetrics.com/comptia/public/verification.aspx?code=QXLGJE3F2CEEQXWS" target="_blank"><img class="u-clients" src="/assets/img/badges/comptia-IT-Fundamentals-Logo-Certified.jpg" alt="CompTIA IT Fundamentals Certified"></a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Clients Section -->
@endsection
