<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Raleway|Roboto&display=swap"
          rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <title>AB Securities LTD - @yield('title')</title>
    @stack('styles')


</head>
<body>
    <section id="header-section">
        <nav class="navbar navbar-expand-lg navbar-light" style="z-index: 999; padding: 0;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse i-nav-bar" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href='{!! url('/'); !!}'>Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About Us
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Corporate Profile</a>
                            <a class="dropdown-item" href="#">Board of Directors</a>
                            <a class="dropdown-item" href="#">Our Mission & Vision</a>
                            <a class="dropdown-item" href="#">Holidays</a>
                            <a class="dropdown-item" href="#">Annual Report</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                        </a>
                        <!-- *TODO uncomment later if necessary -->
                        <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Sales and Trending(Online/Offline)</a>
                            <a class="dropdown-item" href="#">Clearing Service</a>
                            <a class="dropdown-item" href="#">DP Service</a>
                            <a class="dropdown-item" href="#">Margin Facilities</a>
                            <a class="dropdown-item" href="#">SMS & E-Statements Service</a>
                            <a class="dropdown-item" href="#">Foreign & Institutional Broking Expertise</a>
                        </div> -->
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account Opening
                        </a>
                        <!-- *TODO uncomment later if necessary -->
                        <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Single/Joint Account</a>
                            <a class="dropdown-item" href="#">Limited Company</a>
                            <a class="dropdown-item" href="#">Other</a>
                        </div> -->
                    </li>
                    <!-- *TODO uncomment later if necessary -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Trading
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">In House Trading</a>
                            <a class="dropdown-item" href="#">Telephonic Trading</a>
                            <a class="dropdown-item" href="#">Online Trading</a>
                        </div>
                    </li> -->
                    <!-- *TODO uncomment later if necessary -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        IPO
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">New IPO</a>
                            <a class="dropdown-item" href="#">IPO Application</a>
                            <a class="dropdown-item" href="#">IPO Result</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='{!! url('/branches'); !!}'>Branches <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Laws & Regulations
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="http://www.bangladesh-bank.org/aboutus/regulationguideline/guidelist.php" target="_blank">Bangladesh Bank</a>
                            <a class="dropdown-item"
                            href="https://sec.gov.bd/home/laws"
                            target="_blank">Securities Laws and Rules</a>
                            <a class="dropdown-item"
                            href="https://sec.gov.bd/home/lbook"
                            target="_blank">Securities Related Rules</a>

                        </div>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#">Clients' Guidelines <span class="sr-only">(current)</span></a>
                    </li>               
                    <li class="nav-item">
                        <a class="nav-link" href="#">Downloads <span class="sr-only">(current)</span></a>
                    </li> 
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="#">Notices & Circulars <span class="sr-only">(current)</span></a> -->
                        <a class="nav-link" href="#">Notices <span class="sr-only">(current)</span></a>
                    </li>
                                
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Contact Us
                        </a>
                        <!-- *TODO uncomment later if necessary -->
                        <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Office Contact</a>
                            <a class="dropdown-item" href="#">Trader Contact</a>
                            <a class="dropdown-item" href="#">Query</a>
                        </div> -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                        href="https://www.dsebd.org/dse_faq.php" target="_blank">FAQ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdownMenuLink"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                            Register
                        </a>
                        <div class="dropdown-menu"
                            aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item"
                            href="#">Register</a>
                            <a class="dropdown-item"
                            href="#">Log In</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <section id="non-footer">
        @yield('body')
    </section>
    {{-- <section id="footer-section">
        <div class="custom-footer">
            <p>Powered by<span><a href="http://www.esecuresoftbd.com" target="_blank">eSecureSoft Technologies Ltd.</a></span></p>
        </div>
    </section> --}}
    <section id="footer-section" style="margin-top: 50px;">
        <div class="row" style="background-color: black; font-size: 2rem;padding-top: 50px">
            <div class="col-12 col-md-4 col-lg-4 col-xl-4 ml-auto mr-auto" style="width: 200px; height: 200px; text-align: center;">
                <p>
                    <a href="https://dsebd.org/top_20_share.php" target="_blank">DSE Top 20 Shares</a>
                </p>
                <p>
                    <a href="https://dsebd.org/top_ten_gainer.php" target="_blank">Top 10 Gainers</a>
                </p>
                <p>
                    <a href="https://dsebd.org/top_ten_loser.php" target="_blank">Top 10 Losers</a>
                </p>
                <p>
                    <a href="https://dsebd.org/dseX_share.php" target="_blank">DSEX Share</a>
                </p>

            </div>
            <div class="col-12 col-md-4 col-lg-4 col-xl-4" style="width: 200px; height: 200px;text-align: center; font-size: 2rem;">
                <p>
                    <a href="https://dsebd.org/top_20_share.php" target="_blank">Contact Us</a>
                </p>
                <p>
                    <a href="https://dsebd.org/top_20_share.php" target="_blank">Our Services</a>
                </p>
                <p>
                    <a href="https://dsebd.org/top_20_share.php" target="_blank">About Us</a>
                </p>
            </div>
            <div class="col-12 col-md-4 col-lg-4 col-xl-4" style="width: 200px; height: 200px;text-align: center; font-size: 2rem; color: white;">
                <p>
                    <a href="https://dsebd.org/top_20_share.php" target="_blank">Contact Us</a>
                </p>
                <p>
                    <a href="https://dsebd.org/top_20_share.php" target="_blank">Our Services</a>
                </p>
                <p>
                    <a href="https://dsebd.org/top_20_share.php" target="_blank">About Us</a>
                </p>

            </div>

        </div>
        <div class="row">
            <div class="col pb-5" style="text-align: center; background-color: black">
                <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f fa-3x" style="color: cyan;padding: 10px;"></i></a>
                <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter fa-3x" style="color: cyan; padding: 10px"></i></a>
                <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in fa-3x" style="color: cyan; padding: 10px;"></i></a>

            </div>
        </div>
        <div class="row" style="background-color: black;justify-content: center; color: white;font-weight: 200">
            <p>WW Tower (Level – 6), 68</p>
            <p>Motijheel C/A, Dhaka – 1000</p>
        </div>
        <div class="row" style="background-color: black;justify-content: center">
            <p>AB Securities Limited &copy;All Rights Reserved, 2020</p>
            <p>Powered by<span><a href="http://www.esecuresoftbd.com" target="_blank">eSecureSoft Technologies Ltd.</a></span></p>  
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3e5b53fd9c.js" crossorigin="anonymous"></script>

    @stack('scripts')
</body>
</html>
