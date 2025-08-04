# MoveMate Backend (Laravel + MySQL)

MoveMate is a **minimal exercise tracking app** built primarily to **showcase DevOps and deployment skills**.  

- Functionality is intentionally simple:
  1. **User Signup**
  2. **User Login**
  3. **Dashboard:**  
     *"Welcome to your Exercise Dashboard! Track your progress and stay fit"*  
     with a **Logout button**
- **No additional exercise features** are implemented.  
- The purpose of this project is to **demonstrate professional cloud & DevOps practices**, not complex app development.

---

## 🎥 Demo

[![Watch the demo](https://img.youtube.com/vi/3gB2V_853ew/maxresdefault.jpg)](https://youtu.be/3gB2V_853ew)

---

## 🚀 Live Demo (Optional)

- **Frontend:** [https://movemate.duckdns.org](https://movemate.duckdns.org)  
- **Backend Test Endpoint:** [https://movemate.duckdns.org/api/test](https://movemate.duckdns.org/api/test)  

> *Live demo may be offline to save AWS free-tier credits. See demo video above instead.*

---

## 🛠 Tech Stack

- **Backend:** Laravel 11, PHP 8.2  
- **Database:** MySQL 8  
- **Web Server:** Apache 2.4 (Reverse Proxy for Laravel)  
- **Hosting:** AWS EC2 (Ubuntu 24.04, t2.micro free tier)  
- **SSL:** Let’s Encrypt (auto-renewed via Certbot)  
- **Domain:** DuckDNS free dynamic domain

---

## 📦 Professional Features

- ✅ Secure **HTTPS backend** with Let’s Encrypt SSL  
- ✅ Laravel backend running via **systemd service** (no `php artisan serve`)  
- ✅ **Apache reverse proxy** for backend on port 9000 and React frontend on 80/443  
- ✅ **Firewall (UFW)** only allows ports 22, 80, 443  
- ✅ **Daily automatic backups** of:
  - Laravel `.env` file  
  - MySQL database  
  - 7-day retention with auto-clean  
- ✅ **DuckDNS auto-update** every 5 minutes to handle changing AWS IPs  

---

## 📂 Deployment Architecture

     ┌───────────────────┐
     │   React Frontend   │  (Port 80/443, Apache)
     └─────────┬─────────┘
               │
         HTTPS Reverse Proxy
               │
     ┌─────────▼─────────┐
     │  Laravel Backend  │  (Port 9000, systemd)
     └─────────┬─────────┘
               │
          MySQL Database


---

## 🔐 Security & Maintenance

- **UFW firewall** enabled (22/80/443)  
- **SSL auto-renewed** with Certbot  
- **DuckDNS dynamic IP updates** prevent downtime  
- **Daily backups** stored in `/home/ubuntu/backups` with auto-clean after 7 days

---


## 👤 Author

**Maryam Tufail**  
- GitHub: [@maryamtufail01](https://github.com/maryamtufail01)

---
