@extends('backend.includes.master')
@section('main-content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">User</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Edit User {{ $user->name }}</li>
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
										<h5 class="mb-0 text-info">Edit USer</h5>
									</div>
									<hr/>
									<form class="row g-3" action="{{ Route ('updateuser', $user->id)}}" method="POST">
										@csrf
										<div class="col-md-4">
											<label for="product_name" class="form-label">User Full Name</label>
											<input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
										</div>
										<div class="col-md-4">
											<label for="product_name" class="form-label">UserName</label>
											<input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}">
										</div>
										<div class="col-md-4">
											<label for="product_model" class="form-label">User Email</label>
											<input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
										</div>
										<div class="col-md-6">
											<label for="product_category" class="form-label">Password</label>
											<input type="password" class="form-control" id="password" name="password">
										</div>
                                        <div class="col-md-6">
											<label for="product_category" class="form-label">Confirm Password</label>
											<input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
										</div>
                                        <div class="col-md-12">
											<label for="product_category" class="form-label">Assign Role</label>
											<select name="roles[]" id="roles" class="form-control select2" multiple="multiple">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>{{ $role->name }}</option>
                                    @endforeach
                                </select>
										</div>
										
										<div class="col-12">
											<button type="submit" class="btn btn-info px-5">Update User</button>
										</div>
								</form>
								</div>
							</div>
						</div>
					</div>
				</div>
@endsection