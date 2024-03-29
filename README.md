php-sbbiblio
============
This is a personal PHP library that can be used to display a bibliography on a
web page. Its usage is quite straight forward -- you must define a *model* that
encodes a list of publications and invoke a *view* function to generate an HTML
page of it.

Installation
============
This package can be embedded in any PHP project by using
[PHP composer](https://getcomposer.org). Add the following items to your
project's `composer.json` file:

```json
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/svanderburg/php-sbbiblio.git"
    }
  ],

  "require": {
    "svanderburg/php-sbbiblio": "@dev",
  }
}
```

and run:

```bash
$ composer install
```

Installing development dependencies
===================================
When it is desired to modify the code or run the examples inside this
repository, the development dependencies must be installed by opening
the base directory and running:

```bash
$ composer install
```


Defining publications
=====================
The following fragment encodes a publication list consisting of a journal article
and conference paper:

```php
<?php
use SBBiblio\Model\Author;
use SBBiblio\Model\Article;
use SBBiblio\Model\Book;
use SBBiblio\Model\InProceedings;
use SBBiblio\Model\Journal;

$publications = array(
    new Article("vanderburg12disnix",
        array(new Author("Sander van der Burg"), new Author("Eelco Dolstra")),
        "Disnix: A toolset for distributed deployment",
        new Journal("Science of Computer Programming (SCP)", "79", null,
            "http://www.journals.elsevier.com/science-of-computer-programming", "Elsevier"),
        "52-69", "January", "2014",
        "<p>Abstract of the article.</p>",
        "vanderburg12-disnix.pdf",
        "Test entry"),

    new InProceedings("vanderburg08atomicupgrading",
        array(new Author("Sander van der Burg"), new Author("Eelco Dolstra"), new Author("Merijn de Jonge")),
        "Atomic Upgrading of Distributed Systems",
        new Book("First ACM Workshop on Hot Topics in Software Upgrades (HotSWUp)", "http://www.hotswup.org/2008",
        "ACM", "Tudor Dumitras and Danny Dig and Iulian Neamtiu", "Nashville, Tennessee, USA"),
        "October", "2008",
        "<p>Abstract of the inproceedings.</p>",
        "vanderburg08-atomic.pdf",
        "Test entry")
);
```

Viewing publications
====================
From the publications model, we can generate a page that automatically displays
the publications. Every publication has a abstract and [BibTeX](http://www.bibtex.org)
section that can be folded and unfolded.

To make folding and unfolding work you need to include the `publications.js`
script:

```html
<script type="text/javascript" src="scripts/publications.js"></script>
```

The following code displays links allowing visitors to fold and unfold the
abstract and BibTeX sections:

```html
<p>
    [<a href="#" onclick="sbbiblio.toggleAllBibTex();">Toggle all BibTex references</a>]
    [<a href="#" onclick="sbbiblio.toggleAllAbstracts();">Toggle all abstracts</a>]
</p>
```

The following code displays an unordered list of publications. The base directory
of the PDF files to which a publication may refer is in the `pdf` folder relative
to the PHP script:

```php
<ul>
    <?php
    foreach($publications as $publication)
        \SBBiblio\View\HTML\displayPublication($publication, dirname($_SERVER["PHP_SELF"])."/pdf");
    ?>
</ul>
```

Classes
=======
Currently the following types of publications are supported:

* `Article`
* `Book`
* `InProceedings`
* `MastersThesis`
* `PhDThesis`
* `TechReport`

Examples
========
The `example/` folder contains a very trivial example.

API documentation
=================
This package includes API documentation that can be generated with
[Doxygen](https://www.doxygen.nl):

```bash
$ doxygen
```

License
=======
The contents of this package is available under the [Apache Software License](http://www.apache.org/licenses/LICENSE-2.0.html)
version 2.0
