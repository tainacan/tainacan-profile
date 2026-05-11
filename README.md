# Tainacan Profile
[![Project Status: WIP – Initial development is in progress, but there has not yet been a stable, usable release suitable for the public.](https://www.repostatus.org/badges/latest/wip.svg)](https://www.repostatus.org/#wip)

A Tainacan plugin that adds a user Profile page to its menu with dedicated features for a customized digital archive management.

## Build it!

Make the script executable:

```sh
chmod u+x build.sh
```

We use sass to build create our css files, so it needs to be compiled. To simply build the necessary `.scss` files into bundled `.css`:

```sh
./build.sh
```

To, besides that, move the necessary plugin files to your WordPress plugin directory:

```sh
./build.sh /var/www/html/wp-content/plugins/
```

If you don't like the script you can bundle things by yourself:

```sh
cd tainacan-profile
npm install
npm run build
```

But keep in mind that the script also takes care of removing some source files not necessary for the plugin to work, such as `.scss` and `.package.json`.

## How to use it?

Just move all files to a folder inside WordPress plugins folder (`wp-content/plugins`) (which is what the script does);

Download and activate Tainacan Profile. And Tainacan, of course;
