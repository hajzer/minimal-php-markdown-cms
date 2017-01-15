## Minimal-PHP-Markdown-CMS

## Intro

**Minimal-PHP-Markdown-CMS** is simple PHP platform for easy publishing of markdown documents. 

**File structure:**  

- **WEBROOT/index.php** - Main PHP script.  
- **WEBROOT/.htaccess** - URL rewrite rules for SEO URLs.  

**Directory structure:**  

- **WEBROOT/content** - Main content. Directories (categories) and markdown files (documents).  
- **WEBROOT/css** - CSS files.  
- **WEBROOT/html** - HTML template files (header.html, body.html, footer.html).  
- **WEBROOT/php** - PHP include files (parsedown.php).




## Components used

**Minimal-PHP-Markdown-CMS** is powered by these components:    

- [Parsedown - Markdown Parser in PHP (License: MIT)](http://parsedown.org)  
[Parsedown - github](https://github.com/erusev/parsedown/)  
One File  //  Super Fast  //  Extensible  //  GitHub Flavored 

- [github-markdown-css (License: MIT)](https://sindresorhus.com/github-markdown-css/)  
[github-markdown-css - github](https://github.com/sindresorhus/github-markdown-css)  
The minimal amount of CSS to replicate the GitHub Markdown style.




## Usage

- Install and configure PHP interpreter for web server.
- Upload the **Minimal-PHP-Markdown-CMS** files to the desired location on your web server.
- Edit **"html/\*.html"** files and customize web site look and feel.
- On web server inside **"content"** directory create directory for each **"category"**.  
Example: mkdir ./content/category1
- On web server inside **"category"** directory:
  - create markdown index file \(**"index.md"**\)  
  - create other markdown files \(**"document.md"**\) for documents



## Demo

[www.linuxor.sk](http://www.linuxor.sk)

