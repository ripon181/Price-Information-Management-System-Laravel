@extends('backend.includes.master')
@section('main-content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Category</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Manage Category</li>
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
                            <th scope="col">Category Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <th scope="row">{{ $loop->index+1 }}</th>
                                <td>{{$category->name}}</td>
                                <td>
                                    @if($category->status == 1)
                                        <a href="{{Route('activecategory', $category->id)}}" class="btn btn-success">Active</a>
                                    @elseif($category->status == 2)
                                        <a href="{{Route('inactivecategory', $category->id)}}" class="btn btn-warning">Inactive</a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ Route ('editcategory', $category->id)}}" class="btn btn-info"><i class='bx bx-edit' title="Edit Category"></i></a>
                                    <button data-bs-toggle="modal" data-bs-target="#delete{{$category->id}}" class="btn btn-danger" title="Delete Category"><i class='bx bxs-trash-alt ml-2'></i></button>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="delete{{$category->id}}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Confirmation Message</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">Are you sure you want to delete this category?</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <a href="{{ Route ('deletecategory', $category->id)}}" type="button" class="btn btn-danger">Yes</a>
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
