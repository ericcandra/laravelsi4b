<!-- mvc -->
<!-- model = database crud -->
<!-- view = tampilan html,css -->
<!-- controller = model + view -->
<!-- router = url -->
<!--  -->
folder = 1.database > migration, 2.resource > view, 3.routes

langkah langkah koneksi :
1. ketik : composer
2. ketik : cd .\example.app\
3. ketik : php artisan serve

http://127.0.0.1:8000/about
http://127.0.0.1:8000/profil
http://127.0.0.1:8000/welcome/siang
http://127.0.0.1:8000/listdata
http://127.0.0.1:8000/Fakultas
http://127.0.0.1:8000/Prodi

method :
get 
post
put 
patch
delete

di .env di # db_connection = mysql
            # port 3306
            # database = laravel_si4b
terus jalankan :

1.php artisan migrate
2.php artisan serve
3.php artisan make:model fakultas
4.php artisan make:model fakultas -m (migration)
5.php artisan make:model fakultas -mc (migration, controller)
6.php artisan make:model fakultas -mcr (migration, controller, resource)
7.php artisan make:controller fakultas

membahas > (route dan view)