@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('学習の記録') }}</div>

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

                    <form method="GET" action="{{ route('users.edit', ['id' => Auth::user()->id ]) }}">
                    @csrf
                      <div class="form-group">
                        <div class="text-left">
                          <input class="btn btn-info " type="submit" value="プロフィールの編集"> 
                        </div>
                      </div>
                    </form>

                    <table class="talbe">
                      <tbody>
                        @foreach($studies as $study)
                        <tr>
                          <td>{{ $study->id}}</td>
                          <td>{{ $study->content }}</td>
                          <td>{{ $study->created_at}}</td>
                          <td><a href="{{ route('studies.show', ['id' => $study->id] ) }}">詳細を見る</a></td>
                        @endforeach
                        </tr>
                      </tbody>
                    </table>


                    <form method="GET" action="{{ route('studies.create')}}">
                      <button type="submit" class="btn btn-primary">
                        学習内容を記録する
                      </butoon>
                    </form>
              
                </div>
                {{ $studies->links() }}
            </div>
        </div>
    </div>
</div>
@endsection