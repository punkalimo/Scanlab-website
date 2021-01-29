<script>
    function showConfirm(id){
        var c = confirm("Are you sure you want to remove this item? Changes can't be undone!");
        if(c){
            window.location="SparesOverview.php?delete=" +id;
        }
        
    }
    </script>
<?php
require ('Module/sparesmodule.php');
class sparescontroller {
    function SparesOverviewTable(){
        $result="<table class='table'>
               <tr>
               <td></td>
               <td></td>
               <td><b></b></td>
               <td><b>ID</b></td>
               <td><b>Name</b></td>
               <td><b>Type</b></td>
               <td><b>Price</b></td>
               <td><b>Description</b></td>
               </tr>
               ";
        $sparesArray=$this->GetSparesByType('%');
        foreach ($sparesArray as $key=> $value){
            $result=$result.
                    "<tr>
                    <td><a href='sparesAdd.php?update=$value->id'>Update</a><td>
                    <td><a href='#' onclick='showConfirm($value->id)'>Delete</a></td>
                    <td>$value->id</td>
                    <td>$value->name</td>
                    <td>$value->type</td>
                    <td>$value->price</td>
                    <td>$value->description</td>
                    </tr>";
        }
        $result=$result . "</table>";
        return $result;
    }
            function CreateSparesDropDownList(){
        $sparesmodule=new sparesmodule(); 
        $result="<form aciton='' method='post' width='200'>
        Please Select Vehicle Name:
        <select name='types'>
        <option value='%'>All</option>
        ".$this->CreateOptionValues($sparesmodule->GetSparesTypes()).
        "</select>
        <input class='btn btn-danger  btn-sm' type='submit' value='Search'/></form>";
return $result;
    }
    function CreateOptionValues(array $valueArray){
        $result="";
        foreach ($valueArray as $value){
            $result=$result."<option value='$value'>$value</option>";
        }
        return $result;
    }
    function CreateSparesTables($types){
        $sparesmodule=new sparesmodule();
        $sparesArray =$sparesmodule->GetSparesByType($types);
        $result="";
        foreach ($sparesArray as $key=>$spares){
            $result=$result."<table class='table'>
        <tr>
            <th rowspan='6' width='250px'><img runat='server' src='$spares->image' height='150px'
    width='200px'/></th>
            <th width='75px'>Name: </th>
            <td>$spares->name</td>
        </tr>
        <tr>
            <th>Type: </th>
            <td>$spares->type</td>
        </tr>
        <tr>   <th>Price: </th>
            <td>K$spares->price</td>
        </tr>
        <tr>
            <th>Description: </th>
            <td>$spares->description</td>
        </tr>
    </table>"
                    . "<br>";
        }
        return $result;
    }
    function GetImage(){
        $handle=  opendir("images/truck and trailers");
        while ($image=  readdir($handle)){
           
            $images[]=$image;
        }
        
        $iamgeArray=  array();
        foreach ($images as $image ){
            if(strlen($image)>2){
                array_push($iamgeArray, $image);
            }
        }
        $result=$this->CreateOptionValues($iamgeArray);
        return $result;
    }
    function InsertSpares(){
        $name=$_POST['txtName'];
        $price=$_POST['txtPrice'];
        $type=$_POST['ddlType'];
        $description=$_POST['txtDescription'];
        $image=$_POST['ddImage'];
        $spares=new sparesEntity(-1, $name, $type, $price, $description, $image);
        $sparesModule=new sparesmodule();
        $sparesModule->InsertSpares($spares); 
    }
    function UpdateSpares($id){
         $name=$_POST['txtName'];
        $price=$_POST['txtPrice'];
        $type=$_POST['ddlType'];
        $description=$_POST['txtDescription'];
        $image=$_POST['ddImage'];
        $spares=new sparesEntity($id, $name, $type, $price, $description, $image);
        $sparesModule= new sparesmodule();
        $sparesModule->UpdateSpares($id, $spares);
    }
    function DeleteSpares($id){
        $sparesModule=new sparesmodule();
        $sparesModule->DeleteSpares($id);
    }
    function GetSparesById($id){
        $sparesModule=new sparesmodule();
        return $sparesModule->GetSparesById($id);
    }
    function GetSparesByType($type){
        $sparesModule= new sparesmodule();
        return $sparesModule->GetSparesByType($type);
    }
    function GetSparesTypes(){
        $sparesModule=new sparesmodule();
        return $sparesModule->GetSparesTypes();
        
    }
}
