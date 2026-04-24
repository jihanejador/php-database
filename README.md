# 🎓 EduSync - Authentication System

![PHP](https://img.shields.io/badge/PHP-Backend-blue)
![MySQL](https://img.shields.io/badge/MySQL-Database-orange)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-UI-blueviolet)
![Status](https://img.shields.io/badge/Status-Active-success)

EduSync est une application web d’authentification développée en PHP.  
Elle permet aux utilisateurs de s’inscrire, se connecter et accéder à un dashboard sécurisé avec gestion de sessions.

---

## 🚀 Fonctionnalités

- 🔐 Inscription des utilisateurs (Register)
- 🔑 Connexion sécurisée (Login)
- 🧠 Gestion des sessions PHP
- 🚫 Protection des pages (dashboard sécurisé)
- 🧼 Validation des données utilisateur
- 🛡️ Protection contre XSS (htmlspecialchars, strip_tags)
- 🔒 Hashage des mots de passe (password_hash)
- 🚪 Déconnexion (Logout)
- 👤 Affichage personnalisé du nom utilisateur

---

## 🏗️ Structure du projet
EduSync/
│
├── includes/
│ ├── header.php
│ ├── footer.php
│ ├── functions.php
│ └── connection.php
│
├── public/
│ ├── index.php
│ ├── login.php
│ ├── register.php
│ └── dashboard.php
│
├── scripts/
│ ├── authprocess.php
│ └── logout.php
│
└── README.md

---

## ⚙️ Technologies utilisées

- PHP (Backend)
- MySQL (Database)
- PDO / MySQLi
- HTML / TailwindCSS
- Sessions PHP
- XAMPP

---

## 🔐 Sécurité

- Validation des champs (empty check)
- Validation email (filter_var)
- Protection XSS (htmlspecialchars, strip_tags)
- Hashage des mots de passe (password_hash)
- Vérification (password_verify)
- Sessions pour accès sécurisé

---

## 🔄 Fonctionnement

1. Inscription utilisateur
2. Validation + stockage en base de données
3. Login utilisateur
4. Création de session
5. Accès dashboard sécurisé
6. Logout (suppression session)

---

## 📌 Installation

1. Cloner le projet :
https://github.com/jihanejador/php-database.git

2. Mettre le projet dans htdocs (XAMPP)

3. Démarrer Apache + MySQL

4. Créer base de données :edusync

5. Créer table users :
```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(100),
    lastname VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(255),
    role VARCHAR(50) DEFAULT 'user'
);
lencer :
http://localhost/EduSync/public/index.php
Rôles Admin / User
Dashboard stats
Profil utilisateur
Reset password
Design responsive avancé
👨‍💻 Auteur

Projet réalisé par : jihane jador
📄 Licence

Projet éducatif open-source.