<?php

namespace MayMeow\Docker\Client\Traits;

trait HttpTrait
{
    protected function _setContext($method = null) {
        $options = array(
            'http' => array(
                'method'  => $method
            )
        );

        return stream_context_create($options);
    }
}