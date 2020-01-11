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
                    <a href="{{ route('isp.user.index')}}" class="sidebar-link float-right btn btn-success btn-rounded btn-sm">
                        <i class="fa fa-list"></i> List
                    </a>
                </h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 offset-lg-3">
                        <form class="form-horizontal p-t-20" action="{{ route('isp.user.store')}}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="isp_id" class="col-sm-3 control-label">ISP*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <select id="isp_id" name="isp_id" class="form-control select2 @error('isp_id') is-invalid @enderror">
                                            isp_id
                                            <option value="">---Select One---</option>

                                            @foreach($isps as $ips)
                                            <option {{ old('isp_id') == $ips->id ? 'selected':''}} value="{{ $ips->id }}">{{ $ips->name }}
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
                                        <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name')}}" />

                                        @error('name')
                                        <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-3 control-label">Email*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email')}}" />

                                        @error('email')
                                        <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone" class="col-sm-3 control-label">Phone*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input id="phone" name="phone" type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone" value="{{ old('phone')}}" />

                                        @error('phone')
                                        <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ip" class="col-sm-3 control-label">IP*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input id="ip" name="ip" type="text" class="form-control @error('ip') is-invalid @enderror" placeholder="IP" value="{{ old('ip')}}" />

                                        @error('ip')
                                        <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-sm-3 control-label">Address</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror" placeholder="Address">{{ old('address') }}</textarea>
                                        @error('address')
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