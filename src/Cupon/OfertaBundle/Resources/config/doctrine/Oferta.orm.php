<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'columnName' => 'nombre',
   'fieldName' => 'nombre',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->mapField(array(
   'columnName' => 'slug',
   'fieldName' => 'slug',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->mapField(array(
   'columnName' => 'descripcion',
   'fieldName' => 'descripcion',
   'type' => 'text',
  ));
$metadata->mapField(array(
   'columnName' => 'condiciones',
   'fieldName' => 'condiciones',
   'type' => 'text',
  ));
$metadata->mapField(array(
   'columnName' => 'foto',
   'fieldName' => 'foto',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->mapField(array(
   'columnName' => 'precio',
   'fieldName' => 'precio',
   'type' => 'decimal',
  ));
$metadata->mapField(array(
   'columnName' => 'descuento',
   'fieldName' => 'descuento',
   'type' => 'decimal',
  ));
$metadata->mapField(array(
   'columnName' => 'fecha_publicacion',
   'fieldName' => 'fechaPublicacion',
   'type' => 'datetime',
  ));
$metadata->mapField(array(
   'columnName' => 'fecha_expiracion',
   'fieldName' => 'fechaExpiracion',
   'type' => 'datetime',
  ));
$metadata->mapField(array(
   'columnName' => 'compras',
   'fieldName' => 'compras',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'umbral',
   'fieldName' => 'umbral',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'revisada',
   'fieldName' => 'revisada',
   'type' => 'boolean',
  ));
$metadata->mapField(array(
   'columnName' => 'ciudad',
   'fieldName' => 'ciudad',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->mapField(array(
   'columnName' => 'tienda',
   'fieldName' => 'tienda',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);