/**
 * @static @class sbbiblio
 *
 * Exposes functions to manage the state of bibliographic entries.
 */
(function() {
    var sbbiblio = {};

    /**
     * Toggles the visibility of a BibTex section
     *
     * @param id ID of the publication
     */
    function toggleBibTex(id) {
        sbbiblio.toggleElement(document.getElementById("bibtex-"+id));
    }

    sbbiblio.toggleBibTex = toggleBibTex;

    /**
     * Toggles the visibility of an abstract section
     *
     * @param id ID of the publication
     */
    function toggleAbstract(id) {
        sbbiblio.toggleElement(document.getElementById("abstract-"+id));
    }

    sbbiblio.toggleAbstract = toggleAbstract;

    /**
     * Toggles the visibility of all BibTex sections
     */
    function toggleAllBibTex() {
        sbbiblio.toggleAllElementsByClass("bibtex");
    }

    sbbiblio.toggleAllBibTex = toggleAllBibTex;

    /**
     * Toggles the visibility of all abstract sections
     */
    function toggleAllAbstracts() {
        sbbiblio.toggleAllElementsByClass("abstract");
    }

    sbbiblio.toggleAllAbstracts = toggleAllAbstracts;

    /**
     * Toggles the visibility of sections belonging to a specific class 
     */
    function toggleAllElementsByClass(className) {
        var divs = document.getElementsByTagName("div");

        for(var i = 0; i < divs.length; i++) {
            var div = divs[i];
            if(div.getAttribute("class") == className) {
                sbbiblio.toggleElement(div);
            }
        }
    }

    sbbiblio.toggleAllElementsByClass = toggleAllElementsByClass;

    /**
     * Toggles the visibility of a section
     *
     * @param element DIV Element to change
     */
    function toggleElement(element) {
        if(element.style.display == "block") {
            element.style.display = "none";
        } else {
            element.style.display = "block";
        }
    }

    sbbiblio.toggleElement = toggleElement;

    this.sbbiblio = sbbiblio;
})();
