  <footer class="relative bg-gray-300 pt-8 pb-6">

    <div class="container mx-auto px-4">
      <div class="flex flex-wrap">
        <div class="w-full lg:w-5/12 px-4">
          <h4 class="text-3xl font-semibold"></h4>
          <h5 class="text-lg mt-0 mb-2 text-gray-700">

          </h5>
	  <div class="mt-6">
           <?php
               $args = array(
                       'menu_class' => 'mt-6',
                       'container_id' => 'nav_social',
                       'container_class' => 'bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3',
                       'theme_location' => 'social'
                );

               wp_nav_menu($args);
          ?>
          </div>
          <div class="text-gray-600 text-sm py-1 mt-4">
            Copyright © 2021
            <a
              href="/"
              class="text-gray-600 hover:text-gray-900"
              >Company - NaMi Tech</a
            >
          </div>
        </div>
        <div class="w-full lg:w-6/12 px-4">
          <div class="flex flex-wrap items-top mb-6 mt-4">
            <div class="w-full lg:w-4/12 md:w-6/12 px-0 ml-auto">

            </div>
            <div class="w-full lg:w-4/12 md:w-6/12 mt-4 sm:mt-0 md:px-4">

            </div>
          </div>
        </div>
      </div>
      <hr class="my-6 border-gray-400" />
      <div
        class="flex flex-wrap items-center md:justify-between justify-center"
      >
        <div class="w-full px-4 mx-auto text-center">
          <div class="text-sm text-gray-600">
              Powered by
              &nbsp;
              •
              &nbsp;
              Basado en el Theme&nbsp;<a class="hover:text-indigo-600 font-semibold" href="https://github.com/abhinavs/cookie" target="_blank" rel="noreferrer">Cookie</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
      
    <?php wp_footer(); ?>
  </body>
</html>
