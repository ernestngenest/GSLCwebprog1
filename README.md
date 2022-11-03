untuk menjalankan code ini lakukan comand di bawah ini , tapi sebelumnya buat file .env yang baru lalu copy paste
isi dari .env-example ke .env (jika tidak diganti apa apa) buat database dengan nama "test-app" 
atau samakan dengan "DB_DATABASE" di file .env

setelah itu ikuti command di bawah ini 

 
composer update 

php artisan migrate 

php artisan db:seed 

php artisan serve 
