@extends('base')

@section('content')
    
    @if ($info = Session::get('info'))

        <div class="card" style="padding: 10px">
            <div class="card-body bg-success text-white">
                {{$info}}
            </div>
        </div>
        
    @endif

    <div class="btn" style="float: right">
        <a href="{{url('/merchandise/create')}}" class="btn btn-primary" >
            Add Merchandise
        </a>
    </div>
    <h1>List of Merchandise</h1>
    <table class='table table-bordered table-striped table-sm'>

        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($merchandise as $merch)
                <tr>
                    <td>{{$merch -> name}}</td>
                    <td>{{$merch -> description}}</td>
                    <td>{{$merch -> quantity}}</td>
                    <td>{{$merch -> price}}</td>
                </tr>
                
            @endforeach
        </tbody>
    </table>

@endsection