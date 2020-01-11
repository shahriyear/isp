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

                </h4>
            </div>
            <div class="card-body">
                <form class="form-horizontal p-t-20" action="{{ route('company.update', $company->id) }}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 control-label">Logo</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <img src="{{ URL::asset('/public'.$company->logo) }}"
                                             class="img-thumbnail" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 control-label"></label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input
                                                id="logo"
                                                name="logo"
                                                type="file"
                                                class="form-control-file @error('logo') is-invalid @enderror"
                                        />
                                        @error('logo')
                                        <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group row">
                                <label for="name" class="col-sm-3 control-label">Company Name*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input
                                                id="name"
                                                name="name"
                                                type="text"
                                                class="form-control @error('name') is-invalid @enderror"
                                                placeholder="Company Name"
                                                value="{{ $company->name}}"
                                        />
                                        @error('name')
                                        <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 control-label">Address*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <textarea
                                                name="address"
                                                id="address"
                                                class="form-control @error('address') is-invalid @enderror"
                                                placeholder="Address">{{ $company->address }}</textarea>
                                        @error('address')
                                        <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="offset-sm-3 col-sm-9 text-right">
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                                </div>
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

@push('js')
@endpush