<?php
namespace Ttree\ContentRepositoryImporter\DataProvider;

use Neos\Flow\Annotations as Flow;

/**
 * Data Provider Interface
 */
interface DataProviderInterface
{
    /**
     * @param array $options
     * @param integer $offset
     * @param integer $limit
     * @return DataProviderInterface
     */
    public static function create(array $options = [], $offset = null, $limit = null);

    /**
     * @return array
     */
    public function fetch();

    /**
     * @param integer $limit
     * @return void
     */
    public function setLimit($limit);

    /**
     * @param integer $offset
     * @return void
     */
    public function setOffset($offset);

    /**
     * @return boolean
     */
    public function hasLimit();
}
