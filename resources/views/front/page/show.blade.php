@extends('front.layout.master')
@section('title','page')
@section('body')

    <!-- Blog details section begin -->
    <div class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-inner">
                        <div class="blog-detail-title">
                            <h2>DLC Shopping Blog</h2>
                            <p>DLC Shopping <span>- Aug 21,2022</span></p>
                        </div>
                        <div class="blog-large-pic">
                            <img src="front/img/shopicon.png" alt="" height="700px">
                        </div>
                        <div class="blog-detail-desc">
                            <p>To order Anime Manga Figures you can visit the website DLCShopping.com, search for the
                                keyword 'figure' and click to order the product you want.
                                In addition, you can contact the hotline 0123456789 for advice</p>
                            </h4>
                        </div>
                        <hr>
                        <div class="col-lg-12 text-center">
                            <h4 style="color: black;">Quote form Anime</h4>
                        </div>
                        <div class="blog-quote">
                            <p>"Do You want to buy the best figure!! come to the best Shop" - DLC Shopping</p>
                            <p>"People’s lives don’t end when they die. It ends when they lose faith" – Itachi
                                Uchiha
                            </p>
                            <p>"Wake up to reality! Nothing ever goes as planned in this world. The longer you live,
                                the more you realize that in this reality only pain, suffering and futility exist."

                                – Madara Uchiha</p>
                        </div>
                        <hr>
                        <div class="blog-more">
                            <div class="row">
                                <hr>
                                <div class="col-lg-12 text-center">
                                    <h4 style="color: black;">Some special Street Art</h4>
                                </div>
                                <div class="col-sm-4">
                                    <img src="front/img/blog/q.jpeg" alt="">
                                </div>
                                <div class="col-sm-4"><img src="front/img/blog/q1.jpg" alt="" height="240px"></div>
                                <div class="col-sm-4"><img src="front/img/blog/q2.jpg" alt="" height="240px"></div>
                            </div>
                        </div>
                        <div class="tag-share">
                            <div class="details-tag">
                                <ul>
                                    <li><i class="fa fa-tags"></i></li>
                                    <li>Street Art</li>
                                    <li>Travel</li>
                                    <li>Creative</li>
                                </ul>
                            </div>
                            <div class="blog-share">
                                <span>Share:</span>
                                <div class="social-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post">
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <a href="./blog" class="prev-blog">
                                        <div class="pb-pic">
                                            <i class="ti-arrow-left"></i>
                                            <img src="front/img/blog/tp.png">
                                        </div>
                                        <div class="pb-text">
                                            <span>Previous Post:</span>
                                            <h5>About the new figures in this year...</h5>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="posted-by">
                            <div class="pb-pic">
                                <img src="front/img/shopicon.png" height="70px">
                            </div>
                            <div class="pb-text">
                                <a href="#">
                                    <h5>DLC Shopping</h5>
                                    <p>Nice picture</p>
                                </a>
                            </div>
                        </div>
                        <div class="leave-comment">
                            <h4>leave a comment</h4>
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Messages"></textarea>
                                        <button type="submit" class="site-btn">Send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog details section end -->

@endsection

