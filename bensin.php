<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
$bensin = new pembelian();
$bensin->setHarga(14580, 15400, 15340, 15630);

if (isset($_POST['beli'])) {
    $bensin->jenisyangdipilih = $_POST['jenis'];
    $bensin->totalliter = $_POST['liter'];
    $bensin->totalHarga();
    $bensin->cetakBukti();
}


class databahanbakar {
    private $hargasuper;
    private $hargavpower;
    private $hargavpowernitro;
    private $hargavpowerdiesel;
    public $jenisyangdipilih;
    public $totalliter;
    protected $totalpembayaran;
    protected $ppn;
    protected $hargadasar;

    public function setHarga($super, $vpower, $vpowernitro, $vpowerdiesel) {
        $this->hargasuper = $super;
        $this->hargavpower = $vpower;
        $this->hargavpowernitro = $vpowernitro;
        $this->hargavpowerdiesel = $vpowerdiesel;
    }

    public function getHarga(): array {
        $databensin["super"] = $this->hargasuper;
        $databensin["vpower"] = $this->hargavpower;
        $databensin["vpowernitro"] = $this->hargavpowernitro;
        $databensin["vpowerdiesel"] = $this->hargavpowerdiesel;

        return $databensin;
    }
}

class pembelian extends databahanbakar {
    public function totalHarga() {

        $this->hargadasar = $this->getHarga()[$this->jenisyangdipilih] * $this->totalliter;
        $this->ppn = $this->hargadasar * 0.1;
        $this->totalpembayaran = $this->hargadasar + $this->ppn;
    }

    public function cetakBukti() {
        echo '<div class="ii">';
        echo '<div class="bukti-container">';
        echo "<p>------------------------<br></p>";
        echo "<p>Jenis Bahan Bakar : " . ucfirst($this->jenisyangdipilih) . "<br> </p>";
        echo "<p>Total liter : " . $this->totalliter . "<br></p>";
        echo "<p>Harga perliter : Rp " . number_format($this->getHarga()[$this->jenisyangdipilih], 0, ',', '.') . "<br></p>";
        echo "<p>Harga dasar : Rp " . number_format($this->hargadasar, 0, ',', '.') . "<br></p>";  // Menggunakan harga dasar yang sudah dihitung
        echo "<p>PPN (10%) : Rp " . number_format($this->ppn, 0, ',', '.') . "<br></p>";
        echo "<p>Total Pembayaran : Rp " . number_format($this->totalpembayaran, 0, ',', '.') . "<br></p>";
        echo "<p>------------------------<br></p>";
        echo "</div>";
        echo '</div>';
    }
}
?>

<div class="poki">
<a href="index.php">Kembali</a>
<button onclick="window.print()">Print</button>
</div>
</body>
</html>