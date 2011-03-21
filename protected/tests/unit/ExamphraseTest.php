<?php
class ExamphraseTest extends CDbTestCase
{
	public $fixtures = array(
		'specialties' => 'Specialty',
		'firms' => 'Firm',
		'examphrase' => ':exam_phrase',
	);

	public function testGetSpecialtyOptions()
	{
		$specialties = ExamPhrase::model()->getSpecialtyOptions();
		$this->assertTrue(is_array($specialties));
		$this->assertEquals(16, count($specialties));
	}

	public function testGetPartOptions()
	{
		$parts = ExamPhrase::model()->getPartOptions();
		$this->assertTrue(is_array($parts));
		$this->assertEquals(9, count($parts));
	}

	public function testPartText()
	{
		$examphrase = ExamPhrase::model()->find(
			'phrase = :phrase', array(':phrase' => 'Test examphrase 1')
		);

		$this->assertNotNull($examphrase);
		$this->assertEquals($examphrase->getPartText(), 'History');
	}
}