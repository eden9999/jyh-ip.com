@extends('layouts.basic')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style='background-image: url(images/main-slider/image-1.jpg'>
        <div class="auto-container">
            <h1>联系我们</h1>
            <ul class="page-breadcrumb">
                <li><a href="/index">home</a></li>
                <li>联系我们</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Map Section -->
    <section class="map-section">
        <div class="auto-container">
            <div class="inner-container">
                <!-- Map Boxed -->
                <div class="map-boxed">
                    <!-- Map Outer -->
                    <div class="map-outer">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3063.7811537350644!2d116.28387667966626!3d39.83432409887799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35f0492ed98325d3%3A0xa0b49bc475788b2f!2zQ2hpbmEsIEJlaSBKaW5nIFNoaSwgRmVuZyBUYWkgUXUsIOaYn-eBq-i3rzHlj7cg6YKu5pS_57yW56CBOiAxMDAwNzA!5e0!3m2!1sen!2suk!4v1651454571305!5m2!1sen!2suk"
                            allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Map Section -->

    <!-- Contact Form Section -->
    <section class="services-detail-section" style='margin-top:0px;'>

        <div class="consult-form" style='max-width:1000px; margin:0 auto;'>
            <div class="sec-title" style='margin-top:60px; margin-left:40%; padding-top:100px;'>
                <h2>立即咨询</h2>
            </div>
            <form method="POST" action="{{ route ('send.email') }}">
		@csrf
                <div class="row clearfix">

                    <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                        <input type="text" name="name" placeholder="姓名Name" required>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                        <input type="email" name="email" placeholder="电子邮箱Email" required>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                        <input type="text" name="phone" placeholder="电话Phone" required>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <textarea name="message" placeholder="咨询内容Message"></textarea>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                        <button class="theme-btn btn-style-two" type="submit" name="submit-form"><span
                                class="txt">提交 <i class="arrow flaticon-right"></i></span></button>
                    </div>

                </div>
            </form>
        </div>
    </section>
    <!-- End Contact Form Section -->

    	<!-- Contact Info Section -->
	<section class="contact-info-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>我们的联系方式</h2>
			</div>
			<div class="row clearfix">
			
				<!-- Info Block -->
				<div class="info-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon flaticon-location-pin"></div>
						<h5>地理位置</h5>
						<div class="text">北京市丰台区星火路1号1幢2层2I2-1, <br> 100000, 北京</div>
					</div>
				</div>
				
				<!-- Info Block -->
				<div class="info-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon flaticon-smartphone"></div>
						<h5>电话</h5>
						<ul class="info-list">
							<li><a href="tel:+0-589-96369-95823">+86 1063344131</a></li>
							<li><a href="tel:+0-825-63596-471254">+86 15811252469</a></li>
						</ul>
					</div>
				</div>
				
				<!-- Info Block -->
				<div class="info-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon flaticon-email-3"></div>
						<h5>Email</h5>
						<ul class="info-list">
							<li><a href="mailto:info@g-c-ip.com">info@g-c-ip.com</a></li>
							<br>
						</ul>
					</div>
				</div>
			
			</div>
		</div>
	</section>
	<!-- End Contact Info Section -->

@endsection
