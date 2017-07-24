@extends('layouts.master')

@section('content')

<div class="col-md-8">

    <h1>Sign In</h1>

    <form action="/public/login" method="POST">

        {{ csrf_field() }}

        <div class="formg-roup">

            <label for="email">Email Address:</label>

            <input type="email" class="form-control" id="email" name="email">

        </div>

        <div class="form-group">

            <label for="password">Password:</label>
            
            <input type="password" id="password" name="password" class="form-control">

        </div>

        <div class="form-group">

            <button class="btn btn-primary" type="submit">Sign In</button>

        </div>
        
    </form>

    @include('layouts.errors')


</div>
    
@endsection