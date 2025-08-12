<div class="card {{ $class }} bg-[repeating-conic-gradient(rgba(43,52,15,0.7)_0_25%,rgba(43,52,15,0.8)_0_50%)] [background-size:20px_20px] px-5 py-10 h-[500px] w-full rounded-md">
    <div class="flex flex-col justify-between h-full">
        <!-- title -->
        <p class="font-['Sen',sans-serif] text-4xl text-[#EBE0C2]">{{ $title }}</p>
        <div class="flex justify-between items-center">
            <div class="flex flex-col gap-3">
                <!-- name -->
                <p class="font-['Sen',sans-serif] text-2xl text-[#EBE0C2]">{{ $name }}</p>
                <!-- nrp -->
                <p class="font-['Sen',sans-serif] text-xl text-[#EBE0C2]">{{ $nrp }}</p>
                <!-- jenis karya -->
                <p class="font-['Sen',sans-serif] text-xl text-[#EBE0C2]">{{ $type }}</p>
            </div>
            <a class="text-2xl text-[#EBE0C2] bg-[#A14000]">+</a>
        </div>
    </div>
</div>