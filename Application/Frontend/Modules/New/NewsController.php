<?php
namespace App\Backend\Modules\News;

use \OCFram\BackController;
use \OCFram\HTTPRequest;
use \Entity\News;

class NewsController extends BackController
{
  // ...
  
  public function executeUpdate(HTTPRequest $request)
  {
    if ($request->postExists('auteur'))
    {
      $this->processForm($request);
    }
    else
    {
      $this->page->addVar('news', $this->managers->getManagerOf('News')->getUnique($request->getData('id')));
    }
    
    $this->page->addVar('title', 'Modification d\'une news');
  }
  
  // ...
}