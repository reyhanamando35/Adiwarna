@extends('layouts.layout')
@section('content')
    <div class="w-screen max-w-screen relative flex bg-[var(--beige)] justify-center items-end">
        <div class="w-full relative top-32 flex flex-col justify-center items-center">
            <div class="w-full flex justify-center items-center flex-col bg-[var(--beige)] relative">
                <div class="z-[11] w-full relative flex justify-center items-center">

                    <div class="relative inline-block w-full max-w-6xl lg:max-w-screen px-4">
                        <h1 id="title" class="z-[8] pl-1 font-maragsa land text-[var(--light-green)] font-bold text-center"
                            style="letter-spacing: clamp(0.22em, 1.2vw, 0.32em);">
                            ADIWARNA</h1>
                        <style>
                            #title {
                                font-size: 14vw;
                            }

                            @media (min-width:401px && orientation: landscape) {
                                #title {
                                    font-size: 15vw;
                                }
                            }

                            @media (min-width: 1023px) {
                                #title {
                                    font-size: clamp(10vw, 12vw, 14vw);
                                }
                            }
                        </style>
                        <!-- Angka 2025 positioned above each letter with better responsive positioning -->
                        <span class="z-[10] font-maragsa absolute text-[var(--yellow)] font-bold"
                            style="font-size: clamp(30px, 6vw, 90px); 
                                     top: clamp(-45px, -9vw, -25px); 
                                     left: clamp(5%, 1vw, 2%);">2</span>

                        <span class="z-[10] font-maragsa absolute text-[var(--yellow)] font-bold"
                            style="font-size: clamp(30px, 6vw, 90px); 
                                     top: clamp(-45px, -9vw, -25px); 
                                     left: clamp(30%, 30vw, 32%);">0</span>

                        <span class="z-[10] font-maragsa absolute text-[var(--yellow)] font-bold"
                            style="font-size: clamp(30px, 6vw, 90px); 
                                     top: clamp(-45px, -9vw, -25px); 
                                     left: clamp(55%, 55vw, 58%);">2</span>

                        <span class="z-[10] font-maragsa absolute text-[var(--yellow)] font-bold"
                            style="font-size: clamp(30px, 6vw, 90px); 
                                     top: clamp(-45px, -9vw, -25px); 
                                     right: clamp(5%, 1vw, 2%);">5</span>
                    </div>

                    <div class="z-[9] h-full w-full absolute right-[-35vw] sm:right-[-38vw] mask-type-alpha mask-no-repeat mask-left mask-cover"
                        style="mask-image: url('{{ asset('assets/fingerprint/nayla_fingerprint1.png') }}'); -webkit-mask-image: url('{{ asset('assets/fingerprint/nayla_fingerprint1.png') }}');">
                        <div class="z-[2] w-full bg-[var(--beige)]">
                            <div class="w-[80%] aspect-square opacity-0">a</div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="z-[12] h-full w-full mask-type-alpha mask-no-repeat mask-center mask-contain"
                style="mask-image: url('{{ asset('assets/fingerprint/nayla_fingerprint2.png') }}'); -webkit-mask-image: url('{{ asset('assets/fingerprint/nayla_fingerprint2.png') }}');">
                <div class="z-[2] w-full bg-[var(--red)]">
                    <div class="w-[80%] aspect-square opacity-0">a</div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-screen h-screen bg-[var(--beige)]">a</div>
    <div class="w-screen h-screen bg-[var(--beige)]">a</div>
    <div class="w-screen h-screen bg-[var(--beige)]">a</div>
@endsection()
