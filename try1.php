<?php
    $string = 'Lorem Ipsum is simply dummy text.';
    $string = substr($string,0,11).'...';



$string    =    'Note: We convert kkdsvajdlbvdav vadvd vdvda vdsv v dvasvvdv v svs vs bs   bsb sbsbs sb s b db d dd ndhbd hd hd   d  ndndnd nd y hd ehyhydehh eh yhy eyh ehet het hethy eshehe a string into an array with explode function. I do not use explode function then the output will be a string as shown in below example.';
$string = (strlen($string) > 1000)?substr($string,0,155).'... <a href="https://google.com/ ">read more </a>' : $string;
echo $string;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>