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
    <h1 class=" w-full sm:w-[80%] sm:mt-10 lg:mt-20 maragsa text-[#A14000] font-bold text-[22px] sm:text-[35px] lg:text-[45px] leading-none">Perancangan VTuber Tokoh Cerita Rakyat Indonesia sebagai upaya meningkatkan minat remaja terhadap Budaya Lokal</h1>

    <!-- body -->
    <div class=" sm:mt-24 lg:mt-36 flex flex-col lg:flex-row-reverse gap-10 sm:gap-[20rem] lg:gap-36 items-center">
        <!-- image -->
        <div class="z-10 mt-10 sm:mt-0 sm:h-[10rem] sm:w-[22rem] lg:h-auto lg:w-2/3">
            <img src="{{ asset('asset/images/curated/curated40/orang.jpg') }}">
        </div>
        <!-- text -->
        <div class="w-4/5">
            <h1 class="maragsa text-[#67753E] text-[28px] sm:text-[35px] lg:text-[45px]">Albertus Christian Surya</h1>
            <h1 class="maragsa text-[#67753E] text-[18px] sm:text-[25px] lg:text-[35px] mt-2 lg:mt-5">E12210083 - Graphic Design</h1>
            <p class="mt-10 lg:mt-5 text-[15px] lg:text-[20px]">
                Sakha Raya dan Pehtakwa adalah sebuah display typeface yang lahir dan terinspirasi dari kebudayaan daerah Kediri. Sakha Raya merupakan display typeface yang terinspirasi dari sejarah kejayaan Kediri dalam zaman Jawa kuno. Bentuk yang terpilih untuk diolah adalah relief flora candi yang meliputi Candi Tegowangi dan Surawana, serta bentuk Aksara Kwadrat Kediri yang menjadi bukti kejayaan Kediri. Sakha Raya memiliki karakteristik yaitu bentuk huruf yang kaku dan sedikit lebar yang terinspirasi dengan bentuk dari Aksara Kwadrat. Karakteristik bentuk meliuk dan pada serif di huruf ligatur juga merepresentasikan dari bentuk meliuk dari relief flora yaitu,  sulur tanaman pada relief flora candi (Candi Tegowangi dan Candi Surawana).
            </p>
            <div id="more-info" class="hidden">
                <p class="mt-5 text-[15px] lg:text-[20px]">
                    Pehtakwa merupakan display typeface yang lahir dan terinspirasi dari kajian kuliner Tahu Takwa yang sudah melekat di daerah Kediri. Karakteristik dari huruf dalam typeface Pehtakwa memiliki bentuk geometris dengan basis blocky yang kotak untuk merepresentasikan bentuk Tahu Takwa yang padat dan tebal. Setiap sudut memiliki bentuk yang curvy atau bulat dan lekukan luwes yang dibentuk meliuk ke dalam dengan pendekatan dari basis bentuk psychedelic untuk merepresentasikan kata kunci Tahu Takwa yang lembut, luwes. Lekukan luwes yang meliuk ke dalam ini juga memiliki bentuk yang menyerupai sebuah biji yang tumbuh layaknya biji kedelai yang menjadi bahan pembuatan Tahu Takwa. Tahu Takwa juga memiliki cita rasa gurih yang dapat direpresentasikan melalui bentuk sudut yang meruncing.
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
                <img src="{{ asset('asset/images/curated/curated40/curated_a.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated40/curated_b.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated40/curated_c.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated40/curated_d.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated40/curated_e.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated40/curated_f.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated40/curated_g.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated40/curated_h.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated40/curated_i.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated40/curated_j.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated40/curated_k.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated40/curated_.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated40/curated_m.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated40/curated_n.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated40/curated_o.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
            </div>
        </div>
    </div>

    <script src="{{ asset('js/detail.js') }}"></script>
    @endsection  