<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/hero-section.css') }}" type="text/css"
        charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/all-service.css') }}" type="text/css"
        charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
        integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">

    <style>
        @importurl('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Marck+Script&display=swap');

    </style>
    <title>MADC | Services</title>
</head>

<body>
    <div class="container-fluid about-contain">
        <div class="row hero-mobile">
            <div class="flex-container mobhero-content mx-auto">
                  <div class="mob-logo ">
                  <img  class="img-fluid" src="{{ asset('img/madc-logo-black.png') }}" alt="MADC-logo">
                  </div>
                  <div class="mobhero-text ">
                    <h1 class="all-serv-hero-head">Dental Services</h1>
                  </div>
                  <div class="mobhero-button">
                    <button type="button" class="mobhero-btn" data-toggle="modal" data-target="#exampleModalCenter"><span class="mx-auto">Start Your Smile Make-over Now</span></button>
                  </div>
    
            </div>
          </div> 
        {{-- services-hero --}}
        <div class="row hero-row all-service-hero-bg">
            </video>
            <div class="flex-container hero-topbar">
                <div class="hero-logo ">
                    <img class="img-fluid mx-auto " src="{{ asset('img/madc-logo-black.png') }}"
                        alt="MADC-logo">
                </div>
                <div class="hero-text ml-auto my-auto">
                    <span>(088) 855-0225 | 0917-771-9565</span>
                    <span style="color:#db5b02;">009 Patag 6th Division</span><span style="margin-left: -2vw;">, Cagayan
                        De Oro City</span>
                    <a href="https://www.facebook.com/madcdentalclinic"><i class="fab fa-facebook hero-icon"></i></a>
                    <a href="https://www.instagram.com/madcdentalclinic/?hl=en"><i
                            class="fab fa-instagram hero-icon"></i></a>
                </div>
            </div>
            <div class="flex-container hero-content">
                <div class="hero-left m-auto">
                    <div class="hero-left-txt ">
                        <h1 class="m-0 mb-2 all-serv-hero-head">Dental Services</h1>
                        <button type="button" class="mobhero-btn" data-toggle="modal"
                            data-target="#exampleModalCenter"><span class="mx-auto">Start Your Smile Make-over
                                Now</span></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row p-5 justify-content-center align-items-center all-serv1-row">
            {{-- Esthetic veeners row --}}
            <div class="col-md-12 text-center">
                <h2 class="display-4 serv-esthetic">Esthetic veneers and crowns</h2>
            </div>
            {{-- 1st-row --}}
            <div class="col-lg-2"></div>
            <div class="col-lg-4 col-md-6">
                <div class="card mt-4 shadow " style="width: width: 100%;max-height:480px;height:480px;">
                    <img src="{{ asset('/img/emax.png') }}"
                        class="card-img-top d-flex mx-auto all-serv-img1" alt="...">
                    <div class="card-body">
                        <h4 class="text-center mb-4 all-serv-title">emax veneers</h4>
                        <p>
                            Emax Veneers are thin layered and bonded to the front surface of the teeth. This
                            enhances both the function and appearance of teeth.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card mt-4 shadow" style="width: width: 100%;max-height:480px;height:480px;">
                    <img src="{{ asset('/img/zirconia.jpg') }}"
                        class="card-img-top d-flex mx-auto all-serv-img1" alt="...">
                    <div class="card-body">
                        <h4 class="text-center mb-4 all-serv-title">Zirconia veneers</h4>
                        <p>
                            Zirconia veneers are a type of ceramic material known as zirconia oxide. They are used
                            to make full or partial crowns for restoring a damaged tooth.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
            {{-- 2nd-row --}}
            <div class="col-lg-2"></div>
            <div class="col-lg-4 col-md-6">
                <div class="card mt-4 shadow " style="width: width: 100%;max-height:480px;height:480px;">
                    <img src="{{ asset('/img/FELDSPATHIC.jfif') }}"
                        class="card-img-top d-flex mx-auto all-serv-img1" alt="...">
                    <div class="card-body">
                        <h4 class="text-center mb-4 all-serv-title">feldspathic veneers</h4>
                        <p>
                            Feldspathic veneers are created by layering glass-based (ie, silicon dioxide) powder and
                            liquid materials also referred to as silica or quartz, contains
                            various amounts of alumina.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card mt-4 shadow" style="width: width: 100%;max-height:480px;height:480px;">
                    <img src="{{ asset('/img/direct.jpg') }}"
                        class="card-img-top d-flex mx-auto all-serv-img1" alt="...">
                    <div class="card-body">
                        <h4 class="text-center mb-4 all-serv-title">direct composite veneers</h4>
                        <p>
                            Direct composite veneers are sculpted
                            on your
                            teeth rather than in an offsite lab. The tooth-shaded resin is applied to teeth directly
                            where it can be shaped and sculpted by the dentist.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
            {{-- Other services row --}}
            <div class="col-md-12 text-center">
                <h2 class="display-4 mt-4 serv-esthetic">Other services</h2>
            </div>
            {{-- 1st-row --}}
            <div class="col-lg-4 mt-4 col-md-6">
                <div class="card shadow" style="width: width: 100%;max-height:480px;height:480px;">
                    <img src="{{ asset('/img/dental-implant.jpg') }}"
                        class="card-img-top d-flex mx-auto all-serv-img1" alt="...">
                    <div class="card-body">
                        <h4 class="text-center mb-4 all-serv-title">Dental implant</h4>
                        <p>
                            A dental implant is a surgical component that
                            interfaces with the bone of the jaw or skull to support a dental prosthesis.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card mt-4 shadow" style="width: width: 100%;max-height:480px;height:480px;">
                    <img src="{{ asset('/img/prosto.jpg') }}"
                        class="card-img-top d-flex mx-auto all-serv-img1" alt="...">
                    <div class="card-body">
                        <h4 class="text-center mb-4 all-serv-title">Prosthodontics</h4>
                        <p>
                            Specialize in treating and handling dental and facial problems that involve restoring
                            missing tooth and jaw structures.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  col-md-6">
                <div class="card mt-4 shadow" style="width: width: 100%;max-height:480px;height:480px;">
                    <img src="{{ asset('/img/general.jpg') }}"
                        class="card-img-top d-flex mx-auto all-serv-img1" alt="...">
                    <div class="card-body">

                        <h4 class="text-center mb-4 all-serv-title">General dentistry</h4>
                        <p>
                            Dental examination, teeth cleaning and use of other diagnostic
                            equipment to prevent, or treat problems as early as possible.
                        </p>
                    </div>
                </div>
            </div>
            {{-- 2nd-row --}}
            <div class="col-lg-4 col-md-6">
                <div class="card mt-4 shadow " style="width: width: 100%;max-height:480px;height:480px;">
                    <img src="{{ asset('/img/esthetic.jpg') }}"
                        class="card-img-top d-flex mx-auto all-serv-img1" alt="...">
                    <div class="card-body">
                        <h4 class="text-center mb-4 all-serv-title">Oral esthetic surgery</h4>
                        <p>
                            Oral esthetic surgery can restore lost gum and bone tissue around tooth roots, reshape
                            unsightly gum tissue,
                            regenerate lost bone due to periodontal diseases.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card mt-4 shadow" style="width: width: 100%;max-height:480px;height:480px;">
                    <img src="{{ asset('/img/carousel-img5.jpg') }}"
                        class="card-img-top d-flex mx-auto all-serv-img1" alt="...">
                    <div class="card-body">
                        <h4 class="text-center mb-4 all-serv-title">Dental surgery</h4>
                        <p>
                            Dental surgery is any of a number of medical procedures that involve artificially modifying
                            dentition; in other words, surgery of the teeth, gums and jaw bones.
                        </p>
                    </div>
                </div>
            </div>

        </div>
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
              <span >
               <a href="https://www.facebook.com/madcdentalclinic" class="text-secondary text-decoration-none">FACEBOOK</a>
              </span><span style="color:#db5b02;"> | </span>
              <span >
               <a href="https://www.instagram.com/madcdentalclinic/?hl=en" class="text-secondary text-decoration-none">INSTAGRAM</a>
              </span>
            </div>
        </div>

        <div class="flex-container footer-mapbot2 mx-auto">
              <span >MADC DENTAL CLINIQUE</span><span style="color:#db5b02;"> | THE SMILE MAKE-OVER SPECIALIST</span>
              <br><span >WEBSITE SKILLFULLY CRAFTED BY</span><span style="color:#24a3ec;">
                <a href="creativeoutsourcesolutions.com" class="text-decoration-none">
                  CREATIVE OUTSOURCE SOLUTIONS
                </a>
                </span>
        </div>
    </div>
    </div>
</body>

</html>
