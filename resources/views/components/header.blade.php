<!-- resources/views/components/header.blade.php -->
<header>
    <div class='top_header'>
        <div class='header_content'>
            <div class='discount_msg_div'>
                <p>All New Products And Free Express Delivery - OFF 50%!</p> <span>ShopNow</span>
            </div>
            <div class="options">
                <ul>
                    <li><span>Shop</span> <img src="{{ URL::asset('/images/Vector.svg') }}" alt=""></li>
                    <li><span>Company</span> <img src="{{ URL::asset('/images/Vector.svg') }}" alt=""></li>
                    <li><span>Service</span> <img src="{{ URL::asset('/images/Vector.svg') }}" alt=""></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="nav_header">

        <div class="logo_div">
            <img src="{{ URL::asset('/images/logo.png') }}" alt="">
        </div>
        <nav>
            <ul>
                <li><span>Mobile</span> <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.36403 4.95L11.314 0L12.728 1.414L6.36403 7.778L2.67029e-05 1.414L1.41403 0L6.36403 4.95Z" fill="black" />
                    </svg>
                </li>
                <li><span>Hearables</span><svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.36403 4.95L11.314 0L12.728 1.414L6.36403 7.778L2.67029e-05 1.414L1.41403 0L6.36403 4.95Z" fill="black" />
                    </svg></li>
                <li><span>Wearables</span><svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.36403 4.95L11.314 0L12.728 1.414L6.36403 7.778L2.67029e-05 1.414L1.41403 0L6.36403 4.95Z" fill="black" />
                    </svg></li>
                <li><span>LED</span><svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.36403 4.95L11.314 0L12.728 1.414L6.36403 7.778L2.67029e-05 1.414L1.41403 0L6.36403 4.95Z" fill="black" />
                    </svg></li>
                <li><span>Electric Vehicles</span> <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.36403 4.95L11.314 0L12.728 1.414L6.36403 7.778L2.67029e-05 1.414L1.41403 0L6.36403 4.95Z" fill="black" />
                    </svg></li>
            </ul>
        </nav>
        <div class="icons_container">
            <div class="input_box">
                <input type="text" name="" id="" placeholder="What are you looking for ?">
                <img src="{{ URL::asset('/images/searchIcon.svg') }}" alt="">
            </div>

            <div class="icons">
                <img src="{{ URL::asset('/images/heartIcon.svg') }}" alt="">
                <img src="{{ URL::asset('/images/cartIcon.svg') }}" alt="">

            </div>



        </div>
    </div>

</header>