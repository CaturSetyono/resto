# 📌 Restoran Web App

## 📖 Deskripsi
Aplikasi web restoran ini dibuat untuk memudahkan pelanggan dalam melihat menu, melakukan pemesanan, serta memproses pembayaran secara digital. Sistem ini dirancang agar user-friendly dan efisien bagi pelanggan maupun kasir.

## 🎯 Fitur Utama
- 🔹 **Manajemen Pengguna**: Registrasi, login, dan autentikasi pengguna.
- 🍽 **Manajemen Menu**: Menampilkan daftar makanan dan minuman yang tersedia.
- 🛒 **Pemesanan**: Menambah menu ke dalam keranjang belanja.
- 💳 **Pembayaran**: Mendukung pembayaran digital dan pencatatan transaksi.
- 📊 **Manajemen Kasir**: Melihat dan mengelola transaksi pelanggan.
- 📜 **Laporan & Riwayat**: Melihat riwayat pesanan dan laporan keuangan.

## 🏗️ Teknologi yang Digunakan
- **Frontend**: Html,Css,Js
- **Backend**: PHP

## 🚀 Instalasi dan Penggunaan
1. **Clone Repository**:
   ```sh
   git clone https://github.com/CaturSetyono/resto.git
   cd resto
   ```
2. **Konfigurasi Database**:
   - Buat database baru di MySQL/PostgreSQL
   - Sesuaikan konfigurasi pada tabel database dibawah
  
3. **Menjalankan Server pada xampp**:
   - start apache
   - start mysql
   
4. **Akses Aplikasi**:
   Buka browser dan akses `http://localhost/htdocs/public/index.php`

## 📂 Struktur Folder
```
📂 restaurant_ordering_system/
├── 📂 public/ (Folder untuk file frontend yang bisa diakses oleh user, seperti halaman utama dan assets)
│ ├── 📂 css/ (Folder untuk file CSS)
│ │ ├── style.css
│ ├── 📂 js/ (Folder untuk file JavaScript jika ada interaksi frontend)
│ │ ├── script.js
│ ├── 📂 images/ (Folder untuk menyimpan gambar menu, logo, dll.)
│ ├── index.php (Halaman utama website, tampilan daftar menu)
│ ├── order.php (Halaman untuk membuat pesanan)
│ ├── payment.php (Halaman untuk melakukan pembayaran)

├── 📂 api/ (Folder untuk endpoint API yang menghubungkan frontend dan database)
│ ├── menu.php (Endpoint untuk mengambil data menu)
│ ├── order.php (Endpoint untuk membuat pesanan)
│ ├── payment.php (Endpoint untuk proses pembayaran)
│ ├── db.php (File koneksi database untuk API)

├── 📂 admin/ (Folder untuk halaman admin atau kasir, mengelola menu dan pesanan)
│ ├── index.php (Dashboard admin untuk melihat pesanan)
│ ├── manage_menu.php (Halaman untuk menambahkan/menghapus menu)
│ ├── manage_orders.php (Halaman untuk melihat status pesanan)

├── 📂 config/ (Folder untuk konfigurasi sistem)
│ ├── database.php (Koneksi database untuk seluruh sistem)
│ ├── constants.php (File untuk menyimpan konfigurasi penting seperti BASE_URL, dll.)

├── 📂 models/ (Folder untuk query database dalam bentuk fungsi PHP)
│ ├── menu.php (Fungsi untuk mengambil data menu)
│ ├── order.php (Fungsi untuk membuat dan melihat pesanan)
│ ├── payment.php (Fungsi untuk memproses pembayaran)

├── 📂 controllers/ (Folder untuk mengatur request dari frontend ke database)
│ ├── MenuController.php (Mengatur request terkait menu)
│ ├── OrderController.php (Mengatur request terkait pesanan)
│ ├── PaymentController.php (Mengatur request terkait pembayaran)

├── 📂 views/ (Folder untuk tampilan yang digunakan oleh frontend dan admin)
│ ├── menu_view.php (Tampilan daftar menu yang diambil dari database)
│ ├── order_view.php (Tampilan form pemesanan)
│ ├── payment_view.php (Tampilan proses pembayaran)

├── .htaccess (Jika ingin menggunakan mod_rewrite untuk routing lebih rapi)
├── README.md (Dokumentasi proyek untuk informasi penggunaan)
```

## 📌 Tabel Database
1. **Users** (id, name, email, password, phone, created_at)
2. **Menu** (id, name, description, price, category, created_at)
3. **Orders** (id, user_id, total_price, status, created_at)
4. **Order_Items** (id, order_id, menu_id, quantity, subtotal)
5. **Payments** (id, order_id, cashier_id, payment_method, amount, created_at)
6. **Cashiers** (id, name, email, password, created_at)
## 💡 Kontribusi
Jika ingin berkontribusi, silakan buat contact saya melalui informasi dibawah ini.

## 📞 Kontak
Jika ada pertanyaan lebih lanjut, silakan hubungi saya melalui:
- 📧 Email: catursetyono542@gmail.com
- 🔗 LinkedIn: [Catur Setyono](https://www.linkedin.com/in/catursetyono/)
- 🐙 GitHub: [CaturSetyono](https://github.com/CaturSetyono)

---
© 2025 Catur Setyono. Semua hak dilindungi.

