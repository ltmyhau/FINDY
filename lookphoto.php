<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./img/logoicon.jpg" sizes="6x6">
    <link rel="stylesheet" href="./lookphoto.css">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="lookphoto">
            <div class="grid wide">
                <div class="lookphoto_container row">
                    <div class="lookphoto_left col c-9 m-9 l-9">
                        <div class="row">
                            <div class="lookphoto_left-header col c-12 m-12 l-12">
                                Top results
                            </div>
                            <div class="content col c-12 m-12 l-12">
                                <?php
                                    include "connect.php";
                                ?>
                                <?php
                                    $connect = new connect;        
                                    $select_profilephoto = $connect ->select_profilephoto();
                                ?>
                                <?php
                                    if($select_profilephoto){
                                        while($result = $select_profilephoto->fetch_assoc()){
                                            $imguserphoto_up = "/FINDYDEMO/assets/php/img/". $result['anhTho'];
                                ?>
                                <div class="lookphoto_left-content">
                                    <div class="row">
                                        <div class="lookphoto_left-content-left  c-2 m-2 l-2">
                                                <img src="<?php $imguserphoto_up ?>" alt="">
                                        </div>
                                        <div class="lookphoto_left-content-mid  c-7 m-7 l-7">
                                            <div class="lookphoto_left-content-mid-name">
                                                <?php echo $result['namephoto'] ?> <span>  </span> <?php echo $result['email'] ?>
                                            </div>
                                            <div class="lookphoto_left-content-mid-feedback">
                                                <div class="feedback-star">
                                                    <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="feedback-comment">
                                                <i class="fa-regular fa-message"></i> 447
                                                </div>
                                                <div class="feedback-country">
                                                    VIETNAM
                                                </div>
                                            </div>
                                            <div class="lookphoto_left-content-mid-best">
                                                New Jersey - Preferred Freelancer of the Quarter 
                                            </div>
                                            <div class="lookphoto_left-content-mid-decribe">
                                                Good morning/afternoon/evening from Hamilton, New Jersey! 
    
                                                We are a Database, Web, WordPress, e-Commerce, and Mobile App… 
                                            </div>
                                            <div class="lookphoto_left-content-mid-job">
                                                PHP JAva JavaScript
                                            </div>
                                        </div>
                                        <div class="lookphoto_left-content-right  c-2 m-2 l-2">
                                            <div class="lookphoto_left-content-right-price">
                                                <div class="price-nv">
                                                    300.000đ
                                                </div>
                                                <div class="price-hour">
                                                    per hour
                                                </div>
                                                <div class="prive-love">
                                                <i class="fa-regular fa-heart"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                }
                                ?> 
                            </div>
                        </div>
                    </div>
                    <div class="lookphoto_mid col c-3 m-3 l-3">

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>