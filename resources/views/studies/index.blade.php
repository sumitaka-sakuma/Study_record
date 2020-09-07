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

                    <table class="talbe">
                      <tbody>
                        @foreach($studies as $study)
                        <tr>
                          <td>{{ $study->content }}</td>
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
            </div>
        </div>
    </div>
</div>
@endsection