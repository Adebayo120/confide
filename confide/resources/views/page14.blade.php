@extends('layouts.template')
@section('content') 
         <div class="container mr-5">
                <div class="row offset-1">
                    <div class="col-12">
                            <h3 class="mt-5">Privacy & Terms</h3>
                            <p class="text-muted mb-3">Confides terms of services</p>
                            <div>
                            <ol>
                                <li class="text-muted text-justify">
                                        <div class="font-weight-bold">Lorem</div>
                                   <div class="text-muted text-justify mr-3 mr-xl-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod doloremque magnam cum suscipit ut cumque voluptates nisi perspiciatis corrupti porro vel est sint aliquid, fugiat recusandae in accusamus deleniti. Nam tempore labore a, impedit voluptas, sequi magnam culpa quibusdam maiores minima quam totam facere molestias ipsum eaque consectetur? Ratione sequi quia, rem soluta tempora omnis et reprehenderit temporibus explicabo deserunt!</div>
                                </li>
                                <li class="mt-3 text-muted text-justify ">
                                  <div class="font-weight-bold">Lorem</div>
                                    <div class="text-muted text-justify mr-3 mr-xl-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod doloremque magnam cum suscipit ut cumque voluptates nisi perspiciatis corrupti porro vel est sint aliquid, fugiat recusandae in accusamus deleniti. Nam tempore labore a, impedit voluptas, sequi magnam culpa quibusdam maiores minima quam totam facere molestias ipsum eaque consectetur? Ratione sequi quia, rem soluta tempora omnis et reprehenderit temporibus explicabo deserunt!</div>
                                </li>
                            </ol>
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
                      <img src="{{asset('img/popup.svg')}}" class="img-fluid d-block d-md-none" alt="">
                    </a>
                    </div>
                  </div> 
@endsection