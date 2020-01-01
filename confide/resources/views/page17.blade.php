@extends('layouts.template')
@section('content') 
         <div class="container">
            <div class="row mt-5 offset-1">
                <h3 class="text-muted mb-4">Hi there, i am jummy and you are?</h3>
             </div>
           <div class="row offset-1">
             <div class="col-lg-6">
                <form>
                    <div class="form-group">
                        <label for="username" class="text-muted mb-2">Enter your full name</label>
                        <input type="text" class="form-control form-control-sm w-75" id="username" aria-describedby="emailHelp">
                      </div>
                      <div class="text-muted mt-4 mb-2">What is your gender</div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                        <label class="form-check-label" for="male">male</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="female">female</label>
                      </div>
                      <div class="form-group">
                          <label for="email" class="text-muted mb-2 mt-4">Enter Your Email address</label>
                          <input type="email" class="form-control form-control-sm w-75" placeholder="Eg Annie@email.com " id="email" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="text-muted mb-2 mt-4">Enter Your Phone Number</label>
                            <div class="d-flex w-75">
                            <select class="form-control form-control-sm w-25 mr-2" id="phone">
                                    <option>234</option>
                            </select>
                            <input type="text" class="form-control form-control-sm w-75" placeholder="23456789" id="phone" aria-describedby="emailHelp">
                            </div>
                          </div>
                      

                          </form>
             </div>
             <div class="col-lg-6">
                <form>
                    <div class="form-group">
                        <label for="country" class="text-muted mb-2 mt-4 mt-lg-0">Your country</label>
                        <select class="form-control form-control-sm w-75" id="country">
                            <option>-select-</option>
                            <option>Nigeria</option>
                            <option>Spain</option>
                            <option>France</option>
                            <option>Argentina</option>
                            <option>Italy</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="state" class="text-muted mb-2 mt-4 mt-lg-2">Your state</label>
                            <select class="form-control form-control-sm w-75" id="state">
                                <option>-select-</option>
                                <option>Lagos</option>
                                <option>Oyo</option>
                                <option>Sokoto</option>
                                <option>Kaduna</option>
                                <option>Delta</option>
                            </select>
                            </div>
                            <p class="text-muted mt-4 mt-lg-2 mb-2">which area do you need counselling<small class="color">(you can select multiple places)</small></p>
                            <div class="d-flex justify-content-between justify-content-md-start">
                                   <button class="btn btn-sm btn-outline-dark mr-md-3">Addiction</button>
                                   <button class="btn btn-sm btn-outline-dark mr-md-3">Abuse</button>
                                   <button class="btn btn-sm btn-outline-dark mr-md-3">Anger</button>
                                   <button class="btn btn-sm btn-outline-dark mr-md-3">Anxiety</button>
                                   <button class="btn btn-sm btn-outline-dark mr-md-3">Depression</button>
                               </div>
                            <div class="mt-4">
                                   <button class="btn btn-sm btn-outline-dark mr-2">Guidiance & Career</button>
                                   <button class="btn btn-sm btn-outline-dark mr-2">Marriage & Family</button>
                                   <button class="btn btn-sm btn-outline-dark">Relationship</button>
                            </div>
                            <div class="mt-4 mb-5 mb-lg-3">
                                   <button class="btn btn-sm btn-outline-dark mr-2">Rahabilitation</button>
                                   <button class="btn btn-sm btn-outline-dark">Trauma</button>
                            </div>       
                    </form>
             </div>
           </div>
           <div class="row justify-content-center mt-xl-2">
             <button class="btn btn-success px-5 mt-2 mt-lg-0">Continue</button>
            </div>
         </div>





         <div class="container">
            <div class="row d-none d-lg-block">  
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
                  <div class="row mt-4 mr-3 d-flex justify-content-end">
                      <a data-container="body" data-toggle="popover" data-html="true" data-placement="top" data-content="                                
                      <p><a class='font-weight-bold' id='c' href='#'>How it works</a><p>
                      <p><a class='font-weight-bold' id='o' href='#'>Community</a></p>
                      <p><a class='font-weight-bold' id='l' href='#'>FAQs</a></p>
                      <p><a class='font-weight-bold' id='a' href='#'>Contact us</a></p>
                      <p><a class='font-weight-bold' id='r' href='#'>Privacy & Terms</a></p>"> 
                    <img src="{{asset('img/popup.svg')}}" class="img-fluid d-block d-lg-none" alt="">
                  </a>
                  </div>
                </div> 
@endsection 