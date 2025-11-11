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
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>
    
    <aside class="sidebar" id="sidebar">
        <button onclick="scrollToSection('home')">Beranda</button>
        <button onclick="scrollToSection('about')">Tentang</button>
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
        <p>&copy; 2025 Revandi Sastra [2522500080]</p>
    </footer>
    <button id="scrollToTopBtn" title="Kembali ke Atas">↑</button>
    <script src="script.js"></script>
</body>
</html>
