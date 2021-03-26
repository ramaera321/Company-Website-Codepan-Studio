<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Komentar extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          		=> [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama'       		=> [
				'type'       	=> 'VARCHAR',
				'constraint'	=> '255',
			],
			'jabatan'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint' 	=> '255',
			],
			'perusahaan'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint' 	=> '255',
			],
			'komentar'       	=> [
				'type'       	=> 'TEXT',
				'null'		 	=> false,
			],
			'foto'       		=> [
				'type'       	=> 'VARCHAR',
				'null'		 	=> '255',
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
		$this->forge->createTable('komentar');
	}

	public function down()
	{
		$this->forge->dropTable('komentar');
	}
}
