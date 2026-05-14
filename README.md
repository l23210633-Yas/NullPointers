# 🛒 NullPointers  
## Marketplace en Raspberry Pi 4 (Proyecto LAN)

---

# 📌 Descripción del Proyecto

Este proyecto consiste en el desarrollo de un marketplace tipo Amazon que funciona completamente en una red local (LAN), utilizando una Raspberry Pi 4 como servidor principal.

El sistema está diseñado para operar sin depender de servicios en la nube, permitiendo que toda la plataforma funcione dentro de la red local del evento.

---

# ⚙️ Tecnologías Utilizadas

- Raspberry Pi 4
- Apache / Nginx
- PHP
- MariaDB
- HTML5
- CSS3
- JavaScript

---

# 🎯 Objetivo del Sistema

Desarrollar una plataforma básica de comercio electrónico que permita:

- Registro e inicio de sesión de usuarios
- Visualización de productos
- Carrito de compras
- Administración de productos
- Gestión de pedidos
- Base de datos local en MariaDB

---

# 🚧 Estado del Proyecto

🟡 En desarrollo

---

# ✅ Avances Actuales

- [x] Instalación y configuración de Raspberry Pi
- [x] Conexión a la Raspberry Pi establecida
- [x] Creación de usuarios en el sistema
- [x] Configuración inicial del sistema operativo
- [x] Asignación de permisos a cada integrante
- [x] Instalación y configuración de MariaDB
- [x] Creación de la base de datos `marketplace`
- [x] Integración de PHP con MariaDB
- [x] Diseño inicial de tablas
- [x] Diseño de páginas principales
- [x] Creación del diseño visual del marketplace

---

# 📝 Descripción del Avance

Se configuró correctamente la Raspberry Pi estableciendo la conexión en red local para permitir el funcionamiento del marketplace dentro del evento.

Además, se crearon usuarios para los integrantes del equipo y se asignaron permisos correspondientes para facilitar el trabajo colaborativo dentro del sistema.

Posteriormente, se instaló MariaDB y se desarrolló la estructura inicial de la base de datos del marketplace, incluyendo relaciones entre tablas, datos de prueba y conexión con PHP.

Finalmente, se inició el desarrollo visual del sistema, diseñando las primeras interfaces del marketplace y organizando la experiencia de usuario.
<img width="1600" height="1200" alt="592117167-caa8ea12-110e-4e3b-a177-8ed1b7873336" src="https://github.com/user-attachments/assets/ee8a4fd6-cb95-4167-976c-6322d6633053" />

<img width="610" height="423" alt="592117270-08b550e0-d66a-4161-8d88-c4a015e12321" src="https://github.com/user-attachments/assets/39b8a577-b7be-431a-b889-9fadb3a8a501" />



---

# 👥 Integrantes del Equipo

| Integrante | Responsabilidades |
|---|---|
| **Marcos** | Configuración de Raspberry Pi, instalación del servidor local, conexión entre PHP y MariaDB y configuración del backend. |
| **Yasmin** | Configuración de Raspberry Pi, diseño de la base de datos, relaciones entre tablas, integración de páginas y apoyo en programación. |
| **Dulce** | Desarrollo de páginas principales, integración de interfaces y programación visual del sistema. |
| **Jesica** | Desarrollo del login, páginas de productos e integración de HTML, CSS y PHP. |
| **Ariana** | Diseño visual completo de la interfaz del marketplace y organización estética de las páginas. |

---

# ⚙️ Distribución del Equipo

## 🔧 Configuración de Raspberry Pi y Servidor
### Marcos y Yasmin

Se encargaron de:

- Configuración inicial de la Raspberry Pi
- Instalación del entorno del servidor
- Configuración de Apache, PHP y MariaDB
- Verificación de conexión dentro de la red local

Gracias a esta configuración, el sistema puede funcionar completamente dentro de la LAN del evento.

---

## 🖥️ Desarrollo de Páginas Principales
### Dulce y Jesica

Responsables de:

- Página de inicio de sesión (Login)
- Página principal de productos
- Organización inicial de navegación

---

## 🎨 Diseño de la Interfaz
### Ariana

Responsable de:

- Diseño visual del marketplace
- Organización de elementos gráficos
- Estilo general del sistema
- Base visual para programación

---

## 💻 Programación e Integración
### Jesica, Dulce y Yasmin

Trabajaron en:

- Integración de HTML, CSS y PHP
- Programación de interfaces
- Adaptación del diseño al funcionamiento real del sistema

---

## 🗄️ Base de Datos y Backend

### Marcos

Responsable de:

- Conexión entre PHP y MariaDB
- Configuración del backend
- Verificación del funcionamiento del sistema

### Yasmin

Responsable de:

- Diseño del esquema de la base de datos
- Organización de tablas
- Relaciones entre entidades
- Estructura de almacenamiento

---

# 🗄️ Estructura Inicial de la Base de Datos

## 📌 Tablas creadas
<img width="440" height="380" alt="592258453-fb3f35e7-f1d8-4977-984d-d6bfbbce6cdf" src="https://github.com/user-attachments/assets/b47f4f72-f95a-4790-a9e6-c6ab224666cb" />


### 👤 users
Almacena la información de los usuarios registrados:
- Nombre
- Correo electrónico
- Contraseña
- Rol del usuario

---

### 🏪 sellers
Información de vendedores:
- Nombre de tienda
- RFC
- Dirección comercial

---

### 🛍️ products
Catálogo principal de productos:
- Nombre
- Descripción
- Precio
- Stock

---

### 🗂️ categories
Organización de productos por categorías:
- Electrónica
- Tecnología
- Hogar
- Ropa

---

### 🖼️ product_images
Gestión de imágenes de productos.

Permite almacenar múltiples imágenes por producto.

---

### 🛒 cart
Carrito de compras activo de cada usuario.

---

### 📦 cart_items
Productos agregados al carrito:
- Producto
- Cantidad
- Relación con carrito

---

### 📑 orders
Historial de compras:
- Usuario
- Fecha
- Total
- Estado del pedido

---

### 📋 order_items
Detalle de productos comprados dentro de cada pedido.

---

### 💳 payments
Información relacionada con pagos:
- Método de pago
- Estado de transacción

---

### 🚚 shipping
Control y seguimiento de envíos:
- Estado del envío
- Número de guía

---

### ⭐ reviews
Opiniones y calificaciones de productos.

---

### ❤️ wishlist
Lista de productos favoritos de los usuarios.

---

### 🔔 notifications
Sistema de notificaciones y avisos.

---

# 🎨 Avances del Diseño

Después de finalizar la estructura inicial de la base de datos, comenzó el desarrollo visual del marketplace, enfocándose en:

- Interfaz moderna
- Experiencia de usuario
- Diseño responsive
- Organización del catálogo
- Navegación intuitiva

El objetivo es desarrollar una plataforma funcional y visualmente similar a marketplaces como Amazon o Mercado Libre.

---

# 🖼️ Logo del Proyecto

## Logo oficial del marketplace

<img width="558" height="321" alt="logoRR" src="https://github.com/user-attachments/assets/70cbd58b-4048-409f-b2b5-2f23bf4db6b3" />

---

# 🤝 Trabajo Colaborativo

Todo el equipo participó en:

- Diseño general del sistema
- Organización del proyecto
- Revisión de funcionalidades
- Propuestas de mejora
- Desarrollo visual y técnico

Gracias al trabajo colaborativo, el proyecto logró una estructura organizada y funcional preparada para ejecutarse completamente desde una Raspberry Pi 4 dentro de una red local.
