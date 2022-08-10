<!doctype html>
<html lang="en" style="">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <meta name="title" content=" KiriminAJA - Kirim Paket multi expedisi dan Bisa kirim paket COD " />
    <!--    <link rel="manifest" href="-->
    <meta name="csrf-token" content="{{csrf_token()}}">

    <!--images/v2/manifest/site.webmanifest" />-->
    <link rel="canonical" href="https://kiriminaja.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500&amp;display=swap">
    <link rel="stylesheet" href="template/promo_kj_assets/css/v2/kiriminaja-main-e2r.min.css">
    <link rel="stylesheet" href="template/promo_kj_assets/css/v2/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@1.3.4/dist/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('assets/modals/modal-bootstrap.css') }}">
    <style>
        .dark-mode .select2-dropdown {
            background: #222 !important;
        }

        .dark-mode .navbar-light .navbar-toggler {
            color: #fff !important;
        }

        @media screen and (max-width: 1024px) {
            .dark-mode .navbar-expanded {
                background: #222 !important;
            }
        }

        #credential_picker_container {
            z-index: 999999 !important;
        }

        .taplive-outer-container {
            font-family: "DM Sans", sans-serif !important;
        }

        .select2-selection__rendered {
            line-height: inherit !important;
            height: auto !important;
            padding: .15rem 0 !important;
        }

        .select2-selection__arrow b {
            display: none !important;
        }

        .owl-theme .owl-nav.disabled+.owl-dots {
            margin-top: 10px;
        }

        .owl-carousel .owl-nav .owl-prev,
        .owl-carousel .owl-nav .owl-next,
        .owl-carousel .owl-dot {
            cursor: pointer;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .owl-carousel .owl-nav button.owl-prev,
        .owl-carousel .owl-nav button.owl-next,
        .owl-carousel button.owl-dot {
            background: none;
            color: inherit;
            border: none;
            padding: 0 !important;
            font: inherit;
        }

        .owl-theme .owl-dots .owl-dot {
            display: inline-block;
            zoom: 1;
            *display: inline;
        }

        .owl-theme .owl-dots .owl-dot span {
            width: 10px;
            height: 10px;
            margin: 5px 7px;
            background: #D6D6D6;
            display: block;
            -webkit-backface-visibility: visible;
            transition: opacity 200ms ease;
            border-radius: 30px;
        }

        .owl-theme .owl-dots .owl-dot.active span,
        .owl-theme .owl-dots .owl-dot:hover span {
            background: #869791;
        }

        .owl-theme .owl-dots {
            text-align: center;
            -webkit-tap-highlight-color: transparent;
        }

    </style>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PM3W2K7');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=420755419256495&ev=PageView&noscript=1" /></noscript>
    <div id="__kiriminaja">
        <div id="__layout">
            <div class="main-wrapper">
                @include('includes.frontend.navbar')

                @yield('content')

            </div>


            @include('includes.frontend.footer')
            <div>
                <div class="float-faq" style="display: none">
                    <div class="p-3">
                        <div class="row">
                            <div class="col"><span class="text-primary-dark fw-bold">Help Dashboard</span>
                            </div>
                            <div class="col-auto">
                                <button class="btn-light text-primary btn px-1 py-0 no-shadow full-radius float-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" class="icon">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="float-faq-content p-3 pt-0">
                        <a href="https://api.whatsapp.com/send?phone=6281807359798&text=Hallo,%20saya%20ingin%20bertanya%20tentang%20KiriminAJA"
                            class="btn btn-white border-1 border-light-2 p-2 d-block text-start mb-2">
                            <div class="d-inline text-success me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                                    <path
                                        d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1">
                                    </path>
                                </svg>
                            </div>
                            <span class="fw-bold">Customer Support</span>
                        </a>
                        <a href="//help.kiriminaja.com"
                            class="btn btn-white border-1 border-light-2 p-2 d-block text-start mb-2">
                            <div class="d-inline text-cyan me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="9"></circle>
                                    <line x1="12" y1="17" x2="12" y2="17.01"></line>
                                    <path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4"></path>
                                </svg>
                            </div>
                            <span class="fw-bold">Pusat Bantuan</span>
                        </a>
                        <a href="https://kiriminaja.com/syarat-ketentuan"
                            class="btn btn-white border-1 border-light-2 p-2 d-block text-start mb-2">
                            <div class="d-inline text-orange me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <polyline points="13 3 13 10 19 10 11 21 11 14 5 14 13 3"></polyline>
                                </svg>
                            </div>
                            <span class="fw-bold">Syarat &amp; Ketentuan</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

    <script>
        let isNavFixed = false;
        const toggleNav = () => {
            $('#main-navbar').toggleClass('navbar-expanded');
            $('#navbarSupportedContent').toggleClass('show');
            $('#try-now').toggleClass('floated');
            $('#try-now .btn').toggleClass('w-100')
        }
        $('.navbar-toggler').click(function() {
            event.preventDefault();
            toggleNav();
        })
        $('.float-button').click(function() {
            $('.float-chat, .float-faq').toggle();
        });

        $('.dropdown .dropdown-toggle').click(function() {
            event.preventDefault();
            const id = $(this).attr('id');
            $(`[data-bind="#${id}"]`).toggleClass('show');
        });

        const switchColor = (switch_attr = false) => {
            var colorMode = localStorage['colorMode'];
            if (colorMode === 'dark' && switch_attr) {
                if (switch_attr) {
                    localStorage['colorMode'] = 'light';
                } else {
                    localStorage['colorMode'] = 'dark';
                }
                $('html').addClass('light-mode').removeClass('dark-mode');
            } else {
                if (switch_attr) {
                    localStorage['colorMode'] = 'dark';
                } else {
                    localStorage['colorMode'] = 'light';
                }
                $('html').removeClass('light-mode').addClass('dark-mode');
            }
        }

        var forceDark = false;
        if (localStorage['colorMode'] && !forceDark) {
            var colorMode = localStorage['colorMode'];
            if (colorMode === 'dark') {
                $('html').removeClass('light-mode').addClass('dark-mode');
            } else {
                $('html').addClass('light-mode').removeClass('dark-mode');
            }
        } else {
            localStorage['colorMode'] = 'light';
            $('html').addClass("light-mode");
        }

        $('.color-toggle').click(function() {
            switchColor(true)
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/id.js"></script>
    <script src="{{ asset('assets/modals/modal-bootstrap.min.js') }}"></script>
    <script>
        $('.owl-trusted').owlCarousel({
            loop: true,
            center: false,
            nav: false,
            dots: false,
            autoplay: true,
            autoPlaySpeed: 300,
            delayTime: 1200,
            margin: 50,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            }
        });
        $('.slider-carousel').owlCarousel({
            loop: true,
            center: true,
            nav: false,
            dots: true,
            autoplay: true,
            autoPlaySpeed: 300,
            delayTime: 3600,
            margin: 50,
            items: 1,
        });
    </script>
    @stack('down-script')
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PM3W2K7" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 14367753;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/14367753/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>
