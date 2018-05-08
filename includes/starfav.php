<div class="Fav">
  <input id="fav-checkbox" class="Fav-checkbox" type="checkbox">
  <label for="fav-checkbox" class="Fav-label"><span class="Fav-label-text">Favourite</span></label>
  <div class="Fav-bloom"></div>
  <div class="Fav-sparkle">
    <div class="Fav-sparkle-line"></div>
    <div class="Fav-sparkle-line"></div>
    <div class="Fav-sparkle-line"></div>
    <div class="Fav-sparkle-line"></div>
    <div class="Fav-sparkle-line"></div>
  </div>
  <svg class="Fav-star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
    <title>Star Icon</title>
    <path d="M36.14,3.09l5.42,17.78H59.66a4.39,4.39,0,0,1,2.62,7.87L47.48,40.14,53,58.3a4.34,4.34,0,0,1-6.77,4.78L32,52l-14.26,11A4.34,4.34,0,0,1,11,58.27l5.55-18.13L1.72,28.75a4.39,4.39,0,0,1,2.62-7.87h18.1L27.86,3.09A4.32,4.32,0,0,1,36.14,3.09Z"/>
  </svg>
</div>

<style type="text/css">
.Fav {
  position: relative;
  width: 100px;
  height: 100px;
  cursor: pointer;
}

.Fav-checkbox {
  position: absolute;
  z-index: -1;
  opacity: 0;
}
.Fav-checkbox:checked ~ .Fav-bloom {
  -webkit-animation: background 0.5s ease both;
          animation: background 0.5s ease both;
}
.Fav-checkbox:checked ~ .Fav-sparkle .Fav-sparkle-line::before {
  -webkit-animation: line 1s ease both;
          animation: line 1s ease both;
}
.Fav-checkbox:checked ~ .Fav-star {
  -webkit-animation: star 1s ease both;
          animation: star 1s ease both;
}

.Fav-label {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 2;
}

.Fav-label-text {
  position: absolute;
  left: -10000px;
  top: auto;
  width: 1px;
  height: 1px;
  overflow: hidden;
}

.Fav-bloom {
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  border-radius: 50%;
  border-width: 0;
  border-style: solid;
  border-color: #ffa624;
  will-change: border-width;
}

.Fav-sparkle-line {
  position: absolute;
  width: 100%;
  height: 100%;
}
.Fav-sparkle-line::before {
  position: absolute;
  z-index: 1;
  top: 30%;
  width: 4px;
  height: 0;
  left: calc(50% - 2px);
  border-radius: 2px;
  background: #fa733e;
  will-change: top, height;
  content: "";
}
.Fav-sparkle-line:nth-child(1) {
  -webkit-transform: rotate(40deg);
          transform: rotate(40deg);
}
.Fav-sparkle-line:nth-child(2) {
  -webkit-transform: rotate(110deg);
          transform: rotate(110deg);
}
.Fav-sparkle-line:nth-child(3) {
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}
.Fav-sparkle-line:nth-child(4) {
  -webkit-transform: rotate(250deg);
          transform: rotate(250deg);
}
.Fav-sparkle-line:nth-child(5) {
  -webkit-transform: rotate(320deg);
          transform: rotate(320deg);
}

.Fav-star {
  z-index: 1;
  padding: 18px;
  width: 100%;
  height: 100%;
  fill: #dee0e0;
}

@-webkit-keyframes line {
  0% {
    top: 30%;
    height: 0;
  }
  40% {
    opacity: 1;
    height: 14px;
  }
  100% {
    opacity: 0;
    top: 10%;
    height: 0;
  }
}

@keyframes line {
  0% {
    top: 30%;
    height: 0;
  }
  40% {
    opacity: 1;
    height: 14px;
  }
  100% {
    opacity: 0;
    top: 10%;
    height: 0;
  }
}
@-webkit-keyframes star {
  0% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  20% {
    fill: #ffac33;
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  30% {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  60% {
    -webkit-transform: scale(1.1);
            transform: scale(1.1);
  }
  70% {
    -webkit-transform: scale(0.9);
            transform: scale(0.9);
  }
  100% {
    fill: #ffac33;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@keyframes star {
  0% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  20% {
    fill: #ffac33;
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  30% {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  60% {
    -webkit-transform: scale(1.1);
            transform: scale(1.1);
  }
  70% {
    -webkit-transform: scale(0.9);
            transform: scale(0.9);
  }
  100% {
    fill: #ffac33;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@-webkit-keyframes background {
  0% {
    border-width: 50px;
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  90% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  100% {
    border-width: 0;
  }
}
@keyframes background {
  0% {
    border-width: 50px;
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  90% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  100% {
    border-width: 0;
  }
}
*,
*::before,
*::after {
  box-sizing: border-box;
}

html,
body {
  height: 100%;
  margin: 0;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background: #f6fafc;
  font-family: Helvetica, Arial, sans-serif;
}

.Caption {
  color: #ffac33;
}

</style>