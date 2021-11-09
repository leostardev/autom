@extends('pages.admin.layouts.nav')
@section('content')
    <div class="right">
        <div class="first">
            <i class="fas fa-user-clock"></i>
            <p>Wholesaler Management</p>
        </div>
        <h3>
            Wholesaler Management > Wholesale Shop > <strong> Shop Details</strong>
        </h3>
        <div class="retailer-shop-bottom-right">
            <div class="retailer-shop-bottom-top">
                <div class="retailer-shop-top-left">
                    <div class="retailer-shop-left-top">
                        <img src="{{asset('assets/img/admin/shop_basic.png')}}" alt="" />
                        <div class="retailer-shop-info">
                            <h3>F&L Car Parts sdn.bhd.</h3>
                            <div class="retailer-shop-follow">
                                <p>1,541 Products</p>
                                <p>23,852 Followers</p>
                            </div>
                            <div class="retailer-shop-image-shop">
                                <img src="./Group 725.png" alt="" />
                                <p style="text-decoration: underline">retailer name01</p>
                            </div>
                        </div>
                    </div>
                    <div class="retailer-shop-left-bottom">
                        <a href="{{url('admin/wholesaler_shop_basic')}}" >Basic Information</a>
                        <a href="{{url('admin/wholesaler_shop_order')}}" >Order</a>
                        <a href="{{url('admin/wholesaler_shop_product')}}" >Product</a>
                        <a href="{{url('admin/wholesaler_shop_reviews')}}" class="retailer-shop-underline">Ratings and Reviews</a>
                    </div>
                </div>
                <div class="toggle-button-cover" style="margin-right: 17px">
                    <div class="button-cover">
                        <div class="button r" id="button-1">
                            <input type="checkbox" class="checkbox" />
                            <div class="knobs"></div>
                            <div class="layer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="retailer-reviews-bottom-bottom">
            <div class="retailer-reviews-rating">
                <div class="retailer-reviews-left-rating">
                    <p>4.5/5</p>
                    <div class="retailer-reviews-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                <div class="retailer-reviews-right-rating">
                    <p class="retailer-reviews-selected">All Reviews(1856)</p>
                    <p>5 star(234)</p>
                    <p>4 Star (631)</p>
                    <p>3 Star (892)</p>
                    <p>2 Star (12)</p>
                    <p>1 Star (1)</p>
                </div>
            </div>
            <div class="retailer-reviews-review-person">
                <div class="retailer-reviews-review-row">
                    <img src="{{asset('assets/img/admin/empty_avatar.png')}}" alt="" />
                    <div class="retailer-reviews-right-row">
                        <p>James Wilson</p>
                        <div class="retailer-reviews-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p class="retailer-reviews-desc">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                            diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                            aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                            aliquip ex ea commodo consequat.
                        </p>
                        <div class="retailer-reviews-image">
                            <img src="{{asset('assets/img/admin/product3.png')}}" alt="" />
                            <div class="retailer-reviews-text">
                                <p>GAIDO TIMING BELT KIT PROTON SAGA...</p>
                                <p>Series A</p>
                            </div>
                        </div>
                        <div class="retailer-reviews-time">
                            <p>06/04/2021 10:26</p>
                            <p>
                                Non-compliant review? <span class="blue">Block Review</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="retailer-reviews-review-row">
                    <img src="{{asset('assets/img/admin/empty_avatar.png')}}" alt="" />
                    <div class="retailer-reviews-right-row">
                        <p>James Wilson</p>
                        <div class="retailer-reviews-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p class="retailer-reviews-desc">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                            diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                            aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                            aliquip ex ea commodo consequat.
                        </p>
                        <div class="retailer-reviews-image">
                            <img src="{{asset('assets/img/admin/product3.png')}}" alt="" />
                            <div class="retailer-reviews-text">
                                <p>GAIDO TIMING BELT KIT PROTON SAGA...</p>
                                <p>Series A</p>
                            </div>
                        </div>
                        <div class="retailer-reviews-time">
                            <p>06/04/2021 10:26</p>
                            <p>
                                Non-compliant review? <span class="blue">Block Review</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="retailer-reviews-review-row">
                    <img src="{{asset('assets/img/admin/empty_avatar.png')}}" alt="" />
                    <div class="retailer-reviews-right-row">
                        <p>James Wilson</p>
                        <div class="retailer-reviews-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p class="retailer-reviews-desc">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                            diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                            aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                            aliquip ex ea commodo consequat.
                        </p>
                        <div class="retailer-reviews-image">
                            <img src="{{asset('assets/img/admin/product3.png')}}" alt="" />
                            <div class="retailer-reviews-text">
                                <p>GAIDO TIMING BELT KIT PROTON SAGA...</p>
                                <p>Series A</p>
                            </div>
                        </div>
                        <div class="retailer-reviews-time">
                            <p>06/04/2021 10:26</p>
                            <p>
                                Non-compliant review? <span class="blue">Block Review</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="retailer-reviews-review-row">
                    <img src="{{asset('assets/img/admin/empty_avatar.png')}}" alt="" />
                    <div class="retailer-reviews-right-row">
                        <p>James Wilson</p>
                        <div class="retailer-reviews-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p class="retailer-reviews-desc">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                            diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                            aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                            aliquip ex ea commodo consequat.
                        </p>
                        <div class="retailer-reviews-image">
                            <img src="{{asset('assets/img/admin/product3.png')}}" alt="" />
                            <div class="retailer-reviews-text">
                                <p>GAIDO TIMING BELT KIT PROTON SAGA...</p>
                                <p>Series A</p>
                            </div>
                        </div>
                        <div class="retailer-reviews-time">
                            <p>06/04/2021 10:26</p>
                            <p>
                                Non-compliant review? <span class="blue">Block Review</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

