@extends('layouts.app')
@section('title', 'Permission denied.')

@section('content')

<div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
        <div class="panel-body">
            @if (Auth::check())
                <div class="alert alert-danger text-center">
                    Current user is not allowed to manage the WebSite.
                </div>
            @else
                <div class="alert alert-danger text-center">
                    Please login first.
                </div>

            <a class="btn btn-lg btn-primary btn-block" herf="{{ route('login') }}">
                <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                Login
            </a>
            @endif
        </div>
    </div>
</div>
@stop
