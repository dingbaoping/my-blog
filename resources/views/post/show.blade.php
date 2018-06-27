@extends('layout.index')

@section('title', '文章详情')

@section('css')
    <style type="text/css">
        .star-icon{
            font-size: 16px;
            vertical-align: middle;
            margin-top: -2px;
        }
        .article-info{
            width: 100%;
            text-align: center;
            margin: 10px auto;
        }
        .article-info td{
            width: 33.3%;
            line-height: 1.8;
        }
        .article-info-data{
            font-size: 22px;
        }
        .author .avatar{
            width: 80px;
            height: 80px;
            margin: 10px auto;
        }
        .article-panel > .panel-heading {
            background-color: #fff;
        }
        .panel-title{
            font-size: 22px;
        }
        .pull-right {
            margin-top: 5px;
        }
        .panel-default > .panel-heading .badge {
            color: #31708f;
            background-color: #d9edf7;
            border: 1px solid #bce8f1;
            padding: 5px 12px;
            border-radius: 16px;
        }
    </style>
@endsection

@section('content')

    <div class="panel panel-default article-panel">
        <div class="panel-heading">
            <span class="panel-title">你好标题</span>
            <a class="edit" href="#">
                <i class="glyphicon glyphicon-pencil"></i> 编辑
            </a>
            <a class="delete" href="#">
                <i class="glyphicon glyphicon-remove"></i> 删除
            </a>
            <div class="pull-right">
                <span class="badge">php</span>
                <span class="badge">web</span>
            </div>
        </div>
        <div class="panel-body">
            Panel content
        </div>
    </div>

    <!-- 评论模块 -->
    <div class="panel panel-default">
        <div class="panel-heading">
            发表评论
        </div>
        <div class="panel-body">

            <form action="" method="POST">
            {{ csrf_field() }}
            <!-- 编辑器容器 -->
                <div class="form-group">
                    <textarea  class="form-control" rows="5" id="container" name="body">哈哈哈</textarea>
                </div>

                <button type="submit" class="btn btn-success pull-right">提交评论</button>
            </form>

            {{--<a href="{{url('login')}}" class="btn btn-success btn-block">登录提交答案</a>--}}
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            110 个评论
        </div>
        <div class="panel-body">

            <div class="media">
                <div class="media-left">
                    <a href="">
                        <img class="media-object" src="/images/chat.png" alt="" width="36">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">
                        <a href="">admin</a>
                    </h4>
                    <div class="media-content">
                        哈哈哈哈或或
                    </div>
                </div>
            </div>

            <div class="media">
                <div class="media-left">
                    <a href="">
                        <img class="media-object" src="/images/chat.png" alt="" width="36">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">
                        <a href="">admin1</a>
                    </h4>
                    <div class="media-content">
                        恩恩
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('sidebar')
    <div class="panel panel-danger">
        <div class="panel-heading text-center">关于作者</div>
        <div class="panel-body">
            <div class="author text-center">
                <div class="avatar">
                    <a href="#">
                        <img class="media-object" src="/images/chat.png" alt="">
                    </a>
                </div>
                <div class="author-name">作者：admin</div>
            </div>
            <hr/>
            <button class="btn btn-default btn-block" type="submit">
                <i class="glyphicon glyphicon-plus star-icon"></i> 关注他
            </button>
        </div>
    </div>

    <div class="panel panel-warning">
        <div class="panel-heading text-center">关于文章</div>
        <div class="panel-body">
            <table class="article-info">
                <tr class="article-info-data">
                    <td>180</td>
                    <td>8880</td>
                    <td>1111</td>
                </tr>
                <tr>
                    <td>点赞</td>
                    <td>浏览</td>
                    <td>评论</td>
                </tr>
            </table>
            <hr/>
            <button class="btn btn-default btn-block" type="submit">
                <i class="glyphicon glyphicon-star-empty star-icon"></i> 收藏该文章
            </button>
            <button class="btn btn-default btn-block" type="submit">
                <i class="glyphicon glyphicon-thumbs-up star-icon"></i> 点赞
            </button>

        </div>
    </div>
@endsection