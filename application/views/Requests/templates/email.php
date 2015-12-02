<?php echo $data['person_name'];?> さま

この度は、大商OEMプランをお申し込みくださいまして、ありがとう
ございます。以下の通り、承りました。


送信日時： <?php echo date('Y/m/d H:i:s' );?>

ドメイン名：<?php echo $data['domain_name']."<br />";?>
DNS：<?php echo $data['dns'].'<br />';?>
開通希望日：<?php echo $data['start_year'] .'年'; echo $data['start_month'].'月' ;echo $data['start_day'].'日'."<br />"; ?>

プラン名：<?php echo $data['plan_name']."<br />"; ?>

ディスク容量：<?php echo $data['disk_space']."<br />"; ?>
保証メモリ：<?php echo $data['guarantee_memory']."<br />"; ?>
最大メモリ：<?php echo $data['max_memory']."<br />"; ?>
プロセス数上限：<?php echo $data['limit_memory']."<br />"; ?>
管理ツール：<?php echo $data['manager']."<br />"; ?>
外部バックアップ：<?php echo $data['op_backup']."<br />"; ?>
ファイアウォール：<?php echo $data['op_firewall']."<br />"; ?>
SSL証明書：<?php echo $data['ssl']."<br />"; ?>
IPアドレス：<?php echo $data['IP_address']."<br />"; ?>
OS：<?php echo $data['OS']."<br />"; ?>
Apache：<?php echo $data['Apache']."<br />"; ?>
PHP：<?php echo $data['PHP']."<br />"; ?>
MySQL：<?php echo $data['mysql']."<br />"; ?>
PostgreSQL：<?php echo $data['postgresql']."<br />"; ?>
Mail：<?php echo $data['MTA']."<br />"; ?>

アクセス許可制限
　ssh・ftpを開放する
　→<?php echo $data['access_limit_01']."<br>"; ?>
　→<?php echo $data['access_limit_02']."<br>"; ?>
　→<?php echo $data['access_limit_03']."<br />"; ?>
　→<?php echo $data['access_limit_04']."<br />"; ?>
　→<?php echo $data['access_limit_05']."<br />"; ?>
　→<?php echo $data['access_limit_06']."<br />"; ?>
　→<?php echo $data['access_limit_07']."<br />"; ?>

▼ご利用者情報

企業名：<?php echo $data['company_name']."<br />"; ?>
企業名（よみ）：<?php echo $data['company_name_yomi']."<br />"; ?>
郵便番号：〒 <?php echo $data['zip_03']; ?> - <?php echo $data['zip_04']."<br />"; ?>
住所：<?php echo $data['address']."<br />"; ?>
部署名：<?php echo $data['division']."<br />"; ?>
役職名：<?php echo $data['title']."<br />"; ?>
担当者名：<?php echo $data['person_name']."<br />"; ?>
担当者名（よみ）：<?php echo $data['person_name_yomi']."<br />"; ?>
TEL：<?php echo $data['tel']."<br />"; ?>
FAX：<?php echo $data['fax']."<br />"; ?>
メール：<?php echo $data['email']."<br />"; ?>

▼ご契約者情報

ご契約者：株式会社デジタルパートナーズ
DP担当者：<?php echo $data['order_name']; ?>
DP担当者メール：<?php echo $data['order_email']; ?>
お支払い方法：<?php echo $data['payment']; ?>

伝言メモ：
<?php echo $data['message']; ?>



━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
株式会社チロロネット カスタマーサポート
──────────────────────────────
   〒710-0844  岡山県倉敷市福井125-7
   TEL: 086-430-3956  /  FAX: 086-430-3957
   E-Mail: support@chiroro.com
   URL: http://www.chiroro.co.jp/
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━