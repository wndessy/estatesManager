
<?php
class housesCommon {
    //put your code here
    private $noOfUnits;
    private $category;
    private $houseNo;
    private $rentPerUnitPerMonth;
    private $qualifyingGrade;
    private $Description;
    private $noOfBedrooms;
    private $hasCompound;

    public function getNoOfUnits() {
        return $this->noOfUnits;
    }

    public function getCategory() {
        return $this->category;
    }
    public function getHouseNo() {
        return $this->houseNo;
    }

    
    public function getRentPerUnitPerMonth() {
        return $this->rentPerUnitPerMonth;
    }

    public function getQualifyingGrade() {
        return $this->qualifyingGrade;
    }

    public function getDescription() {
        return $this->Description;
    }

    public function setNoOfUnits($noOfUnits) {
        $this->noOfUnits = $noOfUnits;
    }

    public function setCategory($category) {
        $this->category = $category;
    }
    public function setHouseNo($houseNo) {
        $this->houseNo = $houseNo;
    }

    
    public function setRentPerUnitPerMonth($rentPerUnitPerMonth) {
        $this->rentPerUnitPerMonth = $rentPerUnitPerMonth;
    }

    public function setQualifyingGrade($qualifyingGrade) {
        $this->qualifyingGrade = $qualifyingGrade;
    }

    public function setDescription($Description) {
        $this->Description = $Description;
    }

    public function getNoOfBedrooms() {
        return $this->noOfBedrooms;
    }

    public function setNoOfBedrooms($noOfBedrooms) {
        $this->noOfBedrooms = $noOfBedrooms;
    }

    public function getHasCompound() {
        return $this->hasCompound;
    }

    public function setHasCompound($hasCompound) {
        $this->hasCompound = $hasCompound;
    }

    /**
     * This is the contitions that will always be the same for all the houses
     */
    public function commonHouseDetails() {
        ?>

         <label>Sitting room</label>
            <label>Sockets</label>
            <textarea cols="20" rows="3" id="<?php echo "Sittingroom".":"."Sockets" ?>"></textarea>
            <label>Ceiling</label>
            <textarea cols="20" rows="3" id="<?php echo "Sittingroom".":"."Ceiling" ?>"></textarea>
            <label>Switches</label>
            <textarea cols="20" rows="3"  id="<?php echo "Sittingroom".":"."Switches" ?>"></textarea>
            <label>Lights</label>
            <textarea cols="20" rows="3" id="<?php echo "Sittingroom".":"."Lights" ?>"></textarea><br/>
             <label>Floor</label>
            <textarea cols="20" rows="3" id="<?php echo "Sittingroom".":"."Floor" ?>"></textarea>
            <label>Door/lock</label>
            <textarea cols="20" rows="3" id="<?php echo "Sittingroom".":"."Door" ?>"></textarea>
            <label>Walls</label>
            <textarea cols="20" rows="3" id="<?php echo "Sittingroom".":"."Walls" ?>"></textarea>
           
        <label>Bathroom</label>
            <label>Electrical</label>
            <textarea cols="20" rows="3"  id="<?php echo "Bathroom".":"."Electrical" ?>"></textarea>
            <label>Plumbing</label>
            <textarea cols="20" rows="3"  id="<?php echo "Bathroom".":"."Plumbing" ?>"></textarea>
            <label>Tiles</label>
            <textarea cols="20" rows="3" id="<?php echo "Bathroom".":"."Tiles" ?>"></textarea><br/>
        <label>Toilet</label>
            <label>Electrical</label>
            <textarea cols="20" rows="3" id="<?php echo "Toilet".":"."Electrical" ?>"  ></textarea>
            <label>Plumbing</label>
            <textarea cols="20" rows="3" id="<?php echo "Toilet".":"."Plumbing" ?>"></textarea>
            <label>Tiles</label>
            <textarea cols="20" rows="3" id="<?php echo "Toilet".":"."Tiles" ?>"></textarea><br/>
        <label>Kitchen</label>
            <label>Electrical</label>
            <textarea cols="20" rows="3" id="<?php echo "Kitchen".":"."Electrical" ?>"></textarea>
            <label>plumbing</label>
            <textarea cols="20" rows="3" id="<?php echo "Kitchen".":"."Plumbing" ?>" ></textarea>
            <label>Tiles</label>
            <textarea cols="20" rows="3" id="<?php echo "Kitchen".":"."Tiles" ?>"></textarea>
        <?php
    }
  
    
     public function wholeHouseDetails(){
        ?>
            <?php //echo "wholeHouseDetails".":"."Sockets" ?>
            <h> the whole house in general</h><br/>
            <label>Sockets</label>
            <textarea cols="20" rows="3" id="<?php echo "wholeHouseDetails".":"."Sockets" ?>" ></textarea>
            <label>Ceilings/Roof</label>
            <textarea cols="20" rows="3" id="<?php echo "wholeHouseDetails".":"."Ceilings" ?>"></textarea>
            <label>Switches</label>
            <textarea cols="20" rows="3" id="<?php echo "wholeHouseDetails".":"."Switches" ?>"></textarea>
            <label>Lights</label>
            <textarea cols="20" rows="3" id="<?php echo "wholeHouseDetails".":"."Lights" ?>"></textarea>
            <label>Floor</label>
            <textarea cols="20" rows="3" id="<?php echo "wholeHouseDetails".":"."Floor" ?>"></textarea>
            <label>Door/Lock</label>
            <textarea cols="20" rows="3" id="<?php echo "wholeHouseDetails".":"."Door" ?>"></textarea>
            <label>Walls</label>
            <textarea cols="20" rows="3" id="<?php echo "wholeHouseDetails".":"."Walls" ?>"></textarea>
           <label>No. of keys</label>
            <textarea cols="20" rows="3" id="<?php echo "wholeHouseDetails".":"."noOfKeys" ?>"></textarea>
          
            
                    <?php
                    echo"whole house";
    }
      public function houseDetails($room){
        ?>
            <label>Sockets</label>
            <textarea cols="20" rows="3" id="<?php echo $room.":"."Sockets" ?>"></textarea>
            <label>Ceilings/Roof</label>
            <textarea cols="20" rows="3" id="<?php echo $room.":"."Ceilings" ?>"></textarea>
            <label>Switches</label>
            <textarea cols="20" rows="3" id="<?php echo $room.":"."Switches" ?>"></textarea>
            <label>Lights</label>
            <textarea cols="20" rows="3" id="<?php echo $room.":"."Lights" ?>"></textarea>
            <label>Floor</label>
            <textarea cols="20" rows="3" id="<?php echo $room.":"."Floor" ?>"></textarea>
            <label>Door/lock</label>
            <textarea cols="20" rows="3" id="<?php echo $room.":"."Door" ?>"></textarea>
            <label>Walls</label>
            <textarea cols="20" rows="3" id="<?php echo $room.":"."Walls" ?>"></textarea>
           
                    <?php
    }
      public function compound(){
        ?>
            <label>fence</label>
            <textarea cols="20" rows="3"  id="<?php echo "compound".":"."fence" ?>" ></textarea>
            <label>garden</label>
            <textarea cols="20" rows="3"  id="<?php echo "compound".":"."garden" ?>"></textarea>
            <label>roof</label>
            <textarea cols="20" rows="3" id="<?php echo "compound".":"."roof" ?>"></textarea>
            <label>etc</label>
            <textarea cols="20" rows="3" id="<?php echo "compound".":"."etc" ?>"></textarea>
           
                    <?php
    }
    

    
}
