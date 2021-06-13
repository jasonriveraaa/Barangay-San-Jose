<?php
if (isset($_GET['n_id'])) {
    $news_id = $_GET['n_id'];
    $sql = "SELECT * FROM news_card WHERE card_id='$news_id'";
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

        $news_id = $row['card_id'];
        $news_title = $row['card_title'];
        $news_desc = $row['card_desc'];
        $news_content = $row['card_content'];
        $news_img = $row['card_img'];
        $news_author = $row['card_author'];
        $news_date = $row['card_date'];
        $news_tag = $row['card_tag'];
    }
}

//edit news

if (isset($_POST['btn_edit_news'])) {

    $edit_news_title = $_POST['news_title'];
    $edit_news_desc = $_POST['news_description'];
    $edit_news_content = $_POST['news_content'];

    $edit_news_img = $_FILES['news_image']['name'];
    $edit_news_temp = $_FILES['news_image']['tmp_name'];

    $edit_news_author = $_POST['news_author'];
    $edit_news_tag = $_POST['news_tag'];

    if (empty($edit_news_img)) {
        $query = "SELECT * FROM news_card WHERE card_id='$news_id'";
        $result = mysqli_query($con, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $edit_news_img = $row['card_img'];
        }
    }

    $sql = "UPDATE news_card SET card_title='$edit_news_title',
                                     card_desc='$edit_news_desc',
                                     card_content='$edit_news_content',
                                     card_img='$edit_news_img',
                                     card_author='$edit_news_author',
                                     card_date=now(),
                                     card_tag='$edit_news_tag'
                                     WHERE card_id='$news_id'";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header("location: admin_news.php");
        move_uploaded_file($news_temp, "../img/news/$news_img");
    }
}

?>

<h1 class="page-header">
    News
    <small>Edit</small>
</h1>
<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Title</label>
        <input class="form-control" type="text" name="news_title" value="<?php echo $news_title ?>">
    </div>

    <div class="form-group">
        <label for="">Description</label>
        <input class="form-control" type="text" name="news_description" value="<?php echo $news_desc ?>">
    </div>

    <div class="form-group">
        <label for="">Content</label>
        <textarea id="editor" class="form-control" name="news_content" cols="30" rows="15"><?php echo $news_content ?></textarea>
    </div>

    <div class="form-group">
        <label for="">Image</label>
        <img width="90" height="90" src="../img/news/<?php echo $news_img; ?>">
        <input class="form-control" type="file" name="news_image">
    </div>

    <div class="form-group">
        <label for="">Author</label>
        <input class="form-control" type="text" name="news_author" value="<?php if (isset($_SESSION['userfname']) && ($_SESSION['userlname'])) {
                                                                                echo $_SESSION['userfname'];
                                                                                echo ' ';
                                                                                echo $_SESSION['userlname'];
                                                                            } ?>">
    </div>

    <div class="form-group">
        <label for="">Date</label>
        <input class="form-control" type="date" name="news_date" value="<?php echo $news_date ?>">
    </div>

    <div class="form-group">
        <label for="">Tag</label>
        <input class="form-control" type="text" name="news_tag" value="<?php echo $news_tag ?>">
    </div>

    <div class="form-group">
        <button class="btn btn-success" type="submit" name="btn_edit_news">Edit Post</button>
    </div>
</form>