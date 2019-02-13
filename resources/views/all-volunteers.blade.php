@extends('layouts.skeleton')
@section('main-content')
    <div class="page-container">

        <div class="page-content">
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header">
            <div class="page-header-content">
                <div class="page-title">
                    <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Search</span> - جستجو داوطلبین</h4>

                    <ul class="breadcrumb position-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="search_users.html">Search</a></li>
                        <li class="active">User results</li>
                    </ul>
                    <a class="heading-elements-toggle"><i class="icon-more"></i></a></div>

                <div class="heading-elements">
                    <div class="heading-btn-group">
                        <a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                        <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                        <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

            <!-- Search field -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Website search results<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    <form action="#" class="main-search">
                        <div class="input-group content-group">
                            <div class="has-feedback has-feedback-left">
                                <input type="text" class="form-control input-xlg" placeholder="نام داوطب را وارد کنید">
                                <div class="form-control-feedback">
                                    <i class="icon-search4 text-muted text-size-base"></i>
                                </div>
                            </div>

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-primary btn-xlg">Search</button>
                            </div>
                        </div>

                        <div class="row search-option-buttons">
                            <div class="col-sm-6">
                                <ul class="list-inline list-inline-condensed no-margin-bottom">
                                    <li class="dropdown">
                                        <a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-stack2 position-left"></i> All categories <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a href="#"><i class="icon-question7"></i> Getting started</a></li>
                                            <li><a href="#"><i class="icon-accessibility"></i> Registration</a></li>
                                            <li><a href="#"><i class="icon-reading"></i> General info</a></li>
                                            <li><a href="#"><i class="icon-gear"></i> Your settings</a></li>
                                            <li><a href="#"><i class="icon-graduation"></i> Copyrights</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#"><i class="icon-mail-read"></i> Contacting authors</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="btn btn-link"><i class="icon-reload-alt position-left"></i> Refine your search</a></li>
                                </ul>
                            </div>

                            <div class="col-sm-6 text-right">
                                <ul class="list-inline no-margin-bottom">
                                    <li><a href="#" class="btn btn-link"><i class="icon-make-group position-left"></i> Browse website</a></li>
                                    <li><a href="#" class="btn btn-link"><i class="icon-menu7 position-left"></i> Advanced search</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /search field -->


            <!-- Tabs -->
            <ul class="nav nav-lg nav-tabs nav-tabs-bottom search-results-tabs">
                <li><a href="search_basic.html"><i class="icon-display4 position-left"></i> Website</a></li>
                <li class="active"><a href="search_users.html"><i class="icon-people position-left"></i> Users</a></li>
                <li><a href="search_images.html"><i class="icon-image2 position-left"></i> Images</a></li>
                <li><a href="search_videos.html"><i class="icon-file-play position-left"></i> Videos</a></li>
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i> <span class="visible-xs-inline-block position-right">Options</span> <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more line</a></li>
                    </ul>
                </li>
            </ul>
            <!-- /tabs -->


            <!-- Search results -->
            <div class="content-group">
                <p class="text-muted text-size-small content-group">About 827,000 results (0.34 seconds)</p>

                <div class="search-results-list">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="thumbnail">
                                <div class="thumb thumb-rounded">
                                    <img src="{{asset('images/placeholder.jpg')}}" alt="">
                                    <div class="caption-overflow">
												<span>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus2"></i></a>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
												</span>
                                    </div>
                                </div>

                                <div class="caption text-center">
                                    <h6 class="text-semibold no-margin">James Alexander <small class="display-block">Lead developer</small></h6>
                                    <ul class="icons-list mt-15">
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Google Drive"><i class="icon-google-drive"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Twitter"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Github"><i class="icon-github"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="thumbnail">
                                <div class="thumb thumb-rounded">
                                    <img src="{{asset('images/placeholder.jpg')}}" alt="">
                                    <div class="caption-overflow">
												<span>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus2"></i></a>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
												</span>
                                    </div>
                                </div>

                                <div class="caption text-center">
                                    <h6 class="text-semibold no-margin">Nathan Jacobson <small class="display-block">Lead UX designer</small></h6>
                                    <ul class="icons-list mt-15">
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Google Drive"><i class="icon-google-drive"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Twitter"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Github"><i class="icon-github"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="thumbnail">
                                <div class="thumb thumb-rounded">
                                    <img src="{{asset('images/placeholder.jpg')}}" alt="">
                                    <div class="caption-overflow">
												<span>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus2"></i></a>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
												</span>
                                    </div>
                                </div>

                                <div class="caption text-center">
                                    <h6 class="text-semibold no-margin">Margo Baker <small class="display-block">Sales manager</small></h6>
                                    <ul class="icons-list mt-15">
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Google Drive"><i class="icon-google-drive"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Twitter"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Github"><i class="icon-github"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="thumbnail">
                                <div class="thumb thumb-rounded">
                                    <img src="{{asset('images/placeholder.jpg')}}" alt="">
                                    <div class="caption-overflow">
												<span>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus2"></i></a>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
												</span>
                                    </div>
                                </div>

                                <div class="caption text-center">
                                    <h6 class="text-semibold no-margin">Barbara Walden <small class="display-block">SEO specialist</small></h6>
                                    <ul class="icons-list mt-15">
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Google Drive"><i class="icon-google-drive"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Twitter"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Github"><i class="icon-github"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="thumbnail">
                                <div class="thumb thumb-rounded">
                                    <img src="{{asset('images/placeholder.jpg')}}" alt="">
                                    <div class="caption-overflow">
												<span>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus2"></i></a>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
												</span>
                                    </div>
                                </div>

                                <div class="caption text-center">
                                    <h6 class="text-semibold no-margin">Hanna Dorman <small class="display-block">UX/UI designer</small></h6>
                                    <ul class="icons-list mt-15">
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Google Drive"><i class="icon-google-drive"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Twitter"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Github"><i class="icon-github"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="thumbnail">
                                <div class="thumb thumb-rounded">
                                    <img src="{{asset('images/placeholder.jpg')}}" alt="">
                                    <div class="caption-overflow">
												<span>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus2"></i></a>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
												</span>
                                    </div>
                                </div>

                                <div class="caption text-center">
                                    <h6 class="text-semibold no-margin">Benjamin Loretti <small class="display-block">Network engineer</small></h6>
                                    <ul class="icons-list mt-15">
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Google Drive"><i class="icon-google-drive"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Twitter"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Github"><i class="icon-github"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="thumbnail">
                                <div class="thumb thumb-rounded">
                                    <img src="{{asset('images/placeholder.jpg')}}" alt="">
                                    <div class="caption-overflow">
												<span>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus2"></i></a>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
												</span>
                                    </div>
                                </div>

                                <div class="caption text-center">
                                    <h6 class="text-semibold no-margin">Vanessa Aurelius <small class="display-block">Front end guru</small></h6>
                                    <ul class="icons-list mt-15">
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Google Drive"><i class="icon-google-drive"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Twitter"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Github"><i class="icon-github"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="thumbnail">
                                <div class="thumb thumb-rounded">
                                    <img src="{{asset('images/placeholder.jpg')}}" alt="">
                                    <div class="caption-overflow">
												<span>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus2"></i></a>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
												</span>
                                    </div>
                                </div>

                                <div class="caption text-center">
                                    <h6 class="text-semibold no-margin">William Brenson <small class="display-block">Chief officer</small></h6>
                                    <ul class="icons-list mt-15">
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Google Drive"><i class="icon-google-drive"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Twitter"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Github"><i class="icon-github"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="thumbnail">
                                <div class="thumb thumb-rounded">
                                    <img src="{{asset('images/placeholder.jpg')}}" alt="">
                                    <div class="caption-overflow">
												<span>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus2"></i></a>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
												</span>
                                    </div>
                                </div>

                                <div class="caption text-center">
                                    <h6 class="text-semibold no-margin">Lucy North <small class="display-block">PHP developer</small></h6>
                                    <ul class="icons-list mt-15">
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Google Drive"><i class="icon-google-drive"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Twitter"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Github"><i class="icon-github"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="thumbnail">
                                <div class="thumb thumb-rounded">
                                    <img src="{{asset('images/placeholder.jpg')}}" alt="">
                                    <div class="caption-overflow">
												<span>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus2"></i></a>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
												</span>
                                    </div>
                                </div>

                                <div class="caption text-center">
                                    <h6 class="text-semibold no-margin">Vicky Barna <small class="display-block">UI designer</small></h6>
                                    <ul class="icons-list mt-15">
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Google Drive"><i class="icon-google-drive"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Twitter"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Github"><i class="icon-github"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="thumbnail">
                                <div class="thumb thumb-rounded">
                                    <img src="{{asset('images/placeholder.jpg')}}" alt="">
                                    <div class="caption-overflow">
												<span>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus2"></i></a>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
												</span>
                                    </div>
                                </div>

                                <div class="caption text-center">
                                    <h6 class="text-semibold no-margin">Hugo Bills <small class="display-block">Sales manager</small></h6>
                                    <ul class="icons-list mt-15">
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Google Drive"><i class="icon-google-drive"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Twitter"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Github"><i class="icon-github"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="thumbnail">
                                <div class="thumb thumb-rounded">
                                    <img src="{{asset('images/placeholder.jpg')}}" alt="">
                                    <div class="caption-overflow">
												<span>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus2"></i></a>
													<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-link2"></i></a>
												</span>
                                    </div>
                                </div>

                                <div class="caption text-center">
                                    <h6 class="text-semibold no-margin">Tony Gurrano <small class="display-block">CEO and founder</small></h6>
                                    <ul class="icons-list mt-15">
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Google Drive"><i class="icon-google-drive"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Twitter"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Github"><i class="icon-github"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>




            <!-- Pagination -->
            <div class="text-center content-group pt-20">
                <ul class="pagination">
                    <li class="disabled"><a href="#">→</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><span>...</span></li>
                    <li><a href="#">58</a></li>
                    <li><a href="#">59</a></li>
                    <li><a href="#">←</a></li>
                </ul>
            </div>
            <!-- /pagination -->


            <!-- Footer -->
            <div class="footer text-muted">
                © 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
            </div>
            <!-- /footer -->

        </div>
        <!-- /content area -->

    </div>
        </div>
    </div>
    @endsection
