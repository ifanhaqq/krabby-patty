<?php
include_once 'BendaLangit.php';
class ProximaCentauri implements BendaLangit {

    private int $massa;
    private string $warna;

    public function __construct(int $massa, string $warna) {
        $this->massa = $massa;
        $this->warna = $warna;
    }
    public function berevolusi(): void {
        echo 'Proxima Centauri berevolusi terhadap inti galaxy bima sakti';
    }
    public function getInfo():string {
        return 'Proxima centauri memiliki massa sebesar ' . $this->massa . ' dan memiliki warna ' . ' katai merah';
    }
    public function berotasi():void {
        echo 'Proxima Centauri berotasi';
    }

}