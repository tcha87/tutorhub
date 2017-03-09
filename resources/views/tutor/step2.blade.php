@extends('layouts.app')
@section('content')
<div id="fb-root"></div>

    <div class="header-register">
        <div class="wrapper">
            <a class="header-register-logo header-logo-normal inscription_annonce" href="/" title="Go back to Superprof's homepage, the search engine of private lessons">
                <img src="//cdn.superprof.com/style/images/logo_sp.png" srcset="//cdn.superprof.com/style/images/logo_sp.png 1x,
//cdn.superprof.com/style/images/logo_sp@2x.png 2x" width="145" height="47" alt="Private lessons with Superprof" />
            </a>
            <ul class="register-breadcrumb">
                <li class="register-breadcrumb-item success">
                    <div class="register-breadcrumb-picto">1</div>
                    <p class="register-breadcrumb-name">Subjects</p>
                </li>
                <li class="register-breadcrumb-item current">
                    <div class="register-breadcrumb-picto">2</div>
                    <p class="register-breadcrumb-name">Level</p>
                </li>
                <li class="register-breadcrumb-item ">
                    <div class="register-breadcrumb-picto">3</div>
                    <p class="register-breadcrumb-name">Listing</p>
                </li>
                <li class="register-breadcrumb-item ">
                    <div class="register-breadcrumb-picto">4</div>
                    <p class="register-breadcrumb-name">Location</p>
                </li>
                <li class="register-breadcrumb-item ">
                    <div class="register-breadcrumb-picto">5</div>
                    <p class="register-breadcrumb-name">Price</p>
                </li>
                <li class="register-breadcrumb-item ">
                    <div class="register-breadcrumb-picto">6</div>
                    <p class="register-breadcrumb-name">Photo</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="page-register">
        <form class="section section-odd component-form register-teacher-step2 register-teacher-step2-v2" type="post" action="" method="post">
            <div class="wrapper">
                <div class="Register_goBack">
                    <a href="{{route('tutor.stepone')}}" class="button button-white" type="button">&#8592; Back</a>
                </div>
                <div class="form-section">
                    <h1 class="register-step-title Register_titleStep2-v2">You have chosen to give judo lessons</h1>
                    <div class="form-column form-column-label desktop-only">
                        <p class="form-label">Subject taught</p>
                        <br>
                        <div class="form-label-tip">
                            You can submit as many listings as you would like. We invite you to simply create one listing per subject (ex: one for science, one for languages, etc). After submitting this listing, you will be able to create another one for another category.</div>
                    </div>
                    <div class="form-column form-column-inputs">
                        <div class="accordion register-accordion accordion-v2" data-allow-multiple-items="false">
                            <div class="accordion-item open ">
                                <div class="Register_accordionItemAlternate">
                                    <span class="Register_accordion_title-v2 desktop-only">Judo</span>
                                    <span>Select the subjects that you would like to associate with your judo listing <span
class="discreet">(optional)</span> : </span>
                                    <div class="Register_accordion_subject-v2">

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="143" />Sports coach</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="147" />Fitness</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="321" />Bodybuilding</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="146" />Sport early-learning activities - for children</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="227" />Running</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="172" />Other sports</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="140" />Martial arts</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="168" />Tennis</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="156" />Swimming</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="142" />Boxing</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="163" />Self defense</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="148" />Soccer</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="151" />Gymnastics</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="141" />Basketball</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="274" />Zumba</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="149" />Golf</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="169" />Table tennis</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="312" />Gymnastics Rhythmic</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="255" />Thai boxing</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="150" />Aquagym</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="165" />Skiing</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="167" />Surfing</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="154" />Karate</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="145" />Horseback riding</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="152" />Handball</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="162" />Rugby</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="164" />Skateboarding</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="170" />Volleyball</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="230" />Krav maga</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="270" />Ice skating</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="161" />Rollerskating</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="279" />Hula Hoop</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="246" />Climbing</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="481" />Fencing</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="462" />Badminton</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="157" />Scuba diving</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="243" />Kung-fu</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="166" />Squash</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="520" />Windsurf</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="510" />Kitesurfing</label>

                                        <label class="register-selectable-subject component-checkbox-register checkbox">
                                            <input type="checkbox" name="subject[]" value="544" />Taekwondo</label>
                                    </div>
                                    <ul class="register-selected-subjects">
                                        <li class="register-selected-subject empty" data-empty-text="Empty">Empty</li>
                                        <li class="register-selected-subject empty" data-empty-text="Empty">Empty</li>
                                        <li class="register-selected-subject empty" data-empty-text="Empty">Empty</li>
                                        <li class="register-selected-subject empty" data-empty-text="Empty">Empty</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="form-label desktop-only">
                            <button class="button button-transparent button-medium register-suggest-button input-revealer" data-target="#suggest-subject-input" type="button">Suggest a new subject</button>
                            <div class="input-container input-revealer-input Register_inputRevealer-v2 hidden registerSuggestion " id="suggest-subject-input">
                                <input class="input" type="text" name="subject-suggested" placeholder="Please Specify" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="form-section-separator"></div>
                    <div class="form-column form-column-label">
                        <p class="form-label">
                            At what levels do you give lessons?</p>
                        <br>
                        <div class="form-label-tip">
                            Choose the level most relevant to this listing</div>
                    </div>
                    <div class="form-column form-column-inputs">
                        <div class="accordion-level-v2 register-accordion register-level">
                            <div class="accordion-item open">
                                <div class="accordion-item-header">Extra Curricular</div>
                                <div class="accordion-item-content">
                                    <label class="register-selectable-subject component-checkbox-register checkbox">
                                        <input type="checkbox" name="ids_niveaux[]" value="21" />Beginner</label>

                                    <label class="register-selectable-subject component-checkbox-register checkbox">
                                        <input type="checkbox" name="ids_niveaux[]" value="22" />Intermediate</label>

                                    <label class="register-selectable-subject component-checkbox-register checkbox">
                                        <input type="checkbox" name="ids_niveaux[]" value="23" />Advanced</label>

                                    <label class="register-selectable-subject component-checkbox-register checkbox">
                                        <input type="checkbox" name="ids_niveaux[]" value="38" />Professional</label>

                                    <label class="register-selectable-subject component-checkbox-register checkbox">
                                        <input type="checkbox" name="ids_niveaux[]" value="42" />Other</label>
                                    <div class="register-select-all-container Register_selectAllContainer-v2">
                                        <label class="register-selectable-subject register-select-all component-checkbox-register checkbox ">
                                            <input type="checkbox" />Select all</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-label desktop-only">
                            <button class="button button-transparent button-medium register-suggest-button input-revealer" data-target="#suggest-level-input" type="button">Suggest a level</button>
                            <div class="input-container input-revealer-input Register_inputRevealer-v2 hidden registerSuggestion" id="suggest-level-input">
                                <input class="input" type="text" name="level-suggested" placeholder="Please Specify" value="" />
                            </div>
                        </div>
                    </div>
                    <ul class="register-errors" id="register-errors"></ul>
                    <div class="form-actions desktop-only">
                        <button class="button" type="submit">
                            I have selected the subject of my listing
                        </button>
                    </div>
                    <div class="form-actions mobile-only">
                        <button class="button" type="submit">
                            Confirm my choices
                        </button>
                    </div>
                </div>
            </div>
            <input type="hidden" name="go" value="go" />
        </form>
    </div>
    <div class="notification valid hidden" id="errorNotification" data-timeout="15000">
        <div class="wrapper">
            <p class="notification-text"></p>
            <div class="notification-close"></div>
        </div>
    </div>
    <div class="footer">
        <p class="footer-register">Superprof_footer <span class="footer-register-heart"></span> French company (SAS) with a capital of €5,878 <span class="line-return">-</span> 16 esplanade Nathalie Sarraute, 75018 PARIS</p>
    </div>
    <script src="//cdn.superprof.com/js/langue-UK-201612091534.js" type="text/javascript"></script>
    <script src="//cdn.superprof.com/js/global-201702031408.js" type="text/javascript"></script>
</body>

</html>
