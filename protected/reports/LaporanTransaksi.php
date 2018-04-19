<?php

  class LaporanTransaksi extends fpdf{

    function Header()
    {

    $this->Image('images/kos.png',50,6,30);
    $this->Image('images/4G.png',240,6,30);

    }

    function cetakTransaksi(){
      $this->SetMargins(30,10,50,20);
      $this->AddPage();
      $this->SetFont('Arial','B',20);
      $this->Cell(250,8,'Data Transaksi Kontrakan 4G',0,1,'C');
      $this->SetFont('Arial','B',8);
      $this->Cell(250,8,'Jl. 4G Indonesia Bersatu ',0,2,'C');
      $this->SetFont('Arial','B',11);
      $this->Cell(250,0,'Provinsi Riau',0,3,'C');
      $this->SetFont('Arial','B',8);
      $this->Cell(250,10,'Email : kontrakan@4g.id. Telp : (0761) 123456',0,5,'C');
      $this->SetFont('Arial','B',11);
      $this->Cell(250,1,'_______________________________________________________________________________________________________________________',0,3,'C');
      $this->Cell(250,10,'',0,4,'C');
      $this->Cell(30,10,'ID Pelanggan',1,0,'C');
      $this->Cell(60,10,'Nama Pelanggan',1,0,'C');
      $this->Cell(30,10,'Jenis Kelamin',1,0,'C');
      $this->Cell(30,10,'Lama Inap',1,0,'C');
      $this->Cell(30,10,'Biaya Kamar',1,0,'C');
      $this->Cell(40,10,'Biaya Tambahan',1,0,'C');
      $this->Cell(30,10,'Biaya Total',1,1,'C');


    foreach (Transaksi::model()->findAll() as $row) {
      $this->SetFont('Arial','B',8);
      $this->Cell(30,10,$row['id_orang'],1,0,'C');
      $this->Cell(60,10,$row->idOrang->nama_orang,1,0,'C');
      $this->Cell(30,10,$row->idOrang->jenis_kelamin,1,0,'C');
      $this->Cell(30,10,$row['lama_inap'],1,0,'C');
      $this->Cell(30,10,$row->biayaKamar(),1,0,'C');
      $this->Cell(40,10,$row['biaya_tambahan'],1,0,'C');
      $this->Cell(30,10,$row->biayaTotal(),1,1,'C');

    }
    $this->Cell(250,10,'',0,4,'C');
    $this->Cell(250,10,'',0,4,'C');
    $this->SetFont('Arial','B',11);
    $this->Cell(450,10,'Mengetahui',0,4,'C');
    $this->Cell(450,10,'CEO Kontrakan 4G ',0,4,'C');
    $this->Cell(450,10,'',0,4,'C');
    $this->Cell(450,10,'Didik Sazali, CEO',0,4,'C');
    $this->AliasNbPages();
    $this->Output('Data-Transaksi.pdf','I');
    }
    }

  //   function cetakTransaksi(){
  //     $this->SetMargins(30,10,50,20);
  //     $this->AddPage();
  //     $this->SetFont('Arial','B',11);
  //     $this->Cell(220,10,'Laporan Transaksi',0,1,'C');
  //     $this->Cell(30,10,'ID Pelanggan',1,0,'C');
  //     $this->Cell(30,10,'Nama Pelanggan',1,0,'C');
  //     $this->Cell(30,10,'Jenis Kelamin',1,0,'C');
  //     $this->Cell(30,10,'Lama Inap',1,0,'C');
  //     $this->Cell(50,10,'Fasilitas Tambahan',1,0,'C');
  //     $this->Cell(30,10,'Biaya Kamar',1,0,'C');
  //     $this->Cell(30,10,'Biaya Tambahan',1,0,'C');
  //     $this->Cell(30,10,'Biaya Total',1,1,'C');
  //
  //     $criteria = new CDbCriteria;
  //     $criteria->select = 't.*';
  //     $criteria->join = 'INNER JOIN kamar ON kamar.kode_kamar = t.kode_kamar';
  //     $criteria->condition = 'kamar.kode_kamar = :value';
  //     $criteria->params = array(":value" => "C1");
  //
  //     foreach (Transaksi::model()->findAll($criteria) as $row) {
  //       $this->Cell(30,10,$row['id_orang'],1,0,'L');
  //       $this->Cell(30,10,$row['nama_orang'],1,0,'L');
  //       $this->Cell(30,10,$row['id_orang'],1,0,'L');
  //       $this->Cell(30,10,$row['lama_inap'],1,0,'L');
  //       $this->Cell(50,10,$row['fasilitas_tambahan'],1,0,'L');
  //       $this->Cell(30,10,$row['id_orang'],1,0,'L');
  //       $this->Cell(30,10,$row['id_orang'],1,0,'L');
  //       $this->Cell(30,10,$row['id_orang'],1,1,'L');
  //     }
  //     $this->AliasNbPages();
  //     $this->Output('Data-Transaksi.pdf','I');
  //   }
  // }

?>
