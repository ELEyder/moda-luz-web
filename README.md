# 🌟 **Proyecto ModaLuz**

Este proyecto es una aplicación web desarrollada en PHP que requiere configuración de entorno, instalación de dependencias y una base de datos MySQL.

---

## 🚀 **Requisitos Previos**

1. ✅ [XAMPP](https://www.apachefriends.org/) instalado y ejecutándose.
2. ✅ PHP con la extensión `zip` habilitada.
3. ✅ [Composer](https://getcomposer.org/) instalado.
4. ✅ MySQL o MariaDB para gestionar la base de datos.

---

## ⚡ **Guía de Instalación**

### 1️⃣ **Habilitar la extensión ZIP en PHP**

1. Abre el archivo `php.ini`:
   - Ubicación predeterminada en XAMPP: `C:\xampp\php\php.ini`

2. Busca la siguiente línea:
   ```ini
   ;extension=zip
   ```

3. Descomenta la línea (quitando el `;`):
   ```ini
   extension=zip
   ```

4. Reinicia **Apache** desde el panel de XAMPP.

---

### 2️⃣ **Instalar dependencias con Composer**

Desde la terminal, navega a la carpeta del proyecto:

```bash
cd ruta/al/proyecto/moda-luz-web
composer install
```

Esto descargará todas las dependencias necesarias en la carpeta `/vendor`.

---

### 3️⃣ **Configurar la base de datos**

#### 🏗 **Crear la base de datos**

1. Accede a **phpMyAdmin** o a tu cliente de base de datos preferido.
2. Ejecuta el siguiente comando SQL:

```sql
CREATE DATABASE modaluz;
```

#### 🗄 **Importar el script SQL**

1. Importa el archivo `ModaLuz.sql` ubicado en:
   ```
   app_data/db/ModaLuz.sql
   ```

2. Esto generará todas las tablas y datos iniciales necesarios.

---

### 4️⃣ **Configurar el archivo `.env`**

Renombra o edita el archivo `.env` para que contenga la configuración de la base de datos:

```ini
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=modaluz
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña

URL=http://localhost/moda-luz-web/
```

📌 **Asegúrate de que la URL corresponda a la ruta del proyecto en tu servidor local.**

---

### 5️⃣ **Ejecutar el proyecto**

1. Inicia **Apache** y **MySQL** desde XAMPP.
2. Accede a la aplicación desde tu navegador:

```
http://localhost/moda-luz-web/
```

¡🎉 **La aplicación debería estar corriendo!**

---

## 💡 **Solución de Problemas**

- **Error `vendor/autoload.php not found`**:
  - Asegúrate de haber ejecutado `composer install`.

- **Fallo al conectar a la base de datos**:
  - Revisa las credenciales en el archivo `.env`.
  - Verifica que MySQL está corriendo.

- **Extensión ZIP faltante**:
  - Confirma que `extension=zip` está habilitado en `php.ini`.

---

## ✨ **Tecnologías utilizadas**

- 💎 PHP
- 🏗 MySQL
- 🎩 Composer
- 🌐 HTML/CSS/JavaScript (para la interfaz web)

---

## 📜 **Licencia**

Este proyecto se distribuye bajo la licencia MIT. Consulta el archivo `LICENSE` para más detalles.

---

💬 **¿Tienes problemas o sugerencias?** ¡No dudes en abrir un *issue*! 🚀

