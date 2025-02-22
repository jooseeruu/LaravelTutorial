<x-layout meta-title="Blog">
    <h1>Blog</h1>
    <x-slot name="sidebar">
        Blog Sidebar
    </x-slot>
    {{-- @dump($posts) -- dump es una herramienta de depuracion permite mostrar el contenido de lo que le pases ----}}
    @foreach ($posts as $post)
        <h4>
            <a href="{{ route('posts.show', $post) }}">
                {{ $post->title }}
            </a>
        </h4>
    @endforeach
</x-layout>