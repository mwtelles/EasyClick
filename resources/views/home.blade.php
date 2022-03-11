@extends('layouts.app')

@section('content')
    <div class="main-content">
        {{--        <section id="iq-favorites">--}}
        {{--            <div class="container-fluid">--}}
        {{--                <div class="row">--}}
        {{--                    <div class="col-sm-12 overflow-hidden">--}}
        {{--                        <div class="iq-main-header d-flex align-items-center justify-content-between">--}}
        {{--                            <h4 class="main-title">Latest Movies</h4>--}}
        {{--                            <a class="iq-view-all" href="movie-category.html">View All</a>--}}
        {{--                        </div>--}}
        {{--                        <div class="favorites-contens">--}}
        {{--                            <ul class="favorites-slider list-inline  row p-0 mb-0">--}}
        {{--                                <li class="slide-item">--}}

        {{--                                    <div class="block-images position-relative">--}}
        {{--                                        <div class="img-box">--}}
        {{--                                            <img src="/temp/frontend/images/favorite/01.jpg" class="img-fluid" alt="">--}}
        {{--                                        </div>--}}
        {{--                                        <div class="block-description">--}}
        {{--                                            <h6 class="iq-title"><a href="movie-details.html">Sand Dust</a></h6>--}}
        {{--                                            <div class="movie-time d-flex align-items-center my-2">--}}
        {{--                                                <div class="badge badge-secondary p-1 mr-2">13+</div>--}}
        {{--                                                <span class="text-white">2h 30m</span>--}}
        {{--                                            </div>--}}
        {{--                                            <div class="hover-buttons">--}}
        {{--                                          <span class="btn btn-hover iq-button">--}}
        {{--                                          <i class="fa fa-play mr-1" aria-hidden="true"></i>--}}
        {{--                                          Play Now--}}
        {{--                                          </span>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}

        {{--                                        <div class="block-social-info">--}}
        {{--                                            <ul class="list-inline p-0 m-0 music-play-lists">--}}
        {{--                                                <li class="share">--}}
        {{--                                                    <span><i class="ri-share-fill"></i></span>--}}
        {{--                                                    <div class="share-box">--}}
        {{--                                                        <div class="d-flex align-items-center">--}}
        {{--                                                            <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>--}}
        {{--                                                            <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>--}}
        {{--                                                            <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>--}}
        {{--                                                        </div>--}}
        {{--                                                    </div>--}}
        {{--                                                </li>--}}
        {{--                                                <li>--}}
        {{--                                                    <span><i class="ri-heart-fill"></i></span>--}}
        {{--                                                    <span class="count-box">19+</span>--}}
        {{--                                                </li>--}}
        {{--                                                <li><span><i class="ri-add-line"></i></span></li>--}}

        {{--                                            </ul>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    </a>--}}
        {{--                                </li>--}}
        {{--                                <li class="slide-item">--}}

        {{--                                    <div class="block-images position-relative">--}}
        {{--                                        <div class="img-box">--}}
        {{--                                            <img src="/temp/frontend/images/favorite/02.jpg" class="img-fluid" alt="">--}}
        {{--                                        </div>--}}
        {{--                                        <div class="block-description">--}}
        {{--                                            <h6 class="iq-title"><a href="show-details.html">Last Race</a></h6>--}}
        {{--                                            <div class="movie-time d-flex align-items-center my-2">--}}
        {{--                                                <div class="badge badge-secondary p-1 mr-2">7+</div>--}}
        {{--                                                <span class="text-white">2 Seasons</span>--}}
        {{--                                            </div>--}}
        {{--                                            <div class="hover-buttons">--}}
        {{--                                          <span class="btn btn-hover iq-button"><i class="fa fa-play mr-1" aria-hidden="true"></i>--}}
        {{--                                          Play Now--}}
        {{--                                          </span>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="block-social-info">--}}
        {{--                                            <ul class="list-inline p-0 m-0 music-play-lists">--}}
        {{--                                                <li class="share">--}}
        {{--                                                    <span><i class="ri-share-fill"></i></span>--}}
        {{--                                                    <div class="share-box">--}}
        {{--                                                        <div class="d-flex align-items-center">--}}
        {{--                                                            <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>--}}
        {{--                                                            <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>--}}
        {{--                                                            <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>--}}
        {{--                                                        </div>--}}
        {{--                                                    </div>--}}
        {{--                                                </li>--}}
        {{--                                                <li><span><i class="ri-heart-fill"></i></span>--}}
        {{--                                                    <span class="count-box">19+</span></li>--}}
        {{--                                                <li><span><i class="ri-add-line"></i></span></li>--}}
        {{--                                            </ul>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}

        {{--                                </li>--}}
        {{--                                <li class="slide-item">--}}

        {{--                                    <div class="block-images position-relative">--}}
        {{--                                        <div class="img-box">--}}
        {{--                                            <img src="/temp/frontend/images/favorite/03.jpg" class="img-fluid" alt="">--}}
        {{--                                        </div>--}}
        {{--                                        <div class="block-description">--}}
        {{--                                            <h6 class="iq-title"><a href="movie-details.html">Boop Bitty</a></h6>--}}
        {{--                                            <div class="movie-time d-flex align-items-center my-2">--}}
        {{--                                                <div class="badge badge-secondary p-1 mr-2">15+</div>--}}
        {{--                                                <span class="text-white">2h 30m</span>--}}
        {{--                                            </div>--}}
        {{--                                            <div class="hover-buttons">--}}
        {{--                                          <span class="btn btn-hover iq-button">--}}
        {{--                                          <i class="fa fa-play mr-1" aria-hidden="true"></i>--}}
        {{--                                          Play Now--}}
        {{--                                          </span>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="block-social-info">--}}
        {{--                                            <ul class="list-inline p-0 m-0 music-play-lists">--}}
        {{--                                                <li class="share">--}}
        {{--                                                    <span><i class="ri-share-fill"></i></span>--}}
        {{--                                                    <div class="share-box">--}}
        {{--                                                        <div class="d-flex align-items-center">--}}
        {{--                                                            <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>--}}
        {{--                                                            <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>--}}
        {{--                                                            <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>--}}
        {{--                                                        </div>--}}
        {{--                                                    </div>--}}
        {{--                                                </li>--}}
        {{--                                                <li><span><i class="ri-heart-fill"></i></span>--}}
        {{--                                                    <span class="count-box">19+</span></li>--}}
        {{--                                                <li><span><i class="ri-add-line"></i></span></li>--}}
        {{--                                            </ul>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}

        {{--                                </li>--}}
        {{--                                <li class="slide-item">--}}

        {{--                                    <div class="block-images position-relative">--}}
        {{--                                        <div class="img-box">--}}
        {{--                                            <img src="/temp/frontend/images/favorite/04.png" class="img-fluid" alt="">--}}
        {{--                                        </div>--}}
        {{--                                        <div class="block-description">--}}
        {{--                                            <h6 class="iq-title"><a href="show-details.html">Dino Land</a></h6>--}}
        {{--                                            <div class="movie-time d-flex align-items-center my-2">--}}
        {{--                                                <div class="badge badge-secondary p-1 mr-2">18+</div>--}}
        {{--                                                <span class="text-white">3 Seasons</span>--}}
        {{--                                            </div>--}}
        {{--                                            <div class="hover-buttons">--}}
        {{--                                          <span class="btn btn-hover iq-button">--}}
        {{--                                          <i class="fa fa-play mr-1" aria-hidden="true"></i>--}}
        {{--                                          Play Now--}}
        {{--                                          </span>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="block-social-info">--}}
        {{--                                            <ul class="list-inline p-0 m-0 music-play-lists">--}}
        {{--                                                <li class="share">--}}
        {{--                                                    <span><i class="ri-share-fill"></i></span>--}}
        {{--                                                    <div class="share-box">--}}
        {{--                                                        <div class="d-flex align-items-center">--}}
        {{--                                                            <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>--}}
        {{--                                                            <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>--}}
        {{--                                                            <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>--}}
        {{--                                                        </div>--}}
        {{--                                                    </div>--}}
        {{--                                                </li>--}}
        {{--                                                <li><span><i class="ri-heart-fill"></i></span>--}}
        {{--                                                    <span class="count-box">19+</span></li>--}}
        {{--                                                <li><span><i class="ri-add-line"></i></span></li>--}}
        {{--                                            </ul>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}

        {{--                                </li>--}}
        {{--                                <li class="slide-item">--}}

        {{--                                    <div class="block-images position-relative">--}}
        {{--                                        <div class="img-box">--}}
        {{--                                            <img src="/temp/frontend/images/favorite/05.jpg" class="img-fluid" alt="">--}}
        {{--                                        </div>--}}
        {{--                                        <div class="block-description">--}}
        {{--                                            <h6 class="iq-title"><a href="show-details.html">Jaction action</a></h6>--}}
        {{--                                            <div class="movie-time d-flex align-items-center my-2">--}}
        {{--                                                <div class="badge badge-secondary p-1 mr-2">10+</div>--}}
        {{--                                                <span class="text-white">1 Season</span>--}}
        {{--                                            </div>--}}
        {{--                                            <div class="hover-buttons">--}}
        {{--                                          <span class="btn btn-hover iq-button">--}}
        {{--                                          <i class="fa fa-play mr-1" aria-hidden="true"></i>--}}
        {{--                                          Play Now--}}
        {{--                                          </span>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="block-social-info">--}}
        {{--                                            <ul class="list-inline p-0 m-0 music-play-lists">--}}
        {{--                                                <li class="share">--}}
        {{--                                                    <span><i class="ri-share-fill"></i></span>--}}
        {{--                                                    <div class="share-box">--}}
        {{--                                                        <div class="d-flex align-items-center">--}}
        {{--                                                            <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>--}}
        {{--                                                            <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>--}}
        {{--                                                            <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>--}}
        {{--                                                        </div>--}}
        {{--                                                    </div>--}}
        {{--                                                </li>--}}
        {{--                                                <li><span><i class="ri-heart-fill"></i></span>--}}
        {{--                                                    <span class="count-box">19+</span></li>--}}
        {{--                                                <li><span><i class="ri-add-line"></i></span></li>--}}
        {{--                                            </ul>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}

        {{--                                </li>--}}
        {{--                            </ul>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </section>--}}
        {{--        <section id="iq-upcoming-movie">--}}
        {{--            <div class="container-fluid">--}}
        {{--                <div class="row">--}}
        {{--                    <div class="col-sm-12 overflow-hidden">--}}
        {{--                        <div class="iq-main-header d-flex align-items-center justify-content-between">--}}
        {{--                            <h4 class="main-title">Upcoming Movies</h4>--}}
        {{--                            <a class="iq-view-all" href="movie-category.html">View All</a>--}}
        {{--                        </div>--}}
        {{--                        <div class="upcoming-contens">--}}
        {{--                            <ul class="favorites-slider list-inline row p-0 mb-0">--}}
        {{--                                <li class="slide-item">--}}

        {{--                                    <div class="block-images position-relative">--}}
        {{--                                        <div class="img-box">--}}
        {{--                                            <img src="/temp/frontend/images/upcoming/01.jpg" class="img-fluid" alt="">--}}
        {{--                                        </div>--}}
        {{--                                        <div class="block-description">--}}
        {{--                                            <h6 class="iq-title"><a href="movie-details.html">The Last Breath</a></h6>--}}
        {{--                                            <div class="movie-time d-flex align-items-center my-2">--}}
        {{--                                                <div class="badge badge-secondary p-1 mr-2">5+</div>--}}
        {{--                                                <span class="text-white">2h 30m</span>--}}
        {{--                                            </div>--}}
        {{--                                            <div class="hover-buttons">--}}
        {{--                                          <span class="btn btn-hover iq-button"><i class="fa fa-play mr-1" aria-hidden="true"></i>--}}
        {{--                                          Play Now--}}
        {{--                                          </span>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="block-social-info">--}}
        {{--                                            <ul class="list-inline p-0 m-0 music-play-lists">--}}
        {{--                                                <li class="share">--}}
        {{--                                                    <span><i class="ri-share-fill"></i></span>--}}
        {{--                                                    <div class="share-box">--}}
        {{--                                                        <div class="d-flex align-items-center">--}}
        {{--                                                            <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>--}}
        {{--                                                            <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>--}}
        {{--                                                            <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>--}}
        {{--                                                        </div>--}}
        {{--                                                    </div>--}}
        {{--                                                </li>--}}
        {{--                                                <li><span><i class="ri-heart-fill"></i></span>--}}
        {{--                                                    <span class="count-box">19+</span></li>--}}
        {{--                                                <li><span><i class="ri-add-line"></i></span></li>--}}
        {{--                                            </ul>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}

        {{--                                </li>--}}
        {{--                                <li class="slide-item">--}}

        {{--                                    <div class="block-images position-relative">--}}
        {{--                                        <div class="img-box">--}}
        {{--                                            <img src="/temp/frontend/images/upcoming/02.jpg" class="img-fluid" alt="">--}}
        {{--                                        </div>--}}
        {{--                                        <div class="block-description">--}}
        {{--                                            <h6 class="iq-title"><a href="movie-details.html">Shadow</a></h6>--}}
        {{--                                            <div class="movie-time d-flex align-items-center my-2">--}}
        {{--                                                <div class="badge badge-secondary p-1 mr-2">22+</div>--}}
        {{--                                                <span class="text-white">2h 15m</span>--}}
        {{--                                            </div>--}}
        {{--                                            <div class="hover-buttons">--}}
        {{--                                          <span class="btn btn-hover iq-button">--}}
        {{--                                          <i class="fa fa-play mr-1" aria-hidden="true"></i>--}}
        {{--                                          Play Now--}}
        {{--                                          </span>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="block-social-info">--}}
        {{--                                            <ul class="list-inline p-0 m-0 music-play-lists">--}}
        {{--                                                <li class="share">--}}
        {{--                                                    <span><i class="ri-share-fill"></i></span>--}}
        {{--                                                    <div class="share-box">--}}
        {{--                                                        <div class="d-flex align-items-center">--}}
        {{--                                                            <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>--}}
        {{--                                                            <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>--}}
        {{--                                                            <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>--}}
        {{--                                                        </div>--}}
        {{--                                                    </div>--}}
        {{--                                                </li>--}}
        {{--                                                <li><span><i class="ri-heart-fill"></i></span>--}}
        {{--                                                    <span class="count-box">19+</span></li>--}}
        {{--                                                <li><span><i class="ri-add-line"></i></span></li>--}}
        {{--                                            </ul>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}

        {{--                                </li>--}}
        {{--                                <li class="slide-item">--}}

        {{--                                    <div class="block-images position-relative">--}}
        {{--                                        <div class="img-box">--}}
        {{--                                            <img src="/temp/frontend/images/upcoming/03.jpg" class="img-fluid" alt="">--}}
        {{--                                        </div>--}}
        {{--                                        <div class="block-description">--}}
        {{--                                            <h6 class="iq-title"> <a href="movie-details.html">Another Danger</a></h6>--}}
        {{--                                            <div class="movie-time d-flex align-items-center my-2">--}}
        {{--                                                <div class="badge badge-secondary p-1 mr-2">25+</div>--}}
        {{--                                                <span class="text-white">3h</span>--}}
        {{--                                            </div>--}}
        {{--                                            <div class="hover-buttons">--}}
        {{--                                          <span class="btn btn-hover iq-button">--}}
        {{--                                          <i class="fa fa-play mr-1" aria-hidden="true"></i>--}}
        {{--                                          Play Now--}}
        {{--                                          </span>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="block-social-info">--}}
        {{--                                            <ul class="list-inline p-0 m-0 music-play-lists">--}}
        {{--                                                <li class="share">--}}
        {{--                                                    <span><i class="ri-share-fill"></i></span>--}}
        {{--                                                    <div class="share-box">--}}
        {{--                                                        <div class="d-flex align-items-center">--}}
        {{--                                                            <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>--}}
        {{--                                                            <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>--}}
        {{--                                                            <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>--}}
        {{--                                                        </div>--}}
        {{--                                                    </div>--}}
        {{--                                                </li>--}}
        {{--                                                <li><span><i class="ri-heart-fill"></i></span>--}}
        {{--                                                    <span class="count-box">19+</span></li>--}}
        {{--                                                <li><span><i class="ri-add-line"></i></span></li>--}}
        {{--                                            </ul>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}

        {{--                                </li>--}}
        {{--                                <li class="slide-item">--}}

        {{--                                    <div class="block-images position-relative">--}}
        {{--                                        <div class="img-box">--}}
        {{--                                            <img src="/temp/frontend/images/upcoming/04.jpg" class="img-fluid" alt="">--}}
        {{--                                        </div>--}}
        {{--                                        <div class="block-description">--}}
        {{--                                            <h6 class="iq-title"><a href="movie-details.html">1980</a></h6>--}}
        {{--                                            <div class="movie-time d-flex align-items-center my-2">--}}
        {{--                                                <div class="badge badge-secondary p-1 mr-2">11+</div>--}}
        {{--                                                <span class="text-white">2h 45m</span>--}}
        {{--                                            </div>--}}
        {{--                                            <div class="hover-buttons">--}}
        {{--                                          <span class="btn btn-hover iq-button">--}}
        {{--                                          <i class="fa fa-play mr-1" aria-hidden="true"></i>--}}
        {{--                                          Play Now--}}
        {{--                                          </span>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="block-social-info">--}}
        {{--                                            <ul class="list-inline p-0 m-0 music-play-lists">--}}
        {{--                                                <li class="share">--}}
        {{--                                                    <span><i class="ri-share-fill"></i></span>--}}
        {{--                                                    <div class="share-box">--}}
        {{--                                                        <div class="d-flex align-items-center">--}}
        {{--                                                            <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>--}}
        {{--                                                            <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>--}}
        {{--                                                            <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>--}}
        {{--                                                        </div>--}}
        {{--                                                    </div>--}}
        {{--                                                </li>--}}
        {{--                                                <li><span><i class="ri-heart-fill"></i></span>--}}
        {{--                                                    <span class="count-box">19+</span></li>--}}
        {{--                                                <li><span><i class="ri-add-line"></i></span></li>--}}
        {{--                                            </ul>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}

        {{--                                </li>--}}
        {{--                                <li class="slide-item">--}}

        {{--                                    <div class="block-images position-relative">--}}
        {{--                                        <div class="img-box">--}}
        {{--                                            <img src="/temp/frontend/images/upcoming/05.jpg" class="img-fluid" alt="">--}}
        {{--                                        </div>--}}
        {{--                                        <div class="block-description">--}}
        {{--                                            <h6 class="iq-title"><a href="movie-details.html">Vugotronic</a></h6>--}}
        {{--                                            <div class="movie-time d-flex align-items-center my-2">--}}
        {{--                                                <div class="badge badge-secondary p-1 mr-2">9+</div>--}}
        {{--                                                <span class="text-white">2h 30m</span>--}}
        {{--                                            </div>--}}
        {{--                                            <div class="hover-buttons">--}}
        {{--                                          <span class="btn btn-hover iq-button">--}}
        {{--                                          <i class="fa fa-play mr-1" aria-hidden="true"></i>--}}
        {{--                                          Play Now--}}
        {{--                                          </span>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="block-social-info">--}}
        {{--                                            <ul class="list-inline p-0 m-0 music-play-lists">--}}
        {{--                                                <li class="share">--}}
        {{--                                                    <span><i class="ri-share-fill"></i></span>--}}
        {{--                                                    <div class="share-box">--}}
        {{--                                                        <div class="d-flex align-items-center">--}}
        {{--                                                            <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>--}}
        {{--                                                            <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>--}}
        {{--                                                            <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>--}}
        {{--                                                        </div>--}}
        {{--                                                    </div>--}}
        {{--                                                </li>--}}
        {{--                                                <li><span><i class="ri-heart-fill"></i></span>--}}
        {{--                                                    <span class="count-box">19+</span></li>--}}
        {{--                                                <li><span><i class="ri-add-line"></i></span></li>--}}
        {{--                                            </ul>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}

        {{--                                </li>--}}
        {{--                            </ul>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </section>--}}
        <section id="iq-topten">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <!-- <h4 class="main-title iq-title topten-title-sm">Top 10 in India</h4> -->
                        </div>
                        <div class="topten-contens">
                            <h4 class="main-title iq-title topten-title">Top 10
                            <ul id="top-ten-slider" class="list-inline p-0 m-0  d-flex align-items-center">
                                @foreach($top10_videos_de_categoria as $top10)
                                    <li class="slick-bg">
                                        <a href="{{route('video.show',$top10)}}">
                                            <img src="{{\Illuminate\Support\Facades\Storage::url($top10)}}"
                                                 class="img-fluid w-100" alt="">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="vertical_s">
                                <ul id="top-ten-slider-nav" class="list-inline p-0 m-0  d-flex align-items-center">
                                    @foreach($top10_videos_de_categoria as $top10)
                                        <li>
                                            <div class="block-images position-relative">
                                                <a href="{{route('video.show',$top10)}}">
                                                    <img
                                                        src="{{\Illuminate\Support\Facades\Storage::url($top10->img_thumb)}}"
                                                        class="img-fluid w-100" alt="">
                                                </a>
                                                <div class="block-description">
                                                    <h5>{{$top10->titulo}}</h5>
                                                    <div class="movie-time d-flex align-items-center my-2">
                                                        <span
                                                            class="text-white">{{gmdate('H:i:s',$top10->duracao)}}</span>
                                                    </div>
                                                    <div class="hover-buttons">
                                                        <a href="{{route('video.show',$top10)}}" class="btn btn-hover" tabindex="0">
                                                            <i class="fa fa-play mr-1" aria-hidden="true"></i> Assistir
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="iq-suggestede" class="s-margin">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title">Videos recentes</h4>
                            <a class="iq-view-all" href="{{route('videos')}}">Ver todos</a>
                        </div>
                        <div class="suggestede-contens">
                            <ul class="list-inline favorites-slider row p-0 mb-0">
                                @foreach(videos_recentes() as $video)
                                    @include('components.video_card')
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @php
            $video_banner = video_mais_visualizado();
            if($video_banner){
                $video_banner = \App\Models\Video::find($video_banner);
            }

        @endphp
        @if($video_banner)
        <section id="parallex" class="parallax-window" style="background: url({{\Illuminate\Support\Facades\Storage::url($video_banner->img_thumb)}})center center; height: 100%; padding: 100px 0; position: relative; background-size: cover; background-attachment: fixed;">
            <div class="container-fluid h-100">
               <div class="row align-items-center justify-content-center h-100 parallaxt-details">
                  <div class="col-lg-4 r-mb-23">
                     <div class="text-left" style="padding-left:45px;">
                     <h1 class="slider-text big-title title text-uppercase fadeInLeft animated" data-animation-in="fadeInLeft" data-delay-in="0.6" style="opacity: 1; animation-delay: 0.6s; font-size:22px!important; margin-bottom: 30px;">
                         {{$video_banner->titulo}}</h1>
                        <p id="descricao-parallex" style="white-space: pre-wrap;">{{$video_banner->descricao}}</p>
                        <div class="parallax-buttons">
                           <a href="{{route('video.show',$video_banner->id)}}" class="btn btn-hover">Assistir Agora</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-8">
                     <div class="parallax-img">
                        <a>
                            <video class="video d-block" controls controlsList="nodownload" style="width: 85%;" preload="none" poster="{{\Illuminate\Support\Facades\Storage::url($video_banner->img_thumb)}}">
                                    <source src="{{\Illuminate\Support\Facades\Storage::url($video_banner->video)}}"
                                            type="video/mp4">
                            </video>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
        @endif
        <section id="iq-tvthrillers" class="s-margin">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title">Recomendado para você</h4>
                            <a class="iq-view-all" href="{{route('videos')}}">Ver todos</a>
                        </div>
                        <div class="tvthrillers-contens">
                            <ul class="favorites-slider list-inline row p-0 mb-0">
                                @foreach(\App\Models\Video::inRandomOrder()->limit(5)->get() as $video)
                                    @include('components.video_card')
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

