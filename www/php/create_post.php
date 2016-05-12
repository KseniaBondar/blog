<?php
session_start();
if (empty($_SESSION['k_id'])) {
    header("Location: /");
    exit();
}
?>
<?php include('/header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <form action="add_post.php" method="post">
                <div class="form-group">
                    <label>Заголовок</label>
                    <input type="text" class="form-control" name="title" placeholder="Введите заголовок">
                </div>
                <div class="form-group">
                    <label>Содержание</label>
                    <textarea name="content" class="form-control" cols="30" rows="10"
                              placeholder="Введите содержание"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Опубликовать</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>