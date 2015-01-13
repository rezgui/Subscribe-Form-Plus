<?php namespace JorgeAndrade\Subscribe\Models;

use Model;

/**
 * Subscriber Model
 */
class Subscriber extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'andradedev_subscribe_subscribers';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['email', 'latitude', 'longitude'];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}