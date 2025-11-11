<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">&#9776;</button>
        <button class="sidebar-toggle" id="sidebarToggle" aria-label="Toggle Sidebar">☰</button>
        <h1>Ini Header</h1>
        <nav id="navMenu">
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#ipk">Nilai Saya</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>
    
    <aside class="sidebar" id="sidebar">
        <button onclick="scrollToSection('home')">Beranda</button>
        <button onclick="scrollToSection('about')">Tentang</button>
        <button onclick="scrollToSection('ipk')">Nilai Saya</button>
        <button onclick="scrollToSection('contact')">Kontak</button>
    </aside>
    
    <main>
        <section id="home">
            <h2>Selamat Datang</h2>
            <p>Ini contoh paragraf HTML.</p>
        </section>
        <section id="about">
            <h2> &#128512;TENTANG SAYA&#128512; </h2>
            <?php
                // Variabel PHP untuk data diri
                $nim = "2522500066";
                $nama_lengkap = "Revandi Sastra";
                $tempat_lahir = "Tanjung Sangkar";
                $tanggal_lahir = "02-09-2006";
                $hobi = "Main motor, Main bola,";
                $pasangan = "Jomblo";
                $pekerjaan = "Saya adalah mahasiswa";
                $nama_orang_tua = "Nama Ayah saya adalah Basuni dan Nama Ibu saya Jamila";
                $nama_kakak = "Ricky";
                $nama_adik = "Varendra";

                // Menampilkan data menggunakan echo
                echo "<p><strong>NIM:</strong> $nim</p>";
                echo "<p><strong>Nama Lengkap:</strong> $nama_lengkap</p>";
                echo "<p><strong>Tempat lahir:</strong> $tempat_lahir</p>";
                echo "<p><strong>Tanggal lahir:</strong> $tanggal_lahir</p>";
                echo "<p><strong>Hobi:</strong> $hobi</p>";
                echo "<p><strong>Pasangan:</strong> $pasangan</p>";
                echo "<p><strong>Pekerjaan:</strong> $pekerjaan</p>";
                echo "<p><strong>Nama orang tua:</strong> $nama_orang_tua</p>";
                echo "<p><strong>Nama kakak:</strong> $nama_kakak</p>";
                echo "<p><strong>Nama adik:</strong> $nama_adik</p>";
            ?>
        </section>
        <section id="ipk">
            <h2>Nilai Saya</h2>
            <?php
                // Data mata kuliah (contoh berdasarkan instruksi)
                $namaMatkul1 = "Algoritma dan Struktur Data";
                $sksMatkul1 = 4;
                $nilaiHadir1 = 90;
                $nilaiTugas1 = 60;
                $nilaiUTS1 = 80;
                $nilaiUAS1 = 70;

                $namaMatkul2 = "Agama";
                $sksMatkul2 = 2;
                $nilaiHadir2 = 70;
                $nilaiTugas2 = 50;
                $nilaiUTS2 = 60;
                $nilaiUAS2 = 80;

                $namaMatkul3 = "Basis Data";
                $sksMatkul3 = 3;
                $nilaiHadir3 = 85;
                $nilaiTugas3 = 75;
                $nilaiUTS3 = 70;
                $nilaiUAS3 = 65;

                $namaMatkul4 = "Jaringan Komputer";
                $sksMatkul4 = 4;
                $nilaiHadir4 = 80;
                $nilaiTugas4 = 70;
                $nilaiUTS4 = 75;
                $nilaiUAS4 = 85;

                $namaMatkul5 = "Pemrograman Web Dasar";
                $sksMatkul5 = 3;
                $nilaiHadir5 = 69;
                $nilaiTugas5 = 80;
                $nilaiUTS5 = 90;
                $nilaiUAS5 = 100;

                // Fungsi untuk menghitung grade berdasarkan nilai akhir dan hadir
                function hitungGrade($nilaiAkhir, $nilaiHadir) {
                    if ($nilaiHadir < 70) return "E";
                    if ($nilaiAkhir >= 85) return "A";
                    if ($nilaiAkhir >= 80) return "A-";
                    if ($nilaiAkhir >= 75) return "B+";
                    if ($nilaiAkhir >= 70) return "B";
                    if ($nilaiAkhir >= 65) return "B-";
                    if ($nilaiAkhir >= 60) return "C+";
                    if ($nilaiAkhir >= 55) return "C";
                    if ($nilaiAkhir >= 50) return "C-";
                    if ($nilaiAkhir >= 45) return "D";
                    return "E";
                }

                // Fungsi untuk menghitung mutu berdasarkan grade
                function hitungMutu($grade) {
                    switch ($grade) {
                        case "A": return 4.00;
                        case "A-": return 3.70;
                        case "B+": return 3.30;
                        case "B": return 3.00;
                        case "B-": return 2.70;
                        case "C+": return 2.30;
                        case "C": return 2.00;
                        case "C-": return 1.70;
                        case "D": return 1.00;
                        case "E": return 0.00;
                        default: return 0.00;
                    }
                }

                // Fungsi untuk menghitung status
                function hitungStatus($grade) {
                    return in_array($grade, ["A", "A-", "B+", "B", "B-", "C+", "C", "C-"]) ? "Lulus" : "Gagal";
                }

                // Perhitungan untuk setiap mata kuliah
                for ($i = 1; $i <= 5; $i++) {
                    $nama = ${"namaMatkul$i"};
                    $sks = ${"sksMatkul$i"};
                    $hadir = ${"nilaiHadir$i"};
                    $tugas = ${"nilaiTugas$i"};
                    $uts = ${"nilaiUTS$i"};
                    $uas = ${"nilaiUAS$i"};

                    $nilaiAkhir = (0.1 * $hadir) + (0.2 * $tugas) + (0.3 * $uts) + (0.4 * $uas);
                    $grade = hitungGrade($nilaiAkhir, $hadir);
                    $mutu = hitungMutu($grade);
                    $bobot = $mutu * $sks;
                    $status = hitungStatus($grade);

                    // Simpan hasil
                    ${"nilaiAkhir$i"} = number_format($nilaiAkhir, 0);
                    ${"grade$i"} = $grade;
                    ${"mutu$i"} = number_format($mutu, 2);
                    ${"bobot$i"} = number_format($bobot, 2);
                    ${"status$i"} = $status;

                    // Tampilkan
                    echo "<p><strong>Nama Matakuliah ke-$i:</strong> $nama</p>";
                    echo "<p><strong>SKS:</strong> $sks</p>";
                    echo "<p><strong>Kehadiran:</strong> $hadir</p>";
                    echo "<p><strong>Tugas:</strong> $tugas</p>";
                    echo "<p><strong>UTS:</strong> $uts</p>";
                    echo "<p><strong>UAS:</strong> $uas</p>";
                    echo "<p><strong>Nilai Akhir:</strong> ${"nilaiAkhir$i"}</p>";
                    echo "<p><strong>Grade:</strong> ${"grade$i"}</p>";
                    echo "<p><strong>Angka Mutu:</strong> ${"mutu$i"}</p>";
                    echo "<p><strong>Bobot:</strong> ${"bobot$i"}</p>";
                    echo "<p><strong>Status:</strong> ${"status$i"}</p>";
                    echo "<hr>";
                }

                // Hitung total
                $totalBobot = $bobot1 + $bobot2 + $bobot3 + $bobot4 + $bobot5;
                $totalSKS = $sksMatkul1 + $sksMatkul2 + $sksMatkul3 + $sksMatkul4 + $sksMatkul5;
                $IPK = number_format($totalBobot / $totalSKS, 2);

                // Tampilkan total
                echo "<p><strong>Total Bobot:</strong> $totalBobot</p>";
                echo "<p><strong>Total SKS:</strong> $totalSKS</p>";
                echo "<p><strong>IPK:</strong> $IPK</p>";
            ?>
        </section>
        <section id="contact">
            <h2>Kontak Kami</h2>
            <form action="" method="GET">
                <label for="txtNama">
                    <span>Nama:</span>
                    <input type="text" id="txtNama" name="txtNama" placeholder="Masukan nama" required autocomplete="name">
                </label>
                <label for="txtEmail">
                    <span>Email:</span>
                    <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukan email" required autocomplete="email">
                </label>
                <label for="txtPesan">
                    <span>Pesan Anda:</span>
                    <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required maxlength="200"></textarea>
                    <small id="charCount">0/200 karakter</small>
                </label>
                <button type="submit">Kirim</button>
                <button type="reset">Batal</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Revandi Sastra [2522500066]</p>
    </footer>
    <button id="scrollToTopBtn" title="Kembali ke Atas">↑</button>
    <script src="script.js"></script>
</body>
</html>
