<?php
$redes = [
    [
        'src' => 'assets/linkedin.svg',
        'alt' => 'linkedin',
        'titulo' => 'Linkedin',
        'link' => ''
    ],
    [
        'src' => 'assets/github.svg',
        'alt' => 'github',
        'titulo' => 'Github',
        'link' => ''
    ],
    [
        'src' => 'assets/instagram.svg',
        'alt' => 'instagram',
        'titulo' => 'Instagram',
        'link' => ''
    ],
]
?>

<?php foreach ($redes as $rede): ?>
    <div class="flex justify-between mx-4 bg-neutral-700 p-6 rounded-lg m-4">
        <div class="flex">
            <img src="<?= $rede['src'] ?>" alt="<?= $rede['alt'] ?>">
            <span class="ml-2">
                <?= $rede['titulo'] ?>
            </span>
        </div>
        <a href="<?= $rede['link'] ?>" target="_blank">
            <img src="assets/link.svg" alt="link">
        </a>
    </div>
<?php endforeach; ?>