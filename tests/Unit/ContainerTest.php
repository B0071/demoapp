<?php

// test('example', function () {
//     expect(false)->toBeTrue();
// });

use Core\Container;

test("it can resolve somethin out of the container", function () {
    // 1. ARRANGE
    $container = new Container();

    $container->bind('foo', function () {
        return 'bar';
    });

    // 2. ACT
    $result = $container->resolve('foo');

    // 3. ASSERT/EXPECT
    expect($result)->toEqual('bar');
});
