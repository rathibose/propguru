<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html><head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">

<!--Form For getting input and Display Results-->

<title>numberdisplay</title>

</head>
<body>
<form name="numdisplay" id="numdisplay" method="get">
<table style="text-align: left; width: 604px; height: 149px;" border="1" cellpadding="2" cellspacing="2">
 <tbody>
      <tr>
        <td colspan="2" rowspan="1" style="vertical-align: top; width: 292px;">Enter range of numbers to
display<br>
        </td>
      </tr>
      <tr>
        <td style="vertical-align: top; width: 292px;">From : <input name="txtfrom" id="txtfrom"></td>
        <td style="vertical-align: top; width: 292px;">To : <input name="txtto" id="txtto"><br></td>
      </tr>
      <tr align="center">
        <td colspan="2" rowspan="1" style="vertical-align: top; width: 292px;"><input name="submit" value="Display" onclick="loadXMLDoc()" type="button"><br>
        </td>
      </tr>
      <tr>
        <td colspan="2" rowspan="1" style="vertical-align: top; width: 292px;" id="resp"><br>
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <br>
</form>
</body></html>
