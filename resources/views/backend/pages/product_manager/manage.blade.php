@extends('backend.includes.master')
@section('main-content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Product Manager</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Manage Product Manager</li>
							</ol>
						</nav>
					</div>
				</div>                  
    <div class="container">
        <div class="card">
            <div class="card-body">
                <table class="table mb-0 table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Manager Image</th>
                            <th scope="col">Manager Name</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productsManager as $data)
                            <tr>
                                <th scope="row">{{ $loop->index+1 }}</th>
                                <td> <img class="rounded" width="100" height="80" src="{{ asset('backend/product_manager/' .$data->image)}}" alt=""> </td>
                                <td class="align-middle">{{$data->name}}</td>
                                <td class="align-middle">{{$data->brandinfo->name}}</td>
                                <td class="align-middle">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#details{{$data->id}}" class="btn btn-success text-center"><i class='bx bx-show' title="View Details"></i></a>
                                    <a href="{{ Route ('editproductmanager', $data->id)}}" class="btn btn-info" title="Edit Brand"><i class='bx bx-edit'></i></a>
                                    <button data-bs-toggle="modal" data-bs-target="#delete{{$data->id}}" class="btn btn-danger" title="Delete Brand"><i class='bx bxs-trash-alt ml-2'></i></button>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="delete{{$data->id}}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Confirmation Message</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">Are you sure you want to delete this Manager?</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <a href="{{ Route ('deleteproductmanager', $data->id)}}" type="button" class="btn btn-danger">Yes</a>
                                        </div>
                                    </div>
                                </div>
                            </div>



 
                            <div class="modal fade" id="details{{$data->id}}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content bg-info">
                                    <div class="modal-header border-dark">
                                        <h5 class="modal-title text-dark"></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-dark">
                                        <div class="row">
                                        <div class="col-md-6">
                                        <img class="rounded"  src="{{ asset('backend/product_manager/' .$data->image)}}" alt="">
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Contact Information</h5>
                                            <h6>Name: {{$data->name}}</h6>
                                            <h6>Phone Number: {{$data->phoneNumber}}</h6>
                                            <h6>Email: {{$data->email}}</h6>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer border-dark">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
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
