@extends('curatedWorks.layouts.app')

@section('content')
@include('curatedWorks.partials.title')

<div id="works-container" class="container mt-[10rem]">
    <div class="grid grid-cols-3 gap-8 items-end">
        @include('curatedWorks.partials.card', [
            'class' => 'card-left rotate-[-8deg]',
            'title' => 'Analisis Konten Explore Surabaya dalam Meningkatkan Engagement',
            'name' => 'Jessica Wijaya',
            'nrp' => 'E12210217',
            'type' => 'Thesis'
        ])

        @include('curatedWorks.partials.card', [
            'class' => 'card-middle',
            'title' => 'Analisis Konten Explore Surabaya dalam Meningkatkan Engagement',
            'name' => 'Jessica Wijaya',
            'nrp' => 'E12210217',
            'type' => 'Thesis'
        ])

        @include('curatedWorks.partials.card', [
            'class' => 'card-right rotate-[8deg]',
            'title' => 'Analisis Konten Explore Surabaya dalam Meningkatkan Engagement',
            'name' => 'Jessica Wijaya',
            'nrp' => 'E12210217',
            'type' => 'Thesis'
        ])

        
    </div>

    <div class="grid grid-cols-3 gap-8 items-end mt-[7rem]">
        @include('curatedWorks.partials.card', [
            'class' => 'card-left rotate-[-8deg]',
            'title' => 'Analisis Konten Explore Surabaya dalam Meningkatkan Engagement',
            'name' => 'Jessica Wijaya',
            'nrp' => 'E12210217',
            'type' => 'Thesis'
        ])

        @include('curatedWorks.partials.card', [
            'class' => 'card-middle',
            'title' => 'Analisis Konten Explore Surabaya dalam Meningkatkan Engagement',
            'name' => 'Jessica Wijaya',
            'nrp' => 'E12210217',
            'type' => 'Thesis'
        ])

        @include('curatedWorks.partials.card', [
            'class' => 'card-right rotate-[8deg]',
            'title' => 'Analisis Konten Explore Surabaya dalam Meningkatkan Engagement',
            'name' => 'Jessica Wijaya',
            'nrp' => 'E12210217',
            'type' => 'Thesis'
        ])

        
    </div>
</div>

<script>
gsap.registerPlugin(ScrollTrigger);

const cards = gsap.utils.toArray("#works-container .card");
const cardsPerRow = 3;

for (let rowStart = 0; rowStart < cards.length; rowStart += cardsPerRow) {
    const rowCards = cards.slice(rowStart, rowStart + cardsPerRow);
    const middleIndex = Math.floor(rowCards.length / 2);

    rowCards.forEach((card, i) => {
        let fromVars = {};
        let toVars = { 
            rotate: 0, 
            x: 0, 
            duration: 1, 
            ease: "power2.out",
            scrollTrigger: {
                trigger: card,
                start: "top 60%",
                toggleActions: "play none none reverse"
            }
        };

        if (i < middleIndex) {
            fromVars = { rotate: -8, y: 0, x: 50 };
            toVars.y = 50;
        } else if (i > middleIndex) {
            fromVars = { rotate: 8, y: 0, x: -50 };
            toVars.y = 50;
        } else {
            fromVars = { rotate: 0, y: 0, x: 0 };
            toVars.y = -50;
        }

        gsap.fromTo(card, fromVars, toVars);
    });
}

</script>


@endsection
