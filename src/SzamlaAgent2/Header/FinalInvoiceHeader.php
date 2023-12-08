<?php

namespace IllionItGroup\SzamlazzHu\SzamlaAgent2\Header;

use IllionItGroup\SzamlazzHu\SzamlaAgent2\Document\Invoice\Invoice;

/**
 * Végszámla fejléc
 *
 * @package IllionItGroup\SzamlazzHu\SzamlaAgent\Header
 */
class FinalInvoiceHeader extends InvoiceHeader {

    /**
     * @param int $type
     *
     * @throws \IllionItGroup\SzamlazzHu\SzamlaAgent2\SzamlaAgentException
     */
    function __construct($type = Invoice::INVOICE_TYPE_P_INVOICE) {
        parent::__construct($type);
        $this->setFinal(true);
    }
}
