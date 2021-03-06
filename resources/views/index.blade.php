@extends('layouts.main_layout')

@section('content')
    <section class="hero-wrap d-flex js-fullheight">
        <div class="forth js-fullheight d-flex align-items-center">
            <div class="text">
                <span class="subheading">Hello,</span>
                <h1>I'm Marco Sebastián</h1>
                <h2 class="mb-5">A Corporate Lawyer</h2>
                <p><a href="#" class="btn-custom py-3 pr-2">Contact Me</a></p>
            </div>
        </div>
        <div class="third about-img js-fullheight" style="background-image: url(blog/images/bg_2.jpg);">
            <a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
                <span class="icon-play"></a>
            </a>
        </div>
    </section>

    <section class="ftco-consult bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 text-lg-right">
                    <h3 class="mb-4 mb-lg-0">My Free Consultation</h3>
                </div>
                <div class="col-lg-10">
                    <form action="#" class="consult-form">
                        <div class="d-lg-flex align-items-md-end">
                            <div class="form-group mb-3 mb-lg-0 mr-4">
                                <label for="#">Name</label>
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group mb-3 mb-lg-0 mr-4">
                                <label for="#">Email Address</label>
                                <input type="text" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group mb-3 mb-lg-0 mr-4">
                                <label for="#">Categories(optional)</label>
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Family Law</option>
                                            <option value="">Labor Law</option>
                                            <option value="">Business Ligitation</option>
                                            <option value="">Employment Law</option>
                                            <option value="">Criminal Law</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3 mb-lg-0 mr-4">
                                <label for="#">Message</label>
                                <textarea name="" id="" cols="30" rows="3" class="form-control d-flex align-items-center" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-4">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-services">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-lg-7 heading-section ftco-animate">
                    <span class="subheading">Services</span>
                    <h2 class="mb-4">My Legal Practice Areas</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-family-room"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Family Law</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-bar-chart"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Business Law</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-medicine"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Drug Control Law</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-prison"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Criminal Law</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(blog/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row d-md-flex align-items-center">
                <div class="col-lg-4">
                    <div class="heading-section pl-md-5 heading-section-white">
                        <div class="ftco-animate">
                            <span class="subheading">Some</span>
                            <h2 class="mb-4">Interesting Facts</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row d-md-flex align-items-center">
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="3500">0</strong>
                                    <span>Trusted clients</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="2000">0</strong>
                                    <span>Solved Cases</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="800">0</strong>
                                    <span>Awards Win</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="2450">0</strong>
                                    <span>Winning Case</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftc-no-pt">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center order-md-last" style="background-image: url(blog/images/bg_1.jpg);">
                </div>
                <div class="col-md-7 wrap-about pt-md-5 ftco-animate">
                    <div class="heading-section mb-5 pt-5 pl-md-5">
                        <div class="pr-md-5 mr-md-5 text-md-right">
                            <span class="subheading">Providing</span>
                            <h2 class="mb-4">I Assure you that you will win</h2>
                        </div>
                    </div>
                    <div class="pr-md-3 pr-lg-5 pl-md-5 mr-md-5 mb-5">
                        <div class="services-wrap d-flex">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-auction"></span>
                            </div>
                            <div class="media-body pl-md-0 pl-4 pr-4 order-md-first text-md-right">
                                <h3 class="heading">Fight for Justice</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                            </div>
                        </div>
                        <div class="services-wrap d-flex">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-auction"></span>
                            </div>
                            <div class="media-body pl-md-0 pl-4 pr-4 order-md-first text-md-right">
                                <h3 class="heading">Best Case Strategy</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                            </div>
                        </div>
                        <div class="services-wrap d-flex">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-auction"></span>
                            </div>
                            <div class="media-body pl-md-0 pl-4 pr-4 order-md-first text-md-right">
                                <h3 class="heading">Experience Attorneys</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Testimony</span>
                    <h2 class="mb-4">My satisfied customer says</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5 text-center">
                                <div class="user-img mb-5" style="background-image: url(blog/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5 text-center">
                                <div class="user-img mb-5" style="background-image: url(blog/images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Interface Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5 text-center">
                                <div class="user-img mb-5" style="background-image: url(blog/images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">UI Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5 text-center">
                                <div class="user-img mb-5" style="background-image: url(blog/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Web Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5 text-center">
                                <div class="user-img mb-5" style="background-image: url(blog/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">System Analyst</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftc-no-pb ftc-no-pt bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(blog/images/bg_2.jpg);">
                    <a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
                        <span class="icon-play"></span>
                    </a>
                </div>
                <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section pt-md-5 pl-md-5 mb-5">
                        <div class="ml-md-0">
                            <span class="subheading">Hello I'm</span>
                            <h2 class="mb-4">Marco Sebastián</h2>
                        </div>
                    </div>
                    <div class="pb-md-5">
                        <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                        <ul class="ftco-social d-flex">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Our latest update</span>
                    <h2 class="mb-4">Case Study</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20" style="background-image: url('blog/images/image_1.jpg');">
                        </a>
                        <div class="text py-4">
                            <div class="meta mb-3">
                                <div><a href="#">Oct. 12, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <div class="desc">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry" data-aos-delay="100">
                        <a href="blog-single.html" class="block-20" style="background-image: url('blog/images/image_2.jpg');">
                        </a>
                        <div class="text py-4">
                            <div class="meta mb-3">
                                <div><a href="#">Oct. 12, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <div class="desc">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry" data-aos-delay="200">
                        <a href="blog-single.html" class="block-20" style="background-image: url('blog/images/image_3.jpg');">
                        </a>
                        <div class="text py-4">
                            <div class="meta mb-3">
                                <div><a href="#">Oct. 12, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <div class="desc">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftc-no-pb ftc-no-pt bg-light">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-5 pt-5">
                    <form action="#" class="consult-form py-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label for="#">Name</label>
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label for="#">Email Address</label>
                                    <input type="text" class="form-control" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label for="#">Date</label>
                                    <div class="form-field">
                                        <input type="text" class="form-control checkin_date" placeholder="Date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label for="#">Categories(optional)</label>
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="" id="" class="form-control">
                                                <option value="">Family Law</option>
                                                <option value="">Labor Law</option>
                                                <option value="">Business Ligitation</option>
                                                <option value="">Employment Law</option>
                                                <option value="">Criminal Law</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-4">
                                    <label for="#">Message</label>
                                    <textarea name="" id="" cols="30" rows="7" class="form-control form-control-2 d-flex align-items-center" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-4">
                                    <input type="submit" value="Make an Appointment" class="btn btn-primary py-3 px-4">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-7 wrap-about pb-5 ftco-animate">
                    <div class="heading-section mb-md-5 pl-md-5 mt-md-5 pt-3">
                        <div class="pl-md-3">
                            <span class="subheading">Appointment</span>
                            <h2 class="mb-4">Make An Appointment</h2>
                        </div>
                    </div>
                    <div class="pl-md-3">
                        <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
