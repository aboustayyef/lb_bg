@extends('layouts.main')

@section('content')
    @include('partials.slideshow')

    <!-- Explore Our Collection -->
        <div class="outer-row breath">
            <div class="inner-row">
                <h2>
                    <span>Explore our collection</span>
                    <small class ="stress">Browse our entire stock from the comfort of your home</small>
                </h2>
            </div>
        </div>

        <div class="outer-row">
            <div class="inner-row">
                <div class="fifth">
                    <div class="collection-feature">
                        <a href="{{\Bluegallery\Helpers::linkToCategory(105)}}"><div class="intermodal">Office Furniture</div></a>
                        <img src="{{\Bluegallery\Helpers::image('posters/175x175-office.jpg')}}" alt="">
                    </div>
                </div>
                <div class="fifth">
                    <div class="collection-feature">
                        <a href="{{\Bluegallery\Helpers::linkToCategory(104)}}"><div class="intermodal">Accessories</div></a>
                        <img src="{{\Bluegallery\Helpers::image('posters/175x175-accessories.jpg')}}" alt="">
                    </div>
                </div>

                <div class="fifth">
                    <div class="collection-feature">
                        <a href="{{\Bluegallery\Helpers::linkToCategory(101)}}"><div class="intermodal">Living Room</div></a>
                        <img src="{{\Bluegallery\Helpers::image('posters/175x175-living.jpg')}}" alt="">
                    </div>
                </div>
                <div class="fifth">
                    <div class="collection-feature">
                        <a href="{{\Bluegallery\Helpers::linkToCategory(102)}}"><div class="intermodal">Dining Room</div></a>
                        <img src="{{\Bluegallery\Helpers::image('posters/175x175-dining.jpg')}}" alt="">
                    </div>
                </div>
                <div class="fifth last">
                    <div class="collection-feature">
                        <a href="{{\Bluegallery\Helpers::linkToCategory(103)}}"><div class="intermodal">Bedroom</div></a>
                        <img src="{{\Bluegallery\Helpers::image('posters/175x175-beds.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- New Items -->
        <div class="outer-row breath">
            <div class="inner-row">
                <h2>
                    <span>New Items</span>
                    <small class ="stress">Latest arrivals, special offers and announcements</small>
                </h2>
            </div>
        </div>

        <div class="outer-row">
            <div class="inner-row">
                <div class="fourth">
                    <a href="{{\Bluegallery\Helpers::linkToCategory(254)}}"><div class="new-items-feature"><img src="{{\Bluegallery\Helpers::image('posters/230x142_artificial_flowers.jpg')}}" alt="Artificial Flowers"></a></div>
                </div>
                <div class="fourth">
                    <a href="{{\Bluegallery\Helpers::linkToCategory(253)}}"><div class="new-items-feature"><img src="{{\Bluegallery\Helpers::image('posters/230x142_carpets.jpg')}}" alt="Carpets and Rugs"></a></div>
                </div>
                <div class="fourth">
                    <a href="<?php echo getenv('WEBPATH').'map' ?>"><div class="new-items-feature"><img src="{{\Bluegallery\Helpers::image('posters/230x142_our_showroom.jpg')}}" alt="Find our showroom"></a></div>
                </div>
                <div class="fourth last">
                    <!-- Nothing -->
                </div>
            </div>
        </div>

        <!-- Our Brands -->

        <div class="outer-row breath">
            <div class="inner-row">
                <h2>
                    <span>Our Brands</span>
                    <small class ="stress">Finest products from all around the world</small>
                </h2>
            </div>
        </div>

        <div class="outer-row">
            <div id ="brand-logos" class="inner-row">
                <div class="hstack"><img src ="{{\Bluegallery\Helpers::image('brand-logos/Orrefors.gif')}}"></div>
                <div class="hstack"><img src ="{{\Bluegallery\Helpers::image('brand-logos/aran_newform.png')}}"></div>
                <div class="hstack"><img src ="{{\Bluegallery\Helpers::image('brand-logos/interstuhl.png')}}"></div>
                <div class="hstack"><img src ="{{\Bluegallery\Helpers::image('brand-logos/sia-home-fashion.gif')}}"></div>
                <div class="hstack"><img src ="{{\Bluegallery\Helpers::image('brand-logos/ligne_pure.gif')}}"></div>
                <div class="hstack last"></div>
            </div>
        </div>

@stop