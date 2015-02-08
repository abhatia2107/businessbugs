<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Feature extends \Eloquent {

    use SoftDeletingTrait;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function getFeaturedBatches()
    {
        return Feature::
        	Join('batches','batches.id','=','features.feature_batch_id')
            ->Join('institutes','institutes.id','=','batches.batch_institute_id')
            ->Join('categories','categories.id','=','batches.batch_category_id')
            ->Join('subcategories','subcategories.id','=','batches.batch_subcategory_id')
            ->Join('venues', 'venues.id', '=', 'batches.batch_venue_id')
            ->Join('localities', 'localities.id', '=', 'venues.venue_locality_id')
            ->Join('locations', 'locations.id', '=', 'localities.locality_location_id')
            ->select('*','batches.id as id','batches.deleted_at as deleted_at','batches.created_at as created_at','batches.updated_at as updated_at')
            ->orderBy('institute_rating')
            ->get();
    }

    public function getAllFeaturedBatches()
    {
        return Feature::withTrashed()
            ->Join('batches','batches.id','=','features.feature_batch_id')
            ->Join('institutes','institutes.id','=','batches.batch_institute_id')
            ->Join('categories','categories.id','=','batches.batch_category_id')
            ->select('*','features.id as id','features.deleted_at as deleted_at','features.created_at as created_at','features.updated_at as updated_at')
            ->get();
    }
}
