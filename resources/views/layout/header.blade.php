<div class="header-box">
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <span class="nav-content-box">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo-color" href="#">技术博客</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <span class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{asset('posts')}}">首页 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">文章列表</a></li>
                    <li><a href="{{asset('posts/create')}}">写博客</a></li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon2">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                    </div>
                    {{--<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>--}}
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class="navbar-brand">
                        <img alt="Brand" src="/images/chat.png" width="36">
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            admin <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">我的主页</a></li>
                            <li><a href="#">个人设置</a></li>
                            <li><a href="#">我的收藏</a></li>
                            <li><a href="#">消息通知 <span class="badge">4</span></a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><span class="glyphicon glyphicon-off"></span> 退出</a></li>
                        </ul>
                    </li>
                </ul>
            </span><!-- /.navbar-collapse -->
        </div>
    </div><!-- /.container-fluid -->
</nav>
</div>