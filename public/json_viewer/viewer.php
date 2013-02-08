<?php
    include_once('JsonViewer.class.php');
    $viewer=new JsonViewer();
    $path=isset($_GET['url'])?trim($_GET['url']):"" ;
    $path=!empty($path)?$path:"mypage/index";
    $userid=isset($_GET['userid'])?$_GET['userid']:"";
    $userid = !empty($userid) ? $userid : 'json_viewer_user';
    $version=isset($_GET['version'])?$_GET['version']:"";
    $version=!empty($version)?$version:"1.3.0";
    $viewer->setModule($path);
    $viewer->setUserId($userid);
    $viewer->setVersion($version);
    $fullurl = $viewer->createURL(); // get the returned value from the createURL() function
    $fullurl = str_replace('localhost', $viewer->getHost(), $fullurl); // replaces the 'localhost' to $host value
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JSON VIEWER</title>
</head>

<body>
<form id="form1" name="form1" method="get" action="">
<table width="865" height="415" border="1" cellpadding="0" cellspacing="0" >
  <tr>
    <th height="31" colspan="3" scope="col" align="center">&nbsp;<b>JSON VIEWER</b></th>
  </tr>
  <tr>
    <td width="104" height="41" align="right" >Path: &nbsp;</td>
    <td width="786" colspan="2">
        &nbsp;<input type="text" name="url" id="url" size="100" value="<?=$path?>"/>
    </td>
  </tr>
  <tr>
    <td height="40" align="right">User ID:&nbsp;</td>
    <td colspan="2">
        &nbsp;<input type="text" name="userid" id="userid" size="100"  value="<?=$userid?>"/>
    </td>
  </tr>
 <tr>
    <td height="40" align="right">Version:&nbsp;</td>
    <td colspan="2">
        &nbsp;<input type="text" name="version" id="userid" size="100"  value="<?=$version?>"/>
    </td>
  </tr>
  <tr>
    <td height="40" align="right">URL:&nbsp;</td>
    <td colspan="2">
        &nbsp;<a href="<?=$fullurl?>" target="_blank"><?=$fullurl?></a>
    </td>
  </tr>
  <tr>
    <td height="36" colspan="3"> &nbsp; &nbsp;<input type="submit" name="submitn" id="button" value="Submit" /></td>
    </tr>
  <tr>
    <td colspan="3" align="center" style="border-bottom:none; border-right:none; border-left:none; border-top:none;">
    <?php
        if(!empty( $path )){
            echo $viewer->createTable();
        }
    ?>    
    </td>
  </tr>
</table>
</form>
</body>
</html>
