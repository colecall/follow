/*
KASUS - KASUS :

VALIDASI :
User tidak bisa se enaknya untuk mendapatkan followers terus jika dia memiliki max 10 orang permintaan untuk di follback!

VALIDASI 2 :
KHUSUS LIKE & COMMENT,
SETIAP USER BISA MEMBUAT BANYAK LINK POST UNTUK COMMENT / LINK POST UNTUK LIKE AKAN TETAPI DIPERBOLEHKAN HANYA 1 STATUS YANG AKTIF

VALIDASI 3 :
JIKA PADA LIST REAL USER MINTA DI FOLLOW OLEH FAKE ACCOUNT JIKA REAL USER HANYA MEMILIKI 2 AKUN FAKE MAKA DI SELECT HANYA TAMPIL SEBANYAK BERAPA BANYAK SI AKUN REAL MEMILIKI AKUN FAKE

MENANGANI KECURANGAN :
Membuat 1 fitur laporan kecurangan yang fungsinya jika ada 10 orang melapor user real account tersebut tidak follback maka otomatis akan di banned dari web dan jika orang tersebut masih nakal untuk daftar di web dengan nama yang berbeda akan tetapi dia mendaftarkan username yang sama sebelumnya tidak akan bisa karena username telah terdaftar!

// TAMBAHAN 1
Tambahkan 1 kolom pada fake users yaitu counter yang nantinya per hari counter akan mereset dari 0. dan jika si user follow orang 50x dalam 1 hari otomatis desable dan tidak bisa ngefollow orang lagi sampai ke esokan harinya.

// TAMBAHAN 2
Si user bisa mendapatkan 30-90 bahkan lebih followers tergantung berapa banyak dia punya fake account.
jika dia memiliki 1 maka hanya dapat 30 followers dan jika 2 maka bisa dapat 60 followers per hari
*/
// SELURUH AKUN TUMBAL YOUTUBE,TIKTOK & IG WAJIB PUBLIC SUBSCRIBER AGAR DAPAT DI CEK APAKAH DIA NGESUBS/TIDAK!

// NEXT UPDATE BOT YANG AKAN MENGECEK OTOMATIS KETIKA USER FOLLOW AKAN MASUK KE LIST PENDING DAN JIKA TIDAK ADA CALLBAKC DARI SI USER UNTUK ACCEPT / MALES ACCEPT, AKAN OTOMATIS DICEK SETIAP 5 MENIT SEKALI.

// NEXT - PADA LISTING DI SELECT HANYA MENAMPILKAN FAKE USER YANG BELUM PERNAH FOLLOW ( DONE )
// NEXT - PADA LISTING JIKA USER REAL HANYA MEMILIKI 3 ACCOUNT FAKE MAKA MUNCULKAN 3 AKUN TERSEBUT JIKA LAWAN FAKE ACCOUNT MEMILIKI LEBIH DARI 3 ACCOUNT