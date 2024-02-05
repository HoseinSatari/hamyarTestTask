@extends('layouts.master')
@section('title' , 'ورود')

@section('content')
    <form action="{{route('login')}}" method="post">
        @csrf
        <!-- Email input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="phone">phone</label>
            <input  type="text" id="phone" name="phone" class="form-control"/>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
    </form>
@endsection
