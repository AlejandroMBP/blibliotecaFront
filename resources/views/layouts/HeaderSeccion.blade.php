<header class="header-1">
    <div class="mega-menu-wrapper">
        <div class="header-main">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-10 col-xl-8 col-xxl-10">
                        <div class="header-left">
                            <div class="logo">
                                <a href="index.html" class="header-logo">
                                    <img src="{{ asset('assets/img/logo/white-logo.svg') }}" alt="logo-img">
                                </a>
                            </div>
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li>
                                                <a href="{{ route('inicio.index') }}">
                                                    Home
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('shop.index') }}">
                                                    Shop
                                                </a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="{{ route('acercade.index') }}">
                                                    Pages
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('blog.index') }}">
                                                    Blog
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('contactos.index') }}">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-2 col-xl-4 col-xxl-2">
                        <div class="header-right">
                            <div class="category-oneadjust gap-6 d-flex align-items-center">
                                <div class="icon">
                                    <i class="fa-sharp fa-solid fa-grid-2"></i>
                                </div>
                                <select name="cate" class="category">
                                    <option value="1">
                                        Category
                                    </option>
                                    <option value="1">
                                        Web Design
                                    </option>
                                    <option value="1">
                                        Web Development
                                    </option>
                                    <option value="1">
                                        Graphic Design
                                    </option>
                                    <option value="1">
                                        Softwer Eng
                                    </option>
                                </select>
                                <form action="#" class="search-toggle-box d-md-block">
                                    <div class="input-area">
                                        <input type="text" placeholder="Author">
                                        <button class="cmn-btn">
                                            <i class="far fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="menu-cart">
                                <a href="wishlist.html" class="cart-icon">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                                <a href="shop-cart.html" class="cart-icon">
                                    <i class="fa-regular fa-cart-shopping"></i>
                                </a>
                                <div class="header-humbager ml-30">
                                    <a class="sidebar__toggle" href="javascript:void(0)">
                                        <div class="bar-icon-2">
                                            <img src="assets/img/icon/icon-13.svg" alt="img">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
