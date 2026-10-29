# Base de datos de películas

La base de datos SQLite se encuentra en `clases/datos/peliculas.db`. SQLite crea el archivo al abrir una conexión si todavía no existe.

SQL utilizado para crear la tabla:

```sql
CREATE TABLE IF NOT EXISTS pelicula (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo TEXT NOT NULL,
    director TEXT NOT NULL,
    anio INTEGER NOT NULL,
    genero TEXT NOT NULL,
    imagen TEXT NOT NULL,
    visto INTEGER NOT NULL DEFAULT 0 CHECK (visto IN (0, 1)),
    actores TEXT NOT NULL DEFAULT '[]'
);
```

`visto` se almacena como `0` o `1`. `actores` se almacena como JSON serializado en texto, por ejemplo `["Actor Uno", "Actor Dos"]`.
