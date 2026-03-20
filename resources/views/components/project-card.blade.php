@props(['title', 'description', 'image', 'tags' => [], 'slug' => '#'])

<div class="glass-card glass-card-hover group rounded-2xl overflow-hidden transition-all duration-500 cursor-pointer" onclick="window.location.href='{{ route('portfolio.show', $slug) }}'">
    <div class="aspect-[4/3] bg-[#09101E] relative border-b border-white/5 overflow-hidden">
        <!-- Project Screenshot Placeholder -->
        <img src="{{ $image }}" alt="{{ $title }} Preview" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 opacity-80 group-hover:opacity-100" />
    </div>
    <div class="p-8">
        <h4 class="text-2xl font-bold font-heading text-white mb-3 flex items-center">
            {{ $title }}
        </h4>
        <p class="text-gray-400 text-sm mb-6 line-clamp-2">{!! strip_tags($description) !!}</p>
        
        <div class="flex flex-wrap gap-2 mb-6">
            @foreach($tags as $tag)
                <span class="px-2 py-1 text-xs text-[#00D1FF] border border-[#00D1FF]/30 bg-[#00D1FF]/5 rounded">{{ $tag }}</span>
            @endforeach
        </div>

        <div class="flex items-center space-x-4 border-t border-white/5 pt-4">
            <a href="{{ route('portfolio.show', $slug) }}" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center">
                <svg class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                Show Detail
            </a>
        </div>
    </div>
</div>
