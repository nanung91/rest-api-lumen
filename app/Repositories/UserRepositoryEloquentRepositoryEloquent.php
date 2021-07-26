<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\UserRepositoryEloquentRepository;
use App\Entities\UserRepositoryEloquent;
use App\Validators\UserRepositoryEloquentValidator;

/**
 * Class UserRepositoryEloquentRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class UserRepositoryEloquentRepositoryEloquent extends BaseRepository implements UserRepositoryEloquentRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return UserRepositoryEloquent::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
