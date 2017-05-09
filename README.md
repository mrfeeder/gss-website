# GSS Website - Based on [Bedrock](https://roots.io/bedrock/) 

Much of the philosophy behind Bedrock is inspired by the [Twelve-Factor App](http://12factor.net/) methodology including 
the [WordPress specific version](https://roots.io/twelve-factor-wordpress/).

## Design
[PSD](https://mega.nz/#!NWJFAb6A!ljW-k_YAA30d3NxQqdbBcg4qFiaqyNS-GRK2DV4K5A4)

## Requirements

* PHP >= 5.6
* Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)

## Installation

1. Clone the repo

  `git clone git@github.com:gsmartsolutions/gss-website.git`
  
2. Run Composer to get Wordpress core and plugins

  `composer install`
  
3. Copy `.env.example` to `.env` and update environment variables:
  * `DB_NAME` - Database name
  * `DB_USER` - Database user
  * `DB_PASSWORD` - Database password
  * `DB_HOST` - Database host
  * `WP_ENV` - Set to environment (`development`, `staging`, `production`)
  * `WP_HOME` - Full URL to WordPress home (http://example.com)
  * `WP_SITEURL` - Full URL to WordPress including subdirectory (http://example.com/wp)
  * `AUTH_KEY`, `SECURE_AUTH_KEY`, `LOGGED_IN_KEY`, `NONCE_KEY`, `AUTH_SALT`, `SECURE_AUTH_SALT`, `LOGGED_IN_SALT`, 
  `NONCE_SALT` (Copy n Paste from [Roots WordPress Salt Generator][roots-wp-salt].)

4. Set your site vhost document root to `/path/to/site/web/`

5. Verify install with `WP_HOME`. Go to Admin at `/wp/wp-admin`

## Theme Developmemnt

Using Sage for theme development. Read more at [https://roots.io/sage/docs/](https://roots.io/sage/docs/).

### Install gulp and Bower

1. Install [node.js](http://nodejs.org/download/)
2. Update latest version of npm : `npm install -g npm@latest`
1. Install [gulp](http://gulpjs.com) and [Bower](http://bower.io/) globally with `npm install -g gulp bower`
2. Go to theme with `cd ./web/app/themes/gss`, then run `npm install`
3. Run `bower install`
4. Create `/path/to/theme/assets/manifest.json` from `/path/to/theme/assets/manifest.json.example`
5. Update `devUrl` in `/path/to/theme/assets/manifest.json` to reflect your local Wordpres hostname (`WP_HOME`).
6. Use following gulp commands and enjoy! 

### Available gulp commands

* `gulp` — Compile and optimize the files in your assets directory
* `gulp watch` — Compile assets when file changes are made
* `gulp --production` — Compile assets for production (no source maps).

### Using BrowserSync

Create `/path/to/theme/assets/manifest.json` from `/path/to/theme/assets/manifest.json.example` 

To use BrowserSync during `gulp watch` you need to update `devUrl` at the bottom of `/path/to/theme/assets/manifest.json` to reflect your local development hostname.

For example, if your local development URL is `http://project-name.dev` you would update the file to read:
```json
...
  "config": {
    "devUrl": "http://project-name.dev"
  }
...
```
If your local development URL looks like `http://localhost:8888/project-name/` you would update the file to read:
```json
...
  "config": {
    "devUrl": "http://localhost:8888/project-name/"
  }
...
```

## Deploys

WIP

## Documentation

Bedrock documentation is available at [https://roots.io/bedrock/docs/](https://roots.io/bedrock/docs/).

## Contributing

- [toannk](https://twitter.com/khanhtoan)
- [satthu159]()
- [mrfeeder]()
- [tucq88](https://twitter.com/tucq88)
