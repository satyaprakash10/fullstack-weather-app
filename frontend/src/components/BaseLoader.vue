<template>
  <div><div id="loader" v-show="loader"></div></div>
</template>

<script>
export default {
  data() {
    return {
      myVar: "",
      loader: true,
    };
  },

  mounted() {
    // this.myFunction();
  },

  methods: {
    myFunction() {
      // this.myVar = setTimeout(this.showPage, 3000);
    },

    showPage() {
      this.loader = false;
      // clearTimeout(this.myVar);
    },
  },
};
</script>

<style>
/* Center the loader */
#loader {
  z-index: 1;
  width: 30px;
  height: 30px;
  border: 8px solid rgb(179, 179, 179);
  border-radius: 50%;
  border-top: 8px solid #3498db;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
  }
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s;
}

@-webkit-keyframes animatebottom {
  from {
    bottom: -100px;
    opacity: 0;
  }
  to {
    bottom: 0px;
    opacity: 1;
  }
}

@keyframes animatebottom {
  from {
    bottom: -100px;
    opacity: 0;
  }
  to {
    bottom: 0;
    opacity: 1;
  }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>
