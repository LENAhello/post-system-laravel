<x-layout>

    <div class="post-container">

        @foreach($posts as $post)
        <div class="post-card">
            <a href="/post/{{ $post->id }}"><h2 class="post-title">{{ $post->title }}</h2></a>
            <p class="post-body">{{ $post->body }}</p>
            <div class="btn-container">
                <a class="btn-edit" href="{{ route('posts.edit', $post->id) }}">
                    Edit
                </a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn-delete" type="submit" onclick="return confirm('Are you sure you want to delete this post?')">
                        Delete
                    </button>
                </form>
            </div>
        </div>
        @endforeach

    </div>

</x-layout>