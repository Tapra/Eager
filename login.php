<?php
/**
 * Created by PhpStorm.
 * User: Tapra
 * Date: 26/6/18
 * Time: 16:09
 */

spl_autoload_extensions('.php');
spl_autoload_register();

$error='';
$result = '';
$log = new login();
echo $log->login();


class login {

    private $dsn;
    private $user;
    private $pass;

    public function __construct()
    {
        $this->dsn = "sqlsrv:server = tcp:eagerbeavers.database.windows.net,1433; Database = SQLEagerBeavers";
        $this->user = "nicebeaver";
        $this->pass = "bits2018!";
    }

    public function login(){

        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $username = stripcslashes($username);
        $password = stripcslashes($password);

        try{
            $connection =  new PDO($this->dsn, $this->user, $this->pass);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = $connection->prepare("SELECT * FROM Users WHERE email = ? AND password = ?");
            $query->setFetchMode(PDO::FETCH_CLASS, 'User');
            $query->execute(array($username, $password));
            $result = $query->fetch();

            if ($result !== false){
                $user = $result;
                $_SESSION['loggedIn'] = true;
                $_SESSION['username'] = #username;
                $_SESSION['firstname'] = $user->getFirstName();
                $error = 'login success';
                header("location: http://localhost/eagerbeaver/");
            } else {
                $error = 'login fail';
                header("location: http://localhost/eagerbeaver/");
            }
            return($error);
        }
        catch (PDOException $e){
            die(print_r($e));

        }
    }
}
