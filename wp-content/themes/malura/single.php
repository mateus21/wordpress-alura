<?php
$css_escolhido = 'single';
include_once ('header.php');
?>

<main>
    <article>
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                $imoveis_meta_data = get_post_meta($post->ID);
                ?>
                <div class="single-imovel-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="container">
                    <section class="chamada-principal">
                        <?php the_title(); ?>
                    </section>
                    <section class="single-imovel-geral">
                        <div class="single-imovel-descricao">
                            <?php the_content(); ?>
                        </div>

                        <dl class="single-imovel-informacoes">
                            <dt>Preço:</dt>
                            <dd><?= $imoveis_meta_data['preco_id'][0]; ?></dd>
                            <dt>Vaga(s):</dt>
                            <dd><?= $imoveis_meta_data['vagas_id'][0]; ?></dd>
                            <dt>Banheiro(s):</dt>
                            <dd><?= $imoveis_meta_data['banheiros_id'][0]; ?></dd>
                            <dt>Quarto(s):</dt>
                            <dd><?= $imoveis_meta_data['quartos_id'][0]; ?></dd>
                        </dl>
                    </section>

                    <span class="single-imovel-data">
                        <?php the_date(); ?>
                    </span>
                </div>
                <?php
            }
        }
        ?>
    </article>
</main>


<?php get_footer() ?>