# Le pattern Pool

Le regroupement d'objets peut offrir une amélioration significative de la performance; Il est plus efficace dans les situations où le coût d'initialisation d'une instance de classe est élevé, le taux d'instanciation d'une classe est élevé et le nombre d'instantiations utilisées à un moment donné est faible.

Le motif de conception de pool d'objets crée un ensemble d'objets qui peuvent être réutilisés. Lorsqu'un nouvel objet est nécessaire, il est demandé au pool. Si un objet précédemment préparé est disponible, il est retourné immédiatement, en évitant le coût d'instanciation. Si aucun objet n'est présent dans le pool, un nouvel élément est créé et renvoyé. Lorsque l'objet a été utilisé et n'est plus nécessaire, il est renvoyé au pool, ce qui lui permet d'être utilisé à nouveau à l'avenir sans répéter le processus d'instanciation coûteux. Il est important de noter qu'une fois qu'un objet a été utilisé et retourné, les références existantes deviendront invalides.

Dans certains pools d'objets, les ressources sont limitées, de sorte qu'un nombre maximum d'objets est spécifié. Si ce numéro est atteint et qu'un nouvel élément est demandé, une exception peut être lancée, ou le thread sera bloqué jusqu'à ce qu'un objet soit relancé dans le pool.