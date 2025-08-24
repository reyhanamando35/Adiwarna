<a href="{{ $href }}" class="card-link block">
    <div class="card group relative bg-cover bg-center
    h-[326px] w-[261px] 
    sm:h-[326px] sm:w-[261px] 
    lg:h-[326px] lg:w-[261px]
    xl:h-[408px] xl:w-[326px] 
    rounded-md overflow-hidden cursor-pointer"
         style="background-image: url('{{ asset($image) }}');">
        
        <!-- Dark overlay (only on hover) -->
        <div class="absolute inset-0 bg-black bg-opacity-0 transition duration-500 group-hover:bg-opacity-60"></div>

        <!-- Hidden text until hover -->
        <div class="absolute inset-0 flex flex-col justify-between h-full px-5 py-10 
                    opacity-0 translate-y-5 transition duration-500 
                    group-hover:opacity-100 group-hover:translate-y-0">
            <p class="font-['Sen',sans-serif] text-[25px] lg:text-[25px] text-[#EBE0C2]">{{ Str::limit($title, 35) }}</p>
            <div class="flex flex-col gap-3">
                <p class="font-['Sen',sans-serif] text-[17px] lg:text-[20px] text-[#EBE0C2]">{{ $name }}</p>
                <p class="font-['Sen',sans-serif] text-[17px] lg:text-[20px] text-[#EBE0C2]">{{ $nrp }}</p>
                <p class="font-['Sen',sans-serif] text-[17px] lgtext-[20px] text-[#EBE0C2]">{{ $type }}</p>
            </div>
        </div> 
    </div>
</a>    
