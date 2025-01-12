<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('civilite')
            ->add('nom')
            ->add('type')
            ->add('date_de_naissance', null, [
                'widget' => 'single_text',
            ])
            ->add('tranche_age')
            ->add('id_collaborateur_prefere')
            ->add('adresse')
            ->add('localite')
            ->add('pays')
            ->add('telephone')
            ->add('mail')
            ->add('langue')
            ->add('profession')
            ->add('marraine')
            ->add('filleule')
            ->add('pointsFidelite')
            ->add('privilege')
            ->add('infoTechniques')
            ->add('remarques')
            ->add('visite1', null, [
                'widget' => 'single_text',
            ])
            ->add('origineContact')
            ->add('typeCheveux')
            ->add('base')
            ->add('texture')
            ->add('cuirChevelu')
            ->add('longueur')
            ->add('specificites')
            ->add('cheveuxBlancs')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
