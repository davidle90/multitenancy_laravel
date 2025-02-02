
# Laravel Template with Breeze, Vue, Bootstrap, and Multitenancy

This repository is a Laravel template that includes:

- **Breeze** for simple authentication
- **Vue.js** for front-end development
- **Grid Layout Plus:** for draggable and resizable grid layout for Vue 3
- **Bootstrap** for UI components
- **Multitenancy** setup for handling multiple tenants

Follow the steps below to clone the project, set it up, and push it to your own GitHub repository.

## Steps to Set Up

### 1. Clone This Repository

To get started, clone the repository to your local machine by running the following command:

```bash
git clone https://github.com/yourusername/your-laravel-template.git
cd your-laravel-template
```

> **Note:** Replace `yourusername/your-laravel-template` with the actual URL of the template repository.

### 2. Remove Git History (Optional but Recommended)

To start fresh with your own repository and remove any commit history from the original template, run this command:

```bash
rm -rf .git
```

### 3. Initialize a New Git Repository

Create a new Git repository by running:

```bash
git init
git add .
git commit -m "Initial commit from template"
```

### 4. Rename the Laravel App (Optional)

If you want to rename the app (e.g., update the app name in `config/app.php` and `.env`), now is a good time to do it. Make sure to adjust any other settings according to your new app name.

### 5. Create Your Own GitHub Repository

Go to [GitHub](https://github.com) and create a new repository for your project.

### 6. Add the New Remote and Push

Once your repository is ready, link it to the local project by adding the remote URL. Replace `yourusername/new-repo.git` with your new repository URL:

```bash
git remote add origin https://github.com/yourusername/new-repo.git
git branch -M main
git push -u origin main
```

### 7. Final Steps

After pushing the project to your GitHub repository, you can continue working on your Laravel application, add new features, or experiment with multitenancy!

---

## What’s Included in This Template

- **Breeze:** Simple authentication scaffold (login, registration, etc.)
- **Vue.js:** Front-end framework to build interactive components
- **Grid Layout Plus:** A draggable and resizable grid layout for Vue 3
- **Bootstrap:** Easy-to-use CSS framework for responsive UI
- **Multitenancy Setup:** Ready-to-use configuration to handle multiple tenants in the app
