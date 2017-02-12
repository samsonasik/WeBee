<?php

namespace WeBee;

class Adam
{
      public function getName()
      {
          if (!is_writable('/path/to/file.txt')) {
              throw new \ErrorException('exception message 1');
          }

          $name = file_get_contents('/path/to/file.txt');

         if (false === $name) {
             throw new \ErrorException('exception message 2');
         }

         return $name;
     }
 }
