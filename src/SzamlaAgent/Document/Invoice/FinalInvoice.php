<?php

namespace IllionItGroup\SzamlazzHu\SzamlaAgent\Document\Invoice;

use IllionItGroup\SzamlazzHu\SzamlaAgent\Header\FinalInvoiceHeader;

/**
 * Végszámla kiállításához használható segédosztály
 *
 * @package szamlaagent\document\invoice
 */
class FinalInvoice extends Invoice {

    /**
     * Végszámla létrehozása
     *
     * @param int $type végszámla típusa (papír vagy e-számla), alapértelmezett a papír alapú számla
     *
     * @throws \IllionItGroup\SzamlazzHu\SzamlaAgent\SzamlaAgentException
     */
    function __construct($type = self::INVOICE_TYPE_P_INVOICE) {
        parent::__construct(null);
        // Alapértelmezett fejléc adatok hozzáadása
        $this->setHeader(new FinalInvoiceHeader($type));
    }
 }
