<?php
// Di dalam file PHP (misalnya, index.php)
include_once("inc_header.php");

// Ambil data dari PHP dan simpan dalam variabel JavaScript
echo '<script>';
echo 'var gambarUrl = "' . ambil_gambar('8') . '";';
echo 'var kutipan = "' . ambil_kutipan('8') . '";';
echo 'var judul = "' . ambil_judul('8') . '";';
echo 'var isi = "' . maximum_kata(ambil_isi('8'), 65) . '";';
echo '</script>';
?>

<!-- Isi HTML -->
<section id="home">
    <img src="<?php echo ambil_gambar('8') ?>" class="animated-image" />
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('8') ?></p>
        <h2><?php echo ambil_judul('8') ?></h2>
        <?php echo maximum_kata(ambil_isi('8'), 65) ?>
        <p><a href="<?php echo buat_link_halaman('8') 
        ?>" 
        class="tbl-biru">Selengkapnya</a></p>
    </div>
</section>

<!-- Skrip JavaScript -->
<script src="script.js"></script>


<!-- untuk karir -->
<section id="home">
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('9') ?></p>
        <h2><?php echo ambil_judul('9') ?></h2>
        <?php echo maximum_kata(ambil_isi('9'), 65) ?>
        <p><a href="<?php echo buat_link_halaman('9') ?>" class="tbl-biru">Selengkapnya</a></p>
    </div>
    <img src="<?php echo ambil_gambar('9') ?>" 
    class="animated-image" />
</section>

<!-- untuk tutors -->
<section id="tutors">
    <div class="tengah">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>My Certified</h2>
            <p>Harry Agustanto S.H., M.H. adalah seorang profesional yang memiliki sertifikasi sebagai Certified Risk Governance Professional (CRGP) dari BNSP RI, Certification in Audit Committee Practices (CACP) dari Ikatan Komite Audit Indonesia, Associate Certified Coach (ACC) dari International Coaching Federation, Certified Professional Human Resources Management (CPHRM), Certified Trainer NLP (CTNLP), Certification in Lead Auditor ISO 9001 QMS, dan Certified Fraud Auditing.</p>
        </div>

        <div class="tutor-list">
            <?php
            $sql1       = "select * from tutors order by id asc";
            $q1         = mysqli_query($koneksi, $sql1);
            while ($r1 = mysqli_fetch_array($q1)) {
            ?>
                <div class="kartu-tutor">
                    <a href="<?php echo buat_link_tutors($r1['id']) ?>">
                        <img src="<?php echo url_dasar() . "/gambar/" . tutors_foto($r1['id']) ?>" />
                        <p><?php echo $r1['nama'] ?></p>
                    </a>
                </div>
            <?php
            }
            ?>


        </div>
    </div>
</section>

<!-- untuk partners -->
<section id="partners">
    <div class="tengah">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>Knowledge</h2>
            <p>Harry Agustanto S.H., M.H., adalah seorang profesional hukum yang telah melengkapi pendidikan tinggi dengan meraih gelar S-1 (Sarjana Hukum) dan S-2 (Magister Hukum) dari Fakultas Hukum Universitas Indonesia, menggabungkan pengetahuan mendalam dengan pengalaman praktis untuk memberikan kontribusi yang berarti dalam berbagai konteks profesional</p>
        </div>

        <div class="partner-list">
            <?php
            $sql1   = "select * from partners order by id asc";
            $q1     = mysqli_query($koneksi, $sql1);
            while ($r1 = mysqli_fetch_assoc($q1)) {
            ?>
                <div class="kartu-partner">
                    <a href="<?php echo buat_link_partners($r1['id'])?>">
                    <img src="<?php echo url_dasar()."/gambar/".partners_foto($r1['id'])?>"/>
                    </a>
                </div>
            <?php
            }
            ?>


        </div>
    </div>
</section>
<?php include_once("inc_footer.php") ?>