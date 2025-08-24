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
    <h1 class=" w-full sm:w-[80%] sm:mt-10 lg:mt-20 maragsa text-[#A14000] font-bold text-[22px] sm:text-[35px] lg:text-[45px] leading-none">Perancangan Video Marketing untuk PT. Riaputra Metalindo dalam Upaya Meningkatkan Brand Awareness Segmen Market Kontraktor</h1>

    <!-- body -->
    <div class=" sm:mt-24 lg:mt-36 flex flex-col lg:flex-row-reverse gap-10 sm:gap-[20rem] lg:gap-36 items-center">
        <!-- image -->
        <div class="z-10 mt-10 sm:mt-0 sm:h-[10rem] sm:w-[22rem] lg:h-auto lg:w-2/3">
            <img src="{{ asset('asset/images/curated/curated35/orang.jpg') }}">
        </div>
        <!-- text -->
        <div class="w-4/5">
            <h1 class="maragsa text-[#67753E] text-[28px] sm:text-[35px] lg:text-[45px]">Patrick Joshua Sindarto</h1>
            <h1 class="maragsa text-[#67753E] text-[18px] sm:text-[25px] lg:text-[35px] mt-2 lg:mt-5">E12180026 - Graphic Design</h1>
            <p class="mt-10 lg:mt-5 text-[15px] lg:text-[20px]">
                Latar Belakang Masalah: PT. Riaputra Metalindo sulit untuk bersaing di pasaran karena diawal perusahaan dalam menyuplai produk besinya bergantung pada distributor dan toko yang menggunakan sistem pembayaran tempo. Sehingga perusahaan ingin membuka market yang lebih luas dengan menjangkau market kontraktor yang melakukan pembayaran tunai secara langsung.

            </p>
            <div id="more-info" class="hidden">
                <p class="mt-5 text-[15px] lg:text-[20px]">
                    Solusi: perusahaan PT. Riaputra Metalindo mendapati bahwa salah satu cara yang efektif untuk meningkatkan brand awareness kontaktor terhadap PT. Riaputra Metalindo serta menjangkau customer online lebih banyak dengan waktu yang cepat adalah melalui video marketing berupa video branding yang diiklankan.

                    Tujuan: merancang video branding sebagai bentuk video marketing yang mampu meningkatkan brand awareness PT. Riaputra Metalindo di segmen market kontraktor melalui narasi yang emosional, visual yang kuat, dan penyampaian pesan yang relevan.
                </p>
                <p class="mt-5 text-[15px] lg:text-[20px]">                
                    Penjelasan Singkat Mengenai Output Karya: hasil akhir dari perancangan ini adalah berupa video branding yang berdurasi satu menit empat puluh lima detik. Video branding ini diberi judul “Lebih dari Supplier, Kami adalah Partner Bisnis Anda”. Format video branding adalah H.264 atau MP4. frame rate 30fps. Kualitas gambar adalah 1080p. Resolusi gambar adalah 1920 x 1080 (16:9). Cerita video branding secara singkat adalah mengenai seorang kontraktor yang menghadapi berbagai kendala proyek seperti keterlamabatan material, harga yang tidak transparan, dan supplier yang lambat merespons. Situasi berubah saat kontraktor menemukan PT. Riaputra Metalindo, mitra bisnis yang cepat, responsif, dan terpercaya. Dengan pelayanan profesional dan pemahaman atas kebutuhan kontraktor, proyek berjalan lancar dan sukses. Video ini menekankan bahwa kerja sama bisnis adalah tentang kepercayaan dan hubungan yang saling menguntungkan itulah kunci keberhasilan bersama.
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
                <img src="{{ asset('asset/images/curated/curated35/curated_a.jpg') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated35/curated_b.jpg') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated35/curated_c.jpg') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated35/curated_d.jpg') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated35/curated_e.jpg') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated35/curated_f.jpg') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
            </div>
        </div>
    </div>

    <script src="{{ asset('js/detail.js') }}"></script>
    @endsection 