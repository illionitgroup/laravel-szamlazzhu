<?php

namespace IllionItGroup\SzamlazzHu\SzamlaAgent\Header;

/**
 * Szállítólevél fejléc
 *
 * @package IllionItGroup\SzamlazzHu\SzamlaAgent\Header
 */
class DeliveryNoteHeader extends InvoiceHeader {

    /**
     * @throws \IllionItGroup\SzamlazzHu\SzamlaAgent\SzamlaAgentException
     */
    function __construct() {
        parent::__construct();
        $this->setDeliveryNote(true);
        $this->setPaid(false);
    }
}
