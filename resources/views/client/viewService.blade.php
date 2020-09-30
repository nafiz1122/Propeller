@extends('layouts.client_master')

@section('content')
	<!-- Start Sample Area -->
	<section class="sample-text-area">
		<div class="container box_1170">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="text-heading">{{ $service->service_name }}</h3>
                    <p class="sample-text">
                        {!! $service->service_long_details !!}
                    </p>
                    <a href="{{ url('/PatientReg') }}"><button class="btn btn-primary" >Register Now</button></a>
                </div>
                <div class="col-md-6">
                    <img src="/Admin_images/Service_images/{!! $service->service_image !!}" alt="">
                </div>
            </div>
			
		</div>
	</section>
	<!-- End Sample Area -->
@endsection