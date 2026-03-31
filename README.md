# 🗳️ Student Polling and Survey System

A web-based polling and survey system built for college students using PHP and MySQL. Students can register, login, vote on active polls, and view results. Admins can create polls, manage users, and view feedback.

---

## 📋 Prerequisites

- [XAMPP](https://www.apachefriends.org/) (PHP 8.x + MySQL)
- Web Browser (Chrome or Firefox)
- Git

---

## ⚙️ Installation Steps

### 1. Clone the Repository
```bash
git clone https://github.com/emelynzanongpoh-e24/student_polling_system.git
```

### 2. Move to XAMPP Folder
Copy the cloned folder into:
```
C:\xampp\htdocs\student_polling_system
```

### 3. Start XAMPP
- Open XAMPP Control Panel
- Click **Start** on **Apache**
- Click **Start** on **MySQL**

### 4. Create the Database
- Open your browser and go to:
```
http://localhost/phpmyadmin
```
- Click **New** on the left sidebar
- Create a database named exactly:
```
student_polling_system
```
- Click on the new database
- Click the **Import** tab
- Click **Choose File** → select `student_polling_system.sql` from the project folder
- Click **Go**

### 5. Configure Database Connection
- Find the file `config.sample.php` in the project folder
- Make a copy and rename it to `config.php`
- Open `config.php` and edit:
```php
<?php
$conn = mysqli_connect("localhost", "root", "", "student_polling_system");
if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}
?>
```

### 6. Open the Project
Open your browser and go to:
```
http://localhost/student_polling_system/Login.php
```

---

## 👤 Creating an Admin Account

1. Register a new account on the Register page
2. Open phpMyAdmin → student_polling_system → users table
3. Run this SQL:
```sql
UPDATE users SET role = 'admin' WHERE email = 'your@email.com';
```
4. Log out and log back in

---

## 🎥 Video Demo

▶️ [Watch the Demo on YouTube]((https://youtu.be/w1r6tZIw6Lc))

---

## ✨ Features

- Student registration and login
- Vote on active polls
- View poll results
- Admin can create and manage polls
- Admin can manage users and roles
- Contact feedback system

---

## 🛠️ Built With

- PHP 8.x
- MySQL
- HTML / CSS
- XAMPP

---

## 📁 Project Structure
```
student_polling_system/
├── Login.php
├── Register.php
├── Dashboard.php
├── Voting_page.php
├── results.php
├── Create_poll.php
├── manageusers.php
├── admin_feedback.php
├── Logout.php
├── config.sample.php
├── database.sql
├── assets/
│   └── images/
├── .gitignore
└── README.md
```

---

## 📄 License

MCA Project — ADBU University © 2026
