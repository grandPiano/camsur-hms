@extends('layouts.app')

@section('title', 'Change Password')

@section('content')

<h1 class="title is-1">Change Password</h1>


<section class="section">
  <div class="container">
    <form class="" action="/change/password" method="post">
      {{ csrf_field() }}
      @if(session('success'))
        <div class="notification is-success">
          {{ session('success') }}
        </div>
      @endif
      <div class="control">
        <label for="old_password">Password</label>
        <input type="password"
               class="input {{ $errors->has('old_password') ? 'is-danger':'' }}"
               name="old_password" value="">
        @if($errors->has('old_password'))
          <span class="help is-danger">{{ $errors->first('old_password') }}</span>
        @endif
      </div>
      <div class="control">
        <label for="new_password">New Password</label>
        <input type="password"
               class="input {{ $errors->has('new_password') ? 'is-danger':''}}"
               name="new_password" value="">
        @if($errors->has('new_password'))
          <span class="help is-danger">{{ $errors->first('new_password') }}</span>
        @endif
      </div>
      <div class="control">
        <label for="new_password_confirmation">Confirm Password</label>
        <input type="password"
               class="input {{ $errors->has('new_password_confirmation') ? 'is-danger':'' }}"
               name="new_password_confirmation" value="">
        @if($errors->has('new_password_confirmation'))
          <span class="help is-danger">{{ $errors->first('new_password_confirmation') }}</span>
        @endif
      </div>
      <div class="control">
        <button type="submit" class="button is-primary">Submit</button>
      </div>
    </form>
  </div>
</section>
@endsection