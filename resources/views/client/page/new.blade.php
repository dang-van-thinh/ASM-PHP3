@extends("client.layout.main")
@section("content")

    <div class="container-fluid mx-3">
        <div id="banner">
            <img src="{{ asset("img/banner.jpg") }}" alt="" class="w-100">
        </div>

        <div id="hot_news" class="container">
            <h2 class="text-uppercase py-5">Tin mới nhất</h2>
            <div id="hot_new mb-5 ">
                <div class="new ">
                    <div class="row">
                        <div class="col-lg-4">

                            @foreach($data['hotNews'] as $new)
                                @if($loop->index >= 1 && $loop->index <=2)

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

                                @endif
                            @endforeach

                        </div>
                        <div class="col-lg-8">

                            @foreach($data['hotNews'] as $new)
                                @if($loop->index == 0)
                                <a href="#">
                                    <div class="new_img new_img_main">
                                        <img src="{{ asset("/storage/".$new->img) }}" alt="">
                                    </div>
                                    <div lass="news_description mt-3 mx-2">
                                        <h4 class="my-3">
                                            {{$new->title}}
                                        </h4>
                                    </div>
                                </a>
                                @endif
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="news_other">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-3"></div>
                <div class="col-lg-3"></div>
                <div class="col-lg-3"></div>

            </div>
        </div>
    </div>

@endsection
