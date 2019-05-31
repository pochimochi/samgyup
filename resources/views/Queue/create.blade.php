@extends('Layout.main')
@section('body')
    <div class="container mt-5">
        <form action="{{url('Queue')}}" method="post" autocomplete="off">
            @csrf
            <h1 class="h3 mb-3 font-weight-normal">Add Customer</h1>
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name of Customer" required autofocus>
            </div>

            <div class="form-group">
                <input type="text" name="count" class="form-control" placeholder="Count" required>
            </div>


            <input type="submit" class="btn btn-success" value="Add Customer">

        </form>
    </div>

@endsection