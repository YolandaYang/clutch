<?php
/**
 * Giftcard Entity collection

 * @category Snap
 * @package Snap_Card
 */
class Snap_Card_Model_Resource_Entity_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    /**
     * Constructor. Initialize collection item model
     */
    public function _construct()
    {
        parent::_construct();
        $this->_init('snap_card/giftcard');
    }

}
