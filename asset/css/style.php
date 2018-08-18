<?php header('Content-type: text/css; charset:utf-8');?>
a{
color:white;
font:18px;
}

a:hover{
color:green;
text-decoration: none;
}
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300);
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-weight: 300;
}
body {
    font-family: 'Source Sans Pro', sans-serif;
    color: white;
    font-weight: 300;
}
body ::-webkit-input-placeholder {
    /* WebKit browsers */
    font-family: 'Source Sans Pro', sans-serif;
    color: white;
    font-weight: 300;
}
body :-moz-placeholder {
    /* Mozilla Firefox 4 to 18 */
    font-family: 'Source Sans Pro', sans-serif;
    color: white;
    opacity: 1;
    font-weight: 300;
}
body ::-moz-placeholder {
    /* Mozilla Firefox 19+ */
    font-family: 'Source Sans Pro', sans-serif;
    color: white;
    opacity: 1;
    font-weight: 300;
}
body :-ms-input-placeholder {
    /* Internet Explorer 10+ */
    font-family: 'Source Sans Pro', sans-serif;
    color: white;
    font-weight: 300;
}
.wrapper {
    background: #50a3a2;
    background: linear-gradient(to bottom right, #50a3a2 0%, #53e3a6 100%);
    position: absolute;
    top: 0%;
    left: 0%;
    width: 100%;
    height: 100%;
    overflow: hidden;
}
/*.wrapper.form-success .container h1 {*/
    /*-webkit-transform: translateY(85px);*/
    /*transform: translateY(85px);*/
/*}*/
.wrapper .container {
    max-width: 600px;
    margin: 100px auto;
    padding: 80px 0;
    height: 400px;
    text-align: center;
    /*background-color: red;*/
}
.wrapper .container h1 {
    font-size: 40px;
    /*transition-duration: 1s;*/
    /*transition-timing-function: ease-in-put;*/
    font-weight: 200;
}
form {
    padding: 20px 0;
    position: relative;
    z-index: 2;
    /*border: 1px solid white;*/
}
form input {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    outline: 0;
    border: 1px solid rgba(255, 255, 255, 0.4);
    background-color: green;
    width: 250px;
    border-radius: 3px;
    padding: 10px 15px;
    margin: 0 auto 10px auto;
    display: block;
    text-align: center;
    font-size: 18px;
    color: white;
    transition-duration: 0.25s;
    font-weight: 300;
}
form input:hover {
    background-color: grey;
}
form input:focus {
    background-color: orangered;
    width: 300px;
    color: #53e3a6;
}
form button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    outline: 0;
    background-color: white;
    border: 0;
    padding: 10px 15px;
    color: #53e3a6;
    font-weight: 200;
    border-radius: 3px;
    width: 220px;
    cursor: pointer;
    font-size: 18px;
    transition-duration: 0.25s;
}
form button:hover {
    background-color: #f5f7f9;
}
.bg-bubbles {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}
.bg-bubbles li {
    position: absolute;
    list-style: none;
    display: block;
    width: 40px;
    height: 40px;
    background-color: rgba(255, 255, 255, 0.15);
    bottom: -160px;
    -webkit-animation: square 25s infinite;
    animation: square 25s infinite;
    transition-timing-function: linear;
}
.bg-bubbles li:nth-child(1) {
    left: 10%;
}
.bg-bubbles li:nth-child(2) {
    left: 20%;
    width: 80px;
    height: 80px;
    -webkit-animation-delay: 2s;
    animation-delay: 2s;
    -webkit-animation-duration: 17s;
    animation-duration: 17s;
}
.bg-bubbles li:nth-child(3) {
    left: 25%;
    -webkit-animation-delay: 4s;
    animation-delay: 4s;
}
.bg-bubbles li:nth-child(4) {
    left: 40%;
    width: 60px;
    height: 60px;
    -webkit-animation-duration: 22s;
    animation-duration: 22s;
    background-color: rgba(255, 255, 255, 0.25);
}
.bg-bubbles li:nth-child(5) {
    left: 70%;
}
.bg-bubbles li:nth-child(6) {
    left: 80%;
    width: 120px;
    height: 120px;
    -webkit-animation-delay: 3s;
    animation-delay: 3s;
    background-color: rgba(255, 255, 255, 0.2);
}
.bg-bubbles li:nth-child(7) {
    left: 32%;
    width: 160px;
    height: 160px;
    -webkit-animation-delay: 7s;
    animation-delay: 7s;
}
.bg-bubbles li:nth-child(8) {
    left: 55%;
    width: 20px;
    height: 20px;
    -webkit-animation-delay: 15s;
    animation-delay: 15s;
    -webkit-animation-duration: 40s;
    animation-duration: 40s;
}
.bg-bubbles li:nth-child(9) {
    left: 25%;
    width: 10px;
    height: 10px;
    -webkit-animation-delay: 2s;
    animation-delay: 2s;
    -webkit-animation-duration: 40s;
    animation-duration: 40s;
    background-color: rgba(255, 255, 255, 0.3);
}
.bg-bubbles li:nth-child(10) {
    left: 90%;
    width: 160px;
    height: 160px;
    -webkit-animation-delay: 11s;
    animation-delay: 11s;
}
@-webkit-keyframes square {
    0% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    100% {
        -webkit-transform: translateY(-700px) rotate(600deg);
        transform: translateY(-700px) rotate(600deg);
    }
}
@keyframes square {
    0% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    50%{
        -webkit-transform: translateY(-350px) rotate(300deg);
        transform: translateY(-350px) rotate(300deg);
    }
    100% {
        -webkit-transform: translateY(-700px) rotate(600deg);
        transform: translateY(-700px) rotate(600deg);
    }
}

/******************Dashboard******************/
<?php

$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
$color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];

?>

aside.left-side{
    background: #272c33;
    height: 100vh;
    padding: 0% 2% 5% 2%;
    vertical-align: top;
    width: 22.5%;
    position: relative;
    top: 0;
    left: 0;
    display: block;
    float: left;
}

.right-side{
    float: left;
    display: block;
    padding-left: 0 !important;
    position: relative;
    width: 77.5%;
    height: 60px;
    background-color: #0c5460;
}
.header{
    text-align: right;
    color: white;
    font: 18px;
    padding: 0.75% 1.5% 0px 0px;
}

.display-box{
    margin: 2.5% 0% 0% 2.5%;
    height: 125px;
    width: 97.5%;
    background-color: <?php echo $color?>;
    float: left;
}



/**************addfrom**********/
.add-form{
text-align: center;
color: #1b1e21;
}

.my-form-control{
-webkit-appearance: none;
-moz-appearance: none;
appearance: none;
outline: 0;
border: 1px solid black;
background-color: transparent;
width: 100%;
border-radius: 5px;
padding: 10px 15px;
margin: 0 auto 10px auto;
display: block;
text-align: center;
font-size: 15px;
color: black;
transition-duration: 0.25s;
font-weight: 300;
}

.my-form-control::placeholder{
color: black;
}

.my-form-control:hover{
box-shadow: 1px 1px 1px 1px crimson;
background-color: transparent;
}

.my-form-control:focus{
background-color: transparent;
color: #1c7430;
}
.my-form-control::value{
text-align: center;
}

@media screen and (max-width: 600px){
aside.left-side{
display: none;
}

.right-side{
float: left;
display: block;
padding-left: 0 !important;
position: relative;
width: 100%;
height: 60px;
background-color: #0c5460;
}
.add-form{
text-align: center;
color: #1b1e21;
margin-left:7.5%;
}
}
