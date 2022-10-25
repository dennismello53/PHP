<?php

require_once 'ClassConnection.php';

class ClassCrud extends ClassConnection{

    #Atribbutes
    private $Crud;
    private $Counter;
    private $Result;

    #Declarative preparation
    private function preparedStatements($Query, $Types, $Parameters)
    {
        $this->countParameters($Parameters);
        $Conn=$this->connectDB();
        $this->Crud=$Conn->prepare($Query);

        if ($this->Counter > 0) {
            $CallParameters = array();
                foreach ($Parameters as $key => $Parameter) {
                    $CallParameters[$key] = &$Parameters[$key];
                }
                array_unshift($CallParameters, $Types);
                call_user_func_array(array($this->Crud,'bind_param'),$CallParameters);
            }

        $this->Crud->execute();
        $this->Result=$this->Crud->get_result();
    }


    #Parameters Counter
    private function countParameters($Parameters)
    {
        $this->Counter=count($Parameters);
    }

    #Insert on BD
    public function insertDB($Table , $Where , $Types , $Parameters){
        $this->preparedStatements("insert into {$Table} values ({$Where})" , $Types , $Parameters);
    return $this->Crud;
    }

    #Select on BD
    public function selectDB($Row , $Table , $Where , $Types , $Parameters){ 
        $this->preparedStatements("select {$Row} from {$Table} {$Where}",$Types,$Parameters);
    return $this->Result;
    }

    #Delete on DB
    public function deleteDB($Table , $Where , $Types , $Parameters){
        $this->preparedStatements("delete from {$Table} where {$Where}", $Types , $Parameters);
    return $this->Crud;
    }

    #Update on DB
    public function updateDB($Table , $Set , $Where , $Types , $Parameters){
        $this->preparedStatements("update {$Table} set {$Set} where {$Where}", $Types, $Parameters);
    return $this->Crud;
    }
}