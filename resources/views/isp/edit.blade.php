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
                    <a href="{{ route('isp.index')}}" class="sidebar-link float-right btn btn-success btn-rounded btn-sm">
                        <i class="fa fa-list"></i> List
                    </a>
                </h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 offset-lg-3">
                        <form class="form-horizontal p-t-20" action="{{ route('isp.update',$isp->id)}}" method="POST">
                            @csrf
                            @method('PATCH')

                            <div class="form-group row">
                                <label for="name" class="col-sm-3 control-label">Name*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ $isp->name }}" />

                                        @error('name')
                                        <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="Description">{{ $isp->description }}</textarea>
                                        @error('description')
                                        <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lat" class="col-sm-3 control-label">Latitude</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input id="lat" name="lat" type="text" class="form-control @error('lat') is-invalid @enderror" placeholder="Latitude" value="{{ $isp->lat }}" />
                                        @error('lat')
                                        <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="long" class="col-sm-3 control-label">Longitude</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input id="long" name="long" type="text" class="form-control @error('long') is-invalid @enderror" placeholder="Longitude" value="{{ $isp->long }}" />
                                        @error('long')
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