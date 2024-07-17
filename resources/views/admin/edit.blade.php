@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Edit {{ $project->title }}</h1>
                <form method="POST" action="{{ route('admin.projects.update', $project->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title"
                            name="title" value="{{ $project->title }}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" value="">{{ $project->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Image</label>
                        <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Image"
                            name="img" value="{{ $project->img }}">
                    </div>

                    <select class="form-select mb-3" aria-label="Default select example" name="type_id">
                        
                        @foreach ($types as $item)
                        <option value="{{ $item->id }}" @selected($item->id == $project->type->id)>{{ $item->name }}</option>
                        @endforeach

                    </select>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <form>
                    @csrf
                    @method('DELETE')
                    {{-- <button class="btn btn-danger" type="submit" value="elimina"></button> --}}
                    <button class="btn btn-danger" type="submit" formmethod="POST"
                        formaction="{{ route('admin.projects.destroy', $project->id) }}">elimina</button>
                </form>
            </div>
        </div>
    </div>
@endsection
