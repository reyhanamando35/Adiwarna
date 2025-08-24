@extends('layouts.layout')
@section('content')
    @php
        request()->routeIs('events.*');
    @endphp

    <div class="w-screen max-w-screen relative flex flex-col bg-[var(--beige)] justify-center items-center z-[988]">

        <div class="absolute z-[1] left-[-45%] top-[13.75%] h-1/2 w-full bg-[linear-gradient(180deg,_rgba(117,147,173,60)_19%,_rgba(117,147,173,0)_100%)]"
            style="-webkit-mask: url('{{ asset('assets/fingerprint/jessicaHome1.png') }}') no-repeat center / contain;
            mask: url('{{ asset('assets/fingerprint/jessicaHome1.png') }}') no-repeat center / contain;
            filter: drop-shadow(3px 3px 3px white);
            transform: rotate(20deg);"
            data-aos="fade" data-aos-duration="900" data-aos-delay="150" data-aos-once="true">
        </div>
        <div class="absolute z-[1] right-[-45%] top-[-4.75%] h-[45%] w-[90%] bg-[linear-gradient(180deg,_rgba(117,147,173,60)_19%,_rgba(117,147,173,0)_100%)]"
            style="-webkit-mask: url('{{ asset('assets/fingerprint/jessicaHome1.png') }}') no-repeat center / contain;
            mask: url('{{ asset('assets/fingerprint/jessicaHome1.png') }}') no-repeat center / contain;
            filter: drop-shadow(3px 3px 3px white);
            transform: rotate(-55deg);"
            data-aos="fade" data-aos-duration="900" data-aos-delay="250" data-aos-once="true">
        </div>

        <div class="absolute z-[1] right-[-20%] bottom-[14.75%] h-[45%] w-[90%] bg-[linear-gradient(180deg,_rgba(117,147,173,60)_19%,_rgba(117,147,173,0)_100%)]"
            style="-webkit-mask: url('{{ asset('assets/fingerprint/charista1.png') }}') no-repeat center / contain;
            mask: url('{{ asset('assets/fingerprint/charista1.png') }}') no-repeat center / contain;
            filter: drop-shadow(3px 3px 3px white);"
            data-aos="fade" data-aos-duration="900" data-aos-delay="350" data-aos-once="true">
        </div>

        <div class="w-[90%] z-10 pb-[3vh] pt-[17.5vh] flex justify-center items-center flex-col" data-aos="fade-up"
            data-aos-duration="800" data-aos-once="true">
            <div class="w-full flex justify-start items-center text-center">
                <h1 id="these" class="font-sen tracking-[0.3em] text-[var(--light-green)]" data-aos="fade-right"
                    data-aos-duration="800" data-aos-delay="150" data-aos-once="true">
                    These are our
                </h1>
            </div>
            <div id="title" class="w-full flex flex-col justify-center items-center">
                <div class="w-full justify-start items-center flex">
                    <h1 class="font-maragsa text-[var(--red)]" data-aos="zoom-in" data-aos-duration="700"
                        data-aos-delay="200" data-aos-once="true">Upcoming</h1>
                </div>
                <div class="w-full justify-center items-center flex">
                    <h1 class="font-maragsa text-[var(--red)] pr-0 sm:pr-[15%]" data-aos="zoom-in" data-aos-duration="700"
                        data-aos-delay="300" data-aos-once="true">Events</h1>
                </div>
            </div>

            {{-- <div id="title" class="w-[55%] bg-yellow-400 flex flex-col justify-center items-start">
                <div class="w-full justify-start items-center flex">
                    <h1 class="font-maragsa text-[var(--red)]">Upcoming</h1>
                </div>
                <div class="w-full justify-end items-center flex">
                    <h1 class="font-maragsa text-[var(--red)]">Events</h1>
                </div>
            </div> --}}

        </div>

        <div class="w-[85%] z-10 pb-[10%] flex justify-center items-center" data-aos="fade-up" data-aos-duration="900"
            data-aos-once="true">
            <div id="kiri" class="w-[50%] flex flex-col justify-center items-center">
                <div class="postCont w-[90%] flex justify-center items-center relative poster-container" data-aos="fade-up"
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

                <div class="postCont w-[90%] flex justify-center items-center relative my-[5%] poster-container"
                    data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-offset=370>
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

                <div class="postCont w-[90%] flex justify-center items-center relative poster-container" data-aos="fade-up"
                    data-aos-duration="800" data-aos-delay="200" data-aos-offset=600>
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
                        <!-- box jadi frame -->
                        <img class="w-full object-cover relative z-[90]" src="{{ asset('assets/box.png') }}"
                            alt="">

                        <!-- poster di dalam, agak mengecil -->
                        <img style="transform: translateY(0.167%);"
                            class="absolute inset-0 w-full h-full object-cover p-[1.5%] z-[89] poster-img transition-all duration-300"
                            src="{{ asset('assets/posters/post2.png') }}" alt="">
                    </div>
                </div>

            </div>
            <div id="kanan" class="w-[50%] flex flex-col justify-center items-center pb-[15%]">
                <div class="postCont w-[90%] flex justify-center items-center relative my-[5%] poster-container"
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
                <div class="postCont w-[90%] flex justify-center items-center relative my-[5%] poster-container"
                    data-aos="fade-up" data-aos-duration="800" data-aos-delay="150" data-aos-offset=420>
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
                /* font-size: 2vw; */
            }

            /* .postCont{
                            width: 90%;
                        } */
            @media (min-width: 640px) {
                .postCont {
                    width: 75%;
                }
            }
        </style>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const posterContainers = document.querySelectorAll('.poster-container');

                posterContainers.forEach(container => {
                    const posterImg = container.querySelector('.poster-img');
                    const miniboxOverlay = container.querySelector('.minibox-overlay');
                    const miniboxWrapper = container.querySelector('.minibox-wrapper');
                    const miniboxImg = container.querySelector('.minibox-img');

                    // GSAP timeline for container hover
                    const containerTl = gsap.timeline({
                        paused: true
                    });
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

                    // GSAP timeline for minibox hover
                    const miniboxTl = gsap.timeline({
                        paused: true
                    });
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
                    container.addEventListener('mouseenter', () => {
                        containerTl.play();
                    });

                    container.addEventListener('mouseleave', () => {
                        containerTl.reverse();
                        miniboxTl.reverse(); // Reset minibox animation when leaving container
                    });

                    // Minibox hover events (only if container is hovered)
                    miniboxWrapper.addEventListener('mouseenter', () => {
                        miniboxTl.play();
                    });

                    miniboxWrapper.addEventListener('mouseleave', () => {
                        miniboxTl.reverse();
                    });

                    // Add click animation
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

                // =========================
                // EXTRA GSAP ENTRANCE + SCROLL ANIM
                // (tidak mengubah ukuran, hanya opacity/translate)
                // =========================

                // Respect reduced motion
                const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
                // Paranoid fallback: if user disables motion, skip heavy animations
                if (!prefersReduced && window.gsap) {
                    // Register ScrollTrigger if available globally
                    try {
                        // eslint-disable-next-line no-undef
                        gsap.registerPlugin(ScrollTrigger);
                    } catch (e) {
                        // ScrollTrigger not present; entrance anims below still run
                    }

                    // Hero text entrance
                    const heroTl = gsap.timeline({
                        defaults: {
                            duration: 0.6,
                            ease: "power2.out"
                        }
                    });

                    heroTl.from("#these", {
                            y: 20,
                            opacity: 0
                        })
                        .from("#title div:first-child h1", {
                            y: 30,
                            opacity: 0
                        }, "-=0.2")
                        .from("#title div:last-child h1", {
                            y: 30,
                            opacity: 0
                        }, "-=0.35");

                    // Subtle parallax for masked backgrounds (if ScrollTrigger exists)
                    if (window.ScrollTrigger) {
                        const masks = document.querySelectorAll(
                            ".absolute.z-\\[1\\][style*='mask'], .absolute.z-\\[1\\][style*='-webkit-mask']"
                        );
                        masks.forEach((el, idx) => {
                            gsap.to(el, {
                                y: idx % 2 === 0 ? -40 : -20,
                                ease: "none",
                                scrollTrigger: {
                                    trigger: el,
                                    start: "top bottom",
                                    end: "bottom top",
                                    scrub: true
                                }
                            });
                        });

                        // Posters slight rise on scroll (complement AOS)
                        document.querySelectorAll('.postCont').forEach((card, i) => {
                            gsap.from(card, {
                                y: 30,
                                opacity: 0,
                                duration: 0.6,
                                scrollTrigger: {
                                    trigger: card,
                                    start: "top 85%",
                                    toggleActions: "play none none reverse"
                                }
                            });
                        });
                    }
                }
            });
        </script>
    @endsection()
