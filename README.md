<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<h1 align="center">
    Laravel Ecommerce Basic
</h1>

<hr>

<p><b>Jangan lupa follow dulu Akun github saya soalnya banyak proyek menarik yang bakal saya buat nantinya. :)</b></p>

<h1 align="center">Installasi Projek Web Ecommerce Basic</h1>

<ul>
    <li>1. Clone projek ini https://github.com/mYusufH882/ecommerce-basic.git (Syaratnya sudah paham GIT) / Alternatif lain download file ZIP nya saja.</li>
    <li>2. Buka Terminal/CMD jalankan perintah <code>composer install / composer update</code>, lalu tekan enter</li>
    <li>3. Aktifkan PHP & MySQL menggunakan web server (Laragon, XAMPP, DevilBox, dll).</li>
    <li>4. Buat database baru di phpmyadmin, bebas nama databasenya apa saja atau ecommerce-basic (nama databasenya)</li>
    <li>5. Duplikasi file .env.example lalu ubah nama filenya menjadi .env</li>
    <li>6. Didalam file .env sesuaikan dengan nama aplikasi atau database yang sudah dibuat pada nomor 4.</li>
    <li>7. Buka Terminal/CMD jalankan perintah <code>php artisan key:generate</code></li>
    <li>8. Jalankan perintah <code>php artisan migrate</code></li>
    <li>9. Jalankan perintah <code>php artisan db:seeder</code></li>
    <li>10. Jalankan perintah <code>php artisan serve</code></li>
    <li>11. Buka browser dan jalankan localhost:8000</li>
</ul>

<hr>

<h2>Akun Admin</h2>
<ul>
    <li>Email : yusuf@mail.com</li>
    <li>Password : 12345678</li>
</ul>

<h2>Akun User</h2>
<ul>
    <li>Email : zulaikha@mail.com</li>
    <li>Password : 12345678</li>
</ul>

<hr>

<h3><b>Noted :</b></h3>
<p>
    Mohon untuk memperhatikan intruksi yang diberikan dan perhatikan beberapa catatan
    dibawah ini terkait perbaikan pada aplikasi ini.
</p>

<ul>
    <li>1. Ubah tipe data pada tabel products & transactions</li>
    <ul>
        <li>Buka file migration products & transactions</li>
        <li>ganti kode : <code>$table->float('nama_kolom')</code>, jadi <code>$table->double('nama_kolom', 10, 2)</code></li>
    </ul>
    <li>2. Tambahan kolom baru pada tabel transactions</li>
    <ul>
        <li>Ketikkan perintah : <code>php artisan make:migration add_total_qty_to_transactions_table</code> untuk melakukan alter table</li>
        <li>Tambahkan kode : <code>$table->integer('total_qty')</code> pada file migration diatas atau bisa dilihat melalui repository ini.</li>
        <li>Jalankan perintah : <code>php artisan migrate</code> untuk menambahkan kolom baru.</li>
    </ul>
</ul>

<p style="color:red;"><b>**Biasakan untuk tidak panik jika error ambil jeda waktu untuk menenangkan diri, lalu kembali untuk memperbaiki. !!!</b></p>
