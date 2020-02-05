@extends('layouts/app')

@section('content')
<!-- Hero Section -->
   <div class="container space-top-2">
     <div class="w-md-80 w-lg-75 text-center mx-md-auto">
       <div class="mb-5">
         <h1 class="display-4 font-size-md-down-5 font-weight-semi-bold">Portfolio</h1>
         <p class="lead font-weight-normal">My Projects, Startup and Hackathon Wins</p>
       </div>
     </div>
   </div>
   <!-- End Hero Section -->

   <!-- Blog Card Section -->
   <div class="container space-2 space-bottom-lg-1">
     <div class="row">

       <div class="col-md-6 col-lg-4 mb-5">
         <!-- Blog Card -->
         <article class="card shadow h-100">
           <img class="card-img-top" src="/assets/img/screenshots/gigamike.jpg" alt="PH Phone">
           <div class="card-body p-5">
             <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Startup</a>
             <h3 class="h5 font-weight-medium">
               <a href="https://www.gigamike.net/" target="_blank">Gigamike</a>
             </h3>
             <p>My portfolio site. Upgraded my site from PHP7.1/ZF3 to PHP 7.3/Laravel 6.</p>
           </div>

           <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
             <div class="media align-items-center">
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="PHP">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/php.png" alt="PHP">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Laravel">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/laravel.jpg" alt="Laravel">
               </div>
               <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                 <a href="https://www.gigamike.net/" target="_blank">Demo</a>
               </div>
             </div>
           </div>
         </article>
         <!-- End Blog Card -->
       </div>

       <div class="col-md-6 col-lg-4 mb-5">
         <!-- Blog Card -->
         <article class="card shadow h-100">
           <img class="card-img-top" src="/assets/img/screenshots/strikingmedia.jpg" alt="Striking Media">
           <div class="card-body p-5">
             <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="https://strikingmedia.gigamike.net/">Project</a>
             <h2 class="h5 font-weight-medium">
               <a href="https://strikingmedia.gigamike.net/" target="_blank">Striking Media</a>
             </h2>
             <p>Dashboard, Analyics, Web Scrapping, APIs, Email Marketing and more.</p>
           </div>

           <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
             <div class="media align-items-center">
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="PHP">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/php.png" alt="PHP">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Zend Framework">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/zf.png" alt="Zend Framework">
               </div>
               <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                 <a href="https://strikingmedia.gigamike.net/" target="_blank">Demo</a>
               </div>
             </div>
           </div>
         </article>
         <!-- End Blog Card -->
       </div>

       <div class="col-md-6 col-lg-4 mb-5">
         <!-- Blog Card -->
         <article class="card shadow h-100">
           <img class="card-img-top" src="/assets/img/screenshots/hackathonph.jpg" alt="Hackathon.ph">
           <div class="card-body p-5">
             <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="https://www.hackathon.ph/">Startup</a>
             <h3 class="h5 font-weight-medium">
               <a href="https://www.hackathon.ph" target="_blank">Hackathon.ph</a>
             </h3>
             <p>I love hackathons. I setup a portal for all Philippines hackathon events.</p>
           </div>

           <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
             <div class="media align-items-center">
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="PHP">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/php.png" alt="PHP">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Zend Framework">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/zf.png" alt="Zend Framework">
               </div>
               <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                 <a href="https://www.hackathon.ph/" target="_blank">Demo</a>
               </div>
             </div>
           </div>
         </article>
         <!-- End Blog Card -->
       </div>

       <div class="col-md-6 mb-5">
         <!-- Blog Card -->
         <article class="card shadow h-100">
           <img class="card-img-top" src="/assets/img/screenshots/jandj2019.jpg" alt="HR Global Johnson and Johnson 2019 - People's Choice Award">
           <div class="card-body p-5">
             <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Hackathon</a>
             <h3 class="h5 font-weight-medium">
               <a href="https://jandj2019.gigamike.net/" target="_blank">HR Global Johnson and Johnson 2019 - People's Choice Award</a>
             </h3>
             <p>Its the global HR Johnson and Johnson hackathon which joined by Singapore, China and Philippines. Luckily we are the only winner in Philippines. There challenge was to anticipate HR concerns via tech to increase productivity. For more details please check my blog "<a href="https://www.alexachamp.com/hr-global-johnson-and-johnson-2019-hackathon-experience/" target="_blank">HR Global Johnson and Johnson 2019 Hackathon Experience</a>".</p>
           </div>

           <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
             <div class="media align-items-center">
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="PHP">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/php.png" alt="PHP">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Zend Framework">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/zf.png" alt="Zend Framework">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Alexa Skills">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/alexa.png" alt="Alexa Skills">
               </div>
               <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                 <a href="https://jandj2019.gigamike.net/" target="_blank">Demo</a>
               </div>
             </div>
           </div>
         </article>
         <!-- End Blog Card -->
       </div>

       <div class="col-md-6 mb-5">
         <!-- Blog Card -->
         <article class="card shadow h-100">
           <img class="card-img-top" src="/assets/img/screenshots/uhack2019.jpg" alt="U:Hack Real Estate And Liveable Cities Hackathon 2019 - 2nd Place Winner">
           <div class="card-body p-5">
             <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Hackathon</a>
             <h3 class="h5 font-weight-medium">
               <a href="https://uhack2019.gigamike.net/" target="_blank">U:Hack Real Estate And Liveable Cities Hackathon 2019 - 2nd Place Winner</a>
             </h3>
             <p>Hackaton sponsored by <a href="https://www.facebook.com/ubxphilippines/posts/535623463860483" target="_blank">UnionBank (UBX)</a>. There are 3 categories or problems to choose from, Property, Cities, and Communities. We selected Property. We created an app that solves realtors/constructors slow process of procurement. For more details please check my blog "<a href="https://www.alexachamp.com/uhack-real-estate-and-liveable-cities-hackathon-2019-experience/" target="_blank">UHack Real Estate And Liveable Cities Hackathon 2019 Experience</a>."</p>
           </div>

           <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
             <div class="media align-items-center">
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="PHP">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/php.png" alt="PHP">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Zend Framework">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/zf.png" alt="Zend Framework">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Multichain">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/multichain.png" alt="Multichain">
               </div>
               <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                 <a href="https://uhack2019.gigamike.net/" target="_blank">Demo</a>
               </div>
             </div>
           </div>
         </article>
         <!-- End Blog Card -->
       </div>

       <div class="col-md-6 col-lg-4 mb-5">
         <!-- Blog Card -->
         <article class="card shadow h-100">
           <img class="card-img-top" src="/assets/img/screenshots/alexachamp.jpg" alt="AlexaChamp">
           <div class="card-body p-5">
             <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="https://www.alexachamp.com/">Blog</a>
             <h3 class="h5 font-weight-medium">
               <a href="https://www.alexachamp.com/">AlexaChamp.com</a>
             </h3>
             <p>My Alexa Skills and Personal Blog. I also talk or share my Alexa Skills development. I'm part of <a href="http://www.awsug.ph/speakers.php?id=2" target="_blank">AWS UG PH</a> core member.</p>
           </div>

           <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
             <div class="media align-items-center">
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="PHP">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/php.png" alt="PHP">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Wordpress">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/wordpress.png" alt="Wordpress">
               </div>
               <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                 <a href="https://www.alexachamp.com/" target="_blank">Demo</a>
               </div>
             </div>
           </div>
         </article>
         <!-- End Blog Card -->
       </div>

       <div class="col-md-6 col-lg-4 mb-5">
         <!-- Blog Card -->
         <article class="card shadow h-100">
           <img class="card-img-top" src="/assets/img/screenshots/pcsogames.jpg" alt="Lotto Insights">
           <div class="card-body p-5">
             <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Startup</a>
             <h3 class="h5 font-weight-medium">
               <a href="https://pcso-games.gigamike.net/" target="_blank">Lotto Insights</a>
             </h3>
             <p>I got this idea when i joined <a href="https://www.facebook.com/devcup/" target="_blank">Devcup Hackathon</a>. The theme for tha said hackathon was "Insights". I developed an app that gives Lotto Number Frequency and Lotto combination tools.</p>
           </div>

           <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
             <div class="media align-items-center">
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="PHP">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/php.png" alt="PHP">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Zend Framework">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/zf.png" alt="Zend Framework">
               </div>
               <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                 <a href="https://pcso-games.gigamike.net/" target="_blank">Demo</a>
               </div>
             </div>
           </div>
         </article>
         <!-- End Blog Card -->
       </div>

       <div class="col-md-6 col-lg-4 mb-5">
         <!-- Blog Card -->
         <article class="card shadow h-100">
           <img class="card-img-top" src="/assets/img/screenshots/phphone.jpg" alt="PH Phone">
           <div class="card-body p-5">
             <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Startup</a>
             <h3 class="h5 font-weight-medium">
               <a href="https://ph-phone.gigamike.net/" target="_blank">PH Phone</a>
             </h3>
             <p>I tried my luck to earn from advertisements. I created a scrapper that scraps Philippines establishment and commercial telephone numbers, social site, website and address. A yellow pages website.</p>
           </div>

           <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
             <div class="media align-items-center">
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="PHP">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/php.png" alt="PHP">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Zend Framework">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/zf.png" alt="Zend Framework">
               </div>
               <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                 <a href="https://ph-phone.gigamike.net/" target="_blank">Demo</a>
               </div>
             </div>
           </div>
         </article>
         <!-- End Blog Card -->
       </div>

       <div class="col-md-6 mb-5">
         <!-- Blog Card -->
         <article class="card shadow h-100">
           <img class="card-img-top" src="/assets/img/screenshots/angelhackmnl2019.jpg" alt="Angel Hack Manila 2019 - 1st Place Winner">
           <div class="card-body p-5">
             <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Hackathon</a>
             <h3 class="h5 font-weight-medium">
               <a href="https://angelhack2019.gigamike.net/" target="_blank">Angel Hack Manila 2019 - 1st Place Winner</a>
             </h3>
             <p>The theme of AngelHack Manila 2019 hackathon is any topic about social good and using there sponsor Amazon Web Services. I created an app "a personal coach" that will keep you healthy and fit. For more details please check my blog "<a href="https://www.alexachamp.com/angelhack-manila-2019-hackathon-experience/" target="_blank">AngelHack Manila 2019 Hackathon Experience</a>."</p>
           </div>

           <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
             <div class="media align-items-center">
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="PHP">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/php.png" alt="PHP">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Zend Framework">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/zf.png" alt="Zend Framework">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Alexa Skills">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/alexa.png" alt="Alexa Skills">
               </div>
               <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                 <a href="https://angelhack2019.gigamike.net/" target="_blank">Demo</a>
               </div>
             </div>
           </div>
         </article>
         <!-- End Blog Card -->
       </div>

       <div class="col-md-6 mb-5">
         <!-- Blog Card -->
         <article class="card shadow h-100">
           <img class="card-img-top" src="/assets/img/screenshots/dish2019.jpg" alt="Decentralized Innovations Startups' Hackathon - DISH 2019 - 1st Place Winner">
           <div class="card-body p-5">
             <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Hackathon</a>
             <h3 class="h5 font-weight-medium">
               <a href="https://blockstarter.gigamike.net/" target="_blank">Decentralized Innovations Startups' Hackathon - DISH 2019 - 1st Place Winner</a>
             </h3>
             <p>The winner of this year’s DISH is Michael Galon’s (Gigamike’s) ProsperEOS (PEOS), a completely decentralized funding platform. Mr. Galon opted for a product that aims to solve problems of existing funding platforms. These problems include the tracking of money, the lack of engagement, lack of resources, and marketing for projects.  <a href="https://bitpinas.com/feature/dish-2019-feature-gigamikes-prospereos/" target="_blank">bitpinas.com</a>. For more details please check my blog "<a href="https://www.alexachamp.com/my-decentralized-innovations-startups-hackathon-dish-2019-experience/" target="_blank">My Decentralized Innovations Startups’ Hackathon – DISH 2019 Experience</a>".</p>
           </div>

           <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
             <div class="media align-items-center">
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="PHP">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/php.png" alt="PHP">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Zend Framework">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/zf.png" alt="Zend Framework">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Ethereum">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/ethereum.png" alt="Ethereum">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="EOS">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/eos.png" alt="EOS">
               </div>
               <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                 <a href="https://blockstarter.gigamike.net/" target="_blank">Demo</a>
               </div>
             </div>
           </div>
         </article>
         <!-- End Blog Card -->
       </div>

       <div class="col-md-6 col-lg-4 mb-5">
         <!-- Blog Card -->
         <article class="card shadow h-100">
           <img class="card-img-top" src="/assets/img/screenshots/allaboutwebhosting.jpg" alt="All About Web Hosting">
           <div class="card-body p-5">
             <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Startup</a>
             <h3 class="h5 font-weight-medium">
               <a href="https://allaboutwebhosting.gigamike.net/" target="_blank">All About Web Hosting</a>
             </h3>
             <p>Im a backend developer and I love servers. I tried affiliate marketing by reselling servers.</p>
           </div>

           <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
             <div class="media align-items-center">
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="PHP">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/php.png" alt="PHP">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Zend Framework">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/zf.png" alt="Zend Framework">
               </div>
               <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                 <a href="https://allaboutwebhosting.gigamike.net/" target="_blank">Demo</a>
               </div>
             </div>
           </div>
         </article>
         <!-- End Blog Card -->
       </div>

       <div class="col-md-6 col-lg-4 mb-5">
         <!-- Blog Card -->
         <article class="card shadow h-100">
           <img class="card-img-top" src="/assets/img/screenshots/ukphone.jpg" alt="Image Description">
           <div class="card-body p-5">
             <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Project</a>
             <h3 class="h5 font-weight-medium">
               <a href="https://uk-phone.gigamike.net/" target="_blank">UK Phone</a>
             </h3>
             <p>Yellow pages in U.K. I developed a C.M.S. using Yii Framework.</p>
           </div>

           <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
             <div class="media align-items-center">
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="PHP">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/php.png" alt="PHP">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="YII Framework">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/yii.png" alt="YII Framework">
               </div>
               <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                 <a href="https://uk-phone.gigamike.net/" target="_blank">Demo</a>
               </div>
             </div>
           </div>
         </article>
         <!-- End Blog Card -->
       </div>

       <div class="col-md-6 col-lg-4 mb-5">
         <!-- Blog Card -->
         <article class="card shadow h-100">
           <img class="card-img-top" src="/assets/img/screenshots/jcibaras.jpg" alt="All About Web Hosting">
           <div class="card-body p-5">
             <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Project</a>
             <h3 class="h5 font-weight-medium">
               <a href="https://jcibaras.org.ph/" target="_blank">JCI Baras</a>
             </h3>
             <p>Being part of <a href="https://www.jci.org.ph/jci/" target="_blank">J.C.I.</a> specifically JCI Mandaluyong, I helped my friends from JCI Baras.</p>
           </div>

           <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
             <div class="media align-items-center">
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="PHP">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/php.png" alt="PHP">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Wordpress">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/wordpress.png" alt="Wordpress">
               </div>
               <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                 <a href="https://jcibaras.org.ph/" target="_blank">Demo</a>
               </div>
             </div>
           </div>
         </article>
         <!-- End Blog Card -->
       </div>

       <div class="col-md-6 mb-5">
         <!-- Blog Card -->
         <article class="card shadow h-100">
           <img class="card-img-top" src="/assets/img/screenshots/breakthefake2019.jpg" alt="Break The Fake 2019 - 3rd Place Winner">
           <div class="card-body p-5">
             <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Hackathon</a>
             <h3 class="h5 font-weight-medium">
               <a href="https://breakthefake2019.gigamike.net/" target="_blank">Break The Fake 2019 - 3rd Place Winner</a>
             </h3>
             <p>Addressing the asian struggle on fake news and disinformation through technology. I created an app that certify or badge a blog, a yellow pages and portal of certified blogs and APIs. For more details please check my blog "<a href="https://www.alexachamp.com/breakthefake-manila-hackathon-2019-experience/" target="_blank">BreakTheFake Manila Hackathon 2019 Experience</a>".</p>
           </div>

           <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
             <div class="media align-items-center">
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="PHP">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/php.png" alt="PHP">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Zend Framework">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/zf.png" alt="Zend Framework">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Alexa Skills">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/alexa.png" alt="Alexa Skills">
               </div>
               <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                 <a href="https://breakthefake2019.gigamike.net/" target="_blank">Demo</a>
               </div>
             </div>
           </div>
         </article>
         <!-- End Blog Card -->
       </div>

       <div class="col-md-6 mb-5">
         <!-- Blog Card -->
         <article class="card shadow h-100">
           <img class="card-img-top" src="/assets/img/screenshots/hackmanila2018.jpg" alt="HackManila 2018 - 1st Place Winner">
           <div class="card-body p-5">
             <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Hackathon</a>
             <h3 class="h5 font-weight-medium">
               <a href="https://hackmanila2018.gigamike.net/" target="_blank">HackManila 2018 - 1st Place Winner</a>
             </h3>
             <p>Hack Manila 2018 was the first of August 99’s large-scale hackathons. "Mik Galon, aka GigaMike, built a remarkable system that impressed every Hack Manila mentor. He succeeded in creating an app for the PartnerPortal Challenge, sponsored by Oqulo, which allows users to avail great products from brand partners at discounted rates.

He also added more capabilities to his app that went above and beyond the expectations for the weekend’s hackathon, such as a 360° VR Product Preview, Alexa Skills using an Amazon Echo, and a Payment Gateway via Blockchain.

What’s even more impressive is that he achieved all these on his own one-man-team." <a href="https://hackmanila.com/" target="_blank">hackmanila.com</a></p>
           </div>

           <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
             <div class="media align-items-center">
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="PHP">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/php.png" alt="PHP">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Zend Framework">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/zf.png" alt="Zend Framework">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Alexa Skills">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/alexa.png" alt="Alexa Skills">
               </div>
               <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                 <a href="https://hackmanila2018.gigamike.net/" target="_blank">Demo</a>
               </div>
             </div>
           </div>
         </article>
         <!-- End Blog Card -->
       </div>

       <div class="col-md-6 col-lg-4 mb-5">
         <!-- Blog Card -->
         <article class="card shadow h-100">
           <img class="card-img-top" src="/assets/img/screenshots/clashofcode2019.jpg" alt="Clash Of Code 2019 - 3rd Place Winner">
           <div class="card-body p-5">
             <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Hackathon</a>
             <h3 class="h5 font-weight-medium">
               <a href="https://clashofcodes2019.gigamike.net/" target="_blank">Clash Of Code 2019 - 3rd Place Winner</a>
             </h3>
             <p>Its an 8 hours hackathon wherein you need to create an event app similar to eventbrite with admin and using MultiSys API such as Bayad Center and SMS API. For more details please check my blog "<a href="https://www.alexachamp.com/clash-of-code-2019-hackathon-experience/" target="_blank">Clash of Code 2019 Hackathon Experience</a>".</p>
           </div>

           <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
             <div class="media align-items-center">
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="PHP">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/php.png" alt="PHP">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Zend Framework">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/zf.png" alt="Zend Framework">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Alexa Skills">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/alexa.png" alt="Alexa Skills">
               </div>
               <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                 <a href="https://clashofcodes2019.gigamike.net/" target="_blank">Demo</a>
               </div>
             </div>
           </div>
         </article>
         <!-- End Blog Card -->
       </div>

       <div class="col-md-6 col-lg-4 mb-5">
         <!-- Blog Card -->
         <article class="card shadow h-100">
           <img class="card-img-top" src="/assets/img/screenshots/devconraspberrypi2018.jpg" alt="Devcon Raspberry PI Hackathon 2018 - 1st Place Winner">
           <div class="card-body p-5">
             <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Hackathon</a>
             <h3 class="h5 font-weight-medium">
               <a href="" target="_blank">Devcon Raspberry PI Hackathon 2018 - 1st Place Winner</a>
             </h3>
             <p>I created a security app using motion sensors. Everytime a motion is detected, i send an email and SMS notification to owner.</p>
           </div>

           <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
             <div class="media align-items-center">
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="Raspberry PI">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/raspberrypi.png" alt="Raspberry PI">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Python">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/python.png" alt="Python">
               </div>
             </div>
           </div>
         </article>
         <!-- End Blog Card -->
       </div>



       <div class="col-md-6 col-lg-4 mb-5">
         <!-- Blog Card -->
         <article class="card shadow h-100">
           <img class="card-img-top" src="/assets/img/screenshots/codeforthekingdom2017.jpg" alt="Code For The Kingdom 2017 - Champion">
           <div class="card-body p-5">
             <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Hackathon</a>
             <h3 class="h5 font-weight-medium">
               <a href="https://c4tk2016.gigamike.net" target="_blank">Code For The Kingdom 2017 - Champion</a>
             </h3>
             <p>I developed a web app called Douleuo. Douleuo is a greek word meaning to serve someone which the word ministry is derived from. Its a ministry portal for OFW and its family to easily reach out for ministries.</p>
           </div>

           <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
             <div class="media align-items-center">
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="PHP">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/php.png" alt="PHP">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Zend Framework">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/zf.png" alt="Zend Framework">
               </div>
               <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                 <a href="https://c4tk2016.gigamike.net" target="_blank">Demo</a>
               </div>
             </div>
           </div>
         </article>
         <!-- End Blog Card -->
       </div>

       <div class="col-md-6 mb-5">
         <!-- Blog Card -->
         <article class="card shadow h-100">
           <img class="card-img-top" src="/assets/img/screenshots/googlecodeblaze2016.jpg" alt="Google CodeBlaze 2017 - 3rd Place Winner">
           <div class="card-body p-5">
             <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Hackathon</a>
             <h3 class="h5 font-weight-medium">
               <a href="https://codeblaze2017.gigamike.net/" target="_blank">Google CodeBlaze 2017 - 3rd Place Winner</a>
             </h3>
             <p>The theme of Google CodeBlaze 2017 was to help Small Medium Enterprise (S.M.E.) businesses. I created a portal web app where S.M.E.'s can loan.</p>
           </div>

           <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
             <div class="media align-items-center">
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="PHP">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/php.png" alt="PHP">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Zend Framework">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/zf.png" alt="Zend Framework">
               </div>
               <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                 <a href="https://codeblaze2017.gigamike.net/" target="_blank">Demo</a>
               </div>
             </div>
           </div>
         </article>
         <!-- End Blog Card -->
       </div>

       <div class="col-md-6 mb-5">
         <!-- Blog Card -->
         <article class="card shadow h-100">
           <img class="card-img-top" src="/assets/img/screenshots/peacehack2016.jpg" alt="P.E.A.C.E. Hack 2016 - 2nd Place Winner">
           <div class="card-body p-5">
             <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">Hackathon</a>
             <h3 class="h5 font-weight-medium">
               <a href="https://peacehack2016.gigamike.net" target="_blank">P.E.A.C.E. Hack 2016 - 2nd Place Winner</a>
             </h3>
             <p>Perceive, Engage, Alert, Communicate, Educate or P.E.A.C.E. which is the theme of the said hackathon. I created an web app which is an opinion mining for N.G.O.s. Scrapping twitter sentiment analysis and news in Philippines.</p>
           </div>

           <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
             <div class="media align-items-center">
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="PHP">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/php.png" alt="PHP">
               </div>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="Zend Framework">
                 <img class="img-fluid rounded-circle" src="/assets/img/icons/zf.png" alt="Zend Framework">
               </div>
               <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                 <a href="https://peacehack2016.gigamike.net" target="_blank">Demo</a>
               </div>
             </div>
           </div>
         </article>
         <!-- End Blog Card -->
       </div>

     </div>

   </div>
   <!-- End Blog Card Section -->

   <!-- Subscribe Section -->
   <div class="space-1">
     <div class="bg-img-hero">
       <div class="container">
         <!-- Title -->
         <div class="w-md-60 text-center mx-auto mb-7">
           <h2 class="font-weight-semi-bold">Hire Me Now</h2>
           <p><a href="/pdf/MichaelGerardGalonCV.pdf">Download my resume</a></p>
         </div>
         <!-- End Title -->

       </div>
     </div>
   </div>
   <!-- End Subscribe Section -->
@endsection
