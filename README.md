Tedor Path — Modern Learning Platform Website

Welcome to the official website project for **Tedor Path**, a forward-thinking Ethiopian education platform. This repository contains the source code, structure, and configuration files for our dynamic, multilingual, and responsive website — built with scalability, accessibility, and performance in mind.

🌟 Overview

Tedor Path is an educational initiative that aims to make modern learning accessible, relevant, and inspiring to Ethiopian learners. This project serves as the digital gateway to our platform — highlighting who we are, what we offer, and how students, parents, and partners can connect with us.

The website is fully modular, component-based, and built using PHP, Tailwind CSS, and a custom configuration-driven content management structure.

## 📑 Features

- 📄 **Component-Based Architecture** – Reusable, organized structure for rapid development.
- 🖋️ **Dynamic Content with Config Files** – Pages are driven by PHP arrays (e.g. `about-config.php`, `contact-config.php`, etc.).
- 🌙 **Dark Mode** – Full support for light and dark themes with smooth transitions.
- 🌐 **Responsive Design** – Tailored for desktop, tablet, and mobile devices.
- 💬 **Contact Form** – Interactive inquiry submission (can be extended with backend).
- 📍 **Google Maps Integration** – Embedded location with external map link.
- 🎨 **Brand Font & Style System** – Unified typography and color palette with `font-body`, `font-heading`, and brand blues.
- ⚙️ **Easily Configurable** – Centralized config management for content and metadata.

---

## 🚀 Tech Stack

| Layer          | Technology                                               |
|----------------|----------------------------------------------------------|
| **Frontend**   | HTML5, Tailwind CSS (via build)                   |
| **Backend**    | PHP 8+                                                   |
| **Web Server** | Apache                                                   |
| **Deployment** | Local                                                    |

---

## 📁 Project Structure

🚀 Tech Stack

| Layer | Technology |
| **Frontend** | HTML5, Tailwind CSS (via CDN or build), Alpine.js (optional) |
| **Backend** | PHP 8+ |
| **Web Server** | Apache |
| **Deployment** | Local |

📁 Project Structure
```
/tedor-path
├── assets/
│ ├── css/
│ ├── js/
│ └── images/
├── components/
│ ├── header.php
│ ├── footer.php
│ ├── navbar.php
│ └── ...
├── config/
│ ├── about-config.php
│ ├── contact-config.php
│ └── ...
├── pages/
│ ├── index.php
│ ├── about.php
│ ├── contact.php
│ └── ...
├── partials/
│ ├── head.php
│ └── scripts.php
└── .htaccess
```

- `assets/` → Static resources like CSS, JS, and images.
- `components/` → Reusable PHP UI components (e.g. header, footer, navbar).
- `config/` → Centralized configuration files for page content.
- `pages/` → Individual page templates.
- `partials/` → Shared partials for head tags, scripts, etc.
- `.htaccess` → Apache configuration for routing and security.

💻 Local Development

To run the website locally:

1. Install PHP 8+ and Apache.
2. Clone this repository:
    ```bash
    git clone https://github.com/yourusername/tedorpath
    ```
3. Place the project in your local Apache `htdocs` directory.
4. Access the website via:
    ```
    http://localhost/tedorpath/public/
    ```

🎨 Brand Identity

- **Brand Colors:** Custom blues and accent shades for a modern, fresh look.
- **Typography:**
  - `font-body` → Main content text
  - `font-heading` → Page headings and titles

✨ Contributions

We welcome contributions, suggestions, and improvements. Please open an issue or submit a pull request!

**Tedor Path — Modern Learning, Modern Ethiopia.**
