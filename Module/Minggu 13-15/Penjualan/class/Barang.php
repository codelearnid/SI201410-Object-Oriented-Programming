<?php
class Barang{
  private $_formItem = [];
  private $_db = null;

  public function __construct(){
    $this->_db = DB::getInstance();
  }

  public function validasi($formMethod){
    $validate = new Validate($formMethod);

    $this->_formItem['nama_barang'] = $validate->setRules('nama_barang',
    'Nama barang', [
      'required' => true,
      'sanitize' => 'string'
    ]);

    $this->_formItem['jumlah_barang'] = $validate->setRules('jumlah_barang',
    'Jumlah barang', [
      'numeric' => true,
      'min_value' => 0
    ]);

    $this->_formItem['harga_barang'] = $validate->setRules('harga_barang',
    'Harga barang', [
      'numeric' => true,
      'min_value' => 0
    ]);

    if(!$validate->passed()) {
      return $validate->getError();
    }
  }

  public function getItem($item){
    return isset($this->_formItem[$item]) ? $this->_formItem[$item] : '';
  }

  public function insert(){
    $newBarang = [
      'nama_barang' => $this->getItem('nama_barang'),
      'jumlah_barang' => $this->getItem('jumlah_barang'),
      'harga_barang' => $this->getItem('harga_barang'),
      'tanggal_update' => date("Y-m-d H:i:s") // Tanggal saat ini
    ];
    return $this->_db->insert('barang',$newBarang);
  }

  public function generate($id_barang){
    $result = $this->_db->getWhereOnce('barang',['id_barang','=',$id_barang]); //SELECT * FROM barang WHERE id_barang = $id_barang
    foreach ($result as $key => $val) {
      $this->_formItem[$key] = $val;
    }
  }
// $this->_formItem[id_barang] = 1
// $this->_formItem[nama_barang] = 'TV Samsung 43NU7090 4K'
// $this->_formItem[jumlah_barang] = 5399000
// $this->_formItem[tanggal_update] = 2019-04-10 18:29:30

  public function update($id_barang){
    $newBarang = [
      'nama_barang' => $this->getItem('nama_barang'),
      'jumlah_barang' => $this->getItem('jumlah_barang'),
      'harga_barang' => $this->getItem('harga_barang')
    ];
    $this->_db->update('barang',$newBarang,['id_barang','=',$id_barang]);
  }

  public function delete($id_barang){
    $this->_db->delete('barang',['id_barang','=',$id_barang]);
  }
}
