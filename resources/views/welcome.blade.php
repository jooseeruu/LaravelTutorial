{{--@component('components.layout') --}}
<x-layout meta-title="Home">
    <!-- Se le pasa el valor de la variable meta-title kebab-case para referenciar propiedades -->
    <h1>Inicio</h1>
    <x-slot:sidebar>
        Home Sidebar
    </x-slot:sidebar>
</x-layout>
{{-- @endcomponent --}}