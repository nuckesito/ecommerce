<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                @if (auth()->check())
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Usuario</span>
                    <i class="menu-arrow"></i>
                @endif
            </a>
            <div class="collapse" id="ui-basic">
                <a class="nav-link" href="/usuarios">Gestionar Usuarios</a>
            </div>
        </li>
    
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <span class="menu-title">Categorias</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <a class="nav-link" href="/#">Todos</a>
                <a class="nav-link" href="/#">Blusas</a>
                <a class="nav-link" href="/#">Pantalones</a>
                <a class="nav-link" href="#">Vestidos</a>
                <a class="nav-link" href="#">Faldas</a>
                <a class="nav-link" href="#">Shorts</a>
                <a class="nav-link" href="#">Poleras</a>
                <a class="nav-link" href="#">Sombreros</a>
            </div>
        </li>
        
    </ul>
</nav>
