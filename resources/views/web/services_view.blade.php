
@push('styles')
     <link rel="stylesheet" href="{{asset('web/css/vendoor/services.css')}}">
@endpush
@extends('layouts.web')

@section('content')
<style>
/*DEMO STYlES*/

/* a:not(.lightbox-close) {
  display: inline-block;
  background: #d62c1a;
  height: 200px;
  width: 200px;
  line-height: 200px;
  font-size: 42px;
  text-align: center;
  color: #ffffff;
} */

/*LIGHTBOX STYLE*/
.lightbox {
  display: none;
  position: fixed;
  z-index: 999;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
}
.lightbox .lightbox-video {
  width: 100%;
  padding-bottom: 56%;
}
.lightbox iframe {
  /* position: absolute; */
  height: 400px;
  width: 100%;
  left: 0;
  right: 0;
}
.lightbox img {
  display: block;
  margin: 0 auto;
}
.lightbox .lightbox-close {
  position: absolute;
  display: block;
  top: 10px;
  right: 10px;
  color: #ffffff;
  font-size: 26px;
  height: 50px;
  width: 50px;
  background: rgba(255, 255, 255, 0.3);
  border: 3px solid #ffffff;
  border-radius: 50%;
  line-height: 50px;
  text-align: center;
}
.lightbox .lightbox-close:hover {
  text-decoration: none;
}
.lightbox .lightbox-container {
  max-width: 1024px;
  margin: 100px auto 25px;
}
</style>
  <body>
    
    @include('components.web-menu')
      <section class="banner">
        <img class="w-100" src="{{asset('')}}storage/{{$service->img}}" style="object-fit: cover;" alt="" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="100">
        <div class="container banner-content" >
            <div class="row">
                <div class="col-md-7">
                    <h1 data-aos="fade-up" data-aos-duration="3000" data-aos-delay="500">{{$service->title}}</h1>
                    <p class="fs-19" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="700">{{$service->shortdescription}}</p>
                    @if(!empty($service->url))
                    <a href="#lightbox" class="lightbox-toggle btn btn-border pl-4" data-lightbox-type="video" data-lightbox-content="{{$service->url}}" data-aos-duration="3000" data-aos-delay="1000"> Video</a>
                    @endif

                    
                </div>
                <div class="col-md-5" style="position: relative;" data-aos="fade-up" data-aos-duration="3000" >
                    <img class="comp1" src="{{asset('web/images/components/c1svg.svg')}}" alt="">
                    <!-- <img class="comp2" src="{{asset('web/images/components/c1svg.svg')}}" alt=""> -->
                </div>
            </div>
        </div>
      <div class="banner-bottom" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="2000">
        <div class="container">
            <ul class="d-flex">
                <li><a href="{{url('services')}}">Services</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><p>{{$service->title}}</p></li>
            </ul>
        </div>
      </div>
      </section>
      <section class="mt-40 mb-5 services-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-left">{!!$service->description!!}</p>
                </div>
            </div>
        </div>
      </section>
   
      @endsection
      @push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
      <script>
        $('body').append(`
    <div class="container">
    <div class="row">
    <div class="col-md-6">
    <div class="lightbox">
      <a href="#lightbox" class="lightbox-close lightbox-toggle">X</a>
      <div class="lightbox-container">
        <div class="row">
          <div class="col-sm-12 lightbox-column">
            
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
  `);

$('.lightbox-toggle').on('click', (event) => {
  event.preventDefault();
  $('.lightbox').fadeToggle('fast');
  
  let context = $(event.currentTarget).attr('data-lightbox-type');
  let content = $(event.currentTarget).attr('data-lightbox-content');
  console.log(event);
  if (context == 'video') {
    $('.lightbox-column').append(`
        <div class="lightbox-video">
        <iframe src="${content}" frameborder="0" allowfullscreen> </iframe>
        </div>
    `);
  } else if (context == 'image') {
    $('.lightbox-column').append(`
        <img src="${content}" class="img-" frameborder="0" allowfullscreen>
    `);
  }
});

$('.lightbox-close').on('click', (event) => {
  event.preventDefault();
  $('.lightbox-column > *').remove();
});
      </script>
      @endpush