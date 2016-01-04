@extends('layouts.base')
@section('content')
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p>Log In</p>
                        </div>
                        <div class="panel-body">
                            <form action="api/login">
                                <label>Email
                                    <input type="text" name="email" class="form-control" />
                                </label>
                                <label>Password
                                    <input type="password" name="password" class="form-control" />
                                </label>
                                <input type="submit" name="login" class="btn btn-success" id="btn-login" />

                            </form>

                        </div>
                    </div>
                </div>
@endsection