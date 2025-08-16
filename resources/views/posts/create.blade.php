<x-layout>

    <h1>Create Page</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>Title : </label>
        <input type="text" name="title" value="{{ old('title') }}">
        <label>Body : </label>
        <textarea name="body">{{ old('body') }}</textarea>

        <button type="submit">Save</button>
    </form>

    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

</x-layout>