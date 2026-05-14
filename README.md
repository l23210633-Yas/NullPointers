# NullPointers
# 🛒 Marketplace en Raspberry Pi 4 (Proyecto LAN)

## 📌 Descripción del proyecto
Este proyecto consiste en el desarrollo de un marketplace tipo Amazon que funciona en red local (LAN), utilizando una Raspberry Pi 4 como servidor principal.

El sistema no depende de la nube, todo se ejecuta dentro del evento en una red local controlada.

---

## ⚙️ Tecnologías utilizadas
- Raspberry Pi 4
- Apache / Nginx
- PHP
- MariaDB
- HTML, CSS, JavaScript

---

## 🎯 Objetivo del sistema
Desarrollar una plataforma básica de comercio electrónico que permita:

- Registro e inicio de sesión de usuarios
- Visualización de productos
- Carrito de compras
- Administración de productos
- Base de datos local en MariaDB

---

## 🚧 Estado del proyecto
🟡 En desarrollo

### Avances actuales:
- [x] Instalación y configuración de Raspberry Pi
- [x] Conexión a la Raspberry Pi establecida
- [x] Creación de usuarios en el sistema
- [x] Configuración inicial del sistema operativo
- [x] Asignación de permisos a cada usuario del equipo

📝 Descripción del avance:
Se configuró correctamente la Raspberry Pi, estableciendo la conexión en red local. Además, se crearon usuarios 
para los integrantes del equipo y se asignaron permisos correspondientes para el trabajo colaborativo dentro del sistema.

<img width="1600" height="1200" alt="image" src="https://github.com/user-attachments/assets/caa8ea12-110e-4e3b-a177-8ed1b7873336" />
<img width="610" height="423" alt="image" src="https://github.com/user-attachments/assets/08b550e0-d66a-4161-8d88-c4a015e12321" />

# 🛒 Proyecto Marketplace — Avances del Sistema

## 🗄️ Avances de la Base de Datos

- [x] Instalación de MariaDB en la Raspberry Pi
- [x] Creación de la base de datos del proyecto (`marketplace`)
- [x] Creación de usuarios de base de datos con permisos asignados
- [x] Configuración de acceso local desde el servidor
- [x] Creación inicial de tablas principales
- [ ] Diseño completo de relaciones entre tablas
- [ ] Inserción de datos de prueba (Seed Data)
- [ ] Integración de la base de datos con PHP
- [ ] Implementación de consultas dinámicas y pruebas del sistema

---

## 📝 Descripción del Avance

Se instaló y configuró MariaDB en la Raspberry Pi para comenzar el desarrollo de la base de datos del marketplace. Posteriormente, se creó la base de datos principal llamada `marketplace`, además de usuarios con permisos específicos para facilitar el trabajo en equipo y la administración del sistema.

También se configuró el acceso local desde el servidor para permitir la conexión entre la aplicación y la base de datos. Después de la configuración inicial, se comenzó el diseño de las tablas principales necesarias para el funcionamiento de una plataforma tipo Amazon o Mercado Libre.

Actualmente, el proyecto se encuentra en proceso de desarrollo de la estructura relacional, conexiones entre tablas y pruebas de integración con PHP.

---

# 📦 Estructura Inicial de la Base de Datos
## 📌 Tablas creadas

<img width="440" height="380" alt="Captura de pantalla 2026-05-13 174302" src="https://github.com/user-attachments/assets/fb3f35e7-f1d8-4977-984d-d6bfbbce6cdf" />


### 👤 users
Es el núcleo principal del sistema. Guarda la información de todos los usuarios registrados, incluyendo:
- Nombre
- Correo electrónico
- Contraseña
- Rol dentro del sistema (cliente o administrador)

---

### 🏪 sellers
Almacena la información adicional de los vendedores, como:
- Nombre de la tienda
- RFC
- Dirección comercial
- Datos relacionados con ventas

---

### 🛍️ products
Contiene el catálogo de productos disponibles en la plataforma:
- Nombre del producto
- Descripción
- Precio
- Stock disponible
- Información general del artículo

---

### 🗂️ categories
Permite organizar los productos en categorías para facilitar la navegación y búsqueda:
- Electrónica
- Ropa
- Hogar
- Tecnología
- Entre otras

---

### 🖼️ product_images
Guarda las imágenes de los productos mediante rutas o nombres de archivos.

Esta tabla se encuentra separada de `products` para permitir múltiples imágenes por producto.

---

### 🛒 cart
Representa el carrito de compras activo de cada usuario.

---

### 📦 cart_items
Guarda los productos específicos agregados al carrito:
- Producto seleccionado
- Cantidad
- Relación con el carrito del usuario

---

### 📑 orders
Registra el historial de compras realizadas:
- Usuario comprador
- Fecha de compra
- Total pagado
- Estado del pedido

---

### 📋 order_items
Guarda el detalle exacto de cada pedido:
- Productos comprados
- Cantidades
- Precio registrado al momento de la compra

---

### 💳 payments
Almacena información relacionada con los pagos:
- Método de pago
- Estado de la transacción
- Confirmación o rechazo del pago

---

### 🚚 shipping
Controla el estado de los envíos:
- Preparando pedido
- En camino
- Entregado
- Número de guía

---

### ⭐ reviews
Permite a los compradores dejar:
- Comentarios
- Calificaciones
- Opiniones sobre productos

---

### ❤️ wishlist
Guarda los productos favoritos o deseados por los usuarios para futuras compras.

---

### 🔔 notifications
Gestiona las notificaciones y avisos del sistema:
- Actualizaciones de pedidos
- Avisos importantes
- Actividad relacionada con productos y usuarios

---

# 🎨 Avances del Diseño

Después de finalizar la estructura inicial de la base de datos, se comenzó con el diseño de algunas páginas del sistema, enfocándose en:
- Interfaz visual
- Experiencia del usuario
- Organización del catálogo
- Diseño responsive
- Navegación del marketplace

El objetivo es desarrollar una plataforma moderna, funcional y similar a marketplaces como Amazon o Mercado Libre.

---

## Avances adicionales

Después de finalizar la estructura inicial de la base de datos, comenzamos con el diseño y desarrollo de algunas páginas del sistema, enfocándonos en la interfaz visual y la experiencia del usuario para el marketplace.

---
## Logo para pagina

<img width="558" height="321" alt="logoRR" src="https://github.com/user-attachments/assets/70cbd58b-4048-409f-b2b5-2f23bf4db6b3" />

