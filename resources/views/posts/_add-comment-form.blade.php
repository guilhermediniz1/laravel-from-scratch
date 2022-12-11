@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/100?u={{ auth()->id()}}" width="40" height="40" class="rounded-full">
                <h2 class="ml-4">Want to participate?</h2>
            </header>
            <textarea name="body" class="p-2 mt-4 w-full" rows="5" placeholder="Quick, thing of something to say!" required></textarea>
            @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
            <div class="flex justify-end border-t border-gray-200 mt-10 pt-6">
                <x-submit-button>
                    Post
                </x-submit-button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">Register</a> or <a href="/login" class="hover:underline">Log in</a> to leave a comment.
    </p>
@endauth
