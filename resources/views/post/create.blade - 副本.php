@extends('layout.index')

@section('title', '写博客')

@section('css')
<link rel="stylesheet" href="/editor/css/editormd.css"/>
    <style type="text/css">

    </style>
@endsection

@section('content')

<div id="my-editormd" >
<textarea id="my-editormd-markdown-doc" name="my-editormd-markdown-doc" style="display:none;"></textarea>
<!-- 注意：name属性的值-->
<textarea id="my-editormd-html-code" name="my-editormd-html-code" style="display:none;"></textarea>
</div>

    <!-- <div class="panel panel-default article-panel">
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
    </div> -->

   
@endsection

@section('js')

<script src="/editor/editormd.min.js"></script>

<script type="text/javascript">
  $(function() {
      editormd("my-editormd", {//注意1：这里的就是上面的DIV的id属性值
          width   : "90%",
          height  : 640,
          syncScrolling : "single",
          path    : "/editor/lib/",//注意2：你的路径
          saveHTMLToTextarea : true//注意3：这个配置，方便post提交表单
      });
  });
</script>

@endsection
