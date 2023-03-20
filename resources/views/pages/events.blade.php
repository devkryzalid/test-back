@extends('layout')

@section('content')
<div>
    <h1>{{ __('liste des évènements') }}</h1>
    @foreach ($events as $event)

    <div>
        <h2>{{ $event->title }}</h2>
        <p>{{ trans_choice('{0} Complet|{1} dernière place|[2,*] :value places restantes', $event->quantity, ['value' => $event->quantity]) }}</p>
        <p>{{ $event->price }} $ / par billet</p>
        <p><span>{{ $event->start_date }}</span> - <span>{{ $event->end_date }}</span></p>
        <a href="{{ route('show-event', ['slug' => $event->slug]) }}">Voir l'évènement --></a>
    </div>
    <hr>
    @endforeach
</div>

@endsection