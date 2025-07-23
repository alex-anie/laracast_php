<?php

use Core\Validator;


it('validate a string', function(){
    expect(Validator::string('foobar'))->toBeTrue();
    expect(Validator::string(false))->toBeFalse();
    expect(Validator::string(''))->toBeFalse();
});

it('validate a string with a minimum length', function(){
    expect(Validator::string('foobar', 20))->toBeFalse();
});

it('validate a an email', function(){
    expect(Validator::email('foobar'))->toBeFalse();
    expect(Validator::email('foobar@example.com'))->toBeTrue();
});

it('validate that a number is greater than a given amount', function(){
    expect(Validator::greaterThan(10, 1))->toBeTrue();
    expect(Validator::greaterThan(10, 100))->toBeFalse();
})->only();