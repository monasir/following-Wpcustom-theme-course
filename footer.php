    <footer>
        <div class="container">
            <div class="row">
                <div class="copyright col-sm-7 col-4">
                    <p>Copyright</p>
                </div>
              
                    <?php wp_nav_menu(array(
                        'theme_location'=> 'my_footer_menu',
                        'container' => 'nav',
                        'container_class' => 'footer-menu col-md-5 col-8 text-right',

                    ));?>
                
            </div>
        </div>
    </footer>
    <?php wp_footer();?>
</body>
</html>