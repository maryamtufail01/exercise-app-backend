# MoveMate Backend (Laravel + MySQL)

MoveMate is a **minimal exercise tracking app** built only to **showcase DevOps and deployment skills**.  

- Functionality is intentionally simple:
  1. **User Signup**
  2. **User Login**
  3. **Dashboard:**  
     *"Welcome to your Exercise Dashboard! Track your progress and stay fit"*  
     with a **Logout button**

- **No additional exercise features** are implemented.  
- The purpose of this project is to **demonstrate professional DevOps practices**, including:
  - Cloud deployment on AWS EC2
  - Reverse proxy with Apache
  - SSL with Let’s Encrypt
  - Systemd backend service (no `php artisan serve`)
  - Automatic daily backups
  - Firewall & security hardening

---

## 🚀 Live Demo

- **Frontend:** [https://movemate.duckdns.org](https://movemate.duckdns.org)
- **Backend API Test Endpoint:** [https://movemate.duckdns.org/api/test](https://movemate.duckdns.org/api/test)

---

## 🛠 Tech Stack

- **Backend:** Laravel 11, PHP 8.2  
- **Database:** MySQL 8  
- **Web Server:** Apache 2.4 (Reverse Proxy for Laravel)  
- **Hosting:** AWS EC2 (Ubuntu 24.04, t2.micro free tier)  
- **SSL:** Let’s Encrypt (auto-renewed via Certbot)  
- **Domain:** DuckDNS free dynamic domain

---

## 📦 Project Features

- ✅ Secure **HTTPS backend** using Let’s Encrypt SSL  
- ✅ Laravel backend running via **systemd service** (no `php artisan serve`)  
- ✅ **Apache reverse proxy** with React frontend on port 80/443  
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

## 🔐 Security

- **UFW firewall** enabled (22/80/443)  
- **SSL auto-renewed** by Certbot  
- **DuckDNS dynamic IP updates** prevent downtime  
- **Daily backups** with `.env` and DB dump to `/home/ubuntu/backups`

---

## 📌 Next Professional Step (Optional)

Add **CI/CD with GitHub Actions**:  
- Auto-deploy backend to EC2 when pushing to `main` branch  
- Restart systemd service automatically  
- Zero manual steps for deployment

---

## 👤 Author

**Maryam Tufail**  
- GitHub: [@maryamtufail01](https://github.com/maryamtufail01)

---
