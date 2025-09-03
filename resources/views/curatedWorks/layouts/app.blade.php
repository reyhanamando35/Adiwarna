<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adiwarna | Curated Works</title>
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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
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

        /* Works in Chrome, Edge, Safari */
        #works-container::-webkit-scrollbar {
            height: 12px;
            /* for horizontal scroll */
        }

        #works-container::-webkit-scrollbar-track {
            background: #67753E;
            /* your olive green */
        }

        #works-container::-webkit-scrollbar-thumb {
            background-color: #A14000;
            /* accent orange/brown */
            border-radius: 8px;
        }

        #works-container::-webkit-scrollbar-thumb:hover {
            background-color: #7a2f00;
            /* darker accent on hover */
        }

        /* Firefox support */
        #works-container {
            scrollbar-width: thin;
            scrollbar-color: #A14000 #67753E;
            /* thumb | track */
        }
    </style>

</head>

<body class="bg-[#ece1c3]">
    @php
        request()->routeIs('work');
    @endphp
    @include('components.nav')

    <div class="px-16 py-12 z-[988] mx-auto overflow-x-hidden relative">
        @yield('content')
    </div>
    {{-- <div class="flex z-[988] justify-center items-center w-screen">
        @include('components.footer')
    </div> --}}

</body>

</html>
