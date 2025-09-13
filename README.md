# contact-form-test

# お問い合わせフォーム

## 環境構築
Dockerビルド
1. git clone リンク
1. docker-compose up -d --build

＊ MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせてdocker-compose.ymlファイルを編集してください。

Laravel環境構築
1. docker-compose exec php bash
1. composer install
1. .env.exampleファイルから.envを作成し、環境変数を変更
1. php artisan key:generate
1. php artisan migrate
1. php artisan db:seed

## 使用技術
- PHP 8.1-fpm
- Laravel 8.83.29
- MySQL 11.8.3

## ER図
<img width="623" height="367" alt="スクリーンショット 2025-09-10 22 44 59" src="https://github.com/user-attachments/assets/e143a1a8-7db8-4c34-a205-d286ef07fe04" />

## URL
- 開発環境 : http://localhost/
- phpMyAdmin : http://localhost:8080/
