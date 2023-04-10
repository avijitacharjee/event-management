@extends('public.layout')
@section('content')
    <div class="wrapper">
        <div class="breadcrumb-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-10">
                        <div class="barren-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Our Blog
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="event-dt-block p-80">
            <div class="most-popular-posts">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="slide-posts">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="">
                                            <div class="owl-carousel most-posts-slider owl-theme">
                                                @foreach ($topBlogs as $blog)
                                                    <div class="item">
                                                        <div class="main-card">
                                                            <div class="blog-block flex-slide">
                                                                <div class="blog-img-card left">
                                                                    <a href="{{ url('/blog/3') }}" class="bbig-img">
                                                                        <img src="{{ asset($blog->image) }}"
                                                                            alt="" />
                                                                    </a>
                                                                </div>
                                                                <div class="blog-content right">
                                                                    <a href="{{ url('blog/' . $blog->id) }}"
                                                                        class="blog--title">{{ $blog->title }}</a>
                                                                    <p class="mb-4">
                                                                        {!! str($blog->content)->limit(100) !!}
                                                                    </p>
                                                                    <div class="post-meta">
                                                                        <span class="post-date me-4"><i
                                                                                class="fa-regular fa-calendar-days me-2"></i>{{ $blog->created_at->format('j F, Y') }}</span>
                                                                        {{-- <span class="post-read-time"><i
                                                                            class="fa-regular fa-clock me-2"></i> {{$blog->reading_time}}
                                                                        mins
                                                                        read
                                                                    </span> --}}
                                                                    </div>
                                                                    <a href="{{ url('blog/' . $blog->id) }}"
                                                                        class="main-btn h_50 btn-hover bt_40">View
                                                                        Post</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="latest-posts Bp-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="main-title checkout-title">
                                <h3>Latest Posts</h3>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="bt_40">
                                <div class="row g-4">
                                    @foreach ($blogs as $blog)
                                        <div class="col-xl-3 col-lg-4 col-md-6">
                                            <div class="main-card">
                                                <div class="blog-thumbnail">
                                                    <a href="{{ url('blog/'.$blog->id) }}" class="thumbnail-img">
                                                        <img src="{{ asset($blog->image) }}"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="blog-content">
                                                    <a href="{{ url('blog/'.$blog->id) }}" class="blog-title fs-16">{{$blog->title}}</a>
                                                    <div class="post-meta bt_33">
                                                        <span class="post-date fs-14"><i
                                                                class="fa-regular fa-calendar-days me-2"></i>
                                                            {{$blog->created_at->format('j F, Y')}}
                                                            </span>
                                                        {{-- <span class="post-read-time fs-14"><i
                                                                class="fa-regular fa-clock me-2"></i>10 mins read
                                                        </span> --}}
                                                        <span class="post-read-time fs-14">
                                                            <i class="fa fa-eye"></i>
                                                            {{$blog->view_count}}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{-- <div class="col-lg-12 col-md-12">
                                        <div class="browse-btn mt-4">
                                            <a href="#" class="main-btn btn-hover">See More</a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
