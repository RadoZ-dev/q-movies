# Q Movies WP Plugin
The primary function of Q Movies plugin is to register custom post type called **movies** and add dedicated menu to the admin menu,
and register custom Gutenberg block which is used for favorite movie quote display.

## Installation
Download zipped folder with the source code of the plugin from GitHub repository and follow the standard WP plugin installation procedure.
(in this case _Plugins > Add New > Upload Plugin_). No custom install settings required.

## Usage
### Movies Custom Post Type
After the installation and activation process, new menu item, **Movies**, will appear in the main navigation section of Admin Menu. 
The new item has two submenu ites - _Movies_ and _Add New_. _Movies_ submenu link takes you to a screen with all the **movies** posts.
_Add New_ link takes you to a screen for adding a new _movies_ post. Add new post screen contains a custom metabox for adding movie titles
which is located under the Gutenberg editor and the content from the field is displayed as h1 heading in movies post template (views/custom-post-templates/single-movies.php).

### Favorite Movie Quote Gutenberg Block
**Favorite Movie Quote** is a simple text widget block which belongs to _Widgets_ category of Gutenberg blocks.
Usage of the block is simple - add the block to a post content and add a desired movie quote to a text field in block editor.
Once you update the post, the block with the quote will appear in your posts content. 


