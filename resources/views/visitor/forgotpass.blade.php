@include('visitor.layouts.head')
@include('visitor.layouts.header')
<div class="content-wrapper">

<div class="breadcrumb-wrap bg-spring">
<img src="assets/img/breadcrumb/br-shape-1.png" alt="Image" class="br-shape-one xs-none">
<img src="assets/img/breadcrumb/br-shape-2.png" alt="Image" class="br-shape-two xs-none">
<img src="assets/img/breadcrumb/br-shape-3.png" alt="Image" class="br-shape-three moveHorizontal sm-none">
<img src="assets/img/breadcrumb/br-shape-4.png" alt="Image" class="br-shape-four moveVertical sm-none">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-7 col-md-8 col-sm-8">
<div class="breadcrumb-title">
<h2>Recover Password</h2>
<ul class="breadcrumb-menu list-style">
<li><a href="index.html">Home </a></li>
<li>Recover Password</li>
</ul>
</div>
</div>
<div class="col-lg-5 col-md-4 col-sm-4 xs-none">
<div class="breadcrumb-img">
<img src="assets/img/breadcrumb/br-shape-5.png" alt="Image" class="br-shape-five animationFramesTwo">
<img src="assets/img/breadcrumb/br-shape-6.png" alt="Image" class="br-shape-six bounce">
<img src="assets/img/breadcrumb/breadcrumb-3.png" alt="Image">
</div>
</div>
</div>
</div>
</div>


<section class="Login-wrap ptb-100">
<div class="container">
<div class="row">
<div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
<div class="login-form-wrap">
<div class="login-header">
<h3>Recover Password</h3>
<p>We will send a verification code to your mail to reset your password.
</p>
</div>
    @if ($errors->any())
        <div class="text-center alert-danger p-3 rounded" style="font-size: 20px">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            
        </div>
        @endif

        @if (session('success'))
        <div class="text-center alert-success p-3 rounded" style="font-size: 20px">
            {{ session('success') }}
            
        </div>
    @endif
<div class="login-form">
<div class="login-body">
    <form class="form-wrap" action="/recover" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <input id="email" name="email" type="email" placeholder="Email/Account Number" required>
                </div>
            </div>
        
            <div class="col-lg-12">
                <div class="form-group mb-0">
                    <button class="btn style1 w-100 d-block">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

</div>

@include('visitor.layouts.footer')