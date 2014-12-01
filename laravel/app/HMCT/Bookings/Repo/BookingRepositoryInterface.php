<?php namespace HMCT\Bookings\Repo;


interface BookingRepositoryInterface {
    public function getAll();
    public function createBooking($input);
    public function getById($id);
}