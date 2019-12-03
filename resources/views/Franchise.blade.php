@extends('layouts.Master')
@section('main-section')
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
<div class="breadcrumbs-inner">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h1 class="page-title">Franchise</h1>
<ul>
<li>
<a class="active" href="index.html">Home</a>
</li>
<li>Franchise Us</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<!-- Breadcrumbs End -->

<!-- History Start -->
<div class="rs-history sec-spacer">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-12 rs-vertical-bottom mobile-mb-50">
<a href="#">
<img src="{{url('/')}}/public/assets/images/about/history.jpg" alt="History Image"/>
</a>
</div>
<div class="col-lg-6 col-md-12">
<div class="abt-title">
<h2>Franchise</h2>
</div>
<div class="about-desc">
<p>You should choose the one who is having a strong background of their expertise where we have 20+ yrs of experience.</p>

<p>
 Many experienced teachers , tutors are looking to set up their own business in the city. Build your own name with us by joining our franchise.</p>
</div>
</div>
</div>
</div>
</div>
<!-- History End -->

<div id="rs-calltoaction" class="rs-calltoaction sec-spacer bg4">
<div class="container">
<div class="rs-cta-inner text-center">
<div class="sec-title mb-50 text-center">
<h2 class="white-color">OUR WORKSHOPS </h2>      
<p class="white-color">We regularly organize workshops on Chemistry, Maths, Economics and Business study workshop.</p>
</div>
<a class="btn btn-success" style="background:#0676BD; border:none;" href="{{route('Apply')}}">Apply Now</a>
</div>
</div>
</div>

 @endsection