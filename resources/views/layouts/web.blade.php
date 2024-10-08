<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>

    <!-- fa fa icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link href="{{asset('web/vendoor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- custom css -->
     <link rel="stylesheet" href="{{asset('web/css/vendoor/colors.css')}}">
     <link rel="stylesheet" href="{{asset('web/css/vendoor/font.css')}}">
     <link rel="stylesheet" href="{{asset('web/css/vendoor/nav.css')}}">
     <link rel="stylesheet" href="{{asset('web/css/vendoor/banner.css')}}">
     <link rel="stylesheet" href="{{asset('web/css/vendoor/button.css')}}">

     <link rel="apple-touch-icon" sizes="180x180" href="{{asset('web/images/favicon_io/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('web/images/favicon_io/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('web/images/favicon_io/favicon-16x16.png')}}">
<link rel="manifest" href="/site.webmanifest">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
     @stack('styles')

    <title>Team Orange</title>
  </head>

  @yield('content')

  <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{asset('web/images/logo.png')}}" alt="" data-aos="fade-up"
                    data-aos-duration="3000">
                    <p class="mt-3" data-aos="fade-up"
                    data-aos-duration="3000">Our industry is at the forefront of innovative engineering solutions, utilizing cutting-edge technology and strategies to deliver proactive domination in the field.   </p>
                </div>
                <div class="col-md-2" data-aos="fade-up"
                data-aos-duration="3000">
                    <ul>
                        <li class="heading"><a href="">SHOP</a></li>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('about')}}">About</a></li>
                        <li><a href="{{url('services')}}">Services</a></li>
                        <li><a href="{{url('contact')}}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3" data-aos="fade-up"
                data-aos-duration="3000">
                    <ul>
                        <li class="heading"><a href="">Services</a></li>
                        @foreach($sere as $ss)
                        <li><a href="{{url('services-view',$ss->id)}}">{{$ss->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-3" data-aos="fade-up"
                data-aos-duration="3000">
                    <p href="" class="heading">Stay up to date</p>
                    <!-- <form>
                        <div class="input-group mb-3">
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                          <button class="input-group-text">SUBMIT</button>
                        </div>
                    </form> -->
                    <div class="d-flex justify-between social-box mt-50" data-aos="fade-up"
                    data-aos-duration="3000">
                        <p>Social media</p>
                        <ul class="social">
                            <li><a href="tel:9847219155"> <i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.facebook.com/people/Team-orange-waterproofing-works/100068100332980/?mibextid=ZbWKwL" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            <!-- <li><a href=""><i class="fa fa-twitter" aria-hidden="true" target="_blank"></i></a></li> -->
                            <li><a href="https://www.instagram.com/team53034?igsh=MW52ODdqNGNoeTY2cA==" target="_blank"><i class="fa fa-instagram" aria-hidden="true" target="_blank"></i></a></li>
                            <!-- <li><a href=""><i class="fa fa-linkedin-square" aria-hidden="true" target="_blank"></i></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="bottom-footer">
                <ul class="ms-auto">
                    <li>Powerd by </li>
                    <li><a class="text-white text-primary" href="">Pixel media Solutions</a></li>
                </ul>
            </div>
        </div>
      </footer>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=9847219155&text=Hi." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
    <!-- <script src="./assets/vendoor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="{{asset('web/js/slick.js')}}"></script>
    @stack('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript to open modal on page load -->
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var exampleModal = new bootstrap.Modal(document.getElementById('exampleModal'));
        exampleModal.show();
      });
    </script>
  </body>
</html>