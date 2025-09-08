<div align="center">
  <img src="images/logo.png" alt="Logo" width="300"/><br>
  <p>A sample Laravel 12 project with TailwindCSS and Blaze</p>
</div>


## Overview 📚

**Kwiatowo** is a Laravel 12 website featuring an atlas of flowers. Built with **TailwindCSS** and **Blaze**, it includes:

* 🌼 Front page with filtering by **name** and **category**
* ➕ Adding new flower entries
* 🖼️ Saving images to storage
* 💾 Database ORM with migrations for flower entries
* 🔒 Session-based **login for administrator** with middleware protecting sensitive endpoints

## Demo 💻

Check out a demo video of the website in action below: **ready soon**

## Running Locally 🚀

**Prerequisites**: Environment set up for Laravel 12 -
[Laravel 12 Installation Guide](https://laravel.com/docs/12.x/installation)

### Steps:

1. **Copy environment file** and configure database if needed:

```bash
cd Kwiatowo
cp .env.example .env
```

2. **Run database migrations**:

```bash
php artisan migrate
```

3. **Run Laravel dev server**:

```bash
php artisan serve
```

4. **Run Vite for Tailwind compilation** (in a separate terminal):

```bash
npm run dev
```

Your app should now be running at `http://localhost:8000`.

---

## Todo 📝

* ✏️ Edit entry functionality
* 🔗 SEO-friendly URLs for flower entries
* 🗂️ Move category table to the database
* 📝 Markdown support in entry content
