@extends('layout')

@section('content')
<div>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <ol class="breadcrumb" aria-label="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="{{ route('list-event') }}">{{ __('Liste des évènements' )}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
        </div>
    </nav>
    <div class="card">
        <div class="card-title p-4 d-flex justify-content-between align-items-center">
            <h1>{{ $event->id . ' - ' . $event->title }}</h1>
            @if ($event->start_date <= Carbon\Carbon::today() && $event->end_date > Carbon\Carbon::today())
                <p><span class="rounded-pill badge bg-info">{{ __('En cours') }}</span></p>
            @elseif ($event->start_date >= Carbon\Carbon::today())
                <p><span class="rounded-pill badge bg-success">{{ __('À venir') }}</span></p>
            @elseif ($event->end_date < Carbon\Carbon::today())
                <p><span class="rounded-pill badge bg-alert">{{ __('Terminé') }}</span></p>
            @endif
        </div>
        <div class="card-body">
            <p class="card-text">{{ $event->description }}</p>
            <p>{{ trans_choice('{0} Complet|{1} dernière place|[2,*] :value places restantes', $event->quantity, ['value' => $event->quantity]) }}</p>
            <p>{{ $event->price . __('$ / par billet')}}</p>
            <p>Du <span>{{ $event->start_date }}</span> au <span>{{ $event->end_date }}</span></p>
            <p>De <span>{{ $event->start_time }}</span> à <span>{{ $event->end_time }}</span></p>
        </div>
    </div>
</div>
@endsection