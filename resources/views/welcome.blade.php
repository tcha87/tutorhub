@extends('layouts.app')
@section('content')
    <div class="page">
        <div class="HomeV2">
            <div class="wrapper">
                <h1>Find <br />
the perfect tutor !</h1>
                <div class="homeV2_formContainer">
                    <form id="search-box-v3-2" class="home-search-form autocomplete-form autocomplete-form-nosubmit HomeV2_form js-homeV2form" method="post" action="http://www.superprof.co.uk/form.php">
                        <div class="HomeV2_selectContainer js-select">
                            <p class="HomeV2_select js-selectPlaceholder">In person</p>
                            <ul class="HomeV2_selectChoices">
                                <li data-value="0" class="js-selectOption">In person</li>
                                <li data-value="1" class="js-selectOption">Via webcam</li>
                                <li data-value="2" class="js-selectOption">In a group</li>
                            </ul>
                            <input type="hidden" id="search-type" class="js-adressSelect js-selectInput" value="0" name="search_type">
                        </div>
                        <div class="home-search-form-inner autocomplete">
                            <input class="HomeV2_input autocomplete-input HomeV2_wSubject" id="search_subject" type="text" placeholder="Choose a subject" name="search_subject" autocomplete="off" data-autocomplete-ajax-url="/ajax/ajax-AW.php" data-autocomplete-ajax-action="getSubjects" data-autocomplete-result-html="<div>___data___</div>" />
                            <div class="home-search-results autocomplete-results"></div>
                        </div>
                        <div class="home-search-form-inner HomeV2_adress">
                            <input name="search_city" class="HomeV2_input HomeV2_inputAddress HomeV2_GoogleAutocomplete" id="search_city" data-country-code="UK" type="text" placeholder="Address, city or neighborhood" /><span class="locate" title="Utiliser votre localisation"><span></span></span>
                            <input type="hidden" id="search_lat" name="search_lat" value="" />
                            <input type="hidden" id="search_lng" name="search_lng" value="" />
                            <input type="hidden" id="location" name="location" value="" />
                            <input type="hidden" name="v" value="v3-2" />
                            <input type="hidden" name="src" value="home" />
                            <div class="home-search-results autocomplete-results"></div>
                        </div>
                        <button class="button HomeV2_searchButton search-header-submit button-topHide" type="submit">Search</button>
                        <button type="submit" class="HomeV2_button-search" name="button"></button>
                    </form>
                </div>
                <button type="submit" class="HomeV2_button-searchMobile mobile-only" name="button">
                    Search
                </button>
                <div class="HomeV2_mobileSearchModal mobile-only">
                    <button type="button" class="button-modalSearch" name="button"></button>
                    <form class="home-search-form autocomplete-form autocomplete-form-nosubmit HomeV2_form" method="post" action="http://www.superprof.co.uk/form.php">
                        <div class="HomeV2_selectContainer js-select">
                            <p class="HomeV2_select js-selectPlaceholder">In person</p>
                            <ul class="HomeV2_selectChoices">
                                <li data-value="0" class="js-selectOption">In person</li>
                                <li data-value="1" class="js-selectOption">Via webcam</li>
                                <li data-value="2" class="js-selectOption">In a group</li>
                            </ul>
                            <input type="hidden" class="js-adressSelect js-selectInput" data-syncid="1" value="0" name="search-type">
                        </div>
                        <div class="home-search-form-inner autocomplete">
                            <input class="HomeV2_input autocomplete-input HomeV2_wSubject" data-syncid="2" type="text" placeholder="Choose a subject" name="search[subject]" autocomplete="off" data-autocomplete-ajax-url="/ajax/ajax-AW.php" data-autocomplete-ajax-action="getSubjects" data-autocomplete-result-html="<div>___data___</div>" />
                            <div class="home-search-results autocomplete-results"></div>
                        </div>
                        <div class="home-search-form-inner HomeV2_adress">
                            <input class="HomeV2_input HomeV2_inputAddress HomeV2_GoogleAutocomplete2" data-syncid="3" type="text" placeholder="Address, city or neighborhood" />
                            <div class="home-search-results autocomplete-results"></div>
                        </div>
                        <button class="button search-header-submit button-topHide" type="submit">Search</button>
                        <button type="submit" class="HomeV2_button-search" name="button"></button>
                    </form>
                </div>
            </div>


            <div class="HomeV2_profsWrapper">
                <div class="HomeV2_profsContainer">

            </div>
            <div class="HomeV2_trusts">
                <div class="wrapper HomeV2_trustsContainer">
                    <h2 class="HomeH2 HomeV2_trustsTitle">Effective,<br />
Fast, Affordable</h2>
                    <div class="HomeV2_trustsSubtitle">Learn with confidence</div>
                    <div class="HomeV2_trustsFlex">
                        <div class="HomeV2_trustsContent">
                            <div class="HomeV2_trustsIconContainer">
                                <div class="HomeV2_trustsIcon js-icon1">
                                    <span>1</span>
                                </div>
                                <div class="HomeV2_trustsBar js-bar1"></div>
                            </div>
                            <div class="HomeV2_trustsTxt js-trust1">
                                <span>Find</span>
                                <br> your hidden gem amongst accredited, evaluated and available tutors.</div>
                        </div>
                        <div class="HomeV2_trustsContent">
                            <div class="HomeV2_trustsIconContainer">
                                <div class="HomeV2_trustsIcon js-icon2">
                                    <span>2</span>
                                </div>
                                <div class="HomeV2_trustsBar js-bar2"></div>
                            </div>
                            <div class="HomeV2_trustsTxt js-trust2">
                                <span>Book</span>
                                <br> your lesson today and get a response from your tutor the same day.</div>
                        </div>
                        <div class="HomeV2_trustsContent">
                            <div class="HomeV2_trustsIconContainer">
                                <div class="HomeV2_trustsIcon js-icon3">
                                    <div class="heart"></div>
                                </div>
                            </div>
                            <div class="HomeV2_trustsTxt js-trust3">
                                <span>Maintain full freedom</span>
                                <br> The first lesson is free. Connect directly, at the best price, without intermediaries.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper HomeV2_learn">
                <h2 class="HomeH2 HomeV2_learnTitle">Learn whatever<br />
you want</h2>
                <div class="HomeV2_learnSub">
                    Become a master in the art of Calligraphy or tame the waves as a surfer.
                    <br />
                    <br /> Experience new adventures!</div>
            </div>
            <div class="HomeV2_sliderContainer js-homeSlider">
                <div class="HomeV2_slide slide-link" style="background-image: url('../cdn.superprof.com/style/images/home/slider/10/learn-guitar.jpg')" data-href="/lessons/guitar/united-kingdom/">
                    <span class="HomeV2_slideTxt">Become a rock star</span>
                </div>
                <div class="HomeV2_slide slide-link" style="background-image: url('../cdn.superprof.com/style/images/home/slider/10/learn-painting.jpg')" data-href="/lessons/painting/united-kingdom/">
                    <span class="HomeV2_slideTxt">Paint like a master painter</span>
                </div>
                <div class="HomeV2_slide slide-link" style="background-image: url('../cdn.superprof.com/style/images/home/slider/10/learn-surf.jpg')" data-href="/lessons/surf/united-kingdom/">
                    <span class="HomeV2_slideTxt">Tame the waves</span>
                </div>
            </div>
            <div class="HomeV2_list wrapper desktop-only">
                <ul>
                    <li class="HomeV2_liTitle">School Support</li>

                    <a href="lessons/academic-tutoring/united-kingdom/index.html">
                        <li>Academic tutoring <span>(2040 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/mathematics/united-kingdom/index.html">
                        <li>Mathematics <span>(2455 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/physics/united-kingdom/index.html">
                        <li>Physics <span>(1468 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/chemistry/united-kingdom/index.html">
                        <li>Chemistry <span>(1267 tutors)</span>
                        </li>
                    </a>
                </ul>
                <ul>
                    <li class="HomeV2_liTitle">Languages</li>

                    <a href="lessons/esol/united-kingdom/index.html">
                        <li>ESOL <span>(4308 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/german/united-kingdom/index.html">
                        <li>German <span>(357 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/spanish/united-kingdom/index.html">
                        <li>Spanish <span>(1703 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/italian/united-kingdom/index.html">
                        <li>Italian <span>(479 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/chinese/united-kingdom/index.html">
                        <li>Chinese <span>(199 tutors)</span>
                        </li>
                    </a>
                </ul>
                <ul>
                    <li class="HomeV2_liTitle">Music</li>

                    <a href="lessons/piano/united-kingdom/index.html">
                        <li>Piano <span>(346 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/guitar/united-kingdom/index.html">
                        <li>Guitar <span>(434 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/singing/united-kingdom/index.html">
                        <li>Singing <span>(239 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/drum/united-kingdom/index.html">
                        <li>Drum <span>(71 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/violin/united-kingdom/index.html">
                        <li>Violin <span>(94 tutors)</span>
                        </li>
                    </a>
                </ul>
                <ul>
                    <li class="HomeV2_liTitle">Sport</li>

                    <a href="lessons/sports-coach/united-kingdom/index.html">
                        <li>Sports coach <span>(146 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/rollerskating/united-kingdom/index.html">
                        <li>Rollerskating <span>(2 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/boxing/united-kingdom/index.html">
                        <li>Boxing <span>(19 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/swimming/united-kingdom/index.html">
                        <li>Swimming <span>(21 tutors)</span>
                        </li>
                    </a>
                </ul>
                <ul>
                    <li class="HomeV2_liTitle">Arts and Hobbies</li>

                    <a href="lessons/drawing/united-kingdom/index.html">
                        <li>Drawing <span>(218 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/acting/united-kingdom/index.html">
                        <li>Acting <span>(45 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/sewing/united-kingdom/index.html">
                        <li>Sewing <span>(13 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/cooking/united-kingdom/index.html">
                        <li>Cooking <span>(23 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/sculpture/united-kingdom/index.html">
                        <li>Sculpture <span>(36 tutors)</span>
                        </li>
                    </a>
                </ul>
            </div>
            <div class="wrapper">
                <h2 class="HomeH2 HomeV2_learnTitle">
Learn wherever <br />
you want</h2>
                <div class="HomeV2_iconeTxt">
                    <div class="HomeV2_icon HomeV2_webcam"></div>
                    <span>Across the world by webcam</span>
                </div>
            </div>
            <div class="HomeV2_cityContainer wrapper">
                <div class="HomeV2_city HomeV2_city-1 HomeV2_cityMR">
                    <div class="HomeV2_city_bg" style="background-image: url('../cdn.superprof.com/style/images/home/world/10/learn-french-paris.jpg')">
                        <a href="lessons/french/united-kingdom/index.html">
                            <div class="HomeV2_cityTxt">French
                                <br /> with Parisians</div>
                        </a>
                    </div>
                </div>
                <div class="HomeV2_city HomeV2_city-2 HomeV2_cityMR">
                    <div class="HomeV2_city_bg" style="background-image: url('../cdn.superprof.com/style/images/home/world/10/learn-spanish-barcelona.jpg')">
                        <a href="lessons/spanish/united-kingdom/index.html">
                            <div class="HomeV2_cityTxt">Spanish
                                <br /> from Barcelona</div>
                        </a>
                    </div>
                </div>
                <div class="HomeV2_city HomeV2_city-3 HomeV2_cityMR desktop-only">
                    <div class="HomeV2_city_bg" style="background-image: url('../cdn.superprof.com/style/images/home/world/10/learn-italian.jpg')">
                        <a href="lessons/italian/united-kingdom/index.html">
                            <div class="HomeV2_cityTxt">Italian</div>
                        </a>
                    </div>
                </div>
                <div class="HomeV2_city HomeV2_city-4 HomeV2_cityMR desktop-only">
                    <div class="HomeV2_city_bg" style="background-image: url('../cdn.superprof.com/style/images/home/world/10/learn-chinese.jpg')">
                        <a href="lessons/chinese/united-kingdom/index.html">
                            <div class="HomeV2_cityTxt">Chinese</div>
                        </a>
                    </div>
                </div>
                <div class="HomeV2_city HomeV2_city-5 HomeV2_cityMR">
                    <div class="HomeV2_city_bg" style="background-image: url('../cdn.superprof.com/style/images/home/world/10/learn-brazilian.jpg')">
                        <a href="lessons/brazilian-portuguese/united-kingdom/index.html">
                            <div class="HomeV2_cityTxt">Portuguese
                                <br /> with a Brazilian</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="HomeV2_iconeTxt">
                    <div class="HomeV2_icon HomeV2_position"></div>
                    <span>At your home in person</span>
                </div>
            </div>
            <div class="HomeV2_list HomeV2_list_town wrapper">
                <ul class="ulV2">

                    <a href="lessons/all-tutors/london/index.html">
                        <li>London <span>(477 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/all-tutors/edinburgh/index.html">
                        <li>Edinburgh <span>(40 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/all-tutors/belfast/index.html">
                        <li>Belfast <span>(20 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/all-tutors/cardiff/index.html">
                        <li>Cardiff <span>(20 tutors)</span>
                        </li>
                    </a>
                </ul>
                <ul class="ulV2">

                    <a href="lessons/all-tutors/manchester/index.html">
                        <li>Manchester <span>(37 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/all-tutors/birmingham/index.html">
                        <li>Birmingham <span>(48 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/all-tutors/leeds/index.html">
                        <li>Leeds <span>(34 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/all-tutors/glasgow/index.html">
                        <li>Glasgow <span>(52 tutors)</span>
                        </li>
                    </a>
                </ul>
                <ul class="ulV2 desktop-only">

                    <a href="lessons/all-tutors/sheffield/index.html">
                        <li>Sheffield <span>(26 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/all-tutors/liverpool/index.html">
                        <li>Liverpool <span>(34 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/all-tutors/bradford/index.html">
                        <li>Bradford <span>(20 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/all-tutors/nottingham/index.html">
                        <li>Nottingham <span>(21 tutors)</span>
                        </li>
                    </a>
                </ul>
                <ul class="ulV2 desktop-only">

                    <a href="lessons/all-tutors/bristol/index.html">
                        <li>Bristol <span>(42 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/all-tutors/leicester/index.html">
                        <li>Leicester <span>(20 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/all-tutors/hull/index.html">
                        <li>Hull <span>(5 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/all-tutors/coventry/index.html">
                        <li>Coventry <span>(20 tutors)</span>
                        </li>
                    </a>
                </ul>
                <ul class="ulV2 desktop-only">

                    <a href="lessons/all-tutors/derby/index.html">
                        <li>Derby <span>(20 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/all-tutors/plymouth/index.html">
                        <li>Plymouth <span>(10 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/all-tutors/stoke-on-trent/index.html">
                        <li>Stoke-on-trent <span>(8 tutors)</span>
                        </li>
                    </a>

                    <a href="lessons/all-tutors/wolverhampton/index.html">
                        <li>Wolverhampton <span>(20 tutors)</span>
                        </li>
                    </a>
                </ul>
            </div>
            <div class="HomeV2_becomeProf" style="background-image: url('../cdn.superprof.com/style/images/home/background/10/give-lessons.jpg')">

        </div>
    </div>
    <div class="notification valid hidden" id="errorNotification" data-timeout="15000">
        <div class="wrapper">
            <p class="notification-text"></p>
            <div class="notification-close"></div>
        </div>
    </div>
@include('layouts.footer')
    <script src="../cdn.superprof.com/js/langue-UK-201612091534.js" type="text/javascript"></script>
    <script src="../cdn.superprof.com/js/global-201702031408.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyDPqdMfC58RjYb3iU_2Emb_hbdIboo5KQQ&amp;language=en-uk"></script>
</body>

<!-- Mirrored from www.superprof.co.uk/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Feb 2017 08:45:20 GMT -->

</html>
