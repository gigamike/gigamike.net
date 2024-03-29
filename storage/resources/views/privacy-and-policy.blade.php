@extends('layouts/app')

@section('content')
 <!-- Privacy Section -->
 <div class="container space-top-2 space-top-md-4 space-bottom-1 overflow-hidden">
      <div class="w-lg-80 mx-lg-auto">
        <div class="card shadow-sm">
          <!-- Hero -->
          <div class="card-header position-relative gradient-half-primary-v1 space-top-2 space-bottom-3 rounded-top-pseudo px-7 px-md-9">
            <h1 class="text-white font-weight-semi-bold">Privacy &amp; Policy</h1>
            <p class="text-white-70">Last modified: March 27, 2018 (<a class="text-light" href="#">view archived versions</a>)</p>

            <!-- SVG Bottom Shape -->
            <figure class="position-absolute right-0 bottom-0 left-0">
              <img class="js-svg-injector" src="/assets/svg/components/wave-1-bottom-sm.svg" alt="Image Description"
                   data-parent="#content">
            </figure>
            <!-- End SVG Bottom Shape Section -->
          </div>
          <!-- End Hero -->

          <!-- Content -->
          <div class="card-body p-7 p-md-9">
            <div class="mb-7">
              <!-- Title -->
              <div class="mb-3">
                <h3 class="h5 text-primary font-weight-semi-bold">Introduction</h3>
              </div>
              <!-- End Title -->

              <!-- Text -->
              <p>Thanks for using our products and services ("Services"). The Services are provided by Pixeel Ltd. ("{{ config('app.name', 'Laravel') }}"), located at Annex 35, Don Bosco, Paranaque, Philippines.
              <p>By using our Services, you are agreeing to these terms. Please read them carefully.</p>
              <p>Our Services are very diverse, so sometimes additional terms or product requirements (including age requirements) may apply. Additional terms will be available with the relevant Services, and those additional terms become part of your agreement with us if you use those Services.</p>
              <!-- End Text -->
            </div>

            <div class="mb-7">
              <!-- Title -->
              <div class="mb-3">
                <h3 class="h5 text-primary font-weight-semi-bold">Using our services</h3>
              </div>
              <!-- End Title -->

              <!-- Text -->
              <p>You must follow any policies made available to you within the Services.</p>
              <p>Don't misuse our Services. For example, don't interfere with our Services or try to access them using a method other than the interface and the instructions that we provide. You may use our Services only as permitted by law, including applicable export and re-export control laws and regulations. We may suspend or stop providing our Services to you if you do not comply with our terms or policies or if we are investigating suspected misconduct.</p>
              <p>Using our Services does not give you ownership of any intellectual property rights in our Services or the content you access. You may not use content from our Services unless you obtain permission from its owner or are otherwise permitted by law. These terms do not grant you the right to use any branding or logos used in our Services. Don't remove, obscure, or alter any legal notices displayed in or along with our Services.</p>
              <!-- End Text -->
            </div>

            <div class="mb-7">
              <!-- Title -->
              <div class="mb-3">
                <h3 class="h5 text-primary font-weight-semi-bold">Privacy and copyright protection</h3>
              </div>
              <!-- End Title -->

              <!-- Text -->
              <p>{{ config('app.name', 'Laravel') }}'s privacy policies explain how we treat your personal data and protect your privacy when you use our Services. By using our Services, you agree that {{ config('app.name', 'Laravel') }} can use such data in accordance with our privacy policies.</p>
              <p>We respond to notices of alleged copyright infringement and terminate accounts of repeat infringers according to the process set out in the U.S. Digital Millennium Copyright Act.</p>
              <p>We provide information to help copyright holders manage their intellectual property online. If you think somebody is violating your copyrights and want to notify us, you can find information about submitting notices and {{ config('app.name', 'Laravel') }}'s policy about responding to notices in <a href="help.html">our Help Center</a>.</p>
              <!-- End Text -->
            </div>

            <div class="mb-7">
              <!-- Title -->
              <div class="mb-3">
                <h3 class="h5 text-primary font-weight-semi-bold">Your content in our services</h3>
              </div>
              <!-- End Title -->

              <!-- Text -->
              <p>Some of our Services allow you to upload, submit, store, send or receive content. You retain ownership of any intellectual property rights that you hold in that content. In short, what belongs to you stays yours.</p>
              <p>When you upload, submit, store, send or receive content to or through our Services, you give {{ config('app.name', 'Laravel') }} (and those we work with) a worldwide license to use, host, store, reproduce, modify, create derivative works (such as those resulting from translations, adaptations or other changes we make so that your content works better with our Services), communicate, publish, publicly perform, publicly display and distribute such content. The rights you grant in this license are for the limited purpose of operating, promoting, and improving our Services, and to develop new ones. This license continues even if you stop using our Services (for example, for a business listing you have added to {{ config('app.name', 'Laravel') }} Maps). Some Services may offer you ways to access and remove content that has been provided to that Service. Also, in some of our Services, there are terms or settings that narrow the scope of our use of the content submitted in those Services. Make sure you have the necessary rights to grant us this license for any content that you submit to our Services.</p>
              <!-- End Text -->
            </div>
          </div>
          <!-- End Content -->
        </div>
      </div>
    </div>
    <!-- End Privacy Section -->

    <!-- SVG Background Shapes - Left Side -->
    <div class="w-25 content-centered-y left-0 z-index-n1 mt-9">
      <figure class="ie-circle-1">
        <img class="js-svg-injector" src="/assets/svg/components/circle-1.svg" alt="Image Description"
             data-parent="#content">
      </figure>
    </div>
    <!-- End SVG Background Shapes - Left Side -->

    <!-- SVG Background Shapes - Right Side -->
    <div class="w-35 content-centered-y right-0 z-index-n1 mt-n9">
      <figure class="ie-bg-elements-4">
        <img class="js-svg-injector" src="/assets/svg/components/bg-elements-4.svg" alt="Image Description"
             data-parent="#content">
      </figure>
    </div>
    <!-- End SVG Background Shapes - Right Side -->

    <!-- SVG Background Shapes -->
    <div class="position-absolute right-0 bottom-0 left-0 z-index-n1">
      <figure class="ie-bg-elements-3">
        <img class="js-svg-injector" src="/assets/svg/components/bg-elements-3.svg" alt="Image Description"
             data-parent="#content">
      </figure>
    </div>
    <!-- End SVG Background Shapes -->
@endsection
