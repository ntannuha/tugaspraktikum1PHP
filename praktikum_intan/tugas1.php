<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai</title>
</head>
<body>
    <div class="bg-primary p-5">
    <h1 class="text-center text-white">Student Value Form</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="tugas1.php" method="get" class="mt-3">
            
            <div class="form-group">
                    <label for="nama">Name</label>
                    <input type="text" name="nama" value="" class="form-control">
                </div>

                
            <div class="form-group">
                    <label for="nim">Nim</label>
                    <input type="text" name="nim" value="" class="form-control">
                </div>
                <label for="matkul">Lesson</label>
                <select name="matkul" class="form-select form-control" class="form-control">
                    <option selected>Choose Lesson :</option>
                    <option value="web programming">Web Programming</option>
                    <option value="database">Database</option>
                    <option value="statistika">Statiska</option>
                    <option value="pkn">PKN</option>
                    <option value="UI/UX">UI/UX</option>
                </select>
                <div class="form-group">
                    <label for="uts"> UTS Value</label>
                    <input type="text" name="uts" value="" class="form-control">
                </div>

                
                <div class="form-group">
                    <label for="uas">UAS Value</label>
                    <input type="text" name="uas" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="tugas">Assignment Value</label>
                    <input type="text" name="tugas" value="" class="form-control">
                </div>
                <input type="submit" value="Save" name="proses" class="btn btn-primary btn-sm btn-block">

            </form>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Result
                    </div>

                <ul class="list-group list-group-flush">
                
                <?php
                
                $proses = $_GET['proses'];
                $nama = $_GET['nama']; 
                $nim = $_GET['nim'];
                $mata_kuliah = $_GET['matkul'];
                $uts = $_GET['uts'];
                $uas = $_GET['uas'];
                $tugas = $_GET['tugas'];

                $total_nilai = ($uts+$uas+$tugas)/3;
                
                echo'<li class="list-group-item">Name :'.$nama.'</li>';
                echo'<li class="list-group-item">Nim : '.$nim.'</li>';
                echo'<li class="list-group-item">Lesson: '.$mata_kuliah.'</li>';
                echo'<li class="list-group-item"> UTS Value : '.$uts.'</li>';
                echo '<li class="list-group-item">UAS Value: '.$uas.' </li>';
                echo'<li class="list-group-item">Assignment Value: '.$tugas.' </li>';
                echo'<li class="list-group-item">Value Total:  '.$total_nilai.'</li>';
                
                
                if ($total_nilai >= 85){
                    echo '<li class="list-group-item">Value in Alphabet: A </li>'; 
                }
                elseif ($total_nilai >= 70) {
                    echo '<li class="list-group-item">Value in Alphabet: B </li>';
                }
                elseif ($total_nilai >= 60){
                    echo '<li class="list-group-item">Value in Alphabet: C </li>';
                }
                elseif ($total_nilai >= 40){
                    echo '<li class="list-group-item">Value in Alphabet: D </li>';
                }
                else{
                    echo '<li class="list-group-item">Value in Alphabet: E </li>';
                }
            
                ?>
                    
                </ul>
                </div>

            </div>
            
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Value
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 85 - 100</li>
                    <li class="list-group-item">B : 70 -84</li>
                    <li class="list-group-item">C: 60-79</li>
                    <li class="list-group-item">D : 40 - 59 </li>
                    <li class="list-group-item">E : Less than 40 </li>
                    
                    
                </ul>
                </div>

        </div>
        
    </div>
</body>
</html>
