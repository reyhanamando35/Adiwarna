@extends('curatedWorks.layouts.app')

@section('content')

@include('curatedWorks.partials.title')
@include('curatedWorks.partials.plants')

<div id="works-container" class="container translate-y-0 lg:-translate-y-[8rem] xl:translate-y-0 mt-0 xl:mt-[10rem] mx-auto pb-20">
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 gap-y-20 items-end justify-items-center mt-[7rem]">
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