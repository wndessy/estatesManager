<?php
include_once 'housesCommon.php';
class houseSpecific extends housesCommon{   
   function houseSpecific($houseTypeId){
      $db = new DbModules();
        $result = $db->getAHouseTypeDetail($houseTypeId);
       $row = mysql_fetch_assoc($result);
        $this->setNoOfUnits(trim($row['noOfUnits']));
         //echo$row['name'];
        $this->setRentPerUnitPerMonth(trim($row['rent']));
        $this->setCategory($row['name']);
       // $this->setHouseNo($houseIndex);
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
           $this->wholeHouseDetails();
        for ($i = 1; $i <= $this->getNoOfBedrooms(); $i++) {
                        ?>
<h1> <label>Bedroom no: <?php echo $i; ?></label></h1><br/>
            <?php
            $this->houseDetails("Bedroom".$i);
        }
        $this->commonHouseDetails(); //the common stuff
        ?>
        <label>Servant Quarters(SQ)</label>
        <?php
        $this->houseDetails("SQ");
      ?>
        <label>Plumbing</label>
            <textarea cols="20" rows="3" id="<?php echo "SQ".":"."Plumbing" ?>"></textarea>
            <h1><label>Compound</label></h1>
        <?php
        $this->compound();
    }

    function houseConditionWithCompoundAndNoSq() {
         $this->wholeHouseDetails();
        for ($i = 1; $i <= $this->getNoOfBedrooms(); $i++) {
            ?>
            <label>Bedroom no: <?php echo $i; ?></label><br/>
            <?php
            $this->houseDetails("Bedroom".$i);
        }
        $this->commonHouseDetails(); //the common stuff
        ?> <label>Compound</label>
        <?php
    $this->compound();
             }

    function houseConditionNoCompoundNoSq() {
         $this->wholeHouseDetails();
        for ($i = 1; $i <= $this->getNoOfBedrooms(); $i++) {
            ?>
            <label>Bedroom no: <?php echo $i; ?></label><br/>
            <?php
            $this->houseDetails("Bedroom".$i);
        }
        $this->commonHouseDetails(); //the common stuff
    }

}
