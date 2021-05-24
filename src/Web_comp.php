<?php namespace unsized\webcomp;

require_once('_view_builder.php');
/***Componentisation of Html pages

/** Creates pure web componens for reuse (no javascript)
/** A Dependancy injector for the CSS_builder and HTML_builder classes.
/** Not loaded in production. We use autogeneraed html and css. A cache of the page.
/***********************************************************************************/

class Web_comp
{
public $component_dir= COMPONENT;
public $svg_symbols=array();

function __construct ($html, $css, $data=[] )
{
$this->html=$html;
$this->css=$css;
$this->data=$data;
}

function build($component, $data=[]  )
{
$css=$this->css;
$html=$this->html;

ob_start();
include_once($this->component_dir.'/'.$component.'.tpl.php');
return ob_get_clean();
}

//do something similar for modules? Eg Nav.

}//end class