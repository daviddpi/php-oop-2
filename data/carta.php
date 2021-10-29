<?php 

class Carta{
    protected $nomeProprietario;
    protected $codice;
    protected $dataScadenza;
    protected $nomeCarta;

    /**
     * @param nomeProprietario il nome dell'utente a cui appartiene la carta
     * @param codice il codice della carta
     * @param dataScadenza la data di scandeza della carta
     * @param nomeCarta il nome della carta (hype, postapay evolution ecc..)
     */
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
        return $this->nomeCarta;
    }

    public function setnNomecarta($nomeCarta){
         $this->nomeCarta = $nomeCarta;
    }

}

?>
