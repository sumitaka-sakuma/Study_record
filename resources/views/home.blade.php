@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ホーム') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ Auth::user()->name }}

                    <form method="GET" action="{{ route('studies.index') }}">
                    @csrf
                      <div class="text-left">
                        <input class="btn btn-info " type="submit" value="マイページ"> 
                      </div>
                    </form> 
                    <br>

                    <form method="GET" action="{{ route('users.index') }}">
                    @csrf
                      <div class="text-left">
                        <input class="btn btn-info " type="submit" value="他のユーザー"> 
                      </div>
                    </form> 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
