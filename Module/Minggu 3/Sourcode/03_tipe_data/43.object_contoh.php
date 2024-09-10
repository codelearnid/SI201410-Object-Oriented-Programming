<?php
  class Siswa {
    public $nama;
    public $umur;
    public $tgl_lahir;

    public function get_nama(){
      return $this->nama;
    }
  }

  $andi = new Siswa;
  $andi->nama = "Andi";
  $andi->umur = 13;
  $andi->tgl_lahir = "13 Des 1990";

  echo "<pre>";
  print_r($andi);
  echo "</pre>";
