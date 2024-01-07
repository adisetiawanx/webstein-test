<?php get_header();?>
<?php get_template_part('includes/basic-header' );?>
	<main class="container mx-auto py-7 border-y my-16 rounded-md px-3 xl:px-0">
		<?php if(have_posts()):?>
		<?php the_post();?>
        <div id="post_title">
            <h1 class="font-bold text-4xl">
	            <?php the_title()?>
            </h1>
        </div>
        <div id="post" class="mt-5 space-y-2.5 text-justify w-full mx-auto tracking-wide ">
            <div id="post_description" class="flex gap-2 items-center border-b pb-7">
                <span class="rounded-full"><?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?></span>
                <p class="italic text-gray-500 text-sm">Posted by: <a href="/author/<?= get_the_author_meta('display_name');?>" class="font-medium"><?= get_the_author_meta('display_name');?></a> on <?= get_the_date();?></p>
            </div>
            <div id="post_body" class="pt-3 px-1.5">
	            <?php the_content();?>
            </div>
        </div>
		<?php endif?>
	</main>
<?php get_footer();?>