@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif
                    
                    <form method="GET" action="{{ route('studies.index')}}">
                    <div class="form-group">
                      <div class="text-left">
                        <input class="btn btn-info " type="submit" value="戻る"> 
                      </div>
                    </div>
                    </form>

                    <form method="POST" action="{{route('studies.store')}}">
                    @csrf

                    <div class="form-group">
                      <label for="inputText" class="col-form-label text-md-right">勉強内容</label>
                      <div class="text-md-right">
                        <input type="text" class="form-control" name="content">
                      </div>
                    </div>
                    <br>

                    <div class="form row">
                      <div class="form-group col-md-4">
                        <label for="inputText" class="col-form-label text-md-right">開始時間</label>
                        <input type="datetime-local" class="form-control" name="started_time">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputText" class="col-form-label text-md-right">終了時間</label>
                        <input type="datetime-local" class="form-control" name="ended_time">
                      </div>
                    </div>
                    <br>

                    <div class="form-group">
                      <label for="inputTextarea" class="col-form-label text-md-right">備考</label>
                      <textarea class="form-control" name="remark"></textarea>
                    </div>
                    <br>

                    <div class="form-group">
                      <div class="text-right">
                        <input class="btn btn-info " type="submit" value="登録する"> 
                      </div>
                    </div>
                    <br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection