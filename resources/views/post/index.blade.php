@extends('layout.index')

@section('title', '博客首页')

@section('css')
    <style type="text/css">
        .panel-list{
            border-bottom: 1px dashed #ccc;
        }
        .panel-list:last-of-type{
            border-bottom: 0px dashed #ccc;
        }
    </style>
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-body panel-list">
            <div class="media">
                <div class="media-left">
                    <div class="avatar">
                        <a href="#">
                            <img class="media-object" src="/images/chat.png" alt="">
                        </a>
                    </div>
                </div>
                <a class="media-body" href="{{asset('posts/1')}}">
                    <div class="pull-left">
                        <h4 class="media-heading">Media heading</h4>
                        <div>时间 作者</div>
                    </div>
                    <div class="pull-right">
                        <div style="line-height: 40px;">
                            <span><span class="glyphicon glyphicon-eye-open"></span>120</span>/
                            <span><span class="glyphicon glyphicon-thumbs-up"></span>120</span>/
                            <span><span class="glyphicon glyphicon-comment"></span>120</span>
                        </div>
                    </div>
                </a>

            </div>
        </div>
        <div class="panel-body panel-list">
            <div class="media">
                <div class="media-left">
                    <div class="avatar">
                        <a href="#">
                            <img class="media-object" src="/images/chat.png" alt="">
                        </a>
                    </div>
                </div>
                <a class="media-body" href="{{asset('posts/2')}}">
                    <div class="pull-left">
                        <h4 class="media-heading">Media heading</h4>
                        <div>时间 作者</div>
                    </div>
                    <div class="pull-right">
                        <div style="line-height: 40px;">
                            <span><span class="glyphicon glyphicon-eye-open"></span>120</span>/
                            <span><span class="glyphicon glyphicon-thumbs-up"></span>120</span>/
                            <span><span class="glyphicon glyphicon-comment"></span>120</span>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
@endsection