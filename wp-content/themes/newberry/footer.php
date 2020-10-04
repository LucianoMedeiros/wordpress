<?php 
    global $js_path; 
?>
        <footer>
            <section class="container-full">
                <div class="container">
                    <?php wp_nav_menu( array( 'theme_location' => 'social' ) );  ?>
                    <p>Copyright &copy; <?= date('Y');?></p>
                </div>
            </section>
        </footer>
    </div>
    <script src="<?= $js_path; ?>/icons.js"></script>
</body>
</html>