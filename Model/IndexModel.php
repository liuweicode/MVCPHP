<?php
/**
 * Created by PhpStorm.
 * User: LingJin
 * Date: 3/4/17
 * Time: 2:25 PM
 */

namespace App\Model;


class IndexModel extends BaseModel
{
    public function get($iOffset, $iLimit)
    {
        $oStmt = $this->oDb->prepare('SELECT * FROM Posts ORDER BY createdDate DESC LIMIT :offset, :limit');
        $oStmt->bindParam(':offset', $iOffset, \PDO::PARAM_INT);
        $oStmt->bindParam(':limit', $iLimit, \PDO::PARAM_INT);
        $oStmt->execute();
        return $oStmt->fetchAll(\PDO::FETCH_OBJ);
    }
}