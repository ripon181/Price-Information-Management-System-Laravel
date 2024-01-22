@extends('backend.includes.master')
@section('main-content')
	<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
						<div class="col">
							<div class="card radius-10 ">
							 <div class="card-body">
								<div class="d-flex align-items-center">
									<h5 style="font-size:34px;" class="mb-0 text-primary">{{ \App\Models\tbl_products::count() }}</h5>
									<div class="ms-auto">
                     <i class='bx bx-cart fs-3 text-primary'></i>
									</div>
								</div>
								<div class="progress my-2" style="height:4px;">
									<div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center">
									<p class="mb-0">Total Products</p>
								</div>
							</div>
						  </div>
						</div>
						<div class="col">
							<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h5 style="font-size:34px;" class="mb-0 text-success">{{ \App\Models\tbl_category::count() }}</h5>
									<div class="ms-auto">
									<i class='bx bxs-category fs-3 text-success'></i>
									</div>
								</div>
								<div class="progress my-2" style="height:4px;">
									<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center">
									<p class="mb-0">Total Category</p>
								</div>
							</div>
						  </div>
						</div>
						<div class="col">
							<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h5 style="font-size:34px;" class="mb-0 text-danger">{{ \App\Models\tbl_brands::count() }}</h5>
									<div class="ms-auto">
									<i class='bx bxl-ok-ru fs-3 text-danger'></i>
									</div>
								</div>
								<div class="progress my-2" style="height:4px;">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center">
									<p class="mb-0">Total Brands</p>
								</div>
							</div>
						</div>
						</div>
						<div class="col">
							<div class="card radius-10">
							 <div class="card-body">
								<div class="d-flex align-items-center">
									<h5 style="font-size:34px;" class="mb-0 text-warning">{{ \App\Models\admin::count() }}</h5>
									<div class="ms-auto">
									<i class='bx bx-group fs-3 text-warning'></i>
									</div>
								</div>
								<div class="progress my-2" style="height:4px;">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center">
									<p class="mb-0">Total Users</p>

								</div>
							</div>
						 </div>
						</div>
					</div><!--end row-->
					<hr>
					<hr>



					
	<section class="vh-100 p-1">
<div class="row">
	<div class="col-md-4">
	<div class="card" style="border-radius: 15px;">
          <div class="card-body p-4">
            <div class="d-flex text-black">
              <div class="flex-shrink-0">
                <img width="100" height="50" src="{{asset('backend/assets/images/brand-logo/tenda.png')}}"
                  alt="Generic placeholder image" class="img-fluid"
                  style="width: 180px; border-radius: 10px;">
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="mb-1">Tenda</h5>
                <p class="mb-2 pb-1" style="color: #2b2a2a;">All for better networking</p>
                <div class="d-flex pt-1">
				<a type="submit" href="{{ Route('productbybrand', ['brand_id' => '1']) }}" class="btn btn-outline-primary me-1 flex-grow-1">View All Products</a>
                </div>
              </div>
            </div>
          </div>
        </div>
	</div>

	<div class="col-md-4">
	<div class="card" style="border-radius: 15px;">
          <div class="card-body p-4">
            <div class="d-flex text-black">
              <div class="flex-shrink-0">
                <img width="100" height="5" src="{{asset('backend/assets/images/brand-logo/cisco.png')}}"
                  alt="Generic placeholder image" class="img-fluid"
                  style="width: 180px; border-radius: 10px;">
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="mb-1">Cisco</h5>
                <p class="mb-2 pb-1" style="color: #2b2a2a;">Networking, Cloud, and Cybersecurity</p>
                <div class="d-flex pt-1">
				<a type="submit" href="{{ Route('productbybrand', ['brand_id' => '2']) }}" class="btn btn-outline-primary me-1 flex-grow-1">View All Products</a>
                </div>
              </div>
            </div>
          </div>
        </div>
	</div>

	<div class="col-md-4">
	<div class="card" style="border-radius: 15px;">
          <div class="card-body p-4">
            <div class="d-flex text-black">
              <div class="flex-shrink-0">
                <img width="100" height="5" src="{{asset('backend/assets/images/brand-logo/meetion.png')}}" alt="Generic placeholder image" class="img-fluid" style="width: 180px; border-radius: 10px;">
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="mb-1">Meetion</h5>
                <p class="mb-2 pb-1" style="color: #2b2a2a;">The perfect choice for gamer</p>
                <div class="d-flex pt-1">
				<a type="submit" href="{{ Route('productbybrand', ['brand_id' => '3']) }}" class="btn btn-outline-primary me-1 flex-grow-1">View All Products</a>
                </div>
              </div>
            </div>
          </div>
        </div>
	</div>

	<div class="col-md-4">
	<div class="card" style="border-radius: 15px;">
          <div class="card-body p-4">
            <div class="d-flex text-black">
              <div class="flex-shrink-0">
                <img width="100" height="5" src="{{asset('backend/assets/images/brand-logo/phyhome.png')}}"
                  alt="Generic placeholder image" class="img-fluid"
                  style="width: 180px; border-radius: 10px;">
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="mb-1">Phyhome</h5>
                <p class="mb-2 pb-1" style="color: #2b2a2a;">Making the world better</p>
                <div class="d-flex pt-1">
				<a type="submit" href="{{ Route('productbybrand', ['brand_id' => '4']) }}" class="btn btn-outline-primary me-1 flex-grow-1">View All Products</a>
                </div>
              </div>
            </div>
          </div>
        </div>
	</div>

	<div class="col-md-4">
	<div class="card" style="border-radius: 15px;">
          <div class="card-body p-4">
            <div class="d-flex text-black">
              <div class="flex-shrink-0">
                <img width="100" height="5" src="{{asset('backend/assets/images/brand-logo/rosenberger.png')}}"
                  alt="Generic placeholder image" class="img-fluid"
                  style="width: 180px; border-radius: 10px;">
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="mb-1">Rosenberger</h5>
                <p class="mb-2 pb-1" style="color: #2b2a2a;">All for better networking</p>
                <div class="d-flex pt-1">
				<a type="submit" href="{{ Route('productbybrand', ['brand_id' => '5']) }}" class="btn btn-outline-primary me-1 flex-grow-1">View All Products</a>
                </div>
              </div>
            </div>
          </div>
        </div>
	</div>

	<div class="col-md-4">
	<div class="card" style="border-radius: 15px;">
          <div class="card-body p-4">
            <div class="d-flex text-black">
              <div class="flex-shrink-0">
                <img width="100" height="5" src="{{asset('backend/assets/images/brand-logo/Ubiquiti.png')}}"
                  alt="Generic placeholder image" class="img-fluid"
                  style="width: 180px; border-radius: 10px;">
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="mb-1">Ubiquiti</h5>
                <p class="mb-2 pb-1" style="color: #2b2a2a;">Rethinking IT</p>
                <div class="d-flex pt-1">
				<a type="submit" href="{{ Route('productbybrand', ['brand_id' => '6']) }}" class="btn btn-outline-primary me-1 flex-grow-1">View All Products</a>
                </div>
              </div>
            </div>
          </div>
        </div>
	</div>

	<div class="col-md-4">
	<div class="card" style="border-radius: 15px;">
          <div class="card-body p-4">
            <div class="d-flex text-black">
              <div class="flex-shrink-0">
                <img width="100" height="5" src="{{asset('backend/assets/images/brand-logo/solitine.png')}}"
                  alt="Generic placeholder image" class="img-fluid"
                  style="width: 180px; border-radius: 10px;">
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="mb-1">Solitine</h5>
                <p class="mb-2 pb-1" style="color: #2b2a2a;">Dynamic, Efficient, Sustainable</p>
                <div class="d-flex pt-1">
				<a type="submit" href="{{ Route('productbybrand', ['brand_id' => '7']) }}" class="btn btn-outline-primary me-1 flex-grow-1">View All Products</a>
                </div>
              </div>
            </div>
          </div>
        </div>
	</div>

	<div class="col-md-4">
	<div class="card" style="border-radius: 15px;">
          <div class="card-body p-4">
            <div class="d-flex text-black">
              <div class="flex-shrink-0">
                <img width="100" height="5" src="{{asset('backend/assets/images/brand-logo/marsriva.png')}}"
                  alt="Generic placeholder image" class="img-fluid"
                  style="width: 180px; border-radius: 10px;">
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="mb-1">Marsriva</h5>
                <p class="mb-2 pb-1" style="color: #2b2a2a;">Rethinking IT</p>
                <div class="d-flex pt-1">
				<a type="submit" href="{{ Route('productbybrand', ['brand_id' => '8']) }}" class="btn btn-outline-primary me-1 flex-grow-1">View All Products</a>
                </div>
              </div>
            </div>
          </div>
        </div>
	</div>

	<div class="col-md-4">
	<div class="card" style="border-radius: 15px;">
          <div class="card-body p-4">
            <div class="d-flex text-black">
              <div class="flex-shrink-0">
                <img width="100" height="5" src="{{asset('backend/assets/images/brand-logo/ipcom.png')}}"
                  alt="Generic placeholder image" class="img-fluid"
                  style="width: 180px; border-radius: 10px;">
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="mb-1">IP-COM</h5>
                <p class="mb-2 pb-1" style="color: #2b2a2a;">World Wide Wireless</p>
                <div class="d-flex pt-1">
				<a type="submit" href="{{ Route('productbybrand', ['brand_id' => '9']) }}" class="btn btn-outline-primary me-1 flex-grow-1">View All Products</a>
                </div>
              </div>
            </div>
          </div>
        </div>
	</div>
</div>
</section>

@endsection		
