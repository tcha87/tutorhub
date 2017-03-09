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
                <li class="register-breadcrumb-item success">
                    <div class="register-breadcrumb-picto">2</div>
                    <p class="register-breadcrumb-name">Level</p>
                </li>
                <li class="register-breadcrumb-item current">
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
        <form class="section section-odd component-form register-teacher-step3-v2" action="" method="post">
            <div class="Register_goBack mobile-only">
                <a href="/new-listing-step-2.html" class="button button-white" type="button">&#8592; Back</a>
            </div>
            <div class="wrapper">
                <div class="Register_goBack desktop-only">
                    <a href="/new-listing-step-2.html" class="button button-white" type="button">&#8592; Back</a>
                </div>
                <h1 class="register-step-title Register_accordion_title-v2">Title of your listing</h1>
                <div class="form-section form-section-v2">
                    <div class="form-column form-column-label desktop-only">
                        <p class="form-label">
                            Write a title for your listing</p>
                    </div>
                    <div class="form-column form-column-inputs">
                        <div class="input-container register-announce-title-input input-container-v2">
                            <input class="input input-min-words" data-name="title" data-min-words="12" data-reminder="#title-input-reminder" data-wording-error-plural="___data-words___ words missing" data-wording-error-singular="___data-words___ word missing" data-wording-success-plural="___data-words___ words" data-wording-success-singular="___data-words___ words" type="text" name="announce[title]" placeholder="Write here" value="" />
                        </div>
                        <div class="register-announce-title-remaining" id="title-input-reminder"></div>

                        <div class="form-inputs-informations">
                            <p>
                                <strong>This title will be unique.  We will make sure that it isn't used by another tutor.</strong>
                            </p>
                            <p>Your headline is the key for your listing. Be creative with it, it should be catchy and contain at least 12 words. i.e.</p>
                            <ol>
                                <li>The title of the subjects you are tutoring</li>
                                <li>The town where you are located or the areas you cover</li>
                                <li>Your traits (degree, method, etc.)</li>
                            </ol>
                            <p>
                                i.e. "College student in engineering gives maths and physics lessons to secondary school pupils in London" or "Concert pianist with 15 years of experience gives piano lessons and music theory at home."</p>
                        </div>
                    </div>
                </div>
                <ul class="register-errors" id="register-errors"></ul>
                <div class="form-actions">
                    <button class="button" type="submit">
                        I validate my title
                    </button>
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
