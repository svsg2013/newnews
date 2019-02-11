@extends('template-news')
@section('content')
    <section id="content">

        <div class="content-wrap">

    @include('newnews.partial.breakingNews')

            <div class="container clearfix">

                <div class="row">

                    <div class="col-lg-8 bottommargin">
                        @include('newnews.partial.SlideNews')

                        <div class="clear"></div>
                        <!-- post news and advertisement -->
                        @include('newnews.partial.postAd')
                        <!-- end post and advertisement -->
                        <!-- gallery -->
                        @include('newnews.partial.gallery')
                        <!-- end gallery -->
                        @include('newnews.partial.otherNews')

                    </div>

                    <div class="col-lg-4">

                        <div class="line d-block d-lg-none d-xl-block"></div>

                        <div class="sidebar-widgets-wrap clearfix">

                            <div class="widget clearfix">
                                <div class="col_one_third nobottommargin">
                                    <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <small style="display: block; margin-top: 3px;"><strong><div class="counter counter-inherit"><span data-from="1000" data-to="58742" data-refresh-interval="100" data-speed="3000" data-comma="true"></span></div></strong>Likes</small>
                                </div>

                                <div class="col_one_third nobottommargin">
                                    <a href="#" class="social-icon si-dark si-colored si-twitter nobottommargin" style="margin-right: 10px;">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <small style="display: block; margin-top: 3px;"><strong><div class="counter counter-inherit"><span data-from="500" data-to="9654" data-refresh-interval="50" data-speed="2500" data-comma="true"></span></div></strong>Followers</small>
                                </div>

                                <div class="col_one_third nobottommargin col_last">
                                    <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
                                        <i class="icon-rss"></i>
                                        <i class="icon-rss"></i>
                                    </a>
                                    <small style="display: block; margin-top: 3px;"><strong><div class="counter counter-inherit"><span data-from="200" data-to="15475" data-refresh-interval="150" data-speed="3500" data-comma="true"></span></div></strong>Readers</small>
                                </div>
                            </div>

                            <div class="widget clearfix">
                                <img class="aligncenter" src="images/magazine/ad.png" alt="">
                            </div>

                            <div class="widget widget_links clearfix">

                                <h4>Categories</h4>
                                <div class="col_half nobottommargin">
                                    <ul>
                                        <li><a href="#">World</a></li>
                                        <li><a href="#">Technology</a></li>
                                        <li><a href="#">Entertainment</a></li>
                                        <li><a href="#">Sports</a></li>
                                        <li><a href="#">Media</a></li>
                                        <li><a href="#">Politics</a></li>
                                        <li><a href="#">Business</a></li>
                                    </ul>
                                </div>
                                <div class="col_half nobottommargin col_last">
                                    <ul>
                                        <li><a href="#">Lifestyle</a></li>
                                        <li><a href="#">Travel</a></li>
                                        <li><a href="#">Cricket</a></li>
                                        <li><a href="#">Football</a></li>
                                        <li><a href="#">Education</a></li>
                                        <li><a href="#">Photography</a></li>
                                        <li><a href="#">Nature</a></li>
                                    </ul>
                                </div>

                            </div>

                            <div class="widget clearfix">

                                <h4>Twitter Feed Scroller</h4>
                                <div class="fslider customjs testimonial twitter-scroll twitter-feed" data-username="envato" data-count="2" data-animation="slide" data-arrows="false">
                                    <i class="i-plain color icon-twitter nobottommargin" style="margin-right: 15px;"></i>
                                    <div class="flexslider" style="width: auto;">
                                        <div class="slider-wrap">
                                            <div class="slide"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="widget clearfix">

                                <h4>Flickr Photostream</h4>
                                <div id="flickr-widget" class="flickr-feed masonry-thumbs grid-5" data-id="613394@N22" data-count="15" data-type="group" data-lightbox="gallery"></div>

                            </div>

                            <div class="widget clearfix">

                                <div class="tabs nobottommargin clearfix" id="sidebar-tabs">

                                    <ul class="tab-nav clearfix">
                                        <li><a href="#tabs-1">Popular</a></li>
                                        <li><a href="#tabs-2">Recent</a></li>
                                        <li><a href="#tabs-3"><i class="icon-comments-alt norightmargin"></i></a></li>
                                    </ul>

                                    <div class="tab-container">

                                        <div class="tab-content clearfix" id="tabs-1">
                                            <div id="popular-post-list-sidebar">

                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="rounded-circle" src="images/magazine/small/3.jpg" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                                        </div>
                                                        <ul class="entry-meta">
                                                            <li><i class="icon-comments-alt"></i> 35 Comments</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="rounded-circle" src="images/magazine/small/2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                                        </div>
                                                        <ul class="entry-meta">
                                                            <li><i class="icon-comments-alt"></i> 24 Comments</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="rounded-circle" src="images/magazine/small/1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                        </div>
                                                        <ul class="entry-meta">
                                                            <li><i class="icon-comments-alt"></i> 19 Comments</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-content clearfix" id="tabs-2">
                                            <div id="recent-post-list-sidebar">

                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="rounded-circle" src="images/magazine/small/1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                        </div>
                                                        <ul class="entry-meta">
                                                            <li>10th July 2014</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="rounded-circle" src="images/magazine/small/2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                                        </div>
                                                        <ul class="entry-meta">
                                                            <li>10th July 2014</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="rounded-circle" src="images/magazine/small/3.jpg" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                                        </div>
                                                        <ul class="entry-meta">
                                                            <li>10th July 2014</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-content clearfix" id="tabs-3">
                                            <div id="recent-post-list-sidebar">

                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="rounded-circle" src="images/icons/avatar.jpg" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <strong>John Doe:</strong> Veritatis recusandae sunt repellat distinctio...
                                                    </div>
                                                </div>

                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="rounded-circle" src="images/icons/avatar.jpg" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <strong>Mary Jane:</strong> Possimus libero, earum officia architecto maiores....
                                                    </div>
                                                </div>

                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="rounded-circle" src="images/icons/avatar.jpg" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <strong>Site Admin:</strong> Deleniti magni labore laboriosam odio...
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="widget clearfix">
                                <iframe src="http://player.vimeo.com/video/100299651" width="500" height="264" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>

                            <div class="widget clearfix">
                                <img class="aligncenter" src="images/magazine/ad.png" alt="">
                            </div>

                            <div class="widget clearfix">
                                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FEnvato&amp;width=350&amp;height=240&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=499481203443583" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:350px; height:240px; max-width: 100% !important;" allowTransparency="true"></iframe>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection