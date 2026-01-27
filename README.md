# Initier le projet Quiz Trivia

## Pré-requis 

- WSL
- Docker installé sur WSL
- Git installé sur WSL

## Récupérer le dépôt 

```
git clone https://github.com/SWEEPACAKE/quiz-trivia.git
```

## Démarrer son environnement de dev 

Se placer dans le dossier cloné et utiliser la commande 

```
docker compose up --build -d
```
ou 
```
docker compose up -d
```

Pour éteindre l'environnement, utilisez 

```
docker compose down
```

## Configurer sa connexion à la base 

Vous allez devoir paramétrer une nouvelle connexion à la base de données créée par Docker dans DBeaver. Voici ce que vous devrez renseigner : 

- Host : localhost
- Database : quiz
- User : root
- Password : root

Testez la connexion avant de la sauvegarder.

## Démarrer son travail

Vous allez devoir travailler dans le dossier /src, comme précisé dans la partie volumes du fichier docker-compose.yml 

Commencez par vérifier que vous y avez bien accès en appelant l'URL [http://localhost:8080](http://localhost:8080)

Et ensuite à vous de jouer :)