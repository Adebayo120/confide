@extends('layouts.template')
@section('content')
         <div class="container">
            <div class="row offset-1">
                    <div class="col-12 mt-5">
                            <h3>Send us a message</h3>
                        </div>
                        <div class="col-lg-5">
                            <form>
                                <div class="form-group">
                                  <label for="username" class="text-muted">Name</label>
                                  <input type="text" placeholder="eg annie" class="form-control mb-3" id="username" aria-describedby="name">
                                </div>
                                <div class="form-group">
                                  <label for="email" class="text-muted">Email</label>
                                  <input type="text" placeholder="eg annie180@gmail.com" class="form-control w-100 mb-3" id="email" aria-describedby="email">
                                </div>
                                <div class="form-group">
                                  <label for="phone" class="text-muted">Phone</label>
                                  <input type="text" placeholder="08023123731" class="form-control w-100 mb-3" id="phone" aria-describedby="phone">
                                </div>
                                <div class="text-muted mt-4 mb-3">Prefered method of communication</div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="communication" id="email" value="email">
                                  <label class="form-check-label" for="email">Email</label>
                                </div>
                                <div class="form-check form-check-inline ml-5">
                                  <input class="form-check-input" type="radio" name="communication" id="phone" value="phone">
                                  <label class="form-check-label" for="phone">Phone</label>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-5">
                          <form action="">
                                <div class="form-group mt-4 mt-lg-0">
                                        <label for="message" class="text-muted">Message</label>
                                        <textarea class="form-control" id="message" rows="12"></textarea>
                                      </div>
                                </form>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button class="btn btn-success px-5 mt-4">Submit</button>
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