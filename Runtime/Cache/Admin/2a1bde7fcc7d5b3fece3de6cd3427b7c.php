<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>文章修改</title>
    <meta name="keywords" content="<?php echo F('WEB_NAME');?>后台">
    <meta name="description" content="<?php echo F('WEB_NAME');?>后台是由逸天科技的faling研发">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/yitian/Public/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/yitian/Public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/yitian/Public/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/yitian/Public/css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <link href="/yitian/Public/css/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/yitian/Public/css/plugins/simditor/simditor.css" />
    <link href="/yitian/Public/css/style.min.css?v=4.1.0" rel="stylesheet"><base target="_blank">

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>修改文章</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form class="form-horizontal" action="<?php echo U('changNew');?>" method="post" target="_self">
                        <input hidden name="authord" value="hantao">
                        <input hidden name="newsid" value="<?php echo ($articleinfo["news_id"]); ?>">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">标题</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" value="<?php echo ($articleinfo["title"]); ?>">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">副标题</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="smalltitle" value="<?php echo ($articleinfo["small_title"]); ?>">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">关键字</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="key" value="<?php echo ($articleinfo["keywords"]); ?>">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">描述</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="description" value="<?php echo ($articleinfo["description"]); ?>"> <span class="help-block m-b-none">帮助文本，可能会超过一行，以块级元素显示</span>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">来源</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="copyform" value="<?php echo ($articleinfo["copyfrom"]); ?>">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">所属分类</label>

                            <div class="col-sm-10">
                                <select class="form-control m-b" name="menuid" value="<?php echo ($articleinfo["menu_id"]); ?>">
                                    <?php if(is_array($menulist)): $i = 0; $__LIST__ = $menulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><option value="<?php echo ($menu["menu_id"]); ?>"><?php echo ($menu["menu_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>>
                                </select>

                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">内容</label>

                            <div class="col-sm-10">
                                 <textarea id="editor" placeholder="这里输入内容" autofocus name="content">
                                     <?php echo ($articleinfo["content"]); ?>
                                </textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" type="submit">保存</button>
                                <button class="btn btn-white" type="reset">取消</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="/yitian/Public/js/jquery.min.js?v=2.1.4"></script>
<script src="/yitian/Public/js/bootstrap.min.js?v=3.3.5"></script>
<script src="/yitian/Public/js/content.min.js?v=1.0.0"></script>
<script type="text/javascript" src="/yitian/Public/js/plugins/simditor/module.js"></script>
<script type="text/javascript" src="/yitian/Public/js/plugins/simditor/uploader.js"></script>
<script type="text/javascript" src="/yitian/Public/js/plugins/simditor/hotkeys.js"></script>
<script type="text/javascript" src="/yitian/Public/js/plugins/simditor/simditor.js"></script>
<script>
    //  $(document).ready(function(){var editor=new Simditor({textarea:$("#editor"),defaultImage:"img/a9.jpg",upload: true})});
    $(function(){
        toolbar = [ 'title', 'bold', 'italic', 'underline', 'strikethrough',
            'color', '|', 'ol', 'ul', 'blockquote', 'code', 'table', '|',
            'link', 'image', 'hr', '|', 'indent', 'outdent' ];
        var editor = new Simditor( {
            textarea : $('#editor'),
            placeholder : '这里输入内容...',
            toolbar : toolbar,  //工具栏
            defaultImage : 'simditor-2.0.1/images/image.png', //编辑器插入图片时使用的默认图片
            upload : {
                url : 'http://localhost/yitian/index.php/admin/upload/kindUpload', //文件上传的接口地址
                params: null, //键值对,指定文件上传接口的额外参数,上传的时候随文件一起提交
                fileKey: 'files', //服务器端获取文件数据的参数名
                connectionCount: 3,
                leaveConfirm: '正在上传文件'
            }
        });
    })
</script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>

</html>