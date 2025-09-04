<footer class="footer">
    {{-- <div class="w-full h-full flex justify-end items-center absolute z-[1]">
        <img class="object-fill z-[1] -rotate-90" src="{{ asset('assets/fingerprint/jessicaHome1.png') }}" alt="">
    </div> --}}
    <div class="footer-left">
        <div class="footer-logo-container">
            <div class="footer-logo-mask">
                <div class="logo-wrapper">
                    <!-- gambar + mask -->
                    <div class="logo-mask-layer"
                        style="
                            -webkit-mask: url('{{ asset('assets/logo/mekaryaHitamBesar.png') }}') no-repeat center / contain;
                            mask: url('{{ asset('assets/logo/mekaryaHitamBesar.png') }}') no-repeat center / contain;
                            filter: drop-shadow(3px 3px 3px white);
                        ">
                    </div>
                    <!-- Layer drop shadow hitam -->
                    <img src="{{ asset('assets/logo/mekaryaHitamBesar.png') }}" alt="Logo Mekarya" class="logo-shadow"
                        style="filter: invert(100%) drop-shadow(-2px 2px 2px #2B340F);">
                </div>
            </div>

            <div class="footer-text-container">
                <div id="footerBig" class="footer-big">
                    <h1>Adiwarna</h1>
                    <h1 class="gold">2025</h1>
                </div>
                <div id="footerSmall" class="footer-small">
                    <span>Pameran Tugas Akhir Mahasiswa</span>
                    <span>Design Komunikasi Visual</span>
                    <span>Universitas Kristen Petra Surabaya</span>
                </div>
            </div>
        </div>
        <div class="smallMobile">
            <span>Pameran Tugas Akhir Mahasiswa</span>
            <span>Design Komunikasi Visual</span>
            <span>Universitas Kristen Petra Surabaya</span>
        </div>
    </div>

    <div class="footer-right">
        <div class="footer-links-container">
            <div class="footer-links">
                <div onclick="window.location.href='{{ route('home') }}'" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</div>
                <div onclick="window.location.href='{{ route('about') }}'" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</div>
                <div onclick="window.location.href='{{ route('curatedWorks.work') }}'" class="{{ request()->routeIs('curatedWorks.*') ? 'active' : '' }}">Curated Works</div>

                <div onclick="window.location.href='{{ route('events.upcoming') }}'" class="{{ request()->routeIs('events.*') ? 'active' : '' }}">Events</div>
                <div onclick="window.location.href='{{ route('merch') }}'" class="{{ request()->routeIs('merch') ? 'active' : '' }}">Merch</div>
            </div>

        </div>

        <div class="copyright">
            <div class="copyright-social">
                <svg class="instagram-icon" onclick="window.open('https://www.instagram.com/adiwarna.pcu/', '_blank')"
                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M11.9962 0.0078125C8.73824 0.0078125 8.32971 0.021622 7.05019 0.080003C5.77333 0.138241 4.90129 0.341051 4.13824 0.637622C3.34938 0.944146 2.68038 1.35434 2.01343 2.02124C1.34652 2.68819 0.936333 3.35719 0.629809 4.14605C0.333238 4.9091 0.130429 5.78115 0.0721905 7.058C0.0138095 8.33753 0 8.74605 0 12.0041C0 15.262 0.0138095 15.6705 0.0721905 16.9501C0.130429 18.2269 0.333238 19.099 0.629809 19.862C0.936333 20.6509 1.34652 21.3199 2.01343 21.9868C2.68038 22.6537 3.34938 23.0639 4.13824 23.3705C4.90129 23.667 5.77333 23.8698 7.05019 23.9281C8.32971 23.9864 8.73824 24.0002 11.9962 24.0002C15.2542 24.0002 15.6627 23.9864 16.9422 23.9281C18.2191 23.8698 19.0911 23.667 19.8542 23.3705C20.643 23.0639 21.312 22.6537 21.979 21.9868C22.6459 21.3199 23.0561 20.6509 23.3627 19.862C23.6592 19.099 23.862 18.2269 23.9202 16.9501C23.9786 15.6705 23.9924 15.262 23.9924 12.0041C23.9924 8.74605 23.9786 8.33753 23.9202 7.058C23.862 5.78115 23.6592 4.9091 23.3627 4.14605C23.0561 3.35719 22.6459 2.68819 21.979 2.02124C21.312 1.35434 20.643 0.944146 19.8542 0.637622C19.0911 0.341051 18.2191 0.138241 16.9422 0.080003C15.6627 0.021622 15.2542 0.0078125 11.9962 0.0078125ZM7.99748 12.0041C7.99748 14.2125 9.78776 16.0028 11.9962 16.0028C14.2047 16.0028 15.995 14.2125 15.995 12.0041C15.995 9.79557 14.2047 8.00529 11.9962 8.00529C9.78776 8.00529 7.99748 9.79557 7.99748 12.0041ZM5.836 12.0041C5.836 8.60181 8.594 5.84381 11.9962 5.84381C15.3984 5.84381 18.1564 8.60181 18.1564 12.0041C18.1564 15.4062 15.3984 18.1642 11.9962 18.1642C8.594 18.1642 5.836 15.4062 5.836 12.0041ZM18.3998 7.03996C19.1949 7.03996 19.8394 6.39548 19.8394 5.60043C19.8394 4.80538 19.1949 4.16086 18.3998 4.16086C17.6048 4.16086 16.9603 4.80538 16.9603 5.60043C16.9603 6.39548 17.6048 7.03996 18.3998 7.03996Z"
                        fill="var(--gold)" />
                </svg>
            </div>
            <div class="copyright-text">
                <h1 class="font-maragsa text-[var(--gold)]">© Adiwarna 2025</h1>
            </div>
        </div>
    </div>
</footer>

<style>
    .instagram-icon,
    .instagram-icon path {
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .instagram-icon:hover path {
        fill: var(--pink);
    }

    .instagram-icon:hover {
        transform: scale(1.1);
    }

    /* .instagram-icon:focus {
        outline: 2px solid #E1306C;
        outline-offset: 4px;
        fill: var(--pink);
    }
    .instagram-icon:focus {
        transform: scale(1.1);
    } */

    .instagram-icon:active path {
        fill: var(--pink);
    }

    .instagram-icon:active {
        transform: scale(1.1);
    }

    .footer {
        width: 100vw;
        max-height: 100%;
        background: var(--light-green);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: stretch;
        padding: 2%;
        position: relative;
        /* bottom: 0; */
        z-index: 991;
    }

    .footer::before {
        content: "";
        position: absolute;
        top: 0;
        right: -20%;
        width: 100%;
        height: 100%;
        background-color: var(--red);
        -webkit-mask: url("{{ asset('assets/fingerprint/jessicaHome3.png') }}") no-repeat left / cover;
        mask: url("{{ asset('assets/fingerprint/jessicaHome3.png') }}") no-repeat left / cover;
        z-index: -1;
        opacity: 0.3;
        pointer-events: none;
    }
    
    .footer-left {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-bottom: 1rem;
    }

    .footer-logo-container {
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .footer-logo-mask {
        width: 50%;
        aspect-ratio: 1 / 1;
        display: flex;
        justify-content: right;
        align-items: center;
        padding: 2% 0%;
    }

    .logo-wrapper {
        width: 75%;
        height: 75%;
        position: relative;
    }

    .logo-mask-layer {
        position: absolute;
        inset: 0;
        background: #EBE0C2;
        z-index: 10;
    }

    .logo-shadow {
        width: 100%;
        height: 100%;
        object-fit: contain;
        z-index: 9;
    }

    .footer-text-container {
        width: 50%;
        aspect-ratio: 1 / 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 2% 0%;
    }

    .footer-big {
        display: flex;
        flex-direction: column;
        width: 100%;
        justify-content: center;
        align-items: center;
    }

    .footer-big h1 {
        font-family: 'maragsa', sans-serif;
        font-size: clamp(2em, 4vw, 5vw);
        line-height: 0.75em;
        color: #EBE0C2;
        text-align: start;
        width: 100%;

        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .footer-small {
        display: none;
        font-size: clamp(1em, 1.5vw, 4em);
        line-height: 1.75em;
        margin-top: 0.5rem;
        width: 100%;
        color: var(--gold);

        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .smallMobile {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;

        font-size: clamp(1em, 1.5vw, 4em);
        line-height: 1.75em;
        margin-top: 0.5rem;
        width: 100%;
        color: var(--gold);

        margin-top: -5%;

        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .footer-small span {
        display: block;
        width: 100%;
        text-align: left;
        font-size: inherit;
    }

    .smallMobile span {
        display: block;
        width: 100%;
        text-align: center;
        font-size: inherit;
    }

    .footer-right {
        width: 100%;
        display: flex;
        flex-direction: column;
        position: relative;
        min-height: 200px;
    }

    .footer-links-container {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 1rem;
        flex-grow: 1;
    }

    .footer-links {
        width: 60%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 0.5rem;
        color: var(--gold);
    }

    .footer-links div {
        cursor: pointer;
        width: 100%;
        font-size: clamp(1em, 1.5vw, 4em);
        display: flex;
        align-items: center;
        justify-content: start;
        position: relative;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .footer-links div::before {
        content: "";
        display: inline-block;
        width: 0.5em;
        margin: 0px 7.5%;
        aspect-ratio: 1 / 1;
        background-color: var(--gold);
        border-radius: 50%;
        opacity: 0;
        transform: scale(0.65);
        transition: all 0.3s ease;
    }

    .footer-links div.active {
        color: var(--gold);
        font-weight: 600;
        transform: translateX(0.5%);
    }

    .footer-links div.active::before {
        opacity: 1;
        transform: scale(1);
    }

    .footer-links div:hover {
        color: #fff8e5;
        /* lebih terang saat hover */
        transform: translateX(0.5%);
    }

    .footer-links div:hover::before {
        opacity: 1;
        background-color: transparent;
        border: 0.05em solid var(--gold);
        /* tetap gold biar konsisten */
        transform: scale(1.2);
    }


    .copyright {
        position: absolute;
        bottom: 0;
        right: 0;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 0.5rem;
        padding: 1rem 0;
    }

    .copyright-social {
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .copyright-social svg {
        width: 2rem;
        height: 2rem;
    }

    .copyright-text {
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .copyright h1 {
        font-size: clamp(0.8em, 1.2vw, 1.5em);
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* SM breakpoint (>=640px) */
    @media (min-width: 640px) {
        .footer-small {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }

        .smallMobile {
            display: none;
        }

        .footer-links {
            gap: 0.75rem;
            font-size: 1rem;
            width: 50%;
        }

        .footer-links div {
            justify-content: flex-start;
        }

        .footer-links div,
        .footer-small span {
            text-align: left;
        }

        .footer-links-container {
            flex-direction: row;
            gap: 1rem;
            width: 100%;
            justify-content: center;
        }

        .footer-links {
            width: 50%;
        }

        .footer-right {
            justify-content: end;
        }
    }

    @media (min-width: 1024px) {
        .footer {
            flex-direction: row;
            align-items: stretch;
        }

        .footer-left {
            width: 50%;
            margin-bottom: 0;
        }

        .footer-right {
            width: 50%;
        }

        .footer-text-container {
            justify-content: space-evenly;
        }
    }

    @media (max-width: 640px) {
        .footer {
            padding: 4% 2%;
        }

        .copyright {
            position: static;
            margin-top: 2rem;
            align-items: center;
        }

        .copyright h1 {
            text-align: center;
        }
    }
</style>
