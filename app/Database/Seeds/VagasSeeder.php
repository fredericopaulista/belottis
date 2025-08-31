<?php
// app/Database/Seeds/VagaSeeder.php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class VagasSeeder extends Seeder
{
    public function run()
    {
        $vagaModel = new \App\Models\VagaModel();

        $vagas = [
            [
                'cargo' => 'Analista de Recursos Humanos',
                'empresa' => 'Tech Solutions Ltda',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
                'tipo_contratacao' => 'CLT',
                'modalidade' => 'Presencial',
                'descricao' => 'Buscamos profissional para atuar na área de Recursos Humanos, com foco em recrutamento e seleção, treinamento e desenvolvimento, e gestão de benefícios.',
                'salario_min' => 4000.00,
                'salario_max' => 5500.00,
                'data_publicacao' => date('Y-m-d H:i:s', strtotime('-2 days')),
                'requisitos' => "Formação em RH ou áreas correlatas\nExperiência com recrutamento e seleção\nConhecimento em legislação trabalhista",
                'beneficios' => "Vale alimentação\nVale transporte\nPlano de saúde\nGympass",
                'nivel_experiencia' => 'Pleno',
                'setor' => 'Tecnologia',
                'quantidade_vagas' => 1,
                'prazo_inscricao' => date('Y-m-d H:i:s', strtotime('+15 days')),
                'ativo' => 1
            ],
            // Adicione mais 19 vagas seguindo o mesmo padrão...
        ];

        // Adicione mais exemplos de vagas aqui
        for ($i = 2; $i <= 20; $i++) {
            $vagas[] = [
                'cargo' => 'Desenvolvedor ' . ['Front-end', 'Back-end', 'Full-stack'][rand(0, 2)],
                'empresa' => 'Empresa ' . $i . ' Ltda',
                'cidade' => ['São Paulo', 'Rio de Janeiro', 'Belo Horizonte', 'Porto Alegre'][rand(0, 3)],
                'estado' => ['SP', 'RJ', 'MG', 'RS'][rand(0, 3)],
                'tipo_contratacao' => ['CLT', 'PJ'][rand(0, 1)],
                'modalidade' => ['Presencial', 'Híbrido', 'Remoto'][rand(0, 2)],
                'descricao' => 'Vaga para desenvolvedor com experiência em tecnologias modernas.',
                'salario_min' => rand(3000, 6000),
                'salario_max' => rand(5000, 10000),
                'data_publicacao' => date('Y-m-d H:i:s', strtotime('-' . rand(1, 30) . ' days')),
                'requisitos' => "Experiência com desenvolvimento\nConhecimento em boas práticas\nTrabalho em equipe",
                'beneficios' => "Vale alimentação\nPlano de saúde\nHome office",
                'nivel_experiencia' => ['Júnior', 'Pleno', 'Sênior'][rand(0, 2)],
                'setor' => 'Tecnologia',
                'quantidade_vagas' => rand(1, 3),
                'prazo_inscricao' => date('Y-m-d H:i:s', strtotime('+' . rand(10, 30) . ' days')),
                'ativo' => 1
            ];
        }

        foreach ($vagas as $vaga) {
            $vagaModel->insert($vaga);
        }

        echo "20 vagas de emprego criadas com sucesso!\n";
    }
}