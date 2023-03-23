@extends('master.master')

@section('content')
    <div class="page-content">
        <div class="col-xxl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Change Password</h4>

                </div><!-- end card header -->

                <div class="card-body">
                    <div class="live-preview">
                        <form action="{{ route('admin.change-password') }}" method="POST"enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="add-prouduct-from">
                                <div class="add-prouduct-name mt-4">
                                    <label for="" id="old_password">Old Password:*</label>
                                    <div class="product-input">
                                        <input type="password" class="form-control" id="old_password" name="old_password"
                                            placeholder="Old Password" required />
                                    </div>
                                </div>
                                <div class="add-prouduct-name mt-4">
                                    <label for="" id="password">Password:*</label>
                                    <div class="product-input">
                                        <input type="password"class="form-control" id="password" name="password"
                                            placeholder="Password" required />
                                    </div>
                                </div>
                                <div class="add-prouduct-name mt-4">
                                    <label for="password_confirmation" id="password_confirmation">Password:*</label>
                                    <div class="product-input">
                                        <input type="password" class="form-control"id="password_confirmation"
                                            name="password_confirmation" placeholder="Password Confirmation" required />
                                    </div>
                                </div>

                                <div class="col-lg-12 mt-4">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Update Password</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
