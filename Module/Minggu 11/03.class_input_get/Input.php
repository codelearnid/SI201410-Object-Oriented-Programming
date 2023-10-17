<?php
class Input{

  public static function get($item) {
    if (isset($_POST[$item])) {
      return trim($_POST[$item]);
    } 
    else if (isset($_GET[$item])) {
      return trim($_GET[$item]);
    }
    return '';
  }

}