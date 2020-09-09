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

                    <form method="GET" action="">
                    @csrf
                      <div class="form-group">
                        <div class="text-left">
                          <input class="btn btn-info " type="submit" value="戻る"> 
                        </div>
                      </div>
                    </form>

                    <table class="talbe">
                      <tbody>
                        @foreach($users as $user)
                        <tr>
                          <td>{{ $user->id}}</td>
                          <td><a href="{{ route('users.show', ['id' => $user->id ]) }}">{{ $user->name }}</a></td>
                          <td>{{ $user->created_at}}</td>
                        @endforeach
                        </tr>
                      </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection