<?php 
include 'config.php'; 
include 'style.css'; 
?>
<nav class="navbar">
    <h2>ElecWholesale B2B</h2>
    <div><a href="register.php" style="color:white;">रजिस्टर (GST)</a> | <a href="admin_orders.php" style="color:white;">एडमिन</a></div>
</nav>

<div class="container">
    <?php
    $products = mysqli_query($conn, "SELECT * FROM products");
    while($p = mysqli_fetch_assoc($products)):
        trackView($p['id']); // व्यू ट्रैक करें
    ?>
    <div class="card">
        <h3><?php echo $p['name']; ?></h3>
        <p>कीमत: ₹<?php echo $p['price']; ?></p>
        
        <?php if(isFeatureOn('bulk_calculator')): ?>
            <div style="background:#fff3cd; padding:10px; font-size:12px;">
                50+ पीस पर 10% की अतिरिक्त छूट!
            </div>
        <?php endif; ?>
        
        <button class="btn" style="margin-top:10px;">अभी इन्क्वायरी करें</button>
    </div>
    <?php endwhile; ?>
</div>
