@inject('nomObjet', 'App\Utilities\GetWeekend')

@extends("base", ['titre' => 'Page Service'])

@section('vitrine')
    <h3> Page Service bigua woooo</h3>
    {{ $nomObjet->getWeek()}}
@endsection
