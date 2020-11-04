<?php
namespace OCFram;

abstract class BackController extends ApplicationComponent
{
  // ...
  
  public function setView($view)
  {
    if (!is_string($view) || empty($view))
    {
      throw new \InvalidArgumentException('La vue doit être une chaine de caractères valide');
    }
    
    $this->view = $view;
    
    $this->page->setContentFile(__DIR__.'/../../App/'.$this->app->name().'/Modules/'.$this->module.'/Views/'.$this->view.'.php');
  }
}