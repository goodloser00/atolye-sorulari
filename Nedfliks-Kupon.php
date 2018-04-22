class Kupon {
 public $deger = '';
 public $omurboyu = '0';
public function degerAta($deger) {
        $this->deger=$deger;
}
public function olustur() {
        if($this->deger == '10')
                echo 'İste kupon kodunuz.'.rand();
        if($this->omurboyu == '1')
                echo 'FLAG_**';
}
}
