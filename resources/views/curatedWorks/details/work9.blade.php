@extends('curatedWorks.layouts.app')

@section('content')
<style>
    /* Works in Chrome, Edge, Safari */
    #artwork-viewport::-webkit-scrollbar {
        height: 16px;
        /* for horizontal scroll */
    }

    #artwork-viewport::-webkit-scrollbar-track {
        background: #67753E;
        /* your olive green */
    }

    #artwork-viewport::-webkit-scrollbar-thumb {
        background-color: #A14000;
        /* accent orange/brown */
        border-radius: 8px;
    }

    #artwork-viewport::-webkit-scrollbar-thumb:hover {
        background-color: #7a2f00;
        /* darker accent on hover */
    }

    /* Firefox support */
    #artwork-viewport {
        scrollbar-width: thin;
        scrollbar-color: #A14000 #67753E;
        /* thumb | track */
    }
</style>

<div class="absolute lg:top-[8rem] sm:-top-[10rem] -top-[21rem] lg:h-[900px] h-[1300px] -rotate-12 lg:-right-[5rem] sm:-right-[1rem] -right-[1rem] w-1/2 bg-[url('{{ asset('asset/images/curated/tanaman-coklat.png') }}')] 
                bg-no-repeat bg-right bg-contain  pointer-events-none"></div>
<div>
    <div class="flex items-center justify-between">
        <h1 class="font-['Sen',sans-serif] tracking-[0.4em] text-[#67753E] text-[12px] sm:text-[25px] lg:text-[35px]">Curated works of</h1>
        <a href="{{ url('/curated-works') }}"
            class="inline-flex font-['Sen',sans-serif] items-center gap-0 sm:gap-2 text-[#A14000] text-[12px] sm:text-[15px] lg:text-[25px] tracking-[0.4em] bg-[#EBE0C2] px-0 sm:px-6 py-3 rounded-lg">
            <!-- Arrow -->
            <span class="text-[15px] lg:text-[20px]">←</span>
            <!-- Text -->
            Go back
        </a>
    </div>
    <h1 class=" w-full sm:w-[80%] sm:mt-10 lg:mt-20 maragsa text-[#A14000] font-bold text-[22px] sm:text-[35px] lg:text-[45px] leading-none">Perancangan Board Game Edukasi Bahasa Slang dan Budaya Inggris Raya</h1>

    <!-- body -->
    <div class=" sm:mt-24 lg:mt-36 flex flex-col lg:flex-row-reverse gap-10 sm:gap-[20rem] lg:gap-36 items-center">
        <!-- image -->
        <div class="z-10 mt-10 sm:mt-0 sm:h-[10rem] sm:w-[22rem] lg:h-auto lg:w-2/3">
            <img src="{{ asset('asset/images/curated/curated9/orang.jpg') }}">
        </div>
        <!-- text -->
        <div class="w-4/5">
            <h1 class="maragsa text-[#67753E] text-[28px] sm:text-[35px] lg:text-[45px]">Felicia Margaretha</h1>
            <h1 class="maragsa text-[#67753E] text-[18px] sm:text-[25px] lg:text-[35px] mt-2 lg:mt-5">E12210261 - Graphic Design</h1>
            <p class="mt-10 lg:mt-5 text-[15px] lg:text-[20px]">
                Meskipun bahasa Inggris diajarkan secara luas di Indonesia, aspek budaya dalam berbahasa, seperti slang, masih luput dalam pendidikan bahasa Inggris dasar di sekolah-sekolah Indonesia. Selain itu, penjelasan mengenai perbedaan kosakata dan penggunaan antara British slang dan American slang dalam pembelajaran masih minim. Hal ini menyebabkan kebingungan, terutama karena penutur asli (native speaker) jarang menyesuaikan cara berbicara mereka. Akibatnya, pelajar asing (non-native) kesulitan mengikuti percakapan dan merasa kurang percaya diri ketika berinteraksi dengan penutur asli karena keterbatasan pemahaman terhadap perbedaan budaya dalam berbahasa. Slang cenderung berfokus pada aspek kehidupan sehari-hari yang mencerminkan karakter dan kebiasaan masyarakat. Oleh karena itu, slang penting untuk dipelajari demi komunikasi yang lebih natural dan pemahaman budaya Inggris Raya yang lebih baik.
            </p>
            <div id="more-info" class="hidden">
                <p class="mt-5 text-[15px] lg:text-[20px]">
                    Board game edukasi “Slang on the Street: Mind the Slang” ini dirancang untuk meningkatkan pemahaman kosakata British slang dan budaya Inggris Raya bagi pelajar Indonesia berusia 15-20 tahun. Hasil penelitian menunjukkan adanya kebutuhan akan media pembelajaran semacam ini, yang didukung oleh mekanisme yang menjanjikan dan visual yang menarik. Permainan ini menggabungkan elemen memori dan strategi secara interaktif, dengan visual yang terinspirasi dari pop culture untuk merepresentasikan kata-kata slang. Setiap kartu dilengkapi dengan deskripsi yang memberikan konteks budaya serta kode QR untuk audio pelafalannya.
                </p>
                <p class="mt-5 text-[15px] lg:text-[20px]">
                    Hasil playtesting dengan target pemain menunjukkan adanya peningkatan pengetahuan slang serta keterlibatan yang positif. Permainan yang mengadopsi pendekatan game-based learning dan dual-coding theory ini, menunjukkan potensi sebagai media yang menyenangkan untuk pembelajaran kosakata, meningkatkan pemahaman budaya, dan melatih komunikasi lintas budaya yang lebih alami.
                </p>
            </div>

            <button id="show-more" class="mt-5 lg:px-8 lg:py-4 sm:px-5 sm:py-2 px-4 py-1 bg-[#67753E] text-[15px] sm:text-[20px] lg:text-[25px]  text-[#EBE0C2] rounded-full mb-10">
                More Info
            </button>

        </div>

    </div>

    <div id="artwork" class="relative mx-auto sm:mt-[5rem] lg:mt-[10rem] max-w-[90vw] sm:max-w-[640px] md:max-w-[768px] lg:max-w-[900px]">
        <div id="artwork-viewport" class="overflow-x-auto snap-x snap-mandatory scroll-smooth">
            <div id="carousel-track" class="flex gap-6">
                <img src="{{ asset('asset/images/curated/curated9/curated_a.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated9/curated_b.jpg') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated9/curated_c.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated9/curated_d.JPG') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated9/curated_e.JPG') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated9/curated_f.png
                ') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
            </div>
        </div>
    </div>

    <script src="{{ asset('js/detail.js') }}"></script>
    @endsection