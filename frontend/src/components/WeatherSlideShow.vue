<template>
  <div>
    <div class="w-full slideshow-container">
      <div class="mySlides fade">
        <img
          src="../../images/rainy-monsoon-bg.jpg"
          style="width: 1000px; height: 600px"
        />
        <div
          class="p-2 text-xl font-bold bg-black bg-opacity-50 md:text-2xl text"
        >
          Rainy Monsoon
        </div>
      </div>

      <div class="mySlides fade">
        <img
          src="../../images/sun-sky-bg.jpg"
          style="width: 1000px; height: 600px"
        />
        <div
          class="p-2 text-xl font-bold bg-black bg-opacity-50 md:text-2xl text"
        >
          Sun Rise
        </div>
      </div>

      <div class="mySlides fade">
        <img
          src="../../images/thunderstorm-bg.jpg"
          style="width: 1000px; height: 600px"
        />
        <div
          class="p-2 text-xl font-bold bg-black bg-opacity-50 md:text-2xl text"
        >
          Thunder Storm Sky
        </div>
      </div>

      <div class="mySlides fade">
        <img
          src="../../images/weather-cloud-bg.jpg"
          style="width: 1000px; height: 600px"
        />
        <div
          class="p-2 text-xl font-bold bg-black bg-opacity-50 md:text-2xl text"
        >
          Clear Cloudy Sky Weather
        </div>
      </div>

      <a class="prev" @click="plusSlides(-1)">❮</a>
      <a class="next" @click="plusSlides(1)">❯</a>
    </div>
    <br />

    <!-- <div style="text-align: center">
      <span class="dot" @click="currentSlide(1)"></span>
      <span class="dot" @click="currentSlide(2)"></span>
      <span class="dot" @click="currentSlide(3)"></span>
      <span class="dot" @click="currentSlide(4)"></span>
    </div> -->
  </div>
</template>

<script>
export default {
  data() {
    return {
      slideIndex: 1,
      myIndex: 0,
    };
  },

  mounted() {
    this.showSlides(this.slideIndex);
    this.carousel();
  },

  methods: {
    carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");

      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      this.slideIndex++;
      if (this.slideIndex > x.length) {
        this.slideIndex = 1;
      }
      // for (i = 0; i < dots.length; i++) {
      //   dots[i].className = dots[i].className.replace(" active", "");
      // }
      // dots[this.slideIndex - 1].className += " active";
      x[this.slideIndex - 1].style.display = "block";
      setTimeout(this.carousel, 2000);
    },

    plusSlides(n) {
      this.showSlides((this.slideIndex += n));
    },

    currentSlide(n) {
      this.showSlides((this.slideIndex = n));
    },

    showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {
        this.slideIndex = 1;
      }
      if (n < 1) {
        this.slideIndex = slides.length;
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      // for (i = 0; i < dots.length; i++) {
      //   dots[i].className = dots[i].className.replace(" active", "");
      // }
      slides[this.slideIndex - 1].style.display = "block";
      // dots[this.slideIndex - 1].className += " active";
    },
  },
};
</script>

<style scoped>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}
.mySlides {
  display: none;
}
img {
  vertical-align: middle;
}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active,
.dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {
    opacity: 0.4;
  }
  to {
    opacity: 1;
  }
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev,
  .next,
  .text {
    font-size: 11px;
  }
}
</style>
