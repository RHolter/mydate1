<?php
// remember this extends member look at the pets1 example try not to cry of the Java looks


class PremiumMember extends Member
{
    private $_inDoorInterests = [];
    private $_outDoorInterests = [];
    private $_profilePhoto;

    public function __construct(array $inDoorInterests, array $outDoorInterests)
    {
        $this->_inDoorInterests = $inDoorInterests;
        $this->_outDoorInterests = $outDoorInterests;
    }

    public function getInDoorInterests(): array
    {
        return $this->_inDoorInterests;
    }

    public function setInDoorInterests(array $inDoorInterests): void
    {
        $this->_inDoorInterests=$inDoorInterests;
    }


    public function getOutDoorInterests(): array
    {
        return $this->_outDoorInterests;
    }

    public function setOutDoorInterests(array $outDoorInterests): void
    {
        $this->_outDoorInterests=$outDoorInterests;
    }


    public function getProfilePhoto(): string
    {
        return $this->_profilePhoto;
    }

    public function setProfilePhoto($profilePhoto): void
    {
        $this->_profilePhoto=$profilePhoto;
    }
}