<?php

namespace Adam\Spec;

use WeBee\Adam;

describe('Adam', function () {
      it('throws exception if file is not writable', function () {
          allow('is_writable')->toBeCalled()->andReturn(false);

          expect(function () { (new Adam())->getName(); })->toThrow(new \ErrorException('exception message 1'));
      });

      it('throws exception if cant get file contents', function () {
          allow('is_writable')->toBeCalled()->andReturn(true);
         allow('file_get_contents')->toBeCalled()->andReturn(false);

         expect(function () { (new Adam())->getName(); })->toThrow(new \ErrorException('exception message 2'));
     });

     it('gets name form file', function () {
         allow('is_writable')->toBeCalled()->andReturn(true);
         allow('file_get_contents')->toBeCalled()->andReturn('Adam');

         expect((new Adam())->getName())->toBe('Adam');
     });
 });
