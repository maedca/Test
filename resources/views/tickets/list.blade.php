@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <h1>
                        {{trans(Route::currentRouteName().'_title')}}
                        <a href="#" class="btn btn-primary">
                            Nueva solicitud </a>
                    </h1>

                    <p class="label label-info news">
                        Hay {{$tickets->total()}} {{$title = trans(Route::currentRouteName().'_title')}} </p>
                    @foreach($tickets as $ticket)

                        @include('tickets/partials/item', compact('ticket'))

                    @endforeach

                    {!! $tickets->render() !!}
                    {{-- <ul class="pagination">
                         <li class="disabled"><span>&laquo;</span></li>
                         <li class="active"><span>1</span></li>
                         <li><a href="http://teachme.static/populares/?page=2">2</a></li>
                         <li><a href="http://teachme.static/populares/?page=2" rel="next">&raquo;</a></li>
                     </ul>--}}
                </div>

                <hr>

                <p><a href="http://maedca.me" target="_blank">maedca.me</a></p>

            </div>
        </div>
    </div>
@endsection('content')
