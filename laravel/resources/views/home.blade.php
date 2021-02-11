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
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                    @endif

                    <form class="" action="{{route('sendMail')}}" method="post">
                      @csrf
                      @method('post')

                      <label for="textMail">Mail text:</label>
                      <input type="text" name="textMail" value="">
                      <br>
                      <input type="submit" name="" value="SEND">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
