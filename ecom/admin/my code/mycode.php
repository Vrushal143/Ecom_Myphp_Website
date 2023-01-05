//For Delete Category btn
//If Delete button is clicked...
if(isset($_POST['delete_category_btn'])){

    $category_id = mysqli_real_escape_string($con, $_POST['category_id']);

    $category_query = "SELECT * FROM categories WHERE id='$category_id' ";

    $cate_query_run = mysqli_query($con, $cate_query);
    $category_data = mysqli_fetch_array($cate_query_run);
    $image = $category_data['image'];

    $delete_query = "DELETE FROM categories WHERE id='$category_id' ";
    
    $delete_query_run = mysqli_query($con, $delete_query);

    if($delete_query_run)
    {
        
        if (file_exists('./uploads/' .$image));
        {
            unlink('./uploads/' .$image);
        }

        $_SESSION['status'] = "Category Deleted Successfully!";
        header('Location: category.php');

    }
    else{

        $_SESSION['status'] = "Something Went Wrong!";
        header('Location: category.php');

    }


}



