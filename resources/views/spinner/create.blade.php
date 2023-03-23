@extends('master.master')

@section('content')
    <div class="page-content">
        <div class="col-xxl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Create Allow List</h4>

                </div><!-- end card header -->

                <div class="card-body">
                    <div class="live-preview">
                        <form action="{{ route('admin.AddSpinner') }}" method="POST" class="row g-3"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <label for="wallet_address" class="form-label">Wallet Address</label>
                                <input type="text" class="form-control" name="wallet_address" id="wallet_address"
                                    required placeholder="Wallet Address">
                            </div>

                            <div class="col-lg-12">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Create Allow List</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
