<?php


namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCandidatosTable extends Migration
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
            'cargo' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false
            ],
            'empresa' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false
            ],
            'cidade' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => false
            ],
            'estado' => [
                'type' => 'VARCHAR',
                'constraint' => '2',
                'null' => false
            ],
            'tipo_contratacao' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => false
            ],
            'modalidade' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => false
            ],
            'descricao' => [
                'type' => 'TEXT',
                'null' => false
            ],
            'salario_min' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'null' => true
            ],
            'salario_max' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'null' => true
            ],
            'data_publicacao' => [
                'type' => 'DATETIME',
                'null' => false
            ],
            'requisitos' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'beneficios' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'nivel_experiencia' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true
            ],
            'setor' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true
            ],
            'quantidade_vagas' => [
                'type' => 'INT',
                'constraint' => 11,
                'default' => 1
            ],
            'prazo_inscricao' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'ativo' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 1
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->createTable('candidatos');
    }

    public function down()
    {
        $this->forge->dropTable('candidatos');
    }
}