# test ADIMEO Titan
Le projet est une single page d'inscription pour faire partie des premiers touristes de Titan avec un formulaire où l'utilisateur doit renseigner son nom, prénom, adresse mail et doit renseigner s'il veut être inscrit à la newsletter.

## Stack
Validation du formulaire en PHP, base de données en MySQL, HTML et CSS.

## Prérequis
Avoir PHP et MySQL installés sur sa machine. Créer sa BDD. Clôner le projet

### Base de données
Créez une base de données du nom de votre choix et un compte utilisateur avec un mot de passe de votre choix.

Dans cette base de données, créez une table avec les champs suivants :
id -> de type INT , Primary Key, Auto increment et Non Nul
firstname -> de type VARCHAR , Non Nul
lastname -> de type VARCHAR , Non Nul
email -> type VARCHAR , Non Nul
newsletter -> type BOULEAN

![Screenshot](image1.png)
![Screenshot](image2.png)

### Configuration
Une fois le projet clôné, accédez au projet (cd nom_projet), ouvrez le ficher inscription_post.php et remplacez à la ligne 7 les termes DB_NAME, DB_USER et DB_PASSWORD par le nom de votre BDD, le nom d'utilisateur et le mot de passe respectifs que vous avez créé à l'étape précédente pour la BDD.

# Test
Pour lancer le projet, sur votre terminal accédez à la racine du projet et tapez la commande 'php -S localhost:4000' puis sur votre navigateur (exemple Chrome) tapez 'localhost:4000' dans la barre d'URL.
