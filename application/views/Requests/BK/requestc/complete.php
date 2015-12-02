<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>大商さまOEMプランお申込ページ | チロロネット</title>
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css">
</head>

<body>
<table width="920" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td><img src="<?php echo base_url();?>img/logo.gif" width="361" height="34" /></td>
  </tr>
  <tr>
    <td><hr /></td>
  </tr>
  <tr>
    <td><strong>■大阪商工会議所さまOEMプランのお申込（完了）</strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>ありがとうございました。お申し込みを受付いたしました。</td>
  </tr>
  <tr>
    <td><table width="100%" border="1" cellspacing="0" cellpadding="5">
      <tr>
        <td width="20%" class="col3">ドメイン名</td>
        <td class="eng"><?php echo $data['domain_name']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">開通希望日</td>
        <td><?php echo $data['start_year'] .'年'; echo $data['start_month'].'月' ;echo $data['start_day'].'日'; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">プラン名</td>
        <td><font color="#ca66ff"><?php echo $data['dns']; ?></font></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">[ <a href="<?php echo base_url();?>index.php/request/kaigisho-dt">HOMEへ戻る</a> ]</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
