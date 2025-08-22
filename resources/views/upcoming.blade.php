@extends('layouts.layout')
@section('content')
    <div class="w-screen max-w-screen relative flex flex-col bg-[var(--beige)] justify-center items-end z-[988]">

        <div id="vidCont" class="w-full h-screen flex justify-center items-center overflow-hidden">
            <div class="w-full h-full flex justify-center items-center">
                <video class="object-cover w-full h-full" src="{{ asset('assets/promote.mp4') }}" playsinline autoplay muted
                    loop>
                </video>
            </div>
        </div>


        <div id="semuaDimulaiCont" class="w-full h-screen my-[3%] flex flex-col justify-center items-center relative">
            <div class="absolute left-[-21%] top-[5%] h-[75%] w-[40%] bg-[#A14000]"
                style="
                        -webkit-mask: url('{{ asset('assets/fingerprint/chelseaHome1.png') }}') no-repeat center / contain;
                        mask: url('{{ asset('assets/fingerprint/chelseaHome1.png') }}') no-repeat center / contain;
                        filter: drop-shadow(3px 3px 3px white);
                    ">
            </div>
            <div class="absolute right-[-48.5%] top-[6.5%] h-full w-full bg-[#D3B84D]"
                style="
                        -webkit-mask: url('{{ asset('assets/fingerprint/jessicaHome2.png') }}') no-repeat top center / contain;
                        mask: url('{{ asset('assets/fingerprint/jessicaHome2.png') }}') no-repeat top center / contain;
                        filter: drop-shadow(3px 3px 3px white);
                    ">
            </div>
            <div id="semuaText" class="w-[60%] h-1/2 relative">
                <div class="absolute top-0 left-0 font-maragsa text-[var(--light-green)]">
                    Semua dimulai dari tunas
                </div>
                <div class="absolute top-[25%] left-[25%] font-maragsa text-[var(--light-green)]">
                    Bertumbuh helai demi helai
                </div>
                <div class="absolute bottom-[25%] right-[25%] font-maragsa text-[var(--light-green)]">
                    Tumbuh semampai, mengejar cita
                </div>
                <div class="absolute bottom-0 right-0 font-maragsa text-[var(--light-green)]">
                    Kuncup demi kuncup siap merekah
                </div>

            </div>
            <div id="harumSemerbak" class="flex my-[7.5%] gap-[5%] flex-col justify-center items-center">
                <div class="w-full flex justify-center items-center">
                    <h1 class="font-maragsa text-[var(--light-green)] text-center">
                        Harum Semerbak, Mekar Dalam Karya
                    </h1>
                </div>
                <div class="w-full flex justify-center items-center relative group overflow-hidden">
                    <h1 id="-adi" onclick="window.open('{{ config('app.url') }}', '_blank')"
                        class="font-maragsa z-[10] text-[var(--light-green)] transition-transform duration-700 ease-out overflow-hidden relative">
                        -Adiwarna Mekarya 2025-
                    </h1>

                    <!-- Mask div -->
                    <div id="aa"
                        class="absolute z-[15] top-[8.75%] left-[-45%] h-full w-full bg-[var(--beige)]
                    transition-transform duration-700 ease-out overflow-hidden"
                        style="
                -webkit-mask: url('{{ asset('assets/fingerprint/jessicaHome3.png') }}') no-repeat center center / cover;
                mask: url('{{ asset('assets/fingerprint/jessicaHome3.png') }}') no-repeat center center / cover;
                filter: drop-shadow(3px 3px 3px white);
            ">
                    </div>
                </div>
            </div>


            <style>
                #aa {
                    transform: translateX(200%);
                    pointer-events: none;
                    scale: 0.75;
                    opacity: 0.92;
                    /* Remove CSS transitions - let GSAP handle everything */
                    /* Performance optimizations */
                    will-change: transform, scale, opacity;
                    transform-style: preserve-3d;
                    backface-visibility: hidden;
                }

                #-adi {
                    cursor: pointer;
                    position: relative;
                    z-index: 10;
                    /* Remove CSS transitions - let GSAP handle everything */
                }

                /* REMOVE ALL HOVER EFFECTS - GSAP will handle them */
                /* Remove these problematic CSS hover rules:
                #-adi:hover { ... }
                #-adi:hover ~ #aa { ... }
                .hover-once ~ #aa { ... }
                .unhover-once ~ #aa { ... }
                */

                /* Keep only the keyframes for fallback, but make them unused */
                @keyframes smoothSlideIn {
                    0% {
                        transform: translateX(200%);
                        scale: 0.75;
                        opacity: 0.92;
                    }

                    70% {
                        transform: translateX(72%);
                        scale: 0.77;
                        opacity: 1;
                    }

                    85% {
                        transform: translateX(78%);
                        scale: 0.74;
                    }

                    100% {
                        transform: translateX(75%);
                        scale: 0.76;
                        opacity: 1;
                    }
                }

                #harumSemerbak {
                    width: 80%;
                }

                #semuaText div,
                #harumSemerbak div h1 {
                    font-size: clamp(0.85em, 2.3vw, 3.3vw);
                }
            </style>

        </div>

        <div id="eventOverviewCont" class="w-full min-h-screen my-[3%] flex flex-col justify-evenly items-center relative">
            <div class="absolute z-[15] right-[-17%] top-[8.5%] h-full w-[45%] bg-[#67753E]"
                style="
                        -webkit-mask: url('{{ asset('assets/fingerprint/chelseaHome2.png') }}') no-repeat center / contain;
                        mask: url('{{ asset('assets/fingerprint/chelseaHome2.png') }}') no-repeat center / contain;
                        filter: drop-shadow(3px 3px 3px white);
                    ">
            </div>
            <div class="absolute z-[15] left-[-45%] top-[8.75%] h-full w-full bg-[#D3B84D]"
                style="
                        -webkit-mask: url('{{ asset('assets/fingerprint/jessicaHome1.png') }}') no-repeat top center / contain;
                        mask: url('{{ asset('assets/fingerprint/jessicaHome1.png') }}') no-repeat top center / contain;
                        filter: drop-shadow(3px 3px 3px white);
                    ">
            </div>
            <div id="homePosterCont" class="w-[90%] sm:w-[80%] mt-[-3%] z-[16] flex justify-center items-center">
                <div data-aos-duration="1500" data-aos="example-anim1"  data-aos-offset="700" class="z-[980] relative w-[30%] mb-[20%]" style="filter: blur(1.2px);">
                    <div class="absolute inset-0 flex justify-center items-center z-[978]">
                        <span class="font-maragsa text-[var(--light-green)]">Events</span>
                    </div>
                    <img class="w-full h-full z-[979] relative" src="{{ asset('assets/homePoster/eventHome.png') }}"
                        alt="Poster Event">
                </div>
                <div data-aos-duration="1500" data-aos="zoom-in-up" data-aos-offset="700"  class="z-[981] mx-[-3%] relative w-[52.5%]" style="filter: blur(1.2px);">
                    <div class="absolute inset-0 flex justify-center items-center z-[978]">
                        <span class="font-maragsa text-[var(--light-green)]">Curated Works</span>
                    </div>
                    <img class="w-full h-full z-[979] relative" src="{{ asset('assets/homePoster/categoryHome.png') }}"
                        alt="Category Event">
                </div>
                <div data-aos-duration="1500" data-aos="example-anim2"  data-aos-offset="700" class="z-[982] relative w-[22.5%] mb-[35%]" style="filter: blur(1.2px);">
                    <div class="absolute inset-0 flex justify-center items-center z-[978]">
                        <span class="font-maragsa text-[var(--light-green)]">Merch</span>
                    </div>
                    <img class="w-full h-full z-[979] relative" src="{{ asset('assets/homePoster/merchHome.png') }}"
                        alt="Merch Event">
                </div>
            </div>

            {{-- SPONSOR --}}
            <div class="flex z-[800] justify-center items-center w-full">
                <div id="sponsorCont" class="w-[90%] my-[3%] flex flex-col justify-center items-center z-[16]">
                    <div data-aos="zoom-out-up" data-aos-duration="1200" data-aos-offset="1000" class="flex w-full justify-center items-center">
                        <div id="leftSponsor"
                            class="w-[10%] z-[800] p-[2%] aspect-square flex justify-center items-center rounded-full cursor-pointer">
                            <svg width="100%" height="100%" viewBox="0 0 29 52" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M26.0701 49.8018L2.26848 26.0001L26.0701 2.19845" stroke="#A14000"
                                    stroke-width="3.96694" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                        <div id="sponsors"
                            class="w-full mx-[2%] flex flex-col justify-center items-start relative overflow-hidden">
                            <div id="sponsorTrack" class="flex transition-transform duration-300 ease-in-out"
                                style="width:500%"> <!-- 5 slide = 500% -->

                                <!-- Slide 1 -->
                                <div class="slide w-[20%] grid grid-cols-4 justify-evenly items-center gap-4 px-4">
                                    <img src="{{ asset('assets/sponsor/ant.png') }}" alt="Ant Lighting"
                                        class="w-full object-contain">
                                    <img src="{{ asset('assets/sponsor/asa.png') }}" alt="Sponsor 2"
                                        class="w-full object-contain">
                                    <img src="{{ asset('assets/sponsor/clip.png') }}" alt="Sponsor 3"
                                        class="w-full object-contain">
                                    <img src="{{ asset('assets/sponsor/creative.png') }}" alt="Sponsor 4"
                                        class="w-full object-contain">
                                </div>

                                <!-- Slide 2 -->
                                <div class="slide w-[20%] grid grid-cols-4 justify-evenly items-center gap-4 px-4">
                                    <img src="{{ asset('assets/sponsor/demand.png') }}" alt="Sponsor 5"
                                        class="w-full object-contain">
                                    <img src="{{ asset('assets/sponsor/florist.png') }}" alt="Sponsor 6"
                                        class="w-full object-contain">
                                    <img src="{{ asset('assets/sponsor/gadjah.png') }}" alt="Sponsor 7"
                                        class="w-full object-contain">
                                    <img src="{{ asset('assets/sponsor/haseo.png') }}" alt="Sponsor 8"
                                        class="w-full object-contain">
                                </div>

                                <!-- Slide 3 -->
                                <div class="slide w-[20%] grid grid-cols-4 justify-evenly items-center gap-4 px-4">
                                    <img src="{{ asset('assets/sponsor/hiroki.png') }}" alt="Sponsor 9"
                                        class="w-full object-contain">
                                    <img src="{{ asset('assets/sponsor/juara.png') }}" alt="Sponsor 10"
                                        class="w-full object-contain">
                                    <img src="{{ asset('assets/sponsor/leeven.png') }}" alt="Sponsor 11"
                                        class="w-full object-contain">
                                    <img src="{{ asset('assets/sponsor/print.png') }}" alt="Sponsor 12"
                                        class="w-full object-contain">
                                </div>

                                <!-- Slide 4 -->
                                <div class="slide w-[20%] grid grid-cols-4 justify-evenly items-center gap-4 px-4">
                                    <img src="{{ asset('assets/sponsor/ptc.png') }}" alt="Sponsor 13"
                                        class="w-full object-contain">
                                    <img src="{{ asset('assets/sponsor/rizPlakat.png') }}" alt="Sponsor 14"
                                        class="w-full object-contain">
                                    <img src="{{ asset('assets/sponsor/socialite.png') }}" alt="Sponsor 15"
                                        class="w-full object-contain">
                                    <img src="{{ asset('assets/sponsor/wacom.png') }}" alt="Sponsor 16"
                                        class="w-full object-contain">
                                </div>

                                <!-- Slide 5 -->
                                <div class="slide w-[20%] grid grid-cols-4 justify-evenly items-center gap-4 px-4">
                                    <img src="{{ asset('assets/sponsor/wolacom.png') }}" alt="Sponsor 17"
                                        class="w-full object-contain">
                                    <img src="{{ asset('assets/sponsor/sosro.png') }}" alt="Sponsor 18"
                                        class="w-full object-contain">
                                    <img src="{{ asset('assets/sponsor/yongChickin.png') }}" alt="Sponsor 19"
                                        class="w-full object-contain">
                                    <img src="{{ asset('assets/sponsor/haseo.png') }}" alt="Sponsor 20"
                                        class="w-full object-contain">
                                </div>
                            </div>
                        </div>

                        <div id="rightSponsor"
                            class="w-[10%] p-[2%] z-[800] aspect-square flex justify-center items-center rounded-full cursor-pointer">
                            <svg width="100%" height="100%" viewBox="0 0 29 52" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.92999 2.19824L26.7316 25.9999L2.92999 49.8015" stroke="#A14000"
                                    stroke-width="3.96694" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <!-- Dots indicator -->
                    <div class="w-full flex justify-center items-center mt-[2%]">
                        <div id="dotsCont" class="flex w-[70%] justify-center items-center space-x-[5%]"></div>
                    </div>
                </div>
            </div>
        </div>


        @include('components.footer')

        <style>
            #homePosterCont span {
                /* font-size: clamp(1.15em); */
                font-size: 2vw;
            }

            #rightSponsor,
            #leftSponsor {
                border: 0.05em solid var(--red);

                transition: transform 0.3s ease, filter 0.3s ease, z-index 0.1s ease;
                cursor: pointer;

                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                outline: none;
            }

            /* Styling for carousel dots */
            .dot {
                width: 0.75rem;
                height: 0.75rem;
                border-radius: 50%;
                border: 0.05em solid var(--red);
                background-color: transparent;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .dot.active {
                background-color: var(--red);
            }

            /* Styling for drag cursor */
            #sponsorTrack {
                cursor: grab;
            }

            #sponsorTrack.grabbing {
                cursor: grabbing;
            }

            #leftSponsor:hover,
            #rightSponsor:hover {
                background-color: var(--red);
                transform: scale(1.1);
                filter: brightness(1.1);
                animation: pulseGlow 0.6s ease-in-out;
                box-shadow: 0 0 20px #f5740b66;
            }

            #leftSponsor:hover path,
            #rightSponsor:hover path {
                stroke: var(--gold);
            }

            #leftSponsor:active,
            #rightSponsor:active {
                transform: scale(0.95);
                transition: transform 0.1s ease;
                z-index: 60;
            }

            #slide img {
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                outline: none;
            }

            [data-aos="example-anim1"] {
                transform: skewX(45deg);
                opacity: 0;
                transition-property: transform, opacity;

                &.aos-animate {
                    transform: skewX(0);
                    opacity: 1;
                }
            }
            [data-aos="example-anim2"] {
                transform: skewX(-50deg);
                opacity: 0;
                transition-property: transform, opacity;

                &.aos-animate {
                    transform: skewX(0);
                    opacity: 1;
                }
            }
        </style>

        <script>
            document.addEventListener("DOMContentLoaded", () => {
                // SEMUA DIMULAI - Enhanced with smoother animations
                const texts = document.querySelectorAll("#semuaText > div");
                const adiElement = document.querySelector('#-adi');
                const aaElement = document.querySelector('#aa');

                // Animation state management
                let hoverTimeout;
                let isHovered = false;
                let isAnimating = false;

                // Set initial state with GSAP
                gsap.set(aaElement, {
                    x: "200%",
                    scale: 0.75,
                    opacity: 0.92,
                    filter: "drop-shadow(3px 3px 3px white)"
                });

                gsap.set(adiElement, {
                    scale: 1,
                    textShadow: "none"
                });

                function smoothHoverIn() {
                    if (isHovered || isAnimating) return;
                    isHovered = true;
                    isAnimating = true;

                    clearTimeout(hoverTimeout);

                    // Animate both elements simultaneously
                    const tl = gsap.timeline({
                        onComplete: () => {
                            isAnimating = false;
                        }
                    });

                    tl.to(aaElement, {
                            x: "75%",
                            scale: 0.76,
                            opacity: 1,
                            duration: 0.8,
                            ease: "power3.out",
                            filter: "drop-shadow(4px 4px 8px rgba(255, 255, 255, 0.3))"
                        })
                        .to(adiElement, {
                            scale: 1.03,
                            textShadow: "0 3px 12px rgba(161, 64, 0, 0.4)",
                            duration: 0.4,
                            ease: "power2.out"
                        }, 0); // Start at the same time
                }

                function smoothHoverOut() {
                    if (!isHovered || isAnimating) return;
                    isHovered = false;
                    isAnimating = true;

                    clearTimeout(hoverTimeout);

                    // Small delay to prevent flickering, but smoother
                    hoverTimeout = setTimeout(() => {
                        const tl = gsap.timeline({
                            onComplete: () => {
                                isAnimating = false;
                            }
                        });

                        tl.to(aaElement, {
                                x: "200%",
                                scale: 0.75,
                                opacity: 0.92,
                                duration: 0.6,
                                ease: "power2.in",
                                filter: "drop-shadow(3px 3px 3px white)"
                            })
                            .to(adiElement, {
                                scale: 1,
                                textShadow: "none",
                                duration: 0.3,
                                ease: "power2.out"
                            }, 0); // Start at the same time
                    }, 100);
                }

                // Enhanced event listeners with better control
                adiElement.addEventListener('mouseenter', smoothHoverIn);
                adiElement.addEventListener('mouseleave', smoothHoverOut);

                // Mobile touch support
                adiElement.addEventListener('touchstart', (e) => {
                    e.preventDefault();
                    smoothHoverIn();

                    // Auto-hide after 2 seconds on mobile
                    setTimeout(() => {
                        if (isHovered) {
                            smoothHoverOut();
                        }
                    }, 2000);
                });

                // Enhanced timeline with better performance
                const tl = gsap.timeline({
                    scrollTrigger: {
                        trigger: "#semuaDimulaiCont",
                        start: "top top",
                        end: "+=1000 center",
                        scrub: true,
                        pin: true,
                        markers: false,
                        pinSpacing: true
                    },
                    onComplete: () => {
                        // Override hover state for scroll completion animation
                        isHovered = false;
                        isAnimating = true;

                        clearTimeout(hoverTimeout);

                        // Use GSAP for ultra-smooth scroll animation
                        const scrollTl = gsap.timeline({
                            onComplete: () => {
                                isAnimating = false;
                                // Allow normal hover interactions after scroll animation
                                setTimeout(() => {
                                    if (!isHovered) {
                                        gsap.to(aaElement, {
                                            x: "200%",
                                            scale: 0.75,
                                            opacity: 0.92,
                                            duration: 0.8,
                                            ease: "power2.in",
                                            filter: "drop-shadow(3px 3px 3px white)"
                                        });
                                    }
                                }, 1500);
                            }
                        });

                        scrollTl.to(aaElement, {
                                x: "75%",
                                scale: 0.76,
                                opacity: 1,
                                duration: 1.2,
                                ease: "elastic.out(1, 0.4)",
                                filter: "drop-shadow(4px 4px 8px rgba(255, 255, 255, 0.3))"
                            })
                            .to(adiElement, {
                                scale: 1.05,
                                duration: 0.6,
                                ease: "back.out(1.7)",
                                yoyo: true,
                                repeat: 1
                            }, 0.3);
                    },
                    onReverseComplete: () => {
                        isHovered = false;
                        isAnimating = true;

                        const reverseTl = gsap.timeline({
                            onComplete: () => {
                                isAnimating = false;
                            }
                        });

                        reverseTl.to(aaElement, {
                                x: "200%",
                                scale: 0.75,
                                opacity: 0.92,
                                duration: 0.8,
                                ease: "power2.in",
                                filter: "drop-shadow(3px 3px 3px white)"
                            })
                            .to(adiElement, {
                                scale: 1,
                                duration: 0.3,
                                ease: "power2.out"
                            }, 0);
                    }
                });

                // Enhanced text animations
                texts.forEach((text, i) => {
                    gsap.set(text, {
                        autoAlpha: 0,
                        opacity: 0,
                        y: 30
                    });
                    tl.to(text, {
                        autoAlpha: 1,
                        opacity: 1,
                        y: 0,
                        duration: 1,
                        ease: "back.out(1.7)"
                    }, "+=0.3");
                });

                // POSTERS
                const posters = document.querySelectorAll("#homePosterCont > div");

                function unBlur(element) {
                    gsap.to(element, {
                        filter: "blur(0px)",
                        duration: 0.3
                    });
                    gsap.to(element.firstElementChild, {
                        yPercent: -55,
                        duration: 0.3
                    });
                }

                function reBlur(element) {
                    gsap.to(element, {
                        filter: "blur(1.2px)",
                        duration: 0.3
                    });
                    gsap.to(element.firstElementChild, {
                        yPercent: 0,
                        duration: 0.3
                    });
                }

                posters.forEach(poster => {
                    poster.addEventListener("mouseenter", () => unBlur(poster));
                    poster.addEventListener("mouseleave", () => reBlur(poster));
                    poster.addEventListener("click", () => unBlur(poster));
                });

                // SPONSORS
                const track = document.getElementById('sponsorTrack');
                const slides = Array.from(track.children);
                const totalSlides = slides.length;
                const dotsCont = document.getElementById('dotsCont');
                let currentSlide = 0;

                let isDragging = false;
                let startPos = 0;
                let currentTranslate = 0;
                let prevTranslate = 0;
                let animationID;

                for (let i = 0; i < totalSlides; i++) {
                    const dot = document.createElement('div');
                    dot.classList.add('dot');
                    if (i === 0) dot.classList.add('active');
                    dot.addEventListener('click', () => {
                        updateSlide(i);
                    });
                    dotsCont.appendChild(dot);
                }
                const dots = Array.from(dotsCont.children);

                function updateSlide(slideIndex, withTransition = true) {
                    currentSlide = slideIndex;

                    const containerWidth = document.getElementById('sponsors').offsetWidth;
                    const newTransform = -currentSlide * containerWidth;

                    if (withTransition) {
                        track.style.transition = 'transform 0.3s ease-in-out';
                    } else {
                        track.style.transition = 'none';
                    }
                    track.style.transform = `translateX(${newTransform}px)`;

                    dots.forEach((dot, index) => {
                        dot.classList.toggle('active', index === currentSlide);
                    });

                    prevTranslate = newTransform;
                }

                function nextSlide() {
                    const newIndex = (currentSlide + 1) % totalSlides;
                    updateSlide(newIndex);
                }

                function prevSlide() {
                    const newIndex = (currentSlide - 1 + totalSlides) % totalSlides;
                    updateSlide(newIndex);
                }

                document.getElementById('leftSponsor').addEventListener('click', prevSlide);
                document.getElementById('rightSponsor').addEventListener('click', nextSlide);

                slides.forEach((slide, index) => {
                    const slideImage = slide.querySelector('img');
                    if (slideImage) slideImage.addEventListener('dragstart', (e) => e.preventDefault());

                    slide.addEventListener('touchstart', touchStart(index));
                    slide.addEventListener('touchend', touchEnd);
                    slide.addEventListener('touchmove', touchMove);

                    slide.addEventListener('mousedown', touchStart(index));
                    slide.addEventListener('mouseup', touchEnd);
                    slide.addEventListener('mouseleave', touchEnd);
                    slide.addEventListener('mousemove', touchMove);
                });

                function getPositionX(event) {
                    return event.type.includes('mouse') ? event.pageX : event.touches[0].clientX;
                }

                function touchStart(index) {
                    return function(event) {
                        isDragging = true;
                        startPos = getPositionX(event);
                        animationID = requestAnimationFrame(animation);
                        track.classList.add('grabbing');
                        track.style.transition = 'none';
                    }
                }

                function touchMove(event) {
                    if (isDragging) {
                        const currentPosition = getPositionX(event);
                        currentTranslate = prevTranslate + currentPosition - startPos;
                    }
                }

                function touchEnd() {
                    cancelAnimationFrame(animationID);
                    isDragging = false;

                    const movedBy = currentTranslate - prevTranslate;
                    const containerWidth = document.getElementById('sponsors').offsetWidth;
                    if (movedBy < -containerWidth / 4 && currentSlide < totalSlides - 1) {
                        nextSlide();
                    } else if (movedBy > containerWidth / 4 && currentSlide > 0) {
                        prevSlide();
                    } else {
                        updateSlide(currentSlide);
                    }

                    track.classList.remove('grabbing');
                    track.style.transition = 'transform 0.3s ease-in-out';
                }

                function setSliderPosition() {
                    track.style.transform = `translateX(${currentTranslate}px)`;
                }

                function animation() {
                    setSliderPosition();
                    if (isDragging) requestAnimationFrame(animation);
                }
                
            });
        </script>
    @endsection()
