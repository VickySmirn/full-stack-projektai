<?php


//print_r($_POST);
//exit();

//print_r($_SERVER);

//REDIREKTAS IVYKO, IR MES ESAM TOJ PACIOJ DIREKTORIJOI KAIP IR PRIES TAI

print_r($_POST); 

//skaidymas i masyva pagal nurodyta simboli

$request_uri = explode('/', $_SERVER['REQUEST_URI']);

//print_r($request_uri);
//paskutine masyvo reiksme
$file_query = $request_uri[count($request_uri) -1];

$result = explode('?' , $file_query);

//grazina viena funkcija,masyvo sujungimas i masyva pagal nurodyta simboli
$result = implode('?' , $result);

print_r($result);


$dir = './';
$back_link ='';

if(isset($_GET['dir']) AND $_GET['dir'] != '') {
  $dir = $_GET['dir'];

  $path_array = explode('/', $dir);

  print_r($path_array);

  if($dir != './') {
  if(count($path_array) > 1) {
      unset($path_array[count($path_array) - 1]);
      $back_link = implode('/', $path_array);
  } else {
      $back_link = './';
  }
}
}

if(isset($_POST['data_type']) AND $_POST['data_type']=== '1'){
if(isset($_POST['folder_name']) AND $_POST['folder_name'] != '') {
  mkdir($dir . '/' . $__POST['folder_name']);
}

} else {

if(isset($_POST['file_name']) AND $_POST['file_name'] != '') {
  file_put_contents($dir . '/' . $_POST['file_name'], $_POST['file_contents']);
  header('Location: ' . $_SERVER['REQUEST_URI']);
}}

$data = scandir($dir);

 unset($data[0]);

 if($dir === '.') {
    unset($data[1]);
 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<style>
    
.btn {
  background-color:royalblue;
  border: none;
  color: white; 
  padding: 3px 4px;
  border-radius: 3px; 
 margin-left: 5px;
 font-size: 1em;
}


.btn:hover {
  background-color: white;

}

    
.folder
{
    background-color: lightgray;
    border: none;
    color: white;

}

.copy {
    background-color:royalblue;
  border: none;
  color: white;
  padding: 3px 4px; 
  border-radius: 3px;
  margin-left: 5px;
  font-size: 1em;
  cursor: pointer;
 }
 .copy:hover {
  background-color: white;

}

.link {
  background-color:royalblue;
  border: none;
  color: white;
  padding: 3px 4px; 
  border-radius: 3px;
  margin-left: 5px;
  font-size: 1em;
  cursor: pointer;

}
.link:hover {
  background-color: white;


}
.rename {
  background-color:royalblue;
  border: none;
  color: white;
  padding: 3px 4px; 
  border-radius: 3px;
  margin-left: 5px;
  font-size: 1em;
  cursor: pointer;
  }

    .rename:hover {
  background-color: white;

}
   
.direct-link {
  background-color:royalblue;
  border: none;
  color: white;
  padding: 3px 4px; 
  border-radius: 3px;
  margin-left: 5px;
  font-size: 1em;
  cursor: pointer;
}

             </style>
    </head>
    <tbody>
        <?php if($back_link) { ?>
        <tr>
            <td><a href="?dir=<?= $back_link ?>">Grizti i tevyni folderi<a/></td>
        </tr>
    <?php } ?>
    <?php
        foreach($data as $folder) 
            $path = $dir === './' ? $folder : $dir . '/' . $folder;

            if($dir === './') {
                $path = $folder;
            }
            ?>
            <tr>
        
                <td><?= (is_dir($path)) ? '<a href="?dir=' . $path . '">' . $folder . '</a>' : $folder ?></td>
            </tr>
            <?php  ?>
    </tbody>




    <body>



       <table bgcolor="whitesmoke">
        <tr bgcolor="white" >
<th width="80">
    <div class="mb-3">
    <input type="checkbox" class="custom-control-input" id="js-select-all-items" onclick="checkbox_toggle()">
    </div>
</th>

<th width="110">Name</th>
<th width="110">Size</th>
<th width="180">Modified</th>
<th width="80">Perm</th>
<th width="200">Owner</th>
<th width="180">Actions</th>

</tr>
<tr bgcolor="lightgrey" align="cente">
    <th>
  
    <div class="mb-3">
    <input type="checkbox" class="custom-control-input" id="js-select-all-items" onclick="checkbox_toggle()">
    </div> 
    </th>
    
    <td>
      <a title="Audio"href="http://localhost/full-stack-projektai/ASSIGNMENT/audio.php" style="text-decoration:none;">
     <button class="folder"><i class="fa fa-folder"></i></button>Audio</>
    </td>
    
  
  
    <td>Folder</td>
    <td>12/02/2022 5:43 AM</td>
    <td>0775</td>
    <td>tinyfilemanager:tinyfilemanager</td>
    <td class="inline-actions">



    <a title="Delete" href="" onclick="confirmDailog(event, '1028','Delete Folder','Audio', this.href);"> 
    <button class="btn"><i class="fa fa-trash"></i></button>
    <a title="Rename" href="#" onclick="rename('', 'Audio');return false;">
    <button class="rename"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
    <a title="Copy to..." href="">
    <button class="copy"><i class="fa fa-copy"></i></button>
    <a title="Direct link" href="" target="_blank">
    <button class="link"><i class="fa fa-link"></i></button>
    
</td>
</tr>   

<tr bgcolor="whitesmoke" align="centre">
    <th>
    <div class="mb-3">
    <input type="checkbox" class="custom-control-input" id="js-select-all-items" onclick="checkbox_toggle()">
    </div> 
    </th>
    <td><button class="folder"><i class="fa fa-folder"></i></button> Demo</td>
    <td>Folder</td>
    <td>12/02/2022 5:43 AM</td>
    <td>0775</td>
    <td>tinyfilemanager:tinyfilemanager</td>
    <td class="inline-actions">

    <a title="Delete" href="" onclick="confirmDailog(event, '1028','Delete Folder','Demo', this.href);"> 
    <button class="btn"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
    <a title="Rename" href="#" onclick="rename('', 'Demo');return false;">
    <button class="rename"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
    <a title="Copy to.." href=""></a>
    <button class="copy"><i class="fa fa-files-o" aria-hidden="true"></i></button>
    <a title="Direct link" href="" target="_blank">
    <button class="link"><i class="fa fa-link"></i></button>
    </td>
    
</tr>
<tr bgcolor="lightgrey" align="centre">
    <th>
    <div class="mb-3">
    <input type="checkbox" class="custom-control-input" id="js-select-all-items" onclick="checkbox_toggle()">
    </div> 
    </th>
    <td><button class="folder"><i class="fa fa-folder"></i></button>
        Embed</td>
    <td>Folder</td>
    <td>12/02/2022 5:43 AM</td>
    <td>0775</td>
    <td>tinyfilemanager:tinyfilemanager</td>
    <td class="inline-actions">

    <a title="Delete" href="" onclick="confirmDailog(event, '1028','Delete Folder','Embed', this.href);"> 
    <button class="btn"><i class="fa fa-trash"></i></button>
    <a title="Rename" href="#" onclick="rename('', 'Embed');return false;">
    <button class="rename"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
    <a title="Copy to..." href="copy-to.txt">
    <button class="copy"><i class="fa fa-copy"></i></button>
    <a title="Direct link" href="" target="_blank">
    <button class="link"><i class="fa fa-link"></i></button>
    
    </td>
</tr>
<tr bgcolor="lightgrey" align="centre">
    <th>
    <div class="mb-3">
    <input type="checkbox" class="custom-control-input" id="js-select-all-items" onclick="checkbox_toggle()">
    </div> 
    </th>
    <td><button class="folder"><i class="fa fa-folder"></i></button>
        Create new file or folder</td>
    <td>File/Folder</td>
    <td>
    <form method="POST">
     <div class="mb-3">
        <label>Select data type</label>
        <select name="data_type" class="form-control">
            <option value="1">Folder</option>
            <option value="2">File</option>
            
        </select>
          </div>  
    </form>
          </td>

<tr bgcolor="lightgrey" align="centre">
    <th>
    <div class="mb-3">
    <input type="checkbox" class="custom-control-input" id="js-select-all-items" onclick="checkbox_toggle()">
    </div> 
    </th>
    <td><button class="folder"><i class="fa fa-folder"></i></button>
        Create new file or folder</td>
    <td>Folder/Folder</td>

    <td>
      <form method="POST">
    <div class="file">    
         <div class="mb-3"> 
        <label>File name</label>
        <input type="text" name="file name" class="form-control">
     </div>
          </div>
    
            <div class="folder">
     <div class="mb-3">
        <label>Folder name</label>
        <input type name="folder name" class="form-control"></>
        </div>
            </div>
     <div class="mb-3">
        <label>File content</label>
        <textarea type name="file content" class="form-control"></textarea>
        </div>
     <div class="mb-3">
     <button class="btn btn-primary">Add</button>
          </div>

     </form>
     </div> 
    </th>
</tr>
       </table>
<script>
//document.querySelector('.file').style.display= 'none';
//document.querySelector('[name="data_type]').addEventListener('change',(e)=> {
 // if(e.target.value === '1') {
   // document.querySelector('.file').style.display= 'none';
    //document.querySelector('.folder').style.display= 'block';
 // } else {
   // document.querySelector('.file').style.display= 'block';
    //document.querySelector('.folder').style.display= 'none';
 // }
//});

</script>
      
</body>
</html>

<?php

