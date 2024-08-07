
@push('styles')
     <link rel="stylesheet" href="{{asset('web/css/vendoor/contact.css')}}">
@endpush
@extends('layouts.web')

@section('content')
<style>
</style>
  <body>
    
  @include('components.web-menu')
    <section class="banner sm" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="500">
      <img class="w-100" src="{{asset('web/images/banner/contact.png')}}" alt="">
      <div class="container banner-content" >
          <div class="row">
              <div class="col-md-7" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1000">
                  <h1>Contact us</h1>
              </div>
          </div>
      </div>
      <div class="banner-bottom">
        <div class="container" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="2000">
            <ul class="d-flex">
                <li><a href="{{url('contact')}}">Contact</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
            </ul>
        </div>
      </div>
    </section>
      <div class="section contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="title" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="500">Drop us message</h4>
                    <p data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="900">Praising pain was born and I will give you a complete account of the system, and</p>

                    <form action="{{url('contact-save')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
                                <input value="{{old('first')}}" type="text" name="first" class="form-control" placeholder="First name">
                            @error('first')
                                <div class="error">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1500">
                                <input type="text" value="{{old('second')}}" name="second" class="form-control" placeholder="Second name">
                            @error('second')
                                <div class="error">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="2000">
                                <input type="text" value="{{old('email')}}" name="email" class="form-control" placeholder="Email">
                            @error('email')
                                <div class="error">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="2500">
                                <input type="text" value="{{old('phone')}}" name="phone" class="form-control" placeholder="Phone number">
                            @error('phone')
                                <div class="error">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="col-md-12 mb-4" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="3000">
                                <textarea name="message" value="{{old('message')}}" id="" rows="5" class="form-control"></textarea>
                            @error('message')
                                <div class="error">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="col-md-12" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="3000">
                                <button type="submit" class="btn btn-primary btn-shadow">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 address">
                    <h5 class="m-0" class="mt-100" data-aos="fade-down" data-aos-duration="500">Address</h5>
                    <a href="https://maps.app.goo.gl/hmVV9nz7nwS64pr97" target="_blank" data-aos="fade-down" data-aos-duration="1000">Westhill, Chungam, Calicut,<br> Kerala, India <br> Pin:673005</a>
                    <!-- <br> -->
                    <h5 class="m-0" data-aos="fade-down" data-aos-duration="1500">Email</h5>
                    <a href="mailto:teamorange007@gmail.com" target="_blank" data-aos="fade-down" data-aos-duration="2000">teamorange007@gmail.com</a>
                    <!-- <br> -->
                    <h5 class="m-0" data-aos="fade-down" data-aos-duration="2500">Phone</h5>
                    <a href="tel:9847219155" data-aos="fade-down" target="_blank" data-aos-duration="3000">+91 9895 72 80 07</a>
                </div>
            </div>
        </div>
      </div>
      @endsection