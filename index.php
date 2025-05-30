<?php

include 'header.php';
include 'Home.php';

$title = "Home";
?>

<div class="container">
    <?php foreach ($carList as $car): ?>
        <div class="car-panel">
            <img src="<?php echo $car->getImageFile(); ?>" alt="<?php echo $car->getBrand(); ?>">
            <h2><?php echo $car->getBrand(); ?></h2>
            <div class="details">
                <ul>
                    <?php foreach ($car->getDetails() as $detail): ?>
                        <li><?php echo $detail; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php include 'footer.php'; ?>

