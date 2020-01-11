@if(Session::has('message'))
<div class="row">
    <div class="col-md-12">
        <div class="card-body alert-success">
            <span class="text-success">{{ Session::get('message') }}</span>
        </div>
    </div>
</div>
@endif
