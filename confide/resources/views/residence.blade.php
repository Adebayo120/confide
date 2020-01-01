@extends('layouts.template')
@section('content') 
         <div class="container">
             <div class="row offset-1">
                 <div class="col-4 d-none d-md-block">
                    <img src="{{asset('img/page5.svg')}}" alt="" class="img-fluid">
                 </div>
                 <div class="col-md-8 mt-3">
                     <h3 class="text-muted mt-5">Let me know where you reside</h3>
                     <p class="color font-weight-bold mt-4">STEP 2 OF 3</p>
                     <form action="">
                       <div class="form-group">
                               <label for="country" class="text-muted">Your country</label>
                               <select class="form-control col-9 col-lg-7" id="country">
                                   <option>-select-</option>
                                   <option>Nigeria</option>
                                   <option>Spain</option>
                                   <option>France</option>
                                   <option>Argentina</option>
                                   <option>Italy</option>
                               </select>
                               </div>
                       <div class="form-group">
                               <label for="state" class="text-muted">Your state</label>
                               <select class="form-control col-9 col-lg-7 " id="state">
                                   <option>-select-</option>
                                   <option>Lagos</option>
                                   <option>Oyo</option>
                                   <option>Sokoto</option>
                                   <option>Kaduna</option>
                                   <option>Delta</option>
                               </select>
                               </div>
                               <div class="d-flex justify-content-between justify-content-lg-start w-75 mt-5">
                                    <button class="btn btn-outline-success px-5 mr-5">back</button>
                                   <button class="btn btn-success px-5 ml-xl-5 ">Next</button>
                               </div>
                     </form>

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
                        <img src="{{asset('img/popup.svg')}}" class="img-fluid d-block d-md-none" alt="">
                      </a>
                      </div>
                    </div> 
@endsection
@section('m') 
mb-3
@endsection
