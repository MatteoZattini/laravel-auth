@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{ $type->name }}</h1>
                <p>{{ $type->description }}</p>
            </div>
        </div>
    </div>
@endsection