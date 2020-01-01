@extends('layouts.template')
@section('content')
         <div class="container">
             <div class="row offset-1 ">
                 <div class="col-4 d-none d-md-block">
                    <img src="{{asset('img/page5.svg')}}" alt="" class="img-fluid">
                 </div>
                 <div class="col-md-8">
                     <h3 class="text-muted mt-5">Hi Username lets get started in finding you a counsellor</h3>
                     <p class="text-muted text-justify">Please ensure the information you are entering is accurate. That is how we will contact Don't worry your details are safe with me</p>
                     <p class="color font-weight-bold">STEP 2 OF 3</p>
                     <form action="">
                            <div class="form-group">
                                    <label for="email">Enter Your Email address</label>
                                    <input type="email" class="form-control w-75" placeholder="Eg Annie@email.com " id="email" aria-describedby="emailHelp">
                                  </div>
                            <div class="form-group mb-5">
                                    <label for="phone">Enter Your Phone Number</label>
                                    <div class="d-flex w-75">
                                    <select class="form-control w-25 mr-2" id="country">
                                            <option>234</option>
                                    </select>
                                    <input type="text" class="form-control w-75" placeholder="23456789" id="phone" aria-describedby="emailHelp">
                                    </div>
                                  </div>
                               <div class="d-flex justify-content-between mt-5 w-75">
                                    <button class="btn btn-outline-success px-5">back</button>
                                    <button class="btn btn-success px-5">Next</button>
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
                  <div class="row mt-3 mr-3 d-md-none d-flex justify-content-end">
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
