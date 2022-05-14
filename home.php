<?php
// Get the 4 most recently added products
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?=template_header('PEACHES')?>

<br><br><br>
        <div class="masthead">
 
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">peaches coffee <br> shop</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Best possible way to get your coffee anytime.</h2>
                    <a class="btn btn-primary" href="#about">Get Your Coffee</a>
                </div>
            </div>
        </div>
<div class="recentlyadded content-wrapper" id="about">
    <h2>Popular Among People</h2>
    <div class="products">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="imgs/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price">
                &dollar;<?=$product['price']?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">&dollar;<?=$product['rrp']?></span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>
<?php
include"subscribe.php";
 include"footer.php";
?>
