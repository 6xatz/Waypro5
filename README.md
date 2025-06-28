# FiiArticle – Website Artikel dengan CodeIgniter 4.6.1

**URL:** [https://fiiarticle.rf.gd/](https://fiiarticle.rf.gd/)  
**Login:** `user/pass: 6xatz`

## Deskripsi

FiiArticle adalah website artikel sederhana berbasis **CodeIgniter 4.6.1** dengan fitur backend dan frontend yang terintegrasi. Proyek ini ditujukan sebagai demonstrasi CMS ringan untuk pengelolaan artikel berbasis web.

## Fitur Utama

### 🔐 Login Dashboard Admin
- Sistem login dasar tanpa enkripsi (plain password).
- Akses ke panel dashboard untuk mengelola artikel.

### 📝 Manajemen Artikel
- Artikel dapat ditambahkan, diubah, dan dihapus melalui dashboard.
- Setiap artikel memiliki:
  - **Kategori**
  - **Konten HTML**
  - **Judul & Tanggal Publikasi**

### 🔄 Tampilan Artikel Publik
- **Pagination** untuk navigasi artikel.
- **Sort by Category** dengan filter dinamis.
- **AJAX Auto Reload**:
  - Halaman artikel akan otomatis memperbarui saat artikel baru ditambahkan atau dimodifikasi (tanpa reload manual).
- Sidebar menampilkan **artikel terbaru** secara real-time.

### ⚙️ API & Frontend Modern
- **Vue.js** digunakan di sisi klien untuk pengelolaan artikel secara asinkron.
- **Axios** digunakan sebagai client HTTP untuk mengakses API backend.
- Endpoint RESTful untuk operasi `GET`, `POST`, `PUT`, dan `DELETE`.

## Teknologi yang Digunakan

| Teknologi        | Fungsi                                |
|------------------|----------------------------------------|
| CodeIgniter 4.6.1| Backend & struktur MVC                |
| PHP              | Bahasa pemrograman server             |
| MySQL            | Database artikel & user login         |
| Axios            | HTTP client untuk komunikasi API      |
| Vue.js           | UI reaktif untuk manajemen artikel    |
| AJAX / JS        | Auto reload & interaktivitas dinamis  |
