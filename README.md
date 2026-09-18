# 🚀 Krikkit.ai — AI-Assisted Web Project Builder SaaS

[![Laravel](https://img.shields.io/badge/Laravel-13.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.3%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![Livewire](https://img.shields.io/badge/Livewire-4.x-4E56A6?style=for-the-badge&logo=livewire&logoColor=white)](https://livewire.laravel.com)
[![React](https://img.shields.io/badge/React-19.x-61DAFB?style=for-the-badge&logo=react&logoColor=black)](https://react.dev)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-v4.0-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white)](https://tailwindcss.com)
[![Vite](https://img.shields.io/badge/Vite-8.x-646CFF?style=for-the-badge&logo=vite&logoColor=white)](https://vitejs.dev)

**Krikkit.ai** is a self-hosted, full-featured AI web project builder SaaS platform developed by **deep42**. It enables users to create, chat, iterate, preview, edit, inspect, and publish web applications powered by LLMs in a single studio workspace—complete with subscription billing, admin controls, starter templates, and CMS capabilities.

---

## 🌟 Key Features

### 🤖 1. AI Builder & Streaming Chat Workspace ("The Lab")
* **Multi-LLM Provider Support:** Connect and switch between top AI providers seamlessly:
  * **OpenAI** (GPT-4o, GPT-4o-mini)
  * **Anthropic** (Claude 3.5 Sonnet, Claude 3 Opus)
  * **DeepSeek** (DeepSeek V3, DeepSeek R1)
  * **Google Gemini**
  * **xAI / Grok**
  * **Zhipu AI**
* **Streaming AI Responses & Tool Execution:** Real-time conversational AI that inspects, edits files, and executes build tasks autonomously.
* **Live Interactive Web Preview:** Real-time hot-reloaded project previews with multi-device responsive viewports (Desktop, Tablet, Mobile).
* **Embedded CodeMirror Editor:** Code editor powered by CodeMirror 6 with syntax highlighting for HTML, CSS, JavaScript, React, JSON, and Markdown.
* **Inspect Mode & Design Inspector:** Select elements directly in the live preview to inspect HTML structure and visually modify CSS styles.
* **Integrated Web Terminal:** Embedded `xterm.js` console with fit addon for running workspace shell commands.
* **Automatic Stock Photo Lookup:** Automatic photo search and insertion powered by Unsplash & Pixabay APIs.

### 🔌 2. Developer & Database Integrations
* **Supabase Integration:** Connect Supabase for direct database management, table schema inspection, and automated SQL migrations within the builder workspace.
* **GitHub OAuth & Workflows:** Import repositories directly into the Lab, push updates, and generate Pull Requests with a click.
* **ZIP Archive Export:** Download project source code as clean, ready-to-run ZIP archives at any point.

### 🌐 3. Publishing & Custom Domains
* **Instant Subdomain Publishing:** Host projects instantly on custom subdomains (`project.yourdomain.com`).
* **Custom Domain Support:** Guide users through connecting their custom domain names with DNS guidance.
* **Automated Preview Thumbnails:** Built-in project screenshot and thumbnail generation for dashboard portfolio cards.

### 🎨 4. Starter Templates & Demo Showcase
* Blank **React + Vite** boilerplate for custom builds.
* Production-ready starter templates for SaaS, Portfolio, E-commerce, and Hospitality.
* Premium featured design demos:
  * **Maison Noir**
  * **Maison Éclat**
  * **Maison Atelier**
  * **ArcVault**

### 💰 5. Subscriptions, Credits & Billing SaaS Core
* **Payment Gateways:** Integrated **Stripe** & **PayPal** gateways with automated webhook listeners for subscription management.
* **Tiered Subscription Packs:** Define custom subscription tiers, monthly/annual pricing, project quotas, and credit limits.
* **Credit System:** Granular credit system tracking AI token usage per prompt and turn.
* **Automated Invoices:** Automated order processing and downloadable PDF/email invoice receipts.

### 🛡️ 6. Powerful Admin Dashboard & Operational Tools
* **Operational Analytics:** Monitor user growth, revenue, credit consumption, active sessions, and AI request logs.
* **Role-Based Access Control (RBAC):** Assign fine-grained roles (Owner, Admin, Support, Customer) with specific platform abilities.
* **Lab Console & Administration:** Monitor active Lab sessions, handle failed AI turns, and configure default LLM models.
* **Landing Page & Theme Customizer:** Dynamic website builder for the marketing landing page (Hero mesh, Bento grids, showcase features) plus theme controls (Dark/Light mode, accent color picker, border radius).
* **CMS & Content Management:** Publish blog posts, maintain static pages (Terms, Privacy, Refund policies), handle newsletter subscriptions, and view contact submissions.
* **Multi-Language & SEO:** Manage translations across locales, edit Open Graph meta tags, and configure search engine verification.

---

## 🛠️ Technology Stack

| Layer | Technologies Used |
| :--- | :--- |
| **Backend Framework** | PHP 8.3+, Laravel 13, Livewire 4, Blade |
| **Frontend UI** | React 19, Vite 8, Tailwind CSS v4, Lucide Icons |
| **Code Editor & Terminal** | CodeMirror 6, Xterm.js 6, Streamdown Markdown Renderer |
| **Database** | MySQL 8+ / MariaDB 10.6+ / SQLite |
| **Queues & Async Jobs** | Laravel Queue Worker (Database / Redis) |
| **Payment Processors** | Stripe API & Webhooks, PayPal SDK |
| **Third-Party APIs** | OpenAI, Anthropic, DeepSeek, Google AI, xAI, Supabase, GitHub, Unsplash, Pixabay |

---

## 📂 Project Structure

```text
krikkit.ai/
├── Documentation/        # Comprehensive documentation (Online PDF & Offline web docs)
├── ServerFiles/          # Production web server application
│   └── Krikkit/          # Core Laravel 13 + Livewire + React project root
│       ├── app/          # Laravel Controllers, Models, Livewire components, AI Agents
│       ├── config/       # Application configuration files
│       ├── database/     # DB Migrations, Seeders, & SQLite fallback
│       ├── public/       # Compiled web assets and entry point
│       ├── resources/    # Blade views, React components, and CSS styles
│       ├── routes/       # Web, API, and Webhook routing
│       ├── storage/      # Logs, build cache, uploaded project assets
│       ├── composer.json # PHP dependencies & scripts
│       ├── package.json  # NPM dependencies & Vite scripts
│       └── vite.config.js# Vite bundler configuration
├── Support/              # Additional support resources
├── krikkit.sql           # Database schema backup / initial dump
└── README.md             # Project overview & documentation (This file)
```

---

## 🚀 Quick Setup & Installation

### Server Requirements
* **PHP:** `>= 8.3` (Extensions required: `bcmath`, `ctype`, `curl`, `fileinfo`, `gd`, `json`, `mbstring`, `openssl`, `pdo`, `tokenizer`, `xml`, `zip`)
* **Node.js:** `>= 20.x` & **npm:** `>= 10.x`
* **Composer:** `>= 2.x`
* **Database:** MySQL 8+ / MariaDB 10.6+ (or SQLite for local dev)
* **Web Server:** Nginx or Apache with URL rewriting enabled

---

### Option A: Web Installer Wizard (Recommended)

1. Upload the files inside `ServerFiles/Krikkit` to your web server directory.
2. Ensure permissions on `storage` and `bootstrap/cache` are writable:
   ```bash
   chmod -R 775 storage bootstrap/cache
   ```
3. Navigate to `https://yourdomain.com/install` in your web browser.
4. Follow the step-by-step **Hitchhiker** installation wizard:
   * System Requirements & Directory Permissions check
   * CodeCanyon Purchase Code entry (optional)
   * Database credentials setup
   * Automated Database Migration & Seeding
   * Owner Admin Account creation

---

### Option B: Manual Installation (CLI)

1. **Navigate to the server directory:**
   ```bash
   cd ServerFiles/Krikkit
   ```

2. **Install PHP & Node Dependencies:**
   ```bash
   composer install --no-dev --optimize-autoloader
   npm run install:deps
   ```

3. **Configure Environment File:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   *Edit `.env` to configure your database credentials, `APP_URL`, mail settings, and AI provider API keys.*

4. **Run Database Migrations & Seeders:**
   ```bash
   php artisan migrate --force
   php artisan db:seed --force
   ```

5. **Build Frontend Assets:**
   ```bash
   npm run build
   ```

6. **Create Storage Symlink & Cache Optimization:**
   ```bash
   php artisan storage:link
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

7. **Start Background Queue Worker:**
   ```bash
   php artisan queue:work --tries=3
   ```

---

## 💻 Local Development Setup

To run the application locally for development with hot-reloading:

```bash
cd ServerFiles/Krikkit

# Install dependencies
composer install
npm install

# Start all services concurrently (Server, Queue, Logs, Vite hot-reload)
composer run dev
```

---

## 🔑 Key Environment Variables (`.env`)

| Variable | Description |
| :--- | :--- |
| `APP_URL` | Full URL of your Krikkit installation (e.g. `https://krikkit.ai`) |
| `OPENAI_API_KEY` | OpenAI API key for AI builder capabilities |
| `ANTHROPIC_API_KEY` | Anthropic Claude API key |
| `DEEPSEEK_API_KEY` | DeepSeek AI API key |
| `STRIPE_KEY` / `STRIPE_SECRET` | Stripe payment gateway credentials |
| `STRIPE_WEBHOOK_SECRET` | Stripe webhook signature secret |
| `PAYPAL_CLIENT_ID` / `PAYPAL_SECRET` | PayPal gateway credentials |
| `UNSPLASH_ACCESS_KEY` | Unsplash API key for stock image lookup |
| `GITHUB_CLIENT_ID` / `GITHUB_CLIENT_SECRET` | GitHub OAuth credentials for Lab integration |

---

## 📖 Documentation & Support

* **Offline Documentation:** Open [`Documentation/Offline Doc/index.html`](Documentation/Offline%20Doc/index.html) in your browser for complete offline guides.
* **Online Documentation:** Visit [doc.krikkit.space](https://doc.krikkit.space) for live documentation.
* **Support Hub:** Submit support requests at [Deep42 Support Hub](https://hub.deep42.co/).

---

## 📄 License

This software is commercial software licensed under the **CodeCanyon Standard / Extended License**. Developed with ❤️ by **deep42**.
