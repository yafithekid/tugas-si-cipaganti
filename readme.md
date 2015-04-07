<h1>Cara Install</h1>
<ul>
<li>Clone repository dengan <i>command</i>: <code>git clone https://github.com/yafithekid/tugas-si-cipaganti.git</code></li>
<li>Buka Command Prompt, cd ke folder hasil clone tersebut</li>
<li>Jalankan <i>command</i>: <code>composer update</code></li>
<li>Copy paste file <b>.env.example</b>, rename file hasil copas menjadi <b>.env</b></li>
<li>Edit isi file .env bagian DB_* sesuai dengan settingan MySQL, lalu save</li>
<li>Jalankan <i>command</i>: <code>php artisan migrate --seed</code></li>
<li>Untuk menjalankan serve, gunakan <i>command</i>: <code>php artisan serve</code></li>
</ul>
