<?php

namespace Fuel\Migrations;

class Create_students
{
	public function up()
	{
		\DBUtil::create_table('students', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'group_1' => array('constraint' => 10, 'type' => 'varchar'),
			'group_2' => array('constraint' => 10, 'type' => 'varchar'),
			'suggestion' => array('constraint' => 10, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('students');
	}
}