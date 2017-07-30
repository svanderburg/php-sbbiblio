<?php
namespace SBBiblio\View\HTML;
use SBBiblio\Model\Article;
use SBBiblio\Model\InProceedings;
use SBBiblio\Model\MastersThesis;
use SBBiblio\Model\PhDThesis;
use SBBiblio\Model\TechReport;

/**
 * Displays a bibliographic entry of a publication
 * 
 * @param Publication $publication Publication to display
 * @param string baseURL Base URL of the publication
 */
function displayPublication($publication, $baseURL)
{
	?>
	<li>
		<p>
		<?php
		/* Display authors */
		
		foreach($publication->authors as $author)
		{
			if($author->homepage === null)
				print($author->name.", ");
			else
			{
				?>
				<a href="<?php print($author->homepage); ?>"><?php print($author->name); ?></a>,
				<?php
			}
		}
		
		/* Display title */
		?>
		<strong><?php print($publication->title) ?></strong>,
		<?php
		/* Display publication type specific part */
		if($publication instanceof MastersThesis)
			displayMastersThesis($publication);
		else if($publication instanceof PhDThesis)
			displayPhDThesis($publication);
		else if($publication instanceof InProceedings)
			displayInProceedings($publication);
		else if($publication instanceof TechReport)
			displayTechReport($publication);
		else if($publication instanceof Article)
			displayArticle($publication);
		
		/* Display month, year */
		print($publication->month." ".$publication->year);

		/* Display dot */
		print(".");
		
		if($publication->note !== null)
		{
			/* Display note */
			?>
			<em>
				<?php
				/* Display note */
				print($publication->note.".");
				?>
			</em>
			<?php
		}
	
		/* Display BibTeX link */
		?>
		[<a href="#" onclick="toggleBibTex('<?php print($publication->key); ?>');">bib</a>]
		<?php
		
		/* Display abstract link */
		if($publication->abstract !== null)
		{
			?>
			[<a href="#" onclick="toggleAbstract('<?php print($publication->key); ?>');">abstract</a>]
			<?php
		}
		
		/* Display pdf link */
		if($publication->pdf !== null)
		{
			if(substr($publication->pdf, 0, 1) == "/" || substr($publication->pdf, 0, 7) == "http://")
				$pdfUrl = $publication->pdf;
			else
				$pdfUrl = $baseURL."/".$publication->pdf;
			?>
			[<a href="<?php print($pdfUrl); ?>">pdf</a>]
			<?php
		}
		?>
		</p>
		<?php
		/* Display BibTex section */ 
		?>
		<div class="bibtex" id="bibtex-<?php print($publication->key); ?>">
			<p>BibTeX:</p>
			<pre>
<?php \SBBiblio\View\BibTeX\displayPublicationBibTex($publication); ?>
			</pre>
		</div>
		<?php
		if($publication->abstract !== null)
		{	
			/* Display abstract section */
			?>
			<div class="abstract" id="abstract-<?php print($publication->key); ?>">
				<p>Abstract:</p>
				<?php
				print($publication->abstract);
				?>
			</div>
			<?php
		}
		?>
	</li>
	<?php
}

/**
 * Displays properties of a masters thesis
 * 
 * @param MastersThesis $mastersThesis Masters thesis entries to display
 */
function displayMastersThesis($mastersThesis)
{
	/* Display master's thesis */
    ?>
    Master's thesis,
	<?php
	/* Display school */
	?>
	<a href="<?php print($mastersThesis->school->homepage); ?>"><?php print($mastersThesis->school->name); ?></a>,
	<?php
}

/**
* Displays properties of a PhD thesis
*
* @param phdThesis $phdThesis PhD thesis entries to display
*/
function displayPhDThesis($phdThesis)
{
	/* Display PhD thesis */
	?>
	PhD thesis,
	<?php
	/* Display school */
	?>
	<a href="<?php print($phdThesis->school->homepage); ?>"><?php print($phdThesis->school->name); ?></a>,
	<?php
}

/**
 * Displays properties of an inproceedings article
 * 
 * @param InProceedings $inProceedings InProceedings entries to display
 */
function displayInProceedings($inProceedings)
{
	/* Display editors */
	?>
	In
	<?php
	if($inProceedings->book->editors !== null)
	{
		print($inProceedings->book->editors); ?>, editors,
		<?php
	}
	/* Display book */
	?>
	<a href="<?php print($inProceedings->book->homepage); ?>"><?php print($inProceedings->book->title); ?></a>.
	<?php
	/* Display location */
	print($inProceedings->book->location); ?>,
	<?php
	/* Display publisher */
	print($inProceedings->book->publisher); ?>,
	<?php
}

/**
 * Displays properties of a technical report
 * 
 * @param TechReport $techReport TechReport entries to display
 */
function displayTechReport($techReport)
{
	/* Display technical report and number */
	?>
	Technical Report <?php print($techReport->number); ?>,
	<?php
	/* Display institute */
	?>
	<a href="<?php print($techReport->institute->homepage); ?>"><?php print($techReport->institute->name); ?></a>,
	<?php
	/* Display address */
	print($techReport->institute->address); ?>,
	<?php
}

/**
 * Displays properties of an article
 * 
 * @param Article $article Article entries to display
 */
function displayArticle($article)
{
	/* Display volume */
	?>
	In volume <?php print($article->journal->volume);
	/* Display number */
	if($article->journal->number !== null)
	{
		?>
		, number <?php print($article->journal->number); ?>
		<?php
	}
	/* Display journal */
	?>
	of <a href="<?php print($article->journal->homepage); ?>"><?php print($article->journal->title); ?></a>,
	<?php
	/* Display pages */
	?>
	pages <?php print($article->pages); ?>,
	<?php
	/* Display publisher */
	print($article->journal->publisher);?>,
	<?php
}
?>
