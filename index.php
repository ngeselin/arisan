<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
</head>
<body>
  <button onclick="arisan()">Kocok</button>
  <label id="user"></label>
<script>
var user  = [
    			'Anna',
				'Annisa',
				'Nurin',
				'Intan',
				'Feryal',
				'NFHO',
				'nadya',
				'Ruslan No Limit',
				'Irvan',
				'Winda',
				'BEBEN',
				'Lia',
				'wulan',
				'silvi',
				'Yeye',
				'Irvan Maul',
				'Yeni',
				'Ai',
				'Naura',
				'Rizki'
			],
    save  = user;
function arisan(){
  if(user.length > 1){
	index = Math.floor(Math.random() * user.length);
    document.getElementById('user').innerHTML = user.splice(index,1);
  }else{
    document.getElementById('user').innerHTML = "The End";
  }
}
</script>
</body>
</html>
