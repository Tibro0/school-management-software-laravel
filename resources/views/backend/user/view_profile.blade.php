@extends('admin.admin_master')


@section('admin')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <h3 class="border border-0 pe-3">User Profile</h3>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('profile.edit') }}" class="btn btn-primary px-5">Edit Profile</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">

                                <img src="{{ (!empty($user->image))? url('upload/user_images/' . $user->image): url('upload/no_image.jpg') }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">

                                <div class="mt-3">
                                    <h4><span class="fw-bold">User Name: </span>{{ $user->name }}</h4>
                                    <p class="text-secondary mb-1"><span class="fw-bold">User Type: </span>{{ $user->usertype }}</p>
                                    <p class="text-muted font-size-sm"><span class="fw-bold">User Email: </span>{{ $user->email }}</p>
                                    <button class="btn btn-primary">Follow</button>
                                    <button class="btn btn-outline-primary">Message</button>
                                </div>
                            </div>
                            <hr class="my-4">
                            <ul class="list-group list-group-flush">

                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Mobile No</h6>
                                    <span class="text-secondary">{{ $user->mobile }}</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Address</h6>
                                    <span class="text-secondary">{{ $user->address }}</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Gender</h6>
                                    <span class="text-secondary">{{ $user->gender }}</span>
                                </li>

                                {{-- <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Gander</h6>
                                    <span class="text-secondary">{{ $user-> }}</span>
                                </li> --}}
                                
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

