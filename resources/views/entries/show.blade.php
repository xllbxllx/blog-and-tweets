@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{$entry->title}}</div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif

            {{$entry->content}}
            <hr>
            @if ($entry->user_id === auth()->id())
              <a href="{{url('/entries/'.$entry->id.'/edit')}}" class="btn btn-primary">
                Edit Entry
              </a>
            @endif


          </div>
        </div>
      </div>
    </div>
  @endsection
