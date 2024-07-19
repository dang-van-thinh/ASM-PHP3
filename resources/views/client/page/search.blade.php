@extends("client.layout.main")
@section("content")

<div>
    @foreach($data['news'] as $new)

            <div class="form_news_box ms-2 mb-5">
                <a href="{{ url('news',$new->id)}}">
                    <div class="news_img">
                        <img src="{{ asset("/storage/".$new->img) }}" alt="">
                    </div>
                    <div class="news_description mt-3 mx-2">
                        <h5>
                            {{ $new->title }}
                        </h5>
                    </div>
                </a>
            </div>

    @endforeach
</div>

@endsection
