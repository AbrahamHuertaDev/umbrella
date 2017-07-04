<?php

/**
 *
 */
class Response
{
    public function json($val)
    {
      echo json_encode($val);
    }
}
