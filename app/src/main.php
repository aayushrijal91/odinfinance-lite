<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<section class="form" id="form">
    <div class="container-fluid px-xl-0">
        <div class="row no-gutters align-items-center">
            <div class="col-6 d-none d-xl-block">
                <div class="row no-gutters align-items-center">
                    <div class="col-auto position-relative" style="z-index: 100" data-aos="fade-left">
                        <div><?= renderImg("form.png", "lib") ?></div>
                    </div>
                    <div class="col text-primary-sub h3 fw-800 line-height-3 letter-spacing-1 ml-n3" data-aos="fade-right">
                        <span class="text-primary">Enquire</span> With Us Today
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-5 pt-5 pt-xl-0 pr-xl-5 pr-xxl-0">
                <form action="./src/form" method="POST">
                    <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">

                    <div class="row no-gutters">
                        <div class="col-12 h8 fw-500 pb-3 text-dark">Contact Details</div>
                        <div class="col-12 col-md-6 pr-md-2">
                            <input class="form-control border-0" type="text" placeholder="First Name" name="firstName" required>
                        </div>
                        <div class="col-12 col-md-6 pl-md-2 mt-2 mt-md-0">
                            <input class="form-control border-0" type="text" placeholder="Last Name" name="lastName" required>
                        </div>
                        <div class="col-12 col-md-6 pr-md-2 mt-2 mt-md-3">
                            <input class="form-control border-0" type="tel" placeholder="Contact Number" name="phone" required>
                        </div>
                        <div class="col-12 col-md-6 pl-md-2 mt-2 mt-md-3">
                            <input class="form-control border-0" type="email" placeholder="Email Address" name="email" required>
                        </div>
                        <div class="col-12 col-md-6 pr-md-2 mt-2 mt-md-3">
                            <input class="form-control border-0" type="text" placeholder="Suburb" name="suburb" required>
                        </div>
                        <div class="col-12 col-md-6 pl-md-2 mt-2 mt-md-3 d-flex align-items-center text-grey">
                            <div class="pl-3 pr-4">
                                ABN
                            </div>
                            <div class="form-check form-check-inline px-2">
                                <input class="form-check-input" type="radio" name="abn" id="abnYes" value="Yes" checked>
                                <label class="form-check-label" for="abnYes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline px-2">
                                <input class="form-check-input" type="radio" name="abn" id="abnNo" value="No">
                                <label class="form-check-label" for="abnNo">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters pt-5">
                        <div class="col-12 h8 fw-500 pb-3 text-dark">Financial Information</div>
                        <div class="col-12 col-md-6 pr-md-2">
                            <select name="employmentStatus" class="form-control border-0" required>
                                <option disabled selected>Employment Status</option>
                                <option>Self Employed</option>
                                <option>Full Time</option>
                                <option>Part Time</option>
                                <option>Casual</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6 pl-md-2 mt-2 mt-md-0">
                            <input class="form-control border-0" type="number" placeholder="Weekly Income ($)" name="weeklyIncome" required>
                        </div>
                        <div class="col-12 col-md-6 pr-md-2 mt-2 mt-md-3">
                            <!-- <input class="form-control border-0" type="number" placeholder="Financial Amount Required ($)" name="amountRequired" required> -->
                            <select name="amountRequired" class="form-control border-0" required>
                                <option disabled selected>Financial Amount Required ($)</option>
                                <option> $10,000-$19,000</option>
                                <option>$20,000-$49,000</option>
                                <option>$50,000-$74,999</option>
                                <option>$75,000-$149,000</option>
                                <option>$150,000+</option>
                            </select>
                        </div>
                    </div>
                    <div class="row no-gutters pt-5">
                        <div class="col-12 h8 fw-500 pb-3 text-dark">Additional Information</div>
                        <div class="col-12 col-md-6 pr-md-2 text-dark-grey">
                            <div class="pb-2">What Best Suits You</div>
                            <div class="form-check d-flex align-items-center py-2">
                                <input class="form-check-input" type="radio" name="bestSuits" id="bestSuits1" value="I have found my asset and looking for quotes" checked>
                                <label class="form-check-label" for="bestSuits1">
                                    I have found my asset and looking for quotes
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center py-2">
                                <input class="form-check-input" type="radio" name="bestSuits" id="bestSuits2" value="Waiting on approval before I find my asset?">
                                <label class="form-check-label" for="bestSuits2">
                                    Waiting on approval before I find my asset?
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center py-2">
                                <input class="form-check-input" type="radio" name="bestSuits" id="bestSuits3" value="I've Been declined and looking for options?">
                                <label class="form-check-label" for="bestSuits3">
                                    I've Been declined and looking for options?
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 pl-md-2 mt-2 mt-md-0">
                            <textarea name="message" class="form-control border-0 bg-off-gray" id="message" rows="6" placeholder="Comment (Optional)"></textarea>
                        </div>
                        <div class="col-12 mt-2 mt-md-4 mt-md-5">
                            <button type="submit" class="btn btn-block btn-primary text-white form-control rounded-0 h9">
                                Apply Now
                            </button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</section>

<section class="deals">
    <div class="container">
        <div class="our-deals">
            <div class="our-deals-slide">
                <div class="text-center text-dark fw-500 h6 line-height-1">We have funded</div>
                <div class="text-center text-primary-sub letter-spacing-1 fw-800 h1 line-height-1">$<span data-countup>48</span> Million</div>
            </div>
            <div class="our-deals-slide">
                <div class="text-center text-dark fw-500 h6 line-height-1">We have settled</div>
                <div class="text-center text-primary-sub letter-spacing-1 fw-800 h1 line-height-1"><span data-countup>1350+</span>+ Deals</div>
            </div>
        </div>
    </div>
</section>

<section class="cta" data-aos="fade-up">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-xxl-9">
                <div class="row">
                    <div class="col-12 col-md-4 py-3 py-md-0">
                        <div class="cta-card">
                            <div class="hero_img ch1"></div>
                            <div class="caption">
                                <div class="text-primary h8 fw-800 line-height-1 text-center">Same Day Approvals</div>
                                <div class="pt-3">
                                    <a href="#form" class="btn bordered border-primary-sub rounded-pill text-black py-2 py-lg-3 px-5 px-md-3 px-lg-5 h9 fw-700">
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-3 py-md-0">
                        <div class="cta-card">
                            <div class="hero_img ch2"></div>
                            <div class="caption">
                                <div class="text-primary h8 fw-800 line-height-1 text-center">Personalised Service from Application to Submission</div>
                                <div class="pt-3">
                                    <a href="#form" class="btn bordered border-primary-sub rounded-pill text-black py-2 py-lg-3 px-5 px-md-3 px-lg-5 h9 fw-700">
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-3 py-md-0">
                        <div class="cta-card">
                            <div class="hero_img ch3"></div>
                            <div class="caption">
                                <div class="text-primary h8 fw-800 line-height-1 text-center">Specialist Asset Finance Brokers</div>
                                <div class="pt-3">
                                    <a href="#form" class="btn bordered border-primary-sub rounded-pill text-black py-2 py-lg-3 px-5 px-md-3 px-lg-5 h9 fw-700">
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about" id="about">
    <div class="container-fluid px-0">
        <div class="row no-gutters align-items-center">
            <div class="col-12 col-lg-6 col-xxl-7">
                <div class="d-none d-lg-block" data-aos="fade-right" data-aos-offset="500" data-aos-duration="500"><?= renderImg("about.png", "background") ?></div>
                <div class="d-lg-none" data-aos="fade-right"><?= renderImg("about-sm.png", "background", "w-100") ?></div>
            </div>
            <div class="col-lg-6 col-xxl-5 p-4 px-lg-0">
                <div class="row no-gutters justify-content-center">
                    <div class="col-12 col-lg-11 col-xl-9 col-xxl-7 h9 fw-400">
                        <p class="fw-600">At Odin, we value the relationships we form with our clients and pride ourselves on ensuring each client’s experience is efficient and effective.</p>

                        <p>Our exposure to high net worth clients and complex organisational structures has granted us the experience necessary to identify your needs and objectives. These relationships coupled with an emphasis on understanding every profile, allows us to ensure that each client has access to a tailor-made finance solution.</p>

                        <p>Odin’s goal is to optimise every client’s financial position, and through utilising our panel of over 50 market leading nlenders, we can guarantee a finance option with exceptional turnaround times and great value.</p>

                        <p>Our passion for finance, exceptional service and industry knowledge are all factors that have led to substantial growth in the assets we fund. Odin has the capacity to effectively deliver finance options for; motor vehicles, fit outs, agricultural equipment, earthmoving equipment, medical equipment, solar and working capital for businesses.</p>

                        <div class="row justify-content-center justify-content-md-start no-gutters pt-4">
                            <div class="col-7 col-md-5 pr-md-2">
                                <a href="#form" class="btn btn-block btn-primary-sub rounded-pill text-white py-3 px-md-4 h9 fw-700">
                                    Enquire Now
                                </a>
                            </div>
                            <div class="col-5 pl-2 d-none d-md-block">
                                <a href="javascript:void(0)" id="view_socials" class="btn btn-block bordered border-primary-sub rounded-pill text-black py-3 px-md-4 h9 fw-800">
                                    View Our Socials
                                </a>
                            </div>
                            <div class="col-10 socials pt-3">
                                <div class="row no-gutters justify-content-around">
                                    <div class="col-auto"><a href="https://www.facebook.com/odinfinance/" target="_blank" class="btn"><?= renderImg("facebook.png", "icons") ?></a></div>
                                    <div class="col-auto"><a href="https://www.instagram.com/odinfinance_/" target="_blank" class="btn"><?= renderImg("instagram.png", "icons") ?></a></div>
                                    <div class="col-auto"><a href="https://www.linkedin.com/company/odin-finance/about/ " target="_blank" class="btn"><?= renderImg("linkedin.png", "icons") ?></a></div>
                                    <div class="col-auto"><a href="https://www.youtube.com/channel/UCBLrrLPdFmRzd60V7wBJAlQ" target="_blank" class="btn"><?= renderImg("youtube.png", "icons") ?></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services" id="services">
    <div class="container-fluid px-0">
        <div class="row no-gutters align-items-center">
            <div class="col">
                <div class="text-center text-primary-sub letter-spacing-1 fw-800 h5 line-height-1 pt-6 pt-md-0 pb-4 pb-md-2">Types Of<br>Loans</div>
                <div class="d-none d-md-flex justify-content-center pt-4">
                    <a href="#form" class="btn btn-primary-sub rounded-pill text-white py-3 px-md-5 h9 fw-700">
                        Learn More
                    </a>
                </div>
            </div>
            <div class="col-auto d-none d-xl-block">
                <div class="vertical-divider"></div>
            </div>
            <div class="col-9 service-slider-wrapper">
                <div class="service-slider">
                    <div class="service-slider-content">
                        <?= renderImg("t1.png", "lib", "hover-reveal-image") ?>
                        <div class="overlay-caption">
                            <div>Car<br>Finance</div>
                            <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay">+</a>
                        </div>
                        <div class="overlay">
                            <div class="overlay-inner">
                                <div class="row no-gutters justify-content-between w-100 align-items-center">
                                    <div class="col-auto h7 fw-700">Car<br>Finance</div>
                                    <div class="col-auto">
                                        <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay">-</a>
                                    </div>
                                    <div class="col-12 h9 py-5">Finance for passenger vehicles < 4.5 tonne</div>
                                    </div>
                                    <div>
                                        <a href="#form" class="btn bordered border-primary-sub rounded-pill text-white py-3 px-md-4 h9 fw-800">
                                            Enquire Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-slider-content">
                            <?= renderImg("t2.png", "lib", "hover-reveal-image") ?>
                            <div class="overlay-caption">
                                <div>Equipment<br>Finance</div>
                                <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay">+</a>
                            </div>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <div class="row no-gutters justify-content-between w-100 align-items-center">
                                        <div class="col-auto h7 fw-700">Equipment<br>Finance</div>
                                        <div class="col-auto">
                                            <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay">-</a>
                                        </div>
                                        <div class="col-12 h9 py-5">Finance for kitchen and medical fit outs. Formwork and scaffolding.</div>
                                    </div>
                                    <div>
                                        <a href="#form" class="btn bordered border-primary-sub rounded-pill text-white py-3 px-md-4 h9 fw-800">
                                            Enquire Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-slider-content">
                            <?= renderImg("t3.png", "lib", "hover-reveal-image") ?>
                            <div class="overlay-caption">
                                <div>Machinery<br>Finance</div>
                                <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay">+</a>
                            </div>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <div class="row no-gutters justify-content-between w-100 align-items-center">
                                        <div class="col-auto h7 fw-700">Machinery<br>Finance</div>
                                        <div class="col-auto">
                                            <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay">-</a>
                                        </div>
                                        <div class="col-12 h9 py-5">Finance for excavators, loaders, bulldozers, crushers and CNC machines.</div>
                                    </div>
                                    <div>
                                        <a href="#form" class="btn bordered border-primary-sub rounded-pill text-white py-3 px-md-4 h9 fw-800">
                                            Enquire Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-slider-content">
                            <?= renderImg("t4.png", "lib", "hover-reveal-image") ?>
                            <div class="overlay-caption">
                                <div>Low Doc<br>Finance</div>
                                <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay">+</a>
                            </div>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <div class="row no-gutters justify-content-between w-100 align-items-center">
                                        <div class="col-auto h7 fw-700">Low Doc<br>Finance</div>
                                        <div class="col-auto">
                                            <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay">-</a>
                                        </div>
                                        <div class="col-12 h9 py-5">Financial and Tax Returns not required! Get access to multiple competitive loan products.</div>
                                    </div>
                                    <div>
                                        <a href="#form" class="btn bordered border-primary-sub rounded-pill text-white py-3 px-md-4 h9 fw-800">
                                            Enquire Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-slider-content">
                            <?= renderImg("t5.png", "lib", "hover-reveal-image") ?>
                            <div class="overlay-caption">
                                <div>Business<br>Loans</div>
                                <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay">+</a>
                            </div>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <div class="row no-gutters justify-content-between w-100 align-items-center">
                                        <div class="col-auto h7 fw-700">Business<br>Loans</div>
                                        <div class="col-auto">
                                            <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay">-</a>
                                        </div>
                                        <div class="col-12 h9 py-5">Finance for day to day working capital, line of credit, overdrafts and invoice financing.</div>
                                    </div>
                                    <div>
                                        <a href="#form" class="btn bordered border-primary-sub rounded-pill text-white py-3 px-md-4 h9 fw-800">
                                            Enquire Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-slider-content">
                            <?= renderImg("t6.png", "lib", "hover-reveal-image") ?>
                            <div class="overlay-caption">
                                <div>Hire<br>Purchases</div>
                                <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay">+</a>
                            </div>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <div class="row no-gutters justify-content-between w-100 align-items-center">
                                        <div class="col-auto h7 fw-700">Hire<br>Purchases</div>
                                        <div class="col-auto">
                                            <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay">-</a>
                                        </div>
                                        <div class="col-12 h9 py-5">Asset owned by the financier and the applicant makes hire payments to the lender. Once the final payment is made, title is transferred to the applicants name. Claim GST on terms charges, depreciation and interest.</div>
                                    </div>
                                    <div>
                                        <a href="#form" class="btn bordered border-primary-sub rounded-pill text-white py-3 px-md-4 h9 fw-800">
                                            Enquire Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-slider-content">
                            <?= renderImg("t7.png", "lib", "hover-reveal-image") ?>
                            <div class="overlay-caption">
                                <div>Chattel<br>Mortgage</div>
                                <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay">+</a>
                            </div>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <div class="row no-gutters justify-content-between w-100 align-items-center">
                                        <div class="col-auto h7 fw-700">Chattel<br>Mortgage</div>
                                        <div class="col-auto">
                                            <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay">-</a>
                                        </div>
                                        <div class="col-12 h9 py-5">Asset owned by the applicant from day one. Claim GST Upfront, depreciation and interest.</div>
                                    </div>
                                    <div>
                                        <a href="#form" class="btn bordered border-primary-sub rounded-pill text-white py-3 px-md-4 h9 fw-800">
                                            Enquire Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-slider-content">
                            <?= renderImg("t8.png", "lib", "hover-reveal-image") ?>
                            <div class="overlay-caption">
                                <div>Equipment<br>Rental</div>
                                <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay">+</a>
                            </div>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <div class="row no-gutters justify-content-between w-100 align-items-center">
                                        <div class="col-auto h7 fw-700">Equipment<br>Rental</div>
                                        <div class="col-auto">
                                            <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay">-</a>
                                        </div>
                                        <div class="col-12 h9 py-5">Asset owned by the financier and the customer makes rental repayments to the lender. This is an off balance sheet facility which means the client can potentially claim all repayments as an expenses.</div>
                                    </div>
                                    <div>
                                        <a href="#form" class="btn bordered border-primary-sub rounded-pill text-white py-3 px-md-4 h9 fw-800">
                                            Enquire Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters align-items-center justify-content-xl-center justify-content-xxl-start">
                        <div class="col-10 service-nav">
                            <div class="content">
                                <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                    <span class="slider__label sr-only">
                                </div>
                                </span>
                            </div>
                        </div>
                        <div class="col-auto pl-4">
                            <span id="prevArrow"><?= renderImg("prevArrow.png", "icons", "px-2") ?></span>
                            <span id="nextArrow"><?= renderImg("nextArrow.png", "icons", "px-2") ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 services-sm-wrapper">
                <div class="py-2">
                    <div class="service-content">
                        <?= renderImg("t1-sm.png", "lib", "hover-reveal-image") ?>
                        <div class="overlay-caption">
                            <div>Car Finance</div>
                            <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay_sm">+</a>
                        </div>
                        <div class="overlay">
                            <div class="overlay-inner">
                                <div class="row no-gutters justify-content-between w-100 align-items-center">
                                    <div class="col-auto h7 fw-700">Car Finance</div>
                                    <div class="col-auto">
                                        <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay_sm">-</a>
                                    </div>
                                    <div class="col-12 h9 py-3">Finance for passenger vehicles < 4.5 tonne</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-2">
                        <div class="service-content">
                            <?= renderImg("t2-sm.png", "lib", "hover-reveal-image") ?>
                            <div class="overlay-caption">
                                <div>Equipment Finance</div>
                                <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay_sm">+</a>
                            </div>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <div class="row no-gutters justify-content-between w-100 align-items-center">
                                        <div class="col-auto h7 fw-700">Equipment Finance</div>
                                        <div class="col-auto">
                                            <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay_sm">-</a>
                                        </div>
                                        <div class="col-12 h9 py-3">Finance for passenger vehicles < 4.5 tonne</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-2">
                            <div class="service-content">
                                <?= renderImg("t3-sm.png", "lib", "hover-reveal-image") ?>
                                <div class="overlay-caption">
                                    <div>Business Loans</div>
                                    <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay_sm">+</a>
                                </div>
                                <div class="overlay">
                                    <div class="overlay-inner">
                                        <div class="row no-gutters justify-content-between w-100 align-items-center">
                                            <div class="col-auto h7 fw-700">Business Loans</div>
                                            <div class="col-auto">
                                                <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay_sm">-</a>
                                            </div>
                                            <div class="col-12 h9 py-3">Finance for passenger vehicles < 4.5 tonne</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <div class="service-content">
                                    <?= renderImg("t4-sm.png", "lib", "hover-reveal-image") ?>
                                    <div class="overlay-caption">
                                        <div>Hire Purchase</div>
                                        <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay_sm">+</a>
                                    </div>
                                    <div class="overlay">
                                        <div class="overlay-inner">
                                            <div class="row no-gutters justify-content-between w-100 align-items-center">
                                                <div class="col-auto h7 fw-700">Hire Purchase</div>
                                                <div class="col-auto">
                                                    <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay_sm">-</a>
                                                </div>
                                                <div class="col-12 h9 py-3">Finance for passenger vehicles < 4.5 tonne</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-2">
                                    <div class="service-content">
                                        <?= renderImg("t5-sm.png", "lib", "hover-reveal-image") ?>
                                        <div class="overlay-caption">
                                            <div>Machinery Finance</div>
                                            <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay_sm">+</a>
                                        </div>
                                        <div class="overlay">
                                            <div class="overlay-inner">
                                                <div class="row no-gutters justify-content-between w-100 align-items-center">
                                                    <div class="col-auto h7 fw-700">Machinery Finance</div>
                                                    <div class="col-auto">
                                                        <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay_sm">-</a>
                                                    </div>
                                                    <div class="col-12 h9 py-3">Finance for passenger vehicles < 4.5 tonne</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-2">
                                        <div class="service-content">
                                            <?= renderImg("t6-sm.png", "lib", "hover-reveal-image") ?>
                                            <div class="overlay-caption">
                                                <div>Low Doc Finance</div>
                                                <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay_sm">+</a>
                                            </div>
                                            <div class="overlay">
                                                <div class="overlay-inner">
                                                    <div class="row no-gutters justify-content-between w-100 align-items-center">
                                                        <div class="col-auto h7 fw-700">Low Doc Finance</div>
                                                        <div class="col-auto">
                                                            <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay_sm">-</a>
                                                        </div>
                                                        <div class="col-12 h9 py-3">Finance for passenger vehicles < 4.5 tonne</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-2">
                                            <div class="service-content">
                                                <?= renderImg("t7-sm.png", "lib", "hover-reveal-image") ?>
                                                <div class="overlay-caption">
                                                    <div>Chattel Mortgage</div>
                                                    <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay_sm">+</a>
                                                </div>
                                                <div class="overlay">
                                                    <div class="overlay-inner">
                                                        <div class="row no-gutters justify-content-between w-100 align-items-center">
                                                            <div class="col-auto h7 fw-700">Chattel Mortgage</div>
                                                            <div class="col-auto">
                                                                <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay_sm">-</a>
                                                            </div>
                                                            <div class="col-12 h9 py-3">Finance for passenger vehicles < 4.5 tonne</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-2">
                                                <div class="service-content">
                                                    <?= renderImg("t8-sm.png", "lib", "hover-reveal-image") ?>
                                                    <div class="overlay-caption">
                                                        <div>Equipment Rental</div>
                                                        <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay_sm">+</a>
                                                    </div>
                                                    <div class="overlay">
                                                        <div class="overlay-inner">
                                                            <div class="row no-gutters justify-content-between w-100 align-items-center">
                                                                <div class="col-auto h7 fw-700">Equipment Rental</div>
                                                                <div class="col-auto">
                                                                    <a href="javascript:void(0)" class="btn p-0 text-white h7 fw-700 toggle_overlay_sm">-</a>
                                                                </div>
                                                                <div class="col-12 h9 py-3">Finance for passenger vehicles < 4.5 tonne</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
</section>

<section class="lenders" id="lenders">
    <div class="container d-xl-none">
        <div class="text-center text-primary-sub h3 fw-800 line-height-3 letter-spacing-1" data-aos="fade-right">
            Access to the <span class="text-primary">Most Trusted</span> Lenders
        </div>
        <div class="text-center mt-n4 position-relative"><?= renderImg("eftmachine-sm.png", "lib") ?></div>
        <div class="lenders-slider">
            <div class="lenders-slider-content">
                <div class="row no-gutters">
                    <div class="col-12 text-center py-4 d-flex justify-content-center"><?= renderImg("commbank.png", "logo") ?></div>
                    <div class="col-12 text-center py-4 d-flex justify-content-center"><?= renderImg("capital-finance.png", "logo") ?></div>
                    <div class="col-12 text-center py-4 d-flex justify-content-center"><?= renderImg("plenti.png", "logo") ?></div>
                    <div class="col-12 text-center py-4 d-flex justify-content-center"><?= renderImg("grow.png", "logo") ?></div>
                    <div class="col-12 text-center py-4 d-flex justify-content-center"><?= renderImg("angle-auto-finance.png", "logo") ?></div>
                </div>
            </div>
            <div class="lenders-slider-content">
                <div class="row no-gutters">
                    <div class="col-12 text-center py-4 d-flex justify-content-center"><?= renderImg("westpac.png", "logo") ?></div>
                    <div class="col-12 text-center py-4 d-flex justify-content-center"><?= renderImg("pepper-money.png", "logo") ?></div>
                    <div class="col-12 text-center py-4 d-flex justify-content-center"><?= renderImg("scotpac.png", "logo") ?></div>
                    <div class="col-12 text-center py-4 d-flex justify-content-center"><?= renderImg("flexicommercial.png", "logo") ?></div>
                    <div class="col-12 text-center py-4 d-flex justify-content-center"><?= renderImg("shift.png", "logo") ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0 d-none d-xl-block">
        <div class="row no-gutters align-items-center">
            <div class="col-md-7 col-xxl-6">
                <div class="row no-gutters align-items-center">
                    <div class="col-auto position-relative ml-n5" style="z-index: 100" data-aos="fade-left">
                        <div class="lenders-eftpos">
                            <?= renderImg("eftmachine.png", "lib") ?>
                            <div class="lenders-eftpos-client"></div>
                        </div>
                    </div>
                    <div class="col text-primary-sub h3 fw-800 line-height-3 letter-spacing-1 ml-n3" data-aos="fade-right">
                        Access to the <span class="text-primary">Most Trusted</span> Lenders
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-xxl-6" data-aos="fade-left">
                <div class="row no-gutters align-items-center">
                    <div class="col-6 text-center py-4"><a class="lender-company" dname="commbank" href="javascript:void(0)"><?= renderImg("commbank.png", "logo", "lender-logo") ?></a></div>
                    <div class="col-6 text-center py-4"><a class="lender-company" dname="westpac" href="javascript:void(0)"><?= renderImg("westpac.png", "logo", "lender-logo") ?></a></div>
                    <div class="col-6 text-center py-4"><a class="lender-company" dname="capitalfinance" href="javascript:void(0)"><?= renderImg("capital-finance.png", "logo", "lender-logo") ?></a></div>
                    <div class="col-6 text-center py-4"><a class="lender-company" dname="peppermoney" href="javascript:void(0)"><?= renderImg("pepper-money.png", "logo", "lender-logo") ?></a></div>
                    <div class="col-6 text-center py-4"><a class="lender-company" dname="plenti" href="javascript:void(0)"><?= renderImg("plenti.png", "logo", "lender-logo") ?></a></div>
                    <div class="col-6 text-center py-4"><a class="lender-company" dname="scotpac" href="javascript:void(0)"><?= renderImg("scotpac.png", "logo", "lender-logo") ?></a></div>
                    <div class="col-6 text-center py-4"><a class="lender-company" dname="grow" href="javascript:void(0)"><?= renderImg("grow.png", "logo", "lender-logo") ?></a></div>
                    <div class="col-6 text-center py-4"><a class="lender-company" dname="flexicommercial" href="javascript:void(0)"><?= renderImg("flexicommercial.png", "logo", "lender-logo") ?></a></div>
                    <div class="col-6 text-center py-4"><a class="lender-company" dname="angleautofinance" href="javascript:void(0)"><?= renderImg("angle-auto-finance.png", "logo", "lender-logo") ?></a></div>
                    <div class="col-6 text-center py-4"><a class="lender-company" dname="shift" href="javascript:void(0)"><?= renderImg("shift.png", "logo", "lender-logo") ?></a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials" id="testimonials">
    <div class="container">
        <div class="text-center letter-spacing-1 fw-800 text-primary-sub h5 line-height-1 pb-7">Testimonials</div>

        <div class="testimonial-slider d-xl-none">
            <div class="testimonial-slider-content">
                <div class="row no-gutters justify-content-center align-items-center">
                    <div class="col-auto"><?= renderImg("itf.png", "logo", "business-logo") ?></div>
                    <div class="col-auto business-info">
                        <div class="name">ITF Group</div>
                        <div class="location">Sydney</div>
                    </div>
                </div>
                <div class="testimonial-description">
                    “We have been using Louie from Odin Finance for the past 4 years to bounce ideas, gain advice and complete loans on plant and machinery. Louie has proven to be extremely helpful and articulate in providing simple results in sometimes complicated situations at very competitive rates. We found that his professional approach and prompt service was outstanding.”
                </div>
                <?= renderImg("stars.png", "icons", "business-stars") ?>
            </div>
            <div class="testimonial-slider-content">
                <div class="row no-gutters justify-content-center align-items-center">
                    <div class="col-auto"><?= renderImg("aj-cafe.png", "logo", "business-logo") ?></div>
                    <div class="col-auto business-info">
                        <div class="name">AJ's Cafe</div>
                        <div class="location">Greystanes</div>
                    </div>
                </div>
                <div class="testimonial-description">
                    “Louie was very transparent from the get go. He made the process very easy when applying for my car finance. Would definitely recommend Odin Finance to anyone applying for a car loan.”
                </div>
                <?= renderImg("stars.png", "icons", "business-stars") ?>
            </div>
            <div class="testimonial-slider-content">
                <div class="row no-gutters justify-content-center align-items-center">
                    <div class="col-auto"><?= renderImg("ascon.png", "logo", "business-logo") ?></div>
                    <div class="col-auto business-info">
                        <div class="name">Ascon Group</div>
                        <div class="location">Burwood</div>
                    </div>
                </div>
                <div class="testimonial-description">
                    “Louie came recommended to or business about two years ago. We needed a loan swiftly for some vehicles at the time and he got on the case, amending and submitting our documents within less than a week. He is a pleasure to deal with and i would recommend Odin Finance to anyone”
                </div>
                <?= renderImg("stars.png", "icons", "business-stars") ?>
            </div>
            <div class="testimonial-slider-content">
                <div class="row no-gutters justify-content-center align-items-center">
                    <div class="col-auto"><?= renderImg("crown-state.png", "logo", "business-logo") ?></div>
                    <div class="col-auto business-info">
                        <div class="name">Crown State</div>
                        <div class="location">Sydney</div>
                    </div>
                </div>
                <div class="testimonial-description">
                    “Louie has easily been one of the fastest and most efficient broker<span class="extra-description"> I have ever used. But more importantly, he actually cares about his clients and goes the extra mile for them, when there is no extra benefit for himself.”</span>
                </div>
                <?= renderImg("stars.png", "icons", "business-stars") ?>
            </div>
            <div class="testimonial-slider-content">
                <div class="row no-gutters justify-content-center align-items-center">
                    <div class="col-auto"><?= renderImg("spectrum.png", "logo", "business-logo") ?></div>
                    <div class="col-auto business-info">
                        <div class="name">Spectrum-16</div>
                        <div class="location">Sydney</div>
                    </div>
                </div>
                <div class="testimonial-description">
                    “I was referred to Odin finance by my accountant and Louie and the team promptly assisted my company secure finance 2 days before the end of financial year. The rose to the challenge and settle on the 30th of June. I got my dream car and the finance from the dream team at Odin finance. Thankyou to Louie and the team. I cannot recommend these pro's highly enough.”
                </div>
                <?= renderImg("stars.png", "icons", "business-stars") ?>
            </div>
        </div>

        <ul class="accordion d-none d-xl-flex">
            <li class="tabs active">
                <div class="business-branding">
                    <?= renderImg("itf.png", "logo", "business-logo") ?>
                    <div class="business-info">
                        <div class="name">ITF Group</div>
                        <div class="location">Sydney</div>
                    </div>
                </div>
                <div class="testimonial-description">
                    “We have been using Louie from Odin Finance for the past 4 years to bounce<span class="extra-description"> ideas, gain advice and complete loans on plant and machinery. Louie has proven to be extremely helpful and articulate in providing simple results in sometimes complicated situations at very competitive rates. We found that his professional approach and prompt service was outstanding.”</span>
                </div>
                <?= renderImg("stars.png", "icons", "business-stars") ?>
            </li>
            <li class="tabs">
                <div class="business-branding">
                    <?= renderImg("aj-cafe.png", "logo", "business-logo") ?>
                    <div class="business-info">
                        <div class="name">AJ's Cafe</div>
                        <div class="location">Greystanes</div>
                    </div>
                </div>
                <div class="testimonial-description">
                    “Louie was very transparent from the get go. He made the process very easy<span class="extra-description"> when applying for my car finance. Would definitely recommend Odin Finance to anyone applying for a car loan.”</span>
                </div>
                <?= renderImg("stars.png", "icons", "business-stars") ?>
            </li>
            <li class="tabs">
                <div class="business-branding">
                    <?= renderImg("ascon.png", "logo", "business-logo") ?>
                    <div class="business-info">
                        <div class="name">Ascon Group</div>
                        <div class="location">Burwood</div>
                    </div>
                </div>
                <div class="testimonial-description">
                    “Louie came recommended to or business about two years ago. We needed<span class="extra-description"> a loan swiftly for some vehicles at the time and he got on the case, amending and submitting our documents within less than a week. He is a pleasure to deal with and i would recommend Odin Finance to anyone”</span>
                </div>
                <?= renderImg("stars.png", "icons", "business-stars") ?>
            </li>
            <li class="tabs">
                <div class="business-branding">
                    <?= renderImg("crown-state.png", "logo", "business-logo") ?>
                    <div class="business-info">
                        <div class="name">Crown State</div>
                        <div class="location">Sydney</div>
                    </div>
                </div>
                <div class="testimonial-description">
                    “Louie has easily been one of the fastest and most efficient broker<span class="extra-description"> I have ever used. But more importantly, he actually cares about his clients and goes the extra mile for them, when there is no extra benefit for himself.”</span>
                </div>
                <?= renderImg("stars.png", "icons", "business-stars") ?>
            </li>
            <li class="tabs">
                <div class="business-branding">
                    <?= renderImg("spectrum.png", "logo", "business-logo") ?>
                    <div class="business-info">
                        <div class="name">Spectrum-16</div>
                        <div class="location">Sydney</div>
                    </div>
                </div>
                <div class="testimonial-description">
                    “I was referred to Odin finance by my accountant and Louie and the<span class="extra-description"> team promptly assisted my company secure finance 2 days before the end of financial year. The rose to the challenge and settle on the 30th of June. I got my dream car and the finance from the dream team at Odin finance. Thankyou to Louie and the team. I cannot recommend these pro's highly enough.”</span>
                </div>
                <?= renderImg("stars.png", "icons", "business-stars") ?>
            </li>
        </ul>
    </div>
</section>

<section class="learning">
    <div class="container px-0 px-md-3">
        <div class="row no-gutters align-items-center d-xl-none">
            <div class="col-12 position-relative" style="z-index: 100">
                <div class="laptop" id="learning-laptop-sm">
                    <?= renderImg("laptop.png", "lib") ?>
                    <video poster="./assets/images/lib/video_thumbnail.png" controls>
                        <source src="https://www.odinassetfinance.com.au/assets/video/hero_video.mp4" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                </div>
            </div>
            <div class="col-12 text-primary-sub h4 fw-800 line-height-3 letter-spacing-1 mb-0 px-3 pt-5 text-center" id="learning-text-sm">
                How having an <span class="text-primary">Online Presence</span> affects your Loan
            </div>
        </div>

        <div class="row no-gutters align-items-center pb-4 d-none d-xl-flex">
            <div class="col-8 position-relative" style="z-index: 100" data-aos="fade-left">
                <div class="laptop" id="learning-laptop">
                    <?= renderImg("laptop.png", "lib") ?>
                    <video poster="./assets/images/lib/video_thumbnail.png" controls>
                        <source src="https://www.odinassetfinance.com.au/assets/video/hero_video.mp4" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                </div>
            </div>
            <div class="col-4 text-primary-sub h4 fw-800 line-height-3 letter-spacing-1 learning-text mb-0" id="learning-text-lg" data-aos="fade-right">
                How having an <span class="text-primary">Online Presence</span> affects your Loan
            </div>
        </div>

        <div class="px-3 px-md-0 py-3">
            <hr>
        </div>

        <div class="row no-gutters pt-lg-7 align-items-center">
            <div class="col-md-4">
                <a href="javascript:void(0)" class="btn video_option" vname="online-presence">
                    <div class="row no-gutters align-items-center">
                        <div class="col-5 col-md-12 col-lg-5 col-xl-auto"><?= renderImg("online-presence.png", "lib", "w-100") ?></div>
                        <div class="col py-2 text-dark-grey h9 text-left pl-3 pl-md-0 pl-lg-3">
                            How having an Online Presence affects your Loan
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="javascript:void(0)" class="btn video_option" vname="paying-gst">
                    <div class="row no-gutters align-items-center">
                        <div class="col-5 col-md-12 col-lg-5 col-xl-auto"><?= renderImg("paying-on-time.png", "lib", "w-100") ?></div>
                        <div class="col py-2 text-dark-grey h9 text-left pl-3 pl-md-0 pl-lg-3">
                            How paying your GST and Tax on time benefits your Loan Application
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="javascript:void(0)" class="btn video_option" vname="offering-deposit">
                    <div class="row no-gutters align-items-center">
                        <div class="col-5 col-md-12 col-lg-5 col-xl-auto"><?= renderImg("offering-deposits.png", "lib", "w-100") ?></div>
                        <div class="col py-2 text-dark-grey h9 text-left pl-3 pl-md-0 pl-lg-3">
                            How offering a deposit in a Loan Application improves your chances
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="faq py-5" id="faqs">
    <div class="container">
        <div class="text-primary-sub h7 fw-800 pb-4 pb-md-5 line-height-1 text-center text-md-left">Frequently Asked Questions</div>
        <div class="accordion-container">
            <div class="accordion-card">
                <div class="accordion-head">What is my interest rate?<span class="plusminus">-</span></div>
                <div class="accordion-body" style="display: block;">
                    We workshop your deal with >50 lenders to find you the best rate and terms
                </div>
            </div>
            <div class="accordion-card">
                <div class="accordion-head">How long does the process take?<span class="plusminus">+</span></div>
                <div class="accordion-body">
                    It depends on the lender we approach however most lenders are same day
                </div>
            </div>
            <div class="accordion-card">
                <div class="accordion-head"> I don’t have my financials ready?<span class="plusminus">+</span>
                </div>
                <div class="accordion-body">
                    That’s okay! We have access to numerous no/lo doc options with competitive rates
                </div>
            </div>
            <div class="accordion-card">
                <div class="accordion-head"> I haven’t borrowed money before.<span class="plusminus">+</span></div>
                <div class="accordion-body">
                    We’ve assisted 100s of first time borrowers and made the process seamless
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12 d-xl-none">
                <div class="text-center text-primary-sub h3 fw-800 line-height-3 letter-spacing-1" data-aos="fade-right">
                    <span class="text-primary">Enquire</span> With Us Today
                </div>
                <div class="text-center mt-n4 position-relative"><?= renderImg("form-mobile.png", "lib") ?></div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>