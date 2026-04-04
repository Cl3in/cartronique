<?php
$menu_items = [
    'Home' => BASE_URL,
    'About' => BASE_URL.'about',
    'Services' => [
        'Flatbed' => BASE_URL.'services/flatbed',
        'Stepdeck' => BASE_URL.'services/stepdeck',
        'Reefer' => BASE_URL.'services/reefer'
    ],
    'Tracking' => BASE_URL.'tracking',
    'Safety & Compliance' => BASE_URL.'safety',
    'Careers' => BASE_URL.'careers',
    
    'Contact' => BASE_URL.'contact'
];
?>
<?php
$current = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
?>
<nav class="main-menu">
    <div class="hamburger">&#9776;</div>
    <ul class="menu-list">
        <?php foreach($menu_items as $label => $link): ?>
            
            <?php if(is_array($link)): ?>
                <li class="has-submenu">
                    <span><?= $label ?></span>
                    <ul class="submenu">
                        <?php foreach($link as $sub_label => $sub_link): 
                            $sub_path = trim(parse_url($sub_link, PHP_URL_PATH), '/');
                        ?>
                            <li>
                                <a href="<?= $sub_link ?>" 
                                   class="<?= ($current == $sub_path) ? 'active text-blue-500' : '' ?>">
                                   <?= $sub_label ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

            <?php else: 
                $path = trim(parse_url($link, PHP_URL_PATH), '/');
            ?>
                <li>
                    <a href="<?= $link ?>" 
                       class="<?= ($current == $path) ? 'active text-blue-500' : '' ?>">
                       <?= $label ?>
                    </a>
                </li>
            <?php endif; ?>

        <?php endforeach; ?>
    </ul>
</nav>