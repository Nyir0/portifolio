<a class="flex items-center rounded-lg p-4 mb-4 text-sm max-sm:text-[4vw] justify-start bg-neutral-900 w-[49%] max-sm:w-full h-[8vw] max-sm:h-32 hover:scale-105 transition-all" style="box-shadow: 0px 1px 5px black" href="{{ $link }}" target="_blank" rel="noopener noreferrer">
    @if(!empty($img))
        <img src="{{ $img }}" class="w-[8vw] max-sm:w-[25vw] mr-4" alt="">
    @endif
    {{ $text }}
</a>