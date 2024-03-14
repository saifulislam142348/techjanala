@extends('layouts.master')
@section('content')
   <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Blog Grid</h2>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li class="active">Grid</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area grid-colum default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="blog-content">
                    <div class="blog-item-box">
                        <div class="row">
                            <!-- Single Item -->
                            <div class="col-lg-6 col-md-6 single-item">
                                <div class="item wow fadeInUp" data-wow-delay="500ms">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x600.png" alt="Thumb">
                                        </a>
                                        <div class="date">12 <span>Jan, 2021</span></div>
                                    </div>
                                    <div class="info">
                                        <div class="meta">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-user"></i> Mark John</a></li>
                                                <li><a href="#"><i class="fas fa-comments"></i> 15 Comments</a></li>
                                            </ul>
                                        </div>
                                        <h4>
                                            <a href="#">Lasting out end article express fortune demands own charmed</a>
                                        </h4>
                                        <p>
                                            Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the partiality unaffected. Incommode so intention.
                                        </p>
                                        <a class="btn circle btn-theme effect btn-md" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-6 col-md-6 single-item">
                                <div class="item wow fadeInUp" data-wow-delay="600ms">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x600.png" alt="Thumb">
                                        </a>
                                        <div class="date">16 <span>Feb, 2021</span></div>
                                    </div>
                                    <div class="info">
                                        <div class="meta">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-user"></i> Bobes Paul</a></li>
                                                <li><a href="#"><i class="fas fa-comments"></i> 35 Comments</a></li>
                                            </ul>
                                        </div>
                                        <h4>
                                            <a href="#">Surprise steepest recurred landlord mr wandered amounted of.</a>
                                        </h4>
                                        <p>
                                            Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the partiality unaffected. Incommode so intention.
                                        </p>
                                        <a class="btn circle btn-theme effect btn-md" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-6 col-md-6 single-item">
                                <div class="item wow fadeInUp" data-wow-delay="700ms">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x600.png" alt="Thumb">
                                        </a>
                                        <div class="date">06 <span>Apr, 2021</span></div>
                                    </div>
                                    <div class="info">
                                        <div class="meta">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-user"></i> Hense Bou</a></li>
                                                <li><a href="#"><i class="fas fa-comments"></i> 46 Comments</a></li>
                                            </ul>
                                        </div>
                                        <h4>
                                            <a href="#">Old insipidity motionless continuing law shy partiality.</a>
                                        </h4>
                                        <p>
                                            Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the partiality unaffected. Incommode so intention.
                                        </p>
                                        <a class="btn circle btn-theme effect btn-md" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-6 col-md-6 single-item">
                                <div class="item wow fadeInUp" data-wow-delay="800ms">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x600.png" alt="Thumb">
                                        </a>
                                        <div class="date">27 <span>Jul, 2021</span></div>
                                    </div>
                                    <div class="info">
                                        <div class="meta">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-user"></i> Spark Loe</a></li>
                                                <li><a href="#"><i class="fas fa-comments"></i> 27 Comments</a></li>
                                            </ul>
                                        </div>
                                        <h4>
                                            <a href="#">Inquietude simplicity terminated she compliment remarkably</a>
                                        </h4>
                                        <p>
                                            Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the partiality unaffected. Incommode so intention.
                                        </p>
                                        <a class="btn circle btn-theme effect btn-md" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>

                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-md-12 pagi-area text-center">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
