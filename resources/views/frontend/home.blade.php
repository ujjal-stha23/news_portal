<x-frontend-layout>
    <section>
        <div class="container py-8 grid md:grid-cols-3 gap-10">
            <div class="md:col-span-2">
                <div class="">
                    <img class="w-full" src="{{ asset($latest_articles[0]->image) }}"
                        alt="{{ $latest_articles[0]->title }}">
                    <h1 class="text-3xl line-clamp-1">
                        {{ $latest_articles[0]->title }}
                    </h1>
                    <div class="line-clamp-2">
                        {!! $latest_articles[0]->content !!}
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-4 py-5">
                    @foreach ($latest_articles as $index => $article)
                        @if ($index !== 0)
                            <x-article-card :article="$article" />
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="md:col-span-1 space-y-6">
                <h2
                    class="text-2xl font-bold bg-[var(--light-primary)] text-[var(--primary)] p-2 border-1-4 border-[var(--primary)]">
                    ट्रेन्डिङ
                </h2>

                @foreach ($trending_articles as $article)
                    <x-article-card :article="$article" />
                @endforeach



            </div>
        </div>
    </section>


</x-frontend-layout>
