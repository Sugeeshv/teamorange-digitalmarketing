
@push('styles')
     <link rel="stylesheet" href="{{asset('web/css/vendoor/button.css')}}">
     <link rel="stylesheet" href="{{asset('web/css/vendoor/logoslider.css')}}">
     <link rel="stylesheet" href="{{asset('web/css/vendoor/about.css')}}">
     <link rel="stylesheet" href="{{asset('web/css/vendoor/services.css')}}">
@endpush
@extends('layouts.web')

@section('content')
  <body>
  @include('components.web-menu')
      <section class="banner">
        <img class="w-100" src="{{asset('web/images/banner/banner.png')}}" alt="" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="100">
        <div class="container banner-content" >
            <div class="row">
                <div class="col-md-9 m-auto text-center">
                    <h1 data-aos="fade-up" data-aos-duration="3000" data-aos-delay="500">Team orange waterproof works & also we undertake all kinds of civil construction works</h1>
                    <p class="fs-19" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="700">Explore our curated collection of stylish clothing and accessories tailored to your unique taste.</p>
                    <a type="button" href="{{url('services')}}" class="btn btn-primary btn-shadow" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="900">Explore Now</a>
                    <a type="button" href="{{url('contact')}}" class="btn btn-border pl-4" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1000">Contact us</a>
                </div>
                <div class="col-md-5" style="position: relative;" data-aos="fade-up" data-aos-duration="3000" >
                    <img class="comp1" src="{{asset('web/images/components/c1svg.svg')}}" alt="">
                    <!-- <img class="comp2" src="{{asset('web/images/components/c1svg.svg')}}" alt=""> -->
                </div>
            </div>
        </div>
      </section>
      <section class="banner-bottom" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
        <div class="container">
            <p>Explore our curated collection of stylish clothing</p>
        </div>
      </section>
      <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <h4 class="title" data-aos="fade-up" data-aos-duration="3000">About Our Industry</h4>
                    <p data-aos="fade-up" data-aos-duration="3000">Our industry is at the forefront of innovative engineering solutions, utilizing cutting-edge technology and strategies to deliver proactive domination in the field. We are evolving with the new normal, moving towards streamlined cloud solutions and encouraging user-generated content. </p>
                    <p data-aos="fade-up" data-aos-duration="3000">Our approach is centered on win-win survival strategies, ensuring the highest standard of service.</p>
                    <a href="#" type="button" class="btn btn-primary btn-shadow" data-aos="fade-up" data-aos-duration="3000">More about us</a>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 pe-0">
                            <img class="w-100" src="{{asset('web/images/about/about1.png')}}" alt="" data-aos="fade-left" data-aos-offset="100" data-aos-duration="500">
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <img class="w-100" src="{{asset('web/images/about/about2.png')}}" alt="" data-aos="fade-left" data-aos-offset="100" data-aos-duration="2000">
                                </div>
                                <div class="col-md-12">
                                    <img class="w-100" src="{{asset('web/images/about/about3.png')}}" alt="" data-aos="fade-left" data-aos-offset="100" data-aos-duration="1000">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <section class="about-section-second">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 img-box">
                    <img src="{{asset('web/images/about/about4.png')}}" class="w-100" alt="" data-aos="zoom-in-left" data-aos-duration="1000">
                </div>
                <div class="col-md-6">
                    <div class="content-box">
                        <h4 class="title" data-aos="flip-right" data-aos-duration="2000">Our Approach</h4>
                        <p class="mb-3 mt-3" data-aos="flip-right" data-aos-duration="2000">At TeamOrange, we deliver innovative engineering solutions with a structured and collaborative approach, starting from thoroughly understanding and defining the core problem, conducting comprehensive research and analysis,</p>
                        <p class="mb-3" data-aos="flip-right" data-aos-duration="2000"> brainstorming and developing multiple concepts, creating detailed designs and prototypes, performing rigorous testing and evaluation, managing smooth implementation, providing ongoing monitoring and maintenance, and continuously refining solutions based on feedback and performance to ensure excellence and exceed expectations.</p>
                        <div class="row mt-5">
                        <div class="row mt-5">
                            <div class="col-md-4 d-flex align-center" data-aos="zoom-in-left" data-aos-duration="1000">
                                <i class="fa fa-users fs-45" aria-hidden="true"></i>
                                <h4 class="fs-23 ms-2">Dedicated Team</h4>
                            </div>
                            <div class="col-md-4 d-flex align-center" data-aos="zoom-in-left" data-aos-duration="2000">
                                <i class="fa fa-phone fs-45" aria-hidden="true"></i>
                                <h4 class="fs-23 ms-2">Best Engineers</h4>
                            </div>
                            <div class="col-md-4 d-flex align-center" data-aos="zoom-in-left" data-aos-duration="3000">
                                <i class="fa fa-handshake-o fs-45" aria-hidden="true"></i>
                                <h4 class="fs-23 ms-2">24/7 Supports</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mt-50">
                    <h4 class="title" data-aos="fade-left" data-aos-offset="100" data-aos-duration="500">Our History</h4>
                    <p class="font-lora" data-aos="fade-left" data-aos-offset="100" data-aos-duration="1000">At TeamOrange, our journey is marked by innovation and growth.  Our goal was to deliver cutting-edge solutions with excellence.</p>
                    <p data-aos="fade-left" data-aos-offset="100" data-aos-duration="1000">Today, TeamOrange is at the forefront of engineering solutions. With a talented team and a strong portfolio, we push the boundaries of technology and design. We deliver exceptional results for our clients.</p>
                    <p data-aos="fade-left" data-aos-offset="100" data-aos-duration="1000">Looking ahead, we remain dedicated to our core values of [key values or principles]. Our history reflects our passion for engineering excellence. We are excited about the future and eager to continue our journey of success.</p>
                </div>
                <div class="col-md-4 offset-md-1" data-aos="zoom-in-down" data-aos-duration="1000">
                        <img src="{{asset('web/images/about/about5.png')}}" class="w-100" alt="">
                </div>
            </div>
        </div>
      </section>
      <!-- <div class="services-slider">
        <div class="container">
            <div class="row" id="logo-slder">
            @foreach($services as $se)
                <div class="col-md-4">
                    <div class="services-slider-box">
                    <img class="w-100" src="{{asset('')}}storage/{{$se->img}}" alt="">

                    <div class="services-slider-content">
                            <div class="h4 fs-20">{{$se->title}}</div>
                            <p>{{$se->shortdescription}}</p>
                            <a href="{{url('services-view',$se->id)}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
      </div> -->
      <!-- <section class="logoslider" data-aos="zoom-out-up" data-aos-duration="1000"  >
        <div class="container" id="logo-slder">
            <img src="{{asset('web/images/logo/1.png')}}" alt="">
            <img src="{{asset('web/images/logo/2.png')}}" alt="">
            <img src="{{asset('web/images/logo/3.png')}}" alt="">
            <img src="{{asset('web/images/logo/4.png')}}" alt="">
            <img src="{{asset('web/images/logo/5.png')}}" alt="">
            <img src="{{asset('web/images/logo/2.png')}}" alt="">
        </div>
      </section> -->
      <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="title" data-aos="zoom-out-left" data-aos-duration="1000">Our Services</h4>
                    <p class="font-lora" data-aos="zoom-out-left" data-aos-duration="1000">Lorem ipsum is a pseudo-Latin text used in web design typography layout </p>
                </div>
                @foreach($services as $se)
                <div class="col-md-4" data-aos="zoom-out-left" data-aos-duration="1000">
                    <div class="services-box">
                        <img class="w-100" src="{{asset('')}}storage/{{$se->thumbnail}}" alt="">
                        <div class="services-content">
                            <div class="h4 fs-20">{{$se->title}}</div>
                            <p>{{$se->shortdescription}}</p>
                            <a href="{{url('services-view',$se->id)}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
      </section>
      @endsection