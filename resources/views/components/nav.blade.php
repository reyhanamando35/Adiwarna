<nav class="w-screen max-h-full bg-[var(--light-green)] flex flex-col justify-center items-center fixed z-[999]">
    <div class="w-[90%] z-[10] flex items-center justify-between px-4">
        <div class="w-full max-w-[20%] flex justify-between items-center">
            <div id="logoContainer" class="flex flex-row-reverse gap-[7.5%] justify-center items-center">
                <div onclick="window.open('{{ route('home') }}')"
                    class="w-[30px] cursor-pointer aspect-square bg-[var(--beige)] mask-no-repeat mask-center mask-contain"
                    style="mask-image: url('{{ asset('assets/logo/mekarya_hitam.png') }}'); -webkit-mask-image: url('{{ asset('assets/logo/mekarya_hitam.png') }}');">
                </div>
                <div onclick="window.open('{{ route('home') }}')"
                    class="w-[30px] cursor-pointer aspect-square bg-[var(--beige)] mask-no-repeat mask-center mask-contain"
                    style="mask-image: url('{{ asset('assets/logo/adiwow_hitam.png') }}'); -webkit-mask-image: url('{{ asset('assets/logo/adiwow_hitam.png') }}');">
                </div>
            </div>
        </div>

        <div id="burgerContainer" class="flex justify-center items-center absolute right-4 lg:right-20 aspect-square">
            <button id="navButton" type="button" class="cursor-default w-full h-full" data-twe-collapse-init
                data-twe-target="#navbarSupportedContent3" aria-controls="navbarSupportedContent3" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="[&>svg]:stroke-black/50 cursor-pointer w-full h-full flex justify-center items-center"
                    id="burger">
                    <svg id="svgHam" class="ham ham6 toggle-btn w-full h-full" viewBox="0 0 100 100" width="30"
                        height="30" preserveAspectRatio="xMidYMid meet">
                        <path class="line top"
                            d="m 30,33 h 40 c 13.100415,0 14.380204,31.80258 6.899646,33.421777 -24.612039,5.327373 9.016154,-52.337577 -12.75751,-30.563913 l -28.284272,28.284272" />
                        <path class="line middle"
                            d="m 70,50 c 0,0 -32.213436,0 -40,0 -7.786564,0 -6.428571,-4.640244 -6.428571,-8.571429 0,-5.895471 6.073743,-11.783399 12.286435,-5.570707 6.212692,6.212692 28.284272,28.284272 28.284272,28.284272" />
                        <path class="line bottom"
                            d="m 69.575405,67.073826 h -40 c -13.100415,0 -14.380204,-31.80258 -6.899646,-33.421777 24.612039,-5.327373 -9.016154,52.337577 12.75751,30.563913 l 28.284272,-28.284272" />
                    </svg>
                </span>
            </button>
        </div>
    </div>

    <div id="menuCont"
        class="flex hidden bg-[var(--light-green)] z-[5] h-screen justify-center items-center absolute inset-0 pb-[5%] top-[-2%]">

        <!-- HOME -->
        <div id="menuHome" onclick="window.location.href='{{ route('home') }}'"
            class="w-[23vw] aspect-square relative flex justify-center items-center rounded-full">
            <div class="absolute left-[20%] top-[5%] w-full h-full flex justify-center items-center">
                <div
                    class="w-full h-full absolute rounded-full z-[2] {{ request()->routeIs('home') ? 'bg-[#EBE0C2] active-glow' : 'bg-[#EBE0C2]/60' }}">
                </div>
                <h1 class="text-[var(--light-green)] z-[3] uppercase font-maragsa font-bold text-center">Home</h1>
            </div>
        </div>

        <!-- ABOUT -->
        <div id="menuAbout" onclick="window.location.href='{{ route('about') }}'"
            class="w-[19vw] aspect-square relative flex justify-center items-center rounded-full">
            <div class="absolute left-[12%] top-[65%] w-full h-full flex justify-center items-center">
                <div
                    class="w-full h-full absolute rounded-full z-[2] {{ request()->routeIs('about') ? 'bg-[#EBE0C2] active-glow' : 'bg-[#EBE0C2]/60' }}">
                </div>
                <h1 class="text-[var(--light-green)] z-[3] uppercase font-maragsa font-bold text-center">About Us</h1>
            </div>
        </div>

        <!-- WORKS -->
        <div id="menuWorks" onclick="window.location.href='{{ route('curatedWorks.work') }}'"
            class="w-[28vw] aspect-square relative flex justify-center items-center rounded-full">
            <div class="absolute top-0 left-[-2%] w-full h-full flex justify-center items-center">
                <div
                    class="w-full h-full absolute rounded-full z-[2] {{ request()->routeIs('curatedWorks.*') ? 'bg-[#EBE0C2] active-glow' : 'bg-[#EBE0C2]/60' }}">
                </div>
                <h1 class="text-[var(--light-green)] z-[3] uppercase font-maragsa font-bold text-center">Curated Works
                </h1>
            </div>
        </div>

        <!-- MERCH -->
        <div id="menuMerch" onclick="window.location.href='{{ route('merch') }}'"
            class="w-[17vw] aspect-square relative flex justify-center items-center rounded-full">
            <div class="absolute left-[-10%] top-[54%] w-full h-full flex justify-center items-center">
                <div
                    class="w-full h-full absolute rounded-full z-[2] {{ request()->routeIs('merch') ? 'bg-[#EBE0C2] active-glow' : 'bg-[#EBE0C2]/60' }}">
                </div>
            </div>

        <!-- EVENTS -->
        <div id="menuEvents" onclick="window.location.href='{{ route('events.upcoming') }}'"
            class="w-[21vw] aspect-square relative flex justify-center items-center rounded-full">
            <div class="absolute left-[-22%] top-[-10%] w-full h-full flex justify-center items-center">
                <div
                    class="w-full h-full absolute rounded-full z-[2] {{ request()->routeIs('events.*') ? 'bg-[#EBE0C2] active-glow' : 'bg-[#EBE0C2]/60' }}">
                </div>
                <h1 class="text-[var(--light-green)] z-[3] uppercase font-maragsa font-bold text-center">Events</h1>
            </div>
        </div>
    </div>
</nav>

<style>
    h1,
    a {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    nav {
        padding: 12px 0px;
    }

    .ham6:not(.active) .top {
        transform: translateY(-5px);
    }

    .ham6:not(.active) .bottom {
        transform: translateY(5px);
    }

    .ham6:not(.active):hover .top {
        transform: translateY(5px);
    }

    .ham6:not(.active):hover .bottom {
        transform: translateY(-5px);
    }

    .line {
        fill: none;
        stroke: var(--beige);
        stroke-width: 5;
        stroke-linecap: round;
        transition:
            stroke-dasharray 400ms,
            stroke-dashoffset 400ms,
            transform 500ms ease;
    }


    .ham {
        cursor: pointer;
        -webkit-tap-highlight-color: transparent;
        transition: transform 400ms;
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .ham6 .top {
        stroke-dasharray: 40 172;
    }

    .ham6 .middle {
        stroke-dasharray: 40 111;
    }

    .ham6 .bottom {
        stroke-dasharray: 40 172;
    }

    .ham6.active .top {
        stroke-dashoffset: -132px;
    }

    .ham6.active .middle {
        stroke-dashoffset: -71px;
    }

    .ham6.active .bottom {
        stroke-dashoffset: -132px;
    }

    #menuCont div div h1 {
        padding: 2%;
        font-size: clamp(1em, 3vw, 10em);
        line-height: clamp(13px, 15px, 150px);
    }

    #menuCont>div {
        transition: transform 0.3s ease, filter 0.3s ease, z-index 0.1s ease;
        cursor: pointer;
        position: relative;
        z-index: 10;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        outline: none;
    }

    #menuCont>div:focus {
        outline: 3px solid rgba(245, 158, 11, 0.6);
        outline-offset: 8px;
        z-index: 50;
    }

    #menuCont>div:hover,
    #menuCont>div:focus {
        transform: scale(1.1);
        filter: brightness(1.1);
        z-index: 50;
    }

    #menuCont>div:hover>div>div,
    #menuCont>div:focus>div>div {
        transform: scale(1.05);
        transition: transform 0.2s ease;
    }

    #menuCont>div:active {
        transform: scale(0.95);
        transition: transform 0.1s ease;
        z-index: 60;
    }

    #menuCont>div:hover>div>.bg-amber-400,
    #menuCont>div:focus>div>.bg-amber-400 {
        animation: pulseGlow 0.6s ease-in-out;
        box-shadow: 0 0 20px rgba(245, 158, 11, 0.4);
    }

    #menuCont>div:hover h1,
    #menuCont>div:focus h1 {
        transform: scale(1.02);
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease, text-shadow 0.2s ease;

        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Active glow style */
    .active-glow {
        box-shadow: 0 0 20px rgba(235, 224, 194, 0.6);
        animation: pulseGlow 1.2s infinite ease-in-out;
    }

    @keyframes pulseGlow {
        0% {
            box-shadow: 0 0 15px rgba(235, 224, 194, 0.4);
        }

        50% {
            box-shadow: 0 0 30px rgba(235, 224, 194, 0.8);
        }

        100% {
            box-shadow: 0 0 15px rgba(235, 224, 194, 0.4);
        }
    }

    #menuCont>div {
        transition: transform 0.3s ease, filter 0.3s ease;
    }

    #menuCont>div:hover {
        transform: scale(1.1);
        filter: brightness(1.1);
        z-index: 50;
    }

    #menuCont>div:hover>div>.bg-\[\#EBE0C2\]/60 {
        background-color: #EBE0C2;
        box-shadow: 0 0 15px rgba(235, 224, 194, 0.5);
    }

    @media (min-width: 401px) {
        #logoContainer>div {
            width: 35px;
        }
    }

    @media (min-width: 1023px) {
        #burgerContainer {
            right: 2.25vw;
            width: 2.75vw;
        }

        #logoContainer>div {
            width: 2.75vw;
        }

        nav {
            padding: 1.5% 0%;
        }

        #svgHam {
            width: 100%;
            height: 100%;
        }
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

<script>
    document.addEventListener("contextmenu", function(e) {
        if (e.target.closest("img, video")) {
            e.preventDefault();
        }
    });
    document.addEventListener('DOMContentLoaded', function() {


        let menuCont = document.getElementById('menuCont');
        let burger = document.getElementById('svgHam');

        if (typeof gsap === 'undefined') {
            console.error('GSAP library not loaded!');
            return;
        }

        burger.addEventListener('click', function() {
            burger.classList.toggle('active');

            if (burger.classList.contains('active')) {
                document.documentElement.classList.add('overflow-hidden');
                document.body.classList.add('overflow-hidden');
                menuCont.classList.remove('hidden');

                const rect = menuCont.getBoundingClientRect();
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;

                gsap.set(menuCont, {
                    height: 0,
                    opacity: 0
                });
                gsap.to(menuCont, {
                    height: '100vh',
                    opacity: 1,
                    duration: 0.8,
                    ease: "power2.out",
                });
                gsap.from('#menuHome > div > div', {
                    x: (i, el) => centerX - (el.offsetLeft + el
                        .offsetWidth / 1.5),
                    duration: 1.5,
                    delay: .25,
                    ease: "power2.out",
                });
                gsap.from('#menuAbout > div > div', {
                    x: (i, el) => centerX - (el.offsetLeft + el
                        .offsetWidth / 1.5),
                    duration: 1.5,
                    delay: .25,
                    ease: "power2.out",
                });
                gsap.from('#menuWorks > div > div', {
                    duration: 1.5,
                    delay: .25,
                    ease: "power2.out",
                });
                gsap.from('#menuMerch > div > div', {
                    x: (i, el) => -centerX + (el.offsetLeft + el
                        .offsetWidth / 1.5),
                    y: (i, el) => centerY - (el.offsetTop + el.offsetHeight / 2),
                    duration: 1.5,
                    delay: .25,
                    ease: "power2.out",
                });
                gsap.from('#menuEvents > div > div', {
                    x: (i, el) => -centerX + (el.offsetLeft + el
                        .offsetWidth / 1.5),
                    duration: 1.5,
                    delay: .25,
                    ease: "power2.out",
                });
            } else {
                gsap.to(menuCont, {
                    height: 0,
                    opacity: 0,
                    duration: 0.4,
                    ease: "power4.in",
                    onComplete: function() {
                        menuCont.classList.add('hidden');
                    }
                });
                document.documentElement.classList.remove('overflow-hidden');
                document.body.classList.remove('overflow-hidden');
            }
        });
        let lastScrollY = window.scrollY;
        let navVisible = true;

        const vidCont = document.querySelector("#vidCont");

        if (vidCont) {
            ScrollTrigger.create({
                trigger: "#vidCont",
                start: "bottom top",
                end: "bottom 20%",
                markers: false,
                invalidateOnRefresh: true,
                onEnter: () => {
                    window.addEventListener("scroll", handleScroll);
                },
                onLeaveBack: () => {
                    gsap.to("nav", {
                        y: "-100%",
                        duration: 0.5,
                        ease: "power2.in"
                    });
                    navVisible = false;
                    window.removeEventListener("scroll", handleScroll);
                }
            });
        }

        function handleScroll() {
            let currentScrollY = window.scrollY;

            if (currentScrollY > lastScrollY + 5 && navVisible) {
                // Scroll Down > hide nav
                gsap.to("nav", {
                    y: "-100%",
                    duration: 0.5,
                    ease: "power2.in"
                });
                navVisible = false;
            } else if (currentScrollY < lastScrollY - 5 && !navVisible) {
                // Scroll Up > show nav
                gsap.to("nav", {
                    y: "0%",
                    duration: 0.5,
                    ease: "power2.out"
                });
                navVisible = true;
            }

            lastScrollY = currentScrollY;
        }


        // Navbar hanya muncul di bawah / setelah vidCont
        if (vidCont) {
            gsap.set("nav", {
                y: '-100%'
            })
        }
        window.addEventListener('scroll', handleScroll)
    });
</script>
