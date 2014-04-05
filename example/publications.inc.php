<?php
require_once("biblio/model/Author.class.php");
require_once("biblio/model/School.class.php");
require_once("biblio/model/Article.class.php");
require_once("biblio/model/InProceedings.class.php");
require_once("biblio/model/TechReport.class.php");
require_once("biblio/model/PhDThesis.class.php");
require_once("biblio/model/MastersThesis.class.php");

$author_vanDerBurg = new Author("Sander van der Burg");
$author_dolstra = new Author("Eelco Dolstra", "http://nixos.org/~eelco");
$author_deJonge = new Author("Merijn de Jonge", "http://jongem.home.xs4all.nl");
$institute_SERG = new Institute("Software Engineering Research Group", "Delft, The Netherlands", "http://www.se.ewi.tudelft.nl");
$school_DUT = new School("Delft University of Technology", "http://www.tudelft.nl");

$publications = array(
	new Article("vanderburg12disnix",
		array($author_vanDerBurg, $author_dolstra),
	    "Disnix: A toolset for distributed deployment",
		new Journal("Science of Computer Programming (SCP)", "79", null, "http://www.journals.elsevier.com/science-of-computer-programming", "Elsevier"), "52-69", "January", "2014",
	    "<p>\n".
	    "The process of deploying a distributed system in a network of machines\n". 
		"is often very complex, labourious and time-consuming, while it is hard to\n".
        "guarantee that the system will work as expected and that\n".
        "specific non-functional deployment requirements from the domain are supported.\n".
        "In this paper we describe the Disnix toolset,\n".
        "which provides system administrators or developers with automatic deployment of a distributed system\n".
        "in a network of machines from declarative specifications and offers\n".
        "properties such as complete dependencies, atomic upgrades\n".
        "and rollbacks to make this process efficient and reliable.\n".
        "Disnix has an extensible architecture, allowing the integration of\n".
        "custom modules to make the deployment more convenient and\n".
        "suitable for the domain in which the system is to be used.\n".
        "Disnix has been under development\n". 
        "for almost four years and has been applied\n".
        "to several types of distributed systems,\n".
        "including an industrial case study.\n".
	    "</p>",
	    "vanderburg12-disnix.pdf",
	     "Test entry"),

	new InProceedings("vanderburg08atomicupgrading",
		array($author_vanDerBurg, $author_dolstra, $author_deJonge),
        "Atomic Upgrading of Distributed Systems",
		new Book("First ACM Workshop on Hot Topics in Software Upgrades (HotSWUp)", "http://www.hotswup.org/2008",
        "ACM", "Tudor Dumitras and Danny Dig and Iulian Neamtiu", "Nashville, Tennessee, USA"), "October", "2008",
        "<p>Upgrading distributed systems is a complex process. It requires installing the right services\n".
        "on the right computer, configuring them correctly, and so on, which is error-prone and tedious.\n".
        "Moreover, since services in a distributed system depend on each other and are updated separately,\n".
        "upgrades typically are not atomic: there is a time window during which some but not all services\n".
        "are updated, and a new version of one service might temporarily talk to an old version of another\n".
        "service. Previously we implemented the Nix package management system, which allows atomic upgrades\n".
        "and rollbacks on single computers. In this paper we show an extension to Nix that enables the\n".
        "deployment of distributed systems on the basis of a declarative deployment model, and\n".
        "supports atomic upgrades of such systems.</p>",
		"vanderburg08-atomic.pdf",
	    "Test entry"),

	new TechReport("vanderburg10ddeploymentandtesting",
		array($author_vanDerBurg, $author_dolstra),
        "Declarative Testing and Deployment of Distributed Systems",
        "July", "2010",
        "TUD-SERG-2010-020",
		$institute_SERG,
        "<p>System administrators and developers who deploy distributed systems\n".                   
        "have to deal with a deployment process that is largely manual and hard\n".
        "to reproduce.  This paper describes how networks of computer systems\n".
        "can be reproducibly and automatically deployed from declarative\n".
        "specifications.  Reproducibility also ensures that users can easily\n".
        "instantiate a test environment, before deploying the specification to\n".
        "the production environment.\n".
        "Furthermore, from the same specifications we can instantiate virtual\n".
        "networks of virtual machines for both interactive and automated\n".
        "testing.  This makes it easy to write automated regression tests that\n".
        "require external machines, need special privileges, or depend on the\n".
        "network topology.\n".
        "We instantiate machines from the specifications using NixOS, a Linux\n".
        "distribution built from a purely functional specification.  We have\n".
        "applied our approach to a number of representative problems, including\n".
        "automatic regression testing of a Linux distribution and deployment of\n".
        "a continuous integration environment.</p>",
        "TUD-SERG-2010-020.pdf",
        "Test entry"),
 
	new PhDThesis("vanderburg13thesis",
		array($author_vanDerBurg),
	    "A Reference Architecture for Distributed Software Deployment",
		$school_DUT,
	    "June", "2013",
	    "<p>Nowadays, software systems are bigger and more complicated than people may think.\n".
	    "Apart from the fact that a system has to be correctly constructed and should meet the client's wishes,\n".
	    "they also have to be made ready for use to end-users or in an isolated test environment.\n".
	    "This process is known as the software deployment process.\n".
        "Due to various developments, e.g. increasing complexity of requirements to a system and new techniques\n".
        "that have been developed to support these, the software deployment process has become increasingly more complicated\n".
        "and error prone. Especially for modern generation systems, often exposed as services through the Internet,\n".
        "such as Facebook and Twitter, an automated solution is required supporting important quality attributes, \n".
        "such as reliability, reproducibility, genericity, and efficiency as manual deployment is typically too time consuming and error prone.\n".
        "This dissertation describes a reference architecture that contains various components to automate software deployment processes\n".
        "of modern generation systems. These components strive to perform deployment steps in a way that is\n".
        "reliable, reproducible, generic, extensible and efficient.</p>",
        "vanderburg13-phdthesis.pdf",
        "Test entry"),

	new MastersThesis("vanderburg09thesis",
		array($author_vanDerBurg),
        "Model-driven Distributed Software Deployment",
		$school_DUT,
        "March", "2009", 
        "<p>The software deployment process, which involves all steps to make a software system available for use,\n".
        "is a complex process. Software systems can operate on just one machine but there are also many software\n".
        "systems with components running on multiple computers in a network that are working together to reach a\n".
        "common goal, which are called distributed systems. The software deployment process for distributed\n".
        "systems is more complex than for single systems, since we have dependencies which are on the same machine\n".
        "in the network, but also dependencies on components on other machines in the network. Components of systems\n".
        "in hospital environments are distributed and its deployment process is error prone and tedious.</p>\n".
        "<p>In this thesis we extend a deployment system called Nix for single systems with new tools and models to make\n".
        "software deployment in distributed environments possible. The extension is called Disnix, which is a\n".
        "framework to make distributed deployment possible by reusing the Nix primitives.</p>\n".
        "<p>This thesis also contains a case study where we used an existing distributed system for hospital environments\n".
        "developed at Philips Research which is called SDS2. We also adapted the SDS2 platform to fit in the Disnix\n".
        "framework and we identified some design constraints that should be met in order to make a system automatically\n".
        "deployable.</p>",
        "vanderburg09-mastersthesis.pdf",
        "Test entry")
);
?>
