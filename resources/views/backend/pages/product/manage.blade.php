@extends('backend.includes.master')
@section('main-content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Product</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Manage Product</li>
							</ol>
						</nav>
					</div>
				</div>
	<h6 class="mb-0 text-uppercase">Product List</h6>
	<hr/>
	<div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table id="example2" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>#</th>
							<th>Product Image</th>
							<th>Model</th>
							<th>Category</th>
							<th>DP Price</th>
							<th>MPR Price</th>
							<th>Offer Price</th>
							<th>Stock</th>
							<th>Action</th> 
						</tr>
					</thead>
					<tbody>
                    @foreach($products as $product)
						<tr>
							<td>{{ $loop->index+1 }}</td>
							<td class="text-center"><a href="{{ asset('backend/products/' .$product->image)}}" data-lightbox="product"><img width="90" height="60" src="{{ asset('backend/products/' .$product->image)}}" alt=""></a></td>
							<td>{{$product->product_model}}</td>
							<td>{{$product->catinfo->name}}</td>
							<td style="color:#FF5631; font-weight:700">&#2547;{{$product->product_dpprice}}</td>
							<td style="color:green; font-weight:700">&#2547;{{$product->product_mrpprice}}</td>
							<td style="color:#FF5631; font-weight:700">&#2547;{{$product->product_offerprice}}</td>
							<td>
                            @if($product->product_stock == 1)
                            	No
                            @elseif($product->product_stock == 2)
                           		Yes
                            @endif
                            </td>
							<td>
								<a href="#" data-bs-toggle="modal" data-bs-target="#show{{$product->id}}" class="btn btn-sm btn-success text-center"><i class='bx bx-show' title="View Details"></i></a>
								<a href="{{ Route('editproduct', $product->id) }}" class="btn btn-sm btn-info"><i class='bx bx-edit' title="Edit Category"></i></a>
								<button data-bs-toggle="modal" data-bs-target="#delete{{$product->id}}" class="btn btn-sm btn-danger"><i class='bx bxs-trash-alt ml-2' title="Delete Product"></i></button>
							</td>
						</tr>
						 <!-- Modal -->
						 <div class="modal fade" id="show{{$product->id}}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{$product->product_name}}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body bg-light">
											<div class="row">
											<div class="col-md-6" style="width:50%">
											  <img style="width:100%" src="{{ asset('backend/products/' .$product->image)}}" alt="" class="rounded">
											  <hr>
											  <h6>Description:</h6>
											  <p style="white-space: pre-wrap;word-wrap: break-word;">{{$product->product_shortdesc}}</p>
											</div>
											<div class="col-md-6">
												<h6>Product Model :</h6>{{$product->product_model}}
												<h6>Product Category :</h6>{{$product->catinfo->name}}
												<h6>Brand Name :</h6>{{$product->brandinfo->name}}
												<h6>Stock:</h6>@if($product->product_stock == 1) No @elseif($product->product_stock == 2) Yes @endif
												<h6>DP Price:</h6>{{$product->product_dpprice}}
												<h6>MRP Price:</h6>{{$product->product_mrpprice}}
												<h6>Offer Price:</h6>{{$product->product_offerprice}}
											</div>
											</div>
										</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


							<div class="modal fade" id="delete{{$product->id}}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Confirmation Message</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">Are you sure you want to delete this product?</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <a href="{{ Route ('deleteproduct', $product->id)}}" type="button" class="btn btn-danger">Yes</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection
