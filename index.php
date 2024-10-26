<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Desafio prático - Portfólio Dev do MGN</title>

  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-zinc-900 text-gray-200">
  <!-- header -->
  <?php
  include("./components/header.php");
  ?>

  <!-- main -->
  <main class="mx-auto max-w-screen-lg">
    <div class="text-center my-28">
      <p class="font-light text-3xl text-red-400">Meu trabalho</p>
      <h2 class="font-bold text-3xl">Veja os projetos em destaque</h2>
    </div>

    <section class="grid grid-cols-2 gap-6">
      <?php
      include('./components/projetos.php');
      ?>
    </section>
  </main>

  <!-- footer -->
  <footer class="relative mx-auto">
    <!-- bg -->
    <img
      class="mx-auto w-full"
      src="/assets/Background_Contacts.svg"
      alt="imagem de fundo" />
    <!-- conteudo -->
    <div
      class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mx-auto max-w-screen-lg p-8 text-center">
      <div class="text-center my-28">
        <p class="font-light text-3xl text-purple-400">Contato</p>
        <h2 class="font-bold text-3xl py-4">Gostou do meu trabalho?</h2>
        <p class="font-light text-2xl text-zinc-400">Entre em contato ou acompanhe as minhas redes sociais!</p>
      </div>

      <div class="text-zinc-300">
        <?php
        include('./components/footer.php');
        ?>
      </div>
    </div>
  </footer>
</body>

</html>