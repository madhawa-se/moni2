<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>404 Page Not Found</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet">

        <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->

        <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">
        <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> 

        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
        <link href="<?php echo base_url() ?>css/footer.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>css/form.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>css/fonts.css" rel="stylesheet">


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <style type="text/css">

            ::selection { background-color: #E13300; color: white; }
            ::-moz-selection { background-color: #E13300; color: white; }

            body {
                background-color: #F0A1BB;
                margin: 40px;
                font: 13px/20px normal Helvetica, Arial, sans-serif;
                color: #FFF;
            }

            a {
                color: #003399;
                background-color: transparent;
                font-weight: normal;
            }
            p{
                color: #7d7d7d;
            }

            h1 {
                color: #444;
                background-color: transparent;
                font-size: 19px;
                font-weight: bold;
            }
            .overheader{
                margin-top: -250px;
                color: #fff;
                font-size: 100px;
            }
            * {
                font-family: lato !important;
            }
            h2{
               color: #fff;
font-weight: bold;
            }
            h4{
                color: #f92c50e6;
            }

            code {
                font-family: Consolas, Monaco, Courier New, Courier, monospace;
                font-size: 12px;
                background-color: #f9f9f9;
                border: 1px solid #D0D0D0;
                color: #002166;
                display: block;
                margin: 14px 0 14px 0;
                padding: 12px 10px 12px 10px;
            }

            #container {
                margin: 10px;
                border: 1px solid #D0D0D0;
                box-shadow: 0 0 8px #D0D0D0;
            }

            p {
                margin: 12px 15px 12px 15px;
            }
        </style>
        <script>
            var HeartsBackground = {
                heartHeight: 60,
                heartWidth: 64,
                hearts: [],
                heartImage: 'http://i58.tinypic.com/ntnw5.png',
                maxHearts: 8,
                minScale: 0.4,
                draw: function () {
                    this.setCanvasSize();
                    this.ctx.clearRect(0, 0, this.w, this.h);
                    for (var i = 0; i < this.hearts.length; i++) {
                        var heart = this.hearts[i];
                        heart.image = new Image();
                        heart.image.style.height = heart.height;
                        heart.image.src = this.heartImage;
                        this.ctx.globalAlpha = heart.opacity;
                        this.ctx.drawImage(heart.image, heart.x, heart.y, heart.width, heart.height);
                    }
                    this.move();
                },
                move: function () {
                    for (var b = 0; b < this.hearts.length; b++) {
                        var heart = this.hearts[b];
                        heart.y += heart.ys;
                        if (heart.y > this.h) {
                            heart.x = Math.random() * this.w;
                            heart.y = -1 * this.heartHeight;
                        }
                    }
                },
                setCanvasSize: function () {
                    this.canvas.width = window.innerWidth;
                    this.canvas.height = window.innerHeight;
                    this.w = this.canvas.width;
                    this.h = this.canvas.height;
                },
                initialize: function () {
                    this.canvas = $('#canvas')[0];

                    if (!this.canvas.getContext)
                        return;

                    this.setCanvasSize();
                    this.ctx = this.canvas.getContext('2d');

                    for (var a = 0; a < this.maxHearts; a++) {
                        var scale = (Math.random() * (1 - this.minScale)) + this.minScale;
                        this.hearts.push({
                            x: Math.random() * this.w,
                            y: Math.random() * this.h,
                            ys: Math.random() + 1,
                            height: scale * this.heartHeight,
                            width: scale * this.heartWidth,
                            opacity: scale
                        });
                    }

                    setInterval($.proxy(this.draw, this), 30);
                }
            };

            $(document).ready(function () {
                // HeartsBackground.initialize();
            });
            function draw() {
                var canvas = document.getElementById('canvas');
                if (canvas.getContext) {
                    var context = canvas && canvas.getContext && canvas.getContext("2d");
                    if (context) {
                        drawHeart(context);
                    }
                }
            }
            function drawHeart(context) {
                var radians = 0;
                var posX = 250;
                var posY = 130;

                // baseLen is essentially a scale indicator
                // e.g. length of the *square* part of a heart
                var baseLen = 100;

                context.save();

                // this moves origin 0,0 to our desired location
                context.translate(posX, posY);

                // optional: use context.rotate(0) to visualize
                // how we're drawing the heart using a square
                // and two half-circles
                context.rotate(4);

                // We want a pinkish heart.
                context.fillStyle = "#f36d9c";

                // puts the 2d drawing context into drawing mode
                context.beginPath();
                context.moveTo(-baseLen, 0);
                context.arc(0, 0, baseLen, 0, Math.PI, false);
                context.lineTo(baseLen, 0);
                context.arc(baseLen, -baseLen, baseLen, Math.PI * 90 / 180, Math.PI * 270 / 180, true);
                context.lineTo(baseLen, -baseLen * 2);
                context.lineTo(-baseLen, -baseLen * 2);
                context.lineTo(-baseLen, 0);

                // Fill the heart
                context.fill();

                // tells 2d drawing context we're done drawing
                context.closePath();

                // restores canvas state (e.g. origin and other settings)
                context.restore();
            }
        </script>
    </head>
    <body onload="draw()">


        <div class="container">

            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <br>
                    <!-- <h1>NEW LEAF</h1> -->


                    <h2>Page Not Found</h2>

                    <p>Well, this is embarrassing.
                        <br>
                    </p>

                    <div style="text-align: center">
                        <canvas id="canvas" width="360" height="400"></canvas>
                        <div class="overheader">404</div>
                    </div>

                </div>

            </div>


        </div>

    </body>
</html>