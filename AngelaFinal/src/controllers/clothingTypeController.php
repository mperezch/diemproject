<?php 

	require_once DIR_PER.'factoryDAO.php';
	require_once DIR_FAC.'factoryDAOPdo.php';
	require_once DIR_PER.'clothingTypeDAO.php';


class ClothingTypeController {

	private $factory;
	private $persistenceClothes;

	public function __construct() {
		$this->factory = FactoryDAOPdo::getInstance();
		$this->persistenceClothes = $this->factory->createTagsPersistence();
	}

	public function add($clothingType) {
		// $persistencePost = $this->factory->createPostPersistence();
		
		$test = $this->persistenceClothes->add($clothingType);

		return $test;
	}
	
	public function listAll() {
		// $persistencePost = $this->factory->createPostPersistence();
		
		$clothingTypeList = $this->persistenceClothes->listAll();

		return $clothingTypeList;
	}

}

 ?>