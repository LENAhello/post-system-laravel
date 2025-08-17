<x-layout>
    <div class="w-[70%] mt-10 p-6 bg-pink-50 rounded-xl shadow-md">
        <h1 class="text-3xl font-bold text-pink-700 mb-6 text-center">Edit The Post</h1>
    
        <form action="{{ route('posts.update', $post->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
    
            <div>
                <label class="block text-pink-600 font-semibold mb-1">Title:</label>
                <input type="text" name="title" value="{{ old('title', $post->title) }}" 
                    class="w-full border border-pink-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-pink-400">
            </div>
    
            <div>
                <label class="block text-pink-600 font-semibold mb-1">Body:</label>
                <textarea name="body" rows="5" 
                    class="w-full border border-pink-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-pink-400">{{ old('body', $post->body) }}</textarea>
            </div>
    
            <button type="submit" 
                class="w-full bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2 px-4 rounded-lg transition-colors">
                Update
            </button>
        </form>
    
        @if($errors->any())
            <ul class="mt-4 list-disc list-inside text-red-500">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>    
</x-layout>
