<?php
namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AlbumController extends AbstractActionController
{
	protected $albumTable;

	public function getAlbumTable()
    {
        if (!$this->albumTable) {
            $sm = $this->getServiceLocator();
            $this->albumTable = $sm->get('Album\Model\AlbumTable');
        }
        return $this->albumTable;
    }
    public function indexAction()
    {
		return new ViewModel(array(
            'albums' => $this->getAlbumTable()->fetchAll(),
        ));
    }

    public function addAction()
    {
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }
	public function passwordAction(){
		$request = $this->getRequest();
		$userEmail = $request->getParam('userEmail');
		$verbose = $request->getParam('verbose');
		if(isset($verbose)){
			$verbose = 'verbose';
		}
		echo "reset password action dispatch [user email: $userEmail, verbose:$verbose]\n";
	}
}
