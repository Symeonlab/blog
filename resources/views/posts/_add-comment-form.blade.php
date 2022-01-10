@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">

        @csrf

        <header>
            <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-full">

            <h2 class="ml-4">Want to participate</h2>
        </header>

        <div class="mt-6">
            <textarea
                name="body"
                class="w-full text-sm focus:ring"
                rows="5"
                placeholder="Quick, thing of something to say!"
                required></textarea>
            @error('body')
            <span class="text-xm text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex justify-end mt-6 ">
            <x-submit-button>Post</x-submit-button>
        </div>

        </form>
    </x-panel>
@else
    <p>
        <a href="/register" class="hover:underline">Register</a> or
        <a href="/login" class="hover:underline">Log in to leave a comment.</a>
    </p>
@endauth

@foreach($post->comments as $comment)
    <x-post-comment :comment="$comment"/>
@endforeach
