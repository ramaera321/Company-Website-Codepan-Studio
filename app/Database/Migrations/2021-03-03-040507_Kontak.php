<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kontak extends Migration
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
			'hari'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint'	=> '255',
			],
			'jam'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint'	=> '255',
			],
			'wa'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint'	=> '255',
			],
			'telpon'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint'	=> '255',
			],
			'email'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint'	=> '255',
			],
			'facebook'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint'	=> '255',
			],
			'instagram'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint'	=> '255',
			],
			'linkedin'       	=> [
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
		$this->forge->createTable('kontak');
	}

	public function down()
	{
		$this->forge->dropTable('kontak');
	}
}
