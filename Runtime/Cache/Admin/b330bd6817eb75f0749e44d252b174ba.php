<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>H+ 后台主题UI框架 - 表单向导</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/yitian/Public/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/yitian/Public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/yitian/Public/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/yitian/Public/css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <link href="/yitian/Public/css/animate.min.css" rel="stylesheet">
    <link href="/yitian/Public/css/style.min.css?v=4.1.0" rel="stylesheet"><base target="_blank">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>添加用户</h5>
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
                        <h2>
                                添加用户向导
                            </h2>
                        <form id="form" action="<?php echo U('AddUser');?>" class="wizard-big" method="post" target="_self">
                            <h1>账户</h1>
                            <fieldset>
                                <h2>账户信息</h2>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label>用户名 *</label>
                                            <input id="userName" name="loginname" type="text" class="form-control required">
                                        </div>
                                        <div class="form-group">
                                            <label>密码 *</label>
                                            <input id="password" name="password" type="text" class="form-control required">
                                        </div>
                                        <div class="form-group">
                                            <label>确认密码 *</label>
                                            <input id="confirm" name="confirm" type="text" class="form-control required">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <div style="margin-top: 20px">
                                                <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>
                            <h1>个人资料</h1>
                            <fieldset>
                                <h2>个人资料信息</h2>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>姓名 *</label>
                                            <input id="name" name="real_name" type="text" class="form-control required">
                                        </div>
                                        <div class="form-group">
                                            头像:<input type="file" id="file1" name="HP" /><br />
                                            <input type="button" id="upload" value="上传" class="btn btn-primary">
                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email *</label>
                                            <input id="email" name="email" type="text" class="form-control required email">
                                        </div>
                                        <div class="form-group">
                                            <label>QQ号码</label>
                                            <input id="address" name="qqnumber" type="text" class="form-control">
                                        </div>
										<div class="form-group">
                                            <label>电话号码</label>
                                            <input id="address" name="phonenumber" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <h1>警告</h1>
                            <fieldset>
                                <div class="text-center" style="margin-top: 120px">
                                    <h2>你是火星人 :-)</h2>
                                </div>
                            </fieldset>

                            <h1>完成</h1>
                            <fieldset>
                                <h2>条款</h2>
                                <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                                <label for="acceptTerms">我同意注册条款</label>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="/yitian/Public/js/jquery.min.js?v=2.1.4"></script>
    <script src="/yitian/Public/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/yitian/Public/js/content.min.js?v=1.0.0"></script>
    <script src="/yitian/Public/js/plugins/staps/jquery.steps.min.js"></script>
    <script src="/yitian/Public/js/plugins/validate/jquery.validate.min.js"></script>
    <script src="/yitian/Public/js/plugins/validate/messages_zh.min.js"></script>
    <script>

        $(document).ready(function(){
            $("#wizard").steps();
            $("#form").steps({
                bodyTag:"fieldset",
                onStepChanging:function(event,currentIndex,newIndex){
                    if(currentIndex>newIndex){
                        return true
                    }if(newIndex===3&&Number($("#age").val())<18){
                        return false
                    }
                    var form=$(this);
                    if(currentIndex<newIndex){
                        $(".body:eq("+newIndex+") label.error",form).remove();$(".body:eq("+newIndex+") .error",form).removeClass("error")
                    }
                    form.validate().settings.ignore=":disabled,:hidden";
                    return form.valid()
                },

                onStepChanged:function(event,currentIndex,priorIndex){
                    if(currentIndex===2&&Number($("#age").val())>=18){
                        $(this).steps("next")
                    }if(currentIndex===2&&priorIndex===3){
                        $(this).steps("previous")
                    }
                        },

                onFinishing:function(event,currentIndex){
                    var form=$(this);
                    form.validate().settings.ignore=":disabled";
                    return form.valid()},

                onFinished:function(event,currentIndex){
                    var form=$(this);form.submit()
                }}).

            validate({errorPlacement:function(error,element){element.before(error)},rules:{confirm:{equalTo:"#password"}}})



        });
        $(function () {
            $("#upload").click(function () {
                var formData = new FormData();
                formData.append("file", document.getElementById("file1").files[0]);
                $.ajax({
                    url: "http://localhost/yitian/index.php/admin/upload/Uploadimg",
                    type: "POST",
                    data: formData,
                    /**
                     *必须false才会自动加上正确的Content-Type
                     */
                    contentType: false,
                    /**
                     * 必须false才会避开jQuery对 formdata 的默认处理
                     * XMLHttpRequest会对 formdata 进行正确的处理
                     */
                    processData: false,
                    success: function (data) {
                            if(data.success){
                                $("#file1").attr('type','text');
                                $("#file1").addClass('form-control');
                                $("#file1").val(data.file_path);
                                $("#upload").hide();
                            }


                    },
                    error: function () {
                        alert("上传失败！");
                        $("#imgWait").hide();
                    }
                });
            });
        });
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>

</html>