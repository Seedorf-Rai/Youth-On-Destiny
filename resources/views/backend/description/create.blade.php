@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/description" class="btn btn-primary">Show List</a>
                    </div>
                    <div class="card-body">
                        <form action="/description" method="post">
                        @csrf
                         <div class="form-group">
                             <label for="title">Add Title</label>
                             <input id="title" class="form-control" type="text" name="title">
                         </div>
                         <div class="form-group">
                             <label for="description">Add Description</label>
                             <textarea id="description" class="form-control" name="text" rows="6"></textarea>
                         </div>
                         <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection