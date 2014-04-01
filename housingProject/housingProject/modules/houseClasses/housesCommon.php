<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of housesCommon
 *
 * @author root
 */
class housesCommon {

    //put your code here
    private $noOfUnits;
    private $category;
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

         <label>Sittingroom</label>
            <label>Sockets</label>
            <textarea cols="20" rows="3"></textarea>
            <label>Ceiling</label>
            <textarea cols="20" rows="3"></textarea>
            <label>Switches</label>
            <textarea cols="20" rows="3"></textarea>
            <label>Lights</label>
            <textarea cols="20" rows="3"></textarea><br/>
        <label>Bathroom</label>
            <label>Electrical</label>
            <textarea cols="20" rows="3"></textarea>
            <label>plumbing</label>
            <textarea cols="20" rows="3"></textarea>
            <label>Tiles</label>
            <textarea cols="20" rows="3"></textarea><br/>
        <label>Toilet</label>
            <label>Electrical</label>
            <textarea cols="20" rows="3"></textarea>
            <label>plumbing</label>
            <textarea cols="20" rows="3"></textarea>
            <label>Tiles</label>
            <textarea cols="20" rows="3"></textarea><br/>
        <label>Kitchen</label>
            <label>Electrical</label>
            <textarea cols="20" rows="3"></textarea>
            <label>plumbing</label>
            <textarea cols="20" rows="3"></textarea>
            <label>Tiles</label>
            <textarea cols="20" rows="3"></textarea>
        <?php
    }
    public function houseDetails(){
        ?>
            <label>Sockets</label>
            <textarea cols="20" rows="3"></textarea>
            <label>Ceilings/Roof</label>
            <textarea cols="20" rows="3"></textarea>
            <label>Switches</label>
            <textarea cols="20" rows="3"></textarea>
            <label>Lights</label>
            <textarea cols="20" rows="3"></textarea>
           
                    <?php
    }
    
     public function wholeHouseDetails(){
        ?>
            <label>Sockets</label>
            <textarea cols="20" rows="3"></textarea>
            <label>Ceilings/Roof</label>
            <textarea cols="20" rows="3"></textarea>
            <label>Switches</label>
            <textarea cols="20" rows="3"></textarea>
            <label>Lights</label>
            <textarea cols="20" rows="3"></textarea>
            <label>Floor</label>
            <textarea cols="20" rows="3"></textarea>
            <label>Door/Lock</label>
            <textarea cols="20" rows="3"></textarea>
            <label>Walls</label>
            <textarea cols="20" rows="3"></textarea>
           
                    <?php
    }

    
}
