@extends('backend.layouts.master')
@section('content')
<div id="main">
	<div class="row">
		<div class="col s12">
			<div class="container">
				
				<div id="ecommerce-offer">
					<div class="row">
						<div class="col s12 m3">
							<div class="card gradient-shadow gradient-45deg-light-blue-cyan border-radius-3 animate fadeUp">
								<div class="card-content center">
									<img src="{{asset('')}}backend/app-assets/images/icon/apple-watch.png" class="width-40 border-round z-depth-5"
									alt="" class="responsive-img" />
									<h5 class="white-text lighten-4">XX</h5>
									<p class="white-text lighten-4">Total Slider</p>
								</div>
							</div>
						</div>
						<div class="col s12 m3">
							<div class="card gradient-shadow gradient-45deg-red-pink border-radius-3 animate fadeUp">
								<div class="card-content center">
									<img src="{{asset('')}}backend/app-assets/images/icon/printer.png" class="width-40 border-round z-depth-5" alt=""
									class="responsive-img" />
									<h5 class="white-text lighten-4">XX</h5>
									<p class="white-text lighten-4">Total Client</p>
								</div>
							</div>
						</div>
						<div class="col s12 m3">
							<div class="card gradient-shadow gradient-45deg-amber-amber border-radius-3 animate fadeUp">
								<div class="card-content center">
									<img src="{{asset('')}}backend/app-assets/images/icon/laptop.png" class="width-40 border-round z-depth-5" alt=""
									class="responsive-img" />
									<h5 class="white-text lighten-4">XX</h5>
									<p class="white-text lighten-4">Total Service</p>
								</div>
							</div>
						</div>
						<div class="col s12 m3">
							<div class="card gradient-shadow gradient-45deg-green-teal border-radius-3 animate fadeUp">
								<div class="card-content center">
									<img src="{{asset('')}}backend/app-assets/images/icon/bowling.png" class="width-40 border-round z-depth-5" alt=""
									class="responsive-img" />
									<h5 class="white-text lighten-4">XX</h5>
									<p class="white-text lighten-4">Total Package</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- ecommerce offers end-->
				<!-- //////////////////////////////////////////////////////////////////////////// -->
			</div>
		</div>
	</div>
</div>

@endsection