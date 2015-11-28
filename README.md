# Dirby - an opinionated Kirby docs theme

![https://raw.githubusercontent.com/stefanzweifel/dirby/master/_github-files/readme-image.png](https://raw.githubusercontent.com/stefanzweifel/dirby/master/_github-files/readme-image.png)

Dirby (Docs + Kirby) is an opinionated [Kirby](http://getkirby.com) docs theme built with Bootstrap 3.
*This theme was built for Kirby 2.1. and Kirby Version 2.2.*

## Screenshots

![https://raw.githubusercontent.com/stefanzweifel/dirby/master/_github-files/screenshots/code-example.png](https://raw.githubusercontent.com/stefanzweifel/dirby/master/_github-files/screenshots/code-example.png)

[More screenhots](https://github.com/stefanzweifel/dirby/tree/master/_github-files/screenshots)

## Preparation

> I highly recommend you start with a fresh copy of Kirby. The theme overrides and changes many files which ship with Kirby.
> If you're starting with a fresh Kirby install, you can safely remove the following files

- `site/blueprints/project.php`
- `site/blueprints/projects.php`
- `site/templates/*`
- `site/snippets/*`

## Installation

1. Download current release and unzip files
2. Copy `site/snippets/*` files
3. Copy `site/templates.php` files to your Kirby installation
4. Copy `site/controllers/*.php` files to your Kirby installation (search.php and login.php)
5. Copy `site/blueprint/dirby.php` and `site/blueprint/sitemap.php`
5. Copy `assets/css/*`
6. copy `assets/js/*`


### Add logout route

Add the following snippet to `site/config/config.php`

```php
c::set('routes', array(
  array(
    'pattern' => 'logout',
    'action'  => function() {
      if($user = site()->user()) $user->logout();
      go('login');
    }
  )
));
```

## What's included

- A simple, readable Bootstrap Theme (easily customisable through our provided [gulpfile.js](http://gulpjs.com))
- Font Awesome Icons
- Built in Search
- Built in Sitemap
- All `dirby`-pages are protected and only visible to logged in users (No `.htaccess` Auth required)
- Automatically highlight code snippets (Highlight.js)
- Shortened URLs for easy sharing

## Adjust CSS

Dirby ships with a ready-to-use gulpfile.

1. Copy `package.json`, `gulpfiles.js` and `resources/*` into your kirby project
2. Install dependencies with `npm install`
3. Run `gulp watch` in your Terminal (Gulp will automatically recompile SASS after files changes)
3. Do your changes in `resources/assets/sass/theme.scss`

## License

MIT
