<?php include('header_front.php'); ?>
<link rel="stylesheet" href="<?php echo $base_url;?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $base_url;?>/css/main.css">

<style>
* {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

body {
    padding: 0;
    margin: 0;
}

#notfound {
    position: relative;
    height: 80vh;
}

#notfound .notfound {
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

.notfound {
    max-width: 410px;
    width: 100%;
    text-align: center;
}

.notfound .notfound-404 {
    height: 280px;
    position: relative;
    z-index: -1;
}

.notfound .notfound-404 h1 {
    font-family: 'Montserrat', sans-serif;
    font-size: 230px;
    margin: 0px;
    font-weight: 900;
    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    background: url('<?php echo $base_url;?>/img/bg/404.jpg') no-repeat;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-size: cover;
    background-position: center;
}


.notfound h2 {
    font-family: 'Montserrat', sans-serif;
    color: #000;
    font-size: 24px;
    font-weight: 700;
    text-transform: uppercase;
    margin-top: 0;
}

.notfound p {
    font-family: 'Montserrat', sans-serif;
    color: #000;
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 20px;
    margin-top: 0px;
}

.notfound a {
    font-family: 'Montserrat', sans-serif;
    font-size: 14px;
    text-decoration: none;
    text-transform: uppercase;
    background: #0046d5;
    display: inline-block;
    padding: 15px 30px;
    border-radius: 40px;
    color: #fff;
    font-weight: 700;
    -webkit-box-shadow: 0px 4px 15px -5px #0046d5;
    box-shadow: 0px 4px 15px -5px #0046d5;
}


@media only screen and (max-width: 767px) {
    .notfound .notfound-404 {
        height: 142px;
    }

    .notfound .notfound-404 h1 {
        font-size: 112px;
    }
}
</style>

<div id="notfound">
    <div class="notfound">
        <div class="notfound-404">
            <h1>Oops!</h1>
        </div>
        <br>
        <br>
        <br>
        <h2>404 - Page not found</h2>
        <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.
        </p>
        <a href="<?php echo $base_url; ?>/index">Go To Homepage</a>
    </div>
</div>