<!---Scroll at the top-->
<style>
#myBtnScroll {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 15px;
  border: none;
  outline: none;
  background-color: #45a29e;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 30px;
  scroll-behavior: smooth;
  transition: all .5s ease;
}
#myBtnScroll:hover {
  background-color: #3a807c;
}
</style>
<button onclick="topFunction()" id="myBtnScroll" title="Go to top">Top</button>

<script>
//Get the button
var mybutton = document.getElementById("myBtnScroll");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>