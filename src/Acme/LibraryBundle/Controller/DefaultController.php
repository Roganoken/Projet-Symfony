<?php
namespace Acme\LibraryBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\LibraryBundle\Entity\livre;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    //--------------------------------------------------------//
    //-----------------------LIVRE-----------------------------//    
    //--------------------------------------------------------// 

    //creation d'un livre
    public function createAction() {

        $livre = new livre(); 
        $livre->setIsbn('9782070752447'); 
        $livre->setTitre('Villa vortex'); 
        $livre->setResume( '11 septembre 2001, un nouveau monde  commence...');
        $livre->setAnnee(2003);
        $livre->setIllustration('couverture de toto');
        $livre->setDatereservation(new \Datetime());
        $livre->setDateemprunt(new \Datetime());
        $livre->setDateretour(new \Datetime());
        $livre->setCodebarre('12050534635');
        $livre->setCreated(new \Datetime());
        $em = $this->getDoctrine()->getEntityManager();  
        $em->persist($livre); 
        $em->flush(); 
        return new Response('Identifiant du livre ajouté : ' . $livre->getId()); 
    }
    
    //consultation des livres 
    public function showAction($id) {
    
        $livreRepository = $this->getDoctrine()->getRepository('AcmeLibraryBundle:livre'); 
        $livre = $livreRepository->find($id);
        //$user = $livre->getUser();
    
        if (!$livre) {
            $loanStatus = 'disponible';
        } else {
            $loanStatus = 'emprunté par ';
        }
        
        
//         if (!$livre) {
//             throw $this->createNotFoundException('Aucun livre ne
//                     correspond à l\'id '.$id); 
//         }
    
        return $this->render('AcmeLibraryBundle:Default:show.html.twig', array('livreTitre' => $livre->getTitre(), 'loanStatus' => $loanStatus));
        
        
//   return new Response('Livre consulté : ' . $livre->getTitre().', emprunté le: '.$livre->getDateemprunt()->format('y-m-d'));
   }
    
    //mise à jour / update des livres
    public function updateAction($id) {
    
        $em = $this->getDoctrine()->getEntityManager();
        $livre = $em->getRepository('AcmeLibraryBundle:livre')->find($id);
        if (!$livre) { 
            throw $this->createNotFoundException('Aucun livre ne
                    correspond à l\'id '.$id); 
        }
        $livre->setResume('modification du texte de resume du livre blabla....'); 
        $em->flush();
         
        return new Response('Livre modifié : ' . $livre->getTitre()); 
    }
    
    //suppression des livres
    public function supprAction($id) {
    
        $em = $this->getDoctrine()->getEntityManager();
        $livre = $em->getRepository('AcmeLibraryBundle:livre')->find($id);
        if (!$livre) {
            throw $this->createNotFoundException('Aucun livre ne
                    correspond à l\'id '.$id);
        }
        $em->remove($livre);
        $em->flush();
         
        return new Response('Livre supprimé de la BDD : ' . $livre->getTitre());
    } 

}
