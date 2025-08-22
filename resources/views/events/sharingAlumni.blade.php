@extends('layouts.layout')
@section('content')
    @php
        request()->routeIs('events.*');
    @endphp
    <div
        class="w-screen max-w-screen min-h-screen overflow-hidden relative flex flex-col bg-[var(--beige)] justify-center items-center z-[988]">

        <div class="absolute z-[1] left-[-40%] top-[25%] h-[90%] w-full bg-[linear-gradient(180deg,_#7593ad_0%,_rgba(117,147,173,0)_100%)]"
            style="-webkit-mask: url('{{ asset('assets/fingerprint/charista2.png') }}') no-repeat center / contain;
            mask: url('{{ asset('assets/fingerprint/charista2.png') }}') no-repeat center / contain;
            filter: drop-shadow(3px 3px 3px white);
            transform: rotate(-8deg);">
        </div>

        <div class="absolute z-[1] right-[-5.75%] bottom-[-42%] h-full w-full bg-[linear-gradient(180deg,_rgba(117,147,173,40)_0%,_rgba(117,147,173,0)_100%)]"
            style="-webkit-mask: url('{{ asset('assets/fingerprint/nayla_fingerprint1.png') }}') no-repeat center right / contain;
            mask: url('{{ asset('assets/fingerprint/nayla_fingerprint1.png') }}') no-repeat center right / contain;
            filter: drop-shadow(3px 3px 3px white);">
        </div>

        <!-- Big Container -->
        <div id="bigCont" class="w-[90%] z-10 pb-[3vh] flex flex-row justify-between items-center gap-[3%]">

            <!-- Poster 1 -->
            <div class="posterWrapper relative" data-aos="fade-up" data-aos-duration="1000">
                <!-- box jadi frame -->
                <img class="w-full object-cover relative z-[90]" src="{{ asset('assets/box.png') }}" alt="">
                <!-- poster -->
                <img style="transform: translateY(0.1%);"
                    class="absolute inset-0 w-full h-full object-cover p-[1.5%] z-[89] poster-img transition-all duration-300"
                    src="{{ asset('assets/posters/post2.png') }}" alt="">
            </div>

            <!-- Poster 2 -->
            <!-- Poster 1 -->
            <div class="posterWrapper relative" data-aos="fade-up" data-aos-duration="1000">
                <!-- box jadi frame -->
                <img class="w-full object-cover relative z-[90]" src="{{ asset('assets/box.png') }}" alt="">
                <!-- poster -->
                <img style="transform: translateY(0.1%);"
                    class="absolute inset-0 w-full h-full object-cover p-[1.5%] z-[89] poster-img transition-all duration-300"
                    src="{{ asset('assets/posters/alumni.png') }}" alt="">
            </div>
        </div>
    </div>
    </div>

    @include('components.footer')

    <style>
        /* --- Desktop Default --- */
        #bigCont .posterWrapper {
            width: 50%;
        }

        /* --- Mobile Portrait / Tablet Portrait --- */
        @media (max-width: 1024px) and (orientation: portrait) {
            #bigCont {
                flex-direction: column;
                gap: 4vh;
            }

            #bigCont .posterWrapper {
                width: 80%;
            }
        }

        /* Hover effect */
        .poster-img:hover {
            transform: scale(1.05);
            transition: transform 0.4s ease-in-out;
        }

        #bigCont {
            padding-top: 12.5vh;
            flex-direction: column;
        }

        @media (orientation: landscape) {
            #bigCont {
                padding-top: 17.5vh;
                flex-direction: row;
            }
        }

        @media (min-width: 640px) {
            #bigCont {
                padding-top: 17.5vh;
                flex-direction: row;
            }
        }
    </style>

    <script></script>
@endsection()
