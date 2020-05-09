@extends('frontend.templates.default')

@section('content')
    <div class="container">
        <h3>Login</h3>
        <form action="{{ route('login') }}" class="col s12" method="post">
            @csrf

            <div class="row">

                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" class="validate @error('email') invalid @enderror" value="{{ old('email') }}">
                    <label for="">Email Address</label>
                    @error('email')
                        <span class="helper-text" data-error="{{ $message }}"></span>
                    @enderror
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" name="password" class="@error('password') invalid @enderror">
                    <label for="">Password</label>
                    @error('password')
                        <span class="helper-text" data-error="{{ $message }}"></span>
                    @enderror
                </div>

                <div class="input-field right">
                    <input type="submit" value="Login" class="vawes-effect waves-light btn red accent-1">
                </div>
            </div>
        </form>
    </div>
@endsection


