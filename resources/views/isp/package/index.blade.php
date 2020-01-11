@extends('layouts.app')
@section('title',$title)

@push('css')
@endpush

@section('content')

@include('layout-parts.flash-message')

<div class="row">
    <div class="col-md-12">
        <div class="card border-success">
            <div class="card-header">
                <h4 class="mb-0">
                    <i class="mr-1 mdi mdi-home"></i>{{ $title }}

                    <a href="{{ route('package.create')}}" class="sidebar-link float-right btn btn-success btn-rounded btn-sm">
                        <i class="fa fa-plus"></i> New
                    </a>

                </h4>
            </div>
            <div class="card-body">
                <table class="table table-sm m-b-0 table-bordered text-center" id="userTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($packages as $package)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $package->name}}</td>
                            <td>{{ number_format($package->price,2) }}</td>
                            <td>

                                <form action="{{ route('package.destroy',$package->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('package.edit',$package->id )}}" class="text-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    &nbsp; | &nbsp;
                                    <button type="submit" class="btn p-0 text-danger"><i class="fa fa-times"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $('#userTable').DataTable();
</script>
@endpush