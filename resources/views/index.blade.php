@extends('layouts.skeleton')
@push('body-script')
    <script>
        TweenMax.set(".play-circle-01", {
            rotation: 90,
            transformOrigin: "center"
        });

        TweenMax.set(".play-circle-02", {
            rotation: -90,
            transformOrigin: "center"
        });

        TweenMax.set(".play-perspective", {
            xPercent: 6.5,
            scale: .175,
            transformOrigin: "center",
            perspective: 1
        });

        TweenMax.set(".play-video", {
            visibility: "hidden",
            opacity: 0,
        });

        TweenMax.set(".play-triangle", {
            transformOrigin: "left center",
            transformStyle: "preserve-3d",
            rotationY: 10,
            scaleX: 2
        });

        const rotateTL = new TimelineMax({paused: true})
            .to(".play-circle-01", .7, {
                opacity: .1,
                rotation: '+=360',
                strokeDasharray: "456 456",
                ease: Power1.easeInOut
            }, 0)
            .to(".play-circle-02", .7, {
                opacity: .1,
                rotation: '-=360',
                strokeDasharray: "411 411",
                ease: Power1.easeInOut
            }, 0);

        const openTL = new TimelineMax({paused: true})
            .to(".play-backdrop", 1, {
                opacity: .95,
                visibility: "visible",
                ease: Power2.easeInOut
            }, 0)
            .to(".play-close", 1, {
                opacity: 1,
                ease: Power2.easeInOut
            }, 0)
            .to(".play-perspective", 1, {
                xPercent: 0,
                scale: 1,
                ease: Power2.easeInOut
            }, 0)
            .to(".play-triangle", 1, {
                scaleX: 1,
                ease: ExpoScaleEase.config(2, 1, Power2.easeInOut)
            }, 0)
            .to(".play-triangle", 1, {
                rotationY: 0,
                ease: ExpoScaleEase.config(10, .01, Power2.easeInOut)
            }, 0)
            .to(".play-video", 1, {
                visibility: "visible",
                opacity: 1
            }, .5);


        const button = document.querySelector(".play-button");
        const backdrop = document.querySelector(".play-backdrop");
        const close = document.querySelector(".play-close");

        button.addEventListener("mouseover", () => rotateTL.play());
        button.addEventListener("mouseleave", () => rotateTL.reverse());
        button.addEventListener("click", () => openTL.play());
        backdrop.addEventListener("click", () => openTL.reverse());
        close.addEventListener("click", e => {
            e.stopPropagation();
            openTL.reverse()
        });


    </script>
@endpush
@section('main-content')
    <!-- Page container -->
    <!-- /container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">
            <div class="content-wrapper ">
                <div class="col-video">
                    <div class="play-backdrop"></div>
                    <div class="play-button">
                        <svg class="play-circles" viewBox="0 0 152 152">
                            <circle class="play-circle-01" fill="none" stroke="#fff" stroke-width="3"
                                    stroke-dasharray="343 343" cx="76" cy="76" r="72.7"/>
                            <circle class="play-circle-02" fill="none" stroke="#fff" stroke-width="3"
                                    stroke-dasharray="309 309" cx="76" cy="76" r="65.5"/>
                        </svg>
                        <div class="play-perspective">
                            <button class="play-close"></button>
                            <div class="play-triangle">
                                <div class="play-video">
                                    <iframe width="600" height="400" src="" frameborder="0"
                                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--header==>اخرین پروژه ها--}}
                <div>
                    <!-- Page header -->
                    {{--<div class="page-header page-header-default">--}}
                    <div class="container">
                        <div class="page-title">
                            <hr class="style15">
                        </div>
                    </div>

                </div>
                {{--header==>اخرین پروژه ها--}}
                {{--کروسال برای آخرین پروژه ها--}}
                <div class="ht">
                    <div class="bd">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                @foreach($latestProjects as $project)
                                    <div class="swiper-slide">
                                        <div class="panel panel-flat blog-horizontal blog-horizontal-2">
                                            <div class="panel-body">
                                                <div class="thumb">
                                                    <a href="#course_preview1" data-toggle="modal">
                                                        @if(file_exists(public_path('images/projects/'.$project->picture)))
                                                            <img src="{{asset('images/projects/'.$project->picture)}}"
                                                                 class="img-responsive img-rounded ss">
                                                            <span class="zoom-image"><i class="icon-play3"></i></span>

                                                        @else
                                                            <img src="{{asset('images/placeholder.jpg')}}"
                                                                 class="img-responsive img-rounded ss">
                                                            <span class="zoom-image"><i class="icon-play3"></i></span>
                                                        @endif
                                                    </a>
                                                </div>

                                                <div class="blog-preview">
                                                    <div
                                                        class="content-group-sm media blog-title stack-media-on-mobile text-left">
                                                        <div class="media-body">
                                                            <h5 class="text-semibold no-margin"><a href="#"
                                                                                                   class="text-default">{{$project->title}}</a>
                                                            </h5>

                                                            <ul class="list-inline list-inline-separate no-margin text-muted">
                                                                <li>توسط <a href="#">{{$project->supporter}}</a></li>
                                                                {{--<li>Nov 1st, 2016</li>--}}
                                                            </ul>
                                                        </div>

                                                        <h5 class="text-success media-right no-margin-bottom text-semibold">
                                                            {{$project->money}} </h5>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="panel-footer panel-footer-condensed"><a
                                                    class="heading-elements-toggle"><i class="icon-more"></i></a><a
                                                    class="heading-elements-toggle"><i class="icon-more"></i></a>
                                                <div class="heading-elements">
                                                    <ul class="list-inline list-inline-separate heading-text">
                                                        @php
                                                            $persianDate=Morilog\Jalali\CalendarUtils::strftime('d-m-Y', strtotime($project->runDate));
                                                        @endphp
                                                        <li><i class="icon-alarm position-left"></i>تاریخ
                                                            شروع:{{$persianDate}}
                                                        </li>
                                                        <li>
                                                            <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                            <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                            <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                            <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                            <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                            <span class="text-muted position-right">(49)</span>
                                                        </li>
                                                    </ul>

                                                    <a href="{{route('all-project-more-info',['id'=>$project->id])}}"
                                                       class="heading-text pull-right" data-toggle="modal">جزئیات
                                                        بیشتر <i class="icon-arrow-left13 position-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <!-- Add Pagination -->
                        {{--<div class="swiper-pagination"></div>--}}
                        <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
                {{--کروسال برای آخرین پروژه ها--}}

                <br>
                <div class="text-center">
                    <a href="{{url('/all-projects')}}" type="button" class="btn btn-primary btn-xlg"
                       style="font-size: large">همه پروژه ها</a>
                </div>
                <br>

                <div class="container">
                    <div class="page-title">
                        <hr class="style14">
                    </div>
                </div>

            </div>
            <!-- /page content -->

        </div>
    </div>
    <div class="container ">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach($elitProjects as $project)
                    @if($loop->first)
                        <div class="item active">
                            @if(file_exists(public_path('images/projects/'.$project->picture)))
                                <img src="{{asset(public_path('images/projects/'.$project->picture))}}">

                            @else
                                <img src="http://placehold.it/760x400/cccccc/ffffff">
                            @endif
                            {{--<img src="http://placehold.it/760x400/cccccc/ffffff">--}}
                            <div class="carousel-caption">
                                <h4>
                                    <a href="{{route('all-project-more-info',['id'=>$project->id])}}">{{$project->title}}</a>
                                </h4>
                                <p>{{$project->description}} <a class="btn btn-lg btn-primary"
                                                                href="{{route('all-project-more-info',['id'=>$project->id])}}"
                                                                target="_blank">جزئیات بیشتر</a>
                                </p>
                            </div>
                        </div><!-- End Item -->
                    @else
                        <div class="item">
                            @if(file_exists(public_path('images/projects/'.$project->picture)))
                                <img src="{{asset(public_path('images/projects/'.$project->picture))}}">

                            @else
                                <img src="http://placehold.it/760x400/cccccc/ffffff">
                            @endif
                            <div class="carousel-caption">
                                <h4>
                                    <a href="{{route('all-project-more-info',['id'=>$project->id])}}">{{$project->title}}</a>
                                </h4>
                                <p>{{$project->description}} <a class="btn btn-lg btn-primary"
                                                                href="{{route('all-project-more-info',['id'=>$project->id])}}"
                                                                target="_blank">جزئیات بیشتر</a>
                                </p>
                            </div>
                        </div><!-- End Item -->
                    @endif
                @endforeach


            </div><!-- End Carousel Inner -->


            <ul class="list-group col-sm-4">
                @foreach($elitProjects as $project)
                    @if($loop->first)
                        <li data-target="#myCarousel" data-slide-to="{{$loop->index}}" class="list-group-item active">
                            <h4>{{substr($project->summery,0,30)}}....</h4></li>
                    @else
                        <li data-target="#myCarousel" data-slide-to="{{$loop->index}}" class="list-group-item">
                            <h4>{{substr($project->summery,0,30)}}.....</h4></li>

                    @endif
                @endforeach

            </ul>

            <!-- Controls -->
            <div class="carousel-controls">
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>

        </div><!-- End Carousel -->
    </div>
    <!-- /page container -->
    <br>
    <br>
    {{--footer--}}
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 footerleft ">
                    <div class="logofooter"> Logo</div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley.</p>
                    <p><i class="fa fa-map-pin"></i> 210, Aggarwal Tower, Rohini sec 9, New Delhi -        110085, INDIA
                    </p>
                    <p><i class="fa fa-phone"></i> Phone (India) : +91 9999 878 398</p>
                    <p><i class="fa fa-envelope"></i> E-mail : info@webenlance.com</p>

                </div>
                <div class="col-md-2 col-sm-6 paddingtop-bottom">
                    <h6 class="heading7">GENERAL LINKS</h6>
                    <ul class="footer-ul">
                        <li><a href="http://kalarikendramdelhi.com"> Career</a></li>
                        <li><a href="http://kalarikendramdelhi.com"> Privacy Policy</a></li>
                        <li><a href="http://kalarikendramdelhi.com"> Terms & Conditions</a></li>
                        <li><a href="http://kalarikendramdelhi.com"> Client Gateway</a></li>
                        <li><a href="http://kalarikendramdelhi.com"> Ranking</a></li>
                        <li><a href="http://kalarikendramdelhi.com"> Case Studies</a></li>
                        <li><a href="http://kalarikendramdelhi.com"> Frequently Ask Questions</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 paddingtop-bottom">
                    <h6 class="heading7">LATEST POST</h6>
                    <div class="post">
                        <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span>
                        </p>
                        <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span>
                        </p>
                        <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 paddingtop-bottom">
                    <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline"
                         data-height="300" data-small-header="false" style="margin-bottom:15px;"
                         data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="https://www.facebook.com/facebook"><a
                                    href="https://www.facebook.com/facebook">Facebook</a></blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer start from here-->

    <div class="copyright">
        <div class="container">
            <div class="col-md-6">
                <p>© 2016 - All Rights with Webenlance</p>
            </div>
            <div class="col-md-6">
                <ul class="bottom_ul">
                    <li><a href="http://kalarikendramdelhi.com">webenlance.com</a></li>
                    <li><a href="http://kalarikendramdelhi.com">About us</a></li>
                    <li><a href="http://kalarikendramdelhi.com">Blog</a></li>
                    <li><a href="http://kalarikendramdelhi.com">Faq's</a></li>
                    <li><a href="http://kalarikendramdelhi.com">Contact us</a></li>
                    <li><a href="http://kalarikendramdelhi.com">Site Map</a></li>
                </ul>
            </div>
        </div>
    </div>
    {{--end footer--}}

@endsection
