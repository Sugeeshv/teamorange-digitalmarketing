
@push('styles')
     <link rel="stylesheet" href="{{asset('web/css/vendoor/services.css')}}">
@endpush
@extends('layouts.web')

@section('content')
  <body>
    
    @include('components.web-menu')
    <section class="banner sm" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="500">
      <img class="w-100" src="{{asset('web/images/banner/services.png')}}" alt="">
      <div class="container banner-content" >
          <div class="row">
              <div class="col-md-7" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1000">
                  <h1>Services</h1>
              </div>
          </div>
      </div>
      <div class="banner-bottom" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="2000">
        <div class="container">
            <ul class="d-flex">
                <li><a href="{{url('services')}}">Services</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
            </ul>
        </div>
      </div>
    </section>
      <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="title" data-aos="zoom-out-left" data-aos-duration="1000">Our Services</h4>
                    <p class="font-lora" data-aos="zoom-out-left" data-aos-duration="1000">At TeamOrange, our journey is marked by innovation and growth. <br> Our goal was to deliver cutting-edge solutions with excellence. </p>
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
   
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
           <img class="w-100" src="{{asset('web/images/modal.jpeg')}}" alt="">
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>
      @endsection