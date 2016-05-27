<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        Consultas Eloquent
        <span class="caret">
        </span>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a href="{{ route('all') }}" title="">
                Todos los usuarios (ALL)
            </a>
            <a href="{{ route('get','f') }}" title="">
                Usuarios Femeninos utilizando GET
            </a>
            <a href="{{ route('get','m') }}" title="">
                Usuarios Masculinos utilizando GET
            </a>
            <a href="{{ route('get-custom') }}" title="">
                Utilizando Get Custom - con Array
            </a>
        </li>
    </ul>
</li>