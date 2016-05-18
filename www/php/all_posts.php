<?php include("bd.php"); ?>

<div class="container">
    <div class="row">
        <?php
        $bd_query_to_posts = mysql_query("SELECT * FROM posts", $db);
        while ($row = mysql_fetch_assoc($bd_query_to_posts)) {
            ?>
            <div class="col-xs-12">
                <?php  $id = $row["id"];?>
                <a href="<?php echo '/php/one_post.php?id=' . $id;?>" ><h1><?php echo $row["title"]; ?></h1></a>

                <p><?php echo $row["content"]; ?></p>
            </div>
        <?php } ?>
    </div>
</div>
