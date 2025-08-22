<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adiwarna | @yield('title', $title ?? 'Welcome')</title>
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


        .swal2-popup {
            background-color: hsla(30, 100%, 32%, 0.15);
            background-image:
                radial-gradient(at 0% 0%, hsla(30, 100%, 50%, 0.3) 0px, transparent 50%),
                radial-gradient(at 80% 2%, hsla(200, 100%, 85%, 0.3) 0px, transparent 50%),
                radial-gradient(at 41% 28%, hsla(265, 70%, 60%, 0.3) 0px, transparent 50%),
                radial-gradient(at 0% 57%, hsla(220, 80%, 75%, 0.3) 0px, transparent 50%),
                radial-gradient(at 80% 58%, hsla(28, 90%, 60%, 0.3) 0px, transparent 50%),
                radial-gradient(at 80% 83%, hsla(250, 60%, 70%, 0.3) 0px, transparent 50%),
                radial-gradient(at 0% 100%, hsla(36, 100%, 65%, 0.3) 0px, transparent 50%);

            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            box-shadow: 0 0 5px var(--glow), 0 0 10px var(--glow);
            /* filter: brightness(135%);
            -webkit-filter: brightness(135%);
            -ms-filter: brightness(135%); */
        }

        .swal2-title,
        .swal2-html-container {
            text-shadow: none !important;
            color: white !important;
            font-weight: 600 !important;
            background: none !important;
            box-shadow: none !important;
        }

        .swal2-confirm {
            text-shadow: 0 0 12px var(--glow);
            background: none !important;
            color: white !important;
            font-weight: 600 !important;
            border: solid var(--glow) 2.6px !important;
            width: 100px !important;
            box-shadow: 0 0 9px var(--glow) !important;
        }

        .swal2-confirm:hover {
            box-shadow: 0 0 14px var(--glow) !important;

        }

        .swal2-confirm:active {
            transform: scale(0.97);
        }


        .swal2-icon,
        .swal2-success-circular-line-left,
        .swal2-success-circular-line-right,
        .swal2-success-fix {
            background: transparent !important;
        }
    </style>
    @stack('styles')
    @yield('head')
</head>

<body>

    @if (session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: "{{ session('error') }}",
                });
            });
        </script>
    @elseif (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: '{{ session('success') }}',
                })
            });
        </script>
    @elseif (session('message'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire('{{ session('message') }}');
            });
        </script>
    @endif

    @include('components.nav')

    @yield('content')

    @stack('scripts')
    @yield('script')
</body>

</html>
