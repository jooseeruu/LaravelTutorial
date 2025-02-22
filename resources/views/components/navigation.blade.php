<nav>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <!-- Utilizamos llaves para que Laravel pase la función e() que evita la injección de codigo BLADE  -->
        <li><a href="{{ route('posts.index') }}">Blog</a></li>
        <li><a href="{{ route('about') }}">Nosotros</a></li>
        <li><a href="{{ route('contact') }}">Contacto</a></li>
    </ul>
</nav>