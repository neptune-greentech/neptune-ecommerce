<nav class="nav">

    <div class="nav_icon">
        <span></span>
        <span></span>
    </div>

    <div>
        <?php wp_nav_menu( array(
        'menu' => 'menu principal',
        'container' => 'div',
        'container_class' => 'nav_menu',  
        'link_before' => '<span></span>',
        'link_after'  =>'' 
        ) ); ?>
    </div>

</nav>
