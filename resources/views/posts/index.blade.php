<x-layout>

    <div class="post-container">

        @foreach($posts as $post)
        <div class="post-card">
            <div class="post-content">
                <a href="/post/{{ $post->id }}"><h2 class="post-title">{{ $post->title }}</h2></a>
                <p class="post-body">{{ $post->body }}</p>
            </div>
            <div class="btn-container">
                <a class=" bg-slate-200 button" href="{{ route('posts.edit', $post->id) }}">
                    Edit
                </a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class=" bg-rose-200 button" type="submit" onclick="return confirm('Are you sure you want to delete this post?')">
                        Delete
                    </button>
                </form>
            </div>
        </div>
        @endforeach

    </div>

</x-layout>