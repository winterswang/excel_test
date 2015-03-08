<?php
/**
 * @Author: wangguangchao
 * @Date:   2015-03-06 23:05:25
 * @Last Modified by:   wangguangchao
 * @Last Modified time: 2015-03-06 23:20:33
 */
use SimpleExcel\SimpleExcel;

require_once('../../src/SimpleExcel/SimpleExcel.php');

$excel = new SimpleExcel('CSV');
$excel->parser->loadFile('test_mac.csv');

$col1 = $excel->parser->getColumn(1);
$ll = 1;
foreach ($col1 as $key => $line) {
	$rows = explode(';',$line);
	//0，1分别指的是第一排和第二排
	if ($rows[0] != $rows[1]) {
		echo "line $ll is not same \n";
	}
	$ll ++;
}
// $col2 = $excel->parser->getColumn(1);

?>