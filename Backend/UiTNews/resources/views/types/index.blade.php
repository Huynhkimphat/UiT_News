@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Type Name</th>
                </thead>
                <tbody>
                @foreach($types as $type)
                <tr>
                    <td>{{ $type->id }}</td>
                    <td>{{ $type->TYPE_NAME }}</td>
                    <td>
                        <a href="{{ route('types.show', $type->id) }}" class="btn btn-primary">Show Type</a>
                        <form method="POST" action="{{ route('types.destroy', $type->id) }}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
