# Atomic Pattern Library - GRAV project

[![pattern library screenshot](atomic-pattern-library.jpg)](http://pattern-library.decoster.design)

## Table of contents

- [Introduction](#introduction)
    - [Why Atomic?](#why-atomic)
    - [What's GRAV?](#whats-grav)
- [Site Setup](#site-setup)
    - [Installation](#installation)
    - [Plugins](#plugins)
- [Page setup](#page-setup)
    - [Upload the page tree file](#upload-the-page-tree-file)
    - [Go to the import view](#go-to-the-import-view)
    - [Import the uploaded page tree file](#import-the-uploaded-page-tree-file)
- [License](#license)
- [Links](#links)

## Introduction

This project is the mixture of two things I am extremely passionate about; [GRAV](https://getgrav.org "Get GRAV - the best Flat-file CMS platform") and Pattern Libraries.

The pattern library is a base framework for you to be able to take a running start at implementing a comprehensive and well thought out system for identifying and communicating patterns and their interactions with your design and development teams.

### Why Atomic?

Atomic design is methodology for creating design systems. There are five distinct levels in atomic design: Atoms, Molecules,  Organisms, Templates and Pages. This structure creates a system of clearly defined relationships in terms that are easy to understand.

For more info on Atomic Design, [checkout what Brad Frost has to say about it](http://bradfrost.com/blog/post/atomic-web-design/ "Atomic Web Design").

### What's GRAV?

Grav is a **Fast**, **Simple**, and **Flexible**, file-based Web-platform.  There is **Zero** installation required.  Just extract the ZIP archive, and you are already up and running.  It follows similar principles to other flat-file CMS platforms, but has a different design philosophy than most. Grav comes with a powerful **Package Management System** to allow for simple installation and upgrading of plugins and themes, as well as simple updating of Grav itself.

#### [Checkout GRAV](https://getgrav.org "Get GRAV - the best Flat-file CMS platform")

## Site Setup

So you want to do this? Great, start by either cloning this repo of forking it.

### Installation

1. Clone the [Pattern library repository](https://github.com/retsoced/grav-pattern-library-template) to a folder in the webroot of your server, e.g. `~/webroot/grav`. Launch the **console**:
   ```
   $ cd ~/webroot
   $ git clone git@github.com:retsoced/grav-pattern-library-template.git
   ```
### Plugins

I have installed a base selection of [plugins](https://getgrav.org/downloads/plugins) to try and make the pattern library as useful as possible, and they are the following:

* [Admin](https://github.com/getgrav/grav-plugin-admin)
* [Breadcrumbs](https://github.com/getgrav/grav-plugin-breadcrumbs)
* [Codepen Embed](https://github.com/andrewscofield/grav-plugin-codepen-embed)
* [Comments](https://github.com/getgrav/grav-plugin-comments)
* [Email](https://github.com/getgrav/grav-plugin-email)
* [Error](https://github.com/getgrav/grav-plugin-error)
* [Featherlight](https://github.com/getgrav/grav-plugin-featherlight)
* [Form](https://github.com/getgrav/grav-plugin-form)
* [Highlight](https://github.com/getgrav/grav-plugin-highlight)
* [Login](https://github.com/getgrav/grav-plugin-login)
* [Problems](https://github.com/getgrav/grav-plugin-problems)
* [SEO](https://github.com/paulmassen/grav-plugin-seo)
* [Simplesearch](https://github.com/getgrav/grav-plugin-simplesearch)

The theme is a custom theme built using Sass and Simple Grid. Using Simple Grid enables the site to have a modern responsive grid system behind the scenes, but it's also extremely well built, supported and lightweight. The styles are broken up into groups:

* **common** : shared styles for the entire site, theme and patterns.
* **patterns** : specific definitions for **just** the patterns. This will help you keep track of where all of your interactions live and keep the water running between the patterns and the theme clean and clear.
* **theme** : custom styles for just the theme. The theme is targeted through the cascade keeping things broken out into clear partials using a component based approach.

Everything is downloaded and installed for you to make it easy to get started, so you just need to make sure your local environment has at least PHP 5.6 (7 is a far better choice) installed and running, and that your file/folder permissions are setup correctly. For more information on getting GRAV up and running checkout their [installation guide](https://learn.getgrav.org/basics/installation).

#### Dev note:   
I don't have Gulp setup and running yet to make the local webserver run automatically or to compile the JavaScript or Sass yet. I use [Codekit](https://codekitapp.com/) to compile the dependency files and libsass to compile the styles into the `/user/themes/patterlibrary/css` folder. That integration is coming in the next release.

---

2. Install the **plugin** and **theme dependencies** by using the [Grav CLI application](https://learn.getgrav.org/advanced/grav-cli) `bin/grav`:
   ```
   $ cd ~/webroot/grav
   $ bin/grav install
   ```

Check out the [install procedures](https://learn.getgrav.org/basics/installation) for more information.

# Adding Functionality

You can download [plugins](https://getgrav.org/downloads/plugins) or [themes](https://getgrav.org/downloads/themes) manually from the appropriate tab on the [Downloads page on https://getgrav.org](https://getgrav.org/downloads), but the preferred solution is to use the [Grav Package Manager](https://learn.getgrav.org/advanced/grav-gpm) or `GPM`:

```
$ bin/gpm index
```

This will display all the available plugins and then you can install one or more with:

```
$ bin/gpm install <plugin/theme>
```

# Updating

To update Grav you should use the [Grav Package Manager](https://learn.getgrav.org/advanced/grav-gpm) or `GPM`:

```
$ bin/gpm selfupgrade
```

To update plugins and themes:

```
$ bin/gpm update
```


# Contributing
We appreciate any contribution to Grav, whether it is related to bugs, grammar, or simply a suggestion or improvement! Please refer to the [Contributing guide](CONTRIBUTING.md) for more guidance on this topic.
