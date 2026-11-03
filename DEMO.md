# DEMO — Aplikasi Perpustakaan Digital Kampus

## Tujuan Demonstrasi

Menunjukkan fitur utama aplikasi Perpustakaan Digital Kampus, mulai dari autentikasi, pengelolaan data, transaksi peminjaman dan pengembalian, laporan, hingga pengujian REST API.

## Persiapan Sebelum Demo

1. Pastikan database MySQL `db_perpustakaan` sudah tersedia.
2. Pastikan file `.env` sudah dikonfigurasi.
3. Jalankan server utama pada port 8000:
   ```bash
   php artisan serve --port=8000
   ```
4. Buka terminal kedua dan jalankan server API pada port 8011:
   ```bash
   php artisan serve --port=8011
   ```
5. Pastikan kedua server berjalan.
6. Siapkan Postman untuk demonstrasi REST API.

Alamat aplikasi:
- Website: http://127.0.0.1:8000
- API: http://127.0.0.1:8011/api

## Urutan Demonstrasi

### 1. Login

1. Buka http://127.0.0.1:8000/login.
2. Masukkan akun admin:
   - Email: `admin@pens.ac.id`
   - Password: `password`
3. Klik tombol Login.
4. Tunjukkan bahwa pengguna diarahkan ke Dashboard setelah berhasil login.

### 2. Tampilkan Dashboard

1. Tunjukkan halaman Dashboard.
2. Jelaskan tiga informasi utama:
   - Total Buku.
   - Total Anggota.
   - Peminjaman Aktif.
3. Jelaskan bahwa statistik diperoleh melalui REST API internal.

### 3. Tambah Kategori

1. Buka menu Kategori.
2. Klik tombol tambah kategori.
3. Isi nama kategori dan informasi lain sesuai form.
4. Simpan kategori.
5. Tunjukkan bahwa kategori baru muncul pada daftar kategori.

### 4. Tambah Buku

1. Buka menu Buku.
2. Klik tombol tambah buku.
3. Isi informasi buku, seperti:
   - Judul.
   - Penulis.
   - Penerbit.
   - Tahun terbit.
   - ISBN.
   - Stok.
   - Kategori.
4. Simpan buku.
5. Tunjukkan bahwa buku baru muncul pada daftar buku.

### 5. Tambah Anggota

1. Buka menu Anggota.
2. Klik tombol tambah anggota.
3. Isi informasi anggota sesuai form, seperti nama, NIM, email, nomor telepon, dan alamat.
4. Simpan anggota.
5. Tunjukkan bahwa anggota baru muncul pada daftar anggota.

### 6. Buat Peminjaman

1. Buka menu Peminjaman.
2. Klik tombol tambah peminjaman.
3. Pilih anggota yang akan meminjam buku.
4. Pilih petugas yang menangani transaksi.
5. Tentukan tanggal pinjam dan tanggal kembali.
6. Pilih satu atau beberapa buku.
7. Simpan transaksi peminjaman.
8. Tunjukkan bahwa transaksi berhasil dibuat.

### 7. Lihat Daftar Peminjaman Aktif

1. Buka daftar Peminjaman.
2. Cari transaksi yang baru dibuat.
3. Tunjukkan informasi anggota, petugas, buku, tanggal pinjam, tanggal kembali, dan status.
4. Pastikan transaksi yang belum dikembalikan memiliki status `dipinjam`.

### 8. Proses Pengembalian

1. Pilih transaksi peminjaman yang akan dikembalikan.
2. Klik tombol pengembalian.
3. Konfirmasi proses pengembalian jika tersedia.
4. Tunjukkan bahwa status transaksi berubah menjadi `dikembalikan`.
5. Periksa tanggal pengembalian yang tercatat.

### 9. Tampilkan Laporan Peminjaman

1. Buka menu Laporan atau akses http://127.0.0.1:8000/loans/report.
2. Tunjukkan daftar transaksi peminjaman.
3. Jelaskan informasi yang ditampilkan:
   - ID transaksi.
   - Nama anggota.
   - Nama petugas.
   - Daftar buku.
   - Tanggal pinjam.
   - Tanggal kembali.
   - Status peminjaman.
4. Tunjukkan pagination jika jumlah transaksi melebihi satu halaman.

### 10. Demo REST API Menggunakan Postman

Gunakan base URL:

`http://127.0.0.1:8011/api`

Contoh endpoint yang dapat didemonstrasikan:

| Metode | Endpoint | Fungsi |
|---|---|---|
| GET | `/books` | Melihat daftar buku |
| GET | `/books/{id}` | Melihat detail buku |
| POST | `/books` | Menambahkan buku |
| PUT | `/books/{id}` | Memperbarui buku |
| DELETE | `/books/{id}` | Menghapus buku |
| GET | `/members` | Melihat daftar anggota |
| GET | `/members/{id}` | Melihat detail anggota |
| GET | `/loans` | Melihat daftar peminjaman |
| POST | `/loans` | Membuat peminjaman |
| PUT | `/loans/{id}/kembalikan` | Memproses pengembalian |
| GET | `/stats` | Melihat statistik perpustakaan |

Contoh pengujian:

**A. Melihat daftar buku**
- Method: `GET`
- URL: `http://127.0.0.1:8011/api/books`
- Tunjukkan response JSON daftar buku.

**B. Melihat daftar anggota**
- Method: `GET`
- URL: `http://127.0.0.1:8011/api/members`
- Tunjukkan response JSON daftar anggota.

**C. Melihat daftar peminjaman**
- Method: `GET`
- URL: `http://127.0.0.1:8011/api/loans`
- Tunjukkan response JSON transaksi peminjaman.

**D. Melihat statistik**
- Method: `GET`
- URL: `http://127.0.0.1:8011/api/stats`
- Tunjukkan nilai total buku, total anggota, dan peminjaman aktif.

**Catatan:** Untuk request POST dan PUT, gunakan format body dan field sesuai validasi pada API Controller project.

## Penutup Demo

Akhiri demonstrasi dengan menjelaskan bahwa aplikasi menyediakan pengelolaan data perpustakaan, transaksi peminjaman dan pengembalian, laporan, serta REST API yang dapat digunakan untuk pertukaran data.

