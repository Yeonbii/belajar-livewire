# The Doc
Selamat datang siapa pun itu, semoga bermanfaat dan nikmati waktumu 😏

## Pengingat Bagi Pelupa
- Setelah clone, jalankan command ini
```sh
cd belajar-livewire
composer install
cp .env.example .env
php artisan key:generate
```
- Sesuaikan file .env
- Setelah itu lanjutkan ini
```sh
php artisan migrate
npm install
npm run build
```
- Jalankan projectnya
```sh
composer run dev
```

## Coretan
> Pada dasarnya hanyalah semacam 'coretan' setiap aku belajar dan itu mungkin aku anggap penting.

### Wireables
Cara sederhana untuk ngajarin Livewire: "Kalau ketemu object ini, ubah jadi data begini."
- `toLivewire()` -> menyimpan state component ke JSON.
- `fromLivewire()` -> mengembalikan JSON menjadi object php lagi.

### Rendering Components
Sintaks untuk merender komponen
- `<livewire:component-name />` -> resources/views/components/⚡component-name.blade.php
- `<livewire:sub-directory.component-name />` -> resources/views/components/sub-directory/⚡component-name.blade.php
- `<livewire:pages::component-name />` -> resources/views/pages/⚡component-name.blade.php

Dengan mengirim props (data)
- `<livewire:component-name nama-prop="Nilai Properti" />`
- `<livewire:component-name :nama-prop="$namaProperti" />` -> Jika prop yang dikirim berupa suatu variabel atau nilai yang dinamis

### Menerima Props (Data)
Data yang dikirim ke komponen diterima dengan menggunakan method `mount()`.
```sh
public $namaProperti;
 
public function mount($nameProperti = null)
{
    $this->namaProperti = $namaProperti;
}
```

Jika nama variable yang digunakan sama dengan nama properti yang dikirim, maka bisa tidak menggunakan method `mount()`.
```sh
public $namaProperti;
```

### Mengirim Parameter Route Sebagai Props
```sh
Route::livewire('/posts/{id}', 'pages::post.show');
```
Diterima dengan method `mount()`.
```sh
public $postId;
 
public function mount($id)
{
    $this->postId = $id;
}
```

Begitu juga dengan _Laravel's route model binding_.
```sh
Route::livewire('/posts/{post}', 'pages::post.show');
```
```sh
public Post $post;
```

### SPAAA
Atau semacamnya wkkk. Jadi kali ini aku berhasil mempelajari cara agar suatu halaman bisa melakukan _Create Data_ dan _Show List Data_ pada satu halaman tanpa reload. Untuk melakukannya diperlukan `dispatch('nama-event')` pada komponen yang melakukan _action_ dan `#[On('nama-event')]` pada komponen yang membutuhkan _render_ ulang. Untuk detail silahkan cek file `web.php` untuk route `/posts`.