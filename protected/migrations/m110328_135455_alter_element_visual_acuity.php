<?php

class m110328_135455_alter_element_visual_acuity extends CDbMigration
{
    public function up()
    {
   		$this->addColumn('element_visual_acuity', 'right_aid', 'TINYINT(1) UNSIGNED');
   		$this->addColumn('element_visual_acuity', 'left_aid', 'TINYINT(1) UNSIGNED');
    }

    public function down()
    {
		$this->dropColumn('element_visual_acuity', 'aid');
		$this->dropColumn('element_visual_acuity', 'format');
    }
}