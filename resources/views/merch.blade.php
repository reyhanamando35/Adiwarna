<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Adiwarna | Merch</title>

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="icon" href="{{ asset('assets/logo/adiwow_hitam.png') }}" type="image/x-icon"> <!-- LOGO GANTi -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Open Graph --}}
    <meta property="og:title" content="Adiwarna 2025" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://adiwarna.petra.ac.id/" />
    {{-- <meta property="og:image" content="{{ asset('') }}" /> --}}
    <meta property="og:description" content="Adiwarna 2025" />
    <meta property="og:site_name" content="Adiwarna Petra Christian University" />
    <meta property="og:locale" content="id_ID" />

    {{-- tailwind --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />

    <!-- AOS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init();
        });
    </script>

    <!-- GSAP + Plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollToPlugin.min.js"></script>
    <script>
        gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);
    </script>

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">

    <style>
        .merch-box img.caption-img {
            @apply absolute mx-auto;
            filter: blur(6px);
            opacity: 1;
            z-index: 0;
            /* SELALU di belakang main-img */
            pointer-events: none;
        }

        .merch-box img.caption-img2 {
            @apply absolute mx-auto;
            filter: blur(6px);
            opacity: 1;
            z-index: 0;
            /* SELALU di belakang main-img */
            pointer-events: none;
        }

        .merch-box img.caption-img3 {
            @apply absolute mx-auto;
            filter: blur(6px);
            opacity: 1;
            z-index: 0;
            /* SELALU di belakang main-img */
            pointer-events: none;
        }

        .merch-box img.bg-box {
            @apply absolute inset-0 w-full h-full object-contain opacity-60;
            z-index: 10;
        }

        .merch-box img.main-img {
            @apply absolute inset-0 w-full h-full object-contain;
            z-index: 10;
        }

        html,
        body {
            overflow-x: hidden;
            scroll-behavior: smooth;
            scrollbar-width: none;
        }

        :root {
            --glow: rgb(247, 233, 158);
            --purple: #5E2E6A;
            --dark-purple: #221452;
            --teal: #0DC19A;
            --light-yellow: #F7E99E;
            --olive-green: #6A8B23;
            --lime-green: #A6C110;
            --orange: #FF8500;

            --light-green: #67753e;
            --dark-green: #3c490c;
            --red: #a14000;
            --beige: #ece1c3;
            --gold: #EBE0C2;
            --yellow: #d3b84d;
            --pink: #ffbebb;
            --blue: #7593ad;
        }

        @font-face {
            font-family: "Maragsa";
            src: url('{{ asset('assets/font/maragsa.otf') }}') format('truetype');
            font-weight: 700;
            font-style: normal;
        }

        .font-sen {
            font-family: 'Sen', sans-serif;
        }

        .font-maragsa {
            font-family: 'Maragsa';
        }

        .glowing-title {
            text-shadow: 0 0 10px var(--glow), 0 0 25px rgba(247, 233, 158, 0.8);

        }

        @keyframes glow {
            0% {
                text-shadow: 0 0 10px var(--glow), 0 0 25px rgba(247, 233, 158, 0.8);
            }

            50% {
                text-shadow: 0 0 30px var(--glow), 0 0 50px rgba(247, 233, 158, 1);
            }

            100% {
                text-shadow: 0 0 10px var(--glow), 0 0 25px rgba(247, 233, 158, 0.8);
            }
        }

        .text-glow {
            text-shadow: 0 0 7px rgba(255, 255, 255, 0.4),
                0 0 12px rgba(255, 255, 255, 0.3),
                0 0 20px rgba(255, 255, 255, 0.2);
        }
    </style>
</head>

<body class="bg-[#ece1c3] bg-cover bg-center overflow-x-hidden" style="background-image: url('merch/asetbg.png');">
    @include('components.nav')
    <div id="curated-title" class="px-6 md:px-16 py-12 pt-[17.5vh]" data-aos="fade-up" data-aos-duration="1200">
        <h1 class="font-['Sen',sans-serif] tracking-[0.2em] text-[#67753E] text-2xl md:text-6xl">
            Come and look at our
        </h1>
        <div class="flex flex-col lg:flex-row justify-between items-center md:items-center">
            <h1 id="title-merch"
                class="m-0 font-['Maragsa'] text-[#A14000] font-bold text-[100px] md:text-[200px] leading-none"
                data-aos="zoom-in" data-aos-duration="1500">
                Merch
            </h1>
            <div id="click-box" class="relative flex items-center justify-center hover:scale-105 transition-transform "
                data-aos="fade-left" data-aos-delay="300">
                <img src="{{ asset('merch/Bounding box.png') }}" class=" h-16 md:h-32">
                <p class="absolute text-sm md:text-lg text-[#67753E] tracking-[0.1em] font-['Sen',sans-serif]">
                    Click on the merch you want to buy!
                </p>
            </div>
        </div>
    </div>

    <div class="mt-8 grid grid-cols-2 md:grid-cols-3 gap-6 px-6 md:px-16 py-12">

        <div class="relative merch-box w-full aspect-square" data-aos="fade-up" data-aos-delay="100">
            <a href="#enamel">
                <img src="merch/box_pin.png" class="bg-box absolute inset-0 w-full h-full object-contain opacity-60">
                <img src="merch/pic_pin.png" class="main-img absolute inset-0 w-full h-full object-contain">
            </a>
            <img src="merch/caption_pin.png"
                class="caption-img max-w-[80%] absolute inset-0 w-full h-full object-contain">
        </div>

        <div class="relative merch-box w-full aspect-square" data-aos="fade-up" data-aos-delay="200">
            <a href="#keychain">
                <img src="merch/box_keychain.png"
                    class="bg-box absolute inset-0 w-full h-full object-contain opacity-60">
                <img src="merch/pic_keychain.png" class="main-img absolute inset-0 w-full h-full object-contain">
            </a>
            <img src="merch/caption_keychain.png"
                class="caption-img2 max-w-[60%] absolute inset-0 w-full h-full object-contain">
        </div>

        <div class="relative merch-box w-full aspect-square" data-aos="fade-up" data-aos-delay="300">
            <a href="#shaker">
                <img src="merch/box_shaker.png" class="bg-box absolute inset-0 w-full h-full object-contain opacity-60">
                <img src="merch/pic_shaker.png" class="main-img absolute inset-0 w-full h-full object-contain">
            </a>
            <img src="merch/caption_shaker.png"
                class="caption-img2 max-w-[60%] absolute inset-0 w-full h-full object-contain">
        </div>

        <div class="relative merch-box w-full aspect-square" data-aos="fade-up" data-aos-delay="400">
            <a href="#bottle">
                <img src="merch/box_botol.png" class="bg-box absolute inset-0 w-full h-full object-contain opacity-60">
                <img src="merch/pic_botol.png" class="main-img absolute inset-0 w-full h-full object-contain">
            </a>
            <img src="merch/caption_bottle.png"
                class="caption-img max-w-[80%] absolute inset-0 w-full h-full object-contain">
        </div>

        <div class="relative merch-box w-full aspect-square" data-aos="fade-up" data-aos-delay="500">
            <a href="#special-tshirt">
                <img src="merch/box_special_tshirt.png"
                    class="bg-box absolute inset-0 w-full h-full object-contain opacity-60">
                <img src="merch/pic_special_tshirt.png"
                    class="main-img absolute inset-0 w-full h-full object-contain">
            </a>
            <img src="merch/caption_special_tshirt.png"
                class="caption-img3 max-w-[50%] absolute inset-0 w-full h-full object-contain">
        </div>

        <div class="relative merch-box w-full aspect-square" data-aos="fade-up" data-aos-delay="600">
            <a href="#tshirt">
                <img src="merch/box_tshirt.png"
                    class="bg-box absolute inset-0 w-full h-full object-contain opacity-60">
                <img src="merch/pic_tshirt.png" class="main-img absolute inset-0 w-full h-full object-contain">
            </a>
            <img src="merch/caption_tshirt.png"
                class="caption-img max-w-[40%] absolute inset-0 w-full h-full object-contain ">
        </div>
      </div>

      <div class="w-screen flex justify-center items-center">
        @include('components.footer')
      </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

    <script>
        AOS.init({
            once: true,
            duration: 800,
            easing: 'ease-in-out'
        });

        document.querySelectorAll(".merch-box").forEach((box) => {
            const captionImg = box.querySelector(".caption-img");
            const captionImg2 = box.querySelector(".caption-img2");
            const captionImg3 = box.querySelector(".caption-img3");
            const mainImg = box.querySelector(".main-img");
            const bgBox = box.querySelector(".bg-box");

            gsap.set(captionImg, {
                top: "50%",
                left: "50%",
                xPercent: -50,
                yPercent: -50,
                opacity: 1,
                filter: "blur(6px)",
                zIndex: -1
            });

            gsap.set(captionImg2, {
                top: "50%",
                left: "50%",
                xPercent: -50,
                yPercent: -50,
                opacity: 1,
                filter: "blur(6px)",
                zIndex: -1
            });

            gsap.set(captionImg3, {
                top: "50%",
                left: "50%",
                xPercent: -50,
                yPercent: -50,
                opacity: 1,
                filter: "blur(6px)",
                zIndex: -1
            });

            const isMobile = window.innerWidth <= 768;

            const animateEnter = () => {
                if (captionImg) {
                    gsap.to(captionImg, {
                        top: isMobile ? "-3rem" : "-8rem",
                        left: isMobile ? "-1rem" : "-3rem",
                        xPercent: 0,
                        yPercent: 0,
                        opacity: 1,
                        filter: "blur(0px)",
                        duration: 0.6,
                        ease: "power3.out",
                        zIndex: 20
                    });
                }

                if (captionImg2) {
                    gsap.to(captionImg2, {
                        top: isMobile ? "-4rem" : "-10rem",
                        right: isMobile ? "-1rem" : "-3rem",
                        xPercent: 0,
                        yPercent: 0,
                        opacity: 1,
                        filter: "blur(0px)",
                        duration: 0.6,
                        ease: "power3.out",
                        zIndex: 20
                    });
                }

                if (captionImg3) {
                    gsap.to(captionImg3, {
                        top: isMobile ? "-3rem" : "-8rem",
                        right: isMobile ? "-5rem" : "-15rem",
                        xPercent: 0,
                        yPercent: 0,
                        opacity: 1,
                        filter: "blur(0px)",
                        duration: 0.6,
                        ease: "power3.out",
                        zIndex: 20
                    });
                }

                gsap.to(mainImg, {
                    x: isMobile ? 5 : 12,
                    y: isMobile ? 5 : 12,
                    duration: 0.6,
                    ease: "power3.out"
                });
                gsap.to(bgBox, {
                    x: isMobile ? 5 : 12,
                    y: isMobile ? 5 : 12,
                    duration: 0.6,
                    ease: "power3.out"
                });
            };

            const animateLeave = () => {
                gsap.to(captionImg, {
                    top: "50%",
                    left: "50%",
                    xPercent: -50,
                    yPercent: -50,
                    opacity: 1,
                    filter: "blur(6px)",
                    duration: 0.6,
                    ease: "power3.inOut",
                    zIndex: 0
                });
                gsap.to(captionImg2, {
                    top: "50%",
                    left: "50%",
                    xPercent: -50,
                    yPercent: -50,
                    opacity: 1,
                    filter: "blur(6px)",
                    duration: 0.6,
                    ease: "power3.inOut",
                    zIndex: 0
                });

                gsap.to(captionImg3, {
                    top: "50%",
                    left: "50%",
                    xPercent: -50,
                    yPercent: -50,
                    opacity: 1,
                    filter: "blur(6px)",
                    duration: 0.6,
                    ease: "power3.inOut",
                    zIndex: 0
                });

                gsap.to(mainImg, {
                    x: 0,
                    y: 0,
                    duration: 0.6,
                    ease: "power3.inOut"
                });
                gsap.to(bgBox, {
                    x: 0,
                    y: 0,
                    duration: 0.6,
                    ease: "power3.inOut"
                });
            };

            box.addEventListener("mouseenter", animateEnter);
            box.addEventListener("mouseleave", animateLeave);

            let isActive = false;

            box.addEventListener("click", () => {
                if (!isActive) {
                    animateEnter();
                    isActive = true;
                } else {
                    animateLeave();
                    isActive = false;
                }
            });
        });
    </script>

</body>

</html>
