# rotec
ローカル環境構築用

・立ち上げ
docker-compose up -d

・dockerに入る
docker exec -it rotec-wordpress-1 bash

・sql　置換
wp search-replace 'https://www.taiseirotec.co.jp' 'http://localhost:8080' --allow-root

・mysqlに入る
docker exec -it rotec-db-1 mysql -u root -p
UPDATE wp01_options SET option_value = 'http://localhost:8080' WHERE option_name = 'siteurl';
UPDATE wp01_options SET option_value = 'http://localhost:8080' WHERE option_name = 'home';
