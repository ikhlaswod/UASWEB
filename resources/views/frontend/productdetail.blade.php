<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jersey Bola</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{asset('/assets/images/logojersey.png')}}"/>
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
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('/assets/images/jerbg.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            <font color="Black">Detail Produk</font>
        </h2>
    </section>  


    <!-- Content page -->
    <section class="bg3 p-t-75 p-b-120">
        <div class="container">
            <div class="row p-b-148">
                <div class="col-md-7 col-lg-8">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            <font color="white"><u>{{ $products->nama }}</u></font>
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            <font color="white">Harga : Rp. {{ number_format($products->harga,2,',','.')}}</font>   
                        </p>

                        <p class="stext-113 cl6 p-b-26">
                            <font color="white">Kategori : {{ $products->Kategori->nama_kategori }}</font><br>
                        </p>

                        <p class="stext-113 cl6 p-b-26">
                            <font color="white">Deskripsi : {!! $products->deskripsi !!}</font>
                        </p>

                        
                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-4 m-lr-auto">
                    
                        <div class="hov-img0">
                            <img src="{{ asset('assets/images/avatar/'.$products->gambar.'') }}" style="height: 450px; width: 260px; margin-left: 45px;" alt="IMG">
                        </div>
                        <br>
                        
                    </div>

                    <p style="margin-left: 910px; margin-top: ">
                        <a href="{{url('add-cart',$products->id)}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                            <i class="zmdi zmdi-shopping-cart"></i>
                                            </a></p>


                                            @php
$pro = App\Product::orderByRaw("RAND()")->paginate(4);
@endphp
    <br><br><br><br>
    <div class="bg3 m-t-23 p-b-140">
        <div class="container">
            <div class="flex-w flex-sb-m p-b-52">
                <h5 class="ltext-105 cl5 txt-center respon1">
                    <font color="white">Jersey Lainnya</font>
                </h5>
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                </div>
            </div>
<!-- CSS styles for standard search box -->
<style type="text/css">
    #tfheader{
        background-color:#c3dfef;
    }
    #tfnewsearch{
        float:right;
        padding:20px;
    }
    .tftextinput{
        margin: 0;
        padding: 5px 15px;
        font-family: Arial, Helvetica, sans-serif;
        font-size:14px;
        border:1px solid #0076a3; border-right:0px;
        border-top-left-radius: 5px 5px;
        border-bottom-left-radius: 5px 5px;
    }
    .tfbutton {
        margin: 0;
        padding: 5px 15px;
        font-family: Arial, Helvetica, sans-serif;
        font-size:14px;
        outline: none;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        color: #ffffff;
        border: solid 1px #0076a3; border-right:0px;
        background: #0095cd;
        background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
        background: -moz-linear-gradient(top,  #00adee,  #0078a5);
        border-top-right-radius: 5px 5px;
        border-bottom-right-radius: 5px 5px;
    }
    .tfbutton:hover {
        text-decoration: none;
        background: #007ead;
        background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
        background: -moz-linear-gradient(top,  #0095cc,  #00678e);
    }
    /* Fixes submit button height problem in Firefox */
    .tfbutton::-moz-focus-inner {
      border: 0;
    }
    .tfclear{
        clear:both;
    }
</style>
<body>
    <!-- HTML for SEARCH BAR -->
    <br>

            <div class="row isotope-grid">
                @foreach ($pro as $p)
                <div class="col-sm-6 col-md-4 col-lg-6 p-b-15 isotope-item">

                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ asset('assets/images/avatar/'.$p->gambar.'') }}" width="300" height="400">

                            <a href="/produk/{{$p->slug}}" data-toggle="modal" data-target="#pro{{$p->id}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                    Lihat Jersey
                            </a>

                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="/produk/{{$p->slug}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6" data-toggle="modal" data-target="#pro{{$p->id}}">

                                    <font color="white"><h4>{{  $p->nama  }}</h4>
                                    <p>Rp. {{ number_format($p->harga,2,',','.')}}</p></font>
                                </a
                                >
                                <span class="stext-105 cl3">
                                    
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach 
            </div>

            <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>

    <!-- Modal1 -->
    @foreach ($pro as $p)
    <div class="modal fade p-t-60 p-b-20" id="pro{{$p->id}}" tabindex="-1" role="dialog" >
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
                                            <img src="{{ asset('assets/images/avatar/'.$p->gambar.'') }}" width="300" height="300">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                    
                    <div class="col-md-6 col-lg-5 p-b-30">
                        <div class="p-r-50 p-t-5 p-lr-0-lg">
                            <h4 class="mtext-50000 cl2 js-name-detail p-b-14">
                                {{$p->nama}}
                            </h4>

                            <span class="mtext-106 cl2">
                                Deskripsi:
                            </span>

                                {!! str_limit($p->deskripsi,150) !!}
                                
                            <!--  --><br>
                            <a href="{{ route('productdetail',$p->id) }}">Baca Selengkapnya</a>

                            <br>
                            <br>

            
                                            <a href="{{url('add-cart',$p->id)}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
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
                </div>
            </div>      
    </section>  
    
    <!-- Footer -->
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