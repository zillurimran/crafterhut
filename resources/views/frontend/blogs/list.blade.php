@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | Blog List
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/blogmate.css') }}">
@endsection

@section('content')
    <!-- Main Container -->
    <div class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">
                <div class="col-sm-9 col-xs-12">
                <div class="col-main">
                    <div class="page-title">
                    <h2>Blogs</h2>
                    </div>
                    <div class="blog-wrapper" id="main">
                        <div class="site-content" id="primary">
                            <div role="main" id="content">
                                @foreach ($blogs as $blog)
                                    <article class="blog_entry">
                                        <div class="entry-content">
                                            <div class="featured-thumb">
                                                <a href="{{ route('frontend.blogDetails', $blog->id) }}">
                                                    <img alt="blog-img3" src="{{ asset('uploads/blogs') }}/{{ $blog->image }}">
                                                </a>
                                            </div>
                                            <div class="entry-content">
                                                <header class="blog_entry-header">
                                                    <div class="blog_entry-header-inner">
                                                        <h2 class="blog_entry-title">
                                                            <a href="{{ route('frontend.blogDetails', $blog->id) }}">{{ $blog->title }}</a>
                                                        </h2>
                                                    </div>
                                                <!--blog_entry-header-inner--> 
                                                </header>
                                                <p>{!! Str::limit($blog->description, 520) !!}</p>
                                            </div>
                                            <p>
                                                <a class="btn" href="{{ route('frontend.blogDetails', $blog->id) }}">Read more</a>
                                            </p>
                                        </div>
                                        <footer class="entry-meta">This blog was published in <a title="View all posts in First Category" href="#">{{ $blog->getBlogCategory->name }}</a> On
                                            <time datetime="" class="entry-date">{{ $blog->created_at->format('M d, Y') }}</time>.
                                        </footer>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-right sidebar col-sm-3 col-xs-12">
                <div class="widget_wrapper13">
                    <div class="popular-posts widget widget__sidebar">
                    <h3 class="widget-title"><span>MOST POPULAR POSITION</span></h3>
                    <div class="widget-content">
                        <ul class="posts-list unstyled">
                            @foreach ($popularBlogs as $item)
                                <li>
                                    <figure class="featured-thumb">
                                        <a href="">
                                            <img width="80" alt="blog image" src="{{ asset('uploads/blogs') }}/{{ $item->image }}">
                                        </a> 
                                    </figure>
                                    <!--featured-thumb-->
                                    <h4><a title="Pellentesque posuere" href="{{ route('frontend.blogDetails', $item->id) }}">{{ $item->title }}</a></h4>
                                    <p class="post-meta"><i class="fa fa-calendar"></i>
                                    <time datetime="2018-07-10T07:09:31+00:00" class="entry-date">{{ $item->created_at->format('M d, Y') }}</time>.</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--widget-content--> 
                    </div>
                    <div class="popular-posts widget widget_categories">
                    <h3 class="widget-title"><span> CATEGORIES</span></h3>
                    <ul>
                        @foreach ($categories as $item)
                            <li class="cat-item"><a href="#">{{ $item->name }}</a></li>
                        @endforeach
                    </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection