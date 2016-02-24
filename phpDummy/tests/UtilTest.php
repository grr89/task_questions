<?php

require 'util.php';

class UtilTest extends PHPUnit_Framework_TestCase
{

	public function testGetCleanRevertedStrEquals(){
		$assertions = array(
			array('Hello world!','!dlrw llH'),
			array('HEllo wOrld!','!dlrw llH'),
			array('abc','cb'),
			array('1ioAex','x1'),
			array('  Igor','rg  '),
			array('bcdefgG','Ggfdcb'),
		);
		foreach ($assertions as $a){
			$this->assertEquals($a[1],get_clean_reverted_str($a[0]));
		}
	}

}
