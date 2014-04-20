<?php

class BH extends housesCommon {

    function BH() {
        $this->setNoOfUnits(69);
        $this->setRentPerUnitPerMonth(7000);
        $this->setCategory("BH");
        $this->setNoOfBedrooms(3);
        $this->setHasCompound(true);
        $this->setQualifyingGrade("XII and above");
        $this->setDescription($this->getNoOfBedrooms()." bedrooms, big compound with a servant quarters");
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