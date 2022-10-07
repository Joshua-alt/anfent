function impression()
{
	var el = document.getElementById("imprimer"),
	WinPrint = window.open('', '', 'letf=0,top=0,toolbar=0,scrollbars=0,status=0');
	WinPrint.document.write(el.innerHTML);
	WinPrint.document.close();
	WinPrint.focus();
	WinPrint.print();
	WinPrint.close();
	
}