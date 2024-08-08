
@push('styles')
     <link rel="stylesheet" href="{{asset('web/css/vendoor/about.css')}}">
     <link rel="stylesheet" href="{{asset('web/css/vendoor/logoslider.css')}}">
     <link rel="stylesheet" href="{{asset('web/css/vendoor/team.css')}}">
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
    
  <body>
  @include('components.web-menu')
      <section class="banner sm" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="500">
        
        <img class="w-100" src="{{asset('web/images/banner/about.png')}}" alt="" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="500">
        <div class="container banner-content" >
            <div class="row">
                <div class="col-md-7" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1000">
                    <h1>About</h1>
                </div>
            </div>
        </div>
      <div class="banner-bottom" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="2000">
        <div class="container">
            <ul class="d-flex">
                <li><a href="{{url('about')}}">About</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
            </ul>
        </div>
      </div>
      </section>
      <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <h4 class="title" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="500" data-aos-offset="0">About Our Industry</h4>
                    <p data-aos="fade-up" data-aos-duration="3000">Our industry is at the forefront of innovative engineering solutions, utilizing cutting-edge technology and strategies to deliver proactive domination in the field. We are evolving with the new normal, moving towards streamlined cloud solutions and encouraging user-generated content. </p>
                    <p data-aos="fade-up" data-aos-duration="3000">Our approach is centered on win-win survival strategies, ensuring the highest standard of service.</p>
                </div>
            </div>
        </div>
      </section>
      <section class="about-section-second">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 img-box">
                    <img src="{{asset('web/images/about/about4.4.png')}}" class="w-100" alt="" data-aos="zoom-in-left" data-aos-duration="1000">
                </div>
                <div class="col-md-6">
                    <div class="content-box">
                        <h4 class="title" data-aos="flip-right" data-aos-duration="2000">Our Approach</h4>
                        <p class="mb-3 mt-3" data-aos="flip-right" data-aos-duration="2000">At TeamOrange, we deliver innovative engineering solutions with a structured and collaborative approach, starting from thoroughly understanding and defining the core problem, conducting comprehensive research and analysis,</p>
                        <p class="mb-3" data-aos="flip-right" data-aos-duration="2000"> brainstorming and developing multiple concepts, creating detailed designs and prototypes, performing rigorous testing and evaluation, managing smooth implementation, providing ongoing monitoring and maintenance, and continuously refining solutions based on feedback and performance to ensure excellence and exceed expectations.</p>
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
                <div class="col-md-6 mt-5">
                    <h4 class="title" data-aos="fade-up" data-aos-duration="800">Company Vision    </h4>
                    <p data-aos="fade-up" data-aos-duration="1000">At TeamOrange, our vision is to become a global leader in engineering solutions by harnessing innovation and cutting-edge technology. We strive to revolutionize the industry with sustainable and impactful solutions that address complex challenges. </p>
                    <p data-aos="fade-up" data-aos-duration="2000">Our commitment is to push the boundaries of what’s possible, delivering exceptional value and creating a better, more advanced future for our clients and communities. Through excellence in design, a focus on continuous improvement, and a dedication to our core values, we aim to set new standards in engineering and inspire positive change worldwide.</p>
                    <!-- <a href="#" type="button" class="btn btn-primary btn-shadow" data-aos="fade-up" data-aos-duration="3000">More about us</a> -->
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 pe-0">
                            <img class="w-100" src="{{asset('web/images/about/about1.png')}}" alt="" data-aos="fade-left" data-aos-offset="100" data-aos-duration="500">
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <img class="w-100" src="{{asset('web/images/about/about2.png')}}" alt="" data-aos="fade-left" data-aos-offset="100" data-aos-duration="1000">
                                </div>
                                <div class="col-md-12">
                                    <img class="w-100" src="{{asset('web/images/about/about3.png')}}" alt="" data-aos="fade-left" data-aos-offset="100" data-aos-duration="2000">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      
      <div class="services-slider mt-5">
        <div class="container">
            <div class="row" id="logo-slder">
            @foreach($services as $se)
                <div class="">
                    <div class="services-slider-box">
                    <img class="w-100" src="{{asset('')}}storage/{{$se->img}}" alt="">

                    <div class="services-slider-content">
                            <h2 class="h4 fs-50"></h2>
                            <a href="{{url('services-view',$se->id)}}">{{$se->title}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
      </div>  
      
      <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <h5 class="title" data-aos="zoom-out-up" data-aos-duration="1000">Our Projects</h5>
                </div>
                <div class="col-md-4">
                    <div class="team-box" data-aos="zoom-out-up" data-aos-duration="500" >
                    <video width="100%" controls>
                        <source src="{{asset('web/videos/1.mp4')}}" type="video/mp4">
                    </video>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-box" data-aos="zoom-out-up" data-aos-duration="500" >
                    <video width="100%" controls>
                        <source src="{{asset('web/videos/2.mp4')}}" type="video/mp4">
                    </video>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-box" data-aos="zoom-out-up" data-aos-duration="500" >
                    <video width="100%" controls>
                        <source src="{{asset('web/videos/3.mp4')}}" type="video/mp4">
                    </video>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-box" data-aos="zoom-out-up" data-aos-duration="500" >
                    <video width="100%" controls>
                        <source src="{{asset('web/videos/4.mp4')}}" type="video/mp4">
                    </video>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-box" data-aos="zoom-out-up" data-aos-duration="500" >
                    <video width="100%" controls>
                        <source src="{{asset('web/videos/5.mp4')}}" type="video/mp4">
                    </video>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-box" data-aos="zoom-out-up" data-aos-duration="500" >
                    <video width="100%" controls>
                        <source src="{{asset('web/videos/6.mp4')}}" type="video/mp4">
                    </video>
                    </div>
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