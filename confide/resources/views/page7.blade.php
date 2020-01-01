@extends('layouts.template')
@section('content')
         <div class="container">
           <div class="row offset-1 mt-5 mt-lg-3">
             <div class="d-none d-md-block col-4">
                <img src="{{asset('img/page7.svg')}}" alt="" class="img-fluid mt-5 mt-lg-2 mt-xl-0">
             </div>
             <div class="col-md-8 mt-3">
               <h3 class="mt-5 mb-3">Hi there, welcome to confide</h3>
               <p>I will like to know more about you</p>
               <form>
                  <div class="form-group mt-lg-4">
                    <label for="username" class="text-muted mb-3">Enter a username</label>
                    <input type="text" placeholder="Eg Annie" class="form-control w-75 col-lg-7 col-xl-6 mb-3" id="username" aria-describedby="emailHelp">
                  </div>
                  <div class="text-muted mt-4 mb-3">What is your gender</div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                    <label class="form-check-label" for="male">male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                    <label class="form-check-label" for="female">female</label>
                  </div>
                  <div class="mt-4 mt-lg-0">
                      <button type="submit" class="btn btn-success px-4 mt-lg-5">Continue</button>
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