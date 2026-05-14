@props(['title', 'description', 'image', 'tags' => [], 'slug'])

<a href="/portfolio/{{ $slug }}" class="group block border-t border-[#242424] hover:bg-[#151515] transition-colors py-8 md:py-12">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-start">
        <!-- Index/Number -->
        <div class="md:col-span-1">
            <span class="font-mono-custom text-[#A1A1A1] text-sm group-hover:text-[#FF6A00] transition-colors">0{{ $attributes->get('index', '1') }}</span>
        </div>

        <!-- Project Info -->
        <div class="md:col-span-8">
            <h3 class="font-heading text-3xl md:text-4xl text-[#F5F5F5] uppercase tracking-wide mb-4 group-hover:text-[#FF6A00] transition-colors">
                {{ $title }}
            </h3>
            <p class="text-[#F5F5F5]/70 text-sm leading-loose max-w-2xl font-mono-custom">
                {{ \Illuminate\Support\Str::limit(strip_tags($description), 180) }}
            </p>
        </div>

        <!-- Tags / Stack -->
        <div class="md:col-span-3 flex flex-wrap gap-2 md:justify-end mt-6 md:mt-0">
            <div class="flex flex-col items-start md:items-end text-right font-mono-custom text-xs text-[#A1A1A1] space-y-1">
                @foreach($tags as $tag)
                    <span class="uppercase">{{ $tag }}</span>
                @endforeach
            </div>
        </div>
    </div>
</a>
