@extends('backend.includes.master')
@section('main-content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Product Manager</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Edit Product Manager</li>
							</ol>
						</nav>
					</div>
				</div>
                <div class="row">
					<div class="col-xl-9 mx-auto">
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div>
										</div>
										<h5 class="mb-0 text-info">Edit Product Manager</h5>
									</div>
									<hr/>
									<form class="row g-3" action="{{ Route ('updateproductmanager',$productsManager->id)}}" method="POST" enctype="multipart/form-data">
										@csrf
										<div class="col-md-6">
											<label for="product_name" class="form-label">Product Manager Name</label>
											<input type="text" class="form-control" id="name" name="name" value="{{$productsManager->name}}">
										</div>
                                        <div class="col-md-6">
											<label for="product_brand" class="form-label">Brand</label>
											<select id="product_brand" class="form-select" name="brand_id">
												@foreach($brands as $brand)
												<option value="{{$brand->id}}">{{$brand->name}}</option>
												@endforeach
											</select>
										</div>
										<div class="col-md-6">
											<label for="product_model" class="form-label">Phone NUmber</label>
											<input type="text" class="form-control" id="phoneNumber" name="phoneNumber"  value="{{$productsManager->phoneNumber}}">
										</div>
                                        <div class="col-md-6">
											<label for="product_model" class="form-label">Email</label>
											<input type="email" class="form-control" id="email" name="email" value="{{$productsManager->email}}">
										</div>
										<div class="col-12">
											<label for="product_image" class="form-label">Upload Image</label>
											<input type="file" class="form-control" id="image" name="image">
                                            <img width="100" height="30" src="{{ asset('backend/product_manager/' .$productsManager->image)}}" alt="" class="rounded">
										</div>
										<div class="col-12">
											<button type="submit" class="btn btn-info px-5">Update Product Manager</button>
										</div>
								</form>
								</div>
							</div>
						</div>
					</div>
				</div>
@endsection