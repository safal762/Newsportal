<x-frontend.mainlayout>

<div class="grid grid-cols-1 lg:grid-cols-4 gap-8 p-4">
    <!-- News Cards (takes 3 columns on large screens) -->
    <div class="lg:col-span-3">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($arts as $article)
                @if ($article)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img 
                            src="{{ asset($article->image) }}" 
                            alt="{{ $article->title }}" 
                            class="w-full h-56 object-cover"
                        >
                        <div class="p-4">
                            <h2 class="text-lg font-semibold text-gray-800">
                                {{ $article->title }}
                            </h2>
                        </div>
                    </div>
                @else
                    <div class="col-span-full text-center py-10">
                        <h2 class="text-2xl font-medium text-gray-600">Category Not Found</h2>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <!-- Sidebar: Advertisements (1 column, stacked vertically) -->
    <div class="lg:col-span-1">
        <div class="space-y-6">`
            <h1 class="text-center text-2xl bg-green-500">Advertise</h1>
            @foreach ($advertise as $ad)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <a href="{{ $ad->redirect_link }}" target="_blank" rel="noopener noreferrer">
                        <img 
                            src="{{ asset($ad->image) }}" 
                            alt="{{ $ad->company_name }}" 
                            class="w-full h-64 object-cover"
                        >
                        <div class="p-4">
                            <h1 class="text-lg font-semibold text-gray-800">
                                {{ $ad->company_name }}
                            </h1>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>

</x-frontend.mainlayout>