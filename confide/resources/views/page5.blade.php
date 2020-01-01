@extends('layouts.template')
@section('content')
         <div class="container">
             <div class="row offset-1">
                 <div class="col-4 d-none d-md-block">
                     <img src="{{asset('img/page5.svg')}}" alt="" class="img-fluid">
                 </div>
                 <div class="col-md-8">
                     <h3 class="text-muted mt-5">Just one more thing left</h3>
                     <p class="color font-weight-bold mt-4">STEP 3 OF 3</p>
                     <p class="text-muted">which area do you need counselling<small class="color">(you can select multiple places)</small></p>
                     <div class="d-flex justify-content-between justify-content-lg-start">
                            <button class="btn btn-sm btn-outline-dark mr-lg-3">Addiction</button>
                            <button class="btn btn-sm btn-outline-dark mr-lg-3">Abuse</button>
                            <button class="btn btn-sm btn-outline-dark mr-lg-3">Anger</button>
                            <button class="btn btn-sm btn-outline-dark mr-lg-3">Anxiety</button>
                            <button class="btn btn-sm btn-outline-dark mr-lg-3">Depression</button>
                        </div>
                     <div class="mt-4">
                            <button class="btn btn-sm btn-outline-dark mr-2">Guidiance & Career</button>
                            <button class="btn btn-sm btn-outline-dark mr-2">Marriage & Family</button>
                            <button class="btn btn-sm btn-outline-dark">Relationship</button>
                     </div>
                     <div class="mt-4 mb-5">
                            <button class="btn btn-sm btn-outline-dark mr-2">Rahabilitation</button>
                            <button class="btn btn-sm btn-outline-dark">Trauma</button>
                     </div>
                     <div class="d-flex justify-content-between justify-content-lg-start w-75 mt-5">
                          <button class="btn btn-outline-success px-5 mr-5">back</button>
                         <button class="btn btn-success px-5 ">Next</button>
                     </div>
                 </div>
             </div>
         </div>




         <div class="container">
                <div class="row d-none d-md-block">  
                      <nav class="navbar navbar-expand-lg fixed-bottom navbar-light shadow col-10 offset-1">
                          <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
                                <a class='pb-2 mt-1 underline' id='c' href='#'>How it works</a>
                                <a class='pb-2 mt-1 underline' id='o' href='#'>Community</a>
                                <a class='pb-2 mt-1 underline' id='l' href='#'>FAQs</a>
                                <a class='pb-2 mt-1 underline' id='a' href='#'>Contact us</a>
                                <a class='pb-2 mt-1 underline' id='r' href='#'>Privacy & Terms</a>
                                </div>
                              </nav> 
                      </div>
                      <div class="row mt-4 mr-3 d-md-none d-flex justify-content-end">
                          <a data-container="body" data-toggle="popover" data-html="true" data-placement="top" data-content="                                
                          <p><a class='font-weight-bold' id='c' href='#'>How it works</a><p>
                          <p><a class='font-weight-bold' id='o' href='#'>Community</a></p>
                          <p><a class='font-weight-bold' id='l' href='#'>FAQs</a></p>
                          <p><a class='font-weight-bold' id='a' href='#'>Contact us</a></p>
                          <p><a class='font-weight-bold' id='r' href='#'>Privacy & Terms</a></p>"> 
                        <img src="{{asset('img/popup.svg')}} " class="img-fluid d-block d-md-none" alt="">
                      </a>
                      </div>
                    </div> 
    @endsection
    @section('m')
    mb-3
    @endsection