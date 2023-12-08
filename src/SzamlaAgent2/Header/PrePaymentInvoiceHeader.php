<?php

namespace IllionItGroup\SzamlazzHu\SzamlaAgent2\Header;

use IllionItGroup\SzamlazzHu\SzamlaAgent2\Document\Invoice\Invoice;

/**
 * Előlegszámla fejléc
 *
 * @package IllionItGroup\SzamlazzHu\SzamlaAgent\Header
 */
class PrePaymentInvoiceHeader extends InvoiceHeader {

    /**
     * @param int $type
     *
     * @throws \IllionItGroup\SzamlazzHu\SzamlaAgent2\SzamlaAgentException
     */
    function __construct($type = Invoice::INVOICE_TYPE_P_INVOICE) {
        parent::__construct($type);
        $this->setPrePayment(true);
        $this->setPaid(false);
    }
}
