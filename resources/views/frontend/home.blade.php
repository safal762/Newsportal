<x-frontend.mainlayout>
    <div class="container mx-auto px-4 py-12 max-w-7xl">
        <!-- Current Date - Styled Header -->
        <div class="text-center mb-14">
            <h1 class="text-5xl font-extrabold text-gray-900">
                {{ now()->format('F j, Y') }}
            </h1>
            <p class="text-xl text-gray-600 mt-3">
                {{ now()->format('l') }}
            </p>
        </div>

        <!-- Advertisements Section (Static Grid) -->
        @if($advertise->isNotEmpty())
            <div class="mb-20">
                <h2 class="text-4xl font-bold text-center text-gray-900 mb-12">
                    Featured Advertisements
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($advertise as $adver)
                    <a href="{{ $adver->redirect_link }}" target="-git">
                        <div class="relative rounded-2xl overflow-hidden shadow-xl group">
                            <img src="{{ asset($adver->image) }}"
                                 alt="{{ $adver->company_name }}"
                                 class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent">
                                <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                                    <h3 class="text-3xl font-bold">{{ $adver->company_name }}</h3>
                                    <p class="mt-2 text-lg opacity-90">
                                        {{ $adver->description ?? 'Featured partner' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
            
        <!-- Trending Section - Static Cards -->
        <div class="mb-20">`
            @php
            $trending=$article->where('trending',1);  
            @endphp

            <h2 class="text-4xl font-bold text-center text-gray-900 mb-12">
                Trending Now
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($trending->take(8) as $trends) <!-- Using same data, limit to 8 for trending feel -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 flex flex-col">
                        <div class="h-48 overflow-hidden rounded-t-xl">
                            <img src="{{ asset($trends->image) }}"
                                 alt="{{ $trends->title}}"
                                 class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <span class="inline-block px-3 py-1 text-xs font-semibold text-white bg-red-500 rounded-full mb-3">
                                    TRENDING
                                </span>
                                <h3 class="text-lg font-bold text-gray-900 line-clamp-2">
                                    {{ $trends->title }}
                                </h3>
                            </div>
                            <div class="text-sm text-gray-600 mt-2 line-clamp-2">
                                {!! $trends->description !!}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Latest News Section - Static Cards (No Links) -->
        <div>
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-12">
                Latest News
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach($article as $articles)
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl hover:-translate-y-3 transition-all duration-400">
                        <!-- News Image -->
                        <div class="h-64 overflow-hidden">
                            <img src="{{ asset($articles->image) }}"
                                 alt="{{ $articles->title }}"
                                 class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
                        </div>

                        <!-- Card Content -->
                        <div class="p-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 line-clamp-2">
                                {{ $articles->title }}
                            </h3>
                            <div class="text-gray-700 leading-relaxed text-base line-clamp-4">
                                {!! $articles->description !!}
                            </div>

                             <div class="text-gray-700 leading-relaxed text-base">
                                {{ $articles->writer_name }}
                            </div>
                            <div class="mt-6 text-sm text-gray-500">
                                Published on {{ now()->format('M j, Y') }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
 <div class="container mx-auto px-4 py-12 max-w-7xl">
    @foreach ($catogery as $catogerys)
        @php
            $latestArticle = $catogerys->articles()->orderBy('id', 'desc')->first();
        @endphp

        <section class="mb-16">
            <!-- Category Title -->
            <h2 class="text-3xl font-bold text-gray-900 mb-8 border-b-4 border-blue-600 inline-block pb-2">
                {{ $catogerys->title }}
            </h2>

            <!-- Latest Article Card -->
            @if($latestArticle)
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-400 max-w-4xl mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <!-- Image -->
                        <div class="h-64 md:h-full overflow-hidden">
                            <img src="{{ asset($latestArticle->image)  }}"
                                 alt="{{ $latestArticle->title }}"
                                 class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
                        </div>

                        <!-- Content -->
                        <div class="p-8 md:p-10 flex flex-col justify-between">
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-4 line-clamp-2">
                                    {{ $latestArticle->title }}
                                </h3>

                            </div>

                            <div class="flex items-center justify-between text-sm text-gray-500">
                                <span>Latest update</span>
                                <span>{{ $latestArticle->created_at->format('M j, Y') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="text-center py-12 bg-gray-50 rounded-xl max-w-4xl mx-auto">
                    <p class="text-xl text-gray-600">No articles in this category yet.</p>
                </div>
            @endif
        </section>
    @endforeach

</div>
      
    </div>
</x-frontend.mainlayout>