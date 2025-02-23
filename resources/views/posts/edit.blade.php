<x-layout :meta-title="$post->title">
    <h1>Edit form</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf @method('PATCH')
        @include('posts.form-fields')
        <button type="submit">{{ __('Send') }}</button>
        <br />
    </form>
    <br />

    <a href="{{ route('posts.index') }}">Back</a>
</x-layout>