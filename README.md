A PHP + MySQL based **Online Voting and Tabulation System** built as a capstone project for **The College of Maasin (TCM)**.  
It provides a secure and automated way to manage voters, elections, candidates, and tallying of results.

---

## 🚀 Features
- Admin panel for managing voters, candidates, and elections  
- Voter authentication system with unique IDs and passwords  
- Secure ballot casting with one-vote-per-voter enforcement  
- Automatic tallying and real-time vote results  
- Event tabulation support for school activities  
- Responsive frontend for usability

---

## ⚙️ Installation Guide

### Requirements
- PHP 7.4+ (XAMPP/WAMP/LAMP recommended)  
- MySQL / MariaDB  
- Web browser (Chrome, Firefox, Edge)

### Setup Steps
1. Clone or download this repository:
   ```bash
   git clone https://github.com/EzlikDragon/tcm_voting_system.git
Place the project folder inside your local server root:

For XAMPP → htdocs/

For WAMP → www/

Import the database:

Open phpMyAdmin

Create a new database: tcmvotesystem

Import the SQL dump file located in /database/tcmvotesystem.sql

Configure database connection:

Open config/conn.php

Update with your MySQL credentials (default: root with no password in XAMPP)

Run the system in your browser:

arduino
Always show details

Copy
http://localhost/tcm_voting_system
🔑 Default Accounts
Admin Login
Username: adminuser

Password: password

Voter Login
Voter ID: 091094

Password: password

📂 Project Structure
pgsql
Always show details

Copy
tcm_voting_system/
│── config/        # Database connection
│── database/      # SQL dump for setup
│── admin/         # Admin dashboard
│── voter/         # Voter pages
│── submit_ballot.php
│── index.php
│── README.md
📝 Notes
Modify submit_ballot.php only if foreign key constraints differ from your SQL version.

Use MySQL InnoDB engine for proper foreign key handling.

Ensure correct ON DELETE CASCADE and ON UPDATE CASCADE rules for relational integrity.

👨‍💻 Author
Developed by EzlikDragon @ SlickLab
For inquiries or collaboration, connect via GitHub.
"""

Save the README.md file
readme_path = "/mnt/data/README.md"
with open(readme_path, "w", encoding="utf-8") as f:
f.write(readme_content)

readme_path

Always show details

Copy

Analyzed
python
Always show details

Copy
# Re-run code after environment reset

readme_content = """# 🗳️ TCM Voting System

A PHP + MySQL based **Online Voting and Tabulation System** built as a capstone project for **The College of Maasin (TCM)**.  
It provides a secure and automated way to manage voters, elections, candidates, and tallying of results.

---

## 🚀 Features
- Admin panel for managing voters, candidates, and elections  
- Voter authentication system with unique IDs and passwords  
- Secure ballot casting with one-vote-per-voter enforcement  
- Automatic tallying and real-time vote results  
- Event tabulation support for school activities  
- Responsive frontend for usability

---

## ⚙️ Installation Guide

### Requirements
- PHP 7.4+ (XAMPP/WAMP/LAMP recommended)  
- MySQL / MariaDB  
- Web browser (Chrome, Firefox, Edge)

### Setup Steps
1. Clone or download this repository:
   ```bash
   git clone https://github.com/EzlikDragon/tcm_voting_system.git
Place the project folder inside your local server root:

For XAMPP → htdocs/

For WAMP → www/

Import the database:

Open phpMyAdmin

Create a new database: tcmvotesystem

Import the SQL dump file located in /database/tcmvotesystem.sql

Configure database connection:

Open config/conn.php

Update with your MySQL credentials (default: root with no password in XAMPP)

Run the system in your browser:

arduino
Always show details

Copy
http://localhost/tcm_voting_system
🔑 Default Accounts
Admin Login
Username: adminuser

Password: password

Voter Login
Voter ID: 091094

Password: password

📂 Project Structure
pgsql
Always show details

Copy
tcm_voting_system/
│── config/        # Database connection
│── database/      # SQL dump for setup
│── admin/         # Admin dashboard
│── voter/         # Voter pages
│── submit_ballot.php
│── index.php
│── README.md
📝 Notes
Modify submit_ballot.php only if foreign key constraints differ from your SQL version.

Use MySQL InnoDB engine for proper foreign key handling.

Ensure correct ON DELETE CASCADE and ON UPDATE CASCADE rules for relational integrity.

👨‍💻 Author
Developed by EzlikDragon @ SlickLab
For inquiries or collaboration, connect via GitHub.
"""