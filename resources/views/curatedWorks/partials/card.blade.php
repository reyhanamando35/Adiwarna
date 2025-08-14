<div class="card {{ $class }} bg-cover bg-center px-5 py-10 h-[408px] w-[326px] rounded-md"  style="background-image: url('{{ asset($image) }}');">
    <div class="flex flex-col justify-between h-full">
        <!-- title -->
        <p class="font-['Sen',sans-serif] text-[28px] text-[#EBE0C2]">{{ Str::limit($title, 30) }}</p>
        <div class="flex justify-between items-center">
            <div class="flex flex-col gap-3">
                <!-- name -->
                <p class="font-['Sen',sans-serif] text-[22px] text-[#EBE0C2]">{{ $name }}</p>
                <!-- nrp -->
                <p class="font-['Sen',sans-serif] text-[22px] text-[#EBE0C2]">{{ $nrp }}</p>
                <!-- jenis karya -->
                <p class="font-['Sen',sans-serif] text-[22px] text-[#EBE0C2]">{{ $type }}</p>
            </div>
            <a class="text-2xl text-[#EBE0C2] bg-[#A14000]">+</a>
        </div>
    </div> 
</div>