<?php 

namespace App\Repositories\Criteria\Users; 

use ActivismeBE\DatabaseLayering\Repositories\Criteria\Criteria;
use ActivismeBE\DatabaseLayering\Repositories\Contracts\RepositoryInterface;
use Illuminate\Database\Eloquent\Builder; 

/**
 * Class SortRecent
 *
 * @package App\Repositories\Criteria\Users
 */
class SortRecent extends Criteria 
{
    /**
     * @param                       $model      Tehe Eloquent database model where the criterie should applied on.
     * @param RepositoryInterface   $repository The interface from the repository class.
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository): Builder
    {
        return $model->orderBy('created_at','asc');
    }
}