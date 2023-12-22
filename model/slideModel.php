<?php

    function indexSlide(){
        include_once 'connect/openDB.php';
        $sql = "SELECT * FROM slider";
        $slider = mysqli_query($conn, $sql);
        include_once 'connect/closeDB.php';
        return $slider;
    }

    function storeSlide(){
        $slide_name = $_POST['slide_name'];

        $slide_image = $_FILES['slide_image']['name'];

        $temp_name = $_FILES['slide_image']['tmp_name'];

        include_once 'connect/openDB.php';

        $view_slides = "select * from slider";

        $view_run_slide = mysqli_query($conn,$view_slides);

        $count = mysqli_num_rows($view_run_slide);

        if($count<4){

            move_uploaded_file($temp_name,"view/slides_images/$slide_image");

            $insert_slide = "insert into slider (slide_name,slide_image) values ('$slide_name','$slide_image')";

            $run_slide = mysqli_query($conn,$insert_slide);

            echo "<script>alert('Your new slide image has been inserted')</script>";

        }else{

            echo "<script>alert('You have already inserted 4 slides')</script>";

        }
        include_once 'connect/closeDB.php';
    }

    function editSlide(){
        $id = $_GET['id'];
        include_once 'connect/openDB.php';
        $sql = "SELECT * FROM  slider WHERE slide_id = '$id'";
        $slides = mysqli_query($conn, $sql);
        include_once 'connect/closeDB.php';
        return $slides;
    }

    function updateSlide(){
        $id = $_POST['id'];

        $slide_name = $_POST['slide_name'];

        $slide_image = $_FILES['slide_image']['name'];

        $temp_name = $_FILES['slide_image']['tmp_name'];

        move_uploaded_file($temp_name,"view/slides_images/$slide_image");
        include_once 'connect/openDB.php';

        $update_slide = "UPDATE slider SET slide_name = '$slide_name', slide_image = '$slide_image' WHERE slide_id = '$id'";

        $run_update_slide = mysqli_query($conn,$update_slide);

        include_once 'connect/closeDB.php';
    }

    function destroySlide(){
        //        Lấy id
        $id = $_GET['id'];
        include_once 'connect/openDB.php';
        $sql = "DELETE FROM slider WHERE slide_id = '$id'";
        mysqli_query($conn, $sql);
        include_once 'connect/closeDB.php';
    }

    switch ($action){
        case '':
    //            Lấy dữ liệu từ DB
            $slider = indexSlide();
            break;
        case 'store':
            storeSlide();
            break;
        case 'edit':
            $slides = editSlide();
            break;
        case 'update':
            updateSlide();
            break;
        case 'destroy':
            destroySlide();
            break;
    }



?>