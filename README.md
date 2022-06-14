# IT103

Ce projet de programmation web a pour objectif de développer une application web de gestion de questions/réponses de type StackOverflow, utilisant l'architecture dynamique coté serveur.

Cette application a pour nom: **AskAround**, et est réalisée par **Yassir HAFSY** et **Nahla AIT ABBOU**.

# Architecture du projet 

**../connexion.php**
-	Connexion avec la base de données

**../home.php**
-	Page d'acceuil qui permet de passer aux pages : 
		- testone.php (connexion)
		- test.php (inscription)
		- deconnexion.php
		- sujets.php

**../test.php** 
-	page d'inscription / formulaire comportant nom, prénom, email et mot de passe, ces données sont stockées dans la table connexionn.sql

**../testone.php**
-	page de connexion / formulaire comortant pseudo et mot de passe 

**../deconnexion.php**
-	Redirection à la page d'acceuil home.php et fermeture de la session 

**../sujets.php**
-	Page qui permet la redirection vers les pages suivantes:
		- qu.php (ajout de question)
		- ans.php (ajout de réponse)
		- vqr.php (affichage des questions réponses)

**../qu.php** 
-	Ajout d'une question (formulaire) 
-	Stockage de la question dans la table questions.sql
	
**../ans.php** 
-	Ajout d'une réponse (formulaire) 
-	Stockage de la réponse dans la table answers.sql

**../vqr.php**
-	Affichage des questions réponses à partir des tables questions.sql et answers.sql
