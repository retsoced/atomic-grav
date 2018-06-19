# Codepen Embed Plugin

The **Codepen Embed** Plugin is for [Grav CMS](http://github.com/getgrav/grav). You can use it to easily embed 'pens' from codepen.io right from your markdown editor.

## Installation

Installing the Codepen Embed plugin can be done in one of two ways. The GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

### GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install codepen-embed

This will install the Codepen Embed plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/codepen-embed`.

### Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `codepen-embed`. You can find these files on [GitHub](https://github.com/apotropaic/grav-plugin-codepen-embed) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/codepen-embed

> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav) and the [Shortcode Core](https://github.com/getgrav/grav-plugin-shortcode-core)


## Configuration

Before configuring this plugin, you should copy the `user/plugins/codepen-embed/codepen-embed.yaml` to `user/config/plugins/codepen-embed.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

## Usage

```markdown
[codepen id=CODEPEN_ID]
```

You can use these parameters (only id is required)
| Parameter | Default Value | Description |
| ------------- | ------------- | ------------- |
| id  | The codepen from the url. For example on this pen: https://codepen.io/akm2/pen/rHIsa the id would be rHIsa |
| user  | required, no default |Include the pen user in the markup  |
| title  | default: '' | Include the codepen  |
| preview  | default: true. | Show preview of the pen once embedded |
| height  | default: 265 | Height of the pen embed  |
| defaultTab  | default: js,result | What tabs should be shown by default |
| content | default:'' | For SEO purposes you can also include content that will be removed once the pen has been embeded.  |


