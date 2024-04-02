</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3><?php echo ambil_isi_info('1', 'judul')?></h3>
                    <?php echo ambil_isi_info('1', 'isi')?>
                </div>
                <div class="footer-section">
                    <h3><?php echo ambil_isi_info('2', 'judul')?></h3>
                    <?php echo ambil_isi_info('2', 'isi')?>
                </div>
                <div class="footer-section">
                    <h3><?php echo ambil_isi_info('3', 'judul')?>
                        <!-- Tambahkan ikon Font Awesome untuk Email dan Linkedin -->
                        <a href="mailto:<?php echo ambil_isi_info('3', 'email')?>" class="footer-icon">
                        <br>
                        <i class="fas fa-envelope"></i></a>
                        <a href="<?php echo ambil_isi_info('3', 'linkedin')?>" class="footer-icon"><i class="fab fa-linkedin"></i></a>
                    </h3>
                    <?php echo ambil_isi_info('3', 'isi')?>
                </div>
                <div class="footer-section">
                    <h3><?php echo ambil_isi_info('4', 'judul')?></h3>
                    <?php echo ambil_isi_info('4', 'isi')?>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2024. <b>Harry Agustanto S.H.,M.H..</b> All Rights Reserved.
        </div>
    </div>

</body>
</html>