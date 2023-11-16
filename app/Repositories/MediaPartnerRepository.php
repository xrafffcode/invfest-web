<?php

namespace App\Repositories;

use App\Interfaces\MediaPartnerRepositoryInterface;
use App\Models\MediaPartner;

class MediaPartnerRepository implements MediaPartnerRepositoryInterface
{
    public function getAllMediaPartners()
    {
        return MediaPartner::all();
    }

    public function getMediaPartnerById($id)
    {
        return MediaPartner::findOrFail($id);
    }

    public function createMediaPartner($data)
    {
        return MediaPartner::create($data);
    }

    public function updateMediaPartner($data, $id)
    {
        return MediaPartner::findOrFail($id)->update($data);
    }

    public function deleteMediaPartner($id)
    {
        return MediaPartner::findOrFail($id)->delete();
    }
}
