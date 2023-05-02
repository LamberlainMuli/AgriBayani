<x-app-layout>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>

    @auth
        @if (auth()->user()->id === $post->borrower->account_id)
            <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        @endif
    @endauth
    
</x-app-layout>