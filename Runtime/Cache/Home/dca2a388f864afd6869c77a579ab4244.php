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
    <link href="/yitian/Public/css/bootstrap.min.css" rel="stylesheet">
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
            <!--头部部分-->

            <!--<TABLE width="990" align="center" border="0" cellspacing="0" cellpadding="0">-->
                <!--<TBODY>-->
                <!--<TR>-->
                    <!--<TD><IMG width="990" src="/yitian/Public/img/h_01b.jpg"-->
                             <!--border="0" usemap="#Map">-->
                    <!--</TD></TR></TBODY></TABLE>-->
            <!--<DIV id="menu" style="background-color:#2d3c7f;">-->
                <!--<UL id="nav" >-->
                    <!--<?php if(is_array($position['导航栏']['content'])): $i = 0; $__LIST__ = $position['导航栏']['content'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>-->
                    <!--<LI class="mainlevel" id="mainlevel_01"><A href="<?php echo ($data["url"]); ?>"-->
                                                               <!--target="_self"><?php echo ($data["title"]); ?></A></LI>-->
                    <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                <!--</UL></DIV>-->




            <!--轮播以及侧边栏-->


            <TABLE width="963" align="center" bgcolor="#ffffff" border="0" cellspacing="0"
                   cellpadding="0">
                <TBODY>
                <TR>
                    <TD width="657" style="font-size: 0px;">
                        <DIV id="focus" style="float: left;" cmsid="17431099" offsetheight="0">
                            <UL>
                                <!--绑定栏目编码，读取文章的主题图-->

                               <?php if(is_array($position['轮播图']['content'])): $i = 0; $__LIST__ = $position['轮播图']['content'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><A href="<?php echo ($data["url"]); ?>"><IMG width="657" height="320" src="http://localhost/yitian<?php echo ($data["thumb"]); ?>" border="0"></A><?php endforeach; endif; else: echo "" ;endif; ?>
                            </UL></DIV></TD>



                    <TD align="center" valign="baseline">
                        <TABLE width="299" height="326" id="tableinner" border="0" cellspacing="0"
                               cellpadding="0">
                            <TBODY>
                            <div class="talent" style="width: 290px;">
                                <div class="placeholder" style="margin-left: -135px;"></div>
                                <a>集团资讯</a>
                                <span class="more"><a href="http://localhost/yitian/index.php/home/index/cat/catid/<?php echo ($article['集团资讯']['id']); ?>">
                                    更多&gt;</a>
            </span>
                            </div>
                            <TR>
                                <TD width="299" height="120" background="/yitian/Public/img/indexnew_020.png"
                                    style="padding-left: 10px;">
                                    <!--<SCRIPT src="js/shouye2011gg.asp" type="text/javascript"></SCRIPT>-->

                                    <TABLE width="280" align="left" class="t5" border="0" cellspacing="0"
                                           cellpadding="0">
                                        <TBODY>

                                        <?php if(is_array($article['集团资讯']['content'])): $i = 0; $__LIST__ = array_slice($article['集团资讯']['content'],0,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?><TR>
                                            <TD width="12" height="18" align="center"><IMG src="/yitian/Public/img/x.gif">
                                            </TD>
                                            <TD height="21" class="gg"><A title="" href="http://localhost/yitian/index.php/home/index/detail/newsid/<?php echo ($news["news_id"]); ?>"
                                                                          target="_self"><?php echo ($news["title"]); ?>...</A></TD></TR><?php endforeach; endif; else: echo "" ;endif; ?>

                                      </TBODY>
                                    </TABLE></TD></TR>



                            <TR>
                                <TD><IMG width="299" alt="" src="/yitian/Public/img/c1_06.gif"></TD></TR>
                            <TR>
                                <TD width="299" height="51" background="/yitian/Public/img/indexnew_06.png">


                                    <STYLE type="text/css">
                                        <!--
                                        body {
                                            margin-left: 0px;
                                            margin-top: 0px;
                                            margin-right: 0px;
                                            margin-bottom: 0px;
                                        }
                                        -->
                                    </STYLE>
                                    <TABLE width="300" height="30" border="0" cellspacing="2"
                                           cellpadding="0">
                                        <TBODY>

                                        <TR>
                                            <?php if(is_array($position['快速通道']['content'])): $i = 0; $__LIST__ = array_slice($position['快速通道']['content'],0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tongdao): $mod = ($i % 2 );++$i;?><TD class="tdborder">
                                                <DIV align="center" cmsid="68404189"><A class="l1" href="<?php echo ($tongdao["url"]); ?>"
                                                                                        target="_self"><?php echo ($tongdao["title"]); ?></A></DIV></TD><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </TR>
                                        <TR>
                                            <?php if(is_array($position['快速通道']['content'])): $i = 0; $__LIST__ = array_slice($position['快速通道']['content'],3,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tongdao): $mod = ($i % 2 );++$i;?><TD class="tdborder">
                                                    <DIV align="center" cmsid="68404189"><A class="l1" href="<?php echo ($tongdao["url"]); ?>"
                                                                                            target="_self"><?php echo ($tongdao["title"]); ?></A></DIV></TD><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </TR>

                                       </TBODY></TABLE>
                            <TR>
                                <TD><IMG width="299" alt="" src="/yitian/Public/img/c1_06.gif"></TD></TR>

                            <TR>
                                <TD width="299" height="31" background="/yitian/Public/img/indexnew_07.jpg"
                                    style="padding-left: 16px;">
                                    <FORM action="/html/search.html" method="get"><LABEL><INPUT name="keyword" class="word" id="qText" onfocus="this.value=''" onblur="if(this.value==''){this.value='查询关键字';}" type="text" size="28" value="站内搜索">
                                        <INPUT name="searchType" type="hidden" value="2">
                                        <INPUT name="Submit" width="20" class="smallInput1" type="submit" value="搜索">
                                    </LABEL></FORM></TD></TR></TBODY></TABLE>
                    </TD></TR></TBODY></TABLE>




            <!--下半部分，人才培养，学校新闻，校园动态-->

            <TABLE width="963" align="center" style="border: 1px solid rgb(229, 224, 205);"
                   border="0" cellspacing="0" cellpadding="0">
                <TBODY>
                <TR>
                    <TD width="657" valign="top">
                        <TABLE width="657" bgcolor="#f2f0e8" border="0" cellspacing="0"
                               cellpadding="0">
                            <TBODY>
                            <TR>
                                <TD width="230" valign="top">
                                    <TABLE width="230" border="0" cellspacing="0" cellpadding="0">
                                        <TBODY>
                                        <div class="talent">
                                            <div class="placeholder"></div>
                                            <a>人才培养</a>
                                            <span class="more"><a href="http://localhost/yitian/index.php/home/index/cat/catid/<?php echo ($article['人才培养']['id']); ?>">
                                    更多&gt;</a>
            </span>
                                        </div>
                                        <TR>
                                            <TD height="70" valign="top">
                                                <TABLE width="100%" height="11" border="0" cellspacing="0"
                                                       cellpadding="0">
                                                    <TBODY>

                                                    <?php if(is_array($article['人才培养']['content'])): $i = 0; $__LIST__ = array_slice($article['人才培养']['content'],0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?><TR>
                                                        <TD width="27" height="25" align="center"><IMG src="/yitian/Public/img/x.gif">
                                                        </TD>
                                                        <TD height="25"><A title="" href="http://localhost/yitian/index.php/home/index/detail/newsid/<?php echo ($news["news_id"]); ?>"
                                                                           target="_self"><?php echo ($news["title"]); ?>...</A></TD></TR><?php endforeach; endif; else: echo "" ;endif; ?>

                                                 </TBODY></TABLE></TD></TR>
                                        <TR>
                                            <TD><IMG width="230" height="44" alt="" src="/yitian/Public/img/c1_11.gif"></TD></TR>
                                        <TR>
                                            <TD height="98" align="center">
                                                <TABLE width="83%" height="110" border="0" cellspacing="0"
                                                       cellpadding="0">
                                                    <TBODY>
                                                    <TR>
                                                        <TD><IMG width="5" height="8" src="/yitian/Public/img/arrow.jpg"><A
                                                                class="l" href="#"
                                                                target="_blank"> 办学成果展</A></TD>
                                                        <TD><IMG width="5" height="8" src="/yitian/Public/img/arrow.jpg"><A
                                                                class="l" href="#"
                                                                target="_blank"> 优秀学子</A></TD></TR>

                                                        <TD><IMG src="/yitian/Public/img/arrow.jpg">
                                                            <A class="l" href="#"
                                                               target="_blank">名师风采</A></TD>
                                                        <TD><IMG width="5" height="8" src="/yitian/Public/img/arrow.jpg"><A
                                                                class="l" href="#"
                                                                target="_blank"> 校友之星</A></TD>
                                                    <TR>
                                                        <TD><IMG width="5" height="8" src="/yitian/Public/img/arrow.jpg"><A
                                                                class="l" href="#"
                                                                target="_blank"> 名人大讲堂</A></TD>
                                                        <TD><IMG width="5" height="8" src="/yitian/Public/img/arrow.jpg"><A
                                                                class="l" href="#"
                                                                target="_blank"> 校园专题</A></TD></TR>
                                                    <TR>
                                                        <TD><IMG width="5" height="8" src="/yitian/Public/img/arrow.jpg"><A
                                                                class="l" href="#"
                                                                target="_blank"> 校园文化</A></TD>
                                                        <TD><IMG width="5" height="8" src="/yitian/Public/img/arrow.jpg"><A
                                                                class="l" href="#"
                                                                target="_blank"> 媒体报道</A> </TD></TR></TBODY></TABLE></TD></TR>
                                        </TBODY>
                                    </TABLE>
                                </TD>
                                <TD valign="top">
                                    <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <TBODY>
                                        <div class="talent" style="width: 420px;">
                                            <div class="placeholder"></div>
                                            <a>学校新闻</a>
                                            <span class="more"><a href="http://localhost/yitian/index.php/home/index/cat/catid/<?php echo ($article['学校新闻']['id']); ?>">
                                    更多&gt;</a>
            </span>
                                        </div>
                                        <?php if(is_array($article['学校新闻']['content'])): $i = 0; $__LIST__ = array_slice($article['学校新闻']['content'],0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?><TR>
                                            <TD align="center" style="padding-top: 10px;">
                                                <TABLE width="400" height="100" border="0" cellspacing="0"
                                                       cellpadding="0">
                                                    <TBODY>
                                                    <TR>
                                                        <TD width="160" align="center" valign="top">
                                                            <TABLE border="0" cellspacing="0" cellpadding="0">
                                                                <TBODY>
                                                                <TR>
                                                                    <TD height="5"></TD></TR>
                                                                <TR>
                                                                    <TD width="137" align="center" valign="top"><A
                                                                            href="http://localhost/yitian/index.php/home/index/detail/newsid/<?php echo ($news["news_id"]); ?>"
                                                                            target="_self"><IMG width="137" height="93" src="http://localhost/yitian<?php echo ($news["thumb"]); ?>"
                                                                                                 border="0"></A><A href="#/adt/pnews.asp?id=1609"
                                                                                                                   target="_self"></A></TD></TR></TBODY></TABLE></TD>
                                                        <TD align="left">
                                                            <TABLE width="235" border="0" cellspacing="0"
                                                                   cellpadding="0">
                                                                <TBODY>
                                                                <TR>
                                                                    <TD height="20">&nbsp;<IMG alt="" src="/yitian/Public/img/x.gif"><SPAN
                                                                            class="STYLE3"><?php echo ($news["title"]); ?>...</SPAN></TD></TR>
                                                                <TR>
                                                                    <TD height="35" valign="top"><A href="http://localhost/yitian/index.php/home/index/detail/newsid/<?php echo ($news["news_id"]); ?>"
                                                                                                    target="_self">　　<?php echo ($news["description"]); ?>...</A></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR><?php endforeach; endif; else: echo "" ;endif; ?>
                                        <TR>
                                            <TD align="center">
                                                <TABLE width="392">
                                                    <TBODY>
                                                    <?php if(is_array($article['学校新闻']['content'])): $i = 0; $__LIST__ = array_slice($article['学校新闻']['content'],1,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?><TR>
                                                        <TD width="12" height="19" align="center"><IMG src="/yitian/Public/img/x.gif"></TD>
                                                        <TD height="20"><A href="http://localhost/yitian/index.php/home/index/detail/newsid/<?php echo ($news["news_id"]); ?>"
                                                                           target="_self"><?php echo ($news["title"]); ?>......</A></TD>
                                                        <TD></TD></TR><?php endforeach; endif; else: echo "" ;endif; ?>
                                                   </TBODY></TABLE></TD></TR>
                                        <TR>
                                            <TD>&nbsp;</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD>
                    <TD valign="top" bgcolor="#f2f0e8">
                        <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
                            <TBODY>

                            <div class="talent" style="width: 305px;margin-left: 15px;">
                                <div class="placeholder"></div>
                                <a>校园动态</a>
                                <span class="more"><a href="http://localhost/yitian/index.php/home/index/cat/catid/<?php echo ($article['校园动态']['id']); ?>">
                                    更多&gt;</a>
            </span>
                            </div>
                            <TR>
                                <TD height="10" class="mytd1">
                                    <TABLE width="280" align="left" class="t5" border="0" cellspacing="0"
                                           cellpadding="0">
                                        <TBODY>
                                        <?php if(is_array($article['学校新闻']['content'])): $i = 0; $__LIST__ = array_slice($article['学校新闻']['content'],0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?><TR>
                                            <TD width="12" height="19" align="center"><IMG src="/yitian/Public/img/x.gif">
                                            </TD>
                                            <TD height="25" class="gg"><A title="<?php echo ($news["title"]); ?>"
                                                                          href="http://localhost/yitian/index.php/home/index/detail/newsid/<?php echo ($news["news_id"]); ?>"
                                                                          target="_self"><?php echo ($news["title"]); ?>...</A></TD></TR><?php endforeach; endif; else: echo "" ;endif; ?>
                                      </TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>




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