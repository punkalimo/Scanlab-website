<script>
    function showConfirm(id){
        var c = confirm("Are you sure you want to remove this item? Changes can't be undone!");
        if(c){
            window.location="audioOverview.php?delete=" +id;
        }
        
    }
    </script>
<?php
require ('Module/audiomodule.php');
class audiocontroller {
     function AudioOverviewTable(){
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
        $audioArray=$this->GetAudioByType('%');
        foreach ($audioArray as $key=> $value){
            $result=$result.
                    "<tr>
                    <td><a href='audioAdd.php?update=$value->id'>Update</a><td>
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
    function CreateAudioDropDownList(){
        $audiomodule=new audiomodule(); 
        $result="<form aciton='' method='post' width='200'>
        Please Select Accessory Type:
        <select name='types'>
        <option value='%'>All</option>
        ".$this->CreateOptionValues($audiomodule->GetAudioTypes()).
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
    function CreateAudioTables($types){
        $audiomodule=new audiomodule();
        $audioArray =$audiomodule->GetAudioByType($types);
        $result="";
        foreach ($audioArray as $key=>$audio){
            $result=$result."<table class='table'>
        <tr>
            <th rowspan='6' width='150px'><img runat='server' src='$audio->image' height='150px'
    width='200px'/></th>
            <th width='75px'>Name: </th>
            <td>$audio->name</td>
        </tr>
        <tr>
            <th>Type: </th>
            <td>$audio->type</td>
        </tr>
        <tr>   <th>Price: </th>
            <td>K$audio->price</td>
        </tr>
        <tr>
            <th>Description: </th>
            <td>$audio->description</td>
        </tr>
    </table>"
                    . "<br>";
        }
        return $result;
    }
    function GetImage(){
        $handle=  opendir("images/sound systems and accessories");
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
    function InsertAudio(){
        $name=$_POST['txtName'];
        $price=$_POST['txtPrice'];
        $type=$_POST['ddlType'];
        $description=$_POST['txtDescription'];
        $image=$_POST['ddImage'];
        $audio=new audioEntity(-1, $name, $price, $image, $description, $type);
        $audioModule=new audiomodule();
        $audioModule->InsertAudio($audio);
    }
    function UpdateAudio(){
         $name=$_POST['txtName'];
        $price=$_POST['txtPrice'];
        $type=$_POST['ddlType'];
        $description=$_POST['txtDescription'];
        $image=$_POST['ddImage'];
        $audio= new audioEntity($id, $name, $price, $image, $description, $type);
        $audioModule= new audiomodule();
        $audioModule->UpdateAudio($id, $audio);
    }
            function DeleteAudio($id){
        $audioModule= new audiomodule();
        $audioModule->DeleteAudio($id);
    }
    function GetAudioById($id){
        $audioModule=new audiomodule();
        return $audioModule->GetAudioById($id);
    }
    function GetAudioByType($type){
        $audioModule=new audiomodule();
        return $audioModule->GetAudioByType($type);
        
    }
    function GetAudioTypes(){
        $audioModule= new audiomodule();
       return $audioModule->GetAudioTypes();
    }
}
