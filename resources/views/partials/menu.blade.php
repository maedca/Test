<ul class="nav navbar-nav">
    <li role="presentation" @if(Route::is('tickets.latest')) class="active" @endif>
        <a href={{route('tickets.latest')}}>Recientes</a>
    </li>
    <li role="presentation" @if(Route::is('tickets.popular')) class="active" @endif>
        <a href={{route('tickets.popular')}}>Populares</a>
    </li>
    <li role="presentation" @if(Route::is('tickets.open')) class="active" @endif>
        <a href={{route('tickets.open')}}>Abiertas</a>
    </li>
    <li role="presentation"@if(Route::is('tickets.closed')) class="active" @endif>
        <a href={{route('tickets.closed')}}>Finalizadas</a>
    </li>
</ul>