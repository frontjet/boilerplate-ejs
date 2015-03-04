Read me
==============

Installation
--------------

Before usage you must have node.js with npm (node package manager) installed.

First install grunt as a console service. Run

	npm install -g grunt-cli

This will install grunt in your system environment.
You can read more here http://gruntjs.com/getting-started

After grunt instalation change to your project dir where package.json is located. And run the following command.

    npm install

This will install grunt, which is used for LESS compilation into CSS. Run your grunt while development for auto-compilation on any .less file change in /less directory

	grunt watch

You can also run grunt watch in windows by grunt-watch.bat file.
That's it.