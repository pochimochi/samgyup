@extends('Layout.main')
@section('head')
    <meta http-equiv="refresh" content="4" >
@endsection
@section('body')
    <h1 class="text-center">Samgyupsalamat Queuing System </h1>
    <div class="container">
        <div class="row mt-5">
            <div class="col text-center">
                <h1 class="display-3">Now Serving</h1>
                <h3 class="text-danger display-4 mt-5">{{$queue->first()->name ?? ''}}</h3>

            </div>

            <div class="col">
                <h1>Waiting Customers - {{($queue->count() > 10) ? $queue->count() - 10 : '0'}}</h1>

                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>No.of Customers</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($queue as $q)
                        <tr>
                            <td>{{$q->name}}</td>
                            <td>{{$q->count}}</td>
                        </tr>
                    @endforeach
                    </tbody>


                </table>


            </div>
        </div>
    </div>

@endsection