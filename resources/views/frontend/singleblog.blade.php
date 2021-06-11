<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.header')

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="/frontend/css/core-style.css">
    <link rel="stylesheet" href="/frontend/style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    @include('frontend.main')
    <!-- ##### Right Side Cart End ##### -->

    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('assets/img/notebook-731212__480.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            <font color="black">{{ $beritas->judul }}.</font>
        </h2>
    </section>

    <!-- ##### Blog Wrapper Area Start ##### -->
    <div class="single-blog-wrapper">

        <!-- Single Blog Post Thumb -->
        <div class="single-blog-post-thumb">
            <img src="{{ asset('assets/images/avatar/'.$beritas->gambar.'') }}" style="width: 1100px; height: 500px; margin-left: 150px;" alt="">
        </div>

        <!-- Single Blog Content Wrap -->
        <div class="single-blog-content-wrapper d-flex">

            <!-- Blog Content -->
            <div class="single-blog--text">
                <h2></p>

                <blockquote>
                    <h6><i class="fa fa-quote-left" aria-hidden="true"></i>Rilis: {{ date('M j, Y', strtotime($beritas->created_at)) }}</h6>
                </blockquote>

                <p>{!! $beritas->ket !!}</p>
            </div>

            <!-- Related Blog Post -->

        </div>
    </div>
    <h2 class="ltext-105 cl0 txt-left" style="margin-left: 120px;">
            <font color="black">Baca Juga Artikel Lainnya.</font>
        </h2>
    @php
    $beritas = App\Berita::orderByRaw("RAND()")->paginate(3);
    @endphp

    <div class="blog-wrapper section-padding-80">
        <div class="container">
            <div class="row">
               @foreach ($beritas as $data)
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-area mb-50">
                        <img src="{{ asset('/assets/images/avatar/'.$data->gambar.'') }}" style="width: 1000px; height: 400px;" alt="">
                        <!-- Post Title -->
                        <div class="post-title">
                            <a href="{{ route('singleblog',$data->id) }}">{{ $data->judul }}</a>
                        </div>
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <!-- Post Title -->
                            <div class="hover-post-title">
                                <a href="{{ route('singleblog',$data->id) }}">Baca Selengkapnya</a>
                            </div>

                            <div class="hover-post-title">
                                    <br>Rilis: {{ date('M j, Y', strtotime($data->created_at)) }}   
                            </div>

                            <p>{!! str_limit($data->ket,30) !!}</p>
                            <a href="{{ route('singleblog',$data->id) }}"> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper Area End ##### -->
    <script id="dsq-count-scr" src="//http-training-pro.disqus.com/count.js" async></script>
    <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://http-training-pro.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

    <!-- ##### Footer Area Start ##### -->
    @include('frontend.contact')
    @include('frontend.chat')
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="/frontend/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/frontend/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/frontend/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="/frontend/js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="/frontend/js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="/frontend/js/active.js"></script>

</body>

</html>