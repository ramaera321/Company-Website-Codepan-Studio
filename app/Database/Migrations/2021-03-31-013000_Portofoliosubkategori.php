<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Portofoliosubkategori extends Migration
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
			'nama_sub'       	=> [
				'type'       	=> 'VARCHAR',
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
		$this->forge->createTable('portfolio_sub_kategori');
	}

	public function down()
	{
		$this->forge->dropTable('portfolio_sub_kategori');
	}
}
