<?php

// déclaration d'une classe en PHP
// pas de parenthese comme dans une fonction ! (pas dans une fonction)
class Mail
{
    const MAX_QUEUE = 10; // une constante de classe

    // contenu de la classe (propriétés et méthodes)

    // Propriétés&
    private $sender;
    private $receiver;

    // Méthodes

    // Constructeur
    public function __construct($sender, $receiver)
    {
        $this->sender = $sender;
        $this->receiver = $receiver;
    }

    public function send()
    {
        if ($this->checkMail($this->sender) && $this->checkMail($this->receiver)) {
            return "ok";
        } else {
            return "nok";
        }
    }

    private function checkMail($email)
    {
            return true;
    }

    //---------------
    //GETTER - SETTER
    //---------------
    public function getCheckMail()
    {
        return $this->check; // le this renvoie la valeur de ma propre propriété.
        //elle pointe vers la valeur de sa classe
    }
}
