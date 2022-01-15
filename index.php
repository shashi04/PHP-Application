@extends('layouts.frontend')
@section('title','Peritos Realty | Home')
@section('description','Peritos Realty Peritos Realty | Home')
@section('keywords', 'Peritos Realty Peritos Realty | Home')
@section('canonical', url(Request::url()))
@section('content')
    <style>
        video{
width:100%;
height:100%;
}
        </style>


<div class="banner banner_video_bg" >
    
<video class="video-fluid" autoplay loop muted="1" >
				<source src="{{ asset('public/frontend/Videos/bannerVideo.mp4')}}" type="video/mp4" />
                
	</video>

</div>

<!-- Banner end -->

<!-- Search area start -->
<!--<div class="search-area sr2">
    <div class="container">
        <div class="search-area-inner">
            <div class="search-contents ">
                <form method="GET">
                    <div class="row">
                       
                        <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="location" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Select Builder</option>
                                    <option>United States</option>
                                    <option>United Kingdom</option>
                                    <option>American Samoa</option>
                                    <option>Belgium</option>
                                    <option>Cameroon</option>
                                    <option>Canada</option>
                                </select>
                            </div>
                        </div>
                      
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <button class="search-button">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>-->
<!-- Search area start -->

<!-- Featured properties start -->
<div class="content-area featured-properties">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Residential Projects</h1>
        </div>
        <div class="row">
			 @foreach ($fetch_residential as $fetchc) 
            <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                <div class="property fp2">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-pad">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">{{ $fetchc->getDeveloper->title}}</div>
                            <div class="property-price"> <i class="fa fa-map-marker"></i>&nbsp;{{ $fetchc->getCity->title}}</div>
                            <img src="{{ URL::asset('storage/app/public/uploads/property/thumb/'.$fetchc->image)}}" alt="{{ $fetchc->title}}" class="img-responsive hp-2">
                            <div class="property-overlay">
                                <a href="{{ route('property',['slug'=>$fetchc->slug]) }}" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>

                                <div class="property-magnify-gallery">
                                    <a href="{{ URL::asset('storage/app/public/uploads/property/thumb/'.$fetchc->image)}}" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 property-content">
                        <!-- Info -->
                        <div class="info">
                            <!-- title -->
                            <h1 class="title">
                                <a href="{{ route('property',['slug'=>$fetchc->slug]) }}">{{ $fetchc->title}}</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="{{ route('property',['slug'=>$fetchc->slug]) }}">
                                    <i class="fa fa-map-marker"></i>{{ $fetchc->location}}
                                </a>
                            </h3>
                            <!-- Facilities List -->
                            <ul class="facilities-list fl-2 clearfix">
                              
                                <li>
                                    <span>Possesion Status :{{ $fetchc->project_status}}</span>
                                </li>
                                <li>
                                    <span>Possesion Year :{{ $fetchc->possesion_year}}</span>
                                </li>
                                
                            </ul>
                            <!-- Property footer -->
                        </div>
                        <!-- Property footer -->

                    </div>
                </div>
            </div>
		   @endforeach
        </div>
    </div>
</div>
<!-- Featured properties end -->

<!-- Our service start -->
<div class="mb-10 our-service">
    <div class="our-service-there-inner">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>WHY PERITOS REALTY?</h1>
            
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
                <div class="service-info-1">
                    <i class="flaticon-people-1"></i>
                    <h3>Trusted By Thousands</h3>
                    <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <a href="services-1.html" class="read-more">
                        Read More
                    </a>-->
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
                <div class="service-info-1">
                    <i class="flaticon-symbol-1"></i>
                    <h3>Financing Made Easy</h3>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInRight delay-04s">
                <div class="service-info-1">
                    <i class="flaticon-apartment"></i>
                    <h3>Wide Range Of Properties</h3>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInRight delay-04s">
                <div class="service-info-1">
                    <i class="flaticon-people-1"></i>
                    <h3>Expert Guidance</h3>
                    
                </div>
            </div>
            <!--<div class="col-lg-12 col-sm-12 text-center wow fadeInUp delay-04s">
                <a class="btn-2 btn-defaults" href="services-1.html">
                    <span>Read More</span> <i class="arrow"></i>
                </a>
            </div>-->
        </div>
    </div>
    </div>
</div>
<!-- Our service end -->

<!-- Commercial properties start -->
@if($fetch_commercial->count() > 0)
    <div class="container">
        <div class="main-title">
            <h1>Commercial Properties</h1>
        </div>
        <div class="row">
             @foreach ($fetch_commercial as $fetchc) 
            <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                <div class="property fp2">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-pad">
                        <div class="property-img">
                            <div class="property-tag button alt featured">{{ $fetchc->getDeveloper->title}}</div>
                            <div class="property-price"> <i class="fa fa-map-marker"></i>&nbsp;{{ $fetchc->getCity->title}}</div>
                            <img src="{{ URL::asset('storage/app/public/uploads/property/thumb/'.$fetchc->image)}}" alt="{{ $fetchc->title}}" class="img-responsive hp-2">
                            <div class="property-overlay">
                                <a href="{{ route('property',['slug'=>$fetchc->slug]) }}" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>

                                <div class="property-magnify-gallery">
                                    <a href="{{ URL::asset('storage/app/public/uploads/property/thumb/'.$fetchc->image)}}" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 property-content">
                        <div class="info">
                            <h1 class="title">
                                <a href="{{ route('property',['slug'=>$fetchc->slug]) }}">{{ $fetchc->title}}</a>
                            </h1>
                            <h3 class="property-address">
                                <a href="{{ route('property',['slug'=>$fetchc->slug]) }}">
                                    <i class="fa fa-map-marker"></i>{{ $fetchc->location}}
                                </a>
                            </h3>
                            <ul class="facilities-list fl-2 clearfix">
                              
                                <li>
                                    <span>Possesion Status :{{ $fetchc->project_status}}</span>
                                </li>
                                <li>
                                    <span>Possesion Year :{{ $fetchc->possesion_year}}</span>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
		   @endforeach
      
        </div>
    </div>
@endif
<!-- commercial Partners block end -->
<!-- Counters 2 strat -->
<div class="counters-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 border-r border-l">
                <div class="counter-box-2">
                    <i class="flaticon-tag"></i>
                    <h1 class="counter">967</h1>
                    <p>Listings For Sale</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 border-r">
                <div class="counter-box-2">
                    <i class="flaticon-symbol-1"></i>
                    <h1 class="counter">1276</h1>
                    <p>Listings For Rent</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 border-r">
                <div class="counter-box-2">
                    <i class="flaticon-people"></i>
                    <h1 class="counter">396</h1>
                    <p>Agents</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 border-r ">
                <div class="counter-box-2">
                    <i class="flaticon-people-1"></i>
                    <h1 class="counter">177</h1>
                    <p>Brokers</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters 2 end -->
<!-- future properties start --
<div class="content-area featured-properties">
    <div class="container">
        <div class="main-title">
            <h1>Future Projects</h1>
        </div>

        <div class="row wow fadeInUp delay-04s">
            <div class="">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" >
                    <div class="property fp2">
                        <div class="property-img">
                            <div class="property-tag button alt featured">Featured</div>
                            <div class="property-tag button sale">For Sale</div>
                            <div class="property-price">$72.000</div>
                            <img src="{{ asset('public/frontend/img/properties/properties-1.jpg') }}" alt="fp" class="img-responsive">
                            <div class="property-overlay">
                                <a href="properties-details.html" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="overlay-link property-video" title="Lexus GS F">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                                <div class="property-magnify-gallery">
                                    <a href="{{ asset('public/frontend/img/properties/properties-1.jpg') }}" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>

                                    <a href="{{ asset('public/frontend/img/properties/properties-2.jpg') }}" class="hidden"></a>
                                    <a href="{{ asset('public/frontend/img/properties/properties-3.jpg') }}" class="hidden"></a>
                                </div>
                            </div>
                        </div>
                        <div class="property-content">
                            <div class="info">
                                <h1 class="title">
                                    <a href="properties-details.html">Beautful Single Home</a>
                                </h1>
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3 Beds</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span> 2 Baths</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1 Garage</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-building"></i>
                                        <span> 3 Balcony</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
        </div>
    </div>
</div>
<!-- future properties end -->
<br><br>
<!-- Partners block start -->
<div class="partners-block">
    <div class="container">
        <div class="col-lg-12">
            <h3>Search For Buider</h3>
        </div>
    </div>
    <div class="partners-block-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel our-partners slide" id="ourPartners">
                        <div class="carousel-inner">
						<?php
						$i=1;
						?>
						 @foreach ($builders as $builder) 
                            <div class="item <?php if($i==1) echo'active';?>">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                   <a href="{{ route('builder',['slug'=>$builder->slug]) }}" class="brand-box">
										<img src="{{ URL::asset('storage/app/public/uploads/developers/'.$builder->cover_img)}}" alt="{{ $builder->title}}" >
										<h5>{{ $builder->title}}</h5>
									</a>
                                </div>
                            </div>
							<?php
							$i++;
							?>
                          @endforeach
                          
                        </div>
                        <a class="left carousel-control" href="#ourPartners" data-slide="prev"><i class="fa fa-chevron-left icon-prev"></i></a>
                        <a class="right carousel-control" href="#ourPartners" data-slide="next"><i class="fa fa-chevron-right icon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- buiders block end -->

<!-- Testimonial 3 section start-->
<div class="testimonials-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInLeft delay-04s">
                <div class="sec-title-three">
                    <h2> OUR Testimonials</h2>
                    
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 wow fadeInRight delay-04s">
                <div class="row">
                    <div class="carousel our-partners slide" id="ourPartners3">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <!-- Testimonials box start -->
                                    <div class="testimonials-box">
                                        <!-- Detail -->
                                        <div class="detail clearfix">
                                            <P><i class="fa fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when unknown. <i class="fa fa-quote-right"></i></P>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object" src="{{ asset('public/frontend/img/avatar/avatar-1.jpg') }}" alt="user">
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading">
                                                        <a href="#">Pitarshon Roky</a>
                                                    </h5>
                                                    <p>Creative Director</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonials box end -->
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <!-- Testimonials box start -->
                                    <div class="testimonials-box">
                                        <!-- Detail -->
                                        <div class="detail clearfix">
                                            <P><i class="fa fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when unknown. <i class="fa fa-quote-right"></i></P>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object" src="{{ asset('public/frontend/img/avatar/avatar-2.jpg') }}" alt="user">
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading">
                                                        <a href="#">Creative Director, india</a>
                                                    </h5>
                                                    <p>Office Manager</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonials box end -->
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <!-- Testimonials box start -->
                                    <div class="testimonials-box">
                                        <!-- Detail -->
                                        <div class="detail clearfix">
                                            <P><i class="fa fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when unknown. <i class="fa fa-quote-right"></i></P>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object" src="{{ asset('public/frontend/img/avatar/avatar-3.jpg') }}" alt="user">
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading">
                                                        <a href="#">Maikel Alisa</a>
                                                    </h5>
                                                    <p>Web Designer, Uk</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonials box end -->
                                </div>
                            </div>
                        </div>
                        <div class="slick-btn">
                            <div class="slick-prev slick-arrow-buton-2 sab-4">
                                <a class="left carousel-control" href="#ourPartners3" data-slide="prev"><i class="fa fa-chevron-left icon-prev"></i></a>
                            </div>
                            <div class="slick-next slick-arrow-buton-2 sab-3">
                                <a class="right carousel-control" href="#ourPartners3" data-slide="next"><i class="fa fa-chevron-right icon-next"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial 3 end -->



<!-- Intro section start -->
<div class="intro-section">
    <div class="intro-section-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-7 col-sm-8">
                    <h3>Looking To Sell Or Rent Your Property?</h3>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-4">
                    <a class="btn-2 btn-white" href="{{ route('contact-us')}}">
                        <span>Get in Touch</span> <i class="arrow"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Intro section end -->
@endsection