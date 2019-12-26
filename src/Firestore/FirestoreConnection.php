<?php

namespace Firevel\Firequent\Firestore;

use Google\Cloud\Firestore\FirestoreClient;

class FirestoreConnection extends FirestoreClient
{
    protected $query;

    /**
     * Get a new query builder instance.
     *
     * @return \Firevel\Firequent\Firestore\Builder
     */
    public function query()
    {
        return new Builder($this);
    }

    /**
     * Get conection name.
     *
     * @return string
     */
    public function getName()
    {
        return 'default';
    }
}
