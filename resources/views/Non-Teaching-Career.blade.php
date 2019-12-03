@extends('layouts.Master')
@section('main-section')
<style>
.bg7{
    background-image:url('{{url('/')}}/public/assets/images/banner-apply.jpg');
}

.form-group{
    margin-top:10px;
}

#register{
    margin-top:70px;
    margin-bottom:70px;
    padding:30px;
    box-shadow:6px 3px 6px 3px #e6e6e6;
}
</style>
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

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3"></div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div id="register">
                <form action="https://directionclasses.com/SendInBlue/AlvaedisonprocessOne.php" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <h3 style="text-align:center;">Apply Here</h3>
                    <div class="form-group">
                    <label for="Name">Full Name :-</label>
                    <input type="text" class="form-control" placeholder="Full Name" name="AlvaedisonName" required>
                    </div>
                    
                    <div class="form-group">
                    <label for="Name">Email Address :-</label>
                    <input type="text" class="form-control" placeholder="Email Address" name="AlvaedisonEmail" required>
                    </div>
                    
                    <div class="form-group">
                    <label for="Name">Phone Number :-</label>
                    <input type="text" class="form-control" placeholder="Phone Number" name="AlvaedisonPhone" required>
                    </div>
                   
                    <div class="form-group">
                    <label for="Years of experience in teaching">Your Location :-</label>
                    <input type="text" name="AlvaedisonLocation" class="form-control" placeholder="Your Location" required>
                    </div>
                    
                    <!--<div class="form-group">-->
                    <!--<label for="Years of experience in teaching">Upload Your Resume :-</label>-->
                    <!--<input type="file" name="AlvaedisonResume" class="form-control" required accept="application/pdf">-->
                    <!--<p style="color:green; font-size:13px;">Format : PDF File Only</p>-->
                    <!--</div>-->
                    <button type="submit" class="btn btn-success" name="Alvaedisonsubmit_request" style="width:100%">Submit</button>
                </div>
            </div>
            </form>
            <div class="col-lg-3 col-md-3 col-sm-3"></div>
        </div>
    </div>

@endsection