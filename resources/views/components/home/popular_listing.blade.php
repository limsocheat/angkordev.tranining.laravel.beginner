<!--section -->
<section class="gray-section">
    <div class="container">
        <div class="section-title">
            <h2>Popular listings</h2>
            <div class="section-subtitle">Best Listings</div>
            <span class="section-separator"></span>
            <p>Nulla tristique mi a massa convallis cursus. Nulla eu mi magna.</p>
        </div>
    </div>
    <!-- carousel -->
    <div class="list-carousel fl-wrap card-listing ">
        <!--listing-carousel-->
        <div class="listing-carousel  fl-wrap ">
            @foreach ($listings as $listing)
            <!--slick-slide-item-->
            <div class="slick-slide-item">
                <!-- listing-item -->
                <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img">
                            <img src="images/all/1.jpg" alt="">
                            <div class="overlay"></div>
                            <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                        </div>
                        <div class="geodir-category-content fl-wrap">
                            <a class="listing-geodir-category" href="listing.html">{{ $listing->category_name }}</a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/5.jpg"
                                        alt=""></a>
                                <span class="avatar-tooltip">Added By
                                    <strong>{{ $listing->added_by }}</strong></span>
                            </div>
                            <h3><a href="{{ route('page.listing', $listing->id) }}"> {{ $listing->title }}</a></h3>
                            <p>{{ $listing->short_description }} </p>
                            <div class="geodir-category-options fl-wrap">
                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                    <span>(7 reviews)</span>
                                </div>
                                <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker"
                                            aria-hidden="true"></i> {{ $listing->address }}</a></div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- listing-item end-->
            </div>
            <!--slick-slide-item end-->
            @endforeach
        </div>
        <!--listing-carousel end-->
        <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
        <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
    </div>
    <!--  carousel end-->
</section>
<!-- section end -->