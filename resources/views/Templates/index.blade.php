@extends('Templates.base')

@section('title')
    index
@endsection
@push('styles')
    {{-- <link href="{{ asset('sass/app.css') }}" rel="stylesheet"> --}}
@endpush

@section('body')
    <section id="ticker-section" class="container">
        <div class="row">
            <div class="col-12 col-lg-3 col-xl-3 ticker-section--logo">
                <img src="images/logo.png" alt="ASL" width="200px">
            </div>
            <div class="col-12 col-lg-9 col-xl-9 ticker-section--ticker">
                <div class="marquee">
                    <div class="ticker-main-div">
                        <div class="ticker--item ticker--item__up">
                            <div>ABCDEFGH &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 50.5</div>
                            <div>0.9 &nbsp; 20.8%</div>
                        </div>
                        <div class="ticker--item ticker--item__up">
                            <div>ABCDEFGH &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 50.5</div>
                            <div>0.9 &nbsp; 20.8%</div>
                        </div>
                        <div class="ticker--item ticker--item__down">
                            <div>ABCDEFGH &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 50.5</div>
                            <div>-0.9 &nbsp; -20.8%</div>
                        </div>
                        <div class="ticker--item ticker--item__normal">
                            <div>ABCDEFGH &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 50.5</div>
                            <div>0.9 &nbsp; 20.8%</div>
                        </div>
                        <div class="ticker--item ticker--item__up">
                            <div>ABCDEFGH &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 50.5</div>
                            <div>0.9 &nbsp; 20.8%</div>
                        </div>
                        <div class="ticker--item ticker--item__down">
                            <div>ABCDEFGH &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 50.5</div>
                            <div>0.9 &nbsp; 20.8%</div>
                        </div>
                        <div class="ticker--item ticker--item__down">
                            <div>ABCDEFGH &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 50.5</div>
                            <div>0.9 &nbsp; 20.8%</div>
                        </div>
                        <div class="ticker--item ticker--item__up">
                            <div>ABCDEFGH &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 50.5</div>
                            <div>0.9 &nbsp; 20.8%</div>
                        </div>
                        <div class="ticker--item ticker--item__normal">
                            <div>ABCDEFGH &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 50.5</div>
                            <div>0.9 &nbsp; 20.8%</div>
                        </div>
                        <div class="ticker--item ticker--item__up">
                            <div>ABCDEFGH &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 50.5</div>
                            <div>0.9 &nbsp; 20.8%</div>
                        </div>
                    </div>  
                </div>
                <div style="display: flex; flex-direction: column;">
                    <button class="ticker--control--button" id="ticker-rb">
                        <i class="fas fa-angle-right"></i>
                    </button>
                    <button class="ticker--control--button" onclick="togglemarquee()">
                        <i class="fas fa-pause"></i>
                    </button>
                    <button class="ticker--control--button" id="ticker-lb">
                        <i class="fas fa-angle-left"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="carousel-section" class="container" >
        <img src="images/home-image.JPG" alt="" width="100%">
    </section>

    <section id="services-section" class="container services-section-div">
    
        <div class="services-section-header">
        <div class="services-section-header-text">Our Services</div>
        </div>
        <div class="row">
            <div class="col service-card-column">
                <div class="service-card-div">
                    <div class="service-img-div">
                        <img class="service-img"
                            src="images/services-ipo.jpg"
                            alt="ipo">
                    </div>
                    <div class="service-card-header">
                        New Account
                    </div>
                    <div class="service-card-details">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur eius quisquam error. Praesentium repellat nisi
                        in illo ullam...
                    </div>
                    <div class="service-card-button-div">
                        <a class="btn service-card-button" href="#">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col service-card-column">
                <div class="service-card-div">
                    <div class="service-img-div">
                        <img class="service-img"
                            src="images/services-ipo.jpg"
                            alt="ipo">
                    </div>
                    <div class="service-card-header">
                        New Account
                    </div>
                    <div class="service-card-details">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur eius quisquam error. Praesentium repellat nisi
                        in illo ullam...
                    </div>
                    <div class="service-card-button-div">
                        <a class="btn service-card-button" href="#">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col service-card-column">
                <div class="service-card-div">
                <div class="service-img-div">
                    <img class="service-img" src="images/services-ipo.jpg" alt="ipo">
                </div>
                <div class="service-card-header">
                    New Account
                </div>
                <div class="service-card-details">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur eius quisquam error. Praesentium repellat nisi in illo ullam...
                </div>
                <div class="service-card-button-div">
                    <a class="btn service-card-button" href="#">
                        Read More
                    </a>
                </div>
                </div>
            </div>
            <div class="col service-card-column">
                <div class="service-card-div">
                <div class="service-img-div">
                    <img class="service-img" src="images/services-ipo.jpg" alt="ipo">
                </div>
                <div class="service-card-header">
                    New Account
                </div>
                <div class="service-card-details">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur eius quisquam error. Praesentium repellat nisi in illo ullam...
                </div>
                <div class="service-card-button-div">
                    <a class="btn service-card-button" href="#">
                        Read More
                    </a>
                </div>
                </div>
            </div>
        </div>
        

    </section>

    <section id="link-section" class="container links-section-div">
        <div class="links-section-header">
            <div class="links-section-header-text">Important Links</div>
        </div>
        <div class="imp--links--div">
            <div class="row imp--links--row">
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 imp--links--col">
                <div class="imp--single-link--div hvr-bounce-to-bottom">
                    <i class="fas fa-signal"></i>
                <a href="https://dsebd.org/top_20_share.php" target="_blank">DSE Top 20 Shares</a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 imp--links--col">
                <div class="imp--single-link--div hvr-bounce-to-bottom">
                <i class="fas fa-sort-amount-up"></i>
                <a href="https://dsebd.org/top_ten_gainer.php" target="_blank">Top 10 Gainers</a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 imp--links--col">
                <div class="imp--single-link--div hvr-bounce-to-bottom">
                    <i class="fas fa-sort-amount-down"></i>
                <a href="https://dsebd.org/top_ten_loser.php" target="_blank">Top 10 Losers</a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 imp--links--col">
                <div class="imp--single-link--div hvr-bounce-to-bottom">
                    <i class="fas fa-project-diagram"></i>
                <a href="https://dsebd.org/dseX_share.php" target="_blank">DSEX Share</a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 imp--links--col">
                <div class="imp--single-link--div hvr-bounce-to-bottom">
                    <i class="fas fa-project-diagram"></i>
                <a href="https://dsebd.org/dse30_share.php" target="_blank">DSE30 Share</a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 imp--links--col">
                <div class="imp--single-link--div hvr-bounce-to-bottom">
                    <i class="fas fa-tag"></i>
                <a href="https://dsebd.org/dse_close_price.php" target="_blank">Close Price</a>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 imp--links--col">
                <div class="imp--single-link--div hvr-bounce-to-bottom">
                    <i class="fas fa-bacon"></i>
                <a href="https://dsebd.org/latest_PE.php" target="_blank">Latest PE</a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 imp--links--col">
                <div class="imp--single-link--div hvr-bounce-to-bottom">
                    <i class="fas fa-window-restore"></i>
                    <a href="https://dsebd.org/weekly_report.htm" target="_blank">Weekly Report</a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 imp--links--col">
                <div class="imp--single-link--div hvr-bounce-to-bottom">
                    <i class="fas fa-podcast"></i>
                <a href="https://dsebd.org/Company_AGM.php" target="_blank">Company AGM</a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 imp--links--col">
                <div class="imp--single-link--div hvr-bounce-to-bottom">
                    <i class="fas fa-file-invoice-dollar"></i>
                <a href="https://dsebd.org/latest_share_price_scroll_l.php" target="_blank">Latest Share Price</a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 imp--links--col">
                <div class="imp--single-link--div hvr-bounce-to-bottom">
                    <i class="fas fa-poll"></i>
                    <a href="https://dsebd.org/market-statistics.php" target="_blank">Market Statistics</a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 imp--links--col">
                <div class="imp--single-link--div hvr-bounce-to-bottom">
                    <i class="fas fa-newspaper"></i>
                <a href="https://dsebd.org/news_archive.php" target="_blank">DSE News</a>
                </div>
            </div> 
        </div>
    </section>

    <section id="branches-section">
        <div class="container">
            <div class="branches-section-header">
                <div class="branches-section-header-text">Our Branches</div>
            </div>
            <div class="branches-section-row">
                <div class="branches-section-col">
                    <p style="font-size: 16px; font-weight: 500; color: black;">Dhaka Office</p>
                    <p>adresss goes heree</p>
                    <p>adresss goes heree</p>
                    <p>Email : absl@abbl.com</p>
                    <p>Phone: +88-02-9566266, +88-02-9553939,</p>
                    <p>Fax : +88-02-9553773</p>
                </div>
                <div class="branches-section-col">
                    <p style="font-size: 16px; font-weight: 500; color: black;">Chattogram Office</p>
                    <p>adresss goes heree</p>
                    <p>adresss goes heree</p>
                    <p>Email : murshedar@abbl.com</p>
                    <p>Phone: +88-031-2512790-2,</p>
                    <p>Fax : +88-031-2512794</p>
                </div>
                <div class="branches-section-col">
                    <p style="font-size: 16px; font-weight: 500; color: black;">Sylhet Office</p>
                    <p>adresss goes heree</p>
                    <p>adresss goes heree</p>
                    <p>Email : aminuli@abbl.com</p>
                    <p>Phone: +88-0821-724650,</p>
                    <p>Fax : +88-0821-725505</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-section" class="container">
        <div class="contact-div">
            <div class="contact-div-header">
                Contact Us
            </div>
            <div class="contact-div-subheader">
                Swing by for a cup of coffee, or leave us a message.
            </div>
            <div class="contact-section-row">
                <div class="contact-section-col">
                    <i class="fas fa-mobile-alt fa-4x"style="color: #8a8a8a;"></i>
                    <p style="font-size: 2rem; font-weight: 500;">Phone</p>
                    <p style="color: grey; margin-top: 10px;">+88-02-9566266<br> +88-02-9553939</p>
                </div>
                <div class="contact-section-col">
                    <i class="fas fa-fax fa-4x" style="color: #8a8a8a;"></i>
                    <p style="font-size: 2rem; font-weight: 500;">FAX</p>
                    <p style="color: grey; margin-top: 10px;">+88-02-9553773</p>
                </div>
                <div class="contact-section-col">
                    <i class="far fa-envelope fa-4x" style="color: #8a8a8a;"></i>
                    <p style="font-size: 2rem; font-weight: 500;">Email</p>
                    <p style="color: grey; margin-top: 10px;">absl@abbl.com</p>                   
                </div>
                <div class="contact-section-col">
                    <i class="fas fa-map-marker-alt fa-4x"
                    style="color: #8a8a8a;"></i>
                    <p style="font-size: 2rem; font-weight: 500;">Address</p>
                    <p style="color: grey; margin-top: 10px;">WW Tower (Level – 6), 68, Motijheel C/A, Dhaka – 1000</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6 col-xl-6 order-2 order-lg-1 order-xl-1" style="height: 390px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.2842372104665!2d90.42002037820748!3d23.72783739257096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85a8fe863b9%3A0x60d60d8f51ae8855!2sAB%20Securities%20Limited!5e0!3m2!1sen!2sbd!4v1579323547981!5m2!1sen!2sbd"
                            width="100%"
                            height="100%"
                            frameborder="0"
                            style="border:0"
                            allowfullscreen="">
                    </iframe>
                </div>
                <div class="col-12 col-lg-6 col-xl-6 order-1 order-lg-2 order-xl-2">
                    <form style="background: #ededed;padding: 15px;font-size: 1.4rem;">
                        <div class="form-group row" style="margin-left: 0; margin-right: 0;">
                            <label for="name" class="col-form-label col-4">Your Name
                            </label>
                            <input type="text" id="name" class="form-control col-8">
                        </div>
                        <div class="form-group row" style="margin-left: 0; margin-right: 0;">
                            <label for="email" class="col-form-label col-4">Your Email
                            </label>
                            <input type="email" id="email" class="form-control col-8">
                        </div>
                        <div class="form-group row" style="margin-left: 0; margin-right: 0;">
                            <label for="message"
                                class="col-form-label col-4">Your Message
                            </label>
                            <textarea id="message" class="form-control col-8" rows="15"></textarea>
                        </div>
                        <div style="text-align: right;">
                            <button class="btn" style="background-color: red;font-size: 1.5rem;color: white;">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection


@push('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $(".dropdown, .btn-group").hover(function(){
            var dropdownMenu = $(this).children(".dropdown-menu");
            if(dropdownMenu.is(":visible")){
                dropdownMenu.parent().toggleClass("open");
            }
        });
    });     
    
    var mq = $('.marquee').marquee({
        speed: 120,
        pauseOnHover: true,
        duplicated: true,
        gap: 0,
    });
    
    
    function togglemarquee(){
        mq.marquee('toggle')
    }

    $('#ticker-rb').click(function() {
        mq.marquee('destroy');
        mq = $('.marquee').marquee({
        speed: 120,
        pauseOnHover: true,
        duplicated: true,
        gap: 0,
        direction: 'right'
        });
    })

    $('#ticker-lb').click(function () {
        mq.marquee('destroy');
        mq = $('.marquee').marquee({
        speed: 120,
        pauseOnHover: true,
        duplicated: true,
        gap: 0,
        direction: 'left'
        });
    })

</script>
@endpush


