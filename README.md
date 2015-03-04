Read me
==============
This is an open-source boilerplate made by Frontjet team, for developing Bootstrap3 based mobile-first HTML5 & CSS3 websites.
The package is including:
- Grunt - *JavaScript Task Runner (http://gruntjs.com)*
- EJS - *HTML Template library (http://www.embeddedjs.com)*
- SASS - *CSS Preprocessor (http://sass-lang.com)*
- Bourbon - *Sass Mixin Library (http://bourbon.io)*
- Bootstrap v3.3.2 - *Mobile-first CSS framework (http://getbootstrap.com)*
- Font Awesome 4.3 - *Font icon library (http://fontawesome.io)*

http://frontjet.com


Installation
--------------

Before usage you must have node.js with npm (node package manager) installed.

First install grunt as a console service. Run

	npm install -g grunt-cli

This will install grunt in your system environment.
You can read more here http://gruntjs.com/getting-started

After grunt instalation change to your project dir where package.json is located. And run the following command.

    npm install

This will install grunt and node modules, which are used for SASS compilation into CSS, EJS compilation into HTML. 
To run autocompilation while development you would do this:

	grunt watch

To build once for production you may use

	grunt build

Enjoy! :)