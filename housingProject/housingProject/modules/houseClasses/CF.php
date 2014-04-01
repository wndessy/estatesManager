<?php

class CF extends housesCommon {

    function CF() {
        $this->setNoOfUnits(36);
        $this->setRentPerUnitPerMonth(4500);
        $this->setCategory("CF");
        $this->setNoOfBedrooms(2);
        $this->setQualifyingGrade("7-10 (C-F)");
        $this->setHasCompound(false);
        $this->setDescription($this->getNoOfBedrooms()." bedrooms, seff contained(Tree trop flats)");
    }

    function repairs() {
        
    }

    /**
     * Must include the common contions in the housesCommon class
     */
    function houseCondition() {
        for ($i = 1; $i <= $this->getNoOfBedrooms(); $i++) {
            ?>
                <label>Bedroom no: <?php echo $i; ?></label><br/>
            <?php
            $this->houseDetails();
        }
        $this->commonHouseDetails();//the common stuff
    }

}
?>