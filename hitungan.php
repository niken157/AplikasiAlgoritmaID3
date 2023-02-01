<?php 
include "koneksi.php";
$hasil = mysqli_query($koneksi,"SELECT * FROM dataset");
//entropy
$total_data = mysqli_num_rows($hasil);//menghitung total data
$hasil_ya = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where kondisi LIKE 'ya'"));//menghitung total kondisi ya
$hasil_tidak = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where kondisi LIKE 'tidak'"));//menghitung total kondisi tidak
$entropy=-($hasil_ya/$total_data)*log($hasil_ya/$total_data,2)-($hasil_tidak/$total_data)*log($hasil_tidak/$total_data,2);
//kehadiran
$hasil_baik = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where kehadiran LIKE 'baik'"));
$hasil_sedang = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where kehadiran LIKE 'sedang'"));
$hasil_rendah = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where kehadiran LIKE 'rendah'"));
$baik_diterima = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where kehadiran LIKE 'baik' AND kondisi LIKE 'ya'"));
$baik_ditolak = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where kehadiran LIKE 'baik' AND kondisi LIKE 'tidak'"));
$entropykb=-($baik_diterima/$hasil_baik)*log($baik_diterima/$hasil_baik,2)-($baik_ditolak/$hasil_baik)*log($baik_ditolak/$hasil_baik,2);
$sedang_diterima = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where kehadiran LIKE 'sedang' AND kondisi LIKE 'ya'"));
$sedang_ditolak = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where kehadiran LIKE 'sedang' AND kondisi LIKE 'tidak'"));
$entropyks=-($sedang_diterima/$hasil_sedang)*log($sedang_diterima/$hasil_sedang,2)-($sedang_ditolak/$hasil_sedang)*log($sedang_ditolak/$hasil_sedang,2);
$rendah_diterima = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where kehadiran LIKE 'rendah' AND kondisi LIKE 'ya'"));
$rendah_ditolak = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where kehadiran LIKE 'rendah' AND kondisi LIKE 'tidak'"));
$entropykr=-($rendah_diterima/$hasil_rendah)*log($rendah_diterima/$hasil_rendah,2)-($rendah_ditolak/$hasil_rendah)*log($rendah_ditolak/$hasil_rendah,2);
$gainkehadiran= $entropy-($hasil_baik/$total_data)*$entropykb-($hasil_sedang/$total_data)*$entropyks-($hasil_rendah/$total_data)*$entropykr;
//adart
$hasil_bagus = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where adart LIKE 'bagus'"));
$hasil_cukup = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where adart LIKE 'cukup'"));
$hasil_kurang = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where adart LIKE 'kurang'"));
$bagus_diterima = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where adart LIKE 'bagus' AND kondisi LIKE 'ya'"));
$bagus_ditolak = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where adart LIKE 'bagus' AND kondisi LIKE 'tidak'"));
$entropyabr=-($bagus_diterima/$hasil_bagus)*log($bagus_diterima/$hasil_bagus,2)-($bagus_ditolak/$hasil_bagus)*log($bagus_ditolak/$hasil_bagus,2);
$entropyab=0;
$cukup_diterima = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where adart LIKE 'cukup' AND kondisi LIKE 'ya'"));
$cukup_ditolak = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where adart LIKE 'cukup' AND kondisi LIKE 'tidak'"));
$entropyac=-($cukup_diterima/$hasil_cukup)*log($cukup_diterima/$hasil_cukup,2)-($cukup_ditolak/$hasil_cukup)*log($cukup_ditolak/$hasil_cukup,2);
$kurang_diterima = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where adart LIKE 'kurang' AND kondisi LIKE 'ya'"));
$kurang_ditolak = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where adart LIKE 'kurang' AND kondisi LIKE 'tidak'"));
$entropyak=-($kurang_diterima/$hasil_kurang)*log($kurang_diterima/$hasil_kurang,2)-($kurang_ditolak/$hasil_kurang)*log($kurang_ditolak/$hasil_kurang,2);
$gainadart= $entropy-($hasil_bagus/$total_data)*$entropyab-($hasil_cukup/$total_data)*$entropyac-($hasil_kurang/$total_data)*$entropyak;
//pembukuan
$hasil_baikk = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where pembukuan LIKE 'baik'"));
$hasil_burukk = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where pembukuan LIKE 'buruk'"));
$baikk_diterima = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where pembukuan LIKE 'baik' AND kondisi LIKE 'ya'"));
$baikk_ditolak = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where pembukuan LIKE 'baik' AND kondisi LIKE 'tidak'"));
$entropyppb=-($baikk_diterima/$hasil_baikk)*log($baikk_diterima/$hasil_baikk,2)-($baikk_ditolak/$hasil_baikk)*log($baikk_ditolak/$hasil_baikk,2);
$entropypb=0;
$burukk_diterima = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where pembukuan LIKE 'buruk' AND kondisi LIKE 'ya'"));
$burukk_ditolak = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataset where pembukuan LIKE 'buruk' AND kondisi LIKE 'tidak'"));
$entropypbb=-($burukk_diterima/$hasil_burukk)*log($burukk_diterima/$hasil_burukk,2)-($burukk_ditolak/$hasil_burukk)*log($burukk_ditolak/$hasil_burukk,2);
$gainpembukuan= $entropy-($hasil_baikk/$total_data)*$entropypb-($hasil_burukk/$total_data)*$entropypbb;

?>

<table border="1">
		<thead>
			<tr>
				<th>NAMA CALON</th>
				<th>KEHADIRAN</th>
				<th>ADART</th>
				<th>PEMBUKUAN</th>
                <th>KONDISI</th>
			</tr>
		</thead>
		<tbody>
<?php		
while ($row = mysqli_fetch_array($hasil))
{ ?>
<tr>
			<td><?php echo $row['nama_calon']?></td>
			<td><?php echo $row['kehadiran']?></td>
			<td><?php echo $row['adart']?></td>
            <td><?php echo $row['pembukuan']?></td>
            <td><?php echo $row['kondisi']?></td>
		</tr>
<?php } ?>
	</tbody>
</table>
<?php
echo "PERHITUNGAN ENTROPY <br>";
echo "Sampel kelas 1 (ya) = $hasil_ya <br>";
echo "Sampel kelas 2 (tidak) = $hasil_tidak <br>";
echo "entropy(S) = -($hasil_ya/$total_data)*log($hasil_ya/$total_data,2)-($hasil_tidak/$total_data)*log($hasil_tidak/$total_data,2)";
echo "<br> = ", $entropy;
echo "<br><br>";
echo "PERRHITUNGAN INFORMATION GAIN <br>";
echo "1. VALUES KEHADIRAN (Baik,Sedang,Rendah) <br>";
echo "Sampel kelas 1 (baik) = $hasil_baik <br>";
echo "Sampel kelas 2 (sedang) = $hasil_sedang <br>";
echo "Sampel kelas 3 (rendah) = $hasil_rendah <br>";
echo "entropy(S baik)= -($baik_diterima/$hasil_baik).log($baik_diterima/$hasil_baik,2)-($baik_ditolak/$hasil_baik).log($baik_ditolak/$hasil_baik,2)";
echo "<br> = ", $entropykb;
echo "<br>";
echo "entropy(S sedang)= -($sedang_diterima/$hasil_sedang).log($sedang_diterima/$hasil_sedang,2)-($sedang_ditolak/$hasil_sedang).log($sedang_ditolak/$hasil_sedang,2)";
echo "<br> = ", $entropyks;
echo "<br>";
echo "entropy(S rendah)= -($rendah_diterima/$hasil_rendah).log($rendah_diterima/$hasil_rendah,2)-($rendah_ditolak/$hasil_rendah).log($rendah_ditolak/$hasil_rendah,2)";
echo "<br> = ", $entropykr;
echo "<br>";
echo "GAIN(S kehadiran)=$entropy-($hasil_baik/$total_data).$entropykb-($hasil_sedang/$total_data).$entropyks-($hasil_rendah/$total_data).$entropykr = $gainkehadiran";
echo "<br><br>";
echo "2. VALUES ADART (bagus,cukup,kurang) <br>";
echo "Sampel kelas 1 (bagus) = $hasil_bagus <br>";
echo "Sampel kelas 2 (cukup) = $hasil_cukup <br>";
echo "Sampel kelas 3 (kurang) = $hasil_kurang <br>";
echo "entropy(S bagus)= -($bagus_diterima/$hasil_bagus).log($bagus_diterima/$hasil_bagus,2)-($bagus_ditolak/$hasil_bagus).log($bagus_ditolak/$hasil_bagus,2)";
echo "<br> = ", $entropyab;
echo "<br>";
echo "entropy(S cukup)= -($cukup_diterima/$hasil_cukup).log($cukup_diterima/$hasil_cukup,2)-($cukup_ditolak/$hasil_cukup).log($cukup_ditolak/$hasil_cukup,2)";
echo "<br> = ", $entropyac;
echo "<br>";
echo "entropy(S kurang)= -($kurang_diterima/$hasil_kurang).log($kurang_diterima/$hasil_kurang,2)-($kurang_ditolak/$hasil_kurang).log($kurang_ditolak/$hasil_kurang,2)";
echo "<br> = ", $entropyak;
echo "<br>";
echo "GAIN(S adart)=$entropy-($hasil_bagus/$total_data)*$entropyab-($hasil_cukup/$total_data)*$entropyac-($hasil_kurang/$total_data)*$entropyak = $gainadart";
echo "<br><br>";
echo "3. VALUES PEMBUKUAN (baik,buruk) <br>";
echo "Sampel kelas 1 (baik) = $hasil_baikk <br>";
echo "Sampel kelas 2 (buruk) = $hasil_burukk <br>";
echo "entropy(S baik)= -($baikk_diterima/$hasil_baikk).log($baikk_diterima/$hasil_baikk,2)-($baikk_ditolak/$hasil_baikk).log($baikk_ditolak/$hasil_baikk,2)";
echo "<br> = ", $entropypb;
echo "<br>";
echo "entropy(S buruk)= -($burukk_diterima/$hasil_burukk).log($burukk_diterima/$hasil_burukk,2)-($burukk_ditolak/$hasil_burukk).log($burukk_ditolak/$hasil_burukk,2)";
echo "<br> = ", $entropypbb;
echo "<br>";
echo "GAIN(S pembukuan)=$entropy-($hasil_baikk/$total_data)*$entropypb-($hasil_burukk/$total_data)*$entropypbb = $gainpembukuan";
echo "<br><br>";
?>