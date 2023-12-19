<?php

use Illuminate\Support\Str;
use function Laravel\Folio\name;

name('terms');
?>

@extends('layouts.marketing')

@section('pageTitle')
Terms of Service
@endsection

@section('content')
<section class="primary-section">
    <div class="px-4 pt-8 pb-4 mx-auto w-3/4 max-w-screen-xl lg:pt-24">
        <h1 class="text-center">Terms of Service</h1>
        <p class="text-gray-400">Last updated: 19 December 2023</p>
        <p class="text-gray-400">{{ config('app.company_name') }} policies are open source, licensed under <a href="https://creativecommons.org/licenses/by/4.0/">CC BY 4.0</a>. Adapted from the <a href="https://github.com/basecamp/policies">Basecamp open-source policies</a> / <a href="https://creativecommons.org/licenses/by/4.0/">CC BY 4.0</a></p>
        <div>
            <p>From everyone at Toybox, thank you for using our products! We build them to help you do your best work. Because we don’t know every one of our customers personally, we have to put in place some Terms of Service to help keep the ship afloat.</p>
            <p>When we say “Company”, “we”, “our”, or “us” in this document, we are referring to <a href="{{ route('home') }}">Toybox</a>.</p>
            <p>When we say “Service”, we mean the Toybox application, whether delivered within a web browser, desktop application, mobile application, or another format.</p>
            <p>When we say “You” or “your”, we are referring to the people or organizations that own an account with one or more of our Services.</p>
            <p>We may update these Terms of Service ("Terms") in the future. Whenever we make a significant change to our policies, we will refresh the date at the top of this page and take any other appropriate steps to notify account holders.</p>
            <p>When you use our Services, now or in the future, you are agreeing to the latest Terms. There may be times where we do not exercise or enforce a right or provision of the Terms; however, that does not mean we are waiving that right or provision. <strong>These Terms do contain a limitation of our liability.</strong></p>
            <p>If you violate any of the Terms, we may terminate your account. That’s a broad statement and it means you need to place a lot of trust in us. We do our best to deserve that trust.</p>
            <h2>Account Terms</h2>
            <ol>
                <li>You are responsible for maintaining the security of your account and password and for ensuring that any of your users do the same. The Company cannot and will not be liable for any loss or damage from your failure to comply with this security obligation. We recommend all users set up two-factor authentication for added security, if the Service provides it. For some features, we may require it.</li>
                <li>You may not use the Services for any purpose outlined in our <a href="#usage-restrictions">Usage Restrictions</a>, and you may not permit any of your users to do so, either.</li>
                <li>You are responsible for all content posted to and activity that occurs under your account, including content posted by and activity of any users in your account.</li>
                <li>You must be a human. Accounts registered by “bots” or other automated methods are not permitted.</li>
            </ol>
            <h2 id="usage-restrictions">Usage Restrictions</h2>
            <p>When you use any of 37signals’ Services, you acknowledge that you may not:</p>
            <ul>
                <li>Collect or extract information and/or user data from accounts which do not belong to you.</li>
                <li>Circumvent, disable, or otherwise interfere with security-related features of the Services.</li>
                <li>Trick, defraud, or mislead us or other users, including but not limited to making false reports or impersonating another user.</li>
                <li>Upload or transmit (or attempt to upload or to transmit) viruses or any type of malware, or information collection mechanism, including 1×1 pixels, web bugs, cookies, or other similar devices.</li>
                <li>Interfere with, disrupt, or create an undue burden on the Services or the networks or the Services connected.</li>
                <li>Harass, annoy, intimidate, or threaten others, or any of our employees engaged in providing any portion of the Services to you.</li>
                <li>Disparage, tarnish, or otherwise harm, in our opinion, us and/or the Services.</li>
                <li>Use the Services in a manner inconsistent with any applicable laws or regulations.</li>
            </ul>
            <p>Accounts found to be in violation of any of the above are subject to cancellation without prior notice.</p>
            <h3>How to report abuse</h3>
            <p>Violations can be reported by using the contact form found on this website, and should include detailed information about the account, the content or behavior you are reporting, and how you found it, including URLs or screenshots. If you need a secure file transfer, let us know and we will send you a link. We will not disclose your identity to anyone associated with the reported account.</p>
            <h2>Payment, Refunds, and Plan Changes</h2>
            <ol>
                <li>If you are using a free version of one of our Services, it is really free: we do not ask you for your credit card and — just like for customers who pay for our Services — we do not sell your data.</li>
                <li>For paid Services that offer a free trial, we explain the length of trial when you sign up. After the trial period, you need to pay in advance to keep using the Service. If you do not pay, we will freeze your account and it will be inaccessible until you make payment. If your account has been frozen for a while, we will queue it up for auto-cancellation.
                <li>If you are upgrading from a free plan to a paid plan, we will charge your card immediately and your billing cycle starts on the day of upgrade. For other upgrades or downgrades in plan level, the new rate starts from the next billing cycle.</li>
                <li>All fees are exclusive of all taxes, levies, or duties imposed by taxing authorities. Where required, we will collect those taxes on behalf of the taxing authority and remit those taxes to taxing authorities. Otherwise, you are responsible for payment of all taxes, levies, or duties.</li>
                <li>We process refunds according to our <a href="#refund-policy">Fair Refund policy</a>.</li>
            </ol>
            <h3 id="refund-policy">Refund Policy</h3>
            <p>Bad refund policies are infuriating. You feel like the company is just trying to rip you off. We never want our customers to feel that way, so our refund policy is simple: If you’re ever unhappy with our products* for any reason, just <a href="{{ route('contact-us') }}">contact us</a> and we'll take care of you.</p>
            <h4>Examples of full refunds we’d grant.</h4>
            <ul>
                <li>If you were just charged for your next month of service but you meant to cancel, we’re happy to refund that extra charge.</li>
                <li>If you forgot to cancel your account a couple months ago and you haven’t used it since then, we’ll give you a full refund for a few back months. No problem.</li>
                <li>If you tried one of our products for a couple months and you just weren’t happy with it, you can have your money back.</li>
            </ul>
            <h4>Examples of partial refunds or credits we’d grant.</h4>
            <ul>
                <li>If you forgot to cancel your account a year ago, and there’s been activity on your account since then, we’ll review your account usage and figure out a partial refund based on how many months you used it.</li>
                <li>If you upgraded your account a few months ago to a higher plan and kept using it in general but you didn’t end up using the extra features, projects, or storage space, we’d consider applying a prorated credit towards future months.</li>
            </ul>
            <h2 id="cancellation-policy">Cancellation and Termination</h2>
            <ol>
                <li>You are solely responsible for properly canceling your account. Within each of our Services, we provide a simple no-questions-asked cancellation link. An email or phone request to cancel your account is not automatically considered cancellation. If you need help canceling your account, you can always <a href="{{ route('contact-us') }}">contact us</a>.</li>
                <li>All of your content will be inaccessible from the Services immediately upon account cancellation. Within 30 days, all content will be permanently deleted from active systems and logs. Within 60 days, all content will be permanently deleted from our backups. We cannot recover this information once it has been permanently deleted. If you want to export any data before your account is canceled, .</li>
                <li>If you cancel the Service before the end of your current paid up month, your cancellation will take effect immediately, and you will not be charged again. We do not automatically prorate unused time in the last billing cycle. See our <a href="#refund-policy">Fair Refund policy</a> for more details.</li>
                <li>We have the right to suspend or terminate your account and refuse any and all current or future use of our Services for any reason at any time. Suspension means you and any other users on your account will not be able to access the account or any content in the account. Termination will furthermore result in the deletion of your account or your access to your account, and the forfeiture and relinquishment of all content in your account. We also reserve the right to refuse the use of the Services to anyone for any reason at any time. We have this clause because statistically speaking, out of the hundreds of thousands of accounts on our Services, there is at least one doing something nefarious. There are some things we staunchly stand against and this clause is how we exercise that stance. For more details, see our <a href="#usage-restrictions">Usage Restrictions policy</a>.</li>
                <li>Verbal, physical, written or other abuse (including threats of abuse or retribution) of a Company employee or officer will result in immediate account termination.</li>
            </ol>
            <h2>Modifications to the Service and Prices</h2>
            <ol>
                <li>We make a promise to our customers to support our Services for as long as possible. That means when it comes to security, privacy, and customer support, we will continue to maintain any legacy Services. Sometimes it becomes technically impossible to continue a feature or we redesign a part of our Services because we think it could be better or we decide to close new signups of a product. We reserve the right at any time to modify or discontinue, temporarily or permanently, any part of our Services with or without notice.</li>
                <li>Sometimes we change the pricing structure for our products. When we do that, we tend to exempt existing customers from those changes. However, we may choose to change the prices for existing customers. If we do so, we will give at least 30 days notice and will notify you via the email address on record. We may also post a notice about changes on our websites or the affected Services themselves.</li>
            </ol>
            <h2>Uptime, Security, and Privacy</h2>
            <ol>
                <li>Your use of the Services is at your sole risk. We provide these Services on an “as is” and “as available” basis. We do not offer service-level agreements for most of our Services, but do take uptime of our applications seriously.</li>
                <li>We reserve the right to temporarily disable your account if your usage significantly exceeds the average usage of other customers of the Services. Of course, we’ll reach out to the account owner before taking any action except in rare cases where the level of use may negatively impact the performance of the Service for other customers.</li>
                <li>We take many measures to protect and secure your data through backups, redundancies, and encryption. We enforce encryption for data transmission from the public Internet.</li>
                <li>
                    When you use our Services, you entrust us with your data. We take that trust to heart. You agree that Toybox may process your data as described in our <a href="{{ route('privacy-policy') }}">Privacy Policy</a> and for no other purpose. We as humans can access your data for the following reasons:
                    <ul>
                        <li>
                            <strong>To help you with support requests you make.</strong> We’ll ask for express consent before accessing your account.
                        </li>
                        <li>
                            <strong>On the rare occasions when an error occurs that stops an automated process partway through.</strong> We get automated alerts when such errors occur. When we can fix the issue and restart automated processing without looking at any personal data, we do. In rare cases, we have to look at a minimum amount of personal data to fix the issue. In these rare cases, we aim to fix the root cause to prevent the errors from recurring.
                        </li>
                        <li>
                            <strong>To safeguard Toybox.</strong> We’ll look at logs and metadata as part of our work to ensure the security of your data and the Services as a whole. If necessary, we may also access accounts as part of an <a href="../abuse/how-we-handle/index.md">abuse report investigation</a>.
                        </li>
                        <li>
                            <strong>To the extent required by applicable law.</strong> As a {country} company with all data infrastructure located in {country}, we only preserve or share customer data if compelled by a {country} government authority with a legally binding order or proper request under the Stored Communications Act, or in limited circumstances in the event of an emergency request. If a non-{country} authority approaches Toybox for assistance, our default stance is to refuse unless the order has been approved by the {country} government, which compels us to comply through procedures outlined in an established mutual legal assistance treaty or agreement mechanism. If Toybox is audited by a tax authority, we only share the bare minimum billing information needed to complete the audit.
                        </li>
                    </ul>
                </li>
            </ol>
            <ol>
                <li>We use third party vendors and hosting partners to provide the necessary hardware, software, networking, storage, and related technology required to run the Services.</li>
                <li>In accordance with various privacy laws, such as the CCPA, GDPR, UK GDPR, and POPIA, we process any data you share with us only for the purpose you signed up for and as described in these Terms, the <a href="{{ route('privacy-policy') }}">Privacy policy</a>. We do not retain, use, disclose, or sell any of that information for any other commercial purposes unless we have your explicit permission. And on the flip-side, you agree to comply with your requirements under these regulations and not use the Service in a way that violates the regulations.</li>
            </ol>
            <h2>Copyright and Content Ownership</h2>
            <ol>
                <li>All content posted on the Services must comply with {country} copyright law.</li>
                <li>You give us a limited license to use the content posted by you and your users in order to provide the Services to you, but we claim no ownership rights over those materials. All materials you submit to the Services remain yours.</li>
                <li>We do not pre-screen content, but we reserve the right (but not the obligation) in our sole discretion to refuse or remove any content that is available via the Service.</li>
                <li>The Company or its licensors own all right, title, and interest in and to the Services, including all intellectual property rights therein, and you obtain no ownership rights in the Services as a result of your use. You may not duplicate, copy, or reuse any portion of the HTML, CSS, JavaScript, or visual design elements without express written permission from the Company. You must request permission to use the Company’s logos or any Service logos for promotional purposes. Please <a href="{{ route('contact-us') }}">contact us</a> for requests to use logos. We reserve the right to rescind any permissions if you violate these Terms.</li>
                <li>You agree not to reproduce, duplicate, copy, sell, resell or exploit any portion of the Services, use of the Services, or access to the Services without the express written permission of the Company.</li>
            </ol>
            <h2>Features and Bugs</h2>
            <p>We design our Services with care, based on our own experience and the experiences of customers who share their time and feedback. However, there is no such thing as a service that pleases everybody. We make no guarantees that our Services will meet your specific requirements or expectations.</p>
            <p>We also test all of our features extensively before shipping them. As with any software, our Services inevitably have some bugs. We track the bugs reported to us and work through priority ones, especially any related to security or privacy. Not all reported bugs will get fixed and we don’t guarantee completely error-free Services.</p>
            <h2>Services Adaptations and API Terms</h2>
            <p>We may offer Application Program Interfaces (“API”s) for the Service. Any use of the API, including through a third-party product that accesses the Services, is bound by these Terms plus the following specific terms:</p>
            <ol>
                <li>You expressly understand and agree that we are not liable for any damages or losses resulting from your use of the API or third-party products that access data via the API.</li>
                <li>Third parties may not access and employ the API if the functionality is part of an application that remotely records, monitors, or reports a Service user’s activity <em>other than time tracking</em>, both inside and outside the applications. The Company, in its sole discretion, will determine if an integration service violates this bylaw. A third party that has built and deployed an integration for the purpose of remote user surveillance will be required to remove that integration.</li>
                <li>Abuse or excessively frequent requests to the Services via the API may result in the temporary or permanent suspension of your account’s access to the API. The Company, in its sole discretion, will determine abuse or excessive usage of the API. If we need to suspend your account’s access, we will attempt to warn the account owner first. If your API usage could or has caused downtime, we may cut off access without prior notice.</li>
            </ol>
            <h2>Liability</h2>
            <p>We mention liability throughout these Terms but to put it all in one section:</p>
            <p><em><strong>You expressly understand and agree that the Company shall not be liable, in law or in equity, to you or to any third party for any direct, indirect, incidental, lost profits, special, consequential, punitive or exemplary damages, including, but not limited to, damages for loss of profits, goodwill, use, data or other intangible losses (even if the Company has been advised of the possibility of such damages), resulting from: (i) the use or the inability to use the Services; (ii) the cost of procurement of substitute goods and services resulting from any goods, data, information or services purchased or obtained or messages received or transactions entered into through or from the Services; (iii) unauthorized access to or alteration of your transmissions or data; (iv) statements or conduct of any third party on the service; (v) or any other matter relating to these Terms or the Services, whether as a breach of contract, tort (including negligence whether active or passive), or any other theory of liability.</strong></em></p>
            <p>In other words: choosing to use our Services does mean you are making a bet on us. If the bet does not work out, that’s on you, not us. We do our darnedest to be as safe a bet as possible through careful management of the business; investments in security, infrastructure, and talent; and in general giving a damn. If you choose to use our Services, thank you for betting on us.</p>
            <p>If you have a question about any of these Terms, please <a href="{{ route('contact-us') }}">contact us</a>.</p>
        </div>
    </div>
</section>
@endsection
