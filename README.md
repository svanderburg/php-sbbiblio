php-sbbiblio
============
This is a personal PHP library that can be used to display a bibliography on a
web page. Its usage is quite straight forward -- you must define a *model* that
encodes a list of publications and invoke a *view* function to generate an HTML
page of it.

Defining publications
=====================
The following fragment encodes a publication list consisting of a journal article
and conference paper:

```php
<?php
require_once("biblio/model/Author.class.php");
require_once("biblio/model/Article.class.php");
require_once("biblio/model/InProceedings.class.php");

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
<script type="text/javascript" src="../sbbiblio/scripts/publications.js"></script>
```

The following code displays links allowing visitors to fold and unfold the
abstract and BibTeX sections:

```html
<p>
    [<a href="#" onclick="toggleAllBibTex();">Toggle all BibTex references</a>]
    [<a href="#" onclick="toggleAllAbstracts();">Toggle all abstracts</a>]
</p>
```

The following code displays an unordered list of publications. The base directory
of the PDF files to which a publication may refer is in the `pdf` folder relative
to the PHP script:

```php
<?php
require_once("biblio/view/html/displaybib.inc.php");
?>
<ul>
    <?php
    foreach($publications as $publication)
        displayPublication($publication, dirname($_SERVER["PHP_SELF"])."/pdf");
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
This package includes API documentation, which can be generated with [Doxygen](http://www.doxygen.org).
The Makefile in this package contains a `doc` target and produces the
corresponding HTML files in `apidoc`:

    $ make doc

License
=======
The contents of this package is available under the [Apache Software License](http://www.apache.org/licenses/LICENSE-2.0.html)
version 2.0
