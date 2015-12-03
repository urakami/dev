<?php echo $data['person_name'];?> さま

この度は、大商OEMプランをお申し込みくださいまして、ありがとう
ございます。以下の通り、承りました。


送信日時： <?php echo date('Y/m/d H:i:s' );?>

ドメイン名：<?php echo $data['domain_name'];?>

DNS：<?php echo $data['dns'];?>

開通希望日：<?php echo $data['start_year'] .'年'; echo $data['start_month'].'月' ;echo $data['start_day'].'日'; ?>

プラン名：<?php echo $data['plan_name'];?>

ディスク容量：<?php echo $data['disk_space'];?>

保証メモリ：<?php echo $data['guarantee_memory'];?>

最大メモリ：<?php echo $data['max_memory'];?>

プロセス数上限：<?php echo $data['limit_memory'];?>

管理ツール：<?php echo $data['manager'];?>

外部バックアップ：<?php echo $data['op_backup'];?>

ファイアウォール：<?php echo $data['op_firewall'];?>

SSL証明書：<?php echo $data['ssl'];?>

IPアドレス：<?php echo $data['IP_address'];?>

OS：<?php echo $data['OS'];?>

Apache：<?php echo $data['Apache'];?>

PHP：<?php echo $data['PHP'];?>

MySQL：<?php echo $data['mysql'];?>

PostgreSQL：<?php echo $data['postgresql'];?>

Mail：<?php echo $data['MTA'];?>

アクセス許可制限
　ssh・ftpを開放する
　→<?php echo $data['access_limit_01'];?>
 
　→<?php echo $data['access_limit_02'];?>
 
　→<?php echo $data['access_limit_03'];?>
 
　→<?php echo $data['access_limit_04'];?>
 
　→<?php echo $data['access_limit_05'];?>
 
　→<?php echo $data['access_limit_06'];?>
 
　→<?php echo $data['access_limit_07'];?>

▼ご利用者情報

企業名：<?php echo $data['company_name']; ?>

企業名（よみ）：<?php echo $data['company_name_yomi']; ?>

郵便番号：〒 <?php echo $data['zip_03']; ?> - <?php echo $data['zip_04']; ?>

住所：<?php echo $data['address']; ?>

部署名：<?php echo $data['division']; ?>

役職名：<?php echo $data['title']; ?>

担当者名：<?php echo $data['person_name']; ?>

担当者名（よみ）：<?php echo $data['person_name_yomi'];?>

TEL：<?php echo $data['tel']; ?>

FAX：<?php echo $data['fax'];?>

メール：<?php echo $data['email'];?>

▼ご契約者情報

ご契約者：株式会社デジタルパートナーズ

DP担当者：<?php echo $data['order_name'];?>

DP担当者メール：<?php echo $data['order_email'];?>

お支払い方法：<?php echo $data['payment'];?>

伝言メモ：
<?php echo nl2br($data['message']);?>



━━━━━━━━━━━━━━━━━━━━━━━━━━━
株式会社チロロネット カスタマーサポート
───────────────────────────
   〒710-0844  岡山県倉敷市福井125-7
   TEL: 086-430-3956  /  FAX: 086-430-3957
   E-Mail: support@chiroro.com
   URL: http://www.chiroro.co.jp/
━━━━━━━━━━━━━━━━━━━━━━━━━━━
