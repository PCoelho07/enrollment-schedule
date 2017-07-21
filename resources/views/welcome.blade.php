@extends('layouts.app')

@section('user')
    Random title
@endsection


@section('content')
    @include('layouts.cards')
    <div class="row">
        <charts title="Testando" category="testando category"></charts> 
    </div>
@endsection