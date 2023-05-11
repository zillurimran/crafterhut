@foreach ($blogs as $blog)
    <div class="col-lg-4 col-md-6 col-sm-6 blog-preview_item">
        <div class="entry-thumb image-hover2">
          <a href="{{ route('frontend.blogDetails', $blog->id) }}">
            <img alt="Blog" src="{{ asset('uploads/blogs') }}/{{ $blog->image }}">
          </a>
        </div>
        <div class="blog-preview_info">
          <ul class="post-meta">
            <li><i class="fa fa-calendar"></i>{{ $blog->created_at->format('M d, Y') }}</li>
          </ul>
          <h4 class="blog-preview_title">
            <a href="{{ route('frontend.blogDetails', $blog->id) }}">{{ ucfirst($blog->title )}}</a>
          </h4>
          <div class="blog-preview_desc">{!! Str::limit($blog->description, 120) !!}...</div>
          <a class="blog-preview_btn" href="{{ route('frontend.blogDetails', $blog->id) }}">Read more</a>
        </div>
      </div>
    </div>
@endforeach