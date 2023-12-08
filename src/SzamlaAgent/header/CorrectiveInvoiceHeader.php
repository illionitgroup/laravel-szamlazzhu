<?php

namespace IllionItGroup\SzamlazzHu\SzamlaAgent\Header;

use IllionItGroup\SzamlazzHu\SzamlaAgent\Document\Invoice\Invoice;

/**
 * Helyesbítő számla fejléc
 *
 * @package IllionItGroup\SzamlazzHu\SzamlaAgent\Header
 */
class CorrectiveInvoiceHeader extends InvoiceHeader {

    /**
     * @param int $type
     *
     * @throws \IllionItGroup\SzamlazzHu\SzamlaAgent\SzamlaAgentException
     */
    function __construct($type = Invoice::INVOICE_TYPE_P_INVOICE) {
        parent::__construct($type);
        $this->setCorrective(true);
    }
}
