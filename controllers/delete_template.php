<?php
// ch4/deltemp.php

include __DIR__ . '/../include/connect.php';
include __DIR__ . '/../include/function.php';

include 'form.html.php';

$id = getItemId($pdo, $_POST['item_id']);

     if ($id == '')
          {
          echo '<br />';
          echo 'Item ' . $_POST['item_id']
                 . ' does not exist in temp. ';
          echo 'Program terminated.';
          exit();
          }
     else
          {
          try
               {
               $sql = 'delete from temp
                           where id = :id';

               $s = $pdo->prepare($sql);
               $s->bindValue(':id', $id);
               $s->execute();

               echo '<br />';
                echo 'Item ' . $_POST['item_id']
                                . ' deleted successfully.';
               }
          catch (PDOException $e)
               {
               $error = 'Error deleting from temp: ' . $e->getMessage();
               include __DIR__ . '/../template/error.html.php';
                echo 'Deletion failed. ';
                echo $sql;
                }
          }
