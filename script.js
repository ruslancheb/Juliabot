//AJAX
/* Создание нового объекта XMLHttpRequest для общения с Web-сервером */
var save=0;
var saver='';
var savob='';
var savo='';
var xmlHttp = new XMLHttpRequest();
function callServer() {
  var t = document.getElementById('t').value;
  var v = document.getElementById('v').value;
  // Создать URL для подключения
  var url = "ajax.php";
  var params = "ns="+escape(savo)+"&t="+escape(t)+"&v="+escape(v);
    // Открыть соединение с сервером
xmlHttp.open("POST",url,true);
    // Установить функцию для сервера, которая выполнится после его ответа
xmlHttp.onreadystatechange = updatePage;
  //Send the proper header information along with the request
xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlHttp.setRequestHeader("Content-length", params.length);
xmlHttp.setRequestHeader("Connection", "close");
  // Передать запрос
  xmlHttp.send(params);
}
function updatePage() {
  if (xmlHttp.readyState == 4) {
    var response = xmlHttp.responseText;
    document.getElementById('nperv').innerHTML = response;
	save=0;savob.innerHTML=saver;
  }
}
//Редатирование текста 
function f(th) 
{
var a=document.getElementById(th);
savob=a;
savo=th;
if(save==0){
save=1;
saver=a.innerHTML;
a.innerHTML=a.innerHTML+'<select id="t"><option value="1">СУ</option><option value="2">ГЛ</option><option value="3">ПР</option><option value="4">ЧИ</option><option value="5">МЕ</option><option value="6">ПР</option><option value="7">НА</option><option value="8">ВО</option><option value="9">ПР</option><option value="10">ДЕ</option><option value="11">ЧА</option></select><select id="v"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option></select><img onClick="callServer();" src="grafika/knopka.jpg"></img>';
}
else
{
save=0;
a.innerHTML=saver;
}
}


