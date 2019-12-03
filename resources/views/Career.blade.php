@extends('layouts.Master')
@section('main-section')
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
<div class="breadcrumbs-inner">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h1 class="page-title">Career</h1>
<ul>
<li>
<a class="active" href="index.html">Home</a>
</li>
<li>Career Us</li>
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
<h2>Career</h2>
</div>
<div class="about-desc">
<p>Direction Classes is one of the leading education platform in Mumbai. It allows educators to join us and teach courses on various subjects. 
We believe that Education is not only learning of facts, but also the training of mind to think.</p>

<p>
Our goal is to create best minds of the country so that they can share their knowledge to one another in an easily comprehensible form. 
 We believe that "children must be taught how to think and not what to think".</p>
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
<h2 class="white-color">Apply For Job </h2>      
<p class="white-color"><!--We regularly organize workshops on Chemistry, Maths, Economics and Business study workshop.--></p>
</div>
<a class="btn btn-success" style="background:#0676BD; border:none;" href="{{route('Apply')}}">Apply Now</a>
</div>
</div>
</div>

 @endsection