<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0178)http://127.0.0.1:11696/%E6%A0%A1%E9%95%BF%E4%BF%A1%E7%AE%B1%20-%20%E6%B9%96%E5%8C%97%E5%B7%A5%E4%B8%9A%E5%A4%A7%E5%AD%A6%E5%B7%A5%E7%A8%8B%E6%8A%80%E6%9C%AF%E5%AD%A6%E9%99%A2.htm -->
<html data-brackets-id="1" lang="zh-cn"><head data-brackets-id="2"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta data-brackets-id="3" content="IE=11.0000" http-equiv="X-UA-Compatible">


    <meta data-brackets-id="5" http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta data-brackets-id="6" name="viewport" content="width=device-width, initial-scale=1">
    <meta data-brackets-id="7" name="renderer" content="webkit">
    <meta data-brackets-id="8" http-equiv="Cache-Control" content="no-transform">
    <meta data-brackets-id="9" http-equiv="Cache-Control" content="no-siteapp">
    <meta data-brackets-id="10" name="author" content="hsy">		 <title data-brackets-id="11">留言本 - 武汉汽车职教集团</title>
    <meta data-brackets-id="12" name="keywords" content="武汉汽车职教集团">
    <meta data-brackets-id="13" name="description" content="武汉汽车职教集团">
    <!--<link data-brackets-id="14" href="http://127.0.0.1:11696/favicon.ico" rel="icon" type="image/x-icon">		-->
    <!--<link data-brackets-id="15" href="http://127.0.0.1:11696/favicon.ico" rel="shortcut icon" type="image/x-icon">		 -->
    <!--<link data-brackets-id="16" href="http://127.0.0.1:11696/favicon.ico" rel="Bookmark" type="image/x-icon">-->
    <link data-brackets-id="17" href="/yitian/Public/css/flexslider.css" rel="stylesheet">
    <link data-brackets-id="18" href="/yitian/Public/css/bootstrap.css" rel="stylesheet">
    <link data-brackets-id="19" href="/yitian/Public/css/font-awesome.css" rel="stylesheet">
    <link data-brackets-id="20" href="/yitian/Public/css/animate.min.css" rel="stylesheet">
    <link data-brackets-id="21" href="/yitian/Public/css/style.css" rel="stylesheet">
    <link data-brackets-id="22" href="/yitian/Public/css/responsive.css" rel="stylesheet">
    <link data-brackets-id="22" href="/yitian/Public/css/16sucai_com.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="/yitian/Public/js/html5shiv.js"></script>
    <script src="/yitian/Public/js/respond.js"></script>
    <![endif]-->

    <script data-brackets-id="23" src="/yitian/Public/js/jquery.min.js" type="text/javascript"></script>

    <script data-brackets-id="24" src="/yitian/Public/js/jquery.flexslider.js" type="text/javascript"></script>

    <script data-brackets-id="25" src="/yitian/Public/js/bootstrap.min.js" type="text/javascript"></script>

    <script data-brackets-id="26" src="/yitian/Public/js/wow.js" type="text/javascript"></script>

    <script data-brackets-id="27" src="/yitian/Public/js/custom.js" type="text/javascript"></script>

    <meta data-brackets-id="28" name="GENERATOR" content="MSHTML 11.00.9600.18817"></head>
<body data-brackets-id="29">

<div class="row">
    <div class="col-md-1" style="background-color: #fff;"></div>
    <div class="col-md-10" style=" display: block;  margin-left: auto;  margin-right: auto;">
        <IMG src="/yitian/Public/img/h_01b.jpg"
             class="img-responsive" alt="Responsive image">
        </IMG>
    </div>
    <div class="col-md-1" style="background-color: #fff;"></div>
</div>


<div class="row">
    <div class="col-md-1" style="background-color: #fff;"></div>
    <?php if(is_array($position['导航栏']['content'])): $i = 0; $__LIST__ = $position['导航栏']['content'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="col-md-1"><a href="<?php echo ($data["url"]); ?>"><?php echo ($data["title"]); ?></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
    <div class="col-md-1" style="background-color: #fff;"></div>
</div>


<div data-brackets-id="30" class="page-wrapper">
    <script data-brackets-id="31" type="text/javascript">
        function clickButton() {
            if (event.keyCode == 13) {
                // document.getElementById("search_btn").click();
                return false;
            }
        }
        function checksf() {
            var flag = true;
            var key = document.getElementById("q").value.toLowerCase();
            if (key == "") {
                alert("输入你想查找的内容!");
                flag = false;
            }

            var sQuery = key.substring(key.indexOf("=") + 1);
            re = /select|update|delete|truncate|join|union|exec|insert|drop|count|’|"|;|>|<|%/i;
            if (re.test(sQuery)) {
                alert("请勿输入非法字符!");
                document.getElementById("q").value = "";
                flag = false;
            }

            if (flag)
                search_frm.submit();
            else
                return false;
        }
    </script>

    <div data-brackets-id="32" id="header"></div><!--头部图片-->
    <section data-brackets-id="213" id="conhead">
        <div data-brackets-id="214" class="bg-warper center-block">
        </div></section>

<!--内容部分-->		 <section data-brackets-id="222" class="content-con list-page p-tb-15">
    <div data-brackets-id="223" class="container">
        <div data-brackets-id="224" class="row">
            <div data-brackets-id="225" class="col-md-9 col-xs-12 m-b-20">
                <?php if(is_array($Leavinglist)): $i = 0; $__LIST__ = $Leavinglist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$leaving): $mod = ($i % 2 );++$i;?><div data-brackets-id="226" class="blog-post-item blog-y-bc">
                    <p data-brackets-id="227" class="b-p" style="word-wrap:break-word"><span data-brackets-id="228" class="label label-primary">主题：</span><?php echo ($leaving["title"]); ?></p>
                    <p data-brackets-id="229" class="b-p" style="word-wrap:break-word"><span data-brackets-id="230" class="label label-success">内容：</span>
                        <?php echo ($leaving["content"]); ?>
                    </p>
                    <p data-brackets-id="231" class="b-p m-b-20" style="word-wrap:break-word"><span data-brackets-id="232" class="label label-danger">回复：</span>
                        <?php echo ($leaving["answer"]); ?> </p>
                    <ul data-brackets-id="233" class="blog-post-info list-inline">
                        <li data-brackets-id="234"><a data-brackets-id="235"><i data-brackets-id="236" class="fa fa-clock-o"></i>										 <span data-brackets-id="237" class="font-lato"><?php echo ($leaving["create_time"]); ?></span></a>								 </li>
                        <li data-brackets-id="238"><a data-brackets-id="239"><i data-brackets-id="240" class="fa fa-user"></i>									  <span data-brackets-id="241" class="font-lato">姓名： <?php echo ($leaving["name"]); ?></span></a>								 </li></ul></div><?php endforeach; endif; else: echo "" ;endif; ?>

                <!--填表发布-->
                <div data-brackets-id="306" class="go-input"><button type="button" target="_self" data-toggle="modal" class="btn btn-sm btn-primary" href="#modal-form1"> <i data-brackets-id="308" class="fa fa-pencil-square-o">&nbsp;</i>点击这里留言</button>
                </div><!--页码-->
                <?php echo ($page); ?>
                </div>
            <div data-brackets-id="337" class="listcon kjtd col-md-3 col-xs-12">

                <div data-brackets-id="359" class="black-hr"><a data-brackets-id="360">
                    <h4 data-brackets-id="361">快捷通道</h4></a> </div>
                <div data-brackets-id="362" class="btn-item row p-tb-20">
                    <?php if(is_array($position['快速通道']['content'])): $i = 0; $__LIST__ = $position['快速通道']['content'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tongdao): $mod = ($i % 2 );++$i;?><div data-brackets-id="363" class="col-md-6 col-xs-3">
                        <div data-brackets-id="364" class="btn-box"><a data-brackets-id="365" href="<?php echo ($tongdao["url"]); ?>" target="_blank">
                            <p data-brackets-id="366"><i data-brackets-id="367" class="fa fa-ico01 fa-2x"></i></p>
                            <h5 data-brackets-id="368"><?php echo ($tongdao["title"]); ?></h5></a></div></div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div></div></div></div></section><!--内容下半部-->
</div>
<div id="modal-form1" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 b-r">
                        <h3 class="m-t-none m-b">留言</h3>

                        <p>发布留言</p>
                        <form role="form">
                            <input type="hidden" id="menuid" name="menuid">
                            <div class="form-group">
                                <label>名字：</label>
                                <input type="text" placeholder="请输入您的名字" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label>邮箱：</label>
                                <input type="email" placeholder="请输入邮箱" class="form-control" id="email" name="email" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" id="getcode" type="button"><strong>获取邮箱验证码</strong></button>
                            </div>
                            <div class="form-group">
                                <label>验证码：</label>
                                <input type="text" placeholder="请输入验证码" class="form-control" id="code" name="code">
                            </div>
                            <div class="form-group">
                                <label>主题：</label>
                                <input type="text" placeholder="请输入主题" class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group">
                                <label>内容：</label>
                                <input type="text" placeholder="请输入内容" class="form-control" id="content" name="content">
                            </div>
                            <div>
                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" id="leavingmsg" type="button"><strong>保存</strong>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
        $(function(){
            $("#getcode").click(function(){
                if($("#email").val() ==""){
                    alert("请先输入您的邮箱地址");
                }else{
                    var ischeck =  check($("#email").val());
                    if(ischeck){
                        $.post("http://localhost/yitian/index.php/leavingmsg/sendMail",{email:$("#email").val()},function(result){
                            if(result.status == 200){
                                alert("123");
                            }
                            console.log(JSON.stringify(result));
                        });
                        $("#getcode strong").text("一分钟后才重新可获取");
                        $("#getcode").attr("disabled",true);
                        setTimeout('$("#getcode").attr("disabled",true)',60000);
                    }
                    }
            })

            $("#leavingmsg").click(function(){
                $.post("http://localhost/yitian/index.php/leavingmsg/Leaving",$("form").serialize(),function(result){
                    if(result.status == 200){
                        alert(result.message);
                    }
                    $("#leavingmsg").attr("disabled",true);
                    //console.log(JSON.stringify(result));
                });
            })
        })
        function check( email_address )
        {
            var regex = /^([0-9A-Za-z\-_\.]+)@([0-9a-z]+\.[a-z]{2,3}(\.[a-z]{2})?)$/g;
            if ( regex.test( email_address ) )
            {
                return true;
            }
            else
            {
                window.alert( "您输入的电子邮件地址不合法" );
                return false;
            }
        }
    </script>

<TABLE width="963" align="center" border="0" cellspacing="0" cellpadding="0">
    <TBODY>
    <TR>
        <TD>
            <STYLE type="text/css">
                <!--
                .STYLE1 {color: #7c7c7c}
                -->
            </STYLE>

            <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
                <TBODY>
                <TR>
                    <TD width="438" style="color: rgb(124, 124, 124); font-size: 12px;">
                        <P>武汉市　邮编：430064<BR>Copyright  © 武汉城市职教集团<BR>
                            All Rights Reserved　　</P></TD>
                    <TD width="378"
                        style="color: rgb(124, 124, 124); font-size: 12px;">网站管理：网络中心
                        <BR>招生资讯：0027－81805555 　<BR>地址：武汉市洪山区野芷湖西路10号            </TD>

                    <TD width="144" align="right" valign="top"><IMG src="/yitian/Public/img/cr.jpg"></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
</BODY></HTML>