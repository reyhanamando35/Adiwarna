@extends('curatedWorks.layouts.app')

@section('content')
<div>
    <div class="flex items-center justify-between ">
        <h1 class="font-['Sen',sans-serif] tracking-[0.4em] text-[#67753E] text-[35px]">Curated works of</h1>
        <a href="{{ url('/curated-works') }}"
            class="inline-flex font-['Sen',sans-serif] items-center gap-2 text-[#A14000] text-[25px] tracking-[0.4em] bg-[#EBE0C2] px-6 py-3 rounded-lg">
            <!-- Arrow -->
            <span class="text-[20px]">←</span>
            <!-- Text -->
            Go back
        </a>
    </div>
    <h1 class="w-[80%] m-0 mt-10 maragsa text-[#A14000] font-bold text-[45px] leading-none">Membaca Representasi Sandwich Generation
        dalam Serial Nightmares and Daydreams
        Karya Joko Anwar </h1>

    <!-- body -->
    <div class="mt-20 flex gap-36">
        <!-- text -->
        <div class="w-4/5">
            <h1 class="maragsa text-[#67753E] text-[45px]">Jasmine Claudia</h1>
            <h1 class="maragsa text-[#67753E] text-[35px] mt-5">E12210103 - Thesis</h1>
            <p class="mt-5 text-[20px]">
                Meningkatnya eksistensi serial lokal di platform digital seperti Netflix membuka ruang baru bagi representasi isu sosial dalam bentuk visual. Salah satunya adalah fenomena sandwich generation, yakni generasi yang menopang dua generasi sekaligus: merawat orang tua dan membesarkan anak di tengah tekanan ekonomi serta budaya. Dalam konteks Indonesia, beban ini diperberat oleh nilai filial piety atau kewajiban moral untuk berbakti kepada orang tua. Serial Nightmares and Daydreams karya Joko Anwar, khususnya episode “Old House”, merepresentasikan dilema tersebut secara simbolis melalui pendekatan supernatural dan misteri.
            </p>
            <div id="more-info" class="hidden">
                <p class="mt-5 text-[20px]">
                    Melalui episode tersebut, penelitian ini bertujuan mengeksplorasi bagaimana tekanan emosional, konflik moral, dan beban sosial yang dialami sandwich generation direpresentasikan secara visual. Tokoh utama digambarkan berada dalam dilema antara tuntutan budaya dan keterbatasan hidup, di tengah minimnya dukungan struktural dari lingkungan sosial. Kajian ini dilakukan melalui pendekatan kualitatif dengan menggunakan teori representasi Stuart Hall dan semiotika Charles Sanders Peirce untuk menafsirkan makna-makna yang tersirat dalam simbol, ekspresi visual, dan dialog.
                </p>
                <p class="mt-5 text-[20px]">
                    Sebagai bentuk kontribusi, hasil analisis ini menawarkan pendekatan visual untuk membangun kesadaran, menumbuhkan empati, dan membuka ruang diskusi terkait isu sandwich generation. Hasil akhir berupa karya tulis ilmiah ini tidak hanya menyoroti bagaimana media membentuk narasi sosial, tetapi juga memperkaya perspektif dalam bidang Desain Komunikasi Visual serta wacana akademik mengenai representasi isu sosial kontemporer.
                </p>
            </div>

            <button id="show-more" class="mt-5 px-8 py-4 bg-[#67753E] text-[25px]  text-[#EBE0C2] rounded-full mb-10">
                More Info
            </button>

        </div>
        <!-- image -->
        <div class="">
            <img src="{{ asset('asset/images/curated/orang1.png') }}">
        </div>
    </div>

    <div id="artwork" class="mt-[10rem] relative w-full mx-auto flex items-center">
        <!-- Prev Button -->
        <button id="prev"
            class="absolute left-4 z-10
        bg-[#67753E] text-white px-4 py-2 rounded-full shadow-lg
        transition-all duration-300 ease-in-out
        hover:bg-[#3c490c] hover:scale-110 hover:shadow-xl hover:-translate-x-1">
            ←
        </button>

        <!-- Track -->
        <div class="overflow-hidden w-full ">
            <div id="carousel-track" class="flex gap-10">
                <img src="{{ asset('asset/images/curated/curated1_a.png') }}" class="w-[340px] shadow-md">
                <img src="{{ asset('asset/images/curated/curated1_a.png') }}" class="w-[340px] shadow-md">
                <img src="{{ asset('asset/images/curated/curated1_a.png') }}" class="w-[340px] shadow-md">
                <img src="{{ asset('asset/images/curated/curated1_a.png') }}" class="w-[340px] shadow-md">
            </div>
        </div>

        <!-- Next Button -->
        <button id="next"
            class="absolute right-4 z-10
        bg-[#67753E] text-white px-4 py-2 rounded-full shadow-lg
        transition-all duration-300 ease-in-out
        hover:bg-[#3c490c] hover:scale-110 hover:shadow-xl hover:translate-x-1">
            →
        </button>
    </div>

</div>
<script>
    document.getElementById('show-more').addEventListener('click', function() {
        const moreInfo = document.getElementById('more-info');

        if (moreInfo.classList.contains('hidden')) {
            moreInfo.classList.remove('hidden');
            gsap.fromTo(moreInfo.children, {
                    opacity: 0,
                    y: 30
                }, // start
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                    stagger: 0.3,
                    ease: "power2.out"
                } // end
            );
            this.textContent = "Show Less"; // toggle button text
        } else {
            gsap.to(moreInfo.children, {
                opacity: 0,
                y: 30,
                duration: 0.6,
                stagger: 0.2,
                onComplete: () => moreInfo.classList.add('hidden')
            });
            this.textContent = "More Info";
        }
    });

    const track = document.getElementById("carousel-track");
    const prevBtn = document.getElementById("prev");
    const nextBtn = document.getElementById("next");

    let currentIndex = 0;
    const items = track.children;
    const gap = 24; // Tailwind gap-6 = 24px
    let itemWidth = items[0].offsetWidth + gap;

    // Find how many items fit in the viewport
    const container = track.parentElement;
    const visibleCount = Math.floor(container.offsetWidth / itemWidth);

    // Maximum scroll index
    const maxIndex = items.length - visibleCount;

    function updateCarousel() {
        gsap.to(track, {
            x: -currentIndex * itemWidth,
            duration: 0.8,
            ease: "power2.inOut"
        });
    }

    nextBtn.addEventListener("click", () => {
        if (currentIndex < maxIndex) {
            currentIndex++;
            updateCarousel();
        }
    });

    prevBtn.addEventListener("click", () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        }
    });
</script>
@endsection