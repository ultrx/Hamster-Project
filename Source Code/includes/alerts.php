<!---Alerts-->
<div class="alert" id="alert">
  <span class="closebtn">&times;</span>  
  <strong>Error!</strong>
</div>

<div class="alert" id="alertExists">
  <span class="closebtn">&times;</span>  
  <strong>User with the same Username already exists!</strong>
</div>

<div class="alert" id="alertExistsEmail">
  <span class="closebtn">&times;</span>  
  <strong>User with the same Email already exists!</strong>
</div>

<div class="alert success" id="alert success">
  <span class="closebtn">&times;</span>  
  <strong>Success!</strong>
</div>

<script>

const timeout = document.getElementById('alert');
  setTimeout(hideElement, 4000);
  function hideElement() {
    timeout.style.display = 'none';
  }
  const timeoutExists = document.getElementById('alertExists');
  setTimeout(hideElementExists, 4000);
  function hideElementExists() {
    timeoutExists.style.display = 'none';
  }
  const timeoutExistsEmail = document.getElementById('alertExistsEmail');
  setTimeout(hideElementExistsEmail, 4000);
  function hideElementExistsEmail() {
    timeoutExistsEmail.style.display = 'none';
  }
const timeoutSuccess = document.getElementById('alert success');
  setTimeout(hideElementSuccess, 4000);
  function hideElementSuccess() {
    timeoutSuccess.style.display = 'none';
  }
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