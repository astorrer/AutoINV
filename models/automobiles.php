<?php
include __DIR__ . '/../database/db_configuration.php';

function getAutomobileId($pdo, $value)
  {
    $sql = 'select id from automobiles where id = :value';
    $query = $pdo->prepare($sql);
    $query->bindValue(':value', $value);
    $query->execute();
    $row = $query->fetch();

    return $row[0];
  }

function getMakeId($pdo, $value)
  {
    $sql = 'select id from automobiles where id = :value';
    $query = $pdo->prepare($sql);
    $query->bindValue(':value', $value);
    $query->execute();
    $row = $query->fetch();

    return $row[0];
  }

function getColorId($pdo, $value)
  {
    $sql = 'select id from colors where id = :value';
    $query = $pdo->prepare($sql);
    $query->bindValue(':value', $value);
    $query->execute();
    $row = $query->fetch();

    return $row[0];
  }

function getYearId($pdo, $value)
  {
    $sql = 'select id from years where id = :value';
    $query = $pdo->prepare($sql);
    $query->bindValue(':value', $value);
    $query->execute();
    $row = $query->fetch();

    return $row[0];
  }

?>
