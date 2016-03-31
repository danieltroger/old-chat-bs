

<form method="post" id="myf" action="../../post.php">
<input type="hidden" name="para" value="938764518597326981" />
<textarea name="ett" onkeyup="document.getElementById('tv2').value=(this.value);" onkeypress="document.getElementById('tv2').value=(this.value);" onkeydown="document.getElementById('tv2').value=(this.value);" placeholder="skriv h&auml;r" id="ip" cols="30" rows="9"></textarea>
<input type="hidden" name="name" value="uett/chatt.htm" />
<input type="hidden" name="ud" value="uett/" />
<textarea name="tva" onkeyup="ta22.value=(this.value);" onkeypress="ta22.value=(this.value);" onkeydown="ta22.value=(this.value);" style="display:none;" placeholder="partner" cols="30" rows="9"></textarea>
<br />
<input type="button" value="send" onclick="send();" />
</form>

<form method="post" target="_blank" style="display:none;" id="myf2" action="../../post.php">
<input type="hidden" name="close" value="close" />
<input type="hidden" id="p"  name="para" value="938764518597326981" />
<textarea name="ett" id="ip2" cols="30" rows="9"></textarea>
<input type="hidden" id="n" name="name" value="utva/chatt.htm" />
<input type="hidden" id="u" name="ud" value="utva/" />
<textarea name="tva"  id="tv2" cols="30" rows="9"></textarea>

</form>

<script>
setTimeout("allaa();",50);
var aa=1;
function allaa()
{
    if(aa == 1)
    {
        document.getElementById("ip").focus();
    }
}
function bu()
{
    aa=2;
    allaa();
}
function r()
{
    aa=1;
    allaa();
}
function send()
{
   // setTimeout("document.getElementById('myf2').submit();",0);
    var msg1=document.getElementById("ip2").value;
    var msg1=encodeURIComponent(msg1);
    var msg2=document.getElementById("tv2").value;
    var msg2=encodeURIComponent(msg2);
    var para=document.getElementById("p").value;
    var para=encodeURIComponent(para);
    var ud=document.getElementById("u").value;
    ud=encodeURIComponent(ud);
    var name=document.getElementById("n").value;
    name=encodeURIComponent(name);
    var varstr="ett="+msg1+"&tva="+msg2+"&para="+para+"&ud="+ud+"&name="+name;
    http("GET","../../post.php?"+varstr);
}
var ta2=document.getElementById('tv2');
var ta22=document.getElementById('ip2');
function http(met,adr) { if(met == "GET") { var d=new Date; } var xmlhttp = null;   if (window.XMLHttpRequest) { xmlhttp = new XMLHttpRequest(); }  else if (window.ActiveXObject) {  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } xmlhttp.open(met, adr, true); xmlhttp.onreadystatechange = function() { if(xmlhttp.readyState == 4 && xmlhttp.status == 200) { setTimeout("document.getElementById('myf').submit();",500); } }
    xmlhttp.send(null);  }  
</script>

<!--<form method="post" action="http://localhost/nytt/annat.php">
<input type="hidden" name="para" value="938764518597326981" />
<textarea name="ett" placeholder="jag" cols="50" rows="9"></textarea>

<textarea name="tva" placeholder="partner" cols="50" rows="9"></textarea>
<br />
<input type="submit" value="send" />
</form>-->