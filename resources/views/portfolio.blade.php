@extends('layouts/app')

@section('title', 'My Portfolio')

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
       @php
          $ctr = 0;
       @endphp
       @foreach($portfolios as $key => $portfolio)
         @php
          $ctr++;
         @endphp
       <div class=" @php
         if($ctr % 4 == 0){
           echo 'col-md-6 mb-5'; // large
         }elseif($ctr == 5){
           echo 'col-md-6 mb-5'; // large
           $ctr = 0;
         }else{
           echo 'col-md-6 col-lg-4 mb-5'; // small
         }
        @endphp">
         <!-- Blog Card -->
         <article class="card shadow h-100">
           <img class="card-img-top" src="/uploads/portfolio/{{ $portfolio->image_filename }}" alt="{{ $portfolio->name ?? '' }}">
           <div class="card-body p-5">
             <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#">{{ $portfolio->portfolioTag->name ?? '' }}</a>
             <h3 class="h5 font-weight-medium">
               <a href="{{ $portfolio->url ?? '' }}" target="_blank">{{ $portfolio->name ?? '' }}</a>
             </h3>
             <p>{!! $portfolio->description ?? '' !!}</p>
           </div>

           <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
             <div class="media align-items-center">
               @foreach($portfolio->stacks as $key => $stack)
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="{{ $stack->name ?? '' }}">
                 <img class="img-fluid rounded-circle" src="/uploads/icons/{{ $stack->image_filename }}" alt="{{ $stack->name ?? '' }}">
               </div>
                @endforeach
                <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                  <a href="{{ $portfolio->url ?? '' }}" target="_blank">Demo</a>
                </div>
             </div>
           </div>
         </article>
         <!-- End Blog Card -->
       </div>
       @endforeach

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
