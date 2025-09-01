<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class VagasSeeder extends Seeder
{
    public function run()
    {
        $csvFile = fopen(WRITEPATH . 'uploads/vagas.csv', 'r');

        // Pular cabeçalho se houver
        fgetcsv($csvFile);

        while (($row = fgetcsv($csvFile, 1000, ",")) !== FALSE) {
            $id        = $row[0];
            $titulo    = $row[1] ?? '';
            $html      = $row[2] ?? '';
            $dataPub   = $row[5] ?? date('Y-m-d H:i:s');

            // Separar cargo e cidade/estado
            $parts  = explode('-', $titulo);
            $cargo  = trim($parts[0] ?? 'Não informado');
            $cidadeEstado = trim(end($parts));
            $cidadeEstadoParts = explode('/', $cidadeEstado);
            $cidade = trim($cidadeEstadoParts[0] ?? 'Não informado');
            $estado = trim($cidadeEstadoParts[1] ?? 'NA');

            // Parsear HTML
            $empresa    = null;
            $requisitos = null;
            $beneficios = null;

            if (!empty($html)) {
                // Extrair texto do primeiro <strong>
                if (preg_match('/<strong>(.*?)<\/strong>/', $html, $matches)) {
                    $empresa = strip_tags($matches[1]);
                }

                // Extrair requisitos
                if (preg_match('/<strong>Requisitos:<\/strong>(.*?)<\/p>/s', $html, $matches)) {
                    $requisitos = strip_tags($matches[1]);
                }

                // Extrair benefícios (último parágrafo com "Bolsa" ou "Benefícios")
                if (preg_match_all('/<p>(.*?)<\/p>/s', $html, $matches)) {
                    foreach ($matches[1] as $p) {
                        if (stripos($p, 'Bolsa') !== false || stripos($p, 'Benef') !== false || stripos($p, 'Aux') !== false) {
                            $beneficios = strip_tags($p);
                        }
                    }
                }
            }

            $data = [
                'cargo'             => $cargo,
                'empresa'           => $empresa ?? 'Não informado',
                'cidade'            => $cidade,
                'estado'            => $estado,
                'tipo_contratacao'  => 'Estágio',
                'modalidade'        => 'Presencial',
                'descricao'         => strip_tags($html),
                'salario_min'       => null,
                'salario_max'       => null,
                'data_publicacao'   => $dataPub,
                'requisitos'        => $requisitos,
                'beneficios'        => $beneficios,
                'nivel_experiencia' => 'Estágio',
                'setor'             => null,
                'quantidade_vagas'  => 1,
                'prazo_inscricao'   => null,
                'ativo'             => 1,
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s'),
                'deleted_at'        => null
            ];

            $this->db->table('vagas')->insert($data);
        }

        fclose($csvFile);
    }
}