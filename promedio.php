<html>
<head>
<?php
class Promedio
{
public $suma = 0;
public $total = 0;
function pro(){
$Promedio = array (4.5,6.7,3.3,9.2,5.9,8.6,7.9,10.8,6.4,9.0,6.6,4.9,7.7,5.4,10.0,8.8,6.3,0.0,9.9,8.2);
for ($i=0; $i<count($Promedio); $i++){
$this->suma = $this->suma + $Promedio[$i];
echo "calificacion: ".$Promedio[$i]."<br />";
}
$this->total = $this->suma /4;
echo  "suma de calificaciones: ".$this->suma."<br />";
echo  "promedio general: ".$this->total."<br />";
}
}
$clase = new promedio;
$clase->pro();
?>
</body>                                                                 
</html>