<?php
function test($test)
{
global $nero;
echo '<!--����������� �������� ����������--><div style="position:absolute;top:'.$nero.'0;left:0;z-index:1;background-color:yellow;color:black;" >';
if (is_array($test)){print_r($test);}
elseif(is_object($test)){echo '��� ������';}
else{echo $test;};
echo '</div>';
$nero++;
$nero++;
//echo __LINE__;
};
//������ ������� ���������� ����
error_reporting(0);
set_time_limit (100000);
$db=mysql_connect("localhost","root","");
mysql_select_db("system",$db);

$t=$_POST['ty'];
$rod=$_POST['rod'];
$k=strtolower(trim($_POST['slovo']));
$v=$_POST['sk'];
$print=mysql_fetch_array(mysql_query("SELECT * FROM slova_korni_typ WHERE k='".$k."' AND t='".$t."';"));
if(empty($print['k']))
{
$query="INSERT INTO slova_korni_typ (k,rod,t,v) VALUES ('$k','$rod','$t','$v')";
echo '��������';
if(strlen($k)>0)$utr=mysql_query($query);
}
else
{
echo '����� ����� ��� ����';
};
?>
<table><td>
<form method="post" action="dslovo.php"  >
<br>
<input type="text" name="slovo" size=8 maxlength=20><b>�����</b><br>
<!--��� --><h3>��� �����</h3>
<input type="checkbox" name="ty" value="1"><b>��������������� (�������)</b><br>
<input type="checkbox" name="ty" value="2"><b>������ (��������)</b><br>
<input type="checkbox" name="ty" value="3"><b>�������������� (��������)</b><br>
<input type="checkbox" name="ty" value="4"><b>������������ (�����)</b><br>
<input type="checkbox" name="ty" value="5"><b>����������� (����)</b><br>
<input type="checkbox" name="ty" value="6"><b>������� (�����)</b><br>
<input type="checkbox" name="ty" value="7"><b>������� (��������������)</b><br>
<input type="checkbox" name="ty" value="8"><b>������</b><br>
</td><td>
<!--��������� --><h3>C��������</h3>
<input type="checkbox" name="sk" value="0"><b>������ (����)</b><br>
<input type="checkbox" name="sk" value="1"><b>������</b><br>
<input type="checkbox" name="sk" value="2"><b>������</b><br>
<input type="checkbox" name="sk" value="3"><b>������</b><br>
<input type="checkbox" name="sk" value="4"><b>��������</b><br>
<input type="checkbox" name="sk" value="5"><b>�����</b><br>
<input type="checkbox" name="sk" value="6"><b>������</b><br>
<input type="checkbox" name="sk" value="7"><b>�������</b><br>
<input type="checkbox" name="sk" value="8"><b>�������</b><br>
</td><td>
<!--��������� --><h3>���</h3>
<input type="checkbox" name="rod" value="m"><b>�������</b><br>
<input type="checkbox" name="rod" value="f"><b>�������</b><br>
<input type="checkbox" name="rod" value="n"><b>�������</b><br>
</td><td>
<input type="submit" value="���������">

</form>
</td>
</table>
<b>���������������</b><br>
<table border="1" cellpadding="3" cellspacing="1" width="80%">
<tbody>
<tr>
<td valign="top" width="5%">&nbsp;</td><td valign="top" width="4%">&nbsp;</td>
<td valign="top" width="8%"><b><font face="Times New Roman Cyr"></font></b><p align="center"><b><font face="Times New Roman Cyr">������</font></b><font face="Times New Roman Cyr"></font></p></td>
<td colspan="2" valign="top" width="14%"><b><font face="Times New Roman Cyr"></font></b><p align="center"><b><font face="Times New Roman Cyr">�� <br>���? ���?</font></b><font face="Times New Roman Cyr"></font></p></td>
<td colspan="2" valign="top" width="12%"><b><font face="Times New Roman Cyr"></font></b><p align="center"><b><font face="Times New Roman Cyr">���<br>����? ����?</font></b><font face="Times New Roman Cyr"></font></p></td>
<td colspan="2" valign="top" width="13%"><b><font face="Times New Roman Cyr"></font></b><p align="center"><b><font face="Times New Roman Cyr">���<br>����? ����?</font></b><font face="Times New Roman Cyr"></font></p></td>
<td colspan="2" valign="top" width="14%"><b><font face="Times New Roman Cyr"></font></b><p align="center"><b><font face="Times New Roman Cyr">���<br>����? ���?</font></b><font face="Times New Roman Cyr"></font></p></td>
<td colspan="2" valign="top" width="15%"><b><font face="Times New Roman Cyr"></font></b><p align="center"><b><font face="Times New Roman Cyr">����<br>���? ���?</font></b><font face="Times New Roman Cyr"></font></p></td>
<td colspan="2" valign="top" width="15%"><b><font face="Times New Roman Cyr"></font></b><p align="center"><b><font face="Times New Roman Cyr">����<br>� ���? � ���?</font></b><font face="Times New Roman Cyr"></font></p></td>
</tr>
<tr>
<td valign="top" width="5%">&nbsp;</td><td valign="top" width="4%">&nbsp;</td><td valign="top" width="8%">&nbsp;</td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">��</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">��</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">��</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">��</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">��</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">��</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">��</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">��</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">��</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">��</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">��</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">��</font></p></td>
</tr>
<tr>
<td valign="top" width="5%">1</td><td valign="top" width="4%"><font face="Times New Roman Cyr">�</font></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">���-</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�<br>-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�<br>-�</font></p></td>
<td valign="top" width="6%"><p align="center">-<font face="Symbol">�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><p align="center">-<font face="Symbol">�</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-���</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
</tr>
<tr>
<td valign="top" width="5%">2</td><td valign="top" width="4%"><font face="Times New Roman Cyr">�</font></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">���-</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><p align="center">-<font face="Symbol">�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-���</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
</tr>
<tr>
<td valign="top" width="5%">3</td><td valign="top" width="4%"><font face="Times New Roman Cyr">�</font></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">���-,<br> ���-</font></p></td>
<td valign="top" width="8%"><p align="center">-<font face="Symbol">�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�,<br>-�<br>-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
<td valign="top" width="8%"><p align="center">-<font face="Symbol">�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-���</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
</tr>
<tr>
<td valign="top" width="5%">4</td><td valign="top" width="4%"><font face="Times New Roman Cyr">�</font></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">���-</font></p></td>
<td valign="top" width="8%"><p align="center">-<font face="Symbol">�</font><font face="Times New Roman Cyr">(�)</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
<td valign="top" width="8%"><p align="center">-<font face="Symbol">�</font><font face="Times New Roman Cyr">(�)</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-���</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
</tr>
<tr>
<td valign="top" width="5%">5</td><td valign="top" width="4%"><font face="Times New Roman Cyr">�</font></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">����-</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><p align="center">-<font face="Symbol">�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-���</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
</tr>
<tr>
<td valign="top" width="5%">6</td><td valign="top" width="4%"><font face="Times New Roman Cyr">�</font></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">���-</font></p></td>
<td valign="top" width="8%"><p align="center">-e</p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-���</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
</tr>
<tr>
<td valign="top" width="5%">7</td><td valign="top" width="4%"><font face="Times New Roman Cyr">�</font></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">���-</font></p></td>
<td valign="top" width="8%"><p align="center">-<font face="Symbol">�</font><font face="Times New Roman Cyr">(�)</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
<td valign="top" width="8%"><p align="center">-<font face="Symbol">�</font><font face="Times New Roman Cyr">(�)</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-���</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
</tr>
<tr>
<td valign="top" width="5%">8</td><td valign="top" width="4%"><font face="Times New Roman Cyr">�</font></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">���-</font></p></td>
<td valign="top" width="8%"><p align="center">-<font face="Symbol">�</font><font face="Times New Roman Cyr">(�)</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
<td valign="top" width="8%"><p align="center">-<font face="Symbol">�</font><font face="Times New Roman Cyr">(�)</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-���</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-�</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-��</font></p></td>
</tr>
</tbody>
</table>
<b>�������</b><br>
<table cellspacing="0" cellpadding="10" border="1" bordercolor="#000000">
								<tr>
									<td width="177" valign="top" colspan="2" align="center">

									<font face="Arial" size="2">
									<span lang="EN-US">I </span><span>���������</span></font></td>
									<td width="166" valign="top" colspan="2" align="center">
									<font face="Arial" size="2">
									<span lang="EN-US">II </span><span>���������</span></font></td>
								</tr>
								<tr>

									<td width="63" valign="top" align="center">
									<font face="Arial" size="2"><span>-�[13] (-�)[24]</span></font></td>
									<td width="114" valign="top" align="center">
									<p align="center">
									<font face="Arial" size="2"><span>-��</span></font></p>
									</td>
									<td width="71" valign="top" align="center">
									<font face="Arial" size="2"><span>-�(-�)</span></font></td>

									<td width="95" valign="top" align="center">
									<font face="Arial" size="2"><span>-��</span></font></td>
								</tr>
								<tr>
									<td width="63" valign="top" align="center">
									<font face="Arial" size="2"><span>-���</span></font></td>
									<td width="114" valign="top" align="center">
									<p align="center">

									<font face="Arial" size="2"><span>-���</span></font></p>
									</td>
									<td width="71" valign="top" align="center">
									<font face="Arial" size="2"><span>-���</span></font></td>
									<td width="95" valign="top" align="center">
									<font face="Arial" size="2"><span>-���</span></font></td>
								</tr>

								<tr>
									<td width="63" valign="top" align="center">
									<font face="Arial" size="2"><span>-��</span></font></td>
									<td width="114" valign="top" align="center">
									<p align="center">
									<font face="Arial" size="2"><span>-�� (-��)[12]</span></font></p>
									</td>
									<td width="71" valign="top" align="center">

									<font face="Arial" size="2"><span>-��</span></font></td>
									<td width="95" valign="top" align="center">
									<font face="Arial" size="2"><span>-��(-��)[34]</span></font></td>
								</tr>
							</table>
							<br>
�������������� 1)-�� 2) -�� -��