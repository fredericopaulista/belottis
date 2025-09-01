<?php
// app/Database/Migrations/2024-01-01-000000_CreateNewsletterTable.php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNewsletterTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'unique' => true
            ],
            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            'ativo' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 1
            ],
            'criado_em' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'atualizado_em' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addUniqueKey('email');
        $this->forge->createTable('newsletter');
    }

    public function down()
    {
        $this->forge->dropTable('newsletter');
    }
}