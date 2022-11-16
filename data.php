<table>
    <?php
        include 'koneksi.php';
        $s_jurusan="";
        $s_keyword="";
        if (isset($_POST['jurusan'])) {
            $s_jurusan = $_POST['jurusan'];
            $s_keyword = $_POST['keyword'];
        }
        $page = (isset($_POST['page']))? $_POST['page'] : 1;
        $limit = 5; 
        $limit_start = ($page - 1) * $limit;
        $no = $limit_start + 1;

        $search_jurusan = '%'. $s_jurusan .'%';
        $search_keyword = '%'. $s_keyword .'%';
        $kolom = 4;    
        $i = 1;        

        $query = "SELECT * FROM tbl_mahasiswa_search WHERE jurusan LIKE ? AND ( nama_mahasiswa LIKE ? OR jurusan LIKE ? OR jenis_kelamin LIKE ? OR tgl_masuk LIKE ? ) ORDER BY id desc LIMIT ?, ?";
        $dewan = $db1->prepare($query);
        $dewan->bind_param('sssssss', $search_jurusan, $search_keyword, $search_keyword, $search_keyword, $search_keyword, $limit_start, $limit);
        $dewan->execute();
        $res = $dewan->get_result();

        while ($row = $res->fetch_assoc()) {
           if(($i) % $kolom== 1) {    
                echo'<tbody>';         
                echo'<tr>';         
            }  
            echo '<td align="center" width="100%">';
            echo '<div class="card" style="width: 17rem;">';
            echo '<img class="card-img-top" src="https://dummyimage.com/300.png/09f/fff" alt="Card image cap">';
            echo '<div class="card-body">';
            echo '<p class="card-text"><b>'.$row['nama_mahasiswa'].'</b></p>';
            echo '<p class="card-text"><b>'.$row['jenis_kelamin'].'</b></p>';
            echo '<p class="card-text"><b>'.$row['jurusan'].'</b></p>';
            echo '<p class="card-text"><b>'.$row['alamat'].'</b></p>';
            echo '</div>';
            echo '</div> &nbsp;';
            echo '</td> &emsp;';
        
            if(($i) % $kolom== 0) {    
                echo'</tr>';   
                echo'</tbody>';                             
            }
            $i++;
        }
    ?>
</table>

        <?php
          $query_jumlah = "SELECT count(*) AS jumlah FROM tbl_mahasiswa_search";
          $dewan1 = $db1->prepare($query_jumlah);
          $dewan1->execute();
          $res1 = $dewan1->get_result();
          $row = $res1->fetch_assoc();
          $total_records = $row['jumlah'];
        ?>

        <p>Total baris : <?php echo $total_records; ?></p>
       
        <nav class="mb-5">
          <ul class="pagination justify-content-end">
            <?php
              $jumlah_page = ceil($total_records / $limit);
              $jumlah_number = 1; //jumlah halaman ke kanan dan kiri dari halaman yang aktif
              $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
              $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page;    

              if($page == 1){
                echo '<li class="page-item disabled"><a class="page-link" href="#">First</a></li>';
                echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
              } else {
                $link_prev = ($page > 1)? $page - 1 : 1;
                echo '<li class="page-item halaman" id="1"><a class="page-link" href="#">First</a></li>';
                echo '<li class="page-item halaman" id="'.$link_prev.'"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
              }

              for($i = $start_number; $i <= $end_number; $i++){
                $link_active = ($page == $i)? ' active' : '';
                echo '<li class="page-item halaman '.$link_active.'" id="'.$i.'"><a class="page-link" href="#">'.$i.'</a></li>';
              }

              if($page == $jumlah_page){
                echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
                echo '<li class="page-item disabled"><a class="page-link" href="#">Last</a></li>';
              } else {
                $link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
                echo '<li class="page-item halaman" id="'.$link_next.'"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
                echo '<li class="page-item halaman" id="'.$jumlah_page.'"><a class="page-link" href="#">Last</a></li>';
              }
            ?>
          </ul>
        </nav>