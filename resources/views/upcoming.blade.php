@extends('layouts.layout')
@section('content')
    @php
        request()->routeIs('events.*');
    @endphp
    <div class="w-screen max-w-screen relative flex flex-col bg-[var(--beige)] justify-center items-center z-[988]">
        <div class="fingerprint-mask fingerprint-1 absolute z-[1] left-[-45%] top-[13.75%] h-1/2 w-full bg-[linear-gradient(180deg,_rgba(117,147,173,60)_19%,_rgba(117,147,173,0)_100%)]"
            style="-webkit-mask: url('{{ asset('assets/fingerprint/jessicaHome1.png') }}') no-repeat center / contain;
            mask: url('{{ asset('assets/fingerprint/jessicaHome1.png') }}') no-repeat center / contain;
            filter: drop-shadow(3px 3px 3px white);
            transform: rotate(20deg);"
            data-aos="fade" data-aos-duration="900" data-aos-delay="150" data-aos-once="true">
        </div>
        <div class="fingerprint-mask fingerprint-2 absolute z-[1] right-[-45%] top-[-4.75%] h-[45%] w-[90%] bg-[linear-gradient(180deg,_rgba(117,147,173,60)_19%,_rgba(117,147,173,0)_100%)]"
            style="-webkit-mask: url('{{ asset('assets/fingerprint/jessicaHome1.png') }}') no-repeat center / contain;
            mask: url('{{ asset('assets/fingerprint/jessicaHome1.png') }}') no-repeat center / contain;
            filter: drop-shadow(3px 3px 3px white);
            transform: rotate(-55deg);"
            data-aos="fade" data-aos-duration="900" data-aos-delay="250" data-aos-once="true">
        </div>
        <div class="fingerprint-mask fingerprint-3 absolute z-[1] right-[-20%] bottom-[14.75%] h-[45%] w-[90%] bg-[linear-gradient(180deg,_rgba(117,147,173,60)_19%,_rgba(117,147,173,0)_100%)]"
            style="-webkit-mask: url('{{ asset('assets/fingerprint/charista1.png') }}') no-repeat center / contain;
            mask: url('{{ asset('assets/fingerprint/charista1.png') }}') no-repeat center / contain;
            filter: drop-shadow(3px 3px 3px white);"
            data-aos="fade" data-aos-duration="900" data-aos-delay="350" data-aos-once="true">
        </div>
        <div class="hero-section w-[90%] z-10 pb-[3vh] pt-[17.5vh] flex justify-center items-center flex-col" data-aos="fade-up"
            data-aos-duration="800" data-aos-once="true">
            <div class="w-full flex justify-start items-center text-center">
                <h1 id="these" class="font-sen tracking-[0.3em] text-[var(--light-green)]" data-aos="fade-right"
                    data-aos-duration="800" data-aos-delay="150" data-aos-once="true">
                    These are our
                </h1>
            </div>
            <div id="title" class="w-full flex flex-col justify-center items-center">
                <div class="w-full justify-start items-center flex">
                    <h1 class="title-upcoming font-maragsa text-[var(--red)]" data-aos="zoom-in" data-aos-duration="700"
                        data-aos-delay="200" data-aos-once="true">Upcoming</h1>
                </div>
                <div class="w-full justify-center items-center flex">
                    <h1 class="title-events font-maragsa text-[var(--red)] pr-0 sm:pr-[15%]" data-aos="zoom-in" data-aos-duration="700"
                        data-aos-delay="300" data-aos-once="true">Events</h1>
                </div>
            </div>
        </div>
        <div class="w-[85%] z-10 pb-[10%] flex justify-center items-center" data-aos="fade-up" data-aos-duration="900"
            data-aos-once="true">
            <div id="kiri" class="w-[50%] flex flex-col justify-center items-center">
                <div class="postCont poster-1 w-[90%] flex justify-center items-center relative poster-container" data-aos="fade-up"
                    data-aos-duration="800" data-aos-once="true">
                    <div
                        class="absolute inset-0 z-[100] w-full flex justify-center items-center opacity-0 transition-opacity duration-300 minibox-overlay">
                        <div onclick="window.location.href='{{ route('events.ide') }}'"
                            class="flex cursor-pointer justify-center items-center w-[80%] relative minibox-wrapper">
                            <img style="filter: blur(1px); filter: brightness(120%);"
                                class="w-[80%] opacity-[70%] minibox-img" src="{{ asset('assets/miniBox.png') }}"
                                alt="">
                            <div class="clickMore absolute font-sen text-[var(--gold)]">Click to Read More!</div>
                        </div>
                    </div>
                    <img class="absolute inset-0 w-full object-cover" src="{{ asset('assets/box.png') }}" alt="">
                    <img class="w-full object-cover p-[1%] poster-img transition-all duration-300"
                        src="{{ asset('assets/posters/post4.png') }}" alt="">
                </div>
                <div class="postCont poster-2 w-[90%] flex justify-center items-center relative my-[5%] poster-container"
                    data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-offset="370">
                    <div
                        class="absolute inset-0 z-[100] w-full flex justify-center items-center opacity-0 transition-opacity duration-300 minibox-overlay">
                        <div onclick="window.location.href='{{ route('events.seniKaryaSaku') }}'"
                            class="flex cursor-pointer justify-center items-center w-[80%] relative minibox-wrapper">
                            <img style="filter: blur(1px); filter: brightness(120%);"
                                class="w-[80%] opacity-[70%] minibox-img" src="{{ asset('assets/miniBox.png') }}"
                                alt="">
                            <div class="clickMore absolute font-sen text-[var(--gold)]">Click to Read More!</div>
                        </div>
                    </div>
                    <img class="absolute inset-0 w-full object-cover" src="{{ asset('assets/box.png') }}" alt="">
                    <img class="w-full object-cover p-[1%] poster-img transition-all duration-300"
                        src="{{ asset('assets/posters/post1.png') }}" alt="">
                </div>
                <div class="postCont poster-3 w-[90%] flex justify-center items-center relative poster-container" data-aos="fade-up"
                    data-aos-duration="800" data-aos-delay="200" data-aos-offset="600">
                    <div
                        class="absolute inset-0 z-[100] w-full flex justify-center items-center opacity-0 transition-opacity duration-300 minibox-overlay">
                        <div onclick="window.location.href='{{ route('events.sharingAlumni') }}'"
                            class="flex cursor-pointer justify-center items-center w-[80%] relative minibox-wrapper">
                            <img style="filter: blur(1px); filter: brightness(120%);"
                                class="w-[80%] opacity-[70%] minibox-img" src="{{ asset('assets/miniBox.png') }}"
                                alt="">
                            <div class="clickMore absolute font-sen text-[var(--gold)]">Click to Read More!</div>
                        </div>
                    </div>
                    <div class="relative w-full">
                        <img class="w-full object-cover relative z-[90]" src="{{ asset('assets/box.png') }}"
                            alt="">
                        <img style="transform: translateY(0.167%);"
                            class="absolute inset-0 w-full h-full object-cover p-[1.5%] z-[89] poster-img transition-all duration-300"
                            src="{{ asset('assets/posters/post2.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div id="kanan" class="w-[50%] flex flex-col justify-center items-center pb-[15%]">
                <div class="postCont poster-4 w-[90%] flex justify-center items-center relative my-[5%] poster-container"
                    data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                    <div
                        class="absolute inset-0 z-[100] w-full flex justify-center items-center opacity-0 transition-opacity duration-300 minibox-overlay">
                        <div onclick="window.location.href='{{ route('events.ruangCerita') }}'"
                            class="flex cursor-pointer justify-center items-center w-[80%] relative minibox-wrapper">
                            <img style="filter: blur(1px); filter: brightness(120%);"
                                class="w-[80%] opacity-[70%] minibox-img" src="{{ asset('assets/miniBox.png') }}"
                                alt="">
                            <div class="clickMore absolute font-sen text-[var(--gold)]">Click to Read More!</div>
                        </div>
                    </div>
                    <img class="absolute inset-0 w-full object-cover" src="{{ asset('assets/box.png') }}"
                        alt="">
                    <img class="w-full object-cover p-[1%] poster-img transition-all duration-300"
                        src="{{ asset('assets/posters/post3.png') }}" alt="">
                </div>
                <div class="postCont poster-5 w-[90%] flex justify-center items-center relative my-[5%] poster-container"
                    data-aos="fade-up" data-aos-duration="800" data-aos-delay="150" data-aos-offset="420">
                    <div
                        class="absolute inset-0 z-[100] w-full flex justify-center items-center opacity-0 transition-opacity duration-300 minibox-overlay">
                        <div onclick="window.location.href='{{ route('events.lokakaryaRuparasa') }}'"
                            class="flex cursor-pointer justify-center items-center w-[80%] relative minibox-wrapper">
                            <img style="filter: blur(1px); filter: brightness(120%);"
                                class="w-[80%] opacity-[70%] minibox-img" src="{{ asset('assets/miniBox.png') }}"
                                alt="">
                            <div class="clickMore absolute font-sen text-[var(--gold)]">Click to Read More!</div>
                        </div>
                    </div>
                    <img class="absolute inset-0 w-full object-cover" src="{{ asset('assets/box.png') }}"
                        alt="">
                    <img class="w-full object-cover p-[1%] poster-img transition-all duration-300"
                        src="{{ asset('assets/posters/post5.png') }}" alt="">
                </div>
            </div>
        </div>
        @include('components.footer')
        <style>
            #title h1 {
                font-size: clamp(2.75em, 8vw, 10vw);
                line-height: 1em;
            }
            #these {
                font-size: clamp(0.85em, 2.2vw, 3.4vw);
            }
            .poster-img {
                filter: blur(0px);
            }
            .poster-container:hover .poster-img {
                filter: blur(4px);
            }
            .poster-container:hover .minibox-overlay {
                opacity: 1;
            }
            .minibox-wrapper {
                transition: transform 0.3s ease, filter 0.3s ease;
            }
            .minibox-wrapper:hover {
                transform: scale(1.05);
            }
            .minibox-wrapper:hover .minibox-img {
                filter: blur(0px) brightness(140%) saturate(1.2);
            }
            .clickMore {
                font-size: clamp(0.48em, 2vw, 2.25vw);
            }
            @media (min-width: 640px) {
                .postCont {
                    width: 75%;
                }
            }
        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Detect device type
                const isMobile = window.innerWidth < 1024; // Tailwind lg breakpoint
                const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
                
                if (prefersReduced) {
                    return; // Skip all animations
                }

                // =========================
                // MOBILE: GSAP ANIMATIONS
                // =========================
                if (isMobile) {
                    gsap.registerPlugin(ScrollTrigger);
                    
                    // Disable AOS on mobile
                    if (typeof AOS !== 'undefined') {
                        AOS.init({ disable: true });
                    }

                    // Set initial state untuk semua poster (PENTING!)
                    gsap.set(['.poster-1', '.poster-2', '.poster-3', '.poster-4', '.poster-5'], {
                        opacity: 0,
                        y: 60
                    });

                    // Fingerprint masks entrance
                    gsap.from('.fingerprint-1', {
                        opacity: 0,
                        duration: 0.9,
                        delay: 0.15,
                        ease: "power2.out"
                    });

                    gsap.from('.fingerprint-2', {
                        opacity: 0,
                        duration: 0.9,
                        delay: 0.25,
                        ease: "power2.out"
                    });

                    gsap.from('.fingerprint-3', {
                        opacity: 0,
                        duration: 0.9,
                        delay: 0.35,
                        ease: "power2.out"
                    });

                    // Hero section entrance
                    const heroTl = gsap.timeline({
                        defaults: {
                            duration: 0.8,
                            ease: "power2.out"
                        }
                    });

                    heroTl
                        .from('.hero-section', {
                            y: 30,
                            opacity: 0
                        })
                        .from('#these', {
                            x: -30,
                            opacity: 0,
                            duration: 0.8,
                            delay: 0.15
                        }, '-=0.6')
                        .from('.title-upcoming', {
                            scale: 0.8,
                            opacity: 0,
                            duration: 0.7,
                            delay: 0.2
                        }, '-=0.5')
                        .from('.title-events', {
                            scale: 0.8,
                            opacity: 0,
                            duration: 0.7,
                            delay: 0.3
                        }, '-=0.6');

                    // Poster cards dengan pendekatan baru - menggunakan gsap.to untuk animasi
                    const posterConfigs = [
                        { selector: '.poster-1', delay: 0.6 },    // Delay lebih lama karena sudah visible
                        { selector: '.poster-2', delay: 0.1 },
                        { selector: '.poster-3', delay: 0.15 },
                        { selector: '.poster-4', delay: 0.65 },   // Delay lebih lama karena sudah visible
                        { selector: '.poster-5', delay: 0.1 }
                    ];

                    posterConfigs.forEach(({ selector, delay }) => {
                        const element = document.querySelector(selector);
                        
                        // Cek apakah element sudah di viewport saat load
                        const rect = element.getBoundingClientRect();
                        const isInViewport = rect.top < window.innerHeight && rect.bottom > 0;
                        
                        if (isInViewport) {
                            // Jika sudah visible, langsung animate tanpa ScrollTrigger
                            gsap.to(selector, {
                                y: 0,
                                opacity: 1,
                                duration: 1,
                                delay: delay,
                                ease: "power2.out"
                            });
                        } else {
                            // Jika belum visible, gunakan ScrollTrigger
                            gsap.to(selector, {
                                y: 0,
                                opacity: 1,
                                duration: 1,
                                ease: "power2.out",
                                scrollTrigger: {
                                    trigger: selector,
                                    start: "top 95%",
                                    end: "top 45%",
                                    toggleActions: "play none none none",
                                    once: true,
                                    // markers: true // Uncomment untuk debugging
                                },
                                delay: delay
                            });
                        }
                    });

                    // Parallax effect untuk fingerprints - lebih halus
                    const masks = document.querySelectorAll('.fingerprint-mask');
                    masks.forEach((el, idx) => {
                        gsap.to(el, {
                            y: idx % 2 === 0 ? -30 : -15,
                            ease: "none",
                            scrollTrigger: {
                                trigger: el,
                                start: "top bottom",
                                end: "bottom top",
                                scrub: 2
                            }
                        });
                    });
                }
                
                // =========================
                // DESKTOP: AOS ANIMATIONS
                // =========================
                else {
                    // Initialize AOS for desktop
                    if (typeof AOS !== 'undefined') {
                        AOS.init({
                            once: true,
                            duration: 800
                        });
                    }
                }

                // =========================
                // HOVER INTERACTIONS (Both)
                // =========================
                const posterContainers = document.querySelectorAll('.poster-container');
                
                posterContainers.forEach(container => {
                    const posterImg = container.querySelector('.poster-img');
                    const miniboxOverlay = container.querySelector('.minibox-overlay');
                    const miniboxWrapper = container.querySelector('.minibox-wrapper');
                    const miniboxImg = container.querySelector('.minibox-img');
                    
                    // Container hover timeline
                    const containerTl = gsap.timeline({ paused: true });
                    containerTl
                        .to(posterImg, {
                            filter: 'blur(4px)',
                            duration: 0.3,
                            ease: "power2.out"
                        })
                        .to(miniboxOverlay, {
                            opacity: 1,
                            duration: 0.3,
                            ease: "power2.out"
                        }, 0);
                    
                    // Minibox hover timeline
                    const miniboxTl = gsap.timeline({ paused: true });
                    miniboxTl
                        .to(miniboxWrapper, {
                            scale: 1.08,
                            rotation: 2,
                            duration: 0.4,
                            ease: "back.out(1.7)"
                        })
                        .to(miniboxImg, {
                            filter: 'blur(0px) brightness(150%) saturate(1.3) drop-shadow(0 0 10px rgba(255, 215, 0, 0.5))',
                            duration: 0.4,
                            ease: "power2.out"
                        }, 0);
                    
                    // Container hover events
                    container.addEventListener('mouseenter', () => containerTl.play());
                    container.addEventListener('mouseleave', () => {
                        containerTl.reverse();
                        miniboxTl.reverse();
                    });
                    
                    // Minibox hover events
                    miniboxWrapper.addEventListener('mouseenter', () => miniboxTl.play());
                    miniboxWrapper.addEventListener('mouseleave', () => miniboxTl.reverse());
                    
                    // Click animation
                    miniboxWrapper.addEventListener('click', () => {
                        gsap.to(miniboxWrapper, {
                            scale: 0.95,
                            duration: 0.1,
                            yoyo: true,
                            repeat: 1,
                            ease: "power2.inOut"
                        });
                    });
                });
            });
        </script>
    @endsection()