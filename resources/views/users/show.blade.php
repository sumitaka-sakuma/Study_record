@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('詳細') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="GET" action="{{ route('users.index')}}">
                    @csrf
                      <div class="form-group">
                        <div class="text-left">
                          <input class="btn btn-info " type="submit" value="戻る"> 
                        </div>
                      </div>
                    </form>

                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">学習内容</th>
                          <th scope="col">開始日時</th>
                          <th scope="col">終了日時</th>
                          <th scope="col">備考</th>
                          <th scope="col">記録時間</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $user)
                        <tr>
                          <td>{{ $user->content}}</td>
                          <td>{{ $user->started_date.$user->started_time}}</td>
                          <td>{{ $user->ended_date.$user->ended_time}}</td>
                          <td>{{ $user->remark}}</td>
                          <td>{{ $user->created_at}}</td>
                        </tr>
                        @endforeach
                      </tdoby>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection