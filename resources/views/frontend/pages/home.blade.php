@extends('frontend.layouts.master')

@section('main_content')

<section>
    <div class="block no-padding overlape">
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-featured-sec">
                        <ul class="main-slider-sec text-arrows">
                            <li class="slideHome"><img src="images/resource/mslider3.jpg" alt="" /></li>
                            <li class="slideHome"><img src="images/resource/mslider2.jpg" alt="" /></li>
                            <li class="slideHome"><img src="images/resource/mslider1.jpg" alt="" /></li>
                        </ul>
                        <div class="job-search-sec ">
                            <div class="job-search style2">
                                <h3>Find the career you deserve</h3>
                                <span>Your job search starts and ends with us.</span>
                                <div class="search-job2">	
                                    <form>
                                        <div class="row no-gape">
                                            <div class="col-lg-4 col-md-3 col-sm-4">
                                                <div class="job-field col-lg-2"></div>
                                                <div class="job-field col-md-10">
                                                    <select data-placeholder="All Category" class="chosen-city">
                                                        <option>Wedding</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-4">
                                                <div class="job-field">
                                                    <select data-placeholder="All Regions" class="chosen-city">
                                                        <option>Istanbul</option>
                                                        <option>New York</option>
                                                        <option>London</option>
                                                        <option>Russia</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-4">
                                                <div class="job-field">
                                                    <select data-placeholder="Types" class="chosen-city">
                                                        <option>Jobs</option>
                                                        <option>Photographers</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-2  col-md-3 col-sm-12">
                                                <button type="submit">SEARCH <i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div><!-- Job Search 2 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="scroll-here">
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">
                        <h2>Popular Categories</h2>
                        <span>37 jobs live - 0 added today.</span>
                    </div><!-- Heading -->
                    <div class="cat-sec">
                        <div class="row no-gape">
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <i class="fa fa-bullhorn"></i>
                                        <span>Design, Art & Multimedia</span>
                                        <p>(22 open positions)</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <i class="fa fa-graduation-cap"></i>
                                        <span>Education Training</span>
                                        <p>(6 open positions)</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <i class="fa fa-line-chart "></i>
                                        <span>Accounting / Finance</span>
                                        <p>(3 open positions)</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <i class="fa fa-users"></i>
                                        <span>Human Resource</span>
                                        <p>(3 open positions)</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cat-sec">
                        <div class="row no-gape">
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <i class="fa fa-phone"></i>
                                        <span>Telecommunications</span>
                                        <p>(22 open positions)</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <i class="fa fa-cutlery"></i>
                                        <span>Restaurant / Food Service</span>
                                        <p>(6 open positions)</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <i class="fa fa-building"></i>
                                        <span>Construction / Facilities</span>
                                        <p>(3 open positions)</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <i class="fa fa-user-md"></i>
                                        <span>Health</span>
                                        <p>(3 open positions)</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="browse-all-cat">
                        <a href="#" title="">Browse All Categories</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block double-gap-top double-gap-bottom">
        <div data-velocity="-.1" style="background: url(images/resource/parallax1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="simple-text-block">
                        <h3>Make a Difference with Your Online Resume!</h3>
                        <span>Your resume in minutes with JobHunt resume assistant is ready!</span>
                        <a href="#" title="">Create an Account</a>
                    </div>
                </div>
            </div>
        </div>	
    </div>
</section>

<section>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="heading">
                        <h2>Recent Jobs</h2>
                        <span>Leading Employers already using job and talent.</span>
                    </div><!-- Heading -->
                    <div class="job-listings-sec">
                        <div class="job-listing">
                            <div class="job-title-sec">
                                <div class="c-logo"> <img src="images/resource/l1.png" alt="" /> </div>
                                <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                <span>Massimo Artemisis</span>
                            </div>
                            <span class="job-lctn"><i class="fa fa-map-marker"></i>Dhaka</span>
                            <span class="fav-job"><i class="fa fa-heart-o">&nbsp;</i></span>
                            <span class="job-is ft">FULL TIME</span>
                        </div><!-- Job -->
                        <div class="job-listing">
                            <div class="job-title-sec">
                                <div class="c-logo"> <img src="images/resource/l2.png" alt="" /> </div>
                                <h3><a href="#" title="">Marketing Director</a></h3>
                                <span>Tix Dog</span>
                            </div>
                            <span class="job-lctn"><i class="fa fa-map-marker"></i>Rennes, France</span>
                            <span class="fav-job"><i class="fa fa-heart-o">&nbsp;</i></span>
                            <span class="job-is pt">PART TIME</span>
                        </div><!-- Job -->
                        <div class="job-listing">
                            <div class="job-title-sec">
                                <div class="c-logo"> <img src="images/resource/l3.png" alt="" /> </div>
                                <h3><a href="#" title="">C Developer (Senior) C .Net</a></h3>
                                <span>StarHealth</span>
                            </div>
                            <span class="job-lctn"><i class="fa fa-map-marker"></i>London, United Kingdom</span>
                            <span class="fav-job"><i class="fa fa-heart-o">&nbsp;</i></span>
                            <span class="job-is ft">FULL TIME</span>
                        </div><!-- Job -->
                        <div class="job-listing">
                            <div class="job-title-sec">
                                <div class="c-logo"> <img src="images/resource/l4.png" alt="" /> </div>
                                <h3><a href="#" title="">Application Developer For Android</a></h3>
                                <span>Altes Bank</span>
                            </div>
                            <span class="job-lctn"><i class="fa fa-map-marker"></i>Istanbul, Turkey</span>
                            <span class="fav-job"><i class="fa fa-heart-o">&nbsp;</i> </span>
                            <span class="job-is fl">FREELANCE</span>
                        </div><!-- Job -->
                        <div class="job-listing">
                            <div class="job-title-sec">
                                <div class="c-logo"> <img src="images/resource/l5.png" alt="" /> </div>
                                <h3><a href="#" title="">Regional Sales Manager South east Asia</a></h3>
                                <span>Vincent</span>
                            </div>
                            <span class="job-lctn"><i class="fa fa-map-marker"></i>Ajax, Ontario</span>
                            <span class="fav-job"><i class="fa fa-heart-o">&nbsp;</i></span>
                            <span class="job-is tp">TEMPORARY</span>
                        </div><!-- Job -->
                    </div>
                    <div class="col-lg-12">
                        <div class="browse-all-cat">
                            <a href="#" title="">Load more listings</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="col-lg-12 column">
                        <div class="heading left">
                            <h2>Featured Jobs</h2>
                            <span>Leading job for focusd</span>
                            <div class="text-center"> <span><i class="fa fa-angle-left"></i> <i class="fa fa-angle-right"></i></span></div>
                        </div><!-- Heading -->
                        <div class="job-grid-sec">
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <div class="job-grid style2">
                                        <div class="job-title-sec">
                                            <div class="c-logo"> <img src="images/resource/jg1.png" alt=""> </div>
                                            <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                            <span>Massimo Artemisis</span>
                                        </div>
                                        <span class="job-lctn">Sacramento, California</span>
                                        <p>Offer strategic and technical health and nutrition advice to headquarters and field staff, as well as training</p>
                                        <div class="grid-info-box">
                                            <span class="job-is">Full Time</span>
                                            <a href="#" title="">APPLY NOW</a>
                                            <span class="fav-job"><i class="fa fa-heart-o"></i></span>
                                        </div>
                                    </div><!-- JOB Grid -->
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <div class="job-grid style2">
                                        <div class="job-title-sec">
                                            <div class="c-logo"> <img src="images/resource/jg2.png" alt=""> </div>
                                            <h3><a href="#" title="">Marketing Director</a></h3>
                                            <span>MediaLab</span>
                                        </div>
                                        <span class="job-lctn">Sacramento, California</span>
                                        <p>Offer strategic and technical health and nutrition advice to headquarters and field staff, as well as training</p>
                                        <div class="grid-info-box">
                                            <span class="job-is">Full Time</span>
                                            <a href="#" title="">APPLY NOW</a>
                                            <span class="fav-job"><i class="fa fa-heart-o"></i></span>
                                        </div>
                                    </div><!-- JOB Grid -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">
                        <h2>Featured Candidates</h2>
                        <span>Every single one of our jobs has some kind of flexibility option</span>
                    </div><!-- Heading -->
                    <div class="team-sec">
                        <div class="row" id="team-carousel">
                            <div class="col-lg-3">
                                <div class="team">
                                    <div class="team-img"><img src="images/resource/t1.jpg" alt="" /></div>
                                    <div class="team-detail">
                                        <h3><a href="#" title="">Amanda Cook</a></h3>
                                        <span>I Knew You Were Trouble</span>
                                        <p>The Random Name Generator is a simple fiction writing tool…</p>
                                        <a href="#" title="">View Resume <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div><!-- Team -->
                            </div>
                            <div class="col-lg-3">
                                <div class="team">
                                    <div class="team-img"><img src="images/resource/t2.jpg" alt="" /></div>
                                    <div class="team-detail">
                                        <h3><a href="#" title="">İbrahim Agay</a></h3>
                                        <span>Developer</span>
                                        <p>The Random Name Generator is a simple fiction writing tool…</p>
                                        <a href="#" title="">View Resume <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div><!-- Team -->
                            </div>
                            <div class="col-lg-3">
                                <div class="team">
                                    <div class="team-img"><img src="images/resource/t3.jpg" alt="" /></div>
                                    <div class="team-detail">
                                        <h3><a href="#" title="">Ali Tufan</a></h3>
                                        <span>Senior UI / UX Designer</span>
                                        <p>The Random Name Generator is a simple fiction writing tool…</p>
                                        <a href="#" title="">View Resume <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div><!-- Team -->
                            </div>
                            <div class="col-lg-3">
                                <div class="team">
                                    <div class="team-img"><img src="images/resource/t4.jpg" alt="" /></div>
                                    <div class="team-detail">
                                        <h3><a href="#" title="">Juan Suso</a></h3>
                                        <span>IT Outsource Company</span>
                                        <p>The Random Name Generator is a simple fiction writing tool…</p>
                                        <a href="#" title="">View Resume <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div><!-- Team -->
                            </div>
                            <div class="col-lg-3">
                                <div class="team">
                                    <div class="team-img"><img src="images/resource/t2.jpg" alt="" /></div>
                                    <div class="team-detail">
                                        <h3><a href="#" title="">Senimae Zuis</a></h3>
                                        <span>Web Designer</span>
                                        <p>The Random Name Generator is a simple fiction writing tool…</p>
                                        <a href="#" title="">View Resume <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div><!-- Team -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">
                        <h2>How It Works</h2>
                        <span>Each month, more than 7 million Jobhunt turn to website in their search for work, making over <br />160,000 applications every day.
                        </span>
                    </div><!-- Heading -->
                    <div class="how-to-sec">
                        <div class="how-to">
                            <span class="how-icon"><i class="fa fa-user"></i></span>
                            <h3>Register an account</h3>
                            <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                        </div>
                        <div class="how-to">
                            <span class="how-icon"><i class="fa fa-file-archive-o"></i></span>
                            <h3>Specify & search your job</h3>
                            <p>Browse profiles, reviews, and proposals then interview top candidates. </p>
                        </div>
                        <div class="how-to">
                            <span class="how-icon"><i class="fa fa-list"></i></span>
                            <h3>Apply for job</h3>
                            <p>Use the Upwork platform to chat, share files, and collaborate from your desktop or on the go.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block no-padding">
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="simple-text">
                        <h3>Gat a question?</h3>
                        <span>We're here to help. Check out our FAQs, send us an email or call us at 1 (800) 555-5555</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection