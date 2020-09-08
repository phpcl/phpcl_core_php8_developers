<?php
// core_ext_xml_parser.php

$xml = xml_parser_create_ns('UTF-8', '\\');
if (is_resource($xml)) {
	echo "SUCCESS: XML Parser Created\n";
} else {
	echo "ERROR: XML Parser Not Created\n";
}
var_dump($xml);

// example usage:
$doc = file_get_contents(__DIR__ . '/includes/doc.xml');
xml_parse_into_struct($xml, $doc, $vals);
var_dump($vals);

