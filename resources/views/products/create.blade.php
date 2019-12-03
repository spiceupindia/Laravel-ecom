@extends('layouts.app')
@section('content')

<div class="card">
        <div class="card-header">New Product</div>

        <div class="card-body">
            @if(count($errors) > 0)
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form action="{{ route('products.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="form-control btn btn-success">Save Product</button>
            </div>
            </form>

        </div>
    </div>


@endsection
