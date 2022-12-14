<?php
                    $conn = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($conn, 'nongsanviet');
                          mysqli_set_charset($conn, 'utf8');
                    $key = $_POST['id'];
                    $sql = "select * from quan where matinh = '$key'";
                    $query = mysqli_query($conn, $sql);
                    $num = mysqli_num_rows($query);          
                    if($num >0){
                        while($row = mysqli_fetch_array($query)){

                    ?>
                        <option value="<?php echo $row['maquan'];?>"><?php echo $row['tenquan'];?></option>
                <?php
                        }
                    }
                ?>