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
//$path = 'FM_ROOT_PATH';
//$dir = 'FM_ROOT';

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

if(isset($_POST['file_name']) AND $_POST['file_name'] != '') {
    file_put_contents($dir . '/' . $_POST['file_name'], $_POST['file_contents']);
    header('Location: ' . $_SERVER['REQUEST_URI']);
}


//istrinti faila/folderi


//if(isset($_GET['del']) && !FM_READONLY) {
   // $dir = FM_ROOT_PATH;
    //$del = str_replace( '/', '', fm_clean_path($_GET['del'] ) );
    //if ($del != '' && $del != '..' && $del != '.') {  
        //$path = FM_ROOT_PATH;
        //$del = fm_clean_path;
        //if (FM_PATH != '') {
           // $path .= '/' . FM_PATH; 
        //}
           // $is_dir = is_dir($path . '/' . $del);
           // if (fm_delete($path . '/' . $del)) {
               // $msg = $is_dir ? 'Folder <b>%</b> deleted' : 'File <b>%</b> deleted' ;
                //fm_set_msg(sprintf($msg, fm_enc($del)));
          // } else {
              //  $msg = $is_dir ? 'Folder <b>%</b> not deleted' : 'File <b>%</b> npt deleted' ;
              //  fm_set_msg(sprintf($msg, fm_enc($del)), 'error'); 
            //}
   // }
//}

  

 $data = scandir($dir);

 unset($data[0]);

 if($dir === '.') {
    unset($data[1]);
 }

 //unset($data[1]);
 //if($dir === '.'){
   // unset($data[2]);
 //}



?> <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
        </tr>
    </thead>
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
</table>
<h2>Create New File Or Folder</h2>
     <form method="POST">
     <div class="mb-3">
        <label>Select data type</label>
        <select name="data-type" class="form-control">
            <option value="1">Folder</option>
            <option value="2">File</option>
        </select>
     </div>

     <div class="mb-3">
        <label>File name</label>
        <input type="text" name="file name" class="form-control" />
     </div>
     <div class="mb-3">
        <label>Folder name</label>
        <input type name="folder name" class="form-control"></>
        </div>
     <div class="mb-3">
        <label>File content</label>
        <textarea type name="file content" class="form-control"></textarea>
        </div>
     <div class="mb-3">
        <button class="btn btn-primary">Add</button>
        </div>
     </form>
     </div> </th>
</tr>
       </table>
<script>
document.querySelector('.file').style.display= 'none';
document.querySelector('[name="data_type]').addEventListener('change',(e)=> {
  if(e.target.value === '1') {
    document.querySelector('.file').style.display= 'none';
    document.querySelector('.folder').style.display= 'block';
  } else {
    document.querySelector('.file').style.display= 'block';
    document.querySelector('.folder').style.display= 'none';
  }
});

</script>

</body>
</html>

<?php

    