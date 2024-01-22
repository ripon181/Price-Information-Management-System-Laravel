@extends('backend.includes.master')
@section('main-content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Product</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Edit Product</li>
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
										<h5 class="mb-0 text-info">Edit Product</h5>
									</div>
									<hr/>
									<form class="row g-3" action="{{Route ('updateproduct', $product->id)}}" method="POST" enctype="multipart/form-data">
										@csrf
										<div class="col-md-6">
											<label for="product_name" class="form-label">Product Name</label>
											<input type="text" class="form-control" id="product_name" name="product_name" value="{{$product->product_name}}">
										</div>
										<div class="col-md-6">
											<label for="product_model" class="form-label">Product Model</label>
											<input type="text" class="form-control" id="product_model" name="product_model" value="{{$product->product_model}}">
										</div>
										<div class="col-md-6">
											<label for="product_category" class="form-label">Category</label>
											<select id="product_category" class="form-select" name="category_id">
												@foreach($categories as $category)
												<option value="{{$category->id}}">{{$category->name}}</option>
												@endforeach
											</select>
										</div>
										<div class="col-md-6">
											<label for="product_brand" class="form-label">Brand</label>
											<select id="product_brand" class="form-select" name="brand_id">
												@foreach($brands as $brand)
												<option value="{{$brand->id}}">{{$brand->name}}</option>
												@endforeach
											</select>
										</div>
										<div class="col-6">
											<label for="product_image" class="form-label">Upload A New Product Image</label>
											<input type="file" class="form-control" id="image" name="image">
                                            <img width="100" height="30" src="{{ asset('backend/products/' .$product->image)}}" alt="" class="rounded">
										</div>
										<div class="col-6">
											<label for="inputAddress2" class="form-label">Stock</label>
											<select id="product_stock" class="form-select" name="product_stock" value="{{$product->product_stock}}">
												<option value="2" @if($product->product_stock == 2) selected @endif>Yes</option>
												<option value="1" @if($product->product_stock == 1) selected @endif>No</option>
												
											</select>
										</div>
										<div class="col-md-4">
											<label for="product_dpprice" class="form-label">DP Price</label>
											<input type="number" class="form-control" id="product_dpprice" name="product_dpprice" placeholder="0.00" value="{{$product->product_dpprice}}">
										</div>
										<div class="col-md-4">
											<label for="product_mrpprice" class="form-label">MRP Price</label>
											<input type="number" class="form-control" id="product_mrpprice" name="product_mrpprice" placeholder="0.00" value="{{$product->product_mrpprice}}">
										</div>
										<div class="col-md-4">
											<label for="product_offerprice" class="form-label">Offer Price</label>
											<input type="text" class="form-control" id="product_offerprice" name="product_offerprice" placeholder="0.00" value="{{$product->product_offerprice}}">
										</div>
										<div class="col-12">
                                        <label for="product_shortdesc" class="form-label">Short Description</label>
                                        <textarea class="form-control" id="product_shortdesc" name="product_shortdesc" rows="3">{{$product->product_shortdesc}}</textarea>
                                        </div>
										<div class="col-12">
											<button type="submit" class="btn btn-info px-5 w-100">Update Product</button>
										</div> 
								</form>
								</div>
							</div>
						</div>
					</div>
				</div>
@endsection