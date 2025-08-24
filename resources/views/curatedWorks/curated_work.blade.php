@extends('curatedWorks.layouts.app')

@section('content')

@include('curatedWorks.partials.title')
@include('curatedWorks.partials.plants')

<div id="works-container" class="container translate-y-0 lg:-translate-y-[8rem] xl:translate-y-0 mt-0 xl:mt-[10rem] mx-auto pb-20">
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 gap-y-20 items-end justify-items-center mt-[7rem]">
        <!-- work 1 -->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work1']),
        'class' => 'card-left rotate-[-8deg]',
        'title' => 'Membaca Representasi Sandwich Generation dalam Serial Nightmares and Daydreams Karya Joko Anwar',
        'name' => 'Jasmine Claudia',
        'nrp' => 'E12210103',
        'image' => 'asset/images/curated/curated1/curated_a.jpg',
        'type' => 'Thesis'
        ])
        <!-- work 2 -->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work2']),
        'class' => 'card-middle',
        'title' => 'Eksplorasi Budaya Fandom Melalui Perancangan Intellectual Property Karakter Goomi',
        'name' => 'Karyn F. Ijaya',
        'nrp' => 'E12210004',
        'image' => 'asset/images/curated/curated2/curated_a.png',
        'type' => 'Graphic Design',
        ])
        <!-- work 3 -->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work3']),
        'class' => 'card-right rotate-[8deg]',
        'title' => 'Analisis Citra Presiden Jokowi Melalui Ilustrasi Aufa Aqil Ghani Dengan Pendekatan Semiotika Roland Barthes',
        'name' => 'Kevin Wijaya Tjahjono',
        'nrp' => 'E12210072',
        'image' => 'asset/images/curated/curated3/curated_j.png',
        'type' => 'Thesis',
        ])
        <!-- work 4 -->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work4']),
        'class' => 'card-left rotate-[-8deg]',
        'title' => 'Perancangan Rebranding "b.thelabel" untuk Meningkatkan Brand Awareness',
        'name' => 'Cornellia Nadya',
        'nrp' => 'E12210186',
        'image' => 'asset/images/curated/curated4/curated_a.jpg',
        'type' => 'Brand & Product Innovation',
        ])
        <!-- work 5 -->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work5']),
        'class' => 'card-middle',
        'title' => 'Perancangan Iklan layanan masyarakat untuk mengurai arus lalu lintas yang ada di kota Surabaya',
        'name' => 'Elia Patrick',
        'nrp' => 'E12210021',
        'image' => 'asset/images/curated/curated5/curated_f.jpg',
        'type' => 'Campaign',
        ])
        <!-- work 6 -->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work6']),
        'class' => 'card-right rotate-[8deg]',
        'title' => 'Analisis Konten Explore Surabaya dalam Meningkatkan Engagement',
        'name' => 'Jessica Wijaya',
        'nrp' => 'E12210217',
        'image' => 'asset/images/curated/curated6/curated_a.png',
        'type' => 'Thesis',
        ])
        <!-- work 7  -->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work7']),
        'class' => 'card-left rotate-[-8deg]',
        'title' => 'Perancangan Desain Antarmuka Aplikasi Sebagai Alat Bantu Komunikasi Untuk Mahasiswa Tunarungu Di Surabaya',
        'name' => 'Michelle Natalie',
        'nrp' => 'E12210234',
        'image' => 'asset/images/curated/curated7/curated_c.png',
        'type' => 'Thesis'
        ])
        <!-- work 8 -->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work8']),
        'class' => 'card-middle',
        'title' => 'Perancangan Kampanye Edukasi Mengenai Bahaya Mengkonsumsi Gula Berlebih Bagi Generasi Muda di Surabaya',
        'name' => 'Carla Victoria',
        'nrp' => 'E12210041',
        'image' => 'asset/images/curated/curated8/curated_b.png',
        'type' => 'Campaign',
        ])
        <!-- work 9 -->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work9']),
        'class' => 'card-right rotate-[8deg]',
        'title' => 'Perancangan Board Game Edukasi Bahasa Slang dan Budaya Inggris Raya',
        'name' => 'Felicia Margaretha',
        'nrp' => 'E12210261',
        'image' => 'asset/images/curated/curated9/curated_b.jpg',
        'type' => 'Thesis',
        ])
         <!-- work 10 -->   
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work10']),
        'class' => 'card-left rotate-[-8deg]',
        'title' => 'Perancangan Game Visual Novel Tema Main Character Syndrome bagi Remaja 18 - 24 Tahun',
        'name' => 'Stephanie Angelina',
        'nrp' => 'E12210110',
        'image' => 'asset/images/curated/curated10/curated_a.jpg',
        'type' => 'Digital Media',
        ])
        <!-- work 11 --> 
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work11']),
        'class' => 'card-middle',
        'title' => 'Analisis Makna Desain Poster Aktivitas Internasional Petra Christian University dan Sophia University',
        'name' => 'Karina Anggi',
        'nrp' => 'E12210183',
        'image' => 'asset/images/curated/curated11/curated_a.png',
        'type' => 'Thesis',
        ])
        <!-- work 12-->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work12']),
        'class' => 'card-right rotate-[8deg]',
        'title' => 'Perancangan Board Game Sebagai Media Edukasi Untuk Mempersiapkan Anak Muda Sebelum Menikah',
        'name' => 'Klaudia',
        'nrp' => 'E12210045',
        'image' => 'asset/images/curated/curated12/curated_e.jpg',
        'type' => 'Graphic Design',
        ])
        <!-- work 13 -->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work13']),
        'class' => 'card-left rotate-[-8deg]',
        'title' => 'Perancangan rebranding logo dan strategi promosi Bakwan Family melalui sosial media',
        'name' => 'Joceline Irene',
        'nrp' => 'E12210050',
        'image' => 'asset/images/curated/curated13/curated_a.jpeg',
        'type' => 'Brand & Product Innovation'
        ])
        <!-- work 14 -->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work14']),
        'class' => 'card-middle',
        'title' => 'Analisis Personal Branding Lisa Blackpink dalam Tren Gaya Hidup Gen-Z',
        'name' => 'Charlenne Chay',
        'nrp' => 'E12210162',
        'image' => 'asset/images/curated/curated14/curated_b.jpg',
        'type' => 'Thesis',
        ])
        <!-- work 15 -->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work15']),
        'class' => 'card-right rotate-[8deg]',
        'title' => 'Perancangan Gim Interaktif mengenai Literasi Keuangan untuk Generasi Alfa',
        'name' => 'David Fortino',
        'nrp' => 'E12210047',
        'image' => 'asset/images/curated/curated15/curated_c.png',
        'type' => 'Digital Media',
        ])
        <!-- work 16 -->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work16']),
        'class' => 'card-left rotate-[-8deg]',
        'title' => 'Perancangan Kampanye Reparenting Wounded Innerchild bagi Gen Z',
        'name' => 'Liem Abigail',
        'nrp' => 'E12210031',
        'image' => 'asset/images/curated/curated16/curated_c.JPG',
        'type' => 'Campaign',
        ])
        <!-- work 17 -->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work17']),
        'class' => 'card-middle',
        'title' => 'Perancangan Strategi Komunikasi Brand Katering Ny. Yoga',
        'name' => 'Michele Swandy',
        'nrp' => 'E12210126',
        'image' => 'asset/images/curated/curated17/curated_c.jpg',
        'type' => 'Brand & Product Innovation',
        ])
        <!-- work 18 -->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work18']),
        'class' => 'card-right rotate-[8deg]',
        'title' => 'Perancangan kampanye sosial mengenai pentingnya peregangan bagi Remaja Jompo',
        'name' => 'Michelle Amelia',
        'nrp' => 'E12210217',
        'image' => 'asset/images/curated/curated18/curated_b.jpg',
        'type' => 'Campaign',
        ])
        <!-- work 19 -->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work19']),
        'class' => 'card-left rotate-[-8deg]',
        'title' => "Analisis Visual Karakter Sebagai Media Pendidikan dan Pembangunan Karakter Generasi Z : Studi Kasus Howl/'s Moving Castle Produksi Studio Ghibli",
        'name' => 'Amadea Levina',
        'nrp' => 'E12210077',
        'image' => 'asset/images/curated/curated19/curated_b.jpg',
        'type' => 'Thesis'
        ])
        <!-- work 20 -->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work20']),
        'class' => 'card-middle',
        'title' => 'Perancangan Board Game untuk Menjembatani Permasalahan Miskomunikasi Generation Gap antara Generasi Millennial dengan Generasi Alpha',
        'name' => 'Evan Tjandra',
        'nrp' => 'E12210111',
        'image' => 'asset/images/curated/curated20/curated_b.jpg',
        'type' => 'Graphic Design',
        ])
        <!-- work 21 -->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work21']),
        'class' => 'card-right rotate-[8deg]',
        'title' => 'Perancangan Strategi Komunikasi Brand untuk Pouch Pembalut Antimicrobial',
        'name' => 'Tiffany Gricella',
        'nrp' => 'E12210215',
        'image' => 'asset/images/curated/curated21/curated_e.jpg',
        'type' => 'Brand & Product Innovation',
        ]) 
        <!-- work 22 -->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work22']),
        'class' => 'card-left rotate-[-8deg]',
        'title' => 'Perancangan Kampanye Sosial Tentang Pentingnya Memperhatikan Kecantikan Natural Bagi Remaja Perempuan dengan Konsumsi Sayur dan Buah.',
        'name' => 'Hanny Danawati',
        'nrp' => 'E12210011',
        'image' => 'asset/images/curated/curated22/curated_a.JPG',
        'type' => 'Campaign',
        ])
        <!-- work 23 -->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work23']),
        'class' => 'card-middle',
        'title' => 'Analisis Revolusi AI Dalam Desain: Studi Kasus Agensi Kreatif di Grow In Asia',
        'name' => 'Calista Marvella',
        'nrp' => 'E12210008',
        'image' => 'asset/images/curated/curated23/curated_c.JPG',
        'type' => 'Thesis',
        ]) 
        <!-- work 24 -->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work24']),
        'class' => 'card-right rotate-[8deg]',
        'title' => 'Perancangan Buku Interaktif Makna Warna Hijau Terhadap Persepsi Brand Berdasarkan Brand Makanan Sehat di Surabaya',
        'name' => 'Fransiska Catharina',
        'nrp' => 'E12210078',
        'image' => 'asset/images/curated/curated24/curated_b.jpg',
        'type' => 'Graphic Design',
        ])
        <!-- work 25 -->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work25']),
        'class' => 'card-left rotate-[-8deg]',
        'title' => 'Perancangan Strategi Promosi Parfum Hyangee Melalui Media Sosial Untuk Membangun Brand Awareness dan Identitas Visual',
        'name' => 'Eleonora Audrey',
        'nrp' => 'E12210060',
        'image' => 'asset/images/curated/curated25/curated_a.png',
        'type' => 'Brand & Product Innovation'
        ])
        <!-- work 26 -->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work26']),
        'class' => 'card-middle',
        'title' => 'Perancangan Card Game untuk Memperkenalkan Ragam dan Makna Bunga kepada Anak Muda',
        'name' => 'Cindy Natalia',
        'nrp' => 'E12210128',
        'image' => 'asset/images/curated/curated26/curated_a.jpg',
        'type' => 'Graphic Design',
        ])
        <!-- work 27 -->
        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work27']),
        'class' => 'card-right rotate-[8deg]',
        'title' => 'Perancangan Desain Kemasan Kreatif Untuk Produk Dupa Brand Rossi Sebagai Upaya Meningkatkan Daya Tarik & Nilai Jual',
        'name' => 'Nathania Bintang Javier',
        'nrp' => 'E12210119',
        'image' => 'asset/images/curated/curated27/curated_a.jpg',
        'type' => 'Graphic Design',
        ])

        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work1']),
        'class' => 'card-left rotate-[-8deg]',
        'title' => 'Analisis Konten Explore Surabaya dalam Meningkatkan Engagement',
        'name' => 'Jessica Wijaya',
        'nrp' => 'E12210217',
        'image' => 'asset/images/curated/curated1.png',
        'type' => 'Thesis',
        ])

        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work1']),
        'class' => 'card-middle',
        'title' => 'Analisis Konten Explore Surabaya dalam Meningkatkan Engagement',
        'name' => 'Jessica Wijaya',
        'nrp' => 'E12210217',
        'image' => 'asset/images/curated/curated1.png',
        'type' => 'Thesis',
        ])

        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work1']),
        'class' => 'card-right rotate-[8deg]',
        'title' => 'Analisis Konten Explore Surabaya dalam Meningkatkan Engagement',
        'name' => 'Jessica Wijaya',
        'nrp' => 'E12210217',
        'image' => 'asset/images/curated/curated1.png',
        'type' => 'Thesis',
        ])

        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work1']),
        'class' => 'card-left rotate-[-8deg]',
        'title' => 'Iklan layanan masyarakat - kampanye sosial - 1 tujuan untuk indonesia merdeka',
        'name' => 'Jessica Wijaya',
        'nrp' => 'E12210217',
        'image' => 'asset/images/curated/curated1.png',
        'type' => 'Thesis'
        ])

        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work2']),
        'class' => 'card-middle',
        'title' => 'Analisis Konten Explore Surabaya dalam Meningkatkan Engagement',
        'name' => 'Jessica Wijaya',
        'nrp' => 'E12210217',
        'image' => 'asset/images/curated/curated1.png',
        'type' => 'Thesis',
        ])

        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work1']),
        'class' => 'card-right rotate-[8deg]',
        'title' => 'Analisis Konten Explore Surabaya dalam Meningkatkan Engagement',
        'name' => 'Jessica Wijaya',
        'nrp' => 'E12210217',
        'image' => 'asset/images/curated/curated1.png',
        'type' => 'Thesis',
        ])

        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work1']),
        'class' => 'card-left rotate-[-8deg]',
        'title' => 'Analisis Konten Explore Surabaya dalam Meningkatkan Engagement',
        'name' => 'Jessica Wijaya',
        'nrp' => 'E12210217',
        'image' => 'asset/images/curated/curated1.png',
        'type' => 'Thesis',
        ])

        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work1']),
        'class' => 'card-middle',
        'title' => 'Analisis Konten Explore Surabaya dalam Meningkatkan Engagement',
        'name' => 'Jessica Wijaya',
        'nrp' => 'E12210217',
        'image' => 'asset/images/curated/curated1.png',
        'type' => 'Thesis',
        ])

        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work1']),
        'class' => 'card-right rotate-[8deg]',
        'title' => 'Analisis Konten Explore Surabaya dalam Meningkatkan Engagement',
        'name' => 'Jessica Wijaya',
        'nrp' => 'E12210217',
        'image' => 'asset/images/curated/curated1.png',
        'type' => 'Thesis',
        ])

        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work1']),
        'class' => 'card-left rotate-[-8deg]',
        'title' => 'Analisis Konten Explore Surabaya dalam Meningkatkan Engagement',
        'name' => 'Jessica Wijaya',
        'nrp' => 'E12210217',
        'image' => 'asset/images/curated/curated1.png',
        'type' => 'Thesis',
        ])

        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work1']),
        'class' => 'card-middle',
        'title' => 'Analisis Konten Explore Surabaya dalam Meningkatkan Engagement',
        'name' => 'Jessica Wijaya',
        'nrp' => 'E12210217',
        'image' => 'asset/images/curated/curated1.png',
        'type' => 'Thesis',
        ])

        @include('curatedWorks.partials.card', [
        'href' => route('curatedWorks.details', ['slug' => 'work1']),
        'class' => 'card-right rotate-[8deg]',
        'title' => 'Analisis Konten Explore Surabaya dalam Meningkatkan Engagement',
        'name' => 'Jessica Wijaya',
        'nrp' => 'E12210217',
        'image' => 'asset/images/curated/curated1.png',
        'type' => 'Thesis',
        ])

    </div>

</div>

<script src="{{ asset('js/works.js') }}"></script>
@endsection