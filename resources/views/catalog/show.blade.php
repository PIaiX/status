@extends('layouts.main')

@section('content')
<main class="inner-page">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Главная</a></li>
				<li class="breadcrumb-item"><a href="catalog.html">Каталог</a></li>
				<li class="breadcrumb-item"><a href="product-1.html">{{$product->title}}</a></li>
			</ol>
		</nav>
	</div>
	<section id="sec-14" class="mb_4">
		<div class="container position-relative">
			<h1 class="inner text-start mb-5">{{$product->title}}, {{$product->volume}} мл</h1>
			<div class="row">
				<div class="col-1 d-none d-md-flex flex-column justify-content-center">
					<div class="swiper-thumbs">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="{{Storage::url($product->img)}}"
									alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-xxl-3 mb-5 mb-md-0">
					<div class="swiper-img position-relative">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="{{Storage::url($product->img)}}"
									alt="">
							</div>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>
				<div class="col-sm-6 col-md-5 col-lg-4 col-xxl-3">
					<div class="d-flex justify-content-between align-items-center d-sm-none mb-3">
						<div class="font-2 fw_6 mb-2">Цена</div>
						<div>
							<!-- <div class="font-2 f_13 lightest-gray text-decoration-line-through mb-1">732 ₽</div> -->
							<div class="font-2 f_15 fw_5">{{$product->price}} ₽</div>
						</div>
					</div>
					<div class="d-flex d-sm-block justify-content-between align-items-center mb-4 mb-sm-0">
						<div class="font-2 fw_6 mb-sm-2">Объем</div>
						<div class="d-flex mb-sm-5">
							<div class="radio-text">
								<input type="radio" name="size" value="300 ml">
								<div class="f_09 fs_6">{{$product->volume}} ml</div>
							</div>
							<!-- <div class="radio-text ms-3">
									<input type="radio" name="size" value="1000 ml">
									<div class="f_09 fs_6">1000 ml</div>
								</div> -->
						</div>
					</div>
					<div class="font-2 fw_6 mb-2 mb-sm-4">Характиристики</div>
					<div class="table-relative">
						<table class="table table-borderless table-sm">
							<tbody class="light-gray f_08">
								<tr>
									<td>Категория</td>
									<td class="text-end">{{$product->category->title}}</td>
								</tr>
								<tr>
									<td>Тип волос</td>
									<td class="text-end">Для поврежденных</td>
								</tr>
								<tr>
									<td>Бренд</td>
									<td class="text-end">LINECURE</td>
								</tr>
								<tr>
									<td>Объем</td>
									<td class="text-end">300ml</td>
								</tr>
								<tr>
									<td>Страна изготовитель</td>
									<td class="text-end">Испания</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="d-none d-sm-block col-sm-6 col-md-2 offset-lg-1">
					<div class="font-2 fw_6 mb-2">Цена</div>
					<!-- <div class="font-2 f_13 lightest-gray text-decoration-line-through mb-2">732 ₽</div> -->
					<div class="font-2 f_15 fw_5 mb-4">846 ₽</div>
					<button type="button" data-bs-toggle="modal" data-bs-target="#callback"
						class="btn_main btn_2 px-3 px-sm-4 py-2"><span class="f_08">Заказать</span></button>
					<!-- <button type="button" class="btn_main btn_1 btn-to-cart mb-3">
							<img src="img/icons/cart.svg" alt="В корзину" class="me-3">
							<span class="text-capitalize">В корзину</span>
						</button> -->
					<!-- <button type="button" class="btn_main btn_2 btn-fav py-3 mb-3" onclick="toggleState(this)" data-state="off">
							<svg class="me-3" viewBox="0 0 41 35" xmlns="http://www.w3.org/2000/svg">
								<path d="M36.2764 4.35411L36.2767 4.35445C37.1419 5.21925 37.8283 6.24604 38.2965 7.37617C38.7648 8.5063 39.0058 9.71762 39.0058 10.9409C39.0058 12.1642 38.7648 13.3755 38.2965 14.5057C37.8283 15.6358 37.1419 16.6626 36.2767 17.5274L36.2766 17.5276L34.2891 19.5151L20.4087 33.3955L6.52828 19.5151L4.54078 17.5276C2.79389 15.7807 1.8125 13.4114 1.8125 10.9409C1.8125 8.47045 2.79389 6.10117 4.54078 4.35428C6.28766 2.60739 8.65695 1.626 11.1274 1.626C13.5979 1.626 15.9672 2.60739 17.7141 4.35428L19.7016 6.34178L20.4087 7.04889L21.1158 6.34178L23.1033 4.35428L23.1034 4.35411C23.9682 3.4889 24.995 2.80256 26.1252 2.33429C27.2553 1.86602 28.4666 1.625 29.6899 1.625C30.9132 1.625 32.1245 1.86602 33.2547 2.33429C34.3848 2.80256 35.4116 3.48891 36.2764 4.35411Z"/>
							</svg>
							<span class="text-capitalize"></span>
						</button> -->
				</div>
				<div class="col-md-9 col-lg-6">
					<div class="font-2 fw_6 mt-3 mt-sm-5 mb-2 mb-sm-3">Описание</div>
					<div class="text font-2 f_08">
						<p>Шампунь, разработанный специально для ухода за поврежденными, сухими и ломкими
							волосами. Содержит экстракт морских водорослей и золотого самфира, которые
							питают пряди, делают их яркими и шелковистыми. Средство облегчает
							расчесывание, защищает волосы от новых повреждений и придает им здоровый
							блеск.</p>
					</div>
					<button type="button" data-state="off" onclick="readall(this)"
						class="font-2 bb_1 f_08 accent mt-1">развернуть</button>
					<div class="font-2 fw_6 mt-4 mt-sm-5 mb-2 mb-sm-3">Способ применения</div>
					<div class="font-2 f_08"></div>
					<div class="font-2 fw_6 mt-4 mt-sm-5 mb-2 mb-sm-3">Состав</div>
					<div class="text font-2 f_08 lightest-gray">
						<p></p>
					</div>
					<button type="button" data-state="off" onclick="readall(this)"
						class="font-2 bb_1 f_08 accent mt-1">развернуть</button>
				</div>
			</div>
			<div class="mobile-btns">
				<button type="button" class="btn_main btn_1 btn-to-cart">
					<img src="img/icons/cart.svg" alt="В корзину" class="me-2">
					<span class="text-capitalize">В корзину</span>
				</button>
				<button type="button" class="btn_main btn_2 btn-fav py-2 ms-2" onclick="toggleState(this)"
					data-state="off">
					<svg class="me-2" viewBox="0 0 41 35" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M36.2764 4.35411L36.2767 4.35445C37.1419 5.21925 37.8283 6.24604 38.2965 7.37617C38.7648 8.5063 39.0058 9.71762 39.0058 10.9409C39.0058 12.1642 38.7648 13.3755 38.2965 14.5057C37.8283 15.6358 37.1419 16.6626 36.2767 17.5274L36.2766 17.5276L34.2891 19.5151L20.4087 33.3955L6.52828 19.5151L4.54078 17.5276C2.79389 15.7807 1.8125 13.4114 1.8125 10.9409C1.8125 8.47045 2.79389 6.10117 4.54078 4.35428C6.28766 2.60739 8.65695 1.626 11.1274 1.626C13.5979 1.626 15.9672 2.60739 17.7141 4.35428L19.7016 6.34178L20.4087 7.04889L21.1158 6.34178L23.1033 4.35428L23.1034 4.35411C23.9682 3.4889 24.995 2.80256 26.1252 2.33429C27.2553 1.86602 28.4666 1.625 29.6899 1.625C30.9132 1.625 32.1245 1.86602 33.2547 2.33429C34.3848 2.80256 35.4116 3.48891 36.2764 4.35411Z" />
					</svg>
					<span class="text-capitalize"></span>
				</button>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<h4 class="text-start">С этим товаром заказывают</h4>
			<div class="position-relative">
				<div class="swiper-9">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="product">
								<a href="product-1.html"><img
										src="img/product/Шампунь восстанавливающий Nutri-Repair (vegan), 300 мл.jpg"
										alt="" class="photo mb-2 mb-sm-4"></a>
								<div class="text mb-2 mb-sm-3">Шампунь восстанавливающий Nutri-Repair
									(vegan), 300 мл</div>
								<div class="d-flex justify-content-between align-items-center">
									<!-- <div class="add-to-cart">
											<div class="count-enter">
												<button type="button" onclick="remove(this)">-</button>
												<div class="fw_5 f_08">
													<span class="">1</span><span> шт</span>
												</div>
												<button type="button">+</button>
											</div>
											<button type="button" class="btn_main px-3 px-sm-4 py-2" onclick="addToCart(this)"><span class="f_08">В корзину</span></button>
										</div> -->
									<button type="button" data-bs-toggle="modal"
										data-bs-target="#callback"
										class="btn_main btn_2 px-3 px-sm-4 py-2"><span
											class="f_08">Заказать</span></button>
									<div class="f_13 fw_5 black">846 ₽</div>
								</div>
								<div class="right-marks">
									<img src="img/icons/mark-new.png" alt="Скидка" class="mark-sale">
									<!-- <img src="img/icons/mark-sale.png" alt="Скидка" class="mark-sale"> -->
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="product">
								<a href="product-2.html"><img
										src="img/product/Шампунь для сохранения цвета окрашенных волос Color Care (vegan), 300 мл.jpg"
										alt="" class="photo mb-2 mb-sm-4"></a>
								<div class="text mb-2 mb-sm-4">Шампунь для сохранения цвета окрашенных
									волос Color Care (vegan), 300 мл</div>
								<div class="d-flex justify-content-between align-items-center">
									<!-- <div class="add-to-cart">
											<div class="count-enter">
												<button type="button" onclick="remove(this)">-</button>
												<div class="fw_5 f_08">
													<span class="">1</span><span> шт</span>
												</div>
												<button type="button">+</button>
											</div>
											<button type="button" class="btn_main px-3 px-sm-4 py-2" onclick="addToCart(this)"><span class="f_08">В корзину</span></button>
										</div> -->
									<button type="button" data-bs-toggle="modal"
										data-bs-target="#callback"
										class="btn_main btn_2 px-3 px-sm-4 py-2"><span
											class="f_08">Заказать</span></button>
									<div class="f_13 fw_5 black">846 ₽</div>
								</div>
								<div class="right-marks">
									<img src="img/icons/mark-new.png" alt="Скидка" class="mark-sale">
									<!-- <img src="img/icons/mark-sale.png" alt="Скидка" class="mark-sale"> -->
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="product">
								<a href="product-3.html"><img
										src="img/product/Шампунь для придания объема Linecure Volume Up Shampoo, 300 мл.jpg"
										alt="" class="photo mb-2 mb-sm-4"></a>
								<div class="text mb-2 mb-sm-4">Шампунь для придания объема Linecure
									Volume Up Shampoo, 300 мл</div>
								<div class="d-flex justify-content-between align-items-center">
									<!-- <div class="add-to-cart">
											<div class="count-enter">
												<button type="button" onclick="remove(this)">-</button>
												<div class="fw_5 f_08">
													<span class="">1</span><span> шт</span>
												</div>
												<button type="button">+</button>
											</div>
											<button type="button" class="btn_main px-3 px-sm-4 py-2" onclick="addToCart(this)"><span class="f_08">В корзину</span></button>
										</div> -->
									<button type="button" data-bs-toggle="modal"
										data-bs-target="#callback"
										class="btn_main btn_2 px-3 px-sm-4 py-2"><span
											class="f_08">Заказать</span></button>
									<div class="f_13 fw_5 black">780 ₽</div>
								</div>
								<div class="right-marks">
									<img src="img/icons/mark-new.png" alt="Скидка" class="mark-sale">
									<!-- <img src="img/icons/mark-sale.png" alt="Скидка" class="mark-sale"> -->
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="product">
								<a href="product-4.html"><img
										src="img/product/Маска для восстановления волос Linecure Hair Mask, 250 мл.jpg"
										alt="" class="photo mb-2 mb-sm-4"></a>
								<div class="text mb-2 mb-sm-4">Маска для восстановления волос Linecure
									Hair Mask, 250 мл</div>
								<div class="d-flex justify-content-between align-items-center">
									<!-- <div class="add-to-cart">
											<div class="count-enter">
												<button type="button" onclick="remove(this)">-</button>
												<div class="fw_5 f_08">
													<span class="">1</span><span> шт</span>
												</div>
												<button type="button">+</button>
											</div>
											<button type="button" class="btn_main px-3 px-sm-4 py-2" onclick="addToCart(this)"><span class="f_08">В корзину</span></button>
										</div> -->
									<button type="button" data-bs-toggle="modal"
										data-bs-target="#callback"
										class="btn_main btn_2 px-3 px-sm-4 py-2"><span
											class="f_08">Заказать</span></button>
									<div class="f_13 fw_5 black">1065 ₽</div>
								</div>
								<div class="right-marks">
									<img src="img/icons/mark-new.png" alt="Скидка" class="mark-sale">
									<!-- <img src="img/icons/mark-sale.png" alt="Скидка" class="mark-sale"> -->
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="product">
								<a href="product-5.html"><img
										src="img/product/Ампулы против выпадения волос Linecure Densidyl Prevent+.jpg"
										alt="" class="photo mb-2 mb-sm-4"></a>
								<div class="text mb-2 mb-sm-4">Ампулы против выпадения волос Linecure
									Densidyl Prevent+</div>
								<div class="d-flex justify-content-between align-items-center">
									<!-- <div class="add-to-cart">
											<div class="count-enter">
												<button type="button" onclick="remove(this)">-</button>
												<div class="fw_5 f_08">
													<span class="">1</span><span> шт</span>
												</div>
												<button type="button">+</button>
											</div>
											<button type="button" class="btn_main px-3 px-sm-4 py-2" onclick="addToCart(this)"><span class="f_08">В корзину</span></button>
										</div> -->
									<button type="button" data-bs-toggle="modal"
										data-bs-target="#callback"
										class="btn_main btn_2 px-3 px-sm-4 py-2"><span
											class="f_08">Заказать</span></button>
									<div class="f_13 fw_5 black">3945 ₽</div>
								</div>
								<div class="right-marks">
									<img src="img/icons/mark-new.png" alt="Скидка" class="mark-sale">
									<!-- <img src="img/icons/mark-sale.png" alt="Скидка" class="mark-sale"> -->
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="product">
								<a href="product-6.html"><img
										src="img/product/Двухфазный кондиционер BI-PHASE CONDITIONER, 500 мл.jpg"
										alt="" class="photo mb-2 mb-sm-4"></a>
								<div class="text mb-2 mb-sm-4">Двухфазный кондиционер BI-PHASE
									CONDITIONER, 500 мл</div>
								<div class="d-flex justify-content-between align-items-center">
									<!-- <div class="add-to-cart">
											<div class="count-enter">
												<button type="button" onclick="remove(this)">-</button>
												<div class="fw_5 f_08">
													<span class="">1</span><span> шт</span>
												</div>
												<button type="button">+</button>
											</div>
											<button type="button" class="btn_main px-3 px-sm-4 py-2" onclick="addToCart(this)"><span class="f_08">В корзину</span></button>
										</div> -->
									<button type="button" data-bs-toggle="modal"
										data-bs-target="#callback"
										class="btn_main btn_2 px-3 px-sm-4 py-2"><span
											class="f_08">Заказать</span></button>
									<div class="f_13 fw_5 black">1245 ₽</div>
								</div>
								<div class="right-marks">
									<img src="img/icons/mark-new.png" alt="Скидка" class="mark-sale">
									<!-- <img src="img/icons/mark-sale.png" alt="Скидка" class="mark-sale"> -->
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="product">
								<a href="product-7.html"><img
										src="img/product/Масло для волос Mineral Oil.jpg" alt=""
										class="photo mb-2 mb-sm-4"></a>
								<div class="text mb-2 mb-sm-4">Масло для волос Mineral Oil</div>
								<div class="d-flex justify-content-between align-items-center">
									<!-- <div class="add-to-cart">
											<div class="count-enter">
												<button type="button" onclick="remove(this)">-</button>
												<div class="fw_5 f_08">
													<span class="">1</span><span> шт</span>
												</div>
												<button type="button">+</button>
											</div>
											<button type="button" class="btn_main px-3 px-sm-4 py-2" onclick="addToCart(this)"><span class="f_08">В корзину</span></button>
										</div> -->
									<button type="button" data-bs-toggle="modal"
										data-bs-target="#callback"
										class="btn_main btn_2 px-3 px-sm-4 py-2"><span
											class="f_08">Заказать</span></button>
									<div class="f_13 fw_5 black">1555 ₽</div>
								</div>
								<div class="right-marks">
									<img src="img/icons/mark-new.png" alt="Скидка" class="mark-sale">
									<!-- <img src="img/icons/mark-sale.png" alt="Скидка" class="mark-sale"> -->
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="product">
								<a href="product-8.html"><img
										src="img/product/Кератиновый шампунь Pro Keratin Repair, 300 мл.jpg"
										alt="" class="photo mb-2 mb-sm-4"></a>
								<div class="text mb-2 mb-sm-4">Кератиновый шампунь Pro Keratin Repair,
									300 мл</div>
								<div class="d-flex justify-content-between align-items-center">
									<!-- <div class="add-to-cart">
											<div class="count-enter">
												<button type="button" onclick="remove(this)">-</button>
												<div class="fw_5 f_08">
													<span class="">1</span><span> шт</span>
												</div>
												<button type="button">+</button>
											</div>
											<button type="button" class="btn_main px-3 px-sm-4 py-2" onclick="addToCart(this)"><span class="f_08">В корзину</span></button>
										</div> -->
									<button type="button" data-bs-toggle="modal"
										data-bs-target="#callback"
										class="btn_main btn_2 px-3 px-sm-4 py-2"><span
											class="f_08">Заказать</span></button>
									<div class="f_13 fw_5 black">1360 ₽</div>
								</div>
								<div class="right-marks">
									<img src="img/icons/mark-new.png" alt="Скидка" class="mark-sale">
									<!-- <img src="img/icons/mark-sale.png" alt="Скидка" class="mark-sale"> -->
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="product">
								<a href="product-9.html"><img
										src="img/product/Экологический лак для укладки волос сильной фиксации Ecological Hair Spray.jpg"
										alt="" class="photo mb-2 mb-sm-4"></a>
								<div class="text mb-2 mb-sm-4">Экологический лак для укладки волос
									сильной фиксации Ecological Hair Spray</div>
								<div class="d-flex justify-content-between align-items-center">
									<!-- <div class="add-to-cart">
											<div class="count-enter">
												<button type="button" onclick="remove(this)">-</button>
												<div class="fw_5 f_08">
													<span class="">1</span><span> шт</span>
												</div>
												<button type="button">+</button>
											</div>
											<button type="button" class="btn_main px-3 px-sm-4 py-2" onclick="addToCart(this)"><span class="f_08">В корзину</span></button>
										</div> -->
									<button type="button" data-bs-toggle="modal"
										data-bs-target="#callback"
										class="btn_main btn_2 px-3 px-sm-4 py-2"><span
											class="f_08">Заказать</span></button>
									<div class="f_13 fw_5 black">1030 ₽</div>
								</div>
								<div class="right-marks">
									<img src="img/icons/mark-new.png" alt="Скидка" class="mark-sale">
									<!-- <img src="img/icons/mark-sale.png" alt="Скидка" class="mark-sale"> -->
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-button-prev">
						<svg viewBox="0 0 24 62" xmlns="http://www.w3.org/2000/svg">
							<path d="M21.1192 58.3865L2 30.6932L21.1192 3" />
						</svg>
					</div>
					<div class="swiper-button-next">
						<svg viewBox="0 0 25 62" xmlns="http://www.w3.org/2000/svg">
							<path d="M3.23486 58.3865L22.354 30.6932L3.23486 3" />
						</svg>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
@endsection
