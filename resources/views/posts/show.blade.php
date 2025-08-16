<x-layout>
    <div>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <p>Created :{{ $post->created_at }}</p>
    </div>
</x-layout>