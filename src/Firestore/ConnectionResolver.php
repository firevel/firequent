<?php

namespace Firevel\Firequent\Firestore;

use Firevel\Firequent\Firestore\FirestoreConnection;
use Illuminate\Database\ConnectionResolverInterface;

class ConnectionResolver implements ConnectionResolverInterface
{
    protected $connection;

    /**
     * Get a database connection instance.
     *
     * @param  string|null  $name
     * @return FirestoreConnection
     */
    public function connection($name = null)
    {
        if (empty($this->connection)) {
            $this->connection = new FirestoreConnection();
        }

        return $this->connection;
    }

    /**
     * Get the default connection name.
     *
     * @return string
     */
    public function getDefaultConnection()
    {
        return 'default';
    }

    /**
     * Set the default connection name.
     *
     * @param  string  $name
     * @return void
     */
    public function setDefaultConnection($name)
    {
        // Single connection for now.
    }
}
