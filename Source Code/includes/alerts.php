<!---Alerts-->
<div class="alert" id="alert">
  <span class="closebtn">&times;</span>  
  <strong>Error!</strong>
</div>

<div class="alert success" id="alert success">
  <span class="closebtn">&times;</span>  
  <strong>Success!</strong>
</div>

<div class="alert info" id="alert info">
  <span class="closebtn">&times;</span>  
  <strong>Info!</strong>
</div>

<div class="alert warning" id="alert warning">
  <span class="closebtn">&times;</span>  
  <strong>Warning!</strong>
</div>

<script>
var close = document.getElementsByClassName("closebtn");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>