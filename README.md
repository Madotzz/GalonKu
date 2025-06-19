<h1 align="center">GALONKU</h1>

<hr/>

<h3 align="center">PLATFORM PEMESANAN DAN PENGANTARAN GALON AIR</h3>

---

<p align="center">
  <img src="https://github.com/user-attachments/assets/191c51a4-97a2-451a-84ee-6e6527d81644" width="200" alt="Logo Universitas"/>
</p>


<p align="center">
  <strong>RAHMAT RAHMADI</strong><br/><br/>
  <strong>D0223327</strong><br/><br/>
  <strong>Framework Web Based</strong><br/><br/>
  <strong>2025</strong>
</p>

---

## Role dan Fitur-fiturnya

### 🔧 - Admin
- Manajemen data galon
- CRUD User (Kurir, Customer)
- Lihat dan Kelola Transaksi

### 🚚 - Kurir
- Melihat pesanan masuk
- Update status pengiriman

### 🛒 - Customer
- Registrasi & Login
- Pemesanan galon
- Lihat riwayat transaksi

---

## Tabel-tabel database beserta field dan tipe datanya

### 1. users

| Field      | Tipe Data    | Keterangan                         |
|------------|--------------|------------------------------------|
| id         | INT          | Primary Key                        |
| nama       | VARCHAR(255) | Nama pengguna                      |
| kata_sandi | VARCHAR(255) | Password (terenkripsi idealnya)    |
| role       | ENUM         | admin / kurir / customer           |
| created_at | TIMESTAMP    | Waktu dibuat                       |
| updated_at | TIMESTAMP    | Waktu diubah                       |

### 2. produks

| Field      | Tipe Data     | Keterangan         |
|------------|---------------|--------------------|
| id         | INT           | Primary Key        |
| nama       | VARCHAR(255)  | Nama produk        |
| stok       | INTEGER       | Stok tersedia      |
| harga      | DECIMAL(10,2) | Harga satuan       |
| created_at | TIMESTAMP     | Waktu dibuat       |
| updated_at | TIMESTAMP     | Waktu diubah       |

### 3. pesanans

| Field      | Tipe Data     | Keterangan                           |
|------------|---------------|---------------------------------------|
| id         | INT           | Primary Key                           |
| user_id    | INT           | Relasi ke tabel users                 |
| produk_id  | INT           | Relasi ke tabel produks               |
| alamat     | TEXT          | Alamat pengiriman                     |
| status     | ENUM          | dikirim / selesai                     |
| kontak     | VARCHAR(255)  | Nomor kontak customer                 |
| created_at | TIMESTAMP     | Waktu dibuat                          |
| updated_at | TIMESTAMP     | Waktu diubah                          |

### 4. transaksi

| Field          | Tipe Data     | Keterangan                           |
|----------------|---------------|---------------------------------------|
| id             | INT           | Primary Key                           |
| pesanan_id     | INT           | Relasi ke tabel pesanans              |
| produk_id      | INT           | Relasi ke tabel produks               |
| jumlah         | INTEGER       | Jumlah produk yang dipesan            |
| subtotal_harga | DECIMAL(10,2) | Harga subtotal (jumlah × harga)       |
| created_at     | TIMESTAMP     | Waktu dibuat                          |
| updated_at     | TIMESTAMP     | Waktu diubah                          |

### 5. deliveries

| Field      | Tipe Data     | Keterangan                           |
|------------|---------------|---------------------------------------|
| id         | INT           | Primary Key                           |
| pesanan_id | INT           | Relasi ke tabel pesanans              |
| kurir_id   | INT           | Relasi ke tabel users (role = kurir)  |
| status     | ENUM          | dalam_perjalanan / terkirim           |
| created_at | TIMESTAMP     | Waktu dibuat                          |
| updated_at | TIMESTAMP     | Waktu diubah                          |

---

## Jenis relasi dan tabel yang berelasi

- **users** ↔ **pesanans** (One to Many)  
  Satu user (customer) bisa memiliki banyak pesanan.

- **produks** ↔ **pesanans** (One to Many)  
  Satu produk bisa dipesan oleh banyak customer.

- **pesanans** ↔ **transaksi** (One to Many)  
  Satu pesanan dapat berisi beberapa item transaksi.

- **produks** ↔ **transaksi** (One to Many)  
  Satu produk dapat muncul di banyak transaksi.

- **produks** ↔ **pesanans** (Many to Many melalui transaksi)  
  Karena satu pesanan dapat berisi banyak produk, dan satu produk bisa muncul di banyak pesanan.  
  Relasi ini dijembatani oleh tabel **transaksi**, yang menyimpan info tambahan seperti `jumlah` dan `subtotal_harga`.

- **pesanans** ↔ **deliveries** (One to One)  
  Satu pesanan memiliki satu entri pengiriman.

- **users (kurir)** ↔ **deliveries** (One to Many)  
  Satu kurir bisa menangani banyak pengiriman.

---

