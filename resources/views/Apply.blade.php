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
                <form action="https://directionclasses.com/SendInBlue/Alvaedisonprocess.php" method="post" enctype="multipart/form-data">
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
                    <label for="Name">Heighest Qualification :-</label>
                    <select class="form-control" name="AlvaedisonQualification" required>
                        <option value="">Select Highest Qualification</option>
                                    
            <option value="B.A"> B.A </option>
            <option value="M.A"> M.A </option>
            <option value="B.E"> B.E </option>
            <option value="M.E"> M.E </option>
            <option value="B.Tech"> B.Tech </option>
            <option value="M.Tech"> M.Tech </option>
            <option value="B.Sc"> B.Sc </option>
            <option value="M.Sc"> M.Sc </option>
            <option value="BBA"> BBA </option>
            <option value="MBA"> MBA </option>
            <option value="BCA"> BCA </option>
            <option value="MCA"> MCA </option>
            <option value="P.hd"> P.hd </option>
            <option value="M.Phil"> M.Phil </option>
            <option value="B.Arch"> B.Arch </option>
            <option value="MBBS"> MBBS </option>
            <option value="MD"> MD </option>
            <option value="BDS"> BDS </option>
            <option value="MDS"> MDS </option>
            <option value="BPT"> BPT </option>
            <option value="B.Pharm"> B.Pharm </option>
            <option value="M.Pharm"> M.Pharm </option>
            <option value="B.Com"> B.Com </option>
            <option value="M.Com"> M.Com </option>
            <option value="C.A"> C.A </option>
            <option value="ICWA"> ICWA </option>
            <option value="B.Cs"> B.Cs </option>
            <option value="12th"> 12th </option>
            <option value="11th"> 11th </option>
            <option value="LLB"> LLB </option>

                        </select>
                    </div>
                    <div class="form-group">
                    <label for="Specialization along with your college details:">Specialization along with your college details: :-</label>
                    <input type="text" class="form-control" placeholder="Specialization along with your college details" name="AlvaedisonCollegeDetails" required>
                    </div>
                    
                    <div class="form-group">
                    <label for="Years of experience in teaching">Years of experience in teaching :-</label>
                    <select class="form-control" name="AlvaedisonExperience" required>
                        <option value="">Teaching Experience</option>
                              <option value="Less than a year"> Less than a year </option>
            <option value="Less Two years"> Less Two years </option>
            <option value="Less Four years"> Less Four years </option>
            <option value="More than 5 years"> More than 5 years </option>
                    </select>
                    </div>
                    
                    <div class="form-group">
                    <label for="Years of experience in teaching">Primary subject of teaching:  :-</label>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Mathematics</label>
                            <input type="radio" name="AlvaedisonPrimarySubject" value="Mathematics">
                        </div>
                        <div class="col-sm-4">
                            <label>Physics</label>
                            <input type="radio" name="AlvaedisonPrimarySubject" value="Physics">
                        </div>
                        
                        <div class="col-sm-4">
                            <label>Chemistry</label>
                            <input type="radio" name="AlvaedisonPrimarySubject" value="Chemistry">
                        </div>
                        <div class="col-sm-4">
                            <label>Biology</label>
                            <input type="radio" name="AlvaedisonPrimarySubject" value="Biology">
                        </div>
                        
                        <div class="col-sm-4">
                            <label>Computer Science</label>
                            <input type="radio" name="AlvaedisonPrimarySubject" value="Computer Science">
                        </div>
                        <div class="col-sm-4">
                            <label>English</label>
                            <input type="radio" name="AlvaedisonPrimarySubject" value="English">
                        </div>
                        <div class="col-sm-4">
                            <label>Hindi</label>
                            <input type="radio" name="AlvaedisonPrimarySubject" value="Hindi">
                        </div>
                        <div class="col-sm-4">
                            <label>Sanskrit</label>
                            <input type="radio" name="AlvaedisonPrimarySubject" value="Sanskrit">
                        </div>
                        
                        <div class="col-sm-4">
                            <label>German</label>
                            <input type="radio" name="AlvaedisonPrimarySubject" value="German">
                        </div>
                        <div class="col-sm-4">
                            <label>French</label>
                            <input type="radio" name="AlvaedisonPrimarySubject" value="French">
                        </div>
                        <div class="col-sm-4">
                            <label>Social Studies</label>
                            <input type="radio" name="AlvaedisonPrimarySubject" value="Social Studies">
                        </div>
                        <div class="col-sm-4">
                            <label>EVS</label>
                            <input type="radio" name="AlvaedisonPrimarySubject" value="EVS">
                        </div>
                        <div class="col-sm-4">
                            <label>Arabic</label>
                            <input type="radio" name="AlvaedisonPrimarySubject" value="Arabic">
                        </div>
                        <div class="col-sm-4">
                            <label>Other</label>
                            <input type="radio" name="AlvaedisonPrimarySubject" value="Other">
                        </div>
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <label for="Years of experience in teaching">Your Location :-</label>
                    <input type="text" name="AlvaedisonLocation" class="form-control" placeholder="Your Location" required>
                    </div>
                    
                    <div class="form-group">
                    <label for="Years of experience in teaching">Upload Your Resume :-</label>
                    <input type="file" name="AlvaedisonResume" class="form-control" required accept="application/pdf">
                    <p style="color:green; font-size:13px;">Format : PDF File Only</p>
                    </div>
                    <button type="submit" class="btn btn-success" name="Alvaedisonsubmit_request" style="width:100%">Submit</button>
                </div>
            </div>
            </form>
            <div class="col-lg-3 col-md-3 col-sm-3"></div>
        </div>
    </div>

@endsection