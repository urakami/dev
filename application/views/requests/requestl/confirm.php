<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>大商さまOEMプランお申込ページ | チロロネット</title>
<link rel="stylesheet" href="<?php echo base_url();?>../css/style.css" type="text/css">
</head>

<body>
<table width="920" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td><img src="<?php echo base_url();?>../img/logo.gif" width="361" height="34" /></td>
  </tr>
  <tr>
    <td><hr /></td>
  </tr>
  <tr>
    <td><strong>■大阪商工会議所さまOEMプランのお申込（確認）</strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100%" border="1" cellspacing="0" cellpadding="5">
      <tr>
        <td width="20%" class="col3">ドメイン名 <span class="caution">[*]</span></td>
        <td class="eng"><?php echo $data['domain_name']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">DNS</td>
        <td><?php echo $data['dns']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">開通希望日 <span class="caution">[*]</span></td>
        <td> <?php echo $data['start_year'] .'年'; echo $data['start_month'].'月' ;echo $data['start_day'].'日'; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">プラン名</td>
        <td><font color="#ca66ff"><?php echo $data['plan_name']; ?></font></td>
      </tr>
      <tr>
        <td width="20%" class="col3">ディスク容量</td>
        <td><?php echo $data['disk_space']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">保証メモリ</td>
        <td><?php echo $data['guarantee_memory']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">最大メモリ</td>
        <td><?php echo $data['max_memory']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">プロセス数上限</td>
        <td><?php echo $data['limit_memory']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">管理ツール</td>
        <td><?php echo $data['manager']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">外部バックアップ</td>
        <td><?php echo $data['op_backup']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">ファイアウォール</td>
        <td><?php echo $data['op_firewall']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">SSL証明書</td>
        <td><?php echo $data['ssl']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">IPアドレス</td>
        <td><?php echo $data['IP_address']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">OS</td>
        <td><?php echo $data['OS']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">Apache</td>
        <td><?php echo $data['Apache']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">PHP</td>
        <td><?php echo $data['PHP']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">MySQL</td>
        <td><?php echo $data['mysql']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">PostgreSQL</td>
        <td><?php echo $data['postgresql']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">Mail</td>
        <td><?php echo $data['MTA']; ?></td>
      </tr>
      <tr>
        <td width="20%" rowspan="7" class="col3">アクセス許可制限</td>
        <td><?php echo !empty($data['access_limit_01']) ? $data['access_limit_01'] : '&nbsp;'; ?></td>
      </tr>
      <tr>
        <td><?php echo !empty($data['access_limit_02']) ? $data['access_limit_02'] : '&nbsp;'; ?></td>
      </tr>
      <tr>
        <td><?php echo !empty($data['access_limit_03']) ? $data['access_limit_03'] : '&nbsp;'; ?></td>
      </tr>
      <tr>
        <td><?php echo !empty($data['access_limit_04']) ? $data['access_limit_04'] : '&nbsp;'; ?></td>
      </tr>
      <tr>
        <td><?php echo !empty($data['access_limit_05']) ? $data['access_limit_05'] : '&nbsp;'; ?></td>
      </tr>
      <tr>
        <td><?php echo !empty($data['access_limit_06']) ? $data['access_limit_06'] : '&nbsp;'; ?></td>
      </tr>
      <tr>
        <td><?php echo !empty($data['access_limit_07']) ? $data['access_limit_07'] : '&nbsp;'; ?></td>
      </tr>
      <tr>
        <td colspan="2" class="col2">▼ご利用者情報</td>
        </tr>
      <tr>
        <td width="20%" class="col3">企業名 <span class="caution">[*]</span></td>
        <td><?php echo $data['company_name']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">企業名（よみ） <span class="caution">[*]</span></td>
        <td><?php echo $data['company_name_yomi']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">郵便番号 <span class="caution">[*]</span></td>
        <td><?php echo $data['zip_03']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">住所 <span class="caution">[*]</span></td>
        <td><?php echo $data['zip_04']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">部署名</td>
        <td><?php echo $data['address']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">役職名</td>
        <td><?php echo $data['division']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">担当者名 <span class="caution">[*]</span></td>
        <td><?php echo $data['title']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">担当者名（よみ） <span class="caution">[*]</span></td>
        <td><?php echo $data['person_name']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">TEL <span class="caution">[*]</span></td>
        <td><?php echo $data['tel']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">FAX</td>
        <td><?php echo $data['fax']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">メール <span class="caution">[*]</span></td>
        <td class="eng"><?php echo $data['email']; ?></td>
      </tr>
      <tr>
        <td colspan="2" class="col2">▼ご契約者情報</td>
        </tr>
      <tr>
        <td width="20%" class="col3">ご契約者</td>
        <td><?php echo $data['policy']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">DP担当者 <span class="caution">[*]</span></td>
        <td><?php echo $data['order_name']; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">DP担当者メール <span class="caution">[*]</span></td>
        <td class="eng"><?php echo $data['order_email']; ?></td>
      </tr>
      <tr>
          <?php $array_pay = array('yearly' => '年度末までをまとめて一括請求', 'monthly' => '月払いで請求'); ?>
        <td width="20%" class="col3">お支払い方法 <span class="caution">[*]</span></td>
        <td><?php echo @$array_pay[$data['payment']]; ?></td>
      </tr>
      <tr>
        <td width="20%" class="col3">伝言メモ</td>
        <td><?php echo $data['message']; ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">
        <a href="javascript:void(0);" onclick="goBack()"><img src="<?php echo base_url();?>../img/btn_return.gif" width="200" height="45" /></a>
        <a href="<?php  base_url();?>complete"><img src="<?php echo base_url();?>../img/btn_order.gif" width="200" height="45" /></a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<script type="text/javascript">
  function goBack(){
    window.history.back();
  }
</script>
</body>
</html>
