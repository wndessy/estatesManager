<?php

class CH extends housesCommon {

    function CH() {
        $this->setNoOfUnits(12);
        $this->setRentPerUnitPerMonth(2000);
        $this->setCategory("CH");
        $this->setNoOfBedrooms(2);
        $this->setQualifyingGrade("1-VI");
        $this->setHasCompound(true);
        $this->setDescription($this->getNoOfBedrooms()." bedrooms, and a small compound");
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