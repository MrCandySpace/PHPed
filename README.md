# Bienvenue dans PHPed

Dans ce répertoire vous allez découvrir mon avancé sur le langage **PHP**

## Qu'est-ce que PHPed ? 

PHPed est un blog qui grâce à une base de données (MySQL) est interactif *(dans quelques patch correctif) *

## Mais comment le site marche ? 

Grâces au nombreuses fonctionnalité PHP tel que les routeurs, contrôleurs, modèles, etc .. 
Le site est aussi accompagné de Bootstrap afin de faire un formatage graphique propre.

---
## Puis-je copier le code ? 

Bien-sûr mais à vos risque et périls 
Je suis un débutant dans le dev et je ne garantis pas la fonctionnalité totale du site. 

Je vous conseille plutôt de vous inspirer ou si vous développer un site identique de vous inspirer.
---
# La base de donnée

Dans phpmyadmin, crée un nouvelle base de donnée nommé : 
```
blog
```
une fois dedans faite 2 tables : 
```
posts
-->
1	    id Primaire	     int(11)		      	Non	Aucun(e)		     AUTO_INCREMENT
2	    name Index	     varchar(255)	    utf8_general_ci	      	Non	Aucun(e)
3	    password	      varchar(255)	    utf8_general_ci	       	Non	Aucun(e)
```
```
users
--> 
1	id Primaire	int(11)	          		Non	Aucun(e)	            	AUTO_INCREMENT	
2	title	varchar(255)	              utf8_general_ci	            	Non	Aucun(e)		
3	content	text	                    utf8_general_ci		            Non	Aucun(e)			
4	created_date	                        datetime			            Non	Aucun(e)			
5	user_id	                               int(11)		             	Non	Aucun(e)		

```
