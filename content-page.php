<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Noord-en
 */
?>

<?php
  $category = get_the_category();
  $category_name = $category ? $category[0]->cat_name : '';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if ( $category_name == 'Programma' ) : ?>
  <div class="entry-image">
    <?php
      $images = rwmb_meta( 'noord_en_image', 'type=image' ); //&size=YOURSIZE
      foreach ( $images as $image )
      {
        echo "<img src='{$image['full_url']}' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' />";
      }
    ?>
  </div>
  <?php endif; ?>

  <div class="entry-text">
    <header class="entry-header">
      <?php if ( 'post' == get_post_type() ) : ?>
      <?php if ( $category_name == 'Nieuws' ) : ?>
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

      <div class="entry-meta">
        <?php noord_en_posted_on(); ?>
      </div>
      <?php elseif ( $category_name == 'Programma' ) : ?>
      <div class="entry-info">
        <div class="entry-when">
          <?php echo mysql2date( 'j F Y, H:i', rwmb_meta( 'noord_en_when' ) ); ?>
        </div>
        <div class="entry-price">
          <?php
            $price = rwmb_meta( 'noord_en_price' );
            echo $price == 0.0 ? 'Gratis!' : 'Deelname: € ' . number_format( $price, 2, ',', ' ' );
          ?>
        </div>
      </div>
      <?php endif; ?>
      <?php endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
      <?php the_content(); ?>

      <?php if ( $category_name == 'Programma' ) : ?>
      <div class="entry-pictures">
        <?php
          $rel = rand();
          $images = rwmb_meta( 'noord_en_pictures', 'type=image' ); //&size=YOURSIZE
          foreach ( $images as $image )
          {
            echo "<a href='{$image['full_url']}' rel='lightbox[{$rel}]'>";
            echo "<img src='{$image['url']}' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' />";
            echo "</a>";
          }
        ?>
      </div>
      <?php endif; ?>

      <?php
        wp_link_pages( array(
          'before' => '<div class="page-links">' . __( 'Pages:', 'noord-en' ),
          'after'  => '</div>',
        ) );
      ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
      <?php edit_post_link( __( 'Edit', 'noord-en' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-footer -->
  </div>
</article><!-- #post-## -->
