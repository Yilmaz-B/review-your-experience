    <?php
function getDelete($id)
{
    global $pdo;
    $query = filter_var($id, FILTER_VALIDATE_INT);
    if ($query!= false) {
        $sql = 'DELETE FROM `car`WHERE `id`=:id ';
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        header('location: /admin/products/');
    }
}
?>