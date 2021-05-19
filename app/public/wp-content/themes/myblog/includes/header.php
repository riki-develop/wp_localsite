<!-- // プラグイン差し込み用テンプレートタグ -->
<?php wp_body_open(); ?>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
        </button>
        <!-- グローバルナビ宣言 -->
        <?php
        // メニューIDを取得する
        $menu_name = 'global_nav';
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        // 取得したオブジェクトから値を取り出す
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        // var_dump($menu_items);
        ?>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <?php foreach($menu_items as $item): ?>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
        </div>
    </div>
</nav>