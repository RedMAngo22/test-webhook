<?pphp
if _SERVER['REQUEST_METHOD'] == 'POST':
	with open(__server__.root+'/test.txt', 'w') as f:
		f.write(str(_POST))
?>
