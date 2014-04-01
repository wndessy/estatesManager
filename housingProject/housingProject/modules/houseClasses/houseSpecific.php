<?php
include_once 'housesCommon.php';
class houseSpecific extends housesCommon{   
    function houseSpecific($houseId){
         echo "me";
        $db = new DbModules();
        $result = $db->getAHouseTypeDetail($houseId);
        $row = mysql_fetch_assoc($result);
        $this->setNoOfUnits(trim($row['noOfUnits']));
        echo$row['name'];
        $this->setRentPerUnitPerMonth(trim($row['rent']));
        $this->setCategory($row['name']);
        $this->setNoOfBedrooms(trim($row['noOfBedroms']));
        $this->setHasCompound($row['noOfBedroms']);
        $this->setQualifyingGrade($row['qualifyingGrade']); //to be fetched as an array
        $this->setDescription($row['qualifyingGrade']);
    }

    function repairs() {
        
    }

    /**
     * Must include the common contions in the housesCommon class
     */
    function houseConditionWithCompoundAndSq() {
        for ($i = 1; $i <= $this->getNoOfBedrooms(); $i++) {
            ?>
            <label>Bedroom no: <?php echo $i; ?></label><br/>
            <?php
            $this->houseDetails();
        }
        $this->commonHouseDetails(); //the common stuff
        ?>
        <label>Servant Quarters(SQ)</label>
        <label>Compound</label>
        <?php
        $this->houseDetails();
    }

    function houseConditionWithCompound() {
        for ($i = 1; $i <= $this->getNoOfBedrooms(); $i++) {
            ?>
            <label>Bedroom no: <?php echo $i; ?></label><br/>
            <?php
            $this->houseDetails();
        }
        $this->commonHouseDetails(); //the common stuff
        ?> <label>Compound</label>
        <?php
    }

    function houseConditionNoCompound() {
        for ($i = 1; $i <= $this->getNoOfBedrooms(); $i++) {
            ?>
            <label>Bedroom no: <?php echo $i; ?></label><br/>
            <?php
            $this->houseDetails();
        }
        $this->commonHouseDetails(); //the common stuff
    }

}
