<?php 

class Utente{

    protected $nome;
    protected $eta;
    protected $email;
    protected $carte;

    /**
     * @param nome il nome dell'utente
     * @param eta l'eta dell'utente
     * @param email l'email dell'utente
     */
    public function __construct($nome, $eta, $email, $carte = []){
        
        $this->nome = $nome;
        $this->eta = $eta;
        $this->email = $email;

    }

    /** Questa funzione permette di inserire in un array la carte dell'utente
     * @param carte la carta da aggiungere
     */
    public function aggiungiCarte($carte){
        $this->carte[] = $carte;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEta(){
        return $this->eta;
    }

    public function setEta($eta){
        $this->eta = $eta;
    }

    public function getMail(){
        return $this->email;
    }

    public function setMail($email){
        $this->mail = $email;
    }

    public function getCarte(){
        return $this->carte;
    }

    public function setCarte($carte){
        $this->carte = $carte;
    }

}



?>
