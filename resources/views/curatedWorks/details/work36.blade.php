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
    <h1 class=" w-full sm:w-[80%] sm:mt-10 lg:mt-20 maragsa text-[#A14000] font-bold text-[22px] sm:text-[35px] lg:text-[45px] leading-none">Perancangan Strategi Komunikasi Visual tentang Brazilian Jiu-Jitsu sebagai Self-Defense</h1>

    <!-- body -->
    <div class=" sm:mt-24 lg:mt-36 flex flex-col lg:flex-row-reverse gap-10 sm:gap-[20rem] lg:gap-36 items-center">
        <!-- image -->
        <div class="z-10 mt-10 sm:mt-0 sm:h-[10rem] sm:w-[22rem] lg:h-auto lg:w-2/3">
            <img src="{{ asset('asset/images/curated/curated35/orang.jpg') }}">
        </div>
        <!-- text -->
        <div class="w-4/5">
            <h1 class="maragsa text-[#67753E] text-[28px] sm:text-[35px] lg:text-[45px]">Aloisius Thomas</h1>
            <h1 class="maragsa text-[#67753E] text-[18px] sm:text-[25px] lg:text-[35px] mt-2 lg:mt-5">E12210079 - Campaign</h1>
            <p class="mt-10 lg:mt-5 text-[15px] lg:text-[20px]">
                Kemampuan untuk melindungi diri dari kejahatan fisik merupakan kebutuhan penting, terlebih bagi Generasi Z dengan mobilitas tinggi. Namun, banyak orang enggan mempelajari bela diri karena dianggap berat dan membutuhkan komitmen besar. Penelitian ini bertujuan untuk merancang strategi komunikasi visual yang memperkenalkan seni bela diri Brazilian Jiu-Jitsu (BJJ) sebagai metode self-defense yang efektif dan menyenangkan. Metode yang digunakan adalah kualitatif, dengan teknik pengumpulan data berupa wawancara, observasi, dan kuesioner kepada praktisi BJJ serta target audience di Surabaya. Hasil analisis menunjukkan bahwa minimnya pengetahuan, mispersepsi, dan rasa takut menjadi hambatan utama masyarakat dalam mencoba BJJ. 
            </p>
            <div id="more-info" class="hidden">
                <p class="mt-5 text-[15px] lg:text-[20px]">
                    Strategi komunikasi visual dirancang berdasarkan analisis target audience dan consumer insight, dengan media utama berupa konten digital serta aktivitas workshop interaktif. Kampanye ini mengangkat insight bahwa masyarakat lebih memilih solusi instan seperti pepper spray dibandingkan bela diri, padahal keterampilan bela diri jauh lebih andal dalam situasi darurat. Kampanye dikemas dengan pendekatan visual yang fun dan relatable untuk menarik minat Gen Z. Hasil dari perancangan ini menunjukkan bahwa workshop yang dilaksanakan berhasil menjaring 20 peserta yang sebelumnya belum pernah mempelajari BJJ, menandakan efektivitas kampanye dalam menjangkau audiens baru dan membangun kesadaran akan pentingnya bela diri.
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
                <a href="{{ asset('asset/images/curated/curated36/buku.pdf') }}" target="_blank" class="shrink-0 max-h-[900px] w-auto h-auto object-contain shadow-md snap-center">
                    <img src="{{ asset('asset/images/curated/curated36/buku.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                </a>
                <img src="{{ asset('asset/images/curated/curated36/curated_a.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated36/curated_b.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated36/curated_c.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated36/curated_d.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated36/curated_e.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated36/curated_f.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
            </div>
        </div>
    </div>

    <script src="{{ asset('js/detail.js') }}"></script>
    @endsection 