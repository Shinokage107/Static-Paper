function generateToken(link_id) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("genToken").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","parts/genToken.php?link_id="+link_id,true);
    xmlhttp.send();
  }