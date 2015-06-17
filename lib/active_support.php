<?
namespace Gearbox;

class ActiveSupport{

  static function p($object){
    echo "<pre>";
    print_r($object);
    echo "</pre><br/>";
  }

  static function camelize($scored) {
    return ucfirst(implode('',array_map('ucfirst',array_map('strtolower',explode('_',$scored)))));
  }

  static function underscore($cameled){
    return implode('_',array_map('strtolower',preg_split('/([A-Z]{1}[^A-Z]*)/',$cameled,-1,PREG_SPLIT_DELIM_CAPTURE|PREG_SPLIT_NO_EMPTY)));
  }
}
