@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{ $project->title }}</h1>
                <p>{{ $project->description }}</p>
            </div>
        </div>
    </div>
@endsection