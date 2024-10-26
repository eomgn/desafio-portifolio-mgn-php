<?php
$projetos = [
    [
        'titulo' => 'Travelgram',
        'descricao' => 'Rede social onde as pessoas mostram os registros de suas viagens pelo mundo',
        'src' => '/assets/Travelgram.svg',
        'alt' => 'screenshot do projeto Travelgram',
        'stacks' => ['PHP', 'CSS', 'HTML', 'Javascript']
    ],
    [
        'titulo' => 'Página de receita',
        'descricao' => 'Página com o passo a passo de uma receita para cupcakes',
        'src' => '/assets/Página de receita.svg',
        'alt' => 'screenshot do projeto Página de receita',
        'stacks' => ['PHP', 'CSS', 'HTML', 'Javascript']
    ],
    [
        'titulo' => 'Tech News',
        'descricao' => 'Homepage de um portal de notícias sobre a área de tecnologia',
        'src' => '/assets/Tech News.svg',
        'alt' => 'screenshot do projeto Tech News',
        'stacks' => ['PHP', 'CSS', 'HTML', 'Javascript']
    ],
    [
        'titulo' => 'Refund',
        'descricao' => 'Um sistema para pedido e acompanhamento de reembolso ',
        'src' => '/assets/Refund.svg',
        'alt' => 'screenshot do projeto Refund',
        'stacks' => ['PHP', 'CSS', 'HTML', 'Javascript']
    ],
    [
        'titulo' => 'Página de turismo',
        'descricao' => 'Página com as principais informações para quem quer viajar para Busan',
        'src' => '/assets/Página de turismo.svg',
        'alt' => 'screenshot do projeto Página de turismo',
        'stacks' => ['PHP', 'CSS', 'HTML', 'Javascript']
    ],
    [
        'titulo' => 'Zingen',
        'descricao' => 'Landing Page completa e responsiva de um aplicativo de Karaokê',
        'src' => '/assets/Zingen.svg',
        'alt' => 'screenshot do projeto Zingen',
        'stacks' => ['PHP', 'CSS', 'HTML', 'Javascript']
    ]
];

$colors = ["lime", "fuchsia", "sky", "red", "amber"]

?>

<?php foreach ($projetos as $projeto): ?>
    <div class="flex p-4 w-full rounded-xl bg-zinc-700 gap-x-4">
        <!-- foto do projeto -->
        <div class="w-full">
            <img src="<?= $projeto['src'] ?>" alt="<?= $projeto['alt'] ?>" class="min-w-2/4 h-full object-cover rounded-lg">
        </div>

        <!-- o projeto -->
        <div>
            <h3 class="text-2xl font-bold py-2"><?= $projeto['titulo'] ?></h3>
            <p class="leading-6 text-zinc-400">
                <?= $projeto['descricao'] ?>
            </p>
            <div class="flex space-x-2 mt-6 text-sm text-zinc-900 font-bold font-mono">
                <?php foreach ($projeto['stacks'] as $color => $stack): ?>
                    <span class="bg-<?= $colors[$color] ?>-400 px-3 py-1 rounded-full text-center">
                        <?= $stack ?>
                    </span>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>