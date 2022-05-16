@extends('layouts.main')

@section('content')
{{-- <section id="sec-1" class="mb_4">
		<img src="img/bg/bg1.jpg" alt="" class="sec-1-bg">
		<div class="container position-relative">
			<div class="row align-items-center">
				<div class="col-7 col-sm-6 col-lg-5 col-xl-4">
					<h1 class="white">Студия красоты</h1>
					<div class="white">Команда профессионалов для создания Вашего совешенного образа</div>
					<a href="about.html" class="btn_main btn_1 mt-4 mt-md-5"><span class="f_09">Подробнее</span></a>
				</div>
			</div>
		</div>
	</section> --}}

	<section id="sec-3" class="mb_4">
		<div class="container position-relative py-4 py-md-5 h-100">
			<div class="row h-100">
				<div class="col-md-8 d-flex flex-column justify-content-end justify-content-md-center mb-4 mb-md-0">
					<h1 class="order-2 order-md-1">Окрашивание дома эксклюзивным коктейлем испанской марки Hipertin</h1>
					<div class="order-3 order-md-2 text-start f_15 font-2 mb-3 mb-md-5">Наши стилисты подберут Ваш индивидуальный оттенок онлайн</div>
					<button type="button" data-bs-toggle="modal" data-bs-target="#quiz" class="order-1 order-md-3 btn_main btn_1 mb-3 mb-md-5"><span class="f_09">Подобрать оттенок</span></button>
				</div>
			</div>
			<div class="remark">*Хотим отметить, что дома вы можете покраситься самостоятельно только в однотонный цвет.</div>
		</div>
	</section>

	<section id="sec-2" class="mb_4">
		<div class="container">
			<h2>Услуги</h2>
			<div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 justify-content-center g-0 mb-4">
				@foreach ($services as $service)
					<div>
						<a href="{{route('service-page', $service->alias)}}" class="serv">
							<img src="{{Storage::url($service->img)}}" alt="{{$service->title}}">
							<div>{{$service->title}}</div>
						</a>
					</div>
				@endforeach
			</div>
			<div class="text-center">
				<a href="{{route('services')}}" class="accent fw_6 font-2 bb_1">Показать все</a>
			</div>
		</div>
	</section>



	<section id="sec-4" class="mb_4">
		<div class="container">
			<h2>Акции и спецпредложения</h2>
			<div class="position-relative">
				<div class="swiper-1">
					<div class="swiper-wrapper">
						@foreach ($offers as $offer)
							<div class="swiper-slide">
								<a href="offer-page.html" class="offer @if($offer->circle != 'none'){{$offer->circle}}@endisset">
									<img src="img/{{$offer->img}}" alt="">
									@if($offer->discount > 0)
										<div class="text">
											<div class="title mb-2">
												<span class="f_12">{{$offer->discount}}%</span> скидка
											</div>
											<div class="desc">{{$offer->subtitle}}</div>
										</div>
									@endif
								</a>
							</div>
						@endforeach
					</div>
					<div class="swiper-pagination"></div>
					<div class="swiper-button-prev">
						<svg viewBox="0 0 24 62" xmlns="http://www.w3.org/2000/svg">
							<path d="M21.1192 58.3865L2 30.6932L21.1192 3"/>
						</svg>
					</div>
					<div class="swiper-button-next">
						<svg viewBox="0 0 25 62" xmlns="http://www.w3.org/2000/svg">
							<path d="M3.23486 58.3865L22.354 30.6932L3.23486 3"/>
						</svg>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="sec-5" class="mb_4">
		<div class="container">
			<h2>Наша команда</h2>
			<div class="row flex-lg-row-reverse row-cols-lg-2">
				<div class="pb-4 pb-lg-0">
					<div class="d-none d-lg-flex row row-cols-3 gy-4 gy-xl-5 mb-4 mb-xl-5">
						{{-- <div>
							<div class="employee-preview">
								<img src="img/sample.jpg" alt="Максим Жданов" class="mb-2">
								<div class="f_12 dark-gray fw_6 mb-1">Максим Жданов</div>
								<div class="light-gray f_09">Парикмахер, коллорист</div>
							</div>
						</div> --}}
						@foreach ($teams as $team)
							<div>
								<div class="employee-preview active">
									<img src="img/{{$team->img}}" alt="{{$team->name}}" class="mb-2">
									<div class="f_12 dark-gray fw_6 mb-1">{{$team->name}}</div>
									<div class="light-gray f_09">{{$team->profession}}</div>
								</div>
							</div>
						@endforeach
						{{-- <div>
							<div class="employee-preview active">
								<img src="img/team/natalia.jpg" alt="Наталья Ворон" class="mb-2">
								<div class="f_12 dark-gray fw_6 mb-1">Наталья Ворон</div>
								<div class="light-gray f_09">Топ - стилист, колорист, универсал, эстетический - трихолог.</div>
							</div>
						</div> --}}
					</div>
					{{-- <div class="d-block d-lg-none swiper-3">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="employee-preview active">
									<img src="img/team/natalia.jpg" alt="Наталья Ворон" class="mb-2">
									<div class="f_12 dark-gray fw_6 mb-1">Наталья Ворон</div>
									<div class="light-gray f_09">Топ - стилист, колорист, универсал, эстетический - трихолог.</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="employee-preview">
									<img src="img/team/alsu.jpg" alt="Алсу Залялутдинова" class="mb-2">
									<div class="f_12 dark-gray fw_6 mb-1">Алсу Залялутдинова</div>
									<div class="light-gray f_09">Стилист, коллорист, мастер униварсал по женским и мужским стрижкам</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="employee-preview">
									<img src="img/team/elfia.jpg" alt="Эльсия" class="mb-2">
									<div class="f_12 dark-gray fw_6 mb-1">Эльсия</div>
									<div class="light-gray f_09">Стилист, коллорист, женский мастер</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="employee-preview">
									<img src="img/team/ekaterina.jpg" alt="Екатерина Рыбак" class="mb-2">
									<div class="f_12 dark-gray fw_6 mb-1">Екатерина Рыбак</div>
									<div class="light-gray f_09">Мастер ногтевого сервиса</div>
								</div>
							</div>
						</div>
					</div> --}}
					<div class="text-center d-none d-lg-block"><a href="{{route('team')}}" class="font-2 f_09 fw_6 accent bb_1">Показать всех</a></div>
				</div>
				<div>
					<div class="employee pt-4 pt-lg-0 mb-4 mb-lg-5 mb-lg-0">
						<div class="row row-cols-2 gx-2 gx-sm-4">
							<div>
								<img src="img/team/natalia.jpg" alt="Наталья Ворон">
							</div>
							<div>
								<div class="f_15 font-2 dark-gray fw_6 mb-1">Наталья Ворон</div>
								<div class="f_12 font-2 dark-gray mb-1">Топ - стилист, колорист, универсал, технолог краски HIPERTIN, эстетический - трихолог.</div>
								<div class="f_12 font-2 dark-gray">Стаж работы 10 лет</div>
								<div class="rating mt-2 mt-sm-4">
									<svg class="grade" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/>
									</svg>
									<svg class="grade" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/>
									</svg>
									<svg class="grade" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/>
									</svg>
									<svg class="grade" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/>
									</svg>
									<svg class="grade" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/>
									</svg>
								</div>
								<div class="text mt-2 mt-sm-4">Опыт работы более 10-и лет, постоянное повышение квалификации. Обучение Казахстан, Новосибирск, Москва, Итальянская школа ALDO COPPOLA. Выполнение любых сложных работ как в стрижках, так и в окрашиваниях, выход из черного цвета в светлый тон без ломкости волос.</div>
							</div>
							<div class="mt-xl-5">
								<a href="{{route('team')}}" class="btn_main btn_2 mx-auto mt-3 mt-sm-4 mt-lg-5"><span class="f_09">Подробнее</span></a>
							</div>
							<div class="mt-xl-5">
								<button type="button" data-bs-toggle="modal" data-bs-target="#callback" class="btn_main btn_1 mx-auto mt-3 mt-sm-4 mt-lg-5"><span class="f_09">Записаться</span></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="sec-6" class="mb_4">
		<h2>Товары</h2>
		<div class="bg mb-4 mb-md-5">
			<div class="container">
				<div class="row g-0">
					<div class="col-md-3">
						<div class="h-100 d-flex flex-column justify-content-center">
							<nav class="product-menu">
								<div class="swiper-wrapper">
									@foreach ($categories as $category)
                                    @if ($category->parent_id == 0)
                                        <div class="swiper-slide">
                                            <a href="{{ route('category-home', $category->alias) }}" class="@if($category->alias == session()->get('category_alias'))active @endif">{{$category->title}}</a>
                                        </div>
                                    @endif
									@endforeach
								</div>
							</nav>
						</div>
					</div>
					<div class="col-md-9 pt-4 py-sm-4 py-lg-5">
						<div class="position-relative px-sm-5">
							<div class="swiper-2">
								<div class="swiper-wrapper">
									@foreach ($products as $product)
										<div class="swiper-slide">
											<div class="product">
												<a href="product-1.html"><img src="img/{{$product->img}}" alt="{{$product->title}}" class="photo mb-2 mb-sm-4"></a>
												<div class="text mb-2 mb-sm-3">{{$product->title}}, {{$product->volume}} мл</div>
												<div class="d-flex justify-content-between align-items-center">
													<button type="button" data-bs-toggle="modal" data-bs-target="#callback" class="btn_main btn_2 px-3 px-sm-4 py-2"><span class="f_08">Заказать</span></button>
													<div class="f_13 fw_5 black">{{$product->price}} ₽</div>
												</div>
												{{-- new --}}
												<div class="right-marks">
													<img src="img/icons/mark-new.png" alt="Скидка" class="mark-sale">
												</div>
											</div>
										</div>
									@endforeach

								</div>
								<div class="swiper-button-prev">
									<svg viewBox="0 0 24 62" xmlns="http://www.w3.org/2000/svg">
										<path d="M21.1192 58.3865L2 30.6932L21.1192 3"/>
									</svg>
								</div>
								<div class="swiper-button-next">
									<svg viewBox="0 0 25 62" xmlns="http://www.w3.org/2000/svg">
										<path d="M3.23486 58.3865L22.354 30.6932L3.23486 3"/>
									</svg>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a href="{{route('catalog')}}" class="btn_main btn_1 mx-auto"><span class="f_09">Перейти в каталог</span></a>
	</section>

	<section id="sec-7">
		<div class="container">
			<h2>Контакты</h2>
			<div class="row gx-2 gx-md-4 justify-content-center">
				<div class="col-6 col-sm-5 col-md-4 col-lg-5 font-2 f_12">
					<div class="fw_7 mb-1 mb-sm-3">Телефона:</div>
					<div class="fw_3"><a href="tel:{{$contacts[0]->phone}}">{{$contacts[0]->phone}}</a></div>

					<div class="fw_7 mt-3 mt-sm-4 mb-1 mb-sm-3">Время работы:</div>
					<div class="fw_3">{{$contacts[0]->work_time}}</div>

					<div class="fw_7 mt-3 mt-sm-4 mb-1 mb-sm-3">Адрес:</div>
					<div class="fw_3">{{$contacts[0]->address}}</div>

					<div class="fw_7 mt-3 mt-sm-4 mb-1 mb-sm-3">Вопросы и предложения:</div>
					<div class="fw_3"><a href="mailto:{{$contacts[0]->email}}">{{$contacts[0]->email}}</a></div>
				</div>
				<div class="col-6 col-sm-7 col-md-8 col-lg-7 col-xl-6 col-xxl-5 position-relative">
					<div id="map">
						<script type="text/javascript" charset="utf-8" async src="{{$contacts[0]->map}}"></script>
					</div>
					<button class="callback-anim" type="button" data-bs-toggle="modal" data-bs-target="#callback">
						<span>Онлайн запись</span>
					</button>
				</div>
			</div>
		</div>
	</section>

@endsection
