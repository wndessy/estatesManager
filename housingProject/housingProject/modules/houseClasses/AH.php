<?php

class AH extends housesCommon {

    function AH() {
        $this->setNoOfUnits(10);
        $this->setRentPerUnitPerMonth(1200);
        $this->setCategory("AH");
        $this->setNoOfBedrooms(4);
        $this->setHasCompound(true);
        $this->setQualifyingGrade("XIII and above");
        $this->setDescription($this->getNoOfBedrooms()." bedrooms, big compound with a servant quartes");
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
        ?>
            <label>Servant Quarters(SQ)</label>
            <label>Servant Quarters</label>
        <?php
             $this->houseDetails();
    }

}
?>