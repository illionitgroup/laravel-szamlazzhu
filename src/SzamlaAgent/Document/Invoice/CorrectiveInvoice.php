<?php

namespace IllionItGroup\SzamlazzHu\SzamlaAgent\Document\Invoice;

use IllionItGroup\SzamlazzHu\SzamlaAgent\Header\CorrectiveInvoiceHeader;

/**
 * Helyesbítő számla kiállításához használható segédosztály
 *
 * @package szamlaagent\document
 */
class CorrectiveInvoice extends Invoice {

    /**
     * Helyesbítő számla létrehozása
     *
     * @param int $type számla típusa (papír vagy e-számla), alapértelmezett a papír alapú számla
     *
     * @throws \IllionItGroup\SzamlazzHu\SzamlaAgent\SzamlaAgentException
     */
    function __construct($type = self::INVOICE_TYPE_P_INVOICE) {
        parent::__construct(null);
        // Alapértelmezett fejléc adatok hozzáadása
        $this->setHeader(new CorrectiveInvoiceHeader($type));
    }
 }
