<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ayat extends Migration
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
			'pasal'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint' 	=> '255',
			],
			'judul_ayat'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint' 	=> '255',
			],
			'deskripsi'       	=> [
				'type'       	=> 'TEXT',
				'null'		 	=> false,
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
		$this->forge->createTable('ayat');
	}

	public function down()
	{
		$this->forge->dropTable('ayat');
	}
}
