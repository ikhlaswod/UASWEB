@include('frontend.header')
@yield('css')
    
    <!-- Header -->
    @include('frontend.main')
    <link rel="stylesheet" href="/frontend/css/core-style.css">
    <br><br>

    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('assets/img/notebook-731212__480.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            <font color="black">Artikel</font>
        </h2>
    </section>

    <!-- ##### Blog Wrapper Area Start ##### -->
    
    <div class="blog-wrapper section-padding-80">
        <div class="container">
            <div class="row">
               @foreach ($beritas as $data)
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-6">
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
                                <a href="{{ route('singleblog',$data->id) }}">Rilis: {{ date('M j, Y', strtotime($data->created_at)) }}</a>
                            </div>
                            <p>{!! str_limit($data->ket,200) !!}</p>
                            <a href="{{ route('singleblog',$data->id) }}"><br><br>Lanjutkan Membaca <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div style="margin-left: 550px"> {{$beritas->links()}} </div>
                
            </div>
        </div>
    </div>
    
    <!-- ##### Blog Wrapper Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('frontend.contact')
    @include('frontend.chat')
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <!-- <script src="/frontend/js/jquery/jquery-2.2.4.min.js"></script> -->
    <!-- Popper js -->
    <!-- <script src="/frontend/js/popper.min.js"></script> -->
    <!-- Bootstrap js -->
    <!-- <script src="/frontend/js/bootstrap.min.js"></script> -->
    <!-- Plugins js -->
    <!-- <script src="/frontend/js/plugins.js"></script> -->
    <!-- Classy Nav js -->
    <!-- <script src="/frontend/js/classy-nav.min.js"></script> -->
    <!-- Active js -->
    <!-- <script src="/frontend/js/active.js"></script> -->

</body>

</html>