<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>大商さまOEMプランお申込ページ | チロロネット</title>
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css">
</head>

<body>
<form action="<?php echo base_url(); ?>request/kaigisho-dt/order_f/input" method="post" id="orderf_input">
<table width="920" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td><img src="<?php echo base_url();?>img/logo.gif" width="361" height="34" /></td>
  </tr>
  <tr>
    <td><hr /></td>
  </tr>
  <tr>
    <td><strong>■大阪商工会議所さまOEMプランのお申込</strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td>
    <table width="100%" border="1" cellspacing="0" cellpadding="5">
      <tr>
        <td width="20%" class="col3">ドメイン名 <span class="caution">[*]</span></td>
        <td><input name="domain_name" type="text" size="40" value="<?php echo !empty($data_old['domain_name']) ? $data_old['domain_name'] : '' ;?>" />
        <span class="bg_error"><?php echo form_error('domain_name');?></span>
        </td>
      </tr>
      <tr>
        <td width="20%" class="col3">DNS</td>
        <td>大商のDNSを利用（サーバー切り替え作業も大商担当）</td>
        <input name="dns" type="hidden" size="40" value="大商のDNSを利用（サーバー切り替え作業も大商担当" />
      </tr>
      <tr>
        <td width="20%" class="col3">開通希望日 <span class="caution">[*]</span></td>
        <td><select name="start_year">
          <option value="">----年</option>
          <?php 
            $curr_year = $start_year = date('Y');
            $end_year = date('Y', strtotime('+10 year'));
            for($start_year; $start_year <= $end_year; $start_year++) {
            echo '<option value="'.$start_year.'"';
               if( !empty($data_old['start_year']) && $start_year == $data_old['start_year'] ) {
                      echo ' selected="selected"';
               }
               echo ' >'.$start_year.'年</option>';
           }               
           echo '<select>';
          ?>      
          <select name="start_month">
            <option value="">--月</option>
            <?php 
                $start_month = 1;
                $curr_month = date('m');
                for($start_month; $start_month <= 12; $start_month++) {
                echo '<option value="'.$start_month.'"';
                   if( !empty($data_old['start_month']) && $start_month ==  $data_old['start_month'] ) {
                          echo ' selected="selected"';
                   }
                   echo ' >'.$start_month.'月</option>';
               }               
               echo '<select>';
              ?>

          <select name="start_day">
            <option value="">--日</option>
            <?php 
                $start_day = 1;
                $curr_day = date('d');
                for($start_day; $start_day <= 31; $start_day++) {
                echo '<option value="'.$start_day.'"';
                   if( !empty($data_old['start_day']) && $start_day ==  $data_old['start_day'] ) {
                          echo ' selected="selected"';
                   }
                   echo ' >'.$start_day.'日</option>';
               }               
               echo '<select>';
            ?>
           
          </select>
            <span class="bg_error"><?php echo form_error('start_year');?></span>
            <span class="bg_error"><?php echo form_error('start_month');?></span>
            <span class="bg_error"><?php echo form_error('start_day');?></span>
        </td>
      </tr>
      <tr>
        <td width="20%" class="col3">プラン名</td>
        <td><font color="#ca66ff">「Lコース」●初15,000円／月2,200円</font>
        <input name="plan_name" type="hidden" size="40" value="「Fコース」●初15,000円／月7,000円" />
        </td>
      </tr>
      <tr>
        <td width="20%" class="col3">ディスク容量</td>
        <td>120GB
        <input name="disk_space" type="hidden" size="40" value="120GB" />
        </td>
      </tr>
      <tr>
        <td width="20%" class="col3">保証メモリ</td>
        <td>2GB
        <input name="guarantee_memory" type="hidden" size="40" value="2GB" />
        </td>
      </tr>
      <tr>
        <td width="20%" class="col3">最大メモリ</td>
        <td>3GB <input name="max_memory" type="hidden" size="40" value="3GB" /></td>
      </tr>
      <tr>
        <td width="20%" class="col3">プロセス数上限</td>
        <td>2048 <input name="limit_memory" type="hidden" size="40" value="2048" /></td>
      </tr>
      <tr>
        <td width="20%" class="col3">管理ツール</td>
        <td><select name="manager">
          <option value="webmin" selected="selected">Webmin</option>
          <option value="plesk10">Plesk(10ドメイン版)●初5,000円／月1,600円</option>
        </select></td>
      </tr>
      <tr>
        <td width="20%" class="col3">外部バックアップ</td>
        <td><select name="op_backup">
          <option value="申し込まない" selected="selected">申し込まない</option>
          <option value="申し込む（毎朝／一世代保存）●初5,000円／月300円">申し込む（毎朝／一世代保存）●初5,000円／月300円</option>
          <option value="申し込む（毎朝／二世代保存）●初10,000円／月600円">申し込む（毎朝／二世代保存）●初10,000円／月600円</option>
          <option value="申し込む（毎朝／三世代保存）●初15,000円／月900円">申し込む（毎朝／三世代保存）●初15,000円／月900円</option>
        </select></td>
      </tr>
      <tr>
        <td width="20%" class="col3">ファイアウォール</td>
        <td><select name="op_firewall">
          <option value="申し込まない" selected="selected">申し込まない</option>
          <option value="申し込む●初10,000円／月5,000円">申し込む●初10,000円／月5,000円</option>
        </select></td>
      </tr>
      <tr>
        <td width="20%" class="col3">SSL証明書</td>
        <td>
            <select name="ssl">
                <option value="no_thanks" selected="selected">申し込まない</option>
                <option value="AlphaSSL_01year">「アルファSSL1ヶ年」＋設定●年10,000円</option>
            </select>
        </td>
      </tr>
      <tr>
        <td class="col3">IPアドレス</td>
        <td><select name="IP_address">
          <option value="01" selected="selected">1個</option>
          <option value="02">2個●初2,000円／月2,000円</option>
          <option value="03">3個●初4,000円／月4,000円</option>
          </select></td>
      </tr>
      <tr>
        <td class="col3">OS</td>
        <td><select name="OS">
          <option value="Debian GNU/Linux 6" selected="selected">Debian GNU/Linux 6</option>
          <option value="CentOS 6">CentOS 6</option>
        </select></td>
      </tr>
      <tr>
        <td class="col3">Apache</td>
        <td><select name="Apache">
          <option value="Apache2.2.x" selected="selected">Apache2.2.x</option>
          <option value="no_thanks">不要</option>
        </select></td>
      </tr>
      <tr>
        <td class="col3">PHP</td>
        <td><select name="PHP">
          <option value="PHP5.2.x">PHP5.2.x</option>
          <option value="PHP5.3.x" selected="selected">PHP5.3.x</option>
          <option value="PHP5.4.x">PHP5.4.x</option>
          <option value="PHP5.5.x">PHP5.5.x</option>
          <option value="PHP5.6.x">PHP5.6.x</option>
          <option value="no_thanks">不要</option>
        </select></td>
      </tr>
      <tr>
        <td width="20%" class="col3">MySQL</td>
        <td><select name="mysql">
          <option value="MySQL5.0.x">MySQL5.0.x</option>
          <option value="MySQL5.1.x" selected="selected">MySQL5.1.x</option>
          <option value="MySQL5.5.x">MySQL5.5.x</option>
          <option value="MySQL5.6.x">MySQL5.6.x</option>
          <option value="no_thanks">不要</option>
          </select></td>
      </tr>
      <tr>
        <td width="20%" class="col3">PostgreSQL</td>
        <td><select name="postgresql">
          <option value="PostgreSQL8.2.x">PostgreSQL8.2.x</option>
          <option value="PostgreSQL8.3.x">PostgreSQL8.3.x</option>
          <option value="PostgreSQL9.0.x">PostgreSQL9.0.x</option>
          <option value="PostgreSQL9.1.x">PostgreSQL9.1.x</option>
          <option value="PostgreSQL9.2.x">PostgreSQL9.2.x</option>
          <option value="PostgreSQL9.3.x">PostgreSQL9.3.x</option>
          <option value="no_thanks" selected="selected">不要</option>
        </select></td>
      </tr>
      <tr>
        <td width="20%" class="col3">Mail</td>
        <td><select name="MTA">
          <option value="netqmail_and_other" selected="selected">netqmail + vpopmail + ezmlm + qmailadmin</option>
          <option value="netqmail">netqmail単体</option>
          <option value="no_thanks">不要</option>
        </select></td>
      </tr>
      <tr>
        <td width="20%" rowspan="7" class="col3">アクセス許可制限</td>
        <td>ssh・ftpを開放する　→　
          <input name="access_limit_01" type="text" size="40" value="<?php echo !empty($data_old['access_limit_01']) ? $data_old['access_limit_01'] : '' ;?>" /></td>
      </tr>
      <tr>
        <td>ssh・ftpを開放する　→　
          <input name="access_limit_02" type="text" size="40" value="<?php echo !empty($data_old['access_limit_02']) ? $data_old['access_limit_02'] : '' ;?>"/></td>
      </tr>
      <tr>
        <td>ssh・ftpを開放する　→　
          <input name="access_limit_03" type="text" size="40" value="<?php echo !empty($data_old['access_limit_03']) ? $data_old['access_limit_03'] : '' ;?>"/></td>
      </tr>
      <tr>
        <td>ssh・ftpを開放する　→　
          <input name="access_limit_04" type="text" size="40" value="<?php echo !empty($data_old['access_limit_04']) ? $data_old['access_limit_04'] : '' ;?>"/></td>
      </tr>
      <tr>
        <td>ssh・ftpを開放する　→　
          <input name="access_limit_05" type="text" size="40" value="<?php echo !empty($data_old['access_limit_05']) ? $data_old['access_limit_05'] : '' ;?>"/></td>
      </tr>
      <tr>
        <td>ssh・ftpを開放する　→　
          <input name="access_limit_06" type="text" size="40" value="<?php echo !empty($data_old['access_limit_06']) ? $data_old['access_limit_06'] : '' ;?>"/></td>
      </tr>
      <tr>
        <td>ssh・ftpを開放する　→　
          <input name="access_limit_07" type="text" size="40" value="<?php echo !empty($data_old['access_limit_07']) ? $data_old['access_limit_07'] : '' ;?>"/></td>
      </tr>
      <tr>
        <td colspan="2" class="col2">▼ご利用者情報</td>
        </tr>
      <tr>
        <td width="20%" class="col3">企業名 <span class="caution">[*]</span></td>
        <td><input name="company_name" type="text" size="40" value="<?php echo !empty($data_old['company_name']) ? $data_old['company_name'] : '' ;?>"/>
        <span class="bg_error"><?php echo form_error('company_name');?></span></td>
      </tr>
      <tr>
        <td width="20%" class="col3">企業名（よみ） <span class="caution">[*]</span></td>
        <td><input name="company_name_yomi" type="text" size="50" value="<?php echo !empty($data_old['company_name_yomi']) ? $data_old['company_name_yomi'] : '' ;?>" />
        <span class="bg_error"><?php echo form_error('company_name_yomi');?></span></td>
      </tr>
      <tr>
        <td width="20%" class="col3">郵便番号 <span class="caution">[*]</span></td>
        <td>〒
          <input name="zip_03" type="text" size="6" maxlength="3" value="<?php echo !empty($data_old['zip_03']) ? $data_old['zip_03'] : '' ;?>"/>
          -
          <input name="zip_04" type="text" size="8" maxlength="4" value="<?php echo !empty($data_old['zip_04']) ? $data_old['zip_04'] : '' ;?>" />
        <span class="bg_error"><?php echo form_error('zip_03');?></span>
        <span class="bg_error"><?php echo form_error('zip_04');?></span></td>
      </tr>
      <tr>
        <td width="20%" class="col3">住所 <span class="caution">[*]</span></td>
        <td><input name="address" type="text" size="60" value="<?php echo !empty($data_old['address']) ? $data_old['address'] : '' ;?>"/>
        <span class="bg_error"><?php echo form_error('address');?></span></td>
      </tr>
      <tr>
        <td width="20%" class="col3">部署名</td>
        <td><input name="division" type="text" size="30" value="<?php echo !empty($data_old['division']) ? $data_old['division'] : '' ;?>"/></td>
      </tr>
      <tr>
        <td width="20%" class="col3">役職名</td>
        <td><input name="title" type="text" size="30" value="<?php echo !empty($data_old['title']) ? $data_old['title'] : '' ;?>"/></td>
      </tr>
      <tr>
        <td width="20%" class="col3">担当者名 <span class="caution">[*]</span></td>
        <td><input name="person_name" type="text" size="30" value="<?php echo !empty($data_old['person_name']) ? $data_old['person_name'] : '' ;?>"/>
        <span class="bg_error"><?php echo form_error('person_name');?></span></td>
      </tr>
      <tr>
        <td width="20%" class="col3">担当者名（よみ） <span class="caution">[*]</span></td>
        <td><input name="person_name_yomi" type="text" size="30" value="<?php echo !empty($data_old['person_name_yomi']) ? $data_old['person_name_yomi'] : '' ;?>"/>
        <span class="bg_error"><?php echo form_error('person_name_yomi');?></span></td>
      </tr>
      <tr>
        <td width="20%" class="col3">TEL <span class="caution">[*]</span></td>
        <td><input name="tel" type="text" size="30" value="<?php echo !empty($data_old['tel']) ? $data_old['tel'] : '' ;?>"/>
        <span class="bg_error"><?php echo form_error('tel');?></span></td>        
      </tr>
      <tr>
        <td width="20%" class="col3">FAX</td>
        <td><input name="fax" type="text" size="30" value="<?php echo !empty($data_old['fax']) ? $data_old['fax'] : '' ;?>"/></td>
      </tr>
      <tr>
        <td width="20%" class="col3">メール <span class="caution">[*]</span></td>
        <td><input name="email" type="text" size="40"value="<?php echo !empty($data_old['email']) ? $data_old['email'] : '' ;?>" />
        <span class="bg_error"><?php echo form_error('email');?></span></td>
      </tr>
      <tr>
        <td colspan="2" class="col2">▼ご契約者情報</td>
        </tr>
      <tr>
        <td width="20%" class="col3">ご契約者</td>
        <td>株式会社デジタルパートナーズ <input name="policy" type="hidden" size="50" value="株式会社デジタルパートナーズ" /></td>
      </tr>
      <tr>
        <td width="20%" class="col3">DP担当者 <span class="caution">[*]</span></td>
        <td><input type="text" name="order_name" value="<?php echo !empty($data_old['order_name']) ? $data_old['order_name'] : '' ;?>"/>
        <span class="bg_error"><?php echo form_error('order_name');?></span></td>
      </tr>
      <tr>
        <td width="20%" class="col3">DP担当者メール <span class="caution">[*]</span></td>
        <td><input name="order_email" type="text" size="40" value="<?php echo !empty($data_old['order_email']) ? $data_old['order_email'] : '' ;?>"/>
        <span class="bg_error"><?php echo form_error('order_email');?></span></td>
      </tr>
      <tr>
        <td width="20%" class="col3">お支払い方法 <span class="caution">[*]</span></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="3">
          <tr>
            <td width="1%"><input type="radio" name="payment" value="yearly" 
                <?php 
                    if(!empty($data_old['payment']) && $data_old['payment'] == 'yearly'){
                        echo 'checked'; 
                    }
                ?> /></td>
            <td>年度末までをまとめて一括請求</td>
          </tr>
          <tr>
                <td width="1%"><input type="radio" name="payment" value="monthly" 
                    <?php 
                        if(!empty($data_old['payment']) && $data_old['payment'] == 'monthly'){
                            echo 'checked'; 
                        }
                    ?> /></td>
            <td>月払いで請求</td>
          </tr>
            </table>
                <span class="bg_error"><?php echo form_error('payment');?></span>
        </td>
      </tr>
      <tr>
        <td width="20%" class="col3">伝言メモ</td>
        <td><textarea name="message" cols="80" rows="5" value="<?php echo !empty($data_old['message']) ? $data_old['message'] : '' ;?>"></textarea></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" class="btn-submit">
        <input type="submit" name="submit" value="" width="200" height="45"/>  
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
