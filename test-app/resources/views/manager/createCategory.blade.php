@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row ">
        
            @include('sidebar')
                   
        <div class="col-8">
             <div class="card">
                <div class="card-header">
                    <h6>Create Category</h6>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addcat">
                            Category Create
                        </button>
                        <x-add-modal : />

                    </div>
                        
                </div>
                    <div class="card-body">
                            @include('massge')
                            
                        
{{-- {{$categories}} --}}

                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Id</td>
                                    <td>Name</td>
                                    <td>Edit</td>
                                    <td>Delete</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($categories as $cat)
                                        
                                    
                                    <td>{{$cat->id}}</td>
                                    <td>{{$cat->name }}</td>
                                    <td>
                                        {{-- edit modal --}}
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editcat{{$cat ['id']}}">
                                            Edit
                                        </button>
                                        <x-edit-modal :cat="$cat" />
                                        


                                    </td>
                                    <td>
                                        {{-- delete modal --}}
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletecat{{$cat ['id']}}">
                                            Delete
                                          </button>
                                          {{-- @dd($cat) --}}
                                          <x-delete-modal :cat="$cat" />
                                    </td>
                                     

                                </tr>

                                @endforeach
                            </tbody>

                        </table>



{{$categories->links()}}
                    </div>
                        <div class="card-footer">

                        </div>
    
             </div>
        </div>
        
    </div>
</div>


@endsection