<?php

<<<<<<< HEAD
namespace RGU\Dvoconnector\Domain\Filter;

class GenericFilterContext extends GenericFilter implements \RGU\Dvoconnector\Service\ApiServiceFilterContext  {
=======
namespace RG\Rgdvoconnector\Domain\Filter;

class GenericFilterContext extends GenericFilter implements \RG\Rgdvoconnector\Service\ApiServiceFilterContext  {
>>>>>>> parent of 8432775... Change Namespace

	/**
	 * Filter: ID der Vereinigung, unter welcher sich die angefragte Ressource befinden muss.
	 * @var string
	 */
	protected $insideAssociationID;

	/**
	 * sets the insideAssociationID attribute
	 *
	 * @param string $insideAssociationID
	 * @return void
	 */
	public function setInsideAssociationID($insideAssociationID) {
		$this->insideAssociationID = $insideAssociationID;
	}

	/**
	 * returns the insideAssociationID attribute
	 *
	 * @return string
	 */
	public function getInsideAssociationID() {
		return $this->insideAssociationID;
	}

}
