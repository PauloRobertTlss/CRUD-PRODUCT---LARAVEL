<?php

namespace Leroy\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Leroy\Repositories\Interfaces\DocumentRepository;
use Leroy\Entities\Document;
use Leroy\Presenters\DocumentPresenter;

/**
 * Class DocumentRepositoryEloquent.
 *
 * @package namespace Leroy\Repositories;
 */
class DocumentRepositoryEloquent extends BaseRepository implements DocumentRepository
{
    
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Document::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
    /**
     * Presentation
     * Responsible for the default presentation layer of the repository
     * @return type
     */
    public function presenter() {
        return DocumentPresenter::class;
    }
    
}
