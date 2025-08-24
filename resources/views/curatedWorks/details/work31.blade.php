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
    <h1 class=" w-full sm:w-[80%] sm:mt-10 lg:mt-20 maragsa text-[#A14000] font-bold text-[22px] sm:text-[35px] lg:text-[45px] leading-none">Perancangan Strategi Komunikasi Praktek Dr. Sindy kepada Remaja dan Orang Tua</h1>

    <!-- body -->
    <div class=" sm:mt-24 lg:mt-36 flex flex-col lg:flex-row-reverse gap-10 sm:gap-[20rem] lg:gap-36 items-center">
        <!-- image -->
        <div class="z-10 mt-10 sm:mt-0 sm:h-[10rem] sm:w-[22rem] lg:h-auto lg:w-2/3">
            <img src="{{ asset('asset/images/curated/curated31/orang.jpg') }}">
        </div>
        <!-- text -->
        <div class="w-4/5">
            <h1 class="maragsa text-[#67753E] text-[28px] sm:text-[35px] lg:text-[45px]">Vanessa Angelica Nelwan</h1>
            <h1 class="maragsa text-[#67753E] text-[18px] sm:text-[25px] lg:text-[35px] mt-2 lg:mt-5">E12210080 - Campaign</h1>
            <p class="mt-10 lg:mt-5 text-[15px] lg:text-[20px]">
                Rendahnya kesadaran masyarakat Indonesia akan kesehatan gigi dan mulut cukup memprihatinkan. Mayoritas masyarakat berkunjung ke dokter gigi hanya saat sakit dan bukan sebagai kegiatan rutin. Untuk menyadarkan masyarakat, Praktek Dr. Sindy menyampaikan pesan komunikasi melalui media yang paling dekat dengan audiens, yaitu media sosial. Pesan ini hadir di Instagram dan TikTok sebagai dua platform yang paling sering dipakai oleh target audiensnya, yaitu remaja dan orang tua. Konten dibagi menjadi dua jenis, yaitu educative content dan educational content. 
            </p>
            <div id="more-info" class="hidden">
                <p class="mt-5 text-[15px] lg:text-[20px]">
                    Keduanya dikemas dengan gaya santai dan dibuat relevan dengan kehidupan sehari-hari untuk meningkatkan engagement. Sebagai media pendukung, tersedia stiker fisik untuk dibagikan kepada audiens di ruang tunggu praktek. Selain itu, ada juga stiker digital yang bisa digunakan di WhatsApp untuk menyebarkan awareness secara lebih personal dan menyenangkan. Melalui pendekatan yang ringan namun tepat sasaran, diharapkan masyarakat mulai terbiasa merawat kesehatan gigi secara rutin.
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
                <a href="{{ asset('asset/images/curated/curated31/buku.pdf') }}" target="_blank" class="shrink-0 max-h-[900px] w-auto h-auto object-contain shadow-md snap-center">
                    <img src="{{ asset('asset/images/curated/curated31/buku.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                </a>
                <a href="{{ asset('asset/images/curated/curated31/katalog.pdf') }}" target="_blank" class="shrink-0 max-h-[900px] w-auto h-auto object-contain shadow-md snap-center">
                    <img src="{{ asset('asset/images/curated/curated31/katalog.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                </a>
                <img src="{{ asset('asset/images/curated/curated31/curated_a.JPG') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated31/curated_b.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated31/curated_c.jpg') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated31/curated_d.jpg') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
            </div>
        </div>
    </div>

    <script src="{{ asset('js/detail.js') }}"></script>
    @endsection 