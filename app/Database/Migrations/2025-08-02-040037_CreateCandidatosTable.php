<?php


namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCandidatosTable extends Migration
{
    public function up()
    {
       
            $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nome' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'telefone' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null'       => true,
            ],
            'formacao_academica' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'curso' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'ano_conclusao' => [
                'type'       => 'YEAR',
                'constraint' => 4,
                'null'       => true,
            ],
            'linkedin' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'cidade' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true,
            ],
            'data_nascimento' => [
                'type'       => 'DATE',
                'null'       => true,
            ],
            'estado' => [
                'type'       => 'VARCHAR',
                'constraint' => '2',
                'null'       => true,
            ],
            'portfolio' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'instituicao' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'experiencia_profissional' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'habilidades_competencias' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'nome_arquivo_curriculo' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'caminho_arquivo' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'carta_apresentacao' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'ip_candidato' => [
                'type'       => 'VARCHAR',
                'constraint' => '45',
                'null'       => true,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'default'    => 'novo',
                'null'       => false,
            ],
            'data_cadastro' => [
                'type'       => 'DATETIME',
                'null'       => true,
                'default'    => null,
            ],
            'data_atualizacao' => [
                'type'       => 'DATETIME',
                'null'       => true,
                'default'    => null,
            ],
        ]);

        $this->forge->addKey('id');
        $this->forge->addKey('email');
        $this->forge->addKey('status');
        $this->forge->addKey('criado_em');
        
        $this->forge->createTable('candidatos');
    }

    public function down()
    {
        $this->forge->dropTable('candidatos');
    }
}