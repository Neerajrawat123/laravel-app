<!-- resources/views/home.blade.php -->

@push('styles')

<?php

$catagories = array(
    (object) ['name' => 'LED TV', 'img' => '/images/img-led-tv.png'],
    (object) ['name' => 'Air Conditioner', 'img' => '/images/air-conditioner.png'],
    (object) ['name' => 'Accessories', 'img' => '/images/img-earphones.png'],
    (object) ['name' => 'Wearables', 'img' => '/images/img-wearables.png'],
    (object) ['name' => 'Electric vehicles', 'img' => '/images/img-electric-vehicles.png'],

);


$watches = array(
    (object) ['name' => 'LEEMA P109 Smartwatch| BT Calling| 1.8" Display| 8 Days long use time', 'img' => '/images/img-watch1.png', 'stars' => 4, 'review' => 8, 'price' => '2,999', 'mrp' => '2,899', 'discount' => '26'],
    (object) ['name' => 'LEEMA P109 Smartwatch| BT Calling| 1.8" Display| 8 Days long use time', 'img' => '/images/img-watch2.png', 'stars' => 4, 'review' => 8, 'price' => '1,999', 'mrp' => '2,899', 'discount' => '21'],
    (object) ['name' => 'LEEMA 1.8" HD Display, 140+ Watch  Bluetooth Calling, Multiple Activity', 'img' => '/images/img-watch3.png', 'stars' => 4, 'review' => 8, 'price' => '2,045', 'mrp' => '2,999', 'discount' => '18'],
    (object) ['name' => 'LEEMA 2.0" HD Display, 140+ Watch  Bluetooth Calling, Multiple Activity', 'img' => '/images/img-watch4.png', 'stars' => 4, 'review' => 8, 'price' => '2,999', 'mrp' => '3,999', 'discount' => '15'],

);

$accessories = array(
    (object) ['name' => 'LEEMA Dual Port 30W Smart Charger Adapter  Multi-Layer Protection', 'img' => '/images/img-watch1.png', 'stars' => 4, 'review' => 8, 'price' => '360', 'mrp' => '390', 'discount' => '10'],
    (object) ['name' => 'LEEMA  Smart neckband Multi-Layer Protection ', 'img' => '/images/img-acces2.png', 'stars' => 4, 'review' => 8, 'price' => '3,360', 'mrp' => '4,899', 'discount' => '21'],
    (object) ['name' => 'LEEMA LCC-801 Type C To Type C Cable (65W)', 'img' => '/images/img-acces3.png', 'stars' => 4, 'review' => 8, 'price' => '360', 'mrp' => '390', 'discount' => '18'],
    (object) ['name' => 'Buy LEEMA LSC-904 Turbo Car Charger (White, with USB Cable)', 'img' => '/images/img-acces4.png', 'stars' => 4, 'review' => 8, 'price' => '110', 'mrp' => '360', 'discount' => '50'],

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

        <div class="product_container watches_container">
            <h3>Watches</h3>
            <div class="items">
            @foreach ($watches as $watch)

                <div class="item">
                    <div class="img_container">

                        <img src="{{ URL::asset( $watch->img) }}" alt="">
                    </div>
                    <div class="review_container">
                        <span>sponser</span>
                        <div class="review">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="16" height="16" fill="url(#pattern0)" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_147_28" transform="scale(0.01)" />
                                    </pattern>
                                    <image id="image0_147_28" width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFhUlEQVR4nO2daWgdVRTHfzZJq60LLl1cQG1cqRYURWyLG1UaqQWXCCoURYyCS0U/iKKYDyoRXGhB8CkoWGihLqAptLhWXHDHBa1girhEQalLaxdt7JVbzsjj8fIy8969c5e5P/h/Tc45/yGZOXPuGUgkEnGzBPgR+AFY5DqYqnMk8A+gRKNAt+ugqsxgnRmZFrsOqqrsBWxqYsgLrgOrKuc3MUNrFzDLdXBVZNU4hmjd7jq4qnEAsL2FIRtdB1g1bmxhRqYzXAdZJT7OYUjNdZBV4eQcZmj9CUx1HWwVWJ7TEK2lroONncnArwUMecN1wLFzeQEztHYDx7gOOmbWFzRE6z7XQcfKEcBYG4boTnCX6+Bj5J42zMjU5zr4GBuJIx0YssZ1ArFxbgdmaP0NTHedREys7NAQrWWuk4ipkbjNgCFfuE4kFm4wYEam01wnEwPvGzTkMdfJhM4cg2Zo/ZEajp3xiGFDtK40dLFUspH4iwVDXnWdWKhcasGMrOHY6zq5EFlryRAl81yJAsyScR5bhuix09RwLMCdFs3IpOe6EjnZWIIhq5Mb+TirBDOyhuMhyZSJebokQ7RuSoa0Zl9ga4mGfBKzIfsAh0m7YwGwELhIRnGWya3mkIzxPAMMA68AbwNfAj8BO0s0o1475PfrOD6SmIYlzuUS96DksVTyWih5zpG8p5gsZq/88D6Z7BiQgWUdxEMyBajfuq0D3gI+laMAmxsOzFRdO6S7sEmM3SDGrpYaPgjcDdwKXAv0AxcAZwKHZmas8CCRJPY8d12tDfk3FQRfLojPtSE/exBIEntqoOfOOAX4LhUF1xeF9uCE7P/IwcBryRRcmaFvlGY23ml1y+2d6ytFVUw1efczLtdJW8F1oKoCd1U3530umZf+2WPTDH2k4hwKcrjhiY8k/m/X6A0UbTGl5GafilyrTB2zG7D8Bi92jQF3YJizLU2BxK7N0q+yQq/MyLpOUgWir+sf9my+s3jeg2SV51org+KlHaDRfxNTY5Kmc1/6AXsSDlgs87Kur0blibbKgJ9Tjpe/lariGgFOwhMOAl72oCjKkd708chcV0WbkzWgB4+5YoJdVrFoJ3ANgRD7S6/REPdxTZepCxWZ3q2fEAkN/eLlSQ+KqAxppcyfBc9A4PNbu2w0B12jX8hs8aC4qqC2tPMyKZQ/X395UGBVUNtMj4n6wnkeFFe1Kb1rJToe8KCwqk3dT4R86EFhVZv6gMg4sM1tcMoTjUm/Lhr6PSiq6lCXERE1DwqqOtTjRESz73yEpm+JhF4PiqkMaTYRcL0HhVSGpFtAwfOcB4VUhvQsgdMlg2IqEv0W+o6U0z0oojKsoPc23uVBAZVh6cU4wfK6BwVUhqWP/gXJVIebGZRF6dNl0wiQRSUWaZ2orN8X5Dd3Hy7prmdAZo2znlkZRyb0upHg+MxyUdYAM8bpLNvuneldL0ExU6bAbc1EXZwjhj6Ls2G7Q/u861WWilAD9i94YzFk6V1MUAuZTR8U/abD99rzZBeWyZieIiC+NzgPNWRo6qNHZqtM3Yrrb1sFwYkGz3OfaiE+fYbjPUMxWj8/aIJbOkxyu1zJNpt4k+R2udP9jrlXY7jkpQ4S3AAcW2KsR7X5bcRML+I53fJR4KKJ/d7wgFc2/QU/6Vo/Zur1YZ0FbSQ1LFs9XTNDtpAWjX8+HjNYIBG9lvUS/OPCgg+U9+Ix71h6wCubaXK7neccvt7x6yX75TgDMiJD16EwH/gqx7OSlxfXkgmC1lfc3oRHj9yGt9qypzdde8ejLQaV5xI+cyWXZjnq3L1jRZODLreFPqXRQJfk1Pjl0SfwkOOkNa5kyX4UU37jMLtuc8Wozy2UydLLcvWAVzZHT7TiNZFIYJD/AIC9QQSP1ODaAAAAAElFTkSuQmCC" />
                                </defs>
                            </svg>
                            <span>{{ $watch->stars}}({{$watch->review}}k)</span>


                        </div>

                    </div>
                    <div class="desc">
                        <p>{{$watch->name}}</p>
                        <div class="price_sec"><span class="price">{{$watch->price}}</span> <span class="mrp">{{$watch->mrp}}</span> <span class="discount">{{$watch->discount}}%off</span></div>
                    </div>

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


        <div class="product_container watches_container">
            <h3>Accessories</h3>
            <div class="items">
            @foreach ($accessories as $accessory)

                <div class="item">
                    <div class="img_container">

                        <img src="{{ URL::asset( $accessory->img) }}" alt="">
                    </div>
                    <div class="review_container">
                        <span>sponser</span>
                        <div class="review">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="16" height="16" fill="url(#pattern0)" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_147_28" transform="scale(0.01)" />
                                    </pattern>
                                    <image id="image0_147_28" width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFhUlEQVR4nO2daWgdVRTHfzZJq60LLl1cQG1cqRYURWyLG1UaqQWXCCoURYyCS0U/iKKYDyoRXGhB8CkoWGihLqAptLhWXHDHBa1girhEQalLaxdt7JVbzsjj8fIy8969c5e5P/h/Tc45/yGZOXPuGUgkEnGzBPgR+AFY5DqYqnMk8A+gRKNAt+ugqsxgnRmZFrsOqqrsBWxqYsgLrgOrKuc3MUNrFzDLdXBVZNU4hmjd7jq4qnEAsL2FIRtdB1g1bmxhRqYzXAdZJT7OYUjNdZBV4eQcZmj9CUx1HWwVWJ7TEK2lroONncnArwUMecN1wLFzeQEztHYDx7gOOmbWFzRE6z7XQcfKEcBYG4boTnCX6+Bj5J42zMjU5zr4GBuJIx0YssZ1ArFxbgdmaP0NTHedREys7NAQrWWuk4ipkbjNgCFfuE4kFm4wYEam01wnEwPvGzTkMdfJhM4cg2Zo/ZEajp3xiGFDtK40dLFUspH4iwVDXnWdWKhcasGMrOHY6zq5EFlryRAl81yJAsyScR5bhuix09RwLMCdFs3IpOe6EjnZWIIhq5Mb+TirBDOyhuMhyZSJebokQ7RuSoa0Zl9ga4mGfBKzIfsAh0m7YwGwELhIRnGWya3mkIzxPAMMA68AbwNfAj8BO0s0o1475PfrOD6SmIYlzuUS96DksVTyWih5zpG8p5gsZq/88D6Z7BiQgWUdxEMyBajfuq0D3gI+laMAmxsOzFRdO6S7sEmM3SDGrpYaPgjcDdwKXAv0AxcAZwKHZmas8CCRJPY8d12tDfk3FQRfLojPtSE/exBIEntqoOfOOAX4LhUF1xeF9uCE7P/IwcBryRRcmaFvlGY23ml1y+2d6ytFVUw1efczLtdJW8F1oKoCd1U3530umZf+2WPTDH2k4hwKcrjhiY8k/m/X6A0UbTGl5GafilyrTB2zG7D8Bi92jQF3YJizLU2BxK7N0q+yQq/MyLpOUgWir+sf9my+s3jeg2SV51org+KlHaDRfxNTY5Kmc1/6AXsSDlgs87Kur0blibbKgJ9Tjpe/lariGgFOwhMOAl72oCjKkd708chcV0WbkzWgB4+5YoJdVrFoJ3ANgRD7S6/REPdxTZepCxWZ3q2fEAkN/eLlSQ+KqAxppcyfBc9A4PNbu2w0B12jX8hs8aC4qqC2tPMyKZQ/X395UGBVUNtMj4n6wnkeFFe1Kb1rJToe8KCwqk3dT4R86EFhVZv6gMg4sM1tcMoTjUm/Lhr6PSiq6lCXERE1DwqqOtTjRESz73yEpm+JhF4PiqkMaTYRcL0HhVSGpFtAwfOcB4VUhvQsgdMlg2IqEv0W+o6U0z0oojKsoPc23uVBAZVh6cU4wfK6BwVUhqWP/gXJVIebGZRF6dNl0wiQRSUWaZ2orN8X5Dd3Hy7prmdAZo2znlkZRyb0upHg+MxyUdYAM8bpLNvuneldL0ExU6bAbc1EXZwjhj6Ls2G7Q/u861WWilAD9i94YzFk6V1MUAuZTR8U/abD99rzZBeWyZieIiC+NzgPNWRo6qNHZqtM3Yrrb1sFwYkGz3OfaiE+fYbjPUMxWj8/aIJbOkxyu1zJNpt4k+R2udP9jrlXY7jkpQ4S3AAcW2KsR7X5bcRML+I53fJR4KKJ/d7wgFc2/QU/6Vo/Zur1YZ0FbSQ1LFs9XTNDtpAWjX8+HjNYIBG9lvUS/OPCgg+U9+Ix71h6wCubaXK7neccvt7x6yX75TgDMiJD16EwH/gqx7OSlxfXkgmC1lfc3oRHj9yGt9qypzdde8ejLQaV5xI+cyWXZjnq3L1jRZODLreFPqXRQJfk1Pjl0SfwkOOkNa5kyX4UU37jMLtuc8Wozy2UydLLcvWAVzZHT7TiNZFIYJD/AIC9QQSP1ODaAAAAAElFTkSuQmCC" />
                                </defs>
                            </svg>
                            <span>{{ $accessory->stars}}({{$accessory->review}}k)</span>


                        </div>

                    </div>
                    <div class="desc">
                        <p>{{$accessory->name}}</p>
                        <div class="price_sec"><span class="price">{{$accessory->price}}</span> <span class="mrp">{{$accessory->mrp}}</span> <span class="discount">{{$accessory->discount}}%off</span></div>
                    </div>

                </div>
                @endforeach


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

       



    </div>




</x-layout>