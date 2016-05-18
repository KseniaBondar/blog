<?php include('header.php'); ?>
<?php include("bd.php"); ?>

<div class="container">
    <div class="row">
        <?php
        $bd_query_to_posts = mysql_query("SELECT * FROM posts WHERE ID='{$_GET['id']}'", $db);
        $row = mysql_fetch_assoc($bd_query_to_posts);?>
            <div class="col-xs-12">
                <h1><?php echo $row["title"]; ?></h1>
                <p><?php echo $row["content"]; ?></p>
            </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>