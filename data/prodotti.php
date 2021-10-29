<?php 

class Prodotto{

    protected $nome;
    protected $marca;
    protected $prezzo;
    protected $quantita;

    /**
     * @param nome il nome del prodotto
     * @param marca la marca del prodotto
     * @param prezzo il prezzo del prodotto
     * @param quantita la quantita disponiile in magazzino del prodotto
     */
    public function __construct($nome, $marca, $prezzo, $quantita){
        
        $this->nome = $nome;
        $this->marca = $marca;
        $this->prezzo = $prezzo;
        $this->quantita = $quantita;

    }

    /**
     * @return ritorna il nome del prodotto
     */
    public function getNome(){
        return $this->nome;
    }

    /**
     * @param nome inserisci il nome del prodotto che vuoi settare
     */
    public function setNome($nome){
        $this->nome = $nome;
    }

    /**
     * @return ritorna la marca del prodotto
     */
    public function getMarca(){
        return $this->marca;
    }

    /**
     * @param nome inserisci la marca del prodotto che vuoi settare
     */
    public function setMarca($marca){
        $this->marca = $marca;
    }

    /**
     * @return ritorna il prezzo del prodotto
     */
    public function getPrezzo(){
        return $this->prezzo;
    }

    /**
     * @param nome inserisci il prezzo del prodotto che vuoi settare
     */
    public function setPrezzo($prezzo){
        $this->prezzo = $prezzo;
    }

    /**
     * @return ritorna la quantita disponibile del prodotto
     */
    public function getQuantita(){
        return $this->quantita;
    }

    /**
     * @param nome inserisci il prezzo del prodotto che vuoi settare
     */
    public function setQuantita($quantita){
        $this->quantia = $quantita;
    }

}

class Magliette extends Prodotto{
    protected $taglia;
    protected $colore;
    protected $genere;
    protected $tipo;

    /**
     * @param taglia la taglia della maglietta
     * @param colore il colore della maglietta
     * @param genere il genere inteso se per donne o uomini
     * @param tipo il tipo inteso se machine lunghe o corte
     */
    public function __construct($taglia, $colore, $genere, $tipo, $nome, $marca, $prezzo, $quantita)
    {

        $this->taglia = $taglia;
        $this->colore = $colore;
        $this->genere = $genere;
        $this->tipo = $tipo;
        parent::__construct($nome, $marca, $prezzo, $quantita);

    }


    public function getTaglia(){
        return $this->taglia;
    }

    public function setTaglia($taglia){
        $this->taglia = $taglia;
    }

    public function getcolore(){
        return $this->colore;
    }

    public function setColore($genere){
        $this->genere = $genere;
    }

    public function getGenere(){
        return $this->genere;
    }

    public function setGenere($genere){
        $this->genere = $genere;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

}




?>
