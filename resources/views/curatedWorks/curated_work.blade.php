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
        'name' => 'Jessica Wijaya',
        'nrp' => 'E12210217',
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
        'name' => 'Elia Patrick Hermawan Kuswanto',
        'nrp' => 'E12210021',
        'image' => 'asset/images/curated/curated1.png',
        'type' => 'Campaign',
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