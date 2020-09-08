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

                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">学習内容</th>
                          <th scope="col">開始時間</th>
                          <th scope="col">終了時間</th>
                          <th scope="col">備考</th>
                          <th scope="col">記録時間</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>{{ $studies->id}}</td>
                          <td>{{ $studies->content}}</td>
                          <td>{{ $studies->started_time}}</td>
                          <td>{{ $studies->ended_time}}</td>
                          <td>{{ $studies->remark}}</td>
                          <td>{{ $studies->created_at}}</td>
                        </tr>
                      </tdoby>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection