# Terra.Trainer

## Judul Proyek
**Terra.Trainer** - Layanan Langganan Kebugaran dengan Integrasi Pembayaran

## Deskripsi
**Terra.Trainer** adalah platform digital yang menyediakan layanan langganan kebugaran yang disesuaikan untuk pengguna. Melalui platform ini, pengguna dapat berlangganan berbagai paket kebugaran (mingguan, bulanan, tahunan) dan melakukan pembayaran secara aman menggunakan **Midtrans**, gateway pembayaran yang terintegrasi ke dalam sistem.

Tujuan utama proyek ini adalah untuk memfasilitasi manajemen langganan dan pemrosesan pembayaran yang lancar menggunakan **API Midtrans**.

## Teknologi yang Digunakan
- **Backend**: Laravel 12 (Framework PHP)
- **Frontend**: HTML, CSS, JavaScript, Bootstrap 5
- **Gateway Pembayaran**: **Midtrans API** (untuk pemrosesan pembayaran yang aman)

## Fitur
- **Registrasi Pengguna**: Pengguna dapat memasukkan informasi pribadi (nama, email, telepon) untuk berlangganan ke paket kebugaran.
- **Manajemen Langganan**: Pengguna dapat memilih paket langganan yang berbeda (mingguan, bulanan, tahunan).
- **Integrasi Pembayaran Midtrans**: Pembayaran langganan diproses secara aman menggunakan Midtrans, memungkinkan pembayaran melalui transfer bank dan metode pembayaran lainnya.
- **Notifikasi Pembayaran Sukses**: Setelah pembayaran berhasil, pengguna menerima notifikasi yang menunjukkan status pembayaran.

## Instruksi Pengaturan
1. **Clone repository**:
    ```bash
    git clone https://github.com/yourusername/terra-trainer.git
    ```

2. **Instalasi Dependensi**:
    Pastikan Anda memiliki **Composer** terinstal. Jalankan perintah berikut untuk menginstal dependensi PHP yang diperlukan:
    ```bash
    composer install
    ```

3. **Setel File .env**:
    Salin file `.env.example` ke `.env` dan konfigurasi dengan **Server Key** dan **Client Key** Midtrans Anda:
    ```bash
    cp .env.example .env
    ```

4. **Generate Application Key**:
    Laravel memerlukan key aplikasi yang harus diatur. Jalankan:
    ```bash
    php artisan key:generate
    ```

5. **Jalankan Aplikasi**:
    Setelah pengaturan selesai, Anda dapat menjalankan aplikasi:
    ```bash
    php artisan serve
    ```

6. **Akses Aplikasi** di **`http://127.0.0.1:8000`** untuk menggunakan aplikasi secara lokal.

## Penjelasan Dukungan AI
Meskipun proyek ini tidak langsung melibatkan AI dalam antarmuka pengguna atau logika backend, proses pengembangannya dibantu oleh AI, yang membantu mengotomatisasi tugas berulang dan menghasilkan kode yang dapat digunakan kembali. Penggunaan AI ini mempercepat proses pengembangan dan memastikan pengelolaan kode yang efisien, yang pada akhirnya mengurangi waktu yang dibutuhkan untuk mengimplementasikan fungsionalitas inti dari integrasi pembayaran Midtrans.

AI juga berkontribusi dengan memberikan saran praktik terbaik selama pengembangan integrasi gateway pembayaran, sehingga prosesnya menjadi lebih lancar dan bebas dari kesalahan.
