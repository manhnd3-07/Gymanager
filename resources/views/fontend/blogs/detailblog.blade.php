@extends('fontend.layouts.index')
@section('title', ' Chi tiết bài viết')
@section('content')
<main>
      <!--? Hero Start -->
      <div class="slider-area2">
         <div class="slider-height2 d-flex align-items-center">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                           <div class="hero-cap hero-cap2 pt-70 text-center">
                              <h2>Chi tiết bài viết</h2>
                           </div>
                     </div>
                  </div>
               </div>
         </div>
      </div>
      <!-- Hero End -->
      <!--? Blog Area Start -->
      <section class="blog_area single-post-area section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 posts-list">
                  <div class="single-post">
                     <div class="feature-img">
                        <img class="img-fluid" src="{{ asset('/posts/'.$detail->avatar) }}"height="300px">
                     </div>
                     <div class="blog_details">
                        <h2 style="color: #2d2d2d;">{{ $detail->title }}
                        </h2>
                        <p class="excert">
                          {{ $detail->detail }}
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                     
                     <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title" style="color: #2d2d2d;">Danh Muc</h4>
                        <ul class="list cat-list">
                           <li>
                              @foreach($cate as $cate)
                              <a href="{{ route('cateBlogs',$cate->id) }}" class="d-flex">
                                 <p>{{ $cate->name }}</p>
                              </a>
                              @endforeach
                           </li>
                        </ul>
                     </aside>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Blog Area End -->
   </main>
   @endsection