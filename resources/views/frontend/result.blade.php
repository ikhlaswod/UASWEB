<!DOCTYPE html>
<html lang="en">
<head>
    <title>GentaBookStore</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="/assets/images/logo.png"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/util.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
    
    <!-- Header -->
    @include('frontend.main')
    <br><br><br><br><br>

    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('/assets/img/notebook-731212__480.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            <font color="white">Yang Anda Cari</font>
        </h2>
    </section>  
<br><br><br><br><br>
<div class="row isotope-grid" style="margin-left: 70px;">
                @if (count($product) > 0)
                        @foreach ($product as $item) 
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item" id="myTabContent">

                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ asset('assets/images/avatar/'.$item->gambar.'') }}" width="300" height="400">

                            <a href="{{ route('productdetail',$item->id) }}" data-toggle="modal" data-target="#products{{$item->id}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                    Lihat Detail
                            </a>

                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l">
                                <a href="{{ route('productdetail',$item->id) }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6" data-toggle="modal" data-target="#products{{$item->id}}">

                                    <h4>{{  $item->nama  }}</h4>
                                    <p>Rp. {{ number_format($item->harga,2,',','.')}}</p>
                                </a
                                >
                                <span class="stext-105 cl3">
                                    
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else 
                                <h3>
                                    <b>
                                        <i>
                                            <center>Mohon maaf produk yang anda cari tidak ada:)</center>
                                        </i>
                                    </b>
                                </h3>
                                @endif
                </div>                
                <!--shop tab product end-->
                @foreach ($product as $item)
    <div class="modal fade p-t-60 p-b-20" id="products{{$item->id}}" tabindex="-1" role="dialog" >
    <div class="modal-dialog">

        <div class="container">
            <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">

                <div class="row">
                    <div class="col-md-6 col-lg-7 p-b-30">
                        <div class="p-l-25 p-r-30 p-lr-0-lg">
                            <div class="wrap-slick3 flex-sb flex-w">
                                <div class="wrap-slick3-dots"></div>
                                    <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
                                        <div class="wrap-pic-w pos-relative">
                                            <img src="{{ asset('assets/images/avatar/'.$item->gambar.'') }}" width="300" height="300">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                    
                    <div class="col-md-6 col-lg-5 p-b-30">
                        <div class="p-r-50 p-t-5 p-lr-0-lg">
                            <h4 class="mtext-50000 cl2 js-name-detail p-b-14">
                                {{$item->nama}}
                            </h4>

                            <span class="mtext-106 cl2">
                                Deskripsi:
                            </span>

                                {!! str_limit($item->deskripsi,150) !!}
                                
                            <!--  --><br>
                            <a href="{{ route('productdetail',$item->id) }}">Baca Selengkapnya</a>

                            <br>
                            <br>

            
                                            <a href="{{url('add-cart',$item->id)}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                            <i class="zmdi zmdi-shopping-cart"></i>
                                            </a>
                                        
                                    </div>
                                </div>  
                            </div>
        </div>  
    </div>  
</div>
                        </div>
                    </div>@endforeach
                <!--pagination style start--> 
                <div class="panel pull-right">
                    <div style="margin-right: 630px;">{{ $product->links() }}</div>
                </div>
                <!--pagination style end--> 
            </div>            
            </center>
        </div>
    </div>
</div>
@include('frontend.contact')
@include('frontend.chat')

<!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>

<!--===============================================================================================-->  
    <script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="/vendor/bootstrap/js/popper.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="/vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function(){
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>
<!--===============================================================================================-->
    <script src="/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
    <script src="/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        $('.js-pscroll').each(function(){
            $(this).css('position','relative');
            $(this).css('overflow','hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function(){
                ps.update();
            })
        });
    </script>
<!--===============================================================================================-->
    <script src="/js/main.js"></script>
    
</body>
</html>