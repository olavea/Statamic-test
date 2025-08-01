<p align="center"><img src="https://statamic.com/assets/branding/Statamic-Logo+Wordmark-Rad.svg" width="400" alt="Statamic Logo" /></p>

## About Statamic

Statamic is the flat-first, Laravel + Git powered CMS designed for building beautiful, easy to manage websites.

> [!NOTE]
> This repository contains the code for a fresh Statamic project that is installed via the Statamic CLI tool.
>
> The code for the Statamic Composer package itself can be found at the [Statamic core package repository][cms-repo].

## Learning Statamic

Statamic has extensive [documentation][docs]. We dedicate a significant amount of time and energy every day to improving them, so if something is unclear, feel free to open issues for anything you find confusing or incomplete. We are happy to consider anything you feel will make the docs and CMS better.

## Development

### Prerequisites

-   PHP 8.2 or higher
-   Composer
-   Node.js & npm (for asset compilation)

### Getting Started

1. **Clone the repository**

    ```bash
    git clone <repository-url>
    cd Statamic-test
    ```

2. **Install PHP dependencies**

    ```bash
    composer install
    ```

3. **Set up environment file**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Create a super user account**

    ```bash
    php artisan statamic:make:user
    ```

    Follow the prompts to:

    - Enable Statamic Pro (recommended)
    - Enter your email and name
    - Set a password
    - Choose "Yes" for super user

5. **Install Node dependencies** (optional, for frontend development)
    ```bash
    npm install
    ```

### Accessing the Control Panel

**Option 1: Using Laravel's built-in server**

```bash
php artisan serve
```

Then visit: `http://127.0.0.1:8000/cp`

**Option 2: Using your local development environment**
If you have Laravel Herd, Valet, or similar setup, visit: `http://statamic-test.test/cp`

### Development Commands

-   **Start development server**: `php artisan serve`
-   **Watch assets**: `npm run dev`
-   **Build assets**: `npm run build`
-   **Clear caches**: `php artisan cache:clear`
-   **Clear config**: `php artisan config:clear`

### Troubleshooting

If you encounter issues:

1. **Control panel not accessible**: Ensure you've created a user account with super user privileges
2. **Missing vendor directory**: Run `composer install`
3. **Missing .env file**: Copy from `.env.example` and run `php artisan key:generate`
4. **Permission errors**: Check file permissions on storage and bootstrap/cache directories

## Support

We provide official developer support on [Statamic Pro](https://statamic.com/pricing) projects. Community-driven support is available on the [forum](https://statamic.com/forum) and in [Discord][discord].

## Contributing

Thank you for considering contributing to Statamic! We simply ask that you review the [contribution guide][contribution] before you open issues or send pull requests.

## Code of Conduct

In order to ensure that the Statamic community is welcoming to all and generally a rad place to belong, please review and abide by the [Code of Conduct](https://github.com/statamic/cms/wiki/Code-of-Conduct).

## Important Links

-   [Statamic Main Site](https://statamic.com)
-   [Statamic Documentation][docs]
-   [Statamic Core Package Repo][cms-repo]
-   [Statamic Migrator](https://github.com/statamic/migrator)
-   [Statamic Discord][discord]

[docs]: https://statamic.dev/
[discord]: https://statamic.com/discord
[contribution]: https://github.com/statamic/cms/blob/master/CONTRIBUTING.md
[cms-repo]: https://github.com/statamic/cms
