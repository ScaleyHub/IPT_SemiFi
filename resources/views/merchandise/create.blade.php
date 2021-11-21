@extends('base')

@section('content')
    
    <h1>Add Merchandise</h1>

    <div class="row">
        <div class="col-md-5">
            {!! Form::open(['url' => '/merchandise', 'method' => 'post']) !!}

            <div class="form-group">
                {{ Form::label('name') }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('description') }}
                {{ Form::text('description', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('quantity') }}
                {{ Form::number('quantity', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('price') }}
                {{ Form::number('price', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group" style="padding-top: 15px;">
                <button class="btn btn-primary" style="float: right">
                    Create Merchandise   
                </button>    
            </div>
        </div>

        <div class="col md-7">
            @if (count($errors)>0)
                <div class="card-body bg-danger text-warning">
                    Please fill this fields:
                    <ul>
                        @foreach ($errors->all() as $err)
                            <li>{{$err}}</li>
                        @endforeach
                    </ul>

                </div>
            @endif

            
        </div>

    {!! Form::close() !!}

    </div>

@endsection