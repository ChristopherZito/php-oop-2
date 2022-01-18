<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>oop2</title>
</head>
<body>
    <section id="container">
        <div>
            <?php
            /**
             * 
             *      Definire classe Persona:
             *          - ATTRIBUTI (private):
             *              - nome
             *              - cognome
             *              - dataNascita (stringa)
             *          - METODI:
             *              - costruttore che accetta nome e cognome
             *              - setter/getter per ogni variabile
             *              - printFullPerson: che stampa "nome cognome: dataNascita"
             *              - toString: che ritorna "nome cognome: dataNascita"
             * 
             * 
             *      Definire classe Employee che eredita da Persona:
             *          - ATTRIBUTI (private):
             *              - stipendio
             *              - dataAssunzione
             *          - METODI:
             *              - costruttore che accetta nome, cognome e stipendio
             *              - setter/getter per variabili 
             *              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
             *              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)"
             * 
             */
                class Persona {
                    private $nome;
                    private $cognome;
                    private $dataNascita;

                    public function __construct($nome , $cognome){
                        $this -> setNome($nome);
                        $this -> setCognome($cognome);
                    }
                    //Nome
                    public function getNome(){
                        return $this -> nome;
                    }
                    public function setNome($nome){
                        if($nome != " "){
                            $this -> nome = $nome;                        
                        }
                    }

                    //Cognome
                    public function getCognome(){
                        return $this -> cognome;
                    }
                    public function setCognome($cognome){
                        if($cognome != " "){
                            $this -> cognome = $cognome; 
                        }                       
                    }

                    //Data di Nascita
                    public function getDataNascita(){
                        return $this -> dataNascita;
                    }
                    public function setDataNascita($dataNascita){
                        if($dataNascita != " "){
                            $this -> dataNascita = $dataNascita; 
                        }
                                                
                    }

                    public function printFullPerson(){
                        return $this -> getNome(). " " . $this -> getCognome() . ": " . $this -> getDataNascita() ;
                    }
                    public function __toString(){
                        return $this -> getNome(). " " . $this -> getCognome() . ": " . $this -> getDataNascita() ;
                        // return $this -> printFullPerson(); si può fare anche in questo modo
                    }
                }

                class Employee extends Persona {
                    private $stipendio;
                    private $dataAssunzione;
                    
                    public function __construct($name, $surname ,$stipendio)
                    {
                        parent::__construct($name, $surname);
                        $this -> setStipendio($stipendio);
                    }

                    //Stipendio
                    public function getStipendio(){
                        return $this -> stipendio;
                    }
                    public function setStipendio($stipendio){
                        if($stipendio >= 1200){
                            $this -> stipendio = $stipendio;
                        }
                    }

                    //Data Assunzione
                    public function getDataAssunzione(){
                        return $this -> dataAssunzione;
                    }
                    public function setDataAssunzione($dataAssunzione){
                        if($dataAssunzione != " ") {
                            $this -> dataAssunzione = $dataAssunzione;                        
                        }
                    }

                    public function printFullEmployee(){
                        return $this -> getNome(). " " . $this -> getCognome() . ": "."€" . $this -> getStipendio()  . " (". $this -> getDataAssunzione() .")" ;
                    }
                    public function __toString(){
                        return $this -> getNome(). " " . $this -> getCognome() . ": "."€" . $this -> getStipendio()  . " (". $this -> getDataAssunzione() .")" ;
                        // return $this -> printFullEmployee(); si può fare anche in questo modo
                    }
                }
                // Visualizzazione grafica di una persona
                $p1 = new Persona("Pippo", "Pluto");
                $p1 -> setDataNascita("30-04-1982");
                
                echo "PFP: " . $p1 -> printFullPerson() . "<br>" . "TS: " . $p1 . "<br>";

                echo "<br>" . "-----------------------------" . "<br>" . "<br>";

                // Visualizzazione grafica di un Employee
                $e1 = new Employee ($p1 -> getNome(), $p1 -> getCognome(),1600);
                $e1 -> setDataAssunzione("11-12-2003");

                echo "PFE: " . $e1 -> printFullEmployee() . "<br>" . "TS: " . $e1 . "<br>";

            ?>
        </div>
    </section>
    
</body>
</html>