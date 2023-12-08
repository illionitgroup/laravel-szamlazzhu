<?php

namespace IllionItGroup\SzamlazzHu\SzamlaAgent\Header;

use IllionItGroup\SzamlazzHu\SzamlaAgent\Document\Invoice\Invoice;

/**
 * Végszámla fejléc
 *
 * @package IllionItGroup\SzamlazzHu\SzamlaAgent\Header
 */
class FinalInvoiceHeader extends InvoiceHeader {

    /**
     * @param int $type
     *
     * @throws \IllionItGroup\SzamlazzHu\SzamlaAgent\SzamlaAgentException
     */
    function __construct($type = Invoice::INVOICE_TYPE_P_INVOICE) {
        parent::__construct($type);
        $this->setFinal(true);
    }
}
