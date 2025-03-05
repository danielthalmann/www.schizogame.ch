# Site Internet Schizogame

## Prérequis

Pour la production :

* PHP 7 ou plus
* Serveur web (nginix, apache, iis,...)

En plus des prérequis pour la production, pour le développement, il est nécessaire d'avoir :

* NodeJS
* npm


## Procédure d'installation

1. cloner le dépôt GIT dans un dossier
2. configurer la racine du site sur le dossier

## Développement

La css du site est généré avec tailwindcss. 

Lancer l'installation du package tailwindcss avec la commande suivante :

```bash
npm install
```

Commande disponible après installation :


| Commande            | description |
|---------------------|-------------|
| ```npm run dev```   | compile la css et attend toute modification pour recompiler |
| ```npm run serve``` | lance un serveur de dev php |
| ```npm run build``` | effectue une seule compilation de la css |

