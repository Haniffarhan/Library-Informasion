<!DOCTYPE html>
<!-- saved from url=(0047)https://codepen.io/ThibaultJanBeyer/full/JKYPZZ -->
<html lang="en" class="android chrome75 js">
<!--<![endif]-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Library Informasion</title>
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('favicon.png')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: sans-serif;
            height: 100%;
            overflow: hidden;
            width: 100%;
        }

        /************************
         * Animations infinites *
         ************************/
        /*
         * Number Trembling
         */
        .tremble {
            -webkit-animation: tremble 0.1s infinite;
            animation: tremble 0.1s infinite;
        }

        @-webkit-keyframes tremble {
            0% {
                margin-left: 0;
            }

            50% {
                margin-left: 5px;
            }

            100% {
                margin-left: 0;
            }
        }

        @keyframes tremble {
            0% {
                margin-left: 0;
            }

            50% {
                margin-left: 5px;
            }

            100% {
                margin-left: 0;
            }
        }

        /*
         * Objects
         */
        .object {
            border: 2px solid #00ffba;
            position: absolute;
        }

        .circle {
            border-radius: 50%;
        }

        .diamond {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .circle:nth-child(1),
        .square:nth-child(1),
        .diamond:nth-child(1) {
            height: 43px;
            left: 65%;
            width: 43px;
        }

        .object:nth-child(1) {
            -webkit-animation-duration: 950ms;
            animation-duration: 950ms;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-iteration-count: 6;
            animation-iteration-count: 6;
            -webkit-animation-name: flyUp--1;
            animation-name: flyUp--1;
            opacity: 0.08;
        }

        @-webkit-keyframes flyUp--1 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        @keyframes flyUp--1 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        .circle:nth-child(2),
        .square:nth-child(2),
        .diamond:nth-child(2) {
            height: 40px;
            left: 79%;
            width: 40px;
        }

        .object:nth-child(2) {
            -webkit-animation-duration: 900ms;
            animation-duration: 900ms;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-iteration-count: 6;
            animation-iteration-count: 6;
            -webkit-animation-name: flyUp--2;
            animation-name: flyUp--2;
            opacity: 0.16;
        }

        @-webkit-keyframes flyUp--2 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        @keyframes flyUp--2 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        .circle:nth-child(3),
        .square:nth-child(3),
        .diamond:nth-child(3) {
            height: 82px;
            left: 1%;
            width: 82px;
        }

        .object:nth-child(3) {
            -webkit-animation-duration: 850ms;
            animation-duration: 850ms;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-iteration-count: 6;
            animation-iteration-count: 6;
            -webkit-animation-name: flyUp--3;
            animation-name: flyUp--3;
            opacity: 0.24;
        }

        @-webkit-keyframes flyUp--3 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        @keyframes flyUp--3 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        .circle:nth-child(4),
        .square:nth-child(4),
        .diamond:nth-child(4) {
            height: 10px;
            left: 67%;
            width: 10px;
        }

        .object:nth-child(4) {
            -webkit-animation-duration: 800ms;
            animation-duration: 800ms;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-iteration-count: 6;
            animation-iteration-count: 6;
            -webkit-animation-name: flyUp--4;
            animation-name: flyUp--4;
            opacity: 0.32;
        }

        @-webkit-keyframes flyUp--4 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        @keyframes flyUp--4 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        .circle:nth-child(5),
        .square:nth-child(5),
        .diamond:nth-child(5) {
            height: 98px;
            left: 66%;
            width: 98px;
        }

        .object:nth-child(5) {
            -webkit-animation-duration: 750ms;
            animation-duration: 750ms;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-iteration-count: 6;
            animation-iteration-count: 6;
            -webkit-animation-name: flyUp--5;
            animation-name: flyUp--5;
            opacity: 0.4;
        }

        @-webkit-keyframes flyUp--5 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        @keyframes flyUp--5 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        .circle:nth-child(6),
        .square:nth-child(6),
        .diamond:nth-child(6) {
            height: 79px;
            left: 20%;
            width: 79px;
        }

        .object:nth-child(6) {
            -webkit-animation-duration: 700ms;
            animation-duration: 700ms;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-iteration-count: 6;
            animation-iteration-count: 6;
            -webkit-animation-name: flyUp--6;
            animation-name: flyUp--6;
            opacity: 0.48;
        }

        @-webkit-keyframes flyUp--6 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        @keyframes flyUp--6 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        .circle:nth-child(7),
        .square:nth-child(7),
        .diamond:nth-child(7) {
            height: 35px;
            left: 71%;
            width: 35px;
        }

        .object:nth-child(7) {
            -webkit-animation-duration: 650ms;
            animation-duration: 650ms;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-iteration-count: 6;
            animation-iteration-count: 6;
            -webkit-animation-name: flyUp--7;
            animation-name: flyUp--7;
            opacity: 0.56;
        }

        @-webkit-keyframes flyUp--7 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        @keyframes flyUp--7 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        .circle:nth-child(8),
        .square:nth-child(8),
        .diamond:nth-child(8) {
            height: 94px;
            left: 56%;
            width: 94px;
        }

        .object:nth-child(8) {
            -webkit-animation-duration: 600ms;
            animation-duration: 600ms;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-iteration-count: 6;
            animation-iteration-count: 6;
            -webkit-animation-name: flyUp--8;
            animation-name: flyUp--8;
            opacity: 0.64;
        }

        @-webkit-keyframes flyUp--8 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        @keyframes flyUp--8 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        .circle:nth-child(9),
        .square:nth-child(9),
        .diamond:nth-child(9) {
            height: 80px;
            left: 2%;
            width: 80px;
        }

        .object:nth-child(9) {
            -webkit-animation-duration: 550ms;
            animation-duration: 550ms;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-iteration-count: 6;
            animation-iteration-count: 6;
            -webkit-animation-name: flyUp--9;
            animation-name: flyUp--9;
            opacity: 0.72;
        }

        @-webkit-keyframes flyUp--9 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        @keyframes flyUp--9 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        .circle:nth-child(10),
        .square:nth-child(10),
        .diamond:nth-child(10) {
            height: 91px;
            left: 90%;
            width: 91px;
        }

        .object:nth-child(10) {
            -webkit-animation-duration: 500ms;
            animation-duration: 500ms;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-iteration-count: 6;
            animation-iteration-count: 6;
            -webkit-animation-name: flyUp--10;
            animation-name: flyUp--10;
            opacity: 0.8;
        }

        @-webkit-keyframes flyUp--10 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        @keyframes flyUp--10 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        .circle:nth-child(11),
        .square:nth-child(11),
        .diamond:nth-child(11) {
            height: 23px;
            left: 28%;
            width: 23px;
        }

        .object:nth-child(11) {
            -webkit-animation-duration: 450ms;
            animation-duration: 450ms;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-iteration-count: 6;
            animation-iteration-count: 6;
            -webkit-animation-name: flyUp--11;
            animation-name: flyUp--11;
            opacity: 0.88;
        }

        @-webkit-keyframes flyUp--11 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        @keyframes flyUp--11 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        .circle:nth-child(12),
        .square:nth-child(12),
        .diamond:nth-child(12) {
            height: 74px;
            left: 74%;
            width: 74px;
        }

        .object:nth-child(12) {
            -webkit-animation-duration: 400ms;
            animation-duration: 400ms;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-iteration-count: 6;
            animation-iteration-count: 6;
            -webkit-animation-name: flyUp--12;
            animation-name: flyUp--12;
            opacity: 0.96;
        }

        @-webkit-keyframes flyUp--12 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        @keyframes flyUp--12 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        .circle:nth-child(13),
        .square:nth-child(13),
        .diamond:nth-child(13) {
            height: 76px;
            left: 77%;
            width: 76px;
        }

        .object:nth-child(13) {
            -webkit-animation-duration: 350ms;
            animation-duration: 350ms;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-iteration-count: 6;
            animation-iteration-count: 6;
            -webkit-animation-name: flyUp--13;
            animation-name: flyUp--13;
            opacity: 1.04;
        }

        @-webkit-keyframes flyUp--13 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        @keyframes flyUp--13 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        .circle:nth-child(14),
        .square:nth-child(14),
        .diamond:nth-child(14) {
            height: 44px;
            left: 35%;
            width: 44px;
        }

        .object:nth-child(14) {
            -webkit-animation-duration: 300ms;
            animation-duration: 300ms;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-iteration-count: 6;
            animation-iteration-count: 6;
            -webkit-animation-name: flyUp--14;
            animation-name: flyUp--14;
            opacity: 1.12;
        }

        @-webkit-keyframes flyUp--14 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        @keyframes flyUp--14 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        .circle:nth-child(15),
        .square:nth-child(15),
        .diamond:nth-child(15) {
            height: 78px;
            left: 60%;
            width: 78px;
        }

        .object:nth-child(15) {
            -webkit-animation-duration: 250ms;
            animation-duration: 250ms;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-iteration-count: 6;
            animation-iteration-count: 6;
            -webkit-animation-name: flyUp--15;
            animation-name: flyUp--15;
            opacity: 1.2;
        }

        @-webkit-keyframes flyUp--15 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        @keyframes flyUp--15 {
            0% {
                bottom: -10%;
            }

            100% {
                bottom: 120%;
            }
        }

        /***********************
         * Animations timeline *
         ***********************/
        /*
         * ~~ 1
         * Fall (from outside to lower center)
         * start: 0, dur: ~3sec
         */
        .fall--1 {
            -webkit-animation-duration: 2.875s;
            animation-duration: 2.875s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: falling--1;
            animation-name: falling--1;
            left: 47%;
            opacity: 0.1;
            position: fixed;
        }

        @-webkit-keyframes falling--1 {
            0% {
                top: -10%;
            }

            100% {
                top: 71%;
            }
        }

        @keyframes falling--1 {
            0% {
                top: -10%;
            }

            100% {
                top: 71%;
            }
        }

        .fall--2 {
            -webkit-animation-duration: 2.75s;
            animation-duration: 2.75s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: falling--2;
            animation-name: falling--2;
            left: 47%;
            opacity: 0.2;
            position: fixed;
        }

        @-webkit-keyframes falling--2 {
            0% {
                top: -10%;
            }

            100% {
                top: 72%;
            }
        }

        @keyframes falling--2 {
            0% {
                top: -10%;
            }

            100% {
                top: 72%;
            }
        }

        .fall--3 {
            -webkit-animation-duration: 2.625s;
            animation-duration: 2.625s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: falling--3;
            animation-name: falling--3;
            left: 47%;
            opacity: 0.3;
            position: fixed;
        }

        @-webkit-keyframes falling--3 {
            0% {
                top: -10%;
            }

            100% {
                top: 72%;
            }
        }

        @keyframes falling--3 {
            0% {
                top: -10%;
            }

            100% {
                top: 72%;
            }
        }

        .fall--4 {
            -webkit-animation-duration: 2.5s;
            animation-duration: 2.5s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: falling--4;
            animation-name: falling--4;
            left: 47%;
            opacity: 0.4;
            position: fixed;
        }

        @-webkit-keyframes falling--4 {
            0% {
                top: -10%;
            }

            100% {
                top: 74%;
            }
        }

        @keyframes falling--4 {
            0% {
                top: -10%;
            }

            100% {
                top: 74%;
            }
        }

        .fall--5 {
            -webkit-animation-duration: 2.375s;
            animation-duration: 2.375s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: falling--5;
            animation-name: falling--5;
            left: 47%;
            opacity: 0.5;
            position: fixed;
        }

        @-webkit-keyframes falling--5 {
            0% {
                top: -10%;
            }

            100% {
                top: 73%;
            }
        }

        @keyframes falling--5 {
            0% {
                top: -10%;
            }

            100% {
                top: 73%;
            }
        }

        .fall--6 {
            -webkit-animation-duration: 2.25s;
            animation-duration: 2.25s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: falling--6;
            animation-name: falling--6;
            left: 47%;
            opacity: 0.6;
            position: fixed;
        }

        @-webkit-keyframes falling--6 {
            0% {
                top: -10%;
            }

            100% {
                top: 74%;
            }
        }

        @keyframes falling--6 {
            0% {
                top: -10%;
            }

            100% {
                top: 74%;
            }
        }

        .fall--7 {
            -webkit-animation-duration: 2.125s;
            animation-duration: 2.125s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: falling--7;
            animation-name: falling--7;
            left: 47%;
            opacity: 0.7;
            position: fixed;
        }

        @-webkit-keyframes falling--7 {
            0% {
                top: -10%;
            }

            100% {
                top: 77%;
            }
        }

        @keyframes falling--7 {
            0% {
                top: -10%;
            }

            100% {
                top: 77%;
            }
        }

        .fall--8 {
            -webkit-animation-duration: 2s;
            animation-duration: 2s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: falling--8;
            animation-name: falling--8;
            left: 47%;
            opacity: 0.8;
            position: fixed;
        }

        @-webkit-keyframes falling--8 {
            0% {
                top: -10%;
            }

            100% {
                top: 76%;
            }
        }

        @keyframes falling--8 {
            0% {
                top: -10%;
            }

            100% {
                top: 76%;
            }
        }

        .fall--9 {
            -webkit-animation-duration: 1.875s;
            animation-duration: 1.875s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: falling--9;
            animation-name: falling--9;
            left: 47%;
            opacity: 0.9;
            position: fixed;
        }

        @-webkit-keyframes falling--9 {
            0% {
                top: -10%;
            }

            100% {
                top: 79%;
            }
        }

        @keyframes falling--9 {
            0% {
                top: -10%;
            }

            100% {
                top: 79%;
            }
        }

        .fall--10 {
            -webkit-animation-duration: 1.75s;
            animation-duration: 1.75s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: falling--10;
            animation-name: falling--10;
            left: 47%;
            opacity: 1;
            position: fixed;
        }

        @-webkit-keyframes falling--10 {
            0% {
                top: -10%;
            }

            100% {
                top: 73%;
            }
        }

        @keyframes falling--10 {
            0% {
                top: -10%;
            }

            100% {
                top: 73%;
            }
        }

        /*
         * ~~ 2
         * Fall (outside)
         * start: 3sec, dur: ~1sec
         */
        .bfall--0 {
            -webkit-animation-delay: 3s;
            animation-delay: 3s;
            -webkit-animation-duration: 0.5s;
            animation-duration: 0.5s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: bfalling--0;
            animation-name: bfalling--0;
            position: relative;
        }

        @-webkit-keyframes bfalling--0 {
            0% {
                top: 0;
            }

            100% {
                top: -120vh;
            }
        }

        @keyframes bfalling--0 {
            0% {
                top: 0;
            }

            100% {
                top: -120vh;
            }
        }

        .bfall--1 {
            -webkit-animation-delay: 3s;
            animation-delay: 3s;
            -webkit-animation-duration: 0.55s;
            animation-duration: 0.55s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: bfalling--1;
            animation-name: bfalling--1;
            position: relative;
        }

        @-webkit-keyframes bfalling--1 {
            0% {
                top: 0;
            }

            100% {
                top: -120vh;
            }
        }

        @keyframes bfalling--1 {
            0% {
                top: 0;
            }

            100% {
                top: -120vh;
            }
        }

        .bfall--2 {
            -webkit-animation-delay: 3s;
            animation-delay: 3s;
            -webkit-animation-duration: 0.6s;
            animation-duration: 0.6s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: bfalling--2;
            animation-name: bfalling--2;
            position: relative;
        }

        @-webkit-keyframes bfalling--2 {
            0% {
                top: 0;
            }

            100% {
                top: -120vh;
            }
        }

        @keyframes bfalling--2 {
            0% {
                top: 0;
            }

            100% {
                top: -120vh;
            }
        }

        .bfall--3 {
            -webkit-animation-delay: 3s;
            animation-delay: 3s;
            -webkit-animation-duration: 0.65s;
            animation-duration: 0.65s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: bfalling--3;
            animation-name: bfalling--3;
            position: relative;
        }

        @-webkit-keyframes bfalling--3 {
            0% {
                top: 0;
            }

            100% {
                top: -120vh;
            }
        }

        @keyframes bfalling--3 {
            0% {
                top: 0;
            }

            100% {
                top: -120vh;
            }
        }

        .bfall--4 {
            -webkit-animation-delay: 3s;
            animation-delay: 3s;
            -webkit-animation-duration: 0.7s;
            animation-duration: 0.7s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: bfalling--4;
            animation-name: bfalling--4;
            position: relative;
        }

        @-webkit-keyframes bfalling--4 {
            0% {
                top: 0;
            }

            100% {
                top: -120vh;
            }
        }

        @keyframes bfalling--4 {
            0% {
                top: 0;
            }

            100% {
                top: -120vh;
            }
        }

        .bfall--5 {
            -webkit-animation-delay: 3s;
            animation-delay: 3s;
            -webkit-animation-duration: 0.75s;
            animation-duration: 0.75s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: bfalling--5;
            animation-name: bfalling--5;
            position: relative;
        }

        @-webkit-keyframes bfalling--5 {
            0% {
                top: 0;
            }

            100% {
                top: -120vh;
            }
        }

        @keyframes bfalling--5 {
            0% {
                top: 0;
            }

            100% {
                top: -120vh;
            }
        }

        .bfall--6 {
            -webkit-animation-delay: 3s;
            animation-delay: 3s;
            -webkit-animation-duration: 0.8s;
            animation-duration: 0.8s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: bfalling--6;
            animation-name: bfalling--6;
            position: relative;
        }

        @-webkit-keyframes bfalling--6 {
            0% {
                top: 0;
            }

            100% {
                top: -120vh;
            }
        }

        @keyframes bfalling--6 {
            0% {
                top: 0;
            }

            100% {
                top: -120vh;
            }
        }

        .bfall--7 {
            -webkit-animation-delay: 3s;
            animation-delay: 3s;
            -webkit-animation-duration: 0.85s;
            animation-duration: 0.85s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: bfalling--7;
            animation-name: bfalling--7;
            position: relative;
        }

        @-webkit-keyframes bfalling--7 {
            0% {
                top: 0;
            }

            100% {
                top: -120vh;
            }
        }

        @keyframes bfalling--7 {
            0% {
                top: 0;
            }

            100% {
                top: -120vh;
            }
        }

        .bfall--8 {
            -webkit-animation-delay: 3s;
            animation-delay: 3s;
            -webkit-animation-duration: 0.9s;
            animation-duration: 0.9s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: bfalling--8;
            animation-name: bfalling--8;
            position: relative;
        }

        @-webkit-keyframes bfalling--8 {
            0% {
                top: 0;
            }

            100% {
                top: -120vh;
            }
        }

        @keyframes bfalling--8 {
            0% {
                top: 0;
            }

            100% {
                top: -120vh;
            }
        }

        .bfall--9 {
            -webkit-animation-delay: 3s;
            animation-delay: 3s;
            -webkit-animation-duration: 0.95s;
            animation-duration: 0.95s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: bfalling--9;
            animation-name: bfalling--9;
            position: relative;
        }

        @-webkit-keyframes bfalling--9 {
            0% {
                top: 0;
            }

            100% {
                top: -120vh;
            }
        }

        @keyframes bfalling--9 {
            0% {
                top: 0;
            }

            100% {
                top: -120vh;
            }
        }

        .bfall--10 {
            -webkit-animation-delay: 3s;
            animation-delay: 3s;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: bfalling--10;
            animation-name: bfalling--10;
            position: relative;
        }

        @-webkit-keyframes bfalling--10 {
            0% {
                top: 0;
            }

            100% {
                top: -120vh;
            }
        }

        @keyframes bfalling--10 {
            0% {
                top: 0;
            }

            100% {
                top: -120vh;
            }
        }

        /*
         * ~~ 3 
         * Water & Wobble
         * start: 4sec, dur: 2sec
         */
        .water {
            -webkit-animation: rising 1.5s 4s both;
            animation: rising 1.5s 4s both;
            background-color: #00ffba;
            height: 100%;
            left: 0;
            position: absolute;
            width: 100%;
        }

        @-webkit-keyframes rising {
            0% {
                bottom: -200%;
            }

            100% {
                bottom: -80%;
            }
        }

        @keyframes rising {
            0% {
                bottom: -200%;
            }

            100% {
                bottom: -80%;
            }
        }

        /*
         * ~~ 3
         * Plonge
         * start: 4sec, dur: 2sec
         */
        .plonge--0 {
            -webkit-animation-delay: 5s;
            animation-delay: 5s;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: plonge--0;
            animation-name: plonge--0;
            position: relative;
        }

        @-webkit-keyframes plonge--0 {
            0% {
                top: 0;
            }

            100% {
                margin: -15px;
                padding: 11px;
                top: 150vh;
            }
        }

        @keyframes plonge--0 {
            0% {
                top: 0;
            }

            100% {
                margin: -15px;
                padding: 11px;
                top: 150vh;
            }
        }

        .plonge--1 {
            -webkit-animation-delay: 5s;
            animation-delay: 5s;
            -webkit-animation-duration: 0.9s;
            animation-duration: 0.9s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: plonge--1;
            animation-name: plonge--1;
            position: relative;
        }

        @-webkit-keyframes plonge--1 {
            0% {
                top: 0;
            }

            100% {
                margin: -15px;
                padding: 1px;
                top: 150vh;
            }
        }

        @keyframes plonge--1 {
            0% {
                top: 0;
            }

            100% {
                margin: -15px;
                padding: 1px;
                top: 150vh;
            }
        }

        .plonge--2 {
            -webkit-animation-delay: 5s;
            animation-delay: 5s;
            -webkit-animation-duration: 0.8s;
            animation-duration: 0.8s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: plonge--2;
            animation-name: plonge--2;
            position: relative;
        }

        @-webkit-keyframes plonge--2 {
            0% {
                top: 0;
            }

            100% {
                margin: -13px;
                padding: 14px;
                top: 150vh;
            }
        }

        @keyframes plonge--2 {
            0% {
                top: 0;
            }

            100% {
                margin: -13px;
                padding: 14px;
                top: 150vh;
            }
        }

        .plonge--3 {
            -webkit-animation-delay: 5s;
            animation-delay: 5s;
            -webkit-animation-duration: 0.7s;
            animation-duration: 0.7s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: plonge--3;
            animation-name: plonge--3;
            position: relative;
        }

        @-webkit-keyframes plonge--3 {
            0% {
                top: 0;
            }

            100% {
                margin: -5px;
                padding: 5px;
                top: 150vh;
            }
        }

        @keyframes plonge--3 {
            0% {
                top: 0;
            }

            100% {
                margin: -5px;
                padding: 5px;
                top: 150vh;
            }
        }

        .plonge--4 {
            -webkit-animation-delay: 5s;
            animation-delay: 5s;
            -webkit-animation-duration: 0.6s;
            animation-duration: 0.6s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: plonge--4;
            animation-name: plonge--4;
            position: relative;
        }

        @-webkit-keyframes plonge--4 {
            0% {
                top: 0;
            }

            100% {
                margin: -10px;
                padding: 15px;
                top: 150vh;
            }
        }

        @keyframes plonge--4 {
            0% {
                top: 0;
            }

            100% {
                margin: -10px;
                padding: 15px;
                top: 150vh;
            }
        }

        .plonge--5 {
            -webkit-animation-delay: 5s;
            animation-delay: 5s;
            -webkit-animation-duration: 0.5s;
            animation-duration: 0.5s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: plonge--5;
            animation-name: plonge--5;
            position: relative;
        }

        @-webkit-keyframes plonge--5 {
            0% {
                top: 0;
            }

            100% {
                margin: -5px;
                padding: 14px;
                top: 150vh;
            }
        }

        @keyframes plonge--5 {
            0% {
                top: 0;
            }

            100% {
                margin: -5px;
                padding: 14px;
                top: 150vh;
            }
        }

        .plonge--6 {
            -webkit-animation-delay: 5s;
            animation-delay: 5s;
            -webkit-animation-duration: 0.4s;
            animation-duration: 0.4s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: plonge--6;
            animation-name: plonge--6;
            position: relative;
        }

        @-webkit-keyframes plonge--6 {
            0% {
                top: 0;
            }

            100% {
                margin: -13px;
                padding: 17px;
                top: 150vh;
            }
        }

        @keyframes plonge--6 {
            0% {
                top: 0;
            }

            100% {
                margin: -13px;
                padding: 17px;
                top: 150vh;
            }
        }

        .plonge--7 {
            -webkit-animation-delay: 5s;
            animation-delay: 5s;
            -webkit-animation-duration: 0.3s;
            animation-duration: 0.3s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: plonge--7;
            animation-name: plonge--7;
            position: relative;
        }

        @-webkit-keyframes plonge--7 {
            0% {
                top: 0;
            }

            100% {
                margin: -8px;
                padding: 19px;
                top: 150vh;
            }
        }

        @keyframes plonge--7 {
            0% {
                top: 0;
            }

            100% {
                margin: -8px;
                padding: 19px;
                top: 150vh;
            }
        }

        .plonge--8 {
            -webkit-animation-delay: 5s;
            animation-delay: 5s;
            -webkit-animation-duration: 0.2s;
            animation-duration: 0.2s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: plonge--8;
            animation-name: plonge--8;
            position: relative;
        }

        @-webkit-keyframes plonge--8 {
            0% {
                top: 0;
            }

            100% {
                margin: -15px;
                padding: 5px;
                top: 150vh;
            }
        }

        @keyframes plonge--8 {
            0% {
                top: 0;
            }

            100% {
                margin: -15px;
                padding: 5px;
                top: 150vh;
            }
        }

        .plonge--9 {
            -webkit-animation-delay: 5s;
            animation-delay: 5s;
            -webkit-animation-duration: 0.1s;
            animation-duration: 0.1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: plonge--9;
            animation-name: plonge--9;
            position: relative;
        }

        @-webkit-keyframes plonge--9 {
            0% {
                top: 0;
            }

            100% {
                margin: -12px;
                padding: 8px;
                top: 150vh;
            }
        }

        @keyframes plonge--9 {
            0% {
                top: 0;
            }

            100% {
                margin: -12px;
                padding: 8px;
                top: 150vh;
            }
        }

        .plonge--10 {
            -webkit-animation-delay: 5s;
            animation-delay: 5s;
            -webkit-animation-duration: 0s;
            animation-duration: 0s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: plonge--10;
            animation-name: plonge--10;
            position: relative;
        }

        @-webkit-keyframes plonge--10 {
            0% {
                top: 0;
            }

            100% {
                margin: -1px;
                padding: 18px;
                top: 150vh;
            }
        }

        @keyframes plonge--10 {
            0% {
                top: 0;
            }

            100% {
                margin: -1px;
                padding: 18px;
                top: 150vh;
            }
        }

        /*
         * ~~ 4
         * Splash & Wobble/Trampoline
         * start: 5.3sec, dur: ~1sec
         */
        .splash {
            background-color: #00ffba;
            border-radius: 50%;
            position: absolute;
        }

        .wobble {
            margin-top: -40px;
            position: absolute;
            width: 100vw;
        }

        #trampoline {
            fill: #00ffba;
        }

        .splash--1 {
            -webkit-animation-delay: 5.3s;
            animation-delay: 5.3s;
            -webkit-animation-duration: 1.4333333333s;
            animation-duration: 1.4333333333s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: splash--1;
            animation-name: splash--1;
            height: 20px;
            left: 46%;
            width: 20px;
        }

        @-webkit-keyframes splash--1 {
            0% {
                margin: 0;
                opacity: 1;
                padding: 11px;
                top: 0;
            }

            100% {
                margin: 21px;
                opacity: 0;
                padding: -20px;
                top: -48px;
            }
        }

        @keyframes splash--1 {
            0% {
                margin: 0;
                opacity: 1;
                padding: 11px;
                top: 0;
            }

            100% {
                margin: 21px;
                opacity: 0;
                padding: -20px;
                top: -48px;
            }
        }

        .splash--2 {
            -webkit-animation-delay: 5.3s;
            animation-delay: 5.3s;
            -webkit-animation-duration: 1.3666666667s;
            animation-duration: 1.3666666667s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: splash--2;
            animation-name: splash--2;
            height: 3px;
            left: 47%;
            width: 3px;
        }

        @-webkit-keyframes splash--2 {
            0% {
                margin: 0;
                opacity: 1;
                padding: 9px;
                top: 0;
            }

            100% {
                margin: 23px;
                opacity: 0;
                padding: -3px;
                top: -96px;
            }
        }

        @keyframes splash--2 {
            0% {
                margin: 0;
                opacity: 1;
                padding: 9px;
                top: 0;
            }

            100% {
                margin: 23px;
                opacity: 0;
                padding: -3px;
                top: -96px;
            }
        }

        .splash--3 {
            -webkit-animation-delay: 5.3s;
            animation-delay: 5.3s;
            -webkit-animation-duration: 1.3s;
            animation-duration: 1.3s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: splash--3;
            animation-name: splash--3;
            height: 15px;
            left: 46%;
            width: 15px;
        }

        @-webkit-keyframes splash--3 {
            0% {
                margin: 0;
                opacity: 1;
                padding: 19px;
                top: 0;
            }

            100% {
                margin: 23px;
                opacity: 0;
                padding: -3px;
                top: -104px;
            }
        }

        @keyframes splash--3 {
            0% {
                margin: 0;
                opacity: 1;
                padding: 19px;
                top: 0;
            }

            100% {
                margin: 23px;
                opacity: 0;
                padding: -3px;
                top: -104px;
            }
        }

        .splash--4 {
            -webkit-animation-delay: 5.3s;
            animation-delay: 5.3s;
            -webkit-animation-duration: 1.2333333333s;
            animation-duration: 1.2333333333s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: splash--4;
            animation-name: splash--4;
            height: 18px;
            left: 45%;
            width: 18px;
        }

        @-webkit-keyframes splash--4 {
            0% {
                margin: 0;
                opacity: 1;
                padding: 4px;
                top: 0;
            }

            100% {
                margin: 19px;
                opacity: 0;
                padding: -23px;
                top: -52px;
            }
        }

        @keyframes splash--4 {
            0% {
                margin: 0;
                opacity: 1;
                padding: 4px;
                top: 0;
            }

            100% {
                margin: 19px;
                opacity: 0;
                padding: -23px;
                top: -52px;
            }
        }

        .splash--5 {
            -webkit-animation-delay: 5.3s;
            animation-delay: 5.3s;
            -webkit-animation-duration: 1.1666666667s;
            animation-duration: 1.1666666667s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: splash--5;
            animation-name: splash--5;
            height: 4px;
            left: 43%;
            width: 4px;
        }

        @-webkit-keyframes splash--5 {
            0% {
                margin: 0;
                opacity: 1;
                padding: 19px;
                top: 0;
            }

            100% {
                margin: 11px;
                opacity: 0;
                padding: -6px;
                top: -93px;
            }
        }

        @keyframes splash--5 {
            0% {
                margin: 0;
                opacity: 1;
                padding: 19px;
                top: 0;
            }

            100% {
                margin: 11px;
                opacity: 0;
                padding: -6px;
                top: -93px;
            }
        }

        .splash--6 {
            -webkit-animation-delay: 5.3s;
            animation-delay: 5.3s;
            -webkit-animation-duration: 1.1s;
            animation-duration: 1.1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: splash--6;
            animation-name: splash--6;
            height: 12px;
            left: 46%;
            width: 12px;
        }

        @-webkit-keyframes splash--6 {
            0% {
                margin: 0;
                opacity: 1;
                padding: 19px;
                top: 0;
            }

            100% {
                margin: 2px;
                opacity: 0;
                padding: -6px;
                top: -115px;
            }
        }

        @keyframes splash--6 {
            0% {
                margin: 0;
                opacity: 1;
                padding: 19px;
                top: 0;
            }

            100% {
                margin: 2px;
                opacity: 0;
                padding: -6px;
                top: -115px;
            }
        }

        .splash--7 {
            -webkit-animation-delay: 5.3s;
            animation-delay: 5.3s;
            -webkit-animation-duration: 1.0333333333s;
            animation-duration: 1.0333333333s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: splash--7;
            animation-name: splash--7;
            height: 10px;
            left: 44%;
            width: 10px;
        }

        @-webkit-keyframes splash--7 {
            0% {
                margin: 0;
                opacity: 1;
                padding: 20px;
                top: 0;
            }

            100% {
                margin: 21px;
                opacity: 0;
                padding: -2px;
                top: -93px;
            }
        }

        @keyframes splash--7 {
            0% {
                margin: 0;
                opacity: 1;
                padding: 20px;
                top: 0;
            }

            100% {
                margin: 21px;
                opacity: 0;
                padding: -2px;
                top: -93px;
            }
        }

        .splash--8 {
            -webkit-animation-delay: 5.3s;
            animation-delay: 5.3s;
            -webkit-animation-duration: 0.9666666667s;
            animation-duration: 0.9666666667s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: splash--8;
            animation-name: splash--8;
            height: 14px;
            left: 45%;
            width: 14px;
        }

        @-webkit-keyframes splash--8 {
            0% {
                margin: 0;
                opacity: 1;
                padding: 10px;
                top: 0;
            }

            100% {
                margin: 8px;
                opacity: 0;
                padding: -23px;
                top: -60px;
            }
        }

        @keyframes splash--8 {
            0% {
                margin: 0;
                opacity: 1;
                padding: 10px;
                top: 0;
            }

            100% {
                margin: 8px;
                opacity: 0;
                padding: -23px;
                top: -60px;
            }
        }

        .splash--9 {
            -webkit-animation-delay: 5.3s;
            animation-delay: 5.3s;
            -webkit-animation-duration: 0.9s;
            animation-duration: 0.9s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: splash--9;
            animation-name: splash--9;
            height: 17px;
            left: 47%;
            width: 17px;
        }

        @-webkit-keyframes splash--9 {
            0% {
                margin: 0;
                opacity: 1;
                padding: 10px;
                top: 0;
            }

            100% {
                margin: 1px;
                opacity: 0;
                padding: -15px;
                top: -75px;
            }
        }

        @keyframes splash--9 {
            0% {
                margin: 0;
                opacity: 1;
                padding: 10px;
                top: 0;
            }

            100% {
                margin: 1px;
                opacity: 0;
                padding: -15px;
                top: -75px;
            }
        }

        .splash--10 {
            -webkit-animation-delay: 5.3s;
            animation-delay: 5.3s;
            -webkit-animation-duration: 0.8333333333s;
            animation-duration: 0.8333333333s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: splash--10;
            animation-name: splash--10;
            height: 8px;
            left: 44%;
            width: 8px;
        }

        @-webkit-keyframes splash--10 {
            0% {
                margin: 0;
                opacity: 1;
                padding: 13px;
                top: 0;
            }

            100% {
                margin: 6px;
                opacity: 0;
                padding: -24px;
                top: -83px;
            }
        }

        @keyframes splash--10 {
            0% {
                margin: 0;
                opacity: 1;
                padding: 13px;
                top: 0;
            }

            100% {
                margin: 6px;
                opacity: 0;
                padding: -24px;
                top: -83px;
            }
        }

        /*
         * ~~ 5
         * Water Fullrise
         * start: 6.5sec, dur: 1sec
         */
        .full-water {
            -webkit-animation: fullRising 1s 6.5s both;
            animation: fullRising 1s 6.5s both;
            height: 100%;
            left: 0;
            position: absolute;
            width: 100%;
        }

        @-webkit-keyframes fullRising {
            0% {
                bottom: 0;
            }

            100% {
                bottom: 80%;
            }
        }

        @keyframes fullRising {
            0% {
                bottom: 0;
            }

            100% {
                bottom: 80%;
            }
        }

        /*
         * Finishing up
         */
        #replay {
            -webkit-animation: appear 1s 8s both;
            animation: appear 1s 8s both;
            bottom: 10px;
            left: 45%;
            position: absolute;
            top: 48%;
            z-index: 999;
        }

        @-webkit-keyframes appear {
            0% {
                opacity: 0;
                height: 0;
            }

            100% {
                opacity: 1;
                height: 10px;
            }
        }

        @keyframes appear {
            0% {
                opacity: 0;
                height: 0;
            }

            100% {
                opacity: 1;
                height: 10px;
            }
        }
    </style>
    <script>
        window.console = window.console || function(t) {};
    </script>
    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>
</head>

<body translate="no">
    <div class="letters"><span class="fall--1"><span class="bfall--1"><span class="plonge--1"><span class="tremble">1</span></span></span></span><span class="fall--2"><span class="bfall--2"><span class="plonge--2"><span class="tremble">2</span></span></span></span><span class="fall--3"><span class="bfall--3"><span class="plonge--3"><span class="tremble">3</span></span></span></span><span class="fall--4"><span class="bfall--4"><span class="plonge--4"><span class="tremble">4</span></span></span></span><span class="fall--5"><span class="bfall--5"><span class="plonge--5"><span class="tremble">5</span></span></span></span><span class="fall--6"><span class="bfall--6"><span class="plonge--6"><span class="tremble">6</span></span></span></span><span class="fall--7"><span class="bfall--7"><span class="plonge--7"><span class="tremble">7</span></span></span></span><span class="fall--8"><span class="bfall--8"><span class="plonge--8"><span class="tremble">8</span></span></span></span><span class="fall--9"><span class="bfall--9"><span class="plonge--9"><span class="tremble">9</span></span></span></span>
    </div>
    <div class="objects">
        <div class="object circle"></div>
        <div class="object square"></div>
        <div class="object diamond"></div>
        <div class="object circle"></div>
        <div class="object square"></div>
        <div class="object diamond"></div>
        <div class="object circle"></div>
        <div class="object square"></div>
        <div class="object diamond"></div>
        <div class="object circle"></div>
        <div class="object square"></div>
        <div class="object diamond"></div>
        <div class="object circle"></div>
        <div class="object square"></div>
        <div class="object diamond"></div>
    </div>
    <div class="full-water">
        <div class="water">
            <div class="splash splash--1"></div>
            <div class="splash splash--2"></div>
            <div class="splash splash--3"></div>
            <div class="splash splash--4"></div>
            <div class="splash splash--5"></div>
            <div class="splash splash--6"></div>
            <div class="splash splash--7"></div>
            <div class="splash splash--8"></div>
            <div class="splash splash--9"></div>
            <svg class="wobble" viewBox="0 0 841.9 73.5">
                <path id="trampoline" fill="#ED1C24" d="M 851 79.5 H -8 V 13.4 c 0 0 243 0 430 0 s 429 0 429 0 V 79.5 Z"></path>
                <animate xlink:href="#trampoline" attributeName="d" begin="5.2s" dur="1s" fill="freeze" keyTimes="0; 0.2; 0.5; 1" values="M851,79.5H-8V13.4c0,0,243,0,430,0s429,0,429,0V79.5z; M851,79.5H-8V13.4c0,0,243,10,430,10s429-10,429-10V79.5z; M851,79.5H-8V13.4c0,0,243-4,430-4s429,4,429,4V79.5z; M851,79.5H-8V13.4c0,0,243,0,430,0s429,0,429,0V79.5z;">
                </animate>
            </svg>
        </div>
    </div>
    <p id="replay"><a href="{{ route('next')}}" class="btn btn-primary btn-lg">Next</a></p>


</body>

</html>

</html>