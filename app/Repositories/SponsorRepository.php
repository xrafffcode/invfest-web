<?php

namespace App\Repositories;

use App\Interfaces\SponsorRepositoryInterface;
use App\Models\Sponsor;

class SponsorRepository implements SponsorRepositoryInterface
{
    /**
     * Get all sponsors.
     */
    public function getAllSponsors()
    {
        return Sponsor::all();
    }

    /**
     * Get sponsor by id.
     */
    public function getSponsorById(string $id)
    {
        return Sponsor::find($id);
    }

    /**
     * Create new sponsor.
     */
    public function createSponsor(array $data)
    {
        return Sponsor::create($data);
    }

    /**
     * Update sponsor by id.
     */
    public function updateSponsor(array $data, string $id)
    {
        return Sponsor::find($id)->update($data);
    }

    /**
     * Delete sponsor by id.
     */
    public function deleteSponsor(string $id)
    {
        return Sponsor::find($id)->delete();
    }
}
