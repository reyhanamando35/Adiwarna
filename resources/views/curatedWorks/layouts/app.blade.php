<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curated Works</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        .maragsa {
            font-family: 'Maragsa', serif;
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

<body class="bg-[#ece1c3] overflow-x-hidden">
            
    <div class="px-16 py-12 mx-auto overflow-x-hidden relative">
        @yield('content')
    </div>
</body>

</html>