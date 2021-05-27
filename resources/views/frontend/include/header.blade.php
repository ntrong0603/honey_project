<header id="header">
    <!-- top header -->
    <section class="container">
        <div class="row header-top">
            <div class="col-s-12 col-m-12 col-4">
                <a href="./" class="logo">
                    <img src="{{asset('frontend/images/logo.png')}}" alt="Tây Nguyên Holy Bee">
                </a>
            </div>
            <div class="col-s-12 col-m-12 col-8 group-action-header">
                <!-- button menu -->
                <button class="btn btn-bars group-action-header_item">
                    <img src="{{asset('frontend/icons/bars-solid.svg')}}" alt="btn-bars" srcset="">
                </button>
                <!-- end button menu -->
                <!-- search -->
                <form action="" class="group-action-header_item form-seacrch" id="form-seacrch">
                    <input type="search" placeholder="Tìm kiếm">
                    <button class="btn btn-search" type="submit">
                        <img src="{{asset('frontend/icons/search-solid.svg')}}" alt="btn-search" srcset="">
                    </button>
                </form>
                <!-- end search -->
                <!-- cart -->
                <div class="group-action-header_item group-list-cart">
                    <a class="btn-header-cart">
                        <img src="{{asset('frontend/icons/shopping-bag-solid.svg')}}" alt="btn-cart" srcset="">
                        <span class="number-count-item-cart">0</span>
                    </a>
                    <ul class="header-list-items-cart">
                        <li>
                            <a>item 1</a>
                        </li>
                    </ul>
                </div>
                <!-- end cart -->
                <!-- button setting -->
                <button class="btn btn-setting group-action-header_item">
                    <img src="{{asset('frontend/icons/cogs-solid.svg')}}" alt="btn-bars" srcset="">
                </button>
                <!-- end button setting -->
            </div>
        </div>
    </section>
    <!-- end top header -->
    <!-- bottom header -->
    <section class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <nav id="primary-menu">
                        <a class="btn btn-close">
                            <img src="{{asset('frontend/icons/times-solid.svg')}}" alt="">
                        </a>
                        <ul>
                            <li>
                                <a href="">Giới thiệu</a>
                            </li>
                            <li class="level1">
                                <a href="">Sản phẩm</a>
                                <ul>
                                    <li>
                                        <a href="">Mật ong</a>
                                    </li>
                                    <li>
                                        <a href="">Phấn hoa</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="">Khuyến mãi</a>
                            </li>
                            <li>
                                <a href="">Góc chia sẻ</a>
                            </li>
                            <li>
                                <a href="">Liên hệ</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- account -->
                <div class="col-3 ">
                    <div class="account group-action-header_item">
                        <a class="btn btn-close">
                            <img src="{{asset('frontend/icons/times-solid.svg')}}" alt="">
                        </a>
                        <a href="">Đăng nhập</a>
                        <a href="">Đăng ký</a>
                    </div>
                </div>
                <!-- end account -->
            </div>
        </div>
    </section>
    <!-- end bottom header -->
</header>
