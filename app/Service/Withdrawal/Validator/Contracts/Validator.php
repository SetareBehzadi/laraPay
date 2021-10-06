<?php

namespace App\Service\Withdrawal\Validator\Contracts;

abstract class Validator
{
    /**
     * @var Validator|null
     */
    protected $nextValidator;

    public function __construct(Validator $validator = null)
    {

        $this->nextValidator = $validator;
    }

    final public function handle(array $data)
    {
        $result = $this->process($data);

        if ($result){
            if (!is_null($this->nextValidator)){
                return $this->nextValidator->handle($data);
            }
            return $result;
        }
        return $result;
    }

    abstract protected function process(array $data);

}
