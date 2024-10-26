<?php

$imagem = [
    'src' => 'https://avatars.githubusercontent.com/u/83884728?v=4',
    'alt' => 'FOTO MGN'
];

$nome = 'Matheus Gabriel';

$descricao = 'Transformo necessidades em aplicações reais, evolventes e
                funcionais. Desenvolvo sistemas através da minha paixão pela
                tecnologia, contribuindo com soluções inovadoras e eficazes para
                desafios complexos.';

$stacks = ["Github", "PHP", "CSS", "HTML", "JavaScript"];

$colors = ["lime", "fuchsia", "sky", "red", "amber"]
?>

<header class="relative mx-auto">
    <!-- bg -->
    <img
        class="mx-auto w-full"
        src="/assets/Background_Intro.svg"
        alt="imagem de fundo" />
    <!-- conteudo -->
    <div
        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mx-auto max-w-screen-lg p-8 text-center">
        <!-- hero -->
        <div
            class="rounded-full border-4 p-2 border-red-400 mb-24 h-40 w-40 mx-auto">
            <img
                src="<?= $imagem['src'] ?>"
                alt="<?= $imagem['alt'] ?>"
                class="rounded-full h-full w-full" />
        </div>
        <!-- descricao -->
        <div class="font-mono mx-auto">
            <h2 class="text-3xl font-light">
                Hello World! Meu nome é
                <span class="text-red-400"><?= $nome ?></span> e sou
            </h2>
            <h1 class="font-sans text-8xl font-bold mt-4">Desenvolvedor PHP</h1>
            <p class="mt-14 text-gray-500 text-sm md:text-base">
                <?= $descricao ?>
            </p>
        </div>
        <!-- stacks -->
        <div class="mt-24 space-x-4 font-mono text-xl text-zinc-900 font-bold">

            <?php foreach ($stacks as $color => $stack): ?>
                <span
                    class="bg-<?= $colors[$color] ?>-400 py-2 px-4 rounded-full text-center inline-block">
                    <?= $stack ?>
                </span>
            <?php endforeach; ?>
        </div>
    </div>
</header>