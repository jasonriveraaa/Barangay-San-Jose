<?php
if (isset($_POST['btn_add_news'])) {

    $news_title = $_POST['news_title'];
    $news_desc = $_POST['news_description'];
    $news_content = $_POST['news_content'];

    $news_img = $_FILES['news_image']['name'];
    $news_temp = $_FILES['news_image']['tmp_name'];

    $news_author = $_POST['news_author'];
    $news_tag = $_POST['news_tag'];

    $sql = "INSERT INTO news_card (card_title,card_desc,card_content,card_img,card_author,card_date,card_tag) VALUE ('$news_title','$news_desc','$news_content','$news_img','$_SESSION[userfname] $_SESSION[userlname]',now(),'$news_tag')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        move_uploaded_file($news_temp, "../img/news/$news_img");
        header("location: admin_news.php");
    } else {
        echo "Query Failed";
    }
}
?>

<h1 class="page-header">
    News
    <small>Create</small>
</h1>
<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Title</label>
        <input class="form-control" type="text" name="news_title">
    </div>

    <div class="form-group">
        <label for="">Description</label>
        <input class="form-control" type="text" name="news_description">
    </div>

    <div class="form-group">
        <label for="">Content</label>
        <textarea id="editor" class="form-control" name="news_content" cols="30" rows="15"></textarea>
    </div>

    <div class="form-group">
        <label for="">Image</label>
        <input class="form-control" type="file" name="news_image">
    </div>

    <div class="form-group">
        <label for="">Author</label>
        <input class="form-control" disabled type="text" name="news_author" value="<?php if (isset($_SESSION['userfname']) && ($_SESSION['userlname'])) {
                                                                                        echo $_SESSION['userfname'];
                                                                                        echo ' ';
                                                                                        echo $_SESSION['userlname'];
                                                                                    } ?>">
    </div>

    <div class="form-group">
        <label for="">Date</label>
        <input class="form-control" type="date" name="news_date">
    </div>

    <div class="form-group">
        <label for="">Tag</label>
        <input class="form-control" type="text" name="news_tag">
    </div>

    <div class="form-group">
        <button class="btn btn-success" type="submit" name="btn_add_news">Submit</button>
    </div>
</form>