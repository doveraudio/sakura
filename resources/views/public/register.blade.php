@extends('layouts.base')
@section('content')
        <div>
            <form action="api/login">
                <input type="text" name="email" />
                <input type="password" name="password" />
                <input type="password" name="passwordcheck" />
                <input type="submit" name="register" id="btn-register" />
                
            </form>
            
        </div>
@endsection