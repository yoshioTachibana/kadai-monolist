@extends('layouts.app')

@section('content')
<div class="serach">
    <div class="row">
        <div class="text-center">
            {!! Form::open(['routes'=>'items.create','method'=>'get','class'=>'form-incline']) !!}
                <div class="form-group">
                    {!! Form::text('keyword',$keyword,['class','form-controll input-lg','placeholder'=>'キーワードを入力','size'=>40]) !!}
                </div>
                {!! Form::submit('商品を検索',['class','btn btn-success btn-lg']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@include('items.items',['items'=>$items])
@endsection