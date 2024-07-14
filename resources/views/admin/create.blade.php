@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Crea un nuovo progetto</h1>
                <form method="POST" action="{{ route('admin.projects.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title"
                            name="title">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" value=""></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Image</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Image"
                            name="img">
                    </div>

                    <select class="form-select mb-3" aria-label="Default select example" name="type_id">
                        <option selected>Open this select menu</option>
                        @foreach ($types as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach

                    </select>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection