<?php

namespace IllionItGroup\SzamlazzHu\SzamlaAgent\Header;

use IllionItGroup\SzamlazzHu\SzamlaAgent\Document\Invoice\Invoice;

/**
 * Előlegszámla fejléc
 *
 * @package IllionItGroup\SzamlazzHu\SzamlaAgent\Header
 */
class PrePaymentInvoiceHeader extends InvoiceHeader {

    /**
     * @param int $type
     *
     * @throws \IllionItGroup\SzamlazzHu\SzamlaAgent\SzamlaAgentException
     */
    function __construct($type = Invoice::INVOICE_TYPE_P_INVOICE) {
        parent::__construct($type);
        $this->setPrePayment(true);
        $this->setPaid(false);
    }
}
