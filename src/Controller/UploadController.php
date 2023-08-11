<?php

namespace App\Controller;

use App\Entity\Offer;
use App\Form\FileUploadType;
use App\Services\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UploadController extends AbstractController
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @throws \JsonException
     */
    #[Route('/', name: 'app_test_upload')]
    public function excelCommunesAction(Request $request, FileUploader $file_uploader): Response
    {
        $offer = $this->em->getRepository(Offer::class)->findAll();

        $form = $this->createForm(FileUploadType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $file = $form['upload_file']->getData();
            if ($file) {
                $file_name = $file_uploader->upload($file);
                if (null !== $file_name) {
                    $directory = $file_uploader->getTargetDirectory();
                    $full_path = $directory.'/'.$file_name;

                    // Get the file extension
                    $extension = $file->getClientOriginalExtension();

                    if ($extension === 'xlsx') {
                        $worksheet = IOFactory::load($full_path)->getActiveSheet();

                        $firstRowSkipped = false; // Flag to skip the first row

                        foreach ($worksheet->getRowIterator() as $row) {
                            $data = [];

                            if (!$firstRowSkipped) {
                                $firstRowSkipped = true;
                                continue; // Skip the first row
                            }

                            foreach ($row->getCellIterator() as $cell) {
                                $data[] = $cell->getValue();
                            }

                            $this->saveToDatabase($data);

                            unset($data);
                        }

                        $this->addFlash('success', 'Data imported successfully.');

                        return $this->redirectToRoute('app_test_upload');
                    }

                    $this->addFlash('danger', 'Unsupported file format.');
                }
            }
        }

        return $this->render('upload/index.html.twig', [
            'form' => $form->createView(),
            'offers' => $offer
        ]);
    }



    private function saveToDatabase(array $data): void
    {
        $product = new Offer();
        $product->setCompteAffaire($data[0]);
        $product->setCompteEvenementVeh($data[1]);
        $product->setCompteDernierEvenementVeh($data[2]);
        $product->setNumeroFiche($data[3]);
        $product->setLibelleCivilite($data[4]);
        $product->setProprietaireActuel($data[5]);
        $product->setNom($data[6]);
        $product->setPrenom($data[7]);
        $product->setNumeroEtNomVoie($data[8]);
        $product->setComplementAdresse1($data[9]);
        $product->setCodePostal($data[10]);
        $product->setVille($data[11]);
        $product->setTelephoneDomicile($data[12]);
        $product->setTelephonePortable($data[13]);
        $product->setTelephoneJob($data[14]);
        $product->setEmail($data[15]);
        $product->setDateMiseEnCirculation($data[16]);
        $product->setDateAchat($data[17]);
        $product->setDateDernierEvenementVeh($data[18]);
        $product->setLibelleMarque($data[19]);
        $product->setLibelleModele($data[20]);
        $product->setVersion($data[21]);
        $product->setVin($data[22]);
        $product->setImmatriculation($data[23]);
        $product->setTypeProspect($data[24]);
        $product->setKilometrage($data[25]);
        $product->setLibelleEnergie($data[26]);
        $product->setVendeurVN($data[27]);
        $product->setVendeurVO($data[28]);
        $product->setCommentaireFacturation($data[29]);
        $product->setTypeVNVO($data[30]);
        $product->setNumeroDossierVNVO($data[31]);
        $product->setIntermediaireVente($data[32]);
        $product->setDateEvenementVeh($data[33]);
        $product->setOrigineEvenementVeh($data[34]);

        $product->setCreatedAt(new \DateTimeImmutable());
        $product->setUpdatedAt(new \DateTimeImmutable());

        $this->em->persist($product);
        $this->em->flush();
    }
}
