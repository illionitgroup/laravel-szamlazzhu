<?php

namespace IllionItGroup\SzamlazzHu\SzamlaAgent2\Document\Invoice;

use IllionItGroup\SzamlazzHu\SzamlaAgent2\Header\PrePaymentInvoiceHeader;

/**
 * Előlegszámla kiállításához használható segédosztály
 *
 * @package szamlaagent\document\invoice
 */
class PrePaymentInvoice extends Invoice {

    /**
     * Előlegszámla létrehozása
     *
     * @param int $type számla típusa (papír vagy e-számla), alapértelmezett a papír alapú számla
     *
     * @throws \IllionItGroup\SzamlazzHu\SzamlaAgent2\SzamlaAgentException
     */
    function __construct($type = self::INVOICE_TYPE_P_INVOICE) {
        parent::__construct(null);
        // Alapértelmezett fejléc adatok hozzáadása
        $this->setHeader(new PrePaymentInvoiceHeader($type));
    }
 }
