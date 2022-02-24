<?php
/**
 * @file
 * @brief View-BibTeX module
 * @defgroup View-BibTeX
 * @{
 */

namespace SBBiblio\View\BibTeX;
use SBBiblio\Model\Publication;
use SBBiblio\Model\Article;
use SBBiblio\Model\InProceedings;
use SBBiblio\Model\MastersThesis;
use SBBiblio\Model\PhDThesis;
use SBBiblio\Model\TechReport;

/**
* Displays a BibTex entry for the given publication
*
* @param $publication Publication to display
*/
function displayPublicationBibTex(Publication $publication): void
{
	/* Display type */
	if($publication instanceof MastersThesis)
		print("@mastersthesis{");
	else if($publication instanceof PhDThesis)
		print("@phdthesis{");
	else if($publication instanceof InProceedings)
		print("@inproceedings{");
	else if($publication instanceof TechReport)
		print("@techreport{");
	else if($publication instanceof Article)
		print("@article{");

	/* Display key */
	print($publication->key.",\n");

	/* Display authors */
	print("  author = {");

	$start = true;
	foreach($publication->authors as $author)
	{
		if($start)
			$start = false;
		else
			print(" and ");

		print($author->name);
	}
	print("},\n");

	/* Display title */
	print("  title = {".$publication->title."},\n");

	/* Display type specific BibTex properties */
	if($publication instanceof MastersThesis)
		displayMastersThesisBibTex($publication);
	else if($publication instanceof PhDThesis)
		displayPhDThesisBibTex($publication);
	else if($publication instanceof InProceedings)
		displayInProceedingsBibTex($publication);
	else if($publication instanceof TechReport)
		displayTechReportBibTex($publication);
	else if($publication instanceof Article)
		displayArticleBibTex($publication);
	 
	/* Display year */
	print("  year = {".$publication->year."},\n");

	/* Display month */
	print("  month = {".$publication->month."},\n");

	/* Display note */
	if($publication->note !== null)
		print("  note = {".$publication->note."},\n");

	/* Display closing bracket */
	print("}");
}

/**
* Displays BibTex entries of a masters thesis
*
* @param $mastersThesis Masters thesis entries to display
*/
function displayMastersThesisBibTex(MastersThesis $mastersThesis): void
{
	/* Display school */
	print("  school = {".$mastersThesis->school->name."},\n");
}

/**
 * Displays BibTex entries of a PhD thesis
 *
 * @param $phdThesis PhD thesis entries to display
 */
function displayPhDThesisBibTex(PhDThesis $phdThesis): void
{
	/* Display school */
	print("  school = {".$phdThesis->school->name."},\n");
}

/**
 * Displays BibTex entries of an inproceedings article
 *
 * @param $inProceedings InProceedings entries to display
 */
function displayInProceedingsBibTex(InProceedings $inProceedings): void
{
	/* Display booktitle */
	print("  booktitle = {".$inProceedings->book->title."},\n");

	/* Display editor */
	if($inProceedings->book->editors !== null)
		print("  editor = {".$inProceedings->book->editors."},\n");

	/* Display location */
	print("  location = {".$inProceedings->book->location."},\n");

	/* Display publisher */
	print("  publisher = {".$inProceedings->book->publisher."},\n");
}

/**
 * Displays BibTex entries of an technical report
 *
 * @param $techReport TechReport entries to display
 */
function displayTechReportBibTex(TechReport $techReport): void
{
	/* Display technical report number */
	print("  number = {".$techReport->number."},\n");

	/* Display institute */
	print("  institution = {".$techReport->institute->name."},\n");

	/* Display address */
	print("  address = {".$techReport->institute->address."},\n");
}

/**
 * Displays BibTex entries of an article
 *
 * @param $article Article entries to display
 */
function displayArticleBibTex(Article $article): void
{
	/* Display journal */
	print("  journal = {".$article->journal->title."},\n");

	/* Display volume */
	print("  volume = {".$article->journal->volume."},\n");

	/* Display number */
	if($article->journal->number !== null)
		print("  number = {".$article->journal->number."},\n");

	/* Display publisher */
	print("  publisher = {".$article->journal->publisher."},\n");

	/* Display pages */
	print("  pages = {".$article->pages."},\n");
}

/**
 * @}
 */
?>
