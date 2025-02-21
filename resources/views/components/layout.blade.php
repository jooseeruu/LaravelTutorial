<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?? 'Default title' }}</title> <!-- Para definir propiedades se utiliza CamelCase -->
    <!-- Si la variable $metaTitle esta definida, entonces se va a renderizar el contenido de la variable $metaTitle, de lo contrario se va a renderizar el string 'Default title' -->
</head>

<body>
    <x-navigation />
    <!-- Se llama al componente de Blade que se encuentra en la carpeta partials -->
    {{ $slot }} <!-- Lo que hace es que se va a renderizar el contenido que se le pase a este componente -->
    @isset($sidebar)    <!-- Si la variable $sidebar esta definida, entonces se va a renderizar el contenido de la variable $sidebar -->
        <div id="SideBar">
            <h3>SideBar</h3>
            <div>{{ $sidebar }}</div>
        </div>
    @endisset

</body>

</html>