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
    <h1 class=" w-full sm:w-[80%] sm:mt-10 lg:mt-20 maragsa text-[#A14000] font-bold text-[22px] sm:text-[35px] lg:text-[45px] leading-none">Perancangan Kampanye Edukasi Mengenai Bahaya Mengkonsumsi Gula Berlebih Bagi Generasi Muda di Surabaya</h1>

    <!-- body -->
    <div class=" sm:mt-24 lg:mt-36 flex flex-col lg:flex-row-reverse gap-10 sm:gap-[20rem] lg:gap-36 items-center">
        <!-- image -->
        <div class="z-10 mt-10 sm:mt-0 sm:h-[10rem] sm:w-[22rem] lg:h-auto lg:w-2/3">
            <img src="{{ asset('asset/images/curated/curated8/orang.jpg') }}">
        </div>
        <!-- text -->
        <div class="w-4/5">
            <h1 class="maragsa text-[#67753E] text-[28px] sm:text-[35px] lg:text-[45px]">Carla Victoria Lesmana</h1>
            <h1 class="maragsa text-[#67753E] text-[18px] sm:text-[25px] lg:text-[35px] mt-2 lg:mt-5">E12210041 - Campaign</h1>
            <p class="mt-10 lg:mt-5 text-[15px] lg:text-[20px]">
                Kesadaran remaja terhadap konsumsi gula berlebih kini semakin meningkat, ditandai dengan maraknya pilihan less sugar saat memesan minuman manis. Namun, pemahaman mereka masih terbatas pada istilah tersebut tanpa mengetahui jumlah gula yang sebenarnya dikonsumsi. Pada kenyataannya, terdapat produk dengan label “less sugar” tetap melebihi batas asupan gula harian yang direkomendasikan WHO.
            </p>
            <div id="more-info" class="hidden">
                <p class="mt-5 text-[15px] lg:text-[20px]">
                    Sebagai solusi, kampanye ini dirancang untuk memberikan edukasi yang aplikatif kepada remaja, dengan pendekatan visual, interaktif, dan langsung ke lapangan dengan disarankan memesan minuman yang rendah gula sebanyak 25% dari minuman tersebut atau sekitar 2,5-2,6 sendok teh. Strategi kampanye mencakup kolaborasi dengan merek minuman manis, penyusunan panduan memesan minuman rendah gula yang benar, aktivasi melalui media sosial, serta pemanfaatan maskot edukatif sebagai penyampai pesan. Merchandise kampanye juga digunakan sebagai media pengingat berkelanjutan agar pesan kampanye tidak mudah dilupakan.
                </p>
                <p class="mt-5 text-[15px] lg:text-[20px]">
                    Tujuan utama dari kampanye ini adalah meningkatkan kesadaran remaja terhadap konsumsi gula yang sehat dan mengurangi risiko penyakit tidak menular sejak dini, dalam bentuk perancangan kampanye edukatif visual yang strategis, media promosi, serta bentuk interaksi langsung dengan target audiens.
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
                <img src="{{ asset('asset/images/curated/curated8/curated_a.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated8/curated_b.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated8/curated_c.jpg') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated8/curated_d.jpg') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated8/curated_e.jpg') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated8/curated_f.jpg') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
            </div>
        </div>
    </div>

    <script src="{{ asset('js/detail.js') }}"></script>
    @endsection