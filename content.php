<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article>
    <header>
        <h3><?php the_category(); ?></h3>
        <time><?php the_time(); ?></time>
    </header>
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail(); ?>
<!--
    <ul>
        <li><img src="" alt=""></li>
        <li><img src="" alt=""></li>
        <li><img src="" alt=""></li>
        <li><img src="" alt=""></li>
        <li><img src="" alt=""></li>
        <li><img src="" alt=""></li>
        <li><img src="" alt=""></li>
    </ul>
-->
    <p><?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">Lire la suite</a></p>
    <footer>
        <ul class="inline-list">
            <li>facebook</li>
            <li>twitter</li>
            <li>google +</li>
        </ul>
    </footer>
</article>