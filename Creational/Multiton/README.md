# Le Multiton

Un multiton est presque exactement le même qu'un singleton, la légère différence est qu'un multiton peut stocker plusieurs instances de lui-même. Contrairement à un singleton, qui ne peut stocker qu'une seule instance.
 
## Quand utiliser un multiton
L'utilisation idéale pour un multiton est lorsque vous devez créer plusieurs instances d'une classe particulière et que vous souhaitez stocker les références à chaque instance. Ceci est très utile lorsque vous créez seulement une petite quantité de la classe en question et que vous souhaitez accéder à différentes instances dans différentes parties de votre code. Si vous commencez à créer plus de 5 à 10 instances d'un multiton, vous ne devriez probablement pas utiliser un multiton et plutôt stocker les objets dans un conteneur d'injection de dépendance (DIC). Les multitons ne sont que pour créer une petite collection d'objets.
