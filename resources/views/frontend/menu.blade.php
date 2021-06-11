<ul class="main-menu">
							<li>
								<a href="/">Beranda</a>
							</li>

							<li>
								<a href="/profile">Profil</a>
							</li>

							<li>
								<a href="/product">Jersey</a>
							</li>

							@guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Masuk</a>
                            </li>
                        	@else
                            <li class="nav-item">
        <a class="nav-link" data-widget="Logout" data-slide="true" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
            class="fa fa-th-large"></i>Logout, Sebagai {{Auth::user()->name}}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
      </li>
                        @endguest

						</ul>