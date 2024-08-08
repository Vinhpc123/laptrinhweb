<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../project/css/style.css">

    <style>
    .heading {
        min-height: 30vh;
        display: flex;
        flex-flow: column;
        align-items: center;
        justify-content: center;
        gap: 1rem;
        background: linear-gradient(rgb(0 0 0 / 70%), rgba(0, 0, 0, .4)), url(../project/images/backgr2.png) no-repeat;
        background-size: cover;
        background-position: center;
        text-align: center;
    }


    .heading h3 {
        font-size: 5rem;
        color: var(--white);
        text-transform: uppercase;
    }

    .heading p {
        font-size: 2.5rem;
        color: var(--light-color);
    }

    .heading p a {
        color: var(--white);
    }

    .heading p a:hover {
        text-decoration: underline;
    }
    </style>

</head>

<body>

    <?php include 'header.php'; ?>

    <div class="heading">

    </div>

    <section class="about">

        <div class="flex">

            <div class="image">
                <img src="images/fossil_watch.jpg" alt="" width="450" height="450" style="opacity: 0.9;">

            </div>

            <div class="content">
                <h3>Tại sao lại chọn chúng tôi?</h3>
                <p>Với kinh nghiệm nhiều năm, chúng tôi cung cấp dịch vụ chất lượng cao, thiết kế riêng theo nhu cầu của
                    bạn. Giá cả cạnh tranh đảm bảo giá trị tuyệt vời, cùng với đội ngũ hỗ trợ khách hàng tận tâm luôn
                    sẵn sàng. Chúng tôi không ngừng đổi mới và cải thiện để mang đến giải pháp tốt nhất. Hãy chọn chúng
                    tôi vì chuyên môn, chất lượng và dịch vụ đặc biệt.</p>
                <a href="contact.php" class="btn">Liên hệ</a>
            </div>

        </div>

    </section>

    <section class="reviews">

        <h1 class="title">Đánh giá của khách hàng</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/pic1.jpg" alt="">
                <p>Tôi rất hài lòng với chiếc đồng hồ mua tại đây. Thiết kế đẹp, chất lượng tốt và dịch vụ khách hàng
                    rất chuyên nghiệp.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Nguyen Huu Khanh</h3>
            </div>

            <div class="box">
                <img src="images/pic2.jpg" alt="">
                <p>Đồng hồ của WatchStore không chỉ bền mà còn rất phong cách. Tôi nhận được nhiều lời khen từ bạn bè và
                    đồng nghiệp.
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Vo Van Sau</h3>
            </div>

            <div class="box">
                <img src="images/pic3.jpg" alt="">
                <p>Mua sắm tại WatchStore là một trải nghiệm tuyệt vời. Nhân viên nhiệt tình, tư vấn chu đáo và giao
                    hàng nhanh chóng.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Thanh Dat</h3>
            </div>

            <div class="box">
                <img src="images/pic4.jpg" alt="">
                <p>Tôi đã mua đồng hồ cho cả gia đình và mọi người đều rất ưng ý. Giá cả hợp lý, chất lượng đảm bảo. Rất
                    đáng để quay lại.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Vo Ta Duy</h3>
            </div>

            <div class="box">
                <img src="images/pic5.jpg" alt="">
                <p>Dịch vụ sau bán hàng của WatchStore thật sự xuất sắc. Họ luôn sẵn sàng hỗ trợ và giải đáp mọi thắc
                    mắc của tôi.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Pham Gia Khoi</h3>
            </div>

            <div class="box">
                <img src="images/pic6.jpg" alt="">
                <p>Tôi rất thích sự đa dạng trong bộ sưu tập đồng hồ tại WatchStore. Có nhiều lựa chọn phong cách khác
                    nhau, phù hợp với mọi dịp.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Phan Van Hoang</h3>
            </div>

        </div>

    </section>

    <section class="authors">

        <h1 class="title">TÁC GIẢ</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/avt1.png" alt="" style="width:300px;height:400px;">
                <div class="share">
                    <a href="https://www.facebook.com/vinh7085" target="_blank" class="fab fa-facebook-f"></a>
                    <a href="https://www.tiktok.com/@chillwithmee20t" target="_blank" class="fab fa-tiktok"></a>
                    <a href="https://www.instagram.com/vinh11424/" target="_blank" class="fab fa-instagram"></a>
                    <a href="https://www.youtube.com/channel/UChxOtTyLBBgDgPKGa-Qxzxw" target="_blank"
                        class="fab fa-youtube"></a>
                </div>
                <h3>Tran Thanh Vinh</h3>
            </div>

            <div class="box">
                <img src="images/avt2.jpg" alt="" style="width:300px;height:400px;">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-tiktok"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-youtube"></a>
                </div>
                <h3>Nguyen An Quoc Dat</h3>
            </div>



        </div>

    </section>







    <?php include 'footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>