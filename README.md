
# Login dan Register Email Verify Laravel
Contoh program sederhana login dan registrasi dengan fitur verifikasi Email Laravel 11

ini merupakan tutorial dari https://www.sruputkode.com/2025/02/cara-membuat-login-dan-register-dengan.html

petunjuk sobs-sobs

```git
git clone https://github.com/sruput-kode/sruputkode-auth.git
```

```composer
composer install
```

Kemudian silahkan buat database sobs-sobs bebas ya nama databasenya. kemudian edit file *.env* sesuaikan dengan pengaturan database sobs-sobs jika tidak ada file *.env* maka rename file *.env.example* menjadi *.env*

**Ingat sobs, sesuaikan Mailtrap konfigurasinya di file .env** karena direpository untuk konfigurasi mailtrap di .env masih belum di ubah

jalankan migration file database

```php
php artisan migrate
```


```php
php artisan key:generate
```

Kemudian jalankan dua perintah ini sekaligus dan jangan diberhentikan ya sobs.

```php
php artisan serve
```

Selesai sobs-sobs :smile:

<div align="center">
    <img src="https://res.cloudinary.com/dho4y13sa/image/upload/v1740486643/Logo-Blog-2_ciz9gl.png" alt="SruputKode" target="_blank" title="Sruputkode.com">
</div>
