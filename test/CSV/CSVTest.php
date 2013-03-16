<?php

use SimpleExcel\SimpleExcel;

require_once('../../src/SimpleExcel/SimpleExcel.php');

class CSVTest extends PHPUnit_Framework_TestCase
{
    public function testParser()
    {
        $excel = new SimpleExcel('CSV');
        $excel->parser->loadFile('test.csv');
        $this->assertEquals('Kab. Cianjur', $excel->parser->getCell(3, 2));
        $this->assertEquals(array('5', 'Comma, inside, double-quotes', '3'), $excel->parser->getRow(6));
        $this->assertEquals(array('Kode Wilayah', '1', '1', '1', '2', '3'), $excel->parser->getColumn(3));
    }
}

?>