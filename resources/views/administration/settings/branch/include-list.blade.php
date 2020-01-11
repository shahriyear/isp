<table class="table table-sm mb-0 table-bordered text-center" id="unitTable">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Code</th>
        <th scope="col">Type</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($branches as $branch)
    <tr>
        <th scope="row">{{ $i++ }}</th>
        <td>{{ $branch->code }}</td>
        <td>{{ $branch->type == 'mc' ? 'Micro Credit':'POS' }}</td>
        <td>{{ $branch->name }}</td>
        <td>{{ $branch->address }}</td>
        <td>
            <form action="{{ route('branch.destroy',$branch->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{ route('branch.edit',$branch->id)}}" class="text-info">
                    <i class="fa fa-pencil-alt"></i>
                </a>
                &nbsp; | &nbsp;
                <button type="submit" class="btn p-0 text-danger"><i class="fa fa-times"></i>
                </button>
            </form>
        </td>
    </tr>
    @endforeach

    </tbody>
</table>
