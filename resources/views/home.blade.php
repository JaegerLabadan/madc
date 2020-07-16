<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/hero-section.css') }}" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/message.css') }}" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Marck+Script&display=swap');
    </style>
    
    {{-- <script src="{{ asset('js/script.js') }}" ></script> --}}
    {{-- <script src="{{ asset('js/demo.js') }}"></script> --}}
    
    <title>MADC Clinique</title>
  </head>
  
  <body>

  <div class="container-fluid about-contain">
<!-- ------------------------------------------------------------------------------------------>
    <!-- ||  HERO SECTION  || -->  
    <!-- mobile version hero-section row -->
      <div class="row hero-mobile">
        <div class="flex-container mobhero-content mx-auto">
              <div class="mob-logo ">
              <img  class="img-fluid" src="{{ asset('img/madc-logo-black.png') }}" alt="MADC-logo">
              </div>
              <div class="mobhero-text ">
                <h1> The smile make-over specialist</h1>
              </div>
              <div class="mobhero-button">
                <button type="button" class="mobhero-btn" data-toggle="modal" data-target="#exampleModalCenter"><span class="mx-auto">Start Your Smile Make-over Now</span></button>
              </div>

        </div>
      </div> 
      <!-- end of mobile hero row -->

      <!-- desktop version hero-section row -->
      <!-- modal for appointment form -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-center" id="exampleModalLongTitle">Appointment Form</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
              <form method="GET" action="">
                
                <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label for="">Full Name</label>
                      <input id="userName" type="text" class="form-control" name="fullname" placeholder="Enter Full Name">
                    </div>
                  </div> 
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label for="">Phone</label>
                      <input id="userPhone" type="tel" class="form-control" name="phone" placeholder="xxxx-xxxx-xxx">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label for="">Email</label>
                      <input id="userEmail" type="email" class="form-control" name="email" placeholder="Enter Email">
                    </div>
                  </div>  
              </div>
                <div class="row">
                  <div class="col-md-6">
                    <label for="service">Service</label>
                    <input type="hidden" name="service" id="userService" data-time="">
                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle custom-select" type="button" id="dropdownServices" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Choose Service
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdowdropdownServicesnMenuButton">
                        <a class="dropdown-item" href="#" data-service="Consultation" data-time="30">Consultation - 30 mins</a>
                        <a class="dropdown-item" href="#" data-service="Tooth Extraction" data-time="30">Tooth Extraction - 30 mins</a>
                        <a class="dropdown-item" href="#" data-service="Oral prophylaxis" data-time="30">Oral prophylaxis - 30 mins</a>
                        <a class="dropdown-item" href="#" data-service="Orthodontics adjustment" data-time="30">Orthodontics adjustment - 30 mins</a>
                        <a class="dropdown-item" href="#" data-service="Orthodontic installation" data-time="60">Orthodontic installation- 1 hour </a>
                        <a class="dropdown-item" href="#" data-service="Composite veneers" data-time="180">Composite veneers - 3 hours</a>
                        <a class="dropdown-item" href="#" data-service="All porcelain veneers" data-time="180">All porcelain veneers - 3 hours</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="date">Date</label>
                      <input id="userDate" class="form-control" type="date">
                    </div>
                  </div>
                </div>

                <div class="tab ">
                  <input type="hidden" id="userSlot" value="slot 1">
                  <button type="button" class="tablinks modal-appointment-btn1" data-val="slot 1">SEAT A</button>
                  <button type="button" class="tablinks modal-appointment-btn2" data-val="slot 2">SEAT B</button>
                  <button type="button" class="tablinks modal-appointment-btn2" data-val="slot 3">SEAT C</button>
                </div>

                <div class="form-group time-holder">
                  <label for="time">Available Time</label><small class="alert-no-time">Please wait for a seconds after changing the date/service/slot.</small>
                  <div id="timetable">
                    <select class="custom-select" id="timeSelector">
                      <option disabled selected>Choose Time</option>
                    </select>
                  </div>
                </div>

                <div class="form-group text-center">
                  <div id="alertArea" class="hide">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Success!</strong> Someone will be in touch with you shortly to confirm your appointment.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  </div>
                </div>
               
              </form>
               {{-- calendar appointment for today --}}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn submit-btn" id="submitAppointment">Submit</button>
          </div>
          </div>
        </div>
      </div>
      
      <div class="row hero-row">
        <div class="flex-container hero-topbar">
            <div class="hero-logo ">
               <img  class="img-fluid mx-auto " src="{{ asset('img/madc-logo-black.png') }}" alt="MADC-logo">
            </div>
            <div class="hero-text ml-auto my-auto">
                <span >(088) 855-0225 | 0917-771-9565</span>
                <span style="color:#db5b02;">009 Patag 6th Division</span><span style="margin-left: -2vw;">, Cagayan De Oro City</span>
                <a href=""><i class="fab fa-facebook hero-icon"></i></a>
                <a href=""><i class="fab fa-instagram hero-icon"></i></a>
            </div>
        </div>

        <div class="flex-container hero-content ">
          <video id="videoBG" poster="poster.JPG" autoplay muted loop>
            <source src="{{ asset('videos/MADC-FB-HD-720p.mov') }}" type="video/mp4">
          </video>
                <div class="hero-left m-auto ">
                    <div class="hero-left-txt ">
                    <h1> The smile make-over specialist</h1>                    
                      <button type="button" class="mobhero-btn" data-toggle="modal" data-target="#exampleModalCenter"><span class="mx-auto">Start Your Smile Make-over Now</span></button>
                    </div>
                </div>
        </div>


      </div> <!-- end of desktop hero row -->

<!-- ------------------------------------------------------------------------------------------>
    <!-- ||  MESSAGE SECTION  || -->  
    <!-- mobile version message-section row -->
    <div class="message-mobile"> 
        <div class="row  message-content">
          <div class="flex-container message-text mx-auto">
            <h2><span style="color:#db5b02;"> your safety is  our primary concern</span><br> our fight against covid-19</h2>
          </div>
        </div> 

        <div class="row  message-video">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xLuyek3YjYk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div> 
    </div>
    <!-- end of mobile message row -->

    <!-- desktop version message-section row -->
    <div class="row message-desktop">
          <div class="col-md-6 msg-left  ">
              <div class="embed-responsive embed-responsive-4by3 msg-vid ">
                <iframe class="embed-responsive-item " src="https://www.youtube.com/embed/xLuyek3YjYk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
          </div>

          <div class="col-md-6 msg-right ">
            <h2 class="text-center">Your Safety is our primary concern</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
              exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute 
              irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
              pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
              deserunt mollit anim id est laborum.</p>
              
          </div>

        
    </div> <!-- end of desktop message row -->
<!-- ------------------------------------------------------------------------------------------>
   <!-- ||  SERVICES SECTION  || -->
        <!-- {{-- DESKTOP VERSION --}}
        {{-- service text --}} -->
        <section>
          <div class="row p-0 service-text" >
              <div class="text-center col-md-2 pr-md-0"></div>
              <div class="text-center col-md-8 pr-md-0">
                  <h3>our smile make-over specialty</h3>
              </div>
              <div class="text-center col-md-2 pr-md-0"></div>
          </div>
        </section>
          <!-- {{-- service images & details --}} -->
          <div class="row justify-content-center services">
              <div class="col-md-1"></div>
              <div class="col-md-2 text-center ml-1 service">
                  <div class="service-label1" >
                      <h2>dental <br> implant</h2>
                  </div>
                  <img src="{{ asset('photos/services/dental-implant.png') }}" class="img-fluid service-img" alt="Responsive image">
                
                  <div class="service-description1">
                      <div class="text"><h6>
                          <h3>dental implant</h3>
                          <br>
                          <h5>
                          ipsum  dolor sit amet, consectetur
                          adipiscing elit. Mauris et luctus
                          massa. Morbi ornare vulputate libero,
                          non tincidunt tortor fringilla ut. 
                          </h5>
                          </h6>
                  </div>
                  </div>
              </div>

              <div class="col-md-2 text-center ml-1 service">
                  <div class="service-label2">
                      <h2>composite <br> veeners</h2>
                  </div>
                  <img src="{{ asset('photos/services/composite-veeners.png') }}" class="img-fluid service-img" alt="Responsive image">
                  <div class="service-description2">
                      <div class="text">
                          <h3>composite veeners</h3>
                          <br>
                          <h5>
                          ipsum  dolor sit amet, consectetur
                          adipiscing elit. Mauris et luctus
                          massa. Morbi ornare vulputate libero,
                          non tincidunt tortor fringilla ut. 
                          </h5>
                  </div>
                  </div>
              </div>

              <div class="text-center col-md-2 ml-1 service">
                  <div class="service-label3" >
                      <h2>acrylic <br> crowns</h2>
                  </div>
                  <img src="{{ asset('photos/services/acrylic-crowns.png') }}" class="img-fluid service-img" alt="Responsive image">
                  <div class="service-description3">
                      <div class="text">
                          <h3>acrylic crowns</h3>
                          <br>
                          <h5>
                          ipsum  dolor sit amet, consectetur
                          adipiscing elit. Mauris et luctus
                          massa. Morbi ornare vulputate libero,
                          non tincidunt tortor fringilla ut. 
                          </h5>
                  </div>
                  </div>
              </div>

              <div class="text-center col-md-2 ml-1 service">
                  <div class="service-label4">
                      <h2>smile <br> makeover</h2>
                  </div>
                  <img src="{{ asset('photos/services/smile-makeover.png') }}" class="img-fluid service-img" alt="Responsive image">
                  <div class="service-description4">
                      <div class="text">
                          <h3>smile makeover</h3>
                          <br>
                          <h5>
                          ipsum  dolor sit amet, consectetur
                          adipiscing elit. Mauris et luctus
                          massa. Morbi ornare vulputate libero,
                          non tincidunt tortor fringilla ut. 
                          </h5>
                  </div>
                  </div>
              </div>

              <div class="col-md-1"></div>
          </div>

          <div class="row service-button " >
              <div class="text-center col-md-4 pr-md-0 "></div>
              <div class="text-center col-md-4 pr-md-0">
                  <button>see all services</button>
              </div>
              <div class="text-center col-md-4 pr-md-0"></div>
          </div>
       <!-- {{-- MOBILE VERSION --}} -->
       <div class="mobile-section-contain">
        <div class="row services-mobile">
            <div class="col-12 p-0" style="height:auto;margin:0;">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" style="height:100%">
                  <div class="carousel-item active">
                    <div class="row justify-content-center services-list-mobile"> 
                        <div class="col-5 text-center mobile-service mobile-service-hover">
                            <div class="service-label2">
                                <h2>composite <br> veeners</h2>
                            </div>
                            <img src="{{ asset('photos/services/composite-veeners.png') }}" class="d-block w-100" alt="Responsive image" style="background-size: cover;">
                            <div class="service-description2">
                                <div class="text">
                                    <h3>composite veeners</h3>
                                    
                                    <h5>
                                    Ipsum  dolor sit amet, consectetur
                                    adipiscing elit. mauris et luctus
                                    massa. Morbi ornare vulputate libero,
                                    non tincidunt tortor fringilla ut. 
                                    </h5>
                            </div>
                            </div>
                        </div>
                        <div class="col-5 ml-3 text-center mobile-service1 mobile-service-hover1">
                            <div class="service-label3">
                                <h2>acrylic <br> crowns</h2>
                            </div>
                            <img src="{{ asset('photos/services/acrylic-crowns.png') }}" class="d-block w-100" alt="Responsive image" style="background-size: cover;">
                            <div class="service-description3">
                                <div class="text">
                                    <h3>acrylic crowns</h3>
                                    
                                    <h5>
                                    Ipsum  dolor sit amet, consectetur
                                    adipiscing elit. mauris et luctus
                                    massa. Morbi ornare vulputate libero,
                                    non tincidunt tortor fringilla ut. 
                                    </h5>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                  <div class="carousel-item">
                    <div class="row justify-content-center services-list-mobile">
                        <div class="col-5 text-center mobile-service2 mobile-service-hover2">
                            <div class="service-label1">
                                <h2>dental <br> implant</h2>
                            </div>
                            <img src="{{ asset('photos/services/dental-implant.png') }}" class="d-block w-100" alt="Responsive image" style="background-size: cover;">
                            <div class="service-description1">
                                <div class="text">
                                    <h3>composite veeners</h3>
                                    
                                    <h5>
                                    Ipsum  dolor sit amet, consectetur
                                    adipiscing elit. mauris et luctus
                                    massa. Morbi ornare vulputate libero,
                                    non tincidunt tortor fringilla ut. 
                                    </h5>
                            </div>
                            </div>
                        </div>
                        <div class="col-5 ml-3 text-center mobile-service3 mobile-service-hover3">
                            <div class="service-label4">
                                <h2>smile <br> makeover</h2>
                            </div>
                            <img src="{{ asset('photos/services/smile-makeover.png') }}" class="d-block w-100" alt="Responsive image" style="background-size: cover;">
                            <div class="service-description4">
                                <div class="text">
                                    <h3>acrylic crowns</h3>
                                    
                                    <h5>
                                    Ipsum  dolor sit amet, consectetur
                                    adipiscing elit. mauris et luctus
                                    massa. Morbi ornare vulputate libero,
                                    non tincidunt tortor fringilla ut. 
                                    </h5>
                            </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            
        </div>
        <div class="row mobile-service-button" style="padding: 0;margin-top:1.8vw;">
            <div class="text-center col-md-4 pr-md-0"></div>
            <div class="text-center col-md-4 pr-md-0">
                <button>see all smile make-over services</button>
            </div>
            <div class="text-center col-md-4 pr-md-0"></div>
        </div>
      </div>

      <!-- {{-- testimonial carousel --}} -->
          <div class="row testimonial ">
            <div class="col testimonial-car">
                <div id="carouselExampleInterval" class="carousel slide testi-carousel " data-ride="carousel">
                <div class="carousel-inner testi-inner">
                
                  <div class="carousel-item active testi-bg " data-interval="10000">
                    <div class="row align-items-center testi-row">  
                    <div class="col-12 align-self-center testi-content">
                    <img class="d-block img-fluid pr-1 testi-img" src="{{ asset('photos/testimonial.png') }}" alt="First slide">
                    <span class="testi-desc pl-1" style="display: block"><p class="testi-name">tina arena</p>
                      <p class="testi-service">dental implant</p>
                      <p class="testi-msg"> Ipsum  dolor sit amet, consectetur
                      adipiscing elit. Mauris et luctus
                      massa. Morbi ornare vulputate libero,
                      non tincidunt tortor fringilla ut.</p></span>
                  </div>
                    </div>
                  </div>
                  <div class="carousel-item testi-bg " data-interval="10000">
                    <div class="row align-items-center testi-row">  
                    <div class="col-12 align-self-center testi-content">
                    <img class="d-block img-fluid pr-1 testi-img" src="{{ asset('photos/testimonial.png') }}" alt="First slide">
                    <span class="testi-desc pl-1" style="display: block"><p class="testi-name">Client#2</p>
                      <p class="testi-service">dental implant</p>
                      <p class="testi-msg"> Ipsum  dolor sit amet, consectetur
                      adipiscing elit. Mauris et luctus
                      massa. Morbi ornare vulputate libero,
                      non tincidunt tortor fringilla ut.</p></span>
                  </div>
                    </div>
                  </div>
                  {{-- <div class="carousel-item testi-bg " data-interval="10000">
                    <div class="row align-content-center">  
                    <div class="col-lg-4 col-sm-5 testi-img-holder">
                    <img class="d-block img-fluid testi-img" src="{{ asset('photos/testimonial.png') }}" alt="First slide">
                    </div>
                    <div class="col-lg-7 col-sm-5">
                        <span><p class="testi-name">Customer #2</p></span>
                        <span><p class="testi-service">dental implant</p></span>
                        <span><p class="testi-msg"> Ipsum  dolor sit amet, consectetur
                        adipiscing elit. Mauris et luctus
                        massa. Morbi ornare vulputate libero,
                        non tincidunt tortor fringilla ut.</p></span>
                    </div>
                    </div>
                  </div> --}}

                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only"></span>
                </a>
              </div>
          </div>
        </div>
        <!-- {{--END OF DESKTOP VERSION --}} -->








        
        <!-- {{-- MOBILE TESTIMONIAL --}} -->
        {{-- <div class="row p-0 justify-content-start mobile-tesimonial">
        <div class="col mobile-testimonial" style="background-image: url('photos/testi_bg.jpg'); height:auto;">
            <div id="carouselExampleInterval2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" style="height:85vw">
            
              <div class="carousel-item active mobile-testi-bg" data-interval="10000">
                <div class="row m-0 justify-content-center mobile-carousel" style="height:85vw;">  
                <div class="col-12">
                <span><img class="d-block mobile-testi-img" src="{{ asset('photos/testimonial.png') }}" alt="First slide" style="max-width:40vw; height:auto;"></span>
                    <span><p class="mobile-testi-name">tina arena</p></span>
                    <span><p class="mobile-testi-service">dental implant</p></span>
                    <span><p class="mobile-testi-msg"> Ipsum  dolor sit amet, consectetur
                    adipiscing elit. Mauris et luctus
                    massa. Morbi ornare vulputate libero,
                    non tincidunt tortor fringilla ut.</p></span>
                </div>
                </div>
              </div>

              <div class="carousel-item mobile-testi-bg" data-interval="10000">
                <div class="row m-0 justify-content-center mobile-carousel" style="height:95vw;">  
                <div class="col-12">
                <span><img class="d-block mobile-testi-img" src="{{ asset('photos/test.png') }}" alt="First slide" style="max-width:40vw; height:auto;"></span>
                    <span><p class="mobile-testi-name">palalabs</p></span>
                    <span><p class="mobile-testi-service">dental implant</p></span>
                    <span><p class="mobile-testi-msg"> Ipsum  dolor sit amet, consectetur
                    adipiscing elit. Mauris et luctus
                    massa. Morbi ornare vulputate libero,
                    non tincidunt tortor fringilla ut.</p></span>
                </div>
                </div>
              </div>

              <div class="carousel-item mobile-testi-bg" data-interval="10000">
                <div class="row m-0 justify-content-center mobile-carousel" style="height:95vw;">  
                <div class="col-12">
                <span><img class="d-block mobile-testi-img" src="{{ asset('photos/gwapa.png') }}" alt="First slide" style="max-width:40vw; height:auto;"></span>
                    <span><p class="mobile-testi-name">palalabs ni Ivan</p></span>
                    <span><p class="mobile-testi-service">dental implant</p></span>
                    <span><p class="mobile-testi-msg"> Ipsum  dolor sit amet, consectetur
                    adipiscing elit. Mauris et luctus
                    massa. Morbi ornare vulputate libero,
                    non tincidunt tortor fringilla ut.</p></span>
                </div>
                </div>
              </div>

            <a class="carousel-control-prev" href="#carouselExampleInterval2" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval2" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only"></span>
            </a>
          </div>
      </div>
      </div>
    </div> --}}
    
        <!-- {{-- END MOBILE VERSION --}} -->
        




<!-- ------------------------------------------------------------------------------------------>

    <!-- ||  ABOUT SECTION  || -->
    <!-- mobile version about section -->
    <div class="row  about-row-mobile " >
        <div class="col about-text-mobile pt-2">
            <h2>About Us</h2>
            <div id="demo" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner about-team">
                  <div class="carousel-item about-team active">
                  <img class="img-fluid mx-auto d-block" src="{{ asset('img/team-circle1.png') }}">
                      <h3 class="about-name">Dr. Mark Antonine Sucgang</h3>
                      <h4 class="about-position">SMILE MAKE-OVER SPECIALIST</h4>
                      <p class="about-label">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  
                  </div>
                  <div class="carousel-item about-team">
                  <div class="team-subimage"><img class="img-fluid mx-auto d-block" src="{{ asset('img/team-circle2.png') }}"></div>        
                      <h3 class="about-name">Team Member #2</h3>
                      <h4 class="about-position">All Around Doctor</h4>
                      <p class="about-label">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>

                  <div class="carousel-item about-team">
                  <div class="team-subimage"><img class="img-fluid mx-auto d-block" src="{{ asset('img/team-circle3.png') }}"></div>       
                      <h3 class="about-name">Team Member #3</h3>
                      <h4 class="about-position">Assistant #1</h4>
                      <p class="about-label">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>

                  <div class="carousel-item about-team">
                  <div class="team-subimage"><img class="img-fluid mx-auto d-block" src="{{ asset('img/team-circle4.png') }}"></div>        
                      <h3 class="about-name">Team Member #4</h3>
                      <h4 class="about-position">Assistant #2</h4>
                      <p class="about-label">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                  
              </div>
            
            </div>
        </div>
    </div>  <!--end about-row-mobile -->

    <!-- desktop version about row -->
    <div class="row aboutus-row">
        <div class="col-lg-6 col-md-6 col-left ">
            <div class="flex-container about-text ">
                <div class="abouttxt1"><h2>About Us</h2></div>
                <div class="abouttxt2"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
              exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute 
              irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
              pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
              deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
              exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute 
              irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
              pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
              deserunt mollit anim id est laborum.</p></div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-right my-auto">
            <div class="flex-container team-contain ">
                <div class="media team-drmark ">
                    <img  class="img-fluid rounded-circle align-self-center" src="{{ asset('img/team-circle1.png') }}" alt="Dr. Mark Sucgang">              
                    <div class="media-body team-label align-self-center">
                    <span class="team-label1" style="color:white;">Dr. Mark Antonine Sugcang<br></span>
                    <span class="team-label2" style="color:#db5b02;margin-top:-2vw;">SMILE SPECIALIST</span>     
                    </div>                 
                </div>

                <div class="team-mmbr2"><img class="img-fluid " src="{{ asset('img/team-circle2.png') }}"></div>
                <div class="team-mmbr3"><img class="img-fluid " src="{{ asset('img/team-circle3.png') }}"></div>
                <div class="team-mmbr4"><img class="img-fluid " src="{{ asset('img/team-circle4.png') }}"></div>
                
            </div>
        </div>

    </div> <!-- end of desktop row -->

    
<!-- ------------------------------------------------------------------------------------------>
    <!-- ||  FOOTER SECTION  || -->
    <!-- mobile version footer section -->
      <div class="footer-row-mobile"  style="background: white;">
          <div class="flex-container footer-contain mx-auto">
              
              <div class="footer-logo mx-auto">
                  <img  class="img-fluid " src="{{ asset('img/madc-logo.png') }}" alt="MADC-logo">
              </div>   
                 
              <div class="footer-contacts mx-auto ">
                  <span>009 PATAG 6TH DIVISION</span><br>
                  <span>CAGAYAN DE ORO CITY</span><br>
                  <span>9000 PHILIPPINES</span><br><br>

                  <span>TEL #: (088)-855-0225</span><br>
                  <span>MOBILE: 0917-771-9565</span><br><br>

                  <span>EMAIL: MADCDENTALCLINIC@GMAIL.COM</span><br><br>

                  <span>CLINIC HOURS: 9AM - 6PM</span><br>
                  <span>MONDAYS THRU FRIDAYS</span><br>
              </div>

              <div class="footer-buttons mx-auto">
              <button type="button" class="footer-btn1"><span class="m-auto">BOOK AN APPOINTMENT NOW</span></button>
              <button type="button" class="footer-btn2"><span class="m-auto">GET DIRECTIONS TO THE CLINIC</span></button>
              </div>         
          </div>
      
      <div class="flex-container trademark-contain ">
          <div class="trademark  ">
              <span >MADC DENTAL CLINIC</span><span style="color:#db5b02;"> | THE SMILE MAKE-OVER SPECIALIST</span><br>
              <span>POWERED BY CREATIVE</span><span style="color:#24a3ec;"> OUTSOURCE SOLUTIONS 2020</span><br>
          </div>
      </div>
     
    </div>
    <!--end footer-row-mobile -->




    <!-- desktop version footer section-->
    
    <div class="row footer-row-desktop " >
        <div class="col-md-8 col-lg-8 footer-map">
          <!--Google map-->
          <div id="map-container-google-4" class="z-depth-1-half map-container-4" >
          <iframe src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d126273.7810600469!2d124.5562526473576!3d8.493969632340988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!3e6!4m3!3m2!1d8.493799899999999!2d124.6266338!4m3!3m2!1d8.4938061!2d124.62629369999999!5e0!3m2!1sen!2sph!4v1591195635717!5m2!1sen!2sph"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              
          </div>
        </div>

        <div class="col-md-4 col-lg-4 footer-mapside" style="background: white;">
            <div class="flex-container mapside-contain mx-auto">     
                  <div class="mapside-logo mx-auto">
                      <img  class="img-fluid " src="{{ asset('img/madc-logo.png') }}" alt="MADC-logo">
                  </div>   
                    
                  <div class="mapside-contacts mx-auto ">
                      <span>009 PATAG 6TH DIVISION</span><br>
                      <span>CAGAYAN DE ORO CITY</span><br>
                      <span>9000 PHILIPPINES</span><br><br>

                      <span>TEL #: (088)-855-0225</span><br>
                      <span>MOBILE: 0917-771-9565</span><br><br>

                      <span>EMAIL: MADCDENTALCLINIC@GMAIL.COM</span><br><br>

                      <span>CLINIC HOURS: 9AM - 6PM</span><br>
                      <span>MONDAYS THRU FRIDAYS</span><br>
                  </div>
        
              </div>
        </div>
    </div>

    <div class="desktop-trademark " >
        <div class="flex-container footer-mapbot mx-auto">
            <div class="col-md-7 col-lg-7 footer-mapbot-left">
              <span  style="color:#db5b02;">SITEMAP</span><br>
              <span >HOME</span><span style="color:#db5b02;"> | </span>
              <span >SERVICES</span><span style="color:#db5b02;"> | </span>
              <span >TESTIMONIALS</span><span style="color:#db5b02;"> | </span>
              <span >ABOUT US</span><span style="color:#db5b02;"> | </span>
              <span >LOCATION</span>        
            </div>

            <div class="col-md-5 col-lg-5 footer-mapbot-right">
              <span> FOLLOW US ON SOCIAL MEDIA</span><br>
              <span >FACEBOOK</span><span style="color:#db5b02;"> | </span>
              <span >INSTAGRAM</span><span style="color:#db5b02;"> | </span>
              <span >TWITTER</span>
            </div>
        </div>

        <div class="flex-container footer-mapbot2 mx-auto">
              <span >MADC DENTAL CLINIQUE</span><span style="color:#db5b02;"> | THE SMILE MAKE-OVER SPECIALIST</span>
              <br><span >WEBSITE SKILLFULLY CRAFTED BY</span><span style="color:#24a3ec;"> CREATIVE OUTSOURCE SOLUTIONS</span>
        </div>
    </div>
   
    <!--end of footer-row-desktop  -->
<!-- ------------------------------------------------------------------------------------------>

  </div> <!-- end of container -->   
  
    <script src="{{ asset('js/moment-with-locales.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/modal.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </body>
</html>