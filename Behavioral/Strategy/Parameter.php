<?php

namespace DP\Behavioral\Strategy;

/**
 * classe Client
 *
 */
class Parameter {
    private $output;
    private $config = [];

    public function addParam($param, $value) {
        $this->config [$param] = $value;
    }

    public function __construct(OutputInterface $output) {
        $this->output = $output;
    }
    
    public function export() {
        return $this->output->output($this->config);
    }
}
