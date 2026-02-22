<?php 
include 'config.php'; 
include 'style.css'; 

// एड-ऑन टॉगल लॉजिक
if(isset($_GET['toggle'])){
    $id = $_GET['toggle'];
    mysqli_query($conn, "UPDATE addons SET status = IF(status='on','off','on') WHERE id=$id");
}
?>
<div class="container">
    <div class="card">
        <h3>📈 एनालिसिस (Top Viewed)</h3>
        <?php
        $top = mysqli_query($conn, "SELECT name, view_count FROM products ORDER BY view_count DESC LIMIT 5");
        while($r = mysqli_fetch_assoc($top)) echo "<p>{$r['name']} ({$r['view_count']} व्यूज)</p>";
        ?>
    </div>

    <div class="card">
        <h3>⚙️ एड-ऑन मैनेजर</h3>
        <?php
        $adds = mysqli_query($conn, "SELECT * FROM addons");
        while($a = mysqli_fetch_assoc($adds)): ?>
            <p><?php echo $a['feature_name']; ?>: 
            <a href="admin.php?toggle=<?php echo $a['id']; ?>"><?php echo $a['status']; ?></a></p>
        <?php endwhile; ?>
    </div>
</div>
