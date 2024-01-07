<footer class="bg-[#161D25] ">
    <div class="h-[16px] bg-gradient-to-r from-[#DFFA60] to-[#16A1EC] px-5 xl:px-0"></div>
    <div class=" container mx-auto py-10 lg:py-20 grid grid-cols-2 gap-14 lg:gap-0 lg:grid-cols-4 justify-between px-5 xl:px-0">
        <div class="col-span-2 max-w-md">
            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/logo.webp")?>" alt="no probs">
            <p class="mt-5 tracking-wide leading-6 text-white">Got a problem at home or at work, need an emergency plumber in Perth? Give us a call, we'll fix it no probs.</p>
            <div class="mt-6 lg:mt-20 flex gap-7">
                <a href="https://www.facebook.com" class="mt-1">
                    <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icons/facebook-icon.svg")?>" class="p-3 rounded-full border border-white/25 hover:bg-white/10">

                </a>
                <div class="flex gap-1 items-center">
                    <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icons/google-icon.svg")?>" alt="google rating">
                    <div>
                        <div class="flex gap-1 items-center -mb-1">
                            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icons/five-stars-icon.svg")?>" alt="five star">
                            <p class="font-medium text-xl text-white ">4.9<span class="text-white/65 font-normal text-sm">/5.0</span></p>
                        </div>
                        <p class="text-white/65 -mt-1">Google Rating</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h3 class="font-bold text-lg text-white mb-7">Services</h3>
            <nav>
                <ul class="flex flex-col gap-7">
					<?php
					wp_nav_menu(
						array('theme_location' => 'footer', 'container'      => false,
						      'items_wrap'     => '%3$s')
					)
					?>
                </ul>
            </nav>
        </div>
        <div>
            <h3 class="font-bold text-lg text-white mb-7">Contact</h3>
            <div class="space-y-5 text-white">
                <p class="font-medium hover:text-white/80"><a href="tel:0893155545">(08) 9315 5545</p>
                <p><a href="mailto:info@noprobs.com.au" class="text-blue-400 hover:text-blue-300 underline underline-offset-2">info@noprobs.com.au</a></p>
                <p>3/52 Roberts St, Osborne Park WA 6017</p>
                <p>Mon - Fri: 7am - 5pm</p>
                <p class="hover:text-[#E0FB60] hover:underline"><a href="/">Privacy Policy</a></p>
            </div>
        </div>
    </div>
    <div class="container mx-auto border-t border-white/15  flex flex-col md:flex-row gap-5 md:gap-0 justify-between items-center py-5 md:py-10 px-5 xl:px-0">
        <p class="text-white/25">© No Probs Plumbing and Electrical | Plumbing License: PL9107 | Gas License: GF18521 | Electrical License: EC13127</p>
        <button id="back-to-top" class="p-4 border border-white/15 rounded-full">
            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icons/arrow-up-icon.svg")?>" alt="back to top">
        </button>
    </div>
</footer>

<script>
    const menuHasChildElements = document.querySelectorAll(".menu-item-has-children")
    menuHasChildElements.forEach((menuHasChild => {
        const newImg = document.createElement('img')
        newImg.setAttribute('src', "<?php echo esc_url(get_template_directory_uri() . "/assets/images/icons/caret-down-icon.svg") ?>")
        newImg.classList.add('cursor-pointer')
        menuHasChild.append(newImg)
    }))

    document.getElementById('back-to-top').addEventListener('click', () => {
        window.scrollTo({top: 0, behavior: 'smooth'});
    })

    function closeMobileNav(){
        document.getElementById('mobile-header').classList.add('hidden')
    }
    function openMobileNav(){
        document.getElementById('mobile-header').classList.remove('hidden')
    }
</script>
<?php wp_footer();?>
</body>
</html>