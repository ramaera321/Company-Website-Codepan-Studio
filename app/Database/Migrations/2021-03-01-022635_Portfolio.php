<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Portfolio extends Migration
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
			'kategori'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint' 	=> '255',
			],
			'sub_kategori'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint' 	=> '255',
			],
			'tentang_mitra'       	=> [
				'type'       	=> 'TEXT',
				'null' 	        => false,
			],
			'tantangan'       	=> [
				'type'       	=> 'TEXT',
				'null' 	        => false,
			],
			'solusi'       	=> [
				'type'       	=> 'TEXT',
				'null' 	        => false,
			],
			'hasil'       	=> [
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
		$this->forge->createTable('portfolio');
	}

	public function down()
	{
		$this->forge->dropTable('portfolio');
	}
}
