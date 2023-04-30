<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="message.css">
  <title>Message us</title>
</head>
<body>

  <div class="container">

    <section class="tools-menu">

      <div class="row">
        <label class="title">Shapes</label>

        <ul class="options">
          <li class="option tool" id="rectangle">
            <img src="/chess-OnServer/site/!sources/img_svg/rectangle.svg" alt="">
            <span>Rectangle</span>
          </li>
          <li class="option tool" id="circle">
            <img src="/chess-OnServer/site/!sources/img_svg/circle.svg" alt="">
            <span>Circle</span>
          </li>
          <li class="option tool" id="triangle">
            <img src="/chess-OnServer/site/!sources/img_svg/Triangle.svg" alt="">
            <span>Triangle</span>
          </li>
          <li class="option">
            <input type="checkbox" id="fill-color">
            <label for="fill-color">Fill color</label>
          </li>
        </ul>
      </div>

      <div class="row">
        <label class="title">Options</label>
        <ul class="options">
          <li class="option tool active" id="brush">
            <img src="/chess-OnServer/site/!sources/img_svg/brush.svg" alt="">
            <span>Brush</span>
          </li>
          <li class="option tool" id="eraser">
            <img src="/chess-OnServer/site/!sources/img_svg/eraser.svg" alt="">
            <span>Eraser</span>
          </li>
          <li class="option">
            <input type="range" id="slider" min="1" max="30" value="5">
          </li>
        </ul>
      </div>

      <div class="row colors">
        <label class="title">Colors</label>
        <ul class="options">
          <li class="option selected"></li>
          <li class="option"></li>
          <li class="option"></li>
          <li class="option"></li>
          <li class="option">
            <input type="color" id="color-picker" value="#136f63">
          </li>
        </ul>
      </div>

      <div class="row buttons">
        <button class="clear" onclick="deleteCanv()">Clear Canvas</button>
        <button class="save" onclick="downlaod()">Save As Image</button>
        <button class="clear" onclick="send()">Send draw</button>
      </div>
    </section>
    <section class="drawing-board">
      <canvas></canvas>
    </section>
  </div>

  <script src="message.js"></script>
</body>
</html>