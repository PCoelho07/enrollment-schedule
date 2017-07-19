@extends('layouts.app')

@section('user')
    Random title
@endsection


@section('content')
    @include('layouts.cards')
    <div class="row">
       <div class="card">
            <div class="card-header card-chart" data-background-color="red">
                <div class="ct-chart" id="completedTasksChart"></div>
            </div>
            <div class="card-content">
                <h4 class="title">Completed Tasks</h4>
                <p class="category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                </div>
            </div>
        </div>                
        <charts></charts> 
    </div>
@endsection