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
        <h3>about us</h3>
        <p> <a href="home.php">home</a> / about </p>
    </div>

    <section class="about">

        <div class="flex">

            <div class="image">
                <img src="images/fossil_watch.jpg" alt="" width="450" height="450" style="opacity: 0.9;">

            </div>

            <div class="content">
                <h3>why choose us?</h3>
                <p>With years of experience, we deliver top-quality services tailored to meet your needs. Our
                    competitive pricing ensures great value, while our dedicated customer support is always ready to
                    assist. We embrace innovation and continually improve our offerings to provide the best solutions.
                    Choose us for expertise, excellence, and exceptional service.</p>
                <a href="contact.php" class="btn">contact us</a>
            </div>

        </div>

    </section>

    <section class="reviews">

        <h1 class="title">client's reviews</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/pic1.jpg" alt="">
                <p>I am very impressed with the quality of service at this store. The staff are friendly, enthusiastic,
                    and always ready to help. The products are diverse and of high quality. I will definitely shop here
                    again!</p>
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
                <p>The store has a wide selection of products at reasonable prices. I especially like the layout of the
                    store, which is neat and easy to navigate. Excellent customer service, nothing to complain about!
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
                <p>I have shopped here many times and am always very satisfied. The products are always of high quality
                    and come with a full warranty. The sales staff are very professional and friendly. Highly
                    recommended to friends!</p>
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
                <p>I appreciate the professionalism and dedication of this store. From the moment I walked in until I
                    left, I received enthusiastic support from the staff. Quality products at affordable prices. Will
                    continue to support this store!</p>
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
                <p>The store offers a comfortable and pleasant shopping experience. The staff are always welcoming and
                    ready to answer all my questions. The products are rich and diverse, I always find what I need. Very
                    satisfied!</p>
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
                <p>I had a fantastic experience at this store. The staff were knowledgeable and courteous, and the
                    product selection was impressive. I will definitely be returning and recommending this store to
                    others!</p>
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

        <h1 class="title">authors</h1>

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