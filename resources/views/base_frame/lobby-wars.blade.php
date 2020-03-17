@extends('layouts.app')


@section('content')
    <div class="container">

        <div class="trial-component grid-container">
            <div class="grid-item">
                @include('components.team-component')
            </div>
            <div class="grid-item">
                @include('components.start-trial-component')
            </div>
            <div class="grid-item">
                @include('components.team-component')
            </div>
        </div>


        <div class="trial-list-component">
            <ul>
                <li>Team A (Xpoints) has won to Team B (Ypoints)</li>
                <li>Team A (Xpoints) has won to Team B (Ypoints)</li>
                <li>Team A (Xpoints) has won to Team B (Ypoints)</li>
                <li>Team A (Xpoints) has won to Team B (Ypoints)</li>
                <li>Team A (Xpoints) has won to Team B (Ypoints)</li>
                <li>Team A (Xpoints) has won to Team B (Ypoints)</li>
                <li>Team A (Xpoints) has won to Team B (Ypoints)</li>
                <li>Team A (Xpoints) has won to Team B (Ypoints)</li>
                <li>Team A (Xpoints) has won to Team B (Ypoints)</li>
                <li>Team A (Xpoints) has won to Team B (Ypoints)</li>
                <li>Team A (Xpoints) has won to Team B (Ypoints)</li>
            </ul>
        </div>

    </div>
@endsection