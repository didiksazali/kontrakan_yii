<?php

  class LaporanPelanggan extends fpdf{

    function Header()
    {

    $this->Image('images/kos.png',40,6,30);
    $this->Image('images/4G.png',220,6,30);

    }

    function cetakPelanggan(){
      $this->SetMargins(30,10,50,20);
      $this->AddPage();
      $this->SetFont('Arial','B',20);
      $this->Cell(220,8,'Data Pelanggan Kontrakan 4G',0,1,'C');
      $this->SetFont('Arial','B',8);
      $this->Cell(220,8,'Jl. 4G Indonesia Bersatu ',0,2,'C');
      $this->SetFont('Arial','B',11);
      $this->Cell(220,0,'Provinsi Riau',0,3,'C');
      $this->SetFont('Arial','B',8);
      $this->Cell(220,10,'Email : kontrakan@4g.id. Telp : (0761) 123456',0,5,'C');
      $this->SetFont('Arial','B',11);
      $this->Cell(220,1,'_______________________________________________________________________________________________________',0,3,'C');
      $this->Cell(250,10,'',0,4,'C');
      $this->Cell(30,10,'ID Pelanggan',1,0,'C');
      $this->Cell(60,10,'Nama Pelanggan',1,0,'C');
      $this->Cell(30,10,'Jenis Kelamin',1,1,'C');


    foreach (Orang::model()->findAll() as $row) {
      $this->SetFont('Arial','B',8);
      $this->Cell(30,10,$row['id_orang'],1,0,'C');
      $this->Cell(60,10,$row['nama_orang'],1,0,'C');
      $this->Cell(30,10,$row['jenis_kelamin'],1,1,'C');

    }
    $this->Cell(250,10,'',0,4,'C');
    $this->Cell(250,10,'',0,4,'C');
    $this->SetFont('Arial','B',11);
    $this->Cell(380,10,'Mengetahui',0,4,'C');
    $this->Cell(380,10,'CEO Kontrakan 4G ',0,4,'C');
    $this->Cell(380,10,'',0,4,'C');
    $this->Cell(380,10,'Didik Sazali, CEO',0,4,'C');
    $this->AliasNbPages();
    $this->Output('Data-Pelanggan.pdf','I');
    }
    }



?>
