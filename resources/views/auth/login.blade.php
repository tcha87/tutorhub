@extends('layouts.app')

@section('content')

<div
id="popin-forget-password" class="popin-overlay hidden"><div
class="popin-background"></div><div
class="popin-container"><div
class="popin-close popin-close-button"></div><div
class="popin-content"><form
class="component-form-password" action="/ajax/ajax-AW.php" method="POST" novalidate><h2 class="title-popin">Forgot password?</h2><p>To retrieve your password, please enter the e-mail address associated with your account below.</p><div
class="input-container">
<input
type="email" data-type="email" name="email" class="input" placeholder="Email" />
<span
class="required-tooltip">Required Field</span>
<span
class="error-tooltip">Please enter a valid email address.</span></div>
<button
type="submit" class="button">Send</button></form></div></div></div><div
class="page"><div
class="section section-odd inscription-connexion register-student-step1"><div
class="wrapper"><div
class="register-column register-form hide"><h1 class="register-step-title">Sign up</h1><p
class="register-step-subtitle">To join the largest family of knowledge sharing</p><form
action="" method="POST" class="component-form" novalidate><div
class="form-wrapper">
<a
class="facebook-connect"  style="display:block" data-href="#" href="#" onclick="window.open('https://www.facebook.com/v2.4/dialog/oauth?client_id=1682189642092945&state=d528ac4e8091126d4518a6eb46bebe68&response_type=code&sdk=php-sdk-5.0.0&redirect_uri=http%3A%2F%2Fwww.superprof.co.uk%2Ffb-connect.php%3Fid_annonce%3D&scope=public_profile%2Cemail%2Cuser_location%2Cuser_birthday&display=popup', 'FBlogin', 'width=520, height=600');return false;">Register with Facebook</a>
<span
class="text-separator">or</span><div
class="input-text input-container">
<input
type="text" data-type="nom" placeholder="First name" name="prenom" class="input" value="" />
<span
class="required-tooltip">Required field</span>
<span
class="error-tooltip">Incorrect first name</span>
</div><div
class="input-text input-container">
<input
type="text" data-type="nom" placeholder="Last name" name="nom" class="input" value="" />
<span
class="required-tooltip">Required field</span>
<span
class="error-tooltip">Incorrect last name</span>
</div><div
class="input-text input-container">
<input
type="email" data-type="email" placeholder="E-mail" name="email" class="input" value="" />
<span
class="required-tooltip">Required field</span>
<span
class="error-tooltip">Please enter a valid email address</span>
</div><div
class="input-text input-container">
<input
type="password" data-type="required" placeholder="Password" name="password" class="input" value="" />
<span
class="required-tooltip">Required field</span>
<span
class="error-tooltip">Incorrect password</span>
</div>
<input
type="submit" value="Sign up" class="button" /><p
class="register-member">Already a Superprof member? <a
href="connection-form" class="register-member-link register-switch-panel">Login</a></p></div></form></div><div
class="register-column connection-form"><h1 class="register-step-title">Login</h1><form
action="" method="POST" class="component-form"><div
class="form-wrapper">
<a
class="facebook-connect" style="display:block" href="#" onclick="window.open('https://www.facebook.com/v2.4/dialog/oauth?client_id=1682189642092945&state=d528ac4e8091126d4518a6eb46bebe68&response_type=code&sdk=php-sdk-5.0.0&redirect_uri=http%3A%2F%2Fwww.superprof.co.uk%2Ffb-connect.php%3Fid_annonce%3D&scope=public_profile%2Cemail%2Cuser_location%2Cuser_birthday&display=popup', 'FBlogin', 'width=520, height=600');return false;">Sign in with Facebook</a>
<span
class="text-separator">or</span><div
class="input-text input-container">
<input
type="email" data-type="email" placeholder="E-mail" name="email" class="input" value="" />
<span
class="required-tooltip">Required field</span>
<span
class="error-tooltip">Email incorrect</span>
</div><div
class="input-text input-container">
<input
type="password" data-type="required" placeholder="Password" name="password" class="input" value="" />
<span
class="required-tooltip">Required field</span>
<span
class="error-tooltip">Incorrect password</span>
</div>
<input
type="submit" value="Login" class="button" /><p
class="register-member">Not yet a member? <a
href="register-form" class="register-member-link register-switch-panel">Sign up</a></p><p
class="register-member"><a
href="register-form" class="register-member-link popin-link" data-target="popin-forget-password">Forgot password?</a></p></div></form></div></div></div></div><div
class="notification valid hidden" id="errorNotification" data-timeout="15000"><div
class="wrapper"><p
class="notification-text"></p><div
class="notification-close"></div></div></div><div
class="footer"><div
class="wrapper">
<div
class="footer-inner">
<div
class="footer-inner-top"><div
class="footer-inner-cell footer-inner-cell-confidence">
</div><div
class="footer-inner-cell footer-inner-cell-socials"><h3>Social</h3><ul
class="footer-socials">
<li>
<button
class="social-facebook a-js" data-href="https://www.facebook.com/superprofworld"></button></li>

</ul></div><div
class="footer-inner-cell footer-inner-cell-profs"><h3>Tutors</h3><ul
class="list"><li><a
href="/lessons/all-tutors/united-kingdom/" title="">All Subjects</a></li>
</ul></div><div
class="footer-inner-cell footer-inner-cell-about"><h3>About</h3><ul
class="list"><li><a
href="/about-us.html" title="">Who are we?</a></li><li><a
href="/gtu.html" title="">Terms & Conditions</a></li>
<li><a
href="/contact.html" title="">Contact</a></li></ul></div></div>

<div
class="footerV2_everywhere">
<span
class="footerV2_everywhereTxt">Superprof Global</span><ul>
<li>
<span
class="footerV2_countryArc a-js" data-href="http://www.superprof.fr">Fr</span> <a
href="http://www.superprof.fr"><span
class="footerV2_country desktop-only">France</span></a></li><li>
<span
class="footerV2_countryArc a-js" data-href="http://www.superprof.be">Be</span> <a
href="http://www.superprof.be"><span
class="footerV2_country desktop-only">Belgium</span></a></li><li>
<span
class="footerV2_countryArc a-js" data-href="http://www.superprof.ca">Ca</span> <a
href="http://www.superprof.ca"><span
class="footerV2_country desktop-only">Canada</span></a></li><li>
<span
class="footerV2_countryArc a-js" data-href="http://www.superprof.ch">Ch</span> <a
href="http://www.superprof.ch"><span
class="footerV2_country desktop-only">Switzerland</span></a></li><li>
<span
class="footerV2_countryArc a-js" data-href="http://www.superprof.lu">Lu</span> <a
href="http://www.superprof.lu"><span
class="footerV2_country desktop-only">Luxembourg</span></a></li><li>
<span
class="footerV2_countryArc a-js" data-href="http://www.superprof.us">Us</span> <a
href="http://www.superprof.us"><span
class="footerV2_country desktop-only">United States</span></a></li><br
/><li>
<span
class="footerV2_countryArc a-js" data-href="http://www.superprof.es">Es</span> <a
href="http://www.superprof.es"><span
class="footerV2_country desktop-only">Spain</span></a></li><li>
<span
class="footerV2_countryArc a-js" data-href="http://www.superprof.it">It</span> <a
href="http://www.superprof.it"><span
class="footerV2_country desktop-only">Italy</span></a></li><li>
<span
class="footerV2_countryArc a-js" data-href="http://www.superprof.pt">Pt</span> <a
href="http://www.superprof.pt"><span
class="footerV2_country desktop-only">Portugal</span></a></li><li>
<span
class="footerV2_countryArc a-js" data-href="http://www.superprof.com.br">Br</span> <a
href="http://www.superprof.com.br"><span
class="footerV2_country desktop-only">Brazil</span></a></li><li>
<span
class="footerV2_countryArc a-js" data-href="http://www.superprof.de">De</span> <a
href="http://www.superprof.de"><span
class="footerV2_country desktop-only">Germany</span></a></li><li>
<span
class="footerV2_countryArc a-js" data-href="http://www.superprof.mx">Mx</span> <a
href="http://www.superprof.mx"><span
class="footerV2_country desktop-only">Mexico</span></a></li></ul></div>
</div></div></div><script src="//cdn.superprof.com/js/langue-UK-201612091534.js" type="text/javascript"></script><script src="//cdn.superprof.com/js/global-201702031408.js" type="text/javascript"></script>   	</body>
</html>

@endsection
