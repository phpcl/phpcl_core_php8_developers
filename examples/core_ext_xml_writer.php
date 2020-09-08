<?php
// core_ext_xml_writer.php

// this works OK:
$xml = new XMLWriter();
$xml->openMemory();
$xml->startDocument('1.0', 'UTF-8');
$xml->startElement('fruit');
$xml->startElement('item');
$xml->text('Apple');
$xml->endElement();
$xml->startElement('item');
$xml->text('Banana');
$xml->endElement();
$xml->endElement();
$xml->endDocument();
echo $xml->outputMemory();

// this works in PHP 7 but not 8:
$xml = xmlwriter_open_memory();
var_dump($xml);
if (!is_resource($xml)) exit('ERROR forming XML document');
xmlwriter_start_document($xml, '1.0', 'UTF-8');
xmlwriter_start_element($xml, 'fruit');
xmlwriter_start_element($xml, 'item');
xmlwriter_text($xml, 'Apple');
xmlwriter_end_element($xml);
xmlwriter_start_element($xml, 'item');
xmlwriter_text($xml, 'Banana');
xmlwriter_end_element($xml);
xmlwriter_end_element($xml);
xmlwriter_end_document($xml);
echo xmlwriter_output_memory($xml);
