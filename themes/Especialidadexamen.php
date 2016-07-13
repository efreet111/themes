<html> 
<head> 

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">


    <script type="text/javascript"> 
    function pasar() { 
        obj=document.getElementById('sel1'); 
        if (obj.selectedIndex==-1) return; 
        valor=obj.value; 
        txt=obj.options[obj.selectedIndex].text; 
        obj.options[obj.selectedIndex]=null; 
        obj2=document.getElementById('sel2'); 
        opc = new Option(txt,valor); 
        eval(obj2.options[obj2.options.length]=opc);     
    } 
    function retornar() { 
        obj=document.getElementById('sel2'); 
        if (obj.selectedIndex==-1) return; 
        valor=obj.value; 
        txt=obj.options[obj.selectedIndex].text; 
        obj.options[obj.selectedIndex]=null; 
        obj2=document.getElementById('sel1'); 
        opc = new Option(txt,valor); 
        eval(obj2.options[obj2.options.length]=opc);     
    } 
    </script> 
</head> 

<body> 
<div class="well  text-center"> Especialidad Examen </div>
<form action="#" method="post">
       

        <div class="row text-center" style="width:100%">
                    <div class="col-lg-3" id="columna1">
                        <select id="sel1" size="5"> 
                        <option value="1">Uno</option> 
                        <option value="2">Dos</option> 
                        <option value="3">Tres</option> 
                        <option value="4">Cuatro</option> 
                        <option value="5">Cinco</option> 
                        </select>    
                    </div>
                    <div class="col-lg-3" id="columna2">
                        <input type="button" value="Pasar" onClick="pasar()"> 
                        <input type="button" value="retornar" onClick="retornar()"> 
                    </div>
                    <div class="col-lg-3" id="columna3">
                        <select id="sel2" size="5"> 
                        </select>
                    </div>
        </div>

        <div class="row text-left" style="width:100%">
            <label for="Costototal">Costo total</label>
            <input type="number" name="Costototal">
        </div>
        
        <div class="row text-left" style="width:100%">
               <div class="col-lg-2">
                    <label for="Sede">Sede</label>
                      <select name="Sde" size="1" id="Cede">
                        <option value="Sede1">Sede1</option>
                        <option value="Sede2">Sede2</option>
                        <option value="Sede3">Sede3</option>
                        <option value="Sede4">Sede4</option>
                      </select>
                </div>
                <div class="col-lg-2">
                    <label for="Medico">Medico</label>
                        <select name="Medico" size="1">
                            <option value="Medico">Medico1</option>
                            <option value="Medico">Medico2</option>
                            <option value="Medico3">Medico3</option>
                            <option value="Medico4">Medico4</option>
                        </select>
                </div>
        </div>
</form> 
 
</body> 
</html>  