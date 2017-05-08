# Pattern Adapteur 

Supposant qu'on a une classe Tools qui représente un site web dans un contexte de gestion des lien externe par exemple 
et qu'on veut utiliser une autre classe qui fait la même chose d'une manière plus efficace. Le problème que notre objet $tools
est présent partout dans le code on ne peut pas modifier tous les fichiers mais on peut adapter la nouvelle classe pour remplacer
l'ancienne.

