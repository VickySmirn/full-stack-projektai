<?php






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audio</title>
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

.direct-link:hover {
    background-color: white;
}
.back {
    background-color:royalblue;
  border: none;
  color: white;
  padding: 10px 10px; 
  border-radius: 5px;
  margin-left: 5px;
  font-size: 1em;
  cursor: pointer;
}
.back:hover {
    background-color: white;
}

.Download {
  background-color:royalblue;
  border: none;
  color: white;
  padding: 3px 4px; 
  border-radius: 3px;
  margin-left: 5px;
  font-size: 1em;
  cursor: pointer;
}
.Download:hover {
    background-color: white;
}


             </style>
<body>
                               


<table bgcolor="whitesmoke">
<tr bgcolor="white" >
<th width="80">
    <div class="mb-3">
    <a title="Back" href="http://localhost/full-stack-projektai/ASSIGNMENT/lentele.php" onclick="confirmDailog(event, '1028','Back', this.href);"> 
    <button class="back"><i class="fa-solid fa-circle-arrow-left" aria-hidden="true"></i></button>
    </div>
</th>
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
    

    <button class="music"><i class="fa solid fa-music"></i></button> Horse.pm3</td>
    <td>28.24 KB</td>
    <td>12/02/2022 5:43 AM</td>
    <td>0664</td>
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
    <a title="Download" href="" target="_blank">
    <button class="Download"><i class="fa-sharp fa-solid fa-download"></i></button>
    
</td>
</tr>  
<tfoot>
    
</tr>
<tr>
<td class="gray" colspan="7" rowspan="1">
 <span class="badge text-bg-light border-radius-0">Full size:28.24 KB</span>                           
 <span class="badge text-bg-light border-radius-0">File: 1</span>                            
  <span class="badge text-bg-light border-radius-0">Folder: 0</span>                      
 </td>
 
</tfoot>

<table bgcolor="whitesmoke">
<div class="col-xs-12 col-sm-9">   


<ul class="button-meniu">
<a href="#/select-all" class="btn btn-small primary btn-2">
    </i> Select all </a>
<a href="#/unselect-all" class="btn btn-small primary btn-2" onclick="unselect_all();return false;">
<i class="fa fa-window-close"></i> Unselect all </a></li>
 <a href="#/invert-all" class="btn btn-small btn-outline-primary btn-2" onclick="invert_all();return false;">
 <i class="fa fa-th-list"></i> Invert Selection </a>         
<a href="javascript:document.getElementById('a-delete').click();" class="btn btn-small btn-outline-primary btn-2">
<i class="fa fa-trash"></i> Delete </a>       
<a href="javascript:document.getElementById('a-zip').click();" class="btn btn-small btn-outline-primary btn-2">
<i class="fa fa-file-archive-o"></i> Zip </a>         
<a href="javascript:document.getElementById('a-tar').click();" class="btn btn-small btn-outline-primary btn-2">
<i class="fa fa-file-archive-o"></i> Tar </a>        
 <a href="javascript:document.getElementById('a-copy').click();" class="btn btn-small btn-outline-primary btn-2">
<i class="fa fa-files-o"></i> Copy </a>
     </ul>        
    </div>  


</body>
</html>



<script>
  

let main = document.getElementById('js-select-all-items');
let select = document.getElementByClassName('custom-control-input');

main.onclick = ()=>{
    if (main.checked == true) 
    {
        for(let i=0; i<select.lenght; i++) 
        {
            select[i].checked = true;
            document.querySelector('button').style.display ='block'
        }
    }
    else 
    {
        for(let i=0; i<select.lenght; i++) 
        {
            select[i].checked = false;
            document.querySelector('button').style.display ='none'
        }
    }
} 
</script>