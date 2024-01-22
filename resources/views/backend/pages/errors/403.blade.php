@extends('backend.includes.master')
@section('main-content')
<div class="error-404 d-flex align-items-center justify-content-center">
			<div class="container">
				<div class="card py-5">
					<div class="row g-0">
						<div class="col col-xl-5">
							<div class="card-body p-4">
								<h1 class="display-1"><span class="text-primary">4</span><span class="text-danger">0</span><span class="text-success">3</span></h1>
								<h2 class="font-weight-bold display-4">Forbidden</h2>
								<p>{{ $exceptionMessage }}</p>
								<div class="mt-5">
									<img style="width:50%" src="{{ asset('backend/assets/images/bird.gif') }}" alt="">
								</div>
							</div>
						</div>
						<div class="col-xl-7">
							<img src="{{ asset('backend/assets/images/403.png') }}" class="img-fluid" alt="">
						</div>
					</div>
					<!--end row-->
				</div>
			</div>
		</div>
@endsection
