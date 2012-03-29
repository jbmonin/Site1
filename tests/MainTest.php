<?php 

class MainTest extends PHPUnit_Framework_TestCase
{
	public function testFunctionTestWorksFine()
	{
		require_once '../public/test.php';
		$result = Main::test(true);
		$this->assertEquals($result, 1234);
	}
}