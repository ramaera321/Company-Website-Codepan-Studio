<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pemesanan extends Migration
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
			'nama'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint' 	=> '255',
			],
			'email'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint' 	=> '255',
			],
			'no'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint' 	=> '255',
			],
			'nama_perusahaan'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint' 	=> '255',
			],
			'layanan_it'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint' 	=> '255',
			],
			'jumlah_orang'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint' 	=> '255',
			],
			'bidang_perusahaan'       	=> [
				'type'       	=> 'TEXT',
				'constraint' 	=> '255',
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
		$this->forge->createTable('pemesanan');
	}

	public function down()
	{
		$this->forge->dropTable('pemesanan');
	}
}
