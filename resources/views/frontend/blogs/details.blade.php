@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | {{ $blog->title }}
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/blogmate.css') }}">
@endsection


@section('content')

    <div class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">
                <div class="col-sm-9 col-md-9 col-xs-12">
                    <div class="col-main">
                        <div class="page-title">
                        <h2>Blog</h2>
                        </div>
                        <div class="blog-wrapper">
                            <div class="site-content">
                                <div role="main" id="content">
                                    <article class="blog_entry">
                                        <div class="entry-content">
                                            <div class="featured-thumb">
                                                <a href="{{ route('frontend.blogDetails', $blog->id) }}">
                                                    <img alt="blog-img4" src="{{ asset('uploads/blogs') }}/{{ $blog->image }}">
                                                </a>
                                            </div>
                                            <div class="entry-content">
                                                <header class="blog_entry-header">
                                                    <div class="blog_entry-header-inner">
                                                        <h2 class="blog_entry-title">{{ $blog->title }}</h2>
                                                    </div>
                                                </header>
                                                <p>{!! $blog->description !!}</p>
                                                <blockquote>{{ $blog->quote }}</blockquote>
                                                <p>{!! $blog->description_2 !!}</p>
                                            </div>
                                        </div>
                                        <footer class="entry-meta">This blog has been published<a href="#">{{ $blog->getBlogCategory->name }}</a> au
                                            <time datetime="" class="entry-date">{{ $blog->created_at->format('M d, Y') }}</time>.
                                        </footer>
                                    </article>

                                    {{-- <div class="comment-content">
                                        <div class="comments-wrapper">
                                            <h3> Comments </h3>
                                            <ul class="commentlist">
                                                <li class="comment">
                                                    <div class="comment-wrapper">
                                                        <div class="comment-author vcard">
                                                        <p class="gravatar">
                                                            <a href="#">
                                                                <img width="60" height="60" alt="avatar" src="{{ asset('frontend/images/avatar60x60.jpg') }}">
                                                            </a>
                                                        </p>
                                                        <span class="author">John Doe</span> </div>
                                                        <div class="comment-meta">
                                                            <time datetime="2018-07-10T07:26:28+00:00" class="entry-date">Thu, Jul 10, 2018 07:26:28 am</time>. 
                                                        </div>
                                                        <div class="comment-body"> Curabitur at vestibulum sem. Aliquam vehicula neque ac nibh suscipit ultrices. Morbi interdum accumsan arcu nec scelerisque ellentesque id erat sem, ut commodo nulla. Sed a nulla et eros fringilla. Phasellus eget purus nulla. </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        <div class="comments-form-wrapper">
                                            <h3>Leave A reply</h3>
                                            <form class="comment-form" method="post" id="postComment">
                                                <div class="field">
                                                <label>Name<em class="required">*</em></label>
                                                <input type="text" class="input-text" title="Name" value="" id="user" name="user_name">
                                                </div>
                                                <div class="field">
                                                <label for="email">Email<em class="required">*</em></label>
                                                <input type="text" class="input-text validate-email" title="Email" value="" id="email" name="user_email">
                                                </div>
                                                <div class="clear"></div>
                                                <div class="field aw-blog-comment-area">
                                                <label for="comment">Comment<em class="required">*</em></label>
                                                <textarea rows="5" cols="50" class="input-text" title="Comment" id="comment" name="comment"></textarea>
                                                </div>
                                                <div style="width:96%" class="button-set">
                                                <input type="hidden" value="1" name="blog_id">
                                                <button type="submit" class="bnt-comment"><span><span>Add Comment</span></span></button>
                                                </div>
                                            </form>
                                        </div>
                                        
                                    </div> --}}
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-right  sidebar col-sm-3 col-xs-12">
                    <div class="widget_wrapper13">
                        <div class="popular-posts widget widget__sidebar">
                        <h3 class="widget-title"><span>Most popular message</span></h3>
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
                        <h3 class="widget-title"><span>Categories</span></h3>
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