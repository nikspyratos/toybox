<?php

use function Laravel\Folio\name;

name('privacy-policy');

?>

@extends('layouts.marketing')

@section('pageTitle')
Privacy Policy
@endsection

@section('content')
<section class="primary-section">
    <div class="px-4 pt-8 pb-4 mx-auto w-3/4 max-w-screen-xl lg:pt-24">
        <h1 class="text-center">Privacy Policy</h1>
        <p class="text-gray-400">Last updated: 19 December 2023</p>
        <p class="text-gray-400">{{ config('app.company_name') }} policies are open source, licensed under <a href="https://creativecommons.org/licenses/by/4.0/">CC BY 4.0</a>. Adapted from the <a href="https://github.com/basecamp/policies">Basecamp open-source policies</a> / <a href="https://creativecommons.org/licenses/by/4.0/">CC BY 4.0</a></p>
        <div>
            <p>The privacy of your data—and it is your data, not ours!—is a big deal to us. In this policy, we lay out: what data we collect and why; how your data is handled; and your rights with respect to your data. We promise we never sell your data: never have, never will.</p>
            <p>This policy is split into sections. For your convenience, links to each of those sections is as follows:</p>
            <ul>
                <li>
                    <a href="#what-we-collect-and-why">What we collect and why</a>
                </li>
                <li>
                    <a href="#when-we-access-or-disclose-your-information">When we access or disclose your information</a>
                </li>
                <li>
                    <a href="#your-rights-with-respect-to-your-information">Your rights with respect to your information</a>
                </li>
                <li>
                    <a href="#how-we-secure-your-data">How we secure your data</a>
                </li>
                <li>
                    <a href="#what-happens-when-you-delete-content-in-your-product-accounts">What happens when you delete content in your product accounts</a>
                </li>
                <li>
                    <a href="#data-retention">Data retention</a>
                </li>
                <li>
                    <a href="#location-of-site-and-data">Location of site and data</a>
                </li>
                <li>
                    <a href="#when-transferring-personal-data-from-the-eu">When transferring personal data from the EU</a>
                </li>
                <li>
                    <a href="#changes-and-questions">Changes and questions</a>
                </li>
            </ul>
            <p>This policy applies to {{ config('app.name') }} built and maintained by {{ config('app.company_name') }}.</p>
            <p>This policy applies to our handling of information about site visitors, prospective customers, and customers and authorized users (in relation to their procurement of the services and management of their relationship with {{ config('app.company_name') }}). We refer collectively to these categories of individuals as "you" throughout this policy.</p>
            <p>However, this policy does not cover information about a customer’s end users that {{ config('app.company_name') }} receives from a customer, or otherwise processes on a customer’s behalf, in connection with the services provided by {{ config('app.company_name') }} to the customer pursuant to an applicable services agreement (including the content of messages of customer end users ("End User Communications")). {{ config('app.company_name') }} processes End User Communications under the instructions of the relevant customer, which is the "data controller" or "business" (or occupies a similar role as defined in applicable privacy laws), as described in the applicable services agreement between such customer and {{ config('app.company_name') }}. {{ config('app.company_name') }}’s obligations as a "data processor" or "service provider" with respect to such information are defined in such services agreement and applicable data protection addendum and are not made part of this policy.</p>
            <p>If you are a customer’s end user and you have questions about how your information is collected and processed through the services, please contact the organization who has provided your information to us for more information.</p>
            <h2 id="what-we-collect-and-why">What we collect and why</h2>
            <p>Our guiding principle is to collect only what we need. Here’s what that means in practice:</p>
            <h3>Identity and access</h3>
            <p>When you sign up for a {{ config('app.company_name') }} product, we ask for identifying information such as your name, email address, and maybe a company name. That’s so you can personalize your new account, and we can send you product updates and other essential information. We may also send you optional surveys from time to time to help us understand how you use our products and to make improvements. With your consent, we will send you our newsletter and other updates. We sometimes also give you the option to add a profile picture that displays in our products.</p>
            <p>We’ll never sell your personal information to third parties, and we won’t use your name or company in marketing statements without your permission either.</p>
            <h3>Billing information</h3>
            <p>If you sign up for a paid {{ config('app.company_name') }} product, you will be asked to provide your payment information and billing address. Credit card information is submitted directly to our payment processor and doesn’t hit {{ config('app.company_name') }} servers. We store a record of the payment transaction, including the last 4 digits of the credit card number, for purposes of account history, invoicing, and billing support. We store your billing address so we can charge you for service, calculate any sales tax due, send you invoices, and detect fraudulent credit card transactions. We occasionally use aggregate billing information to guide our marketing efforts.</p>
            <h3>Product interactions</h3>
            <p>We store on our servers the content that you upload or receive or maintain in your {{ config('app.company_name') }} product accounts. This is so you can use our products as intended. We keep this content as long as your account is active. If you delete your account, we’ll delete the content within 60 days.</p>
            <h3>Website interactions</h3>
            <p>We collect information about your browsing activity for analytics and statistical purposes such as conversion rate testing and experimenting with new product designs. This includes, for example, your browser and operating system versions, your IP address, which web pages you visited and how long they took to load, and which website referred you to us. If you have an account and are signed in, these web analytics data are tied to your IP address and user account until your account is no longer active. The web analytics we use are described further in the Advertising and Cookies section.</p>
            <h3>Anti-bot assessments</h3>
            <p>We may use <a href="https://en.wikipedia.org/wiki/CAPTCHA">CAPTCHA</a> technologies across our applications to mitigate brute force logins and as a means of spam protection. We have a legitimate interest in protecting our apps and the broader Internet community from credential stuffing attacks and spam. When you log into your {{ config('app.company_name') }} accounts and when you fill in certain forms, the CAPTCHA service evaluates various information (e.g., IP address, how long the visitor has been on the app, mouse movements) to try to detect if the activity is from an automated program instead of a human. The CAPTCHA service then provides {{ config('app.company_name') }} with the spam score results; we do not have access to the evaluated information.</p>
            <h3>Advertising and Cookies</h3>
            <p>{{ config('app.company_name') }} may run contextual ads on various third-party platforms such as Google, Reddit, and LinkedIn. Users who click on one of our ads will be sent to the {{ config('app.name') }} marketing site. Where permissible under law, we may load an ad-company script on their browsers that sets a third-party cookie and sends information to the ad network to enable evaluation of the effectiveness of our ads, e.g., which ad they clicked and which keyword triggered the ad, and whether they performed certain actions such as clicking a button or submitting a form.</p>
            <p>We also use persistent first-party cookies and some third-party cookies to store certain preferences, make it easier for you to use our applications, and perform A/B testing as well as support some analytics.</p>
            <p>A cookie is a piece of text stored by your browser. It may help remember login information and site preferences. It might also collect information such as your browser type, operating system, web pages visited, duration of visit, content viewed, and other click-stream data. You can adjust cookie retention settings and accept or block individual cookies in your browser settings, although our apps won’t work and other aspects of our service may not function properly if you turn cookies off.</p>
            <h3>Voluntary correspondence</h3>
            <p>When you email {{ config('app.company_name') }} with a question or to ask for help, we keep that correspondence, including your email address, so that we have a history of past correspondence to reference if you reach out in the future.</p>
            <p>We also store information you may volunteer, for example, written responses to surveys. If you agree to a customer interview, we may ask for your permission to record the conversation for future reference or use. We will only do so with your express consent.</p>
            <h2 id="when-we-access-or-disclose-your-information">When we access or disclose your information</h2>
            <p>We may disclose your information at your direction if you integrate a third-party service into your use of our products.</p>
            <p>No {{ config('app.company_name') }} human looks at your content except for limited purposes with your express permission, for example, if an error occurs that stops an automated process from working and requires manual intervention to fix. These are rare cases, and when they happen, we look for root cause solutions as much as possible to avoid them recurring. We may also access your data if required in order to respond to legal process (see "When required under applicable law" below).</p>
            <p><strong>To exclude you from seeing our ads.</strong> Where permissible by law and if you have a {{ config('app.name') }} account, we may disclose a one-way hash of your email address with ad companies to exclude you from seeing our ads.</p>
            <p><strong>To help you troubleshoot or squash a software bug, with your permission.</strong> If at any point we need to access your content to help you with a support case, we will ask for your consent before proceeding.</p>
            <p><strong>To investigate, prevent, or take action regarding <a href="{{ route('terms') }}#restricted-usage">restricted uses</a>.</strong> Accessing a customer’s account when investigating potential abuse is a measure of last resort. We want to protect the privacy and safety of both our customers and the people reporting issues to us, and we do our best to balance those responsibilities throughout the process. If we discover you are using our products for a restricted purpose, we will take action as necessary, including notifying appropriate authorities where warranted.</p>
            <p><strong>Aggregated and de-identified data.</strong> We may aggregate and/or de-identify information collected through the services. We may use de-identified or aggregated data for any purpose, including marketing or analytics.</p>
            <p><strong>When required under applicable law.</strong> {{ config('app.company_name') }} is a {country} company and all data infrastructure are located in {country}.</p>
            <ul>
                <li>
                    <p>Requests for user data. Our policy is to not respond to government requests for user data unless we are compelled by legal process or in limited circumstances in the event of an emergency request. However, if {country} law enforcement authorities have the necessary warrant, criminal subpoena, or court order requiring us to disclose data, we must comply. Likewise, we will only respond to requests from government authorities outside {country} if compelled by {country} government through procedures outlined in a mutual legal assistance treaty or agreement. It is {{ config('app.company_name') }}’ policy to notify affected users before we disclose data unless we are legally prohibited from doing so, and except in some emergency cases.</p>
                </li>
                <li>
                    <p>Preservation requests. Similarly, {{ config('app.company_name') }}’ policy is to comply with requests to preserve data only if compelled by {country} laws, or by a properly served {country} subpoena for civil matters. We do not disclose preserved data unless required by law or compelled by a court order that we choose not to appeal. Furthermore, unless we receive a proper warrant, court order, or subpoena before the required preservation period expires, we will destroy any preserved copies of customer data at the end of the preservation period.</p>
                </li>
                <li>
                    <p>If we are audited by a tax authority, we may be required to disclose billing-related information. If that happens, we will disclose only the minimum needed, such as billing addresses and tax exemption information.</p>
                </li>
            </ul>
            <p>Finally, if {{ config('app.company_name') }} is acquired by or merges with another company — we don’t plan on that, but if it happens — we’ll notify you well before any of your personal information is transferred or becomes subject to a different privacy policy.</p>
            <h2 id="your-rights-with-respect-to-your-information">Your rights with respect to your information</h2>
            <p>At {{ config('app.company_name') }}, we strive to apply the same data rights to all customers, regardless of their location. Some of these rights include:</p>
            <ul>
                <li>
                    <strong>Right to Know.</strong> You have the right to know what personal information is collected, used, shared or sold. We outline both the categories and specific bits of data we collect, as well as how they are used, in this privacy policy.
                </li>
                <li>
                    <strong>Right of Access.</strong> This includes your right to access the personal information we gather about you, and your right to obtain information about the sharing, storage, security and processing of that information.
                </li>
                <li>
                    <strong>Right to Correction.</strong> You have the right to request correction of your personal information.
                </li>
                <li>
                    <strong>Right to Erasure / “To Be Forgotten”.</strong> This is your right to request, subject to certain limitations under applicable law, that your personal information be erased from our possession and, by extension, from all of our service providers. Fulfillment of some data deletion requests may prevent you from using {{ config('app.company_name') }} services because our applications may then no longer work. In such cases, a data deletion request may result in closing your account.
                </li>
                <li>
                    <strong>Right to Complain.</strong> You have the right to make a complaint regarding our handling of your personal information with the appropriate supervisory authority.
                </li>
                <li>
                    <strong>Right to Restrict Processing.</strong> This is your right to request restriction of how and why your personal information is used or processed, including opting out of sale of your personal information. (Again: we never have and never will sell your personal data.)
                </li>
                <li>
                    <strong>Right to Object.</strong> You have the right, in certain situations, to object to how or why your personal information is processed.
                </li>
                <li>
                    <strong>Right to Portability.</strong> You have the right to receive the personal information we have about you and the right to transmit it to another party. If you want to export data from your accounts, you can do so directly by following these instructions for
                </li>
                <li>
                    <strong>Right to not Be Subject to Automated Decision-Making.</strong> You have the right to object to and prevent any decision that could have a legal or similarly significant effect on you from being made solely based on automated processes. This right is limited if the decision is necessary for performance of any contract between you and us, is allowed by applicable law, or is based on your explicit consent.
                </li>
                <li>
                    <strong>Right to Non-Discrimination.</strong> We do not and will not charge you a different amount to use our products, offer you different discounts, or give you a lower level of customer service because you have exercised your data privacy rights. However, the exercise of certain rights may, by virtue of your exercising those rights, prevent you from using our Services.
                </li>
            </ul>
            <p>Many of these rights can be exercised by signing in and updating your account information. Please note that certain information may be exempt from such requests under applicable law. For example, we need to retain certain information in order to provide our services to you.</p>
            <p>In some cases, we also need to take reasonable steps to verify your identity before responding to a request, which may include, at a minimum, depending on the sensitivity of the information you are requesting and the type of request you are making, verifying your name and email address. If we are unable to verify you, we may be unable to respond to your requests. If you have questions about exercising these rights or need assistance, please <a href="mailto:{{config('app.contact-email')}}">contact us</a>. If an authorized agent is corresponding on your behalf, we will need written consent with a signature from the account holder before proceeding.</p>
            <p>Depending on applicable law, you may have the right to appeal our decision to deny your request, if applicable. We will provide information about how to exercise that right in our response denying the request. You also have the right to lodge a complaint with a supervisory authority. If you are in the EU or UK, you can contact your data protection authority to file a complaint or learn more about local privacy laws.</p>
            <h2 id="how-we-secure-your-data">How we secure your data</h2>
            <p>All data is encrypted via <a href="https://en.wikipedia.org/wiki/Transport_Layer_Security">SSL/TLS</a> when transmitted from our servers to your browser.</p>
            <h2 id="what-happens-when-you-delete-content-in-your-product-accounts">What happens when you delete content in your product accounts</h2>
            <p>In many of our applications, we give you the option to trash content. Anything you trash in your product accounts while they are active will be kept in an accessible trash can for about 25 days (it varies a little by product). After that time, the trashed content cannot be accessed via the application and we are not able to retrieve it for you. The trashed content may remain on our active servers for another 30 days, and copies of the content may be held in backups of our application databases for up to another 30 days after that. Altogether, any content trashed in your product accounts should be purged from all of our systems and logs within 90 days.</p>
            <p>If you choose to cancel your account, your content will become immediately inaccessible and should be purged from our systems in full within 60 days. This applies both for cases when an account owner directly cancels and for auto-canceled accounts. Please refer to our <a href="{{ route('terms') }}#cancellation-policy">Cancellation policy</a> for more details.</p>
            <h2 id="data-retention">Data retention</h2>
            <p>We keep your information for the time necessary for the purposes for which it is processed. The length of time for which we retain information depends on the purposes for which we collected and use it and your choices, after which time we may delete and/or aggregate it. We may also retain and use this information as necessary to comply with our legal obligations, resolve disputes, and enforce our agreements. Through this policy, we have provided specific retention periods for certain types of information.</p>
            <h2 id="location-of-site-and-data">Location of site and data</h2>
            <p>Our products and other web properties are operated in {country}. If you are located in the European Union, UK, or elsewhere outside of {country}, <strong>please be aware that any information you provide to us will be transferred to and stored in {country}</strong>. By using our websites or Services and/or providing us with your personal information, you consent to this transfer.</p>
            <h2 id="when-transferring-personal-data-from-the-eu">When transferring personal data from the EU</h2>
            <p>The European Data Protection Board (EDPB) has issued guidance that personal data transferred out of the EU must be treated with the same level of protection that is granted under EU privacy law. UK law provides similar safeguards for UK user data that is transferred out of the UK. Accordingly, {{ config('app.company_name') }} has adopted a data processing addendum with Standard Contractual Clauses to help ensure this protection.</p>
            <p>There are also a few ad hoc cases where EU personal data may be transferred to {country} in connection with {{ config('app.company_name') }} operations, for instance, if an EU user signs up for our newsletter or participates in one of our surveys or buys swag from our company online store. Such transfers are only occasional and data is transferred under the <a href="https://gdpr-info.eu/art-49-gdpr/">Article 49(1)(b) derogation</a> under GDPR and the UK version of GDPR.</p>
            <h2 id="changes-and-questions">Changes and questions</h2>
            <p>We may update this policy as needed to comply with relevant regulations and reflect any new practices. Whenever we make a significant change to our policies, we will refresh the date at the top of this page and take any other appropriate steps to notify users.</p>
            <p>Have any questions, comments, or concerns about this privacy policy, your data, or your rights with respect to your information? Please get in touch by <a href="mailto:{{config('app.contact-email')}}">contacting us</a> and we’ll be happy to try to answer them!</p>
        </div>
    </div>
</section>
@endsection
