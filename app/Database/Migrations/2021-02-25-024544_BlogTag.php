<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BlogTag extends Migration
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
			'nama_tag'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint' 	=> '255',
			],
			'blog_slug'       	=> [
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
		$this->forge->createTable('blog_tag');
	}

	public function down()
	{
		$this->forge->dropTable('blog_tag');
	}
}
