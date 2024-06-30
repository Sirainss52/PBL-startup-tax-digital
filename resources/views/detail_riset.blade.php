@extends('layouts.mainlayout')
@section('title', 'detail_riset')
@section('content')
<section class="u-align-center u-clearfix u-section-1" id="sec-cadd">
    <div class="u-clearfix u-sheet u-sheet-1">
        <!--post_details--><!--post_details_options_json--><!--{"source":""}--><!--/post_details_options_json--><!--blog_post-->
        <div class="u-container-style u-expanded-width u-post-details u-post-details-1">
            <div class="u-container-layout u-container-layout-1">
                <!--blog_post_image-->
                <a class="u-post-header-link" href="/blog/post-7.html"><img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xs u-image-1" src="/images/0fd3416c.jpeg" /></a><!--/blog_post_image--><!--blog_post_header-->
                <h2 class="u-blog-control u-text u-text-1">
                    <a class="u-post-header-link" href="/blog/post-7.html">Post 7</a>
                </h2>
                <!--/blog_post_header--><!--blog_post_metadata-->
                <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-1">
                    <!--blog_post_metadata_date-->
                    <span class="u-meta-date u-meta-icon">Jun 14, 2024</span><!--/blog_post_metadata_date--><!--blog_post_metadata_category-->
                    <!--/blog_post_metadata_category--><!--blog_post_metadata_comments-->
                    <!--/blog_post_metadata_comments-->
                </div>
                <!--/blog_post_metadata--><!--blog_post_content-->
                <!--/blog_post_content-->
            </div>
        </div>
        <!--/blog_post--><!--/post_details-->
    </div>
</section>

<!-- Button to open the form -->
<button class="fixed-button " onclick="openForm()">Pertanyaan ?</button>

  <!-- Form popup -->
  <div class="form-popup" id="myForm">
    <form action="/submit" class="form-container">
      <h2 class="u-align-center form-head">Inquiry form</h2>

      <label for="email"><b>Nama</b></label>
      <input type="text" placeholder="Masukkan Nama" name="name" required>

      <label for=""><b>Email</b></label>
      <input type="text" placeholder="Masukkan Email" name="Email" required>

      <label for=""><b>Pertanyaan</b></label>
      <input type="text" placeholder="Masukkan Pertanyaan" name="Question" required>

      <button type="submit" class="btn ">Submit</button>
      <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
  </div>
@endsection