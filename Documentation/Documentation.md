# Documentation pour le thème de la Mairie de Saint-Broladre

## Page d'accueil

### L'article montré dans la section "Actualité" 

1. Depuis l'espace admin, je clique sur "Articles" dans la colonne de gauche.
2. Je crée un nouvel article.
3. Je le publie. 

Le dernier article créé apparaîtra automatiquement sur la page d'accueil.

### Ajouter l'image de la page d'accueil

1. Depuis l'espace admin, je survole "Apparence" dans la colonne de gauche et clique "Personnaliser".
2. Je clique sur "Image d'en-tête".
3. Je clique sur "Ajouter une image".
4. Je choisis une image déjà existant dans la médiathèque ou je téléverse un fichier.
5. Je clique sur sélectionner, si l'image choisie est trop grande, Wordpress proposera de la recadrer.
6. Je valide.

### Ajouter l'icône pour l'onglet dans le navigateur

1. Depuis l'espace admin, je survole "Apparence" dans la colonne de gauche et clique "Personnaliser".
2. Je clique sur "Identité du site".
3. Je clique sur "Sélectionner l'icône du site" dans la section "Icône du site".
4. Je choisis une image déjà existant dans la médiathèque ou je téléverse un fichier.
5. Je clique sur sélectionner, si l'image choisie est trop grande, Wordpress proposera de la recadrer.
6. Je valide.

## Précisions

### Ajout de texte dans une nouvelle page
Possible uniquement pour :
- un article (La presse en parle)
- un projet
- une association
- un professionnel

### Menu de la page d'accueil

Attention si le titre d'une des pages présente dans le menu de la page d'accueil est changé, son image correspondante ne pourra plus être affichée.

## Ajouter un professionnel local

1. Je créée une nouvelle page.
2. Je lui attribue comme nom le nom du professionnel et/ou son entreprise.
3. Je lui ajoute comme page parente "Professionnels Locaux".
4. S'il s'agit d'un professionnel de la santé je coche la case "Professionnel de la santé ?".
5. Je remplie les différents champs (adresse, contact, etc.). S'il s'agit d'un professionnel de la santé un champ supplémentaire doit être précisé : l'ordre auquel le professionnel appartient.
6. Je note les informations dans un paragraphe dans l'éditeur.
7. Je publie la page.

**Si l'odre pour le professionnel de la santé n'existe pas dans la liste proposée, voir plus bas.**

## Ajouter une association

1. Je créee une nouvelle page.
2. Je lui attribue comme nom le titre de l'association .
3. Je lui ajoute en page parente "Associations".
4. Je ne touche pas la à case "C'est une association ?".
5. Je remplie les différents champs (adresse, contact, etc.).
6. Je publie la page.

## Ajouter un projet

1. Je créée une nouvelle page.
2. Je lui attribue comme nom le nom du projet.
3. Je lui ajoute comme page parente "Projets en cours".
4. Je remplie le champ "Description courte du projet".
5. Dans l'éditeur wordpress (zone en dessous du titre de la page en cours de création), je peux ajouter une image ou un PDF (**pas les deux en même temps**) ainsi que du texte. *Il est fortement recommandé d'avoir au moins une image.*
6. Je publie la page.


## Changer le projet à l'affiche

1. A la création ou modification d'une page projet, je coche la case "Projet à l'affiche ?".
2. Si un projet était déjà à l'affiche, je le modifie en décochant la case "Projet à l'affiche ?".

## Ajouter une option dans la liste des ordres des professionnels de la santé

**NE SURTOUT PAS MODIFIER LE CHAMP "Nom du champ"**

1. Depuis l'espace admin, je clique sur "ACF" dans la colonne de gauche.
2. Je clique sur "Informations - Profesionnels Locaux".
3. Je clique sur la flèche à gauche du libellé "Ordre du professionnel de la santé".
4. Dans le champ "Choix", je fais un retour à la ligne à la suite du dernier ordre renseigné.
5. J'écris le nom de l'ordre à ajouter.
6. Je clique sur "Enregistrer les modifications" tout en haut à droite.

# Formulaire 
Présents dans la partie à gauche sous 'Contact'.

Pour modifier les options possibles pour la sélection de sujet du formulaire de contact 1 :
1. Je clique sur 'Contact', puis sur 'Formulaire de contact 1'.
2. Dans l'encadré 'Formulaire', je viens trouver `<label> Sujet
   [select* your-subject menu-951 include_blank "Voierie" "Demande de contact" "Etc"] </label>`.
3. Je peux rajouter mes options entre doubles guillements (`""`) à la suite de celles déjà existantes. **Ne pas toucher au `<label>`**.