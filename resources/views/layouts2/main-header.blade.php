<section class="header">
	<div class="top-nav">
		<div class="container">
			<div class="logo-header">
				<a href="{{ url('/' . ($page = 'admin')) }}"><img src="{{asset('assets games/images/header logo.png')}}" alt=""></a>
			</div>
			<div class="navBar user-tab">
				<ul>
					<li class="d-lg-none d-block"><a href="{{ url('/' . ($page = 'index_2')) }}"><img class="logoSide" src="{{asset('assets games/images/header logo.png')}}" alt=""></a></li>
					<li><a class="defultlink" href="{{ url('/' . ($page = 'games')) }}">الألعاب</a></li>
					<li><a class="defultlink" href="{{ url('/' . ($page = 'BeComeTrainer')) }}">كن مدرب</a></li>
					<li><a class="defultlink" href="{{ url('/' . ($page = 'traineReqest')) }}">اطلب التدريب</a></li>
					<li><a class="defultlink" href="{{ url('/' . ($page = 'howWork')) }}">المدربين</a></li>
					<li><a class="d-lg-none btn d-flex align-items-center mb-0 ml-2 mr-2" data-toggle="modal" data-target=".bd-example-modal-sm"><img alt="" class="search-ico" src="{{asset('assets games/images/search.png')}}"><span class="srch ml-3 mr-3">بحث</span></a></li>
				</ul>
				<div class="nav-layer"></div>
			</div>
			<div class="navBar user-ico">
				<ul>
					<li>


						<div class="dropdown">
							<a class="dropdown-toggle toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
								<img src="{{asset('assets games/images/profile.png')}}" alt="" style="    width: 20px;">
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
								<a class="dropdown-item items defultlink" href="{{ url('/' . ($page = 'Account')) }}" style="color:#000;font-size:18px">الملف الشخصي</a>
								<!-- <a class="dropdown-item items defultlink" href="{{ url('/' . ($page = 'login')) }}" style="color:#000;font-size:18px">تسجيل الخروج</a> -->
								<a style="color:#000;font-size:18px" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
									<i class="bx bx-log-out"></i>تسجيل خروج</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</div>




						<!-- <div class="dropdown">
							<a class="dropdown-toggle toggle" type="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="assets games/images/profile.png" alt="">

							</a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
								<a class="dropdown-item items defultlink" href="Account.html">الملف الشخصي</a>
								<a class="dropdown-item items defultlink text-danger" href="login.html">تسجيل الخروج</a>
							</div>
						</div> -->
					</li>


					<li><a href="{{ url('/' . ($page = 'conver_sation')) }}"><img src="{{asset('assets games/images/messages.png')}}" alt=""></a></li>
					<li><a href="{{ url('/' . ($page = 'favorite')) }}"><img src="{{asset('assets games/images/fav.png')}}" alt=""></a></li>
					<li><a href="{{ url('/' . ($page = 'notifcation')) }}"><img src="{{asset('assets games/images/notification.png')}}" alt=""></a><span class="patch">{{ auth()->user()->unreadNotifications->count() }}</span></li>
				</ul>
				<a class="d-lg-flex btn d-none align-items-center mb-0 ml-2 mr-2" data-toggle="modal" data-target=".bd-example-modal-sm">
					<img alt="" class="search-ico" src="{{asset('assets games/images/search.png')}}">
					<span class="srch ml-3 mr-3">بحث</span>
				</a>
			</div>
			<div class="bars d-lg-none d-block mb-2 ml-3 mr-3" style="z-index: 999;">
				<span class="bar-1"></span>
				<span class="bar-2"></span>
				<span class="bar-3"></span>
			</div>
		</div>
	</div>
</section>