@props(['article'])

<div class="grid grid-cols-3 gap-4 py-2 shadow hover:shadow-lg rounded-md overflow-hidden">
    <img class="h-full w-full object-cover" src="{{ asset($article->image) }}" alt="{{ $article->title }}">
    <div class="col-span-2">
        <h3 class="line-clamp-2 font-bold">
            {{ $article->title }}
        </h3>
        <small>
            {{ $article->created_at->format('j F, Y') }}
        </small>
    </div>
</div>
