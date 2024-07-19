@extends('admin.layout.partials.master')
@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th width="200px">
                <a href="{{ url('/admin/category/add') }}" class="btn btn-success">Add New Category</a>
            </th>
        </tr>
        </thead>
        @foreach($data['category'] as $item)
            <tr>
                <td> {{ $item->id }} </td>
                <td> {{ $item->name }} </td>
                <td>
                    <a 
                    href="{{url("/admin/category/detail",['id'=>$item->id])}}" 
                    class="btn btn-warning">Detail</a>

                    <a
                        href="{{url("/admin/category/delete",['id'=>$item->id])}}"
                        class="btn btn-danger"
                        onclick="return confirm('Do you want to delete category ?')"
                    >Delete</a>
                </td>
            </tr>
        @endforeach

    </table>

@endsection
