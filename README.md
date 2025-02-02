# Replacing Tailwind CSS with Bootstrap in Laravel 11

Laravel 11 comes with **Tailwind CSS** by default. If you prefer using **Bootstrap**, follow these steps to replace Tailwind with Bootstrap in your Laravel project.

## 📌 1. Uninstall Tailwind CSS (Optional)
If you no longer need Tailwind, you can remove it by running:

```sh
npm uninstall tailwindcss postcss autoprefixer
```

Then, delete Tailwind's configuration files:

```sh
rm -rf tailwind.config.js postcss.config.js
```

Also, remove any Tailwind references in:
- `vite.config.js`
- `resources/css/app.css`

---

## 📌 2. Install Bootstrap
Run the following command to install Bootstrap and Popper.js:

```sh
npm install bootstrap @popperjs/core
```

---

## 📌 3. Include Bootstrap in Your Project
Open `resources/js/app.js` and add:

```js
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
```

---

## 📌 4. Update Vite Configuration
Ensure your `vite.config.js` looks like this:

```js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
```

---

## 📌 5. Update Your Styles (Optional)
Modify your Blade templates to use Bootstrap classes instead of Tailwind classes.

---

## 📌 6. Compile Assets with Vite
Run the following command to compile assets:

```sh
npm run dev
```

For production:

```sh
npm run build
```

---

## 📌 7. Verify Bootstrap is Working
Test Bootstrap by adding a simple button in `resources/views/welcome.blade.php`:

```html
<button class="btn btn-primary">Bootstrap Button</button>
```

Refresh your browser to confirm Bootstrap is applied correctly.

---

## 🎉 Done!
You have successfully replaced Tailwind CSS with Bootstrap in Laravel 11! 🚀

