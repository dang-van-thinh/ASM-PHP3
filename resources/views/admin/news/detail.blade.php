@extends('admin.layout.partials.master')
@section('content')
    <div>
        <form action="{{route("admin.news.update",['id'=>$data['news']->id])}}" method="post"
              enctype="multipart/form-data">
            <h3>
                ADD NEW NEWS
            </h3>
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="Title news"
                       class="form-control" value="{{$data['news']->title}}">
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea type="text" id="description"
                          name="description"
                          placeholder="Description news"
                          class="form-control">
                            {{$data['news']->description}}
                </textarea>
            </div>

            <div class="mb-3">
                <label for="img">IMG</label>
                <input type="hidden" name="img_2" value="{{$data['news']->img }}">
                <img src="{{asset("/storage/".$data['news']->img)}}" alt="" width="100px">
                <input type="file" id="img" name="img"
                       class="form-control">
            </div>
            <div class="mb-3">
                <label for="category">Category</label>
                <select name="category_id" id="category" class="form-select">
                    @foreach($data['category'] as $item)
                        <option
                            {{  $item->id == $data['news']->category_id ? "selected" :  ""  }} value="{{$item->id}}"> {{$item->name}} </option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-success" type="submit">Send</button>
        </form>
    </div>
@endsection
