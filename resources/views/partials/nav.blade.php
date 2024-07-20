<thead class="table table-bordered">
    <tr>
        <th scope="col" class="{{ setActivo('home') }}"><a href="/">HomeAA</a></th>
        <th scope="col" class="{{ setActivo('nosotros') }}"><a href="/nosotros">Nosotros</a></th>
        <th scope="col" class="{{ setActivo('servicios') }}"><a href="/servicios">Servicios</a></th>
        <th scope="col" class="{{ setActivo('contacto') }}"><a href="/contacto">Contacto</a></th>
        <th><a href="{{ route('login') }}">Login</a></th>
    </tr>





</thead>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>