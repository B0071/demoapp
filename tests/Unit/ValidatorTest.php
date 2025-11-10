
<?php

use Core\Validator;

it('check input is valid string', function () {

    expect(Validator::string('something'))->toBe(1);
    expect(Validator::string(''))->toBe(0);
});

it('checks password should be at least 7 characters', function () {
    expect(Validator::string('test', 7))->toBe(0);
    expect(Validator::string('password', 7))->toBe(1);
});
