<?php
namespace Michaels\Spider\Test\Stubs\AbstractDriverStub;

use Michaels\Spider\Commands\CommandInterface;
use Michaels\Spider\Drivers\AbstractDriver;
use Michaels\Spider\Drivers\DriverInterface;
use Michaels\Spider\Drivers\Graph;
use Michaels\Spider\Drivers\Record;

class Driver extends AbstractDriver implements DriverInterface
{
    protected $port;
    protected $hostname = 'default';

    public function open()
    {
        // Nothing
    }

    /**
     * Close the database connection
     * @return $this
     */
    public function close()
    {
        // Nothing
    }

    /**
     * Executes a Query or read command
     *
     * This is the R in CRUD
     *
     * @param CommandInterface $query
     * @return array|Record|Graph
     */
    public function executeReadCommand(CommandInterface $query)
    {
        // Nothing
    }

    /**
     * Executes a write command
     *
     * These are the "CUD" in CRUD
     *
     * @param CommandInterface $command
     * @return Graph|Record|array|mixed mixed values for some write commands
     */
    public function executeWriteCommand(CommandInterface $command)
    {
        // Nothing
    }

    /**
     * Executes a read command without waiting for a response
     *
     * @param CommandInterface $query
     * @return $this
     */
    public function runReadCommand(CommandInterface $query)
    {
        // Nothing
    }

    /**
     * Executes a write command without waiting for a response
     *
     * @param CommandInterface $command
     * @return $this
     */
    public function runWriteCommand(CommandInterface $command)
    {
        // Nothing
    }
}
