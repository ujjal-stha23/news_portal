<x-frontend-layout>
    <section>
        <div class="container grid grid-cols-3 py-10">
            <div class="col-span-2">
                @foreach ($articles as $article)
                    <x-article-card :article="$article" />
                @endforeach
            </div>

            {{-- advertise --}}
            <div class="col-span-1">
                @foreach ($advertises as $ad)
                    <a href="{{ $ad->redirect_url }}" target="_blank">
                        <img src="{{ asset($ad->image) }}" alt="">
                    </a>
                @endforeach

            </div>
        </div>
    </section>
</x-frontend-layout>
