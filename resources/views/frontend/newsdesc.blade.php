<x-frontend.mainlayout>
    <div class="max-w-4xl mx-auto px-4 py-12 md:py-16">
        <!-- Article Title -->
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-8 text-center">
            {{ $article->title }}
        </h1>

        <!-- Featured Image -->
        @if($article->image)
            <div class="mb-10 -mx-4 md:mx-0">
                <img 
                    src="{{ asset($article->image) }}" 
                    alt="{{ $article->title }}" 
                    class="w-full h-auto max-h-96 md:max-h-screen object-cover rounded-xl shadow-xl"
                >
            </div>
        @endif

        <!-- Meta Information -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 text-gray-600 mb-12">
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span class="font-medium text-lg">{{ $article->writer_name }}</span>
                <span>{{ $article->views }}views</span>
            </div>

            <div class="hidden sm:block w-px h-6 bg-gray-400"></div>

            <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <time class="text-lg">
                    {{ $article->created_at->format('F j, Y') }}
                </time>
            </div>
        </div>

        <!-- Article Content -->
        <article class="prose prose-lg max-w-none mx-auto text-gray-800 leading-relaxed prose-headings:text-gray-900 prose-a:text-amber-600 prose-a:underline prose-img:rounded-lg prose-img:shadow-md">
            {!! $article->description !!}
        </article>
        <div class="fb-comments" data-href="http://127.0.0.1:8000/{{ $article->slug }}" data-width="" data-numposts="5"></div>
    </div>
</x-frontend.mainlayout>