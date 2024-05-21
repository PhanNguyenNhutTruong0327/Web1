@extends('layouts.site')
@section('title', 'Home')
@section('content')
    <div class="container border mt-4 bg-white">
        <div class="row">
            <!-- <div class="col-md-2">
                    <aside class="col-md flex-lg-grow-0">
                        <nav class="nav-home-aside">
                            <h6 class="title-category pt-2">Thương hiệu <i class="d-md-none icon fa fa-chevron-down"></i>
                            </h6>
                            <ul class="menu-category">
                                <li><a href="#">Samsung</a></li>
                                <li><a href="#">Apple</a></li>
                                <li><a href="#">Oppo</a></li>
                                <li><a href="#">Home and kitchen</a></li>
                                <li><a href="#">Digital goods</a></li> -->
            <!-- <li class="has-submenu"><a href="#">More items</a>
                                    <ul class="submenu">
                                        <li><a href="#">Submenu name</a></li>
                                        <li><a href="#">Great submenu</a></li>
                                        <li><a href="#">Another menu</a></li>
                                        <li><a href="#">Some others</a></li>
                                    </ul>
                                </li> -->
            </ul>
            </nav>
            </aside> <!-- col.// -->

        </div>
        <div class="col-md ">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-fluid" src="./assets/image/slider1.jpg" alt="Slider1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/image/slider2.jpg" alt="Slider1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/image/slider3.jpg" alt="Slider1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>

        </div>
        <div class="col-md-3"></div>
    </div>
    </div>
    <!--End slider-->

    <!--Category-->
    <!-- <div class="container">
            <div id="category">
                <ul class="navbar-nav me-auto mb-2">
                    <li class="nav-item ml-3"><a href="#">Điện thoại iPhone 15 Pro Max 256GB</a></li>
                    <li class="nav-item ml-3"><a href="#">Hoa Hồng</a></li>
                    <li class="nav-item ml-3"><a href="#">Hoa Baby</a></li>
                    <li class="nav-item ml-3"><a href="#">Lọ Thủy Tinh</a></li>
                </ul>
            </div>
        </div> -->
    <!--End Category-->

    <!--Product New-->
    <div class="container">
        <h2 class="text-center text-danger">Sản phẩm mới</h2>
        <div class="row row-cols-lg-4 g-2 g-lg-3">
            <div class="col">
                <div class="card pt-2">
                    <div class="text-center">
                        <img src="./assets/image/iphone-15-pro-max.jpg" class="card-img-top" style="width: 150px;"
                            alt="product">

                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Điện thoại iPhone 15 Pro Max 256GB</h5>
                            <h4 class="price text-danger">29.950.000đ</h4>
                            <p class="card-text">Điện thoại iPhone 15 Pro Max 256GB</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="chi-tiet-san-pham/aaa" class="btn btn-success d-md-block"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card pt-2">
                    <div class="text-center">
                        <img src="./assets/image/iphone-15-pro-max.jpg" class="card-img-top" style="width: 150px;"
                            alt="product">

                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Điện thoại iPhone 15 Pro Max 256GB</h5>
                            <h4 class="price text-danger">29.950.000đ</h4>
                            <p class="card-text">Điện thoại iPhone 15 Pro Max 256GB</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card pt-2">
                    <div class="text-center">
                        <img src="./assets/image/iphone-15-pro-max.jpg" class="card-img-top" style="width: 150px;"
                            alt="product">

                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Điện thoại iPhone 15 Pro Max 256GB</h5>
                            <h4 class="price text-danger">29.950.000đ</h4>
                            <p class="card-text">Điện thoại iPhone 15 Pro Max 256GB</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card pt-2">
                    <div class="text-center">
                        <img src="./assets/image/iphone-15-pro-max.jpg" class="card-img-top" style="width: 150px;"
                            alt="product">

                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Điện thoại iPhone 15 Pro Max 256GB</h5>
                            <h4 class="price text-danger">29.950.000đ</h4>
                            <p class="card-text">Điện thoại iPhone 15 Pro Max 256GB</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card pt-2">
                    <div class="text-center">
                        <img src="./assets/image/iphone-15-pro-max.jpg" class="card-img-top" style="width: 150px;"
                            alt="product">

                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Điện thoại iPhone 15 Pro Max 256GB</h5>
                            <h4 class="price text-danger">29.950.000đ</h4>
                            <p class="card-text">Điện thoại iPhone 15 Pro Max 256GB</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card pt-2">
                    <div class="text-center">
                        <img src="./assets/image/iphone-15-pro-max.jpg" class="card-img-top" style="width: 150px;"
                            alt="product">

                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Điện thoại iPhone 15 Pro Max 256GB</h5>
                            <h4 class="price text-danger">29.950.000đ</h4>
                            <p class="card-text">Điện thoại iPhone 15 Pro Max 256GB</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card pt-2">
                    <div class="text-center">
                        <img src="./assets/image/iphone-15-pro-max.jpg" class="card-img-top" style="width: 150px;"
                            alt="product">

                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Điện thoại iPhone 15 Pro Max 256GB</h5>
                            <h4 class="price text-danger">29.950.000đ</h4>
                            <p class="card-text">Điện thoại iPhone 15 Pro Max 256GB</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card pt-2">
                    <div class="text-center">
                        <img src="./assets/image/iphone-15-pro-max.jpg" class="card-img-top" style="width: 150px;"
                            alt="product">

                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Điện thoại iPhone 15 Pro Max 256GB</h5>
                            <h4 class="price text-danger">29.950.000đ</h4>
                            <p class="card-text">Điện thoại iPhone 15 Pro Max 256GB</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
            <button class="btn btn-success" type="button">Xem thêm <i class="fa-solid fa-arrow-right"></i></button>
        </div>

    </div>
    <!--End Product New-->


    <!--Product Sale-->
    <div class="container">
        <h2 class="text-center text-danger">Sản phẩm giảm giá</h2>
        <div class="row row-cols-lg-4 g-2 g-lg-3">
            <div class="col">
                <div class="card pt-2">
                    <div class="text-center">
                        <img src="./assets/image/iphone-15-pro-max.jpg" class="card-img-top" style="width: 150px;"
                            alt="product">

                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Điện thoại iPhone 15 Pro Max 256GB</h5>
                            <h4 class="price text-danger">29.950.000đ</h4>
                            <p class="card-text">Điện thoại iPhone 15 Pro Max 256GB</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card pt-2">
                    <div class="text-center">
                        <img src="./assets/image/iphone-15-pro-max.jpg" class="card-img-top" style="width: 150px;"
                            alt="product">

                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Điện thoại iPhone 15 Pro Max 256GB</h5>
                            <h4 class="price text-danger">29.950.000đ</h4>
                            <p class="card-text">Điện thoại iPhone 15 Pro Max 256GB</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card pt-2">
                    <div class="text-center">
                        <img src="./assets/image/iphone-15-pro-max.jpg" class="card-img-top" style="width: 150px;"
                            alt="product">

                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Điện thoại iPhone 15 Pro Max 256GB</h5>
                            <h4 class="price text-danger">29.950.000đ</h4>
                            <p class="card-text">Điện thoại iPhone 15 Pro Max 256GB</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card pt-2">
                    <div class="text-center">
                        <img src="./assets/image/iphone-15-pro-max.jpg" class="card-img-top" style="width: 150px;"
                            alt="product">

                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span
                                    class="fa fa-star"></span>
                            </div>
                            <h5 class="card-title">Điện thoại iPhone 15 Pro Max 256GB</h5>
                            <h4 class="price text-danger">29.950.000đ</h4>
                            <p class="card-text">Điện thoại iPhone 15 Pro Max 256GB</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="btn btn-danger d-md-block"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="product_detail.html" class="btn btn-success d-md-block"><i
                                            class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
            <button class="btn btn-success" type="button">Xem thêm <i class="fa-solid fa-arrow-right"></i></button>
        </div>

    </div>
    <!--End Product Sale-->


    <!--Post New-->
    <div class="container">
        <h2 class="text-center text-danger">Bài viết mới</h2>
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="./assets/image/slider1.jpg" class="img-fluid rounded-start" alt="post">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Điện thoại iPhone 15 Pro Max 256GB</h5>
                        <p class="card-text">iPhone 15 Pro Max là một chiếc điện thoại thông minh cao cấp được mong đợi
                            nhất năm 2023. Với nhiều tính năng mới và cải tiến, iPhone 15 Pro Max chắc chắn sẽ là một lựa
                            chọn tuyệt vời cho những người dùng đang tìm kiếm một chiếc điện thoại có hiệu năng mạnh mẽ,
                            camera chất lượng và thiết kế sang trọng.</p>
                        <p class="card-text"><small class="text-muted">Cập nhật 7 phút trước</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="./assets/image/slider1.jpg" class="img-fluid rounded-start" alt="post">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Điện thoại iPhone 15 Pro Max 256GB</h5>
                        <p class="card-text">iPhone 15 Pro Max là một chiếc điện thoại thông minh cao cấp được mong đợi
                            nhất năm 2023. Với nhiều tính năng mới và cải tiến, iPhone 15 Pro Max chắc chắn sẽ là một lựa
                            chọn tuyệt vời cho những người dùng đang tìm kiếm một chiếc điện thoại có hiệu năng mạnh mẽ,
                            camera chất lượng và thiết kế sang trọng.</p>
                        <p class="card-text"><small class="text-muted">Cập nhật 7 phút trước</small></p>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
