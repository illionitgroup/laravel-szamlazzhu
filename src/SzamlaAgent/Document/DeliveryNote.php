<?php

namespace IllionItGroup\SzamlazzHu\SzamlaAgent\Document;

use IllionItGroup\SzamlazzHu\SzamlaAgent\Document\Invoice\Invoice;
use IllionItGroup\SzamlazzHu\SzamlaAgent\Header\DeliveryNoteHeader;

/**
 * Szállítólevél segédosztály
 *
 * @package szamlaagent\document
 */
class DeliveryNote extends Invoice {

    /**
     * Szállítólevél kiállítása
     *
     * @throws \Exception
     */
    function __construct() {
        parent::__construct(null);
        // Alapértelmezett fejléc adatok hozzáadása
        $this->setHeader(new DeliveryNoteHeader());
    }
 }
