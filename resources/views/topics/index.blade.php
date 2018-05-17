@extends('layouts.app')

@section('title','话题列表')

@section('content')
<div class="row">
    <div class="col-le-9 col-md-9 topic-list">
        <div class="panel panel-default">

            <div class="panel-heading">
                <ul class="nav nav-pills">
                    <li role="presentation" class="active">
                        <a href="#">最后回复</a>
                    </li>
                    <li role="presentation">
                        <a href="#">最新发布</a>
                    </li>
                </ul>
                {{--<h1>--}}
                    {{--<i class="glyphicon glyphicon-align-justify"></i> Topic--}}
                    {{--<a class="btn btn-success pull-right" href="{{ route('topics.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>--}}
                {{--</h1>--}}
            </div>

            <div class="panel-body">
                   {{--话题列表--}}
                @include('topics._topic_list',['topics'=>$topics])
                 {{--分页 --}}
                {!! $topics->render() !!}
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 sidebar">
        @include('topics._sidebar')
    </div>
</div>

{{--<div class="row">--}}
    {{--<div class="col-lg-9 col-md-9 topic-list">--}}
        {{--<div class="panel panel-default">--}}

            {{--<div class="panel-heading">--}}
                {{--<ul class="nav nav-pills">--}}
                    {{--<li role="presentation" class="active"><a href="#">最后回复</a></li>--}}
                    {{--<li role="presentation"><a href="#">最新发布</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}

            {{--<div class="panel-body">--}}
                 {{--话题列表--}}
                {{--@include('topics._topic_list', ['topics' => $topics])--}}
                 {{--分页--}}
                {{--{!! $topics->render() !!}--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="col-lg-3 col-md-3 sidebar">--}}
        {{--@include('topics._sidebar')--}}
    {{--</div>--}}
{{--</div>--}}

@endsection