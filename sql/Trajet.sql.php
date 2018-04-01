<?php
	

Trajet::addSqlQuery('TRAJET_CREATE','INSERT INTO trajet ( EMAIL,idType,HEUREDEPART,HEUREARRIVEE,longueur,NBPLACESLIBRES,MARGERETARD,PRIXPLACE) VALUES (:email,:idType,:heureDepart,:heureArrivee,:longueur,:nbPlacesLibres,:margeRetard,:prixPlace)');


?>