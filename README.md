# Template Plugin for Omeka Classic

This is a (unofficial) barebones plugin for Omeka Classic that provides a simple example of a plugin structure. It includes a configuration page and an admin view, offering a starting point for developing custom plugins and some simple examples. Its based on informations from the Omeka classic tutorials: https://omeka.readthedocs.io/en/latest/Tutorials/index.html and own experiences. It served me as template and demonstration plugin as it contains some common building blocks used for Omeka Classic plugins.

### Features

 - A simple plugin structure incl.:
    - A plugin metadata file (`plugin.ini`) with basic information about the plugin.
    - A plugin class (`TemplatePlugin.php`) that extends `Omeka_Plugin_AbstractPlugin`.
 - A main plugin class (`TemplatePlugin.php`) with examples and explanations about the functions, hooks and filters and what they are doing:
    - Hooks and filters for Omeka events like `install`, `uninstall`, everything configuration page related, `define_acl`, and `define_routes`.
    - An example of creating a custom database table.
 - A configuration page to set options:
    - Examples of `formText()`
    - Examples of `formCheckbox()`
    - Examples of `formSelect()`
 - An admin view to display plugin-specific data or functionality like:
    - Example view for additional functionality
        - Show simple text
        - Show options set in the configuration form
        - Some button and flash message examples
    - Navigation with links to different views.

### Installation

Download or clone this repository into the `plugins/` directory of your Omeka Classic installation:

```
git clone https://github.com/csidirop/omekaplugin_template.git plugins/Template
```

### File Structure

```
template/
├── TemplatePlugin.php         # Main plugin class
├── views/                     # Views for the plugin
│   ├── admin/
│   │   ├── index.php          # Admin view template
│   │   ├── config-form.php    # Configuration form template
│   └── public/                # (Optional) Public-facing views
│       └── index.php          # Placeholder for public template
├── plugin.ini                 # Plugin metadata
```

## Development

This plugin is designed as a starting point for custom Omeka Classic plugin development. Developers can:

    Add more hooks to the TemplatePlugin class.
    Define additional routes for custom functionality.
    Extend the configuration form and admin views.

For more information on Omeka plugin development, see the [Omeka Classic Developer Documentation](https://omeka.readthedocs.io/en/latest/).

## Contributing

Contributions are welcome! Please feel free to submit a pull request or open an issue if you encounter a bug or have a feature request.

## License

This plugin is released under the MIT License. See the LICENSE file for details.