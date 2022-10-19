<?php include("Persona.php"); ?>


<li><?php $persona1 = new Persona("Juan", 20, 12345678, "M", 80, 1.80); ?></li>
<li><?php echo $persona1->getNombre(); ?></li>
<li><?php echo $persona1->getEdad(); ?></li>
<li><?php echo $persona1->getCi(); ?></li>