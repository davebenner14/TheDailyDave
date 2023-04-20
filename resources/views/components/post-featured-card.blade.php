@props(['post'])

<article
    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5 lg:flex">

     
        <div>
            @if ($post->category->name === 'Education')
                <img src="{{ asset('images/education.png') }}" alt="Education illustration" class="rounded-xl pr-4">
            @elseif ($post->category->name === 'Entertainment')
                <img src="{{ asset('images/entertainment.png') }}" alt="Entertainment illustration" class="rounded-xl pr-4">
            @elseif ($post->category->name === 'Health')
                <img src="{{ asset('images/health.png') }}" alt="Health illustration" class="rounded-xl pr-4">
            @elseif ($post->category->name === 'Sports')
                <img src="{{ asset('images/sports.png') }}" alt="Sports illustration" class="rounded-xl pr-4">
            @elseif ($post->category->name === 'Technology')
                <img src="{{ asset('images/technology.png') }}" alt="Technology illustration" class="rounded-xl pr-4">
            @else
                <img src="{{ asset('images/default.png') }}" alt="Default illustration" class="rounded-xl pr-4">
            @endif
        </div>
        
        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="space-x-2">
                    <x-category-button :category="$post->category" />
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/posts/{{ $post->slug }}">
                            {{ $post->title }}
                        </a>
                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-2 space-y-4">
                {!! $post->excerpt !!}
            </div>

            <footer class="flex justify-between items-center mt-8">
           
                <div class="flex items-center lg:justify-center text-sm mt-4">
                    <img src="https://i.pravatar.cc/60?u={{ random_int(1, 100) }}" alt="Avatar" width="40" height="40" class="rounded-full">
                    <div class="ml-3 text-left">
                        <h5 class="font-bold">
                            <a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                        </h5>
                    </div>
                </div>
                

                <div class="hidden lg:block">
                    <a href="/posts/{{ $post->slug }}"
                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                    >Read More</a>
                </div>
            </footer>
        </div>
    </div>
</article>