<?php

namespace IllionItGroup\SzamlazzHu\SzamlaAgent2\Document\Invoice;

use IllionItGroup\SzamlazzHu\SzamlaAgent2\Header\ReverseInvoiceHeader;

/**
 * Sztornó számla
 *
 * @package szamlaagent\document\invoice
 */
class ReverseInvoice extends Invoice {

    /**
     * Sztornó számla létrehozása
     *
     * @param int $type számla típusa (papír vagy e-számla), alapértelmezett a papír alapú számla
     *
     * @throws \IllionItGroup\SzamlazzHu\SzamlaAgent2\SzamlaAgentException
     */
    public function __construct($type = self::INVOICE_TYPE_P_INVOICE) {
        parent::__construct(null);
        // Alapértelmezett fejléc adatok hozzáadása a számlához
        if (!empty($type)) {
            $this->setHeader(new ReverseInvoiceHeader($type));
        }
    }
}
