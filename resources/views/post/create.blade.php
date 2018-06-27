<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>写博客</title>
    <link rel="stylesheet" type="text/css" href="/bootstrap-3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="/editor/css/editormd.min.css"/>
    <link rel="stylesheet" href="/select2/select2.min.css" />
    <style type="text/css">
      .editormd-fullscreen {
            top: 40px;
        }
        .create-title{

        }
    </style>
</head>
<body>
<form method="POST" action="">
  

    <table>
      <tr>
        <td><input type="text" class="create-title" id="title" placeholder="文章标题"></td>
        <td>
          <input type="text" class="create-title" id="title" placeholder="文章标题">
        </td>
      </tr>
    </table>
      
    </div>
    <div class="editormd editormd-fullscreen" id="test-editormd">
      <textarea class="editormd-markdown-textarea" name="test-editormd-markdown-doc"></textarea>
      <!-- 第二个隐藏文本域，用来构造生成的HTML代码，方便表单POST提交，这里的name可以任意取，后台接受时以这个name键为准 -->
      <textarea class="editormd-html-textarea" name="text">哈哈</textarea>
    </div>
 </form>   
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/bootstrap-3.3.7/js/bootstrap.js"></script>
    <script type="text/javascript" src="/select2/js/select2.min.js"></script>
    <script src="/editor/editormd.min.js"></script>

    <script type="text/javascript">
       $(function() {
          editormd("test-editormd", {
              width   : "100%",
              
              syncScrolling : "single",
              //你的lib目录的路径，我这边用JSP做测试的
              path    : "/editor/lib/",
              //这个配置在simple.html中并没有，但是为了能够提交表单，使用这个配置可以让构造出来的HTML代码直接在第二个隐藏的textarea域中，方便post提交表单。
              saveHTMLToTextarea : true,
              tocm: true,
              markdown : 'md',

              // 上传图片
              imageUpload : true,
              imageFormats : ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
              imageUploadURL : "/uploadfile",
              theme : "dark",
              editorTheme : "pastel-on-dark",
              codeFold : true,
              htmlDecode : "style,script,iframe|on*",// 开启 HTML 
          });
      });
        
    </script>
</body>
</html>