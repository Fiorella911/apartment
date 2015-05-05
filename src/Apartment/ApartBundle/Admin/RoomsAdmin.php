<?php
// src/Apartment/ApartBundle/Admin/RoomsAdmin.php

namespace Apartment\ApartBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class RoomsAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('propertyId')
            ->add('roomType')
            ->add('number')
            ->add('dateFrom')
            ->add('dateTo')
            ->add('maxChildAge')
            ->add('minChildAge')
            ->add('maxChildren')
            ->add('isAvailable')
            ->add('descriptionEn')
            ->add('acceptedGender')
            ->add('blockName')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('propertyId')
            ->add('roomType')
            ->add('dateFrom')
            ->add('dateTo')
            ->add('isAvailable')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('propertyId')
            ->add('roomType')
            ->add('number')
            ->add('dateFrom')
            ->add('dateTo')
            ->add('isAvailable')
            ->add('blockName')
        ;
    }
}