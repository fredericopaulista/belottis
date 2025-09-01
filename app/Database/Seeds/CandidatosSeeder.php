<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CandidatosSeeder extends Seeder
{
    public function run()
    {
        $file = fopen(WRITEPATH . 'uploads/curriculo.csv', 'r');

        if ($file === false) {
            throw new \RuntimeException('Não foi possível abrir o arquivo curriculo.csv');
        }

        // Pular a primeira linha (cabeçalho do CSV)
        fgetcsv($file, 0, ',');

        $emailsProcessados = [];
        $registros = [];

        // Primeiro, coletar todos os registros e eliminar duplicados por email
        while (($row = fgetcsv($file, 0, ',')) !== false) {
            $email = $row[2] ?? '';
            
            // Verificar se o email é válido e não está vazio
            if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Se o email já foi processado, pular este registro (duplicado)
                if (in_array($email, $emailsProcessados)) {
                    continue;
                }
                
                $emailsProcessados[] = $email;
                $registros[] = $row;
            }
        }

        fclose($file);

        // Agora inserir os registros únicos no banco
        foreach ($registros as $row) {
            $data = [
                'nome' => $row[1] ?? '',
                'email' => $row[2] ?? '',
                'cpf' => $row[3] ?? '',
                'telefone_fixo' => $row[4] ?? '',
                'telefone_celular' => $row[5] ?? '',
                'data_nascimento' => !empty($row[6]) ? date('Y-m-d', strtotime(str_replace('/', '-', $row[6]))) : null,
                'sexo' => $row[7] ?? '',
                'periodo' => $row[8] ?? '',
                'formacao' => $row[9] ?? '',
                'instituicao_ensino' => $row[10] ?? '',
                'logradouro' => $row[12] ?? '',
                'numero_endereco' => $row[13] ?? '',
                'complemento' => $row[14] ?? '',
                'cep' => $row[15] ?? '',
                'bairro' => $row[16] ?? '',
                'cidade' => $row[17] ?? '',
                'estado' => $row[18] ?? '',
            ];

            // Inserir no banco de dados seguindo a estrutura da migration
            $this->db->table('candidatos')->insert([
                'nome' => $data['nome'],
                'email' => $data['email'],
                'telefone' => !empty($data['telefone_celular']) ? $data['telefone_celular'] : $data['telefone_fixo'],
                'formacao_academica' => $data['formacao'],
                'curso' => '', // Não existe no CSV
                'ano_conclusao' => null, // Não existe no CSV
                'linkedin' => '', // Não existe no CSV
                'cidade' => $data['cidade'],
                'data_nascimento' => $data['data_nascimento'],
                'estado' => $data['estado'],
                'portfolio' => '', // Não existe no CSV
                'instituicao' => $data['instituicao_ensino'],
                'experiencia_profissional' => '', // Não existe no CSV
                'habilidades_competencias' => '', // Não existe no CSV
                'nome_arquivo_curriculo' => '', // Não existe no CSV
                'caminho_arquivo' => '', // Não existe no CSV
                'carta_apresentacao' => '', // Não existe no CSV
                'ip_candidato' => '127.0.0.1',
                'status' => 'novo',
                'data_cadastro' => date('Y-m-d H:i:s'),
                'data_atualizacao' => null
            ]);
        }

        echo "Total de registros únicos inseridos: " . count($registros) . PHP_EOL;
    }
}