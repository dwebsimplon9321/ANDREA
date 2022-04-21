<?php 
# class pdo connecte

class Connect_pdo {

    # proprietes = variables
    private $_host;
    private $_dbname;
    private $_user;
    private $_mdp;
    private $_connectDB;



    # methodes = functions
    public function __construct()
    {
        $this->_host = 'localhost';
        $this->_dbname = 'dbfile';
        $this->_user = 'dbfileu';
        $this->_mdp = 't55S4ScL6d';

        #
        $db = Connect_pdo::info_connexion($this->_host, $this->_dbname, $this->_user, $this->_mdp);
        $this->_connectDB = $db;
    }


    static function info_connexion($host, $db, $userDB, $userPass){

        $dsn = 'mysql:dbname='.$db.';host='.$host;
        $username = $userDB; 
        $password = $userPass ;

        try {
            $info = new PDO($dsn, $username, $password);

            return $info;   # contient objet Connect_pdo et objet PDO

        } catch(PDOException $e) {

            echo "Connexion échouée : ".$e->getMessage(), $e->getCode();
        }


    }



    # getter / setter methodes
    public function getConnectDB(){

        return $this->_connectDB;
    }

    public function setConnectDB($_connectDB){

        $this->_connectDB = $_connectDB;
    }

}