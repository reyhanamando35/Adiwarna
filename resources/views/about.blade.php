@extends('layouts.layout')

@section('title', 'About Us')
@section('content')
<div class="about">
    <div class="main-container">
        <!-- Judul Halaman -->
        <div class="title-image">
            <img src="{{ asset('images/title.png') }}" alt="Adiwarna 2025"
                 onerror="this.onerror=null; this.src='https://placehold.co/600x100/3c490c/ece1c3?text=ADIWARNA+2025';">
        </div>

        <!-- Gambar Bunga Utama -->
        <div class="flower-image">
            <img src="{{ asset('images/flower.png') }}" alt="Grafis Bunga Sidik Jari"
                 onerror="this.onerror=null; this.src='https://placehold.co/400x600/a14000/ece1c3?text=Flower+Graphic';">
        </div>

        <!-- Kumpulan Teks dengan <br> yang presisi -->
        <div id="text-1" class="text-block">
            <strong>Adiwarna</strong> <span style="color:#3c490c;">
            merupakan<br>
            acara tahunan bergengsi<br>
            yang diselenggarakan oleh<br>
            Program Studi Desain<br>
            Komunikasi Visual (DKV) dan<br>
            International Program in<br>
            Digital Media (IPDM)<br>
            Universitas Kristen Petra.<br>
            <br>
            Pameran ini bukan sekadar ajang<br>
            apresiasi, melainkan juga menjadi momen<br>
            penting yang memperkenalkan eksistensi<br>
            dan kualitas calon profesional kreatif kepada masyarakat dan industri
            </span>
        </div>

        <div id="text-2" class="text-block">
            Rasa takut yang dulu membatasi kini<br>
            menjadi pendorong untuk melangkah<br>
            lebih percaya diri, menyambut<br>
            kehidupan kreatif yang lebih matang<br>
            dan bermakna.
        </div>

        <div id="text-3" class="text-block">
            <strong>Adiwarna</strong> hadir sebagai simbol<br>
            pertumbuhan dan keberanian untuk terus<br>
            berkembang melalui tema <strong>Mekarya</strong>,<br>
            dan menjadi sebuah pameran yang<br>
            merefleksikan proses panjang<br>
            mahasiswa tingkat akhir dalam<br>
            memamerkan ide dan kreativitasnya,<br>
            sekaligus mengajak setiap individu<br>
            untuk tidak takut bertumbuh dan<br>
            <strong>terus berkarya</strong>.
        </div>

        <div id="text-4" class="text-block">
            <strong>Adiwarna</strong> 2025 mengusung<br>
            tema <strong>Mekarya</strong> sebagai selebrasi akhir<br>
            perjalanan mahasiswa DKV angkatan 2021 yang<br>
            menggambarkan sebuah proses bertumbuh yang<br>
            berakar dari keraguan, ketakutan, dan ruang-<br>
            ruang kosong yang pernah menghantui langkah<br>
            awal,
        </div>
        
        <div id="text-5" class="text-block">
            Berlandaskan filosofi bertumbuh,
            berbunga, dan berbuah, masa
            kelulusan bukanlah akhir,
            melainkan awal dari
            keberanian untuk<br>
            terus berkembang.
        </div>

        <div id="text-footer" class="text-block">
            <img src="{{ asset('images/end.png') }}" alt="Akhir Adiwarna"
                 style="height:auto;display:block;"
                 onerror="this.onerror=null;this.src='https://placehold.co/400x80/3c490c/ece1c3?text=END';">
        </div>
    </div>
    <!-- Spacer element to prevent footer overlap -->
    <div class="about-footer-spacer"></div>
    
    @include('components.footer')
</div>



<style>
    /* * Palet Warna Berdasarkan Gambar:
     * Background: #ece1c3
     * Teks Coklat: #a14000
     * Teks Hijau Tua: #3c490c
    */

    /* Pengaturan Dasar */
    .about {
        background-color: #ece1c3;
        font-family: 'Sen', sans-serif;
        margin: 0;
        margin-top: 50px;
        padding: 60px 0 0 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: auto; /* Ubah dari calc(100vh - 50px) ke auto */
        color: #3c490c;
        position: relative;
        z-index: 988;

    /* Spacer untuk mencegah footer overlap */
    .about-footer-spacer {
        height: 150px; /* Tambah ruang kosong sebelum footer */
        background-color: #ece1c3; /* Sama dengan background about */
    }

    /* Kontainer Utama - Dibuat agar menjadi "kanvas" yang proporsional */
    .main-container {
        position: relative;
        width: 60vw; /* Lebar utama berdasarkan viewport */
        max-width: 1200px;
        aspect-ratio: 8.5 / 11; /* Menjaga rasio seperti kertas A4 */
        padding: 32px;
        margin-bottom: 200px; /* Perbesar margin bottom untuk spacing dengan footer */
        min-height: 140vh; /* Tambah tinggi minimum untuk memastikan semua konten terlihat */
    }

    /* Gambar Bunga Sidik Jari */
    .flower-image {
        position: absolute;
        top: 82%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 65%;
        z-index: 1;
        opacity: 0;
        animation: flowerBloom 2s ease-out 1s forwards;
    }
    
    .flower-image img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.3s ease;
    }

    .flower-image:hover img {
        transform: scale(1.05);
    }

    /* Gambar Judul "ADIWARNA" */
    .title-image {
        position: absolute;
        top: 3vw;
        left: 50%;
        transform: translateX(-50%);
        width: 145%;
        z-index: 3;
        opacity: 0;
        animation: titleSlideIn 1.5s ease-out forwards;
    }

    .title-image img {
        width: 100%;
        height: auto;
        display: block;
    }

    /* Blok Teks - Semua unit diubah ke vw untuk skala proporsional */
    .text-block {
        position: absolute;
        z-index: 2;
        font-size: 1.1vw; /* Ukuran font responsif terhadap lebar viewport */
        line-height: 1.6; /* Jarak antar baris disesuaikan */
        width: 28%;
        opacity: 0;
        transform: translateY(20px);
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .text-block.animate {
        opacity: 1;
        transform: translateY(0);
    }

    .text-block:hover {
        transform: translateY(-2px);
    }

    .text-block strong {
        font-weight: 700;
    }

    /* Posisi Spesifik untuk Setiap Blok Teks - Disesuaikan kembali untuk presisi */
    #text-1 {
        top: 30%;
        left: -9.5%; /* lebih ke kiri */
        color: #a14000;
        animation: fadeInLeft 1s ease-out 1.5s forwards;
    }
    #text-1 strong {
        color: #a14000;
    }

    #text-1 span {
        color: #3c490c; /* olive */
    }

    #text-2 {
        top: 78.5%;
        left: -9.5%; /* lebih ke kiri */
        animation: fadeInLeft 1s ease-out 2.5s forwards;
    }

    #text-3 {
        top: 99.5%;
        left: -9.5%; /* lebih ke kiri */
        animation: fadeInLeft 1s ease-out 3s forwards;
    }
    #text-3 strong {
        color: #a14000;
    }


    #text-4 {
        top: 34.5%;
        right: -9.5%; /* lebih ke kanan */
        text-align: left;
        animation: fadeInRight 1s ease-out 2s forwards;
    }
    #text-4 strong {
        color: #a14000;
    }
    
    #text-5 {
        top: 63.5%; 
        right: -9.5%; /* lebih ke kanan */
        width: 25%;
        text-align: left;
        animation: fadeInRight 1s ease-out 3.5s forwards;
    }

    #text-4,
    #text-5 {
        text-align: right; /* kanan jadi rata kanan */
    }

    #text-footer {
        bottom: -20%; /* Naikkan posisi dari -32% ke -20% */
        right: -5.5%;
        font-size: 1.5vw;
        font-weight: 400;
        text-align: right;
        width: auto;
        animation: fadeInUp 1s ease-out 4s forwards;
    }
    #text-footer strong {
        font-weight: 800;
        font-size: 2.5vw;
    }
    #text-footer img {
        width: 80%; /* besarkan gambar end.png */
        height: auto;
        display: block;
        margin-left: auto;
        margin-right: 0;
        transition: transform 0.3s ease;
    }

    #text-footer:hover img {
        transform: scale(1.1);
    }

    /* Keyframe Animations */
    @keyframes titleSlideIn {
        from {
            opacity: 0;
            transform: translateX(-50%) translateY(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(-50%) translateY(0);
        }
    }

    @keyframes flowerBloom {
        from {
            opacity: 0;
            transform: translate(-50%, -50%) scale(0.8);
        }
        to {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }
    }

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Penyesuaian untuk layar yang sangat lebar, mencegah teks menjadi terlalu besar */
    @media (min-width: 1400px) {
        .text-block {
            font-size: 16px;
        }
        #text-footer {
            font-size: 21px;
        }
        #text-footer strong {
            font-size: 35px;
        }
    }

    @media (max-width: 768px) {
        .about {
            overflow: auto;
            padding: 80px 20px 40px 20px;
            min-height: auto;
        }
        
        .about-footer-spacer {
            height: 80px; /* Kurangi spacer di mobile */
        }
        
        .main-container {
            position: static;
            width: 100%;
            aspect-ratio: auto;
            min-height: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            padding: 10px;
            margin-bottom: 60px; /* Kurangi margin bottom di mobile */
        }
        .title-image{
            position: static;
            width: 120%;
            margin: 0 0 20px 0;
            transform: none;
            text-align: left;
            animation: fadeInUp 1s ease-out forwards;
        }
        .flower-image {
            position: static;
            width: 90%;
            margin: 0 auto 20px auto;
            transform: none;
            animation: fadeInUp 1.5s ease-out 0.5s forwards;
        }
        .text-block {
            position: static;
            width: 100%;
            font-size: 16px;
            line-height: 1.7;
            text-align: left;
            margin-bottom: 16px;
            padding: 0 8px;
            box-sizing: border-box;
            animation: fadeInUp 1s ease-out forwards;
        }
        #text-1 { animation-delay: 1s; }
        #text-2 { animation-delay: 1.2s; }
        #text-3 { animation-delay: 1.4s; }
        #text-4 { animation-delay: 1.6s; }
        #text-5 { animation-delay: 1.8s; }
        #text-footer { animation-delay: 2s; }
        
        #text-4, #text-5 {
            text-align: right;
            padding-right: 8px;
            padding-left: 0;
            margin-bottom: 16px;
            font-size: 16px;
            line-height: 1.7;
            width: 100%;
            box-sizing: border-box;
        }
        #text-footer img {
            width: 100%;
            margin: 0 auto;
        }
    }
</style>
@endsection