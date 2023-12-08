<?php

namespace IllionItGroup\SzamlazzHu\SzamlaAgent2\Document;

use IllionItGroup\SzamlazzHu\SzamlaAgent2\Document\Invoice\Invoice;
use IllionItGroup\SzamlazzHu\SzamlaAgent2\Header\DeliveryNoteHeader;

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
