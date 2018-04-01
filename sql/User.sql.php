<?php
	
User::addSqlQuery('USER_CREATE','INSERT INTO users (login, password,mail,nom,prenom) VALUES (:login, :password,:mail,:nom,:prenom)');

User::addSqlQuery('USER_login','SELECT login FROM users WHERE login=:login ');

User::addSqlQuery('USER_mail','SELECT mail FROM users WHERE login=:login ');

User::addSqlQuery('USER_nom','SELECT nom FROM users WHERE login=:login ');

User::addSqlQuery('USER_prenom','SELECT prenom FROM users WHERE login=:login ');

User::addSqlQuery('USER_password','SELECT password FROM users WHERE login=:login ');


?>