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

                    <a href="{{ route('isp.create')}}" class="sidebar-link float-right btn btn-success btn-rounded btn-sm">
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
                            <th scope="col">Description</th>
                            <th scope="col">Lat-Long</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($isps as $isp)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $isp->name}}</td>
                            <td>{{ $isp->description}}</td>
                            <td>{{ $isp->lat }} - {{ $isp->long }}</td>
                            <td>

                                <form action="{{ route('isp.destroy',$isp->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('isp.edit',$isp->id )}}" class="text-info">
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