@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('プロフィール編集') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form method="GET" action="{{ route('users.index') }}">

                      <div class="form-group">
                        <div class="text-left">
                          <input class="btn btn-info " type="submit" value="戻る"> 
                        </div>
                      </div>
                    </form>

                    <form method="POST" action="{{ route('users.update', ['id' => $users->id ])}}">
                    @csrf

                    <div class="form-group">
                      <label for="inputText" class="col-form-label text-md-right">名前</label>
                      <div class="text-md-right">
                        <input type="text" class="form-control" name="name" value="{{ $users->name }}">
                      </div>
                    </div>
                    <br>

                    <div class="form-group">
                      <label for="inputText" class="col-form-label text-md-right">メールアドレス</label>
                      <div class="text-md-right">
                        <input type="text" class="form-control" name="email" value="{{ $users->email }}">
                      </div>
                    </div>
                    <br>

                    <div class="form-group">
                      <label for="inputText" class="col-form-label text-md-right">生年月日</label>
                      <div class="text-md-right">
                        <input type="text" class="form-control" name="birthday" value="{{ $users->birthday }}" placeholder="YYYY/MM/DD">
                      </div>
                    </div>
                    <br>

                    <div class="form-group row">
                      <label for="exampleInputEmail1" class="col-md-3 col-form-label text-md-right">性別</label>
                      <div class="col-md-9">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input text-md-center" type="radio" name="gender" value="0">男性</input>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" value="1">女性</input>
                        </div>
                      </div>
                    </div>
                    <br>

                    <div class="form-group">
                      <label for="inputTextarea" class="col-form-label text-md-right">自己紹介</label>
                      <textarea class="form-control" name="self_introduction">{{ $users->self_introduction}}</textarea>
                    </div>
                    <br>

                    <div class="form-group">
                      <label for="inputTextarea" class="col-form-label text-md-right">画像</label>
                      <input type="file" name="image_path">
                    </div>
                    <br>

                    <div class="form-group">
                      <div class="text-right">
                        <input class="btn btn-info " type="submit" value="更新する"> 
                      </div>
                    </div>
                    <br>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection