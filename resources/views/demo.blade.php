@extends('layouts.app')
@section('title','Demo')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card border-success">
            <div class="card-header">
                <h4 class="mb-0"><i class="mr-1 mdi mdi-home"></i>Card Title</h4></div>

            <div class="card-body">
                <form class="form-horizontal">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row">
                                    <label for="fname2" class="col-sm-3 text-right control-label col-form-label">First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname2" placeholder="First Name Here">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row">
                                    <label for="lname2" class="col-sm-3 text-right control-label col-form-label">Last Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="lname2" placeholder="Last Name Here">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row">
                                    <label for="uname1" class="col-sm-3 text-right control-label col-form-label">Username</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="uname1" placeholder="Username Here">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group row">
                                    <label for="nname" class="col-sm-3 text-right control-label col-form-label">Nick Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nname" placeholder="Nick Name Here">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                            <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card border-success">
            <div class="card-header">
                <h4 class="mb-0"><i class="mr-1 mdi mdi-home"></i>Card Title</h4></div>
            <div class="card-body">
                <table class="table table-sm mb-0 table-bordered" id="zero_config">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="card border-success">
            <div class="card-header">
                <h4 class="mb-0"><i class="mr-1 mdi mdi-home"></i>Card Title</h4></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form class="form-horizontal p-t-20">
                            <div class="form-group row">
                                <label for="uname" class="col-sm-3 control-label">Username*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="uname" placeholder="Username">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email2" class="col-sm-3 control-label">Email*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="web10" class="col-sm-3 control-label">Website</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="web10" placeholder="Enter Website Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pass3" class="col-sm-3 control-label">Password*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="pass3" placeholder="Enter pwd">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pass4" class="col-sm-3 control-label">Re Password*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="pass4" placeholder="Re Enter pwd">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-3 col-sm-9">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" class="custom-control-input" id="checkbox4" value="check">
                                        <label class="custom-control-label" for="checkbox4">Check Me Out !</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="offset-sm-3 col-sm-9 ">
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 formmtop">
                        <table class="table table-sm mb-0 table-bordered" id="default_order">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card border-success">
            <div class="card-header">
                <h4 class="mb-0">
                    <i class="mr-1 mdi mdi-home"></i>Title

                    <a href="{{ route('product.create')}}"
                       class="sidebar-link float-right btn btn-success btn-rounded btn-sm">
                        <i class="fa fa-plus"></i> New
                    </a>

                </h4>

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 offset-lg-3">
                        <form class="form-horizontal p-t-20">
                            <div class="form-group row">
                                <label for="uname" class="col-sm-3 control-label">Username*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="uname" placeholder="Username">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email2" class="col-sm-3 control-label">Email*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="web10" class="col-sm-3 control-label">Website</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="web10" placeholder="Enter Website Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pass3" class="col-sm-3 control-label">Password*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="pass3" placeholder="Enter pwd">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pass4" class="col-sm-3 control-label">Re Password*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="pass4" placeholder="Re Enter pwd">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-3 col-sm-9">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" class="custom-control-input" id="checkbox4" value="check">
                                        <label class="custom-control-label" for="checkbox4">Check Me Out !</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="offset-sm-3 col-sm-9 ">
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Sign in</button>
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
<script src="{{URL::asset('assets/extra-libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{URL::asset('assets/dist/js/pages/datatable/datatable-basic.init.js') }}"></script>
@endpush