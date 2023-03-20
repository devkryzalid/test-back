@extends('layout')

@section('content')
<div>
    <h1>{{ $event->title }}</h1>
    <p>{{ $event->description }}</p>
    <p>{{ trans_choice('{0} Complet|{1} dernière place|[2,*] :value places restantes', $event->quantity, ['value' => $event->quantity]) }}</p>
    <p>{{ $event->price }} par billet</p>
    <p><span>{{ $event->start_date }}</span> - <span>{{ $event->end_date }}</span></p>
    <p><span>{{ $event->start_time }}</span> - <span>{{ $event->end_time }}</span></p>
</div>
@endsection