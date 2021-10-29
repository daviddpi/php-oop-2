<?php 

class Carta{
    protected $nomeProprietario;
    protected $codice;
    protected $dataScadenza;
    protected $nomeCarta;

    public function __construct($nomeProprietario, $codice, $dataScadenza, $nomeCarta){
        $this->nomeProprietario = $nomeProprietario;
        $this->codice = $codice;
        $this->dataScadenza = $dataScadenza;
        $this->nomeCarta = $nomeCarta;
    }

    public function getNomeProprietario(){
        return $this->nomeProprietario;
    }

    public function setNomeProprietario($nomeProprietario){
         $this->nomeProprietario = $nomeProprietario;
    }

    public function getCodice(){
        return $this->codice;
    }

    public function setCodice($codice){
         $this->codice = $codice;
    }

    public function getDataScadenza(){
        return $this->dataScadenza;
    }

    public function setDataScadenza($dataScadenza){
         $this->dataScadenza = $dataScadenza;
    }

    public function getNomecarta(){
        return $this->nomecarta;
    }

    public function setnNomecarta($nomecarta){
         $this->nomecarta = $nomecarta;
    }

}

?>
