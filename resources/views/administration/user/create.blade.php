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
                    <a href="{{ route('user.index')}}"
                       class="sidebar-link float-right btn btn-success btn-rounded btn-sm">
                        <i class="fa fa-list"></i> List
                    </a>
                </h4></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 offset-lg-3">
                        <form class="form-horizontal p-t-20" action="{{ route('user.store')}}" method="POST">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-sm-3 control-label">Name*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input
                                                id="name"
                                                name="name"
                                                type="text"
                                                class="form-control @error('name') is-invalid @enderror"
                                                placeholder="Name"
                                                value="{{ old('name')}}"
                                        />

                                        @error('name')
                                        <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="username" class="col-sm-3 control-label">Username*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input
                                                id="username"
                                                name="username"
                                                type="text"
                                                class="form-control @error('username') is-invalid @enderror"
                                                placeholder="Username"
                                                value="{{ old('username')}}"
                                        />
                                        @error('username')
                                        <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-3 control-label">Email*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input
                                                id="email"
                                                name="email"
                                                type="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Email"
                                                value="{{ old('email')}}"
                                        />
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
                                        <input
                                                id="phone"
                                                name="phone"
                                                type="text"
                                                class="form-control @error('phone') is-invalid @enderror"
                                                placeholder="Phone"
                                                value="{{ old('phone')}}"
                                        />
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-sm-3 control-label">Password*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input
                                                id="password"
                                                name="password"
                                                type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Password"
                                        />
                                        @error('password')
                                        <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password_confirmation" class="col-sm-3 control-label">Confirm
                                    Password*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input
                                                id="password_confirmation"
                                                name="password_confirmation"
                                                type="password"
                                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                                placeholder="Confirm Password"
                                        />
                                        @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="role_id" class="col-sm-3 control-label">Role</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <select
                                                id="role_id"
                                                name="role_id"
                                                class="form-control select2 @error('role_id') is-invalid @enderror">
role_id
                                            <option value="">---Select One---</option>

                                            @foreach($roles as $role)
                                            <option {{ old('role_id') == $role->id ? 'selected':''}} value="{{ $role->id }}">{{ $role->name }}
                                            </option>
                                            @endforeach

                                        </select>

                                        @error('role_id')
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
