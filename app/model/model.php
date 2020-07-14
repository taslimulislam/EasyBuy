<?php

    define("servername","localhost");   //define a variable for the server name
    define("username","root");  //define a variable for the user name of the database
    define("password","");  //define a variable for the password of the database
    define("databaseName","easybuy");  //define a variable for the database name from the server
        
    function readQuery($sql)    // creating a function for reading queries from database (only select statements) with a parameter receiveing the sql statement
    {
        $conn = new mysqli(servername , username, password, databaseName);  //stablished a connction

        if ($conn->connect_error) //checking if the connection got any error
        { 
            die("Connection failed: " . $conn->connect_error);  //it will throw an error if the connection failed
        } 

        $arr = [];                              //creating an empty array
        $result = $conn->query($sql);           //executing the query and saving it into the variable
        //print_r($result);                     //this function allows to print any kinds of data for debuging
        
        if ($result == TRUE) {                  //checking if the query got executed successfully
            while($row = $result->fetch_assoc()) {  //a loop for extract or fetching the data form the query result
                $arr[] = $row;                  //saving the query result into the array
            }
        } 
        else 
        {
            echo "Error: " . $conn->error;      //if any error for unsuccessful query execution
        }

        //print_r($arr);    //this function allows to print any kinds of data for debuging
        $json_data = json_encode($arr); //converting the array into json format
        $conn->close(); //closing the connection
        return $json_data;  //returning the json data of sql statement
        
    }

    function executeQuery($sql) // creating a function for reading queries from database (only insert statements) with a parameter receiveing the sql statement
    {
        $conn = new mysqli(servername , username, password, databaseName);  //stablished a connction
    
        if ($conn->connect_error)   //checking if the connection got any error
        { 
            die("Connection failed: " . $conn->connect_error);  //it will throw an error if the connection failed
        }

        $result = $conn->query($sql);   //executing the query and saving it into the variable
        //print_r($result);             //this function allows to print any kinds of data for debuging
        $last_id;                       //declare an eptmy variable
        if ($result == TRUE)    //checking if the query got executed successfully
        {          
            $last_id = $conn->insert_id;    //executing a query for saving the auto increment id for the inserted data and saving it into the variable
        } 
        else
        {
            $last_id = 0;   //if any error for unsuccessful query execution the id will be 0
        }
        $conn->close();     //closing the connection
        return $last_id;    //returning the value
    }

    function deleteAndUpdateQuery($sql) // function for updating a queries from database (only dedlete and update SQL) with a parameter sql
    {
        $conn = new mysqli(servername , username, password, databaseName); //stablished a connction
    
        if ($conn->connect_error)   //checking if the connection got any error
        { 
             die("Connection failed: " . $conn->connect_error);  //it will throw an error if the connection failed
        }
        $result = $conn->query($sql);   //executing the query and saving it into the variable
        //print_r($result); 
       
        $conn->close();             //closing the connection
        return $result;             //returning the value
    }

    //$sql = "INSERT INTO `emp`(`id`, `name`, `email`, `salary`) VALUES (null,'abc','abc@abc.com',100 );";  //manually check the function is working or not and creting a query for insert data
    //echo executeQuery($sql);  //manually check the function is working or not and executing the query and printing the result
?>