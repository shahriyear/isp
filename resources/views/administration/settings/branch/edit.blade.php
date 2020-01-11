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
                <div class="row">
                    <div class="col-md-6">
                        <form class="form-horizontal p-t-20" action="{{ route('branch.update',$branch->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="form-group row">
                                <label for="type" class="col-sm-3 control-label">Branch For*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <select class="form-control select2" name="type" id="type">
                                            <option value="">---Select One---</option>
                                            <option {{ $branch->type=="pos" ? 'selected':false }} value="pos">POS</option>
                                            <option {{ $branch->type=="mc" ? 'selected':false }} value="mc">Micro Credit</option>
                                        </select>
                                        @error('type')
                                        <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 control-label">Branch Name*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input
                                                id="name"
                                                name="name"
                                                type="text"
                                                class="form-control @error('name') is-invalid @enderror"
                                                placeholder="Branch Name"
                                                value="{{ $branch->name }}"
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
                                                id="address"
                                                name="address"
                                                class="form-control @error('address') is-invalid @enderror"
                                                placeholder="Address"
                                        >{{ $branch->address }}</textarea>
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
                        </form>
                    </div>
                    <div class="col-md-6 formmtop">
                        @include('administration.settings.branch.include-list')
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $('#unitTable').DataTable();
</script>
@endpush
