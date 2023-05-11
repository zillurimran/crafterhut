<style>
    /*----------- 1. Body --------------*/

    body {
        font-family: 'Montserrat', sans-serif;
        font-size: 13px;
        color: #333;
    }

    a {
        color: {{ colorSettings()->brand_color }};
    }

    a:hover {
        color: {{ colorSettings()->brand_color }};
        text-decoration: none;
        transition: color 300ms ease-in-out 0s, background-color 300ms ease-in-out 0s, background-position 300ms ease-in-out 0s;
    }

    small {
        font-size: 85%;
        font-weight: normal;
        text-transform: lowercase;
        color: #999999;
    }

    p {
        line-height: 1.6;
    }

    /* Color Style */
    #nav ul.level1>li a,
    .top-cart-content .product-name a,
    #limiter li a,
    #sort-by li a,
    .top-cart-content .product-details a.btn-edit,
    .products-grid .item .item-inner .item-info .info-inner .item-title a,
    .products-grid .item .actions a,
    a.blog-title,
    #limiter a.button-asc,
    .products-list h2.product-name a,
    footer a {
        color: #000;
    }

    .products-grid .item .actions a:hover,
    a.blog-title:hover,
    #recently-viewed-items .product-name a:hover,
    #recently-viewed-items .product-name a:hover,
    ol#compare-items li a.product-name:hover,
    .block-tags li a:hover,
    #limiter li a:hover,
    #sort-by li a:hover {
        color: {{ colorSettings()->brand_color }};
    }

    /* Buttons */
    button {
        border: none
    }

    .button {
        background: #fff;
        border-color: #ddd;
        color: #333
    }

    .button:hover {
        background: {{ colorSettings()->brand_color }};
        border-color: {{ colorSettings()->brand_color }};
        color: #fff
    }

    button.button.button-clear {
        background: {{ colorSettings()->brand_color }};
        border-color: {{ colorSettings()->brand_color }};
        color: #fff;
        margin-left: 6px;
    }

    /* list/grid toolbar*/
    .toolbar span.button-active.button-grid,
        {
        background-color: {{ colorSettings()->brand_color }} !important;
    }

    .toolbar a.button-grid {
        background-color: #f4f4f4 !important;
    }

    .toolbar .button-list {
        background-color: #f4f4f4 !important;
    }

    .toolbar span.button-active.button-list {
        background-color: {{ colorSettings()->brand_color }} !important;
    }

    .pager .pages li a {
        background: #f8f8f8;
        color: #333
    }

    .pager .pages li a:hover {
        border: none;
        color: #fff;
        background: {{ colorSettings()->brand_color }};
    }

    .pages .pagination>.active>a,
    .pages .pagination>.active>span,
    .pages .pagination>.active>a:hover,
    .pages .pagination>.active>span:hover,
    .pages .pagination>.active>a:focus,
    .pages .pagination>.active>span:focus {
        background-color: {{ colorSettings()->brand_color }};
        color: #fff;
    }

    #limiter .button-asc {
        background-color: #f8f8f8;
    }

    #limiter .button-asc:hover {
        background-color: {{ colorSettings()->brand_color }};
        color: #fff
    }

    #limiter li {
        background-color: #f8f8f8;
    }

    #limiter a:link,
    #limiter a:visited {
        background-color: #f8f8f8;
    }

    #sort-by li {
        background-color: #f8f8f8;
    }

    /* Buttons */
    /* 1-Default button */
    button {
        border: none
    }

    .button {
        background: #fff;
        border-color: #ddd;
        color: #333
    }

    .button:hover {
        background: {{ colorSettings()->brand_color }};
        color: #fff;
        border: 1px {{ colorSettings()->brand_color }} solid;
    }

    button.button {
        background: #fff;
        color: #333;
        display: inline-block;
        font-size: 11px;
        font-weight: bold;
        letter-spacing: 0.5px;
        line-height: normal;
        padding: 10px 12px;
        text-transform: uppercase;
        border: 1px #d1d1d1 solid;
    }

    button.button:hover {
        transition: all 0.3s linear;
        -moz-transition: all 0.3s linear;
        -webkit-transition: all 0.3s linear;
    }

    a.button {
        display: inline-block;
        padding: 6px 15px;
        font-size: 13px;
        border-width: 1px;
        text-align: center;
        color: #333;
        font-weight: bold;
        transition: all 0.3s linear;
        -moz-transition: all 0.3s linear;
        -webkit-transition: all 0.3s linear;
        border-style: solid
    }

    a.button:hover {
        padding: 6px 15px;
        transition: all 0.3s linear;
        -moz-transition: all 0.3s linear;
        -webkit-transition: all 0.3s linear;
        border-width: 1px;
    }

    .price,
    .breadcrumbs li strong,
    .product-details span.price,
    #recently-viewed-items .price-box .special-price .price,
    #recently-viewed-items .price-box .regular-price .price,
    .availability.out-of-stock span {
        color: {{ colorSettings()->brand_color }};
    }

    .button.coupon,
    .button.btn-continue,
    .button.continue,
    .button.login,
    button.btn-share,
    .button.create-account {
        background-color: {{ colorSettings()->brand_color }};
        color: #fff;
        border: 1px {{ colorSettings()->brand_color }} solid;
    }

    .multiple_addresses .button.btn-update:hover {
        background-color: {{ colorSettings()->brand_color }};
        color: #fff;
    }

    .btn-remove {
        font-size: 0;
        line-height: 0;
        text-indent: -999em;
    }

    /* 2-Add to cart button */
    .product-view .product-shop .add-to-box .btn-cart {
        background: {{ colorSettings()->sub_color }};
        color: #fff;
    }

    .product-view .product-shop .add-to-box .btn-cart:hover {
        background: #202726;
        color: #fff;
    }

    /* 3-Add to cart QTY */
    .custom button.items-count {
        background-color: #fff;
        border: 1px #ececec solid;
        color: #999
    }

    .custom button.items-count:hover {
        background-color: {{ colorSettings()->brand_color }};
        border: 1px {{ colorSettings()->brand_color }} solid;
        color: #fff;
    }

    /*----------- 2. Layout --------------*/
    .main-col {
        margin: auto;
        overflow: hidden;
    }

    /* Base Columns */

    /* 2 Column Layout -Left */
    .col-left {
        margin-bottom: 0px;
    }

    /* 2 Column Layout -Right */
    .col-right {
        margin-bottom: 0px;
    }

    .col-main {
        display: inline-block;
    }

    .col2-right-layout .col-main {
        display: inline-block;
        width: 100%;
    }

    /* 1 Column Layout */
    .col1-layout .header-background-default {
        margin: 20px;
        padding: 0;
    }

    .col1-layout .col-main {
        float: none;
        width: auto;
        padding: 0px;
        border: none;
        background: inherit;
        display: inherit;
    }

    /* 2 Columns Layout */
    .col2-right-layout ol.opc .col-md-4 {
        margin-right: 15px;
    }

    /* 3 Columns Layout */
    .col3-layout .col-main {}

    .col3-layout .col-wrapper {
        float: left;
        width: 780px;
    }

    .col3-layout .col-wrapper .col-main {
        float: right;
    }

    .main-container {
        min-height: 400px;
        padding: 0px;
        margin-top: 25px
    }

    /*----------- 3. Header --------------*/

    .logo-block {
        text-align: center
    }

    .logo {
        vertical-align: middle;
        text-align: left;
        margin-top: 17px;
        margin-bottom: 22px;
    }

    .header-top {
        padding: 1px 0px 10px 0px;
        font-family: 'Montserrat', sans-serif;
    }

    header .header-top-links {
        padding-top: 10px;
        padding-bottom: 10px;
        height: 65px
    }

    /* Toplink */
    .toplinks {
        line-height: normal;
        padding: 8px 0 0;
    }

    .toplinks .links {
        text-align: right;
    }

    .toplinks .links div {
        display: inline-block;
    }

    .toplinks div.links div a {
        color: black;
        display: inline-block;
        padding: 0px;
        color: #aaa;
        font-size: 13px;
        padding-left: 15px;
        font-weight: normal;
        text-decoration: none;
    }

    .toplinks div.links div a:hover {
        color: {{ colorSettings()->brand_color }} !important;
        text-decoration: none;
    }

    .block-company {
        background: none;
        box-shadow: none;
        border: none;
        color: #aaaaaa;
        font-size: 14px;
    }

    .block-company .caret {
        margin-left: 5px;
    }

    .block-company-wrapper {
        display: inline-block;
    }

    .block-company label {
        font-weight: normal;
        padding: 5px 5px 2px 0px;
    }

    .block-company-wrapper .dropdown-menu {
        min-width: 0;
        box-shadow: 0 0 15px -7px #666;
        top: 22px;
    }

    .block-company-wrapper .dropdown-menu li {
        padding: 5px 15px 5px 0;
    }

    .block-company-wrapper .dropdown-menu li:hover {
        background-color: #fff;
        color: {{ colorSettings()->brand_color }};
        transition: background-color 0.2s ease-in-out;
    }

    .block-company-wrapper .dropdown-menu a {
        padding: 3px 10px 3px 10px;
        color: #333 !important;
        font-weight: normal !important;
        text-transform: none !important;
    }

    .block-company-wrapper .dropdown-menu a:hover {
        color: {{ colorSettings()->brand_color }};
        background: none;
    }

    /* top search*/
    .search-box {
        margin: auto;
        right: 0px;
        background: #fff;
        border-radius: 3px;
        margin: 16px 0px;
        /* border-bottom: 1px #f1f1f1 solid; */
    }

    #search {
        margin: 0;
        width: 90%;
        font-size: 13px;
        height: 40px;
        color: #666;
        padding: 0 12px;
        background: none;
        outline: none;
        border: none;
    }

    .search-btn-bg {
        cursor: pointer;
        display: inline-block;
        background: none;
        position: absolute;
        outline: none;
        box-shadow: none;
        border: none;
        height: 40px;
        right: 18px;
        font-size: 18px;
        border-left: 1px #f1f1f1 solid;
        padding-left: 14px;
        width: 45px;
    }


    .search-btn-bg .glyphicon-search:before {
        font-size: 14px;
        color: {{ colorSettings()->brand_color }};
    }

    .search-btn-bg:hover {
        color: #cf3341;
    }

    .glyphicon-search:before {
        font-size: 12px;
    }

    .cart-top .dropdown-menu {
        padding: 10px;
        min-height: 100px;
        height: auto !important;
        min-width: 445px;
        -webkit-transition: all 300ms ease-in-out 0s;
        -o-transition: all 300ms ease-in-out 0s;
        transition: all 300ms ease-in-out 0s;
        top: 0;
        position: fixed;
        z-index: 999;
        display: block;
        -webkit-transform: translate3d(100%, 0, 0);
        -moz-transform: translate3d(100%, 0, 0);
        -ms-transform: translate3d(100%, 0, 0);
        -o-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
        -webkit-transition: all .4s cubic-bezier(.25, .46, .45, .94) 0s;
        -o-transition: all .4s cubic-bezier(.25, .46, .45, .94) 0s;
        transition: all .4s cubic-bezier(.25, .46, .45, .94) 0s
    }
 .add-to-box{
    display: flex !important;
    gap: 10px !important;
 }
 .add-to-cart{
    display: flex;
    gap: 10px;
    flex-wrap:wrap; 
 }
 .btn-cart{
    margin: 2px !important;
 }
 .email-addto-box{
    margin-top: 0 !important;
 }
 .pull-left{
    float: none !important;
 }
 .email-addto-box{
    margin-left:  0 !important;
 }
    #search .input-group {
        border: 1px #ddd solid;
        display: inline-block;
        width: 100%;
        background: #fff
    }

    #search input {
        height: 45px;
        display: inline-block;
        width: 90%;
        border: none;
        background: #fff;
        box-shadow: none;
    }

    #search button {
        line-height: 24px;
        padding: 12px 18px 10px;
        float: right;
        display: inline-block;
        background: {{ colorSettings()->brand_color }};
        border: none;
        color: #fff;
    }

    #search button:hover {
        background: {{ colorSettings()->brand_color }};
        border: none;
        color: #fff
    }

    .top-search .modal-dialog {
        margin-top: 80px;
    }

    .top-search .fade.in {
        background: rgba(0, 0, 0, 0.5);
        opacity: 1
    }

    .top-search .modal-content {
        border-radius: 3px
    }

    .top-search .modal-header {
        border: none;
    }

    .top-search .modal-body {
        padding: 10px 50px 50px;
    }

    #search button i {
        font-size: 12px
    }

    .top-search .modal-lg {
        width: 680px
    }

    .modal-header {
        text-align: left
    }

    .modal-open {
        padding: 0px !important
    }

    .top-search .modal-header .close {
        opacity: 1;
        background: red;
        border-radius: 100%;
        margin-top: -22px;
        margin-right: -24px;
    }

    .top-search .modal-header .close span {
        color: #fff;
        font-size: 22px;
        padding: 0 4px;
        text-shadow: none;
        line-height: 20px;
    }

    .welcome-msg {
        text-align: left;
        display: inline-block;
        padding: 0px;
        margin: 0px 14px;
        font-size: 13px;
        color: #aaa;
        vertical-align: top;
        margin-top: 7px
    }

    /* language &amp; currency */
    .header-container .curr-language {
        margin-top: 10px;
    }

    .block-language-wrapper {
        display: inline-block !important;
        margin: 7px 0 0 0;
    }

    .block-language {
        background: none;
        box-shadow: none;
        border: none;
        color: #aaa;
    }

    a.block-language:hover {
        color: {{ colorSettings()->brand_color }};
        text-decoration: none;
    }

    a.block-language:focus {
        color: #fff;
        text-decoration: none;
    }

    .block-language img {
        font-weight: normal;
        padding: 0px 5px 0px 0px;
        margin: auto;
    }

    .block-language-wrapper .dropdown-menu>li {
        border-bottom: 1px #ddd solid;
        padding: 4px 0px 4px 0px;
    }

    .block-language-wrapper .dropdown-menu>li:last-child {
        border-bottom: none;
    }

    .block-language-wrapper .dropdown-menu>li>a img {
        margin: 0px 6px 0px 0px;
    }

    .block-language-wrapper .dropdown-menu {
        border-radius: 0px;
        min-width: 0px;
        top: 28px;
        padding: 0px;
        border: 1px solid #efefef;
        border-top: none;
    }

    .block-language-wrapper .dropdown-menu a {
        padding: 3px 10px 3px 10px;
        font-size: 12px;
    }

    .block-language-wrapper .dropdown-menu a:hover {
        color: {{ colorSettings()->brand_color }};
        background: none;
    }

    .block-currency-wrapper {
        display: inline-block !important;
        margin: 5px 0 0 18px;
    }

    .block-currency {
        background: none;
        box-shadow: none;
        border: none;
        color: #aaa;
    }

    a.block-currency:hover {
        color: {{ colorSettings()->brand_color }};
        text-decoration: none;
    }

    a.block-currency:focus {
        color: #fff;
        text-decoration: none;
    }

    .block-currency label {
        font-weight: normal;
        padding: 0 5px;
        margin: auto;
    }

    .block-currency-wrapper .dropdown-menu>li {
        border-bottom: 1px #ddd solid;
        padding: 4px 0;
    }

    .block-currency-wrapper .dropdown-menu>li:last-child {
        border-bottom: none;
    }

    .block-currency-wrapper .dropdown-menu>li>a img {
        margin: 0 6px 0 0;
    }

    .block-currency-wrapper .dropdown-menu {
        border-radius: 0;
        min-width: 0;
        z-index: 100000;
        top: 28px;
        padding: 0px;
        border: 1px solid #efefef;
        border-top: none;
    }

    .block-currency-wrapper .dropdown-menu a {
        padding: 3px 15px 3px 10px;
        font-size: 12px;
    }

    .block-currency-wrapper .dropdown-menu a:hover {
        color: {{ colorSettings()->brand_color }};
        background: none;
    }

    .lang-curr {
        float: right;
        margin: 11px 0px;
    }

    .form-language {
        display: inline;
        float: right;
        border-left: 1px solid #ececec;
        line-height: 17px;
        padding-left: 20px;
    }

    ul.lang {
        text-align: left;
        display: block;
        margin: 0;
        padding: 0x;
        list-style: none;
        float: left;
        padding: 0px;
    }

    ul.lang li {
        float: left;
        display: inline;
        margin: 0px 8px 0 0px
    }

    ul.lang li:last-child {
        margin-right: 0px
    }

    ul.lang li span {
        text-indent: -10000px;
        display: none
    }

    .form-currency {
        display: inline;
        margin-right: 12px;
        float: right;
        line-height: 17px
    }

    ul.currencies_list {
        float: left;
        display: inline;
        margin: 0px 8px 0 0px;
        padding: 0px;
    }

    ul.currencies_list li {
        float: left;
        display: inline;
        margin: 0 0px 0 10px
    }

    ul.currencies_list li a {
        color: #333;
        font-size: 14px;
        font-weight: bold;
    }

    ul.currencies_list li a:hover {
        color: {{ colorSettings()->brand_color }};
        text-decoration: none;
    }

    /* End language &amp; currency*/

    /* compare */
    .top-link-compare {
        height: 40px;
        line-height: 1;
        text-align: center;
        display: inline-block;
        margin-top: 16px;
        width: 40px;
        border: 1px rgba(255, 255, 255, 0.5) solid;
        float: left;
        border-radius: 3px 0px 0px 3px;
        color: #eaeaea;
    }

    .top-link-compare .compare:before {
        content: "\f012";
        display: block;
        font-family: FontAwesome;
        font-size: 16px;
        font-style: normal;
        font-weight: normal;
        margin-top: 11px;
    }

    /* wishlist */

    .top-link-wishlist {
        font-size: 16px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        color: #eaeaea;
        display: inline-block;
        margin-top: 16px;
        width: 35px;
        border: 1px rgba(255, 255, 255, 0.5) solid;
        vertical-align: top;
        float: left;
        border-left: none;
        border-radius: 0px 3px 3px 0px;
    }

    /* Top Shopping Cart */
    .top-cart-content {
        display: none;
    }

    .mini-products-list .product-image {
        float: left;
        padding: 0;
        width: 65px;
    }

    .mini-products-list .product-image img {
        width: 65px;
    }

    .top-cart-content .product-name {
        margin: 0;
        line-height: 1;
        margin-top: 3px
    }

    .top-cart-content .product-name a {
        font-size: 13px;
        line-height: normal;
        font-weight: normal;
    }

    .top-cart-content .product-name a:hover {
        font-size: 13px;
        color: {{ colorSettings()->brand_color }}
    }

    .top-cart-contain .price {
        color: #333;
        font-weight: bold;
        text-transform: uppercase;
        padding-left: 0px;
        font-size: 12px;
    }

    .top-cart-contain .product-details .price {
        color: #333;
        width: auto;
        float: none;
        font-weight: bold;
        padding-left: 0px
    }

    .mini-cart {
        text-align: center;
        cursor: pointer;
        margin: 0px;
    }

    .mini-cart .basket a {
        color: #333;
        margin: 0px;
        line-height: 17px;
        font-size: 12px;
        letter-spacing: 0.5px;
        font-weight: 700;
        text-transform: uppercase;
        padding: 0px;
        display: block;
        background: #fff;
        padding-right: 10px;
        border-radius: 3px
    }

    .mini-cart .basket a:before {
        content: '\f07a';
        font-family: FontAwesome;
        font-size: 16px;
        color: {{ colorSettings()->brand_color }};
        height: 40px;
        width: 40px;
        display: inline-block;
        line-height: 40px;
        text-align: center;
        border-right: 1px solid #f1f1f1;
        font-weight: normal;
    }

    .mini-cart .basket a span.cart_count {
        display: inline-block;
        color: {{ colorSettings()->brand_color }};
        width: 30px;
        font-size: 14px;
        height: 20px;
        line-height: 20px;
        text-align: center;
        margin-right: 0px;
        padding-left: 0px;
        font-weight: 700;
    }

    .mini-cart .basket a div.price {
        display: inline-block;
    }

    .top-cart-content .pull-right {
        margin-right: 10px;
        padding-top: 3px
    }

    .top-cart-content .basket a {
        border: none;
        color: {{ colorSettings()->brand_color }}
    }

    .mini-cart .basket a:hover {
        text-decoration: none;
    }

    .mini-cart .open .basket a {
        color: #000;
        background: #fff;
        box-shadow: 0 3px 9px rgba(0, 0, 0, 0.3)
    }

    .mini-cart .dropdown-toggle {
        font-size: 14px;
        padding: 0px;
        text-transform: none;
    }

    .top-cart-contain {
        position: relative;
        /* margin-top: 16px; */
    }

    .top-cart-title p {
        margin: 0;
    }

    .top-cart-content .empty {
        padding: 10px;
        color: #333333;
    }

    .top-cart-content {
        display: none;
        position: absolute;
        top: 40px;
        right: 0px;
        background: #fff;
        padding: 0;
        text-align: right;
        z-index: 100;
        box-shadow: 0 0 15px -7px #666;
    }

    .top-subtotal {
        color: #fff;
        float: left;
        font-size: 14px;
        font-weight: bold;
        padding: 8px 10px;
        text-align: left;
    }

    .top-cart-content .product-details .btn-remove {
        position: absolute;
        right: 10px;
        top: 4px;
    }

    .top-cart-content .block-subtitle {
        border-bottom: 1px solid #DDDEE1;
        color: #fff;
        overflow: hidden;
        padding: 0px 5px;
        text-align: left;
        background: {{ colorSettings()->brand_color }}
    }

    .top-cart-content .block-subtitle .price {
        color: #fdd21b
    }

    ul#cart-sidebar {
        padding: 15px 20px 0px;
    }

    .mini-products-list {
        clear: both;
        display: block;
        margin-bottom: 0px;
        padding-left: 0px;
        max-height: 77vh;
        overflow-x: auto;
        padding-right: 5px;
    }

    /* top cart  */
    .top-cart-content li.item {
        width: 290px;
        margin: 8px 0px 15px;
        border-bottom: 1px #eee solid;
        display: inline-block;
        padding-bottom: 15px;
    }

    .top-cart-content li.item:last-child {
        margin: 0;
        border-bottom: 0px #eee solid;
        padding-bottom: 10px
    }

    .top-cart-content .product-details {
        color: #333333;
        position: relative;
        text-align: left;
    }

    .mini-products-list .product-details {
        margin-left: 80px;
        padding: 0;
    }

    .top-cart-content .product-details .btn-remove {
        position: absolute;
        right: 10px;
        top: 12px;
    }

    .top-cart-content .product-details .btn-edit {
        position: absolute;
        right: 25px;
        top: -2px;
    }

    .top-cart-content .product-details .btn-edit:hover {
        color: #339900;
    }

    .top-cart-content .actions {
        padding: 20px;
        margin: 0px 0px 15px 0px;
        overflow: hidden;
        padding-top: 0px;
        padding-bottom: 10px
    }

    .button.btn-checkout {
        background: #FED557;
        border: 1px solid #F5C328;
        color: #003169;
        padding: 8px 18px;
    }

    .button.btn-checkout:hover {
        background: #339900;
    }

    .button:btn-bag:hover {
        background: #f6f6f6
    }

    .btn-remove1 {
        background-image: url(../images/btn_remove.png);
        margin: 0px 0 0 5px;
    }

    .btn-remove1:hover,
    .btn-remove1:focus {
        background-position: 0 -12px;
    }

    .btn-remove1 {
        display: block;
        width: 15px;
        height: 13px;
        font-size: 0;
        line-height: 0;
        background-position: 0 0;
        background-repeat: no-repeat;
        text-indent: -999em;
        overflow: hidden;
        position: absolute;
        left: 28px;
        margin-top: 5px;
    }

    .block-compare .btn-remove1 {
        left: auto;
        right: 0px !important;
        margin-top: 0px;
        top: 5px
    }

    .mini-cart .btn-remove1 {
        left: auto;
        right: 0px !important;
        margin-top: 0px;
        top: 0px;
    }

    .mini-cart .actions .btn-checkout {
        background: #202726;
        color: #fff;
        font-size: 12px;
        text-transform: uppercase;
        font-weight: 600;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        display: inline-block;
        transition: color 300ms ease-in-out 0s, background-color 300ms ease-in-out 0s, background-position 300ms ease-in-out 0s;
        float: left;
        letter-spacing: 0.8px;
        border: 1px #202726 solid
    }

    .mini-cart .actions i {
        font-weight: 300;
        margin-right: 8px;
        font-size: 15px;
    }

    .mini-cart .actions .btn-checkout:hover {
        background: #202726;
        color: #fff;
    }

    .mini-cart .view-cart {
        cursor: pointer;
        float: none;
        font-size: 12px;
        font-weight: 600;
        padding: 10px 20px;
        text-decoration: none;
        text-transform: uppercase;
        text-align: center;
        display: inline-block;
        background: {{ colorSettings()->brand_color }};
        color: #fff;
        letter-spacing: 0.8px;
        border: 1px {{ colorSettings()->brand_color }} solid
    }

    /*========== 4. Navigation ==========*/

    nav {
        position: relative;
        margin: auto;
        width: 100%;
        z-index: 99;
        top: -11px;
    }

    @media only screen and (max-width: 767px) {
        nav {
            top: 0;
        }
    }

    .cms-index-index .nav-inner {
        border-bottom: none;
    }

    .nav-inner {
        position: relative;
        border-bottom: none;
        background: {{ colorSettings()->brand_color }};
        border-radius: 3px;
    }

    .nav-inner:before {
        width: 0;
        height: 0;
        border-right: 25px solid {{ colorSettings()->brand_color }};
        border-top: 27px solid transparent;
        border-bottom: 27px solid transparent;
        content: "";
        position: absolute;
        margin-left: -24px
    }

    .nav-inner:after {
        width: 0;
        height: 0;
        border-left: 25px solid {{ colorSettings()->brand_color }};
        border-bottom: 27px solid transparent;
        border-top: 27px solid transparent;
        content: "";
        position: absolute;
        margin-right: -24px;
        right: 0px;
        margin-top: -54px
    }

    @media only screen and (min-width:991.8px) and (max-width:1200px){
        .nav-inner:after {
        width: 0;
        height: 0;
        border-left: 25px solid #01362e;
        border-bottom: 26px solid transparent;
        border-top: 23px solid transparent;
        content: "";
        position: absolute;
        margin-right: -23px;
        right: 0px;
        margin-top: -48px;
    }
    }
    @media only screen and (min-width:991.8px) and (max-width:1200px){
        .nav-inner:before{
            border-top: 21px solid transparent;
        }
    }

    .nav-inner .mini-cart {
        display: none;
    }

    .sticky-header .mini-cart {
        display: inline-block;
        margin-top: -49px;
        position: absolute;
        right: 15px;
        z-index: 1000;
    }

    .sticky-header .top-cart-contain .price {
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        padding-left: 0px;
        font-size: 12px;
    }

    #nav>li#nav-home>a {
        color: #fff;
    }

    #nav>li#nav-home>a:hover {
        background: inherit;
        box-shadow: none;
    }

    #nav>li>a:last-child a {
        color: #333
    }

    .nav {
        width: 1000px;
        margin: 0px auto 0
    }

    #nav>li:hover>a,
    .vertnav-top li>a:hover {
        color: #fff;
        border-bottom: none;
        background: inherit;
    }

    #nav>li.active>a,
    .vertnav-top li.current>a {
        color: {{ colorSettings()->brand_color }};
    }

    #nav>li a.active {
        color: #fff;
    }

    #nav>li.mega-menu:hover>a.level-top:hover::after {
        content: "";
        position: absolute;
        top: 89%;
        left: 42%;
        border-width: 0px 6px 6px 6px;
        border-style: solid;
        border-color: {{ colorSettings()->brand_color }} transparent;
        display: block;
        width: 0;
        right: inherit;
        z-index: 10000;
    }

    #nav>li.mega-menu:hover a.level-top:after {
        content: "";
        position: absolute;
        top: 89%;
        left: 42%;
        right: inherit;
        border-width: 0px 6px 6px 6px;
        border-style: solid;
        border-color: {{ colorSettings()->brand_color }} transparent;
        display: block;
        width: 0;
        z-index: 10000;
    }

    .cms-index-index nav.sticky-header {}

    #nav {
        position: relative;
        z-index: 10;
        -webkit-transform: translateZ(0);
        padding: 0;
        margin: auto;
        text-align: center;
    }

    /* All levels */
    #nav li {
        text-align: left;
    }

    #nav li a {
        display: block;
        text-decoration: none;
    }

    #nav ul.level1>li a {
        color: #444
    }

    #nav ul.level1>li a:hover {
        color: {{ colorSettings()->brand_color }}
    }

    /* 1st level only */
    #nav>li {
        list-style: none;
        border-bottom: none;
        display: inline-block;
    }

    #nav>li.last {
        padding-right: 0;
    }

    #nav>li>a {
        display: block;
        padding: 19px 0px;
    }

    #nav>li>a>span {
        display: inline-block;
        padding: 0 18px;
        border-right: 1px solid rgba(255, 255, 255, 0.5);
    }

    #nav>li:last-child a>span {
        border-right: 0px solid #ddd;
    }

    /* Drop-down boxes*/
    #nav .level0-wrapper {
        position: absolute;
        left: -10000px;
        background-color: #fff;
    }

    #nav .level0-wrapper2 {
        padding: 5px 0px;
    }

    #nav .level0-wrapper2:before,
    #nav .level0-wrapper2:after {
        display: table;
        line-height: 0;
        content: "";
    }

    #nav .level0-wrapper2:after {
        clear: both;
    }

    #nav a.level-top.feature {
        margin: 0;
    }

    #nav li a.level-top .icon {
        padding: 3px;
        margin: 0;
        float: none;
        display: inline-block;
        vertical-align: middle;
        background-color: transparent !important;
    }

    #nav li:hover a.level-top .icon {
        padding: 3px;
    }

    #nav #homelink-icon {
        margin-left: 12px;
    }

    #nav #homelink-icon a.level-top {
        padding-left: 5px;
        padding-right: 5px;
        background: none !important;
        box-shadow: none !important;
        border: none !important;
    }

    #nav .nav-custom-link>a {
        cursor: pointer;
    }

    #nav .nav-custom-link {
        position: static;
    }

    #nav .nav-custom-link .header-nav-dropdown-wrapper {
        padding: 5px 0px 0px 0px;
        overflow: hidden
    }

    #nav .nav-custom-link .header-nav-dropdown-wrapper p {
        margin: 10px 10px;
        color: #999;
        line-height: 1.5em;
        font-size: 13px;
        font-weight: normal;
        margin-bottom: 25px
    }

    #nav .nav-custom-link .header-nav-dropdown-wrapper .heading {
        margin: 10px 0;
    }

    #nav a.level-top .caret {
        display: inline-block;
        width: 0;
        height: 0;
        margin-bottom: 2px;
        margin-left: 2px;
        vertical-align: middle;
        content: "";
        border-style: solid solid none;
        border-width: 4px 4px 0;
        border-color: #333 transparent transparent;
    }

    .vertnav .number {
        margin-left: 3px;
        color: #aaa;
    }

    #nav .number {
        display: inline;
        margin-left: 3px;
    }

    #nav ul li .number {
        color: #aaa;
    }

    .nav .itemslider {
        margin-top: 0;
        margin-bottom: 0;
    }

    .nav .itemslider .item {
        padding-bottom: 0;
    }

    /* 1st level */
    li.level0>a>span {
        position: relative;
    }

    li.level0>a>span>.cat-label {
        position: absolute;
        top: -12px;
        right: 0;
        padding: 0 6px;
        font-size: 14px;
        line-height: 22px;
    }

    /* Add pin (only 1st level) */
    li.level0>a>span>.pin-bottom:before {
        position: absolute;
        right: 6px;
        top: 22px;
        width: 0;
        height: 0;
        content: "";
        border-style: solid;
        border-width: 4px;
        border-color: transparent;
        transition: border-color 450ms ease-in-out;
        -moz-transition: border-color 450ms ease-in-out;
        -webkit-transition: border-color 450ms ease-in-out;
        -o-transition: border-color 450ms ease-in-out;
    }

    li.level0>a:hover>span>.pin-bottom:before {
        transition-duration: 100ms;
        -moz-transition-duration: 100ms;
        -webkit-transition-duration: 100ms;
        -o-transition-duration: 100ms;
    }

    /* 2nd level */
    li.level1>a>span>.cat-label {
        display: inline-block !important;
        padding: 0 4px;
        margin-left: 2px;
        vertical-align: middle;
    }

    /* 3rd level */
    li.level2>a>span>.cat-label {
        display: inline-block !important;
        padding: 0 4px;
        margin-left: 2px;
    }

    /* Category labels inside mobile menu / vertical menu */
    ul.vertnav li>a>span>.cat-label {
        position: static;
        display: inline-block !important;
        padding: 0 4px;
        margin-left: 2px;
    }

    /* Hide pin */
    ul.vertnav li>a>span>.pin-bottom:before {
        display: none;
    }

    /* Label size: all levels */
    ul.vertnav li>a>span>.cat-label {
        font-size: inherit;
        line-height: inherit;
    }

    ul.vertnav-top li>a>span>.cat-label {
        font-size: 14px;
        line-height: 18px;
    }

    /* Category blocks */
    .nav-block {
        margin-top: 0;
        margin-bottom: 0%;
    }

    .nav-block-bottom {
        float: left
    }

    .nav-block-center {
        margin-top: 0px;
    }

    .nav-block-right {
        margin-top: 0px;
        float: right;
        padding: 0px;
        text-align: center;
    }

    .nav-block-right img {
        max-width: 100%
    }

    .nav-block-level1-top {
        margin-bottom: 10px;
    }

    .nav-block-level1-bottom {
        margin-top: 10px;
    }

    .nav-block .section-line {
        border-color: #eee;
    }

    #nav>li>a {
        font-size: 12px;
        font-weight: 700;
        position: relative;
        letter-spacing: 0.5px;
        -webkit-transition: all 0.3s cubic-bezier(0.8, 0, 0, 1);
        -o-transition: all 0.3s cubic-bezier(0.8, 0, 0, 1);
        transition: all 0.3s cubic-bezier(0.8, 0, 0, 1);
        box-shadow: inset 0 0 0 0 #fff;
        text-transform: uppercase
    }

    @media only screen and (min-width:1200px){
        #nav>li>a{
            font-size: 10px !important;
        }
    }

    @media only screen and (min-width:991.8px) and (max-width:1199.9px){
        #nav>li>a{
            font-size: 7px !important;
        }
    }

    ul.level0 {
        padding: 0
    }

    ul.level1 {
        padding: 0px;
    }

    #nav .level0-wrapper,
    #nav.classic ul {
        background-color: #ffffff;
        color: #333333;
    }

    #nav ul li a:hover {
        color: {{ colorSettings()->brand_color }};
    }

    .cat-label-label1 {
        background-color: #D12631;
        color: #ffffff;
    }

    .cat-label-label2 {
        background-color: #d52462;
        color: #ffffff;
    }

    #nav .level0-wrapper,
    #nav.classic .parent>ul {
        background: #fff;
        border-top: none;
        box-shadow: 0 5px 10px -8px;
        width: 100%;
        padding: 0px;
    }

    #nav .level0-wrapper,
    #nav.classic ul.level0 {
        top: 55px;
    }

    #nav>li>a {
        color: #fff;
    }

    #nav>li.mega-menu {
        position: static;
    }

    .nav-inner #nav li.mega-menu .level0-wrapper {
        border: 0 none;
        padding: 15px 0px;
        z-index: 100;
        opacity: 0;
        visibility: hidden;
        display: block !important;
        width: 100%;
        z-index: 10000;
        opacity: 0;
        visibility: hidden;
        background: rgba(255, 255, 255, 1);
        border: 1px #eee solid;
        border-top: 3px solid {{ colorSettings()->brand_color }};
        -webkit-transform: scaleY(0);
        transform: scaleY(0);
        -webkit-transform-origin: 50% 0;
        transform-origin: 50% 0;
        -webkit-transition-property: transform;
        transition-property: transform;
        -webkit-transition-duration: 0.5s;
        transition-duration: 0.5s;
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
    }

    .nav-inner #nav li.mega-menu:hover .level0-wrapper {
        opacity: 1;
        visibility: visible;
        z-index: 1;
        -webkit-transform: scaleY(1);
        transform: scaleY(1);
        -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
        transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
    }

    #nav .level0-wrapper2 .col-1 {
        float: left;
        width: 68.5%;
    }

    #nav .level0-wrapper2 .col-2 {
        padding: 0;
        float: left;
        width: 31%;
    }

    #nav .level0-wrapper2 .col-3 {
        padding: 5px 0;
        float: left;
        width: 20%;
    }

    #nav .col-1 ul.level0>li {
        width: 30%;
    }

    .col-2 img:hover {
        opacity: 0.5;
    }

    .col-2 .menu_image {
        display: block;
    }

    .col-2 img {
        max-width: 100%
    }

    .col-2 .menu_image1 {
        display: block;
        margin-top: 15px;
    }

    /* 1st level only */
    #nav>li:hover>a {
        position: relative;
        z-index: 1;
    }

    /* 2nd level only */
    #nav ul.level0>li {
        display: inline-block;
        float: none;
        margin-right: 20px;
        padding-bottom: 20px;
        padding-top: 0;
        vertical-align: top;
        width: 14.4%;
    }

    #nav ul.level0>li.last {
        display: inline-block;
        float: none;
        vertical-align: top;
        padding-top: 0;
        padding-bottom: 15px;
        margin-right: 0px
    }

    #nav ul.level0>li>a {
        color: #222;
        font-size: 13px;
        font-weight: bold;
        line-height: 18px;
        padding: 5px 0px;
        letter-spacing: 2px;
        margin-bottom: 8px;
        text-transform: uppercase
    }

    #nav ul.level0>li>a:after {
        content: "";
        height: 1px;
        width: 25px;
        background: {{ colorSettings()->brand_color }};
        display: block;
        margin-top: 12px;
    }

    /* 2nd level+ */
    #nav ul li {
        list-style: none;
        padding: 5px 0;
    }

    #nav li ul li ul li {}

    #nav li ul li ul li:last-child {
        border: none
    }

    /* 3rd level only */
    #nav ul.level1 {
        position: static;
    }

    #nav ul.level1>li a {
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
        font-size: 13px;
        letter-spacing: normal;
        letter-spacing: 0.5px;
    }

    #nav ul.level1>li a:hover {
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
        padding-left: 10px;
    }

    /* 4th level */
    #nav ul.level2 {
        margin: 7px 0;
        padding: 0;
        position: static;
    }

    #nav ul.level2 a {
        font-size: 0.9166em;
        line-height: 1.2727em;
        opacity: 0.6;
    }

    #nav li.level2:hover ul.level2 a {
        opacity: 1;
        transition: opacity 150ms ease-out;
        -moz-transition: opacity 150ms ease-out;
        -webkit-transition: opacity 150ms ease-out;
        -o-transition: opacity 150ms ease-out;
    }

    /* 4rd level+ */
    #nav ul ul ul li {
        background: none;
        padding-left: 0;
    }

    /* Vertical nav-links */
    .nav-links>li,
    .nav-links>li>a {
        line-height: 3em;
    }

    .nav-links>li>a {
        padding: 0 0.5833em;
    }

    .nav-links>li.label {
        padding-right: 0.5833em;
    }

    /* Basic nav-links, no separators */
    .nav-links>li {
        float: left;
    }

    .nav-links>li>a {
        display: block;
    }

    .grid12-5 {
        display: inline;
        float: left;
        margin-left: 1%;
        margin-right: 1%;
        width: 23%;
    }

    .grid12-3 {
        display: inline;
        float: left;
        margin-right: 30px;
        width: 23.09%;
        text-align: center;
    }

    .grid12-3:last-child {
        margin-right: 0%;
    }

    .grid12-3 img {
        width: 100%
    }

    .grid12-3 .item-title a {
        text-transform: uppercase;
        margin-top: 10px;
        color: #aaa
    }

    .grid12-4 {
        display: inline;
        float: left;
        margin: 0px 0px 0px 10px;
        width: 34%;
    }

    .grid12-8 {
        display: inline;
        float: left;
        margin-left: 0;
        margin-right: 1%;
        width: 64%;
    }

    #nav .grid12-8 ul.level0>li {
        width: 21%;
    }

    .grid13-8 {
        display: inline;
        float: left;
        margin-left: 0;
        margin-right: 1%;
        margin-bottom: 0;
        width: 80.90%;
    }

    .back-link {
        float: left
    }

    #nav .level0-wrapper .nav-add {
        padding: 5px 0 0 0px;
        overflow: hidden;
    }

    #nav .level0-wrapper .nav-add .push_item {
        float: left;
        margin-right: 18px;
        width: 49.2%;
    }

    #nav .level0-wrapper .nav-add .push_item img {
        max-width: 100%;
    }

    #nav .level0-wrapper .nav-add .push_item_last {
        margin-right: 0px;
    }

    #nav .level0-wrapper .nav-add .push_item .push_img a {
        display: block;
    }

    #nav .level0-wrapper .nav-add .push_item .push_text {
        color: #666;
        font-size: 12px;
        padding: 8px 0;
        text-align: center
    }

    .custom-menu {
        color: #999;
        padding-top: 25px !important;
        padding-bottom: 25px !important
    }

    #nav .nav-custom-link .header-nav-dropdown-wrapper h4.heading {
        color: #000;
        font-size: 12px;
        text-transform: uppercase;
        margin-top: 0px;
        margin-bottom: 10px;
    }

    #nav .nav-custom-link .header-nav-dropdown-wrapper h4.heading {
        color: #000;
        font-size: 13px;
        font-weight: bold;
        margin-bottom: 0px;
        text-transform: uppercase;
        letter-spacing: 2px;
        padding: 0 10px;
        line-height: 20px;
        padding-bottom: 5px;
        border-bottom: 1px #ddd solid;
        display: inline-block;
    }

    #nav li.drop-menu ul {
        position: absolute;
        top: 55px;
        left: 0;
        background: #fff;
        padding: 6px 0;
        display: block !important;
        border: 1px #eee solid;
        border-top: 3px {{ colorSettings()->brand_color }} solid;
        width: 165px;
        text-align: left;
        z-index: 1000;
        -webkit-transform: scaleY(0);
        transform: scaleY(0);
        -webkit-transform-origin: 50% 0;
        transform-origin: 50% 0;
        -webkit-transition-property: transform;
        transition-property: transform;
        -webkit-transition-duration: 0.5s;
        transition-duration: 0.5s;
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
    }

    #nav li.drop-menu:hover ul {
        -webkit-transform: scaleY(1);
        transform: scaleY(1);
        -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
        transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
    }

    #nav>li.drop-menu ul li ul {
        border-top: none;
    }

    #nav>li.drop-menu {
        position: relative;
    }

    #nav li.drop-menu ul li {
        position: relative;
    }

    #nav li.drop-menu ul li a {
        color: #333;
        line-height: 20px;
        font-size: 13px;
        padding: 0 12px;
        display: block;
    }

    #nav li.drop-menu ul li:hover>a {
        color: {{ colorSettings()->brand_color }};
        padding-left: 18px;
    }

    #nav li.drop-menu ul li span.plus {
        display: block;
        position: absolute;
        right: 7px;
        top: 50%;
        margin-top: -1px;
        height: 1px;
        width: 7px;
        background: #535353;
    }

    #nav li.drop-menu ul {
        display: none;
    }

    .sticky-header {
        position: fixed;
        margin-top: 0px;
        z-index: 1000;
        display: block;
        top: 0px;
        width: 100%;
        transition: all 0.5s;
        background: {{ colorSettings()->brand_color }}
    }

    .top-cart-contain.sticky-topcart {
        position: fixed;
        margin-top: 0px;
        z-index: 1100;
        display: block;
        top: 7px;
        transition: all 0.5s;
        right: 20px;
    }

    header {
        /* background: url(../../images/top-strip.jpg) no-repeat top left; */

        /* background-repeat: no-repeat !important;
    background-position: top left !important; */
    }

    .header-container {
        transition: all 0.5s;
    }

    /*----- 5. Features Box ----------- */

    .our-features-box {
        overflow: hidden;
        width: 100%;
        margin: auto;
        padding: 20px 0 40px;
    }

    .our-features-box ul {
        list-style: none;
        margin: auto;
        padding: 0;
        border: none;
        overflow: hidden
    }

    .our-features-box .seprator-line {
        width: 2% !important;
        text-align: center;
        border-left: 1px #f1f1f1 solid;
        height: 50px;
        margin-left: 2%
    }

    .our-features-box li {
        float: left;
        margin-bottom: 0px;
        text-align: center;
        width: 30.5%;
        padding: 0;
        display: inline-block;
    }

    .our-features-box .col-lg-3 .feature-box.last {
        text-align: center;
    }

    .our-features-box .col-lg-3 .feature-box.first {
        text-align: center;
    }

    .our-features-box .feature-box {
        overflow: hidden;
        font-size: 13px;
        text-align: center;
        color: #333;
        line-height: 1.4em;
        font-weight: normal;
        text-transform: uppercase;
        padding: 15px 20px;
        background: {{ colorSettings()->brand_color }};
        border-radius: 3px;
    }

    .our-features-box .feature-box h3 {
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 0.5px;
        margin-bottom: 3px;
        margin-top: 5px;
        color: #fff;
        text-transform: uppercase;
    }

    .our-features-box .feature-box .content {
        display: inline-block;
        text-align: left;
        text-transform: none;
        color: #fff;
    }

    .our-features-box .feature-box .content p {
        margin: 0px
    }

    .our-features-box .feature-box span {
        display: inline-block;
        font-size: 16px;
        font-weight: normal;
        text-transform: none;
        margin-right: 6px;
        color: #fff;
        vertical-align: -1px;
    }

    /*  6. Home page Sliders  */

    .carousel-inner {
        margin-top: 20px;
    }

    .slider-items-products .owl-buttons .owl-prev a {
        background-position: 0 100%;
        border: 1px #d1d1d1 solid;
        border-right: none
    }

    /* 6a. Brand Logo Slider*/
    .brand-logo {
        margin-top: 15px;
        background: #f8f8f8
    }

    #brand-logo-slider {
        margin: 0px;
        padding: 30px 0px;
    }

    .brand-logo .slider-items-products .item {
        text-align: center;
    }

    .brand-logo .owl-pagination {
        top: -45px;
    }

    .brand-logo .slider-items-products .owl-buttons .owl-next {
        position: absolute;
        right: -7px;
        top: 35px;
        display: none;
    }

    .brand-logo .slider-items-products .owl-buttons a {
        border: none;
        background: #f5f5f5;
        margin-top: -15px;
    }

    .brand-logo .slider-items-products .owl-buttons .owl-prev a {
        border: none;
    }

    .brand-logo .slider-items-products .owl-buttons .owl-next a:before {
        font-size: 28px;
    }

    .brand-logo .slider-items-products .owl-buttons .owl-prev a:before {
        font-size: 28px;
    }

    .brand-logo .slider-items-products .owl-buttons .owl-prev {
        left: 0px;
        position: absolute;
        top: 35px;
        background: none;
        display: none;
    }

    .brand-logo a.flex-next {
        background: #fff !important;
        color: #666 !important;
    }

    .brand-logo a.flex-next:hover {
        color: #000 !important;
        background: #fff !important;
    }

    .brand-logo a.flex-prev {
        background: #fff !important;
        color: #666 !important;
    }

    .brand-logo a.flex-prev:hover {
        color: #000 !important;
        background: #fff !important;
    }

    /* 6b. offer slider */
    .offer-slider {
        display: block;
        text-align: center;
        margin: 20px auto 25px;
    }

    .offer-slider h2 {
        color: #fff;
        font-size: 42px;
        margin: 0px auto;
        font-weight: bold;
        display: block;
        padding: 0px;
        text-align: center;
        margin-bottom: 10px;
        letter-spacing: -1px;
    }

    .offer-slider h3 {
        width: 100px;
        height: 100px;
        background-color: #000;
        text-align: center;
        display: inline-block;
        font-size: 12px;
        font-weight: bold;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        line-height: 20px;
        margin-bottom: 20px;
        border-radius: 50px
    }

    .offer-slider h3 span {
        display: block;
        padding-top: 32%;
        color: #fff
    }

    .offer-slider h3 span strong {
        display: block;
        color: #fff;
        font-weight: 900
    }

    .offer-slider li {
        position: relative
    }

    .offer-slider p {
        color: #fff;
        padding: 0;
        font-size: 16px;
        font-weight: normal;
        text-align: center;
        font-family: Georgia, "Times New Roman", Times, serif;
        font-style: italic
    }

    .offer-slider .shop-now {
        padding: 10px 25px;
        font-size: 13px;
        text-transform: uppercase;
        font-weight: bold;
        color: #fff;
        letter-spacing: 0.5px;
        display: inline-block;
        margin-top: 25px;
        background: none;
        border: 1px #fff solid;
        margin-bottom: 25px
    }

    .offer-slider a.shop-now:after {
        content: '\f0da';
        font-family: FontAwesome;
        display: inline-block !important;
        margin-left: 15px;
        color: {{ colorSettings()->brand_color }};
        font-size: 16px;
    }

    .offer-slider a.shop-now:hover {
        color: {{ colorSettings()->brand_color }};
        background-color: #fff;
    }

    .cross-sell-pro {
        margin-top: 25px;
    }

    #cross-sell-products .owl-pagination {
        display: none;
    }

    .owl-item .item {
        margin: 0 12px;
    }

    .slider-items-products .item {
        text-align: center;
        margin-top: 0px !important
    }

    .slider-items-products .item .product-image {
        overflow: hidden;
        display: inline-block;
    }

    .slider-items-products .item .product-image img {
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
        -webkit-transition-property: transform;
        transition-property: transform;
    }

    .slider-items-products .item .product-image:hover img {
        transform: scale(-1, 1);
    }

    .owl-buttons {
        opacity: 1;
    }

    .slider-items-products .owl-buttons .owl-prev {
        position: absolute;
        right: 18px;
        top: -20.5%;
    }

    .slider-items-products .owl-buttons .owl-next {
        position: absolute;
        right: -10px;
        top: -20.5%;
    }

    .slider-items-products .owl-buttons .owl-prev a {
        background-position: 0 100%;
    }

    .slider-items-products .owl-buttons .owl-next a {
        background-position: 100% 100%;
        top: 50%;
        padding: 2px;
        border-left: 1px #ddd solid;
        background: none;
    }

    .slider-items-products .owl-buttons .owl-next a:before {
        font-family: 'FontAwesome';
        font-style: normal;
        font-weight: normal;
        speak: none;
        -webkit-font-smoothing: antialiased;
        content: "\f105";
        text-transform: none;
        font-size: 32px;
        line-height: 12px;
    }

    .slider-items-products .owl-buttons .owl-prev a:before {
        font-family: 'FontAwesome';
        font-style: normal;
        font-weight: normal;
        speak: none;
        -webkit-font-smoothing: antialiased;
        content: "\f104";
        text-transform: none;
        font-size: 32px;
        line-height: 16px;
    }

    .slider-items-products .owl-buttons a {
        display: block;
        height: 18px;
        margin: 0px 0 0 -30px;
        position: absolute;
        top: 50%;
        width: 30px;
        z-index: 5;
        color: #888;
        border: 0px #eaeaea solid;
        background: none;
    }

    /*6c. bestsell slider*/
    .bestsell-pro .slider-items-products .owl-buttons a {
        background: inherit;
        border: medium none;
        color: #fff;
        display: block;
        height: 35px;
        margin: 0 0 0 -30px;
        position: absolute;
        top: 50%;
        width: 28px;
        z-index: 5;
    }

    .bestsell-pro .slider-items-products .owl-buttons a:hover {
        text-decoration: none;
        background: {{ colorSettings()->brand_color }};
        color: #fff !important;
        border: 1px solid {{ colorSettings()->brand_color }} !important;
    }

    .bestsell-pro .slider-items-products .owl-buttons .owl-prev a {
        border: 1px solid #ddd;
        color: #666;
        height: inherit;
    }

    .bestsell-pro .slider-items-products .owl-buttons .owl-next a {
        border: 1px solid #ddd;
        color: #666;
        height: inherit;
    }

    .bestsell-pro .slider-items-products .owl-buttons .owl-next {
        right: -18px
    }

    .bestsell-pro .slider-items-products .owl-buttons .owl-prev a:before {
        line-height: 25px;
        font-size: 20px;
    }

    .bestsell-pro .slider-items-products .owl-buttons .owl-next a:before {
        line-height: 21px;
        font-size: 20px;
    }

    .bestsell-pro .slider-items-products .owl-buttons .owl-prev {
        left: -14px;
    }

    #offer-slider.product-flexslider {
        margin: 10px 0px 25px;
    }

    /*#offer-slider{ border:1px #e5e5e5 solid; background:#fff; padding:25px 12px;}*/
    .product-flexslider {
        margin: 20px 0px;
    }

    .bestsell-pro .product-flexslider .owl-buttons {
        opacity: 1;
    }

    .slider-items-products .owl-buttons .owl-next {
        right: -10px
    }

    .product-flexslider:hover .owl-buttons {
        opacity: 1;
        transition: color 300ms ease-in-out 0s, background-color 300ms ease-in-out 0s, background-position 300ms ease-in-out 0s;
    }

    .product-flexslider .owl-buttons {
        opacity: 0;
        transition: color 300ms ease-in-out 0s, background-color 300ms ease-in-out 0s, background-position 300ms ease-in-out 0s;
    }

    .owl-theme .owl-controls .owl-buttons div {
        background: none !important;
    }

    .product-flexslider .owl-buttons {
        opacity: 1;
    }

    .slider-items-products .owl-buttons a:hover {
        text-decoration: none;
        background: #fff;
        color: {{ colorSettings()->brand_color }};
    }

    .slider-items-products .owl-buttons .owl-prev a {
        background-position: 0 100%;
        border: 0px #eaeaea solid;
    }

    .bestsell-pro {
        margin-bottom: 35px;
    }

    .bestsell-pro .block-content {
        padding: 25px 0px 0px;
    }

    #bestsell-slider.product-flexslider {
        margin: 0px -12px;
    }

    .bestsell-pro .block-title {
        color: #000;
        font-family: 'Montserrat', sans-serif;
        font-size: 22px;
        font-weight: 600;
        line-height: 28px;
        padding: 0px 0px;
        position: relative;
        text-transform: uppercase;
        border-bottom: 1px #e5e5e5 solid;
        height: 39px;
    }

    .bestsell-pro .block-title h2 {
        margin: auto;
        font-weight: 600;
        font-size: 22px;
        letter-spacing: 0.5px;
        border-bottom: 1px {{ colorSettings()->brand_color }} solid;
        display: inline-block;
        padding-bottom: 12px;
    }

    .bestsell-pro .owl-theme .owl-controls {
        left: inherit;
        margin-top: 11px;
        position: absolute;
        text-align: center;
        top: -44px;
        right: 28px;
    }

    .category-products .text-banner {
        background-color: #fff;
        border-top: 1px solid #eaeaea;
        bottom: -60px;
        left: 0;
        padding-bottom: 20px;
        padding-top: 25px;
        position: absolute;
        right: 0;
        z-index: 10;
    }

    /*6d. featured slider*/
    .featured-pro {
        margin-bottom: 35px;
    }

    .featured-block {
        background-color: #fff;
        border: 1px solid #e5e5e5;
        margin-bottom: 0px;
        overflow: hidden;
        position: relative;
    }

    .featured-pro .home-block-inner {
        border-width: 0px;
        float: right;
        width: 24.3%;
        height: 100%;
        position: absolute;
        right: 0;
        background: url(../images/slider-banner.jpg) no-repeat top left
    }

    .featured-pro .block-content {
        border-right: 1px solid #f1f1f1;
        margin-right: 24.3% !important;
        padding: 25px 10px 25px 10px;
        width: 75.7%;
    }

    #featured-slider.product-flexslider {
        margin: 0px;
    }

    .featured-pro .block-title {
        color: #fff;
        font-family: 'Montserrat', sans-serif;
        font-size: 26px;
        font-weight: 600;
        line-height: 28px;
        padding: 25px;
        position: relative;
        text-transform: uppercase;
        border-bottom: 1px rgba(255, 255, 255, 0.5) solid;
        margin-bottom: 20px;
    }

    .featured-pro a.view_more_bnt {
        border: none;
        background: #fff;
        text-transform: uppercase;
        color: #666;
        padding: 8px 15px;
        font-size: 11px;
        letter-spacing: 0.5px;
        font-weight: bold;
        float: left;
        margin-top: 25px;
        margin-left: 25px;
        z-index: 1;
        position: relative;
        border-radius: 3px;
    }

    .featured-pro a.view_more_bnt:hover {
        background: {{ colorSettings()->sub_color }};
        color: #fff;
    }

    .featured-pro .block-title h2 {
        margin: auto;
        font-weight: 600;
        font-size: 22px;
    }

    .featured-pro .block-title em {
        font-style: normal;
        font-weight: bold;
    }

    .featured-pro .home-block-inner .pretext {
        margin-top: 5px;
        color: #fff;
        float: right;
        font-size: 14px;
        font-weight: 300;
        line-height: 24px;
        text-transform: none;
        margin-left: 25px;
        margin-right: 25px;
        letter-spacing: 0.5px;
    }

    .featured-pro .owl-theme .owl-controls {
        margin-top: 10px;
        position: absolute;
        right: -7.5%;
        text-align: center;
        top: auto;
        width: 2.5%;
        top: 80%;
    }

    .featured-pro .slider-items-products .owl-buttons a {
        background: inherit;
        display: block;
        height: 38px;
        margin: 0px 0 0 -30px;
        position: absolute;
        top: 50%;
        width: 28px;
        z-index: 5;
        color: #fff;
        border: none;
    }

    .featured-pro .slider-items-products .owl-buttons .owl-prev a {
        border: none;
    }

    .featured-pro .slider-items-products .owl-buttons .owl-next {
        right: -18px
    }

    .featured-pro .slider-items-products .owl-buttons .owl-prev a:before {
        line-height: 35px;
    }

    .featured-pro .slider-items-products .owl-buttons .owl-next a:before {
        line-height: 32px;
    }

    .featured-pro .slider-items-products .owl-buttons .owl-prev {
        left: 4px;
    }

    .featured-pro .slider-items-products .owl-buttons a:hover {
        text-decoration: none;
        background: inherit;
        color: {{ colorSettings()->sub_color }};
        border: none;
    }

    /*6e. special slider*/
    .new-arrivals-pro {
        margin-bottom: 30px;
    }

    .new-arrivals-block {
        background-color: #fff;
        border: 1px solid #e5e5e5;
        margin-bottom: 0px;
        overflow: hidden;
        position: relative;
    }

    .new-arrivals-block .home-block-inner {
        border-width: 0 !important;
        float: left;
        width: 24.3%;
    }

    .new-arrivals-block .block-content {
        border-left: 1px solid #f1f1f1;
        margin-left: 24.3%;
        padding: 25px 10px;
        width: 75.7%;
    }

    #new-arrivals-slider.product-flexslider {
        margin: 0px;
    }

    .new-arrivals-block .block-title {
        border-bottom: 1px solid #f1f1f1;
        color: #fff;
        font-family: 'Montserrat', sans-serif;
        font-size: 26px;
        font-weight: 900;
        line-height: 28px;
        padding: 25px;
        position: relative;
        text-transform: uppercase;
        background: #1f8ceb;
    }

    .new-arrivals-pro a.view_more_bnt {
        border: 1px #d1d1d1 solid;
        background: #fff;
        text-transform: uppercase;
        color: #666;
        padding: 8px 15px;
        font-size: 11px;
        letter-spacing: 0.5px;
        font-weight: bold;
        float: left;
        margin-top: 12px;
        margin-left: 25px;
        z-index: 1;
        position: relative;
    }

    .new-arrivals-pro a.view_more_bnt:hover {
        border: 1px #1f8ceb solid;
        background: #1f8ceb;
        color: #fff;
    }

    .new-arrivals-block .block-title h2 {
        margin: auto;
        font-weight: 900;
        font-size: 26px;
        letter-spacing: 0.5px;
    }

    .new-arrivals-block .block-title em {
        font-style: normal;
        font-weight: 300;
    }

    .new-arrivals-block .home-block-inner .pretext {
        margin-top: 25px;
        color: #888;
        float: right;
        font-size: 14px;
        font-weight: 300;
        line-height: 24px;
        text-transform: none;
        margin-left: 25px;
        margin-right: 25px;
        letter-spacing: 0.5px;
    }

    .new-arrivals-pro .owl-theme .owl-controls {
        left: -5.4%;
        margin-top: 10px;
        position: absolute;
        text-align: center;
        top: 3%;
        width: 2.5%;
    }

    .new-arrivals-pro .slider-items-products .owl-buttons a {
        background: inherit;
        display: block;
        height: 35px;
        margin: 0px 0 0 -30px;
        position: absolute;
        top: 50%;
        width: 28px;
        z-index: 5;
        color: #fff;
        border: none;
    }

    .new-arrivals-pro .slider-items-products .owl-buttons a:hover {
        text-decoration: none;
        background: inherit;
        color: #fff;
        border: none;
    }

    .new-arrivals-pro .slider-items-products .owl-buttons .owl-prev a {
        border: none;
    }

    .new-arrivals-pro .slider-items-products .owl-buttons .owl-next {
        right: -30px
    }

    .new-arrivals-pro .slider-items-products .owl-buttons .owl-prev a:before {
        line-height: 35px;
    }

    .new-arrivals-pro .slider-items-products .owl-buttons .owl-next a:before {
        line-height: 32px;
    }

    .new-arrivals-pro .slider-items-products .owl-buttons .owl-prev {
        left: -13px;
    }

    .recommend {
        margin: 20px auto;
        position: relative;
    }

    .recommend .controls .next {
        right: 0;
    }

    .recommend .controls .prev {
        right: 36px;
    }

    .offer-info {
        margin: auto;
        padding: 0px 30px;
        text-align: center;
    }

    /* 6f. Other Slider   **/
    .box-up-sell .flex-direction-nav .flex-prev,
    .box-cross-sell .flex-direction-nav .flex-prev,
    #brand-slider .flex-direction-nav .flex-prev,
    .featured-products .flex-direction-nav .flex-prev {
        right: 53px;
    }

    .main .box-up-sell h2.subtitle .line,
    .main .box-cross-sell h2.subtitle .line,
    .brand-slider-wrap h2.subtitle .line,
    .featured-products h2.subtitle .line {
        right: 130px;
    }

    .side-banner {
        margin-bottom: 20px
    }

    .side-banner:last-child {
        margin-bottom: 0px
    }

    .side-banner img {
        width: 100%;
    }

    /*========== 7. Products Grid ==========*/
    .page-heading {
        border-bottom: 1px solid #e5e5e5;
        font-size: 22px;
        font-weight: 600;
        letter-spacing: 0.5px;
        margin: -15px 0px 25px;
        padding: 10px 0px 20px;
        position: relative;
        text-transform: uppercase;
    }

    .page-title h1,
    .page-title h2 {
        color: #000;
        font-size: 22px;
        font-weight: 600;
        letter-spacing: 0.5px;
        margin-top: 0;
        padding-bottom: 11px;
        text-align: left;
        text-transform: uppercase;
        margin-bottom: auto;
    }

    .category-products .text-banner h2 {
        color: #333;
    }

    .category-products .text-banner h3 {
        color: #000;
    }

    .category-product {
        margin-top: 25px;
        background-color: #fff;
        margin-bottom: 10px;
        overflow: hidden;
        position: relative;
    }

    .category-product .nav.navbar-nav {
        width: 100%;
        text-align: right;
    }

    .category-product .navbar {
        line-height: inherit;
        margin-bottom: auto;
        min-height: inherit;
        border: none;
    }

    .category-product .new_title.center {
        margin-bottom: 0px;
    }

    .product-bestseller {
        margin: 20px 0px 0px;
        display: inline-block;
        width: 100%;
    }

    .product-bestseller .product-featured-content {
        width: 100%;
        float: right;
    }

    .product-bestseller .product-featured-content .product-featured-list {
        margin-left: 0px;
        overflow: hidden;
    }

    .category-product .navbar-collapse {
        padding: 0px;
    }

    .category-product .navbar-nav>li:first-child {
        float: left;
    }

    .category-product .navbar-nav>li:first-child>a {
        padding: 0px;
    }

    .category-product .navbar-nav>li {
        float: none;
        display: inline-block;
    }

    .category-product .navbar-nav>li.divider {
        border-right: 1px solid #ccc;
        color: #ccc;
        display: inline;
        height: 20px;
        width: 1px;
        margin-left: 4px;
    }

    .category-product .navbar-nav>li.active a {
        background-color: {{ colorSettings()->sub_color }};
        color: #fff
    }

    .category-product .navbar-nav>li>a {
        color: #666;
        font-size: 11px;
        letter-spacing: 0.5px;
        padding: 4px 12px;
        margin-top: 1px;
        text-transform: uppercase;
        margin-left: 3px;
        background: #f2f2f2;
        border-radius: 3px;
    }

    .category-product .nav>li>a:hover,
    .category-product .nav>li>a:focus {
        text-decoration: none;
        background-color: {{ colorSettings()->sub_color }};
        color: #fff
    }

    .product-bestseller .product-list li {
        border-right: 1px solid #eaeaea;
        padding-bottom: 10px;
        min-height: 350px;
    }

    .product-bestseller .product-list .owl-stage .active:last-child li {
        border: none;
    }

    .tab-container {
        position: relative;
    }

    .tab-container .tab-panel {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        opacity: 0;
        visibility: hidden;
    }

    .tab-container .active {
        opacity: 1;
        visibility: inherit;
        position: inherit;
        -vendor-animation-duration: 0.3s;
        -vendor-animation-delay: 1s;
        -vendor-animation-iteration-count: infinite;
    }

    .navbar-nav .new_title {
        border: none;
        padding: 0px;
    }

    .box-hover .add-to-links li a {
        height: 34px;
        display: block;
        font-size: 0;
        color: #fff;
        line-height: 36px;
        text-align: left;
        padding: 0;
        text-transform: uppercase;
        margin: 0;
        background: none;
        font-weight: 700;
        font-family: 'Montserrat', sans-serif;
        letter-spacing: 0.5px;
    }

    .box-hover .add-to-links li a:after {
        width: 30px;
        height: 34px;
        float: left;
        background: {{ colorSettings()->sub_color }};
        content: "";
        text-align: center;
        font-family: FontAwesome;
        font-size: 11px;
        border-bottom: 1px rgba(255, 255, 255, 0.2) solid
    }

    .box-hover .add-to-links li a:hover {
        padding-right: 15px;
        margin: 0 10px 0 0px;
        font-size: 11px;
        background: {{ colorSettings()->brand_color }};
        color: #fff
    }

    .box-hover .add-to-links li a:hover:after {
        margin-right: 15px;
        background: {{ colorSettings()->brand_color }};
    }

    .item .item-inner .item-img .box-hover .add-to-links li a.link-wishlist:after {
        content: "\f004";
        font-size: 13px;
        font-weight: normal;
    }

    .item .item-inner .item-img .box-hover .add-to-links li a.link-compare:after {
        content: "\f005";
        font-size: 15px;
        font-weight: normal;
    }

    .item .item-inner .item-img .box-hover .add-to-links li a.link-quickview:after {
        content: "\f00e";
        font-size: 15px;
        font-weight: normal;
    }

    .box-hover {
        transition: all 0.3s ease-out;
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        -ms-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
    }

    .content-page .category-product {
        margin-bottom: 0px;
        margin-top: 0px;
    }

    /* products title */
    .new_title h2 {
        color: #333;
        font-size: 22px;
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        margin: auto;
        line-height: normal;
        letter-spacing: 0.5px;
    }

    .new_title h2 strong {
        color: {{ colorSettings()->brand_color }};
        font-weight: 600;
    }

    .new_title h3 {
        font-weight: 600;
        color: #999;
        margin-bottom: 40px;
        text-align: center;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 1.5px;
    }

    .new_title.center {
        padding: 0 0 0px 0;
        text-align: center;
    }

    .new_title {
        color: #000000;
        margin: 0px;
        text-align: left;
        text-transform: none;
        padding: 25px 0;
        border-bottom: 0px solid #f1f1f1;
    }

    .cross-sell-pro .new_title h2 {
        padding: 8px 20px 8px 0px;
    }

    .cross-sell-pro {
        margin-top: 25px;
    }

    /*  category-slider  */

    .category-title {
        border-bottom: 1px solid #ddd;
        margin: 0 0 10px;
    }

    .category-image {
        display: block;
        margin: 30px auto 25px;
        position: relative;
    }

    .category-products {
        padding-bottom: 5px;
    }

    .category-products .products-grid {
        margin: 0px -12px
    }

    .category-description a.prev,
    .category-description a.next {
        margin: 125px 6px 0px 5px;
    }

    .category-description {
        margin-bottom: 15px;
    }

    .cat-img-title.cat-box {
        margin: 0;
        text-align: left;
        left: 20px;
        top: 5px;
        padding: 110px 45px 25px;
        position: absolute;
    }

    #category-desc-slider {
        margin: 0px 0px 30px;
    }

    .small-tag {
        color: #fff;
        display: inline-block;
        padding: 8px 0px;
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: 10px;
        font-weight: normal;
        border-top: 3px double #eee;
        border-bottom: 3px double #eee;
    }

    .cat-img-title .cat-heading {
        font-size: 36px;
        text-transform: uppercase;
        color: #fff;
        font-weight: 700;
        margin-top: 20px
    }

    .cat-img-title p {
        clear: left;
        font-size: 13px;
        line-height: 1.6em;
        margin-bottom: 1px;
        padding: 0px;
        font-weight: normal;
        color: #fff
    }

    .cat-img-title.cat-bg p {
        color: #fff;
    }

    .category-description .slider-items-products .owl-buttons .owl-prev {
        left: 17px;
        position: absolute;
        top: 49%;
        background: none;
    }

    .category-description .slider-items-products .owl-buttons .owl-next {
        right: 7px;
        position: absolute;
        top: 49%;
        background: none;
        padding: 0px
    }

    .category-description .slider-items-products .owl-buttons a {
        z-index: 1;
        position: absolute;
        left: 10px;
        top: 0px;
        padding: 5px 3px 10px 0px;
        color: #222;
        font-size: 16px;
        font-weight: 600;
        text-decoration: none;
        -webkit-transition: all 0.2s ease-out;
        -moz-transition: all 0.2s ease-out;
        transition: all 0.2s ease-out;
        font-size: 0px;
        height: 30px;
        width: 30px;
        text-align: center;
        border-radius: 0px;
        background: #fff;
        opacity: 0.5;
        border: 1px #ddd solid;
        margin-top: -15px;
    }

    .category-description .slider-items-products .owl-buttons a:hover {
        background: {{ colorSettings()->brand_color }};
        opacity: 1;
        border: 1px {{ colorSettings()->brand_color }} solid;
        color: #fff;
    }

    .category-description .slider-items-products .owl-buttons .owl-prev a:before {
        font-size: 24px;
        padding: 0px 8px;
        line-height: 16px;
    }

    .category-description .slider-items-products .owl-buttons .owl-next a:before {
        font-size: 24px;
        padding: 0px 8px;
        line-height: 16px;
    }

    .category-description .owl-item .item {
        margin: auto;
        background: #fff;
    }

    .category-description .owl-item .item img {
        max-width: 100%;
    }

    /* Product item */

    .products-grid {
        margin: 0;
        list-style: none;
    }

    ul.products-grid {
        padding: 0;
    }

    .category-products ul.products-grid li.item {
        text-align: center;
        margin-top: 0px;
        margin-bottom: 25px;
        padding: 0 12px;
    }

    .category-products ul.products-grid li.item.last {
        text-align: center;
    }

    .category-products ul.products-grid li.item img {
        width: 100%;
    }

    .products-grid .item .actions {
        position: absolute;
        bottom: 1px;
        width: 100%;
        bottom: -55px;
        transition: all 300ms ease-in-out 0s;
        -moz-transition: all 300ms ease-in-out 0s;
        -webkit-transition: all 300ms ease-in-out 0s;
        -o-transition: all 300ms ease-in-out 0s;
        z-index: 9;
        overflow: visible;
        opacity: 0;
    }

    .products-grid .item:hover .actions {
        left: 1px;
        bottom: 21px;
        opacity: 1;
    }

    .products-grid .item .tooltip {
        width: 100px;
        text-transform: uppercase;
        font-size: 9px;
        letter-spacing: 0.5px;
        font-weight: 700;
    }

    .products-grid .item .ratings {
        width: 100px;
        transition: all 300ms ease-in-out 0s;
        -moz-transition: all 300ms ease-in-out 0s;
        -webkit-transition: all 300ms ease-in-out 0s;
        -o-transition: all 300ms ease-in-out 0s;
        z-index: 1;
        overflow: visible;
        text-align: center;
        display: inline-block
    }

    .products-grid .item:hover .ratings {
        bottom: 15px;
    }

    .products-grid .item .quick-view-btn {
        width: 50px;
        height: 50px;
        background: #fff;
        text-align: center;
        display: inline-block;
        line-height: 50px;
    }

    .products-grid .item .quick-view-btn span {
        display: none
    }

    .products-grid .item .add_cart {
        display: inline-block;
    }

    .products-grid .item .add_cart .btn-cart {
        border: none;
        padding: 0px;
        width: 50px;
        height: 50px;
        background: {{ colorSettings()->brand_color }};
        text-align: center;
        line-height: 50px;
    }

    .products-grid .item .add_cart .btn-cart:before {
        content: "\e04f";
        font-family: 'Simple-Line-Icons';
        font-size: 14px;
        color: #fff
    }

    .products-grid .item .add_cart .btn-cart span {
        display: none
    }

    .products-grid .item {
        background: #FFF;
        margin-top: 20px;
    }

    .col-main .category-products .products-grid {
        margin-left: -15px;
        margin-right: -15px;
    }

    .products-grid .last {
        margin-right: 0;
    }

    .products-grid .item.show-addtocart {
        margin-top: 37px;
    }

    .products-grid .item .item-inner {
        position: relative;
        text-align: center;
        overflow: hidden;
    }

    .products-grid .item .item-inner .action {
        margin-top: 10px;
    }

    .products-grid .item .item-inner:hover {
        left: 0px;
        top: 0px;
    }

    .products-grid .item .item-inner .item-img {
        position: relative;
    }

    .products-grid .item .item-inner .item-img .ico-product {
        position: absolute;
        bottom: 10px;
        left: 10px;
        z-index: 2;
        background: #de44c3;
        padding: 4px 20px 8px;
        color: #FFF;
        font-size: 150%;
        -webkit-border-radius: 18px;
        -moz-border-radius: 18px;
        border-radius: 18px;
    }

    .products-grid .item .item-inner .item-img .item-img-info {
        text-align: center;
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
        position: relative;
    }

    .products-grid .item .item-inner .item-img .item-img-info a.product-image {
        width: 100%;
        overflow: hidden;
        display: inline-block;
    }

    .products-grid .item .item-inner .item-img .item-img-info a.product-image img {
        width: 100%;
    }

    .products-grid .item .item-inner .item-img .item-img-info a.product-image img {
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
        -webkit-transition-property: transform;
        transition-property: transform;
        -webkit-transform: translateZ(0);
        -moz-transform: translateZ(0);
        transform: translateZ(0);
    }

    .products-grid .item .item-inner .item-img .item-img-info a.product-image:hover img {
        -webkit-transform: scale(1.2);
        transform: scale(1.2);
        -moz-transform: scale(1.2);
    }

    .products-grid .item .item-inner .item-img .item-img-info a.product-image .img-main {
        display: inline;
    }

    .products-grid .item .item-inner .item-img .item-box-hover {
        z-index: 2;
        -webkit-transition: all 0.2s ease-out;
        -moz-transition: all 0.2s ease-out;
        -o-transition: all 0.2s ease-out;
        transition: all 0.2s ease-out;
        position: absolute;
        width: 100%;
        top: 25%;
        opacity: 0;
    }

    .products-grid .item .item-inner .item-img {
        margin: 0px auto 0;
    }

    .products-grid .item .item-inner .item-info .info-inner {
        border-top: none;
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
    }

    .products-grid .item .item-inner .item-info .info-inner .item-content .no-rating,
    .products-grid .item .item-inner .item-info .info-inner .item-content .ratings {
        margin: 0 0;
    }

    .products-grid .item .item-inner .item-info .info-inner .item-content .no-rating .rating-box,
    .products-grid .item .item-inner .item-info .info-inner .item-content .ratings .rating-box {
        float: none;
        margin: 0 0;
    }

    .products-grid .item .item-inner .item-info .info-inner .item-content .no-rating .rating-links,
    .products-grid .item .item-inner .item-info .info-inner .item-content .ratings .rating-links {
        display: none;
    }

    .products-grid .item .item-inner .item-info .info-inner .item-title {
        margin-bottom: 3px;
        padding-top: 10px;
        font-size: 14px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .products-grid .item .item-inner .item-info .info-inner .item-title a {
        text-decoration: none;
        font-size: 15px;
        font-weight: 500;
        letter-spacing: 0.5px
    }

    .products-grid .item .item-inner .item-info .info-inner .item-title a:hover {
        color: {{ colorSettings()->brand_color }};
    }

    .products-grid .item:hover .item-inner .item-img .item-img-info {
        border-color: #fff;
    }

    .products-grid .item .item-inner .item-info .info-inner .item-title a:hover {
        color: {{ colorSettings()->brand_color }};
    }

    .products-grid .item:hover .item-inner .item-img .item-box-hover {
        visibility: visible;
        opacity: 1;
        left: 0px;
        bottom: 0px;
    }

    .products-grid .item:hover .item-inner .item-info .info-inner .item-title a {
        color: {{ colorSettings()->brand_color }};
    }

    .products-grid .item:hover .item-inner .item-info .info-inner .action button.button {
        /* background: {{ colorSettings()->brand_color }};
        color: #fff;
        border: 1px {{ colorSettings()->brand_color }} solid; */
        transition: color 300ms ease-in-out 0s, background-color 300ms ease-in-out 0s, background-position 300ms ease-in-out 0s;
    }

    /* New & Sale Label */

    .new-box,
    .sale-box {
        height: 40px;
        overflow: hidden;
        position: absolute;
        text-align: center;
        top: -1px;
        width: 55px;
        z-index: 10;
    }

    .new-box {
        left: -1px;
    }

    .sale-box {
        right: -1px;
    }

    .new-top-left {
        left: 0px;
        top: 0;
        background: #fff;
        letter-spacing: 0.5px;
    }

    .new-top-right {
        background: #FFFFFF;
        right: 0px;
        top: 0;
    }

    .sale-top-right {
        top: 0;
        background: #fff;
        letter-spacing: 0.5px;
        right: 0px;
    }

    .sale-top-left {
        font-size: 11px;
        color: #fff;
        background: #dd4b39;
        text-transform: uppercase;
        padding: 3px 0 4px;
        width: 102px;
        text-align: center;
        display: block;
        position: absolute;
        right: -33px;
        top: 9px;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .ie8 .new-label {
        left: 0px;
        top: 0px;
        width: auto;
        padding: 5px 15px;
    }

    .ie8 .new-label:after {
        display: none;
    }

    .ie8 .new-label:before {
        display: none;
    }

    .ie8 .sale-label {
        right: 0px;
        top: 0px;
        width: auto;
        padding: 5px 15px;
    }

    .ie8 .sale-label:after {
        display: none;
    }

    .ie8 .sale-label:before {
        display: none;
    }

    .ie8 .new-box {
        top: -1px;
        left: -1px;
    }

    .ie8 .sale-box {
        right: -1px;
        top: -1px;
    }

    .new-box,
    .sale-box {
        position: fixed;
        text-align: center;
        top: -1px;
        width: 55px;
        z-index: 10;
    }

    .new-box {
        left: 0;
    }

    .sale-box {
        right: 0;
        top: 0px;
    }

    .new-label {
        font-size: 10px;
        color: #fff;
        background: #ffc000;
        text-transform: uppercase;
        padding: 3px 10px;
        text-align: center;
        display: block;
        position: absolute;
    }

    .sale-label {
        font-size: 10px;
        color: #fff;
        background: {{ colorSettings()->brand_color }};
        text-transform: uppercase;
        padding: 3px 10px;
        text-align: center;
        display: block;
        position: absolute;
        top: 0px;
    }

    .hot-label {
        font-size: 10px;
        color: #fff;
        background: #ff4318;
        text-transform: uppercase;
        padding: 3px 10px;
        text-align: center;
        display: block;
        position: absolute;
        top: 0px;
    }

    .hot-label.hot-top-right {
        right: 0;
        left: auto;
    }

    /*========== 10. Products List ==========*/
    /* Products Item */
    .products-list .item.first {
        border-top: 0 none;
        margin-bottom: 30px;
        overflow: hidden;
        padding-top: 0;
    }

    .products-list .item {
        padding: 25px 0;
        overflow: hidden;
        margin: 0px !important;
        border-top: 1px solid #e5e5e5;
        list-style-type: none;
    }

    .products-list .item a:hover {
        color: {{ colorSettings()->brand_color }};
        transition: all 0.3s linear;
        -moz-transition: all 0.3s linear;
        -webkit-transition: all 0.3s linear;
    }

    .products-list .product-name {
        text-align: left;
        margin: 0px 0 10px
    }

    .products-list .product-name a {
        text-decoration: none;
        font-size: 16px;
        font-weight: 600;
    }

    .products-list h2.product-name {
        font-size: 14px;
        line-height: normal;
    }

    .products-list .item h3 {
        font-weight: normal;
        color: #353535;
        padding-bottom: 2px;
    }

    .products-list .item h3 a {
        font-weight: normal;
        font-size: 14px;
        color: #407CBF;
        text-decoration: none
    }

    .products-list .item h3 a:hover {
        font-weight: normal;
        font-size: 14px;
        color: #333;
        text-decoration: underline
    }

    ol.products-list {
        padding: 0;
        margin: 0;
        float: left;
    }

    li .list {
        border-bottom: none;
    }

    .products-list .ratings {
        border-bottom: 1px #e5e5e5 solid;
        padding: 0px 0px 10px 0px;
        position: relative;
        margin: 0px;
        left: 0;
        bottom: auto;
        border-radius: 0;
    }

    .products-list .old-price .price {
        font-size: 15px
    }

    .separator {
        color: #999
    }

    .products-list .product-image {
        float: left;
        width: 28%;
    }

    .products-list .product-image img {
        width: 100%;
    }

    .products-list .product-shop {
        float: right;
        width: 69%;
        text-align: left;
        margin-left: 20px;
    }

    .products-list .product-shop .desc {
        font-size: 13px;
        margin-top: 12px;
        color: #222;
        letter-spacing: 0.5px;
    }

    .products-list .product-shop p {
        font-size: 13px;
        color: #222;
        line-height: 1.5em;
        letter-spacing: 0.5px;
        display: inline-block;
    }

    .products-list .product-shop p.old-price {
        margin-right: 4px;
    }

    .products-list .product-shop .price-box {
        margin: 0 0 10px;
        padding-top: 0;
    }

    .products-list .desc .link-learn {
        font-weight: normal;
        margin-top: 5px;
    }

    .products-list .desc .link-learn:hover {
        text-decoration: underline;
    }

    .products-list .add-to-links {
        padding-left: 2px;
    }

    .add-to-links span {
        font-size: 12px;
        margin-left: 8px;
        text-transform: uppercase;
    }

    .products-list .product-shop button.button {
        font-size: 13px;
        text-transform: uppercase;
        margin-right: 8px;
    }

    .products-list .product-shop .btn-cart:before {
        content: "\f07a";
        font-family: 'FontAwesome';
    }

    .products-list .product-shop button.button span {
        font-size: 11px;
        padding: 0px;
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 0.5px
    }

    .products-list .product-shop .btn-cart {
        border: 1px #ddd solid;
        background: #fff;
        color: #333;
    }

    .products-list .product-shop .btn-cart:hover {
        background: {{ colorSettings()->brand_color }};
        color: #fff;
        border: 1px solid {{ colorSettings()->brand_color }};
    }

    .products-list .product-shop .btn-cart span:hover {
        color: #fff;
    }

    .products-list .product-shop .btn-cart span {
        font-size: 12px;
        font-weight: normal;
        text-transform: uppercase;
    }

    .link-wishlist,
    .link-compare {
        color: #666;
        text-shadow: none;
        border: none;
        box-shadow: none;
    }

    .products-list .button.link-wishlist,
    .products-list .button.link-compare {
        border: 1px #ddd solid;
        background: #fff;
        color: #333;
        font-weight: bold;
        letter-spacing: 0.5px;
        line-height: normal;
        padding: 10px 12px;
        margin-right: 10px;
    }

    .products-list .button.link-wishlist:hover,
    .products-list .button.link-compare:hover {
        border: 1px #333 solid;
        background: #333;
        color: #fff;
    }

    .products-list .button.link-wishlist span,
    .products-list .button.link-compare span {
        font-size: 11px;
    }

    ul.products-grid {
        padding: 0;
        margin: 0
    }

    a.button.detail-bnt span {
        font-size: 12px;
        text-transform: uppercase;
        padding: 0 2px;
        font-weight: 700;
        margin-left: 6px;
        display: none
    }

    /*  9. Rating and Price  */
    .no-rating {
        margin: 0;
    }

    .no-rating a {
        color: #000;
    }

    .ratings {}

    .ratings strong {
        float: left;
        margin: 1px 3px 0 0;
    }

    .ratings .rating-links {
        margin: 0;
        display: none;
    }

    .ratings .rating-links a {
        margin: 0;
        text-decoration: none;
        color: #666;
        font-size: 12px
    }

    .ratings .rating-links .separator {
        margin: 0 2px;
    }

    .rating-box {
        width: 60px;
        height: 10px;
        font-size: 0;
        line-height: 0;
        background: url(../images/bkg_rating.png) 0 0 repeat-x;
        text-indent: -999em;
        overflow: hidden;
    }

    .rating-box .rating.width100 {
        width: 100%;
    }

    .rating-box .rating.width80 {
        width: 80%;
    }

    .rating-box .rating.width60 {
        width: 60%;
    }

    .rating-box .rating.width25 {
        width: 25%;
    }

    .rating-box .rating {
        float: left;
        height: 9px;
        background: url(../images/bkg_rating.png) 0 100% repeat-x;
    }

    .ratings .rating-box {
        display: inline-block;
    }

    .ratings-table th,
    .ratings-table td {
        font-size: 11px;
        line-height: 1.15;
        padding: 3px 0;
    }

    .ratings-table th {
        font-weight: 600;
        padding-right: 8px;
        letter-spacing: 0.5px;
    }

    /* Price */
    .price {
        font-size: 14px;
        color: #333;
        white-space: nowrap !important;
    }

    .price-box {
        margin: 0;
        padding: 5px 0px 0px 0px;
        min-height: 28px;
    }

    /* Regular price */
    .regular-price {
        display: inline
    }

    .regular-price .price {
        font-weight: 700;
        font-size: 15px;
        color: #000;
    }

    .block .regular-price,
    .block .regular-price .price {
        color: #000;
    }

    .price-box .price-from .price {
        font-weight: 700;
        font-size: 15px;
        color: #333;
    }

    .price-box .price-to .price {
        font-weight: 700;
        font-size: 15px;
        color: #333;
    }

    .price-box .minimal-price .price {
        font-weight: 700;
        font-size: 15px;
        color: #333;
    }

    /* Old price */
    .old-price .price-label {
        white-space: nowrap;
        color: #999;
        display: none;
    }

    .old-price {
        display: inline;
        margin-right: 10px;
    }

    /* Old price */
    .old-price .price-label {
        color: #777777;
        display: none;
        white-space: nowrap;
    }

    .old-price .price {
        color: #999 !important;
        font-size: 13px;
        font-weight: normal;
        text-decoration: line-through;
    }

    .latest-product .old-price .price-label {
        display: none;
    }

    /* Special price */
    .special-price {
        margin: 0;
        padding: 3px 0;
        display: inline;
    }

    .special-price .price-label {
        color: #666;
        display: none;
        font-size: 13px;
        font-weight: 400;
        white-space: nowrap;
    }

    .special-price .price {
        font-size: 14px;
        color: #000;
        font-weight: bold;
    }

    .special-price .price-label {
        font-size: 13px;
        font-weight: 900;
        white-space: nowrap;
        color: #666;
        display: none;
    }

    .latest-product .special-price .price-label {
        display: none;
    }

    /* Minimal price (as low as) */
    .minimal-price {
        margin: 0;
    }

    .minimal-price .price-label {
        white-space: nowrap;
    }

    .minimal-price-link {
        display: inline;
    }

    .minimal-price-link .label {}

    /*------- 10. Latest Blog -------*/

    .latest-blog img {
        width: 100%;
    }

    .latest-blog {
        text-align: left;
        margin: auto;
        padding: 30px 0px 30px 0px;
        overflow: hidden;
    }

    .blog-block {
        border: 1px #f1f1f1 solid;
        background: #fff;
        overflow: hidden;
        padding-bottom: 35px
    }

    .latest-blog h3 {
        margin-bottom: 50px;
    }

    .blog-title {
        font-size: 13px;
        font-weight: bold;
        text-transform: uppercase;
        margin-top: 15px;
        display: block;
        padding: 0px 0px;
        letter-spacing: .5px
    }

    .latest-blog .icon-calendar:before {
        margin-right: 5px
    }

    .latest-blog .post-date {
        width: 100px;
        z-index: 100;
        top: 10%;
        font-weight: normal;
        text-align: left;
        font-size: 12px;
        color: #999;
        margin-left: 0px;
        padding: 5px 0px;
    }

    .latest-blog .readmore {
        font-size: 12px;
        display: inline-block;
        padding: 5px 10px;
        border: 1px #d1d1d1 solid;
        text-transform: uppercase;
        font-size: 11px;
        letter-spacing: 0.5px;
        font-weight: bold
    }

    .latest-blog .readmore:hover {
        background: {{ colorSettings()->brand_color }};
        color: #fff
    }

    .latest-blog .blog-title h2 {
        color: #666;
        font-size: 16px;
        font-weight: bold;
        margin-top: 0;
        padding: 12px 10px 2px 0px;
        position: relative;
        display: inline-block;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .latest-blog .blog_inner {
        float: left;
        margin-top: 20px;
        position: relative
    }

    .post-date {
        color: #5e5f5f;
        font-weight: normal;
        font-size: 13px;
    }

    .blog_post img {
        max-width: 100%;
        height: auto;
    }

    .latest-blog p {
        font-size: 13px;
        line-height: 20px;
        margin: 10px 0px 0px 0px;
        text-align: left;
        color: #777;
        padding: 0px 0px 0px 0px;
    }

    .blog_post img {
        margin-bottom: 20px;
        width: 100%;
    }

    .latest-blog .blog-img {
        display: block;
        overflow: hidden;
    }

    .latest-blog .blog-img img {
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
        -webkit-transition-property: transform;
        transition-property: transform;
        -webkit-transform: translateZ(0);
        -moz-transform: translateZ(0);
        transform: translateZ(0);
    }

    .latest-blog .blog-img:hover img {
        -webkit-transform: scale(1.2);
        transform: scale(1.2);
        -moz-transform: scale(1.2);
    }

    .blog-img img {
        -webkit-transition: all 0.4s ease-in-out 0.5s;
        -moz-transition: all 0.4s ease-in-out 0.5s;
        -o-transition: all 0.4s ease-in-out 0.5s;
        -ms-transition: all 0.4s ease-in-out 0.5s;
        transition: all 0.4s ease-in-out 0.5s;
    }

    .blog-img .mask {
        background-color: #000;
        opacity: 0;
        -webkit-transition: all 0.3s ease-in 0.4s;
        -moz-transition: all 0.3s ease-in 0.4s;
        -o-transition: all 0.3s ease-in 0.4s;
        -ms-transition: all 0.3s ease-in 0.4s;
        transition: all 0.3s ease-in 0.4s;
    }

    .blog-img a.info {
        opacity: 0;
        -webkit-transition: all 0.3s ease-in-out 0.1s;
        -moz-transition: all 0.3s ease-in-out 0.1s;
        -o-transition: all 0.3s ease-in-out 0.1s;
        -ms-transition: all 0.3s ease-in-out 0.1s;
        transition: all 0.3s ease-in-out 0.1s;
        -webkit-transform: translateY(0px);
        -moz-transform: translateY(0px);
        -o-transform: translateY(0px);
        -ms-transform: translateY(0px);
        transform: translateY(0px);
    }

    .blog-img:hover .mask {
        background-color: rgba(0, 0, 0, 0.5);
        opacity: 1;
        -webkit-transition-delay: 0s;
        -moz-transition-delay: 0s;
        -o-transition-delay: 0s;
        -ms-transition-delay: 0s;
        transition-delay: 0s;
    }

    .blog-img:hover a.info {
        opacity: 1;
        -webkit-transform: translateY(85px);
        -moz-transform: translateY(85px);
        -o-transform: translateY(85px);
        -ms-transform: translateY(85px);
        transform: translateY(85px);
        -webkit-transition-delay: 0.3s;
        -moz-transition-delay: 0.3s;
        -o-transition-delay: 0.3s;
        -ms-transition-delay: 0.3s;
        transition-delay: 0.3s;
    }

    .blog-img .mask,
    .blog-img .content {
        width: 100%;
        height: 100%;
        position: absolute;
        overflow: hidden;
        top: 0;
        left: 0;
        text-align: center;
    }

    .blog-img a.info {
        display: inline-block;
        text-decoration: none;
        padding: 7px 14px;
        background: {{ colorSettings()->brand_color }};
        color: #fff;
        font-weight: 700;
        font-size: 11px;
        border: #fff double;
        text-transform: uppercase
    }

    .blog-img a.info:hover {
        background: #202726;
    }

    .blog-img {
        position: relative;
    }

    /* Blog preview */
    .blog-outer-container .new_title {
        border-bottom: 1px solid #e5e5e5;
        margin-bottom: 0px;
    }

    .post-meta {
        list-style: outside none none;
        padding: 0 0px 8px;
    }

    .post-meta li {
        display: inline-block;
        margin-right: 10px;
        color: #a7a7a7;
        text-transform: none;
        font-size: 13px;
    }

    .post-meta li a {
        margin-right: 5px;
        color: #a7a7a7;
    }

    .post-meta li a:hover {
        color: {{ colorSettings()->brand_color }};
    }

    .post-meta li i {
        padding-right: 10px;
    }

    .title-primary {
        font-size: 24px;
        letter-spacing: 3px;
    }

    .blog-preview {
        padding: 60px;
    }

    .blog-outer-container {
        margin-top: 0px;
        background: #fff;
        margin-bottom: 15px;
    }

    .blog-preview_image {
        float: left;
        width: 100%;
        position: relative;
    }

    .blog-preview_image img {
        float: left;
        width: 100%;
    }

    .blog-preview_info {
        float: left;
        padding: 15px 0 0;
        width: 100%;
    }

    .blog-preview_title a {
        font-size: 18px;
        font-weight: 600;
        letter-spacing: 0.5px;
        line-height: 1.3em;
        margin: auto;
        padding-bottom: 6px;
        letter-spacing: 0.5px;
        color: #000;
    }

    .blog-preview_title a:hover {
        color: {{ colorSettings()->brand_color }};
    }

    .blog-preview_desc {
        color: #666;
        font-size: 13px;
        line-height: 20px;
        padding-bottom: 15px;
    }

    .blog-preview_btn {
        font-size: 11px;
        margin: 0px;
        padding: 8px 15px;
        background: #fff;
        color: #666;
        font-weight: 700;
        letter-spacing: 0.5px;
        display: inline-block;
        border: 1px #ddd solid;
        text-transform: uppercase;
        margin-top: 10px;
    }

    .blog-preview_btn:focus,
    .blog-preview_btn:hover {
        color: #fff;
        background: {{ colorSettings()->brand_color }};
        border: 1px {{ colorSettings()->brand_color }} solid;
    }

    .blog-preview_posted {
        color: #333;
        background: rgba(255, 255, 255, 0.9);
        bottom: 10px;
        height: 60px;
        right: 10px;
        position: absolute;
        width: 60px;
        z-index: 10;
    }

    .blog-preview_date {
        float: left;
        font-size: 13px;
        padding: 6px 0 10px;
        position: relative;
        text-align: center;
        width: 100%;
        text-transform: uppercase;
        font-weight: 300;
        letter-spacing: 0.5px;
    }

    .blog-preview_date span {
        font-size: 18px;
        font-weight: 700;
    }

    .blog-preview_comments {
        float: right;
        font-size: 12px;
        padding-top: 3px;
        text-align: center;
    }

    .blog-preview_comments i {
        color: {{ colorSettings()->brand_color }};
    }

    .blog-preview_image:hover .blog-preview_posted {
        color: #000;
    }

    .blog-container {
        padding-top: 25px;
        padding-bottom: 90px;
        text-align: center;
    }

    .blog-container .row {
        padding-top: 83px;
    }

    .blog-preview-small {
        float: left;
        position: relative;
        width: 100%;
    }

    .blog-preview-small_img {
        float: left;
        width: 100%;
    }

    .blog-preview-small_link {
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
    }

    .blog-preview-small_link:hover {
        background-color: rgba(0, 0, 0, 0.4);
    }

    .blog-preview-small_link:hover .blog-preview_posted {
        color: #fff;
    }

    .blog-preview-small_txt {
        bottom: 30px;
        left: 0;
        position: absolute;
        text-align: center;
        width: 100%;
    }

    .blog-preview-small .blog-preview_posted {
        border-style: none;
        border-width: 0;
        bottom: auto;
        left: 0;
        margin: 0 auto;
        right: 0;
        top: -25px;
    }

    .blog-preview-small_more {
        border-color: #ececec;
        float: left;
        font-size: 11px;
        margin: 28px 0 0;
        padding: 8px 15px;
    }

    .blog-inner {
        margin: auto 0px
    }

    .box-hover .add-to-links {
        margin: 0;
        list-style: none;
        padding: 0;
        margin-left: 20px;
    }

    .box-hover .add-to-links li {
        margin: 0;
    }

    .box-hover {
        position: absolute;
        top: -115px;
        /* bottom: -56px; */
        /* right: -100%; */
        float: left;
        /* text-align: right; */
        z-index: 10
    }

    .image-hover2 a {
        position: relative;
        display: table;
    }

    .image-hover2 a:after {
        overflow: hidden;
        position: absolute;
        top: 0;
        content: "";
        z-index: 100;
        width: 100%;
        height: 100%;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: 0;
        pointer-events: none;
        -webkit-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
        background-color: rgba(0, 0, 0, 0.3);
        -webkit-transform: scale(0);
        -ms-transform: scale(0);
        transform: scale(0);
        z-index: 1;
    }

    .image-hover2 a:before {
        font: normal normal normal 18px/1 FontAwesome;
        content: "\f002";
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 2;
        color: #fff;
        ms-transform: translateY(-50%);
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        background: {{ colorSettings()->brand_color }};
        padding: 8px 12px;
        ms-transform: translateX(-50%);
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
        opacity: 0;
        -webkit-transition: opacity 0.3s ease 0s;
        -o-transition: opacity 0.3s ease 0s;
        transition: opacity 0.3s ease 0s;
    }

    .image-hover2 a:hover:after {
        visibility: visible;
        opacity: 0.8;
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }

    .image-hover2 a:hover:before {
        opacity: 1;
    }

    .blog-outer-container .entry-thumb img {
        width: 100%;
    }

    .blog-outer-container .entry-thumb {
        position: relative;
    }

    .item .item-inner:hover .item-img .box-hover {
        top: 0;
    }

    /*---------	11. Breadcrumbs --------- */
    .breadcrumbs {
        padding: 0px;
        margin: 15px auto 5px;
        font-size: 12px;
        color: #fff;
        text-align: left;
        z-index: 10;
        position: relative
    }

    .breadcrumbs a {
        color: #666;
        font-size: 11px;
        font-weight: normal;
    }

    .breadcrumbs span {
        display: inline-block;
        margin: 0 5px 0 5px;
        color: #ccc;
        font-size: 11px;
    }

    .breadcrumbs ul {
        margin: 0px;
        padding: 0px;
    }

    .breadcrumbs ul li {
        list-style-type: none;
        display: inline;
    }

    .breadcrumbs strong {
        font-weight: normal;
        color: {{ colorSettings()->brand_color }};
    }

    figure.effect img {
        -webkit-transition: opacity 0.35s;
        transition: opacity 0.35s;
    }

    figure.effect:hover img {
        opacity: 0.9;
    }

    figure.effect figcaption::before {
        -webkit-transform: scale(0, 1);
        transform: scale(0, 1);
    }

    figure.effect figcaption::after {
        -webkit-transform: scale(1, 0);
        transform: scale(1, 0);
    }

    figure.effect h2 {
        padding-top: 30%;
        -webkit-transition: -webkit-transform 0.35s;
        transition: transform 0.35s;
        -webkit-transform: translate3d(0, -20px, 0);
        transform: translate3d(0, -20px, 0);
    }

    figure.effect p {
        padding: 20px 2.5em;
        opacity: 0;
        -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
        transition: opacity 0.35s, transform 0.35s;
        -webkit-transform: translate3d(0, 20px, 0);
        transform: translate3d(0, 20px, 0);
    }

    .grid figure figcaption>a {
        z-index: 1000;
        text-indent: 200%;
        white-space: nowrap;
        font-size: 0;
        opacity: 0;
    }

    .grid figure figcaption,
    .grid figure figcaption>a {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .shop_header_image_background {
        width: 100%;
        height: 100%;
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        position: absolute;
        top: 0;
        left: 0;
        background-image: url(../images/header-shop-men.jpg);
        background-position-x: 50%;
    }

    .shop_header.has_big_img {
        padding-top: 80px;
        padding-bottom: 80px;
        overflow: hidden;
    }

    .shop_header {
        text-align: left;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        border-bottom: 1px solid #f0f0f0;
    }

    .shop_header .page-title {
        z-index: 10;
        position: relative
    }

    .cms-bg-overlay {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.3) url(../images/category-img-overlay.png) repeat top left;
    }

    /*------- 12. Sidebar ---------*/

    .sidebar strong {
        font-weight: 600;
    }

    .block {
        margin: 0 0 30px;
        border: 1px solid #e5e5e5;
        background: #fff;
    }

    .block .block-title {
        border-bottom: 1px solid #e5e5e5;
        color: #000;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.5px;
        line-height: normal;
        margin: 0;
        padding: 15px;
        text-transform: uppercase;
    }

    .block .block-title strong {
        font-weight: 700;
    }

    .block .block-title a {
        text-decoration: none;
    }

    .block .btn-remove,
    .block .btn-edit {
        float: right;
        margin-top: 6px
    }

    .sidebar .block .access .btn-remove {
        float: right;
        margin-top: -38px
    }

    .block .actions {
        text-align: left;
        padding: 8px 0;
    }

    .block .actions a {
        float: right;
        margin-left: 10px;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .block .empty {
        color: #666666;
    }

    /* 12a.	Category boxes */

    .side-nav-categories ul li {
        padding: 0px 0px;
    }

    .side-nav-categories ul li a {
        display: inline-block;
        position: relative;
    }

    .side-nav-categories ul#magicat ul li a:before {
        content: "\f105";
        font-family: 'FontAwesome';
        line-height: 17px;
        margin-right: 5px;
        top: 6px;
    }

    .side-nav-categories ul#magicat ul li a {
        color: #666;
    }

    .side-nav-categories ul#magicat ul li a {
        padding-left: 12px;
    }

    .side-nav-categories,
    .side-nav-categories .block {
        display: inline-block;
        width: 100%;
        margin-bottom: 30px;
        border: 1px solid #e5e5e5;
        background: #fff;
    }

    .side-nav-categories .block-title {
        border-bottom: 1px solid #e5e5e5;
        color: #000;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.5px;
        line-height: normal;
        margin: 0;
        padding: 15px;
        text-transform: uppercase;
    }

    /* Left Navigation End */

    .box-category {
        padding: 8px 15px 15px;
        background: #fff
    }

    .box-category ul {
        list-style: none;
        margin: 0;
        padding: 0px;
    }

    .box-category>ul>li {
        display: block;
        position: relative;
        margin: 0;
        border-bottom: 0px #ececec solid
    }

    .box-category>ul>li.last {
        display: block;
        position: relative;
        box-shadow: 0 0px 0 #dbebf9, 0 0px 0 #FFFFFF;
    }

    .box-category>ul>li:first-child {
        border-top: 0;
    }

    .box-category .subDropdown {
        top: 3px;
        right: 0px;
        position: absolute;
        cursor: pointer;
        width: 18px;
        height: 18px;
        padding: 3px;
    }

    .box-category .subDropdown:hover {
        opacity: 0.8;
    }

    .box-category .subDropdown.plus {
        background-image: url("../images/plus.png");
    }

    .box-category .subDropdown.minus {
        background-image: url("../images/minus.png");
        top: 3px
    }

    .box-category ul li a {
        padding: 4px 0px;
        display: block;
        font-weight: normal;
    }

    .box-category ul li.double a {
        display: inline-block;
        margin: 0;
    }

    .box-category ul li {
        position: relative;
    }

    .box-category>ul>li>a {
        color: #333;
        text-transform: uppercase;
        display: block;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.5px;
    }

    .box-category>ul>li>a:before {
        content: '\f105';
        font-family: FontAwesome;
        font-size: 14px;
        padding-right: 8px;
        color: #999;
        font-weight: normal;
    }

    .box-category>ul>li ul {
        display: none;
        padding-left: 0px !important;
        padding-bottom: 10px;
        padding-right: 0px !important
    }

    .box-category>ul>li>ul li {
        padding: 0px;
    }

    .box-category>ul>li a.active {
        font-weight: normal;
    }

    .box-category>ul>li>a.active {
        color: {{ colorSettings()->brand_color }};
        font-weight: 700;
        margin-bottom: 0;
        font-size: 12px;
        letter-spacing: 0.5px;
    }

    .box-category>ul>li a.active+ul {
        display: block;
    }

    .box-category a:hover {
        text-decoration: none;
        color: #000;
    }

    .box-category>ul>li ul>li ul>li a {
        text-decoration: none;
        font-size: 13px !important;
        margin: 4px 8px !important;
        padding: 0px 16px !important;
        border-bottom: 0px solid #EAEAEA;
    }

    .box-category>ul>li ul>li ul>li a:hover {
        color: {{ colorSettings()->brand_color }};
    }

    .box-category>ul>li ul>li>a:hover {
        color: #000;
    }

    .sidebar-left {
        margin-left: 0 !important;
    }

    .sidebar ol,
    .sidebar ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .sidebar .block-venedor-ads .block-content li {
        padding: 0;
    }

    .sidebar address {
        margin: 0;
        padding: 0;
        color: #333;
        text-align: left;
        border-bottom: none;
        line-height: 24px;
    }

    .sidebar {
        font-size: 14px;
    }

    .block-subtitle {
        font-weight: 600;
    }

    .price-filter,
    .brand-box,
    .colors-box {
        margin-bottom: 14px;
        padding-bottom: 12px;
        border-bottom: 1px #ddd solid;
    }

    .color-selector ul li {
        height: 30px;
        width: 30px;
        border-radius: 50%;
        margin-right: 5px;
        margin-bottom: 10px;
        cursor: pointer;
        display: inline-block;
    }

    .black {
        background-color: #000 !important;
    }

    .gray {
        background-color: #979a98;
    }

    .orange {
        background-color: #fa9416;
    }

    .red {
        background-color: #f00a20;
    }

    .white {
        background-color: #fff;
        border: 1px solid #ddd !important;
    }

    .yellow {
        background-color: #e9ec0c;
        border: 1px solid #ddd;
    }

    .green {
        background-color: #1ac54f;
    }

    .blue {
        background-color: #0b12f6;
    }

    .sidebar a,
    .sidebar .block-layered-nav .price .sub {
        color: #222;
        font-size: 13px;
    }

    .sidebar .block-layered-nav .price {
        color: #666;
    }

    .sidebar .link-cart,
    .sidebar .link-reorder,
    .block .actions a {
        color: #CA0000;
        font-weight: bold;
        font-size: 13px;
    }

    .sidebar .link-compare,
    .sidebar .link-wishlist {
        color: #aaa;
        font-size: 13px;
    }

    .block-tags .actions a.view-all {
        text-transform: uppercase;
        color: #333;
        font-weight: 700;
        margin-bottom: auto;
    }

    .block-tags .actions a.view-all:hover {
        color: #333;
    }

    .sidebar .link-cart:hover,
    .sidebar .link-wishlist:hover,
    .sidebar .link-reorder:hover,
    .sidebar .link-compare:hover,
    .sidebar .link-cart:focus,
    .sidebar .link-wishlist:focus,
    .sidebar .link-reorder:focus,
    .sidebar .link-compare:focus,
    .block .actions a:hover,
    .block .actions a:focus {
        color: #333;
    }

    .sidebar .block dl {
        border-bottom: 0px solid #ccc;
        margin: 0;
    }

    .block .block-content .price {
        font-size: 12px;
        font-weight: bold;
        color: #000;
    }

    /* 12b. Block: Account */
    .block-account .block-content {
        padding-top: 0 !important;
    }

    .block-account .block-content ul {
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .block-account .block-content li {
        padding: 10px 0px;
        border-top: 1px #fff solid;
        border-bottom: 1px #ddd solid;
    }

    .block-account .block-content li:last-child {
        border-bottom: 0px #ddd solid;
        padding-bottom: 0px;
    }

    .block-account .block-content li:first-child {
        border-top: none;
    }

    .block-account .block-content li:before {
        content: "\f105";
        font-family: FontAwesome;
        font-size: 10px;
        display: inline-block !important;
        position: absolute;
        cursor: pointer;
        line-height: 16px;
        color: #333;
    }

    .sidebar .block-content li.last {
        border-bottom: none;
    }

    .block-account .block-content li a {
        cursor: pointer;
        padding: 0 12px;
        transition: color 300ms ease-in-out 0s, background-color 300ms ease-in-out 0s, background-position 300ms ease-in-out 0s;
    }

    .block-account .block-content li a:hover {
        cursor: pointer;
        padding: 0 12px;
        color: #000;
    }

    .sidebar .block-content li.current {
        font-weight: 700;
        color: #333;
    }

    /* Block: Currency Switcher */

    .block-currency select {
        width: 100%;
        margin-right: 8px;
    }

    /*12d.  Block: Layered Navigation */
    .block-layered-nav label {
        font-weight: 500;
        margin-bottom: 8px;
    }

    .block-layered-nav .block-content {
        padding: 0;
    }

    .block-layered-nav dt {
        font-weight: bold;
        overflow: hidden;
        padding: 0px 0 10px !important;
        position: relative;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .block-layered-nav dd {
        margin: 0;
        padding: 0;
    }

    .block-layered-nav dd ol {
        position: relative;
    }

    .block-layered-nav dd ol li:before {
        content: '\f105';
        font-family: FontAwesome;
        font-size: 14px;
        padding-right: 6px;
        color: #444;
    }

    .block-layered-nav .btn-remove {
        float: right;
    }

    .block-list .price {
        color: inherit;
        font-size: 14px;
    }

    /*12e. Block: Cart */
    .block-cart {
        padding: 0px;
        overflow: hidden;
    }

    .block-cart .amount {
        margin-bottom: 5px
    }

    .block-cart .actions .paypal-logo {
        float: left;
        width: 100%;
        margin: 3px 0 0;
        text-align: right;
    }

    .block-cart .actions .paypal-logo .paypal-or {
        clear: both;
        display: block;
        padding: 0 55px 5px 0;
    }

    .block-cart .mini-products-list .product-details .product-name,
    .block-cart .mini-products-list .product-details .nobr small {
        word-wrap: break-word;
    }

    .block-cart .mini-products-list .product-details .nobr {
        white-space: normal !important;
    }

    .block-cart .summary {
        margin: 0;
        padding: 0;
        position: relative;
        z-index: 1;
    }

    .block-cart .subtotal {
        margin: 0;
        padding: 0;
        text-align: left;
        margin-bottom: 8px
    }

    .block-cart .block-content .summary .subtotal .label {
        background: transparent;
        border-radius: 0 0 0 0;
        box-shadow: none;
        font-weight: normal;
        padding: 2px 0;
        text-shadow: none;
        color: #000;
        font-size: 100%;
    }

    .block-cart .subtotal .price {
        color: #000;
        font-size: 13px;
        font-weight: 700;
    }

    .ajax-checkout {
        border: 0 none;
        margin: 0;
        padding: 5px 0 0px;
        text-align: left;
        margin-bottom: 0px;
    }

    .ajax-checkout a {
        border: 0px #dc436b solid;
        background: #323C46;
        text-shadow: 0 1px 0 #333;
        border-radius: 2px;
        color: #FFFFFF;
        font-size: 11px;
        padding: 8px 12px;
        text-transform: uppercase;
    }

    .ajax-checkout a:hover {
        border: 0px #111 solid;
        background: #222;
        padding: 6px 10px;
        text-shadow: 0 1px 0 #000;
        border-radius: 2px;
        color: #FFFFFF;
        font-size: 11px;
        cursor: pointer;
    }

    .sidebar .block-cart .block-subtitle {
        border-bottom: 1px solid #eee;
        padding-bottom: 6px;
        margin: 8px 0 8px;
        font-weight: 700;
        font-size: 12px;
        color: #333;
    }

    .col-left .block-cart .block-content ul li .product-details {
        float: right;
        width: 66%;
    }

    .col-left .block-cart .block-content ul li .product-details .access {
        float: right
    }

    .col-left .block-cart .block-content ul li .product-details .access .btn-remove1 {
        position: inherit;
    }

    .col-left .block-cart ul li.item {
        border-bottom: 1px solid #ECECEC;
        margin-bottom: 10px;
        padding-bottom: 12px;
    }

    .block-cart ul li.item img {
        width: 80px;
    }

    .col-left .block-cart ul li.item.last {
        border-bottom: none;
        margin-bottom: 5px;
        padding-bottom: 0px;
    }

    .col-left .block-cart .block-content ul li a.product-image {
        display: inline;
    }

    .col-left .block-cart .block-content ul li a.product-image img {
        border: 1px solid #ECECEC;
    }

    .col-left .block-cart .block-content ul li .product-name {
        margin: 0 0 2px;
        font-size: 12px;
        line-height: 17px;
        margin-top: 5px;
    }

    .col-left .block-cart .block-content ul li .product-name a {
        font-size: 13px;
        letter-spacing: 0.5px;
    }

    .col-right .block-cart .block-content ul li .product-details {
        float: right;
        width: 172px;
    }

    .col-right .block-cart ul li.item {
        border-bottom: 1px solid #ECECEC;
        margin-bottom: 5px;
        padding-bottom: 8px;
    }

    .col-right .block-cart ul li.item.last {
        border-bottom: none;
        margin-bottom: 5px;
        padding-bottom: 0px;
    }

    .col-right .block-cart .block-content ul li a.product-image {
        display: inline;
    }

    .col-right .block-cart .block-content ul li a.product-image img {
        border: 1px #ddd solid;
    }

    .col-right .block-cart .block-content ul li .product-name {
        margin: 0 0 2px;
        font-size: 14px;
    }

    .breadcrumbs li strong {
        color: #000;
    }

    /*12f. Block: Related */
    .related-slider {
        float: right;
        margin: auto;
        margin-bottom: 15px;
    }

    .related-block .block-title {
        background: #fff;
        border-bottom: 1px solid #e5e5e5;
        color: #000000;
        font-size: 14px;
        font-weight: bold;
        margin: 0;
        padding: 10px;
        text-align: left;
        text-transform: uppercase;
    }

    .related-block {
        margin-bottom: 20px;
        margin-top: 25px;
    }

    .related-slider .slider-items-products .owl-buttons a {
        height: 41px;
        margin: -32px 0 0;
        top: 50%;
        width: 40px;
    }

    .related-slider .slider-items-products .owl-buttons .owl-next a:before {
        font-size: 24px;
        line-height: 38px;
    }

    .related-slider .slider-items-products .owl-buttons .owl-prev a:before {
        font-size: 24px;
        line-height: 38px;
    }

    .related-slider .slider-items-products .owl-buttons .owl-prev a {
        left: -8px;
    }

    .related-slider .slider-items-products .owl-buttons .owl-next a {
        left: -1px
    }

    .related-slider button.button.btn-cart:before {
        content: "\f07a";
        font-family: 'FontAwesome';
    }

    .related-slider .products-grid .item .item-inner .item-img .item-img-info {
        border: none;
    }

    .related-slider h2 {
        color: #333;
        font-size: 20px;
        margin: 0px 0 20px;
        text-align: left;
        text-shadow: 0 1px 0 #fff;
    }

    .block-related .block-content {
        padding: 0px 0 10px 0;
        border: 1px solid #ECECEC;
        border-top: none;
        overflow: hidden;
    }

    .block-related ul {
        margin: 0;
        padding: 0;
    }

    .block-related li {
        padding: 5px 0;
    }

    .block-related input.checkbox {
        position: absolute;
        left: 85px;
        top: 12px;
        z-index: 10;
    }

    .block-related .product {
        margin-left: 20px;
    }

    .block-related .product .product-image {
        float: left;
        margin-right: -65px;
    }

    .block-related .product .product-details {
        margin-left: 65px;
    }

    .block-related .mini-products-list .product-details {
        margin-left: 125px;
        text-align: left;
    }

    .block-related .mini-products-list .product-details .product-name {
        text-align: left;
    }

    .block-related .mini-products-list .product-image {
        width: 100px;
        margin: 0;
        padding: 0 10px;
    }

    .block-related .block-subtitle {
        padding: 10px 10px 0 10px;
        font-size: 13px;
        font-weight: bold;
        margin: 0;
    }

    .block-related .price-box .old-price .price {
        display: inline;
        font-size: 15px;
    }

    .block-related a.link-cart {
        text-transform: uppercase;
        font-size: 14px;
        color: #23AEAC;
        font-weight: bold;
    }

    .block-related a.link-cart:hover {
        text-transform: uppercase;
        font-size: 14px;
        color: #CA0000;
        font-weight: bold;
    }

    /*12g. Block: Compare Products */
    .block-compare {
        background-color: #fff;
        padding: 0px;
    }

    .block-compare li {
        padding: 5px 0;
    }

    .block-compare .block-content ol,
    .block-compare .block-content ul {
        margin: 0;
    }

    ol#compare-items li a.product-name {
        font-size: 13px;
        padding: 0 25px 0px 0px;
        margin: 0;
        font-weight: normal;
        color: #222;
        line-height: 20px;
        text-transform: none;
        display: inline-block;
        letter-spacing: 0.5px;
    }

    ol#compare-items li a.product-name span {
        margin-right: 3px;
        font-size: 14px;
        font-weight: 400;
        color: #777;
        line-height: 15px;
        margin-bottom: 6px;
    }

    ol#compare-items li {
        margin: 0;
        padding: 0 0 10px;
        position: relative;
        border-bottom: 1px solid #ECECEC;
        margin-bottom: 10px;
        background: none;
    }

    ol#compare-items li.last {
        border-bottom: none;
        margin-bottom: 0;
    }

    /*12h. Block: Recently Viewed */
    .block-viewed .block-content {
        background-color: #fff;
        padding: 0px;
    }

    .block.block-viewed li {
        padding: 0 0 10px;
        position: relative;
        border-bottom: 1px solid #ECECEC;
        margin-bottom: 10px;
    }

    .block-viewed li:last-child {
        border-bottom: 0px solid #ECECEC;
        margin-bottom: 0px;
    }

    .block-viewed .block-content li a {
        padding: 0 15px;
        color: #666;
    }

    .block-viewed .block-content li a:hover {
        font-size: 13px;
        color: #000;
    }

    .block-viewed li span {
        color: #777777;
        float: left;
        font-size: 20px;
        font-weight: normal;
        line-height: 15px;
        margin-bottom: 8px;
        margin-right: 3px;
    }

    .sidebar ol,
    .sidebar ul {
        list-style: none;
        padding: 0;
        margin: 0;
        padding: 0
    }

    #poll-answers {
        margin-bottom: 10px
    }

    #recently-viewed-items .product-name {
        text-align: left;
        margin: 0;
        text-transform: none;
        width: 225px;
        display: inline-block
    }

    #recently-viewed-items .product-name a {
        color: #222;
        font-size: 13px;
        font-weight: normal;
        text-decoration: none;
        padding: 0 0px;
        letter-spacing: 0.5px;
    }

    #recently-viewed-items .product-name a:hover {
        color: #000;
        font-size: 13px;
        font-weight: normal;
        text-decoration: none;
    }

    /*12i. Block: Recently Compared */
    .block-compared .block-content {
        background-color: #fff;
        padding: 5px 12px 12px;
    }

    .block-compared li {
        padding: 3px 0px !important;
        list-style: none;
    }

    .block-compared li.last {
        padding: 0px;
        border-bottom: 0px #eaeaea solid;
        list-style: none;
    }

    .block-compared .block-content li a {
        padding: 0 15px;
        color: #666;
    }

    .block-compared .block-content li a:hover {
        font-size: 13px;
        color: #000;
    }

    .block-compared li span {
        color: #777777;
        float: left;
        font-size: 20px;
        font-weight: normal;
        line-height: 15px;
        margin-bottom: 8px;
        margin-right: 3px;
    }

    .block-compared li:before {
        content: '\f105';
        font-family: FontAwesome;
        font-size: 14px;
        padding-right: 6px;
        color: #444;
        vertical-align: top;
    }

    #recently-compared-items .product-name {
        text-align: left;
        margin: 0;
        text-transform: none;
        width: 225px;
        display: inline-block
    }

    #recently-compared-items .product-name a {
        color: #333;
        font-size: 14px;
        font-weight: normal;
        text-decoration: none;
        padding: 0 0px;
    }

    #recently-compared-items .product-name a:hover {
        color: #000;
        font-size: 14px;
        font-weight: normal;
        text-decoration: none;
    }

    /*12g. Block: Poll */
    .block-poll {
        background-color: #fff;
        padding: 0px;
    }

    .block-poll label {
        margin-bottom: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        font-size: 13px;
        color: #222;
        font-weight: normal;
        letter-spacing: 0.5px;
    }

    .block-poll .block-subtitle {
        color: #000;
        font-weight: 700;
        font-size: 13px;
    }

    .block-poll input.radio {
        float: left;
        margin: 1px -18px 0 0;
    }

    .block-poll .label {
        display: block;
        margin-left: 18px;
        text-align: left;
        padding: 0.1em 0.3em 0.1em;
        line-height: 14px;
    }

    .block-poll li {
        padding: 3px 0px !important;
        background: none !important;
    }

    .block-poll .actions {
        margin: 5px 0 0 0px;
        padding: 0;
    }

    .block-poll .answer {
        font-weight: bold;
    }

    .block-poll .votes {
        float: right;
        margin-left: 10px;
    }

    /*12k. Block: Tags */
    .block-tags {
        background-color: #fff;
        padding: 0px;
    }

    .block-tags .block-content {
        overflow: hidden;
    }

    .block-tags ul,
    .block-tags li {
        display: inline;
        padding: 0 !important;
        background: none !important;
        border: none;
    }

    .block-tags li a {
        height: 30px;
        line-height: 30px;
        padding: 0 10px;
        border-radius: 3px;
        background: #fafcfc;
        color: #555;
        font-size: 14px !important;
        text-transform: capitalize;
        display: inline-block;
        margin-bottom: 5px;
    }

    .block-tags li a:hover {
        background: {{ colorSettings()->brand_color }};
        color: #fff;
    }

    .block-tags .actions {
        border: 0 none;
        float: right !important;
        margin-top: 10px;
        padding: 0px;
        text-align: left;
    }

    /*12l. Block: Subscribe */
    .block-subscribe {
        background-color: #fff;
        padding: 0px;
    }

    .block-subscribe .input-text {
        width: 90%;
        background: #f7f7f7;
        border: 1px solid #f7f7f7;
        color: #AAAAAA;
        padding: 10px 7px;
        font-size: 13px;
    }

    .block-subscribe .input-text:focus {
        background: #FFFFFF;
        border: 1px solid #DDDDDD;
        color: #333333;
        font-size: 13px;
        outline: medium none;
        padding: 10px 7px;
        vertical-align: middle;
    }

    .form-subscribe-header {
        font-size: 14px;
        margin-bottom: 5px;
        color: #222;
    }

    .static-contain {
        margin-top: 10px;
    }

    .static-contain .required {
        color: #F00;
    }

    .static-contain ul {
        padding: 0px;
        list-style: none;
    }

    .group-select li .input-box {
        float: left;
        width: 45%;
    }

    .group-select li input.input-text,
    .group-select li textarea {
        background: #fff;
        border: 1px solid #f0f0f0;
        outline: medium none;
        padding: 8px 10px;
        width: 88%;
    }

    #billing-new-address-form {
        display: none;
    }

    .group-select li {
        list-style: outside none none;
        margin: 0 0 5px;
        overflow: hidden;
    }

    /*12m Block: Recently Viewed */

    .block-company .block-content {
        padding-top: 2px !important;
    }

    .block-company ol {
        margin: 5px 0 0;
    }

    .block-company li {
        padding: 10px 0px !important;
        list-style: none;
        border-bottom: 1px #ddd solid;
        border-top: 1px #fff solid;
    }

    .block-company li:first-child {
        border-top: none
    }

    .block-company li a {
        padding: 0 5px;
        text-decoration: none;
        transition: color 300ms ease-in-out 0s, background-color 300ms ease-in-out 0s, background-position 300ms ease-in-out 0s;
    }

    .block-company li a:hover {
        padding: 0 5px;
        color: #000;
    }

    .block-company li:before {
        content: '\f105';
        font-family: FontAwesome;
        font-size: 14px;
        padding-right: 6px;
        color: #444;
        display: inline-block;
        vertical-align: top;
    }

    .block-company li.last {
        padding: 10px 0px !important;
        border-bottom: 0px #eaeaea solid;
        list-style: none;
    }

    .block-company li span {
        float: left;
        margin-right: 5px;
        font-size: 16px;
        color: #aaa;
        line-height: 16px;
    }

    .block-company li strong {
        color: #333;
        font-weight: 900;
        padding: 0 5px;
    }

    /*12n. Block: Reorder */
    .block-reorder li {
        padding: 5px 0;
    }

    .block-reorder input.checkbox {
        float: left;
        margin: 3px -20px 0 0;
    }

    .block-reorder .product-name {
        margin-left: 20px;
    }

    /*12m. Block: Banner */

    .block-banner .block-content {
        text-align: center;
    }

    .block-banner a img {
        transition: all 0.4s ease-out 0.2s;
    }

    .block-banner a img:hover {
        opacity: 0.5;
        -webkit-transition: all 0.4s ease-out 0.2s;
        -moz-transition: all 0.4s ease-out 0.2s;
        -o-transition: all 0.4s ease-out 0.2s;
        transition: all 0.4s ease-out 0.2s;
        background-color: #eee;
    }

    #carousel-example-generic .carousel-caption h3 a {
        font-size: 32px;
        color: #fff;
        text-shadow: none;
    }

    .hot-banner {
        margin-bottom: 35px;
    }

    .hot-banner img {
        max-width: 100%;
    }

    /*13.  custom-slider  */
    .custom-slider {
        margin-bottom: 35px;
        border: 1px #e5e5e5 solid;
        background: #fff;
        padding: 5px
    }

    .custom-slider h3 a {
        text-shadow: none;
        color: #fff;
        font-size: 36px;
        font-weight: bold;
        text-transform: uppercase
    }

    .custom-slider .carousel-caption {
        text-shadow: none;
        padding: 0px 15px !important
    }

    #carousel-example-generic {
        background: #fff !important;
    }

    #carousel-example-generic .carousel-control.left {
        background: none
    }

    #carousel-example-generic .carousel-control.right {
        background: none
    }

    #carousel-example-generic .carousel-inner {
        margin: 0px
    }

    #carousel-example-generic .carousel-caption {
        width: 100%;
        left: 0;
        right: 0;
        padding: 0;
        top: 20%
    }

    .custom-slider .carousel-indicators {
        width: auto;
        margin-left: -20px
    }

    .custom-slider .carousel-control {
        display: none
    }

    .custom-slider img {
        border-radius: 0px
    }

    .custom-slider .link {
        border: 1px #fff solid;
        display: inline-block;
        margin-top: 20px;
        color: #fff;
        font-weight: bold;
        font-size: 12px;
        text-transform: uppercase;
        padding: 5px 10px
    }

    /*  14.  Product Sorting Toolbar  */
    /* Pager */
    .pager {
        margin: 0;
        text-align: center;
        padding: 0;
    }

    .pager .amount {
        float: left;
    }

    .pager .limiter label {
        float: left;
        font-size: 14px;
        padding: 6px 0;
        margin-right: 10px;
        display: inline;
    }

    .pager .pages {
        margin: 0 0;
    }

    .pages .pagination {
        margin: auto;
    }

    .pager .pages li {
        display: inline-block;
    }

    .pager .pages li a {
        box-shadow: none;
        border: none;
        padding: 6px 12px;
        border-radius: 0px;
    }

    .pages .pagination>.active>a,
    .pages .pagination>.active>span,
    .pages .pagination>.active>a:hover,
    .pages .pagination>.active>span:hover,
    .pages .pagination>.active>a:focus,
    .pages .pagination>.active>span:focus {
        z-index: 2;
        cursor: default;
    }

    /* Sorter */
    .sorter {
        padding: 0;
        margin: 0;
    }

    .sorter .actions {
        float: left;
    }

    .sorter .view-mode {
        float: left;
        margin-top: 6px;
        margin-right: 0px;
        margin-left: 0px;
    }

    .sorter .sort-by {
        float: left;
        margin-top: 6px;
    }

    /* Toolbar */
    .toolbar {
        clear: both;
        display: inline-block;
        width: 100%;
        border-top: 1px #e5e5e5 solid;
        padding-top: 15px;
    }

    .toolbar .sorter {
        float: left;
    }

    .toolbar-bottom {
        margin-top: 0;
    }

    .toolbar .pager .pages ol {
        float: none;
    }

    #limiter .button-asc {
        box-shadow: none;
        float: right;
        height: 33px;
        line-height: 33px;
        margin-left: 5px;
        text-align: center;
        width: 35px;
    }

    .top_arrow:before {
        content: '\f106';
        font-family: FontAwesome;
        font-size: 16px;
    }

    #sort-by .button-desc {
        background-color: #f8f8f8;
        box-shadow: none;
        float: right;
        height: 31px;
        line-height: 31px;
        margin-left: 5px;
        text-align: center;
        width: 30px;
    }

    #sort-by {
        float: left;
        font-size: 13px;
        margin-top: 6px;
    }

    #sort-by ul {
        margin: 0;
        padding: 0;
        list-style: none;
        display: inline;
    }

    #sort-by a:link,
    #sort-by a:visited {
        text-decoration: none;
    }

    #sort-by li {
        cursor: pointer;
        margin: 0 auto;
        outline: medium none;
        padding: 6px 15px;
        position: relative;
        width: 100px;
        float: left;
        border: none
    }

    #sort-by li li {
        width: 100px;
        margin-top: 0px;
        border-top: none;
        border-right: none;
        border-left: none;
    }

    #sort-by ul ul {
        position: absolute;
        visibility: hidden;
        left: -1px;
        top: 27px;
        background: #fff;
        z-index: 10000;
        border-top: none;
        border: 1px #e5e5e5 solid;
        border-bottom: none;
    }

    #sort-by ul ul li {
        background: #fff;
        border-bottom: 1px #e5e5e5 solid;
    }

    #sort-by ul ul ul {
        position: absolute;
        left: 100%;
        top: -2px;
        border: solid 1px transparent;
    }

    #sort-by li:hover>ul {
        visibility: visible;
        z-index: 10000;
    }

    .right-arrow {
        float: right;
    }

    .right-arrow:after {
        content: "\f107";
        font-family: 'FontAwesome';
        color: #666;
        font-size: 14px;
    }

    #limiter {
        float: right;
        font-size: 14px;
        margin-top: 6px;
    }

    #limiter ul {
        margin: 0;
        padding: 0;
        list-style: none;
        display: inline;
    }

    #limiter a:link,
    #limiter a:visited {
        text-decoration: none;
        border: none;
        border-radius: 0px;
        display: inline-block;
        padding: 0px;
    }

    #limiter li {
        cursor: pointer;
        margin: 0 auto;
        outline: medium none;
        padding: 6px 0px 6px 10px;
        position: relative;
        width: 50px;
        float: left;
        text-align: left;
    }

    #limiter .right-arrow {
        float: right;
        margin-left: 6px;
    }

    #limiter li li {
        width: 50px;
        border-top: 0px #f5f5f5 solid;
    }

    #limiter ul ul {
        position: absolute;
        visibility: hidden;
        left: -1px;
        top: 27px;
        z-index: 10000;
        border-top: none;
        border: 1px #e5e5e5 solid;
        border-bottom: none;
        background: #fff;
    }

    #limiter ul ul li {
        background: #fff;
        border-bottom: 1px #e5e5e5 solid;
    }

    #limiter ul ul ul {
        position: absolute;
        left: 100%;
        top: -2px;
        border: solid 1px transparent;
    }

    #limiter li:hover>ul {
        visibility: visible;
        z-index: 10000;
    }

    /* Category Toolbar, Pager */
    .toolbar .button-list {
        background: url(../images/icon_list.png) no-repeat 10px 7px;
        text-transform: none;
        padding: 6px 8px 7px 25px;
    }

    .toolbar a.button-grid {
        background: url(../images/icon_grid_over.png) no-repeat 11px 9px;
        padding: 6px 8px 7px 22px;
        border: none
    }

    .toolbar span.button-active.button-grid {
        background: {{ colorSettings()->brand_color }} url(../images/icon_grid_act.png) no-repeat 10px 9px;
        padding: 6px 8px 7px 22px;
        margin-right: 5px;
        border: none;
    }

    .toolbar span.button-active.button-list {
        background: url(../images/icon_list_act.png) no-repeat 10px 9px;
        padding: 6px 8px 7px 22px;
        border: none
    }

    .toolbar .button-list:hover,
    .toolbar a.button-grid:hover,
    .toolbar span.button-active.button-grid:hover,
    .toolbar span.button-active.button-list:hover {
        padding: 6px 8px 7px 22px;
    }

    .toolbar .pager {
        text-align: left;
        margin: 0px;
        padding: 0;
        float: right;
        margin-top: 6px;
    }

    .pager .amount,
    .sorter .amount {
        padding-left: 10px;
        margin-top: 4px;
        display: inline-block;
    }

    .toolbar .pager .limiter {
        margin-top: 2px;
        float: left;
    }

    .toolbar-bottom .pager .limiter {
        position: static;
    }

    .pager .button {
        padding: 4px 5px;
        background-color: #fff;
    }

    .pager .button :hover {
        padding: 4px 5px;
        background-color: #fff;
    }

    .toolbar .actions {
        margin-right: 30px;
    }

    .pager .limiter label,
    .toolbar label {
        display: inline;
        float: left;
        margin-right: 10px;
        padding: 6px 0 0;
        font-size: 14px;
        font-weight: normal;
        margin-bottom: auto;
    }

    .toolbar .sorter .sort-by {
        margin-right: 30px;
    }

    .pager .amount {
        margin-right: 20px;
    }

    .display-product-option {
        float: right;
        margin-top: -74px;
        position: relative;
        z-index: 10;
        width: 65%;
    }

    .display-product-option .pager {
        float: left;
    }

    .display-product-option .sorter .view-mode {
        float: right;
    }

    .display-product-option .button-list {
        background: #f8f8f8;
        text-transform: none;
        padding: 6px 12px;
        font-size: 14px;
        font-weight: 300;
        display: inline-block;
        color: #666;
    }

    .display-product-option a.button-grid {
        background: #f8f8f8;
        padding: 7px 12px;
        border: none;
        color: #666;
    }

    .display-product-option span.button-active.button-grid {
        background: {{ colorSettings()->brand_color }};
        padding: 7px 12px;
        margin-right: 5px;
        border: none;
        color: #fff;
        font-size: 14px;
        font-weight: 300;
    }

    .display-product-option span.button-active.button-list {
        background: {{ colorSettings()->brand_color }};
        padding: 6px 12px;
        border: none;
        margin-left: 5px;
        color: #fff;
    }

    /*  15. Product View  */
    /* 15a. Product Images */
    .product-view .new-label {
        display: none;
    }

    .product-view .sale-label {
        display: none;
    }

    .product-view {
        background: #fff;
        margin: 0 0px 20px;
        overflow: hidden;
        position: relative;
        z-index: 0;
    }

    .product-view .flexslider-thumb {
        margin: 20px auto 0;
        padding: 0 42px;
        position: relative
    }

    .product-view-compact .flexslider-thumb {
        margin: 17px auto 0
    }

    .product-view .flexslider-thumb .flex-viewport {
        z-index: 10
    }

    .product-view .flexslider-thumb .flex-direction-nav {
        top: 30%;
        left: 0;
        width: 100%;
    }

    .product-view .flexslider-thumb .flex-prev {
        position: absolute;
        left: 10px;
        top: -5px;
    }

    .product-view .flexslider-thumb .flex-next {
        position: absolute;
        right: 10px;
        top: -5px;
        color: #666;
    }

    .product-view .flexslider-thumb li img {
        cursor: pointer;
        -moz-user-select: none;
        border: 1px #ddd solid;
    }

    .product-view .previews-list {
        padding: 0;
        list-style-type: none;
        text-align: center
    }

    .product-view .previews-list li {
        width: 85px;
        margin-right: 15px;
        padding: 0;
        float: none;
        display: inline-block;
    }

    .product-view-compact .rating {
        padding: 18px 0 21px
    }

    .product-view-compact .btn-toolbar {
        margin: 0;
        padding: 7px 0 22px
    }

    .product-view-compact .price {
        display: block;
        padding: 6px 0 20px
    }

    .product-view .product-img-box .product-image .product-flexslider {
        margin: 20px 2px 0px 0px;
    }

    .product-view .product-img-box .product-image .product-full img {
        width: 100%;
    }

    .product-view .product-img-box .product-image .owl-next {
        right: -32px;
        top: 40%;
    }

    .product-view .product-img-box .product-image .owl-next a,
    .product-view .product-img-box .product-image .owl-prev a {
        border: none;
        background: none;
    }

    .more-views .slider-items-products .owl-buttons .owl-next a:before,
    .more-views .slider-items-products .owl-buttons .owl-prev a:before {
        font-size: 24px;
    }

    .product-view .product-img-box .product-image .owl-prev {
        left: 24px;
        right: auto;
        top: 40%;
    }

    .product-view .product-img-box .product-image .more-views-items {
        margin: 0px 10px;
    }

    .product-view .flexslider-thumb-vertical-outer {
        margin: 0 10px 15px 0;
        width: 76px;
        float: left;
        position: relative;
        z-index: 1
    }

    .product-view .flexslider-thumb-vertical .flex-viewport {
        height: 300px !important
    }

    .product-view .flexslider-thumb-vertical .slides {
        margin: -4px 0 0;
        padding: 0;
        list-style-type: none
    }

    .product-view .flexslider-thumb-vertical .slides li {
        margin: 0;
        padding: 0;
        overflow: hidden
    }

    .product-view .flexslider-thumb-vertical .slides li img {
        width: 100%;
        padding: 4px 0;
        cursor: pointer;
        -moz-user-select: none
    }

    .flex-direction-nav,
    .slider-controls {
        -webkit-transform: translate3d(0, 0, 0)
    }

    .product-essential {
        background-color: #FFFFFF;
    }

    .product-collateral .box-collateral {
        margin: 0 0 15px;
    }

    .product-essential .product-image.no-gallery {
        margin-left: auto;
    }

    .product-essential .product-image img {
        height: auto;
        width: 100%;
        border: 1px solid #e5e5e5;
        padding: 1px;
    }

    .product-essential .button-viewall {
        position: absolute;
        left: 5px;
        bottom: 5px;
        text-indent: -999em;
        z-index: 9999;
    }

    .more-views {}

    .recommend {
        margin: 20px auto;
        position: relative;
    }

    .recommend .controls .next {
        right: 0;
    }

    .recommend .controls .prev {
        right: 36px;
    }

    /* 15b. Product Shop */
    .product-view .product-shop .add-to-box button.button.btn-cart span {
        background: none;
        margin-left: 5px;
        font-size: 14px;
    }

    .product-view .product-options-bottom button.button.btn-cart span {
        background: none;
        margin-left: 5px;
    }

    .product-view .product-shop {
        margin-top: 0;
    }

    .product-additional {
        display: inline-block;
    }

    .product-additional .block-product-additional {
        margin: 0px;
        background: #fff;
        border: 1px #d1d1d1 solid;
        text-align: center;
        padding-bottom: 15px;
    }

    .product-additional .block-product-additional p {
        margin: 12px 0;
        line-height: 20px;
        text-align: center;
        padding: 0 10px;
        font-size: 13px;
    }

    .product-additional .block .block-title {
        border-bottom: 2px solid #333;
        color: #000000;
        font-size: 14px;
        margin: 0;
        padding: 13px;
        text-transform: uppercase;
        text-align: center;
        margin: 0px;
        background: #f7f7f7;
    }

    .product-additional .block-product-additional .block-content {
        padding: 18px 12px 10px;
        text-align: center;
        line-height: 20px;
    }

    .block .block-content {
        border-top: medium none;
        font-size: 13px;
        overflow: hidden;
        padding: 15px;
    }

    .block-progress dt.complete {
        margin: 0;
    }

    .product-view .product-name {}

    .product-view .product-name h1 {
        font-size: 34px;
        margin: 0 0 2px;
        text-align: left;
        line-height: 1;
        padding-bottom: 12px;
        font-weight: 500;
        padding-right: 55px;
        letter-spacing: -1px;
        font-family: 'Montserrat', sans-serif;
    }

    .product-view .short-description {
        font-size: 13px;
        padding: 20px 0px;
        border-bottom: 1px #ddd dotted
    }

    .product-view .short-description h2 {
        font-size: 14px;
        color: #333;
        margin: 0px;
        margin-bottom: 5px;
        font-weight: 700;
    }

    .product-view .short-description p {
        font-size: 13px;
        margin: 0px;
        color: #222;
    }

    .product-view .product-shop .add-to-box {
        padding: 20px 0px;
        overflow: hidden;
        text-align: left;
        margin: 1px 0 0 0;
        border-bottom: 1px dotted #ddd;
    }

    .product-view .product-shop .add-to-box .btn-cart {
        font-size: 16px;
        text-shadow: none;
        padding: 7px 20px;
        float: left;
        margin-top: 0px;
        font-weight: bold;
        transition: color 300ms ease-in-out 0s, background-color 300ms ease-in-out 0s, background-position 300ms ease-in-out 0s;
        margin-left: 12px;
        border: none;
        height: 40px;
        text-transform: uppercase;
    }

    .product-view .product-shop .add-to-box .btn-cart:hover {
        text-shadow: none;
    }

    .product-view .product-shop .add-to-box .icon-basket {
        margin-right: 5px;
    }

    .email-addto-box {
        display: inline-block;
        margin-left: 5px;
    }

    .product-view .email-friend a span {
        font-size: 12px;
        display: none
    }

    .product-view .promo-banner {
        margin-top: 20px
    }

    .product-view .product-shop ul.add-to-links {
        margin: 0;
        padding: 0;
        margin-top: 0px;
        display: inline-block;
    }

    .product-view .product-shop .add-to-links li {
        display: inline-block;
        padding: 0px 0px 0px 6px;
        list-style-type: none;
    }

    .product-view .add-to-links span {
        font-size: 12px;
        margin-left: 5px;
        font-weight: normal;
        text-transform: none;
        display: none
    }

    .product-view .product-shop .add-to-links li a:hover {
        color: #fff;
        background: {{ colorSettings()->brand_color }};
        border: 1px {{ colorSettings()->brand_color }} solid;
    }

    .product-view .email-friend {
        font-size: 12px;
        display: inline-block;
        margin-bottom: 0px;
        vertical-align: top;
        margin-left: 8px;
    }

    .product-view .email-friend a:before {
        content: "\f0e0";
        font-family: FontAwesome;
        font-size: 16px;
    }

    .product-view .email-friend a {
        color: #999;
        line-height: normal;
        font-weight: normal;
        vertical-align: top;
        display: block;
        height: 40px;
        width: 45px;
        border: 1px #ececec solid;
        color: #999;
        line-height: 36px;
        vertical-align: top;
        text-align: center;
        transition: color 300ms ease-in-out 0s, background-color 300ms ease-in-out 0s, background-position 300ms ease-in-out 0s;
    }

    .product-view .email-friend a:hover {
        color: #fff;
        background: {{ colorSettings()->brand_color }};
        border: 1px {{ colorSettings()->brand_color }} solid;
    }

    .product-view .product-shop .add-to-links li .separator {
        display: none;
    }

    .product-view .product-shop .add-to-links .link-wishlist:before {
        content: "\f004";
        font-family: FontAwesome;
        font-size: 14px;
    }

    .product-view .product-shop .add-to-links .link-wishlist {
        color: #999;
        line-height: normal;
        font-weight: normal;
        vertical-align: top;
        display: block;
        height: 40px;
        width: 45px;
        border: 1px #ececec solid;
        color: #999;
        line-height: 36px;
        vertical-align: top;
        text-align: center;
        transition: color 300ms ease-in-out 0s, background-color 300ms ease-in-out 0s, background-position 300ms ease-in-out 0s;
    }

    .product-view .product-shop .add-to-links .link-compare:before {
        content: "\f012";
        font-family: FontAwesome;
        font-size: 14px;
    }

    .product-view .product-shop .add-to-links .link-compare {
        color: #999;
        line-height: normal;
        font-weight: normal;
        vertical-align: top;
        display: block;
        height: 40px;
        width: 45px;
        border: 1px #ececec solid;
        color: #999;
        line-height: 36px;
        vertical-align: top;
        text-align: center;
        transition: color 300ms ease-in-out 0s, background-color 300ms ease-in-out 0s, background-position 300ms ease-in-out 0s;
    }

    .product-view .product-shop ul.add-to-links a {
        padding: 0;
        margin: 0;
        display: block
    }

    .product-view .product-shop .ratings {
        padding: 5px 0 18px 0px;
        margin: auto;
        border-bottom: 1px #ddd dotted;
        position: relative;
        bottom: auto;
        border-radius: 0;
        left: 0;
        margin-left: 0px
    }

    .product-view .product-shop .ratings .rating-links {
        margin-bottom: 0px;
        display: inline-block;
    }

    .product-view .product-shop .no-rating {
        padding: 12px 0;
        margin: 15px 0 0;
    }

    .availability.in-stock {
        padding: 3px 0px;
        position: absolute;
        top: 18px;
        right: 0px;
    }

    .availability.in-stock span {
        color: #fff;
        font-size: 11px;
        line-height: 16px;
        display: block;
        background: {{ colorSettings()->brand_color }};
        text-transform: uppercase;
        padding: 3px 8px;
        font-weight: bold;
        border-radius: 3px
    }

    .availability.in-stock span:before {
        content: '\f00c';
        font-family: FontAwesome;
        display: inline-block;
        margin-right: 5px;
        font-size: 11px;
        vertical-align: middle
    }

    .availability.out-of-stock {
        padding: 3px 10px;
        position: absolute;
        top: 18px;
        right: 0px;
    }

    .availability.out-of-stock span {
        color: red;
        font-size: 12px;
        line-height: 16px;
        display: block;
        text-transform: uppercase;
    }

    .availability.out-of-stock span:before {
        content: '\f00d';
        font-family: FontAwesome;
        display: inline-block;
        margin-right: 5px;
        font-size: 12px;
        vertical-align: middle
    }

    .products-grid .item .actions .availability.out-of-stock {
        background: #fff;
        border: medium none;
        display: inline-block;
        height: 50px;
        line-height: 50px;
        padding: 0;
        text-align: center;
        width: 50px;
        position: relative;
        top: 0px;
    }

    .products-grid .item .actions .availability.out-of-stock span.ava-out-of-stock {
        display: none;
    }

    .products-grid .item .actions .availability.out-of-stock span:before {
        content: inherit;
    }

    .products-grid .item .actions .availability.out-of-stock:before {
        content: "\f00d";
        font-family: FontAwesome;
        font-size: 14px;
        color: #999
    }

    .products-list .product-shop p.availability.out-of-stock {
        border: 2px solid red;
        color: #666;
        display: inline-block;
        font-size: 13px;
        line-height: 1.5em;
        padding: 6px 10px;
        position: relative;
        text-transform: uppercase;
        top: 0;
    }

    .product-view .product-shop .price-block {
        position: relative;
    }

    .product-view .product-shop .price-box {
        display: block;
        margin: 0px;
        padding: 15px 0px;
        border-bottom: 1px #ddd dotted;
        position: relative
    }

    .product-view .product-shop .grouped-items-table .price-box {
        border-bottom: 0px solid #ddd;
        margin: 0;
        padding: 0;
    }

    .product-view .product-shop .price-box .old-price {
        margin: 0px;
        margin-top: 0;
        display: inline-block;
    }

    .product-view .product-shop .special-price {
        display: inline-block;
        margin: 0;
        padding: 0;
    }

    .product-view .product-shop .old-price .price {
        font-size: 24px;
        font-weight: 300
    }

    .product-view .product-shop .price {
        font-size: 28px;
        color: {{ colorSettings()->sub_color }};
        font-weight: 700;
    }

    .add-to-cart .qty,
    .qty-holder .qty {
        background-color: #FFFFFF;
        border: 1px solid #E0E0E0;
        border-radius: 0px;
        font-size: 15px;
        font-weight: bold;
    }

    .add-to-cart .qty {
        height: 40px;
        text-align: center;
        width: 60px;
        vertical-align: top
    }

    .qty-input-text {
        float: left;
        margin-left: 10px;
    }

    .custom button.items-count {
        transition: color 300ms ease-in-out 0s, background-color 300ms ease-in-out 0s, background-position 300ms ease-in-out 0s;
        font-size: 12px;
        line-height: 0px;
        padding: 13px 12px 9px 12px;
        height: 40px;
        width: 40px;
    }

    .product-view .product-shop .add-to-box .add-to-cart label {
        display: inline-block;
        float: left;
        margin-top: 6px;
        text-align: left;
        text-transform: capitalize;
        font-size: 15px;
        font-weight: normal;
        margin-right: 15px;
    }

    .product-view .product-shop .product-options-bottom .add-to-cart label {
        display: block;
        float: none;
        margin-bottom: 5px;
        text-align: left;
        text-transform: uppercase;
    }

    /*15c.  Product Collatera */
    .product-collateral {
        display: inline-block;
        margin-bottom: 20px;
    }

    #product-tabs {
        margin: 0;
        padding: 0;
        position: relative;
    }

    #product-tabs>dt {
        text-transform: none;
        font-size: 14px;
        padding: 8px 0px;
        cursor: pointer;
        color: #102343;
        text-transform: none;
    }

    #product-tabs>dt.open {
        position: relative;
        background-color: #fff;
        z-index: 10;
        color: #2CA2E3;
    }

    #product-tabs>dd {
        display: none;
        right: 0;
        top: 0;
        background-color: #fff;
        margin: 0;
        padding: 6px 0;
        line-height: 1.8;
        border-bottom-width: 0 !important;
        font-size: 14px;
    }

    #product-tabs>dd h2 {
        display: none;
    }

    .add_info {
        border: 1px solid #e5e5e5;
        margin: 15px 0px 0;
        border-radius: 3px 3px 0px 0px;
    }

    .product-tabs {
        background: #fff;
        text-align: left;
        width: 100%;
    }

    #productTabContent {
        padding: 10px 20px;
        background: #fff;
        border-top: none;
    }

    .product-tabs li a {
        color: #666;
        margin-right: 0px;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
        transition: color 300ms ease-in-out 0s, background-color 300ms ease-in-out 0s, background-position 300ms ease-in-out 0s;
        padding: 0px;
        border: none;
        text-transform: uppercase;
    }

    .product-tabs li.active a {
        background: #fff;
        color: #333;
        font-weight: 600;
        padding: 12px;
        border: 1px solid {{ colorSettings()->brand_color }};
    }

    .nav-tabs.product-tabs>li {
        display: inline-block;
        float: none;
        margin-right: 10px;
    }

    .nav-tabs.product-tabs>li>a {
        margin-right: 0px;
        line-height: 1.42857143;
        border-radius: 0px;
        background: #fff;
        padding: 12px 0 12px;
        margin-left: 20px
    }

    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:hover,
    .nav-tabs>li.active>a:focus {
        border: none;
        border-bottom: 1px solid {{ colorSettings()->brand_color }};
        color: {{ colorSettings()->brand_color }};
    }

    .nav-tabs>li>a:hover {
        border: none;
        border-bottom: 1px {{ colorSettings()->brand_color }} solid;
        background: #fff;
        color: #333;
        transition: all 0.3s cubic-bezier(0.8, 0, 0, 1) 0s;
    }

    .tab-content {
        background-color: inherit;
        padding: 5px 0px 20px 0px;
        overflow: hidden;
        font-size: 13px;
        line-height: 21px;
        margin-top: 0px;
    }

    .tab-content>.active {
        margin-top: 10px;
    }

    .tags .input-box input {
        border: 1px solid #ddd;
        margin-top: 0;
        width: 35%;
    }

    .form-add-tags button.button {
        display: inline;
        background: #fff;
        border: 1px solid #ccc;
        background: #fff;
        padding: 11px 14px;
        transition: color 300ms ease-in-out 0s, background-color 300ms ease-in-out 0s, background-position 300ms ease-in-out 0s;
    }

    .form-add-tags button.button:hover {
        display: inline;
        background: {{ colorSettings()->brand_color }};
        transition: all 0.3s linear;
        -moz-transition: all 0.3s linear;
        -webkit-transition: all 0.3s linear;
        border: 1px {{ colorSettings()->brand_color }} solid;
        color: #fff;
    }

    .form-add-tags label {
        font-weight: bold;
        font-size: 14px;
    }

    #customer-reviews {
        margin-top: 15px;
    }

    #customer-reviews .detail {
        font-size: 14px;
        line-height: 18px;
    }

    #customer-reviews h3 {
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 15px;
    }

    #customer-reviews h4 {
        display: inline;
        font-size: 14px;
    }

    #customer-reviews h5 {
        display: inline;
        font-size: 14px;
    }

    .box-reviews dl {
        margin-bottom: 0;
    }

    .box-reviews dt {
        font-size: 18px;
        padding: 20px 0 10px;
    }

    #customer-reviews .page-title {
        border: none;
    }

    #customer-reviews .page-title h2 {
        color: #000;
        font-size: 20px;
        font-weight: normal;
        margin-top: 0;
        padding: 2px 0px;
        position: relative;
        display: block;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        border-bottom: 1px solid #ccc;
        padding-bottom: 10px
    }

    .box-reviews1 {
        margin-top: 8px;
        margin-bottom: 20px;
    }

    .box-reviews2 {
        margin-top: 8px;
        margin-bottom: 35px;
        overflow: hidden;
    }

    .review-title {
        margin-top: 0;
        line-height: 1.4;
        padding-bottom: 15px;
        margin-bottom: 0;
        font-size: 13px;
        font-weight: 400;
    }

    .review-title span {
        font-size: 14px;
        font-weight: 400;
        margin-top: 5px;
    }

    .box-reviews>.rating-box {
        position: absolute;
        top: 30px;
        right: 30px;
    }

    .box-reviews dd {
        margin-left: 0;
        padding-bottom: 20px;
    }

    .box-reviews .author {
        font-style: italic;
        font-size: 14px;
        font-weight: bold;
        margin-right: 5px;
    }

    .box-reviews .date {
        color: #bdbdbd;
        font-size: 14px;
        font-style: italic;
    }

    .box-reviews .ratings-table {
        float: left;
        margin: 5px 15px 15px 0;
        width: 12%;
    }

    .box-reviews .review {
        border-left: 1px solid #DFDFDF;
        float: left;
        padding-left: 2.5em;
        width: 84%;
        margin-bottom: 10px;
    }

    .box-reviews .review .review-txt.last {
        border-bottom: none;
    }

    .box-reviews .review .review-txt {
        border-bottom: 1px solid #DFDFDF;
        padding-bottom: 12px;
        margin-bottom: 10px;
    }

    .box-reviews ul li h6 {
        font-size: 15px;
        margin-bottom: 3px;
        margin-top: 0px;
        padding: 0;
    }

    .box-reviews ul li h6 a {
        color: #333;
        font-weight: 500;
        letter-spacing: 0.5px;
    }

    .box-reviews2 ul li {
        margin-bottom: 0px;
        clear: both;
    }

    .box-reviews .actions {
        padding-top: 1.5em;
        text-align: right;
        float: right;
    }

    #customer-reviews .form-list li label {
        color: #333;
        font-size: 14px;
    }

    #customer-reviews .buttons-set {
        margin-top: 10px;
    }

    /*detail page view link*/
    a.button.view-all:before {
        content: "\f06e";
        font-family: FontAwesome;
        font-size: 13px;
        padding-right: 8px;
    }

    a.button.view-all {
        display: inline-block;
        border: 0;
        background: #fff;
        font-size: 12px;
        text-align: center;
        white-space: nowrap;
        color: #333;
        font-weight: 600;
        transition: all 0.3s linear;
        -moz-transition: all 0.3s linear;
        -webkit-transition: all 0.3s linear;
        vertical-align: top;
        border: 1px solid #ccc;
        padding: 5px 10px;
        text-transform: uppercase;
    }

    .button.view-all:hover {
        background: {{ colorSettings()->brand_color }};
        transition: all 0.3s linear;
        -moz-transition: all 0.3s linear;
        -webkit-transition: all 0.3s linear;
        border: 1px solid {{ colorSettings()->brand_color }};
        color: #fff;
        text-decoration: none;
    }

    .box-reviews .form-add h3 {
        margin-bottom: 5px;
        font-size: 14px;
        font-weight: 400;
    }

    .box-reviews .form-add h4 {
        font-size: 15px;
    }

    .box-reviews textarea {
        width: 95%;
        margin-top: 4px;
        height: 8em;
        background: #fff;
    }

    .box-reviews .form-list input.input-text {
        width: 80%;
        padding: 10px;
        margin-bottom: 4px;
        line-height: 20px;
        background: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 0 0px rgba(0, 0, 0, 0.1) inset;
    }

    .box-reviews .form-list input.input-text:focus {
        width: 80%;
        padding: 10px;
        margin-bottom: 4px;
        line-height: 20px;
        background: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 0 0px rgba(0, 0, 0, 0.1) inset;
    }

    .box-reviews .form-list select {
        padding: 12px 15px 12px 165px;
        margin: 0;
        width: 100%;
        line-height: 20px;
        height: 48px;
    }

    .review1 {
        display: inline-block;
        width: 45%;
        float: left;
    }

    .review2 {
        display: inline-block;
        width: 55%;
    }

    #product-review-table {
        margin: 10px 0;
        border: medium none;
        width: 100%;
    }

    #product-review-table th,
    #product-review-table td {
        text-align: left;
        font-size: 12px;
        font-weight: 700;
        line-height: 20px;
        padding: 8px;
        letter-spacing: 0.5px;
    }

    #customer-reviews ul {
        margin: auto;
        padding: 0px;
    }

    #customer-reviews li {
        margin-bottom: 0px;
        list-style: none;
    }

    #customer-reviews .form-list li label {
        color: #333;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    .review2 label {
        color: #333;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    label {
        font-weight: normal;
    }

    .box-reviews .form-list input.input-text {
        width: 80%;
        padding: 10px;
        margin-bottom: 4px;
        line-height: 20px;
        background: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 0 0px rgba(0, 0, 0, 0.1) inset;
    }

    .box-reviews textarea {
        border: 1px #f1f1f1 solid;
        padding: 10px;
        outline: none;
        color: #aaa;
    }

    .nobr {
        white-space: nowrap;
    }

    button.button.submit:before {
        content: "\f04b";
        font-family: FontAwesome;
        font-size: 11px;
        padding-right: 8px;
    }

    .upsell-pro {
        margin-bottom: 50px;
    }

    #product-tabs>dd h2.product-name {
        display: block;
    }

    #product-tabs .crosssell .flex-direction-nav a {
        width: 50px;
        height: 40px;
        top: 112px;
    }

    #product-tabs .crosssell .flex-direction-nav .flex-prev {
        right: auto;
        left: -10px;
    }

    #product-tabs .crosssell .flex-direction-nav .flex-next {
        right: -10px;
    }

    .box-up-sell .flex-direction-nav a,
    .box-cross-sell .flex-direction-nav a {
        width: 54px;
        height: 44px;
        top: 0;
        margin-top: -76px;
        margin-right: -1px;
    }

    .product-view .box-tags .form-add input.input-text {
        width: 350px;
        background-color: #FFFFFF;
        border: 1px solid #CCCCCC;
        border-radius: 2px;
        box-shadow: 0 1px 5px #eee inset;
        margin-right: 10px;
        padding: 8px;
    }

    .up-sell-box {
        border: 1px #ddd solid;
        border-top: none;
    }

    .up-sell-box p.desc {
        margin: 0;
        padding: 10px 10px 0 10px
    }

    .product-view .box-tags .form-add label {
        line-height: 42px;
        font-size: 16px;
    }

    .product-view .box-tags .form-add .button {
        height: 35px;
    }

    #addTagForm {
        margin-bottom: 5px;
        margin-top: 10px
    }

    .product-view .box-up-sell {
        margin-top: 10px;
        float: left;
    }

    .product-view .box-up-sell .subtitle {
        margin-right: 0;
    }

    .mini-products-list .price-box * {
        display: inline;
    }

    .mini-products-list .price-box .price {
        margin-right: 10px;
    }

    .product-view .product-next-prev .product-next {
        font-size: 18px;
        line-height: 22px;
        display: inline-block;
        width: 26px;
        height: 26px;
        color: #666;
        text-align: center;
        transition: color 300ms ease-in-out 0s, background-color 300ms ease-in-out 0s, background-position 300ms ease-in-out 0s;
        position: absolute;
        right: 15px;
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        border-radius: 0px;
        position: absolute;
        z-index: 10000;
        top: 4px;
        border: 1px #ddd solid;
    }

    .product-view .product-next-prev .product-next:before {
        content: "\f105";
        font-family: FontAwesome;
    }

    .product-view .product-next-prev .product-next:hover,
    .product-shop .product-next-prev .product-prev:hover {
        color: #fff;
        background: {{ colorSettings()->brand_color }};
        text-decoration: none;
        border: 1px {{ colorSettings()->brand_color }} solid;
    }

    .product-view .product-next-prev .product-prev {
        font-size: 18px;
        line-height: 22px;
        display: inline-block;
        width: 26px;
        height: 26px;
        color: #666;
        text-align: center;
        transition: color 300ms ease-in-out 0s, background-color 300ms ease-in-out 0s, background-position 300ms ease-in-out 0s;
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        border-radius: 0px;
        position: absolute;
        right: 45px;
        z-index: 10000;
        top: 4px;
        border: 1px #ddd solid;
    }

    .product-view .product-next-prev .product-prev:before {
        content: "\f104";
        font-family: FontAwesome;
    }

    .product-view .product-next-prev a:hover {
        background: {{ colorSettings()->brand_color }};
        color: #fff;
    }

    .side-banner {
        margin-bottom: 20px
    }

    .product-view .product-shop .ratings-table {
        padding: 10px;
        margin-top: 10px;
    }

    .review-product-list .product-view .product-shop .buttons-set {
        clear: both;
        overflow: hidden;
    }

    .product-view .product-shop .product-options .options-list label {
        color: #333;
    }

    .product-view .product-shop .product-options-bottom .btn-cart {
        font-size: 18px;
        text-shadow: none;
        padding: 7px 20px;
        float: left;
        margin-top: 0px;
        font-weight: normal;
        transition: color 300ms ease-in-out 0s, background-color 300ms ease-in-out 0s, background-position 300ms ease-in-out 0s;
        margin-left: 10px;
        border: none;
    }

    .product-view .product-shop .product-options-bottom .btn-cart:hover {
        text-shadow: none;
    }

    .product-view .product-shop .product-options-bottom .btn-cart {
        background: #34d1c6;
        color: #fff;
    }

    .product-view .product-shop .product-options-bottom .btn-cart:hover {
        background: #202726;
        color: #fff;
    }

    .product-view .product-options-bottom button.button.btn-cart span {
        background: none;
        margin-left: 10px;
        font-size: 14px;
    }

    #product-options-wrapper .price-notice .price {
        font-size: 12px;
    }

    .product-view .product-shop .product-pricing .price {
        font-size: 12px;
    }

    .product-view .product-shop ul.product-pricing {
        margin-top: 5px;
    }

    #cloud-zoom-big {
        border: 1px #ddd solid;
        z-index: 10000 !important;
    }

    .product-shop button.button.btn-cart:before {
        content: "\f07a";
        font-family: 'FontAwesome';
        margin-right: 10px;
        font-weight: 300;
    }

    /*16. related slider & upsell slider */
    .related-pro {
        margin-bottom: 20px;
    }

    .related-block {
        background-color: #fff;
        margin-bottom: 10px;
        overflow: hidden;
        position: relative;
    }

    .related-pro .home-block-inner {
        border-width: 0 !important;
        float: left;
        width: 24.3%;
    }

    .related-pro .block-content {
        margin-left: 24.3%;
        padding: 25px 10px 25px 10px;
        width: 75.7%;
        border-left: 1px solid #f1f1f1;
    }

    #related-products-slider.product-flexslider {
        margin: 0px;
        border: 1px #e5e5e5 solid
    }

    .related-pro .block-title {
        border-bottom: 1px solid #f1f1f1;
        color: #fff;
        font-family: 'Montserrat', sans-serif;
        font-size: 26px;
        font-weight: 600;
        line-height: 28px;
        padding: 25px;
        position: relative;
        text-transform: uppercase;
        background: {{ colorSettings()->brand_color }};
    }

    .related-pro .block-title h2 {
        margin: auto;
        font-size: 24px;
        letter-spacing: 0.5px;
    }

    .related-pro .block-title em {
        font-style: normal;
        font-weight: 300;
    }

    .related-pro .home-block-inner .pretext {
        margin-top: 25px;
        color: #888;
        float: right;
        font-size: 14px;
        font-weight: 300;
        line-height: 24px;
        text-transform: none;
        margin-left: 25px;
        margin-right: 25px;
        letter-spacing: 0.5px;
    }

    .related-pro a.view_more_bnt {
        border: 1px #d1d1d1 solid;
        background: #fff;
        text-transform: uppercase;
        color: #666;
        padding: 8px 15px;
        font-size: 11px;
        letter-spacing: 0.5px;
        font-weight: bold;
        float: left;
        margin-top: 25px;
        margin-left: 25px;
        z-index: 1;
        position: relative;
    }

    .related-pro a.view_more_bnt:hover {
        border: 1px {{ colorSettings()->brand_color }} solid;
        background: {{ colorSettings()->brand_color }};
        color: #fff;
    }

    .related-pro .owl-theme .owl-controls {
        left: -5.4%;
        margin-top: 10px;
        position: absolute;
        text-align: center;
        top: 5%;
        width: 2.5%;
    }

    .related-pro .slider-items-products .owl-buttons a {
        background: inherit;
        display: block;
        height: 35px;
        margin: 0px 0 0 -30px;
        position: absolute;
        top: 50%;
        width: 28px;
        z-index: 5;
        color: #fff;
        border: none;
    }

    .related-pro .slider-items-products .owl-buttons a:hover {
        text-decoration: none;
        background: inherit;
        color: #fff;
        border: none;
    }

    .related-pro .slider-items-products .owl-buttons .owl-prev a {
        border: none;
    }

    .related-pro .slider-items-products .owl-buttons .owl-next {
        right: -20px
    }

    .related-pro .slider-items-products .owl-buttons .owl-prev a:before {
        line-height: 35px;
    }

    .related-pro .slider-items-products .owl-buttons .owl-next a:before {
        line-height: 32px;
    }

    .related-pro .slider-items-products .owl-buttons .owl-prev {
        left: 5px;
    }

    .upsell-pro {
        margin-top: 25px;
        margin-bottom: 20px;
    }

    .upsell-block {
        background-color: #fff;
        margin-bottom: 10px;
        overflow: hidden;
        position: relative;
    }

    .upsell-pro .home-block-inner {
        border-width: 0 !important;
        float: right;
        width: 24.3%;
    }

    .upsell-pro .block-content {
        margin-right: 24.3% !important;
        padding: 25px 10px 25px 10px;
        width: 75.7%;
        border-right: 1px solid #f1f1f1;
    }

    #upsell-products-slider.product-flexslider {
        margin: 0px;
        border: 1px #e5e5e5 solid;
    }

    .upsell-pro .block-title {
        border-bottom: 1px solid #f1f1f1;
        color: #fff;
        font-family: 'Montserrat', sans-serif;
        font-size: 26px;
        font-weight: 600;
        line-height: 28px;
        padding: 25px;
        position: relative;
        text-transform: uppercase;
        background: {{ colorSettings()->sub_color }};
    }

    .upsell-pro a.view_more_bnt {
        border: 1px #d1d1d1 solid;
        background: #fff;
        text-transform: uppercase;
        color: #666;
        padding: 8px 15px;
        font-size: 11px;
        letter-spacing: 0.5px;
        font-weight: bold;
        float: left;
        margin-top: 25px;
        margin-left: 25px;
        z-index: 1;
        position: relative;
    }

    .upsell-pro a.view_more_bnt:hover {
        border: 1px {{ colorSettings()->brand_color }} solid;
        background: {{ colorSettings()->brand_color }};
        color: #fff;
    }

    .upsell-pro .block-title h2 {
        margin: auto;
        font-size: 26px;
        letter-spacing: 0.5px;
    }

    .upsell-pro .block-title em {
        font-style: normal;
        font-weight: 300;
    }

    .upsell-pro .home-block-inner .pretext {
        margin-top: 25px;
        color: #888;
        float: right;
        font-size: 14px;
        font-weight: 300;
        line-height: 24px;
        text-transform: none;
        margin-left: 25px;
        margin-right: 25px;
        letter-spacing: 0.5px;
    }

    .upsell-pro .owl-theme .owl-controls {
        margin-top: 10px;
        position: absolute;
        right: -29.5%;
        text-align: center;
        top: 5%;
        width: 2.5%;
    }

    .upsell-pro .slider-items-products .owl-buttons a {
        background: inherit;
        display: block;
        height: 35px;
        margin: 0px 0 0 -30px;
        position: absolute;
        top: 50%;
        width: 28px;
        z-index: 5;
        color: #fff;
        border: none;
    }

    .upsell-pro .slider-items-products .owl-buttons .owl-prev a {
        border: none;
    }

    .upsell-pro .slider-items-products .owl-buttons .owl-next {
        right: -20px
    }

    .upsell-pro .slider-items-products .owl-buttons .owl-prev a:before {
        line-height: 35px;
    }

    .upsell-pro .slider-items-products .owl-buttons .owl-next a:before {
        line-height: 32px;
    }

    .upsell-pro .slider-items-products .owl-buttons .owl-prev {
        left: 5px;
    }

    .upsell-pro .slider-items-products .owl-buttons a:hover {
        text-decoration: none;
        background: inherit;
        color: #fff;
        border: none;
    }

    .tab-content .data-table .label {
        color: #333;
        display: block;
        text-align: left;
    }

    /*  17.  Global Messages   */

    #toTop {
        color: #fff;
        text-align: center;
        bottom: 60px;
        display: none;
        height: 40px;
        line-height: 40px;
        overflow: hidden;
        position: fixed;
        right: 10px;
        text-decoration: none;
        width: 45px;
        background: url({{ asset('frontend/images/to-top-arrow.png') }}) no-repeat center;
        /* background: url(../images/to-top-arrow.png) no-repeat center; */
        background-color: {{ colorSettings()->brand_color }};
        text-transform: uppercase;
        z-index: 100;
        border-radius: 2px;
    }

    #toTop:hover {
        color: #fff;
        background-color: {{ colorSettings()->brand_color }};
    }

    /*18. bottom banner*/

    .bottom-banner-section {
        margin-bottom: 35px
    }

    .banner-overly {
        background-color: rgba(0, 0, 0, 0.4);
        left: 12%;
        position: absolute;
        right: 12%;
        top: 33%;
        z-index: 1;
        -moz-transition: 0.4s;
        -o-transition: 0.4s;
        -webkit-transition: 0.4s;
        transition: 0.4s;
    }

    .bottom-banner-img {
        width: 100%;
        float: left;
        height: 240px;
        margin: 15px 0px;
        position: relative;
        display: inline-block;
    }

    .bottom-banner-img img {
        max-width: 100%;
    }

    .bottom-banner-img h3 {
        margin-top: 100px;
        margin-bottom: 5px;
        -moz-transition: 0.4s;
        -o-transition: 0.4s;
        -webkit-transition: 0.4s;
        transition: 0.4s;
        text-align: center;
        font-weight: 900;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .bottom-banner-img h6 {
        display: table;
        margin: auto;
        font-size: 13px;
        color: #fff;
        margin-bottom: 20px;
        font-weight: normal;
    }

    .bottom-banner-img .btn {
        border-color: transparent;
        display: table;
        margin: auto;
    }

    .bottom-banner-img .shop-now-btn {
        opacity: 0;
        -moz-transition: 0.4s;
        -o-transition: 0.4s;
        -webkit-transition: 0.4s;
        transition: 0.4s;
        background-color: {{ colorSettings()->brand_color }};
        border-color: {{ colorSettings()->brand_color }};
    }

    .bottom-banner-img .banner-overly {
        height: 100px;
    }

    .bottom-banner-img:hover h3 {
        margin-top: 60px;
        color: #fff;
    }

    .bottom-banner-img:hover .shop-now-btn {
        opacity: 1;
        background-color: {{ colorSettings()->brand_color }};
        border-color: {{ colorSettings()->brand_color }};
        padding: 8px 12px;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    .bottom-banner-img:hover .banner-overly {
        background-color: rgba(0, 0, 0, 0.5);
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
    }

    .bottom-img-info {
        width: 100%;
        z-index: 1;
        position: absolute;
        height: 100%;
        color: #fff;
        text-align: center;
        top: 0px;
    }

    .bottom-banner-img1 {
        margin-bottom: 30px;
        clear: both;
    }

    .bottom-banner-img1 h3 {
        font-size: 20px;
        font-weight: bold;
        letter-spacing: 2px;
        margin-bottom: 5px;
        margin-left: 25px;
        margin-top: 100px;
        text-align: left;
        text-transform: uppercase;
        transition: all 0.4s ease 0s;
    }

    .bottom-banner-img1.last h3 {
        font-size: 30px;
        font-weight: 900;
        letter-spacing: 2px;
        margin-bottom: 5px;
        margin-top: 90px;
        text-align: center;
        text-transform: uppercase;
        transition: all 0.4s ease 0s;
    }

    .bottom-banner-img1 img {
        max-width: 100%;
    }

    .bottom-img-info1 {
        width: 100%;
        z-index: 1;
        position: absolute;
        height: 100%;
        color: #fff;
        text-align: center;
        top: 0px;
    }

    .bottom-banner-img1 h3 {
        margin-top: 100px;
        margin-bottom: 5px;
        -moz-transition: 0.4s;
        -o-transition: 0.4s;
        -webkit-transition: 0.4s;
        transition: 0.4s;
        text-align: left;
        font-weight: bold;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-left: 25px;
        font-size: 20px;
    }

    .bottom-banner-img1.last h3 {
        margin-top: 90px;
        margin-bottom: 5px;
        -moz-transition: 0.4s;
        -o-transition: 0.4s;
        -webkit-transition: 0.4s;
        transition: 0.4s;
        text-align: center;
        font-weight: 900;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-size: 30px;
    }

    .bottom-banner-img1.last h6 {
        margin: 5px auto 18px;
        display: inline-block;
        font-size: 16px;
        letter-spacing: 0.5px;
        font-weight: normal;
    }

    a.shop-now-btn {
        opacity: 1;
        background-color: {{ colorSettings()->brand_color }};
        border-color: {{ colorSettings()->brand_color }};
        padding: 8px 12px;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 0.5px;
        color: #fff;
        margin-top: 20px;
        cursor: pointer;
    }

    .line {
        height: 2px;
        width: 60px;
        margin: auto;
        margin-top: 5px;
        border: 2px solid #fff;
        float: left;
        margin-left: 25px;
    }

    /*---------- 19. Footer ------------ */

    /* newsletter */
    .newsletter {
        margin: 0 0 20px 0;
        padding: 5px 0 0;
        position: relative;
        width: 820px;
        margin: auto;
        margin: auto;
    }

    .newsletter-wrap {
        display: inline-block;
        width: 100%;
    }

    .newsletter-wrap h4 {
        margin-bottom: 3px;
    }

    .newsletter-wrap input[type="text"] {
        background: #FFFFFF;
        width: 450px;
        height: 18px;
        display: inline-block;
        color: #a7a7a7;
        line-height: 22px;
        background-color: #fff;
        border: none;
        padding-left: 10px;
        font-size: 13px;
        border: none;
        border-radius: 3px
    }

    .newsletter-wrap button.subscribe {
        border: 0 none;
        filter: none;
        overflow: hidden;
        padding: 5px 15px;
        cursor: pointer;
        font-weight: 700;
        border-radius: 0px;
        color: #fff;
        border: 1px {{ colorSettings()->brand_color }} solid;
        background: {{ colorSettings()->brand_color }};
        float: right;
        height: 39px;
        border-radius: 3px
    }

    .newsletter-wrap button.subscribe i {
        margin-right: 6px;
        font-weight: 300;
    }

    .newsletter-wrap button.subscribe:hover {
        background: #666;
        border: 1px #666 solid;
    }

    .newsletter-wrap button.subscribe span {
        color: #fff;
        font-size: 12px;
    }

    .newsletter-wrap input[type="text"] {
        background: #FFFFFF;
        height: auto;
        display: inline-block;
        color: #333;
        line-height: 23px;
        background-color: #fff;
        border: 1px #fff solid;
        font-size: 13px;
        border: none;
        padding: 8px 10px;
        width: 64%;
    }

    .newsletter-wrap input:focus {
        border: none;
    }

    footer {
        padding: 0px 0 0;
        overflow: hidden;
        color: #333;
        padding-top: 50px;
        background-color: {{ colorsettings()->footer_background }};
    }

    footer ul {
        margin: 0px;
        padding: 0px;
    }

    footer ul li {
        list-style-type: none;
    }

    footer ul li:last-child {
        border-bottom: none
    }

    footer a {
        padding-top: 7px;
        padding-bottom: 7px;
        font-size: 13px
    }

    .com-add {
        border-bottom: 1px solid #f7f7f7;
        margin-bottom: 10px;
        padding-bottom: 6px;
    }

    footer .footer-inner {
        margin: auto;
        overflow: hidden;
        margin-bottom: 30px;
    }

    footer .footer-inner h3 {
        color: #3D4C4F;
        font-size: 15px;
        text-transform: uppercase;
        margin: 0 0 15px;
        padding: 0 0 10px;
    }

    .footer-column-1 {
        margin-right: 30px;
        margin-bottom: 15px;
        line-height: 18px;
        min-height: 220px;
        padding-right: 30px;
    }

    .footer-column {
        margin-right: 20px;
        margin-bottom: 15px;
        min-height: 220px;
        width: 47%;
    }

    footer .footer-column a:before {
        content: "\f105";
        font-family: FontAwesome;
        font-size: 11px;
        display: inline-block;
        cursor: pointer;
        line-height: 20px;
        margin-right: 5px;
    }

    .footer-column-last {
        margin-right: 0px;
        margin-bottom: 15px;
        padding-left: 0px;
    }

    .footer-column-last li {
        padding: 0px 0 5px;
    }

    .footer-bottom .inner {
        margin: auto;
        padding: 20px 0 15px;
        height: 60px;
    }

    .footer-bottom .inner a {
        color: #0eb1a6
    }

    .footer-bottom .inner .bottom_links a {
        margin-left: 15px;
    }

    .footer-bottom .inner a:hover {
        color: #fff
    }

    footer p {
        font-size: 14px;
        color: #222;
        padding-top: 5px;
        padding-bottom: 5px;
    }

    footer .footer-column a {
        display: inline-block;
        color: ##717171
    }

    footer a {
        line-height: normal;
    }

    footer a:hover {
        color: {{ colorSettings()->brand_color }};
    }

    footer p {
        line-height: 20px;
    }

    footer a {
        color: #aaa
    }

    footer h4 {
        padding: 0 0 10px;
        font-size: 12px;
        margin: 0;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 0.5px
    }

    footer .input-text:focus {
        background: #fff;
        border-color: #464646;
        border: none !important;
    }

    footer a:hover {
        text-decoration: none;
    }

    footer .coppyright {
        color: #999;
        text-align: center;
    }

    .footer-bottom {
        padding: 0px;
        overflow: hidden;
        width: 100%;
        margin: auto;
        padding: 18px 0;
        background-color: #333;
    }

    .footer-bottom a {
        color: #999;
    }

    .footer-bottom .company-links ul {
        padding: 0px;
        text-align: right;
    }

    .footer-bottom .company-links li {
        display: inline-block;
        margin-left: 20px;
        list-style: none;
        border-bottom: none
    }

    .add-icon:before {
        content: "\f041";
        font-family: FontAwesome;
        font-size: 15px;
        color: #fff;
        height: 35px;
        width: 35px;
        line-height: 35px;
        display: inline-block;
        float: left;
        font-style: normal;
        text-align: center;
        margin-right: 10px;
        border-radius: 30px;
        border: 2px #aaa solid;
        border-radius: 25px
    }

    .email-footer {
        overflow: hidden;
        margin-top: 12px;
        font-size: 14px;
    }

    .email-footer a {
        font-size: 14px;
        line-height: 35px;
        color: #aaa
    }

    .phone-footer {
        overflow: hidden;
        font-size: 14px;
        line-height: 35px;
        color: #aaa;
        margin-bottom: 10px;
        margin-top: 12px;
    }

    footer address {
        display: block;
        margin: auto;
        font-style: normal;
        line-height: 35px;
        color: #777;
        padding-top: 5px;
        margin-top: 10px;
        text-align: center;
        margin-bottom: 0px;
        font-size: 13px;
        border: none;
        letter-spacing: 0.5px
    }

    footer address i {
        line-height: 33px !important;
        display: inline-block !important;
        text-align: center;
        margin-left: 20px !important;
        border-radius: 25px;
        margin-right: 5px !important;
        vertical-align: top
    }

    footer address .fa {
        font-size: 16px
    }

    footer address .fa-envelope {
        font-size: 14px
    }

    footer address .fa-mobile {
        font-size: 19px
    }

    footer address .icon-location-arrow:before {
        margin-left: 0px;
        margin-right: 0px;
        color: #333
    }

    footer address .icon-mobile-phone:before {
        margin-left: 0px;
        margin-right: 0px;
        color: #777
    }

    footer address .icon-envelope:before {
        margin-left: 0px;
        margin-right: 0px;
        color: #777
    }

    .email-icon:before {
        content: "\f0e0";
        font-family: FontAwesome;
        font-size: 14px;
        color: #777;
        height: 35px;
        width: 35px;
        margin-right: 5px;
        line-height: 35px;
        display: inline-block;
        float: left;
        font-style: normal;
        text-align: center;
        margin-right: 10px;
        border: 2px #aaa solid;
        border-radius: 25px
    }

    .phone-icon:before {
        content: "\f095";
        font-family: FontAwesome;
        font-size: 15px;
        color: #777;
        height: 35px;
        width: 35px;
        margin-right: 5px;
        line-height: 35px;
        display: inline-block;
        float: left;
        font-style: normal;
        text-align: center;
        margin-right: 10px;
        border: 2px #aaa solid;
        border-radius: 25px
    }

    .footer-bottom .bottom_links li {
        margin-left: 20px
    }

    .custom-footer-links li {
        margin: 7px 0
    }

    .footer-col-right {
        width: 58%;
        float: left
    }

    .contact-info {
        text-align: center;
    }

    ul.contact-info span {
        font-size: 13px !important;
        font-weight: 900 !important;
        color: #666;
        float: left
    }

    ul.contact-info li {
        margin-bottom: 8px;
        padding-bottom: 8px;
        display: inline-block;
    }

    ul.contact-info li.last {
        float: left;
        margin-bottom: 0px;
        border-bottom: 0px #2D3D4C solid
    }

    #container_newsletter {
        width: 100%;
        padding: 7px 0 7px 0;
        background: #f7f7f7;
        margin: 36px 0 22px 0
    }

    #text_container_news {
        width: 205px;
        height: 34px;
        float: left;
        margin-left: 30px;
        text-transform: uppercase;
        font-family: arial;
        font-size: 10px;
        color: #647177;
        padding-top: 7px
    }

    #text_container_news span {
        color: #959a9c;
        font-size: 9px
    }

    #container_form_news {
        position: relative;
        z-index: 0
    }

    #container_form_news2 input[type="submit"] {
        cursor: pointer;
        border: 0;
        background: #FFFFFF;
        width: 20px;
        height: 12px;
        display: block;
        position: relative;
        color: #a7a7a7;
        font-size: 10px;
        line-height: 20px;
        top: -18px;
        right: -160px
    }

    #container_form_news .validation-advice {
        top: 42px;
        left: 10px;
    }

    .footer-box {
        width: 1240px;
        margin: auto;
    }

    footer ul span {
        display: inline-block;
        font-size: 20px;
        font-weight: 300;
        line-height: 15px;
        padding-right: 3px;
    }

    address {
        display: block;
        margin: auto;
        font-style: normal;
        line-height: 21px;
        color: #999;
        padding-top: 10px;
        margin-top: 10px;
        text-align: left;
        padding-bottom: 15px;
        border-bottom: 1px #eaeaea solid;
        margin-bottom: 15px
    }

    .footer-logo {
        text-align: left;
        margin: 10px 0;
    }

    .social-section {
        padding: 0px;
        overflow: hidden;
        width: 100%;
        margin: auto;
        background: #191919
    }

    .social-section .inner {
        margin: auto;
        overflow: hidden;
        margin-bottom: 20px;
        padding-top: 20px;
    }

    .social {
        overflow: hidden
    }

    .social a {
        border-radius: 20px;
        color: #666;
        width: 40px;
        height: 40px;
        line-height: 40px;
        border: 1px #333 solid
    }

    .social a:hover {
        color: #fff;
    }

    .social .fb a {
        font-size: 18px;
        display: inline-block;
        text-align: center;
        padding: 0;
    }

    .social .fb a:hover {
        background: {{ colorSettings()->brand_color }};
    }

    .social h4 {
        margin: 28px 0 0px 0px;
    }

    .social ul {
        margin: 0;
        list-style: none;
    }

    .social ul li {
        margin-right: 10px;
        border: none
    }

    .social ul li:last-child {
        border-bottom: none
    }

    .social a {
        transition: background 400ms ease-in-out;
        -webkit-transition: background 400ms ease-in-out;
        -moz-transition: background 400ms ease-in-out;
        -o-transition: background 400ms ease-in-out;
    }

    .payment-accept {
        color: #333333;
        font-size: 14px;
        margin: auto;
        overflow: hidden;
        margin-bottom: 20px;
        padding-top: 22px;
    }

    .payment-accept img {
        margin-right: 10px;
        opacity: 0.7
    }

    .payment-accept img:hover {
        opacity: 1
    }

    .glyphicon-remove1:before {
        content: "\e014"
    }

    .glyphicon-remove1 {
        right: 8px;
    }

    .mm-toggle-wrap {
        display: none;
    }

    .product-shop .social {
        margin-top: 20px;
    }

    .product-shop .social a {
        border: 1px #e5e5e5 solid;
        border-radius: 0px;
        color: #888;
        width: 40px;
        height: 40px;
        line-height: 40px;
        background: #fff
    }

    .product-shop .social a:hover {
        color: #fff;
    }

    .product-shop .social ul {
        padding: 0px;
        margin: 0px
    }

    .product-shop .social ul li {
        display: inline-block;
        margin: 0 7px 0 0;
    }

    .product-shop .social ul li:last-child {
        border: none;
    }

    .sendfriend-product-send .login_page .form-list .field {
        float: left;
        width: 47%;
        margin-right: 10px;
    }

    .sendfriend-product-send .login_page textarea {
        width: 95%;
    }

    .product-options-bottom .sharing-links {
        display: none;
    }

    .add-to-box .add-to-cart,
    .product-options-bottom .add-to-cart {
        margin: 0;
    }

    .product-view .product-shop .grouped-items-table .price {
        font-size: 18px;
    }

    #product-options-wrapper .options-list .price {
        font-size: 12px;
    }

    .rhs4-banner-block {
        display: none;
    }

    .rhs4-block {
        display: none;
    }

    .noitem {
        padding: 10px;
        text-align: center;
        font-size: 11px;
    }

    .noitem:before {
        content: '\f07a';
        font-family: FontAwesome;
        font-size: 36px;
        color: #ccc;
        width: 100%;
        display: block;
    }

    .validation-advice {
        color: #FF0000;
        position: absolute;
    }

    .form-list .validation-advice {
        color: #FF0000;
        position: relative;
    }

    .mgkosc-login-input-box .validation-advice {
        color: #FF0000;
        position: relative;
    }

    .footer-top .newsletter .validation-advice {
        left: 106px;
    }

    /*20. hot deal*/
    .timer-grid {
        overflow: hidden;
        display: inline-block;
    }

    .timer-grid .box-time-date {
        background: #fbfbfb;
        font-size: 9px;
        color: #808080;
        min-width: 55px;
        min-height: 50px;
        text-align: center;
        margin-top: 7px;
        font-weight: 700;
        text-transform: uppercase;
        border-radius: 0;
        border: 1px #e8e8e8 solid;
        display: block;
    }

    .timer-grid .day.box-time-date {
        background: {{ colorSettings()->brand_color }};
        color: #fff;
        border: 1px {{ colorSettings()->brand_color }} solid;
    }

    .timer-grid .day.box-time-date span {
        color: #fff;
    }

    .timer-grid .box-time-date span {
        display: block;
        font-size: 16px;
        color: #3f3f3f;
        margin-top: 6px;
    }

    .box-timer {
        bottom: 15px;
        left: 15px;
        text-align: center;
        margin-top: 0;
        position: absolute;
        top: 15%;
    }

    .hot-deal {
        overflow: hidden;
    }

    .hot-deal .products-grid .item button.button {
        background: {{ colorSettings()->brand_color }};
        border: 1px solid {{ colorSettings()->brand_color }};
        color: #fff;
    }

    .hot-deal .products-grid .item {
        margin-top: auto;
        padding: 15px;
        border: 1px #999 solid;
    }

    .hot-deal .item-info {
        padding-bottom: 11px;
    }

    .hot-deal .products-grid .item .item-inner .item-img {
        margin: 0px auto 0;
    }

    #offer-banner {
        margin-bottom: 0px;
        margin-top: 15px;
    }

    /* 21. Shopping Cart Table */
    .cart .totals table th,
    .cart .totals table td {
        padding: 5px;
        border: none;
        background: none;
        border: medium none;
        box-shadow: none;
        color: #333;
    }

    .cart .totals table th,
    .cart .totals table td strong {
        font-weight: 700;
        font-size: 12px;
    }

    .cart-collaterals {
        margin-top: 20px;
        margin-bottom: 30px;
    }

    .cart-collaterals .col2-set {
        float: left;
        margin: 0;
        padding: 0;
    }

    .cart-collaterals .totals {}

    .totals h3 {
        border-bottom: 1px solid #ddd;
        color: #000;
        font-size: 14px;
        margin-bottom: 5px;
        padding: 10px 0;
    }

    .cart-collaterals .col2-set .col-2 {
        width: 320px;
    }

    .totals .inner {
        padding: 4px 0px 15px 0px;
        background-color: #fff;
        margin-top: 0px;
    }

    #shopping-cart-totals-table {
        float: right;
        width: 100%;
        padding-bottom: 8px;
    }

    #shopping-cart-totals-table .price {
        font-size: 18px;
        color: #333
    }

    #shipping-zip-form p {
        margin: 2px 0 4px;
    }

    #shipping-zip-form .form-list input.input-text {
        width: 90%;
    }

    .discount {
        margin: auto;
    }

    .discount label {
        font-weight: normal;
    }

    .shipping {
        margin: auto;
    }

    .shipping .form-list select {
        width: 90%;
        background-color: #fff;
        border: 1px #eee solid;
        padding: 8px 10px;
    }

    .shipping .form-list select:focus {
        background-color: #fff;
        border: 1px #ddd solid;
        padding: 8px 10px;
    }

    .shipping .form-list input.input-text {
        width: 95%;
    }

    .cart-collaterals h3 {
        font-size: 14px;
        color: #000;
        margin-bottom: 15px;
        border-bottom: 1px solid #e5e5e5;
        padding: 10px 0;
        margin-top: auto;
        font-weight: 600;
        text-transform: uppercase;
    }

    .buttons-set11 {
        margin-top: 10px;
    }

    input.input-text,
    select,
    textarea {
        background-color: #fff;
        border: 1px #eee solid;
        padding: 8px 10px;
        outline: none;
        color: #333;
    }

    #wishlist-table textarea {
        padding: 8px 10px;
        width: 100%;
    }

    input.input-text:focus,
    select:focus,
    textarea:focus {
        background-color: #fff;
        border: 1px solid #ddd;
        padding: 8px 10px;
        outline: none;
    }

    input#coupon_code {
        margin: 8px 0;
        width: 90%;
    }

    #shopping-cart-table {
        background-color: #FFFFFF;
        text-align: left;
        border: none;
    }

    #shopping-cart-table input.qty {
        background: #FFFFFF;
        border: 1px solid #e5e5e5;
        font-size: 15px;
        font-weight: normal;
        margin: 0;
        outline: medium none;
        padding: 8px;
        width: 50px;
        text-align: center;
    }

    #shopping-cart-table a.remove-item {
        background-color: #fff;
        background-image: none;
        color: #333;
        cursor: pointer;
        padding: 0px;
        border-radius: 0px;
        cursor: pointer;
        text-decoration: none;
        float: left;
        transition: all 0.3s linear;
        border: none;
    }

    #shopping-cart-table a.remove-item span {
        display: none
    }

    #shopping-cart-table a.remove-item:before {
        content: "\f014";
        font-family: FontAwesome;
        font-size: 14px;
        font-weight: normal;
    }

    #shopping-cart-table a.remove-item:hover {
        padding: 0px;
        color: #f23534;
    }

    #shopping-cart-table .remove-item span span {
        display: none;
    }

    #shopping-cart-table dl {
        margin: 0;
        padding: 0;
    }

    #shopping-cart-table .item-options dd {
        color: #CCCCCC;
        margin: 0;
    }

    #shopping-cart-table h4 {
        font-size: 12px;
        font-weight: 900;
        font-family: Arial, Helvetica, sans-serif;
        text-transform: uppercase
    }

    #shipping-zip-form .form-list label {
        display: block;
        margin-top: 8px
    }

    #shopping-cart-table .cart-price .price {
        font-size: 12px;
        font-weight: bold;
    }

    #shopping-cart-table td.image {
        width: 75px;
    }

    .cart-table .btn-continue {
        float: left;
    }

    .cart-table .btn-update,
    .cart-table .btn-empty {
        float: right;
        margin-left: 8px;
    }

    .cart .product-name a {
        font-size: 14px;
        color: #333;
    }

    #shopping-cart-table .data-table td {
        vertical-align: middle;
    }

    .checkout a {
        text-decoration: underline;
        color: #33c5fb;
    }

    .checkout {
        color: #666666;
        padding-top: 5px;
        text-align: center;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    button.button.btn-proceed-checkout {
        background: {{ colorSettings()->sub_color }};
        padding: 15px 5px;
        color: #fff;
        width: 100%;
        border: none;
        margin-bottom: 15px;
    }

    button.button.btn-proceed-checkout:hover {
        background: {{ colorSettings()->brand_color }};
        border: none;
    }

    button.button.btn-proceed-checkout:before {
        content: "\f00c";
        font-family: FontAwesome;
        font-size: 20px;
        padding-right: 5px;
        font-weight: 300;
    }

    button.button.btn-proceed-checkout span {
        font-size: 18px;
        font-weight: 600;
    }

    .crosssel {
        margin: 12px 0px;
    }

    .crosssel .new_title.center {
        margin-bottom: 10px;
    }

    .cart {
        background: #fff;
        margin: 0 0px 20px;
        overflow: hidden;
    }

    .crosssel {
        background: #fff;
        margin: 40px 0px 20px;
        overflow: hidden;
    }

    .crosssel .new_title {
        border-bottom: 1px solid #e5e5e5;
        padding-bottom: 15px;
        padding-left: 25px;
        padding-top: 5px;
        margin: 0px -25px 25px;
    }

    /* 22. Wishlist Table */
    #wishlist-table .product-name {
        font-size: 15px;
        line-height: normal;
        margin: 0;
        text-align: left;
        margin-bottom: 8px;
    }

    #wishlist-table .product-name a {
        color: #333;
    }

    #wishlist-table input.qty {
        background: #FFFFFF;
        padding: 5px;
        text-align: center;
        border: 2px #efefef solid;
        width: 50px;
    }

    #wishlist-table input.qty:focus {
        padding: 5px;
        border: 2px #ddd solid;
    }

    #co-shipping-method-form {
        padding: 0 12px;
        margin-bottom: 15px;
    }

    #wishlist-table .cart-cell .btn-cart {
        display: block !important;
        margin: 10px 0 !important;
    }

    #wishlist-table a.remove-item {
        padding: 6px 11px;
        color: #333;
        background-color: #fff;
        border-radius: 0px;
        border: none;
        transition: all 0.3s linear;
        text-decoration: none;
    }

    #wishlist-table a.remove-item:before {
        content: "\f014";
        font-family: FontAwesome;
        font-size: 16px;
    }

    #wishlist-table a.remove-item:hover {
        padding: 6px 11px;
        color: #f23534;
        background-color: #fff;
        border: none;
        transition: all 0.3s linear;
    }

    #wishlist-table .remove-item span span {
        display: none;
    }

    #wishlist-table button.button.remove-item {
        text-decoration: none;
        float: none;
        background: none;
        font-family: 'FontAwesome';
        font-size: 16px;
        text-transform: uppercase;
        display: inline;
        margin-bottom: 8px;
        padding: 0;
        color: #fff;
        background: #333;
        border-radius: 2px;
        font-size: 16px;
        height: 30px;
        line-height: 20px;
        padding: 4px;
        text-align: center;
        width: 30px;
        margin-left: 5px;
    }

    #wishlist-table button.button.remove-item:hover {
        text-decoration: none;
        float: none;
        background: none;
        font-family: 'FontAwesome';
        font-size: 16px;
        text-transform: uppercase;
        display: inline;
        margin-bottom: 8px;
        padding: 0;
        color: #fff;
        background: #f23534;
        border-radius: 2px;
        font-size: 16px;
        height: 30px;
        line-height: 20px;
        padding: 4px;
        text-align: center;
        width: 30px;
    }

    #wishlist-table button.button.btn-cart {
        padding: 0px;
        color: #222;
        background-color: #fff;
        border: none;
        transition: all 0.3s linear;
        margin: 0 0 10px !important;
        font-weight: 300;
    }

    #wishlist-table button.button.btn-cart span {
        display: none;
    }

    #wishlist-table a.remove-item span {
        display: none;
    }

    #wishlist-table button.button.btn-cart:hover {
        padding: 0px;
        color: #f23534;
        background-color: #fff;
        border: none;
        transition: all 0.3s linear;
    }

    #wishlist-table button.button.btn-cart:before {
        content: "\f07a";
        font-family: 'FontAwesome';
        font-size: 16px
    }

    .my-wishlist .buttons-set2 {
        margin-top: 10px;
    }

    .my-wishlist .buttons-set2 .btn-share {
        float: right;
        margin-left: 8px;
    }

    .my-wishlist .buttons-set2 .btn-update {
        float: right;
        margin-right: 2px;
    }

    .my-wishlist .buttons-set2 .btn-add {
        float: right;
        margin-left: 8px;
    }

    /* 23. Dashboard */

    .dashboard {
        margin-top: 10px
    }

    .dashboard .welcome-msg {
        text-align: left;
        padding: 0px 0 5px;
        color: #333;
        margin: auto;
    }

    .dashboard .welcome-msg strong {
        font-weight: 700;
        font-size: 15px;
    }

    .box-account {
        margin-top: 25px;
    }

    .box-account h5 {
        font-weight: 600;
    }

    .box-account .page-title {
        margin: 0 !important;
        padding: 0;
        background: none;
        border-bottom: none !important;
    }

    .box-account .page-title h2 {
        font-size: 14px;
        text-transform: none;
        font-weight: bold;
        letter-spacing: normal
    }

    .box-account address {
        color: #333;
        text-align: left;
        border-bottom: none;
    }

    .box-account .col2-set a {
        text-decoration: underline
    }

    .col2-set .col-1 {
        border: 0 solid #336600;
        padding-bottom: 0;
        padding-top: 0;
        text-align: left;
        width: 48%;
        display: inline-block;
    }

    .col2-set .col-2 {
        text-align: left;
        width: 48%;
        display: inline-block;
    }

    .recent-orders .title-buttons {
        margin-bottom: 8px;
        text-align: right;
    }

    .recent-orders .price {
        font-size: 13px;
        font-weight: 600;
    }

    .recent-orders .title-buttons strong {
        color: #333;
        float: left;
        font-size: 14px;
        font-weight: 700;
    }

    /* 24. checkout pages */


    .block-progress dl {
        border-top: none !important
    }

    .block-progress dt {
        font-weight: normal;
        text-transform: none;
        padding: 10px 0;
        font-size: 12px;
    }

    .block-progress dt.complete,
    .block-progress dd.complete {
        font-size: 13px;
        padding: 0;
        margin: 0;
    }

    .block-progress dt.complete a,
    .block-progress dd.complete a {
        font-size: 12px;
        font-weight: normal;
        text-decoration: underline;
        text-transform: none;
        color: {{ colorSettings()->brand_color }};
    }

    .block-progress dt.complete a:hover,
    .block-progress dd.complete a:hover {
        font-size: 12px;
        font-weight: normal;
        text-decoration: underline;
        text-transform: none;
        color: #333;
    }

    .block-progress dt.complete {
        margin: 0 0 8px 0;
    }

    .block-progress dd {
        border: 0px solid #ddd;
        margin: 0 0 6px;
        padding: 0px 0px 8px !important;
    }

    .one-page-checkout ul {
        padding: 0px;
        list-style: none;
    }

    .one-page-checkout .active .step-title h3 {
        color: {{ colorSettings()->brand_color }};
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    .one-page-checkout .step-title h3 {
        margin: 0 0 0 55px;
        text-align: left;
        line-height: 35px;
        font-size: 14px;
        color: #333;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .one-page-checkout .active .step-title {
        cursor: default;
        font-size: 14px;
        padding-top: 0px;
        text-align: left;
        line-height: 32px;
        font-family: 'Roboto', sans-serif;
        border-top: none;
    }

    .one-page-checkout .step {
        padding: 10px 10px 10px 55px;
        background-color: #FFFFFF;
    }

    select#billing-address-select {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        background: #fff;
        border: 1px solid #eee;
        outline: none;
        color: #666;
        margin-bottom: 8px;
    }

    .one-page-checkout label {
        margin-right: 5px;
    }

    .one-page-checkout p.require {
        font-size: 11px;
    }

    select#billing-address-select:focus {
        background: #FFFFFF;
        border: 1px solid #DDDDDD;
        color: #333333;
        outline: medium none;
        vertical-align: middle;
    }

    select#shipping-address-select {
        width: 60%;
        padding: 10px;
        margin-top: 5px;
        background: #f0f0f0;
        border: 1px solid #f0f0f0;
        outline: none;
        color: #aaa;
    }

    select#shipping-address-select:focus {
        background: #FFFFFF;
        border: 1px solid #DDDDDD;
        color: #333333;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
        outline: medium none;
        padding: 9px 7px 10px;
        vertical-align: middle;
    }

    .one-page-checkout {
        position: relative;
        margin-bottom: 12px;
        list-style: none;
        padding: inherit;
        padding: 0;
        margin-top: 18px;
    }

    .one-page-checkout input[type=checkbox] {
        display: inline-block;
    }

    .one-page-checkout li.section {
        border-bottom: 0;
        margin-bottom: 8px;
        overflow: hidden;
    }

    .one-page-checkout .step-title {
        text-align: right;
        padding: 7px 0;
    }

    .one-page-checkout .step-title .number {
        float: left;
        line-height: 15px;
        font-size: 15px;
        color: #333;
        padding: 10px 13px;
        background-color: #fff;
        border: 2px solid #eaeaea;
        font-family: 'Roboto', sans-serif;
        font-weight: bold;
    }

    .one-page-checkout .active .step-title .number {
        background: #222;
        border: 2px solid #222;
        color: #fff;
        padding: 10px 12px;
        font-weight: bold;
    }

    .one-page-checkout .step .col2-set {
        padding: 0;
    }

    .one-page-checkout .order-review {
        overflow: hidden;
    }

    #checkout-review-table .data-table {
        border-bottom: none;
    }

    #checkout-step-login .col2-set .col-2 {
        background-color: #fff;
        float: left;
        padding: 0px;
        width: 45%;
        min-height: 270px;
    }

    #checkout-step-login .col2-set .col-1 {
        float: right;
        padding: 0 0 0 40px;
        width: 45%;
        min-height: 270px;
        border-left: 1px #e4e4e4 solid;
    }

    #opc-login h2 {
        border-bottom: 0px solid #E4E4E4;
        padding-bottom: 8px;
        font-weight: bold;
        margin-bottom: auto;
        margin-top: auto;
        font-size: 12px;
    }

    .one-page-checkout .buttons-set .f-right {
        margin-top: 13px;
        color: #626262;
        font-size: 12px;
    }

    #opc-login input {
        color: #626262;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 13px;
        vertical-align: middle;
    }

    #opc-login .col2-set .col-2 p {
        text-align: left;
    }

    #opc-login h4 {
        clear: left;
        float: none;
        font-size: 13px;
        margin-right: 5px;
    }

    #opc-login li.control label {}

    .form-list li.control input.radio,
    .form-list li.control input.checkbox {
        margin: 0 8px 0 0;
    }

    input.radio {
        display: inline-block;
        margin: 0 5px 0 0;
        vertical-align: middle;
    }

    .form-list {
        list-style: none outside none;
        margin: 0;
        padding: 0;
    }

    form-list label.required em {
        font-style: normal;
    }

    .required em {
        color: #ff0000;
    }

    .form-list label {
        color: #333;
        font-weight: 600;
    }

    .label {
        color: #333;
        display: inline-block;
        font-size: 12px;
        text-align: left;
        white-space: normal;
    }

    #product-options-wrapper .options-list .price {
        font-size: 12px;
    }

    .product-options-bottom .sharing-links {
        display: none;
    }

    .messages li {
        margin: 5px 0 10px !important;
    }

    .success-msg {
        background-color: #eff5ea;
        border-color: #446423;
        color: #3d6611;
    }

    .error-msg,
    .success-msg,
    .note-msg,
    .notice-msg {
        background-position: 10px 9px !important;
        background-repeat: no-repeat !important;
        border-style: solid !important;
        border-width: 1px !important;
        font-size: 11px !important;
        font-weight: 900 !important;
        padding: 8px !important;
    }

    .one-page-checkout h3 {
        font-size: 16px;
        margin: 0;
    }

    #checkout-review-submit ol.checkout-agreements {
        list-style: none outside none;
    }

    #checkout-review-submit .checkout-agreements {
        margin-bottom: 10px !important;
    }

    #checkout-review-submit .checkout-agreements {
        margin-bottom: 10px !important;
    }

    .checkout-agreements {
        border: 1px solid #eaeaea;
        margin-top: 20px;
        padding: 10px;
    }

    #review-buttons-container .btn-checkout {
        float: right;
        margin-top: 10px;
    }

    .multiple-checkout h3 {
        font-size: 14px;
        margin: auto;
    }

    .error-msg {
        background-color: #faebe7;
        border-color: #f16048;
        color: #df280a;
    }

    /* 25. Compare Table*/

    .compare-table .price-box {
        padding-bottom: 15px;
    }

    .compare-table .product-shop-row td {
        position: relative;
        text-align: center;
    }

    .compare-table .btn-cancel {
        position: absolute;
        right: 0;
        top: 5px;
    }

    .compare-table .product-name {
        color: #000;
        font-family: "Open Sans", sans-serif;
        font-size: 14px;
        overflow: hidden;
        text-decoration: none;
        text-overflow: ellipsis;
        white-space: nowrap;
        padding: 5px 0 10px;
    }

    a.button.wishlist {
        text-transform: uppercase;
        font-size: 11px;
        font-weight: bold;
        margin-bottom: 15px;
        display: inline-block;
        border: 1px #ccc solid;
        padding: 9px 12px
    }

    .simple-list li a {
        color: #333;
    }

    .styled-list {
        position: relative;
        margin: 0 0 20px;
        padding: 0;
        list-style: none;
        line-height: 18px
    }

    .styled-list li {
        margin-bottom: 6px;
        padding: 0
    }

    .styled-list li span {
        display: block;
        overflow: hidden
    }

    .styled-list li i {
        width: 16px;
        float: left;
        margin-right: 10px;
        text-align: center;
        color: #000;
        font-size: 14px
    }

    .styled-list li:before {
        color: #ee3b27;
        float: left
    }

    .styled-list .circle li,
    .styled-list.circle li {
        text-indent: 0;
        margin-left: 0;
        padding-left: 0;
        list-style: none
    }

    .styled-list .circle li:before,
    .styled-list.circle li:before {
        content: "\25CF";
        margin: -1px 10px 0 0;
        font-size: 12px
    }

    .styled-list.arrow>li {
        margin-left: -15px;
        padding-left: 35px
    }

    .styled-list.arrow>li:before {
        margin: -1px 8px 0 -20px;
        content: '\f00c';
        font-family: FontAwesome;
        font-size: 1em
    }

    .styled-list ul {
        margin-left: 0;
        padding: 5px 0 0
    }

    .styled-list ul.circle li:before {
        content: "\25CB";
        color: #ee3b27
    }

    .grey-container {
        background: #f2f2f2;
        padding-top: 35px;
        padding-bottom: 35px;
        color: #000
    }

    /* 26. Multiple Addresses Checkout */

    /* State Bar */
    .state_bar {
        overflow: hidden;
        background-color: #FFFFFF;
        padding: 10px 0 25px;
        margin-bottom: 15px;
    }

    .checkout-progress {
        padding-top: 0px;
        margin: 0px 0 0px;
        overflow: hidden;
        padding: 0;
        list-style: none;
    }

    .checkout-progress li {
        width: 19.9%;
        text-align: center;
        color: #999;
        margin-right: 0px;
        padding: 5px 7px;
        text-transform: uppercase;
        background-color: #fff;
        border-bottom: 1px solid #ddd;
        text-transform: uppercase;
        font-size: 12px;
        font-weight: bold;
        display: inline-block;
        margin-right: -3px;
    }

    .checkout-progress li.last {
        margin-right: 0;
    }

    .checkout-progress li.active {
        background-color: #fff;
        border-bottom: 1px solid {{ colorSettings()->sub_color }};
        color: {{ colorSettings()->sub_color }};
    }

    /* Multiple Addresses Checkout */
    #multiship-addresses-table input.input-text {
        background-color: #FFF;
        padding: 5px;
        border: 2px solid #ddd;
        text-align: center;
        margin: auto;
        font-weight: 600;
        color: #333;
    }

    #multiship-addresses-table .btn-remove {
        background-color: #fff;
        background-image: none;
        color: #333;
        cursor: pointer;
        padding: 12px 15px;
        border-radius: 2px;
        cursor: pointer;
        text-decoration: none;
        border: 1px solid #fff;
        float: left;
        transition: all 0.3s linear;
        line-height: 12px;
    }

    #multiship-addresses-table .btn-remove:before {
        content: "\f014";
        font-family: FontAwesome;
        font-size: 14px;
    }

    #multiship-addresses-table .btn-remove:hover {
        background-image: none;
        padding: 12px 15px;
        color: #f23534;
    }

    .multiple_addresses .buttons-set {
        margin: 0px 0;
    }

    .multiple-checkout {
        position: relative;
    }

    .multiple-checkout .grand-total {
        font-size: 1.5em;
        text-align: left;
    }

    .multiple-checkout .grand-total big {
        font-size: 16px;
    }

    #multiship-addresses-table {
        margin-top: 5px;
        margin-bottom: 12px;
    }

    #multiship-addresses-table tfoot tr .last {
        border-top: none;
    }

    .addresses {
        margin: 15px 0;
    }

    #multiship-addresses-table h4 {
        font-size: 13px;
        margin: 0;
        line-height: 18px;
    }

    #multiship-addresses-table h4 a {
        color: #333;
    }

    .multiple_addresses {
        background: #fff;
        margin: 0 0px 20px;
        overflow: hidden;
        position: relative;
        z-index: 0;
    }

    .multiple_addresses .title-buttons {
        text-align: right;
    }

    .checkout-multishipping-success .multiple-checkout .buttons-set .button {
        float: left;
    }

    .multiple-checkout .buttons-set .button {
        float: right;
    }

    .page-title_multi {
        display: inherit;
    }

    .addresses .title-buttons {
        text-align: right;
    }

    .page-title_multi h2 {
        font-size: 22px;
        float: left;
        color: #000;
        font-weight: 600;
        margin-top: auto;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    .multiple-checkout .grand-total {
        font-size: 1.5em;
        text-align: right;
    }

    .multiple-checkout .grand-total .price {
        font-size: 22px;
    }

    /* 27. Account Login  */
    .account-login {
        background: #fff;
        margin: 15px 0px 20px;
        overflow: hidden;
    }

    .account-login .page-title {
        border-bottom: 1px solid #e5e5e5;
        letter-spacing: 0.5px;
        position: relative;
        text-transform: uppercase;
    }

    .account-login .form-list input.input-text {
        background: #fff;
        border: 1px solid #f0f0f0;
        padding: 10px;
        width: 80%;
        margin-top: 5px;
        outline: none;
        margin-bottom: 10px;
    }

    .account-login .col2-set .col-1 {
        float: left;
        padding-bottom: 0;
        padding: 0px;
        text-align: left;
        width: 49%;
        min-height: 362px;
        background: #fff;
        border-right: 1px solid #eaeaea;
        padding: 25px 25px 0 0;
        margin-bottom: 15px;
    }

    .account-login .col2-set .col-2 {
        float: right;
        padding-bottom: 0;
        padding: 0 0 0 55px;
        text-align: left;
        width: 48%;
        background: #fff;
        padding: 25px 0;
        margin-bottom: 25px;
    }

    .account-login strong {
        font-size: 14px;
        color: #000;
        margin-bottom: 15px;
        font-family: 'Roboto', sans-serif;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .account-login .content {
        margin-top: 8px;
        padding-top: 12px;
    }

    .account-login .content p {
        margin-bottom: 10px;
        font-size: 13px;
    }

    .account-login .content p.required {
        font-size: 12px;
    }

    .account-login .content .form-list label {
        font-size: 13px;
        color: #333;
        margin-bottom: 5px;
        font-weight: 600;
    }

    .required {
        color: #ff0000;
    }

    /* 28. 404 Page */

    .content-wrapper {
        margin: auto;
        text-align: center;
        background-color: #fff;
        padding-top: 50px;
        padding-bottom: 80px;
    }

    .page-not-found h2 {
        color: #da2c2a;
        font-size: 160px;
        font-weight: bold;
        line-height: 1;
        margin-bottom: 15px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .page-not-found h3 {
        color: #333;
        font-size: 20px;
        font-weight: normal;
        margin-bottom: 4em;
        text-transform: none;
        font-family: 'Roboto', sans-serif;
    }

    .page-not-found h3 img {
        margin-right: 8px;
        vertical-align: text-bottom;
    }

    .page-not-found p {
        color: #666;
        font-size: 1.33em;
        line-height: 1.5em;
        margin-bottom: 0.75em;
    }

    .page-not-found .btn-home {
        background-color: {{ colorSettings()->brand_color }};
        border: medium none;
        border-radius: 2px 2px 2px 2px;
        color: #fff;
        cursor: pointer;
        font-size: 15px;
        padding: 14px 35px;
        text-decoration: none;
        height: auto;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    .page-not-found .btn-home span {
        margin: 0;
        padding: 0px;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        font-family: 'Montserrat', sans-serif;
    }

    /* 38. Delivery page*/


    .delivery h3 {
        margin-top: auto;
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        font-weight: bold;
        text-transform: uppercase;
    }

    .grey-container h3 {
        margin-top: auto;
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        font-weight: bold;
        text-transform: uppercase;
    }

    .grey-container .button.more-info {
        margin-top: 10px;
        display: inline-block;
        margin-bottom: 10px;
    }

    .accordion-faq {
        text-align: left;
        position: relative
    }

    .accordion-faq .panel {
        border-radius: 0;
        box-shadow: none;
        -webkit-box-shadow: none
    }

    .accordion-faq .panel .panel-heading {
        padding: 0;
        color: #fff;
        border-radius: 0 !important;
        background: #333
    }

    .accordion-faq .panel-heading a {
        display: block;
        position: relative;
        background: #f8f8f8;
        color: #333;
        padding: 10px 5px 12px 15px;
        border-radius: 0;
        border-right: 48px solid {{ colorSettings()->brand_color }};
        min-height: 50px;
        font-weight: 600;
    }

    .accordion-faq .panel-heading a:hover {
        text-decoration: none
    }

    .accordion-faq .panel:last-child {
        box-shadow: none;
        border-bottom: none
    }

    .accordion-faq .arrow-down,
    .accordion-faq .arrow-up {
        position: absolute;
        display: block;
        width: 20px;
        height: 20px;
        font-size: 20px;
        top: 50%;
        margin-top: -15px;
        right: -36px;
        color: #fff;
    }

    .accordion-faq .arrow-down,
    .accordion-faq .collapsed .arrow-up {
        display: none
    }

    .accordion-faq .collapsed .arrow-down {
        display: block
    }

    .accordion-faq .panel-body {
        border-top: 0 !important;
        padding: 15px;
        background: #fff;
        border: 1px #eee solid;
        border-top: none;
    }

    .accordion-faq.panel-group .panel+.panel {
        margin-top: 10px
    }

    .simple-list {
        margin: 0;
        padding: 0;
        list-style-type: none
    }

    .bold-list>li>a {
        font-weight: 700;
        text-transform: uppercase
    }

    .simple-list ul {
        margin: 0;
        padding: 0;
        list-style-type: none;
        position: relative;
        bottom: -.8em
    }

    .simple-list li {
        margin: 0;
        padding: 0 0 12px
    }

    .simple-list .icon {
        margin-right: 9px
    }

    .arrow-list li {
        padding-left: 12px;
        position: relative
    }

    .arrow-list li:before {
        content: '\f105';
        display: inline;
        font-family: FontAwesome;
        font-size: 1.1em;
        position: absolute;
        left: 0;
        top: -1px
    }

    /*** 29. Newsletter popup ****/
    #overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #000;
        opacity: 0.8;
        z-index: 10000;
    }

    .popup1 {
        width: 100%;
        margin: 0 auto;
        z-index: 10000;
    }

    .popup1 .newsletter {
        width: 100%;
    }

    .newsletter-sign-box {
        border-radius: 0;
        left: 33%;
        top: 25%;
        z-index: 100000;
        position: fixed;
        background: {{ colorSettings()->brand_color }} url(../images/newsletter-bg.png) no-repeat top left;
        border-radius: 0px;
        max-width: 600px;
        padding: 25px 35px 35px;
        text-align: center;
    }

    .newsletter-sign-box .newsletter_img {
        height: 49px;
        margin: 35px 0;
    }

    .news-icon i {
        font-size: 50px;
    }

    .newsletter-sign-box .newsletter h5 {
        text-align: center;
        color: #fff;
        line-height: 21px;
        font-size: 15px;
        margin-bottom: 50px;
        font-variant: 400;
    }

    .popup1 .x {
        position: absolute;
        right: -18px;
        top: -10px;
        z-index: 10000;
    }

    .popup1 .x:hover {
        cursor: pointer;
    }

    .newsletter-sign-box h3 {
        color: #fff;
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 15px;
        margin-top: 0;
        padding-bottom: 0;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 0.5px
    }

    .newsletter-sign-box h4 {
        font-size: 14px;
        font-weight: normal;
        margin-bottom: 35px;
        text-align: center;
        color: #fff;
        text-transform: none;
        font-family: Arial, Helvetica, sans-serif;
        line-height: 1.55;
    }

    .newsletter-sign-box .input-box {
        margin-bottom: 0px;
    }

    .newsletter-sign-box .input-box input {
        display: inline-block;
        margin-left: 0px;
        margin-right: 0px;
        padding: 9px 8px;
        width: 65%;
        border: 1px solid #fff;
        font-family: Arial, Helvetica, sans-serif;
        margin-right: 8px;
        background: #fff
    }

    .newsletter-sign-box .subscribe {
        background: #fff;
        color: {{ colorSettings()->brand_color }};
        display: inline-block;
        font-size: 12px;
        letter-spacing: 0.5px;
        line-height: 13px;
        margin-bottom: 20px;
        padding: 12px 15px 12px !important;
        border: none !important;
    }

    .newsletter-sign-box .subscribe:hover {
        background: #333;
        color: #fff;
    }

    .newsletter-sign-box button.subscribe:before {
        content: "\f0e0";
        font-family: FontAwesome;
        font-size: 13px;
        padding-right: 8px;
        font-weight: 300;
    }

    .newsletter-sign-box button.button span {
        font-size: 12px;
        font-weight: normal;
        letter-spacing: 0.5px;
    }

    .newsletter-sign-box .subscribe-bottom {
        color: #eee;
        font-size: 12px;
        line-height: 3px !important;
        margin-top: 5px;
        text-align: left;
        display: inline-block;
    }

    .newsletter-sign-box label {
        font-weight: normal;
    }

    .newsletter-sign-box .subscribe-bottom input {
        margin: 0px 5px 0 0;
        vertical-align: middle;
    }

    #formSuccess1 {
        font-size: 18px;
        padding: 48px 0 0;
        text-align: center;
    }

    .popup1 .newsletter .validation-advice {
        padding-left: 28px;
        padding-top: 5px;
        top: 190px;
        position: absolute;
        left: 0;
        color: #ff0000;
    }

    .popup1 .line {
        background: none repeat scroll 0% 0% #DDD;
        height: 5px;
        width: 100%;
        margin: auto auto 20px;
    }

    .popup1 .promo-img {
        width: 304px;
        float: right;
    }

    /* 30. Data Table */
    .data-table {
        width: 100%;
    }

    .data-table th {
        line-height: 20px;
        padding: 10px 8px;
        font-weight: 600;
        font-size: 12px;
    }

    .data-table td {
        line-height: 20px;
        padding: 10px;
        vertical-align: top;
    }

    .data-table th .tax-flag {
        white-space: nowrap;
        font-weight: normal;
    }

    .data-table td.label,
    .data-table th.label {
        font-weight: normal;
        background: #f8f8f8
    }

    .data-table input,
    data-table select,
    data-table textarea {
        margin: 3px;
    }

    .data-table p {
        margin: 10px 0;
    }

    .data-table .description {
        margin: 10px 0;
    }

    .data-table thead th,
    .data-table thead td,
    .data-table tfoot th,
    .data-table tfoot td,
    .cart .totals table th,
    .cart .totals table td {
        color: #333;
        font-family: 'Montserrat', sans-serif;
        font-size: 13px;
    }

    .data-table thead th {
        background: #f8f8f8;
        text-transform: uppercase;
    }

    .data-table tbody th,
    .data-table tbody td {
        border-bottom: 1px solid #eaeaea;
        padding: 10px;
    }

    .cart-table tbody th,
    .cart-table tbody td {
        border-bottom: 1px solid #eaeaea;
        vertical-align: middle;
    }

    .cart-table tbody td.image img {
        width: 80px;
    }

    .cart-table tbody th h2,
    .cart-table tbody td h2 {
        margin: auto;
        padding: 0px;
        display: inline-block;
    }

    /* New Css*/
    .col-mid .img-block1,
    .image-item {
        position: relative;
    }

    .col-mid .img-block a {
        color: #fff;
    }

    .col-mid .img-block1 a {
        color: #333;
    }

    .banner-details {
        position: absolute;
        font-family: 'Montserrat', sans-serif;
        top: 15px;
        left: 18px;
        z-index: 10;
        text-align: left;
    }

    .banner-sub-title {
        font-size: 14px;
        font-weight: bold;
        text-transform: uppercase;
    }

    .banner-title {
        font-size: 20px;
        font-weight: bold;
        text-transform: uppercase;
        margin-top: 2px;
    }

    .image-item .banner-details {
        left: inherit;
        line-height: 28px;
        padding: 0 7%;
        text-align: center;
        top: 21px;
    }

    .image-item .banner-title {
        font-size: 24px;
        margin-top: 3px;
        color: #333;
    }

    .banner-details .line {
        float: none;
        color: #333;
        border-bottom: 1px {{ colorSettings()->brand_color }} solid;
        margin: 10px auto;
        width: 80px;
        height: 1px;
    }

    .image-item .banner-sub-title {
        color: #999;
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
        font-weight: normal;
        line-height: 18px;
        padding: 0 14%;
        text-transform: capitalize;
    }

    .bottom-banner-section a {
        color: #fff;
    }

    .bottom-banner-section .banner-inner {
        position: relative;
    }

    .banner-bnt {
        background-color: #61bf75;
        border-radius: 3px;
        color: #fff;
        display: inline-block;
        font-size: 12px;
        font-weight: 600;
        margin-top: 30px;
        padding: 7px 12px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .banner-bnt:hover {
        background-color: #000;
    }

    .bottom-banner-section .banner-title {
        font-size: 44px;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        line-height: 40px;
        color: #fff;
    }

    .bottom-banner-section .banner-details {
        left: 26px;
        top: 35px;
        width: 100%;
    }

    .bottom-banner-section .banner-sub-title {
        color: #e7dcd8;
        font-size: 20px;
        text-transform: inherit;
    }

    .bottom-banner-section .banner-desc {
        font-size: 14px;
        margin-top: 16px;
        color: #fff;
    }

    .mgk-top-cart {
        padding-left: 0px;
    }

    .bottom-banner-section img {
        width: 100%;
    }

    /*----------- 31.  Responsive ---------- */
    @media only screen and (min-width: 320px) and (max-width: 479px) {

        /*========== 1 to 4 pages ==========*/
        #right_toolbar {
            display: none !important;
        }

        .shop_header.has_big_img {
            padding-bottom: 15px;
            padding-top: 25px;
        }

        #categories-section {
            padding: 5px 0 0px;
        }

        .banner-images li.right-space {
            margin-right: 0;
            margin-bottom: 6%;
        }

        .banner-images li.two-width {
            width: 100%;
            margin-bottom: 15px;
        }

        .banner-images li {
            width: 100%;
        }

        .banner-images li.grid figure.effect h2 {
            padding: 15px 12px;
        }

        .parallax-2 {
            padding: 50px 0;
        }

        .offer-info {
            padding: 0 10px;
        }

        .tabs-section {
            padding: 15px 0;
        }

        .new_title {
            margin-bottom: 0px;
        }

        .top-search {
            display: none;
        }

        .mini-cart .basket a div.price {
            display: none;
        }

        .header-top .container .col-xs-7 {
            padding-left: 10px;
        }

        header .header-top-links {
            padding-bottom: 0px;
            height: 45px;
        }

        .lang-curr {
            display: inline-block;
        }

        .form-currency {
            margin-right: 2px;
        }

        .form-language {
            padding-left: 8px;
        }

        .logo {
            text-align: center;
            padding-bottom: 0px;
            margin-top: 0px;
            line-height: normal;
            width: 100%;
            padding-top: 5px;
            margin-bottom: 30px;
        }

        .header-container .right_menu {
            background: #f5f5f5;
            margin-top: 0;
            padding-bottom: 5px;
            position: absolute;
            text-align: center;
            right: -2px;
        }

        .toplinks div.links div a {
            padding: 3px 5px;
        }

        .toplinks div.links div a {
            margin-left: 0px;
        }

        .block-currency-wrapper {
            margin: 5px 0 0 6px;
        }

        .caret {
            margin-left: 2px;
        }

        .search-box {
            width: 205px;
            margin-top: -34px;
            float: right;
        }

        #search {
            padding: 3px 6px;
            width: 170px;
        }

        .search-btn-bg {
            position: absolute;
            padding: 6px 3px;
        }

        nav {
            width: 100%;
            margin: auto;
            height: auto;
        }

        .nav-inner {
            height: auto;
            width: 100%;
            margin: auto;
            border: none;
        }

        ul.navmenu {
            padding: 0px;
            margin: auto;
        }

        nav .container .row .col-xs-12 {
            padding-bottom: 10px;
            margin-bottom: 10px;
            padding-top: 5px;
            border-bottom: 1px solid #ddd;
        }

        .mini-cart .basket a {
            margin: 0px;
            font-size: 13px;
            letter-spacing: normal;
            font-weight: normal;
            min-width: 40px !important;
            padding: 5px 5px 5px;
            border: none;
        }

        .mini-cart .basket a span.cart_count {
            margin-right: 0px;
        }

        .top-cart-contain {
            margin-bottom: 14px;
        }

        .top-cart-content {
            right: -8px;
        }

        .mini-cart .btn-remove1 {
            right: 4px !important;
            top: 0px;
        }

        .toplinks {
            padding: 6px 0 0;
        }

        ul#cart-sidebar {
            padding: 10px 0 0;
        }

        .top-cart-content li.item {
            width: 300px;
        }

        .service-section .services {
            padding: 20px 0px;
            width: 100%;
            border-bottom: 1px #e5e5e5 solid;
            border-left: 1px #fff solid;
            border-right: none;
        }

        .brand-logo .new_title.center {
            height: 40px;
        }

        .product-view .product-shop {
            margin-top: 20px;
        }

        .product-view .flexslider-thumb {
            padding: 0 15px;
            z-index: 1000;
        }

        .product-view .flexslider-thumb .flex-prev {
            left: -2px;
        }

        .product-view .flexslider-thumb .flex-next {
            right: 2px;
        }

        .related-pro .new_title.center {
            height: inherit;
        }

        .upsell-pro .new_title.center {
            height: inherit;
        }

        #productTabContent {
            padding: 10px 15px;
        }

        .product-view .email-friend a span {
            display: none;
        }

        .product-view .add-to-links span {
            display: none;
        }

        .email-addto-box {
            margin-top: 12px;
            margin-left: 0px;
        }

        .product-view .product-shop .ratings {
            padding: 12px 0;
        }

        .product-view .product-shop .price-box {
            padding: 10px 0px;
        }

        .product-view .short-description {
            padding: 12px 0px;
        }

        .product-view .product-shop .add-to-box {
            padding: 12px 0px 8px;
        }

        .product-shop .social {
            margin-top: 12px;
        }

        .product-view .email-friend {
            margin: auto;
            float: left;
        }

        .product-view .product-shop .add-to-links li {
            float: left;
        }

        .product-view .social ul li a {
            width: 32px;
            height: 32px;
            line-height: 30px;
        }

        .product-shop .social ul li {
            margin: auto;
        }

        .header-banner.mobile-show .our-features-box {
            display: block !important;
        }

        .offer-slider h1 {
            font-size: 34px;
            padding: 20px 15px;
        }

        .offer-slider p {
            padding: 0 2% 1%;
            font-size: 14px;
        }

        .bx-wrapper {
            margin: auto;
        }

        .bx-viewport {
            height: 340px !important;
            width: 95% !important;
        }

        .bxslider li {
            margin-right: 30px !important;
        }

        .parallax {
            height: 450px;
        }

        .bx-wrapper .bx-pager {
            padding-top: 8px;
        }

        .product-flexslider {
            margin-top: 10px;
            margin-bottom: 0px;
        }

        .owl-pagination {
            top: -20px;
            right: auto;
            width: 100%;
        }

        .owl-theme .owl-controls .owl-page span {
            width: 14px;
            height: 14px;
        }

        #toTop {
            width: 30px;
            height: 30px;
            line-height: 38px;
        }

        .our-features-box ul {
            width: 100%;
            padding: 5px 0px;
        }

        .our-features-box li {
            margin-bottom: 5px;
            padding-bottom: 0px;
            border-bottom: 1px solid #1bbd9e;
            width: 100%;
        }

        .our-features-box li:last-child {
            margin-bottom: 0px;
            border-bottom: 0px solid #ddd;
        }

        .our-features-box li.seprator-line {
            display: none;
        }

        .top-cart-content .actions {
            padding: 12px 10px 0;
        }

        .mini-products-list .product-image {
            margin-left: 8px;
        }

        .col-xs-12.right_menu {
            padding-left: 4px;
        }

        .product-img-box. col-xs-12 {
            width: 300px;
        }

        .product-next-prev {
            display: none;
        }

        .product-view .previews-list li {
            margin-right: 13px;
        }

        .product-view .product-shop .add-to-box .pull-right {
            float: left !important;
        }

        #cloud-zoom-big {
            display: none !important;
        }

        .category-description .slider-items-products .owl-buttons a {
            width: 25px;
            height: 25px;
        }

        .products-list .product-image {
            width: 100%;
        }

        .offer-banner-section .row {
            padding-top: 30px;
        }

        .col {
            padding: 0px 0px 30px 0px;
            width: 100%
        }

        .col img {
            width: 100% !important;
        }

        .col-item .item-title {
            white-space: normal;
        }

        .ratings .rating-links {
            display: none;
        }

        .actions button.button.btn-cart {
            margin: 5px 5px 0 0px;
            padding: 9px 5px 9px 5px;
            line-height: 10px;
        }

        .col-item a.thumb span.quick-view {
            display: none;
        }

        .promo-banner-section {
            margin: 0px auto;
        }

        .promo-banner-section .col {
            float: none;
            padding: 20px 0px;
            width: 95%;
            margin: auto;
        }

        .promo-banner-section .col img {
            width: 100%;
        }

        .newsletter {
            width: auto;
        }

        .newsletter-wrap input[type="text"] {
            width: 100% !important;
            margin: 5px 0px 15px 0px;
        }

        .newsletter-wrap button.subscribe {
            margin-left: 0px !important;
            float: left;
        }

        .social ul li {
            margin-right: 4px;
        }

        .payment-accept {
            float: none !important;
        }

        .page-title h1 {
            font-size: 20px;
            margin: 10px 0px;
        }

        .cat-img-title.cat-box {
            background: none;
            height: inherit;
            left: 10px;
            margin: auto;
            padding: 5px 20px;
            right: 0;
            text-align: left;
            top: 14%;
        }

        .small-tag {
            letter-spacing: 3px;
            padding: 4px 0px;
        }

        .category-description .slider-items-products .owl-buttons .owl-prev {
            left: 22px;
        }

        .category-description .slider-items-products .owl-buttons a {
            left: 5px;
            padding: 2px 3px 10px 0px;
            height: 25px;
            width: 25px;
        }

        .category-description .slider-items-products .owl-buttons .owl-prev a:before {
            font-size: 16px;
            padding: 0px 8px;
            line-height: 20px;
        }

        .category-description .slider-items-products .owl-buttons .owl-next a:before {
            font-size: 16px;
            padding: 0px 8px;
            line-height: 20px;
        }

        .cat-img-title .cat-heading {
            font-size: 18px;
            margin: 8px 0;
        }

        .cat-img-title.cat-bg p {
            margin: 0px;
            display: none;
        }

        .toolbar .pager {
            float: right;
            margin: 10px 0px 6px;
        }

        .pager #limiter label,
        #sort-by label {
            display: none;
        }

        .category-products ul.products-grid li.item a.thumb span.quick-view {
            display: none;
        }

        .products-list .product-shop {
            width: 100%;
            margin: 10px 0;
        }

        .products-list .actions button.button.btn-cart {
            padding: 9px 15px;
            margin: 0px 8px 0px 0px;
        }

        .col-left .block-cart .block-content ul li .product-details {
            width: 62%;
        }

        .side-nav-categories {
            margin-bottom: 25px;
            margin-top: 20px;
        }

        .block {
            margin: 0px 0px 25px 0px;
        }

        .block:last-child {
            margin: 0px 0px 0px 0px;
        }

        .category-products ul.products-grid li.item a.thumb span.quick-view {
            display: none;
        }

        .products-grid .actions button.button.btn-cart span {
            font-size: 10px;
        }

        .nav-tabs>li {
            width: 100%;
            text-align: center;
            margin-bottom: 0px;
        }

        .nav-tabs>li:last-child {
            border-bottom: 0px solid #ddd;
        }

        .tab-content {
            display: inline-block;
        }

        .form-add-tags input.input-text,
        select,
        textarea {
            width: 100%;
            margin-bottom: 8px;
        }

        .product-shop .product-next-prev .product-prev {
            margin-top: 5px;
        }

        .product-shop .product-next-prev .product-prev {
            width: 30px;
            height: 28px;
            right: 49px;
            margin: auto;
            padding: inherit;
        }

        .product-shop .product-next-prev .product-next {
            width: 30px;
            height: 28px;
            right: 15px;
            margin: auto;
            padding: inherit;
        }

        .product-view .product-shop .add-to-box .btn-cart {
            margin-left: 0px;
            margin-top: 0px;
            padding: 7px 10px;
        }

        .add-to-cart .qty {
            margin-bottom: 10px
        }

        .product-view .product-name h1 {
            font-size: 22px;
            padding-right: 0px;
            line-height: normal;
        }

        #shopping-cart-table {
            margin-top: 0px;
        }

        label {
            font-weight: normal;
        }

        button.button.btn-proceed-checkout span {
            font-size: 16px;
        }

        .crosssel h2 {
            font-size: 13px;
            font-weight: normal;
        }

        .cart-collaterals h3 {
            font-size: 14px;
        }

        .footer-column {
            width: 100%;
            margin-bottom: 25px;
            margin-right: 0px;
        }

        .products-list .add-to-links span {
            display: none;
        }

        .products-list .add-to-links {
            margin-top: 0px;
            display: inline-block;
            vertical-align: top;
        }

        .review1,
        .review2 {
            width: 100%;
        }

        .box-reviews .review {
            border-left: 0 solid #dfdfdf;
            float: left;
            padding-left: 0;
            width: 95%;
        }

        .related-slider {
            display: inline-block;
            width: 100%;
        }

        .service-section .services {
            border-left: none;
        }

        .cloud-zoom-big {
            left: 0 !important;
        }

        .top-banner-section .col-xs-12 img {
            margin-bottom: 15px;
        }

        .discount,
        .totals {
            min-height: inherit;
        }

        .cross-sell-pro .new_title.center {
            height: auto;
        }

        .cross-sell-pro .new_title h2 {
            font-size: 14px;
        }

        .mm-toggle-wrap {
            display: inline-block;
            position: absolute;
            top: -54px;
        }

        .top-banner-section h2 {
            font-size: 20px;
            margin: 10px 0px;
        }

        .top-banner-section h3 {
            margin-bottom: 20px;
            text-align: center;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-top: 10px;
        }

        .top-banner-section {
            margin-bottom: 15px;
            margin-top: 15px;
        }

        .products-grid .item .item-inner .item-img {
            margin: 0px auto 0;
        }

        .offer-slider h2 {
            font-size: 28px;
        }

        .featured-pro {
            padding: 35px 0;
        }

        .latest-blog {
            padding: 30px 0px;
        }

        .latest-blog .blog_inner {
            margin-top: 15px;
            margin-bottom: 30px;
        }

        .brand-logo {
            margin-top: 0px;
        }

        .top-categories {
            margin-top: 0px;
            padding: 30px 0px 20px 0px;
        }

        .brand-logo .slider-items-products .owl-buttons .owl-prev {
            left: 0px;
            top: 30px;
        }

        .brand-logo .slider-items-products .owl-buttons .owl-next {
            top: 30px;
        }

        .top-categories .owl-item .item {
            margin: 0 35px;
        }

        .top-categories .slider-items-products .owl-buttons .owl-next a {
            right: 0px;
        }

        .top-categories .slider-items-products .owl-buttons .owl-prev a {
            left: 5px;
        }

        .blog-img a.info {
            margin-top: -30px;
            vertical-align: middle;
        }

        .fa.fa-search:before {
            font-size: 16px;
        }

        .breadcrumb li {
            margin-bottom: 5px;
        }

        .breadcrumb li:last-child a {
            padding-left: 5px;
        }

        .breadcrumb {
            border-radius: 0px;
        }

        .category-description {
            padding-top: 0px;
        }

        footer {
            padding-top: 40px;
        }

        .category-image {
            margin-top: 0px;
        }

        .category-image img {
            width: 100%;
        }

        .product-view .product-shop img {
            width: 100%;
        }

        .our-features-box .feature-box h3 {
            font-size: 13px;
        }

        .our-features-box .feature-box p {
            font-size: 11px;
        }

        .icon-globe-alt:before,
        .icon-support:before {
            font-size: 26px;
        }

        .icon-share-alt:before {
            font-size: 24px;
        }

        .footer-bottom .company-links li {
            margin-left: 0;
            float: none;
            margin: 0 10px 5px 0;
        }

        .footer-bottom .company-links ul {
            text-align: center;
        }

        footer .coppyright {
            float: none;
            text-align: center;
            margin-bottom: 8px;
        }

        .social ul li a {
            width: 35px;
            height: 35px;
            line-height: 32px;
        }

        .payment-accept img {
            margin-right: 6px;
        }

        footer address {
            width: 95%;
            margin: 18px auto 0px;
        }

        footer address span {
            float: left;
            margin-right: 8px;
        }

        footer address i {
            margin-left: 0px !important;
            display: none !important;
        }

        footer .footer-inner {
            margin-bottom: 10px;
        }

        .home-tabs {
            margin-top: 25px;
        }

        .latest-blog .container {
            padding-left: 15px;
            padding-right: 15px;
        }

        .category-description .owl-item .item img {
            width: 100%;
        }

        .our-features-box .feature-box {
            padding: 10px 0px;
            text-align: center;
            margin-bottom: 10px;
        }

        .product-view {
            margin-top: 0px;
            padding: 15px 0;
        }

        .related-pro .owl-item .item {
            /* margin-right: 0px; */
            margin-left: 0px;
        }

        .upsell-pro {
            margin-bottom: 20px;
        }

        .tab-content>.active {
            margin-top: 5px;
        }

        .sticky-header {
            position: relative;
        }

        .welcome-msg {
            margin: 7px 7px 0px 7px;
            float: right;
            text-align: right;
        }
        .delivery-details{
        margin-top:20px; 
    }
        /*========== End 1 to 4 pages ==========*/
        .mini-cart .basket a:before {
            height: 30px;
            width: 30px;
            line-height: 30px;
        }

        .navbar-nav .new_title {
            padding: 5px 0px;
        }

        .category-product .navbar-nav>li>a {
            margin-top: 0px;
        }

        .category-product .navbar-nav>li {
            float: left;
            margin-bottom: 5px;
        }

        .category-product .navbar-nav>li.active a {
            border: none;
        }

        .crosssel {
            margin: 0px 0px 20px;
        }

        .new_title h2 {
            font-size: 20px;
        }

        .category-product .nav.navbar-nav {
            padding-right: 15px;
        }

        .content-page .category-product {
            margin-top: 10px;
        }

        .hot-deal .products-grid .item {
            margin: auto;
            width: 98%;
        }

        .featured-pro {
            padding: 5px 0;
            margin-bottom: 15px;
        }

        .product-bestseller {
            margin: 15px 5px;
        }

        .related-pro .home-block-inner {
            width: 100%;
            float: none;
            display: inline-block
        }

        .related-pro .block-content {
            width: 100%;
            margin: auto;
            border: none;
            padding: 0px 15px 15px
        }

        .related-pro .owl-theme .owl-controls {
            left: 82%;
            top: -140px;
            width: 0;
        }

        .related-pro .slider-items-products .owl-buttons a,
        .related-pro .slider-items-products .owl-buttons a:hover {
            color: #ffffff;
            transition: all 0s ease 0s;
        }

        .related-pro .owl-theme .owl-controls {
            left: 82%;
            top: -140px;
        }

        .bestsell-pro .home-block-inner .pretext,
        .related-pro .home-block-inner .pretext {
            margin: 15px;
        }

        .bestsell-pro .owl-theme .owl-controls {
            left: 82%;
            /* top: -10%; */
        }

        .new-arrivals-pro .home-block-inner {
            width: 100%;
        }

        .new-arrivals-pro .block-content {
            width: 100%;
            margin: auto;
            border: none;
        }

        .new-arrivals-pro .block-title {
            padding: 15px;
        }

        .new-arrivals-pro .home-block-inner .pretext {
            margin: 15px;
        }

        .new-arrivals-pro .owl-theme .owl-controls {
            left: 82%;
            top: 1%;
            width: 1%;
        }

        .new-arrivals-pro .slider-items-products .owl-buttons .owl-next {
            right: -55px;
        }

        .featured-pro .home-block-inner {
            width: 100%;
            position: relative;
            height: 315px;
            margin-bottom: 16px;
            float: none;
            background-size: cover;
        }

        .featured-pro .block-content {
            width: 100%;
            margin: auto;
            border: none;
            margin: 0px !important;
            padding: 10px 10px 20px;
        }

        .featured-pro .block-title {
            padding: 15px;
        }

        .featured-pro .home-block-inner .pretext {
            margin: 0px 15px 15px;
        }

        .featured-pro .owl-theme .owl-controls {
            left: 78%;
            top: -22%;
            width: 1%;
        }

        .featured-pro .slider-items-products .owl-buttons .owl-next {
            right: -55px;
        }

        .blog-outer-container .new_title {
            padding: 15px;
        }

        .blog-inner {
            margin: auto 5px 5px;
        }

        .blog-preview_item {
            display: inline-block;
        }

        .two-width .banner-images_content {
            width: auto;
        }

        .banner-images li.grid figure.effect h2 strong {
            font-size: 18px;
        }

        .banner-images_content {
            padding: 5px 0px;
        }

        #brand-logo-slider {
            margin: 15px 0 20px;
        }

        .our-features-box li {
            width: 100%;
            text-align: left;
        }

        .category-product .navbar-nav>li:first-child {
            width: 100%;
        }

        #limiter {
            float: left;
        }

        .product-full {
            overflow: hidden;
        }

        .nav-tabs.product-tabs>li {
            margin-right: 0px;
            border-bottom: 1px #e5e5e5 solid;
        }

        .nav-tabs.product-tabs>li:last-child {
            border: none;
        }

        .slider-items-products .owl-buttons .owl-prev {
            top: -16.5%;
            right: 10px;
        }

        .slider-items-products .owl-buttons .owl-next {
            position: absolute;
            right: -20px;
            top: -16.5%;
        }

        .bestsell-pro a.view_more_bnt,
        .featured-pro a.view_more_bnt,
        .new-arrivals-pro a.view_more_bnt,
        .related-pro a.view_more_bnt,
        .upsell-pro a.view_more_bnt {
            margin: 10px 15px 18px;
        }

        .bottom-banner-img .banner-overly,
        .bottom-banner-img {
            height: inherit;
        }

        .bottom-img-info {
            top: -20px;
        }

        .bottom-img-info.last {
            top: -50px;
        }

        .bottom-img-info.last h6 {
            display: none;
        }

        .upsell-pro .home-block-inner {
            width: 100%;
        }

        .upsell-pro .block-content {
            width: 100%;
            margin: auto;
            border: none;
        }

        .upsell-pro .block-title {
            padding: 15px;
        }

        .upsell-pro .home-block-inner .pretext {
            margin: 15px;
        }

        .upsell-pro .owl-theme .owl-controls {
            left: 82%;
            top: 1%;
            width: 1%;
        }

        .upsell-pro .slider-items-products .owl-buttons .owl-next {
            right: -55px;
        }

        .bottom-banner-img1 h3 {
            margin-top: 50px;
            margin-left: 15px;
            font-size: 20px;
        }

        .line {
            margin-left: 15px;
        }

        .bottom-banner-img1.last h3 {
            font-size: 22px;
        }

        .top-cart-contain.sticky-topcart {
            display: none;
        }

        .nav-inner:before,
        .nav-inner:after {
            display: none;
        }

        #rev_slider_4_wrapper .info {
            left: 0% !important;
        }

        .tp-caption.ExtraLargeTitle,
        .tp-caption.LargeTitle {
            text-align: center !important;
        }

        .tp-caption.ExtraLargeTitle span {
            line-height: 40px !important;
            letter-spacing: 10px !important;
            font-size: 14px !important;
        }

        .tp-caption.Title {
            display: none;
        }

        .buy-btn {
            padding: 10px 15px !important;
            font-size: 12px !important;
            letter-spacing: 0.5px !important;
            float: none !important;
        }

        .col-mid .img-block,
        .col-mid .img-block1 {
            margin-bottom: 15px;
        }

        .hot-deal {
            margin-top: 5px;
        }

        .bestsell-pro {
            margin-top: 0px;
        }

        .bottom-banner-img1 {
            margin-bottom: 15px;
        }

        .blog-preview_btn {
            margin-bottom: 15px;
            margin-top: 8px;
        }

        .block.block-tags {
            margin-bottom: 15px;
        }

        .block.block-progress,
        .block.block-compare {
            margin-bottom: 15px;
        }

        .my-wishlist .buttons-set2 .btn-add {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .my-wishlist .buttons-set2 .btn-update {
            margin-bottom: 10px;
        }

        .checkout-progress li {
            width: 100%;
        }

        .multiple-checkout .buttons-set .button {
            margin: 10px 0px;
        }

        #cart .dropdown-menu {
            min-width: 300px;
        }

        .image-hover2 a:before {
            top: 40%;
        }

        #modal-quickview .modal-dialog {
            width: 94%;
        }

        .side-banner:last-child {
            margin: auto;
            text-align: center;
        }

        #cart .dropdown-menu {
            min-width: 300px;
        }

        #sort-by {
            margin-left: 0;
            margin-top: 8px;
            width: 48%;
        }

        #compare-total {
            float: right;
        }

        .sorter .view-mode {
            width: 100%;
            margin-right: 0px;
        }

        .toolbar .sorter {
            width: 100%;
        }

        #sort-by .form-control {
            float: left;
            margin-top: 2px;
            width: 95%;
        }

        .main-container {
            margin-top: 12px;
        }

        .toolbar {
            margin-bottom: 0px;
        }

        .product-grid .product-thumb {
            margin-top: 0px;
        }

        .products-list .item-img {
            margin-bottom: 15px;
            width: 100%;
        }

        .products-list .item-info {
            float: left;
            width: 100%;
            margin-left: 0px;
        }

        .add-to-box .add-to-cart,
        .product-options-bottom .add-to-cart {
            display: inline-block;
            margin: 0;
            width: 100%;
        }

        button.button.btn-proceed-checkout {
            margin-top: 15px;
        }

        .account-login .col2-set .col-1 {
            width: 100%;
            min-height: inherit;
        }

        .account-login .col2-set .col-2 {
            float: left;
            margin-bottom: 25px;
            padding: 0;
            text-align: left;
            width: 100%;
        }

        .newsletter-sign-box .newsletter h5 {
            padding-right: 0%;
        }

        .newsletter-sign-box h3 {
            font-size: 20px;
        }

        .text-banner h3 {
            font-size: 22px;
        }

        .image-hover2 a:before {
            top: 40%;
        }

        footer .footer-inner .newsletter-wrap #subscriber_content.required {
            left: inherit;
            right: 3%;
        }

        #shopping-cart-table .input-group-btn {
            float: none;
        }

        .cart .buttons .pull-right {
            float: left !important;
        }

        .magik-quickview .product-view .flexslider-thumb {
            padding: 0 50px;
        }

        .magik-quickview .product-img-box,
        .magik-quickview .product-shop {
            padding: 0px;
        }

        .magik-quickview .product-view .flexslider-thumb .flex-prev {
            left: 5px;
        }

        .availability.in-stock {
            display: flex;
            padding: 0px 0 10px;
            position: relative;
        }

        .newsletter-sign-box {
            left: auto;
            margin: auto;
            padding: 40px 15px 15px;
            right: auto;
            margin-top: 2%;
            width: auto;
            max-height: inherit;
        }

        .popup1 .x {
            right: -8px;
            top: -24px;
        }

        .newsletter-sign-box .newsletter_img {
            margin: 15px 0;
        }

        .newsletter-sign-box .input-box input {
            width: 95%;
            margin-bottom: 10px;
        }

        .popup1 button.x {
            right: 5px;
            top: -25px;
        }

        .page-heading {
            border-right: 0px solid #e5e5e5;
            width: 100%;
        }

        .bottom_pagination .text-right {
            margin-top: 10px;
            text-align: left;
        }

        .product-list .col-item .item-title {
            margin-bottom: 12px;
        }

        .checkout-inner .collapse.in {
            padding: 10px;
        }

        #button-account {
            margin-bottom: 15px;
        }

        .blog-related-pro .block-title h2 {
            font-size: 20px;
            height: 35px;
        }

        .blog-related-pro .slider-items-products .owl-buttons .owl-prev {
            left: -24px;
        }

        .related-article .blog-inner {
            margin: 15px auto;
        }

        .blog-related-pro .owl-theme .owl-controls {
            top: -15.5%;
        }

        .box-hover .add-to-links {
            margin: 0 0 0 10px;
        }

        footer address span {
            float: none;
        }

        .bottom-banner-section .banner-details {
            left: 8px;
            top: 4px;
            width: 95%;
        }

        .bottom-banner-section .banner-title {
            font-size: 12px;
            letter-spacing: normal;
            line-height: 12px;
            margin-top: 0px;
        }

        .bottom-banner-section .banner-sub-title {
            font-size: 8px;
        }

        .bottom-banner-section .banner-desc {
            display: none;
        }

        .banner-bnt {
            font-size: 8px;
            margin-top: 4px;
            padding: 2px 5px;
        }

        .col-mid,
        .col-right {
            text-align: center;
            width: 100%;
        }

        .col-inner,
        .col-right .image-item {
            display: inline-block;
            margin: auto;
        }

        .mini-cart .actions .btn-checkout {
            padding: 10px 10px;
        }

        .bestsell-pro .slider-items-products .owl-buttons .owl-prev {
            left: 22px;
        }

        .bottom-banner-section {
            margin-bottom: 15px;
        }
    }

    @media only screen and (min-width: 480px) and (max-width: 767px) {

        /*========== 1 to 4 pages ==========*/
        #right_toolbar {
            display: none !important;
        }

        .shop_header.has_big_img {
            padding-bottom: 15px;
            padding-top: 25px;
        }

        #categories-section {
            padding: 25px 0;
        }

        .banner-images li.right-space.two-height {
            margin-right: 0;
            margin-bottom: 4%;
            width: 394px;
        }

        .banner-images li.right-space {
            margin-right: 0;
            margin-bottom: 4%;
            width: 381px;
        }

        .banner-images li.grid {
            width: 394px;
        }

        .banner-images li.two-width {
            width: 394px;
            margin-bottom: 15px;
        }

        .banner-images li {
            width: 100%;
            float: none;
            display: inline-block;
        }

        .banner-images li.grid figure.effect h2 {
            padding: 15px 12px;
        }

        .parallax-2 {
            padding: 50px 0;
        }

        .offer-info {
            padding: 0 10px;
        }

        .tabs-section {
            padding: 15px 0;
        }

        .new_title {
            margin-bottom: 0px;
        }

        .top-search {
            display: none;
        }

        .mini-cart .basket a div.price {
            display: none;
        }

        .header-top .container .col-xs-7 {
            padding-left: 10px;
        }

        header .header-top-links {
            padding-bottom: 0px;
            height: 45px;
        }

        .lang-curr {
            display: inline-block;
        }

        .form-currency {
            margin-right: 2px;
        }

        .form-language {
            padding-left: 8px;
        }

        .logo {
            text-align: center;
            padding-bottom: 0px;
            margin-top: 0px;
            line-height: normal;
            width: 100%;
            padding-top: 16px;
        }

        .header-container .right_menu {
            background: #f5f5f5;
            margin-top: 0;
            padding-bottom: 5px;
            position: absolute;
            text-align: center;
            right: -2px;
        }

        .toplinks div.links div a {
            padding: 3px 5px;
        }

        .toplinks div.links div a {
            margin-left: 0px;
        }

        .block-currency-wrapper {
            margin: 5px 0 0 6px;
        }

        .caret {
            margin-left: 2px;
        }

        .search-box {
            width: 205px;
            margin-top: -34px;
            float: right;
        }

        #search {
            padding: 3px 6px;
            width: 170px;
        }

        .search-btn-bg {
            position: absolute;
            padding: 6px 3px;
        }

        nav {
            width: 100%;
            margin: auto;
            height: auto;
            padding-bottom: 0px;
            border: none;
        }

        .nav-inner {
            height: auto;
            width: 100%;
            margin: auto;
        }

        ul.navmenu {
            padding: 0px;
            margin: auto;
        }

        nav .container .row .col-xs-12 {
            padding-bottom: 10px;
            margin-bottom: 10px;
            padding-top: 5px;
            border-bottom: 1px solid #ddd;
        }

        .mini-cart .basket a span.cart_count {
            margin-right: 0px;
        }

        .mini-cart .btn-remove1 {
            right: 4px !important;
            top: 0px;
        }

        .toplinks {
            padding: 6px 0 0;
        }

        ul#cart-sidebar {
            padding: 10px 0 0;
        }

        .top-cart-content li.item {
            width: 290px;
        }

        .service-section .services {
            padding: 20px 0px;
            width: 100%;
            border-bottom: 1px #e5e5e5 solid;
            border-left: 1px #fff solid;
            border-right: none;
        }

        .brand-logo .new_title.center {
            height: 40px;
        }

        .product-view .product-shop {
            margin-top: 20px;
        }

        .product-view .flexslider-thumb {
            padding: 0 50px;
            z-index: 1000;
        }

        .product-view .flexslider-thumb .flex-prev {
            left: -2px;
        }

        .product-view .flexslider-thumb .flex-next {
            right: 2px;
        }

        .related-pro .new_title.center {
            height: inherit;
        }

        .upsell-pro .new_title.center {
            height: inherit;
        }

        .product-tabs {
            height: auto;
            margin-top: 10px;
        }

        .product-view .email-friend a span {
            display: none;
        }

        .product-view .add-to-links span {
            display: none;
        }

        .email-addto-box {
            margin-top: 12px;
            margin-left: 0px;
            width: 100%;
        }

        .product-view .product-shop .ratings {
            padding: 12px 0;
        }

        .product-view .product-shop .price-box {
            padding: 10px 0px;
        }

        .product-view .short-description {
            padding: 12px 0px;
        }

        .product-view .product-shop .add-to-box {
            padding: 12px 0px 8px;
        }

        .product-shop .social {
            margin-top: 12px;
        }

        .product-view .email-friend {
            margin: auto;
            float: left;
        }

        .product-view .product-shop .add-to-links li {
            float: left;
        }

        .product-view .social ul li a {
            width: 35px;
            height: 35px;
            line-height: 32px;
        }

        .product-shop .social ul li {
            margin: auto;
        }

        .header-banner.mobile-show .our-features-box {
            display: block !important;
        }

        .offer-slider h1 {
            font-size: 34px;
            padding: 20px 15px;
        }

        .offer-slider p {
            padding: 0 2% 1%;
            font-size: 14px;
        }

        .bx-wrapper {
            margin: auto;
        }

        .bx-viewport {
            height: 340px !important;
            width: 95% !important;
        }

        .bxslider li {
            margin-right: 30px !important;
        }

        .parallax {
            height: 450px;
        }

        .bx-wrapper .bx-pager {
            padding-top: 8px;
        }

        .product-flexslider {
            margin-top: 10px;
            margin-bottom: 0px;
        }

        .owl-pagination {
            top: -20px;
            right: auto;
            width: 100%;
        }

        .owl-theme .owl-controls .owl-page span {
            width: 14px;
            height: 14px;
        }

        #toTop {
            width: 30px;
            height: 30px;
            line-height: 38px;
        }

        .our-features-box ul {
            width: 100%;
            padding: 5px 0px;
        }

        .our-features-box li {
            margin-bottom: 5px;
            padding-bottom: 0px;
            border-bottom: 1px solid #1bbd9e;
            width: 100%;
        }

        .our-features-box li:last-child {
            margin-bottom: 0px;
            border-bottom: 0px solid #ddd;
        }

        .our-features-box li.seprator-line {
            display: none;
        }

        .top-cart-content .actions {
            padding: 12px 10px 0;
        }

        .mini-products-list .product-image {
            margin-left: 8px;
        }

        .mini-cart .actions .btn-checkout {
            padding: 10px 0px;
            width: 130px;
        }

        .mini-cart .view-cart {
            padding: 10px 0px;
            width: 130px;
        }

        .col-xs-12.right_menu {
            padding-left: 4px;
        }

        .product-img-box. col-xs-12 {
            width: 300px;
        }

        .product-next-prev {
            display: none;
        }

        .product-view .previews-list li {
            margin-right: 13px;
        }

        .product-view .product-shop .add-to-box .pull-right {
            float: left !important;
        }

        #cloud-zoom-big {
            display: none !important;
        }

        .category-description .slider-items-products .owl-buttons a {
            width: 25px;
            height: 25px;
        }

        .offer-banner-section .row {
            padding-top: 30px;
        }

        .col {
            padding: 0px 0px 30px 0px;
            width: 100%
        }

        .col img {
            width: 100% !important;
        }

        .col-item .item-title {
            white-space: normal;
        }

        .ratings .rating-links {
            display: none;
        }

        .actions button.button.btn-cart {
            margin: 5px 5px 0 0px;
            padding: 9px 5px 9px 5px;
            line-height: 10px;
        }

        .col-item a.thumb span.quick-view {
            display: none;
        }

        .promo-banner-section {
            margin: 0px auto;
        }

        .promo-banner-section .col {
            float: none;
            padding: 20px 0px;
            width: 95%;
            margin: auto;
        }

        .promo-banner-section .col img {
            width: 100%;
        }

        .newsletter {
            width: auto;
        }

        .newsletter-wrap input[type="text"] {
            width: 64% !important;
            margin: 0px 0px 15px 0px;
            float: left;
        }

        .newsletter-wrap button.subscribe {
            margin-left: 12px !important;
            float: left;
        }

        .social ul li {
            margin-right: 4px;
        }

        .payment-accept {
            float: none !important;
        }

        .page-title h1 {
            font-size: 22px;
            margin: 10px 0px;
        }

        .cat-img-title.cat-box {
            background: none;
            height: inherit;
            left: 0;
            margin: auto;
            padding: 25px 0px;
            right: 0;
            text-align: left;
            top: 15%;
            left: 6%;
        }

        .category-description .slider-items-products .owl-buttons .owl-prev {
            left: 22px;
        }

        .category-description .slider-items-products .owl-buttons a {
            left: 5px;
            padding: 2px 3px 10px 0px;
            height: 25px;
            width: 25px;
        }

        .category-description .slider-items-products .owl-buttons .owl-prev a:before {
            font-size: 16px;
            padding: 0px 8px;
            line-height: 20px;
        }

        .category-description .slider-items-products .owl-buttons .owl-next a:before {
            font-size: 16px;
            padding: 0px 8px;
            line-height: 20px;
        }

        .cat-img-title .cat-heading {
            font-size: 20px;
            margin: 5px;
        }

        .cat-img-title.cat-bg p {
            color: #fff;
        }

        .toolbar .pager {
            float: left;
            margin: 15px 0 6px;
            width: 45%;
        }

        .toolbar .sorter {
            margin-top: 12px;
        }

        .category-products ul.products-grid li.item {
            margin: 0%;
            width: 50%;
        }

        .category-products ul.products-grid li.item a.thumb span.quick-view {
            display: none;
        }

        .products-list .product-shop {
            margin: 0;
            width: 60%;
        }

        .products-list .actions button.button.btn-cart {
            padding: 10px 15px;
            margin: 5px 5px 0px 0px;
        }

        .col-left .block-cart .block-content ul li .product-details {
            width: 62%;
        }

        .side-nav-categories {
            margin-bottom: 10px;
        }

        .block {
            margin: 0px 0px 25px 0px;
        }

        .block:last-child {
            margin: 0px 0px 0px 0px;
        }

        .category-products ul.products-grid li.item a.thumb span.quick-view {
            display: none;
        }

        .products-grid .actions button.button.btn-cart span {
            font-size: 10px;
        }

        .nav-tabs>li {
            width: 100%;
            text-align: center;
            margin-bottom: 0px;
        }

        .nav-tabs>li:last-child {
            border-bottom: 0px solid #ddd;
        }

        .tab-content {
            display: inline-block;
        }

        .form-add-tags input.input-text,
        select,
        textarea {
            width: 56%;
        }

        .product-shop .product-next-prev .product-prev {
            margin-top: 5px;
        }

        .product-shop .product-next-prev .product-prev {
            width: 30px;
            height: 28px;
            right: 49px;
            margin: auto;
            padding: inherit;
        }

        .product-shop .product-next-prev .product-next {
            width: 30px;
            height: 28px;
            right: 15px;
            margin: auto;
            padding: inherit;
        }

        .product-view .product-shop .add-to-box .btn-cart {
            margin-left: 5px;
            margin-top: 0px;
            padding: 7px 10px;
        }

        .add-to-cart .qty {
            width: 40px;
        }

        .product-view .product-name h1 {
            font-size: 22px;
            padding-right: 0px;
            line-height: normal;
        }

        #shopping-cart-table {
            margin-top: 0px;
        }

        label {
            font-weight: normal;
        }

        button.button.btn-proceed-checkout span {
            font-size: 16px;
        }

        .crosssel h2 {
            font-size: 13px;
            font-weight: normal;
        }

        .cart-collaterals h3 {
            font-size: 14px;
        }

        .footer-column {
            width: 100%;
            margin-bottom: 25px;
            margin-right: 0px;
        }

        .products-list .add-to-links span {
            display: none;
        }

        .products-list .add-to-links {
            margin-top: 6px;
            display: inline-block;
            vertical-align: top;
            margin-left: 0;
        }

        .review1,
        .review2 {
            width: 100%;
        }

        .box-reviews .review {
            border-left: 0 solid #dfdfdf;
            float: left;
            padding-left: 0;
            width: 95%;
        }

        .related-slider {
            display: inline-block;
            width: 100%;
        }

        .service-section .services {
            border-left: none;
        }

        .cloud-zoom-big {
            left: 0 !important;
        }

        .top-banner-section .col-xs-12 img {
            margin-bottom: 15px;
        }

        .discount,
        .totals {
            min-height: inherit;
        }

        .cross-sell-pro .new_title.center {
            height: auto;
        }

        .cross-sell-pro .new_title h2 {
            font-size: 14px;
        }

        .mm-toggle-wrap {
            display: inline-block;
            position: absolute;
            top: -52px;
        }

        .top-banner-section h2 {
            font-size: 20px;
            margin: 10px 0px;
        }

        .top-banner-section h3 {
            margin-bottom: 20px;
            text-align: center;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-top: 10px;
        }

        .top-banner-section {
            margin-bottom: 15px;
            margin-top: 15px;
        }

        .products-grid .item .item-inner .item-img {
            margin: 0px auto 0;
        }

        .offer-slider h2 {
            font-size: 28px;
        }

        .featured-pro {
            padding: 35px 0;
        }

        .latest-blog {
            padding: 30px 0px;
        }

        .latest-blog .blog_inner {
            margin-top: 15px;
            margin-bottom: 30px;
        }

        .brand-logo {
            margin: 0px;
            padding: 5px 0;
        }

        .top-categories {
            margin-top: 0px;
            padding: 30px 0px 20px 0px;
        }

        .brand-logo .slider-items-products .owl-buttons .owl-prev {
            left: 0px;
            top: 30px;
        }

        .brand-logo .slider-items-products .owl-buttons .owl-next {
            top: 30px;
        }

        .top-categories .owl-item .item {
            margin: 0 35px;
        }

        .top-categories .slider-items-products .owl-buttons .owl-next a {
            right: 0px;
        }

        .top-categories .slider-items-products .owl-buttons .owl-prev a {
            left: 5px;
        }

        .blog-img a.info {
            margin-top: 20px;
            vertical-align: middle;
        }

        .latest-blog h2 {
            margin-bottom: 10px;
        }

        .fa.fa-search:before {
            font-size: 16px;
        }

        .breadcrumb li {
            margin-bottom: 5px;
        }

        .breadcrumb li:last-child a {
            padding-left: 5px;
        }

        .breadcrumb {
            border-radius: 0px;
        }

        .category-description {
            padding-top: 0px;
        }

        footer {
            padding-top: 40px;
        }

        .category-image {
            margin-top: 0px;
        }

        .category-image img {
            width: 100%;
        }

        .product-view .product-shop img {
            width: 100%;
        }

        .our-features-box .feature-box h3 {
            font-size: 13px;
        }

        .our-features-box .feature-box p {
            font-size: 11px;
        }

        .icon-globe-alt:before,
        .icon-support:before {
            font-size: 26px;
        }

        .icon-share-alt:before {
            font-size: 24px;
        }

        .footer-bottom .company-links li {
            margin-left: 0;
            float: none;
            margin: 0 10px 5px 0;
        }

        .footer-bottom .company-links ul {
            text-align: center;
        }

        footer .coppyright {
            float: none;
            text-align: center;
            margin-bottom: 8px;
        }

        .social ul li a {
            width: 35px;
            height: 35px;
            line-height: 32px;
        }

        .payment-accept img {
            margin-right: 6px;
        }

        footer address {
            width: 80%;
            margin: 18px auto 0px;
        }

        footer address span {
            float: none;
            margin-right: 8px;
        }

        footer address i {
            margin-left: 0px !important;
            display: none !important;
        }

        footer .footer-inner {
            margin-bottom: 10px;
        }

        .home-tabs {
            margin-top: 25px;
        }

        .latest-blog .container {
            padding-left: 15px;
            padding-right: 15px;
        }

        .category-description .owl-item .item img {
            width: 100%;
        }

        .our-features-box .feature-box {
            padding: 10px 0px;
            margin-bottom: 5px;
        }

        .product-view {
            margin-top: 0px;
        }

        .upsell-pro {
            margin-bottom: 20px;
        }

        .tab-content>.active {
            margin-top: 5px;
        }

        .welcome-msg {
            float: right;
        }

        .form-add-tags input.input-text,
        select,
        textarea {
            width: 65%;
        }

        .products-grid .item .actions .quick-view-btn,
        .products-grid .item .actions .link-wishlist,
        .products-grid .item .actions .link-compare,
        .products-grid .item .add_cart .btn-cart {
            width: 40px;
            height: 40px;
            line-height: 40px;
        }

        .main-container {
            margin-top: 15px;
        }

        .sticky-header {
            position: relative;
        }

        /*========== End 1 to 4 pages ==========*/
        .navbar-nav .new_title {
            padding: 10px 0px;
        }

        .category-product .navbar-nav>li>a {
            margin-top: 0px;
        }

        .category-product .navbar-nav>li {
            float: left;
            margin-bottom: 5px;
        }

        .category-product .navbar-nav>li.active a {
            border: none;
        }

        .new_title h2 {
            font-size: 22px;
        }

        .category-product .nav.navbar-nav {
            padding-right: 15px;
        }

        .content-page .category-product {
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .hot-deal .products-grid .item {
            margin: 25px auto;
            width: 65%;
        }

        .featured-pro {
            padding: 5px 0;
            margin-bottom: 20px;
        }

        .product-bestseller {
            margin: 15px 5px;
        }

        .related-pro .block-content {
            width: 100%;
            margin: auto;
            border: none;
            padding: 0px 5px 15px
        }

        .related-pro .home-block-inner {
            border-width: 0 !important;
            float: none;
            width: 100%;
            display: inline-block;
        }

        .related-pro .home-block-inner .pretext {
            margin: 15px;
        }

        .related-pro .owl-theme .owl-controls {
            left: 82%;
            top: -140px;
            width: 0;
        }

        .related-pro .slider-items-products .owl-buttons a,
        .related-pro .slider-items-products .owl-buttons a:hover {
            color: #fff;
            transition: all 0s ease 0s;
        }

        .related-pro .owl-theme .owl-controls {
            left: 82%;
            top: -140px;
        }

        .bestsell-pro .owl-theme .owl-controls {
            left: auto;
            right: 50px;
            /* top: -13%; */
            width: 1%;
        }

        .related-pro .owl-theme .owl-controls {
            left: auto;
            top: -140px;
            right: 40px;
        }

        .bestsell-pro .slider-items-products .owl-buttons .owl-next,
        .related-pro .slider-items-products .owl-buttons .owl-next {
            right: -40px;
        }

        .new-arrivals-pro .home-block-inner {
            width: 100%;
        }

        .new-arrivals-pro .block-content {
            width: 100%;
            margin: auto;
            border: none;
        }

        .new-arrivals-pro .block-title {
            padding: 15px;
        }

        .new-arrivals-pro .home-block-inner .pretext {
            margin: 15px;
        }

        .new-arrivals-pro .owl-theme .owl-controls {
            left: auto;
            top: 1%;
            right: 12%;
            width: 1%;
        }

        .new-arrivals-pro .slider-items-products .owl-buttons .owl-next {
            right: -55px;
        }

        .featured-pro .home-block-inner,
        .upsell-pro .home-block-inner {
            width: 100%;
            height: 225px;
            float: none;
            position: relative;
            background-size: 100%;
        }

        .featured-pro .block-content,
        .upsell-pro .block-content {
            width: 100%;
            margin: auto;
            border: none;
        }

        .featured-pro .block-title,
        .upsell-pro .block-title {
            padding: 15px;
            margin-bottom: 0px;
        }

        .featured-pro .home-block-inner .pretext,
        .upsell-pro .home-block-inner .pretext {
            margin: 15px;
        }

        .featured-pro .owl-theme .owl-controls {
            left: auto;
            top: -18%;
            right: 12%;
            width: 1%;
        }

        .upsell-pro .owl-theme .owl-controls {
            top: -59%;
            right: 12%;
        }

        .featured-pro .slider-items-products .owl-buttons .owl-next,
        .upsell-pro .slider-items-products .owl-buttons .owl-next {
            right: -55px;
        }

        .blog-outer-container .new_title {
            padding: 15px;
        }

        .blog-inner {
            margin: auto 5px 5px;
        }

        .blog-preview_item {
            display: inline-block;
            padding-bottom: 12px;
        }

        .two-width .banner-images_content {
            width: auto;
        }

        .banner-images li.grid figure.effect h2 strong {
            font-size: 18px;
        }

        .banner-images_content {
            padding: 5px 0px;
        }

        .our-features-box li {
            width: 100%;
            text-align: left;
        }

        .our-features-box .col-lg-3 .feature-box.last {
            text-align: center;
        }

        .category-product .navbar-nav>li:first-child {
            width: 100%;
        }

        .our-features-box .col-lg-3 .feature-box.first {
            text-align: center;
        }

        #limiter {
            float: left;
        }

        .nav-tabs.product-tabs>li {
            margin-right: 0px;
            border-bottom: 1px #e5e5e5 solid;
        }

        .nav-tabs.product-tabs>li:last-child {
            border: none;
        }

        .bestsell-pro a.view_more_bnt,
        .featured-pro a.view_more_bnt,
        .new-arrivals-pro a.view_more_bnt,
        .related-pro a.view_more_bnt,
        .upsell-pro a.view_more_bnt {
            margin: 10px 15px 18px;
        }

        .bottom-banner-img .banner-overly,
        .bottom-banner-img {
            float: none;
            height: inherit;
            margin: 15px auto;
            text-align: center;
        }

        .bottom-img-info {
            top: -20px;
        }

        .bottom-img-info.last {
            top: -30px;
            width: 390px;
        }

        .custom-slider {
            width: 360px;
            margin: auto;
        }

        .small-tag {
            letter-spacing: 2px;
        }

        .bottom-banner-img1 {
            margin: auto;
            text-align: center;
            width: 390px;
            margin-bottom: 15px;
        }

        .bottom-banner-img1.last h6 {
            display: none;
        }

        .bottom-banner-img1.last {
            margin-bottom: 30px;
        }

        .top-cart-contain.sticky-topcart {
            display: none;
        }

        .nav-inner:before,
        .nav-inner:after {
            display: none;
        }

        .hot-deal {
            margin-top: 0px;
        }

        .block.block-progress,
        .block.block-compare {
            margin-bottom: 15px;
        }

        .my-wishlist .buttons-set2 .btn-update {
            margin-bottom: 10px;
        }

        .checkout-progress li {
            width: 50%;
        }

        .multiple-checkout .buttons-set .button {
            margin-bottom: 10px;
        }

        #modal-quickview .modal-dialog {
            width: 94%;
        }

        .magik-quickview .product-view .flexslider-thumb {
            padding: 0 20px;
        }

        .newsletter-sign-box {
            left: auto;
            margin: auto;
            max-width: 100%;
            padding: 40px 15px 15px;
            right: auto;
            margin-top: 3%;
            width: auto;
        }

        .popup1 .x {
            right: -8px;
            top: -24px;
        }

        .newsletter-sign-box .newsletter_img {
            margin: 15px 0;
        }

        .newsletter-sign-box .input-box input {
            width: 95%;
            margin-bottom: 10px;
        }

        .popup1 button.x {
            right: 8px;
            top: -24px;
        }

        .col-mid .img-block,
        .col-mid .img-block1 {
            text-align: center;
        }

        .pro_row.products-grid .item {
            width: 50%;
        }

        .bottom_pagination .text-right {
            margin-top: 10px;
            width: 49%;
            float: right;
        }

        .bottom_pagination .text-left {
            text-align: left;
            width: 49%;
            float: left;
        }

        #sort-by {
            float: right;
        }

        .products-list .item-img {
            width: 34%;
        }

        .products-list .item-info {
            margin-left: 15px;
            width: 62%;
        }

        #shopping-cart-table .input-group {
            display: inline-flex;
        }

        .blog-related-pro .owl-theme .owl-controls {
            top: -20%;
            color: #fff !important;
        }

        .blog-related-pro .slider-items-products .owl-buttons .owl-prev {
            left: -22px;
        }

        .related-article .blog-inner {
            margin: 20px auto;
        }

        .box-hover .add-to-links {
            margin: 0 0 0 1px;
        }

        .box-hover .add-to-links li a:hover {
            padding-right: 8px;
            margin: 0 5px 0 0px;
            font-size: 10px;
        }

        .box-hover .add-to-links li a {
            letter-spacing: normal;
        }

        .box-hover .add-to-links li a:hover:after {
            margin-right: 5px;
        }

        .bottom-banner-section .banner-details {
            left: 10px;
            top: 6px;
            width: 95%;
        }

        .bottom-banner-section .banner-title {
            font-size: 16px;
            letter-spacing: normal;
            line-height: 14px;
            margin-top: 0px;
        }

        .bottom-banner-section .banner-sub-title {
            font-size: 12px;
        }

        .bottom-banner-section .banner-desc {
            display: none;
        }

        .banner-bnt {
            font-size: 10px;
            margin-top: 4px;
            padding: 4px 6px;
        }

        .col-mid,
        .col-right {
            text-align: center;
            width: 100%;
        }

        .col-inner,
        .col-right .image-item {
            display: inline-block;
            margin: auto;
        }

        .bestsell-pro .slider-items-products .owl-buttons .owl-prev {
            left: 10px;
        }

        .bottom-banner-section {
            margin-bottom: 20px;
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {

        /*========== 1 to 4 pages ==========*/
        .cross-sell-pro .new_title h2 {
            font-size: 14px;
        }

        .product-view .flexslider-thumb .flex-direction-nav {
            z-index: 0;
        }

        .cat-img-title.cat-box {
            margin: 0;
            text-align: left;
            left: 4%;
            top: 11%;
        }

        .small-tag {
            letter-spacing: 2px;
        }

        .cat-img-title .cat-heading {
            font-size: 18px;
        }

        #nav .level0-wrapper2 .col-1 {
            width: 100%;
        }

        #nav .level0-wrapper2 .col-2 {
            display: none;
        }

        .col-2 .menu_image {
            display: inline-block;
        }

        .col-2 .menu_image1 {
            display: inline-block;
        }

        .footer-bottom .company-links li {
            margin-left: 15px;
        }

        .footer-bottom .company-links li a {
            font-size: 11px;
        }

        .payment-accept {
            width: 100%;
            text-align: center;
            display: inline-block;
            margin: 20px auto 0;
            padding: inherit;
        }

        .social ul li a {
            width: 35px;
            height: 35px;
            line-height: 35px;
        }

        .our-features-box .feature-box {
            margin-bottom: 5px;
        }

        .our-features-box ul {
            width: 100%;
            padding: 0px 0px;
        }

        .our-features-box li {
            margin: 0 15px 0px 15px;
            width: 29.5%;
        }

        .our-features-box li:first-child {
            margin: 0px 15px 0px 0px;
        }

        .our-features-box li:last-child {
            margin: 0px 0px 0px 15px;
        }

        .header-banner .assetBlock {
            width: 100%;
        }

        .toplinks div.links div a {
            padding: 0 8px 0 0
        }

        .header-container .right_menu {
            margin-top: 6px;
        }

        .product-view .flexslider-thumb .flex-prev {
            left: -10px;
        }

        .product-view .flexslider-thumb .flex-next {
            right: -8px;
        }

        .product-view .flexslider-thumb {
            padding: 0 20px;
        }

        .email-addto-box {
            margin-top: 8px;
            margin-left: 0px;
        }

        .product-view .product-shop .add-to-links li {
            padding: 0 6px 0 0;
        }

        .product-view .email-friend {
            margin: auto;
        }

        .product-view .product-shop .add-to-box .pull-right {
            float: left !important;
        }

        .products-list .add-to-links span {
            display: none;
        }

        #compare-items .btn-remove1 {
            top: 0px;
        }

        .our-features-box .feature-box .content {
            text-align: left;
            margin-bottom: 10px;
        }

        .footer-inner .newsletter-wrap {
            width: 52%;
            display: inline-block;
        }

        .social h4 {
            margin: 6px 0 0px;
        }

        .footer-bottom .company-links li {
            float: left;
        }

        .footer-inner .social {
            width: 45%;
            float: right;
        }

        #sequence-theme .controls a {
            background-size: 50px;
        }

        .welcome-msg {
            display: none;
        }

        .search-btn-bg {
            position: absolute;
            padding: 6px 3px;
        }

        #nav ul.level0>li {
            width: 30%;
        }

        #nav ul.level0>li.last {
            width: 30%;
        }

        #nav ul.level1>li a {
            display: inline-flex;
            float: none;
        }

        #nav .level0-wrapper .nav-add .push_item {
            width: 45%;
            height: auto;
            margin-right: 15px;
        }

        #nav .level0-wrapper .nav-add .push_item img {
            width: 100%;
            height: auto;
        }

        #nav .level0-wrapper .nav-add .push_item .push_img a {
            width: 100%;
        }

        #nav .level0-wrapper .nav-add .push_item_last {
            width: 45%;
        }

        #nav .level0-wrapper .nav-add .push_item_last img {
            width: 100%;
        }

        #nav .level0-wrapper,
        #nav.classic .parent>ul {
            margin: auto;
            padding: 10px 4px 10px 0px;
        }

        .nav-block-center {
            margin-top: 0px;
        }

        .grid12-5 {
            width: 23%;
        }

        .grid12-5 img {
            width: 100%;
        }

        .grid12-3 {
            width: 20.8%;
        }

        .grid12-3 img {
            width: 100%;
        }

        #nav .grid12-8 ul.level0>li {
            width: 21% !important;
        }

        .footer-column {
            width: 30%;
        }

        .grid12-3 a img {
            width: 100%;
        }

        .grid12-4 {
            width: 30%;
            margin: 5px 20px 0 0;
            display: none;
        }

        .grid12-4 a img {
            width: 245px;
        }

        .grid12-8 ul.level0>li {
            width: 145px !important;
        }

        .grid12-8 .cat-img img {
            width: 175px !important;
        }

        .grid13-8 {
            width: 70%;
        }

        .grid12-8 {
            width: 100%;
        }

        .grid13-8 ul.level0>li {
            width: 240px !important;
        }

        .custom-menu .grid12-5 img {
            width: 100%;
        }

        #nav .level0-wrapper .nav-add {
            padding-left: 10px;
        }

        #nav ul.level0>li .cat-img img {
            width: 135px;
        }

        .mini-cart .basket a {
            min-width: 100% !important;
            font-size: 12px;
        }

        .service-section .services {
            border-bottom: 1px #e5e5e5 solid;
        }

        .service-section .services span {
            font-size: 11px;
        }

        .col {
            padding: 20px 0px 20px 0px;
            width: 100%
        }

        .col img {
            width: 100% !important;
        }

        .page-title h1 {
            font-size: 24px;
        }

        .category-description .slider-items-products .owl-buttons a {
            left: 5px;
            padding: 2px 3px 10px 0px;
            height: 30px;
            width: 30px;
        }

        .category-description .slider-items-products .owl-buttons .owl-prev a:before {
            font-size: 20px;
            padding: 0px 10px;
            line-height: 24px;
        }

        .category-description .slider-items-products .owl-buttons .owl-next a:before {
            font-size: 20px;
            padding: 0px 10px;
            line-height: 24px;
        }

        .toolbar .pager {
            float: left;
            margin: 0px 0px;
        }

        .pager .pages li a {
            padding: 2px 8px;
        }

        .category-products ul.products-grid li.item {
            width: 50%;
        }

        .sidebar ol,
        .sidebar ul li ul {
            padding: 0px !important;
        }

        .box-category>ul>li ul>li>a {
            padding: 6px 10px !important;
        }

        .col-left .block-cart ul li.item {
            display: inline-block;
        }

        .col-left .block-cart .block-content ul li .product-details {
            width: 100%;
            margin-top: 10px;
        }

        .side-nav-categories {
            margin-bottom: 10px;
        }

        ol#compare-items li a.product-name {
            padding: 0 10px 0 0;
            width: 86%;
        }

        .button,
        .btn,
        .button-inverse,
        .button-vote,
        .sidebar .button,
        .sidebar .btn,
        .dropdown .dropdown-menu .button,
        .buttons-set .back-link a,
        .scrolltop,
        .button-tabs li a {
            margin-bottom: 5px;
        }

        #recently-viewed-items .product-name {
            width: 90%;
        }

        .block-banner img {
            width: 100%;
        }

        .block .block-content {
            padding: 10px 5px 5px 15px;
        }

        .block {
            margin: 0px 0px 25px 0px;
        }

        .block:last-child {
            margin: 0px 0px 0px 0px;
        }

        .products-list .product-shop {
            width: 51%;
            margin-left: 15px;
        }

        .product-view .product-shop .add-to-links .link-wishlist {
            margin-left: 0px;
        }

        .product-view .product-shop .add-to-links .link-compare:before {
            margin-right: 5px;
        }

        .product-img-box img {
            width: 100%;
        }

        .product-view .product-name h1 {
            font-size: 23px;
        }

        .product-view .product-name h1 {
            font-size: 23px;
            font-weight: 600;
        }

        .sidebar .block dl {
            padding: 0px 10px;
        }

        #shopping-cart-table {
            margin-top: 0px;
        }

        label {
            font-weight: normal;
        }

        .cart-collaterals h3 {
            font-size: 12px;
        }

        .cart-collaterals .col-sm-4 {
            /* padding-right: 0; */
        }

        .cart-collaterals .col-sm-4 .totals {
            margin-right: 15px;
        }

        .cart-collaterals h3 {
            padding: 10px;
        }

        .crosssel {
            margin: 0px 0px 20px;
        }

        .crosssel h2 {
            font-size: 20px;
        }

        .newsletter-sign-box {
            left: 15%;
            min-width: 400px;
            width: 70%;
            top: 10%;
        }

        .block-account .block-content li a {
            padding: 0 0 0 12px;
            display: inline-block;
        }

        #nav .nav-custom-link .header-nav-dropdown-wrapper p {
            min-height: 78px;
        }

        .our-features-box .seprator-line {
            width: 1% !important;
            margin-right: 0%;
            margin-left: 0%;
            height: 113px;
        }

        .top-banner-section {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .products-grid .item .item-inner .item-info .info-inner .item-title a {
            font-size: 13px;
        }

        .regular-price .price {
            font-size: 13px;
        }

        .offer-slider {
            margin: 0px auto 30px;
        }

        .featured-pro {
            margin-top: 30px;
            padding-top: 0px;
        }

        .latest-blog {
            padding: 30px 0px;
            margin-top: 10px;
        }

        .brand-logo .slider-items-products .owl-buttons .owl-prev {
            left: 0px;
        }

        .top-categories .slider-items-products .owl-buttons .owl-prev a {
            left: -10px;
        }

        .top-categories .slider-items-products .owl-buttons .owl-prev a {
            left: -10px;
        }

        .category-description .slider-items-products .owl-buttons .owl-prev {
            left: 20px;
        }

        .products-list .product-shop .btn-cart {
            margin-bottom: 0px;
        }

        .product-view .product-shop img {
            width: 100%;
        }

        .box-reviews .review {
            width: 80%;
        }

        .box-reviews2 .box.visible {
            overflow: hidden;
        }

        .product-shop .social ul li {
            margin: 0 5px 0 0;
        }

        .top-search {
            float: none;
            margin-top: 43px;
            margin-right: 0px;
        }

        .latest-blog .blog_inner {
            margin-top: 25px;
        }

        .latest-blog .post-date {
            top: -5px;
        }

        .category-description .owl-item .item img {
            width: 100%;
        }

        .cat-img-title.cat-box {
            width: 250px;
            margin-left: 0px;
            height: 200px;
            padding: 20px 15px;
            margin-top: 0px;
        }

        .category-image img {
            width: 100%;
        }

        #search {
            width: 215px;
        }

        .banner-images li.grid figure.effect h2 {
            padding: 16px;
        }

        .banner-images li.grid figure figcaption {
            padding: 0px;
        }

        .banner-images li.two-width {
            margin-bottom: 12px;
        }

        .blog-img:hover a.info {
            -webkit-transform: translateY(45px);
            -moz-transform: translateY(45px);
            -o-transform: translateY(45px);
            -ms-transform: translateY(45px);
            transform: translateY(45px);
        }

        /*========== End 1 to 4 pages ==========*/
        .hot-deal .products-grid .item {
            margin: 25px auto;
            width: 270px;
        }

        .bestsell-pro .home-block-inner,
        .related-pro .home-block-inner {
            width: 35%;
        }

        .featured-pro .block-content,
        .upsell-pro .block-content {
            margin-right: 35%;
            width: 65%;
        }

        .featured-pro .home-block-inner,
        .upsell-pro .home-block-inner {
            width: 35%;
        }

        .new-arrivals-pro .block-content {
            margin-left: 35%;
            width: 64%;
        }

        .new-arrivals-pro .home-block-inner {
            width: 35%;
        }

        .related-pro .owl-theme .owl-controls {
            left: -10%;
            top: 3.5%;
            width: 4%;
        }

        .new-arrivals-pro .owl-theme .owl-controls {
            left: -8%;
            top: 3.5%;
            width: 4%;
        }

        .featured-pro .owl-theme .owl-controls,
        .upsell-pro .owl-theme .owl-controls {
            right: -50%;
            top: 3.5%;
            width: 4%;
        }

        .banner-images li {
            width: 32%;
        }

        .banner-images li.right-space {
            margin-right: 12px;
        }

        .two-width .banner-images_content {
            height: inherit;
            padding: 2% 10px 10px;
            width: 250px;
        }

        .banner-images li.grid figure.effect h2 strong {
            font-size: 15px;
            padding: 0px;
            letter-spacing: 0.5px;
        }

        .banner-images_content {
            padding: 8px 0px
        }

        .our-features-box .feature-box,
        .our-features-box .col-lg-3 .feature-box.last {
            padding: 5px 0px;
        }

        footer address {
            width: 70%;
        }

        footer .footer-inner {
            margin-bottom: 15px;
        }

        .products-list .actions .add-to-links a.link-wishlist {
            margin: 0 3px 0 0;
        }

        .products-list .product-shop button.button {
            margin-right: 2px;
        }

        .nav-tabs.product-tabs>li {
            margin-right: 14px;
        }

        .bottom-banner-img .banner-overly,
        .bottom-banner-img {
            height: 212px;
            text-align: center;
        }

        #nav {
            padding-left: 6px;
        }

        .custom-slider .carousel-caption p {
            display: none;
        }

        #carousel-example-generic .carousel-caption h3 a {
            font-size: 20px;
        }

        #limiter {
            float: left;
        }

        .display-product-option .pager .pages {
            margin-top: 5px;
        }

        bottom-banner-img1.last {
            position: relative;
        }

        #nav>li>a>span {
            padding: 0px 7px;
        }

        .top-cart-contain.sticky-topcart {
            right: 2%;
            transition: none 0s ease 0s;
            position: relative;
        }

        .col-mid .img-block {
            margin-top: 15px;
        }

        .bestsell-pro {
            margin-top: 0px;
        }

        .bestsell-pro .owl-theme .owl-controls {
            /* top: -12%; */
            width: 4%;
        }

        .related-pro .block-content {
            margin-left: 35.3%;
            width: 64.7%;
        }

        .checkout-progress li {
            width: 18.9%;
        }

        #modal-quickview .modal-dialog {
            width: 94%;
        }

        .magik-quickview .product-view .flexslider-thumb {
            padding: 0 40px;
        }

        .image-hover2 a:before {
            top: 40%;
        }

        .block-company-wrapper .dropdown-menu li {
            padding: 5px 15px 5px 10px;
        }

        .col-inner {
            text-align: right;
        }

        .box-category>ul>li>a:before {
            padding-right: 2px;
        }

        #column-left.col-left {
            padding-right: 5px;
        }

        .box-category>ul>li>a {
            font-size: 11px;
        }

        .side-nav-categories .block-title,
        .sidebar .panel-default>.panel-heading {
            padding: 12px 10px;
        }

        .box-category {
            padding: 8px 10px 15px;
        }

        #column-left .special-products .product-layout {
            padding: 10px;
        }

        .products-list .item-img {
            width: 34%;
        }

        .products-list .item-info {
            margin-left: 15px;
            width: 62%;
        }

        .blog-related-pro .owl-theme .owl-controls {
            top: -18.5%;
            width: 3.8%;
        }

        .related-article .post-meta li {
            margin-right: 5px;
        }

        footer .footer-inner .newsletter-wrap #subscriber_content.required {
            left: 2%;
            top: 45%;
        }

        .newsletter-sign-box .input-box input {
            width: 70%;
        }

        .page-heading {
            float: none;
            width: 100%;
            margin-bottom: 12px
        }

        #sort-by {
            margin: 0px 10px 0px 0px;
        }

        .pager #limiter label,
        #sort-by label {
            display: none;
        }

        .magik-quickview .product-view .product-shop .add-to-box .add-to-cart label {
            display: none;
        }

        .toolbar.tool-bar #sort-by {
            margin: 1px 10px 0 0;
        }

        .bottom-banner-section .banner-details {
            left: 10px;
            top: 15px;
            width: 95%;
        }

        .bottom-banner-section .banner-title {
            font-size: 28px;
            letter-spacing: normal;
            line-height: 24px;
            margin-top: 0px;
        }

        .bottom-banner-section .banner-sub-title {
            font-size: 14px;
        }

        .bottom-banner-section .banner-desc {
            font-size: 12px;
            margin-top: 0;
        }

        .banner-bnt {
            font-size: 12px;
            margin-top: 6px;
            padding: 5px 8px;
        }

        .col-mid,
        .col-right {
            text-align: center;
        }

        .col-inner,
        .col-right .image-item {
            display: inline-block;
            margin: auto;
        }
    }

    @media (min-width: 992px) and (max-width: 1279px) {

        .bottom-banner-img .banner-overly,
        .bottom-banner-img {
            height: 181px;
            text-align: center;
        }

        /*========== 1 to 4 pages ==========*/
        .products-list .actions .add-to-links a.link-compare,
        .products-list .actions .add-to-links a.link-wishlist,
        .products-list .actions .add-to-links a.link-compare:hover,
        .products-list .actions .add-to-links a.link-wishlist:hover {
            padding: 8px 7px !important;
            float: left;
        }

        .category-image img {
            width: 100%;
        }

        .category-description .owl-item .item img {
            width: 100%;
        }

        .latest-blog .post-date {
            top: -30px;
        }

        .products-list .product-shop .btn-cart,
        .products-list .product-shop .btn-cart:hover {
            float: left;
        }

        .category-description .slider-items-products .owl-buttons .owl-next {
            right: 8px;
        }

        .category-description .slider-items-products .owl-buttons .owl-prev {
            left: 20px;
        }

        .cross-sell-pro .new_title h2 {
            font-size: 20px;
        }

        .product-view .flexslider-thumb .flex-direction-nav {
            z-index: 0;
        }

        .payment-accept {
            width: 100%;
            text-align: center;
            display: inline-block;
            margin: 20px auto 0;
            padding: inherit;
        }

        .our-features-box li {
            margin: 0px 15px 0px 15px;
            width: 26.9%;
        }

        .our-features-box li:first-child {
            margin: 0px 15px 0px 0px;
        }

        .our-features-box li:last-child {
            margin: 0px 0px 0px 15px;
        }

        .our-features-box ul {
            width: 100%;
        }

        .header-banner .assetBlock {
            width: 100%;
        }

        #nav .level0-wrapper .nav-add {
            padding-left: 0;
            overflow: visible;
        }

        .col-2 .menu_image img {
            width: 100%;
        }

        .col-2 .menu_image1 img {
            width: 100%;
        }

        #nav .level0-wrapper2 .col-1 {
            width: 65%;
        }

        .toplinks div.links div a {
            padding: 0 0 0 8px;
        }

        .our-features-box ul {
            width: 100%;
            padding-bottom: 10px;
        }

        .product-view .flexslider-thumb .flex-prev {
            left: -10px;
        }

        .product-view .flexslider-thumb .flex-next {
            right: -8px;
        }

        .product-view .flexslider-thumb {
            padding: 0 22px;
        }

        .product-view .email-friend {
            margin: auto;
        }

        .product-view .product-shop .add-to-box .pull-right {
            float: left !important;
            margin-top: 10px;
        }

        .email-addto-box {
            margin-left: 10px;
        }

        .product-additional .block-product-additional img {
            width: 100%;
        }

        .footer-inner .newsletter-wrap {
            width: 52%;
            display: inline-block;
            float: left;
        }

        .social h4 {
            margin: 6px 0 5px;
        }

        .footer-bottom .company-links li {
            float: left;
            margin-left: 10px;
        }

        .footer-inner .social {
            width: 45%;
            float: right;
        }

        #sequence-theme .controls a {
            background-size: 50px;
        }

        .search-btn-bg {
            position: absolute;
            padding: 6px 3px;
        }

        #nav .level0-wrapper,
        #nav.classic .parent>ul {
            padding-top: 15px;
        }

        #nav ul.level0>li {
            width: 14.2%;
        }

        #nav ul.level0>li.last {
            width: 136px;
        }

        #nav ul.level1>li a {
            display: inline-flex;
            float: none;
        }

        #nav .level0-wrapper .nav-add .push_item {
            width: 47%;
            height: auto;
            margin-right: 15px;
        }

        #nav .level0-wrapper .nav-add .push_item img {
            width: 100%;
            height: auto;
        }

        #nav ul.level0>li .cat-img img {
            width: 100%;
        }

        #nav .level0-wrapper .nav-add .push_item .push_img a {
            height: 95px;
            width: 100%;
        }

        #nav .level0-wrapper .nav-add .push_item_last {
            width: 47%;
        }

        #nav .level0-wrapper .nav-add .push_item_last img {
            width: 100%;
        }

        #nav .grid12-8 ul.level0>li {
            width: 21% !important;
        }

        .nav-block-center {
            margin-top: 5px;
        }

        .grid12-5 {
            width: 23%;
        }

        .grid12-5 img {
            width: 100%;
        }

        .grid12-3 {
            width: 21.8%;
        }

        .grid12-3 img {
            width: 100%;
        }

        #nav .nav-custom-link .header-nav-dropdown-wrapper p {
            font-size: 12px;
            min-height: 55px;
        }

        .grid12-4 {
            width: 30%;
            margin: 5px 20px 0 0;
        }

        .grid12-4 a img {
            width: 100%;
        }

        .grid12-8 ul.level0>li {
            width: 185px !important;
        }

        .grid12-8 .cat-img img {
            width: 185px !important;
        }

        .grid13-8 {
            width: 71%;
        }

        .grid12-8 {
            width: 65%;
        }

        #nav .grid13-8 ul.level0>li {
            width: 150px;
        }

        .cat-img img {
            width: 170px;
        }

        .custom-menu .grid12-5 img {
            width: 100%;
        }

        .header-container .right_menu {
            margin-top: 8px;
        }

        .service-section .services {
            width: auto;
        }

        .col {
            padding: 20px 0px 20px 0px;
            width: 100%
        }

        .col img {
            width: 100% !important;
        }

        .magik-pdt-content a.link-compare {
            padding: 6px 8px;
        }

        .page-title h1 {
            font-size: 24px;
        }

        .cat-img-title .cat-heading {
            font-size: 28px;
        }

        .category-description .slider-items-products .owl-buttons a {
            left: 5px;
            padding: 2px 3px 10px 0px;
            height: 40px;
            width: 40px;
        }

        .category-description .slider-items-products .owl-buttons .owl-prev a:before {
            font-size: 20px;
            padding: 0px 13px;
            line-height: 34px;
        }

        .category-description .slider-items-products .owl-buttons .owl-next a:before {
            font-size: 20px;
            padding: 0px 13px;
            line-height: 34px;
        }

        .toolbar .pager {
            float: left;
        }

        .pager .pages label {
            display: none;
        }

        .box-category>ul>li ul>li>a {
            padding: 6px 10px !important;
        }

        .col-left .block-cart ul li.item {
            display: inline-block;
        }

        .col-left .block-cart .block-content ul li .product-details {
            width: 55%;
        }

        .side-nav-categories {
            margin-bottom: 20px;
        }

        ol#compare-items li a.product-name {
            width: 75%;
        }

        #recently-viewed-items .product-name {
            width: 90%;
        }

        .block-banner img {
            width: 100%;
        }

        .block-cart ul li.item img {
            width: 70px;
        }

        .block {
            margin: 0px 0px 25px 0px;
        }

        .block:last-child {
            margin: 0px 0px 0px 0px;
        }

        .products-list .product-shop {
            width: 67%;
            margin-left: 12px;
        }

        .block-progress .block-content {
            padding: 0px 10px;
        }

        .top-banner-section {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .featured-pro {
            margin-top: 35px;
        }

        .latest-blog {
            padding: 30px 0px;
            margin-top: 30px;
        }

        .brand-logo {
            margin: 15px 0px 0px 0px;
        }

        .top-categories {
            margin-top: 15px;
        }

        .brand-logo .slider-items-products .owl-buttons .owl-prev {
            left: 0px;
        }

        .top-categories .slider-items-products .owl-buttons .owl-prev a {
            left: 15px;
        }

        .top-categories .slider-items-products .owl-buttons .owl-next a {
            right: 15px;
        }

        /*========== End 1 to 4 pages ==========*/
        #nav .col-1 ul.level0>li {
            width: 29%;
        }

        .box-timer {
            left: 8px;
            top: 2%;
        }

        .hot-deal .products-grid .item {
            padding-bottom: 0px;
        }

        .hot-deal .item-info {
            padding-bottom: 12px;
        }

        .bestsell-pro .owl-theme .owl-controls,
        .new-arrivals-pro .owl-theme .owl-controls {
            left: inherit;
            top: -12%;
            width: 3%;
        }

        .related-pro .owl-theme .owl-controls {
            left: -5%;
            top: 3%;
            width: 3%;
        }

        .featured-pro .owl-theme .owl-controls,
        .upsell-pro .owl-theme .owl-controls {
            right: -30.5%;
            top: 4%;
            width: 2.2%;
        }

        .banner-images li.right-space {
            margin-right: 18px;
        }

        .banner-images li.two-width {
            margin-bottom: 15px
        }

        .banner-images li.grid figure.effect h2 strong {
            font-size: 18px;
        }

        .cat-img-title.cat-box {
            padding: 85px 40px 25px;
        }

        #limiter {
            margin-top: 0px;
        }

        .slider-items-products .owl-buttons .owl-prev,
        .slider-items-products .owl-buttons .owl-next {
            top: -25.5%;
        }

        .our-features-box {
            padding: 0px 0 20px;
        }

        .our-features-box .feature-box,
        .our-features-box .col-lg-3 .feature-box.last {
            text-align: center;
            margin-bottom: 5px;
            padding: 10px 0px;
        }

        .newsletter-wrap button.subscribe {
            float: none;
        }

        #carousel-example-generic .carousel-caption h3 a {
            font-size: 24px;
        }

        button.button.button-clear {
            margin-top: 8px;
        }

        .bottom-banner-img1 h3,
        .bottom-banner-img1.last h3 {
            margin-top: 60px;
        }

        .top-cart-contain.sticky-topcart {
            right: 2%;
            transition: none 0s ease 0s;
        }

        .sticky-topcart .mini-cart .basket a span.price,
        .sticky-topcart .cart-title {
            display: none;
        }

        .product-view .product-shop .add-to-box .btn-cart {
            padding: 7px 16px;
        }

        .common-home .category-products ul.products-grid li.item {
            padding: 0 7px;
        }

        .box-hover .add-to-links {
            margin: 0px;
        }

        .image-hover2 a:before {
            top: 40%;
        }

        .pager #limiter label,
        #sort-by label {
            display: none;
        }

        .products-list .item-img {
            width: 26%;
        }

        .products-list .item-info {
            margin-left: 15px;
            width: 71%;
        }

        .blog-related-pro .owl-theme .owl-controls {
            width: 2.8%;
        }

        footer .footer-inner .newsletter-wrap #subscriber_content.required {
            left: 2%;
            top: 42%;
        }

        .bottom-banner-section .banner-details {
            left: 18px;
            top: 20px;
            width: 95%;
        }

        .bottom-banner-section .banner-title {
            font-size: 36px;
            letter-spacing: normal;
            line-height: 32px;
            margin-top: 0px;
        }

        .bottom-banner-section .banner-sub-title {
            font-size: 16px;
        }

        .bottom-banner-section .banner-desc {
            font-size: 12px;
            margin-top: 10px;
        }

        .banner-bnt {
            font-size: 13px;
            margin-top: 10px;
            padding: 6px 8px;
        }

        .banner-details {
            left: 15px;
            top: 8px;
        }

        .banner-sub-title {
            font-size: 12px;
        }

        .banner-title {
            font-size: 15px;
        }

        .image-item .banner-details {
            line-height: 22px;
            padding: 0 15%;
            top: 14px;
        }

        .image-item .banner-title {
            font-size: 18px;
        }

        .banner-details .line {
            margin: 6px auto;
            width: 60px;
        }

        .image-item .banner-sub-title {
            font-size: 12px;
            line-height: 14px;
            padding: 0 14%;
        }

        .hot-deal .products-grid .item {
            padding: 0px;
        }
    }

    @media (min-width: 1280px) {
        #nav .container {
            width: 1220px;
        }

        .container {
            width: 1260px;
        }
    }


    .buy-btn {
        padding: 10px 16px;
        font-size: 11px;
        text-transform: uppercase;
        font-weight: bold;
        color: #fff;
        letter-spacing: 1px;
        display: inline-block;
        border: 1px {{ colorSettings()->brand_color }} solid;
        margin-top: 45px;
        float: left;
        background: {{ colorSettings()->brand_color }};
    }

</style>

{{-- Nannu Bhai design --}}

<style>
    /*========================Header Design========================*/
    .top-cart-contain.sticky-topcart {
        z-index: 1007;
    }

    .level0-wrapper {
        height: 100vh;
        /* overflow: auto; */
    }

    .level0 {
        padding-bottom: 30px !important;
    }

    #nav ul.level0>li {
        width: 21.5%;
    }

    .sticky-nav {
        position: sticky;
        width: 100%;
        top: 0;
        left: 0;
        background-color: #01362e !important;
        z-index: 999999;
    }

    
    @media only screen and (max-width: 766px) {
        .top-cart-contain.sticky-topcart {
            /* margin-top: 30px !important; */
            display: block !important;
        }

        .top-cart-contain {
            position: initial !important;
        }

        .mgk-top-cart {
            position: absolute;
        }

        .sticky-nav{
            position: fixed;
        }
        .delivery-details{
        margin-top:20px; 
    }
    }

    @media only screen and (min-width: 480px) and (max-width: 767px) {
        .top-cart-contain {
            margin-top: 30px !important;
        }
        .delivery-details{
        margin-top:20px; 
    }
    }

    @media only screen and (min-width: 767px) and (max-width: 991px) {
        .sticky-topcart {
            margin-top: 65px !important;
        }

        .top-cart-contain.sticky-topcart {
            position: fixed;
            top: -57px;
        }
        .delivery-details{
        margin-top:20px; 
    }
    }

  

    @media (min-width: 767.1px) and (max-width: 768px) {
        .hidden-sm {
        display: none!important;
        }
        .delivery-details{
        margin-top:20px; 
    }
    }


    @media only screen and (max-width: 479.5px) {
        

        .sticky-header {
            position: relative;
        }

        .nav-inner:before {
            content: none;
        }

        .nav-inner:after {
            content: none;
        }


        .related-pro .owl-theme .owl-controls {
        position: absolute;
        left: 82%;
        top: -140px;
        width: 0;
        }

        .related-pro .home-block-inner {
            float: initial;
            width: 100%;
        }

        .related-pro .block-content {
            width: 100%;
            margin: auto;
            border: none;
            padding: 0px 15px 15px;
        }
       
        .top-cart-contain{
            margin-top: 17.1px;
            /* margin-top: 6px; */
        }

    }

    @media only screen and (min-width:320.1px) and (max-width: 479.5px){
        .top-cart-contain.sticky-topcart {
            margin-top: 16px !important;
            display: block !important;
            /* margin-top: 8px; */
        }

        .btn-checkout{
            width: 48%;
        }

        .view-cart{
            width: 48%;
        }
    }

    @media only screen and (min-width: 479px) and (max-width: 479.9px) {
        .related-pro .owl-theme .owl-controls {
        position: absolute;
        left: 82%;
        top: -85px;
        width: 0;
        }
    }

    @media only screen and (min-width: 479.1px) and (max-width: 766px){
        .top-cart-contain.sticky-topcart{
            margin-top: 20px !important;
        }

        .mm-toggle-wrap{
            top: -60px !important;
        }

        .logo{
            padding-top: 10px;
        }

        .top-cart-contain.sticky-topcart{
            margin-top: 20px;
        }

        .top-cart-contain{
            margin-top: 20px !important;
        }
    }


    @media only screen and (max-width: 320px) {
        .sticky-header {
            position: relative;
        }

        .nav-inner:before {
            content: none;
        }

        .nav-inner:after {
            content: none;
        }

        .actions {
            display: flex;
            flex-direction: column;
        }

        .mini-cart .actions .btn-checkout {
            margin-bottom: 10px;
        }

        .top-cart-content .actions {
            padding: 0 25px;
        }

        .mini-products-list {
            overflow-x: hidden;
        }

        .top-cart-contain.sticky-topcart{
            margin-top: 8px;
        }

        .mm-toggle-wrap{
            margin-top: 8px;
        }
        .top-cart-contain{
            /* margin-top: 12px; */
            margin-top: 8px;
        }
    }

    @media only screen and (max-width: 320px) {
        .logo {
            margin-left: -19px;
        }

        .logo img {
            height: 43px;
        }

        /*========Product Details Page Slider===========*/
        .related-pro .home-block-inner {
            float: initial;
            width: 100%;
        }

        .related-pro .block-content {
            width: 100%;
            margin: auto;
            border: none;
            padding: 0px 15px 15px;
        }
    }

   


    @media only screen and (min-width:768px){
        .mgk-top-cart{
            display: flex;
            justify-content: space-between;
            align-items: end;
            flex-wrap: nowrap;
        }
    }


    @media only screen and (max-width: 319.9px) {
        .related-pro .owl-theme .owl-controls {
        position: absolute;
        left: 82%;
        top: -85px;
        width: 0;
        }

        .bestsell-pro a.view_more_bnt, .featured-pro a.view_more_bnt, .new-arrivals-pro a.view_more_bnt, .related-pro a.view_more_bnt, .upsell-pro a.view_more_bnt{
            margin:10px 15px 18px;
        }
    }

   



    .top-link-wishlist {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #mobile-menu {
        width: 100% !important;
        z-index: 99999999;
    }

    .mobile-menu-top {
        display: flex;
        justify-content: space-between;
        align-items: center
    }

    .fa-times {
        font-size: 24px;
        color: #60be74;
        cursor: pointer;
    }

    @media (min-width: 992px) and (max-width: 1279px) {

        .bestsell-pro .owl-theme .owl-controls,
        .new-arrivals-pro .owl-theme .owl-controls {
            top: -25% !important;
            width: 0% !important;
            right: 28px !important;
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .bestsell-pro .owl-theme .owl-controls {
            /* top: -25% !important; */
            width: 0% !important;
            right: 28px !important;
        }
    }

    @media only screen and (min-width: 480px) and (max-width: 767px) {
        .bestsell-pro .owl-theme .owl-controls {
            /* top: -27% !important; */
            width: 0% !important;
            right: 50px !important;
        }
    }

    @media only screen and (min-width: 300px) and (max-width: 479px) {
        .bestsell-pro .owl-theme .owl-controls {
            left: 80% !important;
            /* top: -29% !important; */
        }
    }

    @media only screen and (max-width: 766px) {
        .top-cart-content {
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 100%;
            transform: translateX(-100%);
            transition: transform .3s linear;
            z-index: 9999;
        }

        .mini-cart.open .top-cart-content {
            transform: translate(0);
        }

        @media (min-width: 992px){
            .col-md-3 {
            width: 25% !important;
            }
        }

        /* .top-cart-content {
            display: flex;
            flex-direction: column;
        } */

        .top-cart-content .actions {
            margin: auto 0px 15px 0px;
        }

        .top-cart-content .mini-products-list {
            text-align: left;
        }

        .cart-close_btn {
            display: block !important;
        }

        ul#cart-sidebar {
            padding: 20px 20px 0px;
        }

        .header-top {
            padding: 0;
        }

        .logo {
            margin-bottom: 10px;
        }
        .logo a {
            position: relative;
            z-index: 9;
        }
    }

    .top-cart-contain .dropdown-backdrop {
        z-index: 1;
    }

    .cart-close_btn {
        position: absolute;
        top: 0;
        right: 0;
        background: transparent;
        display: none;
    }

    @media only screen and (min-width: 767px) and (max-width:1278px) {
        .top-cart-content {
            display: none !important;
        }

        .mini-cart.open .top-cart-content {
            display: block !important;
        }
    }

    @media only screen and (min-width: 320px) and (max-width: 479px){
        .product-view .product-shop .add-to-box .btn-cart {
        margin-left: 5px;
        margin-top: 0px;
        padding: 7px 10px;
        }
    }



    /* Product Details page style */

    .fruits_heading {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1rem;
    }

    .fruit-items {
        overflow: hidden;
    }

 

    .fruit-items .nav-pills>li.active>a,
    .nav-pills>li.active>a:focus,
    .nav-pills>li.active>a:hover {
        background-color: #01362e;
    }

    .fruits_heading .fruits_heading__title {
        color: #01362e;
        font-size: 23px;
        font-style: normal;
        /* font-family: 'Montserrat', sans-serif; */
        font-weight: bold
    }

    .fruits_heading .fruits_heading__sub {
        color: #E8007E;
        font-size: 14px;
        font-weight: normal;
        font-style: italic
    }

    .fruit-items .nav .items-tab_count {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background-color: #eee;
        display: inline-block;
        text-align: center;
        line-height: 18px;
        margin-right: 4px;
        color: #01362e;
        display: none;
        opacity: 0;
    }

    .nav>li>a {
        padding: 10px;
    }

    .nav li {
        white-space: nowrap;
    }

    .nav-item.active .items-tab_count {
        display: inline-block;
        opacity: 1;
    }

    .tab-content_heading {
        border-bottom: 1px solid #000000;
    }

    .tab-content_heading__title {
        display: inline-block;
        font-size: 20px;
        font-weight: 600;
        font-style: italic;
    }

    .tab-content_heading__title__star {
        color: #E8007E;
        margin: 0 10px
    }

    .tab-content_heading__popover {
        font-size: 18px;
        font-weight: bold;
        color: #fff;
        background: #808080;
    }

    .w-100 {
        width: 100%;
    }

    .img-cart .card {
        border: 1px solid #01362e;
        width: 100%;
        cursor: pointer;
    }

    .cart-items-body {
        margin: 5px 0;
        padding: 0 5px;
    }

    .product-des {
        text-align: center;
    }

    .product-des__title {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 14px;
        color: #3a3939;
        margin: 4px 0;
        padding: 0 5px
    }

    .product-des__price {
        text-align: center;
        background-color: #01362e;
        color: #ffffff;
        font-weight: bold;
        padding: 4px 10px;
        margin-top: 11px;
        margin-bottom: 0;
    }

    .img-cart .card {
        position: relative;
    }

    .card_middle {
        position: relative;
    }

    .active-sign {
        position: absolute;
        bottom: -8px;
        right: -8px;
        font-size: 24px;
        color: #5dbc5f;
        width: 20px;
        height: 21px;
        text-align: center;
        line-height: 22px;
        background: #ffffff;
        border-radius: 50%;
        display: none
    }

    .card.active .active-sign {
        display: block;
    }

    .card.active {
        box-shadow: 0 0 10px 4px rgba(1, 54, 46, 0.6);
    }

    .cart-btn__suivant {
        background: #01362e;
    }

    .cart-btn_bottom {
        color: #ffffff
    }

    .cart-btn__suivant a:hover {
        color: #ffffff
    }

    .cart-btn {
        text-align: center;
    }

    .stepper_btn_next {
        padding: 10px 18px;
        background: #01362e;
        color: #ffffff;
        border-radius: 5px;
        border: 1px solid #01362e;
    }

    .stepper_previous_btn {
        padding: 7px 18px;
        background: transparent;
        color: #01362e;
        border-radius: 5px;
        border: 1px solid #01362e;
    }

    /* .stepper_change_btn:hover{
        color: #ffffff;
    } */

    .stepper_btn {
        text-align: center;
        margin-top: 15px;
    }

    .stepper_btn a:hover{
        color: #ffffff;
    }

    .stepper_btn a:focus, .stepper_btn a:hover{
        color: #ffffff;
        text-decoration: none;
    }

    .update_value {
        display: flex;
    }

    .btn-increase {
        border-radius: 0 5px 5px 0;
        padding: 3px 10px
    }

    .btn-decrease {
        border-radius: 5px 0 0 5px;
        padding: 3px 10px;
    }

    .value_input_field {
        height: 28px
    }

    .other-tab {
        margin-top: 0
    }

    .card-2 {
        border: 1px solid #01362e;
        position: relative;
    }


    .hovarable {
        cursor: pointer;
    }

    .hovarable.active {
        box-shadow: 0 0 10px 4px rgba(1, 54, 46, 0.6);
    }


    .hovarable.active .card-active {
        display: block;
    }

    .fruits_cart {
        border: 1px solid #e5e5e5;
        text-align: center
    }

    .fruits_cart .card {
        padding: 0 15px;
    }

    .card-header__title {
        font-size: 24px;
        font-weight: 700;
        color: #01362e;
    }

    .card-total {
        display: flex;
        justify-content: space-between;
    }

    .final_price {
        font-size: 16px
    }

    .card-total__price {
        font-size: 18px;
        font-weight: bold
    }

    .cart-quantity {
        text-align: left
    }

    .cart-right {
        margin: 10px 0;
    }

    .cart-right_btn .cart-btn__suivant {
        padding: 11px 35px
    }


    .tab-pane {
        padding: 0px 20px;
    }

    .modal-dialog-centered{
        display: flex;
        align-items: center;
        height: 100vh;
    }

    @media only screen and (max-width: 1199.5px) {
        .fruit-items .nav .nav-item {
            display: block;
            width: 100%;
            text-align: center;
        }
    }

    @media only screen and (min-width: 1200px) and (max-width: 1240px) {
        .nav>li>a {
            padding: 10px 8px
        }
    }

    @media only screen and (max-width: 1199.8px) {
        .fruits_cart {
            margin-top: 10px;
        }
    }
    .fruit-items .nav>li>a {
        background-color: #eee;
    }

    @media only screen and (max-width: 479.5px) {
        .mm-toggle-wrap {
            display: inline-block !important;
            position: absolute;
            top: -54px;
            /* margin-top: 8px; */
        }
    }

    @media only screen and (max-width: 479.5px) {
        .logo {
            text-align: center;
            padding-bottom: 0px;
            margin-top: 0px;
            line-height: normal;
            width: 100%;
            padding-top: 5px;
            margin-bottom: 10px;
        }
    }

    @media only screen and (min-width: 479.6px) and (max-width: 767px) {
        .mm-toggle-wrap {
            display: inline-block !important;
            position: absolute;
            top: -52px;
        }
    }

    .details_modal {
        padding: 2px 4px;
        background: #000000;
        color: #ffff;
        position: absolute;
        top: -1px;
        right: -1px;
        border-radius: 0;
    }

    .details_modal:hover {
        color: #ffffff;
    }


    @media (min-width: 1200px) {
        .modal-xl {
            width: 1140px !important;
        }
    }

    .content-center {
        text-align: center;
    }

    .modal-header {
        position: relative;
        z-index: 999999999;
        border-bottom: 0;
    }

    .modal-header .close {
        position: absolute;
        top: -8px;
        right: -12px;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: #000000;
        color: #ffffff;
        opacity: 1;
        border: 2px solid #ffff;
    }

    .stepper_btn {
        display: block;
    }

    #custom_box_cart .modal-dialog {
        overflow-y: initial !important
    }

    #custom_box_cart .modal-body__lg {
        height: 85vh;
        overflow-y: auto;
    }

    .modal-open .modal {
        overflow-y: hidden;
    }

    .mx-auto {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    .authore-image {
        max-width: 500px;
    }

    .cart_propduct_image {
        max-width: 350px;
    }

    .modal-content-all-p {
        font-size: 16px;
    }

    .modal-open .modal {
        z-index: 999999;
    }

    .product-img {
        height: 250px;
    }

    .product-img img {
        height:100%;
        object-fit: cover;
    }

    .product_title {
        margin-top: 10px;
    }

    /* cart page design */
    @media only screen and (max-width: 576px) {

        .cart-table .btn-update,
        .cart-table .btn-empty {
            float: left;
            font-size: 9px;

        }

        .cart-table .btn-continue {
            font-size: 9px;
        }

        .data-table thead th,
        .data-table thead td,
        .data-table tfoot th,
        .data-table tfoot td,
        .cart .totals table th,
        .cart .totals table td {
            font-size: 10px;
        }
    }

    @media only screen and (min-width: 320px) and (max-width: 479px) {
        .related-pro .owl-item .item {
            margin-right: 6px !important;
        }
    
    }

    @media (min-width: 300px) and (max-width: 319.7px) {
        .bestsell-pro .owl-theme .owl-controls{
            left: 90% !important;
        }
    }
/* Checkout Page */
    .cart_top_list-align{
        display: flex;
        align-items: center;
    }

    .checkout_form_heading{
        font-weight: 700;
    }

    /*====================Modal Style========================*/
    .modal-dialog{
        margin: 0 auto;
    }

    .password-wrapper{
        position: relative;
        width: 80%;
        margin-top: 5px;
        margin-bottom: 10px;
    }
    .password-wrapper__input{
        width: 100% !important;
        margin: 0 !important;
    }
    .password-wrapper__toggler{
        position: absolute;
        top: 0;
        right: 6px;
        height: 100%;
        background: transparent;
    }

    @media only screen and (max-width:991.5px){
        .md-sm-none{
        display: none;
        }
    }

    .top-gap{
        margin-top: 30px;
    }
    /* faq page */

   .accordion-tab--area{
       padding: 0;
   }
    .faq_header{
        f
    }
   .faq_header__title{
       font-size: 44px;
       text-align: center;
       font-weight:600;
       margin-bottom:50px
   }
 
    .acordion__btn{
        padding: 21px 50px 21px 30px;
        background: #01362e;
        color: #ffffff !important;
        position: relative;
        display: block;
        border-radius: 30px;
        box-shadow: 0 0 10px 0 rgb(0 0 0 / 5%);
        transition: all linear .3s;
        font-family: 'Montserrat', sans-serif;
        font-weight: 600
    }

    .acordion__btn.collapsed::after{
        content: '+';
        position: absolute;
        right: 25px;
        top: 50%;
        transform: translateY(-50%);
    }

    .acordion__btn[aria-expanded='true']{
        background: #ffffff !important;
        color: #01362e !important;
    }

    .acordion__btn::after{
        content: '-';
        position: absolute;
        right: 25px;
        top: 50%;
        transform: translateY(-50%);
    }

    .acordion__btn:hover{
        background: #ffffff;
        color: #01362e !important;
    }

    .panel-default>.bg-transparent{
        background: transparent;
    }

    .panel-group .panel-heading+.panel-collapse>.list-group, .panel-group .panel-heading+.panel-collapse>.panel-body{
        border-top: 0;
    }
    .panel--style{
        border: none;
        box-shadow: none;
        margin-bottom: 18px !important;
    }
    
    .bg-transparent a{
        text-decoration: none;
    }

    .d-flex{
        display: flex;
    }

    .dis-float{
        float: initial;
    }

    .panel-body__heading{
        font-family: 'Montserrat', sans-serif;
        color: #7f7f7f;
        font-size: 18px
    }

    .panel--content .panel--content__list{
        padding: 12px;
        list-style: none;
    }

    .panel--content__list li{
        font-size: 16px;
        color: #1f2732;
        font-weight: 400;
    }

    .panel--content__list li::before{
        content: '\2022';
        color: #01362e;
        font-weight: bold;
        font-size: 18px;
        display: inline-block;
        width: 1em;
        margin-left: -.5em;
    }

    .panel--content__details{
        font-family: 'Montserrat', sans-serif;
        color: #7f7f7f;
        font-size: 16px
    }
    /* contact page */
    .contact-forms ::placeholder{
        color: #7f7f7f;
        font-weight: bold;
        text-transform: uppercase;
    }

    .contact_form__header--title{
        font-size: 44px;
        font-weight: 600;
        margin-bottom: 35px
    }

    .contact_form__custom-input[type='text']{
        font-weight: bold;
    }

    .contact-forms input:focus::placeholder,
    .contact-forms textarea:focus::placeholder
    {
        color: transparent;
    }

    .shadow-none:focus{
        box-shadow: none;
        border-color: #01362e;
    }

    .contact_form__custom-input{
        padding: 26px 12px;
        border-radius: 0;
        background: #f4f4f5;
        margin-top: 24px;
        border: 1px solid transparent;
        box-shadow: none;
    }

    .custom-textArea{
        border-radius: 0;
        background: #f4f4f5;
        margin-top: 25px;
        border: 1px solid transparent;
        box-shadow: none;
    }

    .custom-textArea:focus{
        background: #f4f4f5;
    }

    .contact_form__custom-input[type='number']{
        appearance: none;
    }

    .contact_form__custom-input::-webkit-inner-spin-button,
    .contact_form__custom-input::-webkit-outer-spin-button{
        appearance: none;
    }

    .contact-main{
        margin-top: 0;
    }

    .submit__msg{
        display: block;
        margin-bottom: 15px;
    }

    .msg__submit--btn{
        padding: 12px 25px;
        border-radius: 25px;
        font-weight: 700;
        color: #ffffff;
        background: #01362e;
        border: 2px solid #01362e;
        transition: all linear .3s;
        margin-top: 30px
    }
    .msg__submit--btn:hover,.msg__submit--btn:active,.msg__submit--btn:focus{
        color: #01362e;
        background: #ffffff;
    }

    .invalid-feedback{
        width: 100%;
        max-width: 230px;
        padding: 0.25rem 1rem;
        margin-top: 0.5rem;
        font-size: 1.3rem;
        line-height: 1.5;
        color: #fff;
        background-color: rgba(220,53,69,.9);
        border-radius: 0.25rem; 
    }

    .success__msg--center{
        display: flex;
        height: 100vh;
        justify-content: center;
        align-items: center;
    }

    .success__msg{
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        margin-top: 70px
        
    }
    .success__inner{
        background: #28C76F;
        display: flex;
        align-items: center;
        padding: 1.35rem 1.5625rem;
        color: #ffffff;
        border-radius: 5px;
        box-shadow: 0 0.9375em 1.25em -0.3125em rgb(40 199 111 / 40%);
    }

    .success__inner--icon{
        font-size: 28px
    }

    .success__inner--title{
        margin: 0;
        margin-left: 6px;
        font-size: 18px;
        font-weight: 500
    }

    .btn-back{
        padding: 10px 30px;
        background: #01362e;
        margin-top: 40px;
        display: inline-block;
        border-radius: 5px;
        color: #ffffff !important;
        text-decoration: none;
        transition: all linear .3s;
        border: 1px solid #01362e;
        font-weight: 600
    }



    .btn-back:hover, 
    .btn-back:active{
        text-decoration: none;
        background: #ffffff;
        color: #01362e !important;
    }

    .btn-back:focus{
        text-decoration: none;
    }
   
/* button css */
.dropDown {
  position: relative;
}

.value-btn {
  padding: 13px 13px;
  border-radius: 5px;
  border: 1px solid #ddd;
  color: #60be74;
  font-weight: bold;
  cursor: pointer;
  background: #ffffff;
  transition: all linear 0.3s;
}

.button-arrow{
  margin-left:5px
}

.value-btn:hover {
  background: #01362e;
  color: #ffffff;
}

.show {
  background: #01362e;
  color: #ffffff;
}

.drop-items-inner {
  max-width: 420px;
  box-shadow: 0 0 14px -2px rgb(0 0 0 / 75%);
  background: #ffffff;
  position: absolute;
  top: 60px;
  border-radius: 5px;
  z-index: 99999;
  display: flex;
}

.left-item {
  display: inline-block;
  width: 210px;
  border-right:1px solid #ede5e6;
  position: relative;
}

.right-items {
  width: 210px;
  display: inline-block;
}
.arrow {
  width: 30px;
  height: 30px;
  background: #ffffff;
  position: absolute;
  top: -2;
  left: 17px;
  transform: rotate(133deg);
  z-index: -1;
}

:is(.drop-items ul) {
  list-style: none;
  margin: 0;
  padding: 0;
}

:is(.drop-items li) {
  padding: 5px 8px;
  color:#878787;
  font-size:13px;
  font-weight:700;
}

.custom-date-one{
    order: 1;
}

.custom-date-two{
    order: 2;
}


.drop-items li:hover {
  background-color: #01362e;
  color:#ffffff;
}

.drop-items {
  display: none;
}

.dropDown .active {
  display: block;
}

.custom-date-pick{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 10px 0;
}

.date-btn{
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ddd !important;
  color: #60be74;
  font-weight: bold;
  cursor: pointer;
  background: #ffffff;
  transition: all linear 0.3s;
  padding-right: 46px;
}

.date-btn:hover{
    background: #01362e;
    color: #ffffff;
}

.custom-date-pick .open .date-btn{
    background: #01362e !important;
    color: #ffffff !important;
}

.date-drop li{
   padding: 5px 8px;
  color:#878787;
  font-size:13px;
  font-weight:700;
  transition: all linear 0.3s;
}

.date-drop li:hover{
background: #01362e;
color: #ffffff;
}

.delpi-btn{
  padding: 10px 30px;
  order-radius: 5px;
  border: 1px solid #ddd !important;
  color: #60be74;
  font-weight: bold;
  cursor: pointer;
  background: #ffffff;
  transition: all linear 0.3s;
  display: flex;
  justify-content: space-between
}

.delpi-btn:hover{
    background: #01362e;
    color: #ffffff;
}
.open .delpi-btn{
    background: #01362e !important;
    color: #ffffff !important;
}

.delpi-list li{
    padding: 5px 8px;
  color:#878787;
  font-size:13px;
  font-weight:700;
  transition: all linear 0.3s;
}

.delpi-list li:hover{
background: #01362e;
color: #ffffff;
}

.delpi-btn{
    width: 100%
}
.delpi-list{
    width: 100%
}
.delivery-details{
    width: 100%;
    
     background: #f8f8f8;
}
@media only screen and (max-width:497px){
    .drop-items-inner{
        width: 100% !important;
    }
    .delivery-details{
        margin-top:20px; 
    }
}

.date-arrow{
    font-size: 14px;
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
}

.delpi-icon{
    position: absolute;
    right: 16px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 14px
}

.select-time{
    font-size: 15px;
    font-size-adjust: 0.5;
}

.dependency-select{
    display: none;
}

.time-date-select,
#pickup_address
{
    display: block;
}

.spinner-border {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: -0.125em;
    border: 0.25em solid currentcolor;
    border-right-color: transparent;
    border-radius: 50%;
    -webkit-animation: .75s linear infinite spinner-border;
    animation: .75s linear infinite spinner-border;
}

@keyframes spinner-border{
    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

.alert {
        padding-top: 5px;
        padding-bottom: 5px;
}

</style>
