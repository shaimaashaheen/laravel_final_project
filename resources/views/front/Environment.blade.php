<?php
include "layout/header.php"
?>

<title>News Magazine - Environment</title>
<div class="wrapper col2">
    <div id="topbar">
        <div id="topnav">
            <ul>
                <li class="active"><a href="index.blade.php">Home</a></li>
                <?php
                $sql = "select * from categories where
                   featured='Yes' and active='Yes' limit 3";
                $res = mysqli_query($connection, $sql);
                while ($row = $res->fetch_assoc()) {
                $id = $row['id'];
                $title = $row['title'];
                ?>
                    <li class="active"><a href="<?php echo $title?>.php?id=<?php echo $id?>"><?php echo $title ?></a></li>
                <?php } ?>
            </ul>

        </div>

        <div id="search">
                    <form action="search.blade.php" method="post">
                        <fieldset>
                            <legend>Site Search</legend>
                            <input type="text" name="wordsearch" value="Search Our Website&hellip;"
                                   onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;"/>
                            <input type="submit" name="go" id="go" value="Search"/>
                        </fieldset>
                    </form>
        </div>
        <br class="clear"/>
    </div>
</div>

<div class="wrapper">
    <div id="hpage_cats">
        <div><h1 style="padding: 8px; font-size: 25px"> <strong style="color:#2e95e2">E</strong>nvironment </h1></div>
        <?php
        $id=$_GET['id'];
        $sql="select * from news2 where category_id='$id'";
        $res=mysqli_query($connection,$sql);
        if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()){
        $news_id=$row['id'];
        $title=$row['title'];
        $image=$row['image'];
        $description=$row['description'];
                ?>
                <div class="sub" >
                    <h2 id = "news.<?php echo $news_id ?>" style="padding:5px"><?php echo $title ?> &raquo;</h2>
                    <img style="margin: auto auto" src='<?php echo $image ?>' width='200px' alt=""/>
                    <textarea><?php echo $description ?> </textarea>
                </div>
                <?php
            } }
        else { ?>
            <?php echo "No news found";
        }
        ?>
        <br class="clear"/>
        <br class="clear"/>
    </div>
</div>
<?php include "layout/footer.php"?>
