@extends("layouts.app")

@section("title", "Add New Category")

@section("content")
<h1>Add New Category</h1>

<form action="{{ route("categories.store") }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Category Name</label>
        <input type="text" class="form-control @error("name") is-invalid @enderror" id="name" name="name" value="{{ old("name") }}" required>
        @error("name")
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control @error("description") is-invalid @enderror" id="description" name="description" rows="3">{{ old("description") }}</textarea>
        @error("description")
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Save Category</button>
    <a href="{{ route("categories.index") }}" class="btn btn-secondary">Cancel</a>
</form>

@endsection

