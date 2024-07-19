
@extends('admin.layout.partials.master')
@section('content')
        <form action="{{ route('admin.category.store') }}" method="POST">
            <h3> Add New Category </h3>
            @csrf
            <div class="mt-3">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name category">
            </div>
            <button type="submit" class="btn btn-success mt-3">Send</button>
        </form>
@endsection
