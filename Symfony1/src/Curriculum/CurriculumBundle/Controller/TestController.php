<?php

namespace Curriculum\CurriculumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Curriculum\CurriculumBundle\Entity\Profils;

class TestController extends Controller {
	public function ajoutAction() {
		$em = $this -> getDoctrine() -> getManager();

		$profil1 = new Profils();
		 $profil1 -> setProfil('developpeur web');
		 $profil1 -> setCompetence('php,java,html,css');

		 $em -> persist($profil1);

		 $profil2 = new Profils();
		 $profil2 -> setProfil('developpeur web');
		 $profil2 -> setCompetence('php,html,css,symfony');
		 $em -> persist($profil2);

		 $profil3 = new Profils();
		 $profil3 -> setProfil('developpeur java');
		 $profil3 -> setCompetence('php,java,html,css');
		 $em -> persist($profil3);

		 $profil4 = new Profils();
		 $profil4 -> setProfil('developpeur java');
		 $profil4 -> setCompetence('php,java,html,css,ffff');
		 $em -> persist($profil4);

		 $profil5 = new Profils();
		 $profil5 -> setProfil('developpeur java');
		 $profil5 -> setCompetence('php,java,html,css');
		 $em -> persist($profil5);

		 $profil6 = new Profils();
		 $profil6 -> setProfil('developpeur java');
		 $profil6 -> setCompetence('aaaa,eeee,php,java,html,css');
		 $em -> persist($profil6);

		 $profil7 = new Profils();
		 $profil7 -> setProfil('developpeur java');
		 $profil7 -> setCompetence('php,java,ffff,html,css');
		 $em -> persist($profil7);

		 $profil8 = new Profils();
		 $profil8 -> setProfil('developpeur java');
		 $profil8 -> setCompetence('php,java,html,gggg,css');

		 $em -> persist($profil8);
		 $em -> flush();

		/*foreach ($tabCompetences as $key) {
		 $tableau = array($tabCompetences[1]);
		 foreach ($tableau as $val) {

		 if (strcasecmp($val, $key) != 0) {

		 $tableau1[] = $key;

		 } else {
		 }
		 }}*/

		return $this->render('CurriculumBundle:Default:index.html.twig',array('sou' => $tableau, 
																		      'count_profils' => $tabva,
																			  'nmbr' => $nmbrVirgule,
																			  'current' => $tableau));
	}

}

function calculerNombreApparence($tab, $chaine, $tot) {
	$i = 0;
	foreach ($tab as $key) {
		if (strcasecmp($key, $chaine) == 0) {

			$i++;
			$div= $i/$tot;
			$com =$div;
			
		} else {
		}
	}
	return $com;
}
