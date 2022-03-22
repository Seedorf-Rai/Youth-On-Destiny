@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/description/create" class="btn btn-primary">Add Descriptions</a>
                    </div>
                     <div class="card-body">
                         <table class="table">
                             <tr>
                                 <th>SN</th>
                                 <th>Title</th>
                                 <th>Description</th>
                                 <th>Actions</th>
                             </tr>
                             @foreach ($descriptions as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                 <td>{{ $item->title }}</td>   
                                 <td>{!! $item->text !!}</td> 
                                 <td>
                                     <a href="/description/{{ $item->id }}/edit" class="btn btn-info">Edit</a></td>  
                                </tr> 
                             @endforeach
                         </table>
                     </div>
                </div>
            </div>
        </div>
    </div>
@endsection