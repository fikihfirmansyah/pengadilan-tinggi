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
            <a href="index.html"><img src="<?php echo $logo[0] ?>" alt="logo mahkamah agung website ramah difable" /></a>
        </div>
        <div class="header">

            <!--begin bar nav section -->
            <section class="bar nav">
                <div class="nav-outer">
                    <div class="nav-wrapper">
                        <div class="nav-inner">
                            <nav id="menu">
                                <ul class="menu">
                                    <li id="menu-item-11" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home"><a href="https://www.pt-bengkulu.go.id/"><span>Home</span></a></li>
                                    <li id="menu-item-306" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a class="parent" href="#"><span>Tentang Pengadilan</span></a>
                                        <div>
                                            <ul>
                                                <li id="menu-item-314" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/kata-sambutan"><span>Pengantar dari Ketua Pengadilan</span></a></li>
                                                <li id="menu-item-323" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/visi-dan-misi"><span>Visi dan Misi</span></a></li>
                                                <li id="menu-item-522" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a class="parent" href="#"><span>Profil Pengadilan</span></a>
                                                    <div>
                                                        <ul>
                                                            <li id="menu-item-304" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/profil-dan-sejarah-pengadilan-tinggi-bengkulu"><span>Sejarah</span></a></li>
                                                            <li id="menu-item-521" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/struktur-organisasi"><span>Struktur Organisasi</span></a></li>
                                                            <li id="menu-item-1002" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/struktur-organisasi/pejabat-struktural"><span>Profil Pejabat Struktural</span></a></li>
                                                            <li id="menu-item-523" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/statistik-perkara"><span>Statistik Perkara</span></a></li>
                                                            <li id="menu-item-539" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/wilayah-yuridiksi"><span>Wilayah Yuridiksi</span></a></li>
                                                            <li id="menu-item-460" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/kunjungi-kami"><span>Kunjungi Kami</span></a></li>

                                                        </ul>
                                                    </div>
                                                </li>
                                                <li id="menu-item-3593" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a class="parent" href="#"><span>Profil Hakim dan Pegawai</span></a>
                                                    <div>
                                                        <ul>
                                                            <li id="menu-item-1000" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/struktur-organisasi/profil-hakim"><span>Profil Hakim</span></a></li>
                                                            <li id="menu-item-1064" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/struktur-organisasi/profil-kepaniteraan"><span>Profil Kepaniteraan</span></a></li>
                                                            <li id="menu-item-1063" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/struktur-organisasi/profil-kesekretariatan"><span>Profil Kesekretariatan</span></a></li>
                                                            <li id="menu-item-2141" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/struktur-organisasi/pejabat-fungsional-pengadilan-tinggi-bengkulu"><span>Profil Fungsional Tertentu</span></a></li>
                                                            <li id="menu-item-1620" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/struktur-organisasi/hakim-yang-pernah-bertugas-di-pengadilan-tinggi-bengkulu"><span>Hakim yang pernah bertugas di Pengadilan Tinggi Bengkulu</span></a></li>
                                                            <li id="menu-item-2137" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/struktur-organisasi/pegawai-yang-pernah-bertugas-di-pengadilan-tinggi-bengkulu"><span>Pegawai yang pernah bertugas di Pengadilan Tinggi Bengkulu</span></a></li>

                                                        </ul>
                                                    </div>
                                                </li>
                                                <li id="menu-item-3594" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a class="parent" href="#"><span>Profil Role Model dan Agen Perubahan</span></a>
                                                    <div>
                                                        <ul>
                                                            <li id="menu-item-3838" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/profil-role-model"><span>Profil Role Model</span></a></li>
                                                            <li id="menu-item-3836" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/profil-agen-perubahan"><span>Profil Agen Perubahan</span></a></li>

                                                        </ul>
                                                    </div>
                                                </li>
                                                <li id="menu-item-1066" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a class="parent" href="#"><span>Kepaniteraan</span></a>
                                                    <div>
                                                        <ul>
                                                            <li id="menu-item-1142" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a class="parent" href="#"><span>Prosedur Beracara</span></a>
                                                                <div>
                                                                    <ul>
                                                                        <li id="menu-item-1145" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/proses-perkara-banding-perdata"><span>Proses Perkara Banding Perdata</span></a></li>
                                                                        <li id="menu-item-1144" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/proses-perkara-banding-pidana"><span>Proses Perkara Banding Pidana</span></a></li>
                                                                        <li id="menu-item-1143" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/proses-perkara-banding-tindak-pidana-korupsi"><span>Proses Perkara Banding Tindak Pidana Korupsi</span></a></li>

                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li id="menu-item-1146" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/biaya-perkara-banding"><span>Biaya Perkara Banding</span></a></li>
                                                            <li id="menu-item-2186" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/indeks-kepuasan-masyarakat"><span>Indeks Kepuasan Masyarakat (IKM)</span></a></li>
                                                            <li id="menu-item-3685" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/indeks-persepesi-anti-korupsi"><span>Indeks Persepsi Anti Korupsi (IPAK)</span></a></li>

                                                        </ul>
                                                    </div>
                                                </li>
                                                <li id="menu-item-1065" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a class="parent" href="#"><span>Kesekretariatan</span></a>
                                                    <div>
                                                        <ul>
                                                            <li id="menu-item-2292" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a class="parent" href="#"><span>Kepegawaian</span></a>
                                                                <div>
                                                                    <ul>
                                                                        <li id="menu-item-3508" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/peraturan-kepegawaian"><span>Peraturan Kepegawaian</span></a></li>
                                                                        <li id="menu-item-1162" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/syarat-permohonan-karpeg-kartu-pegawai"><span>Syarat Permohonan Karpeg (Kartu Pegawai)</span></a></li>
                                                                        <li id="menu-item-1876" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/syarat-permohonan-karis-karsu"><span>Syarat Permohonan KarIs / KarSu</span></a></li>
                                                                        <li id="menu-item-1161" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/syarat-permohonan-askes-bpjs"><span>Syarat Permohonan Askes / BPJS</span></a></li>
                                                                        <li id="menu-item-1163" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/syarat-pensiun"><span>Syarat Pensiun</span></a></li>
                                                                        <li id="menu-item-1165" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/syarat-pengajuan-usul-kenaikan-pangkat"><span>Syarat Pengajuan Usul Kenaikan Pangkat</span></a></li>
                                                                        <li id="menu-item-1164" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/syarat-permohonan-taspen"><span>Syarat Permohonan Taspen</span></a></li>

                                                                    </ul>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </li>
                                                <li id="menu-item-525" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a class="parent" href="#"><span>Sistem Pengelolaan Pengadilan</span></a>
                                                    <div>
                                                        <ul>
                                                            <li id="menu-item-322" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/surat-dinas"><span>Surat Dinas</span></a></li>
                                                            <li id="menu-item-526" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://e-learning.mahkamahagung.go.id/"><span>E-Learning</span></a></li>
                                                            <li id="menu-item-527" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://jdih.mahkamahagung.go.id/"><span>Yurisprudensi</span></a></li>
                                                            <li id="menu-item-810" class="menu-item menu-item-type-post_type_archive menu-item-object-transparansi-renstra"><a href="https://www.pt-bengkulu.go.id/transparansi-renstra"><span>Rencana Strategis (RenStra)</span></a></li>
                                                            <li id="menu-item-811" class="menu-item menu-item-type-post_type_archive menu-item-object-transparansi-dipa"><a href="https://www.pt-bengkulu.go.id/transparansi-dipa"><span>DIPA (Daftar Isian Pelaksanaan Anggaran)</span></a></li>
                                                            <li id="menu-item-3486" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/realisasi-anggaran"><span>Realisasi Anggaran Pengadilan Tinggi Bengkulu</span></a></li>
                                                            <li id="menu-item-814" class="menu-item menu-item-type-post_type_archive menu-item-object-transparansi-iku"><a href="https://www.pt-bengkulu.go.id/transparansi-iku"><span>IKU (Indikator Kinerja Utama)</span></a></li>
                                                            <li id="menu-item-1096" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/perjanjian-kinerja"><span>Perjanjian Kinerja</span></a></li>

                                                        </ul>
                                                    </div>
                                                </li>
                                                <li id="menu-item-3839" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a class="parent" href="#"><span>PTSP</span></a>
                                                    <div>
                                                        <ul>
                                                            <li id="menu-item-536" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/jam-kerja"><span>Jam Kerja Pengadilan</span></a></li>
                                                            <li id="menu-item-2929" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/standar-pelayanan-pengadilan-tinggi-bengkulu"><span>Standar Pelayanan Pengadilan Tinggi Bengkulu</span></a></li>
                                                            <li id="menu-item-3858" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/kompensasi-layanan-pengadilan-tinggi-bengkulu"><span>Kompensasi Layanan Pengadilan Tinggi Bengkulu</span></a></li>

                                                        </ul>
                                                    </div>
                                                </li>
                                                <li id="menu-item-537" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/tata-tertib-di-pengadilan"><span>Tata Tertib Persidangan di Pengadilan</span></a></li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li id="menu-item-319" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a class="parent" href="#"><span>Layanan Publik</span></a>
                                        <div>
                                            <ul>
                                                <li id="menu-item-528" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a class="parent" href="#"><span>Informasi Perkara</span></a>
                                                    <div>
                                                        <ul>
                                                            <li id="menu-item-18" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/jadwal-sidang"><span>Jadwal Sidang Pengadilan Tinggi</span></a></li>
                                                            <li id="menu-item-3463" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/jadwal-sidang-pengadilan-negeri"><span>Jadwal Sidang Pengadilan Negeri</span></a></li>
                                                            <li id="menu-item-660" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/sipp-pengadilan-negeri"><span>SIPP (Sistem Informasi Penelusuran Perkara) Pengadilan Negeri se-Wilayah Pengadilan Tinggi Bengkulu</span></a></li>
                                                            <li id="menu-item-470" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://putusan.mahkamahagung.go.id/"><span>Direktori Putusan</span></a></li>
                                                            <li id="menu-item-529" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/statistik-perkara"><span>Statistik Perkara pada Wilayah Pengadilan Tinggi Bengkulu</span></a></li>
                                                            <li id="menu-item-556" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/rekapitulasi-data-sipp"><span>Rekapitulasi Data SIPP (Sistem Informasi Penelusuran Perkara) pada Pengadilan Tinggi Bengkulu</span></a></li>
                                                            <li id="menu-item-2552" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/sinkronpn"><span>Sinkronisasi Pengadilan Negeri ke Pengadilan Tinggi Bengkulu</span></a></li>

                                                        </ul>
                                                    </div>
                                                </li>
                                                <li id="menu-item-1147" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a class="parent" href="#"><span>Laporan</span></a>
                                                    <div>
                                                        <ul>
                                                            <li id="menu-item-2967" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/laporan-statistik-perkara-pt-bengkulu"><span>Laporan Statistik Perkara</span></a></li>
                                                            <li id="menu-item-1148" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/laporan-statistik-biaya-perkara"><span>Laporan Biaya Perkara</span></a></li>
                                                            <li id="menu-item-2968" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/laporan-statistik-pengaduan"><span>Laporan Statistik Pengaduan</span></a></li>
                                                            <li id="menu-item-2295" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/transparansi-rkt/"><span>RKT</span></a></li>
                                                            <li id="menu-item-2296" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/transparansi-renstra/"><span>Renstra (Rencana Strategis)</span></a></li>
                                                            <li id="menu-item-2297" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/transparansi-iku/"><span>IKU</span></a></li>
                                                            <li id="menu-item-327" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/transparansi-lra/"><span>LRA (Laporan Realisasi Anggaran)</span></a></li>
                                                            <li id="menu-item-3595" class="menu-item menu-item-type-post_type_archive menu-item-object-transparansi-lkjip"><a href="https://www.pt-bengkulu.go.id/transparansi-lkjip"><span>LKjIP (Laporan Kinerja Instansi Pemerintahan)</span></a></li>
                                                            <li id="menu-item-329" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/transparansi-laptah/"><span>LapTah (Laporan Tahunan)</span></a></li>
                                                            <li id="menu-item-2293" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/transparansi-calk/"><span>CALK (Catatan Atas Laporan Keuangan)</span></a></li>
                                                            <li id="menu-item-1160" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/daftar-aset"><span>Daftar Aset</span></a></li>
                                                            <li id="menu-item-3348" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/lhkpn-dan-lhkasn"><span>LHKPN dan LHKASN</span></a></li>
                                                            <li id="menu-item-3688" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a class="parent" href="#"><span>Laporan Hasil Survei</span></a>
                                                                <div>
                                                                    <ul>
                                                                        <li id="menu-item-3687" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/indeks-kepuasan-masyarakat"><span>Laporan Survei Kepuasan Masyarakat (SKM)</span></a></li>
                                                                        <li id="menu-item-3686" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/indeks-persepesi-anti-korupsi"><span>Laporan Survei Persepsi Anti Korupsi (SPAK)</span></a></li>

                                                                    </ul>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </li>
                                                <li id="menu-item-531" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a class="parent" href="#"><span>Pengumuman</span></a>
                                                    <div>
                                                        <ul>
                                                            <li id="menu-item-325" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/pengumuman/"><span>Pengumuman PT Bengkulu</span></a></li>
                                                            <li id="menu-item-530" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="https://www.pt-bengkulu.go.id/penerimaan-pegawai"><span>Penerimaan Pegawai</span></a></li>

                                                        </ul>
                                                    </div>
                                                </li>
                                                <li id="menu-item-481" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/permohonan-informasi-pengadilan"><span>Prosedur Permohonan Informasi</span></a></li>
                                                <li id="menu-item-447" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/pengaduan-masyarakat"><span>Pengaduan Layanan Publik</span></a></li>
                                                <li id="menu-item-707" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://siwas.mahkamahagung.go.id/"><span>Sistem Informasi Pengawasan Mahkamah Agung RI</span></a></li>
                                                <li id="menu-item-2934" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://perpustakaan.pt-bengkulu.go.id/"><span>Perpustakaan Pengadilan Tinggi Bengkulu</span></a></li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li id="menu-item-2770" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a class="parent" href="#"><span>Layanan Hukum</span></a>
                                        <div>
                                            <ul>
                                                <li id="menu-item-2771" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/e-permohonan-advokat"><span>e-Permohonan Advokat</span></a></li>
                                                <li id="menu-item-2773" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/e-permohonan-informasi"><span>e-Permohonan Informasi Akademisi</span></a></li>
                                                <li id="menu-item-3303" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/survei-ikm-ipk"><span>Survei Indeks Kepuasan Masyarakat (IKM) dan Indeks Persepsi Korupsi (IPK)</span></a></li>
                                                <li id="menu-item-2220" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/eraterang-elektronik-surat-keterangan"><span>ERATERANG (Elektronik Surat Keterangan)</span></a></li>
                                                <li id="menu-item-2975" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/pooling-informasi-website"><span>Pooling Informasi Website</span></a></li>
                                                <li id="menu-item-837" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/pooling"><span>Arsip Pooling Masyarakat</span></a></li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li id="menu-item-3596" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children"><a class="parent" href="#"><span>RB</span></a>
                                        <div>
                                            <ul>
                                                <li id="menu-item-3604" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a class="parent" href="#"><span>Zona Integritas</span></a>
                                                    <div>
                                                        <ul>
                                                            <li id="menu-item-3597" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#"><span>Area I</span></a></li>
                                                            <li id="menu-item-3598" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#"><span>Area II</span></a></li>
                                                            <li id="menu-item-3599" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#"><span>Area III</span></a></li>
                                                            <li id="menu-item-3600" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#"><span>Area IV</span></a></li>
                                                            <li id="menu-item-3601" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#"><span>Area V</span></a></li>
                                                            <li id="menu-item-3602" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#"><span>Area VI</span></a></li>

                                                        </ul>
                                                    </div>
                                                </li>
                                                <li id="menu-item-3603" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#"><span>Akreditasi Penjaminan Mutu</span></a></li>
                                                <li id="menu-item-3378" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children"><a class="parent" href="#"><span>Inovasi Pengadilan</span></a>
                                                    <div>
                                                        <ul>
                                                            <li id="menu-item-3382" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item"><a href="/telegram-informasi-perkara"><span>Telegram Informasi Perkara</span></a></li>
                                                            <li id="menu-item-3609" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://ptsp.pt-bengkulu.go.id/"><span>PTSP Pengadilan Tinggi</span></a></li>
                                                            <li id="menu-item-3381" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://ezi.pt-bengkulu.go.id"><span>EZI</span></a></li>
                                                            <li id="menu-item-3380" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://cakap.pt-bengkulu.go.id"><span>CAKAP</span></a></li>
                                                            <li id="menu-item-3487" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://edoku.pt-bengkulu.go.id/"><span>eDokumen Keuangan</span></a></li>
                                                            <li id="menu-item-3488" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://sindiran.pt-bengkulu.go.id/"><span>Sistem Informasi Kehadiran</span></a></li>

                                                        </ul>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li id="menu-item-324" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a class="parent" href="/berita/"><span>Berita</span></a>
                                        <div>
                                            <ul>
                                                <li id="menu-item-492" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/berita-mahkamah-agung"><span>Berita Mahkamah Agung</span></a></li>
                                                <li id="menu-item-491" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/berita-badilum"><span>Berita Badilum</span></a></li>
                                                <li id="menu-item-3683" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="https://www.pt-bengkulu.go.id/artikel"><span>Artikel</span></a></li>
                                                <li id="menu-item-490" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/panggilan-diklat"><span>Panggilan Diklat</span></a></li>
                                                <li id="menu-item-489" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/data-mutasi-hakim-tpm-hakim"><span>Data Mutasi Hakim (TPM Hakim)</span></a></li>
                                                <li id="menu-item-488" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/data-mutasi-panitera-tpm-panitera"><span>Data Mutasi Panitera (TPM Panitera)</span></a></li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://www.pt-bengkulu.go.id/kontak"><span>Hubungi Kami</span></a></li>
                                </ul>
                            </nav>
                            <!-- 
                            <nav id="menu">
                                <ul class="menu">
                                    <?php
                                    wp_nav_menu(
                                        array(
                                            'container_class' => 'main-nav',
                                            'theme_location' => 'primary'
                                        )
                                    );
                                    ?>
                            </nav> -->
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