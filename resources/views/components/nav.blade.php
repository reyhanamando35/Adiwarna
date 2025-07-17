<nav class="w-screen bg-[var(--light-green)] flex justify-start items-center p-4 fixed z-[990]">
    <div class="w-[90%] flex items-center justify-between">
        <div class="w-full max-w-[20%] flex justify-between items-center">
            <div id="logoContainer" class="flex justify-center items-center">
                <div class="w-[30px] lg:w-[45px] aspect-square bg-[var(--beige)] mask-no-repeat mask-center mask-contain"
                    style="mask-image: url('{{ asset('assets/logo/mekarya_hitam.png') }}'); -webkit-mask-image: url('{{ asset('assets/logo/mekarya_hitam.png') }}');">
                </div>

                <div class="w-[30px] lg:w-[45px] aspect-square bg-[var(--beige)] mask-no-repeat mask-center mask-contain"
                    style="mask-image: url('{{ asset('assets/logo/adiwow_hitam.png') }}'); -webkit-mask-image: url('{{ asset('assets/logo/adiwow_hitam.png') }}');">
                </div>
            </div>
        </div>
        <div id="navBtnContainer" class="max-w-[67%] grid grid-cols-2 gap-2 items-center pr-2">
            <div class="px-8 flex justify-center cursor-pointer items-center rounded-full bg-transparent border-[1px] text-center"
                style="border-color: var(--beige);">
                <p class="text-[var(--beige)] select-none">Vote</p>
            </div>
            <div class="px-8 flex justify-center cursor-pointer items-center rounded-full bg-transparent border-[1px] text-center"
                style="border-color: var(--beige);">
                <p class="text-[var(--beige)] select-none">Works</p>
            </div>
        </div>
    </div>

    <div id="burgerContainer" class="flex justify-center items-center absolute right-4 lg:right-20">
        <button id="navButton" type="button" class="cursor-default" data-twe-collapse-init
            data-twe-target="#navbarSupportedContent3" aria-controls="navbarSupportedContent3" aria-expanded="false"
            aria-label="Toggle navigation">
            <!-- Hamburger icon -->
            <span class="[&>svg]:w-7 [&>svg]:stroke-black/50 cursor-pointer" id="burger">
                <svg id="svgHam" class="ham ham6 toggle-btn" viewBox="20 20 60 60" width="30" height="30"
                    onclick="this.classList.toggle('active')">
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
</nav>
{{-- MULAI MD: (768), BESARIN NAV e --}}
<style>
    @media (min-width: 401px) {
        #logoContainer > div{
            width: 35px;
        }
        #navBtnContainer {
            max-width: 70%;
            gap: 16px;
            padding-right: 0px;
        }
        #navBtnContainer > div {
            padding-inline: 40px;
        }
    }
    
    @media (min-width: 1023px) {
        #burgerContainer{
            right: 45px;
        }
        #logoContainer > div{
            width: 42px;
        }
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
</style>
