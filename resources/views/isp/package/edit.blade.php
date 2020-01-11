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
                <h4 class="mb-0"><i class="mr-1 mdi mdi-home"></i>{{ $title }}
                    <a href="{{ route('package.index')}}" class="sidebar-link float-right btn btn-success btn-rounded btn-sm">
                        <i class="fa fa-list"></i> List
                    </a>
                </h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 offset-lg-3">
                        <form class="form-horizontal p-t-20" action="{{ route('package.update',$package->id)}}" method="POST">
                            @csrf
                            @method('PATCH')


                            <div class="form-group row">
                                <label for="isp_id" class="col-sm-3 control-label">ISP*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <select id="isp_id" name="isp_id" class="form-control select2 @error('isp_id') is-invalid @enderror">
                                            isp_id
                                            <option value="">---Select One---</option>

                                            @foreach($isps as $ips)
                                            <option {{ $package->isp_id == $ips->id ? 'selected':''}} value="{{ $ips->id }}">{{ $ips->name }}
                                            </option>
                                            @endforeach

                                        </select>

                                        @error('isp_id')
                                        <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-3 control-label">Name*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ $package->name }}" />

                                        @error('name')
                                        <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-sm-3 control-label">Price*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input id="price" name="price" type="text" class="form-control @error('price') is-invalid @enderror" placeholder="Price" value="{{ $package->price }}" />

                                        @error('price')
                                        <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>




                            <div class="form-group row m-b-0">
                                <div class="offset-sm-3 col-sm-9 ">
                                    <button type="submit" class="btn btn-success waves-effect waves-light float-right">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>


        </div>
    </div>
</div>
@endsection

@push('js')
@endpush