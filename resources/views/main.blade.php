<!-- resources/views/home.blade.php -->

@push('styles')

<?php

$catagories = array(
    (object) ['name' => 'LED TV', 'img' => '/images/img-led-tv.png'],
    (object) ['name' => 'Air Conditioner', 'img' => '/images/air-conditioner.png'],
    (object) ['name' => 'Accessories', 'img' => '/images/img-earphones.png'],
    (object) ['name' => 'Wearables', 'img' => '/images/img-wearables.png'],
    (object) ['name' => 'Electric vehicles', 'img' => '/images/img-electric-vehicles.png'],

    // Add more objects as needed
);




?>

<x-layout>
    <div class="banner_container">
        <!-- <div class="banner_image_container">
        <img src="{{ URL::asset('/images/banner-image.png') }}" alt="">    </div>

        </div> -->

        <div class="banner_text">
            <img src="{{ URL::asset('/images/logo.png') }}" alt="">
            <h2> 4K <br> UHD TV</h2>

            <p>High Quality Sound , 8 Ram , Bright color</p>
            <p> <span>amazed</span> by the view with 4 speakers</p>
            <button class="banner_btn">buy now</button>
        </div>
    </div>

    <div class="items_container">
        <div class="category_container">
            <h3>Shop by category</h3>
            <div class="items">

                @foreach ($catagories as $category)
                <div class="item">
                    <div>

                        <img src="{{ URL::asset($category->img) }}" alt="">
                    </div>
                    <span>{{$category->name}}</span>

                </div>

                @endforeach
            </div>
        </div>

        <div class="tv_section">
            <h2>Brilliant Brightness</h2>
            <div class="tv_container">


                <div class="item item-1">
                    <div>

                        <img src="{{ URL::asset('/images/img-tv1.png') }}" alt="">
                    </div>
                    <div class="product_desc">
                        <p>LEEMA 127 cm Full HD LED Smart Android TV with 1GB+ 8GB</p>
                        <p>Save upto 18% off</p>
                    </div>

                </div>
                <div class="item item-2">
                    <div class="img-container">

                        <img src="{{ URL::asset('/images/img-tv2.png') }}" alt="">
                    </div>
                    <div class="product_desc">
                        <div class="desc">
                            <img src="{{ URL::asset('/images/logo.png') }}" alt="">
                            <p>New Release <br> P135 Pro</p>
                            <p>Elevate your entertainment</p>
                            <button class="banner_btn">buy now</button>

                        </div>
                    </div>
                </div>
                <div class="item item-3">
                    <div>

                        <img src="{{ URL::asset('/images/img-tv3.png') }}" alt="">
                    </div>
                    <div class="product_desc">
                        <p>Sony LED 32 inch Grey Colour, Curved Glass</p>
                        <p>Save upto 21% off</p>
                    </div>

                </div>
                <div class="item item-4">
                    <div>

                        <img src="{{ URL::asset('/images/img-tv4.png') }}" alt="">
                    </div>
                    <div class="product_desc">
                        <p>Sony LED 32 inch Grey Colour, Curved Glass</p>
                        <p>Save upto 18% off</p>
                    </div>

                </div>
                <div class="item item-5">
                    <div>

                        <img src="{{ URL::asset('/images/img-tv5.png') }}" alt="">
                    </div>
                    <div class="product_desc">
                        <p>Sony LED 32 inch Grey Colour, Curved Glass</p>
                        <p>Save upto 32% off</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="partners_container">
            <h3>Official Partners</h3>
            <div class="items">

                <div class="item item-1">

                    <img src="{{ URL::asset('/images/flipkart.png') }}" alt="">

                </div>
                <div class="item item-1">

                    <img src="{{ URL::asset('/images/amazon.png') }}" alt="">

                </div>
                <div class="item item-1">

                    <img src="{{ URL::asset('/images/bajaj.png') }}" alt="">

                </div>

            </div>
        </div>

        <div class="product_container watches_container">
            <h3>Watches</h3>
            <div class="items">

                <div class="item item-1">

                    <img src="{{ URL::asset('/images/flipkart.png') }}" alt="">

                </div>
                <div class="item item-1">

                    <img src="{{ URL::asset('/images/amazon.png') }}" alt="">

                </div>
                <div class="item item-1">

                    <img src="{{ URL::asset('/images/bajaj.png') }}" alt="">

                </div>

            </div>
        </div>




    </div>




</x-layout>