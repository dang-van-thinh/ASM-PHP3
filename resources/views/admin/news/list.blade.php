@extends('admin.layout.partials.master')
@section('content')
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>IMG</th>
                    <th>Category</th>
                    <th width="200px">
                        <a href="{{ url('admin/news/add') }}" class="btn btn-success">Add New News</a>
                    </th>
                </tr>
            </thead>
            @foreach($data['news'] as $item)
                <tr>
                    <td> {{ $item->id }} </td>
                    <td> {{ $item->title }} </td>
                    <td> {{ $item->description }} </td>
                    <td>
                        <img width="100px" src="{{ asset( "storage/".$item->img )}}" alt="">
                    </td>
                    <td> {{ $item->category_id }} </td>
                    <td>
                    <a href="{{ url("/admin/news/detail",['id'=>$item->id]) }}" class="btn btn-warning">Detail</a>
                    <a href="{{ url("/admin/news/delete",['id'=>$item->id]) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach

        </table>
@endsection
