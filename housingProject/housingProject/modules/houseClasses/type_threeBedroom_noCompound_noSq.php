<?php

class type_threeBedroom_noCompound_noSq extends housesCommon {

    function type_threeBedroom_noCompound_noSq() {
        $this->setNoOfUnits(30);
        $this->setRentPerUnitPerMonth(5500);
        $this->setCategory("BF");
        $this->setNoOfBedrooms(3);
        $this->setQualifyingGrade("XII and above");
        $this->setHasCompound(false);
        $this->setDescription($this->getNoOfBedrooms()." bedrooms, self contained(Turkana Flats)");
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