@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Lista progetti</h1>
            <div class="col-12 d-flex flex-wrap">
                @foreach ($projectsList as $item)
                <div class="card" style="width: calc(100% / 4);">
                    <img src="{{ $item->img }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $item->title }}</h5>
                      <p>{{ $item->type->name }}</p>
                      <a href="{{ route('admin.projects.show', $item->id) }}" class="btn btn-primary">See More</a>
                      <a href="{{ route('admin.projects.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                    </div>
                  </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
