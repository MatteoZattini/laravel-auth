@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Lista Tipi</h1>
            <div class="col-12 d-flex flex-wrap">
                @foreach ($types as $item)
                <div class="card" style="width: calc(100% / 4);">
                    <div class="card-body">
                      <h5 class="card-title"><a href="{{ route('admin.types.show', $item) }}">{{ $item->name }}</a></h5>
                      <p><i class="{{ $item->icon }}"></i></p>

                    </div>
                  </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
