<?php

namespace App\Interfaces;

interface MediaPartnerRepositoryInterface
{
    public function getAllMediaPartners();
    public function getMediaPartnerById($id);
    public function createMediaPartner($data);
    public function updateMediaPartner($data, $id);
    public function deleteMediaPartner($id);
}
