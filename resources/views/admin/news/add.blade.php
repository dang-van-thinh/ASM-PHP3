@extends('admin.layout.partials.master')
@section('content')
    <div>
        <form action="{{route("admin.news.store")}}" method="post" enctype="multipart/form-data">
            <h3>
                ADD NEW NEWS
            </h3>
            @csrf
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="Title news"
                       class="form-control">
            </div>

            <div class="mb-3">
                <label for="description">Description</label>
                <textarea type="text" id="description" name="description"
                          placeholder="Description news"
                          class="form-control">

                </textarea>
            </div>
            <div class="mb-3">
                <label for="img">IMG</label>
                <input type="file" id="img" name="img"
                       class="form-control">
            </div>
            <div class="mb-3">
                <label for="category">Category</label>
                <select name="category_id" id="category" class="form-select">
                    @foreach($data['category'] as $item)
                        <option value="{{$item->id}}"> {{$item->name}} </option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-success" type="submit">Send</button>
        </form>
    </div>
@endsection
