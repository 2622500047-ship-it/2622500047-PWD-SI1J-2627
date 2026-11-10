<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" /> 
    <title>Profil Muhammad Rifky</title>
    
</head>
<body>
    <header>
        <h1>Tentang Rifky</h1>
        <nav>
            <ul id="navMenu">
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Profil</a></li>
                <li><a href="#daftar">Pendaftaran</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home">
            <h2>Welcome</h2>
            <p>Profil singkat, Nama saya Muhammad Rifky bisa dipanggil Rifky , saya alumni ponpes sablul hasanah di palembang.<br>
                Hobi saya olahraga seperti sepak bola dan olahraga lainnya, saya anak kedua dari 5 saudara</p>
        </section>

        <section id="about">
            <h2>Profil</h2>
            <img src="img/foto-profil.jpeg" width="100" height="160">
            <article>
                <h3>Biodataku</h3>
                <p>Nama Muhammad Rifky,Bisa dipanggil rifky, saya berumur 19 tahun saya bertempat tinggal di desa zed.<br> tanggal lahir saya 09 maret 2007, saya lulusan ponpes sabilul hasanah sumatra selatan, saya juga sedang melanjutkan jenjang S1 di ISB Atmaluhur Pangkal Pinang<br>
                    hobi saya aadalah olahraga seperti sepak bola dan olahraga lainnya,saya juga hoby healing seperti menikmati alam atau kurang lebih jalan jalan ke tempat yang menenangkan pikiran, </p>
        </section>

<section id="daftar">
    <h2>Formulir</h2>
<form action="index.html" method="post">
    <div class="form-group">
        <label for="nama">Nama Lengkap</label><br>
        <input class="input-form"
               type="text"   
               id="nama"
               name="nama"
               placeholder="Masukkan nama lengkap"
               minlength="3"
               maxlength="50"
               required>
    </div>

    <div class="form-group">
        <label for="email">Email</label><br>
        <input class="input-form"
               type="email"
               id="email"
               name="email"
               placeholder="nama@email.com"
               required>
    </div>


   <div class="form-group">
        <label for="tanggal">Tanggal Kunjungan</label><br>
        <input class="input-form"
               type="date"
               id="tanggal" 
               name="tanggal" 
               required> 
    </div>

    <div class="form-group">
        <label for="pesan">Pesan</label><br>
        <textarea 
            class="input-form"
            id="pesan"
            name="pesan"
            maxlength="300"
            placeholder="Tulis pesan Anda"
            required>
        </textarea>
    </div>

    <button type="submit">Kirim</button>
    <button type="reset">Batal</button>
  </form>
</section>
</main> 
    
<footer> 
    <p>&copy; 2622500047_Muhammad_Rifky_SI1J_UTS Pemrograman Daftar</p> 
</footer> 
</body> 
</html>