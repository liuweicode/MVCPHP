<?php
/**
 * Created by PhpStorm.
 * User: LingJin
 * Date: 3/4/17
 * Time: 2:25 PM
 */

namespace App\Model;


class UserModel extends BaseModel
{
    public function login($sEmail, $sPassword)
    {
        $oStmt = $this->oDb->prepare('SELECT email, password FROM Admins WHERE email = :email LIMIT 1');
        $oStmt->bindValue(':email', $sEmail, \PDO::PARAM_STR);
        $oStmt->execute();
        $oRow = $oStmt->fetch(\PDO::FETCH_OBJ);

        return password_verify($sPassword, @$oRow->password); // Use the PHP 5.5 password function
    }
}