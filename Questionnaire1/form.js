// JavaScript Document
function copyTo(obj,that,theother) {
   document.getElementById(that).textContent= obj.value
   document.getElementById(theother).textContent= obj.value
}

function AddLanguage() {
	document.getElementById("cols").value=Number(document.getElementById("cols").value)+1;
	var x = Number(document.getElementById("cols").value);

	var table = document.getElementById("langList");
	var row = document.createElement("TR");
	var cell1 = row.insertCell(0);
	var cell2 = row.insertCell(1);
	cell1.innerHTML = ''+x+'.';
	cell2.innerHTML = '<input type="text" name="lang['+(x-1)+']" id="lang['+(x-1)+']" onkeyup="copyTo(this,\'l'+x+'a\',\'l'+x+'b\')"/>';
	table.appendChild(row);

	var table = document.getElementById("langPercents");
	var row = document.createElement("TR");
	var cell1 = row.insertCell(0);
	var cell2 = row.insertCell(1);
	cell1.innerHTML = '<label id="l'+x+'a"></label>';
	cell2.innerHTML = '<input type="text" name="langp['+(x-1)+']" id="" size="5"/>';
	table.appendChild(row);

	var row = document.getElementById("lbR");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<b><label id="l'+x+'b"></label></b>';

	var row = document.getElementById("aofeR");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="text" name="aofe['+(x-1)+']" id="" size="15" required />';

	var row = document.getElementById("noyeR");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="text" name="noye['+(x-1)+']" id="" size="15" required />';

	var row = document.getElementById("exposureR1");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="hidden" name="exposure1['+(x-1)+']" value="no" /><input type="checkbox" name="exposure1['+(x-1)+']" value="yes" />';

	var row = document.getElementById("exposureR2");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="hidden" name="exposure2['+(x-1)+']" value="no" /><input type="checkbox" name="exposure2['+(x-1)+']" value="yes" />';

	var row = document.getElementById("exposureR3");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="hidden" name="exposure3['+(x-1)+']" value="no" /><input type="checkbox" name="exposure3['+(x-1)+']" value="yes" />';

	var row = document.getElementById("exposureR4");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="hidden" name="exposure4['+(x-1)+']" value="no" /><input type="checkbox" name="exposure4['+(x-1)+']" value="yes" />';

	var row = document.getElementById("exposureR5");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="hidden" name="exposure5['+(x-1)+']" value="no" /><input type="checkbox" name="exposure5['+(x-1)+']" value="yes" />';

	var row = document.getElementById("exposureR6");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="hidden" name="exposure6['+(x-1)+']" value="no" /><input type="checkbox" name="exposure6['+(x-1)+']" value="yes" />';

	var row = document.getElementById("exposureR7");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="hidden" name="exposure7['+(x-1)+']" value="no" /><input type="checkbox" name="exposure7['+(x-1)+']" value="yes" />';

	var row = document.getElementById("yicR");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="text" name="yic['+(x-1)+']" id="" size="15" required />';


	var row = document.getElementById("profSpeakR5");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="radio" name="profSpeak['+(x-1)+']" value="5" required />';

	var row = document.getElementById("profSpeakR4");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="radio" name="profSpeak['+(x-1)+']" value="4" required />';

	var row = document.getElementById("profSpeakR3");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="radio" name="profSpeak['+(x-1)+']" value="3" required />';

	var row = document.getElementById("profSpeakR2");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="radio" name="profSpeak['+(x-1)+']" value="2" required />';

	var row = document.getElementById("profSpeakR1");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="radio" name="profSpeak['+(x-1)+']" value="1" required />';

	var row = document.getElementById("profWriteR5");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="radio" name="profWrite['+(x-1)+']" value="5" required />';

	var row = document.getElementById("profWriteR4");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="radio" name="profWrite['+(x-1)+']" value="4" required />';

	var row = document.getElementById("profWriteR3");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="radio" name="profWrite['+(x-1)+']" value="3" required />';

	var row = document.getElementById("profWriteR2");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="radio" name="profWrite['+(x-1)+']" value="2" required />';

	var row = document.getElementById("profWriteR1");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="radio" name="profWrite['+(x-1)+']" value="1" required />';

	var row = document.getElementById("profUSpeakR5");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="radio" name="profUSpeak['+(x-1)+']" value="5" required />';

	var row = document.getElementById("profUSpeakR4");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="radio" name="profUSpeak['+(x-1)+']" value="4" required />';

	var row = document.getElementById("profUSpeakR3");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="radio" name="profUSpeak['+(x-1)+']" value="3" required />';

	var row = document.getElementById("profUSpeakR2");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="radio" name="profUSpeak['+(x-1)+']" value="2" required />';

	var row = document.getElementById("profUSpeakR1");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="radio" name="profUSpeak['+(x-1)+']" value="1" required />';

	var row = document.getElementById("profUWriteR5");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="radio" name="profUWrite['+(x-1)+']" value="5" required />';

	var row = document.getElementById("profUWriteR4");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="radio" name="profUWrite['+(x-1)+']" value="4" required />';

	var row = document.getElementById("profUWriteR3");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="radio" name="profUWrite['+(x-1)+']" value="3" required />';

	var row = document.getElementById("profUWriteR2");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="radio" name="profUWrite['+(x-1)+']" value="2" required />';

	var row = document.getElementById("profUWriteR1");
	var cell = row.insertCell(-1);
	cell.innerHTML = '<input type="radio" name="profUWrite['+(x-1)+']" value="1" required />';

}
