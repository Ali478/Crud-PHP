<?php



class Guest
{
    public function showData()
    {

        include "././config/config.php";

        $result = new conn();
        $sql = 'SELECT *
        FROM MyGuests
        ORDER BY id';
        $abc = $result->connection($sql);
        return $abc;
    }

    public function editmode($id)
    {
        include "./../config/config.php";
        
        $result = new conn();
        $sql = "SELECT *
        FROM MyGuests
        where id = $id";
        $abc = $result->connection($sql);
        return $abc;
    }

    public function redirect()
    {
        header("location:http://dev.project/");
    }

    public function insert()
    {
        include "./../config/config.php";
        $result = new conn();
        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
            VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[email]')";
        $abc = $result->connection($sql);
        return $abc;
    }

    public function delete($id)
    {
        $result = new conn();
        $sql = "DELETE FROM MyGuests WHERE id= $id ";
        $abc = $result->connection($sql);
        return $abc;
    }

    public function update($id)
    {
        $result = new conn();
        $sql = "UPDATE MyGuests
            SET firstname='$_POST[fname]', lastname='$_POST[lname]', email='$_POST[email]'
                WHERE id=$id ";
        $abc = $result->connection($sql);
        return $abc;
    }
}
