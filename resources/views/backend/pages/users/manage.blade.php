@extends('backend.includes.master')
@section('main-content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Users</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Manage Users</li>
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
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Roles</th>
                            <th class="role-manage-action" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $loop->index+1 }}</th>
                                <td class="align-middle">{{$user->name}}</td>
                                <td class="align-middle">{{$user->email}}</td>
                                <td class="align-middle">{{$user->username}}</td>
                                <td>
                                        @foreach ($user->roles as $role)
                                        <span class="badge bg-info text-dark">{{ $role->name}}</span>
                                        <span ></span>
                                           
                                        @endforeach
                                    </td>
                                <td class="align-middle">
                                <a href="{{ Route ('edituser', $user->id)}}" class="btn btn-info" title="Edit Brand"><i class='bx bx-edit'></i></a>
                                    <button data-bs-toggle="modal" data-bs-target="#delete{{$user->id}}" class="btn btn-danger" title="Delete Brand"><i class='bx bxs-trash-alt ml-2'></i></button>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="delete{{$user->id}}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Confirmation Message</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">Are you sure you want to delete this Manager?</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <a href="{{ Route ('deleteuser', $user->id)}}" type="button" class="btn btn-danger">Yes</a>
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
