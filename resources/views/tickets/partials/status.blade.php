<span {!! Html::classes(['label label-info absolute', 'highlight' => $ticket->open]) !!}}>
                        {{ trans('ticket.status.'.$ticket->status)}}</span>