<?php

namespace App\Interfaces;

interface SponsorRepositoryInterface
{
    public function getAllSponsors();
    public function getSponsorById(string $id);
    public function createSponsor(array $data);
    public function updateSponsor(array $data, string $id);
    public function deleteSponsor(string $id);
}
