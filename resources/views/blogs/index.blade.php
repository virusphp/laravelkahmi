@extends('layouts.master')
@section('content')
	<!-- ini taruh di file lain aja trus di include kan di sini include('blogs.quote') -->

    <section class="section-wrap bg-light from-blog" id="blog">
      <div class="container"> 
        <div class="row heading">
          <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center bottom-line">ENTREPRENEUR NEWS</h2>
            <p class="subheading text-center">Our Latest News</p>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div id="owl-blog" class="owl-carousel owl-theme">
				@foreach($blogs as $blog)
              <div class="blog-col">
                <div class="entry-img">
                  <!-- <a href="about">
                    <img src="img/blog_1.jpg" alt="">
                  </a> -->
                </div>
                <div class="entry-box">
                  <div class="entry-title">
                    <h4><a href="about">{{ $blog->title }}</a></h4>
                  </div>
                  <ul class="entry-meta">
                    <li>by <a href="about">{{ $blog->author->name }}</a></li>
                    <li>
                      <a href="#">July 10, 2015</a>
                    </li>                   
                  </ul>
                  <div class="entry-content">
                    <p>
					{!! $blog->body !!}
                    </p>
                    <a href="{{ route('isiberita', $blog->slug) }}" class="read-more">Selengkapnya</a>
                     <i class="icon arrow_right"></i>
                  </div>
                </div>
              </div> <!-- end post -->
				@endforeach
            </div>
          	{!! $blogs->links() !!} 
          </div> <!-- end row -->
        </div>
      </div>
    </section> <!-- end from blog -->
@endsection
@push('scripts')
<script>
$(document).ready(function() {
	$(".pagination").addClass("text-center clearfix customNavigation mt-40");
	$(".mt-40").removeClass("pagination");
})
</script>
@endpush
