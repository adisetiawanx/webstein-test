<div id="mobile-header" class="sticky h-screen w-full top-0 bottom-0 right-0 left-0 bg-white z-[9999999] hidden  p-5">
    <button onclick="closeMobileNav()" class="w-full flex justify-end"><img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icons/close-icon.svg") ?>" alt="close" class="w-[30px]"/></button>
    <nav>
        <ul class="flex flex-col justify-between gap-5 ">
			<?php
			wp_nav_menu(
				array('theme_location' => 'header', 'container'      => false,
				      'items_wrap'     => '%3$s')
			)
			?>
        </ul>
    </nav>
</div>
<header id="hero-banner" class=" bg-cover px-5 xl:px-0">
    <div id="top-header" class="container relative mx-auto flex flex-col md:flex-row  items-center justify-between py-5 bg-contain border-b border-white/25 md:border-0">
        <a href="/" >
            <h1 class="text-3xl font-bold hidden">No Probs</h1>
            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/logo.png") ?>" alt="No Probs"/>
        </a>
        <button onclick="openMobileNav()" class="md:hidden absolute top-6 right-5"><img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icons/burger-icon.svg") ?>" class="w-[30px] "/></button>
        <div class="flex justify-between items-center mt-5 md:mt-0 gap-20 md:gap-40">
            <div>
                <p class="uppercase text-white/65 text-sm">Call Us</p>
                <p class="text-white hover:text-white/80"><a href="tel:0893155545">(08) 9315 5545</a></p>
            </div>
            <div>
                <p class="uppercase text-white/65 text-sm">Email Us</p>
                <p class="text-white hover:text-white/80"><a href="mailto:info@noprobs.com.au">info@noprobs.com.au</a></p>
            </div>
        </div>
    </div>
    <div id="bottom-header" class="hidden md:block w-full border-white/25 border-b border-t py-5">
        <nav class="container mx-auto">
            <ul class="flex justify-between items-center">
				<?php
				wp_nav_menu(
					array('theme_location' => 'header', 'container'      => false,
					      'items_wrap'     => '%3$s')
				)
				?>
            </ul>
        </nav>

    </div>
</header>