<?php

$query = new WP_Query(array('post_type' => 'gallery', 'posts_per_page' => -1));

if ($query->have_posts()) : ?>
    <?php while ($query->have_posts()) : $query->the_post(); ?>
        <div>
            <?php
            $attachments = get_posts(array(
                'post_type' => 'attachment',
                'posts_per_page' => -1,
                'post_parent' => get_the_ID()
            ));

            if ($attachments): ?>
                <div class="image-set">
                    <?php foreach ($attachments as $attachment):
                        $full_url = wp_get_attachment_url($attachment->ID);
                        $thumb_url = wp_get_attachment_thumb_url($attachment->ID); ?>

                        <a class="example-image-link"
                            href="<?php echo esc_url($full_url); ?>"
                            data-lightbox="example-set"
                            data-title="<?php echo esc_attr(get_the_title()); ?>">
                            <img class="example-image"
                                src="<?php echo esc_url($thumb_url); ?>"
                                alt="<?php echo esc_attr(get_the_title()); ?>">
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endwhile; ?>
<?php endif;

wp_reset_postdata();
