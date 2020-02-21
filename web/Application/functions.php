<?php
function getConfig ($filePath)
{
    return json_decode(file_get_contents($filePath), TRUE);
}

function getConnect ($Config)
{
    try
    {
        $pdo=new PDO 
        (
            "mysql:host={$Config["hostname"]};dbname={$Config["database"]};charset=utf8", 
            $Config ["username"],
            $Config["password"]
        );
        return $pdo;

    }
    catch(PDOException $e)
    {
        var_dump($e->getMessage());
        die;
    }
}


function getUsers(PDO $pdo)
{
    try
    {
        $smt=$pdo->prepare("select * from `users`");
        if(!$smt->execute())
        {
            throw new RuntimeException($smt->errorInfo()[2]);
        }
        return $smt->fetchAll();
    }
    catch(RuntimeException $e)
    {
        
        return [];

    }
}