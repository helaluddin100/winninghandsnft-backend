@extends('master.master')

@section('content')
    <div class="page-content">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Show All subscriber</h4>
            </div>

            <div class="card-body">
                <div class="live-preview">
                    <div class="table-responsive">

                        <table class="table table-borderless align-middle nowrap table-nowrap mb-0 display"id="data-table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Subscriber</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subscribers as $key => $subscriber)
                                    <tr>
                                        <td class="fw-medium">{{ $key + 1 }}</td>
                                        <td id={{ $subscriber->id }}>
                                            {{ $subscriber->subscriber }}</td>

                                        <td>{{ $subscriber->created_at->format('d/m/Y') }}</td>

                                        <td>
                                            <div class="hstack gap-3 fs-15">

                                                <a onclick="deleteId({{ $subscriber->id }})" class="link-danger"><i
                                                        class="ri-delete-bin-5-line"></i></a>

                                                <form action="{{ route('admin.subscriber.destroy', $subscriber->id) }}"
                                                    id="delete_form{{ $subscriber->id }}" method="post"
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
