@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-3">
      @include('partials.storiesssidebar')
    </div>
    <div class="col-sm-9">
      <h2>All stories</h2>
      <h3>{{ $hashed }}</h3>
      @if (count($stories) >= 1)
        @foreach ($stories as $key => $story)
          {{ $story->name }}
        @endforeach
      @else
      <p>
        No story yet!
      </p>
      @endif
    </div>
  </div>
</div>
@endsection
