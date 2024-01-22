@extends('backend.includes.master')
@section('main-content')
			<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Category</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Edit Category</li>
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
										<h5 class="mb-0 text-info">Edit Category</h5>
									</div>
									<hr/>
									<form action="{{ Route ('updatecategory', $category->id)}}" method="POST">
                                        @csrf
                                    <div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Category Name</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="name" id="inputEnterYourName" value="{{$category->name}}" placeholder="Enter Category Name">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Status</label>
										<div class="col-sm-9">
                                            <select name="status" id="status" class="form-control">
                                                <option value="1" @if($category->status == 1 ) selected @endif>Active</option>
                                                <option value="2" @if($category->status == 2 ) selected @endif>Inactive</option>
                                            </select>
										</div>
									</div>
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-info px-5">Update</button>
										</div>
									</div>
                                    </form>
								</div>
							</div>
						</div>
					</div>
				</div>
@endsection