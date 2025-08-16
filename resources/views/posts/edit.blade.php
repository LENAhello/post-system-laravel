<x-layout>
<h1>Edit Post!</h1>

<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Title : </label>
    <input type="text" name="title" value="{{ old('title', $post->title) }}">

    <label>Body : </label>
    <textarea name="body">{{ old('body', $post->body) }}</textarea>

    <button type="submit">Update</button>
</form>

@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

</x-layout>
