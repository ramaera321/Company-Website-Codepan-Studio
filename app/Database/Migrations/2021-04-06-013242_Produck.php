<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produck extends Migration
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
			'judul'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint' 	=> '255',
			],
			'slug'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint' 	=> '255',
			],
			'deskripsi_singkat'       	=> [
				'type'       	=> 'TEXT',
				'null' 	        => false,
			],
			'isi'       	=> [
				'type'       	=> 'TEXT',
				'null' 	        => false,
			],
			'penulis'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint' 	=> '255',
			],
			'foto'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint' 	=> '255',
			],
			'bagian_dari'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint' 	=> '25',
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
		$this->forge->createTable('produck');
	}

	public function down()
	{
		$this->forge->dropTable('produck');
	}
}
