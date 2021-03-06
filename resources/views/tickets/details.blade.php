@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2 class="title-show">
                {{$ticket->title}}
                @include('tickets/partials/status', compact('ticket'))


            </h2>
            <span class="glyphicon glyphicon-time">{{$ticket->created_at->format('d/m/Y h:ia')}}</span>

            <h4 class="label label-info news">
                {{count($ticket->voters)}} votos            </h4>


            <p class="vote-users">
                @foreach($ticket->voters as $user)
                <span class="label label-info">{{$user->name}}</span>
                @endforeach
            </p>


            <form method="POST" action="http://teachme.dev/votar/5" accept-charset="UTF-8"><input name="_token" type="hidden" value="VBIv3EWDAIQuLRW0cGwNQ4OsDKoRhnK2fAEF6UbQ">
                <!--button type="submit" class="btn btn-primary">Votar</button-->
                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-thumbs-up"></span> Votar
                </button>
            </form>

            <h3>Nuevo Comentario</h3>


            <form method="POST" action="http://teachme.dev/comentar/5" accept-charset="UTF-8"><input name="_token" type="hidden" value="VBIv3EWDAIQuLRW0cGwNQ4OsDKoRhnK2fAEF6UbQ">
                <div class="form-group">
                    <label for="comment">Comentarios:</label>
                    <textarea rows="4" class="form-control" name="comment" cols="50" id="comment"></textarea>
                </div>
                <div class="form-group">
                    <label for="link">Enlace:</label>
                    <input class="form-control" name="link" type="text" id="link">
                </div>
                <button type="submit" class="btn btn-primary">Enviar comentario</button>
            </form>

            <h3>Comentarios ({{$ticket->comments()->count()}})</h3>
            @foreach($ticket->comments  as $comment)
            <div class="well well-sm">
                <p><strong>{{$comment->user->name}}</strong></p>
                <p>{{$comment->comment}}</p>
                <p class="date-t"><span class="glyphicon glyphicon-time"></span> {{$comment->created_at->format('d/m/Y h:ia')}}</p>
            </div>
                @endforeach

        </div>
    </div>
</div>
@endsection('content')

