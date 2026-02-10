# Lighting Africa In Solar – PHP Version

This project now includes a **PHP** version of the site that runs without Node.js.

## How to run (XAMPP)

1. Start **Apache** in XAMPP.
2. Open in browser:
   - If the project is in `htdocs` root: `http://localhost/`
   - If the project is in a subfolder (e.g. `lighting africa in solar v2`): `http://localhost/lighting%20africa%20in%20solar%20v2/`

## PHP pages

| Page   | File                |
|--------|---------------------|
| Home   | `index.php`         |
| About  | `about.php`         |
| Products | `products.php`    |
| Services | `services.php`    |
| How Solar Works | `how-solar-works.php` |
| Contact | `contact.php`     |
| Quote  | `quote.php`        |
| Policies | `policies.php`   |
| 404    | `404.php`          |

## Structure

- **`includes/`** – `config.php`, `header.php`, `footer.php`, `navbar.php`, `section_heading.php`
- **`assets/`** – `css/custom.css`, `images/`, `favicon.ico`
- **Root** – `index.php`, `about.php`, and other page scripts

## Forms

- **Contact** (`contact.php`) – POST handler shows a “Message sent!” notice. You can plug in mail or a database.
- **Quote** (`quote.php`) – POST handler shows “Quote request submitted!”. Same as above for real sending/storage.

## Using only PHP

To drop the React app and use only PHP, you can remove (after backing up):

- `src/`
- `index.html`
- `package.json`, `package-lock.json`, `bun.lockb`
- `vite.config.ts`, `tsconfig*.json`, `tailwind.config.ts`, `postcss.config.js`, `eslint.config.js`, `components.json`, `vitest.config.ts`

The PHP site will keep working with `includes/`, `assets/`, and the `.php` files in the root.
