# Personal Health Diary

- Health Diary Version 0.2a
- Symphony Version: 2.3.3

## Overview

The personal health diary is built as a Symphony CMS ensemble and can be thought of in three parts: the Symphony CMS core, its extensions (in `extensions/`) and the Health Diary files (which are in `workspace/`). All the extensions and the Health Diary are included here as [git submodules](http://git-scm.com/book/en/Git-Tools-Submodules). You must use git to download and install the health diary.

### About Symphony CMS

Symphony is a `PHP` & `MySQL` based CMS that utilizes `XML` and `XSLT` as its core technologies.

Visit [the Symphony website](http://getsymphony.com/), [the forum](http://getsymphony.com/discuss/) or learn how you can [contribute to Symphony](https://github.com/symphonycms/symphony-2/wiki/Contributing-to-Symphony).

## Server requirements

- PHP 5.2 or above (PHP 5.3 recommended)
- PHP’s LibXML module, with the XSLT extension enabled (`--with-xsl`)
- MySQL 5.0 or above
- A webserver (known to be used with Apache, Litespeed, Nginx and Hiawatha)
- Apache’s `mod_rewrite` module or equivalent
- PHP’s built in `json` functions, which are enabled by default in PHP 5.2 and above; if they are missing, ensure PHP wasn’t compiled with `--disable-json`
- (Optional, but recommended) SSL for HTTPS.

## Installing

The install process comes in two mains parts: installing Symphony and setting up the health diary.

### Installing Symphony

Before installation, see the [notes on file permissions](#file-permissions).

1. Clone the git repository to the location you desire using:

		git clone https://github.com/thebestsophist/personal-health-diary.git

1. Run the following command to ensure the submodules are cloned:

		git submodule update --init --recursive

1. Point your web browser at <http://example.com/install/> and provide
details for establishing a database connection and about your server environment.

1. Remove installer files:

	`rm -rf install/ workspace/install.sql`

(Do not delete the installer files if you are doing development.)

### Setting up the health diary

1. Update `rooturl` in workspace/js/script.js (line 12) with the base directory of your symphony install. This lets all the scripts know where to find the API.

1. Log in to your account at {root}/symphony, this is the administrator dashboard. Add your first user account by going to `Meta > Users` (`{$root}/symphony/publish/users/`).

I have added some basic documentation explaining what each section is for ([learn more about Symphony CMS](getsymphony.com/explore)).

### File permissions

1. Symphony’s installer will inform you if it needs write access to files that it doesn’t already have, but you can ensure it has the access it needs by temporarily setting files to world-writeable.

	`cd /your/site/root`  
	`chmod -R 777 .`

1. Once Symphony is successfully installed, you should change file permissions to something tighter for security reasons. Symphony recommends `755` for directories and `644` for files as a good default, but this may need to be changed depending on your server’s users and groups configuration. For example, you may need to change directories and files that Symphony needs to subsequently write to to `775` and `664` respectively.

#### Useful commands

You may find these commands useful when adjusting file and directory permissions.

To recursively chmod directories only:

	find /your/site/root -type d -exec chmod 755 {} \;

To recursively chmod files only:

	find /your/site/root -type f -exec chmod 644 {} \;

### Updating via Git

1. Pull from the master branch at `git://github.com/symphonycms/symphony-2.git`

1. Use the following command to bring extensions up to date:

		git submodule update --init --recursive

1. If updating from a version older than `2.0.5`, enable the [Debug DevKit](http://github.com/symphonycms/debugdevkit/tree/master) and [Profile DevKit](http://github.com/symphonycms/profiledevkit/tree/master) extensions.

1. Go to `http://example.com/install/` to complete the update process.

## Development Notes

All the page files are in `workspace/pages` and include comments describing their intended functionality.

### Roadmap

#### Version 0.2
- Update documentation with full install instructions and implemented features.
- First draft of API schema
- Color schemes for various forms of colorblindness.
- Visual cues and contrast animations to improve usability for colorblind users.

#### Version 0.3
- Print stylesheets so you can print out part of your diaries to take to the doctor
- More styles and fleshed out `view/` pages.
- WIA-ARIA love

#### Version 0.4
- Importing from older versions. (There will be no breaking updates between 0.1 and 0.4, so `git pull` will be our friend.)
- Home screen icon

#### Version 0.5
- Finalize Read API Schema v1
- Doctor log-in credentials, so they can also access the visualizations. (This will likely require updates to the database that are not covered in a `git pull` so it will include step-by-step documentation for upgrading)

#### Version 0.6
- More interactive visualizations for exploration (going beyond static visualizations)

#### Version 0.7
- Better way to deal with user local time (currently xslt transformations completely depends on server time)

#### Version 0.8
- Cross-user comparison and visualizations

#### After Version 1.0
- Data visualization comparisons across users.
- Import data from third-party services such as FitBit and JawBone Up.
- Import basic weather data 
- Create Write API.

## License
HTML5 Boilerplate created by by Paul Irish and Divya Manian http://html5boilerplate.com
Compass-H5pb by Peter Gumeson https://github.com/sporkd/compass-h5bp

