

<?php 
    if(have_posts()) : while (have_posts()) : the_post();
?>

<h1 class="main__title"><?php the_title() ?></h1>
                
<p class="main__text main__text--bolder">
<?php the_content() ?>
</p>
            

<?php endwhile; else: ?>

    <h1 class="main__title">Ubezpieczenia majątkowe</h1>
        <h2 class="main__subtitle">Co obejmują?</h2>
        <p class="main__text main__text--bolder">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
            diam nonumy eirmod tempor invidunt ut labore et dolore magna
            aliquyam erat, sed diam voluptua. At vero eos et accusam et
            justo duo dolores et ea rebum.
        </p>
        <p class="main__text">
            Stet clita kasd gubergren, no sea takimata sanctus est Lorem
            ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
            sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At
            vero eos et accusam et justo duo dolores et ea rebum. Stet
            clita kasd gubergren, no sea takimata sanctus est Lorem
            ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur
            sadipscing elitr.
        </p>
        <button class="main__button button">Zamów ubezpieczenie</button>
<?php endif; ?>