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

                    <form method="GET" action="{{ route('studies.index')}}">

                      <div class="form-group">
                        <div class="text-left">
                          <input class="btn btn-info " type="submit" value="戻る"> 
                        </div>
                      </div>
                    </form>

                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">学習内容</th>
                          <th scope="col">開始日時</th>
                          <th scope="col">終了日時</th>
                          <th scope="col">備考</th>
                          <th scope="col">記録時間</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>{{ $studies->id}}</td>
                          <td>{{ $studies->content}}</td>
                          <td>{{ $studies->started_date.$studies->started_time}}</td>
                          <td>{{ $studies->ended_date.$studies->ended_time}}</td>
                          <td>{{ $studies->remark}}</td>
                          <td>{{ $studies->created_at}}</td>
                        </tr>
                      </tdoby>
                    </table>
                    
                    <form method="GET" action="{{ route('studies.edit', ['id' => $studies->id ]) }}">
                      <div class="text-right">
                        <button type="submit" class="btn btn-primary">
                          編集する
                        </butoon>
                      </div>
                    </form>

                    <form method="POST" action="{{ route('studies.destroy', ['id' => $studies->id ])}}" id="delete_{{ $studies->id }}">
                    @csrf
                      <div class="text-right">
                        <button type="submit" class="btn btn-danger">
                          削除する
                        </butoon>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection