<?php
function adsense_privacy_policy_display(){
$privacypolicy='<div id="google-privacy-policy"><p>Privacy Policy for <b>'.get_bloginfo('url').'</b></p>

<p>The privacy of our visitors to <b>'.get_bloginfo('url').'</b> is important to us.</p>

<p>At <b>'.get_bloginfo('url').'</b>, we recognize that privacy of your personal information is important. Here is information on what types of personal information we receive and collect when you use and visit <b>'.get_bloginfo('url').'</b>, and how we safeguard your information.  We never sell your personal information to third parties.</p>

<p><strong>Log Files</strong>
As with most other websites, we collect and use the data contained in log files.  The information in the log files include  your IP (internet protocol) address, your ISP (internet service provider, such as AOL or Shaw Cable), the browser you used to visit our site (such as Internet Explorer or Firefox), the time you visited our site and which pages you visited throughout our site.</p>

<p><strong>Cookies and Web Beacons</strong>
We do use cookies to store information, such as your personal preferences when you visit our site.  This could include only showing you a popup once in your visit, or the ability to login to some of our features, such as forums.</p>

<p>We also use third party advertisements on <b>'.get_bloginfo('url').'</b> to support our site.  Some of these advertisers may use technology such as cookies and web beacons when they advertise on our site, which will also send these advertisers (such as Google through the Google AdSense program) information including your IP address, your ISP , the browser you used to visit our site, and in some cases, whether you have Flash installed.  This is generally used for geotargeting purposes (showing New York real estate ads to someone in New York, for example) or showing certain ads based on specific sites visited (such as showing cooking ads to someone who frequents cooking sites).</p>

<p><strong>DoubleClick DART cookies</strong>
We also may use DART cookies for ad serving through Google\'s DoubleClick, which places a cookie on your computer when you are browsing the web and visit a site using DoubleClick advertising (including some Google AdSense advertisements).  This cookie is used to serve ads specific to you and your interests ("interest based targeting").  The ads served will be targeted based on your previous browsing history (For example, if you have been viewing sites about visiting Las Vegas, you may see Las Vegas hotel advertisements when viewing a non-related site, such as on a site about hockey).  DART uses "non personally identifiable information".  It does NOT track personal information about you, such as your name, email address, physical address, telephone number, social security numbers, bank account numbers or credit card numbers.  You can opt-out of this ad serving on all sites using this advertising by visiting <a target="_blank" href="http://www.doubleclick.com/privacy/dart_adserving.aspx">http://www.doubleclick.com/privacy/dart_adserving.aspx </a></p>

<p>You can choose to disable or selectively turn off our cookies or third-party cookies in your browser settings, or by managing preferences in programs such as Norton Internet Security.  However, this can affect how you are able to interact with our site as well as other websites.  This could include the inability to login to services or programs, such as logging into forums or accounts.</p>

<p>Deleting cookies does not mean you are permanently opted out of any advertising program.  Unless you have settings that disallow cookies, the next time you visit a site running the advertisements, a new cookie will be added.</p>



		</div>
';
	return $privacypolicy;
}

?>