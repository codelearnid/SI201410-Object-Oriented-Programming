<?php
class Validate{
  private $_errors = array();
  private $_formMethod = null;

  public function __construct($formMethod){
    $this->_formMethod = $formMethod;
  }

  public function setRules($item, $itemLabel, $rules){
    $formValue = $this->_formMethod[$item];

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