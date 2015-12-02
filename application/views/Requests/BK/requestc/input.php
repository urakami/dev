<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>大商さまOEMプランお申込ページ | チロロネット</title>
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css">
<script src="<?php echo base_url();?>js/jquery-1.11.3.js"></script>
</head>

<body>
    <form action="<?php echo base_url(); ?>index.php/request/kaigisho-dt/order_c/input" method="post" id="frm_orderc_input">
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
    <td><table width="100%" border="1" cellspacing="0" cellpadding="5">
      <tr>
        <td width="20%" class="col3">ドメイン名 <span class="caution">[*]</span></td>
        <td><input name="doain_name" type="text" size="40" /></td>
      </tr>
      <tr>
        <td width="20%" class="col3">DNS</td>
        <td>大商のDNSを利用（サーバー切り替え作業も大商担当）</td>
      </tr>
      <tr>
        <td width="20%" class="col3">開通希望日 <span class="caution">[*]</span></td>
        <td><select name="start_year">
          <option value="null">----年</option>
          <option value="2015年">2015年</option>
          <option value="2016年">2016年</option>
          <option value="2017年">2017年</option>
          <option value="2018年">2018年</option>
          <option value="2019年">2019年</option>
          <option value="2020年">2020年</option>
          <option value="2021年">2021年</option>
          <option value="2022年">2022年</option>
          <option value="2023年">2023年</option>
          <option value="2024年">2024年</option>
          <option value="2025年">2025年</option>
        </select>
          <select name="start_month">
            <option value="null">--月</option>
            <option value="1月">1月</option>
            <option value="2月">2月</option>
            <option value="3月">3月</option>
            <option value="4月">4月</option>
            <option value="5月">5月</option>
            <option value="6月">6月</option>
            <option value="7月">7月</option>
            <option value="8月">8月</option>
            <option value="9月">9月</option>
            <option value="10月">10月</option>
            <option value="11月">11月</option>
            <option value="12月">12月</option>
          </select>
          <select name="start_day">
            <option value="null">--日</option>
            <option value="1日">1日</option>
            <option value="2日">2日</option>
            <option value="3日">3日</option>
            <option value="4日">4日</option>
            <option value="5日">5日</option>
            <option value="6日">6日</option>
            <option value="7日">7日</option>
            <option value="8日">8日</option>
            <option value="9日">9日</option>
            <option value="10日">10日</option>
            <option value="11日">11日</option>
            <option value="12日">12日</option>
            <option value="13日">13日</option>
            <option value="14日">14日</option>
            <option value="15日">15日</option>
            <option value="16日">16日</option>
            <option value="17日">17日</option>
            <option value="18日">18日</option>
            <option value="19日">19日</option>
            <option value="20日">20日</option>
            <option value="21日">21日</option>
            <option value="22日">22日</option>
            <option value="23日">23日</option>
            <option value="24日">24日</option>
            <option value="25日">25日</option>
            <option value="26日">26日</option>
            <option value="27日">27日</option>
            <option value="28日">28日</option>
            <option value="29日">29日</option>
            <option value="30日">30日</option>
            <option value="31日">31日</option>
          </select></td>
      </tr>
      <tr>
        <td width="20%" class="col3">プラン名</td>
        <td><font color="#ca66ff">「Lコース」●初15,000円／月2,200円</font></td>
      </tr>
      <tr>
        <td width="20%" class="col3">ディスク容量</td>
        <td>15GB</td>
      </tr>
      <tr>
        <td width="20%" class="col3">保証メモリ</td>
        <td>256MB</td>
      </tr>
      <tr>
        <td width="20%" class="col3">最大メモリ</td>
        <td>384MB</td>
      </tr>
      <tr>
        <td width="20%" class="col3">プロセス数上限</td>
        <td>384</td>
      </tr>
      <tr>
        <td width="20%" class="col3">管理ツール</td>
        <td>Webmin</td>
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
        <td>利用不可</td>
      </tr>
      <tr>
        <td width="20%" class="col3">IPアドレス</td>
        <td>1個</td>
      </tr>
      <tr>
        <td width="20%" class="col3">OS</td>
        <td><select name="OS">
          <option value="Debian GNU/Linux 6" selected="selected">Debian GNU/Linux 6</option>
          <option value="CentOS 6">CentOS 6</option>
        </select></td>
      </tr>
      <tr>
        <td width="20%" class="col3">Apache</td>
        <td><select name="Apache">
          <option value="Apache2.2.x" selected="selected">Apache2.2.x</option>
          <option value="no_thanks">不要</option>
        </select></td>
      </tr>
      <tr>
        <td width="20%" class="col3">PHP</td>
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
        <td>利用不可</td>
      </tr>
      <tr>
        <td width="20%" class="col3">PostgreSQL</td>
        <td>利用不可</td>
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
          <input name="access_limit_01" type="text" size="40" /></td>
      </tr>
      <tr>
        <td>ssh・ftpを開放する　→　
          <input name="access_limit_02" type="text" size="40" /></td>
      </tr>
      <tr>
        <td>ssh・ftpを開放する　→　
          <input name="access_limit_03" type="text" size="40" /></td>
      </tr>
      <tr>
        <td>ssh・ftpを開放する　→　
          <input name="access_limit_04" type="text" size="40" /></td>
      </tr>
      <tr>
        <td>ssh・ftpを開放する　→　
          <input name="access_limit_05" type="text" size="40" /></td>
      </tr>
      <tr>
        <td>ssh・ftpを開放する　→　
          <input name="access_limit_06" type="text" size="40" /></td>
      </tr>
      <tr>
        <td>ssh・ftpを開放する　→　
          <input name="access_limit_07" type="text" size="40" /></td>
      </tr>
      <tr>
        <td colspan="2" class="col2">▼ご利用者情報</td>
        </tr>
      <tr>
        <td width="20%" class="col3">企業名 <span class="caution">[*}</span></td>
        <td><input name="company_name" type="text" size="40" /></td>
      </tr>
      <tr>
        <td width="20%" class="col3">企業名（よみ） <span class="caution">[*]</span></td>
        <td><input name="company_name_yomi" type="text" size="50" /></td>
      </tr>
      <tr>
        <td width="20%" class="col3">郵便番号 <span class="caution">[*]</span></td>
        <td>〒
          <input name="zip_03" type="text" size="6" maxlength="3" />
          -
          <input name="zip_04" type="text" size="8" maxlength="4" /></td>
      </tr>
      <tr>
        <td width="20%" class="col3">住所 <span class="caution">[*]</span></td>
        <td><input name="address" type="text" size="60" /></td>
      </tr>
      <tr>
        <td width="20%" class="col3">部署名</td>
        <td><input name="division" type="text" size="30" /></td>
      </tr>
      <tr>
        <td width="20%" class="col3">役職名</td>
        <td><input name="title" type="text" size="30" /></td>
      </tr>
      <tr>
        <td width="20%" class="col3">担当者名 <span class="caution">[*]</span></td>
        <td><input name="person_name" type="text" size="30" /></td>
      </tr>
      <tr>
        <td width="20%" class="col3">担当者名（よみ） <span class="caution">[*]</span></td>
        <td><input name="person_name_yomi" type="text" size="30" /></td>
      </tr>
      <tr>
        <td width="20%" class="col3">TEL <span class="caution">[*]</span></td>
        <td><input name="tel" type="text" size="30" /></td>
      </tr>
      <tr>
        <td width="20%" class="col3">FAX</td>
        <td><input name="fax" type="text" size="30" /></td>
      </tr>
      <tr>
        <td width="20%" class="col3">メール <span class="caution">[*]</span></td>
        <td><input name="email" type="text" size="40" /></td>
      </tr>
      <tr>
        <td colspan="2" class="col2">▼ご契約者情報</td>
        </tr>
      <tr>
        <td width="20%" class="col3">ご契約者</td>
        <td>株式会社デジタルパートナーズ</td>
      </tr>
      <tr>
        <td width="20%" class="col3">DP担当者 <span class="caution">[*]</span></td>
        <td><input type="text" name="order_name" /></td>
      </tr>
      <tr>
        <td width="20%" class="col3">DP担当者メール <span class="caution">[*]</span></td>
        <td><input name="order_mail" type="text" size="40" /></td>
      </tr>
      <tr>
        <td width="20%" class="col3">お支払い方法 <span class="caution">[*]</span></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="3">
          <tr>
            <td width="1%"><input type="radio" name="payment" value="yearly" /></td>
            <td>年度末までをまとめて一括請求</td>
          </tr>
          <tr>
            <td width="1%"><input type="radio" name="payment" value="monthly" /></td>
            <td>月払いで請求</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td width="20%" class="col3">伝言メモ</td>
        <td><textarea name="message" cols="80" rows="5"></textarea></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
<!--    <td align="center"><a href="order_L_check.html"><img src="btn_check.gif" width="200" height="45" /></a></td>-->
  </tr><td align="center"><input type="submit" name="submit" value="Submit" <img src="<?php echo base_url();?>img/btn_check.gif" width="200" height="45"/></td>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
