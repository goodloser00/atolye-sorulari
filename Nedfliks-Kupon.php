class Kupon {
 public $deger = '1000';
 public $omurboyu = '1';
public function degerAta($deger) {
        $this->deger=$deger;
}
public function olustur() {
        if($this->deger == '1000')
                echo 'İste kupon kodunuz.'.rand();
        if($this->omurboyu == '1')
                echo 'FLAG_**';
}
}
