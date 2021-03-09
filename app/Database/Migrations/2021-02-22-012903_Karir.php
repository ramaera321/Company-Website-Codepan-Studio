<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Karir extends Migration
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
			'nama_karir'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint' 	=> '100',
			],
			'lokasi'       		=> [
				'type'       	=> 'VARCHAR',
				'constraint' 	=> '255',
			],
			'deskripsi'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint' 	=> '255',
			],
			'keterangan'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint' 	=> '100',
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
		$this->forge->createTable('karir');
	}

	public function down()
	{
		$this->forge->dropTable('karir');
	}
}
