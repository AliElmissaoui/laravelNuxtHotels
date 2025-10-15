<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\HotelRepositoryInterface;
use App\Models\Hotel;

class HotelRepository implements HotelRepositoryInterface
{
    public function all($perPage = 10)
    {
        return Hotel::with(['address.city.country', 'hotelPhotos', 'amenities', 'roomTypes'])
            ->paginate($perPage);
    }

    public function find(int $id)
    {
        return Hotel::find($id);
    }

    public function withRelations()
    {
        return Hotel::with([])->get();
    }

    public function withJoinExample()
    {
        return Hotel::query()
            ->leftJoin('reservations', 'reservations.Hotel_id', '=', strtolower('Hotel') . 's.id')
            ->select(strtolower('Hotel') . 's.*')
            ->selectRaw('COUNT(reservations.id) as reservations_count')
            ->groupBy(strtolower('Hotel') . 's.id')
            ->get();
    }
}