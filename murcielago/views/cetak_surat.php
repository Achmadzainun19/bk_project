<?php
function hari_ini($hari){
 
	switch($hari){
		case 'Sun':
			$hari_ini = "Minggu";
		break;
 
		case 'Mon':			
			$hari_ini = "Senin";
		break;
 
		case 'Tue':
			$hari_ini = "Selasa";
		break;
 
		case 'Wed':
			$hari_ini = "Rabu";
		break;
 
		case 'Thu':
			$hari_ini = "Kamis";
		break;
 
		case 'Fri':
			$hari_ini = "Jumat";
		break;
 
		case 'Sat':
			$hari_ini = "Sabtu";
		break;
		
		default:
			$hari_ini = "Tidak di ketahui";		
		break;
	}
	return "<b>" . $hari_ini . "</b>";
}
?>
<html>
<head>
</head>
<body onload="window.print()" onfocus="window.close()" style="font-family:arial;">
<?php
if($this->uri->segment(4)=='surat_panggilan_orang_tua'){
?>
    <!-- surat panggilan orang tua -->
    <div style="padding-bottom:40px; page-break-inside:avoid;">
        <!-- header -->
        <table style="width:100%; border-bottom:1px solid black;">
            <tr>
                <td rowspan="7" style="width:15%;">
                    <img style="width:100px; text-align:right;" src="<?php echo base_url() ?>assets/img/unnamed-removebg-preview.png" alt="pemerintah kabupaten banyuwangi">
                </td>
                <td style="text-align:center; width:70%; font-size:18px;">
                    PEMERINTAH KABUPATEN BANYUWANGI
                </td>
                <td style="width:15%;">
                </td>
            </tr>
            <tr>
                <td style="text-align:center; font-size:18px; font-weight:700;">
                    DINAS PENDIDIKAN
                </td>
                <td style="width:15%;">
                </td>
            </tr>
            <tr>
                <td style="text-align:center; font-size:21px; font-weight:700;">
                    SMP NEGERI 4 BANYUWANGI
                </td>
                <td style="width:15%;">
                </td>
            </tr>
            <tr>
                <td style="text-align:center;">
                    Jalan Letkol Istiqoh Nomor 74 Telephon 0333-417916 Banyuwangi
                </td>
                <td style="width:15%;">
                </td>
            </tr>
            <tr>
                <td style="text-align:center; font-size:16px; font-weight:600;">
                    JAWA TIMUR
                </td>
                <td style="width:15%;">
                </td>
            </tr>
            <tr>
                <td style="text-align:center;">
                    email: smp4banyuwangi@gmail.com
                </td>
                <td style="width:15%;">
                </td>
            </tr>
            <tr>
                <td style="text-align:center; padding-bottom:10px;">
                    Web : www.smpn4banyuwangi.web.siap.id
                </td>
                <td style="width:15%;">
                </td>
            </tr>
        </table>
        <!-- header -->
        <br>
        <!-- body -->
        <!-- ++++++++++++++++ batas +++++++++++++++ -->
        <br>
        <br>
        <div>
            <table>
                <tr>
                    <td style="width:65%;">
                        <table>
                            <tr>
                                <td style="width:10%;">Nomor </td>
                                <td style="width:90%;">: <?php echo $tanggapan->nomor_surat; ?> / 151 / 429.245.201010 / <?php echo date('Y')?></td>
                            </tr>
                            <tr>
                                <td style="width:10%;">Sifat </td>
                                <td style="width:90%;">: Penting</td>
                            </tr>
                            <tr>
                                <td style="width:10%;">Perihal </td>
                                <td style="width:90%;">: Panggilan Orang Tua</td>
                            </tr>
                        </table>
                    </td>
                    <td style="width:35%;">
                        <table>
                            <tr>
                                <td>Kepada </td>
                            </tr>
                            <tr>
                                <td>Yth. Bapak / Ibu Orang Tua Murid </td>
                            </tr>
                            <tr>
                                <td>Dari : <?php echo $siswa->nama_siswa ?></td>
                            </tr>
                            <tr>
                                <td>Di Banyuwangi</td>
                            </tr>
                        </table>
                    </td>
                <tr>
            </table>
        </div>
        
        <br>
        <br>
        <p>Dengan Hormat,  </p>
        <p>Demi kelancaran tugas pendidikan maka dengan ini kami mengharap dengan hormat kehadiran Bapak / Ibu ke sekolah besok pada :</p>
        <table>
            <tr>
                <td style="width:40%;">Hari </td>
                <td style="width:60%;">: <?php echo hari_ini(date('D',strtotime($tanggapan->tanggal_panggilan)));?></td>
            </tr>
            <tr>
                <td style="width:40%;">Tanggal </td>
                <td style="width:60%;">: <?php echo date('d F Y',strtotime($tanggapan->tanggal_panggilan));?></td>
            </tr>
            <tr>
                <td style="width:40%;">Jam </td>
                <td style="width:60%;">: 08.00</td>
            </tr>
            <tr>
                <td style="width:40%;">Tempat </td>
                <td style="width:60%;">: SMP Negeri 4 Banyuwangi<br>Jl. Letkol Istiqlah No. 74 Banyuwangi</td>
            </tr>
            <tr>
                <td style="width:40%;">Menghadap </td>
                <td style="width:60%;">:<?php echo $tanggapan->menghadap; ?></td>
            </tr>
            <tr>
                <td style="width:40%;">Untuk </td>
                <td style="width:50%;">: Membahas kedisiplinan siswa</td>
            </tr>
        </table>
        <p>Demikian atas perhatian dan kehadiran Bapak / Ibu kami mengucapkan terima kasih.</p>
        <!-- body -->
        <!-- footer -->
        <table style="width:100%;">
            <tr>
            <td rowspan="4" style="width:60%;"></td>
                <td style="width:40%;">
                    Banyuwangi, <?php echo date('d-m-Y'); ?>

                </td>
            </tr>
            <tr>
                <td>
                Kepala Sekolah
                </td>
            </tr>
            <tr>
                <td style="padding-top:100px; font-weight:700;">
                <u>Drs. H. AGUS PURNOMO</u>
                </td>
            </tr>
            <tr>
                <td>
                Pembina Tk I/ IVB
                </td>
            </tr>
        </table>
        <!-- footer -->
    </div>
    <!-- surat panggilan orang tua -->
<?php }elseif($this->uri->segment(4)=='surat_peringatan'){ ?>
    <!-- surat peringatan -->
    <div style="padding-bottom:40px; page-break-inside:avoid;">
        <!-- header -->
        <table style="width:100%; border-bottom:1px solid black;">
            <tr>
                <td rowspan="7" style="width:15%;">
                    <img style="width:100px; text-align:right;" src="<?php echo base_url() ?>assets/img/unnamed-removebg-preview.png" alt="pemerintah kabupaten banyuwangi">
                </td>
                <td style="text-align:center; width:70%; font-size:18px;">
                    PEMERINTAH KABUPATEN BANYUWANGI
                </td>
                <td style="width:15%;">
                </td>
            </tr>
            <tr>
                <td style="text-align:center; font-size:18px; font-weight:700;">
                    DINAS PENDIDIKAN
                </td>
                <td style="width:15%;">
                </td>
            </tr>
            <tr>
                <td style="text-align:center; font-size:21px; font-weight:700;">
                    SMP NEGERI 4 BANYUWANGI
                </td>
                <td style="width:15%;">
                </td>
            </tr>
            <tr>
                <td style="text-align:center;">
                    Jalan Letkol Istiqoh Nomor 74 Telephon 0333-417916 Banyuwangi
                </td>
                <td style="width:15%;">
                </td>
            </tr>
            <tr>
                <td style="text-align:center; font-size:16px; font-weight:600;">
                    JAWA TIMUR
                </td>
                <td style="width:15%;">
                </td>
            </tr>
            <tr>
                <td style="text-align:center;">
                    email: smp4banyuwangi@gmail.com
                </td>
                <td style="width:15%;">
                </td>
            </tr>
            <tr>
                <td style="text-align:center; padding-bottom:10px;">
                    Web : www.smpn4banyuwangi.web.siap.id
                </td>
                <td style="width:15%;">
                </td>
            </tr>
        </table>
        <!-- header -->
        <br>
        <!-- body -->
        <!-- ++++++++++++++++ batas +++++++++++++++ -->
        <br>
        <br>
        <div>
            <table>
                <tr>
                    <td style="width:65%;">
                        <table>
                            <tr>
                                <td style="width:10%;">Nomor </td>
                                <td style="width:90%;">: <?php echo $tanggapan->nomor_surat; ?> / 151 / 429.245.201010 / <?php echo date('Y')?></td>
                            </tr>
                            <tr>
                                <td style="width:10%;">Sifat </td>
                                <td style="width:90%;">: Penting</td>
                            </tr>
                            <tr>
                                <td style="width:10%;">Perihal </td>
                                <td style="width:90%;">: Peringatan</td>
                            </tr>
                        </table>
                    </td>
                    <td style="width:35%;">
                        <table>
                            <tr>
                                <td >Kepada </td>
                            </tr>
                            <tr>
                                <td>Yth. Bapak / Ibu Orang Tua Murid </td>
                            </tr>
                            <tr>
                                <td >Di Banyuwangi</td>
                            </tr>
                        </table>
                    </td>
                <tr>
            </table>
        </div>
        
        <br>
        <br>
        <p>Dengan Hormat,  </p>
        <p>Sehubungan dengan sikap indispliner dan pelanggaran terhadap tata tertib sekolah yang siswa lakukan, maka dengan ini sekolah memberikan surat peringatan.</p>
        <p>Dengan ini kami sampaikan kepada Bapak / Ibu wali dari :</p>
        <table>
            <tr>
                <td style="width:40%;">Nama </td>
                <td style="width:60%;">: <?php echo $siswa->nama_siswa ?></td>
            </tr>
            <tr>
                <td style="width:40%;">Kelas </td>
                <td style="width:60%;">: <?php echo $siswa->nama_kelas ?><?php ?></td>
            </tr>
            <tr>
                <td style="width:40%;">Pelanggaran </td>
                <td style="width:60%;">:</td>
            </tr>
        </table>
        <p>Demikian surat peringatan ini kami sampaikan atas perhatian dan kerjasamanya, kami ucapkan terima kasih.</p>
        <!-- body -->
        <!-- footer -->
        <table style="width:100%;">
            <tr>
            <td rowspan="4" style="width:60%;"></td>
                <td style="width:40%;">
                    Banyuwangi, <?php echo date('d-m-Y'); ?>

                </td>
            </tr>
            <tr>
                <td>
                Kepala Sekolah
                </td>
            </tr>
            <tr>
                <td style="padding-top:100px; font-weight:700;">
                <u>Drs. H. AGUS PURNOMO</u>
                </td>
            </tr>
            <tr>
                <td>
                Pembina Tk I/ IVB
                </td>
            </tr>
        </table>
        <!-- footer -->
    </div>
    <!-- surat peringatan -->
<?php }elseif($this->uri->segment(4)=='surat_skorsing'){ ?>
    <!-- surat peringatan -->
<div style="padding-bottom:40px; page-break-inside:avoid;">
    <!-- header -->
    <table style="width:100%; border-bottom:1px solid black;">
        <tr>
            <td rowspan="7" style="width:15%;">
                <img style="width:100px; text-align:right;" src="<?php echo base_url() ?>assets/img/unnamed-removebg-preview.png" alt="pemerintah kabupaten banyuwangi">
            </td>
            <td style="text-align:center; width:70%; font-size:18px;">
                PEMERINTAH KABUPATEN BANYUWANGI
            </td>
            <td style="width:15%;">
            </td>
        </tr>
        <tr>
            <td style="text-align:center; font-size:18px; font-weight:700;">
                DINAS PENDIDIKAN
            </td>
            <td style="width:15%;">
            </td>
        </tr>
        <tr>
            <td style="text-align:center; font-size:21px; font-weight:700;">
                SMP NEGERI 4 BANYUWANGI
            </td>
            <td style="width:15%;">
            </td>
        </tr>
        <tr>
            <td style="text-align:center;">
                Jalan Letkol Istiqoh Nomor 74 Telephon 0333-417916 Banyuwangi
            </td>
            <td style="width:15%;">
            </td>
        </tr>
        <tr>
            <td style="text-align:center; font-size:16px; font-weight:600;">
                JAWA TIMUR
            </td>
            <td style="width:15%;">
            </td>
        </tr>
        <tr>
            <td style="text-align:center;">
                email: smp4banyuwangi@gmail.com
            </td>
            <td style="width:15%;">
            </td>
        </tr>
        <tr>
            <td style="text-align:center; padding-bottom:10px;">
                Web : www.smpn4banyuwangi.web.siap.id
            </td>
            <td style="width:15%;">
            </td>
        </tr>
    </table>
    <!-- header -->
    <br>
    <!-- body -->
    <!-- ++++++++++++++++ batas +++++++++++++++ -->
    <br>
    <br>
    <div>
        <table>
            <tr>
                <td style="width:65%;">
                    <table>
                        <tr>
                            <td style="width:10%;">Nomor </td>
                            <td style="width:90%;">: <?php echo $tanggapan->nomor_surat; ?> / 151 / 429.245.201010 / <?php echo date('Y')?></td>
                        </tr>
                        <tr>
                            <td style="width:10%;">Sifat </td>
                            <td style="width:90%;">: Penting</td>
                        </tr>
                        <tr>
                            <td style="width:10%;">Perihal </td>
                            <td style="width:90%;">: Skorsing atas pelanggaran</td>
                        </tr>
                    </table>
                </td>
                <td style="width:35%;">
                    <table>
                        <tr>
                            <td>Kepada </td>
                        </tr>
                        <tr>
                            <td>Yth. Bapak / Ibu Orang Tua Murid </td>
                        </tr>
                        <tr>
                            <td>Dari : <?php echo $siswa->nama_siswa; ?> Kelas : <?php echo $siswa->nama_kelas; ?></td>
                        </tr>
                        <tr>
                            <td>Di Banyuwangi</td>
                        </tr>
                    </table>
                </td>
            <tr>
        </table>
    </div>
    
    <br>
    <br>
    <p>Dengan Hormat,  </p>
    <p>Memberitahukan dengan hormat bahwa putra Bapak / Ibu telah melanggar disipin sekolah.</p>
    <?php
    $tanggal_awal=date('Y-m-d',strtotime($tanggapan->tanggal_awal));
    $tanggal_akhir=date('Y-m-d',strtotime($tanggapan->tanggal_akhir));
    $tgl1 = new DateTime($tanggal_awal);
	$tgl2 = new DateTime($tanggal_akhir);
	$d = $tgl2->diff($tgl1)->days + 1;
	$selisih= $d;
    ?>
    <p>Oleh sebab itu dengan surat ini sekolah menjatuhkan sanksi skors ( tidak boleh masuk sekolah dan belajar sendiri di rumah ) selama <?php echo $selisih; ?> hari tehitung mulai <?php echo hari_ini(date('D',strtotime($tanggapan->tanggal_awal))); ?>, <?php echo date('d F Y',strtotime($tanggapan->tanggal_awal)); ?> sd <?php echo hari_ini(date('D',strtotime($tanggapan->tanggal_akhir))); ?>,<?php echo date('d F Y',strtotime($tanggapan->tanggal_akhir)); ?> dan apabila melakukan pelanggaran di sekolah lagi maka siap menerima konsekuensinya yaitu DIKEMBALIKAN KE PADA ORANG TUA SISWA untuk mencari sekolah lain</p>
    
    <p>Demikian kiranya mendapat perhatian dan atas kerja samanya, disampaikan terima kasih. </p>
    <!-- body -->
    <!-- footer -->
    <table style="width:100%;">
        <tr>
        <td rowspan="4" style="width:60%;"></td>
            <td style="width:40%;">
                Banyuwangi, <?php echo date('d-m-Y'); ?>

            </td>
        </tr>
        <tr>
            <td>
            Kepala Sekolah
            </td>
        </tr>
        <tr>
            <td style="padding-top:100px; font-weight:700;">
            <u>Drs. H. AGUS PURNOMO</u>
            </td>
        </tr>
        <tr>
            <td>
            Pembina Tk I/ IVB
            </td>
        </tr>
    </table>
    <!-- footer -->
</div>
<!-- surat peringatan -->
<?php } ?>
</body >
</html>