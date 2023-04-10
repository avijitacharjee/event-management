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
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('blog') }}">Our Blog</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        {{ $blog->title }}
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="event-dt-block p-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="blog-view">
                            <div class="blog-img-card p-0">
                                <img src="{{ asset($blog->image) }}" alt="" />
                            </div>
                            <div class="blog-content blog-content-view p-0">
                                <h3>
                                    {{ $blog->title }}
                                </h3>
                                <div class="post-meta border_bottom pb-4">
                                    <span class="post-date me-4 fs-14"><i class="fa-regular fa-calendar-days me-2"></i>
                                        {{ $blog->created_at->format('j F, Y') }}
                                    </span>
                                    <span class="post-read-time float-none fs-14"><i
                                            class="fa fa-eye me-2"></i>{{ $blog->view_count }}
                                    </span>
                                </div>
                                <div class="blog-content-meta">
                                    {!! $blog->content !!}
                                    <div class="social-share">
                                        <h4>Share This Article</h4>
                                        <ul>
                                            <li>
                                                <a href="{{ url('#') }}" class="share-link"><i
                                                        class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('#') }}" class="share-link"><i
                                                        class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('#') }}" class="share-link"><i
                                                        class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('#') }}" class="share-link"><i
                                                        class="fas fa-envelope"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="related-posts">
                            <div class="main-title checkout-title Bp-top">
                                <h3>Related Posts</h3>
                            </div>
                            <div class="owl-carousel related-posts-slider owl-theme bt_40">
                                @foreach ($blogs as $blog)
                                    <div class="item">
                                        <div class="main-card">
                                            <div class="blog-thumbnail">
                                                <a href="{{ url('blog/' . $blog->id) }}" class="thumbnail-img">
                                                    <img src="{{ asset($blog->image) }}" alt="" />
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <a href="{{ url('blog/' . $blog->id) }}" class="blog-title fs-16">
                                                    {{ $blog->title }}
                                                </a>
                                                <div class="post-meta bt_33">
                                                    <span class="post-date fs-14"><i
                                                            class="fa-regular fa-calendar-days me-2"></i>
                                                        {{$blog->created_at->format('j F, Y')}}
                                                    </span>
                                                    <span class="post-read-time fs-14"><i
                                                            class="fa fa-eye"></i> {{ $blog->view_count }}
                                                    </span>
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
@endsection
