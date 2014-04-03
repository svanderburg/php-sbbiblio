/**
 * Toggles the visibility of a BibTex section
 * 
 * @param id ID of the publication
 */
function toggleBibTex(id)
{
	toggleElement(document.getElementById("bibtex-"+id));
}

/**
 * Toggles the visibility of an abstract section
 * 
 * @param id ID of the publication
 */
function toggleAbstract(id)
{
	toggleElement(document.getElementById("abstract-"+id));
}

/**
 * Toggles the visibility of all BibTex sections
 */
function toggleAllBibTex()
{
	toggleAllElementsByClass("bibtex");
}

/**
 * Toggles the visibility of all abstract sections
 */
function toggleAllAbstracts()
{
	toggleAllElementsByClass("abstract");
}

/**
 * Toggles the visibility of sections belonging to a specific class 
 */
function toggleAllElementsByClass(className)
{
	var divs = document.getElementsByTagName("div");
	
	for(var i = 0; i < divs.length; i++)
	{
		var div = divs[i];
		if(div.getAttribute("class") == className)
			toggleElement(div);
	}
}

/**
 * Toggles the visibility of a section
 * 
 * @param element DIV Element to change
 */
function toggleElement(element)
{
	if(element.style.display == "block")
		element.style.display = "none";
	else
		element.style.display = "block";
}
