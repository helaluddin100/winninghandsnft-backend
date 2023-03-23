@extends('master.master')

@section('content')
    <div class="page-content">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Show All spinner</h4>

                <div class="flex-shrink-0">
                    <div class="form-check form-switch form-switch-right form-switch-md">
                        <a href="{{ route('admin.spinner.create') }}"
                            class="btn btn-success btn-icon waves-effect waves-light"><i class="ri-check-double-line"></i></a>
                    </div>
                </div>

            </div><!-- end card header -->

            <div class="card-body">
                <div class="live-preview">
                    <div class="table-responsive">

                        <table class="table table-borderless align-middle table-nowrap mb-0 display"id="data-table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Wallet Address</th>
                                    <th scope="col">Copy</th>
                                    <th scope="col">Get Offer</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($spinners as $key => $spinner)
                                    <tr>
                                        <td class="fw-medium">{{ $key + 1 }}</td>
                                        <td id={{ $spinner->id }}>
                                            {{ $spinner->wallet_address }}</td>
                                        <td>
                                            <button class="btn btn-primary btn-sm"
                                                onclick="copyToClipboard({{ $spinner->id }})">Copy</button>
                                        </td>

                                        <td>{{ $spinner->get_offer }}</td>
                                        <td>{{ $spinner->created_at->format('d/m/Y') }}</td>

                                        <td>
                                            <div class="hstack gap-3 fs-15">

                                                <a onclick="deleteId({{ $spinner->id }})" class="link-danger"><i
                                                        class="ri-delete-bin-5-line"></i></a>

                                                <form action="{{ route('admin.spinner.destroy', $spinner->id) }}"
                                                    id="delete_form{{ $spinner->id }}" method="post"
                                                    style="display: none">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
@endsection
<script>
    function copyToClipboard(elementId) {

        // Create a "hidden" input
        var aux = document.createElement("input");

        // Assign it the value of the specified element
        aux.setAttribute("value", document.getElementById(elementId).innerHTML);

        // Append it to the body
        document.body.appendChild(aux);

        // Highlight its content
        aux.select();

        // Copy the highlighted text
        document.execCommand("copy");

        // Remove it from the body
        document.body.removeChild(aux);

    }
</script>
