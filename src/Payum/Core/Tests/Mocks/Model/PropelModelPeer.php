<?php
namespace Payum\Core\Tests\Mocks\Model;

use \Criteria;

class PropelModelPeer
{
    public static function doSelectOne(Criteria $criteria)
    {
        $id = $criteria->getValue('id');

        $model = new PropelModel();

        return $model->findPk($id);
    }
}
