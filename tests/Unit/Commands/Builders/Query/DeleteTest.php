<?php
namespace Spider\Test\Unit\Commands\Builders\Query;

use Codeception\Specify;
use Spider\Commands\Bag;
use Spider\Graphs\ID as TargetID;

class DeleteTest extends TestSetup
{
    use Specify;

    public function testDrop()
    {
//        $this->specify("it drops a single record dispatching from `drop()`", function () {
//            $actual = $this->builder
//                ->drop(3); // dispatches command by itself
//
//            $expected = $this->buildExpectedCommand([
//                'command' => Bag::COMMAND_DELETE,
//                'target' => new TargetID(3)
//            ]);
//
//            $this->assertEquals($expected, $actual->getScript(), "failed to return correct command bag");
//        });
//
//        $this->specify("it drops a single record via `dispatch()`", function () {
//            $actual = $this->builder
//                ->drop()
//                ->record(3)
//                ->dispatch();
//
//            $expected = $this->buildExpectedCommand([
//                'command' => Bag::COMMAND_DELETE,
//                'target' => new TargetID(3)
//            ]);
//
//            $this->assertEquals($expected, $actual->getScript(), "failed to return correct command bag");
//        });
//
//        $this->specify("it drops multiple records dispatching from `drop()`", function () {
//            $actual = $this->builder
//                ->drop([1, 2, 3]);
//
//            $expected = $this->buildExpectedCommand([
//                'command' => Bag::COMMAND_DELETE,
//                'target' => [
//                    new TargetID(1),
//                    new TargetID(2),
//                    new TargetID(3),
//                ],
//            ]);
//
//            $this->assertEquals($expected, $actual->getScript(), "failed to return correct command bag");
//        });
//
//        $this->specify("it drops multiple records dispatching from `dispatch()`", function () {
//            $actual = $this->builder
//                ->drop()
//                ->records([1, 2, 3])
//                ->dispatch();
//
//            $expected = $this->buildExpectedCommand([
//                'command' => Bag::COMMAND_DELETE,
//                'target' => [
//                    new TargetID(1),
//                    new TargetID(2),
//                    new TargetID(3),
//                ],
//            ]);
//
//            $this->assertEquals($expected, $actual->getScript(), "failed to return correct command bag");
//        });

        $this->specify("it drops multiple records via constraints", function () {
            $actual = $this->builder
                ->drop()
                ->from('target')
                ->where('birthday', 'apr')
                ->getCommandBag();

            $expected = $this->buildExpectedBag([
                'command' => Bag::COMMAND_DELETE,
                'target' => 'target',
                'where' => [['birthday', Bag::COMPARATOR_EQUAL, 'apr', Bag::CONJUNCTION_AND]],
            ]);

            $this->assertEquals($expected, $actual, "failed to return correct command bag");
        });
    }
}
