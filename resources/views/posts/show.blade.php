<x-layout>
    <div class="w-4/5 flex flex-col justify-center items-center">
        <div class="w-3/5">
            <h1 class="text-2xl font-bold my-2">{{ $post->title }}</h1>
            <p>{{ $post->body }}</p>
            <p class="py-2"><strong>Created: </strong>{{ $post->created_at }}</p>
            <form action="{{ route('comments.store', $post->id) }}" method="POST" class="flex-col items-center justify-center">
                @csrf
                <div class="flex justify-between p-4 rounded-3xl bg-pink-100 mt-6 w-full">
                    <input type="text" name="comment" placeholder="Add a comment" class="border-none focus:border-none focus:ring-0 focus:outline-none">
                    <button type="submit" class="bg-linear-to-bl from-pink-700 to-pink-500 rounded-xl p-2 text-white cursor-pointer">Add a comment</button>
                </div>
            </form>
        </div>
        <div class="flex flex-col items-start justify-center w-4/5 mt-4">
            <p class="text-xl font-semibold">All Comments</p>
            @if($post->comments->count() > 0)
                @foreach ($post->comments as $comment)
                    <div class="flex justify-between items-center w-full py-2 px-4 my-2 bg-pink-50 rounded-2xl">
                        <p class="text-lg">{{ $comment->content }}</p>
                        <p class="text-sm">Created At: {{ $comment->created_at }}</p>
                    </div>
                @endforeach
            @else
                <p class="text-sm mt-2 italic">No comments yet</p>
            @endif
        </div>
    </div>
</x-layout>