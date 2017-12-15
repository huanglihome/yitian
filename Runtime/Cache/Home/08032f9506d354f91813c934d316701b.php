<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0022)#/ -->
<!-- saved from url=(0022)#/ --><HTML><HEAD><META
        content="IE=5.0000" http-equiv="X-UA-Compatible">

    <META http-equiv="Content-Type" content="text/html; charset=utf-8">
    <TITLE>武汉汽车职教集团</TITLE>
    <META http-equiv="Content-Language" content="gb2312">
    <META name="author" content="">
    <META name="Copyright" content="">
    <META name="description" content="">
    <META name="keywords" content="民办教育,城市,本科,招考,就业,评论,bcu,民办教育">
    <META name="robots" content="index, follow">
    <META name="googlebot" content="index, follow">
    <SCRIPT language="JavaScript" src="/yitian/Public/js/search1.js" type="text/javascript"></SCRIPT>

    <SCRIPT language="JavaScript" src="/yitian/Public/js/jquery-1.6.1.min.js" type="text/javascript"></SCRIPT>
    <LINK href="/yitian/Public/css/style2011.css" rel="stylesheet"
          type="text/css">
    
    <STYLE type="text/css">
        <!--
        .STYLE2 {color: #26377f}
        .STYLE3 {
            color: #4C4C4C;
            font-weight: bold;
        }
        -->
    </STYLE>

    <STYLE>
        img{border:0px; }
        .talent{
            width: 220px;
            height: 31px;
            border-bottom: 1px solid #d5d2cd;
        }

        .placeholder {
            display:inline-block;
            width: 8px;
            height: 8px;
            margin-top: 15px;
            margin-left: 14px;
            background: #354482;
            font-family: '微软雅黑';
        }
        .more{
            display: inline-block;
            float: right;
            font-size: 8px;
            font-weight: normal;
            color: #878e98;
            margin-top: 8px;
            margin-right: 14px;
        }

        .talent a{
            margin-left: 15px;
            font-weight: 500;
            font-size: 14px;
            color: #222427;
        }
        .talent .more:hover{
            color: rgb(245, 97, 97);
            font-weight: 400;
        }
    </STYLE>

    <STYLE type="text/css">
        #focus {width:657px; height:320px; overflow:hidden; position:relative; margin:-1px 0; }
        #focus ul {height:320px; position:absolute;}
        #focus ul  a{width:657px; height:320px; overflow:hidden; position:relative; background:#000;}

        #focus .btnBg {position:absolute; width:196px; height:20px; left:390; bottom:0; background:#000; text-align:right; color:#FFF;}
        #focus .btn {position:absolute; width:auto; height:10px; margin-left:410px;margin-bottom:8px;_margin-bottom:3px;bottom:0;float:right; text-align:right; z-index:4}
        #focus .btn span {display:block;float:left; width:25px;height:15px; font-size:10px; text-align:center; margin-left:5px; cursor:pointer; background:black;line-height:12px;font-weight:bolder;font-size:13px;color:white;}
        .title{ float:right; margin-right:20px;}
        .red{ color:white;}
        .sm{ text-align:right;position:absolute; bottom:0; right:0; width:196px; height:20px; line-height:20px; z-index:3;}
    </STYLE>

    <SCRIPT type="text/javascript">
        $(function(){
            var sWidth=$("#focus").width();
            var sHeight = $("#focus").height();
            var len=$("#focus ul  a").length;
            var sWidth=$("#focus").width();
            var sm=$('<div cmsid="65284007"  class="sm"></div>');
            var index=0;
            var picTimer;
            var btn='<div cmsid="13012245"  class="btnBg"></div><div cmsid="13012245"  class="btn">';
            for(var i=0;i<len; i++){
                var ii=i+1;
                btn +="<span>"+ii+"</span>";
            }
            $("#focus").append(btn);
            $("#focus").append(sm);
            $("#focus .btnBg").css("opacity",0.3);
            $("#focus .btn span").css("opacity",0.4).mouseenter(function(){
                index = $("#focus .btn span").index(this);
                sh(index);//向上滚动则改为showTop,向左滚动则改为showLeft,渐隐渐现则为sh
            }).eq(0).trigger("mouseenter");
            $("#focus").hover(function(){
                clearInterval(picTimer);
            },function(){
                picTimer=setInterval(function(){
                    sh(index);//向上滚动则改为showTop,向左滚动则改为showLeft,渐隐渐现则为sh
                    index++;
                    if(index==len){index=0;}
                },5000)	//滚动间隔，数越大间隔越长
            }).trigger("mouseleave");


            function sh(index){
                $("#focus ul").css({"width":sWidth,"height":sHeight});
                var title=$("#focus img").eq(index).attr("title")
                $(".sm").empty();
                $(".sm").append(title)
                $("#focus ul a img").css({position:"absolute",top:0,left:0}).parent().eq(index).stop(true,true).animate({"opacity":1},2000).css({display:"block"}).siblings().stop(true,true).animate({"opacity":0.8},1000).css({display:"none"});
                $("#focus .btn span").stop(true,false).animate({"opacity":0.4},300).removeClass("red").eq(index).stop(true,false).animate({"opacity":0.8},300).addClass("red");

            }
            function showLeft(index){
                $("#focus ul").css("width",sWidth*len);
                var nowLeft=-index*sWidth;
                var title=$("#focus img").eq(index).attr("title")
                $("#focus .sm").empty();
                $("#focus .sm").append(title)
                $("#focus ul").stop(true,false).animate({"left":nowLeft},300);
                $("#focus .btn span").stop(true,false).animate({"opacity":0.4},300).removeClass("red").eq(index).stop(true,false).animate({"opacity":0.8},300).addClass("red");
            }
            function showTop(index) {
                $("#focus ul").css("height",sHeight*len);
                var nowTop = -index*sHeight;
                var title=$("img").eq(index).attr("title")
                $(".sm").empty();
                $(".sm").append(title)
                $("#focus ul").stop(true,false).animate({"top":nowTop},300);
                $("#focus .btn span").stop(true,false).animate({"opacity":"0.4"},300).removeClass("red").eq(index).stop(true,false).animate({"opacity":"1"},300).addClass("red");
            }
        })
    </SCRIPT>

    <META name="GENERATOR" content="MSHTML 11.00.9600.18817"></HEAD>
<BODY topmargin="0" leftmargin="0" bgcolor="#ffffff" marginheight="0"
      marginwidth="0"><!-- ImageReady Slices (index方案2psd.psd) -->
<META http-equiv="Content-Language" content="gb2312"><LINK href="/yitian/Public/css/16sucai_com.css"
                                                           rel="stylesheet" type="text/css">



<TABLE width="990" align="center" border="0" cellspacing="0" cellpadding="0">

    <TBODY>

    <SCRIPT src="/yitian/Public/js/jquery-1.4.2.js" type="text/javascript"></SCRIPT>

    <SCRIPT src="/yitian/Public/js/slide.js" type="text/javascript"></SCRIPT>
    
    <TR>
        <TD width="990"><!--<div cmsid="57727841"  style="width:100%;">
<iframe src="/jsp/login.jsp" frameborder=0 scrolling="no" style="width:100%;height:35px;border:0;"></iframe>
</div>
-->
            <TABLE width="990" align="center" border="0" cellspacing="0" cellpadding="0">
                <TBODY>
                <TR>
                    <TD><IMG width="990" src="/yitian/Public/img/h_01b.jpg"
                             border="0" usemap="#Map">
                    </TD></TR></TBODY></TABLE>
            <DIV id="menu" style="background-color:#2d3c7f;">
                <UL id="nav" >
                    <?php if(is_array($position['导航栏']['content'])): $i = 0; $__LIST__ = $position['导航栏']['content'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><LI class="mainlevel" id="mainlevel_01"><A href="<?php echo ($data["url"]); ?>"
                                                                   target="_self"><?php echo ($data["title"]); ?></A></LI><?php endforeach; endif; else: echo "" ;endif; ?>
                </UL></DIV>
        </TD></TR></TBODY></TABLE>



<!--文章内容-->


<TABLE width="963" align="center" border="0" cellspacing="0" cellpadding="0">
    <TBODY>
    <TR>
        <TD height="42" background="img/ejtop.gif"></TD></TR>
    <TR>
        <TD bgcolor="#ffffff">
            <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
                <TBODY>
                <TR>
                    <TD align="center">
                        <TABLE width="700" border="0" cellspacing="0" cellpadding="0">
                            <TBODY>
                            <TR>
                                <TD height="50" align="center"><A name="top" id="top"></A>
                                    <DIV id="title" cmsid="35947517">
                                        <P><?php echo ($articleinfo["title"]); ?></P></DIV></TD></TR>
                            <TR height="60" valign="top">
                                <TD align="center">
                                    <P style="margin-top: 5px;">发表时间：<?php echo ($articleinfo["create_time"]); ?><SPAN
                                            style="margin-left: 8px;">文章阅读数：</SPAN><FONT color="red"><SPAN
                                            id="readcount"></SPAN><?php echo ($articleinfo["count"]); ?>
                                        <!--<SCRIPT>-->
                                            <!--$.ajax({type:'post',url:'/doc/readCount.do?id=65141',timeout:2000,success:function(ret){$('#readcount').html($.trim(ret))},error:function(ret){$.ajax({type:'post',url:'/ecms_external?method=syncOfflineVisitCount',data:'type=doc&requestUrl='+location.href,timeout:2000,success:function(ret){$('#readcount').html(ret);},error:function(){$('#readcount').html(0);}});}});-->
                                        <!--</SCRIPT>-->
                                    </FONT></P></TD></TR>
                            <TR>
                                <TD class="toolBody" valign="top">
                                    <?php echo ($articleinfo["content"]); ?>
                                    </TD></TR>
                           </TBODY></TABLE><BR></TD></TR></TBODY></TABLE>


            <!--底部信息栏-->

            
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