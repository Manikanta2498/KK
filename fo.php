
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<html class="no-js desktop" lang="en-IN">
<head>
    <script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(2),u=e(3),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}finally{f.emit("fn-end",[c.now()],t)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now()])}},{}],2:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],3:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],4:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=m(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){v[e]=m(e).concat(n)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(t)}function g(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var v={},y={},b={on:l,emit:t,get:w,listeners:m,context:n,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(2),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!x++){var e=h.info=NREUM.info,n=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+h.offset],null,"api");var t=d.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===d.readyState&&i()}function i(){f("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),f=e("handle"),c=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1026.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=n.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),f("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script>
                
            <title>Checkout</title>
    
            <meta name="description" content="The best vendors ever are only in one website."/>
    
            <meta name="keywords" content="foodpanda, food"/>
    
            <meta name="robots" content="index,follow"/>
    
                        <meta name="format-detection" content="telephone=no"/>
                                <meta name="mobile-web-app-capable" content="yes"/>
                                <meta name="apple-mobile-web-app-capable" content="yes"/>
                                <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
                                <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                                <meta name="revisit-after" content="3 days"/>
                                <meta name="msapplication-tilecolor" content="#f75626"/>
                                <meta name="msapplication-tileimage" content="//asia-public.foodpanda.com/assets/production/in/layout/themes/capricciosa_foodpanda/images/en/mstile-144x144.png?v=1459438060"/>
                                <meta name="msapplication-config" content="/browserconfig.xml"/>
            
            <link rel="apple-touch-icon" href="//asia-public.foodpanda.com/assets/production/in/layout/themes/capricciosa_foodpanda/images/en/apple-touch-icon-57x57.png?v=1459438060" sizes="57x57"  />
            <link rel="apple-touch-icon" href="//asia-public.foodpanda.com/assets/production/in/layout/themes/capricciosa_foodpanda/images/en/apple-touch-icon-60x60.png?v=1459438060" sizes="60x60"  />
            <link rel="apple-touch-icon" href="//asia-public.foodpanda.com/assets/production/in/layout/themes/capricciosa_foodpanda/images/en/apple-touch-icon-72x72.png?v=1459438060" sizes="72x72"  />
            <link rel="apple-touch-icon" href="//asia-public.foodpanda.com/assets/production/in/layout/themes/capricciosa_foodpanda/images/en/apple-touch-icon-76x76.png?v=1459438060" sizes="76x76"  />
            <link rel="apple-touch-icon" href="//asia-public.foodpanda.com/assets/production/in/layout/themes/capricciosa_foodpanda/images/en/apple-touch-icon-114x114.png?v=1459438060" sizes="114x114"  />
            <link rel="apple-touch-icon" href="//asia-public.foodpanda.com/assets/production/in/layout/themes/capricciosa_foodpanda/images/en/apple-touch-icon-120x120.png?v=1459438060" sizes="120x120"  />
            <link rel="apple-touch-icon" href="//asia-public.foodpanda.com/assets/production/in/layout/themes/capricciosa_foodpanda/images/en/apple-touch-icon-144x144.png?v=1459438060" sizes="144x144"  />
            <link rel="apple-touch-icon" href="//asia-public.foodpanda.com/assets/production/in/layout/themes/capricciosa_foodpanda/images/en/apple-touch-icon-152x152.png?v=1459438060" sizes="152x152"  />
            <link rel="apple-touch-icon" href="//asia-public.foodpanda.com/assets/production/in/layout/themes/capricciosa_foodpanda/images/en/apple-touch-icon-180x180.png?v=1459438060" sizes="180x180"  />
            <link rel="apple-touch-icon-precomposed" href="//asia-public.foodpanda.com/assets/production/in/layout/themes/capricciosa_foodpanda/images/en/apple-touch-icon-precomposed.png?v=1459438060"  />
            <link rel="icon" href="//asia-public.foodpanda.com/assets/production/in/layout/themes/capricciosa_foodpanda/images/en/favicon-32x32.png?v=1459438060" sizes="32x32"  />
            <link rel="icon" href="//asia-public.foodpanda.com/assets/production/in/layout/themes/capricciosa_foodpanda/images/en/favicon-192x192.png?v=1459438060" sizes="192x192"  />
            <link rel="icon" href="//asia-public.foodpanda.com/assets/production/in/layout/themes/capricciosa_foodpanda/images/en/favicon-96x96.png?v=1459438060" sizes="96x96"  />
            <link rel="icon" href="//asia-public.foodpanda.com/assets/production/in/layout/themes/capricciosa_foodpanda/images/en/favicon-16x16.png?v=1459438060" sizes="16x16"  />
            <link rel="manifest" href="/manifest.json"  />
            <link rel="shortcut icon" href="//asia-public.foodpanda.com/assets/production/in/layout/themes/capricciosa_foodpanda/images/en/favicon.ico?v=1459438060"  />
    
                        <meta content="https://www.foodpanda.in/review-order/m0bp" property="og:url"/>
                                <meta content="foodpanda" property="og:site_name"/>
                                
                    <link rel="stylesheet" href="/_/css/shopMain-295c28802885010d903c4f3464ed01d7.css" media="all"/>
        
                            
        <!--[if lte IE 9]>
        <script src="/_/js/shopHeadIE-953841d0f3902bbe360cc31d7c5080e0.js"></script>
    <![endif]-->
    <script src="/_/js/shopHead-7bb6d6b3f3047938c47d8a26681a8fc4.js"></script>
    <script>window.$LABChain = $LAB.script('/_/js/shopMain-4337d9d6635658a1395405aa5ca3ad8c.js');</script>

        
            <script src="//cdn.dynamicyield.com/api/8766581/api_dynamic.js"></script>
    
            <script src="//cdn.dynamicyield.com/api/8766581/api_static.js"></script>
    
        <script>
    FD
        .setControllerConfig('Prefill', 'customer.firstName', "Sai")
        .setControllerConfig('Prefill', 'customer.lastName', "Manikanta")
        .setControllerConfig('Prefill', 'customer.email', "yvsaimanikanta@gmail.com")
                    .setControllerConfig('Prefill', 'location.areaId', "")
            .setControllerConfig('Prefill', 'location.areaName', "")
                            .setControllerConfig('Prefill', 'location.cityName', "")
                .setControllerConfig('Prefill', 'location.cityId', 185)
                        .setControllerConfig('Prefill', 'location.addressName', "")
            .setControllerConfig('Prefill', 'location.address', "")
            .setControllerConfig('Prefill', 'location.latitude', 21.128599)
            .setControllerConfig('Prefill', 'location.longitude', 79.062401)
            .setControllerConfig('Prefill', 'location.street', "")
            .setControllerConfig('Prefill', 'location.streetNumber', "")
            .setControllerConfig('Prefill', 'location.houseNumber', "")
            .setControllerConfig('Prefill', 'location.district', "")
            .setControllerConfig('Prefill', 'location.postcode', "")
            ;
</script>
            <script>
    FD
        .setControllerConfig('LocationSearch', 'vendorListUrl', "\/restaurants")
        .setControllerConfig('LocationSearch', 'msgNoAreasFound', "No areas found matching your search.")
        .setControllerConfig('LocationSearch', 'msgSelectAreaFromDropdown', "Please enter your location.")
        .setControllerConfig('LocationSearch', 'suggestionUrl', "\/location-suggestions-ajax")
        .setControllerConfig('LocationSearch', 'areaSuggestionUrl', "\/city-suggestions-ajax\/CITY_ID")
                .setControllerConfig('LocationSearch', 'checkMissingAddressFieldsUrl', "\/missing-complete-address-fields-ajax")
    ;

    FD.setControllerConfig('ChangeLocationLink', 'fromElementUrlForVendorListPage', "\/location\/get-location-search-box");
</script>
        
        <script type="text/javascript">
        (function(a,p,P,b,y) {
            (y = a.createElement(p)).type = 'text/javascript';
            y.src = 'https://js.appboycdn.com/web-sdk/1.6/appboy.min.js';
            (c = a.getElementsByTagName(p)[0]).parentNode.insertBefore(y, c);
            if (y.addEventListener) {
                y.addEventListener("load", b, false);
            } else if (y.readyState) {
                y.onreadystatechange = b;
            }
        })(document, 'script', 'link', function() {
            var appboyApiKey = (typeof appboyWhiteLabelApiKey !== 'undefined') ? appboyWhiteLabelApiKey : '8e6ef06d-c4c4-4933-a5af-49967c4d89b9';
            appboy.initialize(appboyApiKey);

            appboy.changeUser('IN_6680921');

            appboy.getUser().setFirstName('Sai');
            appboy.getUser().setEmail('yvsaimanikanta@gmail.com');
            appboy.getUser().setCountry('IN');
            appboy.getUser().setCustomUserAttribute('language', 'en_IN');
            appboy.getUser().setCustomUserAttribute('mobile_code', '%2B91');
            appboy.getUser().setCustomUserAttribute('mobile_number', '9145534362');
        });
    </script>

                        
            <script>
                        var dataLayer = [{"area_id":"4ae9679d5e2241b0a868aa14b4450e1d","area_name":"Bajaj Nagar","city_id":185,"city_name":"Nagpur","lat":21.128599,"lng":79.062401,"country_id":"IN","app_version":"production|v1710.1.4|fe0c17058e5bc589a645c33a9aec4e491a7bba93","ga_code":"UA-51354317-1","ga_domain":"foodpanda.in","language":"en_IN","visitor_id":"580koui1tgpper77v40upkujm6","landing_page":"\/restaurant\/m0bp\/curry-house","visitor_utm_source":"","visitor_utm_campaign":"","visitor_utm_content":"","visitor_utm_medium":"","visitor_utm_term":"","visitor_referer":"Direct","visitor_source":"https:\/\/www.foodpanda.in\/restaurants","ab_group":"b","platform":"pc","currency":"INR","page_type":"Review Order Page","newsletter_id":null,"express_delivery":"no","customer_logged":1,"customer_id":6680921,"customer_status":"existing","customer_control":8,"customer_lastname":"Manikanta","customer_name":"Sai","customer_vendor_id_list":"23320,19853,8114,20748","customer_last_date":"2017-03-11 18:48:05","customer_first_date":"2016-04-11 20:12:10","customer_acquisition_voucher":"false","vendor_code":"m0bp","vendor_id":23320,"basket_value":600,"credits_applied":0,"free_meal":"no","login_success":"logIn"}];

            tracking.setGtmActive(true);
            tracking.setGtmId("GTM-K2HK7K");

            tracking.setGaActive(true);

            tracking.initTracking();
        </script>

        <script>tracking.fireTracking();</script>

                        </head>
<body class="  foodpanda in " >
                                <noscript>
        <iframe
            src="//www.googletagmanager.com/ns.html?id=GTM-K2HK7K"
            height="0"
            width="0"
            style="display:none;visibility:hidden"
        ></iframe>
    </noscript>
        
    <div class="page-wrapper js-sticky-height-calculate-container">
        
        <div class="content-wrapper">
                                                    <div class="homepage-area-selection-container" data-bg="">
                            <header class="">
                                                    
                <div class="container">
                    <div class="header-mobile-item left">
                        <i class="icon icon-more mobile-menu__menu-toggle"></i>
                    </div>

                                            <a href="/" class="header-logo ">
    <img alt="Logo" src="//asia-public.foodpanda.com/assets/production/in/layout/themes/capricciosa_foodpanda/images/en/logo.png?v=1459438060" />
</a>
                    
                    <div class="header-links">
                                                    <ul class="header-links__list">
                                                                                                    
                                                                    
                                
                                                                                                            <li class="header-links__contact-us">
    <a href="/contents/contact.htm">
        <i class="icon icon-help"></i>

        <span class="label">Help</span>
    </a>
</li>
                                                                    
                                                                    <li class="header-links__customer-account">
            <a href="/customer/account"
           data-toggle="dropdown">
            <i class="icon icon-account"></i>
            <span class="label">My Account</span>
            <i class="icon-caret icon-down-arrow"></i>
        </a>
        <ul class="dropdown-menu" role="menu">
            <li>
                <a href="/customer/timeline">
                    Activity
                </a>
            </li>
            <li>
                <a href="/customer/account">
                    My Account
                </a>
            </li>
            <li>
                <a href="/customer/addresses">
                    Address Book
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="/logout">
                    Log out
                </a>
            </li>
        </ul>
    </li>
                                                            </ul>
                                            </div>
                </div>
            </header>
        
        
            </div>
                    <div class="mobile-side-menu">
        <div class="mobile-side-menu__container">
            <div class="mobile-side-menu__header">
    <div class="mobile-side-menu__header__picture no-picture">
                    <div class="mobile-side-menu__header__picture__no-picture"></div>
            </div>
    <div class="mobile-side-menu__header__title">
                    Welcome back Sai!
            </div>
</div>


            <div class="mobile-side-menu__menu">
                <ul>
                    <li>
                        <a href="/restaurants">
                            <i class="icon icon-more"></i>
                            <span class="label">Restaurants</span>
                        </a>
                    </li>

                                            <li>
                            <a href="/customer/timeline">
                                <i class="icon icon-delivery-time"></i>
                                <span class="label">Activity</span>
                            </a>
                        </li>
                        <li>
                            <a href="/customer/addresses">
                                <i class="icon icon-location"></i>
                                <span class="label">Address Book</span>
                            </a>
                        </li>
                        <li>
                            <a href="/customer/account">
                                <i class="icon icon-account"></i>
                                <span class="label">My Account</span>
                            </a>
                        </li>
                        <li>
                            <a href="/logout">
                                <i class="icon icon-cross"></i>
                                <span class="label">Log out</span>
                            </a>
                        </li>
                    
                    <li>
                        <a href="/contents/contact.htm">
                            <i class="icon icon-contact"></i>
                            <span class="label">Help</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="mobile-side-menu__footer">
                <ul>
                    <li>
                        <a target="_blank"
                           href="/contents/terms-and-conditions.htm">
                            Terms and Conditions
                        </a>
                    </li>
                    <li>
                        <a target="_blank"
                           href="/contents/privacy.htm">
                            Privacy Policy
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
                    <div class="checkout-steps-wrapper">
    <ul class="checkout-steps" data-active-checkout-step="review-order">
        
                    
            <li class="checkout-step " data-section="customer-details">
                <div class="checkout-step-content">
                                            <p class="checkout-step-title"></p>
                    
                                            <span class="line-separator"></span>
                                        <p class="checkout-step-text">Your Details</p>
                </div>
            </li>
                    
            <li class="checkout-step active-checkout-step" data-section="review-order">
                <div class="checkout-step-content">
                                            <p class="checkout-step-title">2</p>
                    
                                            <span class="line-separator"></span>
                                        <p class="checkout-step-text">Review order</p>
                </div>
            </li>
                    
            <li class="checkout-step " data-section="checkout">
                <div class="checkout-step-content">
                                            <p class="checkout-step-title">3</p>
                    
                                        <p class="checkout-step-text">Place Order</p>
                </div>
            </li>
            </ul>

    <div class="login-register-title">
            </div>
</div>

                    
    <div class="flash-messages">
        <div class="container">
                            
    

        </div>
    </div>
                    <main class="js-sticky-height-calculate-container">
        <div class="container">
                    
    <div class="checkout-review js-sticky-height-calculate-container ">
        
        <form novalidate role="form" method="post" action="https://www.foodpanda.in/review-order/m0bp" class="form-horizontal">
                <input type="hidden"     id="shop_order_cart_type__token" name="shop_order_cart_type[_token]" value="jOq41zme4YZVH6Yw2mMYPyjelUj2Lc12CSNR56cQvu4" />
            <div class="checkout-review-order">
                <div class="checkout-review-order__inner">
                    <div class="vendor review-order">
    <div class="vendor__inner">
        <div class="vendor__image">
            
            <a href="/restaurant/m0bp/curry-house">
                                    
    
<img alt="Curry House" width="80" height="80" src="//asia-public.foodpanda.com/assets/production/in/layout/themes/capricciosa_foodpanda/images/en/no_pic_logo.png?v=1459438060" data-src="//asia-public.foodpanda.com/dynamic/production/in/images/vendors/m0bp_sqp.jpg?v=20170301142508" />
                            
            </a>
        </div>

        <div class="vendor__details">
            <div class="vendor__title">
                <a href="/restaurant/m0bp/curry-house">Curry House</a>
            </div>

            <div class="vendor__availability">
                                                                                <span class="vendor__opening-hours">
                            Open from
                            11:30 - 22:00
                        </span>
                    
                                                </div>

            <div class="vendor__rating">
                                    
    
    <div
        class="rating  "
                >
                    
            <i class="icon icon-star-ratings-full active-star"></i><i class="icon icon-star-ratings-full active-star"></i><i class="icon icon-star-ratings-full active-star"></i><i class="icon icon-star-ratings-full active-star"></i><i class="icon icon-star-ratings-full inactive-star"></i>
            <span class="rating-score hide" itemprop="ratingValue" content="4.1">4.1</span>
        
                    <span class="review">
                                    (<span
                                                >1681</span>)
                            </span>
            </div>
            </div>
        </div>
    </div>
</div>
    <ul class="products">
                                            
            <li class="product">
                <div class="details">
                    <a href="/cart/remove-product/product/409e7a0a4533b7580d614e9fe353eb79?currentUrl=/review-order/m0bp" class="checkout-review-order-delete-product">&#10005;</a>

                    <div class="checkout-review-product-detail-wrapper">
                        <h4 class="product-title">
                            Chicken Matka Biryani 
                        </h4>

                        
                        
                                            </div>
                </div>

                <div class="checkout-review-order-quantity-controls-container">
                
    <div class="checkout-review-order-quantity">1</div>

    <ul class="checkout-review-order-quantity-controls-wrapper">
        <li class="checkout-review-order-quantity-control">
            <a href="/cart/increment-product/product/409e7a0a4533b7580d614e9fe353eb79?currentUrl=/review-order/m0bp" class="btn btn-xs btn-default checkout-review-order-quantity-updater">+</a>
        </li>
        <li class="checkout-review-order-quantity-control">
            <a href="/cart/decrement-product/product/409e7a0a4533b7580d614e9fe353eb79?currentUrl=/review-order/m0bp" class="btn btn-xs btn-default checkout-review-order-quantity-updater">-</a>
        </li>
    </ul>
</div>

                <div class="checkout-review-order-price-wrapper price discounted">
                                            <span class="before-discount">
                                Rs.600.00
                            </span>
                        <br />
                    
                    <span>
                                                    Rs.480.00
                                            </span>
                </div>
            </li>
            </ul>
        <div class="checkout-review-footer">
        <div class="totals">
            <table>
                <tfoot>
                
<tr class="subtotal">
    <td></td>
    <td class="title">Subtotal</td>
    <td class="price">600.00</td>
</tr>

            <tr class="voucher">
            <td class="voucher-input-wrapper">
                <div class="voucher-container">
            
        <label class="control-label" for="shop_order_cart_type_vouchers">            Enter your voucher code here
                </label>

    <div class="form-group">
        <div class="voucher-input-container  ">
                <input type="text"     id="shop_order_cart_type_vouchers" name="shop_order_cart_type[vouchers]" class="form-control input-voucher" value="" />
            <div class="voucher-buttons-container">
                <button type="submit" id="shop_order_cart_type_voucher_clear_button" name="shop_order_cart_type[voucher_clear_button]" class="hidden btn-voucher-clear">shop.form.button.clear</button>
                <button type="submit" id="shop_order_cart_type_voucher_button" name="shop_order_cart_type[voucher_button]" class="btn btn-sm btn-voucher " >Submit</button>
            </div>
        </div>
    </div>
</div>
            </td>

                            
<td class="title">
    </td>
<td class="price">
    </td>
                    </tr>
    
    <tr class="discount-total">
        <td></td>
        <td class="title">Discount</td>
        <td class="price">120.00</td>
    </tr>


    <tr class="delivery-fee ">
        <td></td>
        <td class="title">
            Delivery fee
        </td>
        <td class="price">
                            20.00
                    </td>
    </tr>

    <tr class="container-charges">
        <td></td>
        <td class="title">+ Container charges</td>
        <td class="price">10.00</td>
    </tr>




    

    <tr>
        <td></td>
        <td colspan="2" class="title rounded-off">
            Total will be rounded off
        </td>
    </tr>

<tr class="total">
    <td></td>
    <td colspan="2" class="title ">
        <div>
            <span>Total</span>
            <span class="total-price">
                                    Rs.510.00
                            </span>
        </div>
    </td>
</tr>

                </tfoot>
            </table>
        </div>
    </div>
                </div>
            </div>
            <div class="checkout-review-delivery">
                <div class="checkout-review-delivery__inner js-sticky-element" data-sticky-top-margin="20">
                    
    
    <div class="toggle-elements-containers-wrapper">
        <div class="delivery-type">
            <div class="delivery-type-title">Order information</div>
            <ul class="review-delivery-wrapper">
                                    <li class="review-delivery-element">
                        <label class="review-delivery-element-label">
                            <input type="radio"     id="shop_order_cart_type_expeditionType_0" name="shop_order_cart_type[expeditionType]" required="required" class="delivery-type-element-selector" value="delivery" checked="checked" />

                            <div class="review-delivery-element-selector-text">
                                                                                                
                                                                                                                                        
                                <div class="review-delivery-information ">
                                    <p class="review-delivery-title">
                                        <span>Delivery</span>

                                                                            </p>
                                    <p class="review-delivery-description">
                                        Your order will be delivered to your address.
                                    </p>
                                                                    </div>

                                                            </div>
                        </label>
                    </li>
                                    <li class="review-delivery-element">
                        <label class="review-delivery-element-label">
                            <input type="radio"     id="shop_order_cart_type_expeditionType_1" name="shop_order_cart_type[expeditionType]" required="required" class="delivery-type-element-selector" value="pickup" />

                            <div class="review-delivery-element-selector-text">
                                                                                                
                                                                                                                                        
                                <div class="review-delivery-information ">
                                    <p class="review-delivery-title">
                                        <span>Pickup</span>

                                                                                    <span class="review-delivery-pickup-message">
                                                (and save on delivery: Rs.20.00)
                                            </span>
                                                                            </p>
                                    <p class="review-delivery-description">
                                        You will pick up the order yourself at restaurant.
                                    </p>
                                                                                                                        <address>Shop No. UG-13, Ganesh Vighanaharta Apartment, Mate Chowk</address>
                                                                                                            </div>

                                                            </div>
                        </label>
                    </li>
                            </ul>
        </div>
        <div class="delivery-details">
                            <ul class="review-delivery-wrapper">
                                            <li class="review-delivery-element">
                                                            <div
                                    id="delivery-time-mode-now-container"
                                    data-is-pickup-available="1"
                                    data-is-delivery-available="1"
                                                                    >
                                    <label class="review-delivery-element-label">
                                        <input type="radio"     id="shop_order_cart_type_deliveryTimeMode_0" name="shop_order_cart_type[deliveryTimeMode]" required="required" value="now" checked="checked" />
                                        <div class="review-delivery-element-selector-text">
                                            <div class="review-delivery-information">
                                                <p class="review-delivery-title">
                                                    As soon as possible
                                                </p>

                                                                                                    <p
                                                        id="delivery-time-estimation-description"
                                                        class="review-delivery-title review-delivery-description
                                                                "
                                                    >
                                                        Estimated delivery time: 55 min
                                                    </p>
                                                
                                                                                            </div>
                                        </div>
                                    </label>
                                </div>
                                                    </li>
                                            <li class="review-delivery-element">
                                                            <label class="review-delivery-element-label">
                                    <input type="radio"     id="shop_order_cart_type_deliveryTimeMode_1" name="shop_order_cart_type[deliveryTimeMode]" required="required" value="preorder" />
                                    <div class="review-delivery-element-selector-text">
                                        <p class="review-delivery-title">
                                            Later
                                        </p>
                                    </div>
                                </label>
                                                                    <div class="js-preorder-details-container">
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                                    <select     id="shop_order_cart_type_orderTime_preorderDate" name="shop_order_cart_type[orderTime][preorderDate]" required="required" class="form-control"><option value="" selected="selected">Select a date</option><option value="2017-03-22">2017-03-22</option><option value="2017-03-23">2017-03-23</option><option value="2017-03-24">2017-03-24</option><option value="2017-03-25">2017-03-25</option><option value="2017-03-26">2017-03-26</option></select>
                                            </div>
                                            <div class="col-xs-6">
                                                    <select     id="shop_order_cart_type_orderTime_preorderTime" name="shop_order_cart_type[orderTime][preorderTime]" required="required" class="form-control"><option value="" selected="selected">Select a time</option><option value="22:00">22:00</option></select>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <script>
                                        FD
                                            .setControllerConfig('Checkout', 'enable', true)
                                            .setControllerConfig('Checkout', 'orderTimeType.preorderDays', {"delivery":{"2017-03-22":{"22:00":"22:00"},"2017-03-23":{"13:00":"13:00","13:30":"13:30","14:00":"14:00","14:30":"14:30","15:00":"15:00","15:30":"15:30","16:00":"16:00","16:30":"16:30","17:00":"17:00","17:30":"17:30","18:00":"18:00","18:30":"18:30","19:00":"19:00","19:30":"19:30","20:00":"20:00","20:30":"20:30","21:00":"21:00","21:30":"21:30","22:00":"22:00"},"2017-03-24":{"13:00":"13:00","13:30":"13:30","14:00":"14:00","14:30":"14:30","15:00":"15:00","15:30":"15:30","16:00":"16:00","16:30":"16:30","17:00":"17:00","17:30":"17:30","18:00":"18:00","18:30":"18:30","19:00":"19:00","19:30":"19:30","20:00":"20:00","20:30":"20:30","21:00":"21:00","21:30":"21:30","22:00":"22:00"},"2017-03-25":{"13:00":"13:00","13:30":"13:30","14:00":"14:00","14:30":"14:30","15:00":"15:00","15:30":"15:30","16:00":"16:00","16:30":"16:30","17:00":"17:00","17:30":"17:30","18:00":"18:00","18:30":"18:30","19:00":"19:00","19:30":"19:30","20:00":"20:00","20:30":"20:30","21:00":"21:00","21:30":"21:30","22:00":"22:00"},"2017-03-26":{"13:00":"13:00","13:30":"13:30","14:00":"14:00","14:30":"14:30","15:00":"15:00","15:30":"15:30","16:00":"16:00","16:30":"16:30","17:00":"17:00","17:30":"17:30","18:00":"18:00","18:30":"18:30","19:00":"19:00","19:30":"19:30","20:00":"20:00","20:30":"20:30","21:00":"21:00","21:30":"21:30","22:00":"22:00"}},"pickup":{"2017-03-22":{"21:00":"21:00","21:30":"21:30","22:00":"22:00"},"2017-03-23":{"12:30":"12:30","13:00":"13:00","13:30":"13:30","14:00":"14:00","14:30":"14:30","15:00":"15:00","15:30":"15:30","16:00":"16:00","16:30":"16:30","17:00":"17:00","17:30":"17:30","18:00":"18:00","18:30":"18:30","19:00":"19:00","19:30":"19:30","20:00":"20:00","20:30":"20:30","21:00":"21:00","21:30":"21:30","22:00":"22:00"},"2017-03-24":{"12:30":"12:30","13:00":"13:00","13:30":"13:30","14:00":"14:00","14:30":"14:30","15:00":"15:00","15:30":"15:30","16:00":"16:00","16:30":"16:30","17:00":"17:00","17:30":"17:30","18:00":"18:00","18:30":"18:30","19:00":"19:00","19:30":"19:30","20:00":"20:00","20:30":"20:30","21:00":"21:00","21:30":"21:30","22:00":"22:00"},"2017-03-25":{"12:30":"12:30","13:00":"13:00","13:30":"13:30","14:00":"14:00","14:30":"14:30","15:00":"15:00","15:30":"15:30","16:00":"16:00","16:30":"16:30","17:00":"17:00","17:30":"17:30","18:00":"18:00","18:30":"18:30","19:00":"19:00","19:30":"19:30","20:00":"20:00","20:30":"20:30","21:00":"21:00","21:30":"21:30","22:00":"22:00"},"2017-03-26":{"12:30":"12:30","13:00":"13:00","13:30":"13:30","14:00":"14:00","14:30":"14:30","15:00":"15:00","15:30":"15:30","16:00":"16:00","16:30":"16:30","17:00":"17:00","17:30":"17:30","18:00":"18:00","18:30":"18:30","19:00":"19:00","19:30":"19:30","20:00":"20:00","20:30":"20:30","21:00":"21:00","21:30":"21:30","22:00":"22:00"}}})
                                            .setControllerConfig(
                                                'Checkout',
                                                'expeditionType.updateExpeditionTypeUrl',
                                                'https://www.foodpanda.in/review-order/update-expedition-type/m0bp'
                                            )
                                        ;
                                    </script>
                                                                                    </li>
                                    </ul>
                    </div>

                    <div class="delivery-comment toggle-elements-container">
                <p class="delivery-comment-text">(If you want to add any comment, e.g. about allergies or delivery instructions, this is the right place)</p>
                <span class="delivery-comment-button toggle-elements-button allow-closing arrow">
                    Add a message to your order
                </span>
                <div class="toggle-elements-wrapper">
                        <textarea     id="shop_order_cart_type_orderComment" name="shop_order_cart_type[orderComment]" rows="3" class="form-control"></textarea>
                        
                </div>
            </div>
            </div>

    <button type="submit" id="shop_order_cart_type_checkout_primary_button" name="shop_order_cart_type[checkout_primary_button]" class="btn btn-lg btn-primary btn-block btn-checkout-primary btn-arrow ">Checkout</button>

            <button type="submit" id="shop_order_cart_type_update_expedition_type" name="shop_order_cart_type[update_expedition_type]" class="btn btn-lg btn-primary btn-block btn-checkout-primary btn-arrow no-js-update-expedition-btn ">Update expedition type information</button>
                    </div>
            </div>
        </form>
    </div>

    <script>
        FD.setControllerConfig('Checkout', 'enable', true);
        FD.setControllerConfig('ToggleElements', 'enable', true);
    </script>
        </div>
    </main>
                    </div>
                    
            <footer>
            <div class="container">
                    <div class="footer-links footer-block footer-block--no-mobile-separator footer-legal">
    <ul>
        <li>
            <a target="_blank" href="/contents/terms-and-conditions.htm">
                Terms and Conditions
            </a>
        </li>
        <li>
            <a target="_blank" href="/contents/privacy.htm">
                Privacy Policy
            </a>
        </li>
        <li class="footer-legal-copyright">
            &copy; Copyright 2016 foodpanda is a registered trademark
        </li>
        <li>
            foodpanda India
        </li>
    </ul>
</div>
            </div>
        </footer>
    
    
    <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>

    
        
    
    </div>

                    
        
    <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"f77b1abc66","applicationID":"907321","transactionName":"bldXNUJYXhAABxBZDVcddhRDTV8OTgILXwZJU1sFURdDCw4USl8QXVdHT1NWXhcTCwhcB0scVglVWlsMFBBeQgdPW1AWf0tUBhMiC0IPeFFBCF9X","queueTime":1,"applicationTime":615,"atts":"QhBUQwpCTR4=","errorBeacon":"bam.nr-data.net","agent":""}</script>
</body>
</html>
