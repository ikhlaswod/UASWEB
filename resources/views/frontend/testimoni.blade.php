@include('frontend.header')
@yield('css')
<body class="animsition">
    
    <!-- Header -->
    @include('frontend.main')
    <br><br><br><br><br>

        <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url({{asset ('assets/img/books-1617327__480.jpg')}});">
        <h2 class="ltext-105 cl0 txt-center">
            <font color="white">Testimoni</font>
        </h2>
        <div class="panel-title pull-right"><a href="{{ route('testimoni.create') }}" class="btn-outline-warning"><i class="fa fa-plus-square">&nbsp</i> Add </a>
    </section>  
    
    
    <!-- Product -->
@php
$testimonis = App\Testimoni::orderby('created_at','DESC')->get();
@endphp

    <section class="bg0 p-t-23 p-b-140">
        <div class="container">
            <div class="row isotope-grid">
                @foreach ($testimonis as $data)
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">
                    <!-- Block2 -->
                    <div class="block1">
                        <div class="block2-pic hov-img0">
                            <img src="{{ asset('assets/images/avatar/'.$data->gambar.'') }}" style="width: 270px; height: 200px;" disabled="disabled"><h4>Testimoni Dari :</h4></textarea>

                            <a href="/produk/{{$data->slug}}" data-toggle="modal" data-target="#products{{$data->id}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1 " >
                                Lihat Bio
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="/produk/{{$data->slug}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6" data-toggle="modal" data-target="#products">
                                    <font color="black" style="margin-left:0px;"> "{{$data->email}} "</font>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Load more -->
        
        
        </div>
    </section>

    @include('frontend.contact')
    @include('frontend.chat')

    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>

    <!-- Modal1 -->
    @foreach ($testimonis as $data)
    <div class="modal fade p-t-60 p-b-20" id="products{{$data->id}}" tabindex="-1" role="dialog" >
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
                                            <img src="{{ asset('assets/images/avatar/'.$data->gambar.'') }}">
                                            
                                            
                                        </div>
                                    

        
                                </div>
                            </div>
                        </div>
                    
                    
                    <div class="col-md-6 col-lg-5 p-b-30">
                        <div class="p-r-50 p-t-5 p-lr-0-lg">
                            <h4 class="mtext-50000 cl2 js-name-detail p-b-14">
                                {{$data->nama}}
                            </h4>

                            <span class="mtext-106 cl2">
                                ket:
                            </span>

                            <p class="stext-102 cl3 p-t-23">
                                {!! $data->ket !!}
                            </p>

                            <br>

                            <span class="mtext-106 cl2">
                                Rilis:
                            </span>

                            <p class="stext-102 cl3 p-t-23">
                                {{ date('M j, Y', strtotime($data->created_at)) }}
                            </p>
                                    </div>
                                </div>  
                            </div>
        </div>  
    </div>  
</div>
                        </div>
                    </div>@endforeach
@yield('content')
@include('frontend.footer')