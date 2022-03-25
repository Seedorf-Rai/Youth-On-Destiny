@extends('backend.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="/category" class="btn btn-info">Show List</a>
            </div>
            <div class="card-body">
                <form action="/category" method="post">
                    @csrf
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input id="name" class="form-control" type="text" name="name">
                </div>
                <button type="submit" class="btn btn-success">Save Category</button>
                </form>
            </div>
        </div>
    </div>
@endsection