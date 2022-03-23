<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="landingpage_assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="landingpage_assets/css/custom.css">
        <!--FontAwesome css -->
        <link rel="stylesheet" href="landingpage_assets/css/all.css">
        <link rel="stylesheet" href="landingpage_assets/css/swiper.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>



    
    <body class="" >
        <!-- header -->
       <div class="header" >
           <div class="header-container">
              <div id="home" class="top_strip">
                 <div class="container">
                    <div class="row">
                       <div class="col-sm-12 col-12">
                          <div class="top-right-icon">
                           <p>
                             <i class="fa fa-phone"></i></span><span class="phoneno ml-2">#####</span>
                             </p> 
                             <p><i class="fa fa-envelope mr-2" aria-hidden="true"></i> <span class="emailicon">support@rokadbahi.com</span></p>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="clearfix"></div>
           <nav class="navbar navbar-expand-lg navbar-dark">
              <div class="container">
                 <div class="moreinfobtn d-block d-sm-none  d-md-none d-lg-none">
                    <i class="fas fa-ellipsis-v"></i>
                 </div>
                 <div class="more-info-block d-sm-none d-md-none d-lg-none">
                    <div class="row">
                       <div class="col-xs-6">
                          <ul class="left-section">
                            <!--  <li><span class="spriteimg whatsapp-icon"></span><span class="phoneno">8803445566</span></li> -->
                            <i class="fa fa-phone" aria-hidden="true"></i>
                             <li><span class="spriteimg phone-icon"></span><span class="phoneno"> xxxxxxxxxx</span></li>
                             <li><span class="spriteimg mail-icon"></span><span class="emailicon">email@gmail.com</span></li>
                          </ul>
                       </div>
                       <!--  <div class="col-xs-6">
                          <ul class="right-section">
                             <li><a href="#">contact us</a></li>
                             <li><a href="#">About Us</a></li>
                          </ul>
                          </div> -->
                    </div>
                 </div>
                 <a class="navbar-brand" href="">
                 <img src="landingpage_assets/images/CAP_LOGO_60x200-01-final.png" class="img-fluid howdesktop-1 " alt="logo" style ="height:60%; width:70%;">
                 <img src="landingpage_assets/images/CAP_LOGO_60x200-01-final.png" class="img-fluid showmobilelogo-1 " alt="logo" style="padding: 4px 0;">
                 </a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                 <i class="fas fa-bars"></i>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarsExample05">
                    <div class="bs-example mobile-menu-wrapper hide-desktop-menu">
                       <div class="accordion" id="accordionExample">
                          <div class="card">
                             <div class="card-header" id="headingOne">
                                <h2 class="mb-0" data-toggle="collapse" data-target="#collapseOne">
                                   <a href ="index.html" class="btn btn-link" >Home </a>
                                   <!-- <i class="fa fa-plus"></i> -->
                                </h2>
                             </div>
                          </div>
  
                          <div class="card">
                             <div class="card-header" id="headingThree">
                                <h2 class="mb-0" data-toggle="collapse" data-target="#collapseThree">
                                   <a href="#features" class="btn btn-link collapsed" >Features</a> 
                                   <!-- <i class="fa fa-plus"></i> -->
                                </h2>
                             </div>
                          </div>
                          <div class="card">
                             <div class="card-header" id="headingThree">
                                <h2 class="mb-0" data-toggle="collapse" data-target="#collapseThree">
                                   <a href="#pricing" class="btn btn-link collapsed" >Pricing</a> 
                                   <!-- <i class="fa fa-plus"></i> -->
                                </h2>
                             </div>
                          </div>
                          <div class="card">
                             <div class="card-header" id="headingThree">
                                <h2 class="mb-0" data-toggle="collapse" data-target="#collapseThree">
                                   <a href="#testimonials" class="btn btn-link collapsed" >Testimonials</a> 
                                   <!--  <i class="fa fa-plus"></i> -->
                                </h2>
                             </div>
                          </div>
                          <div class="card">
                             <div class="card-header" id="headingTwo2">
                                <h2 class="mb-0" data-toggle="collapse" data-target="#collapseTwo2">
                                   <a href="#faq" class="btn btn-link collapsed" >FAQs</a> 
                                </h2>
                             </div>                          
                          </div>
                          <div class="card">
                             <div class="card-header" id="headingThree">
                                <h2 class="mb-0" data-toggle="collapse" data-target="#collapseThree">
                                 <a href="#contact" class="btn btn-link collapsed" >contact</a> 
                                    <!-- <i class="fa fa-plus"></i> -->
                                   </h2>
                              </div>
                          </div>
                          <div class="card">
                             <div class="card-header" id="headingThree">
                                <h2 class="mb-0" data-toggle="collapse" data-target="#collapseThree">
                                 <a href="#contact" class="top-inline-form" >Login</a> 
                                    <!-- <i class="fa fa-plus"></i> -->
                                   </h2>
                              </div>
                          </div>
  
                       </div>
                    </div>
                    <ul class="navbar-nav mr-auto">
                       <li class="nav-item active">
                          <a class="nav-link" href="" >Home<span class="sr-only"></span></a>
                       </li>
  
                       <li class="nav-item borderb-mobile-hide">
                          <a class="nav-link" href="#testimonials">Testimonials</a>
                       </li> 
  
                       <li class="nav-item ">
                          <a class="nav-link" href="#features" >Features</a>
                       </li>
  
                       <li class="nav-item borderb-mobile-hide">
                          <a class="nav-link" href="#pricing">Pricing</a>
                       </li>
  
  
  
                       <li class="nav-item dropdown">
                          <a class="nav-link" href="#faq">FAQs</a>
                       </li>
  
                       <li class="nav-item borderb-mobile-hide">
                          <a class="nav-link" href="#contact">contact</a>
                       </li>
                    </ul>
                    <form class="top-inline-form">
                        @if (Route::has('login'))
                        <div class="row">
                            <div class="col">
                                @auth
                                <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="">Log in</a>
                            </div>

                            <div class="col">
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="">Register</a>
                                @endif
                            </div>

                            @endauth
                        </div>
                    @endif
                     </form>
                 </div>
              </div>
           </nav>
        </div>
        <!-- header-->
  
        <!-- <div class="loader"></div> -->
        <div class="page-container setmt-headerstrip mt-10">         
           <section id="hero-static" class="hero-static d-flex align-items-center feature-bg">
              <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative " data-aos="zoom-out">
                <h2>Welcome to <span>Rokad-Bahi</span></h2>
                <p>Et voluptate esse accusantium accusamus natus reiciendis quidem voluptates similique aut.</p>
                <div class="d-flex">
                 {{--  <a href=""><span class="get-started-btn scrollto">Login</span></a> 
                 <a href=""><span class="get-started-btn scrollto ml-4">Register</span></a> --}}
                </div>
              </div>
            </section>
          
   
           <section  class="about section-bg">
              <div class="container aos-init aos-animate" >
                 <div class="section-title">
                    <h2>About Us</h2>
                    <p class="about-p">Rokad Bahi is a sales and purchase management solution with the power of in-built GST compliance tailored to the unique needs of small and micro businesses in India!</p>
                 </div>
                 <div class="set-table-wrap">
                    <div class="row">
                       <div class="col-12 col-sm-12">
                          <div class="about-imag-wrapper set-content-table">
                             <img src="landingpage_assets/images/dashboard.png"  class="img-fluid" alt="LAPTOP_PHONE">
                             <!-- LAPTOP_PHONE.png-->
                          </div>
                          <div id="dotss" class="set-content-table">
                             <p class="about-us-content setcolspan">
                                The application instantly records all business transactions like sales, purchases, collections, and payment transactions. It gives a complete overview of the business and helps the business owner effectively manage their time and focus on growth and profits.
                             </p>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </section>
  
           <!-- testimonialsection start here -->
           <section class="home-section-4  animatedParent feature-bg-remove testimonial-block " id="testimonials">
              <div class="animated bounceInUp">
                 <div class="container">
                    <div class="row">
                       <div class="col-sm-9 m-auto col-12 mb-4">
                          <div class="section-title">
                             <h2 >testimonials</h2>
                          </div>
                          <div class="swiper-container testimonial-swiper-slider sectio-4-box  " id="testimonialSlider" >
                             <div class="swiper-wrapper">
  
           <!--   <div class="swiper-slide">
                 <div class="testimonials-clean testimonial-box">
                    <div class="item">
                      <div class="box newtestimonialDesc">
                       <i class="fas fa-quote-left"></i>
                       <p class="description">"I was facing many problems before Rokad Bahi, like manual entry for bills, tracking collections, filing of bills, etc. Luckily, I discovered Rokad Bahi, called their Helpline and their friendly Customer Service team solved all my problems. l use Rokad Bahi software solution regularly. I would rate Rokad Bahi a solid 5 out of 5."</p>
                      </div>
                      <div class="author d-flex">
                       <div class="test-img">
                       <img class="rounded-circle img-fluid" src="images/Switi%20Badole_2.html">
                       </div>
                       <div class="testcontent">
                          <h5 class="name">Divya Maurya</h5>
                          <p class="title">Shine Enterprises</p>
                          <p class="title">Nagpur, Maharashtra</p>
                       </div>
                      </div>
                   </div>
                 </div>
              </div>
              <div class="swiper-slide">
                 <div class="testimonials-clean testimonial-box">
                    <div class="item">
                      <div class="box newtestimonialDesc">
                       <i class="fas fa-quote-left"></i>
                       <p class="description">"I run an IT accessories service and sales business. I am happy I found Rokad Bahi – a billing and GST software solution that made my life much simpler!  Another feature that I love of Rokad Bahi is inventory management. I can do a stock check on-the-go on my computer."</p>
                      </div>
                      <div class="author d-flex">
                       <div class="test-img">
                       <img class="rounded-circle img-fluid" src="images/no-image.html">
                       </div>
                       <div class="testcontent">
                          <h5 class="name">Neha Guptha</h5>
                          <p class="title">Kanchan IT Solutions</p>
                          <p class="title">Kota, Rajasthan</p>
                       </div>
                      </div>
                   </div>
                 </div>
              </div>
              <div class="swiper-slide">
                 <div class="testimonials-clean testimonial-box">
                    <div class="item">
                      <div class="box newtestimonialDesc">
                       <i class="fas fa-quote-left"></i>
                       <p class="description">"I am a big fan of Rokad Bahi. It is a billing & GST solution that’s perfect for my hardware and sanitary business. Rokad Bahi has helped me take my business online with its many features. My GST reports are updated with every transaction. All I simply have to do is extract in Excel table format and file. I can also monitor receivables and payables, do cash & bank reconciliation, on my PC. I give Rokad Bahi software solution a full 5 out of 5 rating!"</p>
                      </div>
                      <div class="author d-flex">
                       <div class="test-img">
                       <img class="rounded-circle img-fluid" src="images/Rajesh-Jindal_2.html" alt="rajesh-jindal">
                       </div>
                       <div class="testcontent">
                          <h5 class="name">Rajesh Jindal</h5>
                          <p class="title">Jindal Sanitary Store</p>
                          <p class="title">Jhajjar, Haryana</p>
                       </div>
                      </div>
                   </div>
                 </div>
              </div>
              <div class="swiper-slide">
                 <div class="testimonials-clean testimonial-box">
                    <div class="item">
                      <div class="box newtestimonialDesc">
                       <i class="fas fa-quote-left"></i>
                       <p class="description">"We are an Event Management company; our main struggle was to generate manual invoice in excel for clients which led to error in typing GST number, contact details, calculation mistakes and apart from this there was no proper historical data maintained, but after switching our manual way of handling business to digital way with Rokad Bhai all of our above problems were catered, as in this system we can save client’s details which can be re-used while generating invoice and also as Rokad Bhai is in cloud all historical data are intact and no need of back up.The best part of this is we can access it anytime and from anywhere. Overall, experience with Rokad Bahi is great!"</p>
                      </div>
                      <div class="author d-flex">
                       <div class="test-img">
                       <img class="rounded-circle img-fluid" src="images/Ventak-ramani.html" alt="Ventak Ramani - Pic1">
                       </div>
                       <div class="testcontent">
                          <h5 class="name">Venkat Ramani</h5>
                          <p class="title">Red Planet</p>
                          <p class="title">Chennai, Tamil Nadu</p>
                       </div>
                      </div>
                   </div>
                 </div>
              </div>
              <div class="swiper-slide">
                 <div class="testimonials-clean testimonial-box">
                    <div class="item">
                      <div class="box newtestimonialDesc">
                       <i class="fas fa-quote-left"></i>
                       <p class="description">"It is simply amazing that I'm able to do essential business functions such as invoicing, collections, and most importantly GST filing right on my mobile devices while I am on the move or sitting in a cafe enjoying my cup of tea. Rokad Bhai Mobile App apart from being very rich in functionality is also self-learning in nature and I did not find any difficulty in navigating through its screens even when I used it for the first time. I am more than happy to recommend Rokad Bahi to my business colleagues. Digital is not only for big corporates!"</p>
                      </div>
                      <div class="author d-flex">
                       <div class="test-img">
                       <img class="rounded-circle img-fluid" src="images/no-image.html" alt="Ventak Ramani - Pic1">
                       </div>
                       <div class="testcontent">
                          <h5 class="name">Mohammed Sarfaraz</h5>
                          <p class="title">Rana Electricals & Rana Engineers</p>
                          <p class="title">Muzaffarnagar, UP</p>
                       </div>
                      </div>
                   </div>
                 </div>
              </div>
              <div class="swiper-slide">
                 <div class="testimonials-clean testimonial-box">
                    <div class="item">
                      <div class="box newtestimonialDesc">
                       <i class="fas fa-quote-left"></i>
                       <p class="description">"My CA suggested me Logo Rokad Bahi for my business and I started exploring it on my own. We are manufacturing and trading company who deals in industrial parts. Getting customised invoice template was my biggest concern so after switching my business operation on Rokad Bahi I can customised various templates, track inventory, payments and collections. The best feature is I can share directly invoices with my customer via whatsapp and it is completely online so syncing of data is not required.And when I am stuck or need any support I can always rely on their excellent customer support executives who are just a call away."</p>
                      </div>
                      <div class="author d-flex">
                       <div class="test-img">
                       <img class="rounded-circle img-fluid" src="images/no-image.html" alt="Vikas Chavda">
                       </div>
                       <div class="testcontent">
                          <h5 class="name">Vikas Chavda</h5>
                          <p class="title">Shyama Enterprises</p>
                          <p class="title">Mumbai, Maharashtra</p>
                       </div>
                      </div>
                   </div>
                 </div>
              </div>
           --> 
                 </div>
              <div class="swiper-button-next">
                 <i class="fas fa-chevron-right"></i>
              </div>
              <div class="swiper-button-prev">
                 <i class="fas fa-chevron-right rotate-left"></i>
              </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           </section>
           <!-- testimonial sect end here -->
  
           <section id="features" class="services feature-bg">
              <div class="container aos-init aos-animate" >
                 <div class="section-title d-block d-sm-none">
                    <h2>FEATURES</h2>
  
                 </div>
                 <div class="section-title d-none d-sm-block">
                    <h2>Features</h2>
                    <p class="about-p">.</p>
                 </div>
                 <div class="row">
                    <!-- new feature start-->
                    <!-- no image-->
                    <div class="col-12 col-sm-4 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                       <div class="icon-box">
                          <div class="icon">
                             <img src="landingpage_assets/images/icons/Quick-billing-and-customized-invoice.png" width="30" height="30" alt="Quick-billing-and-customized-invoice">
                          </div>
                          <h4><a href="features.html">Customized invoices</a></h4>
                          <p>Quick billing and sharing of customised invoices via Email And Website.</p>
                       </div>
                    </div>
                    <div class="col-12 col-sm-4 d-flex align-items-stretch mt-md-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                       <div class="icon-box">
                          <div class="icon">
                             <!--<i class="bx bx-file"></i>--><img src="landingpage_assets/images/icons/real-time-inventory-monitoring.png" width="30" height="30" alt="real-time-inventory-monitoring">
                          </div>
                          <h4><a href="features.html">Real time inventory check</a></h4>
                          <p>Auto-updation of inventory and option to adjust stocks in case of deficits or surpluse</p>
                       </div>
                    </div>
                    <!-- no image-->
                    <div class="col-12 col-sm-4 d-flex align-items-stretch mt-md-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                       <div class="icon-box">
                          <div class="icon">
                             <!--<i class="bx bx-file"></i>--><img src="landingpage_assets/images/icons/purchase-and-sales-mgmt.html" width="30" height="30" alt="purchase-and-sales-mgmt">
                          </div>
                          <h4><a href="features.html">Purchase Sales Management</a></h4>
                          <p>Manage your procure to pay and order to cash cycle</p>
                       </div>
                    </div>
  
                    <!-- no image-->
                    <div class="col-12 col-sm-4 d-flex align-items-stretch mt-md-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="500">
                       <div class="icon-box">
                          <div class="icon">
                             <img src="landingpage_assets/images/icons/visibility-of-customer-transaction.html" width="30" height="30" alt="visibility-of-customer-transaction">
                          </div>
                          <h4><a href="features.html">Customer/supplier overview</a></h4>
                          <p>Quick visibilty of all customers and suppliers transactions and outstanding </p>
                       </div>
                    </div>
                    <div class="col-12 col-sm-4 d-flex align-items-stretch mt-xl-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                       <div class="icon-box">
                          <div class="icon">
                             <img src="landingpage_assets/images/icons/ready-to-generate-GSTR.png" width="30" height="30" alt="ready-to-generate-GSTR">
                          </div>
                          <h4><a href="features.html">Ready to generate GSTR</a></h4>
                          <p>All GSTR reports - GSTR1, GSTR 3B, GSTR4 auto-updated as the transactions are recorded</p>
                       </div>
                    </div>
                    <!-- no image-->
                    <div class="col-12 col-sm-4 d-flex align-items-stretch mt-xl-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                       <div class="icon-box">
                          <div class="icon">
                             <img src="landingpage_assets/images/icons/export-report-for-tally.html" width="30" height="30" alt="export-report-for-tally">
                          </div>
                          <h4><a href="features.html">Export report for tally</a></h4>
                          <p>Export company reports compatible with Tally formats</p>
                       </div>
                    </div>
                    <!-- no image-->
                    <div class="col-12 col-sm-4 d-flex align-items-stretch mt-xl-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                       <div class="icon-box">
                          <div class="icon">
                             <img src="landingpage_assets/images/icons/dashboard-and-reports.png" width="30" height="30" alt="dashboard-and-reports">
                          </div>
                          <h4><a href="features.html">Dashboard and Reports</a></h4>
                          <p>Quick real-time dashboards and summary reports help manage business effectively</p>
                       </div>
                    </div>
  
                    <div class="col-12 col-sm-4 d-flex align-items-stretch mt-xl-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="400">
                       <div class="icon-box">
                          <div class="icon">
                             <img src="landingpage_assets/images/icons/cash-and-bank%20tracking.png" width="30" height="30" alt="cash-and-bank tracking">
                          </div>
                          <h4><a href="features.html">Cash and Bank Tracking</a></h4>
                          <p>Real-time visibility of cash balances , cash equivalents, and bank accounts.</p>
                       </div>
                    </div>
                    <div class="col-12 col-sm-4 d-flex align-items-stretch mt-xl-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="400">
                       <div class="icon-box">
                          <div class="icon">
                             <img src="landingpage_assets/images/icons/bank-reconciliation.html" width="30" height="30" alt="bank-reconciliation">
                          </div>
                          <h4><a href="features.html">Bank Reconciliation</a></h4>
                          <p>Reconcile your bank statements with your company accounts on the app</p>
                       </div>
                    </div>
  
                    <!-- new feature end-->
                 </div>
              </div>
           </section>
          <!--  <section id="pricing" class="price ">
              <div class="container aos-init aos-animate" data-aos="fade-up">
                 <div class="section-title">
                    <h2>Pricing</h2>
                    <p class="about-p">Improving Business. Improving Life.</p>
                 </div>
                 <div class="row">
                    <div class="col-12 col-sm-2 " >
                    </div>
                    <div class="col-12 col-sm-4 setmobile-margin">
                       <div class="monthly-box">
                          <h4>Monthly Plan</h4>
                          <h4>Rs 499/-</h4>
                          <h3>Pay as you go.</h3>
                       </div>
                    </div>
                    <div class="col-12 col-sm-4" >
                       <div class="annual-box">
                          <h4>Annual Plan</h4>
                          <h4>Rs 4990/-</h4>
                          <h3>20% subscription discount.</h3>
                       </div>
                    </div>
                 </div>
              </div>
           </section> -->
           <section id="pricing" class="price newPricingBox">
              <div class="container aos-init aos-animate" data-aos="fade-up">
                 <div class="section-title">
                    <h2 class="pricing-title-blueline">Pricing</h2>
                    <p class="about-p">Simple pricing plans. One for every size of company.</p>
                 </div>
                 <div class="row offset-sm-2">
                    <!-- <div class="col-12 col-sm-4 setmobile-margin" >
                         <div class="box newpricingBox">
                          <div class="headingsec-t">
                             <h3 class="newPrice-h4">Starter (FREE)</h3>
                             <h4 class="newPrice-h3 font-bold"><b> <span style="font-size: 20px;"><b>₹ </b></span> 0</b></h4>
                          </div>
                          <ul class="listbox">
                            <li><a href="#">2 Users</a></li>
                            <li><a href="#">30 invoices per month</a></li>
                            <li><a href="#">Unlimited product catalogue</a></li>
                            <li><a href="#">Unlimited customer accounts</a></li>
                            <li><a href="#">Standard Customer Support (10am to 7pm / Monday to Saturday)
                             </a></li>
                          </ul>
                          <a href="https://panel.captainbiz.com/register?utm_source=CB&utm_medium=website&utm_campaign=StarterPack" type="submit" class="get-started-btn">Get Started</a>
                          </div>
                    </div> -->
                    <div class="col-12 col-sm-5 setmobile-margin">
                       <div class="box newpricingBox">
                          <div class="headingsec-t">
                             <div class="box-flexdiv d-flex">
                                <div class="leftpart">
                                   <h3 class="newPrice-h4">Growth (FREE)</h3>
                                   <h4 class="" style="font-size: 20px;"><b>₹ </b><span  class="set35sizefont" ><b>0</b></span></h4>
                                </div>
                                <!-- <div class="rightpart">
                                   <img class="img-fluid "  src="images/newbadge-3.webp" alt="footer-Logo">
                                </div> -->
                             </div>
                          </div>
                          <ul class="listbox">
                            <li><a href="#">Unlimited invoices per month</a></li>
                            <li><a href="#">Unlimited product catalogue</a></li>
                            <li><a href="#">Unlimited customer accounts</a></li>
                            <!-- <li class="newspan"><a href="#">StoreFront <span class="newtext">NEW</span></a></li> -->     
                            <li><a href="#">Multiple company set-up</a></li>
                            <li><a href="#">Dedicated Relationship Manager</a></li>
                          </ul>
                          <a href="enterprise_query.html" type="submit" class="get-started-btn bookdemoButton">Let's Meet</a>
                          </div>
                    </div>
                    <div class="col-12 col-sm-5" >
                       <div class="box newpricingBox enterprice-box-wrap">
                          <div class="headingsec-t">
                             <h3 class="newPrice-h4">Enterprise</h3>
                          </div>
                          <p class="desc">We would love to chat to understand your requirements. This will help us recommend the best plan that meets your company’s goals.</p>
                          <a href="enterprise_query.html" type="submit" class="get-started-btn bookdemoButton">Let's Meet</a>
                        </div>
                    </div>
                 </div>
              </div>
           </section>
           <!-- <section class="try-free-banner  w-100 text-center">
              <div class="section-titles py-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Register Now for Starter Pack, it's Free!!</font></font></div>
                <div class="subtitles py-2-remove"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Join the tens of thousands of companies using CaptainBiz.</font></font></div>
                <div class="actions e-block ">
                   <input type="email" placeholder="E-mail Address" name="tryfree_emailID" id="tryfree_emailID" class="hero__input w-100 mb-3 mb-md-0 mail-input"> 
                   <input type="tel" placeholder="Mobile No" name="phone" id="phone" class="hero__input w-100 mb-3 mb-md-0 mail-input"> 
                   <div class="d-block text-center">
                      <button onclick="tryFreeEmailFunction()" id="home-try-free-button" class="btn btn-red btn-red--outline ml-3">
                      Register Now</button>
                   </div>
                </div>
             </section> -->
  
  
  
  
           <!--  <section id="portfolio" class="portfolio blogs">
              <div class="container aos-init aos-animate" data-aos="fade-up">
                 <div class="section-title">
                    <h2>Blogs</h2>
                    <p class="about-p">Everything you need to know to boost your business</p>
                 </div>
                 <div class="row portfolio-container aos-init aos-animate" >
                    <div class="col-12 col-sm-4 col-lg-4 col-md-6 portfolio-item filter-app" >
                       <div class="thumbnail thumbnail-main">
                          <a href="faqgstr.html" title="">
                          <img style="vertical-align: middle; max-width: 100%;height: auto;" width="1200" height="800" src="images/gst-nil.png" sizes="(max-width: 1200px) 100vw, 1200px"> </a>
                       </div>
                       <div class="entry-inner thumb-bg">
                          <header class="entry-header">
                             <div class="entry-meta"> <a href="faqgstr.html"><span class="date">July 31, 2020 </span></a> <span class="comments"><i class="far fa-clock"></i><a href="faqgstr.html">15min</a></span> <a href="#" class="jm-post-like" data-post_id="70" title="Like"></a></div>
                             <h1 class="entry-title"><a href="faqr.html" rel="bookmark">FAQ’s on GSTR – 3B Nil Return  Filing</a></h1>
                          </header>
                          <div class="entry-content">
                             <p>The taxpayers registered under GST can now file GSTR – 3B Nil Returns through SMS. This will reduce the load on the GSTN portal and give a better user experience. The taxpayers registered under GST.</p>
                          </div>
                       </div>
                    </div>
                    <div class="col-12 col-sm-4 col-lg-4 col-md-6 portfolio-item filter-app" >
                       <div class="thumbnail thumbnail-main">
                          <a href="" title="">
                          <img style="vertical-align: middle; max-width: 100%;height: auto;" width="1200" height="800" src="images/gst-notification.png" class=" wp-post-image" alt="" title=""  sizes="(max-width: 1200px) 100vw, 1200px"> </a>
                       </div>
                       <div class="entry-inner thumb-bg">
                          <header class="entry-header">
                             <div class="entry-meta"> <a href=""><span class="date">June 25, 2020</span></a> <span class="comments"><i class="far fa-clock"></i><a href="">3min</a></span> <a href="#" class="jm-post-like" data-post_id="70" title="Like"><i class="fa fa-heart-o"></i>&nbsp;</a></div>
                             <h1 class="entry-title"><a href="" rel="bookmark">GST Notification &amp; Instructions</a></h1>
                          </header>
                          <div class="entry-content">
                             <p>Many provisions of the CGST Act have been amended in the Finance Bill 2020 and some of the same have been notified and the effective date is 30th Jun 2020. Many provisions of the CGST Act has been amended.</p>
                          </div>
                       </div>
                    </div>
                    <div class="col-12 col-sm-4 col-lg-4 col-md-6 portfolio-item filter-web" >
                       <div class="thumbnail thumbnail-main">
                          <a href="" title="">
                          <img style="vertical-align: middle; max-width: 100%;height: auto;" width="1200" height="800" src="images/knowledge-series.png" class=" wp-post-image" alt="" title=""  sizes="(max-width: 1200px) 100vw, 1200px"> </a>
                       </div>
                       <div class="entry-inner thumb-bg">
                          <header class="entry-header">
                             <div class="entry-meta"> <a href=""><span class="date">February 02, 2020</span></a> <span class="comments"><i class="far fa-clock"></i><a href="">3min</a></span> <a href="#" class="jm-post-like" data-post_id="70" title="Like"><i class="fa fa-heart-o"></i>&nbsp;</a></div>
                             <h1 class="entry-title"><a href="" rel="bookmark">Everything you need to know about GST</a></h1>
                          </header>
                          <div class="entry-content">
                             <p>These FAQs cover a broad range of information about GST to educate, inform, and guide you to reach your intended destination faster. Logo Vyapari has mentioned the updated information pertaining to all.</p>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="text-center content"><a class="btn-learn-more" href="#" id="myBtns">Learn More</a></div>
              </section> -->
           <!-- <section class="home-section-4  animatedParent feature-bg-remove testimonial-block " id="testimonials">
              <div class="animated bounceInUp">
                 <div class="container">
                    <div class="row">
                       <div class="col-sm-9 m-auto col-12 mb-4">
                          <div class="section-title">
                             <h2 >testimonials</h2>
                          </div>
                          <div class="swiper-container testimonial-swiper-slider sectio-4-box  " id="testimonialSlider" >
                             <div class="swiper-wrapper">
              <div class="swiper-slide">
                 <div class="testimonials-clean testimonial-box">
                    <div class="item">
                      <div class="box newtestimonialDesc">
                       <i class="fas fa-quote-left"></i>
                       <p class="description">"I was facing many problems before CaptainBiz, like manual entry for bills, tracking collections, filing of bills, etc. Luckily, I discovered CaptainBiz, called their Helpline and their friendly Customer Service team solved all my problems. l use CaptainBiz software solution regularly. I would rate CaptainBiz a solid 5 out of 5."</p>
                      </div>
                      <div class="author d-flex">
                       <div class="test-img">
                       <img class="rounded-circle img-fluid" src="images/Switi Badole_2.jpg">
                       </div>
                       <div class="testcontent">
                          <h5 class="name">Switi Badole</h5>
                          <p class="title">Sunshine Enterprises</p>
                          <p class="title">Nagpur, Maharashtra</p>
                       </div>
                      </div>
                   </div>
                 </div>
              </div>
              <div class="swiper-slide">
                 <div class="testimonials-clean testimonial-box">
                    <div class="item">
                      <div class="box newtestimonialDesc">
                       <i class="fas fa-quote-left"></i>
                       <p class="description">"I run an IT accessories service and sales business. I am happy I found CaptainBiz – a billing and GST software solution that made my life much simpler!  Another feature that I love of CaptainBiz is inventory management. I can do a stock check on-the-go on my computer or the CaptainBiz mobile app."</p>
                      </div>
                      <div class="author d-flex">
                       <div class="test-img">
                       <img class="rounded-circle img-fluid" src="images/no-image.jpg">
                       </div>
                       <div class="testcontent">
                          <h5 class="name">Hari Om Sahu</h5>
                          <p class="title">Kanchan IT Solutions</p>
                          <p class="title">Kota, Rajasthan</p>
                       </div>
                      </div>
                   </div>
                 </div>
              </div>
              <div class="swiper-slide">
                 <div class="testimonials-clean testimonial-box">
                    <div class="item">
                      <div class="box newtestimonialDesc">
                       <i class="fas fa-quote-left"></i>
                       <p class="description">"I am a big fan of CaptainBiz. It is a billing & GST solution that’s perfect for my hardware and sanitary business. CaptainBiz has helped me take my business online with its many features. My GST reports are updated with every transaction. All I simply have to do is extract in Excel table format and file. I can also monitor receivables and payables, do cash & bank reconciliation, on my PC and the CaptainBiz mobile app. I give CaptainBiz software solution a full 5 out of 5 rating!"</p>
                      </div>
                      <div class="author d-flex">
                       <div class="test-img">
                       <img class="rounded-circle img-fluid" src="images/Rajesh-Jindal_2.jpg" alt="rajesh-jindal">
                       </div>
                       <div class="testcontent">
                          <h5 class="name">Rajesh Jindal</h5>
                          <p class="title">Jindal Sanitary Store</p>
                          <p class="title">Jhajjar, Haryana</p>
                       </div>
                      </div>
                   </div>
                 </div>
              </div>
              <div class="swiper-slide">
                 <div class="testimonials-clean testimonial-box">
                    <div class="item">
                      <div class="box newtestimonialDesc">
                       <i class="fas fa-quote-left"></i>
                       <p class="description">"We are an Event Management company; our main struggle was to generate manual invoice in excel for clients which led to error in typing GST number, contact details, calculation mistakes and apart from this there was no proper historical data maintained, but after switching our manual way of handling business to digital way with Rokad Bahi all of our above problems were catered, as in this system we can save client’s details which can be re-used while generating invoice and also as Rokad Bahi is in cloud all historical data are intact and no need of back up.The best part of this is we can access it anytime and from anywhere. Overall, experience with Logo Rokad Bahi is great!"</p>
                      </div>
                      <div class="author d-flex">
                       <div class="test-img">
                       <img class="rounded-circle img-fluid" src="images/Ventak-ramani.jpg" alt="Ventak Ramani - Pic1">
                       </div>
                       <div class="testcontent">
                          <h5 class="name">Venkat Ramani</h5>
                          <p class="title">Red Planet</p>
                          <p class="title">Chennai, Tamil Nadu</p>
                       </div>
                      </div>
                   </div>
                 </div>
              </div>
              <div class="swiper-slide">
                 <div class="testimonials-clean testimonial-box">
                    <div class="item">
                      <div class="box newtestimonialDesc">
                       <i class="fas fa-quote-left"></i>
                       <p class="description">"It is simply amazing that I'm able to do essential business functions such as invoicing, collections, and most importantly GST filing right on my mobile devices while I am on the move or sitting in a cafe enjoying my cup of tea. Rokad Bahi Mobile App apart from being very rich in functionality is also self-learning in nature and I did not find any difficulty in navigating through its screens even when I used it for the first time. I am more than happy to recommend Rokad Bahi to my business colleagues. Digital is not only for big corporates!"</p>
                      </div>
                      <div class="author d-flex">
                       <div class="test-img">
                       <img class="rounded-circle img-fluid" src="images/no-image.jpg" alt="Ventak Ramani - Pic1">
                       </div>
                       <div class="testcontent">
                          <h5 class="name">Mohammed Sarfaraz</h5>
                          <p class="title">Rana Electricals & Rana Engineers</p>
                          <p class="title">Muzaffarnagar, UP</p>
                       </div>
                      </div>
                   </div>
                 </div>
              </div>
              <div class="swiper-slide">
                 <div class="testimonials-clean testimonial-box">
                    <div class="item">
                      <div class="box newtestimonialDesc">
                       <i class="fas fa-quote-left"></i>
                       <p class="description">"My CA suggested me Logo Rokad Bahi for my business and I started exploring it on my own. We are manufacturing and trading company who deals in industrial parts. Getting customised invoice template was my biggest concern so after switching my business operation on Rokad Bahi I can customised various templates, track inventory, payments and collections. The best feature is I can share directly invoices with my customer via whatsapp and it is completely online so syncing of data is not required.And when I am stuck or need any support I can always rely on their excellent customer support executives who are just a call away."</p>
                      </div>
                      <div class="author d-flex">
                       <div class="test-img">
                       <img class="rounded-circle img-fluid" src="images/no-image.jpg" alt="Vikas Chavda">
                       </div>
                       <div class="testcontent">
                          <h5 class="name">Vikas Chavda</h5>
                          <p class="title">Shyama Enterprises</p>
                          <p class="title">Mumbai, Maharashtra</p>
                       </div>
                      </div>
                   </div>
                 </div>
              </div>
  
                 </div>
              <div class="swiper-button-next">
                 <i class="fas fa-chevron-right"></i>
              </div>
              <div class="swiper-button-prev">
                 <i class="fas fa-chevron-right rotate-left"></i>
              </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           </section> -->
           <section id="faq" class="faq  about feature-bg">
              <div class="container aos-init aos-animate" data-aos="fade-up">
                 <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                    <p class="about-p">How can we help you?</p>
                 </div>
                 <div class="faq-list">
                    <div id="accordion" class="myaccordion">
                       <div class="card">
                          <div class="card-header" id="headingOne">
                             <h2 class="mb-0">
                                <button class="d-flex align-items-center justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How can I reach to support team?
                                <span class="fa-stack fa-2x">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                </span>
                                </button>
                             </h2>
                          </div>
                          <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                             <div class="card-body">
                                <p class="accor-nor-text mb-2">Please contact us at </p>
                                <ul>
                                   <li>Email- support@rokadbahi.com</li>
                                   <li>Phone number-  xxxxxxxxxx</li>
                                </ul>
                             </div>
                          </div>
                       </div>
                       <div class="card">
                          <div class="card-header" id="headingTwo">
                             <h2 class="mb-0">
                                <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Is the software Offline?
                                <span class="fa-stack fa-2x">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                </span>
                                </button>
                             </h2>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                             <div class="card-body">
                                <p class="accor-nor-text">No, It’s a cloud based application, which can be accessed remotely from any location.</p>
                             </div>
                          </div>
                       </div>
                       <div class="card">
                          <div class="card-header" id="headingThree">
                             <h2 class="mb-0">
                                <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What happens when my trial period ends?
                                <span class="fa-stack fa-2x">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                </span>
                                </button>
                             </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                             <div class="card-body">
                                <p>When the trial ends, the data remains intacts and user can subscribe to paid version to continue with exiting data.</p>
                             </div>
                          </div>
                       </div>
                    </div>
  
                 </div>
              </div>
           </section>
        <section id="contact" class="contact">
           <div class="container aos-init aos-animate" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Contact</h2>
  
          </div>
  
          <div class="row">
  
            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="address">
                  <i class="fas fa-map-marker-alt"></i>
                  <h4>Location:</h4>
                  <p>adress</p>
                </div>
  
                <div class="email">
                  <i class="fas fa-envelope"></i>
                  <h4>Email:</h4>
                  <p>email@gmail.com</p>
                </div>
  
                <div class="phone">
                  <i class="fas fa-phone-alt"></i>
                  <h4>Call:</h4>
                  <p> xxxxxxxxxx</p>
                </div>
  
               <div class="whatappfootericon">
                  <i class="fab fa-whatsapp"></i>
                  <h4>Whatsapp:</h4>
                  <p>2443234234</p>
                </div>
  
                <iframe src="" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen=""></iframe>
              </div>
  
            </div>
  
            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="#" method="post" role="form" class="php-email-form">
                <div class="form-row">
                  <div class="form-group col-md-6">
                 <!--   <label for="name">Your Name</label> -->
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                  </div>
                  <div class="form-group col-md-6">
                 <!--   <label for="name">Your Email</label> -->
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
            <!--      <label for="name">Subject</label>  -->
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                  <div class="validate"></div>
                </div>
                <div class="form-group">
               <!--   <label for="name">Message</label> -->
                  <textarea class="form-control" name="message" rows="10" placeholder="Message" data-rule="required" data-msg="Please write something for us"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit" class="get-started-btn">Send Message</button></div>
              </form>
            </div>
  
          </div>
  
        </div>
      </section>
        </div>
        <!-- footer-->
         <footer id="footer">
  
  
           </div>
           <div class="container footer-bottom clearfix">
              <div class="copyright">
                 © Copyright <strong><span>Rokad Bahi</span></strong>. All Rights Reserved
              </div>
              <div class="credits">
              </div>
           </div>
        </footer>
  
  
  
        <div class="totop" id="toTop">
           <i class="fa fa-chevron-up" aria-hidden="true"></i>
        </div>
        <!--Track me js code -start here-->
  <script type='text/javascript'>
      var ClickMeter_conversion_id = 'DA2F9C9E758E45C18AAD64BBE7E2D7CD';
      var ClickMeter_conversion_value = '0.00';
      var ClickMeter_conversion_commission = '0.00';
      var ClickMeter_conversion_commission_percentage = '0.00';
      var ClickMeter_conversion_parameter = 'empty';
  </script>
  <script type='text/javascript' id='cmconvscript' src=''></script>
  <!-- Track me js code -end here-->
        <script src="landingpage_assets/js/jquery.min.js"></script>     
        <script src="landingpage_assets/js/popper.min.js"></script>
        <script src="landingpage_assets/js/bootstrap.min.js"></script>
        <script src="landingpage_assets/js/swiper.min.js"></script>
  
        <script src="landingpage_assets/js/unused-css-rules.js"></script>
        <script src="landingpage_assets/js/unused-javascript.js"></script>
        <script src="landingpage_assets/js/uses-rel-preload.js"></script>
        <script src="landingpage_assets/js/server-response-time.js"></script>      
        <script src="landingpage_assets/js/uses-long-cache-ttl.js"></script>
        <script src="landingpage_assets/js/font-display.js"></script>
        <!-- 
        <script src="js/render-blocking-resources.js"></script>  -->
        <!--animation div -->
         
        <script>
           $(document).ready(function(){
  
              /*loader image*/
            // $(window).load(function() {
            //   $(".loader").fadeOut("slow");
            // });
             /*As per header height assign margin to section 1*/
             var headerHeight = $(".header").outerHeight();
             $(".home-banner-block").css("margin-top", headerHeight);
             $(".searchcontainer").css("top", headerHeight);
             $(".setmt-headerstrip").css("margin-top", headerHeight);
           
             /*Header Search Icon*/
             // $(".srchclose, .header-searchicon").click(function(){
             //     $("#searchcontainer").slideToggle("medium");
             // });
           
             /*more info button click*/
             $(".header .moreinfobtn").click(function(){
                 $(".more-info-block").slideToggle("medium");
                 $(".navbar-collapse").removeClass("show");              
             });
            $(".navbar-toggler").click(function(){
                 $(".more-info-block").hide("slow");
             });
           
            /*Mouse hover open the submenu*/
             if ($(window).width() > 991) {
              $(".header .dropdown").hover(
                 function () {
                     $('>.dropdown-menu', this).stop(true, true).fadeIn("fast");
                     $(this).addClass('show');
                 },
                 function () {
                     $('>.dropdown-menu', this).stop(true, true).fadeOut("fast");
                     $(this).removeClass('show');
              });
              $(".header .dropdown-submenu").hover(
                 function () {
                     $('>.dropdown-menu', this).stop(true, true).fadeIn("fast");
                     $(this).addClass('show');
                 },
                 function () {
                     $('>.dropdown-menu', this).stop(true, true).fadeOut("fast");
                     $(this).removeClass('show');
              });
             }
             /*menu navbar end*/ 
             /*submenu add and remove class navbar start*/
               $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
                 if (!$(this).next().hasClass('show')) {
                   $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
                 }
                 var $subMenu = $(this).next('.dropdown-menu');
                 $subMenu.toggleClass('show');
           
           
                 $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                   $('.dropdown-submenu .show').removeClass('show');
                 });
                 return false;
               });
               /*totop scroll show and hide button*/
              $(window).scroll(function() {
                  if ($(this).scrollTop()) {
                      $('#toTop').fadeIn();
                  } else {
                      $('#toTop').fadeOut();
                  }
              });
              
              $("#toTop").click(function () {          
                 $("html, body").animate({scrollTop: 0}, 1000);
              });
              $("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
           $(e.target)
           .prev()
           .find("i:last-child")
           .toggleClass("fa-minus fa-plus");
           });     
           
           
           /*swiper slider testimonial*/
           var swiper = new Swiper('.testimonial-swiper-slider', {
            slidesPerView: 1,
            speed: 800,
            navigation: {
               nextEl: '.swiper-button-next',
               prevEl: '.swiper-button-prev',
            }       
           });
           
           
           // Toggle plus minus icon on show hide of collapse element
             $(".collapse").on('show.bs.collapse', function(){
              $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
              $(".card-header").find("h2").removeClass("titletoggle");
              $(this).prev(".card-header").find("h2").addClass("titletoggle");
             }).on('hide.bs.collapse', function(){
              $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
             });
             /*accordian end here*/
           // $('a[href*="#"]').smoothscroll({
           //   offset: 0px
           // });
           
           // /*smooth scroll div -start*/
           $("nav").find('a[href*="#"]').click(function(e) {
              e.preventDefault();
              var section = $(this).attr("href");
              $("html, body").animate({
              scrollTop: $(section).offset().top - 100
              });
           });
  
           
  
           var hash= window.location.hash;
           if(hash){
              var section = hash;
              $("html, body").animate({
              scrollTop: $(section).offset().top - 100
              },900,'linear');
           }
           /*smooth scroll div end*/
  
           });//document end here
           
           
           $(document).ready(function($) {
           var alterClass = function() {
              var ww = document.body.clientWidth;
              if (ww < 991) {
                 $('#hero').addClass("hiddedxsimage");
              }
              else{
                 $('#hero').removeClass('hiddedxsimage');
              }
           };
           $(window).resize(function(){
              alterClass();
              /*reinitialize variables*/
              var headerHeight = $(".header").outerHeight();
              $(".home-banner-block").css("margin-top", headerHeight);
              $(".searchcontainer").css("top", headerHeight);
              $(".setmt-headerstrip").css("margin-top", headerHeight);
           
           });
           //Fire it when the page first loads:
           alterClass();
           }); 
        </script>
  
  
  
        <script type="text/javascript">
              
        function tryFreeEmailFunctionHome() {
              var tryfree_emailID = $("#tryfree_emailIDhome").val();
              var phone = $("#phones").val();
  
              const queryString = window.location.search;
              var stringVal = queryString.substring(1);
              if(stringVal.includes("&")){
                  var urlStringData = stringVal.split("&");
                  for(i=0; i<urlStringData.length; i++){
                      if(urlStringData[i].includes("utm_campaign")){
                          var checkCampaign = urlStringData[i].split("=");
                      }
                  }
              }else{
                  var checkCampaign = stringVal.split("=");
              }
              var utm_campaignData = 'website';
              if(checkCampaign[0]=='utm_campaign'){
                  utm_campaignData = checkCampaign[1];
              }
  
              if (tryfree_emailID == '' || tryfree_emailID == null || tryfree_emailID == undefined) {
                  alert("Please enter the email ID");
              }
              if(phone == '' || phone == null || phone == undefined || phone.length != 10) {
                  alert("Please enter valid 10 digit Mobile no");
              } else {
                  var urlPath = window.location.protocol+'//'+window.location.host;
                  $(".loader").show();
                  $.ajax({
                      url: urlPath+"/TryFreeMail.php",
                      type: 'POST',
                      data: {
                          'tryfree_emailID': tryfree_emailID,
                          'phone': phone,
                          'utm_campaign' : utm_campaignData 
                      },
                      success: function (response) {
                          console.log(response); 
                          $(".loader").hide(); $("#tryfree_emailIDhome").val('');$("#phones").val('');
                          if (response)
                          {// alert('Thanks for showing your interest . Redirecting to the registration page.');// window.location.href="https://panel.vyapari.co.in/register";
                              var data = JSON.parse(response);
                              var email=data['email'];
                              var phone=data['phone'];
                              window.location.href = "Registration page link"+utm_campaignData+"&email="+email+"&phone="+phone;
  
                           
                          }
                          else alert('Something went wrong. Please try again later');
                      }, error: function (responseData) {
                          $('.loader').hide();
                          alert('Something went wrong. Please try again later');
                      }})
              }
          }
      </script>
  
      <script>
  
  (function(h,e,a,t,m,p) {
  
  m=e.createElement(a);m.async=!0;m.src=t;
  
  p=e.getElementsByTagName(a)[0];p.parentNode.insertBefore(m,p);
  
  })(window,document,'script','../u.heatmap.it/log.js');
  
  </script>
  
  
     </body>
</html>
