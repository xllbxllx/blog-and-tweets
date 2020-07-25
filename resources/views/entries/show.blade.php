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
            @can ('update', $entry)
              <a href="{{url('/entries/'.$entry->id.'/edit')}}" class="btn btn-primary">
                Edit Entry
              </a>
            @endcan
          </div>
          <div class="card-footer">
            Author:
            <a href="{{'@'.$entry->user->username}}">
              {{$entry->user->name}}
            </a>

          </div>
        </div>
      </div>
    </div>
  @endsection
