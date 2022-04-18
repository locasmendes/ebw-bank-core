<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::firstOrCreate([
            'slug' => 'home'
        ], [
            'title' => 'Home',
            'content' => json_decode('[{"faixa_title": "Mais do que um banco digital,\no parceiro no desenvolvimento de empresas.\nSomos diferentes!","faixa_subtitle": "Nascemos com o propósito de promover o progresso dos brasileiros.\nCrescemos porque acreditamos que empreender faz a diferença.\nE fazer a diferença está em nosso DNA.","imprensa_subtitle": "O que estão falando sobre nós."}]')
        ]);

        Page::firstOrCreate([
            'slug' => 'a-ebw'
        ], [
            'title' => 'A EBW',
            'content' => json_decode('[
                {
                    "text": "<p>O mundo está diferente. Os laços de amizade se tornaram mais forte e compassivos. A população mundial provou mais uma vez em meio às crises, o quanto somos abundantes no ato de servir, ajudar e contribuir. Provamos que a nossa maior riqueza está em amar o próximo independente de suas diferenças.</p><p>Na verdade, percebemos que as nossas diferenças trouxeram união, compaixão e muita força para superar as dificuldades e as barreiras que todos nós temos enfrentado nesses últimos tempos. Nossa geração está diferente, porque decidimos fazer a diferença na vida do nosso próximo. E mesmo estando distante de muitos, estamos mais unidos do que nunca. Respeitar as diferenças nos torna pessoas melhores, é isso que nos move, é isso que move o mundo.</p>",
                    "founders": [
                        {
                            "founder_name": "Magno Sipaúba",
                            "founder_image": "images/magno.png",
                            "founder_linkedin": "https://www.linkedin.com/in/magnosipauba/",
                            "founder_curriculum": [
                                {
                                    "curriculum_item": "Fundador de EBW Bank;"
                                },
                                {
                                    "curriculum_item": "Consultor Conselheiro da Harvard Business Review;"
                                },
                                {
                                    "curriculum_item": "Mais de 20 anos de experiência em gestão e consultoria empresarial;"
                                },
                                {
                                    "curriculum_item": "Escritor do 2º livro mais vendido da Amazon.com em 2016, o best seller \"Como Vender na Crise e Aumentar Seus Lucros\";"
                                },
                                {
                                    "curriculum_item": "Doutor Honoris Causa pela Emill Brunner University, Florida, USA;"
                                },
                                {
                                    "curriculum_item": "MBA em Comportamento Organizacional pela Sicoaching Delaware, USA."
                                }
                            ],
                            "founder_occupation": "CEO & Fundador da EBW Bank"
                        },
                        {
                            "founder_name": "Eduardo Furtado",
                            "founder_image": "images/eduardo.png",
                            "founder_linkedin": "https://www.linkedin.com/in/eduardo-furtado-b89279b3/",
                            "founder_curriculum": [
                                {
                                    "curriculum_item": "Vice-Presidente de Operações e Diretor Executivo da EBW Bank;"
                                },
                                {
                                    "curriculum_item": "Diretor of the Harvard Business Review Advisory Council/USA;"
                                },
                                {
                                    "curriculum_item": "Analista Comportamental, com especialização em Comportamento Humano e Comportamento Organizacional;"
                                },
                                {
                                    "curriculum_item": "Coach Executivo e Life Coach, formado pelo ICI - Integrated Coaching Institute; certificado pelo ICF Internacional Coach Federation - Lexington, Kentucky, USA;"
                                },
                                {
                                    "curriculum_item": "Diretor executivo nas áreas comerciais, de planejamento estratégico, administrativa e finaceira por 23 anos;"
                                },
                                {
                                    "curriculum_item": "Expermentor na Área de Gestão e Inovação;"
                                },
                                {
                                    "curriculum_item": "Pós-graduado em Administração e Marketing pelo IPAM (Portugal)."
                                }
                            ],
                            "founder_occupation": "Vice-Presidente de Operações da EBW Bank"
                        }
                    ],
                    "mvv_title": "Muito além do seu banco digital<br>\n**O banco parceiro do seu negócio**",
                    "mvv_values": "Ter preferência do cliente empreendedor, baseada em uma conduta firmemente focada na éticae transparência. Nosso gerenciamento deve ser em equipe.",
                    "mvv_vision": "Ser uma empresa referência e reconhecida pela excelência dos serviços prestados aos empreendedores, posicionando-se sempre entre as principais fintechs mundiais.",
                    "mvv_mission": "Contribuir para o desenvolvimento dos empreendedores e líderes de qualquer lugar do país e do mundo, oferendo soluções de ponta, com qualificação, orientação e foco no crescimento da economia.",
                    "mvv_porpuse": "**Apoiar o empreendedor**, estimular o<br>\nempreendedorismo e **promover o progresso da nação.**",
                    "banner_texts": [
                        {
                            "text": "Diferente na forma de **olhar, perceber e pensar.**"
                        },
                        {
                            "text": "Diferente na forma de **se relacionar.**"
                        },
                        {
                            "text": "Diferente na forma de **ser e fazer.**"
                        },
                        {
                            "text": "Diferente na forma de **exister.**"
                        },
                        {
                            "text": "**EBW Bank é assim, diferente**"
                        }
                    ]
                }
            ]')
        ]);

        Page::firstOrCreate([
            'slug' => 'seja-um-investidor'
        ], [
            'title' => 'Seja um Invesidor',
            'content' => json_decode('[
                {
                    "who_invest": [
                        {
                            "investor_name": "Francisco Pereira",
                            "investor_image": "images/historia-card.jpg",
                            "investor_comment": "Por ser um projeto arrojado, sempre gostei de novos e grandes desafios, acreditei e confiei desde o início nesse propósito que com o passar dos dias foi acontecendo com muita seriedade e transparência. Vejo o progresso do banco por acompanhar de perto suas iniciativas e a forma como estão sendo desenvolvidas através do grande know how e  competência dos líderes envolvidos nesta visão.",
                            "investor_occupation": "Investidor"
                        }
                    ]
                }
            ]')
        ]);
    }
}
