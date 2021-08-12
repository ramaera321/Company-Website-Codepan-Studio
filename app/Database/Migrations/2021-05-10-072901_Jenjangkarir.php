<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jenjangkarir extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'karir'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint'	=> '255',
			],
			'created_at' 		=> [
				'type' 			=> 'DATETIME',
				'null' 			=> true,
			],
			'updated_at' 		=> [
				'type' 			=> 'DATETIME',
				'null' 			=> true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('jenjang_karir');
	}

	public function down()
	{
		$this->forge->dropTable('jenjang_karir');
	}
}
