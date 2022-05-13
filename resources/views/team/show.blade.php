@extends('layouts.main')

@section('title', $person->name)

@section('content')
<main class="inner-page">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a></li>
				<li class="breadcrumb-item"><a href="{{route('team')}}">Команда</a></li>
				<li class="breadcrumb-item"><a href="">{{$person->name}}</a></li>
			</ol>
		</nav>
	</div>
	<section id="sec-10">
		<div class="container master-page">
			<div class="row mb-5">
				<div class="col-md-4">
					<img src="{{Storage::url($person->img)}}" alt="Максим Жданов" class="photo">
					<button type="button" data-bs-toggle="modal" data-bs-target="#callback"
						class="btn_main btn_1 mt-4 mx-auto">
						<span class="f_09">Записаться</span>
					</button>
				</div>
				<div class="col-md-8">
					<div class="d-sm-flex justify-content-between align-items-center">
						<div>
							<h1 class="inner text-start mb-2">{{$person->name}}</h1>
							<div class="font-2 accent mb-1">{{$person->profession}}</div>
							<div class="font-2 lightest-gray">Стаж работы {{$person->experience}} лет</div>
						</div>
						{{-- rating --}}
						{{-- <div class="ms-4">
							<div class="rating f_15 justify-content-sm-center mt-3 mt-sm-0">
								<svg class="grade" viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z">
									</path>
								</svg>
								<svg class="grade" viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z">
									</path>
								</svg>
								<svg class="grade" viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z">
									</path>
								</svg>
								<svg class="grade" viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z">
									</path>
								</svg>
								<svg class="" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z">
									</path>
								</svg>
							</div>
						</div> --}}
					</div>
					<div class="light-gray mt-4">
						<p>{{$person->desc}}</p>
					</div>
					<div class="fw_7 f_12 mt-4">Услуги:</div>
					<ul class="light-gray mt-4">
						<li>{{$person->qualification}}</li>
					</ul>
				</div>
			</div>
			<div class="fw_6 f_12 mb-5">Услуги:</div>
				<div class="d-none d-md-block table-responsive text-center mb-5">
					<table class="table">
						<tbody>
							@foreach ($person->childServices as $personService)
							<tr class="fw_3">
								<td>{{$personService->title}}</td>
								<td>{{$personService->price_from}} —  {{$personService->price_to}} ₽</td>
								<td>
									<button type="button" data-bs-toggle="modal" data-bs-target="#callback" class="btn_main btn_sm btn_2 mx-auto">
										<span class="f_08 light-gray">Записаться</span>
									</button>
								</td>
							</tr>
							@endforeach
							{{-- <tr>
								<td></td>
								<td>Короткая длинна</td>
								<td>Средняя длинна</td>
								<td>Длинные волосы</td>
								<td></td>								
							</tr> --}}
							{{-- <tr class="fw_3">
								<td>Окрашивание в один тон</td>
								<td>3000 —  3500 ₽</td>
								<td>4000 —  4500 ₽</td>
								<td>5000 —  6000 ₽</td>
								<td>
									<button type="button" data-bs-toggle="modal" data-bs-target="#callback" class="btn_main btn_sm btn_2 mx-auto">
										<span class="f_08 light-gray">Записаться</span>
									</button>
								</td>
							</tr>
							<tr class="fw_3">
								<td>Сложное окрашивание</td>
								<td>5000-6500 ₽</td>
								<td>6500-8000 ₽</td>
								<td>8000-15000 ₽</td>
								<td>
									<button type="button" data-bs-toggle="modal" data-bs-target="#callback" class="btn_main btn_sm btn_2 mx-auto">
										<span class="f_08 light-gray">Записаться</span>
									</button>
								</td>
							</tr>
							<tr class="fw_3">
								<td>Окрашивание хной</td>
								<td>3000 —  3500 ₽</td>
								<td>4000 —  4500 ₽</td>
								<td>5000 —  6000 ₽</td>
								<td>
									<button type="button" data-bs-toggle="modal" data-bs-target="#callback" class="btn_main btn_sm btn_2 mx-auto">
										<span class="f_08 light-gray">Записаться</span>
									</button>
								</td>
							</tr> --}}
						</tbody>
					</table>
				</div>

				<div class="d-block d-md-none">
					<div class="f_12 text-center mb-3">Окрашивание в один тон</div>
					<div class="table-responsive text-center">
						<table class="table">
							<tbody>
								<tr>
									<td>Короткая длинна</td>
									<td>Средняя длинна</td>
									<td>Длинные волосы</td>							
								</tr>
								<tr class="fw_3">
									<td>3000 —  3500 ₽</td>
									<td>4000 —  4500 ₽</td>
									<td>5000 —  6000 ₽</td>
								</tr>
							</tbody>
						</table>
					</div>
					<button type="button" data-bs-toggle="modal" data-bs-target="#callback" class="btn_main btn_sm btn_2 mx-auto mb-5">
						<span class="f_08 light-gray">Записаться</span>
					</button>

					<div class="f_12 text-center mb-3">Сложное окрашивание</div>
					<div class="table-responsive text-center">
						<table class="table">
							<tbody>
								<tr>
									<td>Короткая длинна</td>
									<td>Средняя длинна</td>
									<td>Длинные волосы</td>						
								</tr>
								<tr class="fw_3">
									<td>5000-6500 ₽</td>
									<td>6500-8000 ₽</td>
									<td>8000-15000 ₽</td>
								</tr>
							</tbody>
						</table>
					</div>
					<button type="button" data-bs-toggle="modal" data-bs-target="#callback" class="btn_main btn_sm btn_2 mx-auto mb-5">
						<span class="f_08 light-gray">Записаться</span>
					</button>

					<div class="f_12 text-center mb-3">Окрашивание хной</div>
					<div class="table-responsive text-center">
						<table class="table">
							<tbody>
								<tr>
									<td>Короткая длинна</td>
									<td>Средняя длинна</td>
									<td>Длинные волосы</td>							
								</tr>
								<tr class="fw_3">
									<td>3000 —  3500 ₽</td>
									<td>4000 —  4500 ₽</td>
									<td>5000 —  6000 ₽</td>
								</tr>
							</tbody>
						</table>
					</div>
					<button type="button" data-bs-toggle="modal" data-bs-target="#callback" class="btn_main btn_sm btn_2 mx-auto mb-5">
						<span class="f_08 light-gray">Записаться</span>
					</button>
				</div>
			<!-- <div class="f_12 font-2 fw_6 mb-3 mb-sm-4 mb-lg-5">Работы мастера:</div>
				<div class="position-relative mb-5">
					<div class="swiper-5">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="img/coloring/1.png" alt="" class="img-example">
							</div>
							<div class="swiper-slide">
								<img src="img/coloring/1.png" alt="" class="img-example">
							</div>
							<div class="swiper-slide">
								<img src="img/coloring/1.png" alt="" class="img-example">
							</div>
							<div class="swiper-slide">
								<img src="img/coloring/1.png" alt="" class="img-example">
							</div>
							<div class="swiper-slide">
								<img src="img/coloring/1.png" alt="" class="img-example">
							</div>
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
				<div class="d-flex justify-content-between align-items-center">
					<div class="f_12 font-2 fw_6">Отзывы:</div>
					<button type="button" data-bs-toggle="modal" data-bs-target="#warning" class="btn_main btn_1"><span class="f_09">Оставить отзыв (не авт.)</span></button>
					<button type="button" data-bs-toggle="modal" data-bs-target="#review" class="btn_main btn_1"><span class="f_09">Оставить отзыв</span></button>
				</div>

				<div class="review mt-4">
					<div class="row gx-3 gx-md-4 gy-2 gy-sm-3">
						<div class="col-4 col-lg-3">
							<div class="name">Карина</div>
						</div>
						<div class="col-8 col-lg-9">
							<div class="d-flex justify-content-end align-items-center h-100">
								<div class="light-gray">09.09.21</div>
								<div class="rating justify-content-center ms-4">
									<svg class="grade" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path>
									</svg>
									<svg class="grade" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path>
									</svg>
									<svg class="grade" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path>
									</svg>
									<svg class="grade" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path>
									</svg>
									<svg class="" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path>
									</svg>
								</div>
							</div>
						</div>
						<div class="col-md-5 col-lg-4 col-xl-3">
							<div class="row row-cols-2 row-cols-md-1 g-2">
								<div class="d-flex align-items-center">
									<img src="img/icons/content_cut.svg" alt="" class="icon me-2 me-md-3">
									<div>
										<div>Услуга:</div>
										<div class="light-gray">Сложное окрашивание</div>
									</div>
								</div>
								<div class="d-flex align-items-center mt-2 mt-md-3">
									<img src="img/icons/calendar_today.svg" alt="" class="icon me-2 me-md-3">
									<div>
										<div>Дата посещения:</div>
										<div class="light-gray">09.09.2021</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="text"><span class="fw_5 dark-gray">Комментарий:</span> Максим лучший мастер по окрашиванию из всех у кого я была. Исправил плачевную ситуацию после неудачного мелирования в другом салоне, когда я была уже в отчаянии. Сделал все идеально, как я и хотела,  а также подобрал подходящий уход. Вежливый, отзывчивый мастер, прислушывающийся к мнению и желанию клиента. Для меня это самое важное. Теперь на  окрашивание буду ходить только к нему. Исправил плачевную ситуацию после неудачного мелирования в другом салоне, когда я была уже в отчаинии. Сделал все идеально, как я и хотела,  а также подобрал подходящий уход. <a href="#" class="readmore accent bb_1 fw_3">Читать дальше</a></div>
						</div>
					</div>
				</div>
				<div class="review mt-4">
					<div class="row gx-3 gx-md-4 gy-2 gy-sm-3">
						<div class="col-4 col-lg-3">
							<div class="name">Карина</div>
						</div>
						<div class="col-8 col-lg-9">
							<div class="d-flex justify-content-end align-items-center h-100">
								<div class="light-gray">09.09.21</div>
								<div class="rating justify-content-center ms-4">
									<svg class="grade" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path>
									</svg>
									<svg class="grade" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path>
									</svg>
									<svg class="grade" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path>
									</svg>
									<svg class="grade" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path>
									</svg>
									<svg class="" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path>
									</svg>
								</div>
							</div>
						</div>
						<div class="col-md-5 col-lg-4 col-xl-3">
							<div class="row row-cols-2 row-cols-md-1 g-2">
								<div class="d-flex align-items-center">
									<img src="img/icons/content_cut.svg" alt="" class="icon me-2 me-md-3">
									<div>
										<div>Услуга:</div>
										<div class="light-gray">Сложное окрашивание</div>
									</div>
								</div>
								<div class="d-flex align-items-center mt-2 mt-md-3">
									<img src="img/icons/calendar_today.svg" alt="" class="icon me-2 me-md-3">
									<div>
										<div>Дата посещения:</div>
										<div class="light-gray">09.09.2021</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="text"><span class="fw_5 dark-gray">Комментарий:</span> Максим лучший мастер по окрашиванию из всех у кого я была. Исправил плачевную ситуацию после неудачного мелирования в другом салоне, когда я была уже в отчаянии. Сделал все идеально, как я и хотела,  а также подобрал подходящий уход. Вежливый, отзывчивый мастер, прислушывающийся к мнению и желанию клиента. Для меня это самое важное. Теперь на  окрашивание буду ходить только к нему. Исправил плачевную ситуацию после неудачного мелирования в другом салоне, когда я была уже в отчаинии. Сделал все идеально, как я и хотела,  а также подобрал подходящий уход. <a href="#" class="readmore accent bb_1 fw_3">Читать дальше</a></div>
						</div>
					</div>
				</div>
				<div class="review mt-4">
					<div class="row gx-3 gx-md-4 gy-2 gy-sm-3">
						<div class="col-4 col-lg-3">
							<div class="name">Карина</div>
						</div>
						<div class="col-8 col-lg-9">
							<div class="d-flex justify-content-end align-items-center h-100">
								<div class="light-gray">09.09.21</div>
								<div class="rating justify-content-center ms-4">
									<svg class="grade" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path>
									</svg>
									<svg class="grade" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path>
									</svg>
									<svg class="grade" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path>
									</svg>
									<svg class="grade" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path>
									</svg>
									<svg class="" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path>
									</svg>
								</div>
							</div>
						</div>
						<div class="col-md-5 col-lg-4 col-xl-3">
							<div class="row row-cols-2 row-cols-md-1 g-2">
								<div class="d-flex align-items-center">
									<img src="img/icons/content_cut.svg" alt="" class="icon me-2 me-md-3">
									<div>
										<div>Услуга:</div>
										<div class="light-gray">Сложное окрашивание</div>
									</div>
								</div>
								<div class="d-flex align-items-center mt-2 mt-md-3">
									<img src="img/icons/calendar_today.svg" alt="" class="icon me-2 me-md-3">
									<div>
										<div>Дата посещения:</div>
										<div class="light-gray">09.09.2021</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="text"><span class="fw_5 dark-gray">Комментарий:</span> Максим лучший мастер по окрашиванию из всех у кого я была. Исправил плачевную ситуацию после неудачного мелирования в другом салоне, когда я была уже в отчаянии. Сделал все идеально, как я и хотела,  а также подобрал подходящий уход. Вежливый, отзывчивый мастер, прислушывающийся к мнению и желанию клиента. Для меня это самое важное. Теперь на  окрашивание буду ходить только к нему. Исправил плачевную ситуацию после неудачного мелирования в другом салоне, когда я была уже в отчаинии. Сделал все идеально, как я и хотела,  а также подобрал подходящий уход. <a href="#" class="readmore accent bb_1 fw_3">Читать дальше</a></div>
						</div>
					</div>
				</div>
				<button type="button" class="lightest-gray f_09 fw_5 bb_1 mx-auto mt-5">Показать еще</button>
				<div class="row justify-content-end mt-4">
					<div class="col-md-6">
						<nav aria-label="Page navigation">
							<ul class="pagination">
								<li class="page-item"><a class="btn_main btn_xs f_08 btn_3" href="#">В начало</a></li>
								<li class="page-item"><a class="page-link" href="#">...</a></li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link active" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">4</a></li>
								<li class="page-item"><a class="page-link" href="#">5</a></li>
								<li class="page-item"><a class="page-link" href="#">6</a></li>
								<li class="page-item"><a class="page-link" href="#">...</a></li>
								<li class="page-item"><a class="btn_main btn_xs f_08 btn_3" href="#">Дальше</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6 col-xxl-3 mt-3 mt-md-0">
						<div class="d-flex align-items-center justify-content-center justify-content-md-end">
							<div class="f_08 font-2 me-3">Перейти на страницу</div>
							<input type="number" class="mini f_08 me-3">
							<button type="button" class="f_08 btn_3 btn_main btn_xs">Перейти</button>
						</div>
					</div>
				</div>
		</div>
	</section>
</main>
@endsection