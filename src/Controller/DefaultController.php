<?php
namespace App\Controller;

use App\Entity\Offer;

use Symfony\Component\HttpFoundation\Response; 
use Symfony\Bundle\FrameworkBundle\Controller\Controller; 
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller{
	/**
	* @Route("/")
	*/
	public function index() {

		$jsonContent = file_get_contents($this->get('kernel')->getRootDir().'/../assets/c51.json');
		$listArray = json_decode($jsonContent, true);
		$batchId = (isset($listArray['batch_id'])) ? $listArray['batch_id'] : '';
		$offers = (isset($listArray['offers'])) ? $listArray['offers'] : '';
		return $this->render('default/index.html.twig', array(
			'batch' => $batchId,
			'offers' => $offers
		));
	}
}
?>