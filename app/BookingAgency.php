<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingAgency extends Model
{
    //genres, sm
    protected $fillable = ['user_id', 'name', 'location', 'description', 'social_media_id', 'genres_id'];

    //Relation: User - Booking Agency (1:n)

    public function user()
    {
        return $this->belongsTo('App/User');
    }

    //Relation: Booking Agency - Social Media (m:n)

    public function social_media()
    {
        return $this->belongsToMany('App/SocialMedia', 'booking_social', 'social_media_id', 'social_media_id');
    }

    //Relation: Booking Agency - Genres (m:n)

    public function genres()
    {
        return $this->belongsToMany('App/Genre', 'bookingagency_genre', 'genres_id', 'genres_id');
    }
}
