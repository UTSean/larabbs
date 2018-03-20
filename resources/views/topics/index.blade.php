@extends('layouts.app')

@section('title', isset($category) ? $category->name : 'Topic list')

@section('content')
<div class="row">
    <div class="col-md-09 col-md-09 topic_list">

        @if (isset($category))
        <div class="alert alert-info" role="alert">
            {{ $category->name }} : {{$category->description }}
        </div>
        @endif

        <div class="panel panel-default">
            <div class="panel-heading">
                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="#">Last reply</a></li>
                    <li role="presentation"><a href="#">Newst</a></li>
                </ul>
            </div>

                <div class="panel-body">

                    @include('topics._topic_list', ['topics' => $topics])

                    {!! $topics->render() !!}
                </div>
            </div>
        </div>

                <div class="col-lg-3 col-md-3 sidebar">
                    @include('topics._sidebar')
                </div>
    </div>
@endsection
