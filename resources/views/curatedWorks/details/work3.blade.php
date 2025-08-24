@extends('curatedWorks.layouts.app')

@section('content')
<style>
    /* Works in Chrome, Edge, Safari */
#artwork-viewport::-webkit-scrollbar {
  height: 16px; /* for horizontal scroll */
}

#artwork-viewport::-webkit-scrollbar-track {
  background: #67753E; /* your olive green */
}

#artwork-viewport::-webkit-scrollbar-thumb {
  background-color: #A14000; /* accent orange/brown */
  border-radius: 8px;
}

#artwork-viewport::-webkit-scrollbar-thumb:hover {
  background-color: #7a2f00; /* darker accent on hover */
}

/* Firefox support */
#artwork-viewport {
  scrollbar-width: thin;
  scrollbar-color: #A14000 #67753E; /* thumb | track */
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
    <h1 class=" w-full sm:w-[80%] sm:mt-10 lg:mt-20 maragsa text-[#A14000] font-bold text-[22px] sm:text-[35px] lg:text-[45px] leading-none">Analisis Citra Presiden Jokowi Melalui Ilustrasi Aufa Aqil Ghani Dengan Pendekatan Semiotika Roland Barthes</h1>

    <!-- body -->
    <div class=" sm:mt-24 lg:mt-36 flex flex-col lg:flex-row-reverse gap-10 sm:gap-[20rem] lg:gap-36 items-center">
        <!-- image -->
        <div class="z-10 mt-10 sm:mt-0 sm:h-[10rem] sm:w-[22rem] lg:h-auto lg:w-2/3">
            <img src="{{ asset('asset/images/curated/curated3/orang.jpg') }}">
        </div>
        <!-- text -->
        <div class="w-4/5">
            <h1 class="maragsa text-[#67753E] text-[28px] sm:text-[35px] lg:text-[45px]">Kevin Wijaya Tjahjono</h1>
            <h1 class="maragsa text-[#67753E] text-[18px] sm:text-[25px] lg:text-[35px] mt-2 lg:mt-5">E12210072 - Thesis</h1>
            <p class="mt-10 lg:mt-5 text-[15px] lg:text-[20px]">
                Skripsi yang telah dibuat menganalisa ilustrasi pada akun instagram Jokowi yang dibuat oleh Aufa Aqil Ghani. Untuk memahami bagaiamana Jokowi bisa terlihat sebagai karakter politik yang merakyat, dan bersahabat, Walaupun terkadang kenyataan berbeda dengan yang diilustrasikan. Oleh karena itu semitoika mitologi digunakan untuk membedah karya ilustrasi Aufa untuk mendapatkan pemahaman yang lebih mendalam, dan untuk menunjukkan potensi ilustrasi di dunia politik. Analisis yang dilakukan menggunakan tujuh contoh ilustrasi yang diambil dari akun instagram Jokowi, yang dinilai memiliki pesan tersembunyi, dan memiliki korelasi pada masa presidensi Jokowi. Analisis disajikan dalam bentuk tabel untuk kemudahan pembaca, dan supaya terlihat rapi. 
            </p>
            <div id="more-info" class="hidden">
                <p class="mt-5 text-[15px] lg:text-[20px]">
                    Hasil yang diperoleh adalah ilmu semiotika yang lebih mendalam, yang berguna untuk menanam pesan-pesan dalam karya ilustrasi. Kesimpulan yang didapat adalah style kartun yang digunakan oleh Aufa, dan suasana sederhana, ramai yang selalu ada di karya ilustrasi yang dianalisa, menunjukkan kalau Jokowi ingin terlihat merakyat, dan bersahabat dengan rakyat. Kesimpulan ini didukung oleh penggunaan warna cerah, dan kartun yang membuat karya ilustrasi terlihat riang. Walaupun pada kenyataannya tidak semuanya baik-baik saja.  Hasil terakhir yang didapatkan adalah contoh aplikasi nyata dalam bentuk brochure yang memiliki alur cerita, dan gantungan kunci, dan sticker yang dapat digunakan untuk meningkatkan citra dengan pesan merakyat yang positif.
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
                <img src="{{ asset('asset/images/curated/curated3/curated_a.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated3/curated_b.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated3/curated_c.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated3/curated_d.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated3/curated_e.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated3/curated_f.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated3/curated_g.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated3/curated_h.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated3/curated_i.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated3/curated_j.png') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
                <img src="{{ asset('asset/images/curated/curated3/curated_k.jpg') }}" class="shrink-0 max-h-[400px] w-auto h-auto object-contain shadow-md snap-center">
            </div>
        </div>
    </div>

    <script src="{{ asset('js/detail.js') }}"></script>
    @endsection