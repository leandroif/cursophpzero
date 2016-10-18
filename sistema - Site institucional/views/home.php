<div class="home_sobre">
    <img src="<?php echo BASE_URL?>/assets/images/galeria/imagem1.jpg" border="0" width="150" height="150"/>
    <h4>Sobre</h4>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>
<div class="home_portfolio">
    <h4>Meu Portfolio Recente</h4>
    <?php foreach($portfolio as $item):?>
    <div class="portfolio_item">
        <img src="/assets/images/portfolio/<?php echo $item['imagem'] ?>" border="0" width="200" height="150" />
    </div>
    <?php endforeach; ?>
    <div style="clear: both"></div>
</div>