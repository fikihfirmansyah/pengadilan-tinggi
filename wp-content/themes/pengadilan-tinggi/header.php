<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=8" /><![endif]-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="description" content="description goes here">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="robots" content="index, follow" />

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <?php
    wp_head()
    ?>
    <script>
        jQuery(document).ready(function() {
            jQuery('.toggle-nav').click(function(e) {
                jQuery('.menu-header ul.menu').slideToggle(500);

                e.preventDefault();
            });

        });

        // (function() {
        //     var options = {
        //         whatsapp: "6282370382008", // WhatsApp number
        //         instagram: "pengadilantinggimedan", // Instagram username
        //         call_to_action: "Ada Pertanyaan?", // Call to action
        //         button_color: "#FF6550", // Color of button
        //         position: "right", // Position may be 'right' or 'left'
        //         order: "whatsapp,instagram", // Order of buttons
        //     };
        //     var proto = document.location.protocol,
        //         host = "getbutton.io",
        //         url = proto + "//static." + host;
        //     var s = document.createElement('script');
        //     s.type = 'text/javascript';
        //     s.async = true;
        //     s.src = url + '/widget-send-button/js/init.js';
        //     s.onload = function() {
        //         WhWidgetSendButton.init(host, proto, options);
        //     };
        //     var x = document.getElementsByTagName('script')[0];
        //     x.parentNode.insertBefore(s, x);
        // })();
    </script>
</head>

<body>


    <header>
        <div class="logo-img">
            <!--begin logo -->
            <?php
            if (function_exists('the_custom_logo')) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
            }
            ?>
            <a href="<?php echo home_url(); ?>"><img src="<?php echo $logo[0] ?>" alt="logo mahkamah agung website ramah difable" /></a>
            <?php echo do_shortcode('[gtranslate]'); ?>
            <?php echo do_shortcode('[wp-ada-access-tools]'); ?>
        </div>
        <div class="header">

            <!--begin bar nav section -->
            <section class="bar nav">
                <div class="nav-outer">
                    <div class="nav-wrapper">
                        <div class="nav-inner">
                            <nav id="menu">
                                <ul class="menu">
                                    <li class="current"><a href="./index.html"><span>Beranda</span></a>

                                    <li><a href="#"><span>Tentang Pengadilan</span></a>
                                        <div>
                                            <ul>
                                                <li><a href="./Pengantar KPN.html"><span>Pengantar dari Ketua
                                                            Pengadilan</span></a></li>
                                                <li><a href="./visimisi.html"><span>Visi dan Misi Pengadilan</span></a>
                                                </li>
                                                <li><a class="parent" href="#"><span> Profile Pengadilan</span></a>
                                                    <div>
                                                        <ul class="single">
                                                            <li><a href="./sejarah.html"><span>Sejarah
                                                                        Pengadilan</span></a></li>
                                                            <li><a href="./profile_hakim.html"><span>Profile
                                                                        Hakim</span></a></li>
                                                            <li><a href="./struktur.html"><span>Struktur
                                                                        Organisasi</span></a></li>
                                                            <li><a href="./statistik.html"><span>Statistik
                                                                        Pengadilan</span></a></li>
                                                            <li><a href="./alamat.html"><span>Wilayah
                                                                        Yuridiksi</span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a class="parent" href="#"><span> Kepaniteraan</span></a>
                                                    <div>
                                                        <ul class="single">
                                                            <li><a href="./Panitera Pidana.html"><span>Kepaniteraan
                                                                        Pidana</span></a></li>
                                                            <li><a href="./Panitera Perdata.html"><span>Kepaniteraan
                                                                        Perdata</span></a></li>
                                                            <li><a href="./Panitera hukum.html"><span>Kepaniteraan
                                                                        Hukum</span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a class="parent" href="#"><span>Sistem Pengelolaan
                                                            Pengadilan</span></a>
                                                    <div>
                                                        <ul class="single">
                                                            <li><a href="./elearning.html"><span>E-Learning</span></a>
                                                            </li>
                                                            <li><a href="./kebijakan.html"><span>Kebijakan dan Peraturan
                                                                        Pengadilan</span></a></li>
                                                            <li><a href="./yurisprudensi.html"><span>Yurisprudensi</span></a>
                                                            </li>
                                                            <li><a href="./renstra.html"><span>Rencana
                                                                        Strategis</span></a></li>
                                                            <li><a href="./raker.html"><span>Rencana Kerja dan Anggaran
                                                                    </span></a></li>
                                                            <li><a href="./kode etik.html"><span>Pengawasan dan Kode
                                                                        Etik Hakim</span></a></li>
                                                        </ul>
                                                    </div>
                                                <li>

                                                <li><a href="./Survey Kepuasan.html"><span>Survey Pelayanan
                                                            Publik</span></a></li>
                                                <li><a href="./kegiatan.html"><span>Kegiatan Pengadilan</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="#"><span>Layanan Publik</span></a>
                                        <div>
                                            <ul>

                                                <li><a href="#"><span>Jam Kerja</span></a>
                                                <li><a href="./Jadwal Sidang.html"><span>Jadwal Sidang</span></a></li>
                                                <li><a href="#"><span>Informasi SMS</span></a>
                                                <li><a href="./pros_informasi.html"><span>Prosedur Permohonan
                                                            Informasi</span></a></li </li>
                                                <li><a class="parent" href=""><span>Pelayanan Informasi
                                                            Perkara</span></a>
                                                    <div>
                                                        <ul>
                                                            <li><a href="./sipp.html"><span>Penelusuran
                                                                        Perkara</span></a></li>
                                                            <li><a href="http://putusan.mahkamahagung.go.id"><span>Direktori
                                                                        Putusan</span></a></li>
                                                            <li><a href="./delegasi.html"><span>Delegasi</span></a></li>
                                                            <li><a href="./delegasi.html"><span>Statistik
                                                                        Perkara</span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a class="parent" href="#"><span>Laporan</span></a>
                                                    <div>
                                                        <ul>
                                                            <li><a href="./peraturan.html"><span>Hasil
                                                                        Penelitian</span></a></li>
                                                            <li><a href="./lakip.html"><span>Ringkasan Laporan
                                                                        Akuntablitas Kinerja Instansi Pemerintah
                                                                        (LAKIP).</span></a></li>
                                                            <li><a class="parent" href="#"><span>Ringkasan daftar aset
                                                                        dan inventaris</span></a>
                                                            <li><a class="parent" href="#"><span>Laporan
                                                                        Tahunan</span></a>
                                                            <li><a class="parent" href="#"><span>Laporan Pelayanan
                                                                        Informasi Publik</span></a>
                                                            <li><a href="./lkhpn.html"><span>Laporan Harta Kekayaan
                                                                        Pejabat Negara (LHKPN)</span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>


                                                <li><a class="parent" href="#"><span>Pengumuman</span></a>
                                                    <div>
                                                        <ul>
                                                            <li><a href="./lelang.html"><span>Lelang Barang dan
                                                                        Jasa</span></a></li>
                                                            <li><a href="./pns.html"><span>Penerimaan Pegawai</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="./form_pengaduan.html"><span>Pengaduan Layanan
                                                            Publik</span></a></li>
                                            </ul>
                                        </div>
                                    </li>

                                    </li>
                                    <li><a href="#"><span>Layanan Hukum</span></a>
                                        <div>
                                            <ul>
                                                <li><a class="parent" href="#"><span>Layanan Hukum Bagi Masyarakat
                                                            Kurang Mampu</span></a>
                                                    <div>
                                                        <ul class="double">
                                                            <li><a href="./pros_perkara.html"><span>Prosedur</span></a>
                                                            </li>
                                                            <li><a href="./biaya_perkara.html"><span>Biaya </span></a>
                                                            </li>
                                                            <li><a href="./posbakum.html"><span>Posbakum</span></a></li>
                                                            <li><a href="./peraturan_bakum.html"><span>Peraturan dan
                                                                        Kebijakan</span></a></li>
                                                            <li><a href="./pengawasan.html"><span>Pengawasan</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="./pros_perkara.html"><span>Prosedur Pengajuan dan Biaya
                                                            Perkara</span></a></li>
                                                <li><a href="#"><span></span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="#"><span>Berita</span></a>
                                        <div>
                                            <ul>
                                                <li><a href="./update_news.html"><span> Berita Terkini</span></a></li>
                                                <li><a href="./press.html"><span>Media Center</span></a></li>
                                                <li><a href=".//gallery.html"><span>Foto Gallery</span></a></li>
                                                <li><a href="./arsip.html"><span>Arsip Berita</span></a></li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="contact.html"><span>Hubungi Kami</span></a>
                                        <div>
                                            <ul>
                                                <li><a href="./Lokasi Pengadilan.html"><span>Alamat
                                                            Pengadilan</span></a></li>
                                                <li><a href="./reg-form.html"><span>Registrasi</span></a></li>
                                                <li><a href="./faq-page.html"><span>Pertanyaan</span></a></li>
                                            </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <div class="cleared reset-box"></div>

            <?php add_revslider('Slider Utama'); ?>
        </div>
    </header>
    <div class="cleared reset-box"></div>

    <!--begin content  layout section -->
    <div class="box sheet">
        <div class="box-body sheet-body">
            <div class="layout-wrapper">
                <div class="content-layout">
                    <div class="content-layout-row">

                        <!--begin main content section -->
                        <div class="layout-cell content">
                            <div class="box post">
                                <div class="box-body post-body">
                                    <div class="post-inner article">