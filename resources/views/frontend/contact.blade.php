<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32" style="margin-top: 70px;">
		<div class="container">
			<div class="row">

				<div class="col-sm-3 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Profil<br><br>
					</h4>

						<div class="p-t-27">
						<i class="fs-18 cl7 hov-cl1 trans-04 m-r-16" style="color: white; margin-bottom: 70px; text-shadow: all;">Jersey Bola Adalah salah satu tempat belanja Jersey online yang dibangun untuk menjual Jersey Jersey berupa baju atau kaos dan sejenisnnya.
						</i>
					</div>
				</div>

				<div class="col-sm-3 col-lg-3 p-b-">
					<h4 class="stext-301 cl0 p-b-30">
						<center>Menu</center>
					</h4>

					<div class="p-t-27" style="margin-left: 100px; color: white;">
					<button href="/" class="fs-18 cl7 hov-cl1 trans-04 m-r-16" > Beranda
						</button>
						<br><br>

						<button href="Profil" class="fs-18 cl7 hov-cl1 trans-04 m-r-16"> Profil
						</button>
						<br><br>

						<button href="product" class="fs-18 cl7 hov-cl1 trans-04 m-r-16"> Produk
						</button>


				</div>

			</div>

			<div class="col-sm-3 col-lg-3 p-b-">
					<h4 class="stext-301 cl0 p-b-30">
						<center>Akun</center>
					</h4>

					<div class="p-t-27" style="margin-left: 100px; color: white;">
					<button href="login" class="fs-18 cl7 hov-cl1 trans-04 m-r-16" > Masuk
						</button>
						<br><br>

						<button href="register" class="fs-18 cl7 hov-cl1 trans-04 m-r-16 btn-btn"> Daftar
						</button>
						<br><br>

				</div>

			</div>

			<div class="col-sm-3 col-lg-3 p-b-">
					<h4 class="stext-301 cl0 p-b-30">
						<center>Cari Product....</center>
					</h4>

					<div class="p-t-27" style="margin-left: 50px; color: white;">
					<form action="{{route('search')}}" method="GET" class="hm-searchbox">
							{{ csrf_field() }} {{ method_field('GET') }}
							<input type="text" placeholder="Cari produk yang akan dicari ......" type="text" name="search">
							<button class="li-btn" type="submit"></button>
						</form>

				</div>

			</div>

	</div>
	</div>
	</footer>