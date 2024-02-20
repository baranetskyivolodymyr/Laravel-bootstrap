<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Drive</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    </head>
    <body class="body">
        <div class="header"></div>
        <div class="sticky-header">
            <div class="sticky-header__namegroup d-flex">
                <h1 class="sticky-header__name mb-0">John S.</h1>
                <img src="{{ asset('assets/Group9799.png') }}" alt="">
            </div>
            <div class="sticy-header__ico"><i>DRVR</i></div>
        </div>
        <div class="main">
            <div class="contain">
                <div class="profile-header">
                    <div class="main__avatar">
                        <img src="{{ asset('assets/MaskCopy.png') }}" alt="">
                    </div>
                    <div class="main__userinfo d-flex">
                        <div class="main__userinfo__user">
                            <div class="main__userinfo__user__info d-flex">
                                <h1 class="main__userinfo__user__name">John S.</h1>
                                <div class="main__userinfo__user__info__icons">
                                    <img src="{{ asset('assets/Group9799.png') }}" alt="">
                                    <img src="{{ asset('assets/information-circle.png') }}" alt="">
                                </div>
                            </div>
                            <div class="main__userinfo__user__nickname"><p>Users Bio</p></div>
                        </div>
                        <div class="main__userinfo__available">
                            <div class="main__userinfo__available__btn">Available</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="main__reviewTripsYears d-flex">
                    <img src="{{ asset('assets/Path9644.png') }}" alt="">
                    <p><b>4.98</b></p>
                    <img src="{{ asset('assets/home.svg') }}" alt="" class="second">
                    <p><b>15,345</b> trips</p>
                    <img src="{{ asset('assets/iOSTime.png') }}" alt="">
                    <p><b>5</b> years</p>
                </div>
                <hr class="specific_hr">
                <div class="main__services">
                    <div class="main__services__name"><b>Services</b></div>
                    <div class="main__services__ul">
                        <ol class="custom-ol pl-1">
                            <li class="d-flex"> 
                                <img src="{{ asset('assets/ionic-ios-sunny.png') }}" alt="">
                                <p>Services 1</p>
                            </li>
                            <li class="d-flex">
                                <img src="{{ asset('assets/ionic-ios-sunny.png') }}" alt="">
                                <p>Services 2</p>
                            </li>
                            <li class="d-flex">
                                <img src="{{ asset('assets/ionic-ios-sunny.png') }}" alt="">
                                <p>Services 3</p>
                            </li>
                            <li class="d-flex">
                                <img src="{{ asset('assets/ionic-ios-sunny.png') }}" alt="">
                                <p>Services 4</p>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="main__btnShowAllServices">
                    <div class="d-flex trigger"><b>Show all Services</b></div>
                </div>
                <hr>
                <div class="main__verifications">
                    <div class="main__verifications__name"><b>Verifications</b></div>
                    <div class="main__verifications__icons d-flex">
                        <div class="main__verifications__icons__facebook d-flex">
                            <img src="{{ asset('assets/Group9846.png') }}" alt="">
                            <p>Facebook</p>
                        </div>
                        <div class="main__verifications__icons__phone d-flex">
                            <img src="{{ asset('assets/Group9844.png') }}" alt="">
                            <p>Phone</p>
                        </div>
                        <div class="main__verifications__icons__govtId d-flex">
                            <img src="{{ asset('assets/Group9842.png') }}" alt="">
                            <p>Govt ID</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="main__servicesScrollTab">
                    <div class="main__servicesScrollTab__name">
                        <p><b>Services Scroll Tab</b></p>
                    </div>
                    <div class="main__servicesScrollTab__slide" >
                        <div class="main__servicesScrollTab__slide1 d-flex">
                            <img src="{{ asset('assets/Group10015.png') }}" alt="">
                            <p>Tours</p>
                        </div>
                        <div class="main__servicesScrollTab__slide2 d-flex">
                            <img src="{{ asset('assets/Group10019.png') }}" alt="">
                            <p>Delivery</p>
                        </div>
                        <div class="main__servicesScrollTab__slide3 d-flex">
                            <img src="{{ asset('assets/Group10095.png') }}" alt="">
                            <p>Personal shopping Ice Cream</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="main__map">
                    <img src="{{ asset('assets/Group98271.png') }}" alt="">
                </div>
            </div>
        </div>
        
        <div class="footer d-flex">
            <div class="footer__btnChat d-flex">
                <div>Chat</div>
            </div>
            <div class="footer__btnCall d-flex">
                <div>Call</div>
            </div>
        </div>

        <div class="modal d-flex">
            <div class="modal__signature"></div>
            <div class="modal__main">
                <div class="modal__main__name"><b>Services (7)</b></div>
                <div class="modal__main__services d-flex ">
                    <div class="width-50">
                        <div class="modal__main__services__category d-flex">
                            <img src="{{ asset('assets/Group10095.png') }}" alt="">
                            <div><b>Internet</b></div>
                        </div>
                    </div>
                    <div class="width-50">
                        <div class="modal__main__services__category d-flex">
                            <img src="{{ asset('assets/Group10094.png') }}" alt="">
                            <div><b>Newspaper</b></div>
                        </div>   
                    </div>
                    <div class="width-50">
                            <div class="modal__main__services__category d-flex">
                            <img src="{{ asset('assets/ionic-ios-sunny.png') }}" alt="">
                            <div><b>Sunroof</b></div>
                        </div>
                    </div>
                    <div class="width-50">
                        <div class="modal__main__services__category d-flex">
                            <img src="{{ asset('assets/Group10096.png') }}" alt="">
                            <div><b>Gaming</b></div>
                        </div>
                    </div>
                    <div class="width-50">
                        <div class="modal__main__services__category d-flex">
                            <img src="{{ asset('assets/pizza.png') }}" alt="">
                            <div><b>Food</b></div>
                        </div>
                    </div>
                    <div class="width-50">
                        <div class="modal__main__services__category d-flex">
                            <img src="{{ asset('assets/Group10097.png') }}" alt="">
                            <div><b>Music</b></div>
                        </div>
                    </div>
                    <div class="width-50">
                        <div class="modal__main__services__category d-flex">
                            <img src="{{ asset('assets/Group10098.png') }}" alt="">
                            <div><b>Tablet</b></div>
                        </div>
                    </div>
                </div>
                <div class="width-50">
                    <div class="modal__main__btnCancel close-button d-flex">Cancel</div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/custom/main.js') }}"></script>
    </body>
</html>
