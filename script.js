//AJAX
/* �������� ������ ������� XMLHttpRequest ��� ������� � Web-�������� */
var save=0;
var saver='';
var savob='';
var savo='';
var xmlHttp = new XMLHttpRequest();
function callServer() {
  var t = document.getElementById('t').value;
  var v = document.getElementById('v').value;
  // ������� URL ��� �����������
  var url = "ajax.php";
  var params = "ns="+escape(savo)+"&t="+escape(t)+"&v="+escape(v);
    // ������� ���������� � ��������
xmlHttp.open("POST",url,true);
    // ���������� ������� ��� �������, ������� ���������� ����� ��� ������
xmlHttp.onreadystatechange = updatePage;
  //Send the proper header information along with the request
xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlHttp.setRequestHeader("Content-length", params.length);
xmlHttp.setRequestHeader("Connection", "close");
  // �������� ������
  xmlHttp.send(params);
}
function updatePage() {
  if (xmlHttp.readyState == 4) {
    var response = xmlHttp.responseText;
    document.getElementById('nperv').innerHTML = response;
	save=0;savob.innerHTML=saver;
  }
}
//������������� ������ 
function f(th) 
{
var a=document.getElementById(th);
savob=a;
savo=th;
if(save==0){
save=1;
saver=a.innerHTML;
a.innerHTML=a.innerHTML+'<select id="t"><option value="1">��</option><option value="2">��</option><option value="3">��</option><option value="4">��</option><option value="5">��</option><option value="6">��</option><option value="7">��</option><option value="8">��</option><option value="9">��</option><option value="10">��</option><option value="11">��</option></select><select id="v"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select><img onClick="callServer();" src="grafika/knopka.jpg"></img>';
}
else
{
save=0;
a.innerHTML=saver;
}
}


