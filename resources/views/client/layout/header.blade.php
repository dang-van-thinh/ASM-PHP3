<div id="header">
    <div class="header_main">
        <nav class="navbar navbar-expand-lg header_shadow">
            <div class="container">
                <a class="navbar-brand img_logo" href="#">
                    <img src="{{ asset("img/logo.png") }}">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 nav_extra">
                        <li class="nav-item me-2">
                            <a class="nav-link" aria-current="page" href="/">Trang chủ</a>
                        </li>

                        @foreach($data['category'] as $cate )
                            <li class="nav-item me-2">
                                <a class="nav-link" href="{{ url("/category",$cate->id)}}"> {{ $cate->name  }}</a>
                            </li>
                        @endforeach

                    </ul>
                    <form class="d-flex" action="{{route("home.search")}}" method="GET">
{{--                        @csrf--}}
                        <input class="form-control me-2"
                               type="search" placeholder="Search" name="key">
                        <button class="btn btn-outline-success" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </nav>

    </div>
    <div class="container">
{{--        <div class="py-3">--}}
{{--            <h2 class="text-uppercase">news</h2>--}}
{{--        </div>--}}
{{--        <nav class="navbar navbar-expand-lg">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="collapse navbar-collapse" id="navbarNav">--}}
{{--                    <ul class="navbar-nav nav_extra">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="#">Thể thao mới nhất</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="#">Bóng đá</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="#">Bóng rổ</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="#" >Sự kiện</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}
    </div>
</div>
