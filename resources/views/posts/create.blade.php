<x-layout>

    <div class="flex items-center justify-center p-6 w-full">
        <div class="rounded-2xl w-84 p-4">
            <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Create New Post</h1>
    
            <form action="{{ route('posts.store') }}" method="POST" class="space-y-6">
                @csrf
    
                <!-- Title -->
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" id="title" 
                        value="{{ old('title') }}"
                        class="mt-2 block w-full rounded-lg border border-gray-300 px-4 py-2 text-gray-900 placeholder-gray-400 shadow-sm focus:border-pink-500 focus:ring-2 focus:ring-pink-500 focus:outline-none">
                </div>
    
                <!-- Body -->
                <div>
                    <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
                    <textarea name="body" id="body" rows="5"
                        class="mt-2 block w-full rounded-lg border border-gray-300 px-4 py-2 text-gray-900 shadow-sm focus:border-pink-500 focus:ring-2 focus:ring-pink-500 focus:outline-none">{{ old('body') }}</textarea>
                </div>
    
                <!-- Submit Button -->
                <div class="flex justify-center">
                    <button type="submit" 
                        class="w-full md:w-auto rounded-xl bg-pink-600 px-6 py-2.5 text-white font-semibold shadow hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-400">
                        Save
                    </button>
                </div>
            </form>
    
            <!-- Error Messages -->
            @if($errors->any())
                <div class="mt-6 bg-red-50 border border-red-300 text-red-700 rounded-lg p-4">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>    

</x-layout>