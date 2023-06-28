<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<link rel="stylesheet"  href="style/css/estilos.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FormConteo de palabras</title>
	
</head>
<body style="background-color:rgb(163, 238, 234)">

    Ingresa el texto a contar
    <br><br>
    <input type="text" id="cadena" name="cadena">
    <br><br><br><br>
    conteo
    <br><br>
    <input type="text" id="resultado" name="resultado" readonly>
    <input type="text" id="resultado1" name="resultado1" readonly>
    <input type="text" id="resultado2" name="resultado2" readonly>
    <button type="button" onclick="conteo()" name="comparar">Contar</button>
</body>
</html>

<script>
 function conteo(){
    let initialText = document.getElementById("cadena").value;

    let textArray = initialText.split(' ');

    let wordsList = {};

    textArray.forEach(function(word){
    word=clearString(word);
    if(wordsList[word]){
    wordsList[word] += 1;
    }else {
    wordsList[word] = 1;
    }
    });

    let wordsListSize = Object.keys(wordsList).length;
    
    document.getElementById("resultado").value = wordsListSize;
    document.getElementById("resultado1").value = ("hay" + wordsListSize + "palabras");
    document.getElementById("resultado2").value = ("hay" + textArray.length + "palabras2");

     console.log(wordsList);
     console.log("hay" + wordsListSize + "palabras");
     console.log("hay" + textArray.length + "palabras2");

    function clearString(string){
        let replace = string.toLowerCase().replace(/[,.!;]/g, '');
        return replace;
    }


 }
</script>