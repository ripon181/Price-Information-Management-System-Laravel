@extends('backend.includes.master')
@section('main-content') 
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Brand</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Manage Brand</li>
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
                            <th scope="col">Brand Name</th>
                            <th scope="col">Brand Logo</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($brand as $data)
                            <tr>
                                <th scope="row">{{ $loop->index+1 }}</th>
                                <td>{{$data->name}}</td>
                                <td> <img width="100" height="30" src="{{ asset('backend/brand/logo/' .$data->image)}}" alt=""> </td>
                                <td>
                                    @if($data->status == 1)
                                        <a href="{{Route('activebrand', $data->id)}}" class="btn btn-success">Active</a>
                                    @elseif($data->status == 2)
                                        <a href="{{Route('inactivebrand', $data->id)}}" class="btn btn-warning">Inactive</a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ Route ('editbrand', $data->id)}}" class="btn btn-info" title="Edit Brand"><i class='bx bx-edit'></i></a>
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
                                        <div class="modal-body">Are you sure you want to delete this Brand?</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <a href="{{ Route ('deletebrand', $data->id)}}" type="button" class="btn btn-danger">Yes</a>
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
