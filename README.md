## Project Cerita Yukkk

Project ini dibuatsebagai tugas akhir sertifikassi KP 2021 di Teknik Informatika UPNVYK

## Author

- Prisma Putra NIM 123190048 Mahasiswa  Semester 5 Teknik Informatika UPNVYK 

## Requirement

- PHP Version 8
- Install composer
- Install Laravel 8
- Install Package Sluggable
- Install Package Valet (Optional)
- XAMPP 
- Bootstarp 5
- Trix css

## Cara install Laravel menggunakan Composer
	
1. _buka terminal dan arahkan ke direktori yang diinginkan_
2. _lakukan perintah berikut_

	```bash
	composer create-project laravel/laravel example-app
	```

## Install Valet menggunakan composer (windows)

```bash
composer global require cretueusebiu/valet-windows
```

Untuk dokumentasi dan cara konfigurasi kunjungi link <a href = "https://packagist.org/packages/cretueusebiu/valet windows">https://packagist.org/packages/cretueusebiu/valet-windows</a>

## Install Sluggable menggunakan composer

```bash
composer require cviebrock/eloquent-sluggable
```

Untuk dokumentasi penggunaan lengkapnya kunjungi link <a href = "https://github.com/cviebrock/eloquent-sluggable">https://github.com/cviebrock/eloquent-sluggable</a>

## Install Trix css

Unduh folder trix melalui link <a href="https://github.com/basecamp/trix">Trix</a>. Kemudian ambil file trix.css dan trix.js pada folder dist dan letakkan di folder public 

### Thanks To:

- Mentor-Mentor yang telah meluangkan waktu dalam pelatihan ini

## How You Can Contribute?

Untuk yang ingin berkontribusi dalam mini project ini dapat dilakukan dengan melaporkan bug/error dan memberikan nama pembuat ketika menggunakan projek ini sebagai template 

## License

Project ini bersifat open-source dengan tidak mengambil keuntungan apa pun

## Sruct
<p>
berikut ini adalah structur folder yang akan sering kalian otak-atik
</p>

- _#app_
  - _#Console_
  - _#Exception_
  - _#HTTP_
  - _#Models_
  - _#Providers_
  - _#init.php_
- \*#bootstrap
- _#config_
- _#database_
  - _#factories_
  - _#migrations_
  - _#seeders_
- _#public_
  - _#css_
  - _#img_
  - _#js_
  - _#storage_
- _#resources_
  - _#views_
- _#routes_
- _#storage_
  - _#app_
  	- _#public_
  	  - _#post-images_
- _#clockwork_
- _#tests_
- _#vendor_
- _#.env_
- _#README.md_

## Penjelasan Singkat

###### app

Folder ini akan menyimpan Controller dan Model yang dibuat
<br>

###### config

Folder config ini mengatur segala onfogurasi dalam project ini

<br>

###### database

Folder database ini akan memudahkan kita dalam mebuat tabel, migrasi, dan juga seeder

<br>

###### public

Tempat kita meletakkan css, js, img kita sendiri dan menghubungkannya dengan folder yang berisi gambar upload

<br>

###### resources

Folder ini adalah tempat kita meletakkan file yang akan menjadi tampilan, letak tepatnya adadi folder views yang ada di dalam folder resources

<br>

###### routes

Mengatur segala route dan path pada project ini

<br>

###### storage

Gambar atau file yang diupload akan disimpan di folder storage->app->public->post_images

<br>

###### .env

Mengatur environment yang digunakan selama pengembangan web
<br>

## Basic Usage

## connection database

untuk config pada database diletakan pada file .env

```
DB_COECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_NAME=namadatabasenya
DB_USER=userdatabasenya
DB_PASS=passwordkaloada
```

## mengatur path url dan apps

untuk mengatur config path url dan apps juga terdapat pada file .env jika menggunakan valet

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:gh35/3iFEWVtMESWe3Ll+Z/7eQ7cs20oD4wqaqqlcSs=
APP_DEBUG=true
APP_URL=http://coba-laravel.test/
```

untuk mengatur config path url dan apps juga terdapat pada file .env tanpa menggunakan valet

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:gh35/3iFEWVtMESWe3Ll+Z/7eQ7cs20oD4wqaqqlcSs=
APP_DEBUG=true
APP_URL=http://localhost
```

### routes

Mendefiniskan arah route

```php
# example :
Route::get('/', [HomeController::class,'show']);
Route::get('/about', [AboutController::class,'showAbout']);
```

## controller

buat nama Controller menggunakan 
```bash
php artisan make:controller NameController
```
kemudian buat fungsi di dalamnya

```php
# example
 public function show(){
        return view('home', [
        "title" => "Home"
      ]); 
    }
```

## model

buat model menggunakan 

```bash
php artisan make:model Name
```

```php
# example model

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     *
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
```

## memanggil model pada controller

```php
# example controller user
 public function show(Post $post){
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
```

## memanggil route dan nilai pada view

untuk memanggil route pada view

```html

<a href="/about"> </a>

</html>

```

Untuk lebih lengkap mengenai route yang bisa digunakan gunakan

```bash
php artisan route:list

```

##Memanggil nilai variabel di view

```php

{{ $title->name }}

```

## Atur Timezone Laravel

 dapat diatur pada file config->app.php

```php
'timezone' => 'Asia/Jakarta',
```

## debug

untuk debug bisa menggunakan beberapa opsi berikut ini

- dd(valuenya);
- dump(valuenya);
- var_dump(valuenya);
- var_dump(valuenya);die;
- atau menggunakan debugger laravelyang akan tampil ketika ada yang salah 

## Mengirimkan parameter url

```php
<a href="/posts?category={{ $post->category->slug }}"</a>

```

maka pada kontroller
```php
public function index(){

        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts',[
            "title" => "All Posts" . $title,
            "posts" => Post::latest()->filter(request(['search','category','author']))
            ->paginate(7)->withQueryString()
        ]);
    }

```

## Menggunakan Seeder

Pada saat kita melakukan 

```bash
php artisan migrate:fresh --seed

```

Kita akan membuat isi data pada table secara otomatis yang dapat diatur pada file di dalam database->factories->NamaFactory.php

```php
public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'username' => $this->faker->unique()->userName(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ];
    }
```

kemudian panggil di folder database->seeders->DatabaseSeeder.php
```php
User::factory(3)->create();
```

## Authorization

Agar route hanya bisa digunakan oleh user tertentu, kita dapat gunakan fitur middleware

```php
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
``` 
Jika user yang tidak memiliki hak akses pada page yang dikunjungi akan diarahkan ke route bernama login dengan fungsi

```php
name('login')
```

### Cara menjalankan Aplikasi Cerita Yukk

Gunakan perintah berikut di command line
```bash
php artisan serve
```

kemudian copy localhost yang ditampilkan dan paste di url

### Cara Menjalankan Aplikasi Cerita Yuk dengan Valet

Jalankan perintah di direktori tempat projek laravel berada

```bash
valet park
```

Kemudian jalankan perintah

```bash
valet start
```

Kemudian ketikkan namaprojeklaravel.test ke alamat url di browser anda


### Notes sebelum menjalankan aplikasi
 
 1. Pastikan Sudah membuat database di mysql dan atur nama database di file .env
 2. Pastikan XAMPP sudah dinyalakan APache dan Mysql-nya
 3. Jika ini adalah pertama kali projek dijalankan, maka pada direktori projek anda, jalankan perintah
 ```bash
 php artisan migrate:fresh --seed
 ```
 
 Namun, jika anda tidak ingin memberikan data apa pun di database anda cukup jalankan perintah
 ```bash
 php artisan migrate:fresh
 ```