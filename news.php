
<?php
include "databaseconnect.php";
foreach ($results as $news){
    ;?>
    <div class="news-1 block-news">
        <a href="#" class="article"></a>
        <div class="news-container-img">
            <a href="#" style= "background-color: <?php echo $news["Hex"] ;?>" class="news-button-1"><?php echo $news["Category"] ;?></a>
            <a href="#" class="news-img-link">
                <img src=<?php echo $news["Image"] ;?> class="news-img" alt="East Anglian Air Ambulance">
            </a>
        </div>
        <div class="news-text-1">
            <a href="#" style= "color: <?php echo $news["Hex"] ;?>"><?php echo $news["Title"] ;?></a>
            <span class="read-time"> - 4 Minute Read</span>
            <p><?php echo $news["Text"] ;?></p>
            <span style= "background-color: <?php echo $news["Hex"] ;?>" class="read-more read-more-tele-services">Read More</span>
            <div class="poster">
                <div class="poster-avatar">
                    <img src=<?php echo $news["AuthorPic"] ;?> class="logo-circle" alt="Netmatters logo">
                </div>
                <div class="poster-info">
                    <strong><?php echo $news["Author"] ;?></strong>
                    <br>
                    <?php echo $news["Date"] ;?>
                </div>
            </div>
        </div>
    </div>
    <?php
}
;?>
