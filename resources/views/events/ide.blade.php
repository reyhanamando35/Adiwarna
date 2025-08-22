@extends('layouts.layout')
@section('content')
    @php
        request()->routeIs('events.*');
    @endphp
    <div
        class="w-screen max-w-screen min-h-screen overflow-hidden relative flex flex-col bg-[var(--beige)] justify-center items-center z-[988]">

        <div class="absolute z-[1] opacity-[50%] left-[-40%] top-[25%] h-[90%] w-full bg-[linear-gradient(180deg,_#7593ad_0%,_rgba(117,147,173,0)_100%)]"
            style="-webkit-mask: url('{{ asset('assets/fingerprint/charista2.png') }}') no-repeat center / contain;
            mask: url('{{ asset('assets/fingerprint/charista2.png') }}') no-repeat center / contain;
            filter: drop-shadow(3px 3px 3px white);
            transform: rotate(-8deg);">
        </div>

        <div class="absolute z-[1] opacity-[60%] right-[-5.75%] bottom-[-42%] h-full w-full bg-[linear-gradient(180deg,_rgba(117,147,173,40)_0%,_rgba(117,147,173,0)_100%)]"
            style="-webkit-mask: url('{{ asset('assets/fingerprint/nayla_fingerprint1.png') }}') no-repeat center right / contain;
            mask: url('{{ asset('assets/fingerprint/nayla_fingerprint1.png') }}') no-repeat center right / contain;
            filter: drop-shadow(3px 3px 3px white);">
        </div>

        <div id="bigCont" class="w-[90%] z-10 pb-[3vh] flex flex-col justify-between items-center">
            <div id="posterContainer" class="w-[35%] flex justify-center items-center relative">
                <img class="absolute inset-0 w-full object-cover" src="{{ asset('assets/box.png') }}" alt="">
                <img id="posterImg" class="w-full object-cover p-[1%] poster-img transition-all duration-300"
                    src="{{ asset('assets/posters/post4.png') }}" alt="">
            </div>
            <div id="contentContainer" class="w-[55%] flex flex-col justify-center items-center">
                <div class="w-full flex flex-col justify-center items-center">
                    <div id="title" class="w-full flex flex-col justify-center items-start">
                        <h1 id="titleFirst" class="font-maragsa text-[var(--red)]">IDE :</h1>
                        <h1 id="titleSecond" class="font-maragsa text-[var(--red)]">Inspirasi, Desain, Eksekusi</h1>
                    </div>
                    <div id="subtitle" style="width: 100%;" class="flex items-center justify-center">
                        <h1 id="subtitleText" class="font-maragsa text-[var(--light-green)]">Dengan <br class="">
                            Meutia Adyrana & Ovita
                            Pattari</h1>
                    </div>
                </div>
                <div style="width: 100%;" class="flex flex-col justify-center items-center">
                    <div id="waktuTempat" class="w-full flex flex-col justify-center items-start ">
                        <h1 id="location" class="font-sen text-[var(--light-green)] font-bold">Atrium Homepro, Pakuwon Mall
                        </h1>
                        <h1 id="date" class="font-sen text-[var(--light-green)]">22 Agustus 2025</h1>
                        <h1 id="time" class="font-sen text-[var(--light-green)]">11.30 - 13.00 WIB</h1>
                    </div>
                    <div id="registCont" style="width: 100%;" class="flex justify-center items-center">
                        <div id="registHere" onclick="window.open('http://petra.id/RegistrationTSIDE', '_blank')"
                            class="w-full rounded-full bg-[var(--light-green)] p-[1.5%] flex flex-col justify-center items-center relative overflow-hidden cursor-pointer transition-all duration-300">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent transform -skew-x-12 -translate-x-full hover:translate-x-full transition-transform duration-700">
                            </div>
                            <a class="font-sen text-white relative z-10 transition-all duration-300">
                                Regist Here
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('components.footer')

    <style>
        #title h1:first-child {
            font-size: clamp(2.5em, 6vw, 9vw);
        }

        #title h1:nth-child(2) {
            font-size: clamp(1.75em, 4.5vw, 7.5vw);
            line-height: 1em;
            margin-top: -2.5%;
        }

        #subtitle h1 {
            font-size: clamp(1.25em, 3.5vw, 6.5vw);
            text-align: center;
            line-height: 1em;
            margin-top: 2.5%;
        }

        /* Efek tombol */
        #registHere {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border: 2px solid transparent;
            opacity: 0;
            transform: translateY(50px) scale(0.9);
        }

        #registHere:hover {
            background-color: var(--red);
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 8px 20px rgba(117, 147, 173, 0.3);
        }

        #registHere:active {
            transform: translateY(0) scale(0.97);
            box-shadow: inset 0 3px 10px rgba(173, 172, 117, 0.5);
        }

        #registHere a {
            color: white;
            font-size: clamp(0.975em, 2.5vw, 3vw);
            transition: all 0.3s ease;
        }

        #registHere:hover a {
            color: white;
            transform: translateX(1%);
        }

        /* Spasi horizontal antar blok */
        #contentContainer>div {
            margin-bottom: 3vh;
        }

        #contentContainer>div:last-child {
            margin-bottom: 0;
        }

        #waktuTempat h1 {
            font-size: clamp(0.975em, 2.5vw, 3vw);
        }

        #title {
            align-items: center;
        }

        #bigCont div:last-child {
            width: 100%;
        }

        #bigCont {
            padding-top: 12.5vh;
            flex-direction: column;
        }

        #waktuTempat {
            align-items: center;
        }

        /* Animation initial states */
        #posterContainer {
            opacity: 0;
            transform: scale(0.8) rotate(-10deg);
        }

        #titleFirst {
            opacity: 0;
            transform: translateX(-50px);
        }

        #titleSecond {
            opacity: 0;
            transform: translateX(-50px);
        }

        #subtitleText {
            opacity: 0;
            transform: translateY(30px);
        }

        #location,
        #date,
        #time {
            opacity: 0;
            transform: translateX(-30px);
        }

        #registCont {
            justify-content: center;
        }

        @media (min-width: 640px) {
            #title {
                align-items: start;
            }

            #bigCont div:last-child {
                width: 55%;
            }

            #subtitle {
                justify-content: start;
            }

            #subtitle h1 {
                text-align: start;
            }

            #bigCont {
                padding-top: 17.5vh;
                flex-direction: row;
            }

            #waktuTempat {
                align-items: flex-start;
            }

            #registCont {
                justify-content: start;
            }
        }

        @media (orientation: landscape) {
            #title {
                align-items: start;
            }

            #bigCont div:last-child {
                width: 55%;
            }

            #subtitle {
                justify-content: start;
            }

            #subtitle h1 {
                text-align: start;
            }

            #bigCont {
                padding-top: 17.5vh;
                flex-direction: row;
            }

            #waktuTempat {
                align-items: flex-start;
            }

            #registCont {
                justify-content: start;
            }
        }
    </style>

    <!-- GSAP CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Timeline untuk animasi loading
            const tl = gsap.timeline();

            tl.to('#posterContainer', {
                    opacity: 1,
                    scale: 1,
                    rotation: 0,
                    duration: 0.8,
                    ease: "back.out(1.7)"
                })
                .to('#titleFirst', {
                    opacity: 1,
                    x: 0,
                    duration: 0.6,
                    ease: "power2.out"
                }, "-=0.4")
                .to('#titleSecond', {
                    opacity: 1,
                    x: 0,
                    duration: 0.6,
                    ease: "power2.out"
                }, "-=0.3")
                .to('#subtitleText', {
                    opacity: 1,
                    y: 0,
                    duration: 0.5,
                    ease: "power2.out"
                }, "-=0.2")
                .to('#location', {
                    opacity: 1,
                    x: 0,
                    duration: 0.4,
                    ease: "power2.out"
                }, "-=0.1")
                .to('#date', {
                    opacity: 1,
                    x: 0,
                    duration: 0.4,
                    ease: "power2.out"
                }, "-=0.2")
                .to('#time', {
                    opacity: 1,
                    x: 0,
                    duration: 0.4,
                    ease: "power2.out"
                }, "-=0.2")
                .to('#registHere', {
                    opacity: 1,
                    y: 0,
                    scale: 1,
                    duration: 0.6,
                    ease: "back.out(1.7)"
                }, "-=0.1");

            // Hover effect untuk poster
            const poster = document.getElementById('posterImg');
            poster.addEventListener('mouseenter', function() {
                gsap.to(this, {
                    scale: 1.05,
                    rotation: 2,
                    duration: 0.3,
                    ease: "power2.out"
                });
            });

            poster.addEventListener('mouseleave', function() {
                gsap.to(this, {
                    scale: 1,
                    rotation: 0,
                    duration: 0.3,
                    ease: "power2.out"
                });
            });
        });
    </script>
@endsection()
