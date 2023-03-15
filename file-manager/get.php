<?php

//print_r($_GET);
if(
    (isset($_Get['first_name']) AND $_GET['first_name'] !='')
    ) {
$data = implode(',', $_GET);
file_put_contents('data.txt', $data);}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <form>
         <div class="mb-3">
            <label>Jusu vardas</label>
            <input type="text" name="first_name" class="form-control" required />
         </div>
         <div class="mb-3">
            <label>Jusu pavarde</label>
            <input type="text" name="last_name" class="form-control" required />

         </div>
         <div class="mb-3">
            <label>Uzklausos tema</label>
            <input type="text" name="subject" class="form-control" required />

         </div>
         <div class="mb-3">
            <label>Jusu zinute</label>
            <textarea name="message" class="form-control" required ></textarea>

         </div>
         <button class="btn btn-primary">Siusti</button>
    </form>
</div>
</body>
</html>