# PCEA Baraka Church Website

Welcome to the official repository for the [PCEA Baraka Church](https://pceabarakachurch.org) website.

This website serves as a digital home for the church community — providing access to ministries, events, sermons, and opportunities to connect or volunteer.

---

## 🌐 Website Features

- Church service details and event calendar
- Ministry pages (youth, women, PCMF, health, etc.)
- Sermons and audio content
- Online giving (e.g., M-Pesa)
- Volunteer and contact forms
- Admin panel for content management

---

## 📁 Folder Structure (Top-Level)

```bash
.
├── about.php                 # About page
├── admin2/                  # Admin dashboard (index.php, dist/, src/)
├── church design/           # Church design images (excluded from repo)
├── config/                  # Configuration files (e.g., database)
├── css/                     # Site-wide stylesheets
├── js/                      # JavaScript files
├── ministries/              # Individual ministry pages
├── sermons/                 # Sermon audio pages and assets
├── index.html / index.php   # Main entry points
├── contact.php              # Contact form
├── connect-group.php        # Connect groups page
├── mpesa.html               # Online giving via M-Pesa
├── README.md                # Project documentation
└── .gitignore               # Files and folders excluded from Git

```

# Getting Started
# Prerequisites
    Web server with PHP support (e.g. Apache, Nginx)

    FTP or cPanel access for deployment
 
    Git (for version control)

## Local Setup
Clone the repository:
```text
    git clone https://github.com/<your-username>/pcea-web.git
```
Place files into your web server directory (e.g. htdocs/ or public/_html/)

Update config/config.php with your database credentials

Visit http://localhost/index.php or your hosted domain

# Tech Stack
HTML5 / CSS3 / JavaScript

PHP – Backend scripting

MySQL – Database (if used)

(Optional: Admin panel may use Bootstrap or other libraries)

# Contributing
We welcome suggestions and improvements. To contribute:

```text
Commit (git commit -m "Add feature")

Push (git push origin feature-name)
```
# License
This project is open-source and available under the MIT License.


