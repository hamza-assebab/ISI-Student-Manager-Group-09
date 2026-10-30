# TP 3 : Gestion collaborative des versions avec Git et GitHub

>***Travail réalisé par le groupe :*** 09  
>***Membres :***
> - Hamza ASSEBAB
> - Mawouéyram ANANI
> - Mohamed EL FARNANE
> - Zidane ZIDANI  

## Table des matières
- [Scénario et Organisation](#scénario-et-organisation)
- [Exercice 1 : Installation et configuration](#exercice-1--installation-et-configuration)
- [Exercice 2 : Création du dépôt commun](#exercice-2--création-du-dépôt-commun)
- [Exercice 3 : Clonage et premier commit](#exercice-3--clonage-et-premier-commit)
- [Exercice 4 : Commit initial](#exercice-4--commit-initial)
- [Exercice 5 : Branches individuelles](#exercice-5--branches-individuelles)
- [Exercice 6 : Développement en parallèle](#exercice-6--développement-en-parallèle)
- [Exercice 7 : Pull Requests et revue de code](#exercice-7--pull-requests-et-revue-de-code)
- [Exercice 8 : Conflit de fusion contrôlé](#exercice-8--conflit-de-fusion-contrôlé)
- [Exercice 9 : Vérification et livrables](#exercice-9--vérification-et-livrables)

---

## Scénario et Organisation  
> ***Étudiant A :*** Hamza ASSEBAB  
> ***Étudiant B :*** Mawouéyram ANANI  
> ***Étudiant C :*** Mohamed EL FARNANE  
> ***Étudiant D :*** Zidane ZIDANI


## Exercice 1 : Installation et configuration
### 1.1 Vérifier que Git est installé
### 1.2 Configurer le nom et l’adresse e-mail de l’auteur des commits
### 1.3 Afficher les paramètres et expliquer le rôle de user.name et user.email.

#### Hamza ASSEBAB
<img src="screenshots/exercice01/hamza.png" width="500">

#### Mawouéyram ANANI
<img src="screenshots/exercice01/anani.jpeg" width="500">

#### Mohamed EL FARNANE
<img src="screenshots/exercice01/mohamed.jpeg" width="500">

#### Zidane ZIDANI
<img src="screenshots/exercice01/zidane.jpeg" width="500">


## Exercice 2 : Création du dépôt commun
### Création du dépôt
<img src="screenshots/exercice02/creation-depot.png" width="500">

### Dépôt créé
<img src="screenshots/exercice02/depot-cree.png" width="500">

### Invitation des autres étudiants comme collaborateurs
<img src="screenshots/exercice02/invitation-etudiants.png" width="500">

## Exercice 3 : Clonage et premier commit
### 3.1 Configuration SSH
#### Hamza ASSEBAB
<img src="screenshots/exercice03/hamza1.png" width="500">

<img src="screenshots/exercice03/hamza2.png" width="500">

#### Mawouéyram ANANI
<img src="screenshots/exercice03/anani1.jpeg" width="500">

<img src="screenshots/exercice03/anani2.jpeg" width="500">

#### Mohamed EL FERNANE
<img src="screenshots/exercice03/mohamed1.jpeg" width="500">

<img src="screenshots/exercice03/mohamed2.jpeg" width="500">

#### Zidane ZIDANI
<img src="screenshots/exercice03/zidane1.jpeg" width="500">

<img src="screenshots/exercice03/zidane2.jpeg" width="500">

### 3.2 Clonage du dépôt, affichage de l'adresse origin, des branches locales et distantes, et du statut
#### Hamza ASSEBAB
<img src="screenshots/exercice03/hamza3.png" width="500">

#### Mawouéyram ANANI
<img src="screenshots/exercice03/anani3.jpeg" width="500">

<img src="screenshots/exercice03/anani3-1.jpeg" width="500">

#### Mohamed EL FERNANE
<img src="screenshots/exercice03/mohamed3.jpeg" width="500">

#### Zidane ZIDANI
<img src="screenshots/exercice03/zidane3.jpeg" width="500">

<img src="screenshots/exercice03/zidane3-1.jpeg" width="500">

### 3.3 Expliquer clone, origin, main, origin/main et HEAD
- **`clone` :** L'action de télécharger une copie complète d'un dépôt distant (par exemple, depuis GitHub) sur votre machine locale.

- **`origin` :** Le nom par défaut attribué à ce dépôt distant après le clonage. C'est un simple raccourci pour ne pas avoir à taper l'URL complète du serveur à chaque fois.

- **`main` :** Le nom par défaut de la branche principale de votre projet en local (anciennement souvent appelée master). C'est généralement là que se trouve le code stable.

- **`origin/main` :** Une branche de suivi qui représente l'état de la branche `main` sur le serveur distant (`origin`). Elle vous permet de voir les mises à jour distantes avant de les intégrer dans votre propre branche `main` locale.

- **`HEAD` :** Un pointeur qui indique exactement où vous vous trouvez en ce moment dans votre dépôt. Il pointe presque toujours vers la branche sur laquelle vous êtes en train de travailler, vous montrant quel est votre commit actuel.

## Exercice 4 : Commit initial
### 4.1 Créer index.php et l'envoyer vers main
#### Hamza ASSEBAB
<img src="screenshots/exercice04/hamza.png" width="500">

### 4.2 Mettre à jour les copies locales
#### Mawouéyram ANANI
<img src="screenshots/exercice04/anani.jpeg" width="500">

#### Mohamed EL FERNANE
<img src="screenshots/exercice04/mohamed.jpeg" width="500">

#### Zidane ZIDANI
<img src="screenshots/exercice04/zidane.jpeg" width="500">

### 4.3 Expliquer la différence entre commit et push
- **`commit` :** Enregistre vos modifications sur votre machine locale. Il crée une capture d'état (*snapshot*).

- **`push` :** Envoie vos commits locaux vers le serveur distant (comme GitHub). C'est l'action de partager votre travail avec l'équipe ou de le sauvegarder en ligne.

## Exercice 5 : Branches individuelles
#### Hamza ASSEBAB
<img src="screenshots/exercice05/hamza.png" width="500">

#### Mawouéyram ANANI
<img src="screenshots/exercice05/anani.jpeg" width="500">

#### Mohamed EL FERNANE
<img src="screenshots/exercice05/mohamed.jpeg" width="500">

#### Zidane ZIDANI
<img src="screenshots/exercice05/zidane.jpeg" width="500">

## Exercice 6 : Développement en parallèle
#### Hamza ASSEBAB
<img src="screenshots/exercice06/hamza2.png" width="500">

<img src="screenshots/exercice06/hamza.png" width="500">

#### Mawouéyram ANANI
<img src="screenshots/exercice06/anani2.png" width="500">

#### Mohamed EL FERNANE
<img src="screenshots/exercice06/mohamed2.png" width="500">

<img src="screenshots/exercice06/mohamed.jpeg" width="500">

#### Zidane ZIDANI
<img src="screenshots/exercice06/zidane2.png" width="500">

<img src="screenshots/exercice06/zidane.jpeg" width="500">

## Exercice 7 : Pull Requests et revue de code
### 7.1 Création de la Pull Request
<img src="screenshots/exercice07/creation-pull-request.png" width="500">

### 7.2 Les PRs ouvertes
<img src="screenshots/exercice07/open-pull-requests.png" width="500">

### 7.3 Les commentaires sur les PRs
#### De **Hamza ASSEBAB** à **Mawouéyram ANANI**
<img src="screenshots/exercice07/hamza1.png" width="500">

#### De **Mawouéyram ANANI** à **Mohamed EL FERNANE**
<img src="screenshots/exercice07/anani1.png" width="500">

#### De **Mohamed EL FERNANE** à **Zidane ZIDANI**
<img src="screenshots/exercice07/mohamed1.png" width="500">

#### De **Zidane ZIDANI** à **Hamza ASSEBAB**
<img src="screenshots/exercice07/zidane1.jpeg" width="500">

### 7.4 Validation et fusion des PRs
<img src="screenshots/exercice07/pr-merged.png" width="500">

### 7.5 Mise à jour des branches main locales
#### Hamza ASSEBAB
<img src="screenshots/exercice07/hamza2.png" width="500">

#### Mawouéyram ANANI
<img src="screenshots/exercice07/anani2.jpeg" width="500">

#### Mohamed EL FERNANE
<img src="screenshots/exercice07/mohamed2.jpeg" width="500">

#### Zidane ZIDANI
<img src="screenshots/exercice07/zidane2.jpeg" width="500">

### 7.6 L'intérêt d’une Pull Request par rapport à un push direct sur main
Un push direct sur `main` modifie immédiatement la branche principale, ce qui est risqué et empêche toute vérification préalable par l'équipe.

Une Pull Request (PR) est une demande d'intégration qui agit comme une couche de sécurité avant de modifier `main`. Ses principaux intérêts sont :
- **Revue de code :** Permet à d'autres développeurs d'inspecter, de commenter et d'approuver vos modifications avant de les fusionner.

- **Contrôle qualité (CI/CD) :** Déclenche l'exécution de tests automatisés pour vérifier que le nouveau code ne casse pas l'application.

- **Protection de main :** Garantit que la branche principale reste toujours stable, fonctionnelle et prête pour la production.

- **Traçabilité et collaboration :** Documente le "pourquoi" d'une modification et conserve l'historique des discussions techniques pour l'équipe.

## Exercice 8 : Conflit de fusion contrôlé
#### Création de configuration.txt et sa publication par A
<img src="screenshots/exercice08/create-config-file.png" width="500">

<img src="screenshots/exercice08/push-config-file.png" width="500">

#### Création d'une PR par C et fusion de sa branche
<img src="screenshots/exercice08/pr-opened.png" width="500">

<img src="screenshots/exercice08/pr-closed.png" width="500">

#### B récupère les dernières modifications et résout les conflits
<img src="screenshots/exercice08/merge-conflict.jpeg" width="500">

<img src="screenshots/exercice08/fix-conflicts.jpeg" width="500">

<img src="screenshots/exercice08/conflicts-fixed.jpeg" width="500">

#### B pousse sa branche en proposant une PR après avoir résolu les conflits
<img src="screenshots/exercice08/pr-opened2.png" width="500">

<img src="screenshots/exercice08/pr-closed2.png" width="500">

## Exercice 9 : Vérification et livrables
### 9.1 Afficher l’historique graphique des commits et les branches
<img src="screenshots/exercice09/commits-graph.png" width="500">

### 9.2 Vérifier que main est à jour et que l’application fonctionne
#### Page d'accueil
<img src="screenshots/exercice09/home.png" width="500">

#### Page des étudiants
<img src="screenshots/exercice09/students.png" width="500">

#### Page des projets
<img src="screenshots/exercice09/projects.png" width="500">