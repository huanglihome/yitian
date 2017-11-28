<?php
	function getJson($status,$message,$data = "",$url = ""){
		return array(
			'status' => $status,
			'message' => $message,
			'data' => $data,
			'url' => $url
		);
	}

    /*
     * 判断是否缺少必填字段
     * $array:传数据
     * $requiredFields:必填数据集合
     * */
	function hasRequired($array,$requiredFields){
	    $key = array_keys($array);
       // dump($key);
        $requirekey = array_keys($requiredFields);
	    foreach($requirekey as $fieldName){
	        if(!in_array($fieldName,$key) || empty($array[$fieldName])){
	            return $requiredFields[$fieldName];
            }
        }
        return true;
    }

    /*
     * 获取数据
     * $getorpost:传数据
     * $wantdata:数据集合
     * */
    function getdata($getorpost,$wantdata,$others){
        $keys = array_keys($getorpost);
        $wantdatakeys = array_keys($wantdata);
        foreach($keys as $key){
            if(in_array($key,$wantdatakeys) && !empty($getorpost[$key])) {
                $data[$wantdata[$key]] = $getorpost[$key];
            }
        }
        if(is_array($others)){
        foreach ($others as $other){
            if($other == "status"){
                $data[$other] = 1;
            }
            if($other == "create_time" || $other == "update_time"){
                $data[$other] = date("Y-m-d H:i:s");
            }
        }}
        return $data;
    }



/**
 * Thinkphp默认分页样式转Bootstrap分页样式
 * @author H.Y.H
 * @param string $page_html tp默认输出的分页html代码
 * @return string 新的分页html代码
 */
function bootstrap_page_style($page_html){
    if ($page_html) {
        $page_show = str_replace('<div>','<nav><ul class="pagination">',$page_html);
        $page_show = str_replace('</div>','</ul></nav>',$page_show);
        $page_show = str_replace('<span class="current">','<li class="active"><a>',$page_show);
        $page_show = str_replace('</span>','</a></li>',$page_show);
        $page_show = str_replace(array('<a class="num"','<a class="prev"','<a class="next"','<a class="end"','<a class="first"'),'<li><a target="_self" ',$page_show);
        $page_show = str_replace('</a>','</a></li>',$page_show);
    }
    return $page_show;
}

//function sendMail($to,$title,$content){
//    require "class.phpmailer.php";
//    require "class.smtp.php";
//    try {
//        date_default_timezone_set("Asia/Shanghai");//设定时区东八区
//        $mail             = new PHPMailer(); //new一个PHPMailer对象出来
//        // $body             = preg_replace("[\]",'',$body); //对邮件内容进行必要的过滤
//        $mail->CharSet ="UTF-8";//设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
//        $mail->IsSMTP(); // 设定使用SMTP服务
//        $mail->SMTPDebug  = 1;                     //
//        $mail->SMTPAuth   = true;                  // 启用 SMTP 验证功能
//        //$mail->SMTPSecure = "ssl";                 // 安全协议
//        $mail->Host       = "smtp.163.com";      // SMTP 服务器
//        $mail->Port       = 25;                   // SMTP服务器的端口号
//        $mail->Username   = "13147193673@163.com";  // SMTP服务器用户名
//        $mail->Password   = "smtp163";            // SMTP服务器密码
//        $mail->SetFrom('13147193673@163.com', '湖工工程院长信箱验证');
//        $mail->AddReplyTo("13147193673@163.com","湖工工程院长信箱验证");
//        $mail->Subject    = $subject;
//        $mail->AltBody    = ""; // optional, comment out and test
//        $mail->MsgHTML($body);
//        $address = $to;
//        $mail->AddAddress($address, "收件人名称");
//        $mail->Send();
//        echo '邮件已发送';
//    } catch (phpmailerException $e) {
//        echo "邮件发送失败：" . $e->errorMessage();
//    }
//}
function sendmail($to,$subject = "",$body = ""){
    try {
    date_default_timezone_set("Asia/Shanghai");//设定时区东八区
    require "class.phpmailer.php";
    require "class.smtp.php";
    $mail             = new PHPMailer(); //new一个PHPMailer对象出来
    // $body             = preg_replace("[\]",'',$body); //对邮件内容进行必要的过滤
    $mail->CharSet ="UTF-8";//设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
    $mail->IsSMTP(); // 设定使用SMTP服务
    $mail->SMTPDebug  = 1;                     //
    $mail->SMTPAuth   = true;                  // 启用 SMTP 验证功能
    //$mail->SMTPSecure = "ssl";                 // 安全协议
    $mail->Host       = "smtp.163.com";      // SMTP 服务器
    $mail->Port       = 25;                   // SMTP服务器的端口号
    $mail->Username   = "13147193673@163.com";  // SMTP服务器用户名
    $mail->Password   = "smtp163";            // SMTP服务器密码
    $mail->SetFrom('13147193673@163.com', '湖工工程院长信箱验证');
    $mail->AddReplyTo("13147193673@163.com","湖工工程院长信箱验证");
    $mail->Subject    = $subject;
    $mail->AltBody    = ""; // optional, comment out and test
    $mail->MsgHTML($body);
    $address = $to;
    $mail->AddAddress($address, "收件人名称");
    $mail->Send();
        return '邮件已发送';
    } catch (phpmailerException $e) {
        return "邮件发送失败：" . $e->errorMessage();
    }
}

function setPage($Page){
    $Page->setConfig('header', '<li><span class="rows">共 %TOTAL_ROW% 条记录</span></li>');
    $Page->setConfig('prev', '上一页');
    $Page->setConfig('next', '下一页');
    $Page->setConfig('first', '首页');
    $Page->setConfig('last', '末页');
    $Page->setConfig('theme', '%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
    return $Page;
}
