<?php
class Validate{
  private $_errors = array();
  private $_formMethod = null;

  public function __construct($formMethod){
    $this->_formMethod = $formMethod;
  }

  public function setRules($item, $itemLabel, $rules){
    // kondisi if isset() diperlukan untuk form checkbox atau radio yang kemungkinan kosong
    if (isset($this->_formMethod[$item])) {
      $formValue = trim($this->_formMethod[$item]);
    } else {
      $formValue = "";
    }

    // jalankan proses sanitize untuk setiap item (jika disyaratkan)
    if (array_key_exists('sanitize',$rules)) {
      $formValue = Input::runSanitize($formValue,$rules['sanitize']);
    }

    foreach ($rules as $rule => $ruleValue) {

      switch($rule) {

        case 'required':
          if ($ruleValue === TRUE && empty($formValue)) {
            $this->_errors[$item] = "$itemLabel tidak boleh kosong";
          }
        break;

        case 'min_char' :
          if (strlen($formValue) < $ruleValue) {
            $this->_errors[$item] = "$itemLabel minimal $ruleValue karakter";
          }
        break;

        case 'max_char' :
          if (strlen($formValue) > $ruleValue) {
            $this->_errors[$item] = "$itemLabel maksimal $ruleValue karakter";
          }
        break;

        case 'numeric' :
          if ($ruleValue === TRUE && !is_numeric($formValue)) {
            $this->_errors[$item] = "$itemLabel harus diisi angka";
          }
        break;

        case 'min_value' :
          if ($formValue < $ruleValue) {
            $this->_errors[$item] = "$itemLabel minimal $ruleValue";
          }
        break;

        case 'max_value' :
          if ($formValue > $ruleValue) {
            $this->_errors[$item] = "$itemLabel maksimal $ruleValue";
          }
        break;

        case 'matches' :
        if ($formValue != $this->_formMethod[$ruleValue]) {
          $this->_errors[$item] = "$itemLabel tidak sama";
        }
        break;

        case 'email' :
          if ($ruleValue === TRUE && !filter_var($formValue, FILTER_VALIDATE_EMAIL)) {
            $this->_errors[$item] = "Format $itemLabel tidak sesuai";
          }
        break;

        case 'url' :
          if ($ruleValue === TRUE && !filter_var($formValue, FILTER_VALIDATE_URL)) {
            $this->_errors[$item] = "Format $itemLabel tidak sesuai";
          }
        break;

        case 'regexp' :
          if (!preg_match($ruleValue,$formValue)) {
            $this->_errors[$item] = "Pola $itemLabel tidak sesuai";
          }
        break;

        case 'unique' :
          require_once 'DB.php';
          $DB = DB::getInstance();
          if($DB->check($ruleValue[0],$ruleValue[1],$formValue)){
            $this->_errors[$item] = "$itemLabel sudah terpakai, silahkan pilih nama lain";
          }
        break;
      }

      // cek jika sudah ada error di item yang sama, langsung keluar dari looping
      if (!empty($this->_errors[$item])) {
        break;
      }

    }
    // kembalikan nilai yang sudah lewat proses sanitize
    return $formValue;
  }

  public function getError(){
    return $this->_errors;
  }

  public function passed(){
    return empty($this->_errors) ? true : false;
  }

}
